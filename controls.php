<script>
alert('test 1');
window.onbeforeunload = function (event) {
    alert('test 2');
};
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

ini_set('memory_limit', '-1');
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
