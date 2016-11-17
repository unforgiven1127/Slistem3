<?php

require_once 'component/mail/mail.class.ex.php5';

$sAction = "ppasa";
$sType = "not";
$nPK = "0";
$sMode = "ajx";

$mail = new CMailEx($sAction, $sType, $nPK, $sMode);

?>