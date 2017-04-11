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
				value="2017-04-01" />
		</div>
		<div class="general_form_column add_margin_left_20">End date: </div>
		<div class="general_form_column">
			<input id="end_date" style="width: 90px" type="text" name="end_date"
				value="2017-04-30" />
		</div>
		<div class="general_form_column add_margin_left_10">
			<input type="submit" name="submit_totals" value="Get totals" />
		</div>
	</div>
</form>

	<table id="totals_table_id" class="totals_table">
	<tr>
		<th class='revenueSize0' colspan="15">Consultant totals - Apr 2017</th>
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
		<td class="name_column revenueSize">C. Chen</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			5			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yohei Ono (41)<br>Manager<br>Prudential Life Insurance Co., Ltd.<br><br><i>said to have low E in speaking and writing, but has TOEIC 800.</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=177705&pg=ajx')">177705</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshimichi Matsumura (46)<br>Senior Manager<br>MetLife Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416816&pg=ajx')">416816</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Atsuko Sakai (31)<br>Investment Group, Assistant Vice President<br>Sumitomo Mitsui Banking Corp.<br><br><i>Met with her yesterday for lunch at a typical Japanese place and in a private room as its her first time meeting a Recruiter and she was nervous that some one might see her.

She is quite orthodox Japanese but comes across as fairly confident and speaks a good E5. 

She has a very strong and stable background and has been with only two companies very consistently.

She is currently working at Gibraltar life Insurance as an Associate within the Investment team for the last 6 years as As Buy</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413164&pg=ajx')">413164</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yohei Yamaryo (42)<br>credit risk management<br>Mizuho Securities Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421267&pg=ajx')">421267</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Makoto Fukuda (38)<br>Associate Manager<br>L’Oréal Japan<br><br><i>Chubby fat fingered type, smells like an ashtray, and has strange sideburns, typical geeky IT type. Has good exp though, and is e6. Career began at Microsoft, software developer on C++, C#.NET. Built components on top of SharePoint, the Social Network Service. Had a good 6yrs there, and learnt his main skills. Then decided to join a Korean start up as an Ajax developer, writing source code, Java and Java script. Was overworked though, places importance on work/life balance, has a small son, 2yrs</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=310928&pg=ajx')">310928</a>
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
			<div class="stat_holder revenueSize2" id="481">
			5			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yohei Ono (41)<br>Manager<br>Prudential Life Insurance Co., Ltd.<br><br><i>said to have low E in speaking and writing, but has TOEIC 800.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=177705&pg=ajx')">177705</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshimichi Matsumura (46)<br>Senior Manager<br>MetLife Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416816&pg=ajx')">416816</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Atsuko Sakai (31)<br>Investment Group, Assistant Vice President<br>Sumitomo Mitsui Banking Corp.<br><br><i>Met with her yesterday for lunch at a typical Japanese place and in a private room as its her first time meeting a Recruiter and she was nervous that some one might see her.

She is quite orthodox Japanese but comes across as fairly confident and speaks a good E5. 

She has a very strong and stable background and has been with only two companies very consistently.

She is currently working at Gibraltar life Insurance as an Associate within the Investment team for the last 6 years as As Buy</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413164&pg=ajx')">413164</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yohei Yamaryo (42)<br>credit risk management<br>Mizuho Securities Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421267&pg=ajx')">421267</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Makoto Fukuda (38)<br>Associate Manager<br>L’Oréal Japan<br><br><i>Chubby fat fingered type, smells like an ashtray, and has strange sideburns, typical geeky IT type. Has good exp though, and is e6. Career began at Microsoft, software developer on C++, C#.NET. Built components on top of SharePoint, the Social Network Service. Had a good 6yrs there, and learnt his main skills. Then decided to join a Korean start up as an Ajax developer, writing source code, Java and Java script. Was overworked though, places importance on work/life balance, has a small son, 2yrs</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=310928&pg=ajx')">310928</a>
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
			<div class="stat_holder revenueSize2" id="481">
			3			</div>
			<div class="stat_candi_info 481">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenichi Toda (42)<br>Internal Audit<br>Mitsubishi UFJ<br><br><i>Chubby fat fingered type, smells like an ashtray, and has strange sideburns, typical geeky IT type. Has good exp though, and is e6. Career began at Microsoft, software developer on C++, C#.NET. Built components on top of SharePoint, the Social Network Service. Had a good 6yrs there, and learnt his main skills. Then decided to join a Korean start up as an Ajax developer, writing source code, Java and Java script. Was overworked though, places importance on work/life balance, has a small son, 2yrs</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=407691&pg=ajx')">407691</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rui Tang (34)<br>Support and develop engineer<br>SBI BITS<br><br><i><p>Phone assessed him</p>
<p>Worked at Japanese company about 3 years as an internal IT application staff (Java based ).</p>
<p>Then moved to Tech Mahindra (onsite engineer at Pfizer) , but left after 9months.</p>
<p>Then moved to company called Arugo (Japanese SIer) and working onsite at Mcdonalds</p>
<p>Wants to move&nbsp;</p>
<p>Pitched Zurich and Hexaware</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=411764&pg=ajx')">411764 (2)</a>
										</div>
							<div class="hover_row colored_row">
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
			<div class="stat_holder revenueSize2" id="481">
			2			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomoko Matsuda (32)<br>Strategic Finance & Performance Analysis<br>AXA<br><br><i><p>Met her in Tokyo station. Decent lady, from Osaka and living, working in Tokyo now. She basically satisfied with current work, most of her responsibilities is training and some work related to quality improvement. Shangri-La invested in training and she felt her work is supported by management there. Just she has been for quite a long time and now she is open to something new. She used to work in Panasonic and like to work with engineer people and prefers manufacturing industry, not keen on l</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416376&pg=ajx')">416376</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yumi Minoda (34)<br><br>Shangri-La Hotels & Resorts<br><br><i><p>Phone assessed him</p>
<p>Worked at Japanese company about 3 years as an internal IT application staff (Java based ).</p>
<p>Then moved to Tech Mahindra (onsite engineer at Pfizer) , but left after 9months.</p>
<p>Then moved to company called Arugo (Japanese SIer) and working onsite at Mcdonalds</p>
<p>Wants to move&nbsp;</p>
<p>Pitched Zurich and Hexaware</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416043&pg=ajx')">416043</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			2			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomoko Matsuda (32)<br>Strategic Finance & Performance Analysis<br>AXA<br><br><i><p>Met her in Tokyo station. Decent lady, from Osaka and living, working in Tokyo now. She basically satisfied with current work, most of her responsibilities is training and some work related to quality improvement. Shangri-La invested in training and she felt her work is supported by management there. Just she has been for quite a long time and now she is open to something new. She used to work in Panasonic and like to work with engineer people and prefers manufacturing industry, not keen on l</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416376&pg=ajx')">416376</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yumi Minoda (34)<br><br>Shangri-La Hotels & Resorts<br><br><i><p>Phone assessed him</p>
<p>Worked at Japanese company about 3 years as an internal IT application staff (Java based ).</p>
<p>Then moved to Tech Mahindra (onsite engineer at Pfizer) , but left after 9months.</p>
<p>Then moved to company called Arugo (Japanese SIer) and working onsite at Mcdonalds</p>
<p>Wants to move&nbsp;</p>
<p>Pitched Zurich and Hexaware</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416043&pg=ajx')">416043</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			0			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="481">
			0			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="481">
			0			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="481">
			2			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshimichi Matsumura (46)<br>Senior Manager<br>MetLife Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416816&pg=ajx')">416816</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yohei Yamaryo (42)<br>credit risk management<br>Mizuho Securities Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421267&pg=ajx')">421267</a>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			1			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomoko Matsuda (32)<br>Strategic Finance & Performance Analysis<br>AXA<br><br><i><p>Met her in Tokyo station. Decent lady, from Osaka and living, working in Tokyo now. She basically satisfied with current work, most of her responsibilities is training and some work related to quality improvement. Shangri-La invested in training and she felt her work is supported by management there. Just she has been for quite a long time and now she is open to something new. She used to work in Panasonic and like to work with engineer people and prefers manufacturing industry, not keen on l</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416376&pg=ajx')">416376</a>
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
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a data-toggle="tooltip" title="Candidate ID: 416376" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9469&pg=ajx')">9469</a>
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
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="481">
			0			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
		<td class="name_column revenueSize">J. Kovaliovas</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			3			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Usukura Yasutaka (40)<br>Electronics engineer<br>itk-engineering AG<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420456&pg=ajx')">420456</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="kenji kawaguchi (44)<br>Sales and Account Manager<br>Kotobukiya Fronte Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420761&pg=ajx')">420761</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Narimitsu Nagase (32)<br>Sealing Sales<br>Wolverine Japan Inc.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421251&pg=ajx')">421251</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			1			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Narimitsu Nagase (32)<br>Sealing Sales<br>Wolverine Japan Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421251&pg=ajx')">421251</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			7			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masumichi Morishita (50)<br>Application Engineer<br>SPX Service Solutions Japan, Ltd.<br><br><i><p>No longer working at Camso. Company was sold of and dismembered in Dec 2016. </p>
