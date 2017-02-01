<script>
	var nextloop = 666;
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
				value="2017-01-01" />
		</div>
		<div class="general_form_column add_margin_left_20">End date: </div>
		<div class="general_form_column">
			<input id="end_date" style="width: 90px" type="text" name="end_date"
				value="2017-01-31" />
		</div>
		<div class="general_form_column add_margin_left_10">
			<input type="submit" name="submit_totals" value="Get totals" />
		</div>
	</div>
</form>

	<table id="totals_table_id" class="totals_table">
	<tr>
		<th class='revenueSize0' colspan="15">Consultant totals - Jan 2017</th>
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
			11			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ki Kou (41)<br>Solution Architect<br>CARDIF Assurance Vie<br><br><i>8.7M current base plus overtime. Last year made over 10M. Wants at least 9M base for next role.</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=341313&pg=ajx')">341313</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mitsuhisa Hagiwara (-)<br>Director<br>Nippon Investment Partners<br><br><i><p>LINKEDIN</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420465&pg=ajx')">420465</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Brian Nelson (48)<br>Country Manager<br>Groupon Japan, Inc.<br><br><i>Brian&#039;s management experience and leadership abilities have helped build ValueCommerce into one of the leading Internet Sales and Marketing companies in Japan. Through his results oriented operational philosophy, team building skills, motivation based communications and clear direction, Brian has been able to harness the tremendous strength of a diverse and highly talented management team and group of employees, who are focused on executing an aggressive vision and strategy for the future.<</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=8114&pg=ajx')">8114</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jie Chen (-)<br>Investment Banking Analyst<br>PricewaterhouseCoopers Japan (PWC Japan)<br><br><i>Met with him in Tokyo station Maranouchi building. He is currently working with SMBC Nikko Securities for nearly 2 years. He is a good young upcoming candidate who is Native Chinese.

He did 6 months in Corporate  Finance and creating pitch books. From Sept. 2014 M&A Advisory, 1.6 years in M&A Origination and Execution for Domestic clients.
He has been in volved in 2 deals , Family Mart and Uniqlo as well.
He was also involved in the Acquisition of Citibank and SMBC.

Wants to me a career</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=414203&pg=ajx')">414203</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chikara Watabe (39)<br>Process Manager<br>MetLife Ltd.<br><br><i><p>Talked about Cap Gem, HCK, TCS but no interests</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420033&pg=ajx')">420033</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hongjuan Liu (-)<br>Chief Insight and Analytics Officer / Chair of Process Transformation Office<br>Aegon direct & Affinity Marketing Services<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419190&pg=ajx')">419190</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Brent Wagener (-)<br>Senior Director, Cyber Security and Investigations<br>Kroll Japan<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420269&pg=ajx')">420269</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hao ZHANG (27)<br>Associate - Financial Consulting<br>Nomura Securities Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420174&pg=ajx')">420174</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Satoru Munekata (-)<br>Assistant Manager<br>Meiji Yasuda Life Insurance Company<br><br><i><p>Very nice guy with mediocre English. Not thinking to move anytime soon because he feels bad to leave the current company. </p>
<p>Seems like if keeps pushing, he might take it.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412873&pg=ajx')">412873</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keisuke Yuasa (-)<br>Corporate Officer, Risk Management<br>GE Capital<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420129&pg=ajx')">420129</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshino Goji (44)<br>Director<br>BlueBay Asset Management<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=218399&pg=ajx')">218399</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			9			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Brian Nelson (48)<br>Country Manager<br>Groupon Japan, Inc.<br><br><i>Brian&#039;s management experience and leadership abilities have helped build ValueCommerce into one of the leading Internet Sales and Marketing companies in Japan. Through his results oriented operational philosophy, team building skills, motivation based communications and clear direction, Brian has been able to harness the tremendous strength of a diverse and highly talented management team and group of employees, who are focused on executing an aggressive vision and strategy for the future.<</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=8114&pg=ajx')">8114</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jie Chen (-)<br>Investment Banking Analyst<br>PricewaterhouseCoopers Japan (PWC Japan)<br><br><i>Met with him in Tokyo station Maranouchi building. He is currently working with SMBC Nikko Securities for nearly 2 years. He is a good young upcoming candidate who is Native Chinese.

He did 6 months in Corporate  Finance and creating pitch books. From Sept. 2014 M&A Advisory, 1.6 years in M&A Origination and Execution for Domestic clients.
He has been in volved in 2 deals , Family Mart and Uniqlo as well.
He was also involved in the Acquisition of Citibank and SMBC.

Wants to me a career</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=414203&pg=ajx')">414203</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chikara Watabe (39)<br>Process Manager<br>MetLife Ltd.<br><br><i><p>Talked about Cap Gem, HCK, TCS but no interests</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420033&pg=ajx')">420033</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hongjuan Liu (-)<br>Chief Insight and Analytics Officer / Chair of Process Transformation Office<br>Aegon direct & Affinity Marketing Services<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419190&pg=ajx')">419190</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Brent Wagener (-)<br>Senior Director, Cyber Security and Investigations<br>Kroll Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420269&pg=ajx')">420269</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hao ZHANG (27)<br>Associate - Financial Consulting<br>Nomura Securities Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420174&pg=ajx')">420174</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Satoru Munekata (-)<br>Assistant Manager<br>Meiji Yasuda Life Insurance Company<br><br><i><p>Very nice guy with mediocre English. Not thinking to move anytime soon because he feels bad to leave the current company. </p>
<p>Seems like if keeps pushing, he might take it.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412873&pg=ajx')">412873</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keisuke Yuasa (-)<br>Corporate Officer, Risk Management<br>GE Capital<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420129&pg=ajx')">420129</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshino Goji (44)<br>Director<br>BlueBay Asset Management<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=218399&pg=ajx')">218399</a>
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
			<div class="stat_holder revenueSize2" id="481">
			6			</div>
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
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tao Wang (45)<br>Researcher & Strategist<br>BNY Mellon Asset Management (Japan) K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=147810&pg=ajx')">147810</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rajesh Sankaranarayanan (37)<br>Senior Project Manager<br>Cognizant Technology Solutions (CTS)<br><br><i>Remet. Good candidate. Smart and a little eccentric but well balanced. <br />
Excellent experience almost all facets of Real Estate from Architecture to Asset Management, Due Diligence, Acquisition, relocation, Real estate investment, and facilities management. <br />
Nice guy. Looking to move.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=303927&pg=ajx')">303927</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akash Chauhan (24)<br>Front End Engineer<br>Hikari Tsushin Capital, Inc.<br><br><i><p>IS now at Cognizant.</p>
<p> </p>
<p>Has worked as a project manager in several different companies, mostly for insurance.</p>
<p>Is tired of consulting and SIers and is wanting to move in house.</p>
<p>Pitched NN Life and Metlife.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=414726&pg=ajx')">414726</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kai Obokata (28)<br>Sales Excellence Analyst<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416337&pg=ajx')">416337</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Patrick Chan (34)<br>Software Engineer - Consultant<br>Fusion Systems Japan<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419985&pg=ajx')">419985</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takahiro Ohashi (34)<br>Liability Underwriter, Assistant Manager<br>Allianz<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420369&pg=ajx')">420369</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
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
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kai Obokata (28)<br>Sales Excellence Analyst<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416337&pg=ajx')">416337</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Patrick Chan (34)<br>Software Engineer - Consultant<br>Fusion Systems Japan<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419985&pg=ajx')">419985</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Alexander Hart (24)<br>Overseas Sales Representative<br>Sompo Japan Asset Management<br><br><i><p>Said the salary is also important for him to change a job in a short time.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417229&pg=ajx')">417229</a>
										</div>
							<div class="hover_row  colored_row2">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Alexander Hart (24)<br>Overseas Sales Representative<br>Sompo Japan Asset Management<br><br><i><p>Said the salary is also important for him to change a job in a short time.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417229&pg=ajx')">417229</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			8			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Brian Nelson (48)<br>Country Manager<br>Groupon Japan, Inc.<br><br><i>Brian&#039;s management experience and leadership abilities have helped build ValueCommerce into one of the leading Internet Sales and Marketing companies in Japan. Through his results oriented operational philosophy, team building skills, motivation based communications and clear direction, Brian has been able to harness the tremendous strength of a diverse and highly talented management team and group of employees, who are focused on executing an aggressive vision and strategy for the future.<</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=8114&pg=ajx')">8114</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chikara Watabe (39)<br>Process Manager<br>MetLife Ltd.<br><br><i><p>Talked about Cap Gem, HCK, TCS but no interests</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420033&pg=ajx')">420033</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hongjuan Liu (-)<br>Chief Insight and Analytics Officer / Chair of Process Transformation Office<br>Aegon direct & Affinity Marketing Services<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419190&pg=ajx')">419190</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Brent Wagener (-)<br>Senior Director, Cyber Security and Investigations<br>Kroll Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420269&pg=ajx')">420269</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hao ZHANG (27)<br>Associate - Financial Consulting<br>Nomura Securities Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420174&pg=ajx')">420174</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Satoru Munekata (-)<br>Assistant Manager<br>Meiji Yasuda Life Insurance Company<br><br><i><p>Very nice guy with mediocre English. Not thinking to move anytime soon because he feels bad to leave the current company. </p>
<p>Seems like if keeps pushing, he might take it.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412873&pg=ajx')">412873</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keisuke Yuasa (-)<br>Corporate Officer, Risk Management<br>GE Capital<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420129&pg=ajx')">420129</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshino Goji (44)<br>Director<br>BlueBay Asset Management<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=218399&pg=ajx')">218399</a>
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
										<a data-toggle="tooltip" title="Candidate ID: 419028" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9425&pg=ajx')">9425</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Alexander Hart (24)<br>Overseas Sales Representative<br>Sompo Japan Asset Management<br><br><i><p>Said the salary is also important for him to change a job in a short time.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417229&pg=ajx')">417229</a>
										</div>
							<div class="hover_row  colored_row2">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Alexander Hart (24)<br>Overseas Sales Representative<br>Sompo Japan Asset Management<br><br><i><p>Said the salary is also important for him to change a job in a short time.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417229&pg=ajx')">417229</a>
										</div>
							<div class="hover_row  colored_row2">
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
			30			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hikaru Kitamura (29)<br>Inside Sales Advisor<br>Tesla Motors<br><br><i><p>Had a phone meeting with him. Good energy, native level English (graduated in Canada). Now working at Tesla Motors as an Inside Sales Advisor. It is a junior role, mostly taking care of customer experience and customer satisfaction, taking orders for cars, organising promotion. Does a lot of communication with his clients by phone and in person (only B2c experience so far). Making 4M at the moment. Will be an active mover in 6 months, since has only been with Tesla since October last year. 28</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404397&pg=ajx')">404397</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emanuele Monica (-)<br>Mechanical Engineer<br>Mitsubishi Fuso Truck & Bus Corporation<br><br><i><p>Linked In.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=411333&pg=ajx')">411333</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kokichi Dohi (43)<br>Managing Director<br>Europe Solar Innovation Co., Ltd.<br><br><i>met again.  32 yo. high potential guy.  Excellent sales edge.  good communicator.  overseas experience.  self starting. capabl;e of management and leadership.   Excellent prospect for opportunity in industry other than current one.  Definitely placeable for sales development opportunity with a management slant.  Currently on 7M.</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=839&pg=ajx')">839</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yunho Heo (29)<br>Camera module developer<br>LG Innotek<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420334&pg=ajx')">420334</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shantinath Indi (37)<br>Assistant Consultant<br>Tata Consultancy Services K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420373&pg=ajx')">420373</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Te-Sheng Hsu (26)<br>Technical Support Engineer<br>Elliott Co., / Ebara Group<br><br><i><p>Young, green engineer from Taiwan. Joined Elliot (Compressors &amp; Steam Turbine) through campus recruit. Studied Japanese in University, graduated in Taiwan, wanted to make use of his Japanes so came to Japan for work. Done a lot of new grad trainee the past 1yr and now finally working as tech engineer. Responsible for tech support for East Asia - Korea, China, Singapore.&nbsp; Japanese good for internal communication but do not cover any domestic customers. Still young so not set on settli</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417079&pg=ajx')">417079</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Yoshioka (26)<br>Analog Circuit Designer, Research Scientist<br>Toshiba<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420426&pg=ajx')">420426</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mohammad Abdul Muquit (42)<br>Senior Consultanat<br>The MathWorks Inc.<br><br><i>Relaxed and easy going guy with an good skill set, excellent Japanese and English who is originally from India. <br />
<br />
Holds a PH.D in Computer and Mathematical Sciences and at least twice I got lost in his explanations. <br />
<br />
Highly skilled in Image Processing and Bio Medical applications with the whole range of MATLAB, Algorithms and C++ etc understanding.<br />
<br />
Perfect candidate for Igate image processing, but he wants to relocate. Wishes to leave Japan to work in an Eng</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=367633&pg=ajx')">367633</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazunori Sukeda (-)<br>Staff<br>Visteon Japan Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=300978&pg=ajx')">300978</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Pornchai Weangsima (40)<br>Application Engineer<br>Plastic Omnium K.K.<br><br><i><p>Linked In.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406430&pg=ajx')">406430</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Francis Soria (-)<br>Senior Software Engineer<br>IMES Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=339740&pg=ajx')">339740</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroyuki Fukuhara (48)<br>Client App Development leader<br>Cinemacraft Technologies<br><br><i><p>Biz Reach Candidate</p>
<p>15 years of image processing experience with C, C++ and objective -C</p>
<p>Has managed offshore teams (5 engineers in India).</p>
<p>Might be okay for Huawei</p>
<p>&nbsp;</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=411800&pg=ajx')">411800</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takaya Terakawa (31)<br>Project Engineer<br>Swep Japan K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=410828&pg=ajx')">410828</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Senthil Kumar Rajagopal　　 (38)<br>SW Functional Safety Lead<br>Intel<br><br><i>Phone Pre-Assessed. Nice enough guy, Indian National, 10 years in Japan, haven\t take any JPL exam but confident that his JPL is on a business level.<br />
<br />
34 y/o, bachelor degree in Physics with Masters in IT, married, living in Tokyo. Salary is 10.2M JPY ( 9.2M base and 1M bonus). High MP. Place able problem would be salary and nationality I guess.<br />
<br />
Strong C, C++ and Java experience.<br />
<br />
First company was in new Dimensions Software ( Telecom Industry )for 2 years a</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=336699&pg=ajx')">336699</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kotaro  Hashimoto (30)<br>Embedded Software Engineer<br>Hitachi Industrial Equipment Systems Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420216&pg=ajx')">420216</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshiki Yamada (52)<br>Project Lead<br>Quest Global Service<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420004&pg=ajx')">420004</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chi Hyo (33)<br>Department General Manager<br>Toyota Boshoku<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420336&pg=ajx')">420336</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroki Nishizawa Tavera (30)<br>Quality Control<br>Okamoto Industries<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420293&pg=ajx')">420293</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masami Fujiseki (27)<br>Engineer<br>Nissan Motor Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418851&pg=ajx')">418851</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nakamura Katsuyuki (30)<br>Software Engineer<br>Harman International Japan Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420215&pg=ajx')">420215</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hidehiko Koyata (36)<br>Product manager<br>Continental AG<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420227&pg=ajx')">420227</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taigan Lee (28)<br>Sr. Software Engineer<br>TomTom Japan<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419911&pg=ajx')">419911</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Riki Iwai (38)<br>Senior Application Engineer<br>Mathworks<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420440&pg=ajx')">420440</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinya Abe (38)<br>Design Quality Solution Engineer<br>Nissan<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420362&pg=ajx')">420362</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Kobayashi (31)<br>Quality Assurance Engineer<br>Art Metal Mfg. Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420306&pg=ajx')">420306</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Joji Shimizu (30)<br>Quality Engineer<br>JTEKT Corpooration<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412595&pg=ajx')">412595</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshiaki Matsumura (42)<br>Supplier Quality Engineer<br>Valeo Japan Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=27503&pg=ajx')">27503</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Funamoto (46)<br>Sales Engineer<br>Bollhoff K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420529&pg=ajx')">420529</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka Yamamoto (52)<br>Quality Engineer<br>Autoliv Japan Ltd.<br><br><i>Dinner - Mar 14. Looks older than 49. Very nice guy. Doesn\t appear to be overly ambitious however, he is a hardcore runner and pushes himself to new challenges. He has some fire in the belly somewhere.</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=331600&pg=ajx')">331600</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ashish Sachdeva (36)<br>Technical Lead<br>KPIT TECHNOLOGIES<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420119&pg=ajx')">420119</a>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			19			</div>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Senthil Kumar Rajagopal　　 (38)<br>SW Functional Safety Lead<br>Intel<br><br><i>Phone Pre-Assessed. Nice enough guy, Indian National, 10 years in Japan, haven\t take any JPL exam but confident that his JPL is on a business level.<br />
<br />
34 y/o, bachelor degree in Physics with Masters in IT, married, living in Tokyo. Salary is 10.2M JPY ( 9.2M base and 1M bonus). High MP. Place able problem would be salary and nationality I guess.<br />
<br />
Strong C, C++ and Java experience.<br />
<br />
First company was in new Dimensions Software ( Telecom Industry )for 2 years a</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=336699&pg=ajx')">336699</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kotaro  Hashimoto (30)<br>Embedded Software Engineer<br>Hitachi Industrial Equipment Systems Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420216&pg=ajx')">420216</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshiki Yamada (52)<br>Project Lead<br>Quest Global Service<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420004&pg=ajx')">420004</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chi Hyo (33)<br>Department General Manager<br>Toyota Boshoku<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420336&pg=ajx')">420336</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroki Nishizawa Tavera (30)<br>Quality Control<br>Okamoto Industries<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420293&pg=ajx')">420293</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masami Fujiseki (27)<br>Engineer<br>Nissan Motor Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418851&pg=ajx')">418851</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nakamura Katsuyuki (30)<br>Software Engineer<br>Harman International Japan Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420215&pg=ajx')">420215</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hidehiko Koyata (36)<br>Product manager<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420227&pg=ajx')">420227</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taigan Lee (28)<br>Sr. Software Engineer<br>TomTom Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419911&pg=ajx')">419911</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Riki Iwai (38)<br>Senior Application Engineer<br>Mathworks<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420440&pg=ajx')">420440</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinya Abe (38)<br>Design Quality Solution Engineer<br>Nissan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420362&pg=ajx')">420362</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Kobayashi (31)<br>Quality Assurance Engineer<br>Art Metal Mfg. Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420306&pg=ajx')">420306</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Joji Shimizu (30)<br>Quality Engineer<br>JTEKT Corpooration<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412595&pg=ajx')">412595</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshiaki Matsumura (42)<br>Supplier Quality Engineer<br>Valeo Japan Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=27503&pg=ajx')">27503</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Funamoto (46)<br>Sales Engineer<br>Bollhoff K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420529&pg=ajx')">420529</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka Yamamoto (52)<br>Quality Engineer<br>Autoliv Japan Ltd.<br><br><i>Dinner - Mar 14. Looks older than 49. Very nice guy. Doesn\t appear to be overly ambitious however, he is a hardcore runner and pushes himself to new challenges. He has some fire in the belly somewhere.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=331600&pg=ajx')">331600</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ashish Sachdeva (36)<br>Technical Lead<br>KPIT TECHNOLOGIES<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420119&pg=ajx')">420119</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="VENKATESH HONNAIAH (42)<br>Senior Software Architect (Senior Technical Lead)<br>Autoliv Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419518&pg=ajx')">419518</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hitesh Priyani (30)<br>MBD Engineer<br>Solize<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419645&pg=ajx')">419645</a>
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
			<div class="stat_holder revenueSize2" id="443">
			7			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroki Nishizawa Tavera (30)<br>Quality Control<br>Okamoto Industries<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420293&pg=ajx')">420293</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Renjith Vr (31)<br>Solutions Architect<br>KPIT TECHNOLOGIES<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=347955&pg=ajx')">347955</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yosuke Saito (35)<br>Quality Engineer<br>Magneti Marelli Japan K.K.<br><br><i>Nothing impressive, not the most forthcoming guy and doesn\t explain himself well either. Decent candidate, might be ok for technical roles requiring .NET or C++. Working automotive industry right now, previously done SME, mostly engineering, windows based. Says Csharp and C++ are best for him. Indian company, says he is level2 J. Making 450,000Yen per month right now. Spoke about IMS .NET role, interested.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=349080&pg=ajx')">349080</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yusuke Hiruta (42)<br>Manager<br>Novartis Pharma K.K.<br><br><i><p>Had a phone meeting. Ok king of guy, E is not so high (around 5). Seems to be a bit of a job hopper and his reasons are also not the best. Started of at Gentex as a Project Engineer 2.5y (for Toyota, Mazda and Mitsubishi), was taking care of all technical client communication including quality. Wanted to expand his expertise in one specific area, therefore left for Conti and took a QE role ~2y (for Mazda and Mitsubishi). Didnt last long, since hew as not happy with their quality policies, an</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413199&pg=ajx')">413199</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rintaro Fujimoto (25)<br>Field Service Engineer<br>Tomy Digital Biology Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416985&pg=ajx')">416985</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="KAZUYA  MIWA (53)<br>Engineering Director<br>Key Safety Systems Japan K.K.<br><br><i><p>Met F2F last week; he is very soft &amp; feminine. Interested to work in a bigger &amp; stable company. Current business line (Pacbio) might be bought out by Roche next year, wants to find a new role by then. Not an immediate mover but found the Merck role very interesting, pushing to apply. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420221&pg=ajx')">420221</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			3			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroki Nishizawa Tavera (30)<br>Quality Control<br>Okamoto Industries<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420293&pg=ajx')">420293</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rintaro Fujimoto (25)<br>Field Service Engineer<br>Tomy Digital Biology Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416985&pg=ajx')">416985</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nur Muhammad Hakim Noharidan (28)<br>QA Engineer<br>Akebono Brake Industry Co., Ltd.<br><br><i><p>Met F2F last week; he is very soft &amp; feminine. Interested to work in a bigger &amp; stable company. Current business line (Pacbio) might be bought out by Roche next year, wants to find a new role by then. Not an immediate mover but found the Merck role very interesting, pushing to apply. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419997&pg=ajx')">419997</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			2			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rintaro Fujimoto (25)<br>Field Service Engineer<br>Tomy Digital Biology Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416985&pg=ajx')">416985</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nur Muhammad Hakim Noharidan (28)<br>QA Engineer<br>Akebono Brake Industry Co., Ltd.<br><br><i><p>Met F2F last week; he is very soft &amp; feminine. Interested to work in a bigger &amp; stable company. Current business line (Pacbio) might be bought out by Roche next year, wants to find a new role by then. Not an immediate mover but found the Merck role very interesting, pushing to apply. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419997&pg=ajx')">419997</a>
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
			<div class="stat_holder revenueSize2" id="443">
			17			</div>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kotaro  Hashimoto (30)<br>Embedded Software Engineer<br>Hitachi Industrial Equipment Systems Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420216&pg=ajx')">420216</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshiki Yamada (52)<br>Project Lead<br>Quest Global Service<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420004&pg=ajx')">420004</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chi Hyo (33)<br>Department General Manager<br>Toyota Boshoku<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420336&pg=ajx')">420336</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroki Nishizawa Tavera (30)<br>Quality Control<br>Okamoto Industries<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420293&pg=ajx')">420293</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masami Fujiseki (27)<br>Engineer<br>Nissan Motor Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418851&pg=ajx')">418851</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nakamura Katsuyuki (30)<br>Software Engineer<br>Harman International Japan Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420215&pg=ajx')">420215</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hidehiko Koyata (36)<br>Product manager<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420227&pg=ajx')">420227</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taigan Lee (28)<br>Sr. Software Engineer<br>TomTom Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419911&pg=ajx')">419911</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Riki Iwai (38)<br>Senior Application Engineer<br>Mathworks<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420440&pg=ajx')">420440</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinya Abe (38)<br>Design Quality Solution Engineer<br>Nissan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420362&pg=ajx')">420362</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Kobayashi (31)<br>Quality Assurance Engineer<br>Art Metal Mfg. Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420306&pg=ajx')">420306</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Joji Shimizu (30)<br>Quality Engineer<br>JTEKT Corpooration<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412595&pg=ajx')">412595</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshiaki Matsumura (42)<br>Supplier Quality Engineer<br>Valeo Japan Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=27503&pg=ajx')">27503</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Funamoto (46)<br>Sales Engineer<br>Bollhoff K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420529&pg=ajx')">420529</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ashish Sachdeva (36)<br>Technical Lead<br>KPIT TECHNOLOGIES<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420119&pg=ajx')">420119</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="VENKATESH HONNAIAH (42)<br>Senior Software Architect (Senior Technical Lead)<br>Autoliv Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419518&pg=ajx')">419518</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hitesh Priyani (30)<br>MBD Engineer<br>Solize<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419645&pg=ajx')">419645</a>
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
			<div class="stat_holder revenueSize2" id="443">
			2			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rintaro Fujimoto (25)<br>Field Service Engineer<br>Tomy Digital Biology Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416985&pg=ajx')">416985</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nur Muhammad Hakim Noharidan (28)<br>QA Engineer<br>Akebono Brake Industry Co., Ltd.<br><br><i><p>Met F2F last week; he is very soft &amp; feminine. Interested to work in a bigger &amp; stable company. Current business line (Pacbio) might be bought out by Roche next year, wants to find a new role by then. Not an immediate mover but found the Merck role very interesting, pushing to apply. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419997&pg=ajx')">419997</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			2			</div>
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
										<a data-toggle="tooltip" title="Candidate ID: 416985" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9512&pg=ajx')">9512</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a data-toggle="tooltip" title="Candidate ID: 419997" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9478&pg=ajx')">9478</a>
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
		<td class="name_column revenueSize">K. Kapur</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			6			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shuwa Fu (-)<br>Manager-Corporate Finance<br>Shinsei Bank<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=407750&pg=ajx')">407750</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Hiratsuka (30)<br><br>PricewaterhouseCoopers Japan (PWC Japan)<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420352&pg=ajx')">420352</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Bhargav Shah (28)<br>Project Manager<br>VeBuln<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420361&pg=ajx')">420361</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Janelle Zhu (26)<br><br>SMBC Nikko Securities<br><br><i><p>Wants to get into FSs and pitched PwC M&amp;A Advisory but did not make it.</p>
