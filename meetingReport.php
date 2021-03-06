
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

//ini_set('memory_limit', '-1');
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
//require_once('common/lib/PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');


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

$year = '2014';

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
	$grade = $value['grade'];

	$complete_year = substr($complete_date, 0, 4);;
	//echo $complete_year;
	if($complete_year == $year)
	{
		if(!isset($meetingArray[$candidate_id]))
		{
			$meetingArray[$candidate_id] = array();
		}
		if(!isset($meetingArray[$candidate_id][$assigned_user]))
		{
			$meetingArray[$candidate_id][$assigned_user] = array();
			$meetingArray[$candidate_id][$assigned_user]['met'] = 0;
			$meetingArray[$candidate_id][$assigned_user]['remet'] = 0;
			$meetingArray[$candidate_id][$assigned_user]['noGrade'] = 0;
			$meetingArray[$candidate_id][$assigned_user]['metGrade'] = 0;
			$meetingArray[$candidate_id][$assigned_user]['lowNotable'] = 0;
			$meetingArray[$candidate_id][$assigned_user]['highNotable'] = 0;
			$meetingArray[$candidate_id][$assigned_user]['topShelf'] = 0;
		}

		if($first_meeting_id == $meeting_id)//ilk meeting
		{
			$meetingArray[$candidate_id][$assigned_user]['met'] = 1;
			if($grade == 0)
			{
				$meetingArray[$candidate_id][$assigned_user]['noGrade']++;
			}
			else if($grade == 1)
			{
				$meetingArray[$candidate_id][$assigned_user]['metGrade']++;
			}
			else if($grade == 2)
			{
				$meetingArray[$candidate_id][$assigned_user]['lowNotable']++;
			}
			else if($grade == 3)
			{
				$meetingArray[$candidate_id][$assigned_user]['highNotable']++;
			}
			else if($grade == 4)
			{
				$meetingArray[$candidate_id][$assigned_user]['topShelf']++;
			}
		}
		else//remet
		{
			$meetingArray[$candidate_id][$assigned_user]['remet'] = $meetingArray[$candidate_id][$assigned_user]['remet'] + 1;
		}
	}
}

$counts = array();

foreach ($meetingArray as $key => $value)
{
	foreach ($value as $key2 => $valueInside)
	{
		if(!isset($counts[$key2]))
		{
			$counts[$key2] = array();
			$counts[$key2]['met'] = 0;
			$counts[$key2]['remet'] = 0;

			$counts[$key2]['noGrade'] = 0;
			$counts[$key2]['metGrade'] = 0;
			$counts[$key2]['lowNotable'] = 0;
			$counts[$key2]['highNotable'] = 0;
			$counts[$key2]['topShelf'] = 0;
		}
		$counts[$key2]['met'] = $counts[$key2]['met'] + $valueInside['met'];
		$counts[$key2]['remet'] = $counts[$key2]['remet'] + $valueInside['remet'];

		$counts[$key2]['noGrade'] = $counts[$key2]['noGrade'] + $valueInside['noGrade'];
		$counts[$key2]['metGrade'] = $counts[$key2]['metGrade'] + $valueInside['metGrade'];
		$counts[$key2]['lowNotable'] = $counts[$key2]['lowNotable'] + $valueInside['lowNotable'];
		$counts[$key2]['highNotable'] = $counts[$key2]['highNotable'] + $valueInside['highNotable'];
		$counts[$key2]['topShelf'] = $counts[$key2]['topShelf'] + $valueInside['topShelf'];
	}
	//echo $key.' - ';
	//var_dump($value);
	//echo '<br><br>';
}

/*foreach ($counts as $key => $value)
{
	echo $key.' - ';
	var_dump($value);
	echo '<br><br>';
}*/

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Include PHPExcel */
//require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Slistem")
							 ->setLastModifiedBy("Slistem")
							 ->setTitle("Report")
							 ->setSubject("Report")
							 ->setDescription("Report")
							 ->setKeywords("Report")
							 ->setCategory("Report");


// Add some data
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A2', $year)
            ->setCellValue('C2', 'Meetings')
            ->setCellValue('G2', 'Total candidates and grade');

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A3', 'User')
            ->setCellValue('C3', 'New met')
            ->setCellValue('D3', 'Re-meet')
            ->setCellValue('E3', 'Total');

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('G3', 'Top shelf')
            ->setCellValue('H3', 'High notable')
            ->setCellValue('I3', 'Low notable')
            ->setCellValue('J3', 'Met');

$objPHPExcel->setActiveSheetIndex(0)->mergeCells('C2:E2');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('G2:J2');

$i = 4;
foreach ($counts as $key => $value)
{
	$user_information = getUserInformaiton($key);
	$name = $user_information['firstname'].' '.$user_information['lastname'];
	$met = $value['met'];
	$remet = $value['remet'];
	$total = $met + $remet;

	$topShelf = $value['topShelf'];
	$highNotable = $value['highNotable'];
	$lowNotable = $value['lowNotable'];
	$metGrade = $value['metGrade'];

	$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$i, $name)
            ->setCellValue('C'.$i, $met)
            ->setCellValue('D'.$i, $remet)
            ->setCellValue('E'.$i, $total)
            ->setCellValue('G'.$i, $topShelf)
            ->setCellValue('H'.$i, $highNotable)
            ->setCellValue('I'.$i, $lowNotable)
            ->setCellValue('J'.$i, $metGrade);
    $i++;
}

$style = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    );

$sheet = $objPHPExcel->getActiveSheet();
$sheet->getStyle("A2:G2")->applyFromArray($style);

// Miscellaneous glyphs, UTF-8
/*$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A4', 'Miscellaneous glyphs')
            ->setCellValue('A5', 'asdasasd');*/

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Report');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="meetingReport_'.$year.'.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

ob_end_clean();
ob_start();
$objWriter->save('php://output');
exit;

/*if( mail('munir_anameric@hotmail.com', 'test subject', 'hello this is a test') ){

    echo 'Mail was sent';
} else {
    echo 'Couldn\'t send the mail';
}*/