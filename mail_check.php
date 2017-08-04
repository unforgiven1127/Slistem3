<?php

    //$url = 'https://temp-mail.org/en/';
    //$content = file_get_contents($url);

    $c = curl_init('https://temp-mail.org/en/');
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt(... other options you want...)

    $html = curl_exec($c);

    if (curl_error($c))
        die(curl_error($c));

    // Get the status code
    $status = curl_getinfo($c, CURLINFO_HTTP_CODE);

    curl_close($c);

     $email = "asd/sdff@asdf.com";
     $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
     //$email = (preg_match_all($regex, $content,$output, PREG_PATTERN_ORDER));

     preg_match($regex, $html, $matches);


    var_dump($matches);

?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

    
</script>
<style>
	table
	{ margin-left: 50px; margin-top: 50px; }
	td
	{ padding-top: 10px; }
	textarea
	{ width: 700px !important; }
	input
	{ margin-left: 10px; width: 300px !important; }
	button
	{ float: right; width: 100px; margin-left: 10px; }
	#resultTable
	{ display:none }
	h4
	{ font-weight: bold; }
</style>
</head>

<body>
    <form>
    	<table>
            <tr>
                <td>
                    <div id='links'></div>
                </td>
            </tr>
    		<tr>
    			<td>
    				<button id='check' type="button" class="btn btn-warning">Check</button>
    			</td>
    		</tr>
    	</table>

    </form>
</body>