<?php

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
    var_dump($matches);
    if(isset($matches[0][1]))
    {
        $email = $matches[0][1];
    }
    echo "email: $email";

?>