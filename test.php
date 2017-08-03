<?php
require_once './common/lib/ChromePhp.php';
	class RandomString
	{
		public $randomString = '';
		public $randomStringArray = array();

		private function generateRandomString($length = 300)
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

		public function returnStringArray($string = '')
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

	class StringMatch
	{
		public $text1 = "";
		public $text2 = "";
		public $text3 = "";
		public $random = "";

		public $match1 = 0;

		public function match()
		{
			$newRandom = new RandomString();
			$rsa = $newRandom->randomStringArray;
    		$texts = array('text1' => $this->text1);
	    	foreach ($texts as $key1 => $text)
	    	{
	    		$textArray = $newRandom->returnStringArray($text);
	    		foreach ($rsa as $key2 => $value)
	    		{
	    			if($textArray[0] == $value)
	    			{
	    				for($i = 1; $i < count($textArray); $i++)
	    				{
	    					$nextKey = $key2 + $i;
	    					$control = $i + 1;

	    					if(isset($rsa[$nextKey]) && $textArray[$i] == $rsa[$nextKey] && $control == count($textArray))
	    					{
	    						$this->match1++;
	    					}
	    				}
	    			}
	    		}
	    	}

	    	$this->random = $newRandom->randomString;

		}

		public function __construct($t1,$t2,$t3)
		{
			$this->text1 = $t1;
			$this->text2 = $t2;
			$this->text3 = $t3;
			$this->match();
		}
	}


    $data = array();
    if(isset($_POST['text1']) && isset($_POST['text2']) && isset($_POST['text3']))
    {
    	$text1 = $_POST['text1'];
    	$text2 = $_POST['text2'];
    	$text3 = $_POST['text3'];

    	if(strlen($text1) > 0 && strlen($text2) > 0 && strlen($text3) > 0)
    	{
	    	$newMacth = new StringMatch($text1,$text2,$text3);
	    	$data['random'] = $newMacth->random;
	    	$data['match1'] = $newMacth->match1;
	    	exit(json_encode($data));
    	}
		else
	    {
	    	$data['random'] = $data['error'] = "Please match the format requested; The string should be less than 8 characters and lowercase";
	    }
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
                alert(data.match1);
                //alert(data.t2c);
                //alert(data.t3c);
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