<p>OK for strategy consulting side as well.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419513&pg=ajx')">419513</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nathan Ramler (41)<br><br>Macquarie Capital Securities Japan Ltd.<br><br><i><p>Wants to get into FSs and pitched PwC M&amp;A Advisory but did not make it.</p>
<p>OK for strategy consulting side as well.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=86768&pg=ajx')">86768</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Bailu Qian (26)<br><br>Deloitte Tohmatsu Financial Advisory (DTFA)<br><br><i><p>Would be TS if he was fluent in J.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420500&pg=ajx')">420500</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			4			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Janelle Zhu (26)<br><br>SMBC Nikko Securities<br><br><i><p>Wants to get into FSs and pitched PwC M&amp;A Advisory but did not make it.</p>
<p>OK for strategy consulting side as well.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419513&pg=ajx')">419513</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nathan Ramler (41)<br><br>Macquarie Capital Securities Japan Ltd.<br><br><i><p>Wants to get into FSs and pitched PwC M&amp;A Advisory but did not make it.</p>
<p>OK for strategy consulting side as well.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=86768&pg=ajx')">86768</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Bailu Qian (26)<br><br>Deloitte Tohmatsu Financial Advisory (DTFA)<br><br><i><p>Would be TS if he was fluent in J.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420500&pg=ajx')">420500</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Niki Wu (25)<br><br>KPMG Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419387&pg=ajx')">419387</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			11			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Janelle Zhu (26)<br><br>SMBC Nikko Securities<br><br><i><p>Wants to get into FSs and pitched PwC M&amp;A Advisory but did not make it.</p>
<p>OK for strategy consulting side as well.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419513&pg=ajx')">419513</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nathan Ramler (41)<br><br>Macquarie Capital Securities Japan Ltd.<br><br><i><p>Wants to get into FSs and pitched PwC M&amp;A Advisory but did not make it.</p>
<p>OK for strategy consulting side as well.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=86768&pg=ajx')">86768</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Bailu Qian (26)<br><br>Deloitte Tohmatsu Financial Advisory (DTFA)<br><br><i><p>Would be TS if he was fluent in J.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420500&pg=ajx')">420500</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Niki Wu (25)<br><br>KPMG Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419387&pg=ajx')">419387</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Sasaki (43)<br>Managing Director<br>JPMorgan Securities Japan Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=48279&pg=ajx')">48279</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takaki Nakayama (38)<br>PMI<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=175767&pg=ajx')">175767</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shigeru Inoue (-)<br>Director<br>UBS Japan<br><br><i><p>Has been with UBS since 2014 as an MD and Head of FIG.</p>
<p>A very solid background within FIG and M&amp;A but not a Corporate M&amp;A Banker.</p>
<p>Started to look for opps as UBS is restructuring and his position might be gone with by the end of 1st qtr. He is open to potential opps within M&amp;A and Consulting. Spoke to him about PwC, EY TAS and GCA and is interested,</p>
<p>Engaged in investment banking business for 20 years and worked on number of investment banking transactions, inc</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=224560&pg=ajx')">224560</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shiyang Liang (23)<br><br>Hikari Tsushin, Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419020&pg=ajx')">419020</a>
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
			<div class="stat_holder revenueSize2" id="431">
			11			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Janelle Zhu (26)<br><br>SMBC Nikko Securities<br><br><i><p>Wants to get into FSs and pitched PwC M&amp;A Advisory but did not make it.</p>
<p>OK for strategy consulting side as well.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419513&pg=ajx')">419513</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nathan Ramler (41)<br><br>Macquarie Capital Securities Japan Ltd.<br><br><i><p>Wants to get into FSs and pitched PwC M&amp;A Advisory but did not make it.</p>
<p>OK for strategy consulting side as well.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=86768&pg=ajx')">86768</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Bailu Qian (26)<br><br>Deloitte Tohmatsu Financial Advisory (DTFA)<br><br><i><p>Would be TS if he was fluent in J.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420500&pg=ajx')">420500</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Niki Wu (25)<br><br>KPMG Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419387&pg=ajx')">419387</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Sasaki (43)<br>Managing Director<br>JPMorgan Securities Japan Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=48279&pg=ajx')">48279</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takaki Nakayama (38)<br>PMI<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=175767&pg=ajx')">175767</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shigeru Inoue (-)<br>Director<br>UBS Japan<br><br><i><p>Has been with UBS since 2014 as an MD and Head of FIG.</p>
<p>A very solid background within FIG and M&amp;A but not a Corporate M&amp;A Banker.</p>
<p>Started to look for opps as UBS is restructuring and his position might be gone with by the end of 1st qtr. He is open to potential opps within M&amp;A and Consulting. Spoke to him about PwC, EY TAS and GCA and is interested,</p>
<p>Engaged in investment banking business for 20 years and worked on number of investment banking transactions, inc</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=224560&pg=ajx')">224560</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shiyang Liang (23)<br><br>Hikari Tsushin, Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419020&pg=ajx')">419020</a>
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
			<div class="stat_holder revenueSize2" id="431">
			6			</div>
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
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Niki Wu (25)<br><br>KPMG Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419387&pg=ajx')">419387</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shiyang Liang (23)<br><br>Hikari Tsushin, Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419020&pg=ajx')">419020</a>
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
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Niki Wu (25)<br><br>KPMG Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419387&pg=ajx')">419387</a>
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
			<div class="stat_holder revenueSize2" id="431">
			4			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Janelle Zhu (26)<br><br>SMBC Nikko Securities<br><br><i><p>Wants to get into FSs and pitched PwC M&amp;A Advisory but did not make it.</p>
<p>OK for strategy consulting side as well.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419513&pg=ajx')">419513</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nathan Ramler (41)<br><br>Macquarie Capital Securities Japan Ltd.<br><br><i><p>Wants to get into FSs and pitched PwC M&amp;A Advisory but did not make it.</p>
<p>OK for strategy consulting side as well.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=86768&pg=ajx')">86768</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Bailu Qian (26)<br><br>Deloitte Tohmatsu Financial Advisory (DTFA)<br><br><i><p>Would be TS if he was fluent in J.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420500&pg=ajx')">420500</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Niki Wu (25)<br><br>KPMG Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419387&pg=ajx')">419387</a>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			5			</div>
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
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Niki Wu (25)<br><br>KPMG Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419387&pg=ajx')">419387</a>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			4			</div>
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
							<div class="hover_row ">
										<a data-toggle="tooltip" title="Candidate ID: 419387" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9445&pg=ajx')">9445</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a data-toggle="tooltip" title="Candidate ID: 419020" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9542&pg=ajx')">9542</a>
										</div>
							<div class="hover_row  colored_row2">
										<a data-toggle="tooltip" title="Candidate ID: 420074" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9479&pg=ajx')">9479</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a data-toggle="tooltip" title="Candidate ID: 321446" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9192&pg=ajx')">9192</a>
										</div>
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
	
					<tr class="hover_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">L. Fry</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			49			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shotaro Itaya (-)<br>Country Manager<br>K2 Partnering Solutions K.K.<br><br><i>Looks like a young punk (young looking, petite and short), westernized Japanese, ex-headhunter and joined here as a rookie sales guy in 2010. Should be a responsive client contact.</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=179853&pg=ajx')">179853</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ikuko Fukuda (51)<br>Lead Interpreter<br>IBS Software Services<br><br><i>PA of Mark Smith from skill House</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=124321&pg=ajx')">124321</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenichi Saito (44)<br>Senior Business Development Manager<br>NXP Semiconductor<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420516&pg=ajx')">420516</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kono Eiji (24)<br>Sales<br>Goto Kaisoten co., ltd.<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420224&pg=ajx')">420224</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Katsunari Tanaka (43)<br>Chief Marketing Officer<br>Neo Promotion<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420195&pg=ajx')">420195</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshiaki Takayama (46)<br>Vice-Director personnel affairs general affairs department<br>Networld Corporation<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420194&pg=ajx')">420194</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hideki Tsumura (51)<br>General Manager, Japan Operation<br>Mellanox<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420193&pg=ajx')">420193</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emiko Tokunaga (-)<br>Senior Manager, Communications Planning Group, Corporate Citizenship  Group, and HR Group<br>Samsung Electronics Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420196&pg=ajx')">420196</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Machiko OZAWA (47)<br>Finance Manager<br>Air New Zealand Ltd.<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419597&pg=ajx')">419597</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="KAZUYA  MIWA (53)<br>Engineering Director<br>Key Safety Systems Japan K.K.<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420221&pg=ajx')">420221</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiichi Shiojiri (51)<br>Legal Manager<br>Aeon<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420197&pg=ajx')">420197</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiji Takeuchi (44)<br>Country Manager<br>Cortina Access<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420219&pg=ajx')">420219</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Reiko Hino (42)<br>Senior Account Manager<br>Cosmo Public Relations Corporation<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420331&pg=ajx')">420331</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Inoue (50)<br>Senior Helpdesk Analyst<br>Proto Labs Japan<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420275&pg=ajx')">420275</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ken Takano (39)<br>Director General/City Manager of Nishi Ward, City of Osaka<br>Nishi Ward Office - City of Osaka<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420239&pg=ajx')">420239</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michihisa Onishi (51)<br>Principal Engineer<br>Philips Lumileds Lighting Company<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420267&pg=ajx')">420267</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryochi Higashi (38)<br>Director, Head of Regional Business Management<br>Eastspring Investments<br><br><i><p>BIZREACH.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420266&pg=ajx')">420266</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryoichi Fujita (30)<br>Retail Finance<br>Amazon<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=411765&pg=ajx')">411765</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kalpa Perera (31)<br>Software Engineer / System Engineer<br>Metatechno Inc<br><br><i><p>Refferal</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420166&pg=ajx')">420166</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori  Iwase (30)<br>BI Analyst<br>Fast Retailing Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420312&pg=ajx')">420312</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Ishida (-)<br>Translator<br>FreeLance<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420345&pg=ajx')">420345</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Sugita (-)<br>Translator<br>Freelance<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420330&pg=ajx')">420330</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshihiro Shima (52)<br>Legal Manager<br>MTI Ltd.<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=63574&pg=ajx')">63574</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shuichiro Kamitake (33)<br>Sales Staff Principal<br>Oracle<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420348&pg=ajx')">420348</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takeshi Miura (51)<br>Manager<br>Accenture Japan<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=25381&pg=ajx')">25381</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takahiro Ohashi (34)<br>Liability Underwriter, Assistant Manager<br>Allianz<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420369&pg=ajx')">420369</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Patil Aniruddha (32)<br>Technical Lead<br>Infosys Technologies Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420346&pg=ajx')">420346</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="WEI HONG (-)<br>Sr. Business Manager<br>Sony Mobile Communications<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420365&pg=ajx')">420365</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiji Itoh (51)<br><br>IBM<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420061&pg=ajx')">420061</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="MITSURU TAKEHARA (49)<br>Cloud Engineer, R&D Department<br>Sony<br><br><i><p>BIZREACH.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420353&pg=ajx')">420353</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saiko Kataoka (35)<br>E-Broking Market Administrator<br>Tullett Prebon Singapore Ltd.<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420430&pg=ajx')">420430</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hidemi Okada (49)<br>法人・個人向け各商品の広告制作、媒体計画、イベント運営、購買、組織マネジメント<br>Fujitsu<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420427&pg=ajx')">420427</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinobu Tanemura (48)<br>Director - Corporate Compliance and Risk Management<br>Eisai Co., Ltd.<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420317&pg=ajx')">420317</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masayuki Ose (46)<br>Client Executive<br>IBM<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=342477&pg=ajx')">342477</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuichi Ishikawa (42)<br>Communication department Researcher, Engineer (April 2000 – Present)<br>Hitachi<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420368&pg=ajx')">420368</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="TAKEYA KORESAWA (43)<br>Senior Manager<br>BOT Lease Co., Ltd.<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420439&pg=ajx')">420439</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Imam Muhammad Habib Abu (29)<br>Engagement Manager –Strategy & Operations<br>KPMG Japan<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420366&pg=ajx')">420366</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshihiro Nakahara (37)<br>Senior Manager in Group CFO Office<br>Lixil<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420333&pg=ajx')">420333</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shelley Hsu (30)<br>Software Research Engineer<br>Toshiba<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420446&pg=ajx')">420446</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadashi Ishida (55)<br>SAP Consultant, (SD and MM)<br>Idemitsu Engineering Co., Ltd.<br><br><i>I remember this guy a little. I think there was something goofy about him.</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=3957&pg=ajx')">3957</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori Ichikawa (36)<br>Solution Prinicpal Consultant<br>Oracle<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323252&pg=ajx')">323252</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Isao Takizawa (37)<br>Director<br>Lazard Freres K.K.<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420466&pg=ajx')">420466</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Katsuyuki Tamura (52)<br>Technical Leader, Engineering, Japan Manufacturing<br>Cisco<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420471&pg=ajx')">420471</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuichi Ueno (39)<br>Sales Engineer<br>KTL Corporation<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=251262&pg=ajx')">251262</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kei Matsuya (42)<br>Senior Project Manager (Program Manager)<br>Nokia<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420494&pg=ajx')">420494</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Soichi Murata (37)<br>Marketing Manager<br>AMO Japan K.K.<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420498&pg=ajx')">420498</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="masaru okano (47)<br>IT Application Service Senior Manager<br>Johnson & Johnson K.K.<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420469&pg=ajx')">420469</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinya Nuri (48)<br>Section Manager<br>UNIRITA<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420525&pg=ajx')">420525</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="(Max) Bu Xiaochen (28)<br>Network Operations Analyst<br>Sprint<br><br><i><p>Bizreach.</p>
<p>&nbsp;</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420548&pg=ajx')">420548</a>
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
			47			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kono Eiji (24)<br>Sales<br>Goto Kaisoten co., ltd.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420224&pg=ajx')">420224</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Katsunari Tanaka (43)<br>Chief Marketing Officer<br>Neo Promotion<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420195&pg=ajx')">420195</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshiaki Takayama (46)<br>Vice-Director personnel affairs general affairs department<br>Networld Corporation<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420194&pg=ajx')">420194</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hideki Tsumura (51)<br>General Manager, Japan Operation<br>Mellanox<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420193&pg=ajx')">420193</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emiko Tokunaga (-)<br>Senior Manager, Communications Planning Group, Corporate Citizenship  Group, and HR Group<br>Samsung Electronics Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420196&pg=ajx')">420196</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Machiko OZAWA (47)<br>Finance Manager<br>Air New Zealand Ltd.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419597&pg=ajx')">419597</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="KAZUYA  MIWA (53)<br>Engineering Director<br>Key Safety Systems Japan K.K.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420221&pg=ajx')">420221</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiichi Shiojiri (51)<br>Legal Manager<br>Aeon<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420197&pg=ajx')">420197</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiji Takeuchi (44)<br>Country Manager<br>Cortina Access<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420219&pg=ajx')">420219</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Reiko Hino (42)<br>Senior Account Manager<br>Cosmo Public Relations Corporation<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420331&pg=ajx')">420331</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Inoue (50)<br>Senior Helpdesk Analyst<br>Proto Labs Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420275&pg=ajx')">420275</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ken Takano (39)<br>Director General/City Manager of Nishi Ward, City of Osaka<br>Nishi Ward Office - City of Osaka<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420239&pg=ajx')">420239</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michihisa Onishi (51)<br>Principal Engineer<br>Philips Lumileds Lighting Company<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420267&pg=ajx')">420267</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryochi Higashi (38)<br>Director, Head of Regional Business Management<br>Eastspring Investments<br><br><i><p>BIZREACH.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420266&pg=ajx')">420266</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryoichi Fujita (30)<br>Retail Finance<br>Amazon<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=411765&pg=ajx')">411765</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kalpa Perera (31)<br>Software Engineer / System Engineer<br>Metatechno Inc<br><br><i><p>Refferal</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420166&pg=ajx')">420166</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori  Iwase (30)<br>BI Analyst<br>Fast Retailing Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420312&pg=ajx')">420312</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Ishida (-)<br>Translator<br>FreeLance<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420345&pg=ajx')">420345</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Sugita (-)<br>Translator<br>Freelance<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420330&pg=ajx')">420330</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshihiro Shima (52)<br>Legal Manager<br>MTI Ltd.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=63574&pg=ajx')">63574</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shuichiro Kamitake (33)<br>Sales Staff Principal<br>Oracle<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420348&pg=ajx')">420348</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takeshi Miura (51)<br>Manager<br>Accenture Japan<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=25381&pg=ajx')">25381</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takahiro Ohashi (34)<br>Liability Underwriter, Assistant Manager<br>Allianz<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420369&pg=ajx')">420369</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Patil Aniruddha (32)<br>Technical Lead<br>Infosys Technologies Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420346&pg=ajx')">420346</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="WEI HONG (-)<br>Sr. Business Manager<br>Sony Mobile Communications<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420365&pg=ajx')">420365</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiji Itoh (51)<br><br>IBM<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420061&pg=ajx')">420061</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="MITSURU TAKEHARA (49)<br>Cloud Engineer, R&D Department<br>Sony<br><br><i><p>BIZREACH.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420353&pg=ajx')">420353</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saiko Kataoka (35)<br>E-Broking Market Administrator<br>Tullett Prebon Singapore Ltd.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420430&pg=ajx')">420430</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hidemi Okada (49)<br>法人・個人向け各商品の広告制作、媒体計画、イベント運営、購買、組織マネジメント<br>Fujitsu<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420427&pg=ajx')">420427</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinobu Tanemura (48)<br>Director - Corporate Compliance and Risk Management<br>Eisai Co., Ltd.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420317&pg=ajx')">420317</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masayuki Ose (46)<br>Client Executive<br>IBM<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=342477&pg=ajx')">342477</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuichi Ishikawa (42)<br>Communication department Researcher, Engineer (April 2000 – Present)<br>Hitachi<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420368&pg=ajx')">420368</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="TAKEYA KORESAWA (43)<br>Senior Manager<br>BOT Lease Co., Ltd.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420439&pg=ajx')">420439</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Imam Muhammad Habib Abu (29)<br>Engagement Manager –Strategy & Operations<br>KPMG Japan<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420366&pg=ajx')">420366</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshihiro Nakahara (37)<br>Senior Manager in Group CFO Office<br>Lixil<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420333&pg=ajx')">420333</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shelley Hsu (30)<br>Software Research Engineer<br>Toshiba<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420446&pg=ajx')">420446</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadashi Ishida (55)<br>SAP Consultant, (SD and MM)<br>Idemitsu Engineering Co., Ltd.<br><br><i>I remember this guy a little. I think there was something goofy about him.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=3957&pg=ajx')">3957</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori Ichikawa (36)<br>Solution Prinicpal Consultant<br>Oracle<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323252&pg=ajx')">323252</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Isao Takizawa (37)<br>Director<br>Lazard Freres K.K.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420466&pg=ajx')">420466</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Katsuyuki Tamura (52)<br>Technical Leader, Engineering, Japan Manufacturing<br>Cisco<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420471&pg=ajx')">420471</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuichi Ueno (39)<br>Sales Engineer<br>KTL Corporation<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=251262&pg=ajx')">251262</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kei Matsuya (42)<br>Senior Project Manager (Program Manager)<br>Nokia<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420494&pg=ajx')">420494</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Soichi Murata (37)<br>Marketing Manager<br>AMO Japan K.K.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420498&pg=ajx')">420498</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="masaru okano (47)<br>IT Application Service Senior Manager<br>Johnson & Johnson K.K.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420469&pg=ajx')">420469</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinya Nuri (48)<br>Section Manager<br>UNIRITA<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420525&pg=ajx')">420525</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="(Max) Bu Xiaochen (28)<br>Network Operations Analyst<br>Sprint<br><br><i><p>Bizreach.</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420548&pg=ajx')">420548</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Bora Jung (33)<br>Business Strategy Analyst<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=369937&pg=ajx')">369937</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			3			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kimiaki Fukutome (53)<br>Senior Manager<br>Capgemini Japan K.K.<br><br><i>English is low 5.  Not sure what he wants to do.  Currently doing contract work for VC software company.<br />
Applied to Developer positio and has some J2EE, UNIX scripting, DWH and Business Intelligence experience.  Thought he wanted to be more of a consultant but cannot find any such positions so will go back to IT.  Interested in business analyst or pre-sales roles.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=28138&pg=ajx')">28138</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuya Kobayashi (39)<br>Software Developer<br>Samuraiz<br><br><i>English is low 5.  Not sure what he wants to do.  Currently doing contract work for VC software company.<br />
Applied to Developer positio and has some J2EE, UNIX scripting, DWH and Business Intelligence experience.  Thought he wanted to be more of a consultant but cannot find any such positions so will go back to IT.  Interested in business analyst or pre-sales roles.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=336188&pg=ajx')">336188</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoki Miyasaka (53)<br>Manager<br>Mebix, Inc.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=340776&pg=ajx')">340776</a>
										</div>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			3			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kimiaki Fukutome (53)<br>Senior Manager<br>Capgemini Japan K.K.<br><br><i>English is low 5.  Not sure what he wants to do.  Currently doing contract work for VC software company.<br />
