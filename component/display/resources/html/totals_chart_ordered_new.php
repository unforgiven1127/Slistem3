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



<?php

$dataArray = array();
$dataArray[0] = $consultantStatData;
$dataArray[1] = $researcherStatData;

$candidateArray = array();
$candidateArray[0] = $allCandidates;
$candidateArray[1] = $researcherCandidates;

foreach ($dataArray as $key => $value)
{
	$selectedStatData = $value;
	$selectedCandidates = $candidateArray[$key];


echo "<table id='totals_table_id' class='totals_table '>
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
	</tr>";

$total_ncm = 0;
$total_ncip = 0;
$total_npip = 0;
$total_o = 0;
$total_p = 0;

$row_number_rank = 1;
foreach ($selectedStatData as $key => $sd1)
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

	if(isset($selectedCandidates[$key]))
	{
		$counter = 0;
		foreach ($selectedCandidates[$key] as $key2 => $value2)
		{
			$iC = 0;
			$setC = $metC = $resentC = $ccm1SetC = $ccm1DoneC = $ccm2SetC = $ccm2DoneC = $mccmSet = $mccmDone = $newCmet = $newCinPlay = $newPosInPlay = $offerC = $placementC = '<center>-</center>';

			$setT = $metT = $rsT = $ccm1sT = $ccm1dT = $ccm2sT = $ccm2dT = $mccmsT = $mccmdT = $offerT = $placedT = '';

			$setH = $metH = $rsH = $ccm1SH = $ccm1DH = $ccm2SH = $ccm2DH = $mccmSH = $mccmDH = '';
			$ncmH = $ncpH = $nppH = $offerH = $placedH = '';

			if(isset($value2['set'][0]))
			{
				$setC = $value2['set'][0];$iC++;
				$setH = $value2['set_url'];
				if(count($value2['set']) > 1){$setT = "(".count($value2['set']).")";}
			}
			if(isset($value2['met'][0]))
			{
				$metC = $value2['met'][0];$iC++;
				$metH = $value2['met_url'];
				if(count($value2['met']) > 1){$metT = "(".count($value2['met']).")";}
			}
			if(isset($value2['resume_sent'][0]))
			{
				$resentC = $value2['resume_sent'][0];$iC++;
				$rsH = $value2['rs_url'];
				//if(count($value2['resume_sent']) > 1){$rsT = "(".count($value2['resume_sent']).")";}
			}
			if(isset($value2['ccm1_set'][0]))
			{
				$ccm1SetC = $value2['ccm1_set'][0];$iC++;
				$ccm1SH = $value2['ccm1s_url'];
				if(count($value2['ccm1_set']) > 1){$ccm1sT = "(".count($value2['ccm1_set']).")";}
			}
			if(isset($value2['ccm1_done'][0]))
			{
				$ccm1DoneC = $value2['ccm1_done'][0];$iC++;
				$ccm1DH = $value2['ccm1d_url'];
				if(count($value2['ccm1_done']) > 1){$ccm1dT = "(".count($value2['ccm1_done']).")";}
			}
			if(isset($value2['ccm2_set'][0]))
			{
				$ccm2SetC = $value2['ccm2_set'][0];$iC++;
				$ccm2SH = $value2['ccm2s_url'];
				if(count($value2['ccm2_set']) > 1){$ccm2sT = "(".count($value2['ccm2_set']).")";}
			}
			if(isset($value2['ccm2_done'][0]))
			{
				$ccm2DoneC = $value2['ccm2_done'][0];$iC++;
				$ccm2DH = $value2['ccm2d_url'];
				if(count($value2['ccm2_done']) > 1){$ccm2dT = "(".count($value2['ccm2_done']).")";}
			}
			if(isset($value2['mccm_set'][0]))
			{
				$mccmSet = $value2['mccm_set'][0];$iC++;
				$mccmSH = $value2['mccms_url'];
				if(count($value2['mccm_set']) > 1){$mccmsT = "(".count($value2['mccm_set']).")";}
			}
			if(isset($value2['mccm_done'][0]))
			{
				$mccmDone = $value2['mccm_done'][0];$iC++;
				$mccmDH = $value2['mccmd_url'];
				if(count($value2['mccm_done']) > 1){$mccmdT = "(".count($value2['mccm_done']).")";}
			}
			if(isset($value2['newcandi_met'][0]))
			{
				$ncmH = $value2['ncm_url'];
				$newCmet = $value2['newcandi_met'][0];$iC++;
			}
			if(isset($value2['newcandi_play'][0]))
			{
				$ncpH = $value2['ncp_url'];
				$newCinPlay = $value2['newcandi_play'][0];$iC++;
			}
			if(isset($value2['newposition_play'][0]))
			{
				$nppH = $value2['npp_url'];
				$newPosInPlay = $value2['newposition_play'][0];$iC++;
			}
			if(isset($value2['offer_candidates'][0]))
			{
				$offerH = $value2['offer_url'];
				$offerC = $value2['offer_candidates'][0];$iC++;
				if(count($value2['offer_candidates']) > 1){$offerT = "(".count($value2['offer_candidates']).")";}
			}
			if(isset($value2['placed_candidates'][0]))
			{
				$placedH = $value2['placed_url'];
				$placementC = $value2['placed_candidates'][0];$iC++;
				if(count($value2['placed_candidates']) > 1){$placedT = "(".count($value2['placed_candidates']).")";}
			}

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
					echo "<td style='".$tB."'><div class='hover_row'><a ".$setH.">".$setC.$setT."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a ".$metH.">".$metC.$metT."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a ".$rsH.">".$resentC.$rsT."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a ".$ccm1SH.">".$ccm1SetC.$ccm1sT."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a ".$ccm1DH.">".$ccm1DoneC.$ccm1dT."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a ".$ccm2SH.">".$ccm2SetC.$ccm2sT."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a ".$ccm2DH.">".$ccm2DoneC.$ccm2dT."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a ".$mccmSH.">".$mccmSet.$mccmsT."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a ".$mccmDH.">".$mccmDone.$mccmdT."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a ".$ncmH.">".$newCmet."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a ".$ncpH.">".$newCinPlay."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a ".$nppH.">".$newPosInPlay."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a ".$offerH.">".$offerC.$offerT."</a></div></td>";
					echo "<td style='".$tB."'><div class='hover_row'><a ".$placedH.">".$placementC.$placedT."</a></div></td>";
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
	</tr></table>";


?>
}

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
			$("."+newClass).toggle(500,"linear");

		});
	});
</script>