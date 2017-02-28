<script>
function loading()
{
    $('body').addClass('noScroll').append('<div id="slLoadingScreen"  style="z-index: 999; width: '+ ($(document).innerWidth() + 100) +'px; height: '+ ($(document).innerHeight() + 100) +'px; position: absolute; top: 0; left: 0; ">      <div class="bg"></div><div class="ani"></div></div>');
    $('body').append("<div id='overlay' class='overlay'></div>");
}

$( "#sendMailToCandidate" ).click(function() {

	loading();
    var receipent_email = $('#receipent_email').val();
    var message = $('#messageId').val();
    var candidate_id = $('#candidate_id').val();
    var subject = $('#subject').val();
    //alert(receipent_email);
    //alert(message);//
    if(message == '' || receipent_email == '' || subject == '')
    {
    	alert('Please fill the all the areas!!');
    }
    else
    {
    	$.ajax({
		    type: 'POST',
		    // make sure you respect the same origin policy with this url:
		    // http://en.wikipedia.org/wiki/Same_origin_policy
		    url: '<?php echo $sURL; ?>',
		    data: {
		        'receipent_email': receipent_email,
		        'message': message,
		        'subject': subject,
		        'candidate_id': candidate_id
		    },
		    success: function(data){
		    	//alert('test');
		    	//alert(data);
		    	$( ".ani" ).remove();
				$( ".overlay" ).remove();
				$( ".bg" ).remove();
				$( "#slLoadingScreen" ).remove();
		    	var my_array = $.parseJSON(data);
		    	alert(my_array.error.message);
		    	//alert('Mail send successfully');
		    },
		    error: function(data)
		    {
		    	$( ".ani" ).remove();
				$( ".overlay" ).remove();
				$( ".bg" ).remove();
				$( "#slLoadingScreen" ).remove();
		    	alert('Error!');
		    }
		});
    }

});

</script>

<style>
	div.formFieldTitle
	{
	  background-color: #efefef;
	  border: 1px solid #e0e0e0;
	  color: #077AC1;
	  font-size: 13px;
	  margin: 5px 0;
	  padding: 5px;
	}
</style>


	<table style="width:100%;" valign="top">
		<tr>
			<td style="width:100%;" valign="top">
				<div inajax="" id="58afb3d10beb2Id" class="formFieldTitle">Send a message</div>
			</td>
		</tr>
	</table>
	<table style="width:100%;" valign="top">
		<tr>
			<td style='padding-top:10px; padding-left: 50px; width:70px;'><b>Email to: </b></td>
			<td style='padding-top:10px; width: 303px;' align="left">
				<b><input disabled value=" <?php echo $candidate_email; ?>" type="text" id="receipent_email" style="outline: none; width: 303px;"></b>
			</td>
			<td style='padding-top:10px; padding-left: 10px;' align="left">
				<b><input disabled value=" candidate #<?php echo $candidate_id; ?>" type="text" style="outline: none; width: 187px;"></b>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td style='padding-top:10px; padding-left: 50px; width:70px;'><b>CC: </b></td>
			<td style='padding-top:10px; width: 303px;' align="left">
				<b><input placeholder=" for multiple email addresses please use ; to seperate emails" type="text" id="cc" style="outline: none; width: 505px;"></b>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td style='padding-top:10px; padding-left: 50px; width:70px;'><b>BCC: </b></td>
			<td style='padding-top:10px; width: 303px;' align="left">
				<b><input placeholder=" for multiple email addresses please use ; to seperate emails" type="text" id="bcc" style="outline: none; width: 505px;"></b>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td style='padding-top:10px; padding-left: 50px; width:70px;'><b>Subject: </b></td>
			<td style='padding-top:10px; width: 303px;' align="left">
				<b><input type="text" id="subject" style="outline: none; width: 505px;"></b>
			</td>
		</tr>
	</table>
	<table style="width:100%;" valign="top">
		<tr>
			<td valign="top" style='padding-top:15px; padding-left: 50px; width:70px;'><b>Message: </b></td>
			<td style='padding-top:15px;' align="left">
				<textarea style="outline: none; width: 500px; height: 300px;" name="message" class="msgField" inajax="" id="messageId"></textarea>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td style='padding-top:10px; padding-left: 10px;' align="left">
				<b><input hidden disabled value="<?php echo $candidate_id; ?>" type="text"  id="candidate_id" style="outline: none; width: 187px;"></b>
			</td>
		</tr>
	</table>
	<table style="width:100%;" valign="top">
		<tr>
			<td>
				<center>
					<input name="Send" type="button" id="sendMailToCandidate" value="Send" onclick="">
				</center>
			</td>
		</tr>
	</table>