Applied to Developer positio and has some J2EE, UNIX scripting, DWH and Business Intelligence experience.  Thought he wanted to be more of a consultant but cannot find any such positions so will go back to IT.  Interested in business analyst or pre-sales roles.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=28138&pg=ajx')">28138</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuya Kobayashi (39)<br>Software Developer<br>Samuraiz<br><br><i>English is low 5.  Not sure what he wants to do.  Currently doing contract work for VC software company.<br />
Applied to Developer positio and has some J2EE, UNIX scripting, DWH and Business Intelligence experience.  Thought he wanted to be more of a consultant but cannot find any such positions so will go back to IT.  Interested in business analyst or pre-sales roles.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=336188&pg=ajx')">336188</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoki Miyasaka (53)<br>Manager<br>Mebix, Inc.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=340776&pg=ajx')">340776</a>
										</div>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			9			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kimiaki Fukutome (53)<br>Senior Manager<br>Capgemini Japan K.K.<br><br><i>English is low 5.  Not sure what he wants to do.  Currently doing contract work for VC software company.<br />
Applied to Developer positio and has some J2EE, UNIX scripting, DWH and Business Intelligence experience.  Thought he wanted to be more of a consultant but cannot find any such positions so will go back to IT.  Interested in business analyst or pre-sales roles.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=28138&pg=ajx')">28138</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuya Kobayashi (39)<br>Software Developer<br>Samuraiz<br><br><i>English is low 5.  Not sure what he wants to do.  Currently doing contract work for VC software company.<br />
Applied to Developer positio and has some J2EE, UNIX scripting, DWH and Business Intelligence experience.  Thought he wanted to be more of a consultant but cannot find any such positions so will go back to IT.  Interested in business analyst or pre-sales roles.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=336188&pg=ajx')">336188</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kimiaki Fukutome (53)<br>Senior Manager<br>Capgemini Japan K.K.<br><br><i>English is low 5.  Not sure what he wants to do.  Currently doing contract work for VC software company.<br />
Applied to Developer positio and has some J2EE, UNIX scripting, DWH and Business Intelligence experience.  Thought he wanted to be more of a consultant but cannot find any such positions so will go back to IT.  Interested in business analyst or pre-sales roles.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=28138&pg=ajx')">28138</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuya Kobayashi (39)<br>Software Developer<br>Samuraiz<br><br><i>English is low 5.  Not sure what he wants to do.  Currently doing contract work for VC software company.<br />
Applied to Developer positio and has some J2EE, UNIX scripting, DWH and Business Intelligence experience.  Thought he wanted to be more of a consultant but cannot find any such positions so will go back to IT.  Interested in business analyst or pre-sales roles.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=336188&pg=ajx')">336188</a>
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
			4			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuya Kobayashi (39)<br>Software Developer<br>Samuraiz<br><br><i>English is low 5.  Not sure what he wants to do.  Currently doing contract work for VC software company.<br />
Applied to Developer positio and has some J2EE, UNIX scripting, DWH and Business Intelligence experience.  Thought he wanted to be more of a consultant but cannot find any such positions so will go back to IT.  Interested in business analyst or pre-sales roles.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=336188&pg=ajx')">336188</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuya Kobayashi (39)<br>Software Developer<br>Samuraiz<br><br><i>English is low 5.  Not sure what he wants to do.  Currently doing contract work for VC software company.<br />
Applied to Developer positio and has some J2EE, UNIX scripting, DWH and Business Intelligence experience.  Thought he wanted to be more of a consultant but cannot find any such positions so will go back to IT.  Interested in business analyst or pre-sales roles.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=336188&pg=ajx')">336188</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nitin Datar (45)<br>Sales Director - West Japan<br>Infosys Technologies Ltd.<br><br><i>English is low 5.  Not sure what he wants to do.  Currently doing contract work for VC software company.<br />
Applied to Developer positio and has some J2EE, UNIX scripting, DWH and Business Intelligence experience.  Thought he wanted to be more of a consultant but cannot find any such positions so will go back to IT.  Interested in business analyst or pre-sales roles.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=312372&pg=ajx')">312372</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			47			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kono Eiji (24)<br>Sales<br>Goto Kaisoten co., ltd.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420224&pg=ajx')">420224</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Katsunari Tanaka (43)<br>Chief Marketing Officer<br>Neo Promotion<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420195&pg=ajx')">420195</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshiaki Takayama (46)<br>Vice-Director personnel affairs general affairs department<br>Networld Corporation<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420194&pg=ajx')">420194</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hideki Tsumura (51)<br>General Manager, Japan Operation<br>Mellanox<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420193&pg=ajx')">420193</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emiko Tokunaga (-)<br>Senior Manager, Communications Planning Group, Corporate Citizenship  Group, and HR Group<br>Samsung Electronics Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420196&pg=ajx')">420196</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Machiko OZAWA (47)<br>Finance Manager<br>Air New Zealand Ltd.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419597&pg=ajx')">419597</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="KAZUYA  MIWA (53)<br>Engineering Director<br>Key Safety Systems Japan K.K.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420221&pg=ajx')">420221</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiichi Shiojiri (51)<br>Legal Manager<br>Aeon<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420197&pg=ajx')">420197</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiji Takeuchi (44)<br>Country Manager<br>Cortina Access<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420219&pg=ajx')">420219</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Reiko Hino (42)<br>Senior Account Manager<br>Cosmo Public Relations Corporation<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420331&pg=ajx')">420331</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Inoue (50)<br>Senior Helpdesk Analyst<br>Proto Labs Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420275&pg=ajx')">420275</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ken Takano (39)<br>Director General/City Manager of Nishi Ward, City of Osaka<br>Nishi Ward Office - City of Osaka<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420239&pg=ajx')">420239</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michihisa Onishi (51)<br>Principal Engineer<br>Philips Lumileds Lighting Company<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420267&pg=ajx')">420267</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryochi Higashi (38)<br>Director, Head of Regional Business Management<br>Eastspring Investments<br><br><i><p>BIZREACH.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420266&pg=ajx')">420266</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryoichi Fujita (30)<br>Retail Finance<br>Amazon<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=411765&pg=ajx')">411765</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kalpa Perera (31)<br>Software Engineer / System Engineer<br>Metatechno Inc<br><br><i><p>Refferal</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420166&pg=ajx')">420166</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori  Iwase (30)<br>BI Analyst<br>Fast Retailing Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420312&pg=ajx')">420312</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Ishida (-)<br>Translator<br>FreeLance<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420345&pg=ajx')">420345</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Sugita (-)<br>Translator<br>Freelance<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420330&pg=ajx')">420330</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshihiro Shima (52)<br>Legal Manager<br>MTI Ltd.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=63574&pg=ajx')">63574</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shuichiro Kamitake (33)<br>Sales Staff Principal<br>Oracle<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420348&pg=ajx')">420348</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takeshi Miura (51)<br>Manager<br>Accenture Japan<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=25381&pg=ajx')">25381</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takahiro Ohashi (34)<br>Liability Underwriter, Assistant Manager<br>Allianz<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420369&pg=ajx')">420369</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Patil Aniruddha (32)<br>Technical Lead<br>Infosys Technologies Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420346&pg=ajx')">420346</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="WEI HONG (-)<br>Sr. Business Manager<br>Sony Mobile Communications<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420365&pg=ajx')">420365</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiji Itoh (51)<br><br>IBM<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420061&pg=ajx')">420061</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="MITSURU TAKEHARA (49)<br>Cloud Engineer, R&D Department<br>Sony<br><br><i><p>BIZREACH.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420353&pg=ajx')">420353</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saiko Kataoka (35)<br>E-Broking Market Administrator<br>Tullett Prebon Singapore Ltd.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420430&pg=ajx')">420430</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hidemi Okada (49)<br>法人・個人向け各商品の広告制作、媒体計画、イベント運営、購買、組織マネジメント<br>Fujitsu<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420427&pg=ajx')">420427</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinobu Tanemura (48)<br>Director - Corporate Compliance and Risk Management<br>Eisai Co., Ltd.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420317&pg=ajx')">420317</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masayuki Ose (46)<br>Client Executive<br>IBM<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=342477&pg=ajx')">342477</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuichi Ishikawa (42)<br>Communication department Researcher, Engineer (April 2000 – Present)<br>Hitachi<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420368&pg=ajx')">420368</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="TAKEYA KORESAWA (43)<br>Senior Manager<br>BOT Lease Co., Ltd.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420439&pg=ajx')">420439</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Imam Muhammad Habib Abu (29)<br>Engagement Manager –Strategy & Operations<br>KPMG Japan<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420366&pg=ajx')">420366</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshihiro Nakahara (37)<br>Senior Manager in Group CFO Office<br>Lixil<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420333&pg=ajx')">420333</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shelley Hsu (30)<br>Software Research Engineer<br>Toshiba<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420446&pg=ajx')">420446</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadashi Ishida (55)<br>SAP Consultant, (SD and MM)<br>Idemitsu Engineering Co., Ltd.<br><br><i>I remember this guy a little. I think there was something goofy about him.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=3957&pg=ajx')">3957</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori Ichikawa (36)<br>Solution Prinicpal Consultant<br>Oracle<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323252&pg=ajx')">323252</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Isao Takizawa (37)<br>Director<br>Lazard Freres K.K.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420466&pg=ajx')">420466</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Katsuyuki Tamura (52)<br>Technical Leader, Engineering, Japan Manufacturing<br>Cisco<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420471&pg=ajx')">420471</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuichi Ueno (39)<br>Sales Engineer<br>KTL Corporation<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=251262&pg=ajx')">251262</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kei Matsuya (42)<br>Senior Project Manager (Program Manager)<br>Nokia<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420494&pg=ajx')">420494</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Soichi Murata (37)<br>Marketing Manager<br>AMO Japan K.K.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420498&pg=ajx')">420498</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="masaru okano (47)<br>IT Application Service Senior Manager<br>Johnson & Johnson K.K.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420469&pg=ajx')">420469</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinya Nuri (48)<br>Section Manager<br>UNIRITA<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420525&pg=ajx')">420525</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="(Max) Bu Xiaochen (28)<br>Network Operations Analyst<br>Sprint<br><br><i><p>Bizreach.</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420548&pg=ajx')">420548</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Bora Jung (33)<br>Business Strategy Analyst<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=369937&pg=ajx')">369937</a>
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
			4			</div>
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
			4			</div>
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
										<a data-toggle="tooltip" title="Candidate ID: 28138" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=8664&pg=ajx')">8664</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a data-toggle="tooltip" title="Candidate ID: 419858" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9489&pg=ajx')">9489</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a data-toggle="tooltip" title="Candidate ID: 419584" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9472&pg=ajx')">9472</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a data-toggle="tooltip" title="Candidate ID: 419470" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9458&pg=ajx')">9458</a>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			3			</div>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nitin Datar (45)<br>Sales Director - West Japan<br>Infosys Technologies Ltd.<br><br><i>English is low 5.  Not sure what he wants to do.  Currently doing contract work for VC software company.<br />
Applied to Developer positio and has some J2EE, UNIX scripting, DWH and Business Intelligence experience.  Thought he wanted to be more of a consultant but cannot find any such positions so will go back to IT.  Interested in business analyst or pre-sales roles.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=312372&pg=ajx')">312372</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Suzuno Ota (39)<br>Product Development Coordinator, Development/Risk Management & Moderation, Customer Service<br>HCL Japan Ltd.<br><br><i><p>Phone assessed</p>
<p>Has done interpretation and translation in IT field about 2 years . Before that she was working at Law firms doing translation/interpretation.</p>
<p>Interested in new opportunities prefers 6M JPY</p>
<p>Pitched IBS and waiting for her resume.</p>
<p>&nbsp;</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=365714&pg=ajx')">365714</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sawako Yamagishi (45)<br> 	Interpreter/Translator<br>HCL Japan Ltd.<br><br><i><p>Phone assessed</p>
<p>Has done interpretation and translation in IT field about 2 years . Before that she was working at Law firms doing translation/interpretation.</p>
<p>Interested in new opportunities prefers 6M JPY</p>
<p>Pitched IBS and waiting for her resume.</p>
<p>&nbsp;</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=414723&pg=ajx')">414723</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			3			</div>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Suzuno Ota (39)<br>Product Development Coordinator, Development/Risk Management & Moderation, Customer Service<br>HCL Japan Ltd.<br><br><i><p>Phone assessed</p>
<p>Has done interpretation and translation in IT field about 2 years . Before that she was working at Law firms doing translation/interpretation.</p>
<p>Interested in new opportunities prefers 6M JPY</p>
<p>Pitched IBS and waiting for her resume.</p>
<p>&nbsp;</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=365714&pg=ajx')">365714</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sawako Yamagishi (45)<br> 	Interpreter/Translator<br>HCL Japan Ltd.<br><br><i><p>Phone assessed</p>
<p>Has done interpretation and translation in IT field about 2 years . Before that she was working at Law firms doing translation/interpretation.</p>
<p>Interested in new opportunities prefers 6M JPY</p>
<p>Pitched IBS and waiting for her resume.</p>
<p>&nbsp;</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=414723&pg=ajx')">414723</a>
										</div>
									</div>
		</td>
	</tr>
	
					<tr class="hover_row even_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">M. Moir</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			1			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoko Sashihara (-)<br>HRBP Generalist<br>Shire Baxalta<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420281&pg=ajx')">420281</a>
										</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
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
			12			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Liu Zhao (33)<br>Global Account Executive<br>Dentsu<br><br><i>Met when I worked at Vision and placed her as sales support at Nihon Nest.  Nice girl.  She applied through career cross for new position. Admin, back office, sales support, has experience in working with Indian companies.</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420273&pg=ajx')">420273</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yayoi Erika Tanikawa (21)<br>Content Marketing / SEO / Digital Marketing<br>Bespoke Inc.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420309&pg=ajx')">420309</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masataka TSUBOI (49)<br>Corporate Marketing, Global Marketing<br>Sompo Japan<br><br><i><p>Is currently living in Kyushu but is open to positions in Tokyo or OSaka.&nbsp; Has not worked for the last 2 years as he had to take care of his mother.&nbsp; She is fine now and he wants to return to work.&nbsp; Has 24 years of insurance marketing experience, mostly non Life.&nbsp; Wholes, corporate marketing.&nbsp; Maeketing planning.&nbsp; Is not interviewing with any companies yet.&nbsp;</p>
<p>&nbsp;</p>
<p>Fine to be sent any insurance companies.&nbsp;</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415479&pg=ajx')">415479</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshihisa Watanabe (37)<br>Media Communication Planner<br>MediaCom<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420299&pg=ajx')">420299</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tokuhiko Kusakabe (51)<br>Marketing Manager<br>Parallels Software<br><br><i>Phone assessed, English was a bit scratchy sometimes, but it was also due to the bad connection and the fact he was talking very fast. Strong BtoB IT services marketing/ strategies / Branding & Communications experience, especially in educational field but also so medical fields. Now at Parallels as Marketing Manager, used to be at Adobe for 4 yrs total. Achieved agreements w/universities. Like to work on overseas market. Said he was a good teacher, eager to transmit his knowledge (used to be le</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=338073&pg=ajx')">338073</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kasumi Hirokawa (24)<br>PR & Marketing<br>Shibaura Institute of Technology<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420357&pg=ajx')">420357</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akshay Rajvanshi (24)<br>Java Software Developer<br>Hikari Tsushin, Inc.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420433&pg=ajx')">420433</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sreeharsha Pole (-)<br>Technical Pre Sales & Post Sales<br>Tomen Electronics Corporation<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420437&pg=ajx')">420437</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Titanilla Matrai (40)<br>Account Manager<br>Witan Associates Limited<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=366326&pg=ajx')">366326</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Gonzalo Fonseca (52)<br>Managing Director<br>Unknown<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420472&pg=ajx')">420472</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kei Ishihara (40)<br>Network/Server Engineer<br>Intertek<br><br><i><p>Claims his base salary is JPY20M + bonus. Would consider opportunities at JPY18M+ base salary. Especially very interested in a Tech Advisory role w/ MetLife, he believes its more steady than Goldman Sachs and pay bigger bonuses which would cover any base salary loss. Previously was introduced to the role, interviewed w/ CIO, but then was offered a PM role in which would have managed a significant large team of but declined. At Goldman oversees entire APAC QA/Testing of, which under him includ</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=90905&pg=ajx')">90905</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Makoto Sato (44)<br>Account Director<br>Beacon Communications K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420535&pg=ajx')">420535</a>
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
			12			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Liu Zhao (33)<br>Global Account Executive<br>Dentsu<br><br><i>Met when I worked at Vision and placed her as sales support at Nihon Nest.  Nice girl.  She applied through career cross for new position. Admin, back office, sales support, has experience in working with Indian companies.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420273&pg=ajx')">420273</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yayoi Erika Tanikawa (21)<br>Content Marketing / SEO / Digital Marketing<br>Bespoke Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420309&pg=ajx')">420309</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masataka TSUBOI (49)<br>Corporate Marketing, Global Marketing<br>Sompo Japan<br><br><i><p>Is currently living in Kyushu but is open to positions in Tokyo or OSaka.&nbsp; Has not worked for the last 2 years as he had to take care of his mother.&nbsp; She is fine now and he wants to return to work.&nbsp; Has 24 years of insurance marketing experience, mostly non Life.&nbsp; Wholes, corporate marketing.&nbsp; Maeketing planning.&nbsp; Is not interviewing with any companies yet.&nbsp;</p>
<p>&nbsp;</p>
<p>Fine to be sent any insurance companies.&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415479&pg=ajx')">415479</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshihisa Watanabe (37)<br>Media Communication Planner<br>MediaCom<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420299&pg=ajx')">420299</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tokuhiko Kusakabe (51)<br>Marketing Manager<br>Parallels Software<br><br><i>Phone assessed, English was a bit scratchy sometimes, but it was also due to the bad connection and the fact he was talking very fast. Strong BtoB IT services marketing/ strategies / Branding & Communications experience, especially in educational field but also so medical fields. Now at Parallels as Marketing Manager, used to be at Adobe for 4 yrs total. Achieved agreements w/universities. Like to work on overseas market. Said he was a good teacher, eager to transmit his knowledge (used to be le</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=338073&pg=ajx')">338073</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kasumi Hirokawa (24)<br>PR & Marketing<br>Shibaura Institute of Technology<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420357&pg=ajx')">420357</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akshay Rajvanshi (24)<br>Java Software Developer<br>Hikari Tsushin, Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420433&pg=ajx')">420433</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sreeharsha Pole (-)<br>Technical Pre Sales & Post Sales<br>Tomen Electronics Corporation<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420437&pg=ajx')">420437</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Titanilla Matrai (40)<br>Account Manager<br>Witan Associates Limited<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=366326&pg=ajx')">366326</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Gonzalo Fonseca (52)<br>Managing Director<br>Unknown<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420472&pg=ajx')">420472</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kei Ishihara (40)<br>Network/Server Engineer<br>Intertek<br><br><i><p>Claims his base salary is JPY20M + bonus. Would consider opportunities at JPY18M+ base salary. Especially very interested in a Tech Advisory role w/ MetLife, he believes its more steady than Goldman Sachs and pay bigger bonuses which would cover any base salary loss. Previously was introduced to the role, interviewed w/ CIO, but then was offered a PM role in which would have managed a significant large team of but declined. At Goldman oversees entire APAC QA/Testing of, which under him includ</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=90905&pg=ajx')">90905</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Makoto Sato (44)<br>Account Director<br>Beacon Communications K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420535&pg=ajx')">420535</a>
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
			15			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Liu Zhao (33)<br>Global Account Executive<br>Dentsu<br><br><i>Met when I worked at Vision and placed her as sales support at Nihon Nest.  Nice girl.  She applied through career cross for new position. Admin, back office, sales support, has experience in working with Indian companies.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420273&pg=ajx')">420273</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masataka TSUBOI (49)<br>Corporate Marketing, Global Marketing<br>Sompo Japan<br><br><i><p>Is currently living in Kyushu but is open to positions in Tokyo or OSaka.&nbsp; Has not worked for the last 2 years as he had to take care of his mother.&nbsp; She is fine now and he wants to return to work.&nbsp; Has 24 years of insurance marketing experience, mostly non Life.&nbsp; Wholes, corporate marketing.&nbsp; Maeketing planning.&nbsp; Is not interviewing with any companies yet.&nbsp;</p>
<p>&nbsp;</p>
<p>Fine to be sent any insurance companies.&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415479&pg=ajx')">415479</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kasumi Hirokawa (24)<br>PR & Marketing<br>Shibaura Institute of Technology<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420357&pg=ajx')">420357</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akshay Rajvanshi (24)<br>Java Software Developer<br>Hikari Tsushin, Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420433&pg=ajx')">420433</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Titanilla Matrai (40)<br>Account Manager<br>Witan Associates Limited<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=366326&pg=ajx')">366326</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Anand Kumar (42)<br>Project Manager - Business Analyst<br>ITCS Group<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=118030&pg=ajx')">118030</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rajesh Sankaranarayanan (37)<br>Senior Project Manager<br>Cognizant Technology Solutions (CTS)<br><br><i><p>FULL NAME: Anand Kumar Thulasiraman</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=303927&pg=ajx')">303927</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Wakana Koichi (46)<br>Sales Assistant<br>IBS Software Services<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=336187&pg=ajx')">336187</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Patrick Chan (34)<br>Software Engineer - Consultant<br>Fusion Systems Japan<br><br><i><p>Is currently living in Kyushu but is open to positions in Tokyo or OSaka.&nbsp; Has not worked for the last 2 years as he had to take care of his mother.&nbsp; She is fine now and he wants to return to work.&nbsp; Has 24 years of insurance marketing experience, mostly non Life.&nbsp; Wholes, corporate marketing.&nbsp; Maeketing planning.&nbsp; Is not interviewing with any companies yet.&nbsp;</p>
<p>&nbsp;</p>
<p>Fine to be sent any insurance companies.&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419985&pg=ajx')">419985</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akio Takahashi (28)<br>Media Planner<br>Transcosmos Inc.<br><br><i><p>Resume sent to Nielsen by other Agency w/o his consent</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420077&pg=ajx')">420077</a>
										</div>
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
			<div class="stat_holder revenueSize2" id="493">
			5			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Liu Zhao (33)<br>Global Account Executive<br>Dentsu<br><br><i>Met when I worked at Vision and placed her as sales support at Nihon Nest.  Nice girl.  She applied through career cross for new position. Admin, back office, sales support, has experience in working with Indian companies.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420273&pg=ajx')">420273</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akshay Rajvanshi (24)<br>Java Software Developer<br>Hikari Tsushin, Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420433&pg=ajx')">420433</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Titanilla Matrai (40)<br>Account Manager<br>Witan Associates Limited<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=366326&pg=ajx')">366326</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Wakana Koichi (46)<br>Sales Assistant<br>IBS Software Services<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=336187&pg=ajx')">336187</a>
										</div>
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
			<div class="stat_holder revenueSize2" id="493">
			5			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Liu Zhao (33)<br>Global Account Executive<br>Dentsu<br><br><i>Met when I worked at Vision and placed her as sales support at Nihon Nest.  Nice girl.  She applied through career cross for new position. Admin, back office, sales support, has experience in working with Indian companies.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420273&pg=ajx')">420273</a>
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
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akshay Rajvanshi (24)<br>Java Software Developer<br>Hikari Tsushin, Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420433&pg=ajx')">420433</a>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Wakana Koichi (46)<br>Sales Assistant<br>IBS Software Services<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=336187&pg=ajx')">336187</a>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akshay Rajvanshi (24)<br>Java Software Developer<br>Hikari Tsushin, Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420433&pg=ajx')">420433</a>
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
			<div class="stat_holder revenueSize2" id="493">
			4			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kei Ishihara (40)<br>Network/Server Engineer<br>Intertek<br><br><i><p>Claims his base salary is JPY20M + bonus. Would consider opportunities at JPY18M+ base salary. Especially very interested in a Tech Advisory role w/ MetLife, he believes its more steady than Goldman Sachs and pay bigger bonuses which would cover any base salary loss. Previously was introduced to the role, interviewed w/ CIO, but then was offered a PM role in which would have managed a significant large team of but declined. At Goldman oversees entire APAC QA/Testing of, which under him includ</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=90905&pg=ajx')">90905</a>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoko Kuriki (37)<br>Member of Technical Staff<br>Genexus Japan<br><br><i><p>Claims his base salary is JPY20M + bonus. Would consider opportunities at JPY18M+ base salary. Especially very interested in a Tech Advisory role w/ MetLife, he believes its more steady than Goldman Sachs and pay bigger bonuses which would cover any base salary loss. Previously was introduced to the role, interviewed w/ CIO, but then was offered a PM role in which would have managed a significant large team of but declined. At Goldman oversees entire APAC QA/Testing of, which under him includ</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418645&pg=ajx')">418645</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emmanouil Piperakis (42)<br>VP - APAC Lead - Test Engineer<br>MetLife Ltd.<br><br><i><p>WARNING: Received an offer from Intertek for JPY 4.8M.</p>
