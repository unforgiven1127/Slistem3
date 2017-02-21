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
		<td class="name_column revenueSize">C. Chen</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			10			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Satoshi Yamazaki (44)<br>Compliance Officer<br>HSBC<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=411314&pg=ajx')">411314</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eiji Omae (-)<br>Account Executive<br>AIU Insurance Company<br><br><i><p>Axial Solutions - in F2F at Slate conference room, told her they will offer her. Her remain 2 weeks patient as Global Sales Director speaks to HQ.</p>
<p>4 weeks later they said they were interested in a cheaper candidate.</p>
<p>Obviously this hurt her and wasted her time.  As she perfectly matched the role and was within their stated budget.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420419&pg=ajx')">420419</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ricky Kim (-)<br>Manager, Merchant Sales and Solutions<br>VISA Int<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420628&pg=ajx')">420628</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hayato Tsuchikawa (37)<br>Chief Risk Officer<br>Zurich Insurance Company Limted<br><br><i><p>Met in person for lunch. Well presented, not the most forthcoming in person, but warmed up after a while. Very happy with Zurich, and has excelled extremely well in his career. Ambitious and wants high level opportunities as well as money.</p>
<p>Making 14.6M base right now, with 18.6M total. Said he wants 20M to consider leaving. &nbsp;</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=339183&pg=ajx')">339183</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masayuki Sakai (-)<br>Head of Application Development<br>Manulife Life Insurance Company (Japan)<br><br><i><p>wrong input of assessment notes, please ignore</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=342848&pg=ajx')">342848</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sanjar Fayzirahmatov (30)<br>PMO Specialist<br>MetLife Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420593&pg=ajx')">420593</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hyockjoong  Lee (-)<br>Associate<br>PricewaterhouseCoopers Japan (PWC Japan)<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416658&pg=ajx')">416658</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jessica Zhou (34)<br>Manager<br>Accenture Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=365857&pg=ajx')">365857</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Guixin Zhu (37)<br>Analyst Programmer<br>Merrill Lynch Japan Securities Co., Ltd.<br><br><i>Well presented Chinese guy, decent communication skill, but needs to elaborate more when explaining himself. Bit too hoppy too, mainly due to contracts roles. Been with Nomura on contract for past yr, application support and maintenance for JGB etrading system and interest rate risk & credit risk management system using C/C++, Visual C#, Delphi, MQ, Tibco/RV, FIX protocol, Sybase and Solaris. (risk management system is a database system consists 250+ tables and 200+ programs maintaining/updating</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=307615&pg=ajx')">307615</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naruto Kirihara (34)<br>Valuation Manager<br>Manulife Life Insurance Company (Japan)<br><br><i><p>Making total around 12M (10M base+1.5M bonus+0.5M OT) said will increase to 13M soon this year. Looking for 13M~</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420534&pg=ajx')">420534</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			10			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eiji Omae (-)<br>Account Executive<br>AIU Insurance Company<br><br><i><p>Axial Solutions - in F2F at Slate conference room, told her they will offer her. Her remain 2 weeks patient as Global Sales Director speaks to HQ.</p>
<p>4 weeks later they said they were interested in a cheaper candidate.</p>
<p>Obviously this hurt her and wasted her time.  As she perfectly matched the role and was within their stated budget.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420419&pg=ajx')">420419</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ricky Kim (-)<br>Manager, Merchant Sales and Solutions<br>VISA Int<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420628&pg=ajx')">420628</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hayato Tsuchikawa (37)<br>Chief Risk Officer<br>Zurich Insurance Company Limted<br><br><i><p>Met in person for lunch. Well presented, not the most forthcoming in person, but warmed up after a while. Very happy with Zurich, and has excelled extremely well in his career. Ambitious and wants high level opportunities as well as money.</p>
<p>Making 14.6M base right now, with 18.6M total. Said he wants 20M to consider leaving. &nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=339183&pg=ajx')">339183</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masayuki Sakai (-)<br>Head of Application Development<br>Manulife Life Insurance Company (Japan)<br><br><i><p>wrong input of assessment notes, please ignore</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=342848&pg=ajx')">342848</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sanjar Fayzirahmatov (30)<br>PMO Specialist<br>MetLife Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420593&pg=ajx')">420593</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hyockjoong  Lee (-)<br>Associate<br>PricewaterhouseCoopers Japan (PWC Japan)<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416658&pg=ajx')">416658</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jessica Zhou (34)<br>Manager<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=365857&pg=ajx')">365857</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Guixin Zhu (37)<br>Analyst Programmer<br>Merrill Lynch Japan Securities Co., Ltd.<br><br><i>Well presented Chinese guy, decent communication skill, but needs to elaborate more when explaining himself. Bit too hoppy too, mainly due to contracts roles. Been with Nomura on contract for past yr, application support and maintenance for JGB etrading system and interest rate risk & credit risk management system using C/C++, Visual C#, Delphi, MQ, Tibco/RV, FIX protocol, Sybase and Solaris. (risk management system is a database system consists 250+ tables and 200+ programs maintaining/updating</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=307615&pg=ajx')">307615</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naruto Kirihara (34)<br>Valuation Manager<br>Manulife Life Insurance Company (Japan)<br><br><i><p>Making total around 12M (10M base+1.5M bonus+0.5M OT) said will increase to 13M soon this year. Looking for 13M~</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420534&pg=ajx')">420534</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jen Wen (-)<br>Head of Portfolio Management<br>Sumitomo Mitsui Trust Club<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417767&pg=ajx')">417767</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="481">
			9			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eiji Omae (-)<br>Account Executive<br>AIU Insurance Company<br><br><i><p>Axial Solutions - in F2F at Slate conference room, told her they will offer her. Her remain 2 weeks patient as Global Sales Director speaks to HQ.</p>
<p>4 weeks later they said they were interested in a cheaper candidate.</p>
<p>Obviously this hurt her and wasted her time.  As she perfectly matched the role and was within their stated budget.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420419&pg=ajx')">420419</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeff (Hiro) Hamada (38)<br>Director, Head of Information Technology<br>Eastspring Investments Limited<br><br><i><p>Making total around 12M (10M base+1.5M bonus+0.5M OT) said will increase to 13M soon this year. Looking for 13M~</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=53218&pg=ajx')">53218</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryan Lim Zheng Yi (46)<br>Senior PMO Manager<br>AIG<br><br><i><p>Aristocrat is moving out of Japan, so needs a new job ASAP. Spoke about AIG, and will move ahead.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=300011&pg=ajx')">300011</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chuankang Liao (-)<br>Business Analyst<br>BMW Financial Services<br><br><i><p>Aristocrat is moving out of Japan, so needs a new job ASAP. Spoke about AIG, and will move ahead.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=343786&pg=ajx')">343786</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Atsuo Ohori (40)<br>Security Consultant<br>Global Security Experts Inc.<br><br><i><p>Wants to leave BMW Finance as there have many recent organizational changes and he does not see much of a career bath there.</p>
<p>&nbsp;</p>
<p>Has been contacted about Metlife by other recruiters but not so interested.</p>
<p>&nbsp;</p>
<p>Is open for other roles.&nbsp; Good Business Intelligence and DWH skills.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406250&pg=ajx')">406250</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Oyama (48)<br>Senior Manager - Order to Fulfillment<br>ORACLE<br><br><i><p>Spoke with. E5, nice guy.&nbsp; He is now at Global Security Expert and are still interested in job market. Talked about NN and AIG and would like to see the JDs. Told me he had applied for a security role with AIG within 6 months so afraid maybe difficult to proceed with it. No time to talk much on the phone and said would get back to me by email. Emailed.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413327&pg=ajx')">413327</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saiko Shiroto (46)<br>IT Project Manager<br>AIG<br><br><i><p>Is wanting a position in Vendor Management.&nbsp; Has experience in Bid Management.&nbsp; IS looking for a new challeng.&nbsp; Has been at the company for 21 years.&nbsp; Experience in order process.&nbsp; English is quite good.</p>
<p>&nbsp;</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417816&pg=ajx')">417816</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoko Tajika (44)<br>Project Manager & Structural Engineer<br>Solar Power Network<br><br><i><p>Linked IN.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419004&pg=ajx')">419004</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kai Obokata (29)<br>Sales Excellence Analyst<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416337&pg=ajx')">416337</a>
										</div>
							<div class="hover_row  colored_row">
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kai Obokata (29)<br>Sales Excellence Analyst<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416337&pg=ajx')">416337</a>
										</div>
							<div class="hover_row  colored_row">
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
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="481">
			8			</div>
			<div class="stat_candi_info 481">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eiji Omae (-)<br>Account Executive<br>AIU Insurance Company<br><br><i><p>Axial Solutions - in F2F at Slate conference room, told her they will offer her. Her remain 2 weeks patient as Global Sales Director speaks to HQ.</p>
<p>4 weeks later they said they were interested in a cheaper candidate.</p>
<p>Obviously this hurt her and wasted her time.  As she perfectly matched the role and was within their stated budget.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420419&pg=ajx')">420419</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ricky Kim (-)<br>Manager, Merchant Sales and Solutions<br>VISA Int<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420628&pg=ajx')">420628</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masayuki Sakai (-)<br>Head of Application Development<br>Manulife Life Insurance Company (Japan)<br><br><i><p>wrong input of assessment notes, please ignore</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=342848&pg=ajx')">342848</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sanjar Fayzirahmatov (30)<br>PMO Specialist<br>MetLife Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420593&pg=ajx')">420593</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hyockjoong  Lee (-)<br>Associate<br>PricewaterhouseCoopers Japan (PWC Japan)<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416658&pg=ajx')">416658</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jessica Zhou (34)<br>Manager<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=365857&pg=ajx')">365857</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naruto Kirihara (34)<br>Valuation Manager<br>Manulife Life Insurance Company (Japan)<br><br><i><p>Making total around 12M (10M base+1.5M bonus+0.5M OT) said will increase to 13M soon this year. Looking for 13M~</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420534&pg=ajx')">420534</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jen Wen (-)<br>Head of Portfolio Management<br>Sumitomo Mitsui Trust Club<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417767&pg=ajx')">417767</a>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a data-toggle="tooltip" title="Candidate ID: 416337" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9517&pg=ajx')">9517</a>
										</div>
							<div class="hover_row  colored_row">
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
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
		<td class="name_column revenueSize">J. Kovaliovas</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			18			</div>
			<div class="stat_candi_info 443">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seishi Ikematsu (-)<br>Sales Manager<br>Kawasaki Heavy Industries, Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=324109&pg=ajx')">324109</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Zhao Wenwu (42)<br>Onsite Project Manager<br>Neusoft Japan Co., Ltd.<br><br><i><p>Is wanting to leave Neusoft as it is a Chinese SIer and the salaries are increasing so he does not know how long they can keep the edge.</p>
<p> </p>
<p>Is looking for Project Manager in Automotive or Device area.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413096&pg=ajx')">413096</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazunori Sukeda (-)<br>Staff<br>Visteon Japan Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=300978&pg=ajx')">300978</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shoichi Matsuura (48)<br>Director of Quality<br>Sierra Wireless<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420760&pg=ajx')">420760</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadayuki Kitajima (50)<br>Quality<br>Bosch<br><br><i><p>Had a phone meeting with him. Very nice guy, English is good as well (6). Working at Bosch as a QM at the moment. Has been with Bosch for more than 8 years. Based in Saitama. 4 months ago moved to work in a different plant. Used to work at Musashi factory, and now working at&nbsp;Higashimatsuyama. Focusing on Diesel engine components (injection systems mostly). 60 % QC , 40% QA.&nbsp;</p>
<p>Has 5 direct subordinates and another 4 on a dotted line. Currently ok with his job. Happy with the s</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=341600&pg=ajx')">341600</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dinesh Vudathu (40)<br>Senior Project manger<br>Accel Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420571&pg=ajx')">420571</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masaaki Suzuki (53)<br>Sr. Quality Manager<br>Bose Corporation<br><br><i>Dinner - Mar 14. Looks older than 49. Very nice guy. Doesn\t appear to be overly ambitious however, he is a hardcore runner and pushes himself to new challenges. He has some fire in the belly somewhere.</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351324&pg=ajx')">351324</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Tadano (38)<br>R&D Engineer<br>Mitsubishi Automotive Techno-Service Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420601&pg=ajx')">420601</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masahiro Nakao (52)<br>Supplier Performance Engineer<br>Visteon Japan Ltd.<br><br><i><p>Open to new opps. Same requirements as before: QA, AQE, or Supplier Quality is ok, needs to be Yokohama or near, expected salary above 9M. Still at Visteon, and still working as a QE. </p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=301095&pg=ajx')">301095</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Yamada (40)<br>Interior Quality Manager for Asia<br>Continental AG<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420247&pg=ajx')">420247</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="JUNGRYUL  KIM (38)<br>Quality Management System manager<br>Continental AG<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420635&pg=ajx')">420635</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Okawa (56)<br>Senior Quality Assurance Manager<br>Murata Engineering<br><br><i><p>Correction, he is 56 already. </p>
<p> </p>
<p> </p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420666&pg=ajx')">420666</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Matsuhiro Kuwahara (38)<br>Quality Engineer<br>kotobukiya Fronte Co.Ltd<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420307&pg=ajx')">420307</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kohei Okuda (36)<br>Software engineer<br>NK Works Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420205&pg=ajx')">420205</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takuni Nishikawa (45)<br>Quality Engineering Asst. Manager<br>Aisin Seiki Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420513&pg=ajx')">420513</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taichi Arakawa (42)<br>Sales Engineer<br>Eberspächer Catem Japan Ltd.<br><br><i><p>Linked In.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417726&pg=ajx')">417726</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ono Nobura (45)<br>Sales Manager<br>Denso<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420743&pg=ajx')">420743</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seki Takayuki (40)<br>Quality leader<br>Volvo Nippon K.K.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420415&pg=ajx')">420415</a>
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
			<div class="stat_holder revenueSize2" id="443">
			17			</div>
			<div class="stat_candi_info 443">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dinesh Vudathu (40)<br>Senior Project manger<br>Accel Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420571&pg=ajx')">420571</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masaaki Suzuki (53)<br>Sr. Quality Manager<br>Bose Corporation<br><br><i>Dinner - Mar 14. Looks older than 49. Very nice guy. Doesn\t appear to be overly ambitious however, he is a hardcore runner and pushes himself to new challenges. He has some fire in the belly somewhere.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351324&pg=ajx')">351324</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Tadano (38)<br>R&D Engineer<br>Mitsubishi Automotive Techno-Service Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420601&pg=ajx')">420601</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masahiro Nakao (52)<br>Supplier Performance Engineer<br>Visteon Japan Ltd.<br><br><i><p>Open to new opps. Same requirements as before: QA, AQE, or Supplier Quality is ok, needs to be Yokohama or near, expected salary above 9M. Still at Visteon, and still working as a QE. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=301095&pg=ajx')">301095</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Yamada (40)<br>Interior Quality Manager for Asia<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420247&pg=ajx')">420247</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="JUNGRYUL  KIM (38)<br>Quality Management System manager<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420635&pg=ajx')">420635</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Okawa (56)<br>Senior Quality Assurance Manager<br>Murata Engineering<br><br><i><p>Correction, he is 56 already. </p>
<p> </p>
<p> </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420666&pg=ajx')">420666</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Matsuhiro Kuwahara (38)<br>Quality Engineer<br>kotobukiya Fronte Co.Ltd<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420307&pg=ajx')">420307</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kohei Okuda (36)<br>Software engineer<br>NK Works Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420205&pg=ajx')">420205</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takuni Nishikawa (45)<br>Quality Engineering Asst. Manager<br>Aisin Seiki Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420513&pg=ajx')">420513</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taichi Arakawa (42)<br>Sales Engineer<br>Eberspächer Catem Japan Ltd.<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417726&pg=ajx')">417726</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ono Nobura (45)<br>Sales Manager<br>Denso<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420743&pg=ajx')">420743</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seki Takayuki (40)<br>Quality leader<br>Volvo Nippon K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420415&pg=ajx')">420415</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Te-Sheng Hsu (27)<br>Technical Support Engineer<br>Elliott Co., / Ebara Group<br><br><i><p>Young, green engineer from Taiwan. Joined Elliot (Compressors &amp; Steam Turbine) through campus recruit. Studied Japanese in University, graduated in Taiwan, wanted to make use of his Japanes so came to Japan for work. Done a lot of new grad trainee the past 1yr and now finally working as tech engineer. Responsible for tech support for East Asia - Korea, China, Singapore.&nbsp; Japanese good for internal communication but do not cover any domestic customers. Still young so not set on settli</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417079&pg=ajx')">417079</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hikaru Kitamura (30)<br>Inside Sales Advisor<br>Tesla Motors<br><br><i><p>Had a phone meeting with him. Good energy, native level English (graduated in Canada). Now working at Tesla Motors as an Inside Sales Advisor. It is a junior role, mostly taking care of customer experience and customer satisfaction, taking orders for cars, organising promotion. Does a lot of communication with his clients by phone and in person (only B2c experience so far). Making 4M at the moment. Will be an active mover in 6 months, since has only been with Tesla since October last year. 28</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404397&pg=ajx')">404397</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shantinath Indi (38)<br>Assistant Consultant<br>Tata Consultancy Services K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420373&pg=ajx')">420373</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Pornchai Weangsima (40)<br>Application Engineer<br>Plastic Omnium K.K.<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406430&pg=ajx')">406430</a>
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
			<div class="stat_holder revenueSize2" id="443">
			10			</div>
			<div class="stat_candi_info 443">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masaaki Suzuki (53)<br>Sr. Quality Manager<br>Bose Corporation<br><br><i>Dinner - Mar 14. Looks older than 49. Very nice guy. Doesn\t appear to be overly ambitious however, he is a hardcore runner and pushes himself to new challenges. He has some fire in the belly somewhere.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351324&pg=ajx')">351324</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masahiro Nakao (52)<br>Supplier Performance Engineer<br>Visteon Japan Ltd.<br><br><i><p>Open to new opps. Same requirements as before: QA, AQE, or Supplier Quality is ok, needs to be Yokohama or near, expected salary above 9M. Still at Visteon, and still working as a QE. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=301095&pg=ajx')">301095</a>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka Yamamoto (53)<br>Quality Engineer<br>Autoliv Japan Ltd.<br><br><i><p>Open to new opps. Same requirements as before: QA, AQE, or Supplier Quality is ok, needs to be Yokohama or near, expected salary above 9M. Still at Visteon, and still working as a QE. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=331600&pg=ajx')">331600</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sandeep Sharma (36)<br>Software Engineer<br>Wipro Technologies Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413502&pg=ajx')">413502</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hidehiko Koyata (36)<br>Product manager<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420227&pg=ajx')">420227</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Riki Iwai (38)<br>Senior Application Engineer<br>Mathworks<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420440&pg=ajx')">420440</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="443">
			3			</div>
			<div class="stat_candi_info 443">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masahiro Nakao (52)<br>Supplier Performance Engineer<br>Visteon Japan Ltd.<br><br><i><p>Open to new opps. Same requirements as before: QA, AQE, or Supplier Quality is ok, needs to be Yokohama or near, expected salary above 9M. Still at Visteon, and still working as a QE. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=301095&pg=ajx')">301095</a>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka Yamamoto (53)<br>Quality Engineer<br>Autoliv Japan Ltd.<br><br><i><p>Open to new opps. Same requirements as before: QA, AQE, or Supplier Quality is ok, needs to be Yokohama or near, expected salary above 9M. Still at Visteon, and still working as a QE. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=331600&pg=ajx')">331600</a>
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Amit Koul (42)<br>Engineer Designer<br>SMR Automotive<br><br><i>Dinner - Mar 14. Looks older than 49. Very nice guy. Doesn\t appear to be overly ambitious however, he is a hardcore runner and pushes himself to new challenges. He has some fire in the belly somewhere.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=67153&pg=ajx')">67153</a>
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			15			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dinesh Vudathu (40)<br>Senior Project manger<br>Accel Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420571&pg=ajx')">420571</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masaaki Suzuki (53)<br>Sr. Quality Manager<br>Bose Corporation<br><br><i>Dinner - Mar 14. Looks older than 49. Very nice guy. Doesn\t appear to be overly ambitious however, he is a hardcore runner and pushes himself to new challenges. He has some fire in the belly somewhere.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=351324&pg=ajx')">351324</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Tadano (38)<br>R&D Engineer<br>Mitsubishi Automotive Techno-Service Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420601&pg=ajx')">420601</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Yamada (40)<br>Interior Quality Manager for Asia<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420247&pg=ajx')">420247</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="JUNGRYUL  KIM (38)<br>Quality Management System manager<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420635&pg=ajx')">420635</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Okawa (56)<br>Senior Quality Assurance Manager<br>Murata Engineering<br><br><i><p>Correction, he is 56 already. </p>
<p> </p>
<p> </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420666&pg=ajx')">420666</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Matsuhiro Kuwahara (38)<br>Quality Engineer<br>kotobukiya Fronte Co.Ltd<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420307&pg=ajx')">420307</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kohei Okuda (36)<br>Software engineer<br>NK Works Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420205&pg=ajx')">420205</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takuni Nishikawa (45)<br>Quality Engineering Asst. Manager<br>Aisin Seiki Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420513&pg=ajx')">420513</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taichi Arakawa (42)<br>Sales Engineer<br>Eberspächer Catem Japan Ltd.<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417726&pg=ajx')">417726</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ono Nobura (45)<br>Sales Manager<br>Denso<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420743&pg=ajx')">420743</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seki Takayuki (40)<br>Quality leader<br>Volvo Nippon K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420415&pg=ajx')">420415</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hikaru Kitamura (30)<br>Inside Sales Advisor<br>Tesla Motors<br><br><i><p>Had a phone meeting with him. Good energy, native level English (graduated in Canada). Now working at Tesla Motors as an Inside Sales Advisor. It is a junior role, mostly taking care of customer experience and customer satisfaction, taking orders for cars, organising promotion. Does a lot of communication with his clients by phone and in person (only B2c experience so far). Making 4M at the moment. Will be an active mover in 6 months, since has only been with Tesla since October last year. 28</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404397&pg=ajx')">404397</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shantinath Indi (38)<br>Assistant Consultant<br>Tata Consultancy Services K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420373&pg=ajx')">420373</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Pornchai Weangsima (40)<br>Application Engineer<br>Plastic Omnium K.K.<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406430&pg=ajx')">406430</a>
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			12			</div>
			<div class="stat_candi_info 431">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kei Hamada (35)<br>Manager<br>A.T Kearney<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417681&pg=ajx')">417681</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saeko Takayama (-)<br>Manager at Accenture Digital<br>Accenture Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=324730&pg=ajx')">324730</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Miura (-)<br>Staff<br>Prudential Investment Japan<br><br><i>Excellent English. Veteran Insurance compliance pro. talkm with her on searches in this area. Open to opportunities.</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=339396&pg=ajx')">339396</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hoshihiko Adachi (42)<br>Manager<br>Mizuho Bank, Ltd.<br><br><i>Practically, what he does now is product development of non-life insurance brokerage to consumers.</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=338391&pg=ajx')">338391</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Haifeng Cui (32)<br>Securities&Fund Transaction Service Analyst4<br>CITI<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=411144&pg=ajx')">411144</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nobuyuki Suzuki (-)<br>Director, Enterprise Risk Management (ERM) Office<br>Prudential<br><br><i><p>Doesnt present well, looks like a scruffy salary man, and doesnt have the best communication skills either, but is very well experienced and would be placable for the right role in risk management, model risk especially. Problem is that hes spent some time in the US, (Michigan) studying MBA and wants to move abroad now. I dont think his English is good enough though.</p>
