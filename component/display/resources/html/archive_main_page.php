

<!--<script>tinymce.init({ selector:'textarea',plugins: [
    'image'
  ], });</script>-->
<script type="text/javascript" >

</script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
			<table class="table table-striped">
					<?php foreach ($positions as $key => $position)
					{
						if($position['status'] == 1)//active users
						{
							echo "<tr>";
							echo "<td>".$position['username']."</td>";
							echo "<td>".$position['user_position']."</td>";
							echo "</tr>";
						}
					} ?>
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