<p>After the final F2F with CEO she expressed excitement &amp; high interest, only 4-days later when the offer rolled out to claim she doesnt like, trust, nor wants to work for the CEO as recalling some answers from the F2F did not make her comfortable about the company environment and job security.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=340972&pg=ajx')">340972</a>
										</div>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			10			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Liu Zhao (33)<br>Global Account Executive<br>Dentsu<br><br><i>Met when I worked at Vision and placed her as sales support at Nihon Nest.  Nice girl.  She applied through career cross for new position. Admin, back office, sales support, has experience in working with Indian companies.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420273&pg=ajx')">420273</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yayoi Erika Tanikawa (21)<br>Content Marketing / SEO / Digital Marketing<br>Bespoke Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420309&pg=ajx')">420309</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshihisa Watanabe (37)<br>Media Communication Planner<br>MediaCom<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420299&pg=ajx')">420299</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kasumi Hirokawa (24)<br>PR & Marketing<br>Shibaura Institute of Technology<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420357&pg=ajx')">420357</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akshay Rajvanshi (24)<br>Java Software Developer<br>Hikari Tsushin, Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420433&pg=ajx')">420433</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sreeharsha Pole (-)<br>Technical Pre Sales & Post Sales<br>Tomen Electronics Corporation<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420437&pg=ajx')">420437</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Titanilla Matrai (40)<br>Account Manager<br>Witan Associates Limited<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=366326&pg=ajx')">366326</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Gonzalo Fonseca (52)<br>Managing Director<br>Unknown<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420472&pg=ajx')">420472</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kei Ishihara (40)<br>Network/Server Engineer<br>Intertek<br><br><i><p>Claims his base salary is JPY20M + bonus. Would consider opportunities at JPY18M+ base salary. Especially very interested in a Tech Advisory role w/ MetLife, he believes its more steady than Goldman Sachs and pay bigger bonuses which would cover any base salary loss. Previously was introduced to the role, interviewed w/ CIO, but then was offered a PM role in which would have managed a significant large team of but declined. At Goldman oversees entire APAC QA/Testing of, which under him includ</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=90905&pg=ajx')">90905</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Makoto Sato (44)<br>Account Director<br>Beacon Communications K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420535&pg=ajx')">420535</a>
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
			4			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Liu Zhao (33)<br>Global Account Executive<br>Dentsu<br><br><i>Met when I worked at Vision and placed her as sales support at Nihon Nest.  Nice girl.  She applied through career cross for new position. Admin, back office, sales support, has experience in working with Indian companies.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420273&pg=ajx')">420273</a>
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
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akshay Rajvanshi (24)<br>Java Software Developer<br>Hikari Tsushin, Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420433&pg=ajx')">420433</a>
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
			<div class="stat_holder revenueSize2" id="493">
			3			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
										<a data-toggle="tooltip" title="Candidate ID: 420273" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9501&pg=ajx')">9501</a>
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
										<a data-toggle="tooltip" title="Candidate ID: 336187" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9500&pg=ajx')">9500</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a data-toggle="tooltip" title="Candidate ID: 341859" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9066&pg=ajx')">9066</a>
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
			4			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kei Ishihara (40)<br>Network/Server Engineer<br>Intertek<br><br><i><p>Claims his base salary is JPY20M + bonus. Would consider opportunities at JPY18M+ base salary. Especially very interested in a Tech Advisory role w/ MetLife, he believes its more steady than Goldman Sachs and pay bigger bonuses which would cover any base salary loss. Previously was introduced to the role, interviewed w/ CIO, but then was offered a PM role in which would have managed a significant large team of but declined. At Goldman oversees entire APAC QA/Testing of, which under him includ</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=90905&pg=ajx')">90905</a>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoko Kuriki (37)<br>Member of Technical Staff<br>Genexus Japan<br><br><i><p>Claims his base salary is JPY20M + bonus. Would consider opportunities at JPY18M+ base salary. Especially very interested in a Tech Advisory role w/ MetLife, he believes its more steady than Goldman Sachs and pay bigger bonuses which would cover any base salary loss. Previously was introduced to the role, interviewed w/ CIO, but then was offered a PM role in which would have managed a significant large team of but declined. At Goldman oversees entire APAC QA/Testing of, which under him includ</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418645&pg=ajx')">418645</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emmanouil Piperakis (42)<br>VP - APAC Lead - Test Engineer<br>MetLife Ltd.<br><br><i><p>WARNING: Received an offer from Intertek for JPY 4.8M.</p>
<p>After the final F2F with CEO she expressed excitement &amp; high interest, only 4-days later when the offer rolled out to claim she doesnt like, trust, nor wants to work for the CEO as recalling some answers from the F2F did not make her comfortable about the company environment and job security.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=340972&pg=ajx')">340972</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Satoshi Toyotomi (43)<br>Manager<br>Survey Sampling International<br><br><i><p>Introduced to Intertek: ISO 27001 Scheme manager role due to prior work in IT Audit</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=309638&pg=ajx')">309638</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			2			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kei Ishihara (40)<br>Network/Server Engineer<br>Intertek<br><br><i><p>Claims his base salary is JPY20M + bonus. Would consider opportunities at JPY18M+ base salary. Especially very interested in a Tech Advisory role w/ MetLife, he believes its more steady than Goldman Sachs and pay bigger bonuses which would cover any base salary loss. Previously was introduced to the role, interviewed w/ CIO, but then was offered a PM role in which would have managed a significant large team of but declined. At Goldman oversees entire APAC QA/Testing of, which under him includ</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=90905&pg=ajx')">90905</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emmanouil Piperakis (42)<br>VP - APAC Lead - Test Engineer<br>MetLife Ltd.<br><br><i><p>WARNING: Received an offer from Intertek for JPY 4.8M.</p>
<p>After the final F2F with CEO she expressed excitement &amp; high interest, only 4-days later when the offer rolled out to claim she doesnt like, trust, nor wants to work for the CEO as recalling some answers from the F2F did not make her comfortable about the company environment and job security.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=340972&pg=ajx')">340972</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
	</tr>
	
					<tr class="hover_row even_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">P. Miles Harry</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			2			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuichi Yamazaki (-)<br>VP for International Human Resources<br>Merck Ltd.<br><br><i><p>CLIENT CONTACT at Saint-Gobain</p>
<p>&nbsp;</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=264309&pg=ajx')">264309</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akira Shibata (36)<br>Manager<br>Walmart / Seiyu<br><br><i><p>Spoke with him, still at Walmart. said that he want to find new opportunities but not sure which company he would like to join. Pitched Royal Canin, not interested</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=403476&pg=ajx')">403476</a>
										</div>
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
			3			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Joji Asai (44)<br>Supply Chain<br>Coca-Cola East Japan<br><br><i><p>Spoke with him, still at Walmart. said that he want to find new opportunities but not sure which company he would like to join. Pitched Royal Canin, not interested</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=407135&pg=ajx')">407135</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasuharu Kawase (44)<br>Business Development Manager<br>DKSH- Japan<br><br><i><p>Met with him again. He is going to final interview at Arysta. Seems like really motivated and interested.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419957&pg=ajx')">419957</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ruri Oshita (45)<br>Distribution Planning Manager<br>Danone Japan K.K.<br><br><i><p>salary breakdown to be discussed. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420078&pg=ajx')">420078</a>
										</div>
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
	</tr>
	
					<tr class="hover_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">P. Thai</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			16			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayumi Nakashima (36)<br>Digital Marketing<br>Okamura Corporation<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420487&pg=ajx')">420487</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Miyuki Nakamura (27)<br>eCommerce & Digital Marketing eCommerce customer Marketing Executive<br>Unilever<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420541&pg=ajx')">420541</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Munehiko Nakayama (57)<br>Finance Manager<br>Sumitomo 3M Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=15062&pg=ajx')">15062</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tsuyoshi Sasaki (43)<br>Project Manager<br>NTT Data Enterprise Application Services<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=300505&pg=ajx')">300505</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazufumi Nieda (50)<br>Finance Manager<br>Autodesk Japan K.K.<br><br><i><p>Wants at least 10M.  Was on 13M base at Autodesk before.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=121633&pg=ajx')">121633</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeff Gu (26)<br>Management Consulting/Strategy Analyst<br>Accenture Japan<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420278&pg=ajx')">420278</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Heyoung Chang (43)<br><br>Kokubu Group Corp<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420240&pg=ajx')">420240</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kosaka Hiroaki (47)<br>Account Manager<br>Thomson Reuters<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420315&pg=ajx')">420315</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko Komiya (39)<br>Marketing Specialist, International Business Develop Department<br>AstaReal Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420401&pg=ajx')">420401</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryoji Morii (36)<br>Senior Consultant of Financial Services Institute / Banking and securities industry<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420434&pg=ajx')">420434</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masatoshi Nagai (37)<br>Senior Consultant, Industrial Products and Heavy Industry Unit<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417785&pg=ajx')">417785</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hitomi Kita (39)<br>Digital/CRM Marketing<br>Volvo Cars Japan<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420438&pg=ajx')">420438</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Yamazaki (47)<br>Helpdesk Specialist<br>MetLife Ltd.<br><br><i><p>Outsourced to Metlife from Robert Walters, his contract started in Oct 2016, and end Feb end.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420484&pg=ajx')">420484</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshihisa Takahashi (42)<br>Presales Engineer<br>KDDI<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417598&pg=ajx')">417598</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Totsuka Masaki (-)<br>Staff<br>Thomson Reuters<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=130371&pg=ajx')">130371</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masakazu Aomine (-)<br>Partner Account Manager<br>Arcserve<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420512&pg=ajx')">420512</a>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			14			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Munehiko Nakayama (57)<br>Finance Manager<br>Sumitomo 3M Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=15062&pg=ajx')">15062</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tsuyoshi Sasaki (43)<br>Project Manager<br>NTT Data Enterprise Application Services<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=300505&pg=ajx')">300505</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazufumi Nieda (50)<br>Finance Manager<br>Autodesk Japan K.K.<br><br><i><p>Wants at least 10M.  Was on 13M base at Autodesk before.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=121633&pg=ajx')">121633</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeff Gu (26)<br>Management Consulting/Strategy Analyst<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420278&pg=ajx')">420278</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Heyoung Chang (43)<br><br>Kokubu Group Corp<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420240&pg=ajx')">420240</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kosaka Hiroaki (47)<br>Account Manager<br>Thomson Reuters<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420315&pg=ajx')">420315</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko Komiya (39)<br>Marketing Specialist, International Business Develop Department<br>AstaReal Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420401&pg=ajx')">420401</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryoji Morii (36)<br>Senior Consultant of Financial Services Institute / Banking and securities industry<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420434&pg=ajx')">420434</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masatoshi Nagai (37)<br>Senior Consultant, Industrial Products and Heavy Industry Unit<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417785&pg=ajx')">417785</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hitomi Kita (39)<br>Digital/CRM Marketing<br>Volvo Cars Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420438&pg=ajx')">420438</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Yamazaki (47)<br>Helpdesk Specialist<br>MetLife Ltd.<br><br><i><p>Outsourced to Metlife from Robert Walters, his contract started in Oct 2016, and end Feb end.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420484&pg=ajx')">420484</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshihisa Takahashi (42)<br>Presales Engineer<br>KDDI<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417598&pg=ajx')">417598</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Totsuka Masaki (-)<br>Staff<br>Thomson Reuters<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=130371&pg=ajx')">130371</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masakazu Aomine (-)<br>Partner Account Manager<br>Arcserve<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420512&pg=ajx')">420512</a>
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
							<div class="hover_row">
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko Komiya (39)<br>Marketing Specialist, International Business Develop Department<br>AstaReal Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420401&pg=ajx')">420401</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masatoshi Nagai (37)<br>Senior Consultant, Industrial Products and Heavy Industry Unit<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417785&pg=ajx')">417785</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Minako Yagi (48)<br>UX facilitator & Specifications Engineer<br>Sony Network Communication<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419990&pg=ajx')">419990</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshihisa Watanabe (37)<br>Media Communication Planner<br>MediaCom<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420299&pg=ajx')">420299</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Minako Yagi (48)<br>UX facilitator & Specifications Engineer<br>Sony Network Communication<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419990&pg=ajx')">419990</a>
										</div>
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
			<div class="stat_holder revenueSize2" id="276">
			5			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Minako Yagi (48)<br>UX facilitator & Specifications Engineer<br>Sony Network Communication<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419990&pg=ajx')">419990</a>
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
							<div class="hover_row ">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Minako Yagi (48)<br>UX facilitator & Specifications Engineer<br>Sony Network Communication<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419990&pg=ajx')">419990</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Christophers William Benjamin (32)<br>Risk Manager<br>GE Capital<br><br><i><p>met with Tada -was OK.  Personality test plus a Japanese test, English teats, numerical test, and a verbal reasoning test. 45 minutes with HRD then a different HR Member.  </p>
<p>was at 11 at PWC -now at 8.  going to interviews and the benchmark is now about 10~11.  DTC 13M range.  </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413977&pg=ajx')">413977</a>
										</div>
							<div class="hover_row ">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Christophers William Benjamin (32)<br>Risk Manager<br>GE Capital<br><br><i><p>met with Tada -was OK.  Personality test plus a Japanese test, English teats, numerical test, and a verbal reasoning test. 45 minutes with HRD then a different HR Member.  </p>
<p>was at 11 at PWC -now at 8.  going to interviews and the benchmark is now about 10~11.  DTC 13M range.  </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413977&pg=ajx')">413977</a>
										</div>
							<div class="hover_row ">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			13			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Munehiko Nakayama (57)<br>Finance Manager<br>Sumitomo 3M Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=15062&pg=ajx')">15062</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazufumi Nieda (50)<br>Finance Manager<br>Autodesk Japan K.K.<br><br><i><p>Wants at least 10M.  Was on 13M base at Autodesk before.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=121633&pg=ajx')">121633</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeff Gu (26)<br>Management Consulting/Strategy Analyst<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420278&pg=ajx')">420278</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Heyoung Chang (43)<br><br>Kokubu Group Corp<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420240&pg=ajx')">420240</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kosaka Hiroaki (47)<br>Account Manager<br>Thomson Reuters<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420315&pg=ajx')">420315</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko Komiya (39)<br>Marketing Specialist, International Business Develop Department<br>AstaReal Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420401&pg=ajx')">420401</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryoji Morii (36)<br>Senior Consultant of Financial Services Institute / Banking and securities industry<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420434&pg=ajx')">420434</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masatoshi Nagai (37)<br>Senior Consultant, Industrial Products and Heavy Industry Unit<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417785&pg=ajx')">417785</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hitomi Kita (39)<br>Digital/CRM Marketing<br>Volvo Cars Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420438&pg=ajx')">420438</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Yamazaki (47)<br>Helpdesk Specialist<br>MetLife Ltd.<br><br><i><p>Outsourced to Metlife from Robert Walters, his contract started in Oct 2016, and end Feb end.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420484&pg=ajx')">420484</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshihisa Takahashi (42)<br>Presales Engineer<br>KDDI<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417598&pg=ajx')">417598</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Totsuka Masaki (-)<br>Staff<br>Thomson Reuters<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=130371&pg=ajx')">130371</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masakazu Aomine (-)<br>Partner Account Manager<br>Arcserve<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420512&pg=ajx')">420512</a>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			3			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Minako Yagi (48)<br>UX facilitator & Specifications Engineer<br>Sony Network Communication<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419990&pg=ajx')">419990</a>
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
							<div class="hover_row ">
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
										<a data-toggle="tooltip" title="Candidate ID: 314923" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9473&pg=ajx')">9473</a>
										</div>
							<div class="hover_row  colored_row">
										<a data-toggle="tooltip" title="Candidate ID: 345386" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9447&pg=ajx')">9447</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Christophers William Benjamin (32)<br>Risk Manager<br>GE Capital<br><br><i><p>met with Tada -was OK.  Personality test plus a Japanese test, English teats, numerical test, and a verbal reasoning test. 45 minutes with HRD then a different HR Member.  </p>
