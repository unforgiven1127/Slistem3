<script>
	var nextloop = 5;
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

<form id="getKpiForm" action="" method="post">
	<div id="closeThis" class="general_form_row" style="font-size: 16px;">
		<div class="general_form_column">Start date: </div>
		<div class="general_form_column">
			<input id="start_date" style="width: 90px" type="text" name="start_date"
				value="2017-02-01" />
		</div>
		<div class="general_form_column add_margin_left_20">End date: </div>
		<div class="general_form_column">
			<input id="end_date" style="width: 90px" type="text" name="end_date"
				value="2017-02-28" />
		</div>
		<div class="general_form_column add_margin_left_10">
			<input type="submit" name="submit_totals" value="Get totals" />
		</div>
	</div>
</form>

	<table id="totals_table_id" class="totals_table">
	<tr>
		<th class='revenueSize0' colspan="15">Consultant totals - Feb 2017</th>
	</tr>
	<tr id="head">
		<th class="name_column revenueSize0">Name</th>
		<th class="revenueSize">Set</th>
		<th class="revenueSize">Met</th>
		<th class="revenueSize">Resumes sent</th>
		<th class="revenueSize">CCM1 set</th>
		<th class="revenueSize">CCM1 done</th>
		<th class="revenueSize">CCM2 set</th>
		<th class="revenueSize">CCM2 done</th>
		<th class="revenueSize">MCCM set</th>
		<th class="revenueSize">MCCM done</th>
		<th class="revenueSize">New candidates met</th>
		<th class="revenueSize">New candidates<br>in play</th>
		<th class="revenueSize">New positions<br>in play</th>
		<th class="revenueSize">Offer</th>
		<th class="revenueSize">Placement</th>
	</tr>

	
					<tr class="hover_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">B. Mo</td>
		<td>
			<div class="stat_holder revenueSize2" id="509">
			0			</div>
			<div class="stat_candi_info 509">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="509">
			0			</div>
			<div class="stat_candi_info 509">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="509">
			0			</div>
			<div class="stat_candi_info 509">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="509">
			0			</div>
			<div class="stat_candi_info 509">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="509">
			0			</div>
			<div class="stat_candi_info 509">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="509">
			0			</div>
			<div class="stat_candi_info 509">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="509">
			0			</div>
			<div class="stat_candi_info 509">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="509">
			0			</div>
			<div class="stat_candi_info 509">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="509">
			0			</div>
			<div class="stat_candi_info 509">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="509">
			0			</div>
			<div class="stat_candi_info 509">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="509">
			0			</div>
			<div class="stat_candi_info 509">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="509">
			0			</div>
			<div class="stat_candi_info 509">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="509">
			0			</div>
			<div class="stat_candi_info 509">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="509">
			0			</div>
			<div class="stat_candi_info 509">
						</div>
		</td>
	</tr>
	
					<tr class="hover_row even_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">C. Chen</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			2			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hayato Tsuchikawa (37)<br>Chief Risk Officer<br>Zurich Insurance Company Limted<br><br><i><p>Met in person for lunch. Well presented, not the most forthcoming in person, but warmed up after a while. Very happy with Zurich, and has excelled extremely well in his career. Ambitious and wants high level opportunities as well as money.</p>
<p>Making 14.6M base right now, with 18.6M total. Said he wants 20M to consider leaving. &nbsp;</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=339183&pg=ajx')">339183</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eiji Omae (-)<br>Account Executive<br>AIU Insurance Company<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420419&pg=ajx')">420419</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			2			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eiji Omae (-)<br>Account Executive<br>AIU Insurance Company<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420419&pg=ajx')">420419</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jen Wen (-)<br>Head of Portfolio Management<br>Sumitomo Mitsui Trust Club<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417767&pg=ajx')">417767</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			2			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryan Lim Zheng Yi (46)<br>Senior PMO Manager<br>AIG<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=300011&pg=ajx')">300011</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoko Tajika (44)<br>Project Manager & Structural Engineer<br>Solar Power Network<br><br><i><p>Aristocrat is moving out of Japan, so needs a new job ASAP. Spoke about AIG, and will move ahead.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419004&pg=ajx')">419004</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			0			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			2			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kai Obokata (29)<br>Sales Excellence Analyst<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i><p>Axial Solutions - in F2F at Slate conference room, told her they will offer her. Her remain 2 weeks patient as Global Sales Director speaks to HQ.</p>
<p>4 weeks later they said they were interested in a cheaper candidate.</p>
<p>Obviously this hurt her and wasted her time.  As she perfectly matched the role and was within their stated budget.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416337&pg=ajx')">416337</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			1			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kai Obokata (29)<br>Sales Excellence Analyst<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i><p>Axial Solutions - in F2F at Slate conference room, told her they will offer her. Her remain 2 weeks patient as Global Sales Director speaks to HQ.</p>
<p>4 weeks later they said they were interested in a cheaper candidate.</p>
<p>Obviously this hurt her and wasted her time.  As she perfectly matched the role and was within their stated budget.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416337&pg=ajx')">416337</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			0			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			0			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			0			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			2			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eiji Omae (-)<br>Account Executive<br>AIU Insurance Company<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420419&pg=ajx')">420419</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jen Wen (-)<br>Head of Portfolio Management<br>Sumitomo Mitsui Trust Club<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417767&pg=ajx')">417767</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			1			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			2			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a data-toggle="tooltip" title="Candidate ID: 416337" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9517&pg=ajx')">9517</a>
										</div>
							<div class="hover_row ">
										<a data-toggle="tooltip" title="Candidate ID: 414124" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9055&pg=ajx')">9055</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			0			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			0			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">J. Kovaliovas</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			7			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seishi Ikematsu (-)<br>Sales Manager<br>Kawasaki Heavy Industries, Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=324109&pg=ajx')">324109</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Zhao Wenwu (42)<br>Onsite Project Manager<br>Neusoft Japan Co., Ltd.<br><br><i><p>Is wanting to leave Neusoft as it is a Chinese SIer and the salaries are increasing so he does not know how long they can keep the edge.</p>
