
<?php

require_once './conf/main_config.inc.php5';
require_once './common/lib/global_func.inc.php5';
require_once './component/dependency.inc.php5';
//phpinfo();

$subject = "test";
$message = "test msg";

$oMail = CDependency::getComponentByName('mail');

$oMail->createNewEmail();
$oMail->setFrom(CONST_CRM_MAIL_SENDER, 'Slistem notification');

$oMail->addRecipient('munir_anameric@hotmail.com', 'Munir Anameric');
$oMail->addCCRecipient('munir@slate-ghc.com','Munir Anameric');

$oMail->send($subject, $message);

/*if( mail('munir_anameric@hotmail.com', 'test subject', 'hello this is a test') ){

    echo 'Mail was sent';
} else {
    echo 'Couldn\'t send the mail';
}*/