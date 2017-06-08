<script>
	//localStorage.setItem("loginFlag", "loginPage");
	var nextloop = <?php echo $nextloop; ?>;
	var loopFlag = false;
	if(nextloop < 666)
	{
		loopFlag = true;
	}
	//alert(nextloop);
	//alert(loopFlag);

	$(document).ready(function()
	{
	    $('[data-toggle="tooltip"]').tooltip();
	    if(loopFlag == true || loopFlag == 'true')
		{
			document.getElementById('getKpiForm').setAttribute("style","display:none;");
			document.getElementById('body').setAttribute("style","margin-top:-40px; margin-left:10px;margin-right:10px;");
			//document.getElementById('head').setAttribute("style","font-size:150% !important;");
			var cols = document.getElementsByClassName('revenueSize0');
			for(i=0; i<cols.length; i++) {
			    cols[i].setAttribute("style","font-size:200% !important;");
			}
			var cols = document.getElementsByClassName('revenueSize');
			for(i=0; i<cols.length; i++) {
			    cols[i].setAttribute("style","font-size:180% !important;");
			}
			var cols = document.getElementsByClassName('rs2');
			for(i=0; i<cols.length; i++) {
			    cols[i].setAttribute("style","font-size:150% !important;");
			}
			var cols = document.getElementsByClassName('revenueSize3');
			for(i=0; i<cols.length; i++) {
			    cols[i].setAttribute("style","font-size:180% !important;");
			}
			var cols = document.getElementsByClassName('totals_table');
			for(i=0; i<cols.length; i++) {
			    cols[i].setAttribute("style","width:100% !important;");
			}
			//$('#totals_table_id').css('margin-top','-48px;');
			//alert('GIZLEME SONRASI ALERT');
		}
	});

	if(loopFlag == true || loopFlag == 'true')
	{
		setTimeout(function()
		{
			var url = '/index.php5?uid=555-006&ppa=pprev&ppt=revenue&ppk=0&watercooler=1&nextloop='+nextloop;
			//alert('test');
			window.location.replace(url);
		}, 30000);
	}

</script>

<style>
.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #E3E9EF;
}

.hover_row
{
	font-size: 11pt;
	/*text-align: center;*/
}
.hover_row > a
{
	color: #2A6991;
	font-weight: normal !important;
	cursor: pointer;
}

</style>

<form id="getKpiForm" action="" method="post">
	<div id="closeThis" class="general_form_row" style="font-size: 16px;">
		<div class="general_form_column">Start date: </div>
		<div class="general_form_column">
			<input id="start_date" style="width: 90px" type="text" name="start_date"
				value="<?php echo $start_date_original; ?>" />
		</div>
		<div class="general_form_column add_margin_left_20">End date: </div>
		<div class="general_form_column">
			<input id="end_date" style="width: 90px" type="text" name="end_date"
				value="<?php echo $end_date_original; ?>" />
		</div>
		<div class="general_form_column add_margin_left_10">
			<input type="submit" name="submit_totals" value="Get totals" />
		</div>
	</div>
</form>

<table id='totals_table_id' class='totals_table '>
	<tr>
		<th style='background-color: #48768F !important;' class='revenueSize0' colspan='15'>Consultant totals - <?php echo date('M Y', strtotime($start_date)); ?></th>
	</tr>
	<tr id='head'>
		<th class='name_column revenueSize0'>Name</th>
		<th class='revenueSize'>Set</th>
		<th class='revenueSize'>Met</th>
		<th class='revenueSize'>Resumes sent</th>
		<th class='revenueSize'>CCM1 set</th>
		<th class='revenueSize'>CCM1 done</th>
		<th class='revenueSize'>CCM2 set</th>
		<th class='revenueSize'>CCM2 done</th>
		<th class='revenueSize'>MCCM set</th>
		<th class='revenueSize'>MCCM done</th>
		<th class='revenueSize'>New candidates met</th>
		<th class='revenueSize'>New candidates<br>in play</th>
		<th class='revenueSize'>New positions<br>in play</th>
		<th class='revenueSize'>Offer</th>
		<th class='revenueSize'>Placement</th>
	</tr>

<?php

$total_ncm = 0;
$total_ncip = 0;
$total_npip = 0;
$total_o = 0;
$total_p = 0;