<p>Started career with Manulife, actuary team, worked there 6yrs, eventually becoming supervisor. So knows life insura</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=409998&pg=ajx')">409998</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sherry Zhuang (26)<br>Senior Analyst<br>Accenture Japan<br><br><i><p>Wants to get into FSs and pitched PwC M&amp;A Advisory but did not make it.</p>
<p>OK for strategy consulting side as well.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418085&pg=ajx')">418085</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shota Imako (44)<br><br>Toshiba<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420577&pg=ajx')">420577</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yusuke Nishizaki (24)<br><br>Saxo Bank Japan<br><br><i>Spoke withhim and he is smart kid, been with Nomura Securities for nearly 3 years. His first job after graduation. 
He is an Associate for the Equities team. His main area of focus is the Real Estate area on Japan’s property market and housing equipment industry.
He has also conducted IPO valuation for two real estates companies.

He is not actively looking but is open to learing whats in the market.
Speaks fluent Japanese as he did his Masters for Tokyo University. 

Spoke to him about</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420658&pg=ajx')">420658</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shu Wang (25)<br><br>Daiwa Securities<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420744&pg=ajx')">420744</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jie Dai (-)<br>Equity Research Analyst<br>SMBC Nikko<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415193&pg=ajx')">415193</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chee Lai (32)<br><br>Deloitte Tohmatsu Financial Advisory (DTFA)<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420763&pg=ajx')">420763</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			6			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sherry Zhuang (26)<br>Senior Analyst<br>Accenture Japan<br><br><i><p>Wants to get into FSs and pitched PwC M&amp;A Advisory but did not make it.</p>
<p>OK for strategy consulting side as well.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418085&pg=ajx')">418085</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shota Imako (44)<br><br>Toshiba<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420577&pg=ajx')">420577</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yusuke Nishizaki (24)<br><br>Saxo Bank Japan<br><br><i>Spoke withhim and he is smart kid, been with Nomura Securities for nearly 3 years. His first job after graduation. 
He is an Associate for the Equities team. His main area of focus is the Real Estate area on Japan’s property market and housing equipment industry.
He has also conducted IPO valuation for two real estates companies.

He is not actively looking but is open to learing whats in the market.
Speaks fluent Japanese as he did his Masters for Tokyo University. 

Spoke to him about</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420658&pg=ajx')">420658</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shu Wang (25)<br><br>Daiwa Securities<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420744&pg=ajx')">420744</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jie Dai (-)<br>Equity Research Analyst<br>SMBC Nikko<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415193&pg=ajx')">415193</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chee Lai (32)<br><br>Deloitte Tohmatsu Financial Advisory (DTFA)<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420763&pg=ajx')">420763</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="431">
			10			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Haifeng Cui (32)<br>Securities&Fund Transaction Service Analyst4<br>CITI<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=411144&pg=ajx')">411144</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sherry Zhuang (26)<br>Senior Analyst<br>Accenture Japan<br><br><i><p>Wants to get into FSs and pitched PwC M&amp;A Advisory but did not make it.</p>
<p>OK for strategy consulting side as well.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418085&pg=ajx')">418085</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shota Imako (44)<br><br>Toshiba<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420577&pg=ajx')">420577</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yusuke Nishizaki (24)<br><br>Saxo Bank Japan<br><br><i>Spoke withhim and he is smart kid, been with Nomura Securities for nearly 3 years. His first job after graduation. 
He is an Associate for the Equities team. His main area of focus is the Real Estate area on Japan’s property market and housing equipment industry.
He has also conducted IPO valuation for two real estates companies.

He is not actively looking but is open to learing whats in the market.
Speaks fluent Japanese as he did his Masters for Tokyo University. 

Spoke to him about</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420658&pg=ajx')">420658</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shu Wang (25)<br><br>Daiwa Securities<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420744&pg=ajx')">420744</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sairi Kusui (42)<br>Consultant<br>Deloitte<br><br><i><p>Young, but very hoppy - joined Accenture and stayed only for 1 month.&nbsp; In the past 2 years he has been working with his friend in some kind of finance investments businesses.&nbsp; Was not able to elaborate about his background but says he is ready to commit to full time employment now.&nbsp; Is currently interviewing at one consulting firm, interested in consulting or finance side opps.&nbsp; Not easy to place him because of his hoppiness but he is young, with good E and a decent academ</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=407755&pg=ajx')">407755</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yusuke Ochi (29)<br><br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413513&pg=ajx')">413513</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="You Zhou (27)<br>Equity analyst<br>Nomura<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=414015&pg=ajx')">414015</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shiyang Liang (24)<br><br>Hikari Tsushin, Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419020&pg=ajx')">419020</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jiayi Li (27)<br>Business Analyst<br>Boston Consulting Group Japan (BCG)<br><br><i><p>His main role is to manage implementation/maintenance for Securities Operations&rsquo; business applications.</p>
<p>He is not very happy with his current role as he feels he can handle more responsibility and work on larger projects. He is open to industry and spoke to him about Deloitte and is interested.</p>
<p>He is a young 31 year old from China and has a JLPT 1 as well.</p>
<p>His current salary is 6M-7M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419415&pg=ajx')">419415</a>
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
			<div class="stat_holder revenueSize2" id="431">
			10			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Haifeng Cui (32)<br>Securities&Fund Transaction Service Analyst4<br>CITI<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=411144&pg=ajx')">411144</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sherry Zhuang (26)<br>Senior Analyst<br>Accenture Japan<br><br><i><p>Wants to get into FSs and pitched PwC M&amp;A Advisory but did not make it.</p>
<p>OK for strategy consulting side as well.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418085&pg=ajx')">418085</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shota Imako (44)<br><br>Toshiba<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420577&pg=ajx')">420577</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yusuke Nishizaki (24)<br><br>Saxo Bank Japan<br><br><i>Spoke withhim and he is smart kid, been with Nomura Securities for nearly 3 years. His first job after graduation. 
He is an Associate for the Equities team. His main area of focus is the Real Estate area on Japan’s property market and housing equipment industry.
He has also conducted IPO valuation for two real estates companies.

He is not actively looking but is open to learing whats in the market.
Speaks fluent Japanese as he did his Masters for Tokyo University. 

Spoke to him about</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420658&pg=ajx')">420658</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shu Wang (25)<br><br>Daiwa Securities<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420744&pg=ajx')">420744</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sairi Kusui (42)<br>Consultant<br>Deloitte<br><br><i><p>Young, but very hoppy - joined Accenture and stayed only for 1 month.&nbsp; In the past 2 years he has been working with his friend in some kind of finance investments businesses.&nbsp; Was not able to elaborate about his background but says he is ready to commit to full time employment now.&nbsp; Is currently interviewing at one consulting firm, interested in consulting or finance side opps.&nbsp; Not easy to place him because of his hoppiness but he is young, with good E and a decent academ</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=407755&pg=ajx')">407755</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yusuke Ochi (29)<br><br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413513&pg=ajx')">413513</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="You Zhou (27)<br>Equity analyst<br>Nomura<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=414015&pg=ajx')">414015</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shiyang Liang (24)<br><br>Hikari Tsushin, Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419020&pg=ajx')">419020</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jiayi Li (27)<br>Business Analyst<br>Boston Consulting Group Japan (BCG)<br><br><i><p>His main role is to manage implementation/maintenance for Securities Operations&rsquo; business applications.</p>
<p>He is not very happy with his current role as he feels he can handle more responsibility and work on larger projects. He is open to industry and spoke to him about Deloitte and is interested.</p>
<p>He is a young 31 year old from China and has a JLPT 1 as well.</p>
<p>His current salary is 6M-7M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419415&pg=ajx')">419415</a>
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
			<div class="stat_holder revenueSize2" id="431">
			4			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shiyang Liang (24)<br><br>Hikari Tsushin, Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419020&pg=ajx')">419020</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazunori Ito (41)<br>Analyst<br>Nikko Asset Management<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=314505&pg=ajx')">314505</a>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazunori Ito (41)<br>Analyst<br>Nikko Asset Management<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=314505&pg=ajx')">314505</a>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Niki Wu (26)<br><br>KPMG Japan<br><br><i>Spoke with him and he is currently working with Barclays Capital as a VP/Research Analyst for Consumer electronics.

Has been there for over 1 year and is not actively looking for a new role unless it something very interesting.
Was at at SBI Securities before this for also 1 year.  Before that was with Nikko Asset Management for 5 years and then was layed off due to the downsizing and restructuring.

Would be interested in companies like BR and Fortress.
A very nice easy person to speak w</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419387&pg=ajx')">419387</a>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Niki Wu (26)<br><br>KPMG Japan<br><br><i>Spoke with him and he is currently working with Barclays Capital as a VP/Research Analyst for Consumer electronics.

Has been there for over 1 year and is not actively looking for a new role unless it something very interesting.
Was at at SBI Securities before this for also 1 year.  Before that was with Nikko Asset Management for 5 years and then was layed off due to the downsizing and restructuring.

Would be interested in companies like BR and Fortress.
A very nice easy person to speak w</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419387&pg=ajx')">419387</a>
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
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="431">
			6			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sherry Zhuang (26)<br>Senior Analyst<br>Accenture Japan<br><br><i><p>Wants to get into FSs and pitched PwC M&amp;A Advisory but did not make it.</p>
<p>OK for strategy consulting side as well.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418085&pg=ajx')">418085</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shota Imako (44)<br><br>Toshiba<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420577&pg=ajx')">420577</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yusuke Nishizaki (24)<br><br>Saxo Bank Japan<br><br><i>Spoke withhim and he is smart kid, been with Nomura Securities for nearly 3 years. His first job after graduation. 
He is an Associate for the Equities team. His main area of focus is the Real Estate area on Japan’s property market and housing equipment industry.
He has also conducted IPO valuation for two real estates companies.

He is not actively looking but is open to learing whats in the market.
Speaks fluent Japanese as he did his Masters for Tokyo University. 

Spoke to him about</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420658&pg=ajx')">420658</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shu Wang (25)<br><br>Daiwa Securities<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420744&pg=ajx')">420744</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jie Dai (-)<br>Equity Research Analyst<br>SMBC Nikko<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415193&pg=ajx')">415193</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chee Lai (32)<br><br>Deloitte Tohmatsu Financial Advisory (DTFA)<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420763&pg=ajx')">420763</a>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a data-toggle="tooltip" title="Candidate ID: 419020" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9545&pg=ajx')">9545</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a data-toggle="tooltip" title="Candidate ID: 314505" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9552&pg=ajx')">9552</a>
										</div>
							<div class="hover_row ">
										<a data-toggle="tooltip" title="Candidate ID: 409488" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9445&pg=ajx')">9445</a>
										</div>
							<div class="hover_row  colored_row">
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
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
							<div class="hover_row ">
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
		<td class="name_column revenueSize">L. Fry</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			60			</div>
			<div class="stat_candi_info 388">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masaru kawabata (-)<br>Server Administrator<br>Linkbal Inc.<br><br><i><p>Linked In.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406428&pg=ajx')">406428</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiji Momozaki (-)<br>Manager<br>NXP Semiconductor<br><br><i><p>Recommendation by Takahiro Kumagai</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420680&pg=ajx')">420680</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shajan Miah (-)<br>IT Director - Service Delivery Management<br>Asurion Japan K.K.<br><br><i><p>Introduction:</p>
<p>Looking for CIO / Head of IT / Head of Delivery / IT Director - challenging role.<br />Remuneration : 18MIL +<br />Roles:</p>
<p>Chief Information Officer, Chief Technology Officer, Director Of Information Technology, Information Technology Manager<br />Locations:</p>
<p>United Kingdom, Japan, Manchester, United Kingdom, Singapore<br />Job types:</p>
<p>Full-time, Remote<br />Start date:</p>
<p>Anytime</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420726&pg=ajx')">420726</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Vivek Jaiswal (26)<br>Software Engineer<br>Hikari Tsushin, Inc.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419032&pg=ajx')">419032</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tsuyoshi Hashiguchi (31)<br>Consultant<br>Kurt Salmon Associates<br><br><i><p>Working in retail/apparel space right now. His specialty is communications. He is interested in Retail space. Kurt Salmon is being acquired by Accenture and he isnt sure if he wants to stay or move.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418389&pg=ajx')">418389</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuki Yamashita (42)<br>Assistant Manager<br>Kanden System Solutions Co., Inc.<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420515&pg=ajx')">420515</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taisuke Kurita (46)<br>Managing Director<br>EP Consulting<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420521&pg=ajx')">420521</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="KATSUTOSHI SUGANO (50)<br>General Manager, Altek Japan Corporation<br>Altek<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420524&pg=ajx')">420524</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masataka Aoyagi (45)<br>Executive Corporate Officer of Agent Service Division<br>Sony Real Estate<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=25241&pg=ajx')">25241</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoki Notoya (40)<br>Translator<br>Venga<br><br><i><p>Francis assessed him by phone.</p>
<p>Has started his career in high tech semicon/electronics industry as an IC design engineer, experienced in project manager, program manager and presales.</p>
<p>He is now at KPIT in charge of Denso as a BDM for an engineering services </p>
<p>On 10M+1.5M</p>
<p>Planning to meet Tata Elxsi next week (bummer) and applied Visteon</p>
<p>I have pitched Wipro and HCL</p>
<p>Good guy</p>
<p>&nbsp;</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420528&pg=ajx')">420528</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akira Maruyama (47)<br>Finance & Corporate Services Department  (Assistant Manager)<br>Russell Investment<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420475&pg=ajx')">420475</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shin Nakahara (50)<br>Deputy Director - Risk Management Dept. / Tokio Marine Holdings, Inc<br>Tokio Marine  & Nichido Holdings<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420522&pg=ajx')">420522</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="YUXIN XUE (26)<br>Research Assistant<br>Tokyo University Graduate School<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420496&pg=ajx')">420496</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masanobu Kimura (52)<br>Japan Country Manager of Education, Software professional Services<br>Hewlett Packard<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420458&pg=ajx')">420458</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshiki Suzuki (39)<br>ASPAC IT Problem Manager<br>Beckman Coulter<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=337057&pg=ajx')">337057</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kathy Akaike (38)<br>Manage SOX Compliance<br>US Auto Parts Network<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420523&pg=ajx')">420523</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chuzen Kin (28)<br>Global Promotions & PR Specialist<br>Works Applications<br><br><i><p>Linked In.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=409905&pg=ajx')">409905</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Risa Kobayashi (42)<br>General Manager, IT System Division<br>Transcosmos<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420566&pg=ajx')">420566</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taichi Tokutake (34)<br>Interpreting<br>Cilect<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420526&pg=ajx')">420526</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sarimanu Suzuki (24)<br>Desktop Support Engineer<br>Bank of America Merrill Lynch<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420576&pg=ajx')">420576</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="ATSUSHI IKEDA (43)<br>Executive Director, Control Officer Director, Asia Pacific Controls Office<br>JP Morgan Chase & Co.<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420587&pg=ajx')">420587</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomas Kalab (31)<br> Administration staff<br>Intership - Housing Company<br><br><i><p>I think Pierres impression of this guy was off.  He had 2 good references and I liked him when I spoke to him.  Recommending hi to talk with Larry for CCM2. </p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=410406&pg=ajx')">410406</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taiga Giri (36)<br>System Administrator<br>Arcserve<br><br><i>Nepalese by birth came to Japan in 2002. Now has Japanese citizenship, and is married to a Japanese lady and has one child. Struggling to get by on 4.5M and knows he needs to consider new roles. Wife is currently off to raise the child and so they are living week by week.<br />
<br />
Background is in software dev but moved out of it and into general desktop support. Really bad move career wise and he is paying for it now. Has exp. with a wide variety of technologies including VMWare, BusinessOb</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344837&pg=ajx')">344837</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kyoe Oishi (52)<br>CTO<br>Smileworks<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420582&pg=ajx')">420582</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Taniguchi (52)<br>Product Management<br>Amkor Technology<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420543&pg=ajx')">420543</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akitsugu MATSUSHIMA (45)<br>Senior Account Manager<br>Huawei Japan<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420584&pg=ajx')">420584</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuka Murazumi (41)<br>Sales Operation Leader in Project and Contract Specialists<br>En World Japan K.K.<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420620&pg=ajx')">420620</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Christian Raphalen (48)<br>Business Analyst<br>Hewlett Packard<br><br><i>Linked In</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=401329&pg=ajx')">401329</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kimiko MINEGISHI (48)<br>Public Relation Division, Secretary / Translator to CEO<br>Universal Entertainment<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420559&pg=ajx')">420559</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiichi Kato (47)<br>Sales Support Consultant, Sales Strategy & Planning Team<br>Dell Japan Inc.<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420547&pg=ajx')">420547</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Liang Zhao (34)<br>Senior SAP SRM Consultant<br>Sap<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420505&pg=ajx')">420505</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masanori Motomatsu (35)<br>Network Senior Engineer and group Leader<br>Ryoyu Systems Co., Ltd.<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420627&pg=ajx')">420627</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazuki Tatebe (45)<br>Sales<br>Furukawa Electric<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420565&pg=ajx')">420565</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="YUe Wang (48)<br>CFO - Head of Finance and Accounting<br>Phenix Co.<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420589&pg=ajx')">420589</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazuya Morimoto (40)<br>Marketing manager,Marketing director<br>JAC Recruitment<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420632&pg=ajx')">420632</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuko Igarashi (-)<br>Service Delivery Manager<br>Microsoft<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420641&pg=ajx')">420641</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michael Pernia (40)<br>Program Manager / Quality Manager<br>Nokia Mobile Networks<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420642&pg=ajx')">420642</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="MASAMI AZUMA (35)<br> System Test Engineer<br>Intersoft<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420588&pg=ajx')">420588</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mozan Totani (48)<br>Director, Head of Engineering, Strategy and Construction<br>Yahoo<br><br><i><p>LINKEDIN</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420501&pg=ajx')">420501</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Karthikeyan Kannaiyan (35)<br>Business Analyst-Retail banking<br>VirtusaPolaris<br><br><i><p>Linked In</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415912&pg=ajx')">415912</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Krishnamoorthy Kesavan (46)<br>Consultant<br>Triumph International Japan Ltd.<br><br><i>He is working with Triumph as a contractual IT systems engineer for 4 years now. His work is a per-project basis. His work permit will expire in 2010. He is a mover and will move for the right opps. He acts as project leader for the work with Triumph and manages around 4-5 pax. He wants a permanent position in the future and is looking at managerial roles as well. He can manage a small team and he is ambitious. He can read and write JAP because it is all that he uses in his current work environm</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=221428&pg=ajx')">221428</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saji Raju (39)<br>Program Manager / Delivery Manager<br>KPIT TECHNOLOGIES<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417917&pg=ajx')">417917</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taku Sato (49)<br>Sr. Project Manager<br>Zurich Insurance Company Limted<br><br><i><p>JLPT N4 - Applied at Rakuten, Playnext, Works Applications, and more.</p>
<p>&nbsp;</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=339085&pg=ajx')">339085</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rohit Romley (-)<br>Salesforce Developer<br>HCL Japan Ltd.<br><br><i><p>JLPT N4 - Applied at Rakuten, Playnext, Works Applications, and more.</p>
<p>&nbsp;</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420044&pg=ajx')">420044</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Vishwa Ved (39)<br>Director (Sales)<br>Agiliad Technologies Pvt. Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420669&pg=ajx')">420669</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sosuke Shinohara (49)<br>Manager, Finance Operation Group, Finance Division<br>Dimension Data Japan Inc.<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420654&pg=ajx')">420654</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomomi Kikugawa (41)<br>Executive Assistant to Japanese President CEO<br>Caterpillar Japan K.K.<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420656&pg=ajx')">420656</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kanako akutsu (31)<br>Unknown<br>ROCS<br><br><i><p>Bizreach</p>
<p>&nbsp;</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420686&pg=ajx')">420686</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nischal Pradhan (30)<br>Service Delivery Manager / Senior Engineer<br>Eire Systems<br><br><i><p>JLPT N2</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420595&pg=ajx')">420595</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasuhiro Aoki (30)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420187&pg=ajx')">420187</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="TAKEHIRO YOSHIHARA (49)<br>Sr. Service Channel Manager<br>F5 Networks<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420725&pg=ajx')">420725</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Zhenyu Zhou (48)<br>Senior Research Associate Scientist<br>Weill Cornell Medical College<br><br><i><p>BIZREACH.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420708&pg=ajx')">420708</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chie Takeuchi (43)<br>Senior Consultant<br>Independant Consultant<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=35740&pg=ajx')">35740</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshiyuki Hasegawa (43)<br>Manager of Construction Machinery Rental Department<br>Mitsubishi Corporation<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420716&pg=ajx')">420716</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yukio Iwata (43)<br>Sr Account Executive<br>ORACLE<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=366127&pg=ajx')">366127</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomoya Suzuki (28)<br>Associate Manager - Global Strategic Expansions<br>Sutherland Global Services<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420626&pg=ajx')">420626</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jervis Lew (30)<br>Java Engineer<br>IVIS Corporation<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420751&pg=ajx')">420751</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoko Shiomi (55)<br>Head of Finance, CFO<br>Financial Services Firm of a European Bank<br><br><i><p>Bizreach.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420702&pg=ajx')">420702</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Henry Chen (38)<br>IT Manager<br>World Association of Nuclear Operators (WANO)<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420715&pg=ajx')">420715</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yujiro Mochizuki (43)<br>ソフトウェア本部<br>Sansei Co., Ltd.<br><br><i><p>Bizreach</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420681&pg=ajx')">420681</a>
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
			<div class="stat_holder revenueSize2" id="388">
			55			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuki Yamashita (42)<br>Assistant Manager<br>Kanden System Solutions Co., Inc.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420515&pg=ajx')">420515</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taisuke Kurita (46)<br>Managing Director<br>EP Consulting<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420521&pg=ajx')">420521</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="KATSUTOSHI SUGANO (50)<br>General Manager, Altek Japan Corporation<br>Altek<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420524&pg=ajx')">420524</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masataka Aoyagi (45)<br>Executive Corporate Officer of Agent Service Division<br>Sony Real Estate<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=25241&pg=ajx')">25241</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoki Notoya (40)<br>Translator<br>Venga<br><br><i><p>Francis assessed him by phone.</p>
