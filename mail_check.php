<?php

//WITHOUT API
    echo "----------WITHOUT API------------<br><br>";
    $c = curl_init('https://temp-mail.org/en/');
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

    $html = curl_exec($c);

    if (curl_error($c))
        die(curl_error($c));

    curl_close($c);

    $matches = array();
    $pattern = '/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i';

    $email = '';
    preg_match_all($pattern,$html,$matches);
    if(isset($matches[0][1]))
    {
        $email = $matches[0][1];
    }
    echo "email: $email (THIS EMAIL ALWAYS CHANGES)<br><br>";

//WITH API
require_once './common/lib/unirest/src/Unirest.php';

$response = Unirest\Request::get("https://privatix-temp-mail-v1.p.mashape.com/request/mail/id/514ccb46774bdbf6f07607a14d784c4c/",
  array(
    "X-Mashape-Key" => "OhHgw1CQBUmshJSITKjAoL1vY7qDp1rnYJWjsnF2rMg3A90AE8",
    "Accept" => "application/json"
  )
);

echo "----------WITH API------------<br><br>";
var_dump($response);

?>
