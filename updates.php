<?php

/*$sDate = date('Y-m-d H:i:s');
$to = "munir@slate-ghc.com";
//$to = "munir@slate-ghc.com, rkiyamu@slate.co.jp";
$subject = "Test email";

$message = "
<html>
<head>Date&Time:
".$sDate."
<title>Test email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Testova</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <slistem@slate.co.jp>' . "\r\n";
$headers .= 'Cc: munir_anameric@hotmail.com' . "\r\n";

mail($to,$subject,$message,$headers);*/

// the message
$ini_sendmail_path = ini_get('sendmail_path');

echo $ini_sendmail_path.'<br><br>';

$msg = "TEST";


mail("munir_anameric@hotmail.com","My subject",$msg);

echo 'mail send...';