<p>Has started his career in high tech semicon/electronics industry as an IC design engineer, experienced in project manager, program manager and presales.</p>
<p>He is now at KPIT in charge of Denso as a BDM for an engineering services </p>
<p>On 10M+1.5M</p>
<p>Planning to meet Tata Elxsi next week (bummer) and applied Visteon</p>
<p>I have pitched Wipro and HCL</p>
<p>Good guy</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420528&pg=ajx')">420528</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akira Maruyama (47)<br>Finance & Corporate Services Department  (Assistant Manager)<br>Russell Investment<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420475&pg=ajx')">420475</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shin Nakahara (50)<br>Deputy Director - Risk Management Dept. / Tokio Marine Holdings, Inc<br>Tokio Marine  & Nichido Holdings<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420522&pg=ajx')">420522</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="YUXIN XUE (26)<br>Research Assistant<br>Tokyo University Graduate School<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420496&pg=ajx')">420496</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masanobu Kimura (52)<br>Japan Country Manager of Education, Software professional Services<br>Hewlett Packard<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420458&pg=ajx')">420458</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshiki Suzuki (39)<br>ASPAC IT Problem Manager<br>Beckman Coulter<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=337057&pg=ajx')">337057</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kathy Akaike (38)<br>Manage SOX Compliance<br>US Auto Parts Network<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420523&pg=ajx')">420523</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chuzen Kin (28)<br>Global Promotions & PR Specialist<br>Works Applications<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=409905&pg=ajx')">409905</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Risa Kobayashi (42)<br>General Manager, IT System Division<br>Transcosmos<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420566&pg=ajx')">420566</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taichi Tokutake (34)<br>Interpreting<br>Cilect<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420526&pg=ajx')">420526</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sarimanu Suzuki (24)<br>Desktop Support Engineer<br>Bank of America Merrill Lynch<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420576&pg=ajx')">420576</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="ATSUSHI IKEDA (43)<br>Executive Director, Control Officer Director, Asia Pacific Controls Office<br>JP Morgan Chase & Co.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420587&pg=ajx')">420587</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomas Kalab (31)<br> Administration staff<br>Intership - Housing Company<br><br><i><p>I think Pierres impression of this guy was off.  He had 2 good references and I liked him when I spoke to him.  Recommending hi to talk with Larry for CCM2. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=410406&pg=ajx')">410406</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taiga Giri (36)<br>System Administrator<br>Arcserve<br><br><i>Nepalese by birth came to Japan in 2002. Now has Japanese citizenship, and is married to a Japanese lady and has one child. Struggling to get by on 4.5M and knows he needs to consider new roles. Wife is currently off to raise the child and so they are living week by week.<br />
<br />
Background is in software dev but moved out of it and into general desktop support. Really bad move career wise and he is paying for it now. Has exp. with a wide variety of technologies including VMWare, BusinessOb</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344837&pg=ajx')">344837</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kyoe Oishi (52)<br>CTO<br>Smileworks<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420582&pg=ajx')">420582</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Taniguchi (52)<br>Product Management<br>Amkor Technology<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420543&pg=ajx')">420543</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akitsugu MATSUSHIMA (45)<br>Senior Account Manager<br>Huawei Japan<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420584&pg=ajx')">420584</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuka Murazumi (41)<br>Sales Operation Leader in Project and Contract Specialists<br>En World Japan K.K.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420620&pg=ajx')">420620</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Christian Raphalen (48)<br>Business Analyst<br>Hewlett Packard<br><br><i>Linked In</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=401329&pg=ajx')">401329</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kimiko MINEGISHI (48)<br>Public Relation Division, Secretary / Translator to CEO<br>Universal Entertainment<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420559&pg=ajx')">420559</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiichi Kato (47)<br>Sales Support Consultant, Sales Strategy & Planning Team<br>Dell Japan Inc.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420547&pg=ajx')">420547</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Liang Zhao (34)<br>Senior SAP SRM Consultant<br>Sap<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420505&pg=ajx')">420505</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masanori Motomatsu (35)<br>Network Senior Engineer and group Leader<br>Ryoyu Systems Co., Ltd.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420627&pg=ajx')">420627</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazuki Tatebe (45)<br>Sales<br>Furukawa Electric<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420565&pg=ajx')">420565</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="YUe Wang (48)<br>CFO - Head of Finance and Accounting<br>Phenix Co.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420589&pg=ajx')">420589</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazuya Morimoto (40)<br>Marketing manager,Marketing director<br>JAC Recruitment<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420632&pg=ajx')">420632</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuko Igarashi (-)<br>Service Delivery Manager<br>Microsoft<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420641&pg=ajx')">420641</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michael Pernia (40)<br>Program Manager / Quality Manager<br>Nokia Mobile Networks<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420642&pg=ajx')">420642</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="MASAMI AZUMA (35)<br> System Test Engineer<br>Intersoft<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420588&pg=ajx')">420588</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mozan Totani (48)<br>Director, Head of Engineering, Strategy and Construction<br>Yahoo<br><br><i><p>LINKEDIN</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420501&pg=ajx')">420501</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Karthikeyan Kannaiyan (35)<br>Business Analyst-Retail banking<br>VirtusaPolaris<br><br><i><p>Linked In</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415912&pg=ajx')">415912</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Krishnamoorthy Kesavan (46)<br>Consultant<br>Triumph International Japan Ltd.<br><br><i>He is working with Triumph as a contractual IT systems engineer for 4 years now. His work is a per-project basis. His work permit will expire in 2010. He is a mover and will move for the right opps. He acts as project leader for the work with Triumph and manages around 4-5 pax. He wants a permanent position in the future and is looking at managerial roles as well. He can manage a small team and he is ambitious. He can read and write JAP because it is all that he uses in his current work environm</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=221428&pg=ajx')">221428</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saji Raju (39)<br>Program Manager / Delivery Manager<br>KPIT TECHNOLOGIES<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417917&pg=ajx')">417917</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taku Sato (49)<br>Sr. Project Manager<br>Zurich Insurance Company Limted<br><br><i><p>JLPT N4 - Applied at Rakuten, Playnext, Works Applications, and more.</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=339085&pg=ajx')">339085</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rohit Romley (-)<br>Salesforce Developer<br>HCL Japan Ltd.<br><br><i><p>JLPT N4 - Applied at Rakuten, Playnext, Works Applications, and more.</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420044&pg=ajx')">420044</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Vishwa Ved (39)<br>Director (Sales)<br>Agiliad Technologies Pvt. Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420669&pg=ajx')">420669</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sosuke Shinohara (49)<br>Manager, Finance Operation Group, Finance Division<br>Dimension Data Japan Inc.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420654&pg=ajx')">420654</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomomi Kikugawa (41)<br>Executive Assistant to Japanese President CEO<br>Caterpillar Japan K.K.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420656&pg=ajx')">420656</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kanako akutsu (31)<br>Unknown<br>ROCS<br><br><i><p>Bizreach</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420686&pg=ajx')">420686</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nischal Pradhan (30)<br>Service Delivery Manager / Senior Engineer<br>Eire Systems<br><br><i><p>JLPT N2</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420595&pg=ajx')">420595</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasuhiro Aoki (30)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420187&pg=ajx')">420187</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="TAKEHIRO YOSHIHARA (49)<br>Sr. Service Channel Manager<br>F5 Networks<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420725&pg=ajx')">420725</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Zhenyu Zhou (48)<br>Senior Research Associate Scientist<br>Weill Cornell Medical College<br><br><i><p>BIZREACH.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420708&pg=ajx')">420708</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chie Takeuchi (43)<br>Senior Consultant<br>Independant Consultant<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=35740&pg=ajx')">35740</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshiyuki Hasegawa (43)<br>Manager of Construction Machinery Rental Department<br>Mitsubishi Corporation<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420716&pg=ajx')">420716</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yukio Iwata (43)<br>Sr Account Executive<br>ORACLE<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=366127&pg=ajx')">366127</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomoya Suzuki (28)<br>Associate Manager - Global Strategic Expansions<br>Sutherland Global Services<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420626&pg=ajx')">420626</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jervis Lew (30)<br>Java Engineer<br>IVIS Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420751&pg=ajx')">420751</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoko Shiomi (55)<br>Head of Finance, CFO<br>Financial Services Firm of a European Bank<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420702&pg=ajx')">420702</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Henry Chen (38)<br>IT Manager<br>World Association of Nuclear Operators (WANO)<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420715&pg=ajx')">420715</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yujiro Mochizuki (43)<br>ソフトウェア本部<br>Sansei Co., Ltd.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420681&pg=ajx')">420681</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			11			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoki Notoya (40)<br>Translator<br>Venga<br><br><i><p>Francis assessed him by phone.</p>
<p>Has started his career in high tech semicon/electronics industry as an IC design engineer, experienced in project manager, program manager and presales.</p>
<p>He is now at KPIT in charge of Denso as a BDM for an engineering services </p>
<p>On 10M+1.5M</p>
<p>Planning to meet Tata Elxsi next week (bummer) and applied Visteon</p>
<p>I have pitched Wipro and HCL</p>
<p>Good guy</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420528&pg=ajx')">420528</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kathy Akaike (38)<br>Manage SOX Compliance<br>US Auto Parts Network<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420523&pg=ajx')">420523</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taku Sato (49)<br>Sr. Project Manager<br>Zurich Insurance Company Limted<br><br><i><p>JLPT N4 - Applied at Rakuten, Playnext, Works Applications, and more.</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=339085&pg=ajx')">339085</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rohit Romley (-)<br>Salesforce Developer<br>HCL Japan Ltd.<br><br><i><p>JLPT N4 - Applied at Rakuten, Playnext, Works Applications, and more.</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420044&pg=ajx')">420044</a>
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
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasuhisa Ichikawa (53)<br>Project Manager<br>MetLife Ltd.<br><br><i>Bizreach.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=30799&pg=ajx')">30799</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sudarshan Kulkarni (44)<br>Engagement Manager<br>Oracle Corporation<br><br><i><p>Is wanting to leave Oracle as they are restructuring the sales system and his commission would be cut.</p>
<p> </p>
<p>Is selling Managed Service snad Cloud Solutions.  Private cloud mostly.</p>
<p> </p>
<p>Has quite good Japanese.  Was introduced by Nitin Datar whom I placed into Infosys and hopefully into HCL as well.</p>
<p>Is wanting a position as a Senior Account Manager.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=30901&pg=ajx')">30901</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori Ichikawa (37)<br>Solution Prinicpal Consultant<br>Oracle<br><br><i><p>Got his JOEM work experience details. Main focus on Subaru and Mazda (and the rest is Tier-1 clients).</p>
<p>His work between Tier-1 and JOEM divides 50/50.&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323252&pg=ajx')">323252</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sachin Aggarwal (39)<br>Sales Director - Engineering Services<br>HCL Japan Ltd.<br><br><i>Bizreach.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=346430&pg=ajx')">346430</a>
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
			13			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoki Notoya (40)<br>Translator<br>Venga<br><br><i><p>Francis assessed him by phone.</p>
<p>Has started his career in high tech semicon/electronics industry as an IC design engineer, experienced in project manager, program manager and presales.</p>
<p>He is now at KPIT in charge of Denso as a BDM for an engineering services </p>
<p>On 10M+1.5M</p>
<p>Planning to meet Tata Elxsi next week (bummer) and applied Visteon</p>
<p>I have pitched Wipro and HCL</p>
<p>Good guy</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420528&pg=ajx')">420528</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kathy Akaike (38)<br>Manage SOX Compliance<br>US Auto Parts Network<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420523&pg=ajx')">420523</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taku Sato (49)<br>Sr. Project Manager<br>Zurich Insurance Company Limted<br><br><i><p>JLPT N4 - Applied at Rakuten, Playnext, Works Applications, and more.</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=339085&pg=ajx')">339085</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rohit Romley (-)<br>Salesforce Developer<br>HCL Japan Ltd.<br><br><i><p>JLPT N4 - Applied at Rakuten, Playnext, Works Applications, and more.</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420044&pg=ajx')">420044</a>
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
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasuhisa Ichikawa (53)<br>Project Manager<br>MetLife Ltd.<br><br><i>Bizreach.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=30799&pg=ajx')">30799</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sudarshan Kulkarni (44)<br>Engagement Manager<br>Oracle Corporation<br><br><i><p>Is wanting to leave Oracle as they are restructuring the sales system and his commission would be cut.</p>
<p> </p>
<p>Is selling Managed Service snad Cloud Solutions.  Private cloud mostly.</p>
<p> </p>
<p>Has quite good Japanese.  Was introduced by Nitin Datar whom I placed into Infosys and hopefully into HCL as well.</p>
<p>Is wanting a position as a Senior Account Manager.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=30901&pg=ajx')">30901</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori Ichikawa (37)<br>Solution Prinicpal Consultant<br>Oracle<br><br><i><p>Got his JOEM work experience details. Main focus on Subaru and Mazda (and the rest is Tier-1 clients).</p>
<p>His work between Tier-1 and JOEM divides 50/50.&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323252&pg=ajx')">323252</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sachin Aggarwal (39)<br>Sales Director - Engineering Services<br>HCL Japan Ltd.<br><br><i>Bizreach.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=346430&pg=ajx')">346430</a>
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
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kulkarni Harsha (35)<br>Sales<br>L&T Infotech<br><br><i><p>Got his JOEM work experience details. Main focus on Subaru and Mazda (and the rest is Tier-1 clients).</p>
<p>His work between Tier-1 and JOEM divides 50/50.&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416426&pg=ajx')">416426</a>
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
			<div class="stat_holder revenueSize2" id="388">
			7			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoki Notoya (40)<br>Translator<br>Venga<br><br><i><p>Francis assessed him by phone.</p>
<p>Has started his career in high tech semicon/electronics industry as an IC design engineer, experienced in project manager, program manager and presales.</p>
<p>He is now at KPIT in charge of Denso as a BDM for an engineering services </p>
<p>On 10M+1.5M</p>
<p>Planning to meet Tata Elxsi next week (bummer) and applied Visteon</p>
<p>I have pitched Wipro and HCL</p>
<p>Good guy</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420528&pg=ajx')">420528</a>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rohit Romley (-)<br>Salesforce Developer<br>HCL Japan Ltd.<br><br><i><p>JLPT N4 - Applied at Rakuten, Playnext, Works Applications, and more.</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420044&pg=ajx')">420044</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasuhisa Ichikawa (53)<br>Project Manager<br>MetLife Ltd.<br><br><i>Bizreach.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=30799&pg=ajx')">30799</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sachin Aggarwal (39)<br>Sales Director - Engineering Services<br>HCL Japan Ltd.<br><br><i>Bizreach.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=346430&pg=ajx')">346430</a>
										</div>
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
			3			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoki Notoya (40)<br>Translator<br>Venga<br><br><i><p>Francis assessed him by phone.</p>
<p>Has started his career in high tech semicon/electronics industry as an IC design engineer, experienced in project manager, program manager and presales.</p>
<p>He is now at KPIT in charge of Denso as a BDM for an engineering services </p>
<p>On 10M+1.5M</p>
<p>Planning to meet Tata Elxsi next week (bummer) and applied Visteon</p>
<p>I have pitched Wipro and HCL</p>
<p>Good guy</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420528&pg=ajx')">420528</a>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasuhisa Ichikawa (53)<br>Project Manager<br>MetLife Ltd.<br><br><i>Bizreach.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=30799&pg=ajx')">30799</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sachin Aggarwal (39)<br>Sales Director - Engineering Services<br>HCL Japan Ltd.<br><br><i>Bizreach.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=346430&pg=ajx')">346430</a>
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuya Kobayashi (40)<br>Software Developer<br>Samuraiz<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=336188&pg=ajx')">336188</a>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuya Kobayashi (40)<br>Software Developer<br>Samuraiz<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=336188&pg=ajx')">336188</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="388">
			55			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuki Yamashita (42)<br>Assistant Manager<br>Kanden System Solutions Co., Inc.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420515&pg=ajx')">420515</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taisuke Kurita (46)<br>Managing Director<br>EP Consulting<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420521&pg=ajx')">420521</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="KATSUTOSHI SUGANO (50)<br>General Manager, Altek Japan Corporation<br>Altek<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420524&pg=ajx')">420524</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masataka Aoyagi (45)<br>Executive Corporate Officer of Agent Service Division<br>Sony Real Estate<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=25241&pg=ajx')">25241</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoki Notoya (40)<br>Translator<br>Venga<br><br><i><p>Francis assessed him by phone.</p>