$row_number_rank = 1;
foreach ($consultantStatData as $key => $sd1)
{
	$total_ncm += $sd1['newCandiMet_count'];
	$total_ncip += $sd1['newCandiInPlay_count'];
	$total_npip += $sd1['newPositionInPlay_count'];
	$total_o += $sd1['offer_count'];
	$total_p += $sd1['placed_count'];

	$test = "-";
	$user_name = substr($sd1['user_firstname'],0,1).'. '.($sd1['user_lastname']);

	if ($row_number_rank % 2 === 0)
		$even = ' colored_row';
	else
		$even = ' colored_row2';
	$row_number_rank++;

	echo "<tr class=' ".$even."' id='".$key."_tr'>";
		echo "<td class='name_column revenueSize'>".$user_name."</td>";
		echo "<td><div class='stat_holder rs2' id='".$key."'>".$sd1['set_count']."</div></td>";
		echo "<td><div class='stat_holder rs2' id='".$key."'>".$sd1['met_count']."</div></td>";
		echo "<td><div class='stat_holder rs2' id='".$key."'>".$sd1['resumeSent_count']."</div></td>";
		echo "<td><div class='stat_holder rs2' id='".$key."'>".$sd1['ccm1set_count']."</div></td>";
		echo "<td><div class='stat_holder rs2' id='".$key."'>".$sd1['ccm1done_count']."</div></td>";
		echo "<td><div class='stat_holder rs2' id='".$key."'>".$sd1['ccm2set_count']."</div></td>";
		echo "<td><div class='stat_holder rs2' id='".$key."'>".$sd1['ccm2done_count']."</div></td>";
		echo "<td><div class='stat_holder rs2' id='".$key."'>".$sd1['mccmset_count']."</div></td>";
		echo "<td><div class='stat_holder rs2' id='".$key."'>".$sd1['mccmdone_count']."</div></td>";
		echo "<td><div class='stat_holder rs2' id='".$key."'>".$sd1['newCandiMet_count']."</div></td>";
		echo "<td><div class='stat_holder rs2' id='".$key."'>".$sd1['newCandiInPlay_count']."</div></td>";
		echo "<td><div class='stat_holder rs2' id='".$key."'>".$sd1['newPositionInPlay_count']."</div></td>";
		echo "<td><div class='stat_holder rs2' id='".$key."'>".$sd1['offer_count']."</div></td>";
		echo "<td><div class='stat_holder rs2' id='".$key."'>".$sd1['placed_count']."</div></td>";
	echo "</tr>";

	if(isset($allCandidates[$key]))
	{
		$counter = 0;
		foreach ($allCandidates[$key] as $key2 => $value2)
		{
			$iC = 0;
			$setC = $metC = $resentC = $ccm1SetC = $ccm1DoneC = $ccm2SetC = $ccm2DoneC = $mccmSet = $mccmDone = $newCmet = $newCinPlay = $newPosInPlay = $offerC = $placementC = '<center>-</center>';
			if(isset($value2['set'][0])){$setC = $value2['set'][0];$iC++;}
			if(isset($value2['met'][0])){$metC = $value2['met'][0];$iC++;}
			if(isset($value2['ccm1_set'][0])){$ccm1SetC = $value2['ccm1_set'][0];$iC++;}
			if(isset($value2['ccm1_done'][0])){$ccm1DoneC = $value2['ccm1_done'][0];$iC++;}
			if(isset($value2['ccm2_set'][0])){$ccm2SetC = $value2['ccm2_set'][0];$iC++;}
			if(isset($value2['ccm2_done'][0])){$ccm2DoneC = $value2['ccm2_done'][0];$iC++;}
			if(isset($value2['mccm_set'][0])){$mccmSet = $value2['mccm_set'][0];$iC++;}
			if(isset($value2['mccm_done'][0])){$mccmDone = $value2['mccm_done'][0];$iC++;}
			if(isset($value2['newcandi_met'][0])){$newCmet = $value2['newcandi_met'][0];$iC++;}
			if(isset($value2['newcandi_play'][0])){$newCinPlay = $value2['newcandi_play'][0];$iC++;}
			if(isset($value2['newposition_play'][0])){$newPosInPlay = $value2['newposition_play'][0];$iC++;}
			if(isset($value2['offer_candidates'][0])){$offerC = $value2['offer_candidates'][0];$iC++;}
			if(isset($value2['placed_candidates'][0])){$placementC = $value2['placed_candidates'][0];$iC++;}

			if($iC > 0)
			{
				if ($counter % 2 === 0)
					$insideC = ' colored_row';
				else
					$insideC = '';
				$counter++;
				$tB = '';
				if($counter == 1)
				{
					$tB = 'border-top: solid black;';
				}
				$classHDI = $key.'_hidden ';
				echo "<tr style='display: none;' class='hdi ".$classHDI.$insideC."'>";
					echo "<td class='name_column revenueSize ".$even."'></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a>".$setC."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a>".$metC."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a>".$resentC."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a>".$ccm1SetC."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a>".$ccm1DoneC."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a>".$ccm2SetC."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a>".$ccm2DoneC."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a>".$mccmSet."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a>".$mccmDone."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a>".$newCmet."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a>".$newCinPlay."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a>".$newPosInPlay."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a>".$offerC."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a>".$placementC."</a></div></td>";
				echo "</tr>";
			}
		}
	}
}

echo "<tr class='totals_table_footer'>
		<td class='revenueSize3' colspan='10' class='text_right'>
			Total :
		</td>
		<td class='revenueSize3'>".$total_ncm."</td>
		<td class='revenueSize3'>".$total_ncip."</td>
		<td class='revenueSize3'>".$total_npip."</td>
		<td class='revenueSize3'>".$total_o."</td>
		<td class='revenueSize3'>".$total_p."</td>
	</tr>";

?>

</table>
<script>
	$(function() {
		$("#start_date, #end_date").datepicker({
			showButtonPanel: true,
			changeYear: true,
			dateFormat: 'yy-mm-dd'
		});

		$('.stat_holder').click(function() {
			var newClass = $(this).attr("id");
			var mainTR = newClass;

			newClass = newClass + '_hidden';

			var mainTR = newClass+"_key";
			$("."+newClass).toggle(500,"blind");

		});
	});
</script>