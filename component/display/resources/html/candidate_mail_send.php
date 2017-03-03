<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>

tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });

function loading()
{
    $('body').addClass('noScroll').append('<div id="slLoadingScreen"  style="z-index: 999; width: '+ ($(document).innerWidth() + 100) +'px; height: '+ ($(document).innerHeight() + 100) +'px; position: absolute; top: 0; left: 0; ">      <div class="bg"></div><div class="ani"></div></div>');
    $('body').append("<div id='overlay' class='overlay'></div>");
}

$( "#sendMailToCandidate" ).click(function() {

	loading();
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
				<div inajax="" id="58afb3d10beb2Id" class="formFieldTitle">Send a message</div>
			</td>
		</tr>
	</table>
	<table style="width:100%;" valign="top">
		<tr>
			<td style='padding-top:10px; padding-left: 50px; width:70px;'><b>Email to: </b></td>
			<td style='padding-top:10px; width: 303px;' align="left">
				<b><input disabled value=" <?php echo $candidate_email; ?>" type="text" name="receipent_email_visible" id="receipent_email_visible" style="outline: none; width: 303px;"></b>
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
				<b><input placeholder=" for multiple email addresses please use ; to seperate emails" type="text" id="cc" name="cc" style="outline: none; width: 505px;"></b>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td style='padding-top:10px; padding-left: 50px; width:70px;'><b>BCC: </b></td>
			<td style='padding-top:10px; width: 303px;' align="left">
				<b><input placeholder=" for multiple email addresses please use ; to seperate emails" type="text" id="bcc" name="bcc" style="outline: none; width: 505px;"></b>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td style='padding-top:10px; padding-left: 50px; width:70px;'><b>Subject: </b></td>
			<td style='padding-top:10px; width: 303px;' align="left">
				<b><input type="text" id="subject" name="subject" style="outline: none; width: 505px;"></b>
			</td>
		</tr>
	</table>
	<!--<table>
		<tr>
			<td>
				<a href="javascript:;" onclick="var oConf = goPopup.getConfig(); oConf.width = 950; oConf.height = 550;  goPopup.setLayerFromAjax(oConf, 'https://beta2.slate.co.jp/index.php5?uid=999-111&amp;ppa=ppaa&amp;ppt=shdoc&amp;ppk=0&amp;cp_uid=555-001&amp;cp_action=ppav&amp;cp_type=candi&amp;cp_pk=154310&amp;document_title=Test+User%27s+resume&amp;callback=refresh_candi%28154310%2C+true%29%3B+&amp;pg=ajx'); "> Upload a document
				</a>
			</td>
		</tr>-->
	</table>
	<table style="width:100%;" valign="top">
		<tr>
			<td valign="top" style='padding-top:15px; padding-left: 50px; width:70px;'><b>Message: </b></td>
			<td style='padding-top:15px;' align="left">
				<textarea style="outline: none; width: 500px; height: 300px;" name="message" class="msgField" inajax="" id="messageId" name="messageId"><?php echo $signature; ?></textarea>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td style='padding-top:10px; padding-left: 10px;' align="left">
				<b><input hidden value="<?php echo $candidate_id; ?>"type="text" name="candidate_id" id="candidate_id" style="outline: none; width: 187px;"></b>
			</td>
		</tr>
		<tr>
			<td style='padding-top:10px; padding-left: 10px;' align="left">
				<b><input hidden value="<?php echo $candidate_email; ?>"type="text" name="receipent_email" id="receipent_email" style="outline: none; width: 187px;"></b>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td id='addDS' style='padding-left: 60px;'>
				<input type="file" id="file" name="files[]" multiple="multiple" />
			</td>
		</tr>
	</table>
	<table style="width:100%;" valign="top">
		<tr>
			<td>
				<center>
					<input name="Send" type="submit" id="sendMailToCandidate" value="Send" onclick="">
				</center>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
				<textarea><p style="text-align: center; font-size: 15px;"><img title="TinyMCE Logo" src="//www.tinymce.com/images/glyph-tinymce@2x.png" alt="TinyMCE Logo" width="110" height="97" />
  </p>
  <h1 style="text-align: center;">Welcome to the TinyMCE & Community Plugins demo!</h1>
  <h5 style="text-align: center;">Note, this is not an "enterprise/premium" demo.<br>Visit the <a href="https://www.tinymce.com/pricing/#demo-enterprise">pricing page</a> to demo our premium plugins.</h5>
  <p>Please try out the features provided in this full featured example.</p>
  <p>Note that any <b>MoxieManager</b> file and image management functionality in this example is part of our commercial offering – the demo is to show the integration.</h2>

  <h2>Got questions or need help?</h2>
  <ul>
    <li>Our <a href="//www.tinymce.com/docs/">documentation</a> is a great resource for learning how to configure TinyMCE.</li>
    <li>Have a specific question? Visit the <a href="http://community.tinymce.com/forum/">Community Forum</a>.</li>
    <li>We also offer enterprise grade support as part of <a href="http://tinymce.com/pricing">TinyMCE Enterprise</a>.</li>
  </ul>

  <h2>A simple table to play with</h2>
  <table style="text-align: center;">
    <thead>
      <tr>
        <th>Product</th>
        <th>Cost</th>
        <th>Really?</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>TinyMCE</td>
        <td>Free</td>
        <td>YES!</td>
      </tr>
      <tr>
        <td>Plupload</td>
        <td>Free</td>
        <td>YES!</td>
      </tr>
    </tbody>
  </table>

  <h2>Found a bug?</h2>
  <p>If you think you have found a bug please create an issue on the <a href="https://github.com/tinymce/tinymce/issues">GitHub repo</a> to report it to the developers.</p>

  <h2>Finally ...</h2>
  <p>Don't forget to check out our other product <a href="http://www.plupload.com" target="_blank">Plupload</a>, your ultimate upload solution featuring HTML5 upload support.</p>
  <p>Thanks for supporting TinyMCE! We hope it helps you and your users create great content.<br>All the best from the TinyMCE team.</p>
</textarea>
			</td>
		</tr>
	</table>

</form>
</body>
</html>