<?php

foreach($_COOKIE as $name => $value) {
    setcookie($name, '', 1);
}

$server = $_SERVER['SERVER_NAME'];

//echo $server;

header("Location: https://".$server);
die();