<p>was at 11 at PWC -now at 8.  going to interviews and the benchmark is now about 10~11.  DTC 13M range.  </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413977&pg=ajx')">413977</a>
										</div>
							<div class="hover_row ">
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
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row even_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">R. Pedersen</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			27			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Isha Chopra (-)<br><br>Slate Applicant<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420083&pg=ajx')">420083</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Brian Cain (-)<br><br>ATS* Reliance Technical Group<br><br><i><p>wants to do fifo.  no dice for now. </p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=209802&pg=ajx')">209802</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Andrew Vittas (-)<br><br>Slate Applicant<br><br><i><p>so far he has done work such as an HR Generalist at a software company.  He has also got customer service at the bank. Sales experience from BMO -selling financial products.  He was with BMO for about 7 months. His long game is to get into HR/Talent Acquisition. </p>
<p>sounds like a good bullshitter.   could be a solid prospect for Slate Canada.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420218&pg=ajx')">420218</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Calvin Frederick (-)<br><br>Slate Applicant<br><br><i><p>He is not OJK for Slate -too soft. Wants to work with people.likes legislation. </p>
<p>he is a nurse.  also interested  human resources and admin. He has no experience in sales, but does have administration experience.  He has participated in recruiting nurses into the department. </p>
<p>He sees himself doing management when he is 40.  probably in human resources department. </p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420150&pg=ajx')">420150</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Bryan Lutz (-)<br><br>Slate Applicant<br><br><i><p>he has done on boarding, performance reviews -no actual recruitment experience. He took a break from the convention center and did direct sales of window washing and carpet cleaning. He was second of 20 sales guys. he quit doing direct sales because he stated to finish his communications degree. he was a PI for 4 years. He got into this business for 4 years.  ICBC graduated from high school in 1992. His future vision for himself is to be part of change management. </p>
<p>weirdly -sort of l</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420124&pg=ajx')">420124</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shuai Yu (-)<br><br>Slate Applicant<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420080&pg=ajx')">420080</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Russell King (-)<br><br>Slate Applicant<br><br><i><p>spoke.  working at YONEX doing social media.  he is the only gaijin in his company and he feels that he isnt getting mentored. He is responsible for all English PR for social media manager.  also, press released, web site content, etc. JLNPT2 but feels that he is moe like an N1. Specialist in Humanities visa valid. He is committed to Japan for the foreseeable future.  NO plans to go back to the USA. His salary is 4.5M yen at present. He really likes to write.  Loves PR and social media.</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420226&pg=ajx')">420226</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuji Shimaya (41)<br>Manager<br>Intel K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=98948&pg=ajx')">98948</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Oksana Rogova (27)<br>Recruitment Specialist<br>FinPersonnel<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420152&pg=ajx')">420152</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Brent Cyr (-)<br><br>Slate Applicant<br><br><i><p>was in safety for 7 years and wants to start fresh. open minded to location. hasnt moved out yet. did recruiting for a while.  2 weeks experience. did recruiting internally as well. used linkedin and indeed and kijiji to find candidates. Used works like annoying in the interview. Says he would be all in if he joined. confident almost too confident. Says that he was one of the top sales guys in his company for insurance. Has kids. Has a construction safety ticket for BC and Alberta. </p</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420097&pg=ajx')">420097</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taisiia Mliuzan (32)<br>Managing Director<br>CNA International Executive Search<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420046&pg=ajx')">420046</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sayaka Ishida (26)<br>Staff<br>Slate Applicant<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=354724&pg=ajx')">354724</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sarah Carr (23)<br><br>Slate Applicant<br><br><i><p>I assume shes (book) smart as per academic acheivements. 5 years in Japan. Work wise mainly an English teacher.  Had a short stint at Specialized Group as Data Entry which experienced Recruiting environment but not the actual work or know how about the job. My assumption she is more farmer than Hunter.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420383&pg=ajx')">420383</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eric Nguyen (-)<br><br>Slate Applicant<br><br><i><p>Seems intelligent and mature. Interested in living in Japan. Found out that it is difficult to find a job here from outside of Japan, so came down here on a tourist visa to attend interviews in person. Previously worked at Mercedes as a Business Analyst. Has good knowledge of SAP systems (has done internal Support for this area).</p>
<p>E is ok, not exactly fluent, but definitely good enough. Speaks with confidence too.</p>
<p>Has a basic understanding of what would a researcher job be respon</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420378&pg=ajx')">420378</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daniel Kadyrbekov (31)<br><br>Slate Applicant<br><br><i><p>Did safety training at an HR company. skills link related -he has been doing independent recruiting for various companies. vendor side recruiting specifically for oil and gas.  fracking and service rigs, etc. Since about 1997 he has had his own business or worked for his family. In his last company he had 20 staff.  He would prefer to focus on sales and work for someone else. </p>
<p>knows the business.  reminds me of Larry.  Personable.  good communicator. </p>
<p>looking for a lifest</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420377&pg=ajx')">420377</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ivan Garcia (28)<br><br>Slate Applicant<br><br><i><p>Pierre liked this guy.</p>
<p>I wouldnt call this guy articulate, bit it might be his accent.  </p>
<p>he is working as a digital marketing intern at the Triana Group.  Wife is Japanese. He is waiting to move to Japan by February 1st.  For the most part he has been teaching.  </p>
<p>In College he worked a s a research association.  English and Spanish He speaks a little bit of Japanese. In his career he wants to find a job related to business. </p>
<p>He seems motivated to find a care</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420380&pg=ajx')">420380</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Merve Demirci (-)<br><br>Slate Applicant<br><br><i><p>sells and exports used vehicles to the Caribbean. at heart he is both an administrator and a sales guy. there are about 4 people in the sales team.  he has been doing this job for about 2 years. he is top ten sales guy out of 40.  his long term plan is to do something related to working with people. </p>
<p>He is motivated to change his job because the industry is in is being squeezed. he is now 31 years old. He is in Japan because his wife is Japanese.  HE wants to make a decent living t</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420381&pg=ajx')">420381</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emma Kodaka (23)<br><br>Slate Applicant<br><br><i><p>sells and exports used vehicles to the Caribbean. at heart he is both an administrator and a sales guy. there are about 4 people in the sales team.  he has been doing this job for about 2 years. he is top ten sales guy out of 40.  his long term plan is to do something related to working with people. </p>
<p>He is motivated to change his job because the industry is in is being squeezed. he is now 31 years old. He is in Japan because his wife is Japanese.  HE wants to make a decent living t</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420379&pg=ajx')">420379</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michael Reid (-)<br><br>Slate Applicant<br><br><i><p>Young green guy. Seems a little nervous but genuinely interested in the role here and the business. Flew up from Oita as he is studying in Uni there. Will finish soon and obtain his degree. Visa expires in July. Said not so interested in English teaching. Said recruiting would be more of a challenge for him to work hard.</p>
<p> </p>
<p>Deserves a trial. Eager and wants a chance. Said February could be good for him but March is going to be busy.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420386&pg=ajx')">420386</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daniel Johnson (-)<br><br>Scalors GmbH<br><br><i><p>A no go for me. Seems more academically orientated.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420388&pg=ajx')">420388</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Irina Magnea (-)<br><br>Slate Applicant<br><br><i><p>sales girl.  good prospect for ccm 2</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420406&pg=ajx')">420406</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Max Warrack (-)<br><br>Slate Applicant<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420375&pg=ajx')">420375</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kelly Day (49)<br>Owner<br>Unemployed<br><br><i><p>Lacks in communication skills. Had to pull every single word out of him. </p>
<p>He actually seemed scared of me. </p>
<p>Wants to get into recruiting, but does not really know much about it (which is ok).  </p>
<p>Said that set his mind on recruiting, when he noticed that most Job Adds in Japan are for recruiters (seemed that it is more likely to get a job in this industry than any other). So his motivation is also a bit questionable. </p>
<p> </p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420478&pg=ajx')">420478</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Will Harrell (-)<br><br>Slate Applicant<br><br><i><p>slightly folksy but seems to have drive.  look into his problem solving skills. </p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420479&pg=ajx')">420479</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Angelina Babayeva (-)<br>Co-Founder/Head of IT Recruitment Service<br>C-Consulting Ukraine<br><br><i><p>she has been an IT recruiter since 2012. has been working in the US market. She dealt with different accounts and did a lot of pre-screening. Now she is working in the Ukraine market. She is the co-founder of her current company.  she is working on roles in Ukraine and Europe and the US.  She works on Java related searches. the whole range of searches in IT.  She is working client side for the most part now. she manages a team of people at present. She is looking for opportunities to work</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420143&pg=ajx')">420143</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rex Mullenix (-)<br><br>Slate Applicant<br><br><i><p>talk to his references.  is he an easy guy to work with? is he a team player or always in-your-face?</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420393&pg=ajx')">420393</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremy Sandeman (44)<br>Superintendent / Project Manager<br>Black & McDonald Limited<br><br><i><p>Lives in Port Hardy, has been out of work for 7 month as Black &amp; McDonald doesnt have any ongoing projects. Has over 15 years experience in building logging roads in BC. Built about 550km of roads. Has drilling experience and has managed up to 70 people. Built a Sub station in Brooks Alberta where he was in charge of earthworks. Has experience with multi million dollar projects from take-off to handover. Salary expectation $90K - $100k. Willing to relocate and knows Prince Rupert. Has op</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420542&pg=ajx')">420542</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			26			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Brian Cain (-)<br><br>ATS* Reliance Technical Group<br><br><i><p>wants to do fifo.  no dice for now. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=209802&pg=ajx')">209802</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Andrew Vittas (-)<br><br>Slate Applicant<br><br><i><p>so far he has done work such as an HR Generalist at a software company.  He has also got customer service at the bank. Sales experience from BMO -selling financial products.  He was with BMO for about 7 months. His long game is to get into HR/Talent Acquisition. </p>
<p>sounds like a good bullshitter.   could be a solid prospect for Slate Canada.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420218&pg=ajx')">420218</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Calvin Frederick (-)<br><br>Slate Applicant<br><br><i><p>He is not OJK for Slate -too soft. Wants to work with people.likes legislation. </p>
<p>he is a nurse.  also interested  human resources and admin. He has no experience in sales, but does have administration experience.  He has participated in recruiting nurses into the department. </p>
<p>He sees himself doing management when he is 40.  probably in human resources department. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420150&pg=ajx')">420150</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Bryan Lutz (-)<br><br>Slate Applicant<br><br><i><p>he has done on boarding, performance reviews -no actual recruitment experience. He took a break from the convention center and did direct sales of window washing and carpet cleaning. He was second of 20 sales guys. he quit doing direct sales because he stated to finish his communications degree. he was a PI for 4 years. He got into this business for 4 years.  ICBC graduated from high school in 1992. His future vision for himself is to be part of change management. </p>
<p>weirdly -sort of l</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420124&pg=ajx')">420124</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shuai Yu (-)<br><br>Slate Applicant<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420080&pg=ajx')">420080</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Russell King (-)<br><br>Slate Applicant<br><br><i><p>spoke.  working at YONEX doing social media.  he is the only gaijin in his company and he feels that he isnt getting mentored. He is responsible for all English PR for social media manager.  also, press released, web site content, etc. JLNPT2 but feels that he is moe like an N1. Specialist in Humanities visa valid. He is committed to Japan for the foreseeable future.  NO plans to go back to the USA. His salary is 4.5M yen at present. He really likes to write.  Loves PR and social media.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420226&pg=ajx')">420226</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuji Shimaya (41)<br>Manager<br>Intel K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=98948&pg=ajx')">98948</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Oksana Rogova (27)<br>Recruitment Specialist<br>FinPersonnel<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420152&pg=ajx')">420152</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Brent Cyr (-)<br><br>Slate Applicant<br><br><i><p>was in safety for 7 years and wants to start fresh. open minded to location. hasnt moved out yet. did recruiting for a while.  2 weeks experience. did recruiting internally as well. used linkedin and indeed and kijiji to find candidates. Used works like annoying in the interview. Says he would be all in if he joined. confident almost too confident. Says that he was one of the top sales guys in his company for insurance. Has kids. Has a construction safety ticket for BC and Alberta. </p</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420097&pg=ajx')">420097</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taisiia Mliuzan (32)<br>Managing Director<br>CNA International Executive Search<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420046&pg=ajx')">420046</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sayaka Ishida (26)<br>Staff<br>Slate Applicant<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=354724&pg=ajx')">354724</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sarah Carr (23)<br><br>Slate Applicant<br><br><i><p>I assume shes (book) smart as per academic acheivements. 5 years in Japan. Work wise mainly an English teacher.  Had a short stint at Specialized Group as Data Entry which experienced Recruiting environment but not the actual work or know how about the job. My assumption she is more farmer than Hunter.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420383&pg=ajx')">420383</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eric Nguyen (-)<br><br>Slate Applicant<br><br><i><p>Seems intelligent and mature. Interested in living in Japan. Found out that it is difficult to find a job here from outside of Japan, so came down here on a tourist visa to attend interviews in person. Previously worked at Mercedes as a Business Analyst. Has good knowledge of SAP systems (has done internal Support for this area).</p>
<p>E is ok, not exactly fluent, but definitely good enough. Speaks with confidence too.</p>
<p>Has a basic understanding of what would a researcher job be respon</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420378&pg=ajx')">420378</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daniel Kadyrbekov (31)<br><br>Slate Applicant<br><br><i><p>Did safety training at an HR company. skills link related -he has been doing independent recruiting for various companies. vendor side recruiting specifically for oil and gas.  fracking and service rigs, etc. Since about 1997 he has had his own business or worked for his family. In his last company he had 20 staff.  He would prefer to focus on sales and work for someone else. </p>
<p>knows the business.  reminds me of Larry.  Personable.  good communicator. </p>
<p>looking for a lifest</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420377&pg=ajx')">420377</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ivan Garcia (28)<br><br>Slate Applicant<br><br><i><p>Pierre liked this guy.</p>
<p>I wouldnt call this guy articulate, bit it might be his accent.  </p>
<p>he is working as a digital marketing intern at the Triana Group.  Wife is Japanese. He is waiting to move to Japan by February 1st.  For the most part he has been teaching.  </p>
<p>In College he worked a s a research association.  English and Spanish He speaks a little bit of Japanese. In his career he wants to find a job related to business. </p>
<p>He seems motivated to find a care</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420380&pg=ajx')">420380</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Merve Demirci (-)<br><br>Slate Applicant<br><br><i><p>sells and exports used vehicles to the Caribbean. at heart he is both an administrator and a sales guy. there are about 4 people in the sales team.  he has been doing this job for about 2 years. he is top ten sales guy out of 40.  his long term plan is to do something related to working with people. </p>
<p>He is motivated to change his job because the industry is in is being squeezed. he is now 31 years old. He is in Japan because his wife is Japanese.  HE wants to make a decent living t</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420381&pg=ajx')">420381</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emma Kodaka (23)<br><br>Slate Applicant<br><br><i><p>sells and exports used vehicles to the Caribbean. at heart he is both an administrator and a sales guy. there are about 4 people in the sales team.  he has been doing this job for about 2 years. he is top ten sales guy out of 40.  his long term plan is to do something related to working with people. </p>
<p>He is motivated to change his job because the industry is in is being squeezed. he is now 31 years old. He is in Japan because his wife is Japanese.  HE wants to make a decent living t</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420379&pg=ajx')">420379</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michael Reid (-)<br><br>Slate Applicant<br><br><i><p>Young green guy. Seems a little nervous but genuinely interested in the role here and the business. Flew up from Oita as he is studying in Uni there. Will finish soon and obtain his degree. Visa expires in July. Said not so interested in English teaching. Said recruiting would be more of a challenge for him to work hard.</p>
<p> </p>
<p>Deserves a trial. Eager and wants a chance. Said February could be good for him but March is going to be busy.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420386&pg=ajx')">420386</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daniel Johnson (-)<br><br>Scalors GmbH<br><br><i><p>A no go for me. Seems more academically orientated.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420388&pg=ajx')">420388</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Irina Magnea (-)<br><br>Slate Applicant<br><br><i><p>sales girl.  good prospect for ccm 2</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420406&pg=ajx')">420406</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Max Warrack (-)<br><br>Slate Applicant<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420375&pg=ajx')">420375</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kelly Day (49)<br>Owner<br>Unemployed<br><br><i><p>Lacks in communication skills. Had to pull every single word out of him. </p>
<p>He actually seemed scared of me. </p>
<p>Wants to get into recruiting, but does not really know much about it (which is ok).  </p>
<p>Said that set his mind on recruiting, when he noticed that most Job Adds in Japan are for recruiters (seemed that it is more likely to get a job in this industry than any other). So his motivation is also a bit questionable. </p>
<p> </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420478&pg=ajx')">420478</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Will Harrell (-)<br><br>Slate Applicant<br><br><i><p>slightly folksy but seems to have drive.  look into his problem solving skills. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420479&pg=ajx')">420479</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Angelina Babayeva (-)<br>Co-Founder/Head of IT Recruitment Service<br>C-Consulting Ukraine<br><br><i><p>she has been an IT recruiter since 2012. has been working in the US market. She dealt with different accounts and did a lot of pre-screening. Now she is working in the Ukraine market. She is the co-founder of her current company.  she is working on roles in Ukraine and Europe and the US.  She works on Java related searches. the whole range of searches in IT.  She is working client side for the most part now. she manages a team of people at present. She is looking for opportunities to work</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420143&pg=ajx')">420143</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rex Mullenix (-)<br><br>Slate Applicant<br><br><i><p>talk to his references.  is he an easy guy to work with? is he a team player or always in-your-face?</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420393&pg=ajx')">420393</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremy Sandeman (44)<br>Superintendent / Project Manager<br>Black & McDonald Limited<br><br><i><p>Lives in Port Hardy, has been out of work for 7 month as Black &amp; McDonald doesnt have any ongoing projects. Has over 15 years experience in building logging roads in BC. Built about 550km of roads. Has drilling experience and has managed up to 70 people. Built a Sub station in Brooks Alberta where he was in charge of earthworks. Has experience with multi million dollar projects from take-off to handover. Salary expectation $90K - $100k. Willing to relocate and knows Prince Rupert. Has op</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420542&pg=ajx')">420542</a>
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
			8			</div>
			<div class="stat_candi_info 459">
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
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eric Nguyen (-)<br><br>Slate Applicant<br><br><i><p>Seems intelligent and mature. Interested in living in Japan. Found out that it is difficult to find a job here from outside of Japan, so came down here on a tourist visa to attend interviews in person. Previously worked at Mercedes as a Business Analyst. Has good knowledge of SAP systems (has done internal Support for this area).</p>
<p>E is ok, not exactly fluent, but definitely good enough. Speaks with confidence too.</p>
<p>Has a basic understanding of what would a researcher job be respon</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420378&pg=ajx')">420378</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daniel Kadyrbekov (31)<br><br>Slate Applicant<br><br><i><p>Did safety training at an HR company. skills link related -he has been doing independent recruiting for various companies. vendor side recruiting specifically for oil and gas.  fracking and service rigs, etc. Since about 1997 he has had his own business or worked for his family. In his last company he had 20 staff.  He would prefer to focus on sales and work for someone else. </p>
<p>knows the business.  reminds me of Larry.  Personable.  good communicator. </p>
<p>looking for a lifest</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420377&pg=ajx')">420377</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Merve Demirci (-)<br><br>Slate Applicant<br><br><i><p>sells and exports used vehicles to the Caribbean. at heart he is both an administrator and a sales guy. there are about 4 people in the sales team.  he has been doing this job for about 2 years. he is top ten sales guy out of 40.  his long term plan is to do something related to working with people. </p>
<p>He is motivated to change his job because the industry is in is being squeezed. he is now 31 years old. He is in Japan because his wife is Japanese.  HE wants to make a decent living t</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420381&pg=ajx')">420381</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emma Kodaka (23)<br><br>Slate Applicant<br><br><i><p>sells and exports used vehicles to the Caribbean. at heart he is both an administrator and a sales guy. there are about 4 people in the sales team.  he has been doing this job for about 2 years. he is top ten sales guy out of 40.  his long term plan is to do something related to working with people. </p>
<p>He is motivated to change his job because the industry is in is being squeezed. he is now 31 years old. He is in Japan because his wife is Japanese.  HE wants to make a decent living t</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420379&pg=ajx')">420379</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daniel Johnson (-)<br><br>Scalors GmbH<br><br><i><p>A no go for me. Seems more academically orientated.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420388&pg=ajx')">420388</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Max Warrack (-)<br><br>Slate Applicant<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420375&pg=ajx')">420375</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kelly Day (49)<br>Owner<br>Unemployed<br><br><i><p>Lacks in communication skills. Had to pull every single word out of him. </p>
<p>He actually seemed scared of me. </p>
<p>Wants to get into recruiting, but does not really know much about it (which is ok).  </p>
<p>Said that set his mind on recruiting, when he noticed that most Job Adds in Japan are for recruiters (seemed that it is more likely to get a job in this industry than any other). So his motivation is also a bit questionable. </p>
<p> </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420478&pg=ajx')">420478</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takeshi Miura (51)<br>Manager<br>Accenture Japan<br><br><i><p>Very likeable person. Seems smart and asked all the right questions. </p>
<p>Very green in any work experience, but has good potential. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=25381&pg=ajx')">25381</a>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			19			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Andrew Vittas (-)<br><br>Slate Applicant<br><br><i><p>so far he has done work such as an HR Generalist at a software company.  He has also got customer service at the bank. Sales experience from BMO -selling financial products.  He was with BMO for about 7 months. His long game is to get into HR/Talent Acquisition. </p>
<p>sounds like a good bullshitter.   could be a solid prospect for Slate Canada.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420218&pg=ajx')">420218</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Russell King (-)<br><br>Slate Applicant<br><br><i><p>spoke.  working at YONEX doing social media.  he is the only gaijin in his company and he feels that he isnt getting mentored. He is responsible for all English PR for social media manager.  also, press released, web site content, etc. JLNPT2 but feels that he is moe like an N1. Specialist in Humanities visa valid. He is committed to Japan for the foreseeable future.  NO plans to go back to the USA. His salary is 4.5M yen at present. He really likes to write.  Loves PR and social media.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420226&pg=ajx')">420226</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Oksana Rogova (27)<br>Recruitment Specialist<br>FinPersonnel<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420152&pg=ajx')">420152</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sarah Carr (23)<br><br>Slate Applicant<br><br><i><p>I assume shes (book) smart as per academic acheivements. 5 years in Japan. Work wise mainly an English teacher.  Had a short stint at Specialized Group as Data Entry which experienced Recruiting environment but not the actual work or know how about the job. My assumption she is more farmer than Hunter.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420383&pg=ajx')">420383</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eric Nguyen (-)<br><br>Slate Applicant<br><br><i><p>Seems intelligent and mature. Interested in living in Japan. Found out that it is difficult to find a job here from outside of Japan, so came down here on a tourist visa to attend interviews in person. Previously worked at Mercedes as a Business Analyst. Has good knowledge of SAP systems (has done internal Support for this area).</p>
<p>E is ok, not exactly fluent, but definitely good enough. Speaks with confidence too.</p>
<p>Has a basic understanding of what would a researcher job be respon</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420378&pg=ajx')">420378</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daniel Kadyrbekov (31)<br><br>Slate Applicant<br><br><i><p>Did safety training at an HR company. skills link related -he has been doing independent recruiting for various companies. vendor side recruiting specifically for oil and gas.  fracking and service rigs, etc. Since about 1997 he has had his own business or worked for his family. In his last company he had 20 staff.  He would prefer to focus on sales and work for someone else. </p>
<p>knows the business.  reminds me of Larry.  Personable.  good communicator. </p>
<p>looking for a lifest</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420377&pg=ajx')">420377</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Merve Demirci (-)<br><br>Slate Applicant<br><br><i><p>sells and exports used vehicles to the Caribbean. at heart he is both an administrator and a sales guy. there are about 4 people in the sales team.  he has been doing this job for about 2 years. he is top ten sales guy out of 40.  his long term plan is to do something related to working with people. </p>
<p>He is motivated to change his job because the industry is in is being squeezed. he is now 31 years old. He is in Japan because his wife is Japanese.  HE wants to make a decent living t</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420381&pg=ajx')">420381</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emma Kodaka (23)<br><br>Slate Applicant<br><br><i><p>sells and exports used vehicles to the Caribbean. at heart he is both an administrator and a sales guy. there are about 4 people in the sales team.  he has been doing this job for about 2 years. he is top ten sales guy out of 40.  his long term plan is to do something related to working with people. </p>
<p>He is motivated to change his job because the industry is in is being squeezed. he is now 31 years old. He is in Japan because his wife is Japanese.  HE wants to make a decent living t</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420379&pg=ajx')">420379</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daniel Johnson (-)<br><br>Scalors GmbH<br><br><i><p>A no go for me. Seems more academically orientated.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420388&pg=ajx')">420388</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Max Warrack (-)<br><br>Slate Applicant<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420375&pg=ajx')">420375</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takeshi Miura (51)<br>Manager<br>Accenture Japan<br><br><i><p>Very likeable person. Seems smart and asked all the right questions. </p>
<p>Very green in any work experience, but has good potential. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=25381&pg=ajx')">25381</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Tomita (51)<br>Director<br>W.L.Gore & Associates<br><br><i><p>Did safety training at an HR company. skills link related -he has been doing independent recruiting for various companies. vendor side recruiting specifically for oil and gas.  fracking and service rigs, etc. Since about 1997 he has had his own business or worked for his family. In his last company he had 20 staff.  He would prefer to focus on sales and work for someone else. </p>
<p>knows the business.  reminds me of Larry.  Personable.  good communicator. </p>
<p>looking for a lifest</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=9040&pg=ajx')">9040</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Esther Lee (-)<br><br>Slate Applicant<br><br><i><p>Left Gore a coupe of months ago -end of June.  HE has been looking for new opportunity sine then. He left Gore after 5 years because his role changes..  He was on the global leadership finance team but they offered early retirement packages and he took it. At Gore there were 750 people.HE reported to Japan president and the CFO in the USA. Gore was manufacturing in Japan -plants in Okayama.  He has a total staff of 20 or so, depending on the time. Oversaw all finance functions.  BUs were</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420123&pg=ajx')">420123</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Anna Korwin-Kowalewska (-)<br><br>Slate Applicant<br><br><i><p>most recently worked for a consulting firm that did HR recruiting for temporary foreign workers for welders, etc. her job was to source temp foreign workers.  she has worked as a vendor side recruiter. she has done sales and cold calling. she is a permanent resident.  She will have no problem relocating. her timeline for moving to a new location in January.  </p>
<p>She has recruiter for companies such as construction and oil and gas, etc. </p>
<p>she took the time to understand our busin</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420085&pg=ajx')">420085</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rose Graham (-)<br><br>Slate Applicant<br><br><i><p>Has been teaching for the 5 years, which is a very long time.  She is an academic and applies theories to situations.  No recent sales experience.  She likes people yes of course - she is a teacher, but I question if she would be able to handle the pressure in headhunting?  My gut is not a good fit for us.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420137&pg=ajx')">420137</a>
										</div>
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
			10			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Russell King (-)<br><br>Slate Applicant<br><br><i><p>spoke.  working at YONEX doing social media.  he is the only gaijin in his company and he feels that he isnt getting mentored. He is responsible for all English PR for social media manager.  also, press released, web site content, etc. JLNPT2 but feels that he is moe like an N1. Specialist in Humanities visa valid. He is committed to Japan for the foreseeable future.  NO plans to go back to the USA. His salary is 4.5M yen at present. He really likes to write.  Loves PR and social media.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420226&pg=ajx')">420226</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Oksana Rogova (27)<br>Recruitment Specialist<br>FinPersonnel<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420152&pg=ajx')">420152</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daniel Kadyrbekov (31)<br><br>Slate Applicant<br><br><i><p>Did safety training at an HR company. skills link related -he has been doing independent recruiting for various companies. vendor side recruiting specifically for oil and gas.  fracking and service rigs, etc. Since about 1997 he has had his own business or worked for his family. In his last company he had 20 staff.  He would prefer to focus on sales and work for someone else. </p>
