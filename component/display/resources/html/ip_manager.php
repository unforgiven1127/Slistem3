<div style="padding: 10px;">
	<form name="loginFormData" enctype="multipart/form-data" submitajax="1" action=<?php echo "'".$form_url."'"; ?> method="POST" id="loginFormDataId" onbeforesubmit onsubmit>
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
				<textarea name="htaccess_contents" style="width: 730px; height: 495px;"><?php echo $file_contents; ?></textarea>
			</div>
		</div>
		<div class="general_form_row add_margin_top_10" style="text-align: center;">
			<input value="Save" type="submit">
		</div>
	</form>
</div>