<div style="padding: 10px;">
	<form name="ip_control_form" id="ip_control_form" enctype="multipart/form-data" submitajax="0" action="<?php echo $form_url; ?>"
		method="POST" onbeforesubmit="" onsubmit="">
		<!-- <div class="general_form_row">
			<div class="general_form_label">
				Restore file
			</div>
			<div class="general_form_column">
				<select name="htaccess_version">
					<option value="current">
						Current
					</option>
				</select>
			</div>
		</div> -->
		<div class="general_form_row">
			<div class="general_form_label">
				IP control
			</div>
			<div class="general_form_column">
				<textarea name="htaccess_contents" id='htaccess_contents' style="width: 730px; height: 495px;"><?php echo $file_contents; ?></textarea>
			</div>
		</div>
		<div class="general_form_row add_margin_top_10" style="text-align: center;">
			<input value="Save" type="button" onclick="onclickSubmit();">
		</div>
	</form>
</div>

<script>
function onclickSubmit()
{
  var content = $('#htaccess_contents').val();
  var urlPhp = <?php echo $form_url; ?>
  $.ajax(
  {
    url: urlPhp,
    dataType: "json",
    type: "POST",
  	data: {content : content,
  		   action : "save"},
    success: function(sData)
    {
      alert('IPs are changed successfully');
    },
    error:function(sData)
    {
      alert('ERROR please get in contact with administrator.');
    }
  });
}
</script>