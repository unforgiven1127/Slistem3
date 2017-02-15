
<?php

require_once './common/tracy/src/tracy.php';
use Tracy\Debugger;

//if you want session to be handled in database
require_once './common/lib/db_session.inc.php5';
require_once './common/lib/ChromePhp.php';
//require_once './common/lib/verticalSlider/js/jquery.totemticker.js';

session_start();
header("Cache-Control: no-cache");
header("Pragma: no-cache");

// Connect to redis
$GLOBALS['redis'] = new Redis();
$GLOBALS['redis']->pconnect('127.0.0.1');

ini_set('memory_limit', '-1');
//$nMemory = memory_get_usage();

//prevent infinite loops if assert fires another assert (mailAssert) that is firing a new assert that ...
$_SESSION['assert'] = 0;
$_SESSION['mail_assert'] = 0;

require_once './conf/main_config.inc.php5';
require_once './common/lib/global_func.inc.php5';
require_once './component/dependency.inc.php5';

require_once './conf/custom_config/'.CONST_WEBSITE.'/config.inc.php5';

/*echo "MONGO LOG CONTROL<br><br>";

$username = MONGO_USER;
$password = MONGO_PASS;;

//$connection = new MongoClient("mongodb://${username}:${password}@localhost", array("db" => "slistem"));


try
{
    $mongo = new MongoClient('mongodb://localhost', array(
        'username' => $username,
        'password' => $password,
        'db'       => 'slistem'
    ));
    $slistemMongo = $mongo->selectDB('slistem');
}
catch(MongoConnectionException $e)
{
    die('Error : ' . $e->getMessage());
}

$logsSlistemMongo = new MongoCollection($slistemMongo, 'logs');



$sDate = date('Y-m-d H:i:s');

$newLog = array(
    'date' => $sDate,
    'userfk' => '101',
    'action' => 'MONGO DB TEST',
    'description' => 'test',
    'table' => 'user_history',
    'component' => '555-001_ppav_candi_154310',
    'cp_uid' => '555-001',
    'cp_action' => 'ppav',
    'cp_type' => 'candi',
    'cp_pk' => '416705',
    'uri' => 'https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=154310&pg=ajx',
    'value' => "array ('action' => 'log user history','log_detail' => 'null',)",
    'flag' => 'a',

);

//$logsSlistemMongo->insert($newLog);

$where = array('userfk' => 494,'cp_pk' => 154310);
/*$where = array('$or' => array(
  array("userfk" => "101"),
  array("table" => "user_history_all_view")
));*/
/*$orderBy = array('date' => -1);//(1 : ASC , -1 : DESC)

$dNow = date('Y-m-d');
$startDate = $dNow." 00:00:00";
$endDate = $dNow." 23:59:59";

$pnPk = '310751';
$where = array('cp_pk' => (int)$pnPk);
$limit = 25;
$skip = 0;

$orderBy = '';
$table = 'logs';

//$allLogs = $logsSlistemMongo->find()->sort($orderBy);
$allLogs = getMongoLog($where);
//$allLogs = $logsSlistemMongo->find($where);
$total = $allLogs->count();
$count = 0;
echo 'Total: '.$total;
    echo "<br><br>";
foreach($allLogs as $log)
{
    $count++;
    echo $count;
    echo "<br><br>";
    echo "user: -".$log['userfk']."-<br><br>";
    echo "candidate_id: ".$log['cp_pk']."<br><br>";
    echo "date: ".$log['date']."<br><br>";
    echo "table: ".$log['table']."<br><br>";
    echo "action: ".$log['action']."<br><br>";
    if(isset($log['unixDate']))
        echo "unixDate: ".$log['unixDate']."<br><br>";
    //var_dump($log);
    echo "<br><br>------------------------------------------------------<br><br>";

}*/

//imap_timeout(IMAP_OPENTIMEOUT, 10);//hata gitmis gorunuyor.

/*echo 'json okuma <br><br>';

echo file_exists("login_system_history.json");
echo '<br><br>';

$str = file_get_contents('login_system_history.json');

$json = json_decode($str, true);

echo '<pre>' . print_r($json, true) . '</pre>';*/


    if(isDevelopment())
    {
      dump('!!! never fetch email from local version, real db will miss data !!!');
      return false;
    }


    echo 'Look for emails... ';

    if(!CONST_PHPMAILER_SMTP_LOGIN)
      return true;

    imap_timeout(IMAP_OPENTIMEOUT, 5);
    $oMailBox = imap_open ('{'.CONST_PHPMAILER_SMTP_HOST.':'.CONST_MAIL_IMAP_PORT.'/imap/ssl/novalidate-cert}rkiyamu_sent', CONST_PHPMAILER_SMTP_LOGIN, CONST_PHPMAILER_SMTP_PASSWORD);
    if($oMailBox === false)
    {
      assert('false; // could not connect to '.CONST_PHPMAILER_SMTP_HOST.' / '.CONST_PHPMAILER_SMTP_LOGIN);
      return false;
    }

    $oBoxInfo = imap_mailboxmsginfo($oMailBox);
    if(!$oBoxInfo)
    {
      assert('false; // could not fetch mailbox info to '.CONST_EVENT_SYNC_SERVER.' / '.CONST_EVENT_SYNC_MAILBOX);
      imap_close($oMailBox);
      return false;
    }

    dump($oBoxInfo);

    if(empty($oBoxInfo->Unread))
    {
      echo 'no new mail to import';
      imap_close($oMailBox);
      return true;
    }


    //$oFiltered = imap_search ($oMailBox, 'FROM "slistem@slistem.com" SINCE "'.date('Y-m-d', strtotime('-7 days')).'"' , int $options = SE_FREE [, string $charset = NIL ]] )
    //$asFiltered = imap_search($oMailBox, 'ALL', SE_FREE, 'utf-8');
    $asFiltered = imap_search ($oMailBox, 'UNSEEN', SE_FREE, 'utf-8');

    if($asFiltered == false)
    {
      echo 'All messages seen, no new email to import (or error ?)';
      imap_close($oMailBox);
      return true;
    }

    $sMessageIds = implode(',', $asFiltered);
    $asFiltered = imap_fetch_overview($oMailBox, $sMessageIds);
    if(empty($asFiltered))
    {
      echo 'could not load email overview ';
      imap_close($oMailBox);
      return false;
    }
    //dump($asFiltered); exit();
    echo('<hr />'.count($asFiltered).' found in the mailbox<hr />');



    //====================================================================
    //====================================================================
    //Initialize variables before the look into the mailbox
    $asEmail = CDependency::getCpLogin()->getUserEmailList();

    $asEmail = array_flip($asEmail);

    // Developer filter exclusion
    //$asEmail['dcepulis@slate.co.jp'] = 468;
    $asEmail['munir@slate-ghc.com'] = 468;
    // Fake researcher/consultant emails
    $asEmail['ewright@bcmj.biz'] = 1;
    $asEmail['rhayashi@bcmj.biz'] = 1;
    $asEmail['ksimon@bcmj.biz'] = 1;
    $asEmail['jcartwright@bcmj.biz'] = 1;
    $asEmail['jbrown@bcmj.biz'] = 1;
    $asEmail['janderson@bcmj.biz'] = 1;

    $asAliases = explode(',', CONST_EVENT_SYNC_ALIASES);
    foreach($asAliases as $nKey => $sPatern)
    {
      $asAliases[$nKey] = explode('=', $sPatern);
    }



    //===========================================================================
    //===========================================================================
    //treat emails

    $asCatchAll = explode('@', CONST_MAIL_IMAP_CATCHALL_ADDRESS);
    $sCatchAllDomain = $asCatchAll[1];

    if(!CONST_MAIL_IMAP_CATCHALL_ADDRESS)
    {
      $sAllowedDomain = $sCatchAllDomain;
    }
    else
      $sAllowedDomain = CONST_MAIL_IMAP_ACCEPTED_DOMAIN;

    $asAllowedDomain = explode(',', $sAllowedDomain);
    dump($asAllowedDomain);

    $nCount = 1;
    foreach($asFiltered as $oEmail)
    {
      //default folder the email will be moved to after treated
      $sMovedTo = 'error';

      //--------------------------------------------
      //1. check the sender is a slate email address
      echo('<hr />Found an unread email<br />');

      //From can be formatted as such  "Stephane Boudoux <sboudoux@slate.co.jp>", so we need to clean it

      $sFrom = $oEmail->from;
      if(strpos($sFrom, '<') !== false)
      {
        $asFrom = explode('<', $sFrom);
        $sFrom = trim(str_replace('>', '', $asFrom[1]));
      }

      dump('from: '.$sFrom);
      $asFrom = explode('@', $sFrom);
      $bFoundUser = isset($asEmail[$sFrom]);

      //check if there's an alternative allowed domain
      if(!$bFoundUser)
      {
        $sTestEmail = trim(str_replace($asAllowedDomain, 'slate.co.jp', $sFrom));
        echo '  ==> not a known email address, test alternative domains:  '.$sFrom.' ==> '.$sTestEmail.'<br /><br />';

        if(isset($asEmail[$sTestEmail]))
        {
          $bFoundUser = true;
          echo 'Found alternative user email ['.$sTestEmail.'] for ['.$sFrom.']... keep going <br />';
          $sFrom = $sTestEmail;
          break;
        }
      }


      if(!$bFoundUser)
      {
        echo 'Sender is not a slate email address, ignored (!!! should be removed FROM rkiyamu_sent !!!)<br />';
      }
      else
      {
        //dump($oEmail);
        $sHeader = imap_fetchheader($oMailBox, $oEmail->msgno);
        //dump($sHeader);

        //--------------------------------------------
        //2. We need to look into the header for the specific email address it was bcc to
        //smaller item being "ct1" -> 3 char
        $asMatches = array();
        preg_match_all('/(cc:|bcc:|to:) ([a-z0-9_ \-]{3,})@'.$sCatchAllDomain.'/i', $sHeader, $asMatches);
        if(empty($asMatches[2]))
        {
          echo 'No catchAll address in the header [/(cc:|bcc:|to:) ([a-z0-9_ \-]{3,})\@'.$sCatchAllDomain.'/i]<br />';
        }
        else
        {
          $asToAddress = $asMatches[2];
          foreach($asToAddress as $sTo)
          {
            //--------------------------------------------------
            //look into the email addresses if there's an item pattern
            $asItem = array();

            if(preg_match('/[0-9]{3}-[0-9]{3}__[a-z]{0,10}__[a-z]{0,10}__[0-9]{1,10}$/i', $sTo) === 1)
            {
              dump('found an item std format ['.$sTo.']');
              $asItem = explode('__', $sTo);
            }
            else
            {
              //look for a custom/user pattern ct15555   or   #ct15555   or cp65444 ...
              foreach($asAliases as $asPatern)
              {
                $asPatern[0] = addslashes($asPatern[0]);
                if(preg_match('/^'.$asPatern[0].'[0-9]{1,9}$/i', $sTo) === 1)
                {
                  dump('found an item using the pattern  '.$asPatern[0].' in ['.$sTo.']');
                  $sTo = preg_replace('/'.$asPatern[0].'([0-9]{1,9})$/i', $asPatern[1].'__$1', $sTo);
                  $asItem = explode('__', $sTo);
                  break;
                }
              }
            }
          }


          if(count($asItem) < 4)
          {
            echo 'not an uid__act__typ__pk format <br />';
            dump($asItem);
          }
          else
          {
            echo 'email match an item: '.$sTo;

            //--------------------------------------------------
            //3. exctract the mail content and create a note

            $asNote = array('item_uid' => $asItem[0], 'item_action' => $asItem[1], 'item_type' => $asItem[2], 'item_pk' => (int)$asItem[3],
              'date' => date('Y-m-d H:i:s', $oEmail->udate),  'type' => 'email_sent', 'title' => '', 'content' => '',
              'coworker' => array(), 'notify' => 0, 'add_calendar' => 0, 'custom_type' => 1,
              'reminder_date' => '', 'reminder_time' => '', 'reminder_before' => '', 'reminder_user' => '',  'reminder_message' => '',
              'loginfk' => (int)$asEmail[$sFrom]);

            $asSubject = imap_mime_header_decode($oEmail->subject);
            if(empty($asSubject))
            {
              $asNote['title'] = 'Email to '.$oEmail->to;
            }
            else
              $asNote['title'] = $this->_decodeMailContent($asSubject[0]->text, $asSubject[0]->charset);

            //rich text to plain text MCA
            $count = null;
            $matches = array('"{\*?\\.+(;})|\s?\\[A-Za-z0-9]+|\s?{\s?\\[A-Za-z0-9]+\s?|\s?}\s?"');
            $asNote['title'] = preg_replace($matches,'',$asNote['title'], -1, $count);

            /*0: header
            echo '----------------------- body part 0';
            $sBody = imap_fetchbody($oMailBox, $oEmail->msgno, 0); dump($sBody);*/

            //body part 1 => mail content
            $sBody = imap_fetchbody($oMailBox, $oEmail->msgno, 1);

            /*2 html, attachements, all the dirty crap
            echo '-----------------------  body part 2';
            $sBody = imap_fetchbody($oMailBox, $oEmail->msgno, 2); dump($sBody);*/

            $asBody = imap_mime_header_decode($sBody);
            if(empty($asBody))
            {
              $asNote['body'] = 'Email to <'.$oEmail->to.'>';
            }
            else
            {
              $asNote['body'] = $this->_decodeMailContent($asBody[0]->text, $asBody[0]->charset);
              $asNote['body'] = $this->decode_7bit($asNote['body']);
              $asNote['body'] = str_replace("\n", '<br />', $asNote['body']);
            }

            //rich text to plain text MCA
            $count = null;
            $matches = array('"{\*?\\.+(;})|\s?\\[A-Za-z0-9]+|\s?{\s?\\[A-Za-z0-9]+\s?|\s?}\s?"');
            $asNote['body'] = preg_replace($matches,'',$asNote['body'], -1, $count);

            $asNote['content'] = strip_tags($asNote['body'], '<br><br/><p><span>');

            $asResult = $this->_getEventSave(0, $asNote);
            if(isset($asResult['error']))
              assert('false; /* could not create the note '.$asResult['error'].' */');
            else
            {
              dump('Note inserted ... ');
              $sMovedTo = 'imported';
            }

          }
        }

        $nCount++;
        if($nCount > 100)
          break;
      }

      if($sMovedTo == 'imported')
      {
        imap_delete($oMailBox, $oEmail->msgno);
      }
      else
      {
        $bMoved = imap_mail_move($oMailBox, $oEmail->msgno, 'rkiyamu_sent/'.$sMovedTo);

        if(!$bMoved)
          assert('false; /* email could not be moved ['.$oEmail->msgno.' , rkiyamu_sent/'.$sMovedTo.'] */ ');
        else
          dump('Email #'.$oEmail->msgno.' moved to '.$sMovedTo);
      }
    }

    imap_setflag_full($oMailBox, $sMessageIds, '\\Seen', ST_UID);
    imap_close($oMailBox, CL_EXPUNGE);
    //return true;