<p>Has been looking for a new job ever since. </p>
<p>Interviewing with Continental (tire business), had ccm1 through another recruiter, and waiting for results. </p>
<p>Interested in any other available options. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=5220&pg=ajx')">5220</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Alshawabkeh Kitaoka Fawaz (48)<br>Design Engineer<br>Kongsberg Automotive Ltd.<br><br><i><p>application engineer position sought. wants to move for new environment.&nbsp; now making about 7m.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=169748&pg=ajx')">169748</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nana Hanyuda (32)<br>Prototype Planner<br>Continental AG<br><br><i><p>working on a contract with Nissan. His specialization is mechanical engineering -shifters, etc. design, development, etc. Vehicle control related 12 years. Wants to stay on the technical side of things. His timeline to start a new job is asap.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=325510&pg=ajx')">325510</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshihiro Matsumoto (46)<br>Project Manager (SW)<br>Mentor Graphics<br><br><i><p>his situation is that he is in charge for embedded software for automotive.  mentor got acquired by seimens.  he is not clear about what with what will happen -so he is open to meeting companies.</p>
<p>If he changes his job, he would be project manager or project leader for embedded software. He is organizing the projects teams.  He is not open minded to anything outside of Tokyo.</p>
<p>he has been introduced to continental via his friend.   he is interested in ZF. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=337103&pg=ajx')">337103 (2)</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshihiro Hatano (48)<br>Account Manger<br>GEA Process Engineering Limited<br><br><i>Since tomorrow he is going away for a business trip until September 12th, so we mutually decided to do a phone meeting instead. Seems to be a solid candidate for sales positions within industrial machinery manufacturing companies. He is currently working at GE as a Sales Account Manager dealing in power conversion products. In charge of Japanese EPC companies such as JGC, Chiyoda, TEC and etc. Main products include various electric propulsion systems,  drive motors and generators for Gas and Ste</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=369962&pg=ajx')">369962 (2)</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			2			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masumichi Morishita (50)<br>Application Engineer<br>SPX Service Solutions Japan, Ltd.<br><br><i><p>No longer working at Camso. Company was sold of and dismembered in Dec 2016. </p>
<p>Has been looking for a new job ever since. </p>
<p>Interviewing with Continental (tire business), had ccm1 through another recruiter, and waiting for results. </p>
<p>Interested in any other available options. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=5220&pg=ajx')">5220</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shingo Fukuda (47)<br>OE Account Manager<br>Pirelli Japan K.K.<br><br><i>Since tomorrow he is going away for a business trip until September 12th, so we mutually decided to do a phone meeting instead. Seems to be a solid candidate for sales positions within industrial machinery manufacturing companies. He is currently working at GE as a Sales Account Manager dealing in power conversion products. In charge of Japanese EPC companies such as JGC, Chiyoda, TEC and etc. Main products include various electric propulsion systems,  drive motors and generators for Gas and Ste</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=403988&pg=ajx')">403988</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="443">
			1			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Narimitsu Nagase (32)<br>Sealing Sales<br>Wolverine Japan Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421251&pg=ajx')">421251</a>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="443">
			0			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
		<td class="name_column revenueSize">K. Kapur</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			10			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuki Maeda (28)<br>Research Associate<br>Morgan Stanley<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421236&pg=ajx')">421236</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shentao Tang (23)<br>Analyst<br>Morgan Stanley<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421262&pg=ajx')">421262</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Xuanyue He (28)<br>Analyst<br>SMBC Nikko Securities<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421195&pg=ajx')">421195</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Xuming Tao (29)<br>Associate Director<br>USB<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421274&pg=ajx')">421274</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Natsue Ishida (-)<br>Financial Analyst<br>AIG<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413937&pg=ajx')">413937</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaro Tanaka (30)<br>Analytic<br>Bloomberg Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421289&pg=ajx')">421289</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hirotaka Kusama (25)<br>Analyst<br>Barclays<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421306&pg=ajx')">421306</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuya Hirashima (-)<br>Analyst<br>Lincoln International<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=328792&pg=ajx')">328792</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Haixia Wang (29)<br>Analyst<br>Nordea<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421327&pg=ajx')">421327</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ippei Yamaura (32)<br>Trader<br>Mizuho Securities Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421328&pg=ajx')">421328</a>
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
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
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
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
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
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
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
			<div class="stat_holder revenueSize2" id="431">
			5			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="431">
			2			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Natsuo Imai (47)<br>President<br>IDERA Capital Management<br><br><i><p>He is now the President and CFO for IDERA Capital. There President left and he was put into this seat.</p>
<p>He is currently happy but still open to extremely high level roles only.</p>
<p>Will consider PE firms and is not restricted to RE.</p>
<p>Spoke about Fortress and is interested also interested in Carlyle.</p>
<p>Sent me his resume , but there has to be an extremely high profile role for him to consider and the company should be at least&nbsp; 70 people.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=153636&pg=ajx')">153636</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			1			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Natsuo Imai (47)<br>President<br>IDERA Capital Management<br><br><i><p>He is now the President and CFO for IDERA Capital. There President left and he was put into this seat.</p>
<p>He is currently happy but still open to extremely high level roles only.</p>
<p>Will consider PE firms and is not restricted to RE.</p>
<p>Spoke about Fortress and is interested also interested in Carlyle.</p>
<p>Sent me his resume , but there has to be an extremely high profile role for him to consider and the company should be at least&nbsp; 70 people.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=153636&pg=ajx')">153636</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="431">
			3			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="-" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420885&pg=ajx')">420885</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="-" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419513&pg=ajx')">419513</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="-" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=224560&pg=ajx')">224560</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="431">
			0			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
		<td class="name_column revenueSize">L. Fry</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			15			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dau Hai (29)<br>Account Manager<br>FPT Software<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421270&pg=ajx')">421270</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shahzada Rao (32)<br>Solution Architect ITIS(ESM-ITSM)<br>Tata Consultancy Services K.K.<br><br><i><p>LINKEDIN.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421188&pg=ajx')">421188</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Deepak Dev (34)<br>Software Architect<br>ORACLE<br><br><i><p>LINKEDIN</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421206&pg=ajx')">421206</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daisuke Tomomatsu (40)<br>Senior Consultant - Manager<br>Verint Systems Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420873&pg=ajx')">420873</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroyuki Mukai (53)<br>HDD Preamp & Servo Program Manager<br>Texas Instruments<br><br><i><p>BIZREACH.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421243&pg=ajx')">421243</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ahmed Othman (30)<br>Technical Product Owner / Technical Lead<br>Rakuten Inc.<br><br><i><p>LINKEDIN</p>
