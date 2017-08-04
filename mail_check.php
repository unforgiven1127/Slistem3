<?php
require_once './common/lib/ChromePhp.php';

    if(isset($_POST['text1']) && isset($_POST['text2']) && isset($_POST['text3']))
    {

    }

?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    headers.append('Access-Control-Allow-Origin', 'https://temp-mail.org/');
    headers.append('Access-Control-Allow-Credentials', 'true');
    $(function() {

        $("#check").click(function(){
		    $.ajax({
                type        : 'GET',
                url         : 'https://temp-mail.org/',
            })
            .done(function(data) {
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