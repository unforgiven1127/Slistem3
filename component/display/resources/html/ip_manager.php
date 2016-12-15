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
  alert('test');
  $.ajax(
  {
    url: "https://beta2.slate.co.jp/index.php5?uid=665-544&ppa=ppaa&ppt=ipconf&ppk=0&action=save&pg=ajx",
    dataType: "json",
    type: "POST",
  	data: {content : content},
    success: function(sData)
    {
      alert('IPs are changed successfully');
    }
  });
}
</script>