<p>&nbsp;</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421229&pg=ajx')">421229</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoko Suga (49)<br>International Marketing Senior Director - APAC<br>Tivo<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421126&pg=ajx')">421126</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shigeharu Kishida (47)<br>Vice President of Global Strategy and Product Management<br>Wacom<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421099&pg=ajx')">421099</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Suvas Mahapatra (55)<br>Lead - Change Management and Integration at TCS Japan<br>Tata Consultancy Services K.K.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415911&pg=ajx')">415911</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Osamu Kikuno (45)<br>Vice President Director<br>Mitsubishi Corporation<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421027&pg=ajx')">421027</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="yoriyuki katayama (35)<br>Key Account Manager<br>Reishauer K.K.<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421265&pg=ajx')">421265</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kiyotaka Owada (58)<br> Manager/Real Estate Service<br>UD Trucks Corporation<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421140&pg=ajx')">421140</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Fumio Nakagawa (54)<br>Staff<br>RGA Reinsurance Company<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=142835&pg=ajx')">142835</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eric Evangelista Ohtake (34)<br>IT Infrastructure Analyst<br>Banco do Brasil<br><br><i><p>LINKEDIN</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421286&pg=ajx')">421286</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="HARSHAL PRAKASH PAWAR (30)<br>embedded system engineer.<br>Tata Consultancy Services K.K.<br><br><i><p>LINKEDIN</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421232&pg=ajx')">421232</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			15			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shahzada Rao (32)<br>Solution Architect ITIS(ESM-ITSM)<br>Tata Consultancy Services K.K.<br><br><i><p>LINKEDIN.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421188&pg=ajx')">421188</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Deepak Dev (34)<br>Software Architect<br>ORACLE<br><br><i><p>LINKEDIN</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421206&pg=ajx')">421206</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daisuke Tomomatsu (40)<br>Senior Consultant - Manager<br>Verint Systems Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420873&pg=ajx')">420873</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroyuki Mukai (53)<br>HDD Preamp & Servo Program Manager<br>Texas Instruments<br><br><i><p>BIZREACH.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421243&pg=ajx')">421243</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ahmed Othman (30)<br>Technical Product Owner / Technical Lead<br>Rakuten Inc.<br><br><i><p>LINKEDIN</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421229&pg=ajx')">421229</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoko Suga (49)<br>International Marketing Senior Director - APAC<br>Tivo<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421126&pg=ajx')">421126</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shigeharu Kishida (47)<br>Vice President of Global Strategy and Product Management<br>Wacom<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421099&pg=ajx')">421099</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Suvas Mahapatra (55)<br>Lead - Change Management and Integration at TCS Japan<br>Tata Consultancy Services K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415911&pg=ajx')">415911</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Osamu Kikuno (45)<br>Vice President Director<br>Mitsubishi Corporation<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421027&pg=ajx')">421027</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="yoriyuki katayama (35)<br>Key Account Manager<br>Reishauer K.K.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421265&pg=ajx')">421265</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kiyotaka Owada (58)<br> Manager/Real Estate Service<br>UD Trucks Corporation<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421140&pg=ajx')">421140</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Fumio Nakagawa (54)<br>Staff<br>RGA Reinsurance Company<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=142835&pg=ajx')">142835</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eric Evangelista Ohtake (34)<br>IT Infrastructure Analyst<br>Banco do Brasil<br><br><i><p>LINKEDIN</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421286&pg=ajx')">421286</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="HARSHAL PRAKASH PAWAR (30)<br>embedded system engineer.<br>Tata Consultancy Services K.K.<br><br><i><p>LINKEDIN</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421232&pg=ajx')">421232</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Iwata (45)<br>Senior Manager,Business Development, Service Provider Business<br>EMC<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421225&pg=ajx')">421225</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			6			</div>
			<div class="stat_candi_info 388">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Fumio Nakagawa (54)<br>Staff<br>RGA Reinsurance Company<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=142835&pg=ajx')">142835</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Bharat Vakde (40)<br>Relationship Manager<br>Tata Consultancy Services K.K.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=320589&pg=ajx')">320589</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ramakrishna Rao (43)<br>Associate Consultant<br>Cognizant Technology Solutions (CTS)<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404561&pg=ajx')">404561</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuichi Fujino (53)<br>Project Manager - Insurance<br>Wipro Technologies Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421131&pg=ajx')">421131 (2)</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mizuki Ninomiya (31)<br>Senior Associate<br>AT&T Singapore<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421182&pg=ajx')">421182</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			6			</div>
			<div class="stat_candi_info 388">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Fumio Nakagawa (54)<br>Staff<br>RGA Reinsurance Company<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=142835&pg=ajx')">142835</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Bharat Vakde (40)<br>Relationship Manager<br>Tata Consultancy Services K.K.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=320589&pg=ajx')">320589</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ramakrishna Rao (43)<br>Associate Consultant<br>Cognizant Technology Solutions (CTS)<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404561&pg=ajx')">404561</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuichi Fujino (53)<br>Project Manager - Insurance<br>Wipro Technologies Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421131&pg=ajx')">421131</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mizuki Ninomiya (31)<br>Senior Associate<br>AT&T Singapore<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421182&pg=ajx')">421182</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			0			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="388">
			0			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="388">
			0			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="388">
			0			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="388">
			0			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="388">
			15			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shahzada Rao (32)<br>Solution Architect ITIS(ESM-ITSM)<br>Tata Consultancy Services K.K.<br><br><i><p>LINKEDIN.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421188&pg=ajx')">421188</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Deepak Dev (34)<br>Software Architect<br>ORACLE<br><br><i><p>LINKEDIN</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421206&pg=ajx')">421206</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Daisuke Tomomatsu (40)<br>Senior Consultant - Manager<br>Verint Systems Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420873&pg=ajx')">420873</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroyuki Mukai (53)<br>HDD Preamp & Servo Program Manager<br>Texas Instruments<br><br><i><p>BIZREACH.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421243&pg=ajx')">421243</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ahmed Othman (30)<br>Technical Product Owner / Technical Lead<br>Rakuten Inc.<br><br><i><p>LINKEDIN</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421229&pg=ajx')">421229</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoko Suga (49)<br>International Marketing Senior Director - APAC<br>Tivo<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421126&pg=ajx')">421126</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shigeharu Kishida (47)<br>Vice President of Global Strategy and Product Management<br>Wacom<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421099&pg=ajx')">421099</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Suvas Mahapatra (55)<br>Lead - Change Management and Integration at TCS Japan<br>Tata Consultancy Services K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415911&pg=ajx')">415911</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Osamu Kikuno (45)<br>Vice President Director<br>Mitsubishi Corporation<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421027&pg=ajx')">421027</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="yoriyuki katayama (35)<br>Key Account Manager<br>Reishauer K.K.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421265&pg=ajx')">421265</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kiyotaka Owada (58)<br> Manager/Real Estate Service<br>UD Trucks Corporation<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421140&pg=ajx')">421140</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Fumio Nakagawa (54)<br>Staff<br>RGA Reinsurance Company<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=142835&pg=ajx')">142835</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eric Evangelista Ohtake (34)<br>IT Infrastructure Analyst<br>Banco do Brasil<br><br><i><p>LINKEDIN</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421286&pg=ajx')">421286</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="HARSHAL PRAKASH PAWAR (30)<br>embedded system engineer.<br>Tata Consultancy Services K.K.<br><br><i><p>LINKEDIN</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421232&pg=ajx')">421232</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Iwata (45)<br>Senior Manager,Business Development, Service Provider Business<br>EMC<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421225&pg=ajx')">421225</a>
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
			<div class="stat_holder revenueSize2" id="388">
			0			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="388">
			0			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="388">
			1			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoho Kazama (44)<br>Network Engineer<br>HCL Japan Ltd.<br><br><i><p>He confirmed the BT interview schedule and then canceled it at the last minute again. He said he thinks the job at BT will cause him too much stress.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=409550&pg=ajx')">409550</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			1			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoho Kazama (44)<br>Network Engineer<br>HCL Japan Ltd.<br><br><i><p>He confirmed the BT interview schedule and then canceled it at the last minute again. He said he thinks the job at BT will cause him too much stress.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=409550&pg=ajx')">409550</a>
										</div>
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">O. Rondos</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			7			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Maki Ishizaki (46)<br>Pre-sales Consultant<br>KPMG Japan<br><br><i><p>Desiable annual salary for me is 7 million yen or higher. My current salary is 5.6 million yen.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=6001&pg=ajx')">6001</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Nishida (45)<br>Marketing Communications Consultant<br>Independant Consultant<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421252&pg=ajx')">421252</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saiko Inoue (41)<br>Corporate & Product PR<br>Gilt Group K.K.<br><br><i>Met today. Charming PR girl who definitely looks younger that his age. Cute and elegant. Unfortunately, her hoppy resume and her 3 years of unemployment makes her difficult to place. She is directionless and doesn\t sound like she has a core competency since she stayed only 2.5 years maximum in one company. She is now PR in a very small IT company. Dealing with analytics products promotion. She hates this job, low-paid and overtime. She definitely wants to go back to the fashion industry as PR.</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344975&pg=ajx')">344975</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kumi Sano (48)<br>Manager<br>Hitachi<br><br><i>Very aggressive pocket rocket.  Small in stature but has more energy than Fukushima Nuke Plant.  Been in various Communications roles, both Agency & Corporate side.  Hopped around a lot - the longest stint being 6 years.  Now at Hitachi Power systems as Manager of Global PR related to Energy / Power - mainly Nuke power but also Renewable Energy.  A lot of cross boarder communication with Europe & the US - JV between Hitachi & various including GE etc.  Spent a lot of time working with European c</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=209013&pg=ajx')">209013</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryuichiro Imasaka (47)<br>Senior Chief Designer<br> ILYA Corporation<br><br><i><p>NOTABLE PROJECTS:</p>
<p>2015. Sheraton Miyako Hotel Tokyo</p>
<p>2015. Kyoto Tokyu Hotel</p>
<p>2014. Kanazawa Tokyu Hotel</p>
<p>2014. Hotel Mount Fuji</p>
<p>2013. Izu-Imaihama Tokyu Hotel</p>
<p>2013. Olive bay Hotel 2012. Ritzcarlton Kyoto ~schematic design</p>
<p>2012. ANA Intercontinental Hotel Tokyo</p>
<p>2010. Hotel East 21 Tokyo</p>
<p>2009. ANA Intercontinental Ishigaki Resort</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421002&pg=ajx')">421002</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akira Honda (49)<br>Consultant, Presales<br>FPT JAPAN Co.,Ltd<br><br><i><p>Desiable annual salary for me is 7 million yen or higher. My current salary is 5.6 million yen.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413482&pg=ajx')">413482</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			6			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Maki Ishizaki (46)<br>Pre-sales Consultant<br>KPMG Japan<br><br><i><p>Desiable annual salary for me is 7 million yen or higher. My current salary is 5.6 million yen.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=6001&pg=ajx')">6001</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Nishida (45)<br>Marketing Communications Consultant<br>Independant Consultant<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421252&pg=ajx')">421252</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saiko Inoue (41)<br>Corporate & Product PR<br>Gilt Group K.K.<br><br><i>Met today. Charming PR girl who definitely looks younger that his age. Cute and elegant. Unfortunately, her hoppy resume and her 3 years of unemployment makes her difficult to place. She is directionless and doesn\t sound like she has a core competency since she stayed only 2.5 years maximum in one company. She is now PR in a very small IT company. Dealing with analytics products promotion. She hates this job, low-paid and overtime. She definitely wants to go back to the fashion industry as PR.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344975&pg=ajx')">344975</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kumi Sano (48)<br>Manager<br>Hitachi<br><br><i>Very aggressive pocket rocket.  Small in stature but has more energy than Fukushima Nuke Plant.  Been in various Communications roles, both Agency & Corporate side.  Hopped around a lot - the longest stint being 6 years.  Now at Hitachi Power systems as Manager of Global PR related to Energy / Power - mainly Nuke power but also Renewable Energy.  A lot of cross boarder communication with Europe & the US - JV between Hitachi & various including GE etc.  Spent a lot of time working with European c</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=209013&pg=ajx')">209013</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryuichiro Imasaka (47)<br>Senior Chief Designer<br> ILYA Corporation<br><br><i><p>NOTABLE PROJECTS:</p>
<p>2015. Sheraton Miyako Hotel Tokyo</p>
<p>2015. Kyoto Tokyu Hotel</p>
<p>2014. Kanazawa Tokyu Hotel</p>
<p>2014. Hotel Mount Fuji</p>
<p>2013. Izu-Imaihama Tokyu Hotel</p>
<p>2013. Olive bay Hotel 2012. Ritzcarlton Kyoto ~schematic design</p>
<p>2012. ANA Intercontinental Hotel Tokyo</p>
<p>2010. Hotel East 21 Tokyo</p>
<p>2009. ANA Intercontinental Ishigaki Resort</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421002&pg=ajx')">421002</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akira Honda (49)<br>Consultant, Presales<br>FPT JAPAN Co.,Ltd<br><br><i><p>Desiable annual salary for me is 7 million yen or higher. My current salary is 5.6 million yen.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413482&pg=ajx')">413482</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			3			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Maki Ishizaki (46)<br>Pre-sales Consultant<br>KPMG Japan<br><br><i><p>Desiable annual salary for me is 7 million yen or higher. My current salary is 5.6 million yen.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=6001&pg=ajx')">6001</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Nishida (45)<br>Marketing Communications Consultant<br>Independant Consultant<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421252&pg=ajx')">421252 (2)</a>
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
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadahiro Hayakawa (44)<br>Consultant<br>AREX Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415582&pg=ajx')">415582</a>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadahiro Hayakawa (44)<br>Consultant<br>AREX Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415582&pg=ajx')">415582</a>
										</div>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			3			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Maki Ishizaki (46)<br>Pre-sales Consultant<br>KPMG Japan<br><br><i><p>Desiable annual salary for me is 7 million yen or higher. My current salary is 5.6 million yen.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=6001&pg=ajx')">6001</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Nishida (45)<br>Marketing Communications Consultant<br>Independant Consultant<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421252&pg=ajx')">421252</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryuichiro Imasaka (47)<br>Senior Chief Designer<br> ILYA Corporation<br><br><i><p>NOTABLE PROJECTS:</p>
<p>2015. Sheraton Miyako Hotel Tokyo</p>
<p>2015. Kyoto Tokyu Hotel</p>
<p>2014. Kanazawa Tokyu Hotel</p>
<p>2014. Hotel Mount Fuji</p>
<p>2013. Izu-Imaihama Tokyu Hotel</p>
<p>2013. Olive bay Hotel 2012. Ritzcarlton Kyoto ~schematic design</p>
<p>2012. ANA Intercontinental Hotel Tokyo</p>
<p>2010. Hotel East 21 Tokyo</p>
<p>2009. ANA Intercontinental Ishigaki Resort</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421002&pg=ajx')">421002</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="-" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323143&pg=ajx')">323143</a>
										</div>
							<div class="hover_row  colored_row">
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			5			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masato Nakamura (33)<br>Operations Manager<br>Anheuser-Bush<br><br><i><p>DOB 1982/7/8<br />Salary 6 million yen, monthly base, no overtime subsidy, no bonus.</p>
<p> </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420750&pg=ajx')">420750</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rie Mikami (28)<br>Manager<br>Accenture Japan<br><br><i><p>Very good English. Sociable. Well spoken and shared information easily. Seems to be interested in moving to an internal role in marketing or strategy planning. Said also open to supply chain. And wants FMCG, Healthcare, or Ecommerce.</p>
<p> </p>
<p>Happy with 10M JPY. Not expecting an increase. Could consider less. At the moment no bonus. Wants to move by GW or right after as her project will be finished by then. Says its a good time to move.</p>
<p> </p>
<p>Has done a lot of project work</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421041&pg=ajx')">421041 (4)</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rie Mikami (28)<br>Manager<br>Accenture Japan<br><br><i><p>Very good English. Sociable. Well spoken and shared information easily. Seems to be interested in moving to an internal role in marketing or strategy planning. Said also open to supply chain. And wants FMCG, Healthcare, or Ecommerce.</p>
<p> </p>
<p>Happy with 10M JPY. Not expecting an increase. Could consider less. At the moment no bonus. Wants to move by GW or right after as her project will be finished by then. Says its a good time to move.</p>
<p> </p>
<p>Has done a lot of project work</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421041&pg=ajx')">421041</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Anna Skrypka (-)<br>Digital Marketing & eCommerce Manager APAC<br>Autodesk<br><br><i><p>Very good English. Sociable. Well spoken and shared information easily. Seems to be interested in moving to an internal role in marketing or strategy planning. Said also open to supply chain. And wants FMCG, Healthcare, or Ecommerce.</p>
<p> </p>
<p>Happy with 10M JPY. Not expecting an increase. Could consider less. At the moment no bonus. Wants to move by GW or right after as her project will be finished by then. Says its a good time to move.</p>
<p> </p>
<p>Has done a lot of project work</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420663&pg=ajx')">420663</a>
										</div>
							<div class="hover_row  colored_row2">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Franck Chesneau (35)<br>Technical Operations Manager<br>Janssen Pharmaceutical K.K.<br><br><i><p>saw his profile on bizreach</p>