<p>knows the business.  reminds me of Larry.  Personable.  good communicator. </p>
<p>looking for a lifest</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420377&pg=ajx')">420377</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emma Kodaka (23)<br><br>Slate Applicant<br><br><i><p>sells and exports used vehicles to the Caribbean. at heart he is both an administrator and a sales guy. there are about 4 people in the sales team.  he has been doing this job for about 2 years. he is top ten sales guy out of 40.  his long term plan is to do something related to working with people. </p>
<p>He is motivated to change his job because the industry is in is being squeezed. he is now 31 years old. He is in Japan because his wife is Japanese.  HE wants to make a decent living t</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420379&pg=ajx')">420379</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Tomita (51)<br>Director<br>W.L.Gore & Associates<br><br><i><p>Did safety training at an HR company. skills link related -he has been doing independent recruiting for various companies. vendor side recruiting specifically for oil and gas.  fracking and service rigs, etc. Since about 1997 he has had his own business or worked for his family. In his last company he had 20 staff.  He would prefer to focus on sales and work for someone else. </p>
<p>knows the business.  reminds me of Larry.  Personable.  good communicator. </p>
<p>looking for a lifest</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=9040&pg=ajx')">9040</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Anna Korwin-Kowalewska (-)<br><br>Slate Applicant<br><br><i><p>most recently worked for a consulting firm that did HR recruiting for temporary foreign workers for welders, etc. her job was to source temp foreign workers.  she has worked as a vendor side recruiter. she has done sales and cold calling. she is a permanent resident.  She will have no problem relocating. her timeline for moving to a new location in January.  </p>
<p>She has recruiter for companies such as construction and oil and gas, etc. </p>
<p>she took the time to understand our busin</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420085&pg=ajx')">420085</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Aryaan Razzagi (30)<br><br>Yonex Co., Ltd.<br><br><i><p>so far he has done work such as an HR Generalist at a software company.  He has also got customer service at the bank. Sales experience from BMO -selling financial products.  He was with BMO for about 7 months. His long game is to get into HR/Talent Acquisition. </p>
<p>sounds like a good bullshitter.   could be a solid prospect for Slate Canada.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418996&pg=ajx')">418996</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Aryaan Razzagi (30)<br><br>Yonex Co., Ltd.<br><br><i><p>so far he has done work such as an HR Generalist at a software company.  He has also got customer service at the bank. Sales experience from BMO -selling financial products.  He was with BMO for about 7 months. His long game is to get into HR/Talent Acquisition. </p>
<p>sounds like a good bullshitter.   could be a solid prospect for Slate Canada.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418996&pg=ajx')">418996</a>
										</div>
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
			26			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Brian Cain (-)<br><br>ATS* Reliance Technical Group<br><br><i><p>wants to do fifo.  no dice for now. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=209802&pg=ajx')">209802</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Andrew Vittas (-)<br><br>Slate Applicant<br><br><i><p>so far he has done work such as an HR Generalist at a software company.  He has also got customer service at the bank. Sales experience from BMO -selling financial products.  He was with BMO for about 7 months. His long game is to get into HR/Talent Acquisition. </p>
<p>sounds like a good bullshitter.   could be a solid prospect for Slate Canada.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420218&pg=ajx')">420218</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Calvin Frederick (-)<br><br>Slate Applicant<br><br><i><p>He is not OJK for Slate -too soft. Wants to work with people.likes legislation. </p>
<p>he is a nurse.  also interested  human resources and admin. He has no experience in sales, but does have administration experience.  He has participated in recruiting nurses into the department. </p>
<p>He sees himself doing management when he is 40.  probably in human resources department. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420150&pg=ajx')">420150</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Bryan Lutz (-)<br><br>Slate Applicant<br><br><i><p>he has done on boarding, performance reviews -no actual recruitment experience. He took a break from the convention center and did direct sales of window washing and carpet cleaning. He was second of 20 sales guys. he quit doing direct sales because he stated to finish his communications degree. he was a PI for 4 years. He got into this business for 4 years.  ICBC graduated from high school in 1992. His future vision for himself is to be part of change management. </p>
<p>weirdly -sort of l</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420124&pg=ajx')">420124</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shuai Yu (-)<br><br>Slate Applicant<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420080&pg=ajx')">420080</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Russell King (-)<br><br>Slate Applicant<br><br><i><p>spoke.  working at YONEX doing social media.  he is the only gaijin in his company and he feels that he isnt getting mentored. He is responsible for all English PR for social media manager.  also, press released, web site content, etc. JLNPT2 but feels that he is moe like an N1. Specialist in Humanities visa valid. He is committed to Japan for the foreseeable future.  NO plans to go back to the USA. His salary is 4.5M yen at present. He really likes to write.  Loves PR and social media.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420226&pg=ajx')">420226</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuji Shimaya (41)<br>Manager<br>Intel K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=98948&pg=ajx')">98948</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Oksana Rogova (27)<br>Recruitment Specialist<br>FinPersonnel<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420152&pg=ajx')">420152</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Brent Cyr (-)<br><br>Slate Applicant<br><br><i><p>was in safety for 7 years and wants to start fresh. open minded to location. hasnt moved out yet. did recruiting for a while.  2 weeks experience. did recruiting internally as well. used linkedin and indeed and kijiji to find candidates. Used works like annoying in the interview. Says he would be all in if he joined. confident almost too confident. Says that he was one of the top sales guys in his company for insurance. Has kids. Has a construction safety ticket for BC and Alberta. </p</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420097&pg=ajx')">420097</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taisiia Mliuzan (32)<br>Managing Director<br>CNA International Executive Search<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420046&pg=ajx')">420046</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sayaka Ishida (26)<br>Staff<br>Slate Applicant<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=354724&pg=ajx')">354724</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sarah Carr (23)<br><br>Slate Applicant<br><br><i><p>I assume shes (book) smart as per academic acheivements. 5 years in Japan. Work wise mainly an English teacher.  Had a short stint at Specialized Group as Data Entry which experienced Recruiting environment but not the actual work or know how about the job. My assumption she is more farmer than Hunter.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420383&pg=ajx')">420383</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eric Nguyen (-)<br><br>Slate Applicant<br><br><i><p>Seems intelligent and mature. Interested in living in Japan. Found out that it is difficult to find a job here from outside of Japan, so came down here on a tourist visa to attend interviews in person. Previously worked at Mercedes as a Business Analyst. Has good knowledge of SAP systems (has done internal Support for this area).</p>
<p>E is ok, not exactly fluent, but definitely good enough. Speaks with confidence too.</p>
<p>Has a basic understanding of what would a researcher job be respon</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420378&pg=ajx')">420378</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daniel Kadyrbekov (31)<br><br>Slate Applicant<br><br><i><p>Did safety training at an HR company. skills link related -he has been doing independent recruiting for various companies. vendor side recruiting specifically for oil and gas.  fracking and service rigs, etc. Since about 1997 he has had his own business or worked for his family. In his last company he had 20 staff.  He would prefer to focus on sales and work for someone else. </p>
<p>knows the business.  reminds me of Larry.  Personable.  good communicator. </p>
<p>looking for a lifest</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420377&pg=ajx')">420377</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ivan Garcia (28)<br><br>Slate Applicant<br><br><i><p>Pierre liked this guy.</p>
<p>I wouldnt call this guy articulate, bit it might be his accent.  </p>
<p>he is working as a digital marketing intern at the Triana Group.  Wife is Japanese. He is waiting to move to Japan by February 1st.  For the most part he has been teaching.  </p>
<p>In College he worked a s a research association.  English and Spanish He speaks a little bit of Japanese. In his career he wants to find a job related to business. </p>
<p>He seems motivated to find a care</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420380&pg=ajx')">420380</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Merve Demirci (-)<br><br>Slate Applicant<br><br><i><p>sells and exports used vehicles to the Caribbean. at heart he is both an administrator and a sales guy. there are about 4 people in the sales team.  he has been doing this job for about 2 years. he is top ten sales guy out of 40.  his long term plan is to do something related to working with people. </p>
<p>He is motivated to change his job because the industry is in is being squeezed. he is now 31 years old. He is in Japan because his wife is Japanese.  HE wants to make a decent living t</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420381&pg=ajx')">420381</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emma Kodaka (23)<br><br>Slate Applicant<br><br><i><p>sells and exports used vehicles to the Caribbean. at heart he is both an administrator and a sales guy. there are about 4 people in the sales team.  he has been doing this job for about 2 years. he is top ten sales guy out of 40.  his long term plan is to do something related to working with people. </p>
<p>He is motivated to change his job because the industry is in is being squeezed. he is now 31 years old. He is in Japan because his wife is Japanese.  HE wants to make a decent living t</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420379&pg=ajx')">420379</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michael Reid (-)<br><br>Slate Applicant<br><br><i><p>Young green guy. Seems a little nervous but genuinely interested in the role here and the business. Flew up from Oita as he is studying in Uni there. Will finish soon and obtain his degree. Visa expires in July. Said not so interested in English teaching. Said recruiting would be more of a challenge for him to work hard.</p>
<p> </p>
<p>Deserves a trial. Eager and wants a chance. Said February could be good for him but March is going to be busy.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420386&pg=ajx')">420386</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daniel Johnson (-)<br><br>Scalors GmbH<br><br><i><p>A no go for me. Seems more academically orientated.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420388&pg=ajx')">420388</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Irina Magnea (-)<br><br>Slate Applicant<br><br><i><p>sales girl.  good prospect for ccm 2</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420406&pg=ajx')">420406</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Max Warrack (-)<br><br>Slate Applicant<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420375&pg=ajx')">420375</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kelly Day (49)<br>Owner<br>Unemployed<br><br><i><p>Lacks in communication skills. Had to pull every single word out of him. </p>
<p>He actually seemed scared of me. </p>
<p>Wants to get into recruiting, but does not really know much about it (which is ok).  </p>
<p>Said that set his mind on recruiting, when he noticed that most Job Adds in Japan are for recruiters (seemed that it is more likely to get a job in this industry than any other). So his motivation is also a bit questionable. </p>
<p> </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420478&pg=ajx')">420478</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Will Harrell (-)<br><br>Slate Applicant<br><br><i><p>slightly folksy but seems to have drive.  look into his problem solving skills. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420479&pg=ajx')">420479</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Angelina Babayeva (-)<br>Co-Founder/Head of IT Recruitment Service<br>C-Consulting Ukraine<br><br><i><p>she has been an IT recruiter since 2012. has been working in the US market. She dealt with different accounts and did a lot of pre-screening. Now she is working in the Ukraine market. She is the co-founder of her current company.  she is working on roles in Ukraine and Europe and the US.  She works on Java related searches. the whole range of searches in IT.  She is working client side for the most part now. she manages a team of people at present. She is looking for opportunities to work</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420143&pg=ajx')">420143</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rex Mullenix (-)<br><br>Slate Applicant<br><br><i><p>talk to his references.  is he an easy guy to work with? is he a team player or always in-your-face?</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420393&pg=ajx')">420393</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremy Sandeman (44)<br>Superintendent / Project Manager<br>Black & McDonald Limited<br><br><i><p>Lives in Port Hardy, has been out of work for 7 month as Black &amp; McDonald doesnt have any ongoing projects. Has over 15 years experience in building logging roads in BC. Built about 550km of roads. Has drilling experience and has managed up to 70 people. Built a Sub station in Brooks Alberta where he was in charge of earthworks. Has experience with multi million dollar projects from take-off to handover. Salary expectation $90K - $100k. Willing to relocate and knows Prince Rupert. Has op</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420542&pg=ajx')">420542</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daniel Kadyrbekov (31)<br><br>Slate Applicant<br><br><i><p>Did safety training at an HR company. skills link related -he has been doing independent recruiting for various companies. vendor side recruiting specifically for oil and gas.  fracking and service rigs, etc. Since about 1997 he has had his own business or worked for his family. In his last company he had 20 staff.  He would prefer to focus on sales and work for someone else. </p>
<p>knows the business.  reminds me of Larry.  Personable.  good communicator. </p>
<p>looking for a lifest</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420377&pg=ajx')">420377</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emma Kodaka (23)<br><br>Slate Applicant<br><br><i><p>sells and exports used vehicles to the Caribbean. at heart he is both an administrator and a sales guy. there are about 4 people in the sales team.  he has been doing this job for about 2 years. he is top ten sales guy out of 40.  his long term plan is to do something related to working with people. </p>
<p>He is motivated to change his job because the industry is in is being squeezed. he is now 31 years old. He is in Japan because his wife is Japanese.  HE wants to make a decent living t</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420379&pg=ajx')">420379</a>
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
			3			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Russell King (-)<br><br>Slate Applicant<br><br><i><p>spoke.  working at YONEX doing social media.  he is the only gaijin in his company and he feels that he isnt getting mentored. He is responsible for all English PR for social media manager.  also, press released, web site content, etc. JLNPT2 but feels that he is moe like an N1. Specialist in Humanities visa valid. He is committed to Japan for the foreseeable future.  NO plans to go back to the USA. His salary is 4.5M yen at present. He really likes to write.  Loves PR and social media.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420226&pg=ajx')">420226</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daniel Kadyrbekov (31)<br><br>Slate Applicant<br><br><i><p>Did safety training at an HR company. skills link related -he has been doing independent recruiting for various companies. vendor side recruiting specifically for oil and gas.  fracking and service rigs, etc. Since about 1997 he has had his own business or worked for his family. In his last company he had 20 staff.  He would prefer to focus on sales and work for someone else. </p>
<p>knows the business.  reminds me of Larry.  Personable.  good communicator. </p>
<p>looking for a lifest</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420377&pg=ajx')">420377</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emma Kodaka (23)<br><br>Slate Applicant<br><br><i><p>sells and exports used vehicles to the Caribbean. at heart he is both an administrator and a sales guy. there are about 4 people in the sales team.  he has been doing this job for about 2 years. he is top ten sales guy out of 40.  his long term plan is to do something related to working with people. </p>
<p>He is motivated to change his job because the industry is in is being squeezed. he is now 31 years old. He is in Japan because his wife is Japanese.  HE wants to make a decent living t</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420379&pg=ajx')">420379</a>
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
		<td class="name_column revenueSize">V. Maslyuk</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			9			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kosuke Toda (49)<br>General Manager for SCM<br>ASICS Co., Ltd.<br><br><i><p>same candidate as #404409</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=6725&pg=ajx')">6725</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eiwa Yuasa (41)<br>SC Network Manager<br>Coca-Cola East Japan<br><br><i><p>Linkedin name collect.&nbsp;</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=409314&pg=ajx')">409314</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takuya Hiyama (35)<br>Research Engineer<br>UMN<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420285&pg=ajx')">420285</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tetsu Fujii (46)<br>Quality Management Manager/QMR<br>Staar Japan Inc.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420314&pg=ajx')">420314</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takao Ishida (50)<br>Head Quality Assurance<br>Biogen Idec Japan Ltd.<br><br><i>He is a specialist for Quality part of drug Plant.I think his salary is very high against his experience.<br />
He had interviewed with Mylan on Jan 2012, is rejected. <br />
now in charge of general affair and security for his company.</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=322633&pg=ajx')">322633</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ruri Oshita (45)<br>Distribution Planning Manager<br>Danone Japan K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420078&pg=ajx')">420078</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadayasu Koga (51)<br>Senior Scientist<br>Procter & Gamble Japan K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=284048&pg=ajx')">284048</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michiyoshi Saito (37)<br>QA manager<br>Tella<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420502&pg=ajx')">420502</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Inoue (46)<br>Group Manager<br>Procter & Gamble<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406608&pg=ajx')">406608</a>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			12			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kosuke Toda (49)<br>General Manager for SCM<br>ASICS Co., Ltd.<br><br><i><p>same candidate as #404409</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=6725&pg=ajx')">6725</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eiwa Yuasa (41)<br>SC Network Manager<br>Coca-Cola East Japan<br><br><i><p>Linkedin name collect.&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=409314&pg=ajx')">409314</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takuya Hiyama (35)<br>Research Engineer<br>UMN<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420285&pg=ajx')">420285</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tetsu Fujii (46)<br>Quality Management Manager/QMR<br>Staar Japan Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420314&pg=ajx')">420314</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takao Ishida (50)<br>Head Quality Assurance<br>Biogen Idec Japan Ltd.<br><br><i>He is a specialist for Quality part of drug Plant.I think his salary is very high against his experience.<br />
He had interviewed with Mylan on Jan 2012, is rejected. <br />
now in charge of general affair and security for his company.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=322633&pg=ajx')">322633</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ruri Oshita (45)<br>Distribution Planning Manager<br>Danone Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420078&pg=ajx')">420078</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadayasu Koga (51)<br>Senior Scientist<br>Procter & Gamble Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=284048&pg=ajx')">284048</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michiyoshi Saito (37)<br>QA manager<br>Tella<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420502&pg=ajx')">420502</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Inoue (46)<br>Group Manager<br>Procter & Gamble<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406608&pg=ajx')">406608</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akinori Suzuki (41)<br>Site manager<br>BASF Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=407847&pg=ajx')">407847</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sho Okumura (27)<br>Sales Engineer<br>Instron Japan Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420175&pg=ajx')">420175</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takeshi Sato (46)<br>Field Service<br>Philips Medical Systems Corporation<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=287089&pg=ajx')">287089</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			6			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tetsu Fujii (46)<br>Quality Management Manager/QMR<br>Staar Japan Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420314&pg=ajx')">420314</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ruri Oshita (45)<br>Distribution Planning Manager<br>Danone Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420078&pg=ajx')">420078</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akinori Suzuki (41)<br>Site manager<br>BASF Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=407847&pg=ajx')">407847</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Asako Sunaga (33)<br>Assistant Manager<br>Taiun Consulting<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=367344&pg=ajx')">367344</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroki Nishizawa Tavera (30)<br>Quality Control<br>Okamoto Industries<br><br><i><p>Referral from Minami-san</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420293&pg=ajx')">420293</a>
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
			<div class="stat_holder revenueSize2" id="130">
			1			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tetsu Fujii (46)<br>Quality Management Manager/QMR<br>Staar Japan Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420314&pg=ajx')">420314</a>
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
			<div class="stat_holder revenueSize2" id="130">
			0			</div>
			<div class="stat_candi_info 130">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			0			</div>
			<div class="stat_candi_info 130">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			0			</div>
			<div class="stat_candi_info 130">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			4			</div>
			<div class="stat_candi_info 130">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yukinori Yamada (49)<br>Engineering Director<br>Coca-Cola East Japan<br><br><i><p>GM of Engineering Department at CCEJ.&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406734&pg=ajx')">406734</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Joji Asai (44)<br>Supply Chain<br>Coca-Cola East Japan<br><br><i><p>GM of Engineering Department at CCEJ.&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=407135&pg=ajx')">407135</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			2			</div>
			<div class="stat_candi_info 130">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yukinori Yamada (49)<br>Engineering Director<br>Coca-Cola East Japan<br><br><i><p>GM of Engineering Department at CCEJ.&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406734&pg=ajx')">406734</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			12			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kosuke Toda (49)<br>General Manager for SCM<br>ASICS Co., Ltd.<br><br><i><p>same candidate as #404409</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=6725&pg=ajx')">6725</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eiwa Yuasa (41)<br>SC Network Manager<br>Coca-Cola East Japan<br><br><i><p>Linkedin name collect.&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=409314&pg=ajx')">409314</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takuya Hiyama (35)<br>Research Engineer<br>UMN<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420285&pg=ajx')">420285</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tetsu Fujii (46)<br>Quality Management Manager/QMR<br>Staar Japan Inc.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420314&pg=ajx')">420314</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ruri Oshita (45)<br>Distribution Planning Manager<br>Danone Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420078&pg=ajx')">420078</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadayasu Koga (51)<br>Senior Scientist<br>Procter & Gamble Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=284048&pg=ajx')">284048</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michiyoshi Saito (37)<br>QA manager<br>Tella<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420502&pg=ajx')">420502</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Inoue (46)<br>Group Manager<br>Procter & Gamble<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406608&pg=ajx')">406608</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akinori Suzuki (41)<br>Site manager<br>BASF Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=407847&pg=ajx')">407847</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sho Okumura (27)<br>Sales Engineer<br>Instron Japan Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420175&pg=ajx')">420175</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takeshi Sato (46)<br>Field Service<br>Philips Medical Systems Corporation<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=287089&pg=ajx')">287089</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="<br />
<b>Notice</b>:  Undefined index: hoverTooltip in <b>/web/slistem/releases/beta/component/display/resources/html/totals_chart_ordered.php</b> on line <b>577</b><br />
" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=300505&pg=ajx')">300505</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			0			</div>
			<div class="stat_candi_info 130">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			0			</div>
			<div class="stat_candi_info 130">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			0			</div>
			<div class="stat_candi_info 130">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			0			</div>
			<div class="stat_candi_info 130">
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
									</div>
		</td>
	</tr>
	
					<tr class="hover_row even_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">Y. Takagi</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			26			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sunny Chen (28)<br>Senior Proposal Manager<br>Parexel International K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420233&pg=ajx')">420233</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayana Nozaki (28)<br>CRA Trainee<br>Quintes<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417214&pg=ajx')">417214</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (-)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takahito Yamada (50)<br>Lifecycle Leader<br>Chugai<br><br><i><p>PERSONALITY &amp; APPEARANCE: Great guy, highly placeable, but not on the move due to his current project <br />CURRENT POSITION &amp; RESPONSIBILITIES: He is Life Cycle Leader for CNS, a anti-schizophrenia drug. He manages about 30 people as part of the team, but none of them have direct reports to him. His team consists of members from Pricing, RA, CMC, Nonclinical, Clinical, Clinical Pharmacology, Commercial, Partnering, and Portfolio Management. He reports to Director of LCM III, in charg</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=405422&pg=ajx')">405422</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rie Kamimura (-)<br>Staff<br>Quintiles Transnational Japan K.K.<br><br><i><p>From meibo</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416851&pg=ajx')">416851</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Waka Sato (-)<br>Clinical Project Mgr<br>Quintiles Transnational Japan K.K.<br><br><i><p>From Meibo</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=414915&pg=ajx')">414915</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tsutomu Sakai (49)<br>MSL<br>Nippon Boehringer Ingelheim Co., Ltd.<br><br><i><p>PERSONALITY: Well presented, Scientific looking nice guy but with a Phycology academic background. He drew a chat to explain what MSL is and gave it to me. <br />CURRENT POSITION &amp; RESPONSIBILITIES: 2012 Oct &ndash; present, Oncology MSL in NBI (staff level but well paid than Mizushima-san&hellip;.). He managed no one and reports to Dr. Takahashi who then reports to the Head of Clinical &amp; MA. <br />CAREER HISTORY: Started career in Sanofi (RPR) as a MR for 13 years. Then became a MSL</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404837&pg=ajx')">404837</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroyuki Yamamoto (33)<br>Clinical Team Leader<br>PPD - Shin Nippon Biomedical Laboratory<br><br><i><p>BR Candidate</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420457&pg=ajx')">420457</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masato Tsujimoto (39)<br>CRA Manager<br>InVentiv Health K.K.<br><br><i><p>Just joined Inventiv Health... Sooo disappointed. Pitched Bayer - Head of Site &amp; Study Management</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=405729&pg=ajx')">405729</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Kondo  (36)<br>MSL Specialist<br>MSD K.K.<br><br><i><p>404717 is the same person</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=241733&pg=ajx')">241733</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinjori Inamori (-)<br><br>Novartis Pharma K.K.<br><br><i><p>From Meibo</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412706&pg=ajx')">412706</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Susumu Eguchi (52)<br>Director<br>Quintiles Transnational Japan K.K.<br><br><i><p>PERSONALITY: Really nice guy, big smile, open flexible, talkative and in my opinion very very good and a walking placement, Seems to know everybody in the industry that is an issue. CURRENT POSITION &amp; RESPONSIBILITIES: Associate GM of Clinical Development. Reporting to GM and managing 40 staff in Project Management, Medical Device Development, Training and QC. Mainly works on medical device products. This role for 1.5 years <br />CAREER HISTORY: Boston Scientific for 3.5 years as Clinical</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=405351&pg=ajx')">405351</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Tsuda (37)<br>MSL<br>Amgen Ltd.<br><br><i><p>PERSONALITY: Friendly, smiley guy that did not talk too much and spoke quite slowly. He was very polite and serious but in a positive / happy way as well. He seems very smart and career motivated. His English is great (TOEIC 905) from only 9 months studying in Australia during Uni time. He is a short guy and told me I am very tall when I walked into the meeting room. <br />CURRENT POSITION &amp; RESPONSIBILITIES: Since 2012, he is the MSL Specialist for the Atherosclerosis (Zetia product) TA</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404625&pg=ajx')">404625</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nobutaka Kikuchi (40)<br>Head<br>NBI	K.K.<br><br><i><p>duplicate #297738 and assessed&nbsp;</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=405615&pg=ajx')">405615</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takumi Tanaka (30)<br>DM Manager<br>CMIC Co., Ltd.<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420271&pg=ajx')">420271</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Makoto Chiba (-)<br>Technical Manager<br>Origio<br><br><i><p>He is a candidate for MSJ, scouted by them directly.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420272&pg=ajx')">420272</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taka Matsumura (53)<br>Director CNS<br>Eli Lilly Japan K.K.<br><br><i><p>Imported Data&nbsp;</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=405581&pg=ajx')">405581</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jisin Yang (51)<br>I&I MA Director<br>Celgene K.K.<br><br><i><p> Career summary<br />I have experienced the three companies, R&amp;D in Mitsubishi Heavy Industry, marketing in Nihon Millipore and consultant in Accenture.</p>
