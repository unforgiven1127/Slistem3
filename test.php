<?php
	function generateRandomString($length = 1024)
	{
	    $characters = 'abcdefghijklmnopqrstuvwxyz';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++)
	    {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	$random = generateRandomString();
    $data = array();
    if(isset($_POST['text1']))
    {
    	$data['random'] = $random;
        //$data[] = 'You entered:' . $_POST['name'];
        exit(json_encode($data));
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
            .done(function(data) {
                $('#result').html(data.random);
            })
        });
    });
</script>
<style>
	table
	{
	    margin-left: 50px;
	    margin-top: 50px;
	}
	td
	{
		padding-top: 10px;
	}
	textarea
	{
		width: 700px !important;
	}
</style>
</head>

<body>
    <form>
    	<table>
    		<tr>
    			<td>Text1:</td>
    			<td><input type="text" class="form-control" name='text1' id="text1" maxlength="7"></td>
    		</tr>
    		<tr>
    			<td>Text1:</td>
    			<td><input type="text" class="form-control" name='text2' id="text2" maxlength="7"></td>
    		</tr>
    		<tr>
    			<td>Text1:</td>
    			<td><input type="text" class="form-control" name='text3' id="text3" maxlength="7"></td>
    		</tr>
    		<tr>
    			<td><button type="submit" class="btn btn-primary">Check</button></td>
    		</tr>
    	</table>
    	<table>
    		<tr>
    			<td><h4>Random Text:</h4></td>
    		</tr>
    		<tr>
    			<td><textarea class="form-control" rows="11" id="result"></textarea></td>
    		</tr>
    	</table>
    </form>
</body>