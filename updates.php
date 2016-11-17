<?php
$to      = 'munir_anameric@hotmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$headers .= 'Cc: munir@slate-ghc.com' . "\r\n";



mail($to, $subject, $message, $headers);


?>