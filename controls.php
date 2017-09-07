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

//$memory_size = memory_get_usage();
//$memory_unit = array('Bytes','KB','MB','GB','TB','PB');
// Display memory size into kb, mb etc.
//echo 'Used Memory : '.round($memory_size/pow(1024,($x=floor(log($memory_size,1024)))),2).' '.$memory_unit[$x]."\n";

//echo '<br><br>';
echo 'Memory limit: '.ini_get('memory_limit');

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
echo 'Memory usage: '.$memory_usage.'%';
echo '<br>';
echo 'CPU usage: '.$load.'%';

echo '<br><br>';

if(isset($_SERVER["REDIRECT_STATUS"]))
{
	$error_url = $_SERVER["REDIRECT_STATUS"] . '/';
	echo "The redirect error status: ".$error_url;
	echo '<br>';
	echo 'Response code: '.http_response_code();
}
else
{
	echo "There is no redirect error";
	echo '<br>';
	echo 'Response code: '.http_response_code();
}
echo '<br>';
echo 'SSL: '.$_SERVER['HTTPS'];
echo '<br>';

switch (connection_status())
{
	case CONNECTION_NORMAL:
	  $txt = 'Connection is in a normal state, code: '.connection_status();//0
	  break;
	case CONNECTION_ABORTED:
	  $txt = 'Connection aborted, code: '.connection_status();//1
	  break;
	case CONNECTION_TIMEOUT:
	  $txt = 'Connection timed out, code: '.connection_status();//2
	  break;
	case (CONNECTION_ABORTED & CONNECTION_TIMEOUT):
	  $txt = 'Connection aborted and timed out, code: '.connection_status();//3
	  break;
	default:
	  $txt = 'Unknown, code: '.connection_status();//? unknown
	  break;
}

echo $txt;
echo '<br>';
echo "Server port: ".$_SERVER['SERVER_PORT'];

echo '<br>';
echo '<br>';
echo "Latest error: ".error_get_last();
//ChromePhp::log('this is CONTROLS');

echo '<br>';
echo '<br>';
echo 'user data: '.$_COOKIE['login_userdata'];
echo '<br>';
echo 'sess id: '.$_COOKIE['PHPSESSID'];
//header("Location: https://".$server);
//die();

/*foreach($_COOKIE as $name => $value) {
    echo $name.': <br>';
    echo $value.'<br>';
	var_dump(unserialize($value));
	echo '<br><br>---------------------------------------------';
}*/



/*foreach($_COOKIE as $name => $value) {
    setcookie($name, '', 1);
}*/
//$sHash = sha1($_SESSION['userData']['pk'].'|@|'.uniqid('cook_', true).'|@|'.rand(1000000, 1000000000));
//@setcookie('login_userdata', serialize(array('pk' => $_SESSION['userData']['pk'], 'hash' => $sHash)), time()-360000*30000, '/');
//unset($_COOKIE['PHPSESSID']);
//unset($_COOKIE['login_userdata']);
//print_r($_COOKIE);


if(isset($_GET['f']))
{
  if(function_exists($_GET['f'])) {
     $_GET['f']();
  }
}

function get_new_kpi_set()
{
	echo '<br><br><br>';
	echo 'test';
}
echo '<br><br>';
//echo phpinfo();

@mysql_connect(DB_SERVER_SLISTEM, DB_USER_SLISTEM, DB_PASSWORD_SLISTEM) or die(mysql_error());
mysql_select_db(DB_NAME_SLISTEM) or die(mysql_error());


$slistemQuery = "SELECT slp.sl_positionpk, l.firstname, l.lastname, slpd.title, slc.name as company, sli.label as industry, slpd.language
, slp.salary_from, slp.salary_to, slp.age_from, slp.age_to, slpl.status
FROM sl_position slp
inner join login l on l.loginpk = slp.created_by
inner join sl_position_detail slpd on slpd.positionfk = slp.sl_positionpk
inner join sl_company slc on slc.sl_companypk = slp.companyfk
inner join sl_industry sli on sli.sl_industrypk = slp.industryfk
left join sl_position_link slpl on slpl.positionfk = slp.sl_positionpk and slpl.sl_position_linkpk = (select max(slpl2.sl_position_linkpk) from sl_position_link slpl2 where slpl2.positionfk = slpl.positionfk)
WHERE slp.date_created >= '2016-04-01 00:00:00'";//belirli sayida aliyor dikkat

$slistemQuery = mysql_query($slistemQuery);

$count = 0;
echo '<br><br><br>';

echo "<table>";
echo "<tr>
<td>ID</td>
<td>CREATED BY</td>
<td>TITLE</td>
<td>COMPANY</td>
<td>INDUSTRY</td>
<td>LANGUAGE</td>
<td>SALARY</td>
<td>AGE</td>
<td>STATUS</td>
</tr>";
while($data = mysql_fetch_assoc($slistemQuery))
{
	//$count++;
	$status = ' NO ACTIVITY ';
	if($data['status'] > 0 && $data['status'] < 100)
	{
		$status = ' IN PLAY ';
	}
	else if($data['status'] > 100 && $data['status'] < 300)
	{
		$status = ' PLAYED ';
	}
	echo "<tr>";
		echo "<td>".$data['sl_positionpk']."</td>";
		echo "<td>".$data['firstname']." ".$data['lastname']."</td>";
		echo "<td>".$data['title']."</td>";
		echo "<td>".$data['company']."</td>";
		echo "<td>".$data['industry']."</td>";
		echo "<td>".$data['language']."</td>";
		echo "<td>".$data['salary_from']." ".$data['salary_to']."</td>";
		echo "<td>".$data['age_from']." ".$data['age_to']."</td>";
		echo "<td>".$status."</td>";
	echo "</tr>";
}
echo "</table>";
echo '<br><br>';
//echo "Count: ".$count;


