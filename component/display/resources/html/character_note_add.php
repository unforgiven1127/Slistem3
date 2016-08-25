
<script type="text/javascript">

	if($.browser.chrome) {
	   $('.inputs').css({'width':'300px'});
	   $('.inputsSkill').css({'width':'50px'});
	} else if ($.browser.mozilla) {
	   $('.inputs').css({'width':'302px'});
	   $('.inputsSkill').css({'width':'46px'});
	} else if ($.browser.msie) {
	   $('.inputs').css({'width':'300px'});
	}

	$('.formFieldTitle').css({'margin-left':'-90px'});
	$('#topTextP').css({'margin-left':'-90px'});
	$('#topTextP').css({'margin-bottom':'-40px'});
	$('#meeting_typeId').css({'margin-left':'-90px'});
	$('#meetingDate').css({'margin-left':'-90px'});
	$('#meetingDate').css({'margin-bottom':'10px'});
	$('.formFieldTitle').css({'width':'935px'});
	$('.formFieldTitle').html('Add character assessment');
	$('.formLabel').hide();
	$('.formFieldRequired').hide();
	//$('.formLabel').css({'margin-left':'-156px'});

	$('#formSubmitButton').click(function(){
		alert('formSubmitButton clicked');
	});

	$('.inputsSkill').change(function(){
		var val = $(this).val();

		if(val < 1 || val > 9)
		{
			alert("All skill areas should have a value between 1 - 9.");
		}
	});

</script>

<style>
	.box {
	    /*margin: 0 auto !important;*/
	    /*margin-top:15px !important;*/
	    margin-left: -100px !important;
	    border-collapse: collapse;
	}

	.box2 {
	    /*margin: 0 auto !important;*/
	    /*margin-top:15px !important;*/
	    /*margin-left: -50px !important;*/
	    border-collapse: collapse;
	}

	.titles{
		font-size: 9pt;
		text-align: center !important;
		background-color: #EEEEEE !important;
		width:304px !important;
		height:30px !important;
		font-weight: bold !important;
		padding-top: 10px;
	    border-left: 1px solid grey;
		border-right: 1px solid grey;
		border-top: 1px solid grey;

	}

	.titlesSkill{
		text-align: center !important;
		background-color: #EEEEEE !important;
		width:52px !important;
		height:15px !important;
		font-weight: bold !important;
		/*padding-top: 10px;*/
	    border-left: 1px solid grey;
		border-right: 1px solid grey;
		border-top: 1px solid grey;
		border-bottom: 1px solid grey;

	}

	.inputsSkill{
		/*width:50px !important;*/
		margin-top: -50px;
	}

	.inputs{
		/*width:300px !important;*/
		margin-top: -10px;
		height: 110px;
	}

	.tdTitle{
	    padding-top: 30px !important;
	}

	.tdTitleSkill{
		padding-top: 50px !important;
		z-index: 999;
	}

	.inputsSkillTd{
		/*margin-top: -10px !important;*/
	}


</style>


<table class="box" align="center">
	<tr>
		<td style='padding-top: 0px !important;' class='tdTitle'><p class='titles'>Personality & Communication</p></td>
		<td style='padding-top: 0px !important;' class='tdTitle'><p class='titles'>Career Expertise – Present, Past & Future</p></td>
		<td style='padding-top: 0px !important;' class='tdTitle'><p class='titles'>Education & Training</p></td>
	<tr>
	<tr>
		<td><textarea placeholder="Sections must be filled.  Minimum of 25 characters." id='personality_note' name='personality_note' class='inputs'><?php if(isset($personality_note)){echo $personality_note;} ?></textarea></td>
		<td><textarea placeholder="Sections must be filled.  Minimum of 25 characters." id='career_note' name='career_note' class='inputs'><?php if(isset($career_note)){echo $career_note;} ?></textarea></td>
		<td><textarea placeholder="Sections must be filled.  Minimum of 15 characters." id='education_note' name='education_note' class='inputs'><?php if(isset($education_note)){echo $education_note;} ?></textarea></td>
	</tr>
</table>