<p> </p>
<p>Is looking for Project Manager in Automotive or Device area.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413096&pg=ajx')">413096</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dinesh Vudathu (40)<br>Senior Project manger<br>Accel Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420571&pg=ajx')">420571</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masaaki Suzuki (53)<br>Sr. Quality Manager<br>Bose Corporation<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351324&pg=ajx')">351324</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Tadano (38)<br>R&D Engineer<br>Mitsubishi Automotive Techno-Service Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420601&pg=ajx')">420601</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masahiro Nakao (52)<br>Supplier Performance Engineer<br>Visteon Japan Ltd.<br><br><i><p>Open to new opps. Same requirements as before: QA, AQE, or Supplier Quality is ok, needs to be Yokohama or near, expected salary above 9M. Still at Visteon, and still working as a QE. </p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=301095&pg=ajx')">301095</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Yamada (40)<br>Interior Quality Manager for Asia<br>Continental AG<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420247&pg=ajx')">420247</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			9			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dinesh Vudathu (40)<br>Senior Project manger<br>Accel Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420571&pg=ajx')">420571</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masaaki Suzuki (53)<br>Sr. Quality Manager<br>Bose Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351324&pg=ajx')">351324</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Tadano (38)<br>R&D Engineer<br>Mitsubishi Automotive Techno-Service Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420601&pg=ajx')">420601</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masahiro Nakao (52)<br>Supplier Performance Engineer<br>Visteon Japan Ltd.<br><br><i><p>Open to new opps. Same requirements as before: QA, AQE, or Supplier Quality is ok, needs to be Yokohama or near, expected salary above 9M. Still at Visteon, and still working as a QE. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=301095&pg=ajx')">301095</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Yamada (40)<br>Interior Quality Manager for Asia<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420247&pg=ajx')">420247</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Te-Sheng Hsu (27)<br>Technical Support Engineer<br>Elliott Co., / Ebara Group<br><br><i><p>Young, green engineer from Taiwan. Joined Elliot (Compressors &amp; Steam Turbine) through campus recruit. Studied Japanese in University, graduated in Taiwan, wanted to make use of his Japanes so came to Japan for work. Done a lot of new grad trainee the past 1yr and now finally working as tech engineer. Responsible for tech support for East Asia - Korea, China, Singapore.&nbsp; Japanese good for internal communication but do not cover any domestic customers. Still young so not set on settli</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417079&pg=ajx')">417079</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hikaru Kitamura (30)<br>Inside Sales Advisor<br>Tesla Motors<br><br><i><p>Had a phone meeting with him. Good energy, native level English (graduated in Canada). Now working at Tesla Motors as an Inside Sales Advisor. It is a junior role, mostly taking care of customer experience and customer satisfaction, taking orders for cars, organising promotion. Does a lot of communication with his clients by phone and in person (only B2c experience so far). Making 4M at the moment. Will be an active mover in 6 months, since has only been with Tesla since October last year. 28</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404397&pg=ajx')">404397</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shantinath Indi (38)<br>Assistant Consultant<br>Tata Consultancy Services K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420373&pg=ajx')">420373</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Pornchai Weangsima (40)<br>Application Engineer<br>Plastic Omnium K.K.<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406430&pg=ajx')">406430</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			1			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka Yamamoto (53)<br>Quality Engineer<br>Autoliv Japan Ltd.<br><br><i>Dinner - Mar 14. Looks older than 49. Very nice guy. Doesn\t appear to be overly ambitious however, he is a hardcore runner and pushes himself to new challenges. He has some fire in the belly somewhere.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=331600&pg=ajx')">331600</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			1			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka Yamamoto (53)<br>Quality Engineer<br>Autoliv Japan Ltd.<br><br><i>Dinner - Mar 14. Looks older than 49. Very nice guy. Doesn\t appear to be overly ambitious however, he is a hardcore runner and pushes himself to new challenges. He has some fire in the belly somewhere.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=331600&pg=ajx')">331600</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			7			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dinesh Vudathu (40)<br>Senior Project manger<br>Accel Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420571&pg=ajx')">420571</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masaaki Suzuki (53)<br>Sr. Quality Manager<br>Bose Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351324&pg=ajx')">351324</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Tadano (38)<br>R&D Engineer<br>Mitsubishi Automotive Techno-Service Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420601&pg=ajx')">420601</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Yamada (40)<br>Interior Quality Manager for Asia<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420247&pg=ajx')">420247</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hikaru Kitamura (30)<br>Inside Sales Advisor<br>Tesla Motors<br><br><i><p>Had a phone meeting with him. Good energy, native level English (graduated in Canada). Now working at Tesla Motors as an Inside Sales Advisor. It is a junior role, mostly taking care of customer experience and customer satisfaction, taking orders for cars, organising promotion. Does a lot of communication with his clients by phone and in person (only B2c experience so far). Making 4M at the moment. Will be an active mover in 6 months, since has only been with Tesla since October last year. 28</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404397&pg=ajx')">404397</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shantinath Indi (38)<br>Assistant Consultant<br>Tata Consultancy Services K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420373&pg=ajx')">420373</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Pornchai Weangsima (40)<br>Application Engineer<br>Plastic Omnium K.K.<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406430&pg=ajx')">406430</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row even_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">K. Kapur</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			5			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shota Imako (44)<br><br>Toshiba<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420577&pg=ajx')">420577</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kei Hamada (35)<br>Manager<br>A.T Kearney<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417681&pg=ajx')">417681</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jie Dai (-)<br>Equity Research Analyst<br>SMBC Nikko<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415193&pg=ajx')">415193</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saeko Takayama (-)<br>Manager at Accenture Digital<br>Accenture Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=324730&pg=ajx')">324730</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sherry Zhuang (26)<br><br>Accenture Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420579&pg=ajx')">420579</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			1			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sherry Zhuang (26)<br><br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420579&pg=ajx')">420579</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			1			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sherry Zhuang (26)<br><br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420579&pg=ajx')">420579</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			1			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sherry Zhuang (26)<br><br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420579&pg=ajx')">420579</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			1			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			1			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sherry Zhuang (26)<br><br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420579&pg=ajx')">420579</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			1			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
	</tr>
	
					<tr class="hover_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">L. Fry</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			26			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuki Yamashita (42)<br>Assistant Manager<br>Kanden System Solutions Co., Inc.<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420515&pg=ajx')">420515</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taisuke Kurita (46)<br>Managing Director<br>EP Consulting<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420521&pg=ajx')">420521</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="KATSUTOSHI SUGANO (50)<br>General Manager, Altek Japan Corporation<br>Altek<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420524&pg=ajx')">420524</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masataka Aoyagi (45)<br>Executive Corporate Officer of Agent Service Division<br>Sony Real Estate<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=25241&pg=ajx')">25241</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoki Notoya (40)<br>Translator<br>Venga<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420528&pg=ajx')">420528</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akira Maruyama (47)<br>Finance & Corporate Services Department  (Assistant Manager)<br>Russell Investment<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420475&pg=ajx')">420475</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shin Nakahara (50)<br>Deputy Director - Risk Management Dept. / Tokio Marine Holdings, Inc<br>Tokio Marine  & Nichido Holdings<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420522&pg=ajx')">420522</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="YUXIN XUE (26)<br>Research Assistant<br>Tokyo University Graduate School<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420496&pg=ajx')">420496</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masanobu Kimura (52)<br>Japan Country Manager of Education, Software professional Services<br>Hewlett Packard<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420458&pg=ajx')">420458</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshiki Suzuki (39)<br>ASPAC IT Problem Manager<br>Beckman Coulter<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=337057&pg=ajx')">337057</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kathy Akaike (38)<br>Manage SOX Compliance<br>US Auto Parts Network<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420523&pg=ajx')">420523</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chuzen Kin (28)<br>Global Promotions & PR Specialist<br>Works Applications<br><br><i><p>Linked In.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=409905&pg=ajx')">409905</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Risa Kobayashi (42)<br>General Manager, IT System Division<br>Transcosmos<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420566&pg=ajx')">420566</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taichi Tokutake (34)<br>Interpreting<br>Cilect<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420526&pg=ajx')">420526</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sarimanu Suzuki (24)<br>Desktop Support Engineer<br>Bank of America Merrill Lynch<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420576&pg=ajx')">420576</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="ATSUSHI IKEDA (43)<br>Executive Director, Control Officer Director, Asia Pacific Controls Office<br>JP Morgan Chase & Co.<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420587&pg=ajx')">420587</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomas Kalab (31)<br> Administration staff<br>Intership - Housing Company<br><br><i><p>I think Pierres impression of this guy was off.  He had 2 good references and I liked him when I spoke to him.  Recommending hi to talk with Larry for CCM2. </p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=410406&pg=ajx')">410406</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taiga Giri (36)<br>System Administrator<br>Arcserve<br><br><i>Nepalese by birth came to Japan in 2002. Now has Japanese citizenship, and is married to a Japanese lady and has one child. Struggling to get by on 4.5M and knows he needs to consider new roles. Wife is currently off to raise the child and so they are living week by week.<br />
