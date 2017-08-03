<?php
require_once './common/lib/ChromePhp.php';
	class RandomString
	{
		public $randomString = '';
		public $randomStringArray = array();
		public $text1 = 0;
		public $text2 = 0;
		public $text3 = 0;

		private function generateRandomString($length = 1024)
		{
		    $chars = 'abcdefghijklmnopqrstuvwxyz';
		    $charsLength = strlen($chars);

		    for ($i = 0; $i < $length; $i++)
		    {
		    	$randomChar = $chars[rand(0, $charsLength - 1)];
		        $this->randomString .= $randomChar;
		        $this->randomStringArray[] = $randomChar;
		    }
		}

		static function returnStringArray($string = '')
		{
			$returnArray = array();
			$stringLen = strlen($string);
			for($i = 0; $i < $stringLen; $i++)
			{
				$returnArray[] = $string[$i];
			}
			return $returnArray;
		}

		public function __construct()
		{
			$this->generateRandomString();
		}
	}


    $data = array();
    if(isset($_POST['text1']) && isset($_POST['text2']) && isset($_POST['text3']))
    {
    	$text1 = $_POST['text1'];
    	$text2 = $_POST['text2'];
    	$text3 = $_POST['text3'];

    	//$data['text1'] = $text1;
    	//$data['text2'] = $text2;
    	//$data['text3'] = $text3;

    	if(strlen($text1) > 0 && strlen($text2) > 0 && strlen($text3) > 0)
    	{
    		$newRandom = new RandomString();
    		$texts = array('text1' => $text1,'text2' => $text2,'text3' => $text3);
	    	foreach ($texts as $key1 => $text)
	    	{
	    		$textArray = RandomString::returnStringArray($text);
//ChromePhp::log(count($textArray));
	    		$rsa = $newRandom->randomStringArray;
	    		foreach ($rsa as $key2 => $value)
	    		{
	    			//ChromePhp::log('HERE 0');
	    			if($textArray[0] == $value)
	    			{
	    				//ChromePhp::log('HERE 1');
	    				for($i = 1; $i < count($textArray); $i++)
	    				{
	    					if(isset($text[$key2 + $i]) && $text[$key2 + $i] == $textArray[$i])
	    					{
	    						ChromePhp::log('HERE 2');
	    						if($i == count($textArray)-1)
	    						{
	    							ChromePhp::log('HERE 3');
	    							$newRandom->text1++;
	    							//ChromePhp::log($newRandom->text1);
	    						}
	    					}
	    				}
	    			}
	    		}
	    	}

	    	$data['random'] = $newRandom->randomString;
	    	$data['t1c'] = $newRandom->text1;
	    	$data['t2c'] = $newRandom->text2;
	    	$data['t3c'] = $newRandom->text3;
	    	//$data['random'] = 'asdasda';

	        //$data[] = 'You entered:' . $_POST['name'];
    	}
		else
	    {
	    	$data['random'] = $data['error'] = "Please match the format requested; The string should be less than 8 characters and lowercase";
	    }
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
                $('#resultTable').show();
                alert(data.t1c);
                alert(data.t2c);
                alert(data.t3c);
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