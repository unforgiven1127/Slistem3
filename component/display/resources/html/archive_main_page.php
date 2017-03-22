

<!--<script>tinymce.init({ selector:'textarea',plugins: [
    'image'
  ], });</script>-->
<script type="text/javascript" >

</script>


<script>

f/*unction loading()
{
    $('body').addClass('noScroll').append('<div id="slLoadingScreen"  style="z-index: 999; width: '+ ($(document).innerWidth() + 100) +'px; height: '+ ($(document).innerHeight() + 100) +'px; position: absolute; top: 0; left: 0; ">      <div class="bg"></div><div class="ani"></div></div>');
    $('body').append("<div id='overlay' class='overlay'></div>");
}

$( "#sendMailToCandidate" ).click(function() {
	loading();
});*/

</script>

<style>

</style>
<!DOCTYPE html>
<html>
<body>

<table>
	<tr>
		<td>
			<table>
				<tr>
					<td>
						Consultant / Position Archive
					</td>
				</tr>
			</table>
			<br><br>
			<table>
				<tr>
					<td>
						Active Users + -
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<?php foreach ($positions as $key => $position) {
						echo "<td>".$position['username']."</td>";
					} ?>
					<td>
						Consultant
					</td>
					<td>
						+ -
					</td>
				</tr>
			</table>
			<br><br>
			<table>
				<tr>
					<td>
						Passive Users + -
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td>
						Munir Anameric
					</td>
					<td>
						Consultant
					</td>
					<td>
						+ -
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</body>
</html>