<br />
Background is in software dev but moved out of it and into general desktop support. Really bad move career wise and he is paying for it now. Has exp. with a wide variety of technologies including VMWare, BusinessOb</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344837&pg=ajx')">344837</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kyoe Oishi (52)<br>CTO<br>Smileworks<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420582&pg=ajx')">420582</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Taniguchi (52)<br>Product Management<br>Amkor Technology<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420543&pg=ajx')">420543</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akitsugu MATSUSHIMA (45)<br>Senior Account Manager<br>Huawei Japan<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420584&pg=ajx')">420584</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuka Murazumi (41)<br>Sales Operation Leader in Project and Contract Specialists<br>En World Japan K.K.<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420620&pg=ajx')">420620</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Christian Raphalen (48)<br>Business Analyst<br>Hewlett Packard<br><br><i>Linked In</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=401329&pg=ajx')">401329</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kimiko MINEGISHI (48)<br>Public Relation Division, Secretary / Translator to CEO<br>Universal Entertainment<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420559&pg=ajx')">420559</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiichi Kato (47)<br>Sales Support Consultant, Sales Strategy & Planning Team<br>Dell Japan Inc.<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420547&pg=ajx')">420547</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Liang Zhao (34)<br>Senior SAP SRM Consultant<br>Sap<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420505&pg=ajx')">420505</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			26			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuki Yamashita (42)<br>Assistant Manager<br>Kanden System Solutions Co., Inc.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420515&pg=ajx')">420515</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taisuke Kurita (46)<br>Managing Director<br>EP Consulting<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420521&pg=ajx')">420521</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="KATSUTOSHI SUGANO (50)<br>General Manager, Altek Japan Corporation<br>Altek<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420524&pg=ajx')">420524</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masataka Aoyagi (45)<br>Executive Corporate Officer of Agent Service Division<br>Sony Real Estate<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=25241&pg=ajx')">25241</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoki Notoya (40)<br>Translator<br>Venga<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420528&pg=ajx')">420528</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akira Maruyama (47)<br>Finance & Corporate Services Department  (Assistant Manager)<br>Russell Investment<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420475&pg=ajx')">420475</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shin Nakahara (50)<br>Deputy Director - Risk Management Dept. / Tokio Marine Holdings, Inc<br>Tokio Marine  & Nichido Holdings<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420522&pg=ajx')">420522</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="YUXIN XUE (26)<br>Research Assistant<br>Tokyo University Graduate School<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420496&pg=ajx')">420496</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masanobu Kimura (52)<br>Japan Country Manager of Education, Software professional Services<br>Hewlett Packard<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420458&pg=ajx')">420458</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshiki Suzuki (39)<br>ASPAC IT Problem Manager<br>Beckman Coulter<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=337057&pg=ajx')">337057</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kathy Akaike (38)<br>Manage SOX Compliance<br>US Auto Parts Network<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420523&pg=ajx')">420523</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chuzen Kin (28)<br>Global Promotions & PR Specialist<br>Works Applications<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=409905&pg=ajx')">409905</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Risa Kobayashi (42)<br>General Manager, IT System Division<br>Transcosmos<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420566&pg=ajx')">420566</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taichi Tokutake (34)<br>Interpreting<br>Cilect<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420526&pg=ajx')">420526</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sarimanu Suzuki (24)<br>Desktop Support Engineer<br>Bank of America Merrill Lynch<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420576&pg=ajx')">420576</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="ATSUSHI IKEDA (43)<br>Executive Director, Control Officer Director, Asia Pacific Controls Office<br>JP Morgan Chase & Co.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420587&pg=ajx')">420587</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomas Kalab (31)<br> Administration staff<br>Intership - Housing Company<br><br><i><p>I think Pierres impression of this guy was off.  He had 2 good references and I liked him when I spoke to him.  Recommending hi to talk with Larry for CCM2. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=410406&pg=ajx')">410406</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taiga Giri (36)<br>System Administrator<br>Arcserve<br><br><i>Nepalese by birth came to Japan in 2002. Now has Japanese citizenship, and is married to a Japanese lady and has one child. Struggling to get by on 4.5M and knows he needs to consider new roles. Wife is currently off to raise the child and so they are living week by week.<br />
<br />
Background is in software dev but moved out of it and into general desktop support. Really bad move career wise and he is paying for it now. Has exp. with a wide variety of technologies including VMWare, BusinessOb</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344837&pg=ajx')">344837</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kyoe Oishi (52)<br>CTO<br>Smileworks<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420582&pg=ajx')">420582</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Taniguchi (52)<br>Product Management<br>Amkor Technology<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420543&pg=ajx')">420543</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akitsugu MATSUSHIMA (45)<br>Senior Account Manager<br>Huawei Japan<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420584&pg=ajx')">420584</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuka Murazumi (41)<br>Sales Operation Leader in Project and Contract Specialists<br>En World Japan K.K.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420620&pg=ajx')">420620</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Christian Raphalen (48)<br>Business Analyst<br>Hewlett Packard<br><br><i>Linked In</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=401329&pg=ajx')">401329</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kimiko MINEGISHI (48)<br>Public Relation Division, Secretary / Translator to CEO<br>Universal Entertainment<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420559&pg=ajx')">420559</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiichi Kato (47)<br>Sales Support Consultant, Sales Strategy & Planning Team<br>Dell Japan Inc.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420547&pg=ajx')">420547</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Liang Zhao (34)<br>Senior SAP SRM Consultant<br>Sap<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420505&pg=ajx')">420505</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			4			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasuhisa Ichikawa (53)<br>Project Manager<br>MetLife Ltd.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=30799&pg=ajx')">30799</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sachin Aggarwal (39)<br>Sales Director - Engineering Services<br>HCL Japan Ltd.<br><br><i><p>Francis assessed him by phone.</p>
<p>Has started his career in high tech semicon/electronics industry as an IC design engineer, experienced in project manager, program manager and presales.</p>
<p>He is now at KPIT in charge of Denso as a BDM for an engineering services </p>
<p>On 10M+1.5M</p>
<p>Planning to meet Tata Elxsi next week (bummer) and applied Visteon</p>
<p>I have pitched Wipro and HCL</p>
<p>Good guy</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=346430&pg=ajx')">346430</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saiko Kataoka (36)<br>E-Broking Market Administrator<br>Tullett Prebon Singapore Ltd.<br><br><i><p>Francis assessed him by phone.</p>
<p>Has started his career in high tech semicon/electronics industry as an IC design engineer, experienced in project manager, program manager and presales.</p>
<p>He is now at KPIT in charge of Denso as a BDM for an engineering services </p>
<p>On 10M+1.5M</p>
<p>Planning to meet Tata Elxsi next week (bummer) and applied Visteon</p>
<p>I have pitched Wipro and HCL</p>
<p>Good guy</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420430&pg=ajx')">420430</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			4			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasuhisa Ichikawa (53)<br>Project Manager<br>MetLife Ltd.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=30799&pg=ajx')">30799</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sachin Aggarwal (39)<br>Sales Director - Engineering Services<br>HCL Japan Ltd.<br><br><i><p>Francis assessed him by phone.</p>
<p>Has started his career in high tech semicon/electronics industry as an IC design engineer, experienced in project manager, program manager and presales.</p>
<p>He is now at KPIT in charge of Denso as a BDM for an engineering services </p>
<p>On 10M+1.5M</p>
<p>Planning to meet Tata Elxsi next week (bummer) and applied Visteon</p>
<p>I have pitched Wipro and HCL</p>
<p>Good guy</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=346430&pg=ajx')">346430</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saiko Kataoka (36)<br>E-Broking Market Administrator<br>Tullett Prebon Singapore Ltd.<br><br><i><p>Francis assessed him by phone.</p>
<p>Has started his career in high tech semicon/electronics industry as an IC design engineer, experienced in project manager, program manager and presales.</p>
<p>He is now at KPIT in charge of Denso as a BDM for an engineering services </p>
<p>On 10M+1.5M</p>
<p>Planning to meet Tata Elxsi next week (bummer) and applied Visteon</p>
<p>I have pitched Wipro and HCL</p>
<p>Good guy</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420430&pg=ajx')">420430</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			2			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saiko Kataoka (36)<br>E-Broking Market Administrator<br>Tullett Prebon Singapore Ltd.<br><br><i><p>Francis assessed him by phone.</p>
<p>Has started his career in high tech semicon/electronics industry as an IC design engineer, experienced in project manager, program manager and presales.</p>
<p>He is now at KPIT in charge of Denso as a BDM for an engineering services </p>
<p>On 10M+1.5M</p>
<p>Planning to meet Tata Elxsi next week (bummer) and applied Visteon</p>
<p>I have pitched Wipro and HCL</p>
<p>Good guy</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420430&pg=ajx')">420430</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			0			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			0			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			0			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			0			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			26			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuki Yamashita (42)<br>Assistant Manager<br>Kanden System Solutions Co., Inc.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420515&pg=ajx')">420515</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taisuke Kurita (46)<br>Managing Director<br>EP Consulting<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420521&pg=ajx')">420521</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="KATSUTOSHI SUGANO (50)<br>General Manager, Altek Japan Corporation<br>Altek<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420524&pg=ajx')">420524</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masataka Aoyagi (45)<br>Executive Corporate Officer of Agent Service Division<br>Sony Real Estate<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=25241&pg=ajx')">25241</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoki Notoya (40)<br>Translator<br>Venga<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420528&pg=ajx')">420528</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akira Maruyama (47)<br>Finance & Corporate Services Department  (Assistant Manager)<br>Russell Investment<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420475&pg=ajx')">420475</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shin Nakahara (50)<br>Deputy Director - Risk Management Dept. / Tokio Marine Holdings, Inc<br>Tokio Marine  & Nichido Holdings<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420522&pg=ajx')">420522</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="YUXIN XUE (26)<br>Research Assistant<br>Tokyo University Graduate School<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420496&pg=ajx')">420496</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masanobu Kimura (52)<br>Japan Country Manager of Education, Software professional Services<br>Hewlett Packard<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420458&pg=ajx')">420458</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshiki Suzuki (39)<br>ASPAC IT Problem Manager<br>Beckman Coulter<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=337057&pg=ajx')">337057</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kathy Akaike (38)<br>Manage SOX Compliance<br>US Auto Parts Network<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420523&pg=ajx')">420523</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chuzen Kin (28)<br>Global Promotions & PR Specialist<br>Works Applications<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=409905&pg=ajx')">409905</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Risa Kobayashi (42)<br>General Manager, IT System Division<br>Transcosmos<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420566&pg=ajx')">420566</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taichi Tokutake (34)<br>Interpreting<br>Cilect<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420526&pg=ajx')">420526</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sarimanu Suzuki (24)<br>Desktop Support Engineer<br>Bank of America Merrill Lynch<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420576&pg=ajx')">420576</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="ATSUSHI IKEDA (43)<br>Executive Director, Control Officer Director, Asia Pacific Controls Office<br>JP Morgan Chase & Co.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420587&pg=ajx')">420587</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomas Kalab (31)<br> Administration staff<br>Intership - Housing Company<br><br><i><p>I think Pierres impression of this guy was off.  He had 2 good references and I liked him when I spoke to him.  Recommending hi to talk with Larry for CCM2. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=410406&pg=ajx')">410406</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taiga Giri (36)<br>System Administrator<br>Arcserve<br><br><i>Nepalese by birth came to Japan in 2002. Now has Japanese citizenship, and is married to a Japanese lady and has one child. Struggling to get by on 4.5M and knows he needs to consider new roles. Wife is currently off to raise the child and so they are living week by week.<br />
<br />
Background is in software dev but moved out of it and into general desktop support. Really bad move career wise and he is paying for it now. Has exp. with a wide variety of technologies including VMWare, BusinessOb</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344837&pg=ajx')">344837</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kyoe Oishi (52)<br>CTO<br>Smileworks<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420582&pg=ajx')">420582</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Taniguchi (52)<br>Product Management<br>Amkor Technology<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420543&pg=ajx')">420543</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akitsugu MATSUSHIMA (45)<br>Senior Account Manager<br>Huawei Japan<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420584&pg=ajx')">420584</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuka Murazumi (41)<br>Sales Operation Leader in Project and Contract Specialists<br>En World Japan K.K.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420620&pg=ajx')">420620</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Christian Raphalen (48)<br>Business Analyst<br>Hewlett Packard<br><br><i>Linked In</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=401329&pg=ajx')">401329</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kimiko MINEGISHI (48)<br>Public Relation Division, Secretary / Translator to CEO<br>Universal Entertainment<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420559&pg=ajx')">420559</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiichi Kato (47)<br>Sales Support Consultant, Sales Strategy & Planning Team<br>Dell Japan Inc.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420547&pg=ajx')">420547</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Liang Zhao (34)<br>Senior SAP SRM Consultant<br>Sap<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420505&pg=ajx')">420505</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			1			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saiko Kataoka (36)<br>E-Broking Market Administrator<br>Tullett Prebon Singapore Ltd.<br><br><i><p>Francis assessed him by phone.</p>
<p>Has started his career in high tech semicon/electronics industry as an IC design engineer, experienced in project manager, program manager and presales.</p>
<p>He is now at KPIT in charge of Denso as a BDM for an engineering services </p>
<p>On 10M+1.5M</p>
<p>Planning to meet Tata Elxsi next week (bummer) and applied Visteon</p>
<p>I have pitched Wipro and HCL</p>
<p>Good guy</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420430&pg=ajx')">420430</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			1			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a data-toggle="tooltip" title="Candidate ID: 420430" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9556&pg=ajx')">9556</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			0			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			0			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
	</tr>
	
					<tr class="hover_row even_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">M. Moir</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			1			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kei Nakamine (34)<br>Manager<br>Shire Baxalta<br><br><i>Bizreach.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323322&pg=ajx')">323322</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			1			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroko Sakimoto (34)<br>Consultant<br>Simon Kucher<br><br><i><p>pitched MSJ but prefers to project management role.</p>
