<?php
require_once './common/lib/ChromePhp.php';
if(isset($_GET['f']))
{
  if(function_exists($_GET['f'])) {
     $_GET['f']();
  }
}

function loginTest()
{
	ChromePhp::log('test 1 2 3 4');
	$login = $_POST['username'];
	$pass = $_POST['password'];
	ChromePhp::log($login);
	ChromePhp::log($pass);
}

function test1()
{
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	$rs = array();
	$add1 = array("CompanyName" => "abc company" , "Country" => "Canada" , "City" => "Rupert");
	$add2 = array("CompanyName" => "xyz company" , "Country" => "Turkey" , "City" => "Ankara");
	$add3 = array("CompanyName" => "tyu company" , "Country" => "Brazil" , "City" => "Rio");

	$rs[] = $add1;
	$rs[] = $add2;
	$rs[] = $add3;

	$outp = "";
	foreach ($rs as $key => $value)//$array as $key => $value
	{
	    if ($outp != "") {$outp .= ",";}
	    $outp .= '{"Name":"'  . $value["CompanyName"] . '",';
	    $outp .= '"City":"'   . $value["City"]        . '",';
	    $outp .= '"Country":"'. $value["Country"]     . '"}';
	}
	$outp ='{"records":['.$outp.']}';

	echo($outp);
}

?>