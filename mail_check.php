<?php


    /*$c = curl_init('https://temp-mail.org/en/');
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
    echo "email: $email";*/

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(function() {
        var method = 'GET';
        var url = 'https://temp-mail.org/en/';
        var xhr = new XMLHttpRequest();
        if ("withCredentials" in xhr)
        {
            xhr.open(method, url, true);
        }
        else if (typeof XDomainRequest != "undefined")
        {
            xhr = new XDomainRequest();
            xhr.open(method, url);
        }
        else
        {
            xhr = null;
        }

        alert('sadasd');

    });
</script>