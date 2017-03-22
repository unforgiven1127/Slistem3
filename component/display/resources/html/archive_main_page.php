

<!--<script>tinymce.init({ selector:'textarea',plugins: [
    'image'
  ], });</script>-->
<script type="text/javascript" >

</script>


<style>
	.table-striped > tbody > tr:nth-of-type(odd) {
  		background-color: #f9f9f9;
	}
	.table {
		border-collapse: collapse !important;
	}
	.inner{
		padding-left: 30px !important;
		font-size: 10pt;
	}
	.userInfo{
		font-size: 12pt;
		font-weight: bold;
		padding-left: 5px !important;
	}
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
					<th>
						<p style='font-size: 14pt; font-weight: bold;'>Active Users + -</p>
					</th>
				</tr>
			</table>
			<table id='activeUsers' class="table table-striped">

					<?php foreach ($positions as $key => $position)
					{
						if($position['status'] == 1)//active users
						{
							echo "<tr>";
							echo "<td class='userInfo'>".$position['username']."</td>";
							echo "<td class='userInfo'>".$position['user_position']."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td colspan:'2'>";
							echo "<table class='table table-striped'>";
							foreach ($position['position_id'] as $key => $value)
							{
								$position_name = $position['position_name'][$key];
								echo "<tr class='user_".$position['user_id']."'>";
								echo "<td class='inner'>".$value."</td>";
								echo "<td>".$position_name."</td>";
								echo "</tr>";
							}
							echo "</td>";
							echo "</tr>";
							echo "</table>";
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