<p>applied Eisai portfolio management from other agency.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=311528&pg=ajx')">311528</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			1			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a data-toggle="tooltip" title="Candidate ID: 311528" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9452&pg=ajx')">9452</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			1			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroko Sakimoto (34)<br>Consultant<br>Simon Kucher<br><br><i><p>pitched MSJ but prefers to project management role.</p>
<p>applied Eisai portfolio management from other agency.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=311528&pg=ajx')">311528</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">O. Rondos</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			1			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chikako Abe (-)<br>Public Relations - Director<br>Estee Lauder Group<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420570&pg=ajx')">420570</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			1			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chikako Abe (-)<br>Public Relations - Director<br>Estee Lauder Group<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420570&pg=ajx')">420570</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			3			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chuzen Kin (28)<br>Global Promotions & PR Specialist<br>Works Applications<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=409905&pg=ajx')">409905</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mohammad Sajid (34)<br>Business Development/Account Management Professional (Bilingual: English⇔Japanese)<br>SRM Systems & Software K.K.<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417070&pg=ajx')">417070</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Katsuhisa Misawa (46)<br>IT Engineer<br>Global Navigator Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418245&pg=ajx')">418245</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			0			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			0			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			0			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			0			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			0			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			0			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			1			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chikako Abe (-)<br>Public Relations - Director<br>Estee Lauder Group<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420570&pg=ajx')">420570</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			0			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			0			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			1			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Satoshi Toyotomi (43)<br>Manager<br>The Nielsen Company Japan<br><br><i>Not concise at all, talks too much which always concerns me.<br />
<br />
Said he joined L\Oreal but did not expect to be dealing with Women\s products as much as he is - BULLSHIT.<br />
<br />
Wants out, and back into Healthcare related.<br />
<br />
Hoppy past but reasonable experience and shit excuses for changes.<br />
<br />
Experience is more toward Qualitative Research - NOT Quantitative.<br />
<br />
Has worked with Various Pharma & Med. Companies... Mentioned he worked Epidemiology &</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=309638&pg=ajx')">309638</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			1			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Satoshi Toyotomi (43)<br>Manager<br>The Nielsen Company Japan<br><br><i>Not concise at all, talks too much which always concerns me.<br />
<br />
Said he joined L\Oreal but did not expect to be dealing with Women\s products as much as he is - BULLSHIT.<br />
<br />
Wants out, and back into Healthcare related.<br />
<br />
Hoppy past but reasonable experience and shit excuses for changes.<br />
<br />
Experience is more toward Qualitative Research - NOT Quantitative.<br />
<br />
Has worked with Various Pharma & Med. Companies... Mentioned he worked Epidemiology &</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=309638&pg=ajx')">309638</a>
										</div>
									</div>
		</td>
	</tr>
	
					<tr class="hover_row even_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">P. Miles Harry</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			0			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			0			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			1			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinobu Ichikawa (43)<br>Manager Technical Services Packaging<br>Havi Global Solutions Japan<br><br><i><p>met with Tada -was OK.  Personality test plus a Japanese test, English teats, numerical test, and a verbal reasoning test. 45 minutes with HRD then a different HR Member.  </p>
<p>was at 11 at PWC -now at 8.  going to interviews and the benchmark is now about 10~11.  DTC 13M range.  </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420552&pg=ajx')">420552</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			1			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Franck Chesneau (35)<br>Process Engineer<br>Danone Japan K.K.<br><br><i><p>Referral from hayashi-san from Janssen</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=362853&pg=ajx')">362853</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			3			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			0			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			0			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			0			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			0			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			0			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			1			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			1			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a data-toggle="tooltip" title="Candidate ID: 414484" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9467&pg=ajx')">9467</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			0			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			0			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
	</tr>
	
					<tr class="hover_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">P. Thai</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			4			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tsuyoshi Hashiguchi (31)<br>Consultant<br>Kurt Salmon Associates<br><br><i><p>Working in retail/apparel space right now. His specialty is communications. He is interested in Retail space. Kurt Salmon is being acquired by Accenture and he isnt sure if he wants to stay or move.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418389&pg=ajx')">418389</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichiro Enomoto (52)<br>Senior Manager<br>Wind River Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420598&pg=ajx')">420598</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryohei Maeda (26)<br>Marketing Executive<br>American Express<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420619&pg=ajx')">420619</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinya Murakami (34)<br>Business Development Executive<br>Limelight Networks<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420537&pg=ajx')">420537</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			1			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinya Murakami (34)<br>Business Development Executive<br>Limelight Networks<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420537&pg=ajx')">420537</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			3			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazufumi Nieda (50)<br>Finance Manager<br>Autodesk Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=121633&pg=ajx')">121633</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Kato (45)<br>Product Marketing<br>Vistanet<br><br><i><p>Just returned from working in the Yukon territories in Canada.  His wife and kid are still there but they will be returning to Japan soon.  Is looking for a role in Tokyo, really likes the IoT areas, and AI, in cutting edge technologies.  Would like 14M but this is a bit high.  Very good E and is open minded at this point.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=206683&pg=ajx')">206683</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Miyuki Nakamura (27)<br>eCommerce & Digital Marketing eCommerce customer Marketing Executive<br>Unilever<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420541&pg=ajx')">420541</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			4			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazufumi Nieda (50)<br>Finance Manager<br>Autodesk Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=121633&pg=ajx')">121633</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Kato (45)<br>Product Marketing<br>Vistanet<br><br><i><p>Just returned from working in the Yukon territories in Canada.  His wife and kid are still there but they will be returning to Japan soon.  Is looking for a role in Tokyo, really likes the IoT areas, and AI, in cutting edge technologies.  Would like 14M but this is a bit high.  Very good E and is open minded at this point.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=206683&pg=ajx')">206683</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Miyuki Nakamura (27)<br>eCommerce & Digital Marketing eCommerce customer Marketing Executive<br>Unilever<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420541&pg=ajx')">420541</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masatoshi Nagai (38)<br>Senior Consultant, Industrial Products and Heavy Industry Unit<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417785&pg=ajx')">417785</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			2			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Kato (45)<br>Product Marketing<br>Vistanet<br><br><i><p>Just returned from working in the Yukon territories in Canada.  His wife and kid are still there but they will be returning to Japan soon.  Is looking for a role in Tokyo, really likes the IoT areas, and AI, in cutting edge technologies.  Would like 14M but this is a bit high.  Very good E and is open minded at this point.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=206683&pg=ajx')">206683</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			2			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Kato (45)<br>Product Marketing<br>Vistanet<br><br><i><p>Just returned from working in the Yukon territories in Canada.  His wife and kid are still there but they will be returning to Japan soon.  Is looking for a role in Tokyo, really likes the IoT areas, and AI, in cutting edge technologies.  Would like 14M but this is a bit high.  Very good E and is open minded at this point.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=206683&pg=ajx')">206683</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			1			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			1			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			0			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			1			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinya Murakami (34)<br>Business Development Executive<br>Limelight Networks<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420537&pg=ajx')">420537</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			1			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			1			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a data-toggle="tooltip" title="Candidate ID: 419833" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9484&pg=ajx')">9484</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			1			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Christophers William Benjamin (33)<br>FP&A Manager<br>Otis Japan<br><br><i><p>met with Tada -was OK.  Personality test plus a Japanese test, English teats, numerical test, and a verbal reasoning test. 45 minutes with HRD then a different HR Member.  </p>
