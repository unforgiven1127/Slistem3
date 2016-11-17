<?php
$to      = 'munir_anameric@hotmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


mail('munir_anameric@hotmail.com', 'the subject', 'the message', null, '-fwebmaster@example.com');

//mail($to, $subject, $message, $headers);


?>