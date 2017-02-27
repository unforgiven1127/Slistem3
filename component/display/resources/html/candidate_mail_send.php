<script>
$( "#sendMailToCandidate" ).click(function() {

    var receipent_email = $('#receipent_email').val();
    var message = $('#messageId').val();
    alert(receipent_email);
    alert(message);
	$.ajax({
	    type: 'POST',
	    // make sure you respect the same origin policy with this url:
	    // http://en.wikipedia.org/wiki/Same_origin_policy
	    url: '<?php echo $sURL; ?>',
	    data: {
	        'receipent_email': receipent_email,
	        'message': message,
	    },
	    success: function(msg){
	        alert(msg.data);
	    }
	});
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
			<td style='padding-top:10px;' align="left">
				<input type="text" id="receipent_email" style="outline: none; width: 503px;">
			</td>
		</tr>
		<tr>
			<td valign="top" style='padding-top:15px; padding-left: 50px; width:70px;'><b>Message: </b></td>
			<td style='padding-top:15px;' align="left">
				<textarea style="outline: none; width: 500px; height: 300px;" name="message" class="msgField" inajax="" id="messageId"></textarea>
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
