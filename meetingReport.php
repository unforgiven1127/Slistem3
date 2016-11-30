
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

/*$subject = "test";
$message = "test msg";

$oMail = CDependency::getComponentByName('mail');

$oMail->createNewEmail();
$oMail->setFrom(CONST_CRM_MAIL_SENDER, 'Slistem notification');

$oMail->addRecipient('munir_anameric@hotmail.com', 'Munir Anameric');
$oMail->addCCRecipient('munir@slate-ghc.com','Munir Anameric');

$oMail->send($subject, $message);*/

$meetingArray = array();

$oDB = CDependency::getComponentByName('database');
$sQuery = "SELECT l.loginpk, l.firstname, l.lastname, slm.sl_meetingpk, slm.date_created, slm.date_meeting, slm.candidatefk, slm.created_by,slm.date_met, slm.attendeefk, cp.grade
			FROM sl_meeting slm
			INNER JOIN login l ON l.loginpk = slm.attendeefk
			INNER JOIN sl_candidate_profile cp on cp.candidatefk = slm.candidatefk
			WHERE slm.date_met >= '2013-01-01 00:00:00' AND slm.meeting_done = '1'";

$db_result = $oDB->executeQuery($sQuery);

$result = $db_result->getAll();

foreach ($result as $key => $value)
{
	$candidate_id = $value['candidatefk'];
	$assigned_user = $value['attendeefk'];
	$complete_date = $value['date_met'];

	if(isset($meetingArray[$candidate_id]))
	{
		$newArray = $meetingArray[$candidate_id];
		var_dump($newArray);
		echo '<br><br>';

	}
	else
	{
		$meetingArray[$candidate_id][$assigned_user][$complete_date]['1']['0'];
	}
}

/*if( mail('munir_anameric@hotmail.com', 'test subject', 'hello this is a test') ){

    echo 'Mail was sent';
} else {
    echo 'Couldn\'t send the mail';
}*/