<p> </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=362853&pg=ajx')">362853</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Franck Chesneau (35)<br>Technical Operations Manager<br>Janssen Pharmaceutical K.K.<br><br><i><p>saw his profile on bizreach</p>
<p> </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=362853&pg=ajx')">362853</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Aiko Morii (27)<br>Consultant<br>Nomura Research Institute, Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421130&pg=ajx')">421130</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazushi Eguchi (37)<br>Web developer<br>Wons Corporation<br><br><i><p>BizReach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421253&pg=ajx')">421253</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jinha Choi (28)<br>Brand Manager<br>Rakuten Inc.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=407455&pg=ajx')">407455</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yurie Ueda (-)<br>Senior Recruiter<br>PricewaterhouseCoopers Japan (PWC Japan)<br><br><i><p>Manages recruiting for Strategy$.  Please do not scout!</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421322&pg=ajx')">421322</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazushi Eguchi (37)<br>Web developer<br>Wons Corporation<br><br><i><p>BizReach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421253&pg=ajx')">421253</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jinha Choi (28)<br>Brand Manager<br>Rakuten Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=407455&pg=ajx')">407455</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yurie Ueda (-)<br>Senior Recruiter<br>PricewaterhouseCoopers Japan (PWC Japan)<br><br><i><p>Manages recruiting for Strategy$.  Please do not scout!</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421322&pg=ajx')">421322</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jian (Ken) Gong (38)<br>Industry Analyst<br>Huawei Japan<br><br><i><p>Manages recruiting for Strategy$.  Please do not scout!</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421096&pg=ajx')">421096</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			0			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jin Chen (34)<br>Strategy Consultant<br>SigmaXYZ Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=363225&pg=ajx')">363225</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jin Chen (34)<br>Strategy Consultant<br>SigmaXYZ Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=363225&pg=ajx')">363225</a>
										</div>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			3			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazushi Eguchi (37)<br>Web developer<br>Wons Corporation<br><br><i><p>BizReach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421253&pg=ajx')">421253</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jinha Choi (28)<br>Brand Manager<br>Rakuten Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=407455&pg=ajx')">407455</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yurie Ueda (-)<br>Senior Recruiter<br>PricewaterhouseCoopers Japan (PWC Japan)<br><br><i><p>Manages recruiting for Strategy$.  Please do not scout!</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421322&pg=ajx')">421322</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
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
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row even_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">R. Pedersen</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			10			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Matsumoto Nobutaka (57)<br>Solar Project Manager at Hilti (Japan)<br>Hilti Japan Ltd.<br><br><i><p>Linked In</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406152&pg=ajx')">406152</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori Mizunuma (44)<br>Senior Manager<br>Mitsubishi Estate Co., Ltd.<br><br><i><p>in charge of HR, but it is not his suitable job. He has worked as a real estate development projects  Developments such as condos, commercial malls, etc. negotiated with land owners. ran corporate finance projects.  He put together costs controls and decided on costs for unit sales. create the reports that the finance team used to solicit financing. managing sub contractors., negotiating with sub and land owners. negotiated land purchase agreements. has handled construction and civil constr</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421073&pg=ajx')">421073</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoichi Kiriishi (45)<br>Field Engineer<br>Hilti Japan Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351149&pg=ajx')">351149</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Cheng JU (29)<br>Civil Engineer<br>Hitachi Zosen Corporation<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421122&pg=ajx')">421122</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshihiro Imanari (48)<br>Controller<br>Richemont Group Cartier<br><br><i>Hi Philip,<br />
 <br />
I just signed an offer-letter from a certain company, and therefore, I don\t need to look for another opportunity for the time being.<br />
 <br />
Anyway, let\s keep in touch!<br />
 <br />
Best regards,<br />
Toshihiro IMANARI</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=159187&pg=ajx')">159187</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hisanao Kajiura (45)<br>Senior Director Project Management<br>CBRE Japan<br><br><i>Did not want to give out his salary.<br />
<br />
Has been in Construction industry for many years but recently moved to Autodesk.  He realizes it was a mistake.<br />
<br />
He is doing some sales and product development / marketing to help Autodesk understand the Construction industry in Japan.<br />
<br />
Wants to have more responsibility.  Enjoys being client facing and project management.<br />
<br />
Has good English and experience in global construction projects.<br />
<br />
Wants to ma</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=198151&pg=ajx')">198151</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenzo Inoue (29)<br>M&A Analyst<br>Pinnacle Inc.<br><br><i>Spoke to him ans Top shelf junior within M&A. 

Currently working with Pinnacle as a M&A Analyst for only 7 months but is open for better opps in terms of $$ and title and also company profile.

Worked with Bank of Tokyo Mitsubishi UFJ over 4 years within Structured Finance and corporate banking. He wants to build his career within M&A/PE. 

He is aware of whats happening in the market and has been approached by many HHs recently who have spoken to him about the same roles within IB and c</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=411937&pg=ajx')">411937</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hideki Nokariya (49)<br>Project Manager<br>Cushman & Wakefield K.K.<br><br><i><p>good for office relocation, quantity surveyor</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418812&pg=ajx')">418812</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kotaro Matsuura (43)<br>Senior Manager FP&A<br>MetLife Ltd.<br><br><i><p>Hi Matsuura-san,<br />I Will call you after 7OPM today.<br />Best regards,<br />Ray</p>
<p>-------------------------------------</p>
<p>Tel: +1-250-624-4660<br />Direct from Japan: +81-3-6666-4368<br />Canada Mobile: +1-250-641-9746<br />Japan Mobile: +81-(0)90-5519-7119</p>
<p>From: kotaro25 &lt;kotaro25@gmail.com&gt;<br />To: Ray Pedersen &lt;ray@slate-ghc.com&gt;<br />Sent: Wednesday, April 5, 2017 10:04:10 PM<br />Subject: Re: from Slate Tokyo</p>
<p>Hi Ray,</p>
<p>Thank you for your</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=21896&pg=ajx')">21896</a>
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
			11			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoichi Kiriishi (45)<br>Field Engineer<br>Hilti Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351149&pg=ajx')">351149</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Cheng JU (29)<br>Civil Engineer<br>Hitachi Zosen Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421122&pg=ajx')">421122</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshihiro Imanari (48)<br>Controller<br>Richemont Group Cartier<br><br><i>Hi Philip,<br />
 <br />
I just signed an offer-letter from a certain company, and therefore, I don\t need to look for another opportunity for the time being.<br />
 <br />
Anyway, let\s keep in touch!<br />
 <br />
Best regards,<br />
Toshihiro IMANARI</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=159187&pg=ajx')">159187</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hisanao Kajiura (45)<br>Senior Director Project Management<br>CBRE Japan<br><br><i>Did not want to give out his salary.<br />
<br />
Has been in Construction industry for many years but recently moved to Autodesk.  He realizes it was a mistake.<br />
<br />
He is doing some sales and product development / marketing to help Autodesk understand the Construction industry in Japan.<br />
<br />
Wants to have more responsibility.  Enjoys being client facing and project management.<br />
<br />
Has good English and experience in global construction projects.<br />
<br />
Wants to ma</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=198151&pg=ajx')">198151</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenzo Inoue (29)<br>M&A Analyst<br>Pinnacle Inc.<br><br><i>Spoke to him ans Top shelf junior within M&A. 

Currently working with Pinnacle as a M&A Analyst for only 7 months but is open for better opps in terms of $$ and title and also company profile.

Worked with Bank of Tokyo Mitsubishi UFJ over 4 years within Structured Finance and corporate banking. He wants to build his career within M&A/PE. 

