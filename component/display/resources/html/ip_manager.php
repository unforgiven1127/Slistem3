<div style="padding: 10px;">
	<form name="addcandidate" enctype="multipart/form-data" submitAjax="1"
	action="<?php echo $form_url; ?>" class="candiAddForm" ajaxTarget="candi_duplicate"
	method="POST" id="addcandidateId" onBeforeSubmit="" onsubmit="">
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