<p>Has started his career in high tech semicon/electronics industry as an IC design engineer, experienced in project manager, program manager and presales.</p>
<p>He is now at KPIT in charge of Denso as a BDM for an engineering services </p>
<p>On 10M+1.5M</p>
<p>Planning to meet Tata Elxsi next week (bummer) and applied Visteon</p>
<p>I have pitched Wipro and HCL</p>
<p>Good guy</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420528&pg=ajx')">420528</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akira Maruyama (47)<br>Finance & Corporate Services Department  (Assistant Manager)<br>Russell Investment<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420475&pg=ajx')">420475</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shin Nakahara (50)<br>Deputy Director - Risk Management Dept. / Tokio Marine Holdings, Inc<br>Tokio Marine  & Nichido Holdings<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420522&pg=ajx')">420522</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="YUXIN XUE (26)<br>Research Assistant<br>Tokyo University Graduate School<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420496&pg=ajx')">420496</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masanobu Kimura (52)<br>Japan Country Manager of Education, Software professional Services<br>Hewlett Packard<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420458&pg=ajx')">420458</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshiki Suzuki (39)<br>ASPAC IT Problem Manager<br>Beckman Coulter<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=337057&pg=ajx')">337057</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kathy Akaike (38)<br>Manage SOX Compliance<br>US Auto Parts Network<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420523&pg=ajx')">420523</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chuzen Kin (28)<br>Global Promotions & PR Specialist<br>Works Applications<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=409905&pg=ajx')">409905</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Risa Kobayashi (42)<br>General Manager, IT System Division<br>Transcosmos<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420566&pg=ajx')">420566</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taichi Tokutake (34)<br>Interpreting<br>Cilect<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420526&pg=ajx')">420526</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sarimanu Suzuki (24)<br>Desktop Support Engineer<br>Bank of America Merrill Lynch<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420576&pg=ajx')">420576</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="ATSUSHI IKEDA (43)<br>Executive Director, Control Officer Director, Asia Pacific Controls Office<br>JP Morgan Chase & Co.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420587&pg=ajx')">420587</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomas Kalab (31)<br> Administration staff<br>Intership - Housing Company<br><br><i><p>I think Pierres impression of this guy was off.  He had 2 good references and I liked him when I spoke to him.  Recommending hi to talk with Larry for CCM2. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=410406&pg=ajx')">410406</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taiga Giri (36)<br>System Administrator<br>Arcserve<br><br><i>Nepalese by birth came to Japan in 2002. Now has Japanese citizenship, and is married to a Japanese lady and has one child. Struggling to get by on 4.5M and knows he needs to consider new roles. Wife is currently off to raise the child and so they are living week by week.<br />
<br />
Background is in software dev but moved out of it and into general desktop support. Really bad move career wise and he is paying for it now. Has exp. with a wide variety of technologies including VMWare, BusinessOb</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344837&pg=ajx')">344837</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kyoe Oishi (52)<br>CTO<br>Smileworks<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420582&pg=ajx')">420582</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Taniguchi (52)<br>Product Management<br>Amkor Technology<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420543&pg=ajx')">420543</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akitsugu MATSUSHIMA (45)<br>Senior Account Manager<br>Huawei Japan<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420584&pg=ajx')">420584</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuka Murazumi (41)<br>Sales Operation Leader in Project and Contract Specialists<br>En World Japan K.K.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420620&pg=ajx')">420620</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Christian Raphalen (48)<br>Business Analyst<br>Hewlett Packard<br><br><i>Linked In</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=401329&pg=ajx')">401329</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kimiko MINEGISHI (48)<br>Public Relation Division, Secretary / Translator to CEO<br>Universal Entertainment<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420559&pg=ajx')">420559</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seiichi Kato (47)<br>Sales Support Consultant, Sales Strategy & Planning Team<br>Dell Japan Inc.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420547&pg=ajx')">420547</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Liang Zhao (34)<br>Senior SAP SRM Consultant<br>Sap<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420505&pg=ajx')">420505</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masanori Motomatsu (35)<br>Network Senior Engineer and group Leader<br>Ryoyu Systems Co., Ltd.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420627&pg=ajx')">420627</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazuki Tatebe (45)<br>Sales<br>Furukawa Electric<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420565&pg=ajx')">420565</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="YUe Wang (48)<br>CFO - Head of Finance and Accounting<br>Phenix Co.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420589&pg=ajx')">420589</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazuya Morimoto (40)<br>Marketing manager,Marketing director<br>JAC Recruitment<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420632&pg=ajx')">420632</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuko Igarashi (-)<br>Service Delivery Manager<br>Microsoft<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420641&pg=ajx')">420641</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michael Pernia (40)<br>Program Manager / Quality Manager<br>Nokia Mobile Networks<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420642&pg=ajx')">420642</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="MASAMI AZUMA (35)<br> System Test Engineer<br>Intersoft<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420588&pg=ajx')">420588</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mozan Totani (48)<br>Director, Head of Engineering, Strategy and Construction<br>Yahoo<br><br><i><p>LINKEDIN</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420501&pg=ajx')">420501</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Karthikeyan Kannaiyan (35)<br>Business Analyst-Retail banking<br>VirtusaPolaris<br><br><i><p>Linked In</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415912&pg=ajx')">415912</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Krishnamoorthy Kesavan (46)<br>Consultant<br>Triumph International Japan Ltd.<br><br><i>He is working with Triumph as a contractual IT systems engineer for 4 years now. His work is a per-project basis. His work permit will expire in 2010. He is a mover and will move for the right opps. He acts as project leader for the work with Triumph and manages around 4-5 pax. He wants a permanent position in the future and is looking at managerial roles as well. He can manage a small team and he is ambitious. He can read and write JAP because it is all that he uses in his current work environm</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=221428&pg=ajx')">221428</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saji Raju (39)<br>Program Manager / Delivery Manager<br>KPIT TECHNOLOGIES<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417917&pg=ajx')">417917</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taku Sato (49)<br>Sr. Project Manager<br>Zurich Insurance Company Limted<br><br><i><p>JLPT N4 - Applied at Rakuten, Playnext, Works Applications, and more.</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=339085&pg=ajx')">339085</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rohit Romley (-)<br>Salesforce Developer<br>HCL Japan Ltd.<br><br><i><p>JLPT N4 - Applied at Rakuten, Playnext, Works Applications, and more.</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420044&pg=ajx')">420044</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Vishwa Ved (39)<br>Director (Sales)<br>Agiliad Technologies Pvt. Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420669&pg=ajx')">420669</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sosuke Shinohara (49)<br>Manager, Finance Operation Group, Finance Division<br>Dimension Data Japan Inc.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420654&pg=ajx')">420654</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomomi Kikugawa (41)<br>Executive Assistant to Japanese President CEO<br>Caterpillar Japan K.K.<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420656&pg=ajx')">420656</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kanako akutsu (31)<br>Unknown<br>ROCS<br><br><i><p>Bizreach</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420686&pg=ajx')">420686</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nischal Pradhan (30)<br>Service Delivery Manager / Senior Engineer<br>Eire Systems<br><br><i><p>JLPT N2</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420595&pg=ajx')">420595</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasuhiro Aoki (30)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420187&pg=ajx')">420187</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="TAKEHIRO YOSHIHARA (49)<br>Sr. Service Channel Manager<br>F5 Networks<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420725&pg=ajx')">420725</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Zhenyu Zhou (48)<br>Senior Research Associate Scientist<br>Weill Cornell Medical College<br><br><i><p>BIZREACH.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420708&pg=ajx')">420708</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chie Takeuchi (43)<br>Senior Consultant<br>Independant Consultant<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=35740&pg=ajx')">35740</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshiyuki Hasegawa (43)<br>Manager of Construction Machinery Rental Department<br>Mitsubishi Corporation<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420716&pg=ajx')">420716</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yukio Iwata (43)<br>Sr Account Executive<br>ORACLE<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=366127&pg=ajx')">366127</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomoya Suzuki (28)<br>Associate Manager - Global Strategic Expansions<br>Sutherland Global Services<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420626&pg=ajx')">420626</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jervis Lew (30)<br>Java Engineer<br>IVIS Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420751&pg=ajx')">420751</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoko Shiomi (55)<br>Head of Finance, CFO<br>Financial Services Firm of a European Bank<br><br><i><p>Bizreach.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420702&pg=ajx')">420702</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Henry Chen (38)<br>IT Manager<br>World Association of Nuclear Operators (WANO)<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420715&pg=ajx')">420715</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yujiro Mochizuki (43)<br>ソフトウェア本部<br>Sansei Co., Ltd.<br><br><i><p>Bizreach</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420681&pg=ajx')">420681</a>
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
			<div class="stat_holder revenueSize2" id="388">
			5			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoki Notoya (40)<br>Translator<br>Venga<br><br><i><p>Francis assessed him by phone.</p>
<p>Has started his career in high tech semicon/electronics industry as an IC design engineer, experienced in project manager, program manager and presales.</p>
<p>He is now at KPIT in charge of Denso as a BDM for an engineering services </p>
<p>On 10M+1.5M</p>
<p>Planning to meet Tata Elxsi next week (bummer) and applied Visteon</p>
<p>I have pitched Wipro and HCL</p>
<p>Good guy</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420528&pg=ajx')">420528</a>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rohit Romley (-)<br>Salesforce Developer<br>HCL Japan Ltd.<br><br><i><p>JLPT N4 - Applied at Rakuten, Playnext, Works Applications, and more.</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420044&pg=ajx')">420044</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasuhisa Ichikawa (53)<br>Project Manager<br>MetLife Ltd.<br><br><i>Bizreach.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=30799&pg=ajx')">30799</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
			3			</div>
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
										<a data-toggle="tooltip" title="Candidate ID: 420528" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9595&pg=ajx')">9595</a>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a data-toggle="tooltip" title="Candidate ID: 346430" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=8762&pg=ajx')">8762</a>
										</div>
							<div class="hover_row ">
										<a data-toggle="tooltip" title="Candidate ID: 420430" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9556&pg=ajx')">9556</a>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rohit Romley (-)<br>Salesforce Developer<br>HCL Japan Ltd.<br><br><i><p>JLPT N4 - Applied at Rakuten, Playnext, Works Applications, and more.</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420044&pg=ajx')">420044</a>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rohit Romley (-)<br>Salesforce Developer<br>HCL Japan Ltd.<br><br><i><p>JLPT N4 - Applied at Rakuten, Playnext, Works Applications, and more.</p>
<p>&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420044&pg=ajx')">420044</a>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
		<td class="name_column revenueSize">M. Moir</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			15			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Anna Skrypka (-)<br>Digital Marketing & eCommerce Manager APAC<br>Autodesk<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420663&pg=ajx')">420663</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuko Kaneko (-)<br>Associate<br>Nishimura & Asahi<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=276229&pg=ajx')">276229</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Elisabeth Heinz (-)<br>Paralegal<br>Kuzawa International Patent Office<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420673&pg=ajx')">420673</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mitchell Reynolds (-)<br>Corporate Paralegal<br>Mitsui & Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420675&pg=ajx')">420675</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Haruki Ishibashi (-)<br>HRBP - HR Consultant<br>SERVICESOURCE INTERNATIONAL PTE LTD Singapore<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420774&pg=ajx')">420774</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sanjoy Mallik (-)<br>Director - Strategic Marketing<br>Johnson & Johnson K.K.<br><br><i><p>Ethicon BU.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420634&pg=ajx')">420634</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuji Yagi (-)<br>Summer Associate<br>Anderson Mori & Tomotsune<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420662&pg=ajx')">420662</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Cathryn Jiang (29)<br>Business Manager<br>Takeda Pharmaceutical Co., Ltd.<br><br><i><p><span style=color:#ff0000;><strong>NOT</strong></span> interested in Cognizant or similar companies.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420664&pg=ajx')">420664</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kaori Miyake (56)<br>Senior Corporate Counsel<br>Amazon<br><br><i><p>Said Amazon Legal &amp; Compliance made up of around 40 persons.  Headed by Angela Krantz.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420668&pg=ajx')">420668</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Atsuko Kono (43)<br>Paralegal<br>Undisclosed<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420667&pg=ajx')">420667</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mariko Tsujita (-)<br>Paralegal<br>Hitachi Johnson Controls<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420688&pg=ajx')">420688</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masako Tanaka (-)<br>Litigation Paralegal<br>Nikon Corporation<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420704&pg=ajx')">420704</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryu Hirako (40)<br>Department Manager<br>GlaxoSmithKline K.K. (GSK)<br><br><i><p>Needs to grow a pair!!</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406315&pg=ajx')">406315</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hideaki Higashi (36)<br>Senior TA Partner<br>Avanade, Inc.<br><br><i><p>Has spent many years living and working overseas: lived in the US, in Singapore and has been in Taiwan for the last 2.5 years.&nbsp; Most of his career has been in recruiting within IT industries.&nbsp; In Japan, he had worked at Deloitte for 1.5 years in recruiting.&nbsp; Has been working at Digital River in Taiwan for the last 2 years.&nbsp; The company was acquired recently and they laid off back office staff and cut the recruiting headcount.&nbsp; He has remained working with them as a co</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416379&pg=ajx')">416379</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroyuki Koizumi (45)<br>Legal Specialist<br>CMIC Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420758&pg=ajx')">420758</a>
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
			<div class="stat_holder revenueSize2" id="314">
			10			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sanjoy Mallik (-)<br>Director - Strategic Marketing<br>Johnson & Johnson K.K.<br><br><i><p>Ethicon BU.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420634&pg=ajx')">420634</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuji Yagi (-)<br>Summer Associate<br>Anderson Mori & Tomotsune<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420662&pg=ajx')">420662</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Cathryn Jiang (29)<br>Business Manager<br>Takeda Pharmaceutical Co., Ltd.<br><br><i><p><span style=color:#ff0000;><strong>NOT</strong></span> interested in Cognizant or similar companies.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420664&pg=ajx')">420664</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kaori Miyake (56)<br>Senior Corporate Counsel<br>Amazon<br><br><i><p>Said Amazon Legal &amp; Compliance made up of around 40 persons.  Headed by Angela Krantz.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420668&pg=ajx')">420668</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Atsuko Kono (43)<br>Paralegal<br>Undisclosed<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420667&pg=ajx')">420667</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mariko Tsujita (-)<br>Paralegal<br>Hitachi Johnson Controls<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420688&pg=ajx')">420688</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masako Tanaka (-)<br>Litigation Paralegal<br>Nikon Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420704&pg=ajx')">420704</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryu Hirako (40)<br>Department Manager<br>GlaxoSmithKline K.K. (GSK)<br><br><i><p>Needs to grow a pair!!</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406315&pg=ajx')">406315</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hideaki Higashi (36)<br>Senior TA Partner<br>Avanade, Inc.<br><br><i><p>Has spent many years living and working overseas: lived in the US, in Singapore and has been in Taiwan for the last 2.5 years.&nbsp; Most of his career has been in recruiting within IT industries.&nbsp; In Japan, he had worked at Deloitte for 1.5 years in recruiting.&nbsp; Has been working at Digital River in Taiwan for the last 2 years.&nbsp; The company was acquired recently and they laid off back office staff and cut the recruiting headcount.&nbsp; He has remained working with them as a co</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416379&pg=ajx')">416379</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroyuki Koizumi (45)<br>Legal Specialist<br>CMIC Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420758&pg=ajx')">420758</a>
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
			<div class="stat_holder revenueSize2" id="314">
			1			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hayato Tsuchikawa (37)<br>Chief Risk Officer<br>Zurich Insurance Company Limted<br><br><i><p>Met in person for lunch. Well presented, not the most forthcoming in person, but warmed up after a while. Very happy with Zurich, and has excelled extremely well in his career. Ambitious and wants high level opportunities as well as money.</p>
<p>Making 14.6M base right now, with 18.6M total. Said he wants 20M to consider leaving. &nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=339183&pg=ajx')">339183</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			2			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hayato Tsuchikawa (37)<br>Chief Risk Officer<br>Zurich Insurance Company Limted<br><br><i><p>Met in person for lunch. Well presented, not the most forthcoming in person, but warmed up after a while. Very happy with Zurich, and has excelled extremely well in his career. Ambitious and wants high level opportunities as well as money.</p>
<p>Making 14.6M base right now, with 18.6M total. Said he wants 20M to consider leaving. &nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=339183&pg=ajx')">339183</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kei Nakamine (34)<br>Manager<br>Shire Baxalta<br><br><i><p>Met in person for lunch. Well presented, not the most forthcoming in person, but warmed up after a while. Very happy with Zurich, and has excelled extremely well in his career. Ambitious and wants high level opportunities as well as money.</p>
<p>Making 14.6M base right now, with 18.6M total. Said he wants 20M to consider leaving. &nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323322&pg=ajx')">323322</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="314">
			1			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="314">
			9			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sanjoy Mallik (-)<br>Director - Strategic Marketing<br>Johnson & Johnson K.K.<br><br><i><p>Ethicon BU.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420634&pg=ajx')">420634</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuji Yagi (-)<br>Summer Associate<br>Anderson Mori & Tomotsune<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420662&pg=ajx')">420662</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Cathryn Jiang (29)<br>Business Manager<br>Takeda Pharmaceutical Co., Ltd.<br><br><i><p><span style=color:#ff0000;><strong>NOT</strong></span> interested in Cognizant or similar companies.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420664&pg=ajx')">420664</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kaori Miyake (56)<br>Senior Corporate Counsel<br>Amazon<br><br><i><p>Said Amazon Legal &amp; Compliance made up of around 40 persons.  Headed by Angela Krantz.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420668&pg=ajx')">420668</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Atsuko Kono (43)<br>Paralegal<br>Undisclosed<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420667&pg=ajx')">420667</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mariko Tsujita (-)<br>Paralegal<br>Hitachi Johnson Controls<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420688&pg=ajx')">420688</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masako Tanaka (-)<br>Litigation Paralegal<br>Nikon Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420704&pg=ajx')">420704</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryu Hirako (40)<br>Department Manager<br>GlaxoSmithKline K.K. (GSK)<br><br><i><p>Needs to grow a pair!!</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406315&pg=ajx')">406315</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroyuki Koizumi (45)<br>Legal Specialist<br>CMIC Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420758&pg=ajx')">420758</a>
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
			<div class="stat_holder revenueSize2" id="314">
			0			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
			<div class="stat_holder revenueSize2" id="314">
			1			</div>
			<div class="stat_candi_info 314">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
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
		<td class="name_column revenueSize">O. Rondos</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			12			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chikako Abe (-)<br>Public Relations - Director<br>Estee Lauder Group<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420570&pg=ajx')">420570</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenkichi Tanaka (40)<br>Director - Event Planner<br>Unknown<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420629&pg=ajx')">420629</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoko Miwa (51)<br>Executive Secretary - General Affairs<br>Fresenius Kabi Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323143&pg=ajx')">323143</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Tomioka (47)<br>Company Engineer and Manager<br>Kaisei<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=362903&pg=ajx')">362903</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rei Hayashi (34)<br>Events Operations Manager, Japan & Korea<br>The Economist Group<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420693&pg=ajx')">420693</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Revan Wabale (27)<br>Big Data Architect<br>Indo Sakura<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420643&pg=ajx')">420643</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Noritaka Akiyoshi (37)<br>Team Leader, Sales Marketing,<br>D.A. Consortium Corp.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420698&pg=ajx')">420698</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Alexander Kachanov (46)<br>AVP - Web Developer<br>Merrill Lynch Japan Securities Co., Ltd.<br><br><i>Web Developer from Belarus, got that russian accent going. Unemployed right now because his company went bankrupt. Looking for anything really, but would like to get into FIN, not enough exp for it though. Specialist in JAVA, not really too keen on .NET. Low j level. Pitch Moog, he&#039;s up for it, but I already have 2 good candidates there. See if they want to meet him.</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=6936&pg=ajx')">6936</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yugandhar Gangu (24)<br>Senior Programmer<br>Unikaihatsu Software Pvt. Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420649&pg=ajx')">420649</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Harada (45)<br>Public Relations<br>Independant Consultant<br><br><i>Has experience in tax accounting,consolidation, tax filing, financial reporting, Jap GAAP experience, all hands on. Studied US GAAP for 2 years but has never used, limited SOX experience. A lot of general affairs work.<br />
Also, a lot of PR work, (Lotte Marines fan club - 20,000 members), Eddie Bauer, Itoen just some of the campaigns she has worked on - organizing advertising campaigns, media relations, promotions etc.<br />
Is not keen on F&A anymore.  Sees herself in PR.  Would like a PR job</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=254167&pg=ajx')">254167</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadahiro Hayakawa (44)<br>Consultant<br>AREX Corporation<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415582&pg=ajx')">415582</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinobu Naka (40)<br>Digital Marketing Specialist<br>Spring Airlines<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420764&pg=ajx')">420764</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			12			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chikako Abe (-)<br>Public Relations - Director<br>Estee Lauder Group<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420570&pg=ajx')">420570</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenkichi Tanaka (40)<br>Director - Event Planner<br>Unknown<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420629&pg=ajx')">420629</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoko Miwa (51)<br>Executive Secretary - General Affairs<br>Fresenius Kabi Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323143&pg=ajx')">323143</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Tomioka (47)<br>Company Engineer and Manager<br>Kaisei<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=362903&pg=ajx')">362903</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rei Hayashi (34)<br>Events Operations Manager, Japan & Korea<br>The Economist Group<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420693&pg=ajx')">420693</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Revan Wabale (27)<br>Big Data Architect<br>Indo Sakura<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420643&pg=ajx')">420643</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Noritaka Akiyoshi (37)<br>Team Leader, Sales Marketing,<br>D.A. Consortium Corp.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420698&pg=ajx')">420698</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Alexander Kachanov (46)<br>AVP - Web Developer<br>Merrill Lynch Japan Securities Co., Ltd.<br><br><i>Web Developer from Belarus, got that russian accent going. Unemployed right now because his company went bankrupt. Looking for anything really, but would like to get into FIN, not enough exp for it though. Specialist in JAVA, not really too keen on .NET. Low j level. Pitch Moog, he&#039;s up for it, but I already have 2 good candidates there. See if they want to meet him.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=6936&pg=ajx')">6936</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yugandhar Gangu (24)<br>Senior Programmer<br>Unikaihatsu Software Pvt. Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420649&pg=ajx')">420649</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Harada (45)<br>Public Relations<br>Independant Consultant<br><br><i>Has experience in tax accounting,consolidation, tax filing, financial reporting, Jap GAAP experience, all hands on. Studied US GAAP for 2 years but has never used, limited SOX experience. A lot of general affairs work.<br />
Also, a lot of PR work, (Lotte Marines fan club - 20,000 members), Eddie Bauer, Itoen just some of the campaigns she has worked on - organizing advertising campaigns, media relations, promotions etc.<br />
Is not keen on F&A anymore.  Sees herself in PR.  Would like a PR job</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=254167&pg=ajx')">254167</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadahiro Hayakawa (44)<br>Consultant<br>AREX Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415582&pg=ajx')">415582</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinobu Naka (40)<br>Digital Marketing Specialist<br>Spring Airlines<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420764&pg=ajx')">420764</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			5			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Tomioka (47)<br>Company Engineer and Manager<br>Kaisei<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=362903&pg=ajx')">362903</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Noritaka Akiyoshi (37)<br>Team Leader, Sales Marketing,<br>D.A. Consortium Corp.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420698&pg=ajx')">420698</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chuzen Kin (28)<br>Global Promotions & PR Specialist<br>Works Applications<br><br><i><p>SALARY CORRECTION:</p>
<p>Current Salary: JPY 330,000 (monthly) X 14 (months) = JPY 46, 200,000<br />Bonus is Included (2 months)<br />Total salary: JPY 4,620,000</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=409905&pg=ajx')">409905</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mohammad Sajid (34)<br>Business Development/Account Management Professional (Bilingual: English⇔Japanese)<br>SRM Systems & Software K.K.<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417070&pg=ajx')">417070</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Katsuhisa Misawa (46)<br>IT Engineer<br>Global Navigator Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418245&pg=ajx')">418245</a>
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
			<div class="stat_holder revenueSize2" id="493">
			1			</div>
			<div class="stat_candi_info 493">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Liu Zhao (34)<br>Global Account Executive<br>Dentsu<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420273&pg=ajx')">420273</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			0			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
			<div class="stat_holder revenueSize2" id="493">
			0			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
			<div class="stat_holder revenueSize2" id="493">
			0			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
			<div class="stat_holder revenueSize2" id="493">
			1			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akshay Rajvanshi (24)<br>Java Software Developer<br>Hikari Tsushin, Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420433&pg=ajx')">420433</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			0			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
			<div class="stat_holder revenueSize2" id="493">
			11			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chikako Abe (-)<br>Public Relations - Director<br>Estee Lauder Group<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420570&pg=ajx')">420570</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenkichi Tanaka (40)<br>Director - Event Planner<br>Unknown<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420629&pg=ajx')">420629</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoko Miwa (51)<br>Executive Secretary - General Affairs<br>Fresenius Kabi Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323143&pg=ajx')">323143</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Tomioka (47)<br>Company Engineer and Manager<br>Kaisei<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=362903&pg=ajx')">362903</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rei Hayashi (34)<br>Events Operations Manager, Japan & Korea<br>The Economist Group<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420693&pg=ajx')">420693</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Revan Wabale (27)<br>Big Data Architect<br>Indo Sakura<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420643&pg=ajx')">420643</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Noritaka Akiyoshi (37)<br>Team Leader, Sales Marketing,<br>D.A. Consortium Corp.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420698&pg=ajx')">420698</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Alexander Kachanov (46)<br>AVP - Web Developer<br>Merrill Lynch Japan Securities Co., Ltd.<br><br><i>Web Developer from Belarus, got that russian accent going. Unemployed right now because his company went bankrupt. Looking for anything really, but would like to get into FIN, not enough exp for it though. Specialist in JAVA, not really too keen on .NET. Low j level. Pitch Moog, he&#039;s up for it, but I already have 2 good candidates there. See if they want to meet him.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=6936&pg=ajx')">6936</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yugandhar Gangu (24)<br>Senior Programmer<br>Unikaihatsu Software Pvt. Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420649&pg=ajx')">420649</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadahiro Hayakawa (44)<br>Consultant<br>AREX Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415582&pg=ajx')">415582</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinobu Naka (40)<br>Digital Marketing Specialist<br>Spring Airlines<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420764&pg=ajx')">420764</a>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="493">
			0			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
			<div class="stat_holder revenueSize2" id="493">
			0			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
			<div class="stat_holder revenueSize2" id="493">
			1			</div>
			<div class="stat_candi_info 493">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
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
	
					<tr class="hover_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">P. Miles Harry</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			5			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kanai Keisuke (37)<br>Logistics Management Staff<br>Dupont Chemical<br><br><i><p>Is actively looking for new positions.</p>
