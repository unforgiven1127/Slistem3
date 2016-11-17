<?php

$oMail = CDependency::getComponentByName('mail');

$sSubject = "Test Mail";

$sEmail = 'Dear MUNIR'.', <br /><br />';
$sEmail.= $sContent;

$oMail->createNewEmail();
$oMail->setFrom(CONST_PHPMAILER_DEFAULT_FROM, CONST_CRM_MAIL_SENDER);
$oMail->addRecipient("munir_anameric@hotmail.com");

$oMail->send($sSubject, $sEmail);

?>