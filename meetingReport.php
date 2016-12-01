
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

/** PHPExcel */
//include 'PHPExcel.php';
require_once('common/lib/PHPExcel/Classes/PHPExcel.php');

/** PHPExcel_Writer_Excel2007 */
//include 'PHPExcel/Writer/Excel2007.php';
require_once('common/lib/PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');


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
$sQuery = "SELECT min(m2.sl_meetingpk) as min_date, l.loginpk, l.firstname, l.lastname, slm.sl_meetingpk, slm.date_created, slm.date_meeting, slm.candidatefk, slm.created_by,slm.date_met, slm.attendeefk, cp.grade
			FROM sl_meeting slm
			INNER JOIN login l ON l.loginpk = slm.attendeefk
			INNER JOIN sl_meeting m2 on m2.candidatefk = slm.candidatefk and m2.meeting_done = 1
			INNER JOIN sl_candidate_profile cp on cp.candidatefk = slm.candidatefk
			WHERE slm.meeting_done = '1'
			group by slm.sl_meetingpk"; //slm.date_met >= '2013-01-01 00:00:00' AND

$db_result = $oDB->executeQuery($sQuery);

$result = $db_result->getAll();

foreach ($result as $key => $value)
{
	$candidate_id = $value['candidatefk'];
	$assigned_user = $value['attendeefk'];
	$complete_date = $value['date_met'];
	$first_meeting_id = $value['min_date'];
	$meeting_id = $value['sl_meetingpk'];

	if(!isset($meetingArray[$candidate_id]))
	{
		$meetingArray[$candidate_id] = array();
	}
	if(!isset($meetingArray[$candidate_id][$assigned_user]))
	{
		$meetingArray[$candidate_id][$assigned_user] = array();
		$meetingArray[$candidate_id][$assigned_user]['met'] = 0;
		$meetingArray[$candidate_id][$assigned_user]['remet'] = 0;
	}

	if($first_meeting_id == $meeting_id)//ilk meeting
	{
		$meetingArray[$candidate_id][$assigned_user]['met'] = 1;
	}
	else//remeet
	{
		$meetingArray[$candidate_id][$assigned_user]['remet'] = $meetingArray[$candidate_id][$assigned_user]['remet'] + 1;
	}
}

/*foreach ($meetingArray as $key => $value)
{
	echo $key.' - ';
	var_dump($value);
	echo '<br><br>';
}*/

/** Error reporting */
error_reporting(E_ALL);



// Create new PHPExcel object
echo date('H:i:s') . " Create new PHPExcel object\n";
$objPHPExcel = new PHPExcel();

// Set properties
echo date('H:i:s') . " Set properties\n";
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw");
$objPHPExcel->getProperties()->setLastModifiedBy("Maarten Balliauw");
$objPHPExcel->getProperties()->setTitle("Office 2007 XLSX Test Document");
$objPHPExcel->getProperties()->setSubject("Office 2007 XLSX Test Document");
$objPHPExcel->getProperties()->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.");


// Add some data
echo date('H:i:s') . " Add some data\n";
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Hello');
$objPHPExcel->getActiveSheet()->SetCellValue('B2', 'world!');
$objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Hello');
$objPHPExcel->getActiveSheet()->SetCellValue('D2', 'world!');

// Rename sheet
echo date('H:i:s') . " Rename sheet\n";
$objPHPExcel->getActiveSheet()->setTitle('Simple');

// Save Excel 2007 file
echo date('H:i:s') . " Write to Excel2007 format\n";
$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));

// Echo done
echo date('H:i:s') . " Done writing file.\r\n";

/*if( mail('munir_anameric@hotmail.com', 'test subject', 'hello this is a test') ){

    echo 'Mail was sent';
} else {
    echo 'Couldn\'t send the mail';
}*/