<div id="reminderAddFormInnerId" class="innerForm"><div class="formFieldContainer fieldName58afa549821ab formFieldWidth1 "><div inajax="" id="58afa549821abId" class=" formFieldTitle">Send a message</div><div class="floatHack"></div></div><div class="formFieldContainer fieldNamedate_notification formFieldWidth1  formFieldHidden "><div class="formField"><input type="hidden" name="date_notification" value="2017-02-24 12:15" inajax="" id="fldid_58afa54982b7b"></div><div class="floatHack"></div></div><div class="formFieldContainer fieldNametrigger formFieldWidth1  formFieldHidden "><div class="formField"><input type="hidden" name="trigger" value="morning" inajax="" id="fldid_58afa54982c1d"></div><div class="floatHack"></div></div><div class="formFieldContainer fieldNameemail_only formFieldWidth1  formFieldHidden "><div class="formField"><input type="hidden" name="email_only" value="1" inajax="" id="fldid_58afa54982ce0"></div><div class="floatHack"></div></div><div class="formFieldContainer fieldNamerecipient formFieldWidth1 "><script language="javascript">$(document).ready(function(){
         $("#recipientId").tokenInput("https://beta2.slate.co.jp/index.php5?uid=579-704&ppa=ppasea&ppt=usr&ppk=0&pg=ajx" 
       ,{
       noResultsText: "no results found",
       onResult: function(oResult)
       {
         if(oResult.length == 0)
           return [{id: "token_clear", name: "no result found"}]

         var oLast = $(oResult).last();
         if(oLast && oLast[0] && oLast[0].callback)
           eval(oLast[0].callback);

          return oResult;
       },
       onAdd: function(oItem)
       {
         // console.log(oItem);
         if(oItem.id == "token_clear")
           $(this).tokenInput("clear");

         
       },
       tokenFormatter: function(item)
       {
          if(item.label)
            return "<li class=test1 'recipient_item' title='"+item.title+"'><p>" + item.label + "</p></li>";
          else
            return "<li class=test2 'recipient_item' title='"+item.title+"'><p>" + item.name + "</p></li>";
       },

       tokenLimit: "5", prePopulate:[{id:"260",name:"Database Administrator"}]}); }); $("#recipientId").on("remove", function(){ $("#recipientId .token-input-dropdown-mac").remove(); }); </script><div class="formLabel">Recipient</div><div class="formField formAutocompleteContainer "><ul class="token-input-list-mac"><li class="test2 token-input-token-mac" 'recipient_item'="" title="undefined"><p>Database Administrator</p><span class="token-input-delete-token-mac">×</span></li><li class="token-input-input-token-mac"><input type="text" autocomplete="off" id="token-input-recipientId" style="outline: none;"><tester style="position: absolute; top: -9999px; left: -9999px; width: auto; font-size: 12px; font-family: Verdana, Arial, sans-serif; font-weight: 400; letter-spacing: 0px; white-space: nowrap;"></tester></li></ul><input type="text" name="recipient" url="https://beta2.slate.co.jp/index.php5?uid=579-704&amp;ppa=ppasea&amp;ppt=usr&amp;ppk=0&amp;pg=ajx" nbresult="5" inajax="" id="recipientId" value="" class="autocompleteField" onadd="" jscontrol="jsFieldNotEmpty@|" style="display: none;"></div><div class="floatHack"></div></div><div class="formFieldContainer fieldNamereminder_item formFieldWidth1 "><div class="formLabel">Related to</div><div class="formField cp_item_selector"><select id="cp_item_reminder_itemId" name="cp_item_reminder_item" onchange="var sValue = $('> :selected', this).attr('data-url');
     initAutoComplete('reminder_itemId', sValue); " class="cp_item_selector_select"><option data-url="https://beta2.slate.co.jp/index.php5?uid=555-001&amp;ppa=ppasea&amp;ppt=candi&amp;ppk=0&amp;autocomplete=1&amp;pg=ajx" value="555-001|@|ppav|@|candi" selected="selected">Candidate</option><option data-url="https://beta2.slate.co.jp/index.php5?uid=555-001&amp;ppa=ppasea&amp;ppt=comp&amp;ppk=0&amp;pg=ajx" value="555-001|@|ppav|@|comp">Company</option><option data-url="https://beta2.slate.co.jp/index.php5?uid=555-005&amp;ppa=ppasea&amp;ppt=jd&amp;ppk=0&amp;pg=ajx" value="555-005|@|ppav|@|jd">Position title/company</option></select><ul class="token-input-list-mac"><li class="autoSearch token-input-token-mac" 'reminder_item_item'=""><p>#154310 - Ms User Test</p><span class="token-input-delete-token-mac">×</span></li><li class="token-input-input-token-mac"><input type="text" autocomplete="off" id="token-input-reminder_itemId" style="outline: none; display: none;"><tester style="position: absolute; top: -9999px; left: -9999px; width: auto; font-size: 12px; font-family: Verdana, Arial, sans-serif; font-weight: 400; letter-spacing: 0px; white-space: nowrap;"></tester></li></ul><input type="text" id="reminder_itemId" name="reminder_item" class="cp_item_selector_autocomplete" style="display: none;">
      </div><script language="javascript">function initAutoComplete(psFieldId, psUrl)
    {
      $("#"+psFieldId).parent().find('ul').remove();
      $("#"+psFieldId).tokenInput(psUrl
      ,{
         onResult: function(oResult)
         {
           var oLast = $(oResult).last();
           if(oLast && oLast[0] && oLast[0].callback)
             eval(oLast[0].callback);

            return oResult;
         },
         onAdd: function(oItem)
         {
           console.log(oItem);
           if(oItem.id == "token_clear")
             $(this).tokenInput("clear");
         },
         tokenFormatter: function(item){ return "<li class=autoSearch 'reminder_item_item'><p>" + item.name + "</p></li>" },
         tokenLimit: "1" , prePopulate:[{id:"154310",name:"#154310 - Ms User Test"}]});
    }
    initAutoComplete("reminder_itemId", "https://beta2.slate.co.jp/index.php5?uid=555-001&ppa=ppasea&ppt=candi&ppk=0&autocomplete=1&pg=ajx");  $("#reminder_itemId").on("remove", function(){ $(".token-input-dropdown-mac").remove(); });   </script><div class="floatHack"></div></div><div class="formFieldContainer fieldName58afa5498241a formFieldWidth1 "><div class="formLabel">&nbsp;</div><div class="formField"><span label="&nbsp;" class="message_help" inajax="" id="58afa5498241aId">* Item description will automatically be added to the message.</span></div><div class="floatHack"></div></div><div class="formFieldContainer fieldNamemessage formFieldWidth1 " style="margin: 12px 0;"><div class="formLabel">Your message</div><div class="formField"><textarea name="message" class="msgField" inajax="" id="messageId"></textarea></div><div class="floatHack"></div></div><div class="formFieldContainer fieldName58afa549826b5 formFieldWidth1 "><div class="sectionTitle sectionClosed formFieldTitle" onclick="toggleSection(this, '58afa54982541');" inajax="" id="58afa549826b5Id">Advanced options</div><div class="floatHack"></div></div><div id="58afa54982541" folded="1" type="open" inajax="" class="formSection hidden"><div class="formFieldContainer fieldName58afa549827c5 formFieldWidth1 "><div class="formLabel">&nbsp;</div><div class="formField"><span label="&nbsp;" inajax="" id="58afa549827c5Id"><span style="font-size: 11px; colro: #666;">
        <u>Naggy message</u>:<br>make Sl[i]stem send multiple emails, to make sure nobody will never forget anything important.
        You'll be able to cancel those email at any given time.</span><br><br><br></span></div><div class="floatHack"></div></div><div class="formFieldContainer fieldNamenaggy formFieldWidth1 "><div class="formLabel">Number of nags</div><div class="formField"><select name="naggy" label="Number of nags" inajax="" id="naggyId"><option value="0"> - once is enough - </option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="5">5</option><option value="10">10</option><option value="100">indefinitly (until cancelled)</option></select></div><div class="floatHack"></div></div><div class="formFieldContainer fieldNamenaggy_frequency formFieldWidth1 "><div class="formLabel">Delay between nags</div><div class="formField"><select name="naggy_frequency" label="Delay between nags" inajax="" id="naggy_frequencyId"><option value="1h">1 hour</option><option value="2h">2 hours</option><option value="3h">3 hours</option><option value="0.5d">half a day</option><option value="1d">1 day</option><option value="2d">2 days</option><option value="3d">3 days</option><option value="1w">1 week</option><option value="2w">2 weeks</option><option value="1m">1 month</option><option value="2m">2 months</option></select></div><div class="floatHack"></div></div><div class="formFieldContainer fieldName58afa54982989 formFieldWidth1 "><span inajax="" id="58afa54982989Id"></span><div class="floatHack"></div></div><div class="floatHack"></div></div><div class="formFieldLinebreaker formFieldWidth1">&nbsp;</div> <div class="submitBtnClass formFieldWidth1"> <input name="Send." type="submit" id="formSubmitButton" value="Send." onclick=""><div class="floatHack"></div> </div><div class="floatHack"></div></div>