<p>&nbsp;</p>
<p>Experience in Pharma and logistics and IT area.&nbsp; Some SAP related experience.</p>
<p>&nbsp;</p>
<p>Has worked as logistics management specialist, promoted from staff level in May 2014, in charge of inventory management, import/export operation management, demand planning support, purchasing, forecast management in system, customer service operation including direct shipments from overseas factories, developing programs with</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=400222&pg=ajx')">400222</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinobu Ichikawa (43)<br>Manager Technical Services Packaging<br>Havi Global Solutions Japan<br><br><i><p>Think they decided to let him go after he finished all the projects.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420552&pg=ajx')">420552</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Manami Kogawa (28)<br>Logistics QA<br>Danone Japan K.K.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420650&pg=ajx')">420650</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masato Nakamura (33)<br>Operations Manager<br>Anheuser-Bush<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420750&pg=ajx')">420750</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tsuyoshi Yoshimura (53)<br>Supply Chain Director<br>Catalent Pharma Solutions, Inc.<br><br><i><p>Referral from hayashi-san from Janssen</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420674&pg=ajx')">420674</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			3			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Manami Kogawa (28)<br>Logistics QA<br>Danone Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420650&pg=ajx')">420650</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masato Nakamura (33)<br>Operations Manager<br>Anheuser-Bush<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420750&pg=ajx')">420750</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tsuyoshi Yoshimura (53)<br>Supply Chain Director<br>Catalent Pharma Solutions, Inc.<br><br><i><p>Referral from hayashi-san from Janssen</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420674&pg=ajx')">420674</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			8			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinobu Ichikawa (43)<br>Manager Technical Services Packaging<br>Havi Global Solutions Japan<br><br><i><p>Think they decided to let him go after he finished all the projects.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420552&pg=ajx')">420552</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tsuyoshi Yoshimura (53)<br>Supply Chain Director<br>Catalent Pharma Solutions, Inc.<br><br><i><p>Referral from hayashi-san from Janssen</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420674&pg=ajx')">420674</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takahiro Nakayama (46)<br>Staff<br>SC Johnson Co., Ltd.<br><br><i>Met face to face. Good candidate. English is OK. presentable and sociable.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=18950&pg=ajx')">18950</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kinya Ogawa (49)<br>Senior Manager<br>Chanel K.K.<br><br><i><p>Spoke with her to catch up. Said she is interested in looking outside. Feels undervalued and underpaid for the work she does. Covering all product launch and new entry product to commercialization for all of Japan. Reporting to Singapore. Young. Seemed flaky. Interested in Amazon and wants a chance to meet them but she seemed like she was sitting on the fence.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=343795&pg=ajx')">343795</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chingchun Ho (31)<br>Project Coordinator<br>Mondelez<br><br><i>Met face to face. Good candidate. English is OK. presentable and sociable.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=400780&pg=ajx')">400780</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Inoue (47)<br>Group Manager<br>Procter & Gamble<br><br><i><p>Spoke with her to catch up. Said she is interested in looking outside. Feels undervalued and underpaid for the work she does. Covering all product launch and new entry product to commercialization for all of Japan. Reporting to Singapore. Young. Seemed flaky. Interested in Amazon and wants a chance to meet them but she seemed like she was sitting on the fence.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406608&pg=ajx')">406608</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Houde Zhou (37)<br>Product & Manufacturing Manager<br>Micron Technology<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=411441&pg=ajx')">411441</a>
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
			<div class="stat_holder revenueSize2" id="374">
			4			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinobu Ichikawa (43)<br>Manager Technical Services Packaging<br>Havi Global Solutions Japan<br><br><i><p>Think they decided to let him go after he finished all the projects.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420552&pg=ajx')">420552</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kinya Ogawa (49)<br>Senior Manager<br>Chanel K.K.<br><br><i><p>Spoke with her to catch up. Said she is interested in looking outside. Feels undervalued and underpaid for the work she does. Covering all product launch and new entry product to commercialization for all of Japan. Reporting to Singapore. Young. Seemed flaky. Interested in Amazon and wants a chance to meet them but she seemed like she was sitting on the fence.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=343795&pg=ajx')">343795</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Chingchun Ho (31)<br>Project Coordinator<br>Mondelez<br><br><i>Met face to face. Good candidate. English is OK. presentable and sociable.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=400780&pg=ajx')">400780</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Franck Chesneau (35)<br>Process Engineer<br>Danone Japan K.K.<br><br><i><p>Referral from hayashi-san from Janssen</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=362853&pg=ajx')">362853</a>
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
			<div class="stat_holder revenueSize2" id="374">
			3			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="374">
			0			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="374">
			0			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="374">
			2			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yukinori Yamada (50)<br>Engineering Director<br>Coca-Cola East Japan<br><br><i><p>GM of Engineering Department at CCEJ.&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406734&pg=ajx')">406734</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			1			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yukinori Yamada (50)<br>Engineering Director<br>Coca-Cola East Japan<br><br><i><p>GM of Engineering Department at CCEJ.&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406734&pg=ajx')">406734</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="374">
			2			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Manami Kogawa (28)<br>Logistics QA<br>Danone Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420650&pg=ajx')">420650</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masato Nakamura (33)<br>Operations Manager<br>Anheuser-Bush<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420750&pg=ajx')">420750</a>
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
			<div class="stat_holder revenueSize2" id="374">
			1			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="374">
			1			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a data-toggle="tooltip" title="Candidate ID: 414484" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9467&pg=ajx')">9467</a>
										</div>
							<div class="hover_row  colored_row">
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
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="374">
			0			</div>
			<div class="stat_candi_info 374">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
		<td class="name_column revenueSize">P. Thai</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			10			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinya Murakami (34)<br>Business Development Executive<br>Limelight Networks<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420537&pg=ajx')">420537</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryohei Maeda (28)<br>Marketing Executive<br>American Express<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420619&pg=ajx')">420619</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichiro Enomoto (52)<br>Senior Manager<br>Wind River Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420598&pg=ajx')">420598</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoyuki Makita (43)<br>CFO Japan and Korea<br>Lexis Nexis Japan<br><br><i><p>he has just changed his job 11 months ago to RELX Group as:</p>
<p>Finance Director<br />LexisNexis (part of Reed Elsevier)</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=37562&pg=ajx')">37562</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Kobayashi (-)<br>Account Manager<br>PTC<br><br><i><p>Is on 14M (50:50) which he feels is a very tough structure.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420696&pg=ajx')">420696</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akihito Sugai (38)<br>Senior Manager<br>Accenture Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418121&pg=ajx')">418121</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuka Mamiya (36)<br>Digital Marketing Manager<br>Sun Corporation<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420685&pg=ajx')">420685</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Satoshi Fujita (37)<br>Senior Consultant<br>Genpact Japan<br><br><i><p>Linked In.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413457&pg=ajx')">413457</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryosuke Matsushita (31)<br>Business Strategy Manager<br>Accenture Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420694&pg=ajx')">420694</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Maedomari (29)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420707&pg=ajx')">420707</a>
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
			<div class="stat_holder revenueSize2" id="276">
			10			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinya Murakami (34)<br>Business Development Executive<br>Limelight Networks<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420537&pg=ajx')">420537</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryohei Maeda (28)<br>Marketing Executive<br>American Express<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420619&pg=ajx')">420619</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichiro Enomoto (52)<br>Senior Manager<br>Wind River Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420598&pg=ajx')">420598</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoyuki Makita (43)<br>CFO Japan and Korea<br>Lexis Nexis Japan<br><br><i><p>he has just changed his job 11 months ago to RELX Group as:</p>
<p>Finance Director<br />LexisNexis (part of Reed Elsevier)</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=37562&pg=ajx')">37562</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Kobayashi (-)<br>Account Manager<br>PTC<br><br><i><p>Is on 14M (50:50) which he feels is a very tough structure.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420696&pg=ajx')">420696</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akihito Sugai (38)<br>Senior Manager<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418121&pg=ajx')">418121</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuka Mamiya (36)<br>Digital Marketing Manager<br>Sun Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420685&pg=ajx')">420685</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Satoshi Fujita (37)<br>Senior Consultant<br>Genpact Japan<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413457&pg=ajx')">413457</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryosuke Matsushita (31)<br>Business Strategy Manager<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420694&pg=ajx')">420694</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Maedomari (29)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420707&pg=ajx')">420707</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			7			</div>
			<div class="stat_candi_info 276">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Maedomari (29)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420707&pg=ajx')">420707</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazufumi Nieda (50)<br>Finance Manager<br>Autodesk Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=121633&pg=ajx')">121633</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koji Sakahashi (42)<br>Sales Manager<br>Digital Guardian<br><br><i><p>Very nice candidate, and very placable for BA roles as well as Risk BA/PM too. Only been with PP since Sept2014, but says the company is changing and might be going through IPO soon. Thinks the people there are good, intelligent, but wants to work with more motivated team. Important factor for him is integrity and feels like he has limited empowerment at PP.</p>
<p>Spoke about ideas at AIG, and quite interested. Also spoke about MetLife too, less interested in them, but still open to see JDs</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=123115&pg=ajx')">123115</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Kato (45)<br>Product Marketing<br>Vistanet<br><br><i><p>Just returned from working in the Yukon territories in Canada.  His wife and kid are still there but they will be returning to Japan soon.  Is looking for a role in Tokyo, really likes the IoT areas, and AI, in cutting edge technologies.  Would like 14M but this is a bit high.  Very good E and is open minded at this point.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=206683&pg=ajx')">206683</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroyuki Morita (45)<br>Senior Sales Manager<br>FPT JAPAN Co.,Ltd<br><br><i><p>Just returned from working in the Yukon territories in Canada.  His wife and kid are still there but they will be returning to Japan soon.  Is looking for a role in Tokyo, really likes the IoT areas, and AI, in cutting edge technologies.  Would like 14M but this is a bit high.  Very good E and is open minded at this point.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=361869&pg=ajx')">361869</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiichiro Hori (41)<br>Lead Consultant<br>PayPal<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=366948&pg=ajx')">366948</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Miyuki Nakamura (27)<br>eCommerce & Digital Marketing eCommerce customer Marketing Executive<br>Unilever<br><br><i>E6. Good positive attitude on the phone, easy to speak with. He is on the Business side, who consults with clients mainly in Automotive, Industrial and Manufacturing, plus any client they can open regardless of industry domain, Consulting them on Data Security and Cloud Security Solutions, by Business Analysis assessing their business, providing Risk Assessment, gathering their requirements and providing them with the appropriate solution. Carries a Sales Target of USD $3M/annual ($1M Managed Se</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420541&pg=ajx')">420541</a>
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
			<div class="stat_holder revenueSize2" id="276">
			7			</div>
			<div class="stat_candi_info 276">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Maedomari (29)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420707&pg=ajx')">420707</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazufumi Nieda (50)<br>Finance Manager<br>Autodesk Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=121633&pg=ajx')">121633</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koji Sakahashi (42)<br>Sales Manager<br>Digital Guardian<br><br><i><p>Very nice candidate, and very placable for BA roles as well as Risk BA/PM too. Only been with PP since Sept2014, but says the company is changing and might be going through IPO soon. Thinks the people there are good, intelligent, but wants to work with more motivated team. Important factor for him is integrity and feels like he has limited empowerment at PP.</p>
<p>Spoke about ideas at AIG, and quite interested. Also spoke about MetLife too, less interested in them, but still open to see JDs</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=123115&pg=ajx')">123115</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Kato (45)<br>Product Marketing<br>Vistanet<br><br><i><p>Just returned from working in the Yukon territories in Canada.  His wife and kid are still there but they will be returning to Japan soon.  Is looking for a role in Tokyo, really likes the IoT areas, and AI, in cutting edge technologies.  Would like 14M but this is a bit high.  Very good E and is open minded at this point.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=206683&pg=ajx')">206683</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiichiro Hori (41)<br>Lead Consultant<br>PayPal<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=366948&pg=ajx')">366948</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Miyuki Nakamura (27)<br>eCommerce & Digital Marketing eCommerce customer Marketing Executive<br>Unilever<br><br><i>E6. Good positive attitude on the phone, easy to speak with. He is on the Business side, who consults with clients mainly in Automotive, Industrial and Manufacturing, plus any client they can open regardless of industry domain, Consulting them on Data Security and Cloud Security Solutions, by Business Analysis assessing their business, providing Risk Assessment, gathering their requirements and providing them with the appropriate solution. Carries a Sales Target of USD $3M/annual ($1M Managed Se</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420541&pg=ajx')">420541</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masatoshi Nagai (38)<br>Senior Consultant, Industrial Products and Heavy Industry Unit<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417785&pg=ajx')">417785</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="276">
			2			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Kato (45)<br>Product Marketing<br>Vistanet<br><br><i><p>Just returned from working in the Yukon territories in Canada.  His wife and kid are still there but they will be returning to Japan soon.  Is looking for a role in Tokyo, really likes the IoT areas, and AI, in cutting edge technologies.  Would like 14M but this is a bit high.  Very good E and is open minded at this point.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=206683&pg=ajx')">206683</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Kato (45)<br>Product Marketing<br>Vistanet<br><br><i><p>Just returned from working in the Yukon territories in Canada.  His wife and kid are still there but they will be returning to Japan soon.  Is looking for a role in Tokyo, really likes the IoT areas, and AI, in cutting edge technologies.  Would like 14M but this is a bit high.  Very good E and is open minded at this point.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=206683&pg=ajx')">206683</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jun Kato (45)<br>Product Marketing<br>Vistanet<br><br><i><p>Just returned from working in the Yukon territories in Canada.  His wife and kid are still there but they will be returning to Japan soon.  Is looking for a role in Tokyo, really likes the IoT areas, and AI, in cutting edge technologies.  Would like 14M but this is a bit high.  Very good E and is open minded at this point.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=206683&pg=ajx')">206683</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="276">
			10			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shinya Murakami (34)<br>Business Development Executive<br>Limelight Networks<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420537&pg=ajx')">420537</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryohei Maeda (28)<br>Marketing Executive<br>American Express<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420619&pg=ajx')">420619</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichiro Enomoto (52)<br>Senior Manager<br>Wind River Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420598&pg=ajx')">420598</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoyuki Makita (43)<br>CFO Japan and Korea<br>Lexis Nexis Japan<br><br><i><p>he has just changed his job 11 months ago to RELX Group as:</p>
<p>Finance Director<br />LexisNexis (part of Reed Elsevier)</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=37562&pg=ajx')">37562</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Kobayashi (-)<br>Account Manager<br>PTC<br><br><i><p>Is on 14M (50:50) which he feels is a very tough structure.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420696&pg=ajx')">420696</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akihito Sugai (38)<br>Senior Manager<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418121&pg=ajx')">418121</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuka Mamiya (36)<br>Digital Marketing Manager<br>Sun Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420685&pg=ajx')">420685</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Satoshi Fujita (37)<br>Senior Consultant<br>Genpact Japan<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413457&pg=ajx')">413457</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryosuke Matsushita (31)<br>Business Strategy Manager<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420694&pg=ajx')">420694</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Maedomari (29)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420707&pg=ajx')">420707</a>
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
			<div class="stat_holder revenueSize2" id="276">
			1			</div>
			<div class="stat_candi_info 276">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
										<a data-toggle="tooltip" title="Candidate ID: 419833" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9484&pg=ajx')">9484</a>
										</div>
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Christophers William Benjamin (33)<br>FP&A Manager<br>Otis Japan<br><br><i><p>met with Tada -was OK.  Personality test plus a Japanese test, English teats, numerical test, and a verbal reasoning test. 45 minutes with HRD then a different HR Member.  </p>
<p>was at 11 at PWC -now at 8.  going to interviews and the benchmark is now about 10~11.  DTC 13M range.  </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413977&pg=ajx')">413977</a>
										</div>
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row">
	<!--<td>consultant</td>-->
	<!--<td>Consultant</td>-->
		<td class="name_column revenueSize">R. Pedersen</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			12			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Von Briscoe (-)<br><br>Marketing<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417628&pg=ajx')">417628</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ramdan Abbacha (48)<br>Senior Estimator<br>Construction G.C.<br><br><i><p>Originally from Algeria, been in Canada 20 Years. Has Citizenship. Work on large scale projects ranging from $500K - $100 mil dollars. Has 15 years experience in Heavy civil construction. Has worked with hard rock, has built roads, bridges, etc.&nbsp; He was part of the project for the Champlain bridge in Quebec. This was a joint venture between 3 companies and his part was worth $100 mil. Has managed up to 4 Junior estimators. Wants to move out of Montreal as the work situation isnt very go</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420569&pg=ajx')">420569</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichiro Sugawara (-)<br><br>BMW Tokyo Corporation<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420714&pg=ajx')">420714</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nadia Kozak (-)<br><br>Slate Applicant<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420568&pg=ajx')">420568</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eva Ma (25)<br>Ground Handling - Customer Service Agent in ChangI Airport<br>Unemployed<br><br><i><p>Met with her in the office today and she kind of looked liked a contestant for Ms. Taiwan.</p>
