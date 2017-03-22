

<!--<script>tinymce.init({ selector:'textarea',plugins: [
    'image'
  ], });</script>-->
<script type="text/javascript" >
	function openExtra(id)
	{
		var open_id = "hidden_"+id;
		//alert(open_id);
		$('#'+open_id).show();
	}

	function closeExtra(id)
	{
		var open_id = "hidden_"+id;
		//alert(open_id);
		$('#'+open_id).hide();
	}
	function openActiveUsers()
	{
		//alert('show');
		$('#activeUsers').show();
	}
	function closeActiveUsers()
	{
		//alert('hide');
		$('#activeUsers').hide();
	}
	function openPassiveUsers()
	{
		//alert('hide');
		$('#passiveUsers').show();
	}
	function closePassiveUsers()
	{
		//alert('hide');
		$('#passiveUsers').hide();
	}
</script>


<style>
	.table-striped > tbody > tr:nth-of-type(odd) {
  		background-color: #f9f9f9;
	}
	.striped1{
	    background-color: #f9f9f9;
	}
	.table {
		border-collapse: collapse !important;
	}
	.inner{
		padding-left: 30px !important;
		font-size: 10pt;
		width: 114px !important;
	}
	.userInfo{
		font-size: 12pt;
		font-weight: bold;
		padding-left: 5px !important;
		width: 200px !important;
	}
	tr.border_bottom td, th {
	  border-bottom:1pt dashed black;
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
			<table style='width:100%;'>
				<tr class="border_bottom">
					<th style='font-size: 14pt; font-weight: bold;'>
						Active Users <img style='margin-left:20px; cursor:pointer; width: 20px; vertical-align: text-bottom;' src='common/pictures/plus.png' onclick='openActiveUsers();'> <img style='cursor:pointer; width: 20px; vertical-align: text-bottom;' src='common/pictures/minus.png' onclick='closeActiveUsers();'>
					</th>
				</tr>
			</table>
			<table style='width:100%; margin-top: 20px;' id='activeUsers' class="table table-striped1">

					<?php $classFlag = true;
					foreach ($positions as $key => $position)
					{
						if($position['status'] == 1)//active users
						{
							if($classFlag)
							{
								$classFlag = false;
								$addClass = 'striped1';
							}
							else
							{
								$classFlag = true;
								$addClass = '';
							}
							echo "<tr class='".$addClass."'>";
							echo "<td class='userInfo'>".$position['username']."</td>";
							echo "<td class='userInfo'><img style='cursor:pointer; width: 20px; vertical-align: text-bottom;' src='common/pictures/plus.png' onclick='openExtra(".$position['user_id'].")'> <img style='cursor:pointer; width: 20px; vertical-align: text-bottom;' src='common/pictures/minus.png' onclick='closeExtra(".$position['user_id'].")'></td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td colspan='2'>";
							echo "<table id='hidden_".$position['user_id']."' hidden style='width:100%;' class='table table-striped'>";
							foreach ($position['position_id'] as $key => $value)
							{
								if(!empty($position['position_name'][$key]))
								{
									$position_name = $position['position_name'][$key];
									$string_length = strlen($position_name);
									if($string_length  > 50)
									{
										$position_name = substr($position_name,0,50);
									}
									echo "<tr class='user_".$position['user_id']."'>";
									echo "<td class='inner'>".$value."</td>";
									echo "<td>".$position_name."</td>";
									echo "</tr>";
								}
							}
							echo "</table>";
							echo "</td>";
							echo "</tr>";
						}

					} ?>
			</table>
			<br><br>
			<table style='width:100%;'>
				<tr class="border_bottom">
					<th style='font-size: 14pt; font-weight: bold;'>
						Passive Users <img style='margin-left:20px; cursor:pointer; width: 20px; vertical-align: text-bottom;' src='common/pictures/plus.png' onclick='openPassiveUsers();'> <img style='cursor:pointer; width: 20px; vertical-align: text-bottom;' src='common/pictures/minus.png' onclick='closePassiveUsers();'>
					</th>
				</tr>
			</table>
			<table style='width:100%; margin-top: 20px;' hidden id='passiveUsers' class="table table-striped1">

					<?php $classFlag = true;
					foreach ($positions as $key => $position)
					{
						if($position['status'] == 0)//active users
						{
							if($classFlag)
							{
								$classFlag = false;
								$addClass = 'striped1';
							}
							else
							{
								$classFlag = true;
								$addClass = '';
							}
							echo "<tr class='".$addClass."'>";
							echo "<td class='userInfo'>".$position['username']."</td>";
							echo "<td class='userInfo'><img style='cursor:pointer; width: 20px; vertical-align: text-bottom;' src='common/pictures/plus.png' onclick='openExtra(".$position['user_id'].")'> <img style='cursor:pointer; width: 20px; vertical-align: text-bottom;' src='common/pictures/minus.png' onclick='closeExtra(".$position['user_id'].")'></td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td colspan='2'>";
							echo "<table id='hidden_".$position['user_id']."' hidden style='width:100%;' class='table table-striped'>";
							foreach ($position['position_id'] as $key => $value)
							{
								if(!empty($position['position_name'][$key]))
								{
									$position_name = $position['position_name'][$key];
									$string_length = strlen($position_name);
									if($string_length  > 50)
									{
										$position_name = substr($position_name,0,50);
									}
									echo "<tr class='user_".$position['user_id']."'>";
									echo "<td class='inner'>".$value."</td>";
									echo "<td>".$position_name."</td>";
									echo "</tr>";
								}
							}
							echo "</table>";
							echo "</td>";
							echo "</tr>";
						}

					} ?>
			</table>
		</td>
	</tr>
</table>

</body>
</html>