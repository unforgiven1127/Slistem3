<?php

require_once './common/lib/unirest/src/Unirest.php';

$response = Unirest\Request::get("https://privatix-temp-mail-v1.p.mashape.com/request/mail/id/514ccb46774bdbf6f07607a14d784c4c/",
  array(
    "X-Mashape-Key" => "OhHgw1CQBUmshJSITKjAoL1vY7qDp1rnYJWjsnF2rMg3A90AE8",
    "Accept" => "application/json"
  )
);

var_dump($response);

?>