He is aware of whats happening in the market and has been approached by many HHs recently who have spoken to him about the same roles within IB and c</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=411937&pg=ajx')">411937</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hideki Nokariya (49)<br>Project Manager<br>Cushman & Wakefield K.K.<br><br><i><p>good for office relocation, quantity surveyor</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418812&pg=ajx')">418812</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kotaro Matsuura (43)<br>Senior Manager FP&A<br>MetLife Ltd.<br><br><i><p>Hi Matsuura-san,<br />I Will call you after 7OPM today.<br />Best regards,<br />Ray</p>
<p>-------------------------------------</p>
<p>Tel: +1-250-624-4660<br />Direct from Japan: +81-3-6666-4368<br />Canada Mobile: +1-250-641-9746<br />Japan Mobile: +81-(0)90-5519-7119</p>
<p>From: kotaro25 &lt;kotaro25@gmail.com&gt;<br />To: Ray Pedersen &lt;ray@slate-ghc.com&gt;<br />Sent: Wednesday, April 5, 2017 10:04:10 PM<br />Subject: Re: from Slate Tokyo</p>
<p>Hi Ray,</p>
<p>Thank you for your</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=21896&pg=ajx')">21896</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masato Ichiyanagi (54)<br>Sales Managar<br>Sanyu Kiki Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420942&pg=ajx')">420942</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichiro Miura (46)<br>Director<br>Miurashin Architect<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421010&pg=ajx')">421010</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nomiko Sakashita (36)<br>Project Senior Engineer<br>Toyo Construction Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421012&pg=ajx')">421012</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			4			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Cheng JU (29)<br>Civil Engineer<br>Hitachi Zosen Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421122&pg=ajx')">421122 (2)</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomoko Matsuda (32)<br>Strategic Finance & Performance Analysis<br>AXA<br><br><i><p>Hi Matsuura-san,<br />I Will call you after 7OPM today.<br />Best regards,<br />Ray</p>
<p>-------------------------------------</p>
<p>Tel: +1-250-624-4660<br />Direct from Japan: +81-3-6666-4368<br />Canada Mobile: +1-250-641-9746<br />Japan Mobile: +81-(0)90-5519-7119</p>
<p>From: kotaro25 &lt;kotaro25@gmail.com&gt;<br />To: Ray Pedersen &lt;ray@slate-ghc.com&gt;<br />Sent: Wednesday, April 5, 2017 10:04:10 PM<br />Subject: Re: from Slate Tokyo</p>
<p>Hi Ray,</p>
<p>Thank you for your</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416376&pg=ajx')">416376</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Simon Chai (32)<br>Project manager<br>Canadian Solar Inc.<br><br><i><p>A title of manager is also very attractive for her.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421082&pg=ajx')">421082</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			0			</div>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			5			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoichi Kiriishi (45)<br>Field Engineer<br>Hilti Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351149&pg=ajx')">351149</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Cheng JU (29)<br>Civil Engineer<br>Hitachi Zosen Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421122&pg=ajx')">421122</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masato Ichiyanagi (54)<br>Sales Managar<br>Sanyu Kiki Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420942&pg=ajx')">420942</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichiro Miura (46)<br>Director<br>Miurashin Architect<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421010&pg=ajx')">421010</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nomiko Sakashita (36)<br>Project Senior Engineer<br>Toyo Construction Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421012&pg=ajx')">421012</a>
										</div>
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
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">S. D.V.</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			20			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dhruv Anand (38)<br>Client Partner (Sales and Delivery) Strategic Automotive Accounts<br>Tata Consultancy Services K.K.<br><br><i><p>Is quite satisfied at TCS&lt; but may move for a better position.&nbsp; Pitch AVP at HCL and Director at SFDC.</p>
<p>&nbsp;</p>
<p>Main areas are for Engineering Services, in manufacturing, automotive.&nbsp; Has done some IT related application sales, but feels more comfortable with embedded, engineering services.&nbsp; Good Japanese.&nbsp; Quite a strong character.&nbsp; Can be a bit abrupt.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=410257&pg=ajx')">410257</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Siva Prabu (38)<br>Business Development Manager<br>Harman International Japan Co., Ltd.<br><br><i>This guy is just a waste of time! I contacted him for a role we have right now! After I explained him the details he told me that he already joined TCS and g¥he starts next week as Business Development Manager.<br />
His Japanese is JLPT 2 and his main expertise is Embedded for Automotive.</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=368273&pg=ajx')">368273</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Siva Anand (33)<br>IT Consultant<br>TCS Japan<br><br><i><p>Phone assessed</p>
<p>Working at TCS about 11 years, came to Japan about 4 years ago. </p>
<p>Facing Airline industry for maintenance projects (ticketing , reservation systems and etc...)</p>
<p>Facing and has faced Emirates, Singapore Airlines and Japan Airlines</p>
<p>JLPT 4 at this moment.</p>
<p>Pitched IBS</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413958&pg=ajx')">413958</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chokri Allani (55)<br>Senior Consultant/Senior Program Manager<br>FreeLance<br><br><i>Larry Fry - 8131:    2013-Dec-11 11:13:19<br />
Currently a Project Manager at TCS for AIG. Is on contract but is wanting permanent position.<br />
<br />
Has ITIL, BPR and PMP.<br />
<br />
Quite good Japanese. May be good for 2nd or 3rd tier clients.<br />
<br />
--------------------------------------------------------------------------------------------<br />
Larry Fry - 8131:    2013-Nov-11 08:46:57<br />
VIA Career Cross</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=348507&pg=ajx')">348507</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiji Futatsugi (54)<br>Department Manager<br>Cognizant Technology Solutions (CTS)<br><br><i>E5.<br />
Has quite a long and deep history of IT for Insurance and banking.<br />
<br />
Started at Hitachi in 1988 and has worked for various parts of the company until 2012, Dec.<br />
<br />
Left Hitachi because he thought they were too conservative in their approach to technology and wanted to expand his knowledge.<br />
<br />
Joined Teradata, but he is frustrated they they were only able to get a small project in Kyushu.<br />
<br />
Has insurance Acord, BPM, FS-LDM certification.<br />
<</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=343073&pg=ajx')">343073</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sanjay Halmandge (44)<br>Business Development Manager EIS<br>Tata Consultancy Services K.K.<br><br><i>Been at Wipro for 3 or so years.  Mostly in Automotive area.   Is not interested in TCS><br />
<br />
Is mostly a pre-sales and delivery guy.  Would be very interested in non-Indian companies.  Experience with Mechancial CAD.  Wants more of a management role.</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344865&pg=ajx')">344865</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mike Hoo (40)<br>Senior IT Consultant<br>Tata Consultancy Services K.K.<br><br><i>Linked In.</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=402641&pg=ajx')">402641</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ramesh Dayyala (31)<br>Assistan System Engineer<br>Tata Consultancy Services K.K.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420206&pg=ajx')">420206</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Trey Hoffman (47)<br>Sr. Staff Administrator<br>Showa Aluminium Corporation<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420826&pg=ajx')">420826</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dongil Kang (42)<br>Oracle DBA<br>Tata Consultancy Services K.K.<br><br><i><p>Name collected by Larry (Larry met him in the previous company), assessed by one of our former colleague, then I reassessed him on last Friday. </p>
<p>Working onsite at Sony for Oracle DB maintenance and support through TCS.</p>
<p>HP will take over the project by end of this year, thinking to move</p>
<p>in process with Nikko security company for DB admin position</p>
<p>Open to both SIer and Internal roles</p>
<p>Will go for AIG</p>
<p>- 9 years experience in Oracle database administ</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=342603&pg=ajx')">342603</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Anil Kumar (30)<br>System Engineer<br>Tata Consultancy Services K.K.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420428&pg=ajx')">420428</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="praveenkumar nagarajan (38)<br><br>Tata Consultancy Services K.K.<br><br><i><p>Is currently in Infa side at TCS but has 11 years of experience in open source while at Infoview.</p>
<p>&nbsp;</p>
<p>Pitched Infosys and he has some interest.&nbsp; Wants to get back into applications side.</p>
<p>&nbsp;</p>
<p>Japanese is quite good and he also has a friend he will introduce.</p>
<p>&nbsp;</p>
<p>He was in a hurry so not much time to talk.</p>
<p>&nbsp;</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=402397&pg=ajx')">402397</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Palani Sundaram (38)<br>Onsite Coordinator<br>Tata Consultancy Services K.K.<br><br><i><p>Is in Northern Shiga, near Gifu.&nbsp; Has no real technical skills.&nbsp; Is a translator.&nbsp; Wants to move to a larger city to find schooling for his children.</p>
<p>&nbsp;</p>
<p>&nbsp;</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=363882&pg=ajx')">363882</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Abhijit Joshi (44)<br>SAP Project Manager<br>Tata Consultancy Services K.K.<br><br><i>Quite aggressive personality on the phone.<br />
<br />
Has worked for several projects in Japan, for TCS and Mitsubishi.<br />
<br />
Claims to have level2 Japanese skills.<br />
<br />
Mostly PP but also MM, is fine for any location.<br />
<br />
Has a valid work visa for Japan until Feb. 2013.<br />
<br />
WOuld prefer to do project management but if out side of India and better pay consulting is fine.<br />
<br />
Open to contract or full time.  Had already applied to T-systems.  Send resume</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=340140&pg=ajx')">340140</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Paul JoemonPaul (37)<br>Project Leader & Technical Architect<br>Quest Global Service<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417370&pg=ajx')">417370</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Srikanth Kaluvakota (35)<br>Vehicle Vibroacoustic Analyst<br>Tata Consultancy Services K.K.<br><br><i><p>Found him on LI</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421309&pg=ajx')">421309</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Priyanka Hansraj (41)<br>Project Coordinator for a Quality consulting project<br>Google Japan Inc.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=368755&pg=ajx')">368755</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Syed Touseef Ahmed (30)<br>Information Technology Analyst<br>Tata Consultancy Services K.K.<br><br><i><p>Found him on LI</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421318&pg=ajx')">421318</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kailash Malkani (35)<br>General Manager<br>Techno-Metal Co., Ltd.<br><br><i><p>Referred by Narashima Shenoy</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421305&pg=ajx')">421305</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Prathamesh Narvekar (30)<br>Deputy Head Assurance Services<br>Tata Consultancy Services K.K.<br><br><i><p>Linked In.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413114&pg=ajx')">413114</a>
										</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			18			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Siva Anand (33)<br>IT Consultant<br>TCS Japan<br><br><i><p>Phone assessed</p>
