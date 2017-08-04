<?php

    $c = curl_init('https://temp-mail.org/en/');
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

    $html = curl_exec($c);

    if (curl_error($c))
        die(curl_error($c));

    curl_close($c);

    $matches = array();
    $pattern = '/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i';

    preg_match_all($pattern,$html,$matches);
    if(isset($matches[1]))
    {
        $email = $matches[1];
    }
    echo "email: $email";

?>