<table class="box" align="center">
	<tr>
		<td class='tdTitle'><p class='titles'>Move – Reason & Timing</p></td>
		<td class='tdTitle'><p class='titles'>Compensation Breakdown & Desire</p></td>
		<td class='tdTitle'><p class='titles'>Companies – Recently Met & Introduced</p></td>
	<tr>
	<tr>
		<td><textarea placeholder="Sections must be filled.  Minimum of 25 characters." id='move_note' name='move_note' class='inputs'><?php if(isset($move_note)){echo $move_note;} ?></textarea></td>
		<td><textarea placeholder="Sections must be filled.  Minimum of 15 characters." id='compensation_note' name='compensation_note' class='inputs'><?php if(isset($compensation_note)){echo $compensation_note;} ?></textarea></td>
		<td><textarea placeholder="" id='past_note' name='past_note' class='inputs'><?php if(isset($past_note)){echo $past_note;} ?></textarea></td>
	</tr>
</table>

<table class="box2" align="center">
	<tr>
		<td class='tdTitleSkill'><p class='titlesSkill'>AG</p></td>
		<td class='tdTitleSkill'><p class='titlesSkill'>FX</p></td>
		<td class='tdTitleSkill'><p class='titlesSkill'>AP</p></td>
		<td class='tdTitleSkill'><p class='titlesSkill'>CH</p></td>
		<td class='tdTitleSkill'><p class='titlesSkill'>AM</p></td>
		<td class='tdTitleSkill'><p class='titlesSkill'>ED</p></td>
		<td class='tdTitleSkill'><p class='titlesSkill'>MP</p></td>
		<td class='tdTitleSkill'><p class='titlesSkill'>PL</p></td>
		<td class='tdTitleSkill'><p class='titlesSkill'>IN</p></td>
		<td class='tdTitleSkill'><p class='titlesSkill'>ENG</p></td>
		<td class='tdTitleSkill'><p class='titlesSkill'>EX</p></td>
	<tr>
	<tr>
		<td class='inputsSkillTd'><input min="1" max="9" id='skill_ag' name='skill_ag' value='<?php echo $skillArray['skill_ag']; ?>' type='number' class='inputsSkill'></input></td>
		<td class='inputsSkillTd'><input min="1" max="9" id='skill_fx' name='skill_fx' value='<?php echo $skillArray['skill_fx']; ?>' type='number' class='inputsSkill'></input></td>
		<td class='inputsSkillTd'><input min="1" max="9" id='skill_ap' name='skill_ap' value='<?php echo $skillArray['skill_ap']; ?>' type='number' class='inputsSkill'></input></td>
		<td class='inputsSkillTd'><input min="1" max="9" id='skill_ch' name='skill_ch' value='<?php echo $skillArray['skill_ch']; ?>' type='number' class='inputsSkill'></input></td>
		<td class='inputsSkillTd'><input min="1" max="9" id='skill_am' name='skill_am' value='<?php echo $skillArray['skill_am']; ?>' type='number' class='inputsSkill'></input></td>
		<td class='inputsSkillTd'><input min="1" max="9" id='skill_ed' name='skill_ed' value='<?php echo $skillArray['skill_ed']; ?>' type='number' class='inputsSkill'></input></td>
		<td class='inputsSkillTd'><input min="1" max="9" id='skill_mp' name='skill_mp' value='<?php echo $skillArray['skill_mp']; ?>' type='number' class='inputsSkill'></input></td>
		<td class='inputsSkillTd'><input min="1" max="9" id='skill_pl' name='skill_pl' value='<?php echo $skillArray['skill_pl']; ?>' type='number' class='inputsSkill'></input></td>
		<td class='inputsSkillTd'><input min="1" max="9" id='skill_in' name='skill_in' value='<?php echo $skillArray['skill_in']; ?>' type='number' class='inputsSkill'></input></td>
		<td class='inputsSkillTd'><input min="1" max="9" id='skill_e' name='skill_e' value='<?php echo $skillArray['skill_e']; ?>' type='number' class='inputsSkill'></input></td>
		<td class='inputsSkillTd'><input min="1" max="9" id='skill_ex' name='skill_ex' value='<?php echo $skillArray['skill_ex']; ?>' type='number' class='inputsSkill'></input></td>
	</tr>
</table>