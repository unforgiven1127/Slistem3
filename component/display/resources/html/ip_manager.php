<div style="padding: 10px;">
	<form action="https://beta2.slate.co.jp/index.php5?uid=665-544&ppa=ppae&ppt=ipconf&ppk=0&pg=ajx" method="post">
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