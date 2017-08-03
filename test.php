<?php
	function generateRandomString($length = 1024)
	{
	    $chars = 'abcdefghijklmnopqrstuvwxyz';
	    $charsLength = strlen($chars);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++)
	    {
	        $randomString .= $chars[rand(0, $charsLength - 1)];
	    }
	    return $randomString;
	}

    $data = array();
    if(isset($_POST['text1']) && isset($_POST['text2']) && isset($_POST['text3']))
    {
    	$text1 = $_POST['text1'];
    	$text2 = $_POST['text2'];
    	$text3 = $_POST['text3'];
    	$random = generateRandomString();
    	$data['random'] = $random;
    	$data['text1'] = $text1;
    	$data['text2'] = $text2;
    	$data['text3'] = $text3;
        //$data[] = 'You entered:' . $_POST['name'];
        exit(json_encode($data));
    }
    else
    {
    	$data['random'] = "Please enter all of the texts";
    }
?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(function() {
        $('form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type        : 'POST',
                url         : 'test.php',
                data        : $(this).serialize(),
                dataType    : 'json',
                encode      : true
            })
            .success(function(data) {
                $('#result').html(data.random);
                $('#resultTable').show();
                alert(data.text1);
                alert(data.text2);
                alert(data.text3);
            })
        });

        $("#reset").click(function(){
		    $('input[type="text"]').val('');
		    $('#result').html('');
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

</style>
</head>

<body>
    <form>
    	<table>
    		<tr>
    			<td>Text 1: </td>
    			<td><input type="text" class="form-control" name='text1' id="text1" maxlength="7" pattern="[a-z]{1,7}" title="The string should be less than 8 characters and lowercase"></td>
    		</tr>
    		<tr>
    			<td>Text 2: </td>
    			<td><input type="text" class="form-control" name='text2' id="text2" maxlength="7" pattern="[a-z]{1,7}" title="The string should be less than 8 characters and lowercase"></td>
    		</tr>
    		<tr>
    			<td>Text 3: </td>
    			<td><input type="text" class="form-control" name='text3' id="text3" maxlength="7" pattern="[a-z]{1,7}" title="The string should be less than 8 characters and lowercase"></td>
    		</tr>
    		<tr>
    			<td colspan="2">
    				<button type="submit" class="btn btn-primary">Check</button>
    				<button id='reset' type="button" class="btn btn-warning">Reset</button>
    			</td>
    		</tr>
    	</table>
    	<table id='resultTable'>
    		<tr>
    			<td><h4>Random Text:</h4></td>
    		</tr>
    		<tr>
    			<td><textarea class="form-control" rows="11" id="result"></textarea></td>
    		</tr>
    		<tr>
    			<td><h4>Matches:</h4></td>
    		</tr>
    		<tr>
    			<td id='matches'></td>
    		</tr>
    	</table>
    </form>
</body>