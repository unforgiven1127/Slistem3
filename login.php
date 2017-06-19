<?php

foreach($_COOKIE as $name => $value) {
    setcookie($name, '', 1);
}

header("Location: https://beta2.slate.co.jp");
die();