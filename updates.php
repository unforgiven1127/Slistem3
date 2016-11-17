<?php

define('CONST_PHPMAILER_SMTP_DEBUG', false);
define('CONST_PHPMAILER_DOMAIN', 'slate.co.jp');
define('CONST_PHPMAILER_EMAIL', 'slistem@slate.co.jp');
define('CONST_PHPMAILER_DEFAULT_FROM', 'Slistem');
define('CONST_PHPMAILER_ATTACHMENT_SIZE', 10485760);

define('CONST_PHPMAILER_SMTP_PORT', 465); //smtp
define('CONST_PHPMAILER_SMTP_HOST', 'imap.slate.co.jp');
define('CONST_PHPMAILER_SMTP_LOGIN', 'slistem@slate.co.jp');

define('CONST_PHPMAILER_SMTP_PASSWORD', 'Slate!7000ics');

require_once "component/mail/phpmailer_5.1/class.smtp.php";

$from = "slistem@slate.co.jp";
$to = "munir@slate-ghc.com";
$subject = "Test subject";
$message = "Test message, blah blah blah...";

$smtpoptions = array(
  "textmessage" => $message,
  "server" => "imap.slate.co.jp",
  "port" => 465,
  "secure" => false,
  "username" => "slistem@slate.co.jp",
  "password" => "Slate!7000ics",
  "usedns" => false
);

SendEmail($from, $to, $subject, $smtpoptions);
?>