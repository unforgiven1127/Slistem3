<?php

//$sDate = date('Y-m-d H:i:s');
//echo $sDate;
header('Content-type: application/xml');
$url = 'http://www.eltcalendar.com/rss.xml';

 $xmlstr = file_get_contents($url);
 $xmlcont = new SimpleXMLElement($xmlstr);


var_dump($xmlcont);

echo "<br><br>";
echo "<br><br>TEST";
echo "<br><br>";
echo "<br><br>";

foreach ($xmlcont as $key => $value)
{
	echo $value;
	echo "<br><br>";
}