<p>was at 11 at PWC -now at 8.  going to interviews and the benchmark is now about 10~11.  DTC 13M range.  </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413977&pg=ajx')">413977</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			1			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Christophers William Benjamin (33)<br>FP&A Manager<br>Otis Japan<br><br><i><p>met with Tada -was OK.  Personality test plus a Japanese test, English teats, numerical test, and a verbal reasoning test. 45 minutes with HRD then a different HR Member.  </p>
<p>was at 11 at PWC -now at 8.  going to interviews and the benchmark is now about 10~11.  DTC 13M range.  </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413977&pg=ajx')">413977</a>
										</div>
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row even_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">R. Pedersen</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			9			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Von Briscoe (-)<br><br>Marketing<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417628&pg=ajx')">417628</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ramdan Abbacha (48)<br>Senior Estimator<br>Construction G.C.<br><br><i><p>Originally from Algeria, been in Canada 20 Years. Has Citizenship. Work on large scale projects ranging from $500K - $100 mil dollars. Has 15 years experience in Heavy civil construction. Has worked with hard rock, has built roads, bridges, etc.&nbsp; He was part of the project for the Champlain bridge in Quebec. This was a joint venture between 3 companies and his part was worth $100 mil. Has managed up to 4 Junior estimators. Wants to move out of Montreal as the work situation isnt very go</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420569&pg=ajx')">420569</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nadia Kozak (-)<br><br>Slate Applicant<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420568&pg=ajx')">420568</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eva Ma (25)<br>Ground Handling - Customer Service Agent in ChangI Airport<br>Unemployed<br><br><i><p>Met with her in the office today and she kind of looked liked a contestant for Ms. Taiwan.</p>
<p>Did her Master from Waseda University and majored in Development Economics 3 months ago.</p>
<p>From Taiwan speaks E5, conversational J and Native Mandarin. 27 yrs old</p>
<p>Has interviewed with several Recruitment companies and some are still in process but has not received an offer.</p>
<p>She is very motivated to work in Japan for the money and wants to make enough money to invest into RE.</p</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420395&pg=ajx')">420395</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Julia Ivanichenko (-)<br>Senior IT Recruiter<br>Scalors GmbH<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420191&pg=ajx')">420191</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Baba (-)<br>image compositor<br>Slate Candidate<br><br><i><p>Targeting for Slate.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418868&pg=ajx')">418868</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremiah Booker (39)<br>Project Manager<br>Intersoftkk Japan<br><br><i><p>Originally from Ontario. Living in Olds AB. General Manger of Foran Equipment. Has 10 years experience in blasting and drilling. His whole career was in Heavy civil also knows how to operate equipment. Has class 5 gave up his class 1 as he isnt operating heavy equipment anymore. Responsibilities is to run the business face clients, manage estimate from take off to handover and all day to day operations. Making $140K - $145K and is flexible. Manages anything from 30 to 40 people at a time dep</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=91313&pg=ajx')">91313</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taryn Ashdown (24)<br><br>Slate Applicant<br><br><i><p>Smart and apparently driven.&nbsp;</p>
<p>she is from BC but did University in Ottawa. Her motivation to leave Ottawa is to be more near to her family. She is originally from Campbell River. Her draw to HR is that people have always told her she would be good at it. she enjoys working with people. &nbsp;Does per and temp placements at present. She has been more on the sourcing side so far. A difficult role she had was a Jenkins process manager -QA related. &nbsp;She sources candidates on her</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420600&pg=ajx')">420600</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			8			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nadia Kozak (-)<br><br>Slate Applicant<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420568&pg=ajx')">420568</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eva Ma (25)<br>Ground Handling - Customer Service Agent in ChangI Airport<br>Unemployed<br><br><i><p>Met with her in the office today and she kind of looked liked a contestant for Ms. Taiwan.</p>
<p>Did her Master from Waseda University and majored in Development Economics 3 months ago.</p>
<p>From Taiwan speaks E5, conversational J and Native Mandarin. 27 yrs old</p>
<p>Has interviewed with several Recruitment companies and some are still in process but has not received an offer.</p>
<p>She is very motivated to work in Japan for the money and wants to make enough money to invest into RE.</p</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420395&pg=ajx')">420395</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Julia Ivanichenko (-)<br>Senior IT Recruiter<br>Scalors GmbH<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420191&pg=ajx')">420191</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Baba (-)<br>image compositor<br>Slate Candidate<br><br><i><p>Targeting for Slate.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418868&pg=ajx')">418868</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremiah Booker (39)<br>Project Manager<br>Intersoftkk Japan<br><br><i><p>Originally from Ontario. Living in Olds AB. General Manger of Foran Equipment. Has 10 years experience in blasting and drilling. His whole career was in Heavy civil also knows how to operate equipment. Has class 5 gave up his class 1 as he isnt operating heavy equipment anymore. Responsibilities is to run the business face clients, manage estimate from take off to handover and all day to day operations. Making $140K - $145K and is flexible. Manages anything from 30 to 40 people at a time dep</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=91313&pg=ajx')">91313</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taryn Ashdown (24)<br><br>Slate Applicant<br><br><i><p>Smart and apparently driven.&nbsp;</p>
<p>she is from BC but did University in Ottawa. Her motivation to leave Ottawa is to be more near to her family. She is originally from Campbell River. Her draw to HR is that people have always told her she would be good at it. she enjoys working with people. &nbsp;Does per and temp placements at present. She has been more on the sourcing side so far. A difficult role she had was a Jenkins process manager -QA related. &nbsp;She sources candidates on her</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420600&pg=ajx')">420600</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Amar Walia (-)<br>IT Recruitment Consultant<br>Boyd & Moore Executive Search<br><br><i><p>born in Jamaica -Canadian Citizen.  Sold real estate and then mortgages.  Has lived in Korea, China and Japan has been in Japan for 10 years.  Professionally he is a business English trainer. Has also started entertainment companies -brought DJs in for events etc. Moving forward his plan is to be in Sales. </p>
<p>He feels that what we do is similar to what he does now.  has spoken to a fee recruiters so he has an insight into how the process works.  His timeline for looking for new opp</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419929&pg=ajx')">419929</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			8			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Von Briscoe (-)<br><br>Marketing<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417628&pg=ajx')">417628</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nadia Kozak (-)<br><br>Slate Applicant<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420568&pg=ajx')">420568</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremiah Booker (39)<br>Project Manager<br>Intersoftkk Japan<br><br><i><p>Originally from Ontario. Living in Olds AB. General Manger of Foran Equipment. Has 10 years experience in blasting and drilling. His whole career was in Heavy civil also knows how to operate equipment. Has class 5 gave up his class 1 as he isnt operating heavy equipment anymore. Responsibilities is to run the business face clients, manage estimate from take off to handover and all day to day operations. Making $140K - $145K and is flexible. Manages anything from 30 to 40 people at a time dep</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=91313&pg=ajx')">91313</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Amar Walia (-)<br>IT Recruitment Consultant<br>Boyd & Moore Executive Search<br><br><i><p>born in Jamaica -Canadian Citizen.  Sold real estate and then mortgages.  Has lived in Korea, China and Japan has been in Japan for 10 years.  Professionally he is a business English trainer. Has also started entertainment companies -brought DJs in for events etc. Moving forward his plan is to be in Sales. </p>
<p>He feels that what we do is similar to what he does now.  has spoken to a fee recruiters so he has an insight into how the process works.  His timeline for looking for new opp</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419929&pg=ajx')">419929</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nicholas Choy (-)<br>Consultant<br>The Bridge Group<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419798&pg=ajx')">419798</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michael Reid (-)<br><br>Slate Applicant<br><br><i><p>Good communications skills, was easy to talk. Really sociable. Presentable. Seems like really interested in this job. Asked good questions. Said that he received an offer from East West but declined to join. Actively interviewing with recruiting agencies. Definitely should come for trial.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420386&pg=ajx')">420386</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Irina Magnea (-)<br><br>Slate Applicant<br><br><i><p>came up for the interview. paid 2man for the ticket out of his own pocket. . the interview was interesting.  </p>
<p>wants to start working on trial </p>
<p>wants to start working from 20th of March or April 1st.  </p>
<p>Keen to proceed with Slate.  Will do a trial. </p>
<p> </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420406&pg=ajx')">420406</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			13			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Von Briscoe (-)<br><br>Marketing<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417628&pg=ajx')">417628</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nadia Kozak (-)<br><br>Slate Applicant<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420568&pg=ajx')">420568</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremiah Booker (39)<br>Project Manager<br>Intersoftkk Japan<br><br><i><p>Originally from Ontario. Living in Olds AB. General Manger of Foran Equipment. Has 10 years experience in blasting and drilling. His whole career was in Heavy civil also knows how to operate equipment. Has class 5 gave up his class 1 as he isnt operating heavy equipment anymore. Responsibilities is to run the business face clients, manage estimate from take off to handover and all day to day operations. Making $140K - $145K and is flexible. Manages anything from 30 to 40 people at a time dep</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=91313&pg=ajx')">91313</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Amar Walia (-)<br>IT Recruitment Consultant<br>Boyd & Moore Executive Search<br><br><i><p>born in Jamaica -Canadian Citizen.  Sold real estate and then mortgages.  Has lived in Korea, China and Japan has been in Japan for 10 years.  Professionally he is a business English trainer. Has also started entertainment companies -brought DJs in for events etc. Moving forward his plan is to be in Sales. </p>
<p>He feels that what we do is similar to what he does now.  has spoken to a fee recruiters so he has an insight into how the process works.  His timeline for looking for new opp</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419929&pg=ajx')">419929</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nicholas Choy (-)<br>Consultant<br>The Bridge Group<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419798&pg=ajx')">419798</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michael Reid (-)<br><br>Slate Applicant<br><br><i><p>Good communications skills, was easy to talk. Really sociable. Presentable. Seems like really interested in this job. Asked good questions. Said that he received an offer from East West but declined to join. Actively interviewing with recruiting agencies. Definitely should come for trial.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420386&pg=ajx')">420386</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Irina Magnea (-)<br><br>Slate Applicant<br><br><i><p>came up for the interview. paid 2man for the ticket out of his own pocket. . the interview was interesting.  </p>
<p>wants to start working on trial </p>
<p>wants to start working from 20th of March or April 1st.  </p>
<p>Keen to proceed with Slate.  Will do a trial. </p>
<p> </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420406&pg=ajx')">420406</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			11			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Von Briscoe (-)<br><br>Marketing<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417628&pg=ajx')">417628</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michael Reid (-)<br><br>Slate Applicant<br><br><i><p>Good communications skills, was easy to talk. Really sociable. Presentable. Seems like really interested in this job. Asked good questions. Said that he received an offer from East West but declined to join. Actively interviewing with recruiting agencies. Definitely should come for trial.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420386&pg=ajx')">420386</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Irina Magnea (-)<br><br>Slate Applicant<br><br><i><p>came up for the interview. paid 2man for the ticket out of his own pocket. . the interview was interesting.  </p>
<p>wants to start working on trial </p>
<p>wants to start working from 20th of March or April 1st.  </p>
<p>Keen to proceed with Slate.  Will do a trial. </p>
<p> </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420406&pg=ajx')">420406</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Merve Demirci (-)<br><br>Slate Applicant<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420381&pg=ajx')">420381</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eric Nguyen (-)<br><br>Slate Applicant<br><br><i><p>born in Jamaica -Canadian Citizen.  Sold real estate and then mortgages.  Has lived in Korea, China and Japan has been in Japan for 10 years.  Professionally he is a business English trainer. Has also started entertainment companies -brought DJs in for events etc. Moving forward his plan is to be in Sales. </p>
<p>He feels that what we do is similar to what he does now.  has spoken to a fee recruiters so he has an insight into how the process works.  His timeline for looking for new opp</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420378&pg=ajx')">420378</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sarah Carr (24)<br><br>Slate Applicant<br><br><i><p>Hi Merve,<br />See you then. Pleas come to 3F<br />Best regards,<br />Ray</p>
<p>-------------------------------------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile: +1-250-641-9746 <br />Japan Mobile: +81-(0)90-5519-7119</p>
<p>From: mervem demirci &lt;mervem.demirci@gmail.com&gt;<br />To: Ray Pedersen &lt;ray@slate-ghc.com&gt;<br />Sent: Wednesday, February 1, 2017 6:00:28 AM<br />Subject: Re: hi from Ray Pedersen</p>
<p>Dear Ray,<br />Monday 1</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420383&pg=ajx')">420383</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			2			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Merve Demirci (-)<br><br>Slate Applicant<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420381&pg=ajx')">420381</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sarah Carr (24)<br><br>Slate Applicant<br><br><i><p>Hi Merve,<br />See you then. Pleas come to 3F<br />Best regards,<br />Ray</p>
<p>-------------------------------------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile: +1-250-641-9746 <br />Japan Mobile: +81-(0)90-5519-7119</p>
<p>From: mervem demirci &lt;mervem.demirci@gmail.com&gt;<br />To: Ray Pedersen &lt;ray@slate-ghc.com&gt;<br />Sent: Wednesday, February 1, 2017 6:00:28 AM<br />Subject: Re: hi from Ray Pedersen</p>
<p>Dear Ray,<br />Monday 1</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420383&pg=ajx')">420383</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			1			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takeshi Miura (52)<br>Manager<br>Accenture Japan<br><br><i><p>I assume shes (book) smart as per academic acheivements. 5 years in Japan. Work wise mainly an English teacher.  Had a short stint at Specialized Group as Data Entry which experienced Recruiting environment but not the actual work or know how about the job. My assumption she is more farmer than Hunter.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=25381&pg=ajx')">25381</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			1			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takeshi Miura (52)<br>Manager<br>Accenture Japan<br><br><i><p>I assume shes (book) smart as per academic acheivements. 5 years in Japan. Work wise mainly an English teacher.  Had a short stint at Specialized Group as Data Entry which experienced Recruiting environment but not the actual work or know how about the job. My assumption she is more farmer than Hunter.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=25381&pg=ajx')">25381</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			0			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			8			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nadia Kozak (-)<br><br>Slate Applicant<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420568&pg=ajx')">420568</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eva Ma (25)<br>Ground Handling - Customer Service Agent in ChangI Airport<br>Unemployed<br><br><i><p>Met with her in the office today and she kind of looked liked a contestant for Ms. Taiwan.</p>
<p>Did her Master from Waseda University and majored in Development Economics 3 months ago.</p>
<p>From Taiwan speaks E5, conversational J and Native Mandarin. 27 yrs old</p>
<p>Has interviewed with several Recruitment companies and some are still in process but has not received an offer.</p>
<p>She is very motivated to work in Japan for the money and wants to make enough money to invest into RE.</p</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420395&pg=ajx')">420395</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Julia Ivanichenko (-)<br>Senior IT Recruiter<br>Scalors GmbH<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420191&pg=ajx')">420191</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Baba (-)<br>image compositor<br>Slate Candidate<br><br><i><p>Targeting for Slate.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418868&pg=ajx')">418868</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremiah Booker (39)<br>Project Manager<br>Intersoftkk Japan<br><br><i><p>Originally from Ontario. Living in Olds AB. General Manger of Foran Equipment. Has 10 years experience in blasting and drilling. His whole career was in Heavy civil also knows how to operate equipment. Has class 5 gave up his class 1 as he isnt operating heavy equipment anymore. Responsibilities is to run the business face clients, manage estimate from take off to handover and all day to day operations. Making $140K - $145K and is flexible. Manages anything from 30 to 40 people at a time dep</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=91313&pg=ajx')">91313</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taryn Ashdown (24)<br><br>Slate Applicant<br><br><i><p>Smart and apparently driven.&nbsp;</p>
<p>she is from BC but did University in Ottawa. Her motivation to leave Ottawa is to be more near to her family. She is originally from Campbell River. Her draw to HR is that people have always told her she would be good at it. she enjoys working with people. &nbsp;Does per and temp placements at present. She has been more on the sourcing side so far. A difficult role she had was a Jenkins process manager -QA related. &nbsp;She sources candidates on her</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420600&pg=ajx')">420600</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Amar Walia (-)<br>IT Recruitment Consultant<br>Boyd & Moore Executive Search<br><br><i><p>born in Jamaica -Canadian Citizen.  Sold real estate and then mortgages.  Has lived in Korea, China and Japan has been in Japan for 10 years.  Professionally he is a business English trainer. Has also started entertainment companies -brought DJs in for events etc. Moving forward his plan is to be in Sales. </p>
<p>He feels that what we do is similar to what he does now.  has spoken to a fee recruiters so he has an insight into how the process works.  His timeline for looking for new opp</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419929&pg=ajx')">419929</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			4			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Merve Demirci (-)<br><br>Slate Applicant<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420381&pg=ajx')">420381</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eric Nguyen (-)<br><br>Slate Applicant<br><br><i><p>born in Jamaica -Canadian Citizen.  Sold real estate and then mortgages.  Has lived in Korea, China and Japan has been in Japan for 10 years.  Professionally he is a business English trainer. Has also started entertainment companies -brought DJs in for events etc. Moving forward his plan is to be in Sales. </p>
<p>He feels that what we do is similar to what he does now.  has spoken to a fee recruiters so he has an insight into how the process works.  His timeline for looking for new opp</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420378&pg=ajx')">420378</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			0			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			4			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Von Briscoe (-)<br><br>Marketing<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417628&pg=ajx')">417628</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michael Reid (-)<br><br>Slate Applicant<br><br><i><p>Good communications skills, was easy to talk. Really sociable. Presentable. Seems like really interested in this job. Asked good questions. Said that he received an offer from East West but declined to join. Actively interviewing with recruiting agencies. Definitely should come for trial.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420386&pg=ajx')">420386</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Irina Magnea (-)<br><br>Slate Applicant<br><br><i><p>came up for the interview. paid 2man for the ticket out of his own pocket. . the interview was interesting.  </p>
<p>wants to start working on trial </p>
<p>wants to start working from 20th of March or April 1st.  </p>
<p>Keen to proceed with Slate.  Will do a trial. </p>
<p> </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420406&pg=ajx')">420406</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eric Nguyen (-)<br><br>Slate Applicant<br><br><i><p>born in Jamaica -Canadian Citizen.  Sold real estate and then mortgages.  Has lived in Korea, China and Japan has been in Japan for 10 years.  Professionally he is a business English trainer. Has also started entertainment companies -brought DJs in for events etc. Moving forward his plan is to be in Sales. </p>
<p>He feels that what we do is similar to what he does now.  has spoken to a fee recruiters so he has an insight into how the process works.  His timeline for looking for new opp</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420378&pg=ajx')">420378</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			0			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">S. D.V.</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
						</div>
		</td>
	</tr>
	
					<tr class="hover_row even_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">V. Maslyuk</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			8			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazuya Nakajima (-)<br>Supply Chain Material Controller<br>Sony Corporaiton<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420603&pg=ajx')">420603</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akio Yuza (-)<br>Technical manager<br>BASF Japan Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420614&pg=ajx')">420614</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Takahashi (-)<br>Supply Chain Manager<br>Petit Bateau Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420630&pg=ajx')">420630</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yusuke Sasaki (-)<br>Business Development Manager<br>SGS Japan Inc.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420633&pg=ajx')">420633</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoko Hano (38)<br>Packaging engineer<br>Godiva Japan, Inc.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420360&pg=ajx')">420360</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryotaro Kubo (35)<br>Food Safety<br>Asuzac Foods<br><br><i><p>got him on phone when calling to office. He is not interested in changing a job. He does not want to share his email address and ask me to send message through linkedin.</p>
