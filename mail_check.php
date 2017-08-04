<?php

require_once './common/lib/unirest/src/Unirest.php';

$response = Unirest\Request::get("https://privatix-temp-mail-v1.p.mashape.com/request/mail/id/{md5}/",
  array(
    "X-Mashape-Key" => "OhHgw1CQBUmshJSITKjAoL1vY7qDp1rnYJWjsnF2rMg3A90AE8",
    "Accept" => "application/json"
  )
);

var_dump($response);

?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

    $(function() {

        $("#check").click(function(){
		    $.ajax({
                type        : 'GET',
                url         : 'https://privatix-temp-mail-v1.p.mashape.com/request/mail/id/514ccb46774bdbf6f07607a14d784c4c/',
            })
            .done(function(data) {
                //alert(data);
                console.log(data);
            })
		});
    });
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
    				<button id='check' type="button" class="btn btn-warning">Check</button>
    			</td>
    		</tr>
    	</table>

    </form>
</body>