<p>Did her Master from Waseda University and majored in Development Economics 3 months ago.</p>
<p>From Taiwan speaks E5, conversational J and Native Mandarin. 27 yrs old</p>
<p>Has interviewed with several Recruitment companies and some are still in process but has not received an offer.</p>
<p>She is very motivated to work in Japan for the money and wants to make enough money to invest into RE.</p</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420395&pg=ajx')">420395</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Julia Ivanichenko (-)<br>Senior IT Recruiter<br>Scalors GmbH<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420191&pg=ajx')">420191</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Baba (-)<br>image compositor<br>Slate Candidate<br><br><i><p>Targeting for Slate.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418868&pg=ajx')">418868</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremiah Booker (39)<br>Project Manager<br>Intersoftkk Japan<br><br><i><p>Originally from BC has traveled and worked around Canada while studying. Enjoys recruiting and would like to keep working in it. Very interested in Slate and would like to come back to BC. Good experience in recruiting. Finding candidates, assessing candidates, etc. Working in IT Junior to Senior level positions. Uses LinkedIn, job boards, cold calling. Not sure if she will enjoy working evenings. Sounds like she is a morning person. Recommended that she have a talk with Pam.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=91313&pg=ajx')">91313</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taryn Ashdown (24)<br><br>Slate Applicant<br><br><i><p>Originally from BC has traveled and worked around Canada while studying. Enjoys recruiting and would like to keep working in it. Very interested in Slate and would like to come back to BC. Good experience in recruiting. Finding candidates, assessing candidates, etc. Working in IT Junior to Senior level positions. Uses LinkedIn, job boards, cold calling. Not sure if she will enjoy working evenings. Sounds like she is a morning person. Recommended that she have a talk with Pam.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420600&pg=ajx')">420600</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Julia Filchukova (-)<br>Head of Recruitment Department<br>Danica Crewing Services<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420149&pg=ajx')">420149</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Iryna Zavtonova (-)<br>IT Recruiter<br>Sniper Recruiting Agency<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420161&pg=ajx')">420161</a>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			10			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nadia Kozak (-)<br><br>Slate Applicant<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420568&pg=ajx')">420568</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eva Ma (25)<br>Ground Handling - Customer Service Agent in ChangI Airport<br>Unemployed<br><br><i><p>Met with her in the office today and she kind of looked liked a contestant for Ms. Taiwan.</p>
<p>Did her Master from Waseda University and majored in Development Economics 3 months ago.</p>
<p>From Taiwan speaks E5, conversational J and Native Mandarin. 27 yrs old</p>
<p>Has interviewed with several Recruitment companies and some are still in process but has not received an offer.</p>
<p>She is very motivated to work in Japan for the money and wants to make enough money to invest into RE.</p</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420395&pg=ajx')">420395</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Julia Ivanichenko (-)<br>Senior IT Recruiter<br>Scalors GmbH<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420191&pg=ajx')">420191</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Baba (-)<br>image compositor<br>Slate Candidate<br><br><i><p>Targeting for Slate.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418868&pg=ajx')">418868</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremiah Booker (39)<br>Project Manager<br>Intersoftkk Japan<br><br><i><p>Originally from BC has traveled and worked around Canada while studying. Enjoys recruiting and would like to keep working in it. Very interested in Slate and would like to come back to BC. Good experience in recruiting. Finding candidates, assessing candidates, etc. Working in IT Junior to Senior level positions. Uses LinkedIn, job boards, cold calling. Not sure if she will enjoy working evenings. Sounds like she is a morning person. Recommended that she have a talk with Pam.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=91313&pg=ajx')">91313</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taryn Ashdown (24)<br><br>Slate Applicant<br><br><i><p>Originally from BC has traveled and worked around Canada while studying. Enjoys recruiting and would like to keep working in it. Very interested in Slate and would like to come back to BC. Good experience in recruiting. Finding candidates, assessing candidates, etc. Working in IT Junior to Senior level positions. Uses LinkedIn, job boards, cold calling. Not sure if she will enjoy working evenings. Sounds like she is a morning person. Recommended that she have a talk with Pam.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420600&pg=ajx')">420600</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Julia Filchukova (-)<br>Head of Recruitment Department<br>Danica Crewing Services<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420149&pg=ajx')">420149</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Iryna Zavtonova (-)<br>IT Recruiter<br>Sniper Recruiting Agency<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420161&pg=ajx')">420161</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Amar Walia (-)<br>IT Recruitment Consultant<br>Boyd & Moore Executive Search<br><br><i><p>born in Jamaica -Canadian Citizen.  Sold real estate and then mortgages.  Has lived in Korea, China and Japan has been in Japan for 10 years.  Professionally he is a business English trainer. Has also started entertainment companies -brought DJs in for events etc. Moving forward his plan is to be in Sales. </p>
<p>He feels that what we do is similar to what he does now.  has spoken to a fee recruiters so he has an insight into how the process works.  His timeline for looking for new opp</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419929&pg=ajx')">419929</a>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			12			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Von Briscoe (-)<br><br>Marketing<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417628&pg=ajx')">417628</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nadia Kozak (-)<br><br>Slate Applicant<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420568&pg=ajx')">420568</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremiah Booker (39)<br>Project Manager<br>Intersoftkk Japan<br><br><i><p>Originally from BC has traveled and worked around Canada while studying. Enjoys recruiting and would like to keep working in it. Very interested in Slate and would like to come back to BC. Good experience in recruiting. Finding candidates, assessing candidates, etc. Working in IT Junior to Senior level positions. Uses LinkedIn, job boards, cold calling. Not sure if she will enjoy working evenings. Sounds like she is a morning person. Recommended that she have a talk with Pam.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=91313&pg=ajx')">91313</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taryn Ashdown (24)<br><br>Slate Applicant<br><br><i><p>Originally from BC has traveled and worked around Canada while studying. Enjoys recruiting and would like to keep working in it. Very interested in Slate and would like to come back to BC. Good experience in recruiting. Finding candidates, assessing candidates, etc. Working in IT Junior to Senior level positions. Uses LinkedIn, job boards, cold calling. Not sure if she will enjoy working evenings. Sounds like she is a morning person. Recommended that she have a talk with Pam.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420600&pg=ajx')">420600</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Amar Walia (-)<br>IT Recruitment Consultant<br>Boyd & Moore Executive Search<br><br><i><p>born in Jamaica -Canadian Citizen.  Sold real estate and then mortgages.  Has lived in Korea, China and Japan has been in Japan for 10 years.  Professionally he is a business English trainer. Has also started entertainment companies -brought DJs in for events etc. Moving forward his plan is to be in Sales. </p>
<p>He feels that what we do is similar to what he does now.  has spoken to a fee recruiters so he has an insight into how the process works.  His timeline for looking for new opp</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419929&pg=ajx')">419929</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Toshimi Hatanaka (-)<br>Regional Training Manager<br>Adobe Systems Co., Ltd.<br><br><i><p>Met for an internal role.</p>
<p>Could be good for a researcher role. Seems to be genuinely interested in our company and also in the business.</p>
<p>Has a lot of IT background and understands it well. Could be good for an IT researcher role to start. Need to trial him.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=215952&pg=ajx')">215952</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kimiyo Fukada (35)<br><br>Ana Intercontinental<br><br><i><p>Spoke. HE has been at Adobe for about 9 years doing training -he leads training for the call center training, soft skills, product training, tools, internal processes, etc. He manages the training culture.&nbsp; HE handles some training and oversees training vendors as well. There are around 100 people in the call center including customer service and customer support. Before Adobe he worked at Apple.&nbsp; He was a training manager there as well -focused on enterprise partners and customers.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416010&pg=ajx')">416010</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yumi Minoda (34)<br><br>Shangri-La Hotels & Resorts<br><br><i><p>long term goal is not super clear, but her long term target is transfer to HR. Because she really enjoys HR. &nbsp;She wants to be involved in building people. She really likes HR. &nbsp;she likes hotels because she can learn something every day.&nbsp;</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=416043&pg=ajx')">416043</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nicholas Choy (-)<br>Consultant<br>The Bridge Group<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419798&pg=ajx')">419798</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michael Reid (-)<br><br>Slate Applicant<br><br><i><p>waiting for her references. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420386&pg=ajx')">420386</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Irina Magnea (-)<br><br>Slate Applicant<br><br><i><p>came up for the interview. paid 2man for the ticket out of his own pocket. . the interview was interesting.  </p>
<p>wants to start working on trial </p>
<p>wants to start working from 20th of March or April 1st.  </p>
<p>Keen to proceed with Slate.  Will do a trial. </p>
<p> </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420406&pg=ajx')">420406</a>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			14			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Von Briscoe (-)<br><br>Marketing<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417628&pg=ajx')">417628</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nadia Kozak (-)<br><br>Slate Applicant<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420568&pg=ajx')">420568</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremiah Booker (39)<br>Project Manager<br>Intersoftkk Japan<br><br><i><p>Originally from BC has traveled and worked around Canada while studying. Enjoys recruiting and would like to keep working in it. Very interested in Slate and would like to come back to BC. Good experience in recruiting. Finding candidates, assessing candidates, etc. Working in IT Junior to Senior level positions. Uses LinkedIn, job boards, cold calling. Not sure if she will enjoy working evenings. Sounds like she is a morning person. Recommended that she have a talk with Pam.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=91313&pg=ajx')">91313</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taryn Ashdown (24)<br><br>Slate Applicant<br><br><i><p>Originally from BC has traveled and worked around Canada while studying. Enjoys recruiting and would like to keep working in it. Very interested in Slate and would like to come back to BC. Good experience in recruiting. Finding candidates, assessing candidates, etc. Working in IT Junior to Senior level positions. Uses LinkedIn, job boards, cold calling. Not sure if she will enjoy working evenings. Sounds like she is a morning person. Recommended that she have a talk with Pam.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420600&pg=ajx')">420600</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Amar Walia (-)<br>IT Recruitment Consultant<br>Boyd & Moore Executive Search<br><br><i><p>born in Jamaica -Canadian Citizen.  Sold real estate and then mortgages.  Has lived in Korea, China and Japan has been in Japan for 10 years.  Professionally he is a business English trainer. Has also started entertainment companies -brought DJs in for events etc. Moving forward his plan is to be in Sales. </p>
<p>He feels that what we do is similar to what he does now.  has spoken to a fee recruiters so he has an insight into how the process works.  His timeline for looking for new opp</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419929&pg=ajx')">419929</a>
										</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nicholas Choy (-)<br>Consultant<br>The Bridge Group<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419798&pg=ajx')">419798</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michael Reid (-)<br><br>Slate Applicant<br><br><i><p>waiting for her references. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420386&pg=ajx')">420386</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Irina Magnea (-)<br><br>Slate Applicant<br><br><i><p>came up for the interview. paid 2man for the ticket out of his own pocket. . the interview was interesting.  </p>
<p>wants to start working on trial </p>
<p>wants to start working from 20th of March or April 1st.  </p>
<p>Keen to proceed with Slate.  Will do a trial. </p>
<p> </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420406&pg=ajx')">420406</a>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			12			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Von Briscoe (-)<br><br>Marketing<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417628&pg=ajx')">417628</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremiah Booker (39)<br>Project Manager<br>Intersoftkk Japan<br><br><i><p>Originally from BC has traveled and worked around Canada while studying. Enjoys recruiting and would like to keep working in it. Very interested in Slate and would like to come back to BC. Good experience in recruiting. Finding candidates, assessing candidates, etc. Working in IT Junior to Senior level positions. Uses LinkedIn, job boards, cold calling. Not sure if she will enjoy working evenings. Sounds like she is a morning person. Recommended that she have a talk with Pam.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=91313&pg=ajx')">91313</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michael Reid (-)<br><br>Slate Applicant<br><br><i><p>waiting for her references. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420386&pg=ajx')">420386</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Irina Magnea (-)<br><br>Slate Applicant<br><br><i><p>came up for the interview. paid 2man for the ticket out of his own pocket. . the interview was interesting.  </p>
<p>wants to start working on trial </p>
<p>wants to start working from 20th of March or April 1st.  </p>
<p>Keen to proceed with Slate.  Will do a trial. </p>
<p> </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420406&pg=ajx')">420406</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Merve Demirci (-)<br><br>Slate Applicant<br><br><i><p>after trialing we felt that he would have a f¥difficult time adapting to the business. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420381&pg=ajx')">420381</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eric Nguyen (-)<br><br>Slate Applicant<br><br><i><p>Hi Ray</p>
<p>Thanks for following up with Ross so quickly and it was good to hear some feedback.</p>
<p>Just following up about numbers again--I got values a bit confused on the phone. I should have just checked afterwards rather than saying values then and there. I think what I said to you was my net income rather than gross.</p>
<p>Here are relatively concrete numbers.</p>
<p>Gross (w/ approx. 350 hrs a year overtime)<br />5,045,200</p>
<p>Net (w/ approx. 350 hrs a year overtime)<br />3,58</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420378&pg=ajx')">420378</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sarah Carr (24)<br><br>Slate Applicant<br><br><i><p>waiting for her references. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420383&pg=ajx')">420383</a>
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
			<div class="stat_holder revenueSize2" id="459">
			2			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Merve Demirci (-)<br><br>Slate Applicant<br><br><i><p>after trialing we felt that he would have a f¥difficult time adapting to the business. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420381&pg=ajx')">420381</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sarah Carr (24)<br><br>Slate Applicant<br><br><i><p>waiting for her references. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420383&pg=ajx')">420383</a>
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
			<div class="stat_holder revenueSize2" id="459">
			3			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Merve Demirci (-)<br><br>Slate Applicant<br><br><i><p>after trialing we felt that he would have a f¥difficult time adapting to the business. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420381&pg=ajx')">420381</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takeshi Miura (52)<br>Manager<br>Accenture Japan<br><br><i><p>met today.  Id like to trial her. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=25381&pg=ajx')">25381</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Aryaan Razzagi (30)<br><br>Yonex Co., Ltd.<br><br><i><p>born in Jamaica -Canadian Citizen.  Sold real estate and then mortgages.  Has lived in Korea, China and Japan has been in Japan for 10 years.  Professionally he is a business English trainer. Has also started entertainment companies -brought DJs in for events etc. Moving forward his plan is to be in Sales. </p>
<p>He feels that what we do is similar to what he does now.  has spoken to a fee recruiters so he has an insight into how the process works.  His timeline for looking for new opp</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418996&pg=ajx')">418996</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			1			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takeshi Miura (52)<br>Manager<br>Accenture Japan<br><br><i><p>met today.  Id like to trial her. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=25381&pg=ajx')">25381</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			0			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="459">
			10			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nadia Kozak (-)<br><br>Slate Applicant<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420568&pg=ajx')">420568</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i><p>That works for me. My Skype name is my name; I have requested to add you as a contact. Talk to you tomorrow!</p>
<p>--<br />Nadia Kozak</p>
<p>On Mon, Jan 30, 2017 at 4:09 PM, Ray Pedersen &lt;raypedersen8_24p@indeedemail.com&gt; wrote: <br />Hi Nadia,<br />How about 11AM tomorrow, Tuesday? <br />My skype address is RayboInTokyo<br />Best regards,<br />Ray</p>
<p>------------------------------ -------</p>
<p>Tel: +1-250-624-4660 <br />Direct from Japan: +81-3-6666-4368 <br />Canada Mobile</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eva Ma (25)<br>Ground Handling - Customer Service Agent in ChangI Airport<br>Unemployed<br><br><i><p>Met with her in the office today and she kind of looked liked a contestant for Ms. Taiwan.</p>
<p>Did her Master from Waseda University and majored in Development Economics 3 months ago.</p>
<p>From Taiwan speaks E5, conversational J and Native Mandarin. 27 yrs old</p>
<p>Has interviewed with several Recruitment companies and some are still in process but has not received an offer.</p>
<p>She is very motivated to work in Japan for the money and wants to make enough money to invest into RE.</p</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420395&pg=ajx')">420395</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Julia Ivanichenko (-)<br>Senior IT Recruiter<br>Scalors GmbH<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420191&pg=ajx')">420191</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Baba (-)<br>image compositor<br>Slate Candidate<br><br><i><p>Targeting for Slate.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418868&pg=ajx')">418868</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremiah Booker (39)<br>Project Manager<br>Intersoftkk Japan<br><br><i><p>Originally from BC has traveled and worked around Canada while studying. Enjoys recruiting and would like to keep working in it. Very interested in Slate and would like to come back to BC. Good experience in recruiting. Finding candidates, assessing candidates, etc. Working in IT Junior to Senior level positions. Uses LinkedIn, job boards, cold calling. Not sure if she will enjoy working evenings. Sounds like she is a morning person. Recommended that she have a talk with Pam.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=91313&pg=ajx')">91313</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taryn Ashdown (24)<br><br>Slate Applicant<br><br><i><p>Originally from BC has traveled and worked around Canada while studying. Enjoys recruiting and would like to keep working in it. Very interested in Slate and would like to come back to BC. Good experience in recruiting. Finding candidates, assessing candidates, etc. Working in IT Junior to Senior level positions. Uses LinkedIn, job boards, cold calling. Not sure if she will enjoy working evenings. Sounds like she is a morning person. Recommended that she have a talk with Pam.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420600&pg=ajx')">420600</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Julia Filchukova (-)<br>Head of Recruitment Department<br>Danica Crewing Services<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420149&pg=ajx')">420149</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Iryna Zavtonova (-)<br>IT Recruiter<br>Sniper Recruiting Agency<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420161&pg=ajx')">420161</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Amar Walia (-)<br>IT Recruitment Consultant<br>Boyd & Moore Executive Search<br><br><i><p>born in Jamaica -Canadian Citizen.  Sold real estate and then mortgages.  Has lived in Korea, China and Japan has been in Japan for 10 years.  Professionally he is a business English trainer. Has also started entertainment companies -brought DJs in for events etc. Moving forward his plan is to be in Sales. </p>
<p>He feels that what we do is similar to what he does now.  has spoken to a fee recruiters so he has an insight into how the process works.  His timeline for looking for new opp</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419929&pg=ajx')">419929</a>
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
			<div class="stat_holder revenueSize2" id="459">
			5			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jeremiah Booker (39)<br>Project Manager<br>Intersoftkk Japan<br><br><i><p>Originally from BC has traveled and worked around Canada while studying. Enjoys recruiting and would like to keep working in it. Very interested in Slate and would like to come back to BC. Good experience in recruiting. Finding candidates, assessing candidates, etc. Working in IT Junior to Senior level positions. Uses LinkedIn, job boards, cold calling. Not sure if she will enjoy working evenings. Sounds like she is a morning person. Recommended that she have a talk with Pam.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=91313&pg=ajx')">91313</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Merve Demirci (-)<br><br>Slate Applicant<br><br><i><p>after trialing we felt that he would have a f¥difficult time adapting to the business. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420381&pg=ajx')">420381</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eric Nguyen (-)<br><br>Slate Applicant<br><br><i><p>Hi Ray</p>
<p>Thanks for following up with Ross so quickly and it was good to hear some feedback.</p>
<p>Just following up about numbers again--I got values a bit confused on the phone. I should have just checked afterwards rather than saying values then and there. I think what I said to you was my net income rather than gross.</p>
<p>Here are relatively concrete numbers.</p>
<p>Gross (w/ approx. 350 hrs a year overtime)<br />5,045,200</p>
<p>Net (w/ approx. 350 hrs a year overtime)<br />3,58</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420378&pg=ajx')">420378</a>
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
			<div class="stat_holder revenueSize2" id="459">
			0			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="459">
			6			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Von Briscoe (-)<br><br>Marketing<br><br><i><p>he felt that the interview went well.  He and Bommin agreed that meeting took 1.5 hours. they went over the challenges of the role, etc. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417628&pg=ajx')">417628</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Michael Reid (-)<br><br>Slate Applicant<br><br><i><p>waiting for her references. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420386&pg=ajx')">420386</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Irina Magnea (-)<br><br>Slate Applicant<br><br><i><p>came up for the interview. paid 2man for the ticket out of his own pocket. . the interview was interesting.  </p>
<p>wants to start working on trial </p>
<p>wants to start working from 20th of March or April 1st.  </p>
<p>Keen to proceed with Slate.  Will do a trial. </p>
<p> </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420406&pg=ajx')">420406</a>
										</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Merve Demirci (-)<br><br>Slate Applicant<br><br><i><p>after trialing we felt that he would have a f¥difficult time adapting to the business. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420381&pg=ajx')">420381</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Eric Nguyen (-)<br><br>Slate Applicant<br><br><i><p>Hi Ray</p>
<p>Thanks for following up with Ross so quickly and it was good to hear some feedback.</p>
<p>Just following up about numbers again--I got values a bit confused on the phone. I should have just checked afterwards rather than saying values then and there. I think what I said to you was my net income rather than gross.</p>
<p>Here are relatively concrete numbers.</p>
<p>Gross (w/ approx. 350 hrs a year overtime)<br />5,045,200</p>
<p>Net (w/ approx. 350 hrs a year overtime)<br />3,58</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420378&pg=ajx')">420378</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Aryaan Razzagi (30)<br><br>Yonex Co., Ltd.<br><br><i><p>born in Jamaica -Canadian Citizen.  Sold real estate and then mortgages.  Has lived in Korea, China and Japan has been in Japan for 10 years.  Professionally he is a business English trainer. Has also started entertainment companies -brought DJs in for events etc. Moving forward his plan is to be in Sales. </p>
<p>He feels that what we do is similar to what he does now.  has spoken to a fee recruiters so he has an insight into how the process works.  His timeline for looking for new opp</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418996&pg=ajx')">418996</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="459">
			0			</div>
			<div class="stat_candi_info 459">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
		<td class="name_column revenueSize">S. D.V.</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			9			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takeya Nasu (47)<br>Automotive Eng Manager / Sales Engineer<br>Huf Hulsbeck and Furst<br><br><i><p>just changed companies:</p>
<p>Takeya Tak Nasu<br />Project Manager - Major Manufacturer<br />Within 23 wards, Tokyo, JapanAutomotive<br />Current <br />Major Manufacturer<br />Previous <br />Huf, Continental, Delphi<br />Education <br />グロービス経営大学院<br />500+<br />connectionsConnectSend Takeya Tak InMailMore options<br />jp.linkedin.com/pub/takeya-tak-nasu/32/35b/ab2/en<br />Background<br />Summary<br />=Benefit / Advantage=<br />1. Automotive PM based on Mechanical</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=326926&pg=ajx')">326926</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masumichi Morishita (49)<br>Application Engineer<br>SPX Service Solutions Japan, Ltd.<br><br><i><p>application engineer position sought. wants to move for new environment.&nbsp; now making about 7m.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=5220&pg=ajx')">5220</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Siew Thong Lim (54)<br>Program Manager<br>Continental AG<br><br><i><p>Already in process with Visteon (2nd round)</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=345243&pg=ajx')">345243</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mr Akahori (-)<br>Mechanical Engineer<br>Avex Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=225587&pg=ajx')">225587</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sadamasa Sawada (42)<br>Staff<br>Continental AG<br><br><i><p>spoke.&nbsp; 6 years at conti.&nbsp; life is better now because he is production manager advanced engineering manager -focused on future development. he is ADAS systems -advanced driving support systems.&nbsp; he has only himself now but he will hire 5 people for his team. he will consider this summer&nbsp;</p>
<p>he was offered by Autoliv but he decided to stay at Conti. he would be open to seeing opportunities in was a harness engineer now he is a sensor exert so he would want to be in sys</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=163160&pg=ajx')">163160</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sami Ahmed (31)<br>Application Engineer<br>Autoliv Japan Ltd.<br><br><i>radar and camera expert for automotive. young with higher alry for age. Probabyl worth it but not easy to plug into new company. Met with Continental and then took an internal role up with Autoliv. Popssibly...not a serious mover...</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=364463&pg=ajx')">364463</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Salman Khan (33)<br> Senior Design/Application Engineer.<br>Unipres Coporation<br><br><i><p>Had a phone meeting. Nice guy, good English and his accent is not to thick. Business + level Japanese (could not verify myself). Currently on a spouse visa. Has a M.S. in Mechanical Engineering. All working experience within automotive. Now working at Unipress Corp. as a Senior Design / Application engineer. Has two subordinates and reports to the team leader. Focusing on various steel components (BIW) for vehicle frame body parts.&nbsp;Responsibilities include dealing with clients (domestic)</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=297336&pg=ajx')">297336</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yukinori Ando (36)<br>Product Engineer<br>Lear Corporation Japan K.K.<br><br><i><p>Very nice guy, manageable English, completely Mechanical, Excellent fit for any seats positions. but location is the concern since he is staying in Hiratsuka and Lear is at Yokohama, he is traveling more than an hour, so he is looking locally, anything which is local with good package he is up for it.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=330316&pg=ajx')">330316</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Cesar Oruga (-)<br>Production / Design Engineer<br>Valeo Japan Co., Ltd.<br><br><i><p>spoke -just joined a french company.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=369772&pg=ajx')">369772</a>
										</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			7			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masumichi Morishita (49)<br>Application Engineer<br>SPX Service Solutions Japan, Ltd.<br><br><i><p>application engineer position sought. wants to move for new environment.&nbsp; now making about 7m.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=5220&pg=ajx')">5220</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Siew Thong Lim (54)<br>Program Manager<br>Continental AG<br><br><i><p>Already in process with Visteon (2nd round)</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=345243&pg=ajx')">345243</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mr Akahori (-)<br>Mechanical Engineer<br>Avex Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=225587&pg=ajx')">225587</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sadamasa Sawada (42)<br>Staff<br>Continental AG<br><br><i><p>spoke.&nbsp; 6 years at conti.&nbsp; life is better now because he is production manager advanced engineering manager -focused on future development. he is ADAS systems -advanced driving support systems.&nbsp; he has only himself now but he will hire 5 people for his team. he will consider this summer&nbsp;</p>