<p>In Nihon Millipore, my main job was promotion in the marketing division as below<br />-planing and operation of seminar<br />-create academic materials(promotion materila for researchers)<br />-planing and operation of new action</p>
<p>In Accenture, my strong points are start-up of new services and services/business improvment</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=304825&pg=ajx')">304825</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taro Futagami (-)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417182&pg=ajx')">417182</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Shimizu (-)<br>Clinical Research Associate<br>Quintiles Transnational Japan K.K.<br><br><i><p>Emi Shimizu Quintiles Transnational FSP (AM) CRA Trainee 080-4755-0541 080-4755-0541 Emi.Shimizu@quintiles.com</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417082&pg=ajx')">417082</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka ishii (56)<br>MSL<br>Janssen Pharmaceutical K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412640&pg=ajx')">412640</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiromi Igari (51)<br>Scientific Affairs<br>Leo Pharma<br><br><i><p>PERSONALITY: Weak English but tried hard to communicate. Friendly and calm and helpful and came across really likeable female professional. Could still be placeable if she moves soon <br />THERAPEUTIC AREA: Heamatology, anti fungal, respiratory, dermatology <br />CURRENT POSITION &amp; RESPONSIBILITIES: 1.5 years as MSL in the Hematology MSL Group. Reports to Mitsuru Takizawa. <br />CAREER HISTORY:Joined Novartis 1.5 years ago. 1992-2009 at Janssen. 3 years as Medical Staff 15 years in Market</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=312806&pg=ajx')">312806</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kaori Abe (37)<br>Sr. Project Manager<br>Quintiles Transnational Japan K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420480&pg=ajx')">420480</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nobutaka Kikuchi (40)<br>Head<br>Nippon Boehringer Ingelheim Co., Ltd.<br><br><i><p>Managing 7 groups, I think there are about 50 people total?</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=297738&pg=ajx')">297738</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saho Hanada (30)<br><br>Hospital<br><br><i><p>will be in charge of 眼科</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420499&pg=ajx')">420499</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masanori Yagi (-)<br>MSL, PhD<br>AbbVie<br><br><i><p>has a baby who is 10month</p>
<p>can not move outside from Osaka.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412535&pg=ajx')">412535</a>
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
			<div class="stat_holder revenueSize2" id="347">
			13			</div>
			<div class="stat_candi_info 347">
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
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takumi Tanaka (30)<br>DM Manager<br>CMIC Co., Ltd.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420271&pg=ajx')">420271</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Makoto Chiba (-)<br>Technical Manager<br>Origio<br><br><i><p>He is a candidate for MSJ, scouted by them directly.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420272&pg=ajx')">420272</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taka Matsumura (53)<br>Director CNS<br>Eli Lilly Japan K.K.<br><br><i><p>Imported Data&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=405581&pg=ajx')">405581</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jisin Yang (51)<br>I&I MA Director<br>Celgene K.K.<br><br><i><p> Career summary<br />I have experienced the three companies, R&amp;D in Mitsubishi Heavy Industry, marketing in Nihon Millipore and consultant in Accenture.</p>
<p>In Nihon Millipore, my main job was promotion in the marketing division as below<br />-planing and operation of seminar<br />-create academic materials(promotion materila for researchers)<br />-planing and operation of new action</p>
<p>In Accenture, my strong points are start-up of new services and services/business improvment</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=304825&pg=ajx')">304825</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taro Futagami (-)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417182&pg=ajx')">417182</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Shimizu (-)<br>Clinical Research Associate<br>Quintiles Transnational Japan K.K.<br><br><i><p>Emi Shimizu Quintiles Transnational FSP (AM) CRA Trainee 080-4755-0541 080-4755-0541 Emi.Shimizu@quintiles.com</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417082&pg=ajx')">417082</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka ishii (56)<br>MSL<br>Janssen Pharmaceutical K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412640&pg=ajx')">412640</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiromi Igari (51)<br>Scientific Affairs<br>Leo Pharma<br><br><i><p>PERSONALITY: Weak English but tried hard to communicate. Friendly and calm and helpful and came across really likeable female professional. Could still be placeable if she moves soon <br />THERAPEUTIC AREA: Heamatology, anti fungal, respiratory, dermatology <br />CURRENT POSITION &amp; RESPONSIBILITIES: 1.5 years as MSL in the Hematology MSL Group. Reports to Mitsuru Takizawa. <br />CAREER HISTORY:Joined Novartis 1.5 years ago. 1992-2009 at Janssen. 3 years as Medical Staff 15 years in Market</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=312806&pg=ajx')">312806</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kaori Abe (37)<br>Sr. Project Manager<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420480&pg=ajx')">420480</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nobutaka Kikuchi (40)<br>Head<br>Nippon Boehringer Ingelheim Co., Ltd.<br><br><i><p>Managing 7 groups, I think there are about 50 people total?</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=297738&pg=ajx')">297738</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saho Hanada (30)<br><br>Hospital<br><br><i><p>will be in charge of 眼科</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420499&pg=ajx')">420499</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masanori Yagi (-)<br>MSL, PhD<br>AbbVie<br><br><i><p>has a baby who is 10month</p>
<p>can not move outside from Osaka.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412535&pg=ajx')">412535</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masakazu Muramoto (50)<br>Group Manager<br>Janssen Pharmaceutical K.K.<br><br><i><p>duplicate to #345311 assessed&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=345311&pg=ajx')">345311</a>
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
			<div class="stat_holder revenueSize2" id="347">
			2			</div>
			<div class="stat_candi_info 347">
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
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takumi Tanaka (30)<br>DM Manager<br>CMIC Co., Ltd.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420271&pg=ajx')">420271</a>
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
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sonoco Fujita (40)<br>Senior Solution Specialist<br>SAP<br><br><i><p>This candidate would have not been found if I had not changed the details in department and occupation. Prior to me changing the details in the data stated  Packing . I found the candidate through resume note text search as he has technical in his resume. He is a Technical Operations candidate with a CMO QA Slant.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418661&pg=ajx')">418661</a>
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
			<div class="stat_holder revenueSize2" id="347">
			2			</div>
			<div class="stat_candi_info 347">
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
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sonoco Fujita (40)<br>Senior Solution Specialist<br>SAP<br><br><i><p>This candidate would have not been found if I had not changed the details in department and occupation. Prior to me changing the details in the data stated  Packing . I found the candidate through resume note text search as he has technical in his resume. He is a Technical Operations candidate with a CMO QA Slant.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418661&pg=ajx')">418661</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenpei Ogura (32)<br>QA Supervisor<br>MSD K.K.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344151&pg=ajx')">344151</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			1			</div>
			<div class="stat_candi_info 347">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenpei Ogura (32)<br>QA Supervisor<br>MSD K.K.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344151&pg=ajx')">344151</a>
										</div>
							<div class="hover_row  colored_row2">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenpei Ogura (32)<br>QA Supervisor<br>MSD K.K.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344151&pg=ajx')">344151</a>
										</div>
							<div class="hover_row  colored_row2">
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
			<div class="stat_holder revenueSize2" id="347">
			0			</div>
			<div class="stat_candi_info 347">
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
			<div class="stat_holder revenueSize2" id="347">
			0			</div>
			<div class="stat_candi_info 347">
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
			<div class="stat_holder revenueSize2" id="347">
			11			</div>
			<div class="stat_candi_info 347">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takumi Tanaka (30)<br>DM Manager<br>CMIC Co., Ltd.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420271&pg=ajx')">420271</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Makoto Chiba (-)<br>Technical Manager<br>Origio<br><br><i><p>He is a candidate for MSJ, scouted by them directly.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420272&pg=ajx')">420272</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taka Matsumura (53)<br>Director CNS<br>Eli Lilly Japan K.K.<br><br><i><p>Imported Data&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=405581&pg=ajx')">405581</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taro Futagami (-)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417182&pg=ajx')">417182</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Shimizu (-)<br>Clinical Research Associate<br>Quintiles Transnational Japan K.K.<br><br><i><p>Emi Shimizu Quintiles Transnational FSP (AM) CRA Trainee 080-4755-0541 080-4755-0541 Emi.Shimizu@quintiles.com</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417082&pg=ajx')">417082</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka ishii (56)<br>MSL<br>Janssen Pharmaceutical K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412640&pg=ajx')">412640</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiromi Igari (51)<br>Scientific Affairs<br>Leo Pharma<br><br><i><p>PERSONALITY: Weak English but tried hard to communicate. Friendly and calm and helpful and came across really likeable female professional. Could still be placeable if she moves soon <br />THERAPEUTIC AREA: Heamatology, anti fungal, respiratory, dermatology <br />CURRENT POSITION &amp; RESPONSIBILITIES: 1.5 years as MSL in the Hematology MSL Group. Reports to Mitsuru Takizawa. <br />CAREER HISTORY:Joined Novartis 1.5 years ago. 1992-2009 at Janssen. 3 years as Medical Staff 15 years in Market</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=312806&pg=ajx')">312806</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kaori Abe (37)<br>Sr. Project Manager<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420480&pg=ajx')">420480</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saho Hanada (30)<br><br>Hospital<br><br><i><p>will be in charge of 眼科</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420499&pg=ajx')">420499</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masanori Yagi (-)<br>MSL, PhD<br>AbbVie<br><br><i><p>has a baby who is 10month</p>
<p>can not move outside from Osaka.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412535&pg=ajx')">412535</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masakazu Muramoto (50)<br>Group Manager<br>Janssen Pharmaceutical K.K.<br><br><i><p>duplicate to #345311 assessed&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=345311&pg=ajx')">345311</a>
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
			<div class="stat_holder revenueSize2" id="347">
			0			</div>
			<div class="stat_candi_info 347">
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
			<div class="stat_holder revenueSize2" id="347">
			1			</div>
			<div class="stat_candi_info 347">
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
										<a data-toggle="tooltip" title="Candidate ID: 344151" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9462&pg=ajx')">9462</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			2			</div>
			<div class="stat_candi_info 347">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jisin Yang (51)<br>I&I MA Director<br>Celgene K.K.<br><br><i><p> Career summary<br />I have experienced the three companies, R&amp;D in Mitsubishi Heavy Industry, marketing in Nihon Millipore and consultant in Accenture.</p>
<p>In Nihon Millipore, my main job was promotion in the marketing division as below<br />-planing and operation of seminar<br />-create academic materials(promotion materila for researchers)<br />-planing and operation of new action</p>
<p>In Accenture, my strong points are start-up of new services and services/business improvment</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=304825&pg=ajx')">304825</a>
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
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daisuke Sato (38)<br>Manager<br>Nippon Boehringer Ingelheim Co., Ltd.<br><br><i><p> Career summary<br />I have experienced the three companies, R&amp;D in Mitsubishi Heavy Industry, marketing in Nihon Millipore and consultant in Accenture.</p>
<p>In Nihon Millipore, my main job was promotion in the marketing division as below<br />-planing and operation of seminar<br />-create academic materials(promotion materila for researchers)<br />-planing and operation of new action</p>
<p>In Accenture, my strong points are start-up of new services and services/business improvment</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419561&pg=ajx')">419561</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			2			</div>
			<div class="stat_candi_info 347">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jisin Yang (51)<br>I&I MA Director<br>Celgene K.K.<br><br><i><p> Career summary<br />I have experienced the three companies, R&amp;D in Mitsubishi Heavy Industry, marketing in Nihon Millipore and consultant in Accenture.</p>
<p>In Nihon Millipore, my main job was promotion in the marketing division as below<br />-planing and operation of seminar<br />-create academic materials(promotion materila for researchers)<br />-planing and operation of new action</p>
<p>In Accenture, my strong points are start-up of new services and services/business improvment</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=304825&pg=ajx')">304825</a>
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
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daisuke Sato (38)<br>Manager<br>Nippon Boehringer Ingelheim Co., Ltd.<br><br><i><p> Career summary<br />I have experienced the three companies, R&amp;D in Mitsubishi Heavy Industry, marketing in Nihon Millipore and consultant in Accenture.</p>
<p>In Nihon Millipore, my main job was promotion in the marketing division as below<br />-planing and operation of seminar<br />-create academic materials(promotion materila for researchers)<br />-planing and operation of new action</p>
<p>In Accenture, my strong points are start-up of new services and services/business improvment</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419561&pg=ajx')">419561</a>
										</div>
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
			148		</td>
		<td class='revenueSize3'>
			21		</td>
		<td class='revenueSize3'>
			17		</td>
		<td class='revenueSize3'>
			14		</td>
		<td class='revenueSize3'>
			8		</td>
	</tr>
</table>

<div class="general_form_row" style="height: 20px;"></div>
	<table id="totals_table_id" class="totals_table">
	<tr>
		<th class='revenueSize0' colspan="15">Researcher totals - Jan 2017</th>
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
			18			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hikaru Kitamura (29)<br>Inside Sales Advisor<br>Tesla Motors<br><br><i><p>met him at Shibuya and today met again at Toyosu where is near by his office.</p>