<p>E5 or lower.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412403&pg=ajx')">412403</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadahiro Fujita (34)<br>Buyer<br>BASF Japan Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420599&pg=ajx')">420599</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Sato (45)<br>Senior Engineer<br>Dow Chemical<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420602&pg=ajx')">420602</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			4			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoko Hano (38)<br>Packaging engineer<br>Godiva Japan, Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420360&pg=ajx')">420360</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryotaro Kubo (35)<br>Food Safety<br>Asuzac Foods<br><br><i><p>got him on phone when calling to office. He is not interested in changing a job. He does not want to share his email address and ask me to send message through linkedin.</p>
<p>E5 or lower.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412403&pg=ajx')">412403</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadahiro Fujita (34)<br>Buyer<br>BASF Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420599&pg=ajx')">420599</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Sato (45)<br>Senior Engineer<br>Dow Chemical<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420602&pg=ajx')">420602</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			0			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			0			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			1			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			0			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			0			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			0			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			0			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			4			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoko Hano (38)<br>Packaging engineer<br>Godiva Japan, Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420360&pg=ajx')">420360</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryotaro Kubo (35)<br>Food Safety<br>Asuzac Foods<br><br><i><p>got him on phone when calling to office. He is not interested in changing a job. He does not want to share his email address and ask me to send message through linkedin.</p>
<p>E5 or lower.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412403&pg=ajx')">412403</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadahiro Fujita (34)<br>Buyer<br>BASF Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420599&pg=ajx')">420599</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Sato (45)<br>Senior Engineer<br>Dow Chemical<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420602&pg=ajx')">420602</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			1			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			1			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a data-toggle="tooltip" title="Candidate ID: 420314" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9503&pg=ajx')">9503</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			1			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yukinori Yamada (50)<br>Engineering Director<br>Coca-Cola East Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406734&pg=ajx')">406734</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			0			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
	</tr>
	
					<tr class="hover_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">Y. Takagi</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			7			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masatoshi Adachi (50)<br>Associate Manager<br>Bayer Ltd.<br><br><i><p>PERSONALITY: E5. Educated with PhD degree. Polite, nice, not quite Talkative. Positive personality. He just arrived from Osaka with a duffle bag. <br />CURRENT POSITION: He has been Associate Manager at Medical affairs oncology and hematology division (10 members), Medical Affairs department of Bayer, Osaka since 2013. He joined MA department in 2008 after the Schering-Bayer merger in 2007. He is now in charge of two projects (Oncology and Urology). Also, he will be in charge of a new project</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=118608&pg=ajx')">118608</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Norikazu Fushimi (29)<br>Regional Study Manager<br>CSL Behring K.K.<br><br><i><p>shared JD on MSJ RPM role / no feedback...position already closed. Not a serious mover for now.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=342311&pg=ajx')">342311</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takako Saito (-)<br>CLINICAL OPS LEADER<br>Parexel International K.K.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417038&pg=ajx')">417038</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Hamada (43)<br>Clinical Project Manager<br>AbbVie<br><br><i><p>濱田</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=319967&pg=ajx')">319967</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Nishimura (36)<br>Specialist<br>AbbVie<br><br><i>LN at this time due to phone only, but possible HN.  Waiting on resume also.  Want a f2f</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=343620&pg=ajx')">343620</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Imokawa Yoshiki (-)<br>staff<br>A2 Healthcare<br><br><i><p>met him at Tokyo Dome Hotel, biostatistician. introduced by Aando who was placed to Novartis by us.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=408767&pg=ajx')">408767</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Motoyuki Takano (54)<br>Head of Pharmacovigilance<br>Shire Baxalta<br><br><i><p>Ex-Sanofi. Placed in Ferring in 2014</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=403735&pg=ajx')">403735</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			4			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Motoyuki Takano (54)<br>Head of Pharmacovigilance<br>Shire Baxalta<br><br><i><p>Ex-Sanofi. Placed in Ferring in 2014</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=403735&pg=ajx')">403735</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mika Hiratsuka (36)<br>Clinical Trial Specialist<br>Parexel International K.K.<br><br><i><p>duplicate to&nbsp;#405237 assessed</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=354177&pg=ajx')">354177</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (33)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Teruki Nakagawa (42)<br>Clinical Team Leader<br>Quintiles Transnational Japan K.K.<br><br><i><p>Spoke.</p>
