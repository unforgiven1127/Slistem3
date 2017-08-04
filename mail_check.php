<?php

    $url = 'https://temp-mail.org/en/';
    $content = file_get_contents($url);

     $email = "asd/sdff@asdf.com";
     $regex = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";

     preg_match($regex, $content, $matches);

     var_dump($matches);
     //print_r($matches[0]);


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