<p>Working at TCS about 11 years, came to Japan about 4 years ago. </p>
<p>Facing Airline industry for maintenance projects (ticketing , reservation systems and etc...)</p>
<p>Facing and has faced Emirates, Singapore Airlines and Japan Airlines</p>
<p>JLPT 4 at this moment.</p>
<p>Pitched IBS</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413958&pg=ajx')">413958</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chokri Allani (55)<br>Senior Consultant/Senior Program Manager<br>FreeLance<br><br><i>Larry Fry - 8131:    2013-Dec-11 11:13:19<br />
Currently a Project Manager at TCS for AIG. Is on contract but is wanting permanent position.<br />
<br />
Has ITIL, BPR and PMP.<br />
<br />
Quite good Japanese. May be good for 2nd or 3rd tier clients.<br />
<br />
--------------------------------------------------------------------------------------------<br />
Larry Fry - 8131:    2013-Nov-11 08:46:57<br />
VIA Career Cross</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=348507&pg=ajx')">348507</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiji Futatsugi (54)<br>Department Manager<br>Cognizant Technology Solutions (CTS)<br><br><i>E5.<br />
Has quite a long and deep history of IT for Insurance and banking.<br />
<br />
Started at Hitachi in 1988 and has worked for various parts of the company until 2012, Dec.<br />
<br />
Left Hitachi because he thought they were too conservative in their approach to technology and wanted to expand his knowledge.<br />
<br />
Joined Teradata, but he is frustrated they they were only able to get a small project in Kyushu.<br />
<br />
Has insurance Acord, BPM, FS-LDM certification.<br />
<</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=343073&pg=ajx')">343073</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sanjay Halmandge (44)<br>Business Development Manager EIS<br>Tata Consultancy Services K.K.<br><br><i>Been at Wipro for 3 or so years.  Mostly in Automotive area.   Is not interested in TCS><br />
<br />
Is mostly a pre-sales and delivery guy.  Would be very interested in non-Indian companies.  Experience with Mechancial CAD.  Wants more of a management role.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344865&pg=ajx')">344865</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mike Hoo (40)<br>Senior IT Consultant<br>Tata Consultancy Services K.K.<br><br><i>Linked In.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=402641&pg=ajx')">402641</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ramesh Dayyala (31)<br>Assistan System Engineer<br>Tata Consultancy Services K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420206&pg=ajx')">420206</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Trey Hoffman (47)<br>Sr. Staff Administrator<br>Showa Aluminium Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420826&pg=ajx')">420826</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dongil Kang (42)<br>Oracle DBA<br>Tata Consultancy Services K.K.<br><br><i><p>Name collected by Larry (Larry met him in the previous company), assessed by one of our former colleague, then I reassessed him on last Friday. </p>
<p>Working onsite at Sony for Oracle DB maintenance and support through TCS.</p>
<p>HP will take over the project by end of this year, thinking to move</p>
<p>in process with Nikko security company for DB admin position</p>
<p>Open to both SIer and Internal roles</p>
<p>Will go for AIG</p>
<p>- 9 years experience in Oracle database administ</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=342603&pg=ajx')">342603</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Anil Kumar (30)<br>System Engineer<br>Tata Consultancy Services K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420428&pg=ajx')">420428</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="praveenkumar nagarajan (38)<br><br>Tata Consultancy Services K.K.<br><br><i><p>Is currently in Infa side at TCS but has 11 years of experience in open source while at Infoview.</p>
<p>&nbsp;</p>
<p>Pitched Infosys and he has some interest.&nbsp; Wants to get back into applications side.</p>
<p>&nbsp;</p>
<p>Japanese is quite good and he also has a friend he will introduce.</p>
<p>&nbsp;</p>
<p>He was in a hurry so not much time to talk.</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=402397&pg=ajx')">402397</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Palani Sundaram (38)<br>Onsite Coordinator<br>Tata Consultancy Services K.K.<br><br><i><p>Is in Northern Shiga, near Gifu.&nbsp; Has no real technical skills.&nbsp; Is a translator.&nbsp; Wants to move to a larger city to find schooling for his children.</p>
<p>&nbsp;</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=363882&pg=ajx')">363882</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Abhijit Joshi (44)<br>SAP Project Manager<br>Tata Consultancy Services K.K.<br><br><i>Quite aggressive personality on the phone.<br />
<br />
Has worked for several projects in Japan, for TCS and Mitsubishi.<br />
<br />
Claims to have level2 Japanese skills.<br />
<br />
Mostly PP but also MM, is fine for any location.<br />
<br />
Has a valid work visa for Japan until Feb. 2013.<br />
<br />
WOuld prefer to do project management but if out side of India and better pay consulting is fine.<br />
<br />
Open to contract or full time.  Had already applied to T-systems.  Send resume</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=340140&pg=ajx')">340140</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Paul JoemonPaul (37)<br>Project Leader & Technical Architect<br>Quest Global Service<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417370&pg=ajx')">417370</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Srikanth Kaluvakota (35)<br>Vehicle Vibroacoustic Analyst<br>Tata Consultancy Services K.K.<br><br><i><p>Found him on LI</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421309&pg=ajx')">421309</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Priyanka Hansraj (41)<br>Project Coordinator for a Quality consulting project<br>Google Japan Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=368755&pg=ajx')">368755</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Syed Touseef Ahmed (30)<br>Information Technology Analyst<br>Tata Consultancy Services K.K.<br><br><i><p>Found him on LI</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421318&pg=ajx')">421318</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kailash Malkani (35)<br>General Manager<br>Techno-Metal Co., Ltd.<br><br><i><p>Referred by Narashima Shenoy</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421305&pg=ajx')">421305</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Prathamesh Narvekar (30)<br>Deputy Head Assurance Services<br>Tata Consultancy Services K.K.<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413114&pg=ajx')">413114</a>
										</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="521">
			10			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mike Hoo (40)<br>Senior IT Consultant<br>Tata Consultancy Services K.K.<br><br><i>Linked In.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=402641&pg=ajx')">402641</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ramesh Dayyala (31)<br>Assistan System Engineer<br>Tata Consultancy Services K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420206&pg=ajx')">420206</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Trey Hoffman (47)<br>Sr. Staff Administrator<br>Showa Aluminium Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420826&pg=ajx')">420826</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Anil Kumar (30)<br>System Engineer<br>Tata Consultancy Services K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420428&pg=ajx')">420428</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Paul JoemonPaul (37)<br>Project Leader & Technical Architect<br>Quest Global Service<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417370&pg=ajx')">417370</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Srikanth Kaluvakota (35)<br>Vehicle Vibroacoustic Analyst<br>Tata Consultancy Services K.K.<br><br><i><p>Found him on LI</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421309&pg=ajx')">421309</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Priyanka Hansraj (41)<br>Project Coordinator for a Quality consulting project<br>Google Japan Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=368755&pg=ajx')">368755</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Syed Touseef Ahmed (30)<br>Information Technology Analyst<br>Tata Consultancy Services K.K.<br><br><i><p>Found him on LI</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421318&pg=ajx')">421318</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kailash Malkani (35)<br>General Manager<br>Techno-Metal Co., Ltd.<br><br><i><p>Referred by Narashima Shenoy</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421305&pg=ajx')">421305</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Prathamesh Narvekar (30)<br>Deputy Head Assurance Services<br>Tata Consultancy Services K.K.<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413114&pg=ajx')">413114</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
		<td class="name_column revenueSize">V. Maslyuk</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			11			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Junya Kitamura (44)<br>Manager<br>Sulzer Metco Japan Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404581&pg=ajx')">404581</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chiun-Wei Hung (-)<br>Process Engineer<br>Micron Technology Corp.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421334&pg=ajx')">421334</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eiichi Shinozaki (-)<br>Process Engineer<br>Lam Research Japan Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421271&pg=ajx')">421271</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryoichi Hayashi (-)<br>Sales manager<br>Daikyo Seiko, Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421332&pg=ajx')">421332</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akio Yuza (36)<br>Technical manager<br>BASF Japan Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420614&pg=ajx')">420614</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazuya Betsumiya (25)<br>Engineer<br>Procter & Gamble<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421245&pg=ajx')">421245</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryuichi Ishihara (38)<br>Project Engineer<br>Mitsubishi Electric<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421263&pg=ajx')">421263</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuji Hosoi (50)<br>Sales manager<br>Hoya Corporation<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421218&pg=ajx')">421218</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryosuke Yamamura (34)<br>New Business Manager / Engineering Manager<br>Denso Corporation<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420825&pg=ajx')">420825</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Suguru Matsuzawa (38)<br>Engineering Manager<br>UCB JAPAN<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421325&pg=ajx')">421325</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinjiro Beni (44)<br>Sales manager<br>ASICS Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=361323&pg=ajx')">361323</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			7			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akio Yuza (36)<br>Technical manager<br>BASF Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420614&pg=ajx')">420614</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazuya Betsumiya (25)<br>Engineer<br>Procter & Gamble<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421245&pg=ajx')">421245</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryuichi Ishihara (38)<br>Project Engineer<br>Mitsubishi Electric<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421263&pg=ajx')">421263</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuji Hosoi (50)<br>Sales manager<br>Hoya Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421218&pg=ajx')">421218</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryosuke Yamamura (34)<br>New Business Manager / Engineering Manager<br>Denso Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420825&pg=ajx')">420825</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Suguru Matsuzawa (38)<br>Engineering Manager<br>UCB JAPAN<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421325&pg=ajx')">421325</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinjiro Beni (44)<br>Sales manager<br>ASICS Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=361323&pg=ajx')">361323</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			2			</div>
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
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Junichi Yonezu (44)<br>Sales Manager Japan<br>Dow Corning<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412417&pg=ajx')">412417</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomohiko Kimura (46)<br>Director<br>Getinge Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417918&pg=ajx')">417918</a>
										</div>
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
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="130">
			7			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akio Yuza (36)<br>Technical manager<br>BASF Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420614&pg=ajx')">420614</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazuya Betsumiya (25)<br>Engineer<br>Procter & Gamble<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421245&pg=ajx')">421245</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryuichi Ishihara (38)<br>Project Engineer<br>Mitsubishi Electric<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421263&pg=ajx')">421263</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuji Hosoi (50)<br>Sales manager<br>Hoya Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421218&pg=ajx')">421218</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryosuke Yamamura (34)<br>New Business Manager / Engineering Manager<br>Denso Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420825&pg=ajx')">420825</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Suguru Matsuzawa (38)<br>Engineering Manager<br>UCB JAPAN<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421325&pg=ajx')">421325</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinjiro Beni (44)<br>Sales manager<br>ASICS Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=361323&pg=ajx')">361323</a>
										</div>
							<div class="hover_row  colored_row2">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
		<td class="name_column revenueSize">Y. Kubota</td>
		<td>
			<div class="stat_holder revenueSize2" id="524">
			11			</div>
			<div class="stat_candi_info 524">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Hirano (41)<br>Senior FP&A<br>AbbVie<br><br><i><p>4th company he is serving, presently Budget Controller at Chugai Pharmaceutical. After he moved to Chugai, took MBA at Meiji Univ. and moved to financial analyst position from Biostatistics. Placeable if English requirement is not high. Complete resume will provide me soon. Hinted Senior FP&amp;A position at TRW and Finance Manager position at AMGEN, and agreed to send him relevant JDs.<br />8.3 million Yen salary includes seasonal bonus and housing allowance (90K monthly).<br />His skill may</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=313692&pg=ajx')">313692</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Misaki Yano (35)<br>Research associate<br>University of Yamanashi<br><br><i><p>矢野　岬</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421303&pg=ajx')">421303</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akihiro Nakamura (43)<br>Researcher<br>Takeda Pharmaceutical Co., Ltd.<br><br><i><p>中村　晃裕</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421304&pg=ajx')">421304</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasushi Sakio (48)<br>Finance Consultant<br>Self Employed<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=79301&pg=ajx')">79301</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomoharu Kojima (42)<br>Project Manager<br>YL Biologics Inc<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421308&pg=ajx')">421308</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasufumi Wada (36)<br>Medicinal Chemist<br>Takeda Pharmaceutical Co., Ltd.<br><br><i><p><strong><span style=text-decoration:underline;>Additional Notes</span>:</strong></p>
<p> </p>
<p>TA focus in terms of experience and expertise:  CNS, Inflammation, Immunology, Oncology (minor)</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420025&pg=ajx')">420025</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shoko Honda (35)<br>Specialist<br>GlaxoSmithKline K.K. (GSK)<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351808&pg=ajx')">351808</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takehiro Shinozaki (41)<br>Project Leader<br>Kyorin Pharmaceutical Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=359204&pg=ajx')">359204</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taro Kawakami (47)<br>Senior Specialist<br>MSD K.K.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=363171&pg=ajx')">363171</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masashi Fukuda (42)<br>manager<br>Teva Pharmaceutical<br><br><i>after graduated Univ, He joined in Taiyo Pharma.<br />
worked for maintenance and conservation of all electrical equipments in Takayama plant.<br />
currently as a manager, in charge of managing facility, equipment,air conditioning and　other <br />
utilities. managing 2 people. lives in Takayama eith his wife and two kids who are 7 YO and 3 YO.<br />
He can move the house if he decide to change the job. Since acquisition between Taiyo and TEVA, working situation looks like getting bad, so MP i</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=345420&pg=ajx')">345420</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hidekazu Ito (42)<br>Manager<br>UCB Japan<br><br><i><p>伊東秀和</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=233333&pg=ajx')">233333</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="524">
			5			</div>
			<div class="stat_candi_info 524">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shoko Honda (35)<br>Specialist<br>GlaxoSmithKline K.K. (GSK)<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351808&pg=ajx')">351808</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takehiro Shinozaki (41)<br>Project Leader<br>Kyorin Pharmaceutical Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=359204&pg=ajx')">359204</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taro Kawakami (47)<br>Senior Specialist<br>MSD K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=363171&pg=ajx')">363171</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masashi Fukuda (42)<br>manager<br>Teva Pharmaceutical<br><br><i>after graduated Univ, He joined in Taiyo Pharma.<br />
