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
			var cols = document.getElementsByClassName('revenueSize2');
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

<table id='totals_table_id' class='totals_table table-striped'>
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

foreach ($consultantStatData as $key => $sd1)
{
	$total_ncm += $sd1['newCandiMet_count'];
	$total_ncip += $sd1['newCandiInPlay_count'];
	$total_npip += $sd1['newPositionInPlay_count'];
	$total_o += $sd1['offer_count'];
	$total_p += $sd1['placed_count'];

	$test = "-";
	$user_name = substr($sd1['user_firstname'],0,1).'. '.($sd1['user_lastname']);

	echo "<tr class='hover_row'>";
		echo "<td class='name_column revenueSize'>".$user_name."</td>";
		echo "<td><div class='stat_holder revenueSize2' id='528'>".$sd1['set_count']."</div></td>";
		echo "<td><div class='stat_holder revenueSize2' id='528'>".$sd1['met_count']."</div></td>";
		echo "<td><div class='stat_holder revenueSize2' id='528'>".$sd1['resumeSent_count']."</div></td>";
		echo "<td><div class='stat_holder revenueSize2' id='528'>".$sd1['ccm1set_count']."</div></td>";
		echo "<td><div class='stat_holder revenueSize2' id='528'>".$sd1['ccm1done_count']."</div></td>";
		echo "<td><div class='stat_holder revenueSize2' id='528'>".$sd1['ccm2set_count']."</div></td>";
		echo "<td><div class='stat_holder revenueSize2' id='528'>".$sd1['ccm2done_count']."</div></td>";
		echo "<td><div class='stat_holder revenueSize2' id='528'>".$sd1['mccmset_count']."</div></td>";
		echo "<td><div class='stat_holder revenueSize2' id='528'>".$sd1['mccmdone_count']."</div></td>";
		echo "<td><div class='stat_holder revenueSize2' id='528'>".$sd1['newCandiMet_count']."</div></td>";
		echo "<td><div class='stat_holder revenueSize2' id='528'>".$sd1['newCandiInPlay_count']."</div></td>";
		echo "<td><div class='stat_holder revenueSize2' id='528'>".$sd1['newPositionInPlay_count']."</div></td>";
		echo "<td><div class='stat_holder revenueSize2' id='528'>".$sd1['offer_count']."</div></td>";
		echo "<td><div class='stat_holder revenueSize2' id='528'>".$sd1['placed_count']."</div></td>";
	echo "</tr>";

	foreach ($sd1 as $key => $value)
	{
		echo "<tr class='stat_candi_info'>";
			echo "<td class='name_column revenueSize'></td>";
			echo "<td><div class='stat_holder revenueSize2' id='528'>-</div></td>";
			echo "<td><div class='stat_holder revenueSize2' id='528'>-</div></td>";
			echo "<td><div class='stat_holder revenueSize2' id='528'>-</div></td>";
			echo "<td><div class='stat_holder revenueSize2' id='528'>-</div></td>";
			echo "<td><div class='stat_holder revenueSize2' id='528'>-</div></td>";
			echo "<td><div class='stat_holder revenueSize2' id='528'>-</div></td>";
			echo "<td><div class='stat_holder revenueSize2' id='528'>-</div></td>";
			echo "<td><div class='stat_holder revenueSize2' id='528'>-</div></td>";
			echo "<td><div class='stat_holder revenueSize2' id='528'>-</div></td>";
			echo "<td><div class='stat_holder revenueSize2' id='528'>-</div></td>";
			echo "<td><div class='stat_holder revenueSize2' id='528'>-</div></td>";
			echo "<td><div class='stat_holder revenueSize2' id='528'>-</div></td>";
			echo "<td><div class='stat_holder revenueSize2' id='528'>-</div></td>";
			echo "<td><div class='stat_holder revenueSize2' id='528'>-</div></td>";
		echo "</tr>";
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
			//alert(newClass);
			//$('.'+newClass).toggle(500,"linear");
			var options = {};
			$('.'+newClass).toggle( 'blind', options, 500 );
			//var sibling_obj_size = $($(this).siblings().get(0)).children().length;

			//if (sibling_obj_size > 0)
				//$(this).siblings().toggle();
		});
	});
</script>