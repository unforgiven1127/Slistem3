<script>


</script>
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

define('DB_NAME_SLISTEM','slistem');
define('DB_SERVER_SLISTEM', '127.0.0.1');
define('DB_USER_SLISTEM', 'pma_admin');
define('DB_PASSWORD_SLISTEM', 'KVW4PVVAWHASuRDz');

$memory_size = memory_get_usage();
$memory_unit = array('Bytes','KB','MB','GB','TB','PB');
// Display memory size into kb, mb etc.
echo 'Used Memory : '.round($memory_size/pow(1024,($x=floor(log($memory_size,1024)))),2).' '.$memory_unit[$x]."\n";

echo '<br><br>';
echo ini_get('memory_limit');

$free = shell_exec('free');
$free = (string)trim($free);
$free_arr = explode("\n", $free);
$mem = explode(" ", $free_arr[1]);
$mem = array_filter($mem);
$mem = array_merge($mem);
$memory_usage = $mem[2]/$mem[1]*100;
$memory_usage = round($memory_usage,2);


$load = sys_getloadavg();
$load = $load[0];
$load = round($load,2);

echo '<br><br>';
echo $memory_usage.'%';
echo '<br>';
echo $load.'%';
//echo phpinfo();

/*mysql_connect( DB_SERVER_SLISTEM, DB_USER_SLISTEM, DB_PASSWORD_SLISTEM) or die(mysql_error());
mysql_select_db(DB_NAME_SLISTEM) or die(mysql_error());


$slistemQuery = " SELECT slc.sl_companypk as company_id, slc.name as company_name,slpd.sl_position_detailpk as position_detail_id
FROM sl_company slc
left JOIN sl_position slp on slp.companyfk = slc.sl_companypk
left JOIN sl_position_detail slpd on slpd.positionfk = slp.sl_positionpk
WHERE slc.level = '8' ";
$slistemQuery = mysql_query($slistemQuery);

$allMeetings = array();

$count = 0;

while($meetingData = mysql_fetch_assoc($slistemQuery))
{
  if($meetingData['position_detail_id'] == null)
  {
    //$company_id = $meetingData['company_id'];
    //$update_quert = " UPDATE sl_company SET level = 0 WHERE sl_companypk = '".$company_id."'";
    //echo $update_quert.'<br>';
    //$query = mysql_query($update_quert);
    $count++;
  }
}

echo $count;*/
