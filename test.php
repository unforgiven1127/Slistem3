<?php
	class RandomString
	{
		public $randomString = '';
		public $randomStringArray = array();

		private function generateRandomString($length = 1024)
		{//generates random string
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
		{//gets a string and returns char array of this string
			$returnArray = array();
			$stringLen = strlen($string);
			for($i = 0; $i < $stringLen; $i++)
			{
				$returnArray[] = $string[$i];
			}
			return $returnArray;
		}

		public function __construct()
		{//constructor
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
		public $match2 = 0;
		public $match3 = 0;

		public $internalCheckFlag = false;
		public $errorFlag = false;

		public function match($check1 = '', $check2 = '')
		{// our primary function which compares both texts within eachother and with the random
			$newRandom = new RandomString();
			if($check1 == '' || $check2 == '')
			{// to check 3 text with random generated text
				$rsa = $newRandom->randomStringArray;
				$this->random = $newRandom->randomString;
				$this->internalCheckFlag = false;
    			$texts = array('text1'=>$this->text1,'text2' => $this->text2,'text3' => $this->text3);
			}
			else
			{// to check 3 text within eachother
				$this->internalCheckFlag = true;
				$check1Array = RandomString::returnStringArray($check1);
				$check2Array = RandomString::returnStringArray($check2);
				if(strlen($check1) == strlen($check2))
				{//if texts have the same length
					if($check1 == $check2)
					{
						$this->errorFlag = true;
					}
					$rsa = $check1Array;
					$texts = array('text1'=>$check2);
				}
				else if(strlen($check1) > strlen($check2))
				{// search short one in the long one
					$rsa = $check1Array;
					$texts = array('text1'=>$check2);
				}
				else
				{// search short one in the long one
					$rsa = $check2Array;
					$texts = array('text1'=>$check1);
				}
			}

    		foreach ($rsa as $key1 => $value)
    		{//just one pass for random text
    			foreach ($texts as $key2 => $text)
    			{// 3 pass for each text
    				$textArray = RandomString::returnStringArray($text);

	    			if($textArray[0] == $value)
	    			{// if we catch the first match
    					$controlString = $textArray[0];
    					for($i = 1; $i < strlen($text); $i++)
    					{//check the others
    						$newKey = $key1 + $i;
    						if(isset($rsa[$newKey]))
    						{
    							$controlString .= $rsa[$newKey];
    						}
    					}
    					if($controlString == $text)
    					{//we find the match...
    						if($this->internalCheckFlag)
    						{//3 text internal search
    							$this->errorFlag = true;
    						}
    						else
    						{//3 text vs random text search
    							if($key2 == 'text1'){$this->match1++;}
	    						if($key2 == 'text2'){$this->match2++;}
	    						if($key2 == 'text3'){$this->match3++;}
    						}
    					}
	    			}
    			}
    		}
		}

		public function __construct($t1,$t2,$t3)
		{//constructor
			$this->text1 = $t1;
			$this->text2 = $t2;
			$this->text3 = $t3;
			$this->match($t1,$t2);// first check the text with eachother
			$this->match($t1,$t3);// first check the text with eachother
			$this->match($t2,$t3);// first check the text with eachother
			if(!$this->errorFlag)
			{//if three words not in eachother then proceed
				$this->match();
			}
		}
	}


    if(isset($_POST['text1']) && isset($_POST['text2']) && isset($_POST['text3']))
    {
    	$data = array();
    	$text1 = $_POST['text1'];
    	$text2 = $_POST['text2'];
    	$text3 = $_POST['text3'];

    	if(strlen($text1) > 0 && strlen($text2) > 0 && strlen($text3) > 0)
    	{
	    	$newMacth = new StringMatch($text1,$text2,$text3);
	    	$data['random'] = $newMacth->random;

	    	$data['error'] = '';
	    	if($newMacth->errorFlag)
	    	{
	    		$data['matches'] = $data['random'] = $data['error'] = 'Sub string error! Please enter unique texts!';
	    	}
	    	else
	    	{
	    		$data['matches'] = "<b>$text1</b> appears <b>".$newMacth->match1."</b> times,";
		    	$data['matches'] .= " <b>$text2</b> appears <b>".$newMacth->match2."</b> times,";
		    	$data['matches'] .= " <b>$text3</b> appears <b>".$newMacth->match3."</b> times";
	    	}
    	}
		else
	    {
	    	$data['matches'] = $data['random'] = $data['error'] = "Please match the format requested; The string should be less than 8 characters and lowercase";
	    }
	    exit(json_encode($data));
    }
?>

<head>
<!-- I used bootstrap and JQuery -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- AJAX to pass data -->
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
                $('#matches').html(data.matches);
                if(data.error.length > 0)
                {
                	alert(data.error);
                }
            })
        });

        $("#reset").click(function(){
		    $('input[type="text"]').val('');
		    $('#result').html('');
		    $('#matches').html('');
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
    	<div class="alert alert-success">
		  <strong>Linux Magic Programming Skills Assessment Test</strong>
		</div>
    	<table>
    		<tr>
    			<td>Text 1: </td>
    			<td><input type="text" class="form-control" name='text1' id="text1" maxlength="7" pattern="[a-z]{1,7}" title="The string should be less than 8 characters and lowercase"></td><!-- the lowercase and less than 8(max 7) letter restriction -->
    		</tr>
    		<tr>
    			<td>Text 2: </td>
    			<td><input type="text" class="form-control" name='text2' id="text2" maxlength="7" pattern="[a-z]{1,7}" title="The string should be less than 8 characters and lowercase"></td><!-- the lowercase and less than 8(max 7) letter restriction -->
    		</tr>
    		<tr>
    			<td>Text 3: </td>
    			<td><input type="text" class="form-control" name='text3' id="text3" maxlength="7" pattern="[a-z]{1,7}" title="The string should be less than 8 characters and lowercase"></td><!-- the lowercase and less than 8(max 7) letter restriction -->
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