worked for maintenance and conservation of all electrical equipments in Takayama plant.<br />
currently as a manager, in charge of managing facility, equipment,air conditioning and　other <br />
utilities. managing 2 people. lives in Takayama eith his wife and two kids who are 7 YO and 3 YO.<br />
He can move the house if he decide to change the job. Since acquisition between Taiyo and TEVA, working situation looks like getting bad, so MP i</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=345420&pg=ajx')">345420</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hidekazu Ito (42)<br>Manager<br>UCB Japan<br><br><i><p>伊東秀和</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=233333&pg=ajx')">233333</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="524">
			0			</div>
			<div class="stat_candi_info 524">
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
			<div class="stat_holder revenueSize2" id="524">
			1			</div>
			<div class="stat_candi_info 524">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hisako Furuta (53)<br>Manager<br>Schneider Electric Japan Co., Ltd.<br><br><i><p>伊東秀和</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412916&pg=ajx')">412916</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="524">
			0			</div>
			<div class="stat_candi_info 524">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="524">
			0			</div>
			<div class="stat_candi_info 524">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="524">
			0			</div>
			<div class="stat_candi_info 524">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="524">
			0			</div>
			<div class="stat_candi_info 524">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="524">
			0			</div>
			<div class="stat_candi_info 524">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="524">
			3			</div>
			<div class="stat_candi_info 524">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shoko Honda (35)<br>Specialist<br>GlaxoSmithKline K.K. (GSK)<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351808&pg=ajx')">351808</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takehiro Shinozaki (41)<br>Project Leader<br>Kyorin Pharmaceutical Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=359204&pg=ajx')">359204</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taro Kawakami (47)<br>Senior Specialist<br>MSD K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=363171&pg=ajx')">363171</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="524">
			0			</div>
			<div class="stat_candi_info 524">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="524">
			0			</div>
			<div class="stat_candi_info 524">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="524">
			0			</div>
			<div class="stat_candi_info 524">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="524">
			0			</div>
			<div class="stat_candi_info 524">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
		<td class="name_column revenueSize">Y. Takagi</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			5			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kondo Midori (29)<br>CRA<br>ICON Japan K.K.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421238&pg=ajx')">421238</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tetsuya Otani (43)<br>Regional Medical Monitor<br>AbbVie<br><br><i><p>Jean met Tuesday 24th February 2015 at 11:45 in Starbucks Cafe Tamachi St. Nishiguchi.</p>
<p>He is quite tall, about 185cm, young (1973) and friendly, kind of geek vibe. His English is pretty weak, he doesnt have any clear expectation for his future and is just moving around depending on what is on the market.</p>
<p>Since Jul 2014, working as Regional Medical Monitor, Clinical development in AbbVie. In charge of safety monitoring in ongoing clinical trials, including a local site communi</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=305900&pg=ajx')">305900</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Noriyuki Yamamoto (-)<br>Head<br>Bayer Ltd.<br><br><i>山本倫行</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=117874&pg=ajx')">117874</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hanako Mihara (41)<br>Director<br>MSD K.K.<br><br><i><p>Very nice young lady, young and dynamic, good English. Very friendly. We shared our opinion on the Dr she met during her interviews with BMS, Novartis, Janssen, and Amgen.</p>
<p>Graduated from Fukushima Medical University, MD . MPH from Harvard T.H. Chan School of Public Health in 2004. PhD of Public Health from Kyoto University in 2008.</p>
<p>Medical Intern in the US Navy in Apr 2000. In May 2001, Resident in Kameda Medical Center. In June 2004, Harvard T.H. Chan as Research Assistant, D</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=405631&pg=ajx')">405631</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seika McCoy (24)<br>Clinical Research Associate<br>CMIC Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421284&pg=ajx')">421284</a>
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
			<div class="stat_holder revenueSize2" id="347">
			7			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hanako Mihara (41)<br>Director<br>MSD K.K.<br><br><i><p>Very nice young lady, young and dynamic, good English. Very friendly. We shared our opinion on the Dr she met during her interviews with BMS, Novartis, Janssen, and Amgen.</p>
<p>Graduated from Fukushima Medical University, MD . MPH from Harvard T.H. Chan School of Public Health in 2004. PhD of Public Health from Kyoto University in 2008.</p>
<p>Medical Intern in the US Navy in Apr 2000. In May 2001, Resident in Kameda Medical Center. In June 2004, Harvard T.H. Chan as Research Assistant, D</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=405631&pg=ajx')">405631</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seika McCoy (24)<br>Clinical Research Associate<br>CMIC Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421284&pg=ajx')">421284</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hitoshi Matsushita (-)<br>Researcher<br>Otsuka Pharmaceutical Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=401925&pg=ajx')">401925</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rie Ishihara (26)<br>Clinical Research Associate<br>CMIC Co., Ltd.<br><br><i><p>Clinical Research Associate<br />CMIC HOLDINGS<br />April 2013 &ndash; Present (3 years 4 months)<br />Intern<br />Fitness Over 50<br />2012 &ndash; 2012 (less than a year)Oregon<br />Summer Internship<br />Bpm Physical Therapy Center<br />June 2011 &ndash; August 2011 (3 months)Oregon<br />Summer Intern<br />Chemeketa Community College<br />June 2011 &ndash; August 2011 (3 months)Oregon<br />Education<br />Oregon State University<br />Oregon State University<br />Bachelor of Applied Science</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417026&pg=ajx')">417026</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuta Sakakibara (39)<br>Bioinformatics Scientist<br>kyowahakko kirin<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421050&pg=ajx')">421050</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Suzuka (34)<br>Senior PMS officer<br>Merck Serono Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421040&pg=ajx')">421040</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Márcio Makoto Nishida (36)<br>Doctoral Student<br>Kyoto University<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421149&pg=ajx')">421149</a>
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
			0			</div>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			0			</div>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			6			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seika McCoy (24)<br>Clinical Research Associate<br>CMIC Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421284&pg=ajx')">421284</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hitoshi Matsushita (-)<br>Researcher<br>Otsuka Pharmaceutical Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=401925&pg=ajx')">401925</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rie Ishihara (26)<br>Clinical Research Associate<br>CMIC Co., Ltd.<br><br><i><p>Clinical Research Associate<br />CMIC HOLDINGS<br />April 2013 &ndash; Present (3 years 4 months)<br />Intern<br />Fitness Over 50<br />2012 &ndash; 2012 (less than a year)Oregon<br />Summer Internship<br />Bpm Physical Therapy Center<br />June 2011 &ndash; August 2011 (3 months)Oregon<br />Summer Intern<br />Chemeketa Community College<br />June 2011 &ndash; August 2011 (3 months)Oregon<br />Education<br />Oregon State University<br />Oregon State University<br />Bachelor of Applied Science</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417026&pg=ajx')">417026</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuta Sakakibara (39)<br>Bioinformatics Scientist<br>kyowahakko kirin<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421050&pg=ajx')">421050</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Suzuka (34)<br>Senior PMS officer<br>Merck Serono Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421040&pg=ajx')">421040</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Márcio Makoto Nishida (36)<br>Doctoral Student<br>Kyoto University<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421149&pg=ajx')">421149</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="-" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420864&pg=ajx')">420864</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (33)<br>CRA<br>AstraZeneca K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masashi Sato (28)<br>Biostat<br>EPS Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421220&pg=ajx')">421220</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (33)<br>CRA<br>AstraZeneca K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
										</div>
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
			55		</td>
		<td class='revenueSize3'>
			6		</td>
		<td class='revenueSize3'>
			1		</td>
		<td class='revenueSize3'>
			4		</td>
		<td class='revenueSize3'>
			3		</td>
	</tr>
</table>

<div class="general_form_row" style="height: 20px;"></div>
	<table id="totals_table_id" class="totals_table">
	<tr>
		<th class='revenueSize0' colspan="15">Researcher totals - Apr 2017</th>
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
			15			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Usukura Yasutaka (40)<br>Electronics engineer<br>itk-engineering AG<br><br><i><p>roughly 50 y/o.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420456&pg=ajx')">420456</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akira Terakawa (48)<br>Project Leader<br>Panasonic<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421233&pg=ajx')">421233</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Matsumoto Nobutaka (57)<br>Solar Project Manager at Hilti (Japan)<br>Hilti Japan Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406152&pg=ajx')">406152</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="kenji kawaguchi (44)<br>Sales and Account Manager<br>Kotobukiya Fronte Co., Ltd.<br><br><i><p>Linked In</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420761&pg=ajx')">420761</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hironori Yaguchi (29)<br>Development project Engineer<br>City of Yokohama<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421250&pg=ajx')">421250</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Niiro Kaoru (32)<br>Product Engineer<br>Toshiba<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421296&pg=ajx')">421296</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takafumi Sasai (-)<br>Senior System Engineer<br>Etrion Corporation<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421299&pg=ajx')">421299</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori Mizunuma (44)<br>Senior Manager<br>Mitsubishi Estate Co., Ltd.<br><br><i><p>Linked In</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421073&pg=ajx')">421073</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoichi Kiriishi (45)<br>Field Engineer<br>Hilti Japan Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351149&pg=ajx')">351149</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Narimitsu Nagase (32)<br>Sealing Sales<br>Wolverine Japan Inc.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421251&pg=ajx')">421251</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Cheng JU (29)<br>Civil Engineer<br>Hitachi Zosen Corporation<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421122&pg=ajx')">421122</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryuichiro Imasaka (47)<br>Senior Chief Designer<br> ILYA Corporation<br><br><i><p>NOTABLE PROJECTS:</p>
<p>2015. Sheraton Miyako Hotel Tokyo</p>
<p>2015. Kyoto Tokyu Hotel</p>
<p>2014. Kanazawa Tokyu Hotel</p>
<p>2014. Hotel Mount Fuji</p>
<p>2013. Izu-Imaihama Tokyu Hotel</p>
<p>2013. Olive bay Hotel 2012. Ritzcarlton Kyoto ~schematic design</p>
<p>2012. ANA Intercontinental Hotel Tokyo</p>
<p>2010. Hotel East 21 Tokyo</p>
<p>2009. ANA Intercontinental Ishigaki Resort</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421002&pg=ajx')">421002</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hisanao Kajiura (45)<br>Senior Director Project Management<br>CBRE Japan<br><br><i><p>NOTABLE PROJECTS:</p>
<p>2015. Sheraton Miyako Hotel Tokyo</p>
<p>2015. Kyoto Tokyu Hotel</p>
<p>2014. Kanazawa Tokyu Hotel</p>
<p>2014. Hotel Mount Fuji</p>
<p>2013. Izu-Imaihama Tokyu Hotel</p>
<p>2013. Olive bay Hotel 2012. Ritzcarlton Kyoto ~schematic design</p>
<p>2012. ANA Intercontinental Hotel Tokyo</p>
<p>2010. Hotel East 21 Tokyo</p>
<p>2009. ANA Intercontinental Ishigaki Resort</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=198151&pg=ajx')">198151</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hideki Nokariya (49)<br>Project Manager<br>Cushman & Wakefield K.K.<br><br><i>Did not want to give out his salary.<br />
<br />
Has been in Construction industry for many years but recently moved to Autodesk.  He realizes it was a mistake.<br />
<br />
He is doing some sales and product development / marketing to help Autodesk understand the Construction industry in Japan.<br />
<br />
Wants to have more responsibility.  Enjoys being client facing and project management.<br />
<br />
Has good English and experience in global construction projects.<br />
<br />
Wants to ma</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418812&pg=ajx')">418812</a>
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
			7			</div>
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
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoichi Kiriishi (45)<br>Field Engineer<br>Hilti Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351149&pg=ajx')">351149</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Narimitsu Nagase (32)<br>Sealing Sales<br>Wolverine Japan Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421251&pg=ajx')">421251</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Cheng JU (29)<br>Civil Engineer<br>Hitachi Zosen Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421122&pg=ajx')">421122</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryuichiro Imasaka (47)<br>Senior Chief Designer<br> ILYA Corporation<br><br><i><p>NOTABLE PROJECTS:</p>
<p>2015. Sheraton Miyako Hotel Tokyo</p>
<p>2015. Kyoto Tokyu Hotel</p>
<p>2014. Kanazawa Tokyu Hotel</p>
<p>2014. Hotel Mount Fuji</p>
<p>2013. Izu-Imaihama Tokyu Hotel</p>
<p>2013. Olive bay Hotel 2012. Ritzcarlton Kyoto ~schematic design</p>
<p>2012. ANA Intercontinental Hotel Tokyo</p>
<p>2010. Hotel East 21 Tokyo</p>
<p>2009. ANA Intercontinental Ishigaki Resort</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421002&pg=ajx')">421002</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masato Ichiyanagi (54)<br>Sales Managar<br>Sanyu Kiki Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420942&pg=ajx')">420942</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichiro Miura (46)<br>Director<br>Miurashin Architect<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421010&pg=ajx')">421010</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nomiko Sakashita (36)<br>Project Senior Engineer<br>Toyo Construction Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421012&pg=ajx')">421012</a>
										</div>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Cheng JU (29)<br>Civil Engineer<br>Hitachi Zosen Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421122&pg=ajx')">421122</a>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			7			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoichi Kiriishi (45)<br>Field Engineer<br>Hilti Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351149&pg=ajx')">351149</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Narimitsu Nagase (32)<br>Sealing Sales<br>Wolverine Japan Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421251&pg=ajx')">421251</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Cheng JU (29)<br>Civil Engineer<br>Hitachi Zosen Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421122&pg=ajx')">421122</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryuichiro Imasaka (47)<br>Senior Chief Designer<br> ILYA Corporation<br><br><i><p>NOTABLE PROJECTS:</p>
