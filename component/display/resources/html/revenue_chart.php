<?php $total_consultant_count = 0 ?>
	<table valign="top">
		<tr>
			<td valign="top" >
				<table class="revenue_table">
					<tr>
						<th style="width:50%; font-size:400%; white-space: nowrap;" class="text_center" colspan="5"><?php echo ucfirst($location); ?> - Individual Revenue Consultants <?php echo $year; ?></th>
					</tr>
					<tr>
						<th style="height: 80px; font-size: 250%; overflow:none;" class="text_center">Rank</th>
						<th style="height: 80px; font-size: 250%;" class="text_center">Flag</th>
						<th style="height: 80px; font-size: 250%;" class="text_center">Name</th>
						<th style="height: 80px; font-size: 250%;" class="text_center">Signed</th>
						<th style="height: 80px; font-size: 250%;" class="text_center">Paid</th>
						<!--<th class="text_center">Team</th>-->
						<!--<th style="height: 45px; font-size: 300%;" class="text_center">Placed</th>-->
					</tr>

					<?php
						foreach ($revenue_data as $key => $value):
							if ($key == 'former' && empty($value['consultant']['signed']))
								continue;

							if ($row_number_rank % 2 === 0)
								$even = ' even_row';
							else
								$even = '';

							if (empty($value['Consultant']['nationality']))
								$flag_pic = 'world_32.png';
							else
								$flag_pic = $value['Consultant']['nationality'].'_32.png';
					?>
					<?php if(($value['Consultant']['userPosition'] == "Consultant" || $value['userPosition'] == "Not defined")){ $total_consultant_count++;?>
						<tr class="hover_row<?php echo $even; ?>">
							<td style="height: 51px; font-size: 200%;" class="text_center"><?php echo $row_number_rank; ?></td>
							<td class="text_center"><?php echo $display_object->getPicture('/common/pictures/flags/'.$flag_pic); ?></td>
							<td style="height: 51px; font-size: 200%;" class="text_center"><?php echo $value['Consultant']['name']; ?></td>
							<td style="height: 52px; font-size: 200%;" class="text_right">&yen;<?php echo number_format($value['consultant']['signed'], $decimals, '.', ','); ?></td>
							<td style="height: 51px; font-size: 200%;" class="text_right">&yen;<?php echo number_format($value['consultant']['paid'], $decimals, '.', ','); ?></td>
							<!--<td class="text_center"><?php echo $value['team']; ?></td>-->
							<!--<td style="height: 55px; font-size: 250%;" class="text_right"><?php echo $value['Consultant']['placed']; ?></td>-->
						</tr>

						<?php
							$row_number_rank += 1;

							$total_paid += $value['consultant']['paid'];
							$total_signed += $value['consultant']['signed'];
							$total_placed += $value['Consultant']['placed'];
					}
						endforeach;
					?>

					<tr class="revenue_table_footer">
						<td style="height: 51px; font-size: 200%;" class="text_center" colspan="3">Total</td>
						<td style="height: 51px; font-size: 200%;" class="text_right">&yen;<?php echo number_format($total_signed, $decimals, '.', ','); ?></td>
						<td style="height: 51px; font-size: 200%;" class="text_right">&yen;<?php echo number_format($total_paid, $decimals, '.', ','); ?></td>
						<!--<td style="height: 55px; font-size: 250%;" class="text_right"><?php echo $total_placed; ?></td>-->
					</tr>
				</table>
			</td>
			<td valign="top" >
			<table class="revenue_table">
					<tr>
						<th style="width:50%; font-size: 400%; white-space: nowrap;"  class="text_center" colspan="7"><?php echo ucfirst($location); ?> - Individual Revenue Researchers <?php echo $year; ?></th>
					</tr>
					<tr>
						<th style="height: 80px; font-size: 250%;" class="text_center">Rank</th>
						<th style="height: 80px; font-size: 250%;" class="text_center">Flag</th>
						<th style="height: 80px; font-size: 250%;" class="text_center">Name</th>
						<th style="height: 80px; font-size: 250%;" class="text_center">Revenue</th>
						<th style="height: 80px; font-size: 250%;" class="text_center"># of <br>Placements</th>
						<th style="height: 80px; font-size: 250%;" class="text_center">MCCM's</th>
						<th style="height: 80px; font-size: 250%;" class="text_center">CCM1</th>
						<!--<th class="text_center">Team</th>-->
						<!--<th style=" height: 45px; font-size: 300%;" class="text_center">Placed</th>-->
					</tr>

					<?php
						$total_paid_researcher = 0;
						$total_signed_researcher = 0;
						$total_placed_researcher = 0;
						$researcher_rank = 0;
						foreach ($revenue_data as $key => $value):

							if ($key == 'former' && empty($value['signed']))
								continue;

							if ($row_number_rank % 2 === 0)
								$even = ' even_row';
							else
								$even = '';

							if (empty($value['Researcher']['nationality']))
								$flag_pic = 'world_32.png';
							else if($value['Researcher']['nationality'] == "PK")
								$flag_pic = 'MNG_32.png';
							else
								$flag_pic = $value['Researcher']['nationality'].'_32.png';
					?>
					<?php if($value['Researcher']['userPosition'] == "Researcher" || $value['userPosition'] == "Not defined"){
						$researcher_rank ++;
						$total_consultant_count--;?>
						<tr class="hover_row<?php echo $even; ?>">
							<td style="height: 52px; font-size: 200%;" class="text_center"><?php echo $researcher_rank; ?></td>
							<td style="height: 52px; font-size: 200%;" class="text_center"><?php echo $display_object->getPicture('/common/pictures/flags/'.$flag_pic); ?></td>
							<td style="height: 52px; font-size: 200%;" class="text_center"><?php echo $value['Researcher']['name']; ?></td>
							<td style="height: 52px; font-size: 200%;" class="text_right">&yen;<?php echo number_format($value['researcher']['signed'], $decimals, '.', ','); ?></td>
							<td style="height: 52px; font-size: 200%;" class="text_center"><?php echo $value['Researcher']['placedRevenue']; ?></td>
							<td style="height: 52px; font-size: 200%;" class="text_center"><?php echo $value['Researcher']['mccm']; ?></td>
							<td style="height: 52px; font-size: 200%;" class="text_center"><?php echo $value['Researcher']['ccm1']; ?></td>
							<!--<td class="text_center"><?php echo $value['team']; ?></td>-->
							<!--<td style="height: 55px; font-size: 250%;" class="text_right"><?php echo $value['Researcher']['placed']; ?></td>-->
						</tr>

						<?php
							$row_number_rank += 1;

							//$total_paid += $value['paid'];
							$total_paid_researcher += $value['researcher']['paid'];
							//$total_signed += $value['signed'];
							$total_signed_researcher += $value['researcher']['signed'];
							//$total_placed += $value['placed'];
							$total_placed_researcher += $value['Researcher']['placed'];
					}
						endforeach;
					?>
					<?php if($total_consultant_count>0)
					{
						for ($i=0; $i < $total_consultant_count ; $i++) {
							echo "
							<tr>
								<td align='right' style='height: 52px;'>-</td>
								<td style='height: 52px;'><center>-</center></td>
								<td style='height: 52px;'><center>-</center></td>
								<td style='height: 52px;'><center>-</center></td>
								<td style='height: 52px;'><center>-</center></td>
								<td style='height: 52px;'><center>-</center></td>
								<td style='height: 52px;'><center>-</center></td>
							</tr>
							";
						}
					} ?>
					<tr class="revenue_table_footer">
						<td style="height: 52px; font-size: 200%;" class="text_center" colspan="3">Total</td>
						<td style="height: 52px; font-size: 200%;" class="text_left" colspan="4">&yen;<?php echo number_format($total_signed_researcher, $decimals, '.', ','); ?></td>
						<!--<td style="height: 55px; font-size: 250%;" class="text_right">&yen;<?php echo number_format($total_paid_researcher, $decimals, '.', ','); ?></td>-->
						<!--<td style="height: 55px; font-size: 250%;" class="text_right"><?php echo $total_placed_researcher; ?></td>-->
					</tr>
				</table>
			</td>
		</tr>
	</table>

<script>
	var url = '<?php echo $url; ?>';
	var swap_time = <?php echo $swap_time; ?>;

	$('.scrollingContainer').css('overflow', 'auto');
	/*setTimeout(function() {
		window.location.replace(url);
	}, (swap_time));*/
</script>