<p>He wants better QOL and look for new opps. pitched Eisai and Celgene</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404397&pg=ajx')">404397</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yunho Heo (29)<br>Camera module developer<br>LG Innotek<br><br><i><p>Had a phone meeting with him. Good energy, native level English (graduated in Canada). Now working at Tesla Motors as an Inside Sales Advisor. It is a junior role, mostly taking care of customer experience and customer satisfaction, taking orders for cars, organising promotion. Does a lot of communication with his clients by phone and in person (only B2c experience so far). Making 4M at the moment. Will be an active mover in 6 months, since has only been with Tesla since October last year. 28</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420334&pg=ajx')">420334</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazunori Sukeda (-)<br>Staff<br>Visteon Japan Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=300978&pg=ajx')">300978</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Senthil Kumar Rajagopal　　 (38)<br>SW Functional Safety Lead<br>Intel<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=336699&pg=ajx')">336699</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kotaro  Hashimoto (30)<br>Embedded Software Engineer<br>Hitachi Industrial Equipment Systems Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420216&pg=ajx')">420216</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chi Hyo (33)<br>Department General Manager<br>Toyota Boshoku<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420336&pg=ajx')">420336</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroki Nishizawa Tavera (30)<br>Quality Control<br>Okamoto Industries<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420293&pg=ajx')">420293</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nakamura Katsuyuki (30)<br>Software Engineer<br>Harman International Japan Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420215&pg=ajx')">420215</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hidehiko Koyata (36)<br>Product manager<br>Continental AG<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420227&pg=ajx')">420227</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taigan Lee (28)<br>Sr. Software Engineer<br>TomTom Japan<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419911&pg=ajx')">419911</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Riki Iwai (38)<br>Senior Application Engineer<br>Mathworks<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420440&pg=ajx')">420440</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinya Abe (38)<br>Design Quality Solution Engineer<br>Nissan<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420362&pg=ajx')">420362</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Kobayashi (31)<br>Quality Assurance Engineer<br>Art Metal Mfg. Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420306&pg=ajx')">420306</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Joji Shimizu (30)<br>Quality Engineer<br>JTEKT Corpooration<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412595&pg=ajx')">412595</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshiaki Matsumura (42)<br>Supplier Quality Engineer<br>Valeo Japan Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=27503&pg=ajx')">27503</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Funamoto (46)<br>Sales Engineer<br>Bollhoff K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420529&pg=ajx')">420529</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka Yamamoto (52)<br>Quality Engineer<br>Autoliv Japan Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=331600&pg=ajx')">331600</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ashish Sachdeva (36)<br>Technical Lead<br>KPIT TECHNOLOGIES<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420119&pg=ajx')">420119</a>
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
			<div class="stat_holder revenueSize2" id="516">
			13			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kotaro  Hashimoto (30)<br>Embedded Software Engineer<br>Hitachi Industrial Equipment Systems Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420216&pg=ajx')">420216</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chi Hyo (33)<br>Department General Manager<br>Toyota Boshoku<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420336&pg=ajx')">420336</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroki Nishizawa Tavera (30)<br>Quality Control<br>Okamoto Industries<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420293&pg=ajx')">420293</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nakamura Katsuyuki (30)<br>Software Engineer<br>Harman International Japan Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420215&pg=ajx')">420215</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hidehiko Koyata (36)<br>Product manager<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420227&pg=ajx')">420227</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taigan Lee (28)<br>Sr. Software Engineer<br>TomTom Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419911&pg=ajx')">419911</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Riki Iwai (38)<br>Senior Application Engineer<br>Mathworks<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420440&pg=ajx')">420440</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinya Abe (38)<br>Design Quality Solution Engineer<br>Nissan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420362&pg=ajx')">420362</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Kobayashi (31)<br>Quality Assurance Engineer<br>Art Metal Mfg. Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420306&pg=ajx')">420306</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Joji Shimizu (30)<br>Quality Engineer<br>JTEKT Corpooration<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412595&pg=ajx')">412595</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshiaki Matsumura (42)<br>Supplier Quality Engineer<br>Valeo Japan Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=27503&pg=ajx')">27503</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Funamoto (46)<br>Sales Engineer<br>Bollhoff K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420529&pg=ajx')">420529</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ashish Sachdeva (36)<br>Technical Lead<br>KPIT TECHNOLOGIES<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420119&pg=ajx')">420119</a>
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
			<div class="stat_holder revenueSize2" id="516">
			5			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroki Nishizawa Tavera (30)<br>Quality Control<br>Okamoto Industries<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420293&pg=ajx')">420293</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Renjith Vr (31)<br>Solutions Architect<br>KPIT TECHNOLOGIES<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=347955&pg=ajx')">347955</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yosuke Saito (35)<br>Quality Engineer<br>Magneti Marelli Japan K.K.<br><br><i>Nothing impressive, not the most forthcoming guy and doesn\t explain himself well either. Decent candidate, might be ok for technical roles requiring .NET or C++. Working automotive industry right now, previously done SME, mostly engineering, windows based. Says Csharp and C++ are best for him. Indian company, says he is level2 J. Making 450,000Yen per month right now. Spoke about IMS .NET role, interested.</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=349080&pg=ajx')">349080</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			2			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroki Nishizawa Tavera (30)<br>Quality Control<br>Okamoto Industries<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420293&pg=ajx')">420293</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nur Muhammad Hakim Noharidan (28)<br>QA Engineer<br>Akebono Brake Industry Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419997&pg=ajx')">419997</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			1			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nur Muhammad Hakim Noharidan (28)<br>QA Engineer<br>Akebono Brake Industry Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419997&pg=ajx')">419997</a>
										</div>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			13			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kotaro  Hashimoto (30)<br>Embedded Software Engineer<br>Hitachi Industrial Equipment Systems Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420216&pg=ajx')">420216</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chi Hyo (33)<br>Department General Manager<br>Toyota Boshoku<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420336&pg=ajx')">420336</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroki Nishizawa Tavera (30)<br>Quality Control<br>Okamoto Industries<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420293&pg=ajx')">420293</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nakamura Katsuyuki (30)<br>Software Engineer<br>Harman International Japan Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420215&pg=ajx')">420215</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hidehiko Koyata (36)<br>Product manager<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420227&pg=ajx')">420227</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taigan Lee (28)<br>Sr. Software Engineer<br>TomTom Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419911&pg=ajx')">419911</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Riki Iwai (38)<br>Senior Application Engineer<br>Mathworks<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420440&pg=ajx')">420440</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinya Abe (38)<br>Design Quality Solution Engineer<br>Nissan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420362&pg=ajx')">420362</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Kobayashi (31)<br>Quality Assurance Engineer<br>Art Metal Mfg. Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420306&pg=ajx')">420306</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Joji Shimizu (30)<br>Quality Engineer<br>JTEKT Corpooration<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412595&pg=ajx')">412595</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshiaki Matsumura (42)<br>Supplier Quality Engineer<br>Valeo Japan Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=27503&pg=ajx')">27503</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Funamoto (46)<br>Sales Engineer<br>Bollhoff K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420529&pg=ajx')">420529</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ashish Sachdeva (36)<br>Technical Lead<br>KPIT TECHNOLOGIES<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420119&pg=ajx')">420119</a>
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
			<div class="stat_holder revenueSize2" id="516">
			1			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nur Muhammad Hakim Noharidan (28)<br>QA Engineer<br>Akebono Brake Industry Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419997&pg=ajx')">419997</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			1			</div>
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
										<a data-toggle="tooltip" title="Candidate ID: 419997" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9478&pg=ajx')">9478</a>
										</div>
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
									</div>
		</td>
	</tr>
	
			
			
					<tr class="hover_row even_row">
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
	
					<tr class="hover_row">
	<!--<td>researcher</td>-->
	<!--<td>Researcher</td>-->
		<td class="name_column revenueSize">E. Nguyen</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="519">
			0			</div>
			<div class="stat_candi_info 519">
						</div>
		</td>
	</tr>
	
					<tr class="hover_row even_row">
	<!--<td>researcher</td>-->
	<!--<td>Researcher</td>-->
		<td class="name_column revenueSize">P. Greeff</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			25			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ikuko Fukuda (51)<br>Lead Interpreter<br>IBS Software Services<br><br><i><p>Said the salary is also important for him to change a job in a short time.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=124321&pg=ajx')">124321</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenichi Saito (44)<br>Senior Business Development Manager<br>NXP Semiconductor<br><br><i>PA of Mark Smith from skill House</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420516&pg=ajx')">420516</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayumi Nakashima (36)<br>Digital Marketing<br>Okamura Corporation<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420487&pg=ajx')">420487</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Miyuki Nakamura (27)<br>eCommerce & Digital Marketing eCommerce customer Marketing Executive<br>Unilever<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420541&pg=ajx')">420541</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuji Shimaya (41)<br>Manager<br>Intel K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=98948&pg=ajx')">98948</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeff Gu (26)<br>Management Consulting/Strategy Analyst<br>Accenture Japan<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420278&pg=ajx')">420278</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Heyoung Chang (43)<br><br>Kokubu Group Corp<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420240&pg=ajx')">420240</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Inoue (50)<br>Senior Helpdesk Analyst<br>Proto Labs Japan<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420275&pg=ajx')">420275</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshiki Yamada (52)<br>Project Lead<br>Quest Global Service<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420004&pg=ajx')">420004</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kosaka Hiroaki (47)<br>Account Manager<br>Thomson Reuters<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420315&pg=ajx')">420315</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori  Iwase (30)<br>BI Analyst<br>Fast Retailing Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420312&pg=ajx')">420312</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Ishida (-)<br>Translator<br>FreeLance<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420345&pg=ajx')">420345</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Sugita (-)<br>Translator<br>Freelance<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420330&pg=ajx')">420330</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shuichiro Kamitake (33)<br>Sales Staff Principal<br>Oracle<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420348&pg=ajx')">420348</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Patil Aniruddha (32)<br>Technical Lead<br>Infosys Technologies Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420346&pg=ajx')">420346</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko Komiya (39)<br>Marketing Specialist, International Business Develop Department<br>AstaReal Co., Ltd.<br><br><i><p>wants more details. </p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420401&pg=ajx')">420401</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiji Itoh (51)<br><br>IBM<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420061&pg=ajx')">420061</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masayuki Ose (46)<br>Client Executive<br>IBM<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=342477&pg=ajx')">342477</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryoji Morii (36)<br>Senior Consultant of Financial Services Institute / Banking and securities industry<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420434&pg=ajx')">420434</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shelley Hsu (30)<br>Software Research Engineer<br>Toshiba<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420446&pg=ajx')">420446</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masatoshi Nagai (37)<br>Senior Consultant, Industrial Products and Heavy Industry Unit<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i><p>Lives in Port Hardy, has been out of work for 7 month as Black &amp; McDonald doesnt have any ongoing projects. Has over 15 years experience in building logging roads in BC. Built about 550km of roads. Has drilling experience and has managed up to 70 people. Built a Sub station in Brooks Alberta where he was in charge of earthworks. Has experience with multi million dollar projects from take-off to handover. Salary expectation $90K - $100k. Willing to relocate and knows Prince Rupert. Has op</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417785&pg=ajx')">417785</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kelly Day (49)<br>Owner<br>Unemployed<br><br><i><p>Originally from BC. Has been logging his whole life. Started with his dad on an island just outside Powell Rive (Hardy Island). Has build log roads and has experience with drilling and blasting. He didnt do it himself. Can run a project from start to finish. He was a business owner for 15 years and has sold his house and business in Saskatchewan because he wants to come back to the the coast (Wife wants to come back). Willing to relocate to Prince Rupert and expecting minimum $100K. Very int</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420478&pg=ajx')">420478</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hitomi Kita (39)<br>Digital/CRM Marketing<br>Volvo Cars Japan<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420438&pg=ajx')">420438</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori Ichikawa (36)<br>Solution Prinicpal Consultant<br>Oracle<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323252&pg=ajx')">323252</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremy Sandeman (44)<br>Superintendent / Project Manager<br>Black & McDonald Limited<br><br><i><p>Lives in Port Hardy, has been out of work for 7 month as Black &amp; McDonald doesnt have any ongoing projects. Has over 15 years experience in building logging roads in BC. Built about 550km of roads. Has drilling experience and has managed up to 70 people. Built a Sub station in Brooks Alberta where he was in charge of earthworks. Has experience with multi million dollar projects from take-off to handover. Salary expectation $90K - $100k. Willing to relocate and knows Prince Rupert. Has op</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420542&pg=ajx')">420542</a>
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
			<div class="stat_holder revenueSize2" id="480">
			22			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuji Shimaya (41)<br>Manager<br>Intel K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=98948&pg=ajx')">98948</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeff Gu (26)<br>Management Consulting/Strategy Analyst<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420278&pg=ajx')">420278</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Heyoung Chang (43)<br><br>Kokubu Group Corp<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420240&pg=ajx')">420240</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Inoue (50)<br>Senior Helpdesk Analyst<br>Proto Labs Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420275&pg=ajx')">420275</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshiki Yamada (52)<br>Project Lead<br>Quest Global Service<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420004&pg=ajx')">420004</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kosaka Hiroaki (47)<br>Account Manager<br>Thomson Reuters<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420315&pg=ajx')">420315</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori  Iwase (30)<br>BI Analyst<br>Fast Retailing Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420312&pg=ajx')">420312</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Ishida (-)<br>Translator<br>FreeLance<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420345&pg=ajx')">420345</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Sugita (-)<br>Translator<br>Freelance<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420330&pg=ajx')">420330</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shuichiro Kamitake (33)<br>Sales Staff Principal<br>Oracle<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420348&pg=ajx')">420348</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Patil Aniruddha (32)<br>Technical Lead<br>Infosys Technologies Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420346&pg=ajx')">420346</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko Komiya (39)<br>Marketing Specialist, International Business Develop Department<br>AstaReal Co., Ltd.<br><br><i><p>wants more details. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420401&pg=ajx')">420401</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiji Itoh (51)<br><br>IBM<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420061&pg=ajx')">420061</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masayuki Ose (46)<br>Client Executive<br>IBM<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=342477&pg=ajx')">342477</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryoji Morii (36)<br>Senior Consultant of Financial Services Institute / Banking and securities industry<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420434&pg=ajx')">420434</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shelley Hsu (30)<br>Software Research Engineer<br>Toshiba<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420446&pg=ajx')">420446</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masatoshi Nagai (37)<br>Senior Consultant, Industrial Products and Heavy Industry Unit<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i><p>Lives in Port Hardy, has been out of work for 7 month as Black &amp; McDonald doesnt have any ongoing projects. Has over 15 years experience in building logging roads in BC. Built about 550km of roads. Has drilling experience and has managed up to 70 people. Built a Sub station in Brooks Alberta where he was in charge of earthworks. Has experience with multi million dollar projects from take-off to handover. Salary expectation $90K - $100k. Willing to relocate and knows Prince Rupert. Has op</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417785&pg=ajx')">417785</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kelly Day (49)<br>Owner<br>Unemployed<br><br><i><p>Originally from BC. Has been logging his whole life. Started with his dad on an island just outside Powell Rive (Hardy Island). Has build log roads and has experience with drilling and blasting. He didnt do it himself. Can run a project from start to finish. He was a business owner for 15 years and has sold his house and business in Saskatchewan because he wants to come back to the the coast (Wife wants to come back). Willing to relocate to Prince Rupert and expecting minimum $100K. Very int</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420478&pg=ajx')">420478</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hitomi Kita (39)<br>Digital/CRM Marketing<br>Volvo Cars Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420438&pg=ajx')">420438</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori Ichikawa (36)<br>Solution Prinicpal Consultant<br>Oracle<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323252&pg=ajx')">323252</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremy Sandeman (44)<br>Superintendent / Project Manager<br>Black & McDonald Limited<br><br><i><p>Lives in Port Hardy, has been out of work for 7 month as Black &amp; McDonald doesnt have any ongoing projects. Has over 15 years experience in building logging roads in BC. Built about 550km of roads. Has drilling experience and has managed up to 70 people. Built a Sub station in Brooks Alberta where he was in charge of earthworks. Has experience with multi million dollar projects from take-off to handover. Salary expectation $90K - $100k. Willing to relocate and knows Prince Rupert. Has op</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420542&pg=ajx')">420542</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Bora Jung (33)<br>Business Strategy Analyst<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=369937&pg=ajx')">369937</a>
										</div>
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
			<div class="stat_holder revenueSize2" id="480">
			4			</div>
			<div class="stat_candi_info 480">
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
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko Komiya (39)<br>Marketing Specialist, International Business Develop Department<br>AstaReal Co., Ltd.<br><br><i><p>wants more details. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420401&pg=ajx')">420401</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masatoshi Nagai (37)<br>Senior Consultant, Industrial Products and Heavy Industry Unit<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i><p>Lives in Port Hardy, has been out of work for 7 month as Black &amp; McDonald doesnt have any ongoing projects. Has over 15 years experience in building logging roads in BC. Built about 550km of roads. Has drilling experience and has managed up to 70 people. Built a Sub station in Brooks Alberta where he was in charge of earthworks. Has experience with multi million dollar projects from take-off to handover. Salary expectation $90K - $100k. Willing to relocate and knows Prince Rupert. Has op</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417785&pg=ajx')">417785</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kelly Day (49)<br>Owner<br>Unemployed<br><br><i><p>Originally from BC. Has been logging his whole life. Started with his dad on an island just outside Powell Rive (Hardy Island). Has build log roads and has experience with drilling and blasting. He didnt do it himself. Can run a project from start to finish. He was a business owner for 15 years and has sold his house and business in Saskatchewan because he wants to come back to the the coast (Wife wants to come back). Willing to relocate to Prince Rupert and expecting minimum $100K. Very int</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420478&pg=ajx')">420478</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Athar Khawaja (51)<br>Lead Geotechnical Specialist / Senior Review Specialist / Project Manager<br>Tetra Tech<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420171&pg=ajx')">420171</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			1			</div>
			<div class="stat_candi_info 480">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kelly Day (49)<br>Owner<br>Unemployed<br><br><i><p>Originally from BC. Has been logging his whole life. Started with his dad on an island just outside Powell Rive (Hardy Island). Has build log roads and has experience with drilling and blasting. He didnt do it himself. Can run a project from start to finish. He was a business owner for 15 years and has sold his house and business in Saskatchewan because he wants to come back to the the coast (Wife wants to come back). Willing to relocate to Prince Rupert and expecting minimum $100K. Very int</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420478&pg=ajx')">420478</a>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			2			</div>
			<div class="stat_candi_info 480">
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
			<div class="stat_holder revenueSize2" id="480">
			0			</div>
			<div class="stat_candi_info 480">
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
			<div class="stat_holder revenueSize2" id="480">
			0			</div>
			<div class="stat_candi_info 480">
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
			<div class="stat_holder revenueSize2" id="480">
			0			</div>
			<div class="stat_candi_info 480">
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
			<div class="stat_holder revenueSize2" id="480">
			0			</div>
			<div class="stat_candi_info 480">
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
			<div class="stat_holder revenueSize2" id="480">
			22			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuji Shimaya (41)<br>Manager<br>Intel K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=98948&pg=ajx')">98948</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeff Gu (26)<br>Management Consulting/Strategy Analyst<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420278&pg=ajx')">420278</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Heyoung Chang (43)<br><br>Kokubu Group Corp<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420240&pg=ajx')">420240</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Inoue (50)<br>Senior Helpdesk Analyst<br>Proto Labs Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420275&pg=ajx')">420275</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshiki Yamada (52)<br>Project Lead<br>Quest Global Service<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420004&pg=ajx')">420004</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kosaka Hiroaki (47)<br>Account Manager<br>Thomson Reuters<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420315&pg=ajx')">420315</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori  Iwase (30)<br>BI Analyst<br>Fast Retailing Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420312&pg=ajx')">420312</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Ishida (-)<br>Translator<br>FreeLance<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420345&pg=ajx')">420345</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Sugita (-)<br>Translator<br>Freelance<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420330&pg=ajx')">420330</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shuichiro Kamitake (33)<br>Sales Staff Principal<br>Oracle<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420348&pg=ajx')">420348</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Patil Aniruddha (32)<br>Technical Lead<br>Infosys Technologies Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420346&pg=ajx')">420346</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko Komiya (39)<br>Marketing Specialist, International Business Develop Department<br>AstaReal Co., Ltd.<br><br><i><p>wants more details. </p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420401&pg=ajx')">420401</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiji Itoh (51)<br><br>IBM<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420061&pg=ajx')">420061</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masayuki Ose (46)<br>Client Executive<br>IBM<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=342477&pg=ajx')">342477</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryoji Morii (36)<br>Senior Consultant of Financial Services Institute / Banking and securities industry<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420434&pg=ajx')">420434</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shelley Hsu (30)<br>Software Research Engineer<br>Toshiba<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420446&pg=ajx')">420446</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masatoshi Nagai (37)<br>Senior Consultant, Industrial Products and Heavy Industry Unit<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i><p>Lives in Port Hardy, has been out of work for 7 month as Black &amp; McDonald doesnt have any ongoing projects. Has over 15 years experience in building logging roads in BC. Built about 550km of roads. Has drilling experience and has managed up to 70 people. Built a Sub station in Brooks Alberta where he was in charge of earthworks. Has experience with multi million dollar projects from take-off to handover. Salary expectation $90K - $100k. Willing to relocate and knows Prince Rupert. Has op</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417785&pg=ajx')">417785</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kelly Day (49)<br>Owner<br>Unemployed<br><br><i><p>Originally from BC. Has been logging his whole life. Started with his dad on an island just outside Powell Rive (Hardy Island). Has build log roads and has experience with drilling and blasting. He didnt do it himself. Can run a project from start to finish. He was a business owner for 15 years and has sold his house and business in Saskatchewan because he wants to come back to the the coast (Wife wants to come back). Willing to relocate to Prince Rupert and expecting minimum $100K. Very int</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420478&pg=ajx')">420478</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hitomi Kita (39)<br>Digital/CRM Marketing<br>Volvo Cars Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420438&pg=ajx')">420438</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori Ichikawa (36)<br>Solution Prinicpal Consultant<br>Oracle<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323252&pg=ajx')">323252</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremy Sandeman (44)<br>Superintendent / Project Manager<br>Black & McDonald Limited<br><br><i><p>Lives in Port Hardy, has been out of work for 7 month as Black &amp; McDonald doesnt have any ongoing projects. Has over 15 years experience in building logging roads in BC. Built about 550km of roads. Has drilling experience and has managed up to 70 people. Built a Sub station in Brooks Alberta where he was in charge of earthworks. Has experience with multi million dollar projects from take-off to handover. Salary expectation $90K - $100k. Willing to relocate and knows Prince Rupert. Has op</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420542&pg=ajx')">420542</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Bora Jung (33)<br>Business Strategy Analyst<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=369937&pg=ajx')">369937</a>
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
			<div class="stat_holder revenueSize2" id="480">
			2			</div>
			<div class="stat_candi_info 480">
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
			<div class="stat_holder revenueSize2" id="480">
			0			</div>
			<div class="stat_candi_info 480">
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
			<div class="stat_holder revenueSize2" id="480">
			1			</div>
			<div class="stat_candi_info 480">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Suzuno Ota (39)<br>Product Development Coordinator, Development/Risk Management & Moderation, Customer Service<br>HCL Japan Ltd.<br><br><i><p>Phone assessed</p>
<p>Has done interpretation and translation in IT field about 2 years . Before that she was working at Law firms doing translation/interpretation.</p>
<p>Interested in new opportunities prefers 6M JPY</p>
<p>Pitched IBS and waiting for her resume.</p>
<p>&nbsp;</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=365714&pg=ajx')">365714</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			1			</div>
			<div class="stat_candi_info 480">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Suzuno Ota (39)<br>Product Development Coordinator, Development/Risk Management & Moderation, Customer Service<br>HCL Japan Ltd.<br><br><i><p>Phone assessed</p>
<p>Has done interpretation and translation in IT field about 2 years . Before that she was working at Law firms doing translation/interpretation.</p>
<p>Interested in new opportunities prefers 6M JPY</p>
<p>Pitched IBS and waiting for her resume.</p>
<p>&nbsp;</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=365714&pg=ajx')">365714</a>
										</div>
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row">
	<!--<td>researcher</td>-->
	<!--<td>Researcher</td>-->
		<td class="name_column revenueSize">T. Tanigawa</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			20			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sunny Chen (28)<br>Senior Proposal Manager<br>Parexel International K.K.<br><br><i><p>Met F2F last week; he is very soft &amp; feminine. Interested to work in a bigger &amp; stable company. Current business line (Pacbio) might be bought out by Roche next year, wants to find a new role by then. Not an immediate mover but found the Merck role very interesting, pushing to apply. </p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420233&pg=ajx')">420233</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayana Nozaki (28)<br>CRA Trainee<br>Quintes<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417214&pg=ajx')">417214</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (-)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takahito Yamada (50)<br>Lifecycle Leader<br>Chugai<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=405422&pg=ajx')">405422</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rie Kamimura (-)<br>Staff<br>Quintiles Transnational Japan K.K.<br><br><i><p>PERSONALITY &amp; APPEARANCE: Great guy, highly placeable, but not on the move due to his current project <br />CURRENT POSITION &amp; RESPONSIBILITIES: He is Life Cycle Leader for CNS, a anti-schizophrenia drug. He manages about 30 people as part of the team, but none of them have direct reports to him. His team consists of members from Pricing, RA, CMC, Nonclinical, Clinical, Clinical Pharmacology, Commercial, Partnering, and Portfolio Management. He reports to Director of LCM III, in charg</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416851&pg=ajx')">416851</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Waka Sato (-)<br>Clinical Project Mgr<br>Quintiles Transnational Japan K.K.<br><br><i><p>From meibo</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=414915&pg=ajx')">414915</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tsutomu Sakai (49)<br>MSL<br>Nippon Boehringer Ingelheim Co., Ltd.<br><br><i><p>From Meibo</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404837&pg=ajx')">404837</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masato Tsujimoto (39)<br>CRA Manager<br>InVentiv Health K.K.<br><br><i><p>PERSONALITY: Well presented, Scientific looking nice guy but with a Phycology academic background. He drew a chat to explain what MSL is and gave it to me. <br />CURRENT POSITION &amp; RESPONSIBILITIES: 2012 Oct &ndash; present, Oncology MSL in NBI (staff level but well paid than Mizushima-san&hellip;.). He managed no one and reports to Dr. Takahashi who then reports to the Head of Clinical &amp; MA. <br />CAREER HISTORY: Started career in Sanofi (RPR) as a MR for 13 years. Then became a MSL</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=405729&pg=ajx')">405729</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Kondo  (36)<br>MSL Specialist<br>MSD K.K.<br><br><i><p>Just joined Inventiv Health... Sooo disappointed. Pitched Bayer - Head of Site &amp; Study Management</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=241733&pg=ajx')">241733</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinjori Inamori (-)<br><br>Novartis Pharma K.K.<br><br><i><p>404717 is the same person</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412706&pg=ajx')">412706</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Susumu Eguchi (52)<br>Director<br>Quintiles Transnational Japan K.K.<br><br><i><p>From Meibo</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=405351&pg=ajx')">405351</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Tsuda (37)<br>MSL<br>Amgen Ltd.<br><br><i><p>PERSONALITY: Really nice guy, big smile, open flexible, talkative and in my opinion very very good and a walking placement, Seems to know everybody in the industry that is an issue. CURRENT POSITION &amp; RESPONSIBILITIES: Associate GM of Clinical Development. Reporting to GM and managing 40 staff in Project Management, Medical Device Development, Training and QC. Mainly works on medical device products. This role for 1.5 years <br />CAREER HISTORY: Boston Scientific for 3.5 years as Clinical</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404625&pg=ajx')">404625</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nobutaka Kikuchi (40)<br>Head<br>NBI	K.K.<br><br><i><p>PERSONALITY: Friendly, smiley guy that did not talk too much and spoke quite slowly. He was very polite and serious but in a positive / happy way as well. He seems very smart and career motivated. His English is great (TOEIC 905) from only 9 months studying in Australia during Uni time. He is a short guy and told me I am very tall when I walked into the meeting room. <br />CURRENT POSITION &amp; RESPONSIBILITIES: Since 2012, he is the MSL Specialist for the Atherosclerosis (Zetia product) TA</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=405615&pg=ajx')">405615</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taro Futagami (-)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417182&pg=ajx')">417182</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Shimizu (-)<br>Clinical Research Associate<br>Quintiles Transnational Japan K.K.<br><br><i><p>Emi Shimizu Quintiles Transnational FSP (AM) CRA Trainee 080-4755-0541 080-4755-0541 Emi.Shimizu@quintiles.com</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417082&pg=ajx')">417082</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka ishii (56)<br>MSL<br>Janssen Pharmaceutical K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412640&pg=ajx')">412640</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiromi Igari (51)<br>Scientific Affairs<br>Leo Pharma<br><br><i><p>PERSONALITY: Weak English but tried hard to communicate. Friendly and calm and helpful and came across really likeable female professional. Could still be placeable if she moves soon <br />THERAPEUTIC AREA: Heamatology, anti fungal, respiratory, dermatology <br />CURRENT POSITION &amp; RESPONSIBILITIES: 1.5 years as MSL in the Hematology MSL Group. Reports to Mitsuru Takizawa. <br />CAREER HISTORY:Joined Novartis 1.5 years ago. 1992-2009 at Janssen. 3 years as Medical Staff 15 years in Market</i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=312806&pg=ajx')">312806</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kaori Abe (37)<br>Sr. Project Manager<br>Quintiles Transnational Japan K.K.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420480&pg=ajx')">420480</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nobutaka Kikuchi (40)<br>Head<br>Nippon Boehringer Ingelheim Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=297738&pg=ajx')">297738</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masanori Yagi (-)<br>MSL, PhD<br>AbbVie<br><br><i><p>has a baby who is 10month</p>
<p>can not move outside from Osaka.</p></i>"  href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412535&pg=ajx')">412535</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			7			</div>
			<div class="stat_candi_info 514">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taro Futagami (-)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417182&pg=ajx')">417182</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Shimizu (-)<br>Clinical Research Associate<br>Quintiles Transnational Japan K.K.<br><br><i><p>Emi Shimizu Quintiles Transnational FSP (AM) CRA Trainee 080-4755-0541 080-4755-0541 Emi.Shimizu@quintiles.com</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417082&pg=ajx')">417082</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka ishii (56)<br>MSL<br>Janssen Pharmaceutical K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412640&pg=ajx')">412640</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiromi Igari (51)<br>Scientific Affairs<br>Leo Pharma<br><br><i><p>PERSONALITY: Weak English but tried hard to communicate. Friendly and calm and helpful and came across really likeable female professional. Could still be placeable if she moves soon <br />THERAPEUTIC AREA: Heamatology, anti fungal, respiratory, dermatology <br />CURRENT POSITION &amp; RESPONSIBILITIES: 1.5 years as MSL in the Hematology MSL Group. Reports to Mitsuru Takizawa. <br />CAREER HISTORY:Joined Novartis 1.5 years ago. 1992-2009 at Janssen. 3 years as Medical Staff 15 years in Market</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=312806&pg=ajx')">312806</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kaori Abe (37)<br>Sr. Project Manager<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420480&pg=ajx')">420480</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masanori Yagi (-)<br>MSL, PhD<br>AbbVie<br><br><i><p>has a baby who is 10month</p>
<p>can not move outside from Osaka.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412535&pg=ajx')">412535</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masakazu Muramoto (50)<br>Group Manager<br>Janssen Pharmaceutical K.K.<br><br><i><p>duplicate to #345311 assessed&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=345311&pg=ajx')">345311</a>
										</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			7			</div>
			<div class="stat_candi_info 514">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taro Futagami (-)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417182&pg=ajx')">417182</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Shimizu (-)<br>Clinical Research Associate<br>Quintiles Transnational Japan K.K.<br><br><i><p>Emi Shimizu Quintiles Transnational FSP (AM) CRA Trainee 080-4755-0541 080-4755-0541 Emi.Shimizu@quintiles.com</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417082&pg=ajx')">417082</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka ishii (56)<br>MSL<br>Janssen Pharmaceutical K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412640&pg=ajx')">412640</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiromi Igari (51)<br>Scientific Affairs<br>Leo Pharma<br><br><i><p>PERSONALITY: Weak English but tried hard to communicate. Friendly and calm and helpful and came across really likeable female professional. Could still be placeable if she moves soon <br />THERAPEUTIC AREA: Heamatology, anti fungal, respiratory, dermatology <br />CURRENT POSITION &amp; RESPONSIBILITIES: 1.5 years as MSL in the Hematology MSL Group. Reports to Mitsuru Takizawa. <br />CAREER HISTORY:Joined Novartis 1.5 years ago. 1992-2009 at Janssen. 3 years as Medical Staff 15 years in Market</i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=312806&pg=ajx')">312806</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kaori Abe (37)<br>Sr. Project Manager<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420480&pg=ajx')">420480</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masanori Yagi (-)<br>MSL, PhD<br>AbbVie<br><br><i><p>has a baby who is 10month</p>
<p>can not move outside from Osaka.</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412535&pg=ajx')">412535</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masakazu Muramoto (50)<br>Group Manager<br>Janssen Pharmaceutical K.K.<br><br><i><p>duplicate to #345311 assessed&nbsp;</p></i>" href="javascript: view_candi('https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=345311&pg=ajx')">345311</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			0			</div>
			<div class="stat_candi_info 514">
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
			42		</td>
		<td class='revenueSize3'>
			3		</td>
		<td class='revenueSize3'>
			1		</td>
		<td class='revenueSize3'>
			1		</td>
		<td class='revenueSize3'>
			1		</td>
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