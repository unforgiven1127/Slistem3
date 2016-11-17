<?php



define('CONST_PHPMAILER_SMTP_DEBUG', false);
define('CONST_PHPMAILER_DOMAIN', 'slate.co.jp');
define('CONST_PHPMAILER_EMAIL', 'slistem@slate.co.jp');
define('CONST_PHPMAILER_DEFAULT_FROM', 'Slistem');
define('CONST_PHPMAILER_ATTACHMENT_SIZE', 10485760);

define('CONST_PHPMAILER_SMTP_PORT', 465); //smtp
define('CONST_PHPMAILER_SMTP_HOST', 'imap.slate.co.jp');
define('CONST_PHPMAILER_SMTP_LOGIN', 'slistem@slate.co.jp');
define('CONST_CRM_MAIL_SENDER', 'slistem@slate.co.jp');
define('CONST_WEBSITE', 'slistem');
define('CONST_PAGE_DEVICE_TYPE_PC', 'page_pc');

define('CONST_PHPMAILER_SMTP_PASSWORD', 'Slate!7000ics');

//require_once 'component/mail/phpmailer/PHPMailerAutoload.php';

require_once 'component/mail/phpmailer_5.1/class.phpmailer.php';

$mail             = new PHPMailer(true); // defaults to using php "mail()"

$mail->SetLanguage( 'en', 'phpmailer/language/' );
$mail->CharSet="iso-8859-1";
$mail->Host = 'imap.slate.co.jp';                      // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'slistem@slate.co.jp';                    // SMTP username
$mail->Password = 'Slate!7000ics';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->From = 'slistem@slate.co.jp';
$mail->FromName = 'Slistem';
//$mail->addAddress('ricksherman@netins.net');     // Add a recipient
//$mail->addReplyTo('info@example.com');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$body             = "TEST";
//$body             = file_get_contents('contents.html');
//$body             = eregi_replace("[\]",'',$body);

//$mail->AddReplyTo("name@yourdomain.com","First Last");

$mail->SetFrom('slistem@slate.co.jp', 'Slistem');

//$mail->AddReplyTo("name@yourdomain.com","First Last");

$address = "munir_anameric@hotmail.com";
$mail->AddAddress($address, "Munir Anameric");

$mail->Subject    = "PHPMailer Test Subject via mail(), basic";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}


?>