<p>Going to Cebu for 3months (without family) to learn English.</p>
<p>will be back in the end of Jan to beginning of Feb for Taxing, then try to go to US for PMP certificate</p>
<p>Resigned Quintiles as of Oct 31. now on holiday.</p>
<p> </p>
<p>Pitched a few companies to apply now for the time he comes back</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=102231&pg=ajx')">102231</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			0			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			0			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			0			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			0			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			0			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			0			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			0			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			3			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Motoyuki Takano (54)<br>Head of Pharmacovigilance<br>Shire Baxalta<br><br><i><p>Ex-Sanofi. Placed in Ferring in 2014</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=403735&pg=ajx')">403735</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mika Hiratsuka (36)<br>Clinical Trial Specialist<br>Parexel International K.K.<br><br><i><p>duplicate to&nbsp;#405237 assessed</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=354177&pg=ajx')">354177</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (33)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			0			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			0			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			1			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenpei Ogura (32)<br>QA Supervisor<br>MSD K.K.<br><br><i><p>Ex-Sanofi. Placed in Ferring in 2014</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344151&pg=ajx')">344151</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			0			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
	</tr>
	
		<tr class="totals_table_footer">
	<!--<td colspan="15">&nbsp;</td></tr>-->
	<!--<tr bgcolor="#58FAAC"> -->
		<td class='revenueSize3' colspan="10" class="text_right">
			Total :
		</td>
		<td class='revenueSize3'>
			53		</td>
		<td class='revenueSize3'>
			10		</td>
		<td class='revenueSize3'>
			7		</td>
		<td class='revenueSize3'>
			9		</td>
		<td class='revenueSize3'>
			2		</td>
	</tr>
</table>

<div class="general_form_row" style="height: 20px;"></div>
	<table id="totals_table_id" class="totals_table">
	<tr>
		<th class='revenueSize0' colspan="15">Researcher totals - Feb 2017</th>
	</tr>
	<tr id="head">
		<th class="name_column revenueSize0">Name</th>
		<th class="revenueSize">Set</th>
		<th class="revenueSize">Met</th>
		<th class="revenueSize">Resumes sent</th>
		<th class="revenueSize">CCM1 set</th>
		<th class="revenueSize">CCM1 done</th>
		<th class="revenueSize">CCM2 set</th>
		<th class="revenueSize">CCM2 done</th>
		<th class="revenueSize">MCCM set</th>
		<th class="revenueSize">MCCM done</th>
		<th class="revenueSize">New candidates met</th>
		<th class="revenueSize">New candidates<br>in play</th>
		<th class="revenueSize">New positions<br>in play</th>
		<th class="revenueSize">Offer</th>
		<th class="revenueSize">Placement</th>
	</tr>

	
			
					<tr class="hover_row">
	<!--<td>researcher</td>-->
	<!--<td>Researcher</td>-->
		<td class="name_column revenueSize">A. Mishra</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			5			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Zhao Wenwu (42)<br>Onsite Project Manager<br>Neusoft Japan Co., Ltd.<br><br><i><p>This candidate would have not been found if I had not changed the details in department and occupation. Prior to me changing the details in the data stated  Packing . I found the candidate through resume note text search as he has technical in his resume. He is a Technical Operations candidate with a CMO QA Slant.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413096&pg=ajx')">413096</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dinesh Vudathu (40)<br>Senior Project manger<br>Accel Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420571&pg=ajx')">420571</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Tadano (38)<br>R&D Engineer<br>Mitsubishi Automotive Techno-Service Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420601&pg=ajx')">420601</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masahiro Nakao (52)<br>Supplier Performance Engineer<br>Visteon Japan Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=301095&pg=ajx')">301095</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Yamada (40)<br>Interior Quality Manager for Asia<br>Continental AG<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420247&pg=ajx')">420247</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			4			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dinesh Vudathu (40)<br>Senior Project manger<br>Accel Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420571&pg=ajx')">420571</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Tadano (38)<br>R&D Engineer<br>Mitsubishi Automotive Techno-Service Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420601&pg=ajx')">420601</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Yamada (40)<br>Interior Quality Manager for Asia<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420247&pg=ajx')">420247</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hikaru Kitamura (30)<br>Inside Sales Advisor<br>Tesla Motors<br><br><i><p>Had a phone meeting with him. Good energy, native level English (graduated in Canada). Now working at Tesla Motors as an Inside Sales Advisor. It is a junior role, mostly taking care of customer experience and customer satisfaction, taking orders for cars, organising promotion. Does a lot of communication with his clients by phone and in person (only B2c experience so far). Making 4M at the moment. Will be an active mover in 6 months, since has only been with Tesla since October last year. 28</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404397&pg=ajx')">404397</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			1			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka Yamamoto (53)<br>Quality Engineer<br>Autoliv Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=331600&pg=ajx')">331600</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			0			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			0			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			0			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			0			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			0			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			0			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			4			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dinesh Vudathu (40)<br>Senior Project manger<br>Accel Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420571&pg=ajx')">420571</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Tadano (38)<br>R&D Engineer<br>Mitsubishi Automotive Techno-Service Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420601&pg=ajx')">420601</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Yamada (40)<br>Interior Quality Manager for Asia<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420247&pg=ajx')">420247</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hikaru Kitamura (30)<br>Inside Sales Advisor<br>Tesla Motors<br><br><i><p>Had a phone meeting with him. Good energy, native level English (graduated in Canada). Now working at Tesla Motors as an Inside Sales Advisor. It is a junior role, mostly taking care of customer experience and customer satisfaction, taking orders for cars, organising promotion. Does a lot of communication with his clients by phone and in person (only B2c experience so far). Making 4M at the moment. Will be an active mover in 6 months, since has only been with Tesla since October last year. 28</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404397&pg=ajx')">404397</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			0			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			0			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			0			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			0			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row even_row">
	<!--<td>researcher</td>-->
	<!--<td>Researcher</td>-->
		<td class="name_column revenueSize">D. Kadyrbekov</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
						</div>
		</td>
	</tr>
	
			
					<tr class="hover_row">
	<!--<td>researcher</td>-->
	<!--<td>Researcher</td>-->
		<td class="name_column revenueSize">E. Kodaka</td>
		<td>
			<div class="stat_holder revenueSize2" id="520">
			0			</div>
			<div class="stat_candi_info 520">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="520">
			0			</div>
			<div class="stat_candi_info 520">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="520">
			0			</div>
			<div class="stat_candi_info 520">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="520">
			0			</div>
			<div class="stat_candi_info 520">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="520">
			0			</div>
			<div class="stat_candi_info 520">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="520">
			0			</div>
			<div class="stat_candi_info 520">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="520">
			0			</div>
			<div class="stat_candi_info 520">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="520">
			0			</div>
			<div class="stat_candi_info 520">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="520">
			0			</div>
			<div class="stat_candi_info 520">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="520">
			0			</div>
			<div class="stat_candi_info 520">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="520">
			0			</div>
			<div class="stat_candi_info 520">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="520">
			0			</div>
			<div class="stat_candi_info 520">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="520">
			0			</div>
			<div class="stat_candi_info 520">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="520">
			0			</div>
			<div class="stat_candi_info 520">
						</div>
		</td>
	</tr>
	
					<tr class="hover_row even_row">
	<!--<td>researcher</td>-->
	<!--<td>Researcher</td>-->
		<td class="name_column revenueSize">E. Nguyen</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			1			</div>
			<div class="stat_candi_info 519">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seishi Ikematsu (-)<br>Sales Manager<br>Kawasaki Heavy Industries, Ltd.<br><br><i><p>met with Tada -was OK.  Personality test plus a Japanese test, English teats, numerical test, and a verbal reasoning test. 45 minutes with HRD then a different HR Member.  </p>
