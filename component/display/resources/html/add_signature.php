

<!--<script>tinymce.init({ selector:'textarea',plugins: [
    'image'
  ], });</script>-->
<script type="text/javascript" >
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
    CKEDITOR.replace( 'signature',
	{
		width: '600px',
		toolbar :
		[
			{ name: 'basicstyles', items : [ 'Bold','Italic' ] },
			{ name: 'insert', items : [ 'Image','Table','HorizontalRule','SpecialChar','PageBreak' ] },
			{ name: 'paragraph', items : [ 'NumberedList','BulletedList' ] }
		]
	});

</script>


<script>

function loading()
{
    $('body').addClass('noScroll').append('<div id="slLoadingScreen"  style="z-index: 999; width: '+ ($(document).innerWidth() + 100) +'px; height: '+ ($(document).innerHeight() + 100) +'px; position: absolute; top: 0; left: 0; ">      <div class="bg"></div><div class="ani"></div></div>');
    $('body').append("<div id='overlay' class='overlay'></div>");
}

$( "#sendMailToCandidate" ).click(function() {

	var message = $('#message').text();
alert(message);
	var subject = $('#subject').val();
	var cc = $('#cc').val();
    var bcc = $('#bcc').val();
    validation = true;
alert(message.length);
//alert(bcc.length);
    if(message.length == 0 || subject.length == 0)
    {
    	alert('Subject & Message should be filled.');
    	validation = false;
    }
    if((cc.length > 0 && cc.indexOf("@") < 0) || (bcc.length > 0 && bcc.indexOf("@") < 0))
    {
		alert('CC & BCC should be valid.');
    	validation = false;
    }
	if(validation)
	{
	    loading();
	}

    /*var receipent_email = $('#receipent_email').val();
    var message = $('#messageId').val();
    var candidate_id = $('#candidate_id').val();
    var subject = $('#subject').val();
    var cc = $('#cc').val();
    var bcc = $('#bcc').val();
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
		        'cc': cc,
		        'bcc': bcc,
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
		    },
		    complete: function(data)
		    {
				$( ".ani" ).remove();
				$( ".overlay" ).remove();
				$( ".bg" ).remove();
				$( "#slLoadingScreen" ).remove();
		    	//alert('Completed?!');
		    }
		});
    }*/

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
<!DOCTYPE html>
<html>
<body>
<form name="sendMailForm" enctype="multipart/form-data" submitajax="1" action="<?php echo $sURL; ?>" class="fullPageForm" method="POST" id="sendMailForm" onsubmit="">
	<table style="width:100%;" valign="top">
		<tr>
			<td style="width:100%;" valign="top">
				<div inajax="" id="58afb3d10beb2Id" class="formFieldTitle">Add / Change Signature</div>
			</td>
		</tr>

	<table style="width:100%;" valign="top">
		<tr>
			<td valign="top" style='padding-top:15px; padding-left: 50px; width:70px;'><b>Signature: </b></td>
			<td style='padding-top:15px;' align="left">
				<textarea required style="outline: none; width: 500px; height: 300px;" name="signature" class="msgField" inajax="" id="signature"><?php echo $signature; ?></textarea>
			</td>
		</tr>
	</table>

	<table style="width:100%;" valign="top">
		<tr>
			<td>
				<center>
					<input name="saveSignature" type="submit" id="saveSignature" value="Save" onclick="">
				</center>
			</td>
		</tr>
	</table>
</form>
</body>
</html>