<p>he was offered by Autoliv but he decided to stay at Conti. he would be open to seeing opportunities in was a harness engineer now he is a sensor exert so he would want to be in sys</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=163160&pg=ajx')">163160</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sami Ahmed (31)<br>Application Engineer<br>Autoliv Japan Ltd.<br><br><i>radar and camera expert for automotive. young with higher alry for age. Probabyl worth it but not easy to plug into new company. Met with Continental and then took an internal role up with Autoliv. Popssibly...not a serious mover...</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=364463&pg=ajx')">364463</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Salman Khan (33)<br> Senior Design/Application Engineer.<br>Unipres Coporation<br><br><i><p>Had a phone meeting. Nice guy, good English and his accent is not to thick. Business + level Japanese (could not verify myself). Currently on a spouse visa. Has a M.S. in Mechanical Engineering. All working experience within automotive. Now working at Unipress Corp. as a Senior Design / Application engineer. Has two subordinates and reports to the team leader. Focusing on various steel components (BIW) for vehicle frame body parts.&nbsp;Responsibilities include dealing with clients (domestic)</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=297336&pg=ajx')">297336</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yukinori Ando (36)<br>Product Engineer<br>Lear Corporation Japan K.K.<br><br><i><p>Very nice guy, manageable English, completely Mechanical, Excellent fit for any seats positions. but location is the concern since he is staying in Hiratsuka and Lear is at Yokohama, he is traveling more than an hour, so he is looking locally, anything which is local with good package he is up for it.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=330316&pg=ajx')">330316</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="521">
			5			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Siew Thong Lim (54)<br>Program Manager<br>Continental AG<br><br><i><p>Already in process with Visteon (2nd round)</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=345243&pg=ajx')">345243</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mr Akahori (-)<br>Mechanical Engineer<br>Avex Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=225587&pg=ajx')">225587</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Sadamasa Sawada (42)<br>Staff<br>Continental AG<br><br><i><p>spoke.&nbsp; 6 years at conti.&nbsp; life is better now because he is production manager advanced engineering manager -focused on future development. he is ADAS systems -advanced driving support systems.&nbsp; he has only himself now but he will hire 5 people for his team. he will consider this summer&nbsp;</p>
<p>he was offered by Autoliv but he decided to stay at Conti. he would be open to seeing opportunities in was a harness engineer now he is a sensor exert so he would want to be in sys</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=163160&pg=ajx')">163160</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Salman Khan (33)<br> Senior Design/Application Engineer.<br>Unipres Coporation<br><br><i><p>Had a phone meeting. Nice guy, good English and his accent is not to thick. Business + level Japanese (could not verify myself). Currently on a spouse visa. Has a M.S. in Mechanical Engineering. All working experience within automotive. Now working at Unipress Corp. as a Senior Design / Application engineer. Has two subordinates and reports to the team leader. Focusing on various steel components (BIW) for vehicle frame body parts.&nbsp;Responsibilities include dealing with clients (domestic)</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=297336&pg=ajx')">297336</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yukinori Ando (36)<br>Product Engineer<br>Lear Corporation Japan K.K.<br><br><i><p>Very nice guy, manageable English, completely Mechanical, Excellent fit for any seats positions. but location is the concern since he is staying in Hiratsuka and Lear is at Yokohama, he is traveling more than an hour, so he is looking locally, anything which is local with good package he is up for it.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=330316&pg=ajx')">330316</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			<div class="stat_holder revenueSize2" id="521">
			0			</div>
			<div class="stat_candi_info 521">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
		<td class="name_column revenueSize">V. Maslyuk</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			14			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akio Yuza (-)<br>Technical manager<br>BASF Japan Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420614&pg=ajx')">420614</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takuto Iwanaka (-)<br>Financial Analyst<br>Eli Lilly Japan K.K.<br><br><i><p>Sent message via linkdin.&nbsp;</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=189238&pg=ajx')">189238</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoko Hano (38)<br>Packaging engineer<br>Godiva Japan, Inc.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420360&pg=ajx')">420360</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryotaro Kubo (35)<br>Food Safety<br>Asuzac Foods<br><br><i><p>got him on phone when calling to office. He is not interested in changing a job. He does not want to share his email address and ask me to send message through linkedin.</p>
<p>E5 or lower.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412403&pg=ajx')">412403</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadahiro Fujita (34)<br>Buyer<br>BASF Japan Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420599&pg=ajx')">420599</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Kino (45)<br>Senior Engineer<br>Dow Chemical<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420602&pg=ajx')">420602</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazuya Nakajima (30)<br>Supply Chain Material Controller<br>Sony Corporaiton<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420603&pg=ajx')">420603</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Takahashi (56)<br>Supply Chain Manager<br>Petit Bateau Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420630&pg=ajx')">420630</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yusuke Sasaki (36)<br>Business Development Manager<br>SGS Japan Inc.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420633&pg=ajx')">420633</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomohiro Horibe (30)<br>Project Engineer<br>FUJIFILM Medical Co.,Ltd<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420644&pg=ajx')">420644</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Imai (37)<br>Quality manager<br>BASF Japan Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420636&pg=ajx')">420636</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Kawata (39)<br>Technical Project Lead<br>Merck Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420638&pg=ajx')">420638</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tsuyoshi Yoshimura (53)<br>Supply Chain Director<br>Catalent Pharma Solutions, Inc.<br><br><i>Met face to face. Good candidate. English is OK. presentable and sociable.</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420674&pg=ajx')">420674</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Fusanori Ohara (55)<br>Physical Distributions<br>Procter & Gamble<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420712&pg=ajx')">420712</a>
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
			<div class="stat_holder revenueSize2" id="130">
			12			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoko Hano (38)<br>Packaging engineer<br>Godiva Japan, Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420360&pg=ajx')">420360</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryotaro Kubo (35)<br>Food Safety<br>Asuzac Foods<br><br><i><p>got him on phone when calling to office. He is not interested in changing a job. He does not want to share his email address and ask me to send message through linkedin.</p>
<p>E5 or lower.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412403&pg=ajx')">412403</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadahiro Fujita (34)<br>Buyer<br>BASF Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420599&pg=ajx')">420599</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Kino (45)<br>Senior Engineer<br>Dow Chemical<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420602&pg=ajx')">420602</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazuya Nakajima (30)<br>Supply Chain Material Controller<br>Sony Corporaiton<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420603&pg=ajx')">420603</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Takahashi (56)<br>Supply Chain Manager<br>Petit Bateau Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420630&pg=ajx')">420630</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yusuke Sasaki (36)<br>Business Development Manager<br>SGS Japan Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420633&pg=ajx')">420633</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomohiro Horibe (30)<br>Project Engineer<br>FUJIFILM Medical Co.,Ltd<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420644&pg=ajx')">420644</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Imai (37)<br>Quality manager<br>BASF Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420636&pg=ajx')">420636</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Kawata (39)<br>Technical Project Lead<br>Merck Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420638&pg=ajx')">420638</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tsuyoshi Yoshimura (53)<br>Supply Chain Director<br>Catalent Pharma Solutions, Inc.<br><br><i>Met face to face. Good candidate. English is OK. presentable and sociable.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420674&pg=ajx')">420674</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Fusanori Ohara (55)<br>Physical Distributions<br>Procter & Gamble<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420712&pg=ajx')">420712</a>
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
			2			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row">
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomohiro Horibe (30)<br>Project Engineer<br>FUJIFILM Medical Co.,Ltd<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420644&pg=ajx')">420644</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ruri Oshita (43)<br>Distribution Planning Manager<br>Danone Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420078&pg=ajx')">420078</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomohiro Horibe (30)<br>Project Engineer<br>FUJIFILM Medical Co.,Ltd<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420644&pg=ajx')">420644</a>
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
			<div class="stat_holder revenueSize2" id="130">
			1			</div>
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
			12			</div>
			<div class="stat_candi_info 130">
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoko Hano (38)<br>Packaging engineer<br>Godiva Japan, Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420360&pg=ajx')">420360</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryotaro Kubo (35)<br>Food Safety<br>Asuzac Foods<br><br><i><p>got him on phone when calling to office. He is not interested in changing a job. He does not want to share his email address and ask me to send message through linkedin.</p>
<p>E5 or lower.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412403&pg=ajx')">412403</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadahiro Fujita (34)<br>Buyer<br>BASF Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420599&pg=ajx')">420599</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Kino (45)<br>Senior Engineer<br>Dow Chemical<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420602&pg=ajx')">420602</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazuya Nakajima (30)<br>Supply Chain Material Controller<br>Sony Corporaiton<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420603&pg=ajx')">420603</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Takahashi (56)<br>Supply Chain Manager<br>Petit Bateau Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420630&pg=ajx')">420630</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yusuke Sasaki (36)<br>Business Development Manager<br>SGS Japan Inc.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420633&pg=ajx')">420633</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tomohiro Horibe (30)<br>Project Engineer<br>FUJIFILM Medical Co.,Ltd<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420644&pg=ajx')">420644</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Emi Imai (37)<br>Quality manager<br>BASF Japan Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420636&pg=ajx')">420636</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Kawata (39)<br>Technical Project Lead<br>Merck Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420638&pg=ajx')">420638</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tsuyoshi Yoshimura (53)<br>Supply Chain Director<br>Catalent Pharma Solutions, Inc.<br><br><i>Met face to face. Good candidate. English is OK. presentable and sociable.</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420674&pg=ajx')">420674</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Fusanori Ohara (55)<br>Physical Distributions<br>Procter & Gamble<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420712&pg=ajx')">420712</a>
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
			<div class="stat_holder revenueSize2" id="130">
			1			</div>
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
			1			</div>
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
										<a data-toggle="tooltip" title="Candidate ID: 420314" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9503&pg=ajx')">9503</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="130">
			1			</div>
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
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
			17			</div>
			<div class="stat_candi_info 347">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Norikazu Fushimi (29)<br>Regional Study Manager<br>CSL Behring K.K.<br><br><i><p>shared JD on MSJ RPM role / no feedback...position already closed. Not a serious mover for now.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=342311&pg=ajx')">342311</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Nishimura (36)<br>Specialist<br>AbbVie<br><br><i>LN at this time due to phone only, but possible HN.  Waiting on resume also.  Want a f2f</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=343620&pg=ajx')">343620</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Imokawa Yoshiki (-)<br>staff<br>A2 Healthcare<br><br><i><p>met him at Tokyo Dome Hotel, biostatistician. introduced by Aando who was placed to Novartis by us.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=408767&pg=ajx')">408767</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takeshi Sunaga (-)<br>Business Strategy Manager<br>Quintiles Transnational Japan K.K.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413971&pg=ajx')">413971</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Hyakumoto (40)<br>Project Manager<br>Pfizer Japan Inc.<br><br><i><p>No change, still lacking career identity. &nbsp;Transferred to drug safety in Oct 2013 (pharmacovigilance operation planning group 安全性業務企画課), main project is to localize the new safety evaluation and reporting system that is used globally. &nbsp;Previous project management required cross-organizational coordination, current role requires cross-functional/operational coordination (それぞれ一つ一つ完結していた業務に、プロセスの足し引きをして足並�</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=349511&pg=ajx')">349511</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoko Noumi (Suenaga) (40)<br>Associate<br>Novartis Pharma K.K.<br><br><i><p>NAOKO NOUMI</p>
<p>Novartis Pharma K.K.</p>
<p>Clinical Operations Group 2</p>
<p>Associate</p>
<p>81334986513</p>
<p>818022991149</p>
<p>naoko.suenaga@novartis.com</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=411004&pg=ajx')">411004</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Nakagawa (Isshi) (30)<br>CRA<br>Parexel International K.K.<br><br><i><p>BizReach candidate</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=369349&pg=ajx')">369349</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryohei Iwasaki (38)<br>Associate<br>Novartis Pharma K.K.<br><br><i><p>From Meibo</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=414851&pg=ajx')">414851</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Isao Yasui  (47)<br>MSL, CVN-Thrombosis<br>Bayer Ltd.<br><br><i><p>PERSONALITY: Friendly guy not on the move but maybe open if the right opp comes along. Been with Bayer for the last 20 years and really has no concept of job change. Typical MR type candidate and unfortunately not scientific. <br />CURRENT POSITION &amp; RESPONSIBILITIES: 2010 &ndash; Present. Bayer MSL for CVN. No subordinates and reports to Head of CVN MSL&rsquo;s (Hitoshi Ueda) &amp; CVN MD. <br />CAREER HISTORY: Whole career at Bayer. Before moving into MSL role he was an MR for 17 years.</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404647&pg=ajx')">404647</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko Hayasaka (-)<br>Contract staff<br>Pfizer Japan Inc.<br><br><i><p>From Pfizer meibo</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415847&pg=ajx')">415847</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoko Yoshinaga (-)<br>HEOR Statistician Manager<br>AbbVie<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417485&pg=ajx')">417485</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Manami Otsuka (54)<br>Director<br>Shire Baxalta<br><br><i><p>1</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=86218&pg=ajx')">86218</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadashi Koga (49)<br>Director<br>Shin Nippon Biomedical Laboratories<br><br><i>worked for upjohn about 3years , resigned due to complains of M&A. good bio statistician at first joined Shinnihon kagaku, managed Stat,DM and MW. <br />
team increased 4to 50 people. currently he works on some client\s project as special adviser. 3kids and can move Tokyo or Osaka. now 10M. last year he offered 15M from Palexel Tokyo but declined.</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=324616&pg=ajx')">324616</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Motoyuki Takano (54)<br>Head of Pharmacovigilance<br>Shire Baxalta<br><br><i><p>Ex-Sanofi. Placed in Ferring in 2014</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=403735&pg=ajx')">403735</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Hamada (43)<br>Clinical Project Manager<br>AbbVie<br><br><i><p>濱田</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=319967&pg=ajx')">319967</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takako Saito (50)<br>CLINICAL OPS LEADER<br>Parexel International K.K.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417038&pg=ajx')">417038</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Susumu Kakoki (51)<br>Associate Director<br>Gilead Sciences<br><br><i><p>高木様</p>
<p><br />ごさきほどは連絡ありがとうございました。</p>
<p>大変ありがたいのですが、第一希望として、この2-3年は、セールスマネジャーをしたいのです。</p>
<p>セールスのマネジャーの案件または、トレーニングのマネジャーを2-3年実施後、セールスのマネジャーをする機会をいただける会社ですと興味があります。</p>
<p>というのも、海外では、トレーニング</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=355158&pg=ajx')">355158</a>
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
			9			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Motoyuki Takano (54)<br>Head of Pharmacovigilance<br>Shire Baxalta<br><br><i><p>Ex-Sanofi. Placed in Ferring in 2014</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=403735&pg=ajx')">403735</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Hamada (43)<br>Clinical Project Manager<br>AbbVie<br><br><i><p>濱田</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=319967&pg=ajx')">319967</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takako Saito (50)<br>CLINICAL OPS LEADER<br>Parexel International K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417038&pg=ajx')">417038</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Susumu Kakoki (51)<br>Associate Director<br>Gilead Sciences<br><br><i><p>高木様</p>
<p><br />ごさきほどは連絡ありがとうございました。</p>
<p>大変ありがたいのですが、第一希望として、この2-3年は、セールスマネジャーをしたいのです。</p>
<p>セールスのマネジャーの案件または、トレーニングのマネジャーを2-3年実施後、セールスのマネジャーをする機会をいただける会社ですと興味があります。</p>
<p>というのも、海外では、トレーニング</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=355158&pg=ajx')">355158</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mika Hiratsuka (36)<br>Clinical Trial Specialist<br>Parexel International K.K.<br><br><i><p>duplicate to&nbsp;#405237 assessed</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=354177&pg=ajx')">354177</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (33)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Teruki Nakagawa (42)<br>Clinical Team Leader<br>Quintiles Transnational Japan K.K.<br><br><i><p>Spoke.</p>
<p>Going to Cebu for 3months (without family) to learn English.</p>
<p>will be back in the end of Jan to beginning of Feb for Taxing, then try to go to US for PMP certificate</p>
<p>Resigned Quintiles as of Oct 31. now on holiday.</p>
<p> </p>
<p>Pitched a few companies to apply now for the time he comes back</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=102231&pg=ajx')">102231</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Tsuda (37)<br>MSL<br>Amgen Ltd.<br><br><i><p>404717 is the same person</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404625&pg=ajx')">404625</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Kondo  (36)<br>MSL Specialist<br>MSD K.K.<br><br><i><p>404717 is the same person</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=241733&pg=ajx')">241733</a>
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
			3			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (33)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Tsuda (37)<br>MSL<br>Amgen Ltd.<br><br><i><p>404717 is the same person</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404625&pg=ajx')">404625</a>
										</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka ishii (57)<br>MSL<br>Janssen Pharmaceutical K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412640&pg=ajx')">412640</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka ishii (57)<br>MSL<br>Janssen Pharmaceutical K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412640&pg=ajx')">412640</a>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="347">
			8			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Motoyuki Takano (54)<br>Head of Pharmacovigilance<br>Shire Baxalta<br><br><i><p>Ex-Sanofi. Placed in Ferring in 2014</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=403735&pg=ajx')">403735</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Hamada (43)<br>Clinical Project Manager<br>AbbVie<br><br><i><p>濱田</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=319967&pg=ajx')">319967</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takako Saito (50)<br>CLINICAL OPS LEADER<br>Parexel International K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417038&pg=ajx')">417038</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Susumu Kakoki (51)<br>Associate Director<br>Gilead Sciences<br><br><i><p>高木様</p>
<p><br />ごさきほどは連絡ありがとうございました。</p>
<p>大変ありがたいのですが、第一希望として、この2-3年は、セールスマネジャーをしたいのです。</p>
<p>セールスのマネジャーの案件または、トレーニングのマネジャーを2-3年実施後、セールスのマネジャーをする機会をいただける会社ですと興味があります。</p>
<p>というのも、海外では、トレーニング</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=355158&pg=ajx')">355158</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mika Hiratsuka (36)<br>Clinical Trial Specialist<br>Parexel International K.K.<br><br><i><p>duplicate to&nbsp;#405237 assessed</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=354177&pg=ajx')">354177</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (33)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
										</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Tsuda (37)<br>MSL<br>Amgen Ltd.<br><br><i><p>404717 is the same person</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404625&pg=ajx')">404625</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Kondo  (36)<br>MSL Specialist<br>MSD K.K.<br><br><i><p>404717 is the same person</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=241733&pg=ajx')">241733</a>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
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
										<a data-toggle="tooltip" title="Candidate ID: 405089" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9421&pg=ajx')">9421</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenpei Ogura (32)<br>CMO QA Manager<br>GlaxoSmithKline K.K. (GSK)<br><br><i><p>This candidate would have not been found if I had not changed the details in department and occupation. Prior to me changing the details in the data stated  Packing . I found the candidate through resume note text search as he has technical in his resume. He is a Technical Operations candidate with a CMO QA Slant.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344151&pg=ajx')">344151</a>
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
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenpei Ogura (32)<br>CMO QA Manager<br>GlaxoSmithKline K.K. (GSK)<br><br><i><p>This candidate would have not been found if I had not changed the details in department and occupation. Prior to me changing the details in the data stated  Packing . I found the candidate through resume note text search as he has technical in his resume. He is a Technical Operations candidate with a CMO QA Slant.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=344151&pg=ajx')">344151</a>
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
			151		</td>
		<td class='revenueSize3'>
			17		</td>
		<td class='revenueSize3'>
			13		</td>
		<td class='revenueSize3'>
			12		</td>
		<td class='revenueSize3'>
			4		</td>
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
			16			</div>
			<div class="stat_candi_info 516">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Zhao Wenwu (42)<br>Onsite Project Manager<br>Neusoft Japan Co., Ltd.<br><br><i><p>This candidate would have not been found if I had not changed the details in department and occupation. Prior to me changing the details in the data stated  Packing . I found the candidate through resume note text search as he has technical in his resume. He is a Technical Operations candidate with a CMO QA Slant.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413096&pg=ajx')">413096</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kazunori Sukeda (-)<br>Staff<br>Visteon Japan Ltd.<br><br><i><p>Is wanting to leave Neusoft as it is a Chinese SIer and the salaries are increasing so he does not know how long they can keep the edge.</p>
<p> </p>
<p>Is looking for Project Manager in Automotive or Device area.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=300978&pg=ajx')">300978</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shoichi Matsuura (48)<br>Director of Quality<br>Sierra Wireless<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420760&pg=ajx')">420760</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadayuki Kitajima (50)<br>Quality<br>Bosch<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=341600&pg=ajx')">341600</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dinesh Vudathu (40)<br>Senior Project manger<br>Accel Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420571&pg=ajx')">420571</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Tadano (38)<br>R&D Engineer<br>Mitsubishi Automotive Techno-Service Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420601&pg=ajx')">420601</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masahiro Nakao (52)<br>Supplier Performance Engineer<br>Visteon Japan Ltd.<br><br><i><p>Open to new opps. Same requirements as before: QA, AQE, or Supplier Quality is ok, needs to be Yokohama or near, expected salary above 9M. Still at Visteon, and still working as a QE. </p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=301095&pg=ajx')">301095</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Yamada (40)<br>Interior Quality Manager for Asia<br>Continental AG<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420247&pg=ajx')">420247</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="JUNGRYUL  KIM (38)<br>Quality Management System manager<br>Continental AG<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420635&pg=ajx')">420635</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Okawa (56)<br>Senior Quality Assurance Manager<br>Murata Engineering<br><br><i><p>Correction, he is 56 already. </p>
<p> </p>
<p> </p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420666&pg=ajx')">420666</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Matsuhiro Kuwahara (38)<br>Quality Engineer<br>kotobukiya Fronte Co.Ltd<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420307&pg=ajx')">420307</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kohei Okuda (36)<br>Software engineer<br>NK Works Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420205&pg=ajx')">420205</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takuni Nishikawa (45)<br>Quality Engineering Asst. Manager<br>Aisin Seiki Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420513&pg=ajx')">420513</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taichi Arakawa (42)<br>Sales Engineer<br>Eberspächer Catem Japan Ltd.<br><br><i><p>Linked In.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417726&pg=ajx')">417726</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ono Nobura (45)<br>Sales Manager<br>Denso<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420743&pg=ajx')">420743</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seki Takayuki (40)<br>Quality leader<br>Volvo Nippon K.K.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420415&pg=ajx')">420415</a>
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
			<div class="stat_holder revenueSize2" id="516">
			12			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dinesh Vudathu (40)<br>Senior Project manger<br>Accel Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420571&pg=ajx')">420571</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Tadano (38)<br>R&D Engineer<br>Mitsubishi Automotive Techno-Service Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420601&pg=ajx')">420601</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Yamada (40)<br>Interior Quality Manager for Asia<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420247&pg=ajx')">420247</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="JUNGRYUL  KIM (38)<br>Quality Management System manager<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420635&pg=ajx')">420635</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Okawa (56)<br>Senior Quality Assurance Manager<br>Murata Engineering<br><br><i><p>Correction, he is 56 already. </p>
