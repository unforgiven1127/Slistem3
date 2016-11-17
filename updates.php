<?php

require_once 'component/dependency.inc.php5';
require_once 'component/mail/mail.class.ex.php5';

define('CONST_PHPMAILER_SMTP_DEBUG', false);
define('CONST_PHPMAILER_DOMAIN', 'slate.co.jp');
define('CONST_PHPMAILER_EMAIL', 'slistem@slate.co.jp');
define('CONST_PHPMAILER_DEFAULT_FROM', 'Slistem');
define('CONST_PHPMAILER_ATTACHMENT_SIZE', 10485760);

define('CONST_PHPMAILER_SMTP_PORT', 465); //smtp
define('CONST_PHPMAILER_SMTP_HOST', 'imap.slate.co.jp');
define('CONST_PHPMAILER_SMTP_LOGIN', 'slistem@slate.co.jp');
define('CONST_CRM_MAIL_SENDER', 'slistem@slate.co.jp');

define('CONST_PHPMAILER_SMTP_PASSWORD', 'Slate!7000ics');

$sAction = "ppasa";
$sType = "not";
$nPK = "0";
$sMode = "ajx";

$oMail = new CMailEx($sAction, $sType, $nPK, $sMode);

$sSubject = "TEST";
$sContent = "Test Content";

$sEmail = 'Dear Munir';
$sEmail.= $sContent;

$oMail->createNewEmail();
$oMail->setFrom(CONST_PHPMAILER_DEFAULT_FROM, CONST_CRM_MAIL_SENDER);
$oMail->addRecipient("munir_anameric@hotmail.com");

$oMail->send($sSubject, $sEmail);

?>