<p>was at 11 at PWC -now at 8.  going to interviews and the benchmark is now about 10~11.  DTC 13M range.  </p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=324109&pg=ajx')">324109</a>
										</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
	</tr>
	
					<tr class="hover_row">
	<!--<td>researcher</td>-->
	<!--<td>Researcher</td>-->
		<td class="name_column revenueSize">P. Greeff</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			4			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ramdan Abbacha (48)<br>Senior Estimator<br>Construction G.C.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420569&pg=ajx')">420569</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tsuyoshi Hashiguchi (31)<br>Consultant<br>Kurt Salmon Associates<br><br><i><p>Originally from Algeria, been in Canada 20 Years. Has Citizenship. Work on large scale projects ranging from $500K - $100 mil dollars. Has 15 years experience in Heavy civil construction. Has worked with hard rock, has built roads, bridges, etc.&nbsp; He was part of the project for the Champlain bridge in Quebec. This was a joint venture between 3 companies and his part was worth $100 mil. Has managed up to 4 Junior estimators. Wants to move out of Montreal as the work situation isnt very go</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418389&pg=ajx')">418389</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryohei Maeda (26)<br>Marketing Executive<br>American Express<br><br><i><p>Working in retail/apparel space right now. His specialty is communications. He is interested in Retail space. Kurt Salmon is being acquired by Accenture and he isnt sure if he wants to stay or move.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420619&pg=ajx')">420619</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			1			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			2			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Miyuki Nakamura (27)<br>eCommerce & Digital Marketing eCommerce customer Marketing Executive<br>Unilever<br><br><i><p>Originally from Ontario. Living in Olds AB. General Manger of Foran Equipment. Has 10 years experience in blasting and drilling. His whole career was in Heavy civil also knows how to operate equipment. Has class 5 gave up his class 1 as he isnt operating heavy equipment anymore. Responsibilities is to run the business face clients, manage estimate from take off to handover and all day to day operations. Making $140K - $145K and is flexible. Manages anything from 30 to 40 people at a time dep</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420541&pg=ajx')">420541</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			2			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Miyuki Nakamura (27)<br>eCommerce & Digital Marketing eCommerce customer Marketing Executive<br>Unilever<br><br><i><p>Originally from Ontario. Living in Olds AB. General Manger of Foran Equipment. Has 10 years experience in blasting and drilling. His whole career was in Heavy civil also knows how to operate equipment. Has class 5 gave up his class 1 as he isnt operating heavy equipment anymore. Responsibilities is to run the business face clients, manage estimate from take off to handover and all day to day operations. Making $140K - $145K and is flexible. Manages anything from 30 to 40 people at a time dep</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420541&pg=ajx')">420541</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masatoshi Nagai (38)<br>Senior Consultant, Industrial Products and Heavy Industry Unit<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417785&pg=ajx')">417785</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			1			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			1			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			1			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			1			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			0			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			1			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			1			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			1			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a data-toggle="tooltip" title="Candidate ID: 419833" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9484&pg=ajx')">9484</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			0			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			0			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row even_row">
	<!--<td>researcher</td>-->
	<!--<td>Researcher</td>-->
		<td class="name_column revenueSize">T. Tanigawa</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			7			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masatoshi Adachi (50)<br>Associate Manager<br>Bayer Ltd.<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=118608&pg=ajx')">118608</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Norikazu Fushimi (29)<br>Regional Study Manager<br>CSL Behring K.K.<br><br><i><p>PERSONALITY: E5. Educated with PhD degree. Polite, nice, not quite Talkative. Positive personality. He just arrived from Osaka with a duffle bag. <br />CURRENT POSITION: He has been Associate Manager at Medical affairs oncology and hematology division (10 members), Medical Affairs department of Bayer, Osaka since 2013. He joined MA department in 2008 after the Schering-Bayer merger in 2007. He is now in charge of two projects (Oncology and Urology). Also, he will be in charge of a new project</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=342311&pg=ajx')">342311</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takako Saito (-)<br>CLINICAL OPS LEADER<br>Parexel International K.K.<br><br><i><p>shared JD on MSJ RPM role / no feedback...position already closed. Not a serious mover for now.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417038&pg=ajx')">417038</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Hamada (43)<br>Clinical Project Manager<br>AbbVie<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=319967&pg=ajx')">319967</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Nishimura (36)<br>Specialist<br>AbbVie<br><br><i><p>濱田</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=343620&pg=ajx')">343620</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Imokawa Yoshiki (-)<br>staff<br>A2 Healthcare<br><br><i>LN at this time due to phone only, but possible HN.  Waiting on resume also.  Want a f2f</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=408767&pg=ajx')">408767</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Motoyuki Takano (54)<br>Head of Pharmacovigilance<br>Shire Baxalta<br><br><i><p>Ex-Sanofi. Placed in Ferring in 2014</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=403735&pg=ajx')">403735</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			3			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Motoyuki Takano (54)<br>Head of Pharmacovigilance<br>Shire Baxalta<br><br><i><p>Ex-Sanofi. Placed in Ferring in 2014</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=403735&pg=ajx')">403735</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mika Hiratsuka (36)<br>Clinical Trial Specialist<br>Parexel International K.K.<br><br><i><p>duplicate to&nbsp;#405237 assessed</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=354177&pg=ajx')">354177</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (33)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
										</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			3			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Motoyuki Takano (54)<br>Head of Pharmacovigilance<br>Shire Baxalta<br><br><i><p>Ex-Sanofi. Placed in Ferring in 2014</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=403735&pg=ajx')">403735</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mika Hiratsuka (36)<br>Clinical Trial Specialist<br>Parexel International K.K.<br><br><i><p>duplicate to&nbsp;#405237 assessed</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=354177&pg=ajx')">354177</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (33)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
	</tr>
	
		<tr class="totals_table_footer">
	<!--<td colspan="15">&nbsp;</td></tr>-->
	<!--<tr bgcolor="#58FAAC"> -->
		<td class='revenueSize3' colspan="10" class="text_right">
			Total :
		</td>
		<td class='revenueSize3'>
			8		</td>
		<td class='revenueSize3'>
			1		</td>
		<td class='revenueSize3'>
			1		</td>
		<td class='revenueSize3'>
			0		</td>
		<td class='revenueSize3'>
			0		</td>
	</tr>
</table>

<div class="general_form_row" style="height: 20px;"></div>

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