<p> </p>
<p> </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420666&pg=ajx')">420666</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Matsuhiro Kuwahara (38)<br>Quality Engineer<br>kotobukiya Fronte Co.Ltd<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420307&pg=ajx')">420307</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kohei Okuda (36)<br>Software engineer<br>NK Works Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420205&pg=ajx')">420205</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takuni Nishikawa (45)<br>Quality Engineering Asst. Manager<br>Aisin Seiki Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420513&pg=ajx')">420513</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taichi Arakawa (42)<br>Sales Engineer<br>Eberspächer Catem Japan Ltd.<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417726&pg=ajx')">417726</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ono Nobura (45)<br>Sales Manager<br>Denso<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420743&pg=ajx')">420743</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seki Takayuki (40)<br>Quality leader<br>Volvo Nippon K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420415&pg=ajx')">420415</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hikaru Kitamura (30)<br>Inside Sales Advisor<br>Tesla Motors<br><br><i><p>Had a phone meeting with him. Good energy, native level English (graduated in Canada). Now working at Tesla Motors as an Inside Sales Advisor. It is a junior role, mostly taking care of customer experience and customer satisfaction, taking orders for cars, organising promotion. Does a lot of communication with his clients by phone and in person (only B2c experience so far). Making 4M at the moment. Will be an active mover in 6 months, since has only been with Tesla since October last year. 28</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404397&pg=ajx')">404397</a>
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
			<div class="stat_holder revenueSize2" id="516">
			8			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masahiro Nakao (52)<br>Supplier Performance Engineer<br>Visteon Japan Ltd.<br><br><i><p>Open to new opps. Same requirements as before: QA, AQE, or Supplier Quality is ok, needs to be Yokohama or near, expected salary above 9M. Still at Visteon, and still working as a QE. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=301095&pg=ajx')">301095</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka Yamamoto (53)<br>Quality Engineer<br>Autoliv Japan Ltd.<br><br><i><p>Open to new opps. Same requirements as before: QA, AQE, or Supplier Quality is ok, needs to be Yokohama or near, expected salary above 9M. Still at Visteon, and still working as a QE. </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=331600&pg=ajx')">331600</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hidehiko Koyata (36)<br>Product manager<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420227&pg=ajx')">420227</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Riki Iwai (38)<br>Senior Application Engineer<br>Mathworks<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420440&pg=ajx')">420440</a>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="516">
			12			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dinesh Vudathu (40)<br>Senior Project manger<br>Accel Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420571&pg=ajx')">420571</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kenji Tadano (38)<br>R&D Engineer<br>Mitsubishi Automotive Techno-Service Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420601&pg=ajx')">420601</a>
										</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kentaro Yamada (40)<br>Interior Quality Manager for Asia<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420247&pg=ajx')">420247</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="JUNGRYUL  KIM (38)<br>Quality Management System manager<br>Continental AG<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420635&pg=ajx')">420635</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Okawa (56)<br>Senior Quality Assurance Manager<br>Murata Engineering<br><br><i><p>Correction, he is 56 already. </p>
<p> </p>
<p> </p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420666&pg=ajx')">420666</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Matsuhiro Kuwahara (38)<br>Quality Engineer<br>kotobukiya Fronte Co.Ltd<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420307&pg=ajx')">420307</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kohei Okuda (36)<br>Software engineer<br>NK Works Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420205&pg=ajx')">420205</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takuni Nishikawa (45)<br>Quality Engineering Asst. Manager<br>Aisin Seiki Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420513&pg=ajx')">420513</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Taichi Arakawa (42)<br>Sales Engineer<br>Eberspächer Catem Japan Ltd.<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417726&pg=ajx')">417726</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ono Nobura (45)<br>Sales Manager<br>Denso<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420743&pg=ajx')">420743</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Seki Takayuki (40)<br>Quality leader<br>Volvo Nippon K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420415&pg=ajx')">420415</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hikaru Kitamura (30)<br>Inside Sales Advisor<br>Tesla Motors<br><br><i><p>Had a phone meeting with him. Good energy, native level English (graduated in Canada). Now working at Tesla Motors as an Inside Sales Advisor. It is a junior role, mostly taking care of customer experience and customer satisfaction, taking orders for cars, organising promotion. Does a lot of communication with his clients by phone and in person (only B2c experience so far). Making 4M at the moment. Will be an active mover in 6 months, since has only been with Tesla since October last year. 28</i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404397&pg=ajx')">404397</a>
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
		<td class="name_column revenueSize">P. Greeff</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			20			</div>
			<div class="stat_candi_info 480">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ramdan Abbacha (48)<br>Senior Estimator<br>Construction G.C.<br><br><i><p>met with Tada -was OK.  Personality test plus a Japanese test, English teats, numerical test, and a verbal reasoning test. 45 minutes with HRD then a different HR Member.  </p>
<p>was at 11 at PWC -now at 8.  going to interviews and the benchmark is now about 10~11.  DTC 13M range.  </p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420569&pg=ajx')">420569</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masaru kawabata (-)<br>Server Administrator<br>Linkbal Inc.<br><br><i><p>Originally from Algeria, been in Canada 20 Years. Has Citizenship. Work on large scale projects ranging from $500K - $100 mil dollars. Has 15 years experience in Heavy civil construction. Has worked with hard rock, has built roads, bridges, etc.&nbsp; He was part of the project for the Champlain bridge in Quebec. This was a joint venture between 3 companies and his part was worth $100 mil. Has managed up to 4 Junior estimators. Wants to move out of Montreal as the work situation isnt very go</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=406428&pg=ajx')">406428</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiji Momozaki (-)<br>Manager<br>NXP Semiconductor<br><br><i><p>Linked In.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420680&pg=ajx')">420680</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Shajan Miah (-)<br>IT Director - Service Delivery Management<br>Asurion Japan K.K.<br><br><i><p>Recommendation by Takahiro Kumagai</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420726&pg=ajx')">420726</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Vivek Jaiswal (26)<br>Software Engineer<br>Hikari Tsushin, Inc.<br><br><i><p>Introduction:</p>
<p>Looking for CIO / Head of IT / Head of Delivery / IT Director - challenging role.<br />Remuneration : 18MIL +<br />Roles:</p>
<p>Chief Information Officer, Chief Technology Officer, Director Of Information Technology, Information Technology Manager<br />Locations:</p>
<p>United Kingdom, Japan, Manchester, United Kingdom, Singapore<br />Job types:</p>
<p>Full-time, Remote<br />Start date:</p>
<p>Anytime</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419032&pg=ajx')">419032</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tsuyoshi Hashiguchi (31)<br>Consultant<br>Kurt Salmon Associates<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418389&pg=ajx')">418389</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryohei Maeda (28)<br>Marketing Executive<br>American Express<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420619&pg=ajx')">420619</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuko Igarashi (-)<br>Service Delivery Manager<br>Microsoft<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420641&pg=ajx')">420641</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saji Raju (39)<br>Program Manager / Delivery Manager<br>KPIT TECHNOLOGIES<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417917&pg=ajx')">417917</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Vishwa Ved (39)<br>Director (Sales)<br>Agiliad Technologies Pvt. Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420669&pg=ajx')">420669</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nischal Pradhan (30)<br>Service Delivery Manager / Senior Engineer<br>Eire Systems<br><br><i><p>JLPT N2</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420595&pg=ajx')">420595</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Kobayashi (-)<br>Account Manager<br>PTC<br><br><i><p>Is on 14M (50:50) which he feels is a very tough structure.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420696&pg=ajx')">420696</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akihito Sugai (38)<br>Senior Manager<br>Accenture Japan<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418121&pg=ajx')">418121</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuka Mamiya (36)<br>Digital Marketing Manager<br>Sun Corporation<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420685&pg=ajx')">420685</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Satoshi Fujita (37)<br>Senior Consultant<br>Genpact Japan<br><br><i><p>Linked In.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413457&pg=ajx')">413457</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasuhiro Aoki (30)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420187&pg=ajx')">420187</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Maedomari (29)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420707&pg=ajx')">420707</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jervis Lew (30)<br>Java Engineer<br>IVIS Corporation<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420751&pg=ajx')">420751</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Henry Chen (38)<br>IT Manager<br>World Association of Nuclear Operators (WANO)<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420715&pg=ajx')">420715</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			14			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryohei Maeda (28)<br>Marketing Executive<br>American Express<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420619&pg=ajx')">420619</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuko Igarashi (-)<br>Service Delivery Manager<br>Microsoft<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420641&pg=ajx')">420641</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saji Raju (39)<br>Program Manager / Delivery Manager<br>KPIT TECHNOLOGIES<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417917&pg=ajx')">417917</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Vishwa Ved (39)<br>Director (Sales)<br>Agiliad Technologies Pvt. Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420669&pg=ajx')">420669</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nischal Pradhan (30)<br>Service Delivery Manager / Senior Engineer<br>Eire Systems<br><br><i><p>JLPT N2</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420595&pg=ajx')">420595</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Kobayashi (-)<br>Account Manager<br>PTC<br><br><i><p>Is on 14M (50:50) which he feels is a very tough structure.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420696&pg=ajx')">420696</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akihito Sugai (38)<br>Senior Manager<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418121&pg=ajx')">418121</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuka Mamiya (36)<br>Digital Marketing Manager<br>Sun Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420685&pg=ajx')">420685</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Satoshi Fujita (37)<br>Senior Consultant<br>Genpact Japan<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413457&pg=ajx')">413457</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasuhiro Aoki (30)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420187&pg=ajx')">420187</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Maedomari (29)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420707&pg=ajx')">420707</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jervis Lew (30)<br>Java Engineer<br>IVIS Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420751&pg=ajx')">420751</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Henry Chen (38)<br>IT Manager<br>World Association of Nuclear Operators (WANO)<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420715&pg=ajx')">420715</a>
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
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			5			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Maedomari (29)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420707&pg=ajx')">420707</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori Ichikawa (37)<br>Solution Prinicpal Consultant<br>Oracle<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323252&pg=ajx')">323252</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jiayi Li (27)<br>Business Analyst<br>Boston Consulting Group Japan (BCG)<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419415&pg=ajx')">419415</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Miyuki Nakamura (27)<br>eCommerce & Digital Marketing eCommerce customer Marketing Executive<br>Unilever<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420541&pg=ajx')">420541</a>
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
			5			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Maedomari (29)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420707&pg=ajx')">420707</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoshinori Ichikawa (37)<br>Solution Prinicpal Consultant<br>Oracle<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=323252&pg=ajx')">323252</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jiayi Li (27)<br>Business Analyst<br>Boston Consulting Group Japan (BCG)<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419415&pg=ajx')">419415</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Miyuki Nakamura (27)<br>eCommerce & Digital Marketing eCommerce customer Marketing Executive<br>Unilever<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420541&pg=ajx')">420541</a>
										</div>
							<div class="hover_row colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Masatoshi Nagai (38)<br>Senior Consultant, Industrial Products and Heavy Industry Unit<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417785&pg=ajx')">417785</a>
										</div>
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
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row  colored_row2">
				<a href='javascript:'><center>-</center></a>				</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kelly Day (49)<br>Owner<br>Unemployed<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420478&pg=ajx')">420478</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
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
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="480">
			14			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Dwayne Jewett (48)<br>General Manager/Operations Manager<br>Foran Equipment Ltd<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420573&pg=ajx')">420573</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryohei Maeda (28)<br>Marketing Executive<br>American Express<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420619&pg=ajx')">420619</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuko Igarashi (-)<br>Service Delivery Manager<br>Microsoft<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420641&pg=ajx')">420641</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Saji Raju (39)<br>Program Manager / Delivery Manager<br>KPIT TECHNOLOGIES<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417917&pg=ajx')">417917</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Vishwa Ved (39)<br>Director (Sales)<br>Agiliad Technologies Pvt. Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420669&pg=ajx')">420669</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Nischal Pradhan (30)<br>Service Delivery Manager / Senior Engineer<br>Eire Systems<br><br><i><p>JLPT N2</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420595&pg=ajx')">420595</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Kobayashi (-)<br>Account Manager<br>PTC<br><br><i><p>Is on 14M (50:50) which he feels is a very tough structure.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420696&pg=ajx')">420696</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Akihito Sugai (38)<br>Senior Manager<br>Accenture Japan<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=418121&pg=ajx')">418121</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yuka Mamiya (36)<br>Digital Marketing Manager<br>Sun Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420685&pg=ajx')">420685</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Satoshi Fujita (37)<br>Senior Consultant<br>Genpact Japan<br><br><i><p>Linked In.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413457&pg=ajx')">413457</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yasuhiro Aoki (30)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420187&pg=ajx')">420187</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Rika Maedomari (29)<br>Consultant<br>Deloitte Tohmatsu Consulting Co., Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420707&pg=ajx')">420707</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Jervis Lew (30)<br>Java Engineer<br>IVIS Corporation<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420751&pg=ajx')">420751</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Henry Chen (38)<br>IT Manager<br>World Association of Nuclear Operators (WANO)<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420715&pg=ajx')">420715</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Sato (37)<br>Executive Secretary<br>Qunie Corporation<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=419833&pg=ajx')">419833</a>
										</div>
							<div class="hover_row  colored_row2">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Kelly Day (49)<br>Owner<br>Unemployed<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=420478&pg=ajx')">420478</a>
										</div>
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
										<a data-toggle="tooltip" title="Candidate ID: 419833" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9484&pg=ajx')">9484</a>
										</div>
							<div class="hover_row  colored_row2">
										<a data-toggle="tooltip" title="Candidate ID: 420478" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-005&ppa=ppav&ppt=jd&ppk=9520&pg=ajx')">9520</a>
										</div>
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
									</div>
		</td>
	</tr>
	
			
					<tr class="hover_row">
	<!--<td>researcher</td>-->
	<!--<td>Researcher</td>-->
		<td class="name_column revenueSize">T. Tanigawa</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			16			</div>
			<div class="stat_candi_info 514">
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Norikazu Fushimi (29)<br>Regional Study Manager<br>CSL Behring K.K.<br><br><i><p>Base salary is 4.3M, and get OT, so total is around 5M.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=342311&pg=ajx')">342311</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Nishimura (36)<br>Specialist<br>AbbVie<br><br><i><p>shared JD on MSJ RPM role / no feedback...position already closed. Not a serious mover for now.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=343620&pg=ajx')">343620</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Imokawa Yoshiki (-)<br>staff<br>A2 Healthcare<br><br><i>LN at this time due to phone only, but possible HN.  Waiting on resume also.  Want a f2f</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=408767&pg=ajx')">408767</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takeshi Sunaga (-)<br>Business Strategy Manager<br>Quintiles Transnational Japan K.K.<br><br><i><p>met him at Tokyo Dome Hotel, biostatistician. introduced by Aando who was placed to Novartis by us.</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=413971&pg=ajx')">413971</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Hiroshi Hyakumoto (40)<br>Project Manager<br>Pfizer Japan Inc.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=349511&pg=ajx')">349511</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Naoko Noumi (Suenaga) (40)<br>Associate<br>Novartis Pharma K.K.<br><br><i><p>No change, still lacking career identity. &nbsp;Transferred to drug safety in Oct 2013 (pharmacovigilance operation planning group 安全性業務企画課), main project is to localize the new safety evaluation and reporting system that is used globally. &nbsp;Previous project management required cross-organizational coordination, current role requires cross-functional/operational coordination (それぞれ一つ一つ完結していた業務に、プロセスの足し引きをして足並�</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=411004&pg=ajx')">411004</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ayako Nakagawa (Isshi) (30)<br>CRA<br>Parexel International K.K.<br><br><i><p>NAOKO NOUMI</p>
<p>Novartis Pharma K.K.</p>
<p>Clinical Operations Group 2</p>
<p>Associate</p>
<p>81334986513</p>
<p>818022991149</p>
<p>naoko.suenaga@novartis.com</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=369349&pg=ajx')">369349</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Ryohei Iwasaki (38)<br>Associate<br>Novartis Pharma K.K.<br><br><i><p>BizReach candidate</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=414851&pg=ajx')">414851</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Isao Yasui  (47)<br>MSL, CVN-Thrombosis<br>Bayer Ltd.<br><br><i><p>From Meibo</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404647&pg=ajx')">404647</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko Hayasaka (-)<br>Contract staff<br>Pfizer Japan Inc.<br><br><i><p>PERSONALITY: Friendly guy not on the move but maybe open if the right opp comes along. Been with Bayer for the last 20 years and really has no concept of job change. Typical MR type candidate and unfortunately not scientific. <br />CURRENT POSITION &amp; RESPONSIBILITIES: 2010 &ndash; Present. Bayer MSL for CVN. No subordinates and reports to Head of CVN MSL&rsquo;s (Hitoshi Ueda) &amp; CVN MD. <br />CAREER HISTORY: Whole career at Bayer. Before moving into MSL role he was an MR for 17 years.</i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=415847&pg=ajx')">415847</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yoko Yoshinaga (-)<br>HEOR Statistician Manager<br>AbbVie<br><br><i><p>From Pfizer meibo</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417485&pg=ajx')">417485</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Manami Otsuka (54)<br>Director<br>Shire Baxalta<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=86218&pg=ajx')">86218</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Tadashi Koga (49)<br>Director<br>Shin Nippon Biomedical Laboratories<br><br><i><p>1</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=324616&pg=ajx')">324616</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Motoyuki Takano (54)<br>Head of Pharmacovigilance<br>Shire Baxalta<br><br><i><p>Ex-Sanofi. Placed in Ferring in 2014</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=403735&pg=ajx')">403735</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Hamada (43)<br>Clinical Project Manager<br>AbbVie<br><br><i><p>濱田</p></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=319967&pg=ajx')">319967</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takako Saito (50)<br>CLINICAL OPS LEADER<br>Parexel International K.K.<br><br><i></i>"  href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417038&pg=ajx')">417038</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Motoyuki Takano (54)<br>Head of Pharmacovigilance<br>Shire Baxalta<br><br><i><p>Ex-Sanofi. Placed in Ferring in 2014</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=403735&pg=ajx')">403735</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Hamada (43)<br>Clinical Project Manager<br>AbbVie<br><br><i><p>濱田</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=319967&pg=ajx')">319967</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takako Saito (50)<br>CLINICAL OPS LEADER<br>Parexel International K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417038&pg=ajx')">417038</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Kondo  (36)<br>MSL Specialist<br>MSD K.K.<br><br><i><p>404717 is the same person</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=241733&pg=ajx')">241733</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mika Hiratsuka (36)<br>Clinical Trial Specialist<br>Parexel International K.K.<br><br><i><p>duplicate to&nbsp;#405237 assessed</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=354177&pg=ajx')">354177</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Tsuda (37)<br>MSL<br>Amgen Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404625&pg=ajx')">404625</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (33)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
										</div>
							<div class="hover_row">
				<a href='javascript:'><center>-</center></a>				</div>
						</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			3			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Tsuda (37)<br>MSL<br>Amgen Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404625&pg=ajx')">404625</a>
										</div>
							<div class="hover_row colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (33)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
										</div>
							<div class="hover_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka ishii (57)<br>MSL<br>Janssen Pharmaceutical K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412640&pg=ajx')">412640</a>
										</div>
									</div>
		</td>
		<td>
			<div class="stat_holder revenueSize2" id="514">
			2			</div>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Yutaka ishii (57)<br>MSL<br>Janssen Pharmaceutical K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=412640&pg=ajx')">412640</a>
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
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Motoyuki Takano (54)<br>Head of Pharmacovigilance<br>Shire Baxalta<br><br><i><p>Ex-Sanofi. Placed in Ferring in 2014</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=403735&pg=ajx')">403735</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takashi Hamada (43)<br>Clinical Project Manager<br>AbbVie<br><br><i><p>濱田</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=319967&pg=ajx')">319967</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takako Saito (50)<br>CLINICAL OPS LEADER<br>Parexel International K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417038&pg=ajx')">417038</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Takayuki Kondo  (36)<br>MSL Specialist<br>MSD K.K.<br><br><i><p>404717 is the same person</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=241733&pg=ajx')">241733</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Mika Hiratsuka (36)<br>Clinical Trial Specialist<br>Parexel International K.K.<br><br><i><p>duplicate to&nbsp;#405237 assessed</p></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=354177&pg=ajx')">354177</a>
										</div>
							<div class="hover_row ">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Koichi Tsuda (37)<br>MSL<br>Amgen Ltd.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=404625&pg=ajx')">404625</a>
										</div>
							<div class="hover_row  colored_row">
										<a onmouseover=" $(this).tooltip({content: function(){ return $(this).attr('title'); }}).mouseenter();" onmouseout="$('.ui-tooltip-content').parents('div').remove();" data-toggle="tooltip" title="Keiko  Araragi (33)<br>CRA<br>Quintiles Transnational Japan K.K.<br><br><i></i>" href="javascript: view_candi('https://slistem.slate.co.jp/index.php5?uid=555-001&ppa=ppav&ppt=candi&ppk=417104&pg=ajx')">417104</a>
										</div>
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
	</tr>
	
		<tr class="totals_table_footer">
	<!--<td colspan="15">&nbsp;</td></tr>-->
	<!--<tr bgcolor="#58FAAC"> -->
		<td class='revenueSize3' colspan="10" class="text_right">
			Total :
		</td>
		<td class='revenueSize3'>
			33		</td>
		<td class='revenueSize3'>
			2		</td>
		<td class='revenueSize3'>
			2		</td>
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