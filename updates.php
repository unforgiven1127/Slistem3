
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
//phpinfo();

//imap_timeout(IMAP_OPENTIMEOUT, 10);//hata gitmis gorunuyor.

/*echo 'json okuma <br><br>';

echo file_exists("login_system_history.json");
echo '<br><br>';

$str = file_get_contents('login_system_history.json');

$json = json_decode($str, true);

echo '<pre>' . print_r($json, true) . '</pre>';*/

echo 'Look for emails... ';

    if(!CONST_PHPMAILER_SMTP_LOGIN)
      echo 'true';

    imap_timeout(IMAP_OPENTIMEOUT, 5);
    $oMailBox = imap_open ('{'.CONST_PHPMAILER_SMTP_HOST.':'.CONST_MAIL_IMAP_PORT.'/imap/ssl/novalidate-cert}inbox', CONST_PHPMAILER_SMTP_LOGIN, CONST_PHPMAILER_SMTP_PASSWORD);
    if($oMailBox === false)
    {
      assert('false; // could not connect to '.CONST_PHPMAILER_SMTP_HOST.' / '.CONST_PHPMAILER_SMTP_LOGIN);
      echo 'false';
    }

    $oBoxInfo = imap_mailboxmsginfo($oMailBox);
    if(!$oBoxInfo)
    {
      assert('false; // could not fetch mailbox info to '.CONST_EVENT_SYNC_SERVER.' / '.CONST_EVENT_SYNC_MAILBOX);
      imap_close($oMailBox);
      echo 'false';
    }

    dump($oBoxInfo);

    if(empty($oBoxInfo->Unread))
    {
      echo 'no new mail to import';
      imap_close($oMailBox);
      echo 'true';
    }


    //$oFiltered = imap_search ($oMailBox, 'FROM "slistem@slistem.com" SINCE "'.date('Y-m-d', strtotime('-7 days')).'"' , int $options = SE_FREE [, string $charset = NIL ]] )
    //$asFiltered = imap_search($oMailBox, 'ALL', SE_FREE, 'utf-8');
    $asFiltered = imap_search ($oMailBox, 'UNSEEN', SE_FREE, 'utf-8');

    if($asFiltered == false)
    {
      echo 'All messages seen, no new email to import (or error ?)';
      imap_close($oMailBox);
      echo 'true';
    }

    $sMessageIds = implode(',', $asFiltered);
    $asFiltered = imap_fetch_overview($oMailBox, $sMessageIds);
    if(empty($asFiltered))
    {
      echo 'could not load email overview ';
      imap_close($oMailBox);
      echo 'false';
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
        echo 'Sender is not a slate email address, ignored (!!! should be removed FROM inbox !!!)<br />';
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
        $bMoved = imap_mail_move($oMailBox, $oEmail->msgno, 'inbox/'.$sMovedTo);

        if(!$bMoved)
          assert('false; /* email could not be moved ['.$oEmail->msgno.' , inbox/'.$sMovedTo.'] */ ');
        else
          dump('Email #'.$oEmail->msgno.' moved to '.$sMovedTo);
      }
    }

    imap_setflag_full($oMailBox, $sMessageIds, '\\Seen', ST_UID);
    imap_close($oMailBox, CL_EXPUNGE);
    


/*imap_timeout(IMAP_OPENTIMEOUT, 5);
$oMailBox = imap_open ('{'.CONST_PHPMAILER_SMTP_HOST.':'.CONST_MAIL_IMAP_PORT.'/imap/ssl/novalidate-cert}inbox', CONST_PHPMAILER_SMTP_LOGIN, CONST_PHPMAILER_SMTP_PASSWORD);
if($oMailBox === false)
{
	echo 'ERROR';
	//assert('false; // could not connect to '.CONST_PHPMAILER_SMTP_HOST.' / '.CONST_PHPMAILER_SMTP_LOGIN);
}
else
{
	echo 'mail box: '.$oMailBox.'<br><br>';
	echo 'OK<br><br>';
	var_dump($oMailBox);
	echo '<br><br>';

	$oBoxInfo = imap_mailboxmsginfo($oMailBox);
	var_dump($oBoxInfo);

	echo '<br><br>';

	$asFiltered = imap_search($oMailBox, 'ALL', SE_FREE, 'utf-8');
	var_dump($asFiltered);

	$sMessageIds = implode(',', $asFiltered);
    $asFiltered = imap_fetch_overview($oMailBox, $sMessageIds);

    echo '<br><br>';
    var_dump($asFiltered);

    $asEmail = CDependency::getCpLogin()->getUserEmailList();

    $asEmail = array_flip($asEmail);

    echo '<br><br>';
    var_dump($asEmail);

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

    foreach($asFiltered as $oEmail)
    {
    	$sFrom = $oEmail->from;
    	$to = $oEmail->to;
    	$asSubject = imap_mime_header_decode($oEmail->subject);

    	echo '<br><br>';
    	var_dump($to);
    }
}

/*ini_set("log_errors", "On");
ini_set("error_log", "/var/log/apache2/error.log");
error_log( "Hello, errors!" );
phpinfo();
$apache_errorlog = file_get_contents('/var/log/apache2/error.log');
var_dump($apache_errorlog);

$sDate = date('Y-m-d H:i:s');
$subject = "DUPLICATE TEST SUBJECT";
$message = "DUPLICATE Date&Time: ".$sDate;

$oMail = CDependency::getComponentByName('mail');

$oMail->createNewEmail();
$oMail->setFrom(CONST_CRM_MAIL_SENDER, 'Slistem notification');

$oMail->addRecipient('munir@slate-ghc.com', 'Munir Anameric');
//$oMail->addCCRecipient('peter.mears@sentree.jp','Peter Mears');
//$oMail->addRecipient('rkiyamu@slate.co.jp', 'Rossana Kiyamu');
//$oMail->send($subject, $message);

/*$meetingArray = array();

$oDB = CDependency::getComponentByName('database');
$sQuery = "SELECT * FROM sl_position_link WHERE date_created <= '2014-01-01 00:00:00' AND active = 1 group by candidatefk, positionfk";

$db_result = $oDB->executeQuery($sQuery);

$result = $db_result->getAll();


foreach ($result as $key => $value)
{
	$positionfk = $value['positionfk'];
	$candidatefk = $value['candidatefk'];
	$date_created = '2016-12-20 20:00:00';
	$created_by = '101';
	$status = '151';
	$in_play = '0';
	$comment = 'auto expire for old candidates';
	$date_expire = '2025-12-20 20:00:00';
	$active = '1';
echo $candidatefk."<br><br>";
	$sQuery = "INSERT INTO sl_position_link (`positionfk`,`candidatefk`, `date_created`, `created_by`, `status`, `in_play`, `comment`, `date_expire`, `active`) VALUES('".$positionfk."','".$candidatefk."','".$date_created."','".$created_by."','".$status."','".$in_play."','".$comment."','".$date_expire."','".$active."')";

	//$db_result = $oDB->executeQuery($sQuery);
}

//echo $sQuery;
/*if( mail('munir_anameric@hotmail.com', 'test subject', 'hello this is a test') ){

    echo 'Mail was sent';
} else {
    echo 'Couldn\'t send the mail';
}*/