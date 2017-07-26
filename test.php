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



mysql_connect( DB_SERVER_SLISTEM, DB_USER_SLISTEM, DB_PASSWORD_SLISTEM) or die(mysql_error());
mysql_select_db(DB_NAME_SLISTEM) or die(mysql_error());


$slistemQuery = 'SELECT * FROM sl_candidate slc ORDER BY slc.sl_candidatepk DESC LIMIT 10';
$slistemQuery = mysql_query($slistemQuery);

$lastCandidates = array();


while($lastCandidate = mysql_fetch_assoc($slistemQuery))
{
  $add = array('firstname' => $lastCandidate['firstname'],'lastname' => $lastCandidate['lastname']);
  $lastCandidates[] = $lastCandidate;
}

header('Content-Type: application/json');

$test = "[
	{ 'firstname': 'Yezden', lastname: 'Erdurak', cinsiyet: 'Erkek', maas: '3569' },
	{ 'firstname': 'Elfiye', lastname: 'Şencin', cinsiyet: 'Erkek', maas: '4143' }
]";

$data['lastCandidates'] = $lastCandidates;
$return = json_encode($lastCandidates);
ChromePhp::log($return);
echo $data;