<p>2015. Sheraton Miyako Hotel Tokyo</p>
<p>2015. Kyoto Tokyu Hotel</p>
<p>2014. Kanazawa Tokyu Hotel</p>
<p>2014. Hotel Mount Fuji</p>
<p>2013. Izu-Imaihama Tokyu Hotel</p>
<p>2013. Olive bay Hotel 2012. Ritzcarlton Kyoto ~schematic design</p>
<p>2012. ANA Intercontinental Hotel Tokyo</p>
<p>2010. Hotel East 21 Tokyo</p>
<p>2009. ANA Intercontinental Ishigaki Resort</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421002&pg=ajx')">421002</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masato Ichiyanagi (54)<br>Sales Managar<br>Sanyu Kiki Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420942&pg=ajx')">420942</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichiro Miura (46)<br>Director<br>Miurashin Architect<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421010&pg=ajx')">421010</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nomiko Sakashita (36)<br>Project Senior Engineer<br>Toyo Construction Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421012&pg=ajx')">421012</a>
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
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row even_row">
	<!--<td>researcher</td>-->
	<!--<td>Researcher</td>-->
		<td class="name_column revenueSize">D. Kadyrbekov</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			9			</div>
			<div class="stat_candi_info 522">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuki Maeda (28)<br>Research Associate<br>Morgan Stanley<br><br><i><p>A title of manager is also very attractive for her.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421236&pg=ajx')">421236</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shentao Tang (23)<br>Analyst<br>Morgan Stanley<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421262&pg=ajx')">421262</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Xuanyue He (28)<br>Analyst<br>SMBC Nikko Securities<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421195&pg=ajx')">421195</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Xuming Tao (29)<br>Associate Director<br>USB<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421274&pg=ajx')">421274</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaro Tanaka (30)<br>Analytic<br>Bloomberg Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421289&pg=ajx')">421289</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hirotaka Kusama (25)<br>Analyst<br>Barclays<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421306&pg=ajx')">421306</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuya Hirashima (-)<br>Analyst<br>Lincoln International<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=328792&pg=ajx')">328792</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Haixia Wang (29)<br>Analyst<br>Nordea<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421327&pg=ajx')">421327</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ippei Yamaura (32)<br>Trader<br>Mizuho Securities Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421328&pg=ajx')">421328</a>
										</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
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
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
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
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
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
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="522">
			0			</div>
			<div class="stat_candi_info 522">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
	<!--<td>researcher</td>-->
	<!--<td>Researcher</td>-->
		<td class="name_column revenueSize">P. Greeff</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			2			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dau Hai (29)<br>Account Manager<br>FPT Software<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421270&pg=ajx')">421270</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Aiko Morii (27)<br>Consultant<br>Nomura Research Institute, Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421130&pg=ajx')">421130</a>
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
			<div class="stat_holder revenueSize2" id="480">
			1			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Iwata (45)<br>Senior Manager,Business Development, Service Provider Business<br>EMC<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421225&pg=ajx')">421225</a>
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
			<div class="stat_holder revenueSize2" id="480">
			4			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rie Mikami (28)<br>Manager<br>Accenture Japan<br><br><i><p>Lives in Port Hardy, has been out of work for 7 month as Black &amp; McDonald doesnt have any ongoing projects. Has over 15 years experience in building logging roads in BC. Built about 550km of roads. Has drilling experience and has managed up to 70 people. Built a Sub station in Brooks Alberta where he was in charge of earthworks. Has experience with multi million dollar projects from take-off to handover. Salary expectation $90K - $100k. Willing to relocate and knows Prince Rupert. Has op</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421041&pg=ajx')">421041</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			3			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rie Mikami (28)<br>Manager<br>Accenture Japan<br><br><i><p>Lives in Port Hardy, has been out of work for 7 month as Black &amp; McDonald doesnt have any ongoing projects. Has over 15 years experience in building logging roads in BC. Built about 550km of roads. Has drilling experience and has managed up to 70 people. Built a Sub station in Brooks Alberta where he was in charge of earthworks. Has experience with multi million dollar projects from take-off to handover. Salary expectation $90K - $100k. Willing to relocate and knows Prince Rupert. Has op</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421041&pg=ajx')">421041</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremy Sandeman (44)<br>Superintendent / Project Manager<br>Black & McDonald Limited<br><br><i><p>Lives in Port Hardy, has been out of work for 7 month as Black &amp; McDonald doesnt have any ongoing projects. Has over 15 years experience in building logging roads in BC. Built about 550km of roads. Has drilling experience and has managed up to 70 people. Built a Sub station in Brooks Alberta where he was in charge of earthworks. Has experience with multi million dollar projects from take-off to handover. Salary expectation $90K - $100k. Willing to relocate and knows Prince Rupert. Has op</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420542&pg=ajx')">420542</a>
										</div>
							<div class="hover_row colored_row">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Iwata (45)<br>Senior Manager,Business Development, Service Provider Business<br>EMC<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421225&pg=ajx')">421225</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row even_row">
	<!--<td>researcher</td>-->
	<!--<td>Researcher</td>-->
		<td class="name_column revenueSize">T. Tanigawa</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			5			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kondo Midori (29)<br>CRA<br>ICON Japan K.K.<br><br><i><p>Very good English. Sociable. Well spoken and shared information easily. Seems to be interested in moving to an internal role in marketing or strategy planning. Said also open to supply chain. And wants FMCG, Healthcare, or Ecommerce.</p>
<p> </p>
<p>Happy with 10M JPY. Not expecting an increase. Could consider less. At the moment no bonus. Wants to move by GW or right after as her project will be finished by then. Says its a good time to move.</p>
<p> </p>
<p>Has done a lot of project work</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421238&pg=ajx')">421238</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasufumi Wada (36)<br>Medicinal Chemist<br>Takeda Pharmaceutical Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420025&pg=ajx')">420025</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Noriyuki Yamamoto (-)<br>Head<br>Bayer Ltd.<br><br><i><p><strong><span style=text-decoration:underline;>Additional Notes</span>:</strong></p>
<p> </p>
<p>TA focus in terms of experience and expertise:  CNS, Inflammation, Immunology, Oncology (minor)</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=117874&pg=ajx')">117874</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hanako Mihara (41)<br>Director<br>MSD K.K.<br><br><i>山本倫行</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=405631&pg=ajx')">405631</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seika McCoy (24)<br>Clinical Research Associate<br>CMIC Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421284&pg=ajx')">421284</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			6			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seika McCoy (24)<br>Clinical Research Associate<br>CMIC Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421284&pg=ajx')">421284</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hitoshi Matsushita (-)<br>Researcher<br>Otsuka Pharmaceutical Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=401925&pg=ajx')">401925</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rie Ishihara (26)<br>Clinical Research Associate<br>CMIC Co., Ltd.<br><br><i><p>Clinical Research Associate<br />CMIC HOLDINGS<br />April 2013 &ndash; Present (3 years 4 months)<br />Intern<br />Fitness Over 50<br />2012 &ndash; 2012 (less than a year)Oregon<br />Summer Internship<br />Bpm Physical Therapy Center<br />June 2011 &ndash; August 2011 (3 months)Oregon<br />Summer Intern<br />Chemeketa Community College<br />June 2011 &ndash; August 2011 (3 months)Oregon<br />Education<br />Oregon State University<br />Oregon State University<br />Bachelor of Applied Science</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417026&pg=ajx')">417026</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Suzuka (34)<br>Senior PMS officer<br>Merck Serono Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421040&pg=ajx')">421040</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuta Sakakibara (39)<br>Bioinformatics Scientist<br>kyowahakko kirin<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421050&pg=ajx')">421050</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Márcio Makoto Nishida (36)<br>Doctoral Student<br>Kyoto University<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421149&pg=ajx')">421149</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
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
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
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
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			6			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seika McCoy (24)<br>Clinical Research Associate<br>CMIC Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421284&pg=ajx')">421284</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hitoshi Matsushita (-)<br>Researcher<br>Otsuka Pharmaceutical Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=401925&pg=ajx')">401925</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rie Ishihara (26)<br>Clinical Research Associate<br>CMIC Co., Ltd.<br><br><i><p>Clinical Research Associate<br />CMIC HOLDINGS<br />April 2013 &ndash; Present (3 years 4 months)<br />Intern<br />Fitness Over 50<br />2012 &ndash; 2012 (less than a year)Oregon<br />Summer Internship<br />Bpm Physical Therapy Center<br />June 2011 &ndash; August 2011 (3 months)Oregon<br />Summer Intern<br />Chemeketa Community College<br />June 2011 &ndash; August 2011 (3 months)Oregon<br />Education<br />Oregon State University<br />Oregon State University<br />Bachelor of Applied Science</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417026&pg=ajx')">417026</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Suzuka (34)<br>Senior PMS officer<br>Merck Serono Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421040&pg=ajx')">421040</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuta Sakakibara (39)<br>Bioinformatics Scientist<br>kyowahakko kirin<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421050&pg=ajx')">421050</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Márcio Makoto Nishida (36)<br>Doctoral Student<br>Kyoto University<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=421149&pg=ajx')">421149</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			1			</div>
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="-" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420864&pg=ajx')">420864</a>
										</div>
							<div class="hover_row  colored_row2">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			1			</div>
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (33)<br>CRA<br>AstraZeneca K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			1			</div>
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (33)<br>CRA<br>AstraZeneca K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
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
			14		</td>
		<td class='revenueSize3'>
			1		</td>
		<td class='revenueSize3'>
			0		</td>
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