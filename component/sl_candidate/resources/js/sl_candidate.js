
function toggleCandiTab(poElement, psIdToShow, psContainer, candidate_id,is_client = false,doubleWin = false)
{
  //psIdToShow acilacak olan tab

  if(psIdToShow == 'candiTab2' &&  is_client != false &&  is_client != 'false')
  {
    if(confirm("This candidate works at a Slate client, if you access his contact information, a notification will be sent to the client\'s owner."))
    {
      if(poElement)
      {
        //remove selected links adn select current clicked one

        // company i olusturan kisiye mail atacagiz
        if(candidate_id == '#ctc_1')
        {
          var candidate = doubleWin;
        }
        else
        {
          var candidate = candidate_id;
        }

        var urlMail = "/index.php5?uid=555-001&ppa=csam&ppt=candi&ppk="+candidate+"&pg=ajx&cid="+is_client;
        AjaxRequest(urlMail, '', '', '', '', '', "");

        $(poElement).siblings('.selected').removeClass('selected');
        $(poElement).addClass('selected');

        var oContainer =  $(poElement).closest('.candiTabContainer');
        if(typeof candidate != 'undefined' && candidate != null)
        {
          //alert(candidate_id);
          //alert(psIdToShow);
          var serverName = window.location.host;
          var url = "/index.php5?uid=555-001&ppa=ppcl&ppt=candi&ppk="+candidate+"&pg=ajx&logType="+psIdToShow;
          //alert(url);
          //var url = "/index.php5?uid=555-001&ppa=ppav&ppt=candi&pg=ajx&insertNewLog=contactDetail&ppk="+candidate_id;
          AjaxRequest(url, '', '', '', '', '', "");

          //AjaxRequest(url, 'transparent light_animation', '', 'topCandidateSection', '', '', "initTopPageSection();");
          //$get(url);
          //test = refresh_candi(candidate_id,'','contactDetails');
          //alert(test);

        }

        //fetch the tabContent elements. all if no psContainer is specified, or the ones from a specific container
        if(!psContainer)
          psContainer = '';

        var oElement = $(psContainer+' .aTabContent:visible', oContainer);

        $(oElement).fadeOut(0, function()
        {
          $('#'+psIdToShow, oContainer).fadeIn(325, function()
          {
            $(this).mCustomScrollbar('update');
            //$(this).css('border', '1px solid red');
          });
        });
      }
      else
        $('#'+psIdToShow).fadeIn(325);
    }
    else
    {
    // Do nothing!
    }
  }
  else
  {
    if(poElement)
    {
      //remove selected links adn select current clicked one

      $(poElement).siblings('.selected').removeClass('selected');
      $(poElement).addClass('selected');

      var oContainer =  $(poElement).closest('.candiTabContainer');
      if(typeof candidate_id != 'undefined' && candidate_id != null)
      {
        //alert(candidate_id);
        //alert(psIdToShow);
        var serverName = window.location.host;
        var url = "/index.php5?uid=555-001&ppa=ppcl&ppt=candi&ppk="+candidate_id+"&pg=ajx&logType="+psIdToShow;
        //alert(url);
        //var url = "/index.php5?uid=555-001&ppa=ppav&ppt=candi&pg=ajx&insertNewLog=contactDetail&ppk="+candidate_id;
        AjaxRequest(url, '', '', '', '', '', "");

        //AjaxRequest(url, 'transparent light_animation', '', 'topCandidateSection', '', '', "initTopPageSection();");
        //$get(url);
        //test = refresh_candi(candidate_id,'','contactDetails');
        //alert(test);

      }

      //fetch the tabContent elements. all if no psContainer is specified, or the ones from a specific container
      if(!psContainer)
        psContainer = '';

      var oElement = $(psContainer+' .aTabContent:visible', oContainer);

      $(oElement).fadeOut(0, function()
      {
        $('#'+psIdToShow, oContainer).fadeIn(325, function()
        {
          $(this).mCustomScrollbar('update');
          //$(this).css('border', '1px solid red');
        });
      });
    }
    else
      $('#'+psIdToShow).fadeIn(325);
  }


  return true;
}


function view_comp(psUrl)
{
  splitPage();

  AjaxRequest(psUrl, 'body', '', 'topCandidateSection', '', '', "initTopPageSection();");
}

function view_candi(psUrl, psTab)
{
  splitPage();
  if(psTab)
    AjaxRequest(psUrl, 'transparent light_animation', '', 'topCandidateSection', '', '', "initTopPageSection(); $('"+psTab+"').click(); ");
  else
    AjaxRequest(psUrl, 'transparent light_animation', '', 'topCandidateSection', '', '', "initTopPageSection();");
}

function refresh_candi(pnPk, pbRequestCheck, insertNewLog)
{
  if(typeof insertNewLog != 'undefined' && insertNewLog != null)
  {
    sURL = "/index.php5?uid=555-001&ppa=ppav&ppt=candi&pg=ajx&insertNewLog="+insertNewLog+"&candidate_id="+pnPk;
  }

  if(pbRequestCheck)
    sURL = "/index.php5?uid=555-001&ppa=ppav&ppt=candi&pg=ajx&check_profile=1&ppk="+pnPk;
  else
    sURL = "/index.php5?uid=555-001&ppa=ppav&ppt=candi&pg=ajx&ppk="+pnPk;

  return view_candi(sURL);
}

function refresh_comp(pnPk)
{
  return view_comp("/index.php5?uid=555-001&ppa=ppav&ppt=comp&pg=ajx&ppk="+pnPk);
}


function view_position(psUrl)
{
  var oConf = goPopup.getConfig();
  oConf.height = 700;
  oConf.width = 950;
  goPopup.setLayerFromAjax(oConf, psUrl);
}

function add_candi_note(psUrl)
{
  var oConf = goPopup.getConfig();
  oConf.width = 1080;
  oConf.height = 725;
  goPopup.setLayerFromAjax(oConf, psUrl);
}
function edit_candi(psUrl)
{
  var oConf = goPopup.getConfig();
  oConf.width = 1080;
  oConf.height = 725;
  goPopup.setLayerFromAjax(oConf, psUrl);
}

function popup_candi(poTag, psURL)
{
  var oPosition = $(poTag).offset();
  var nPageHeight = $(document).innerHeight();
  if(nPageHeight - (oPosition.top+10) < 450)
  {
    oPosition.top-= 450;
  }

  if(oPosition.top < 30)
    oPosition.top = 30;

  goPopup.removeByType('floatingCandi');
  var oConf = goPopup.getConfig('', 'floatingCandi');

  if($('body').attr('wide-css'))
  {
    oConf.width = 740;
  }
  else
  {
    oConf.width = 590;
  }

  oConf.height = 430;
  oConf.modal = 0;
  oConf.draggable = true;

  oConf.show = "blind";
  oConf.hide = "explode";
  oConf.position = [oPosition.left+10, oPosition.top+10];

  goPopup.setLayerFromAjax(oConf, psURL+ '&preview=1');
}

/**
 * Comment
 */
function initTopPageSection()
{
  $('#topCandidateSection:not(:visible)').fadeIn();
  $('.aTabContent').mCustomScrollbar({mouseWheelPixels: 130});
}

/**
 * Bind a scrolling event to fix/redesign list header when scrolling
 */


/**
 * Comment
 */
function setViewTooltip()
{
  $('.candiTopSectLeft a.openTooltip').tooltip({position: {at:"left-90 bottom"}});
}








/* **************************************************************** */
/* **************************************************************** */
// list boxes and drag & drop
/* **************************************************************** */
/* **************************************************************** */

function listBoxClicked(oBox)
{
  var oList = $(oBox).closest('ul');
  var aoBoxes = $('li > div > div .listBox:checked', oList);
  var nChecked = aoBoxes.length;

  if(nChecked <= 0)
  {
    $('.multi_drag:visible').remove();
    return true;
  }

  var sType = oList.closest('.tplListContainer').attr('data-type');
  var asIdList = new Array();
  aoBoxes.each(function(nIndex, oElement)
  {
    asIdList.push($(oElement).val());
  });

  if($('.multi_drag:visible').length < 1)
  {
    //$('.section_manage').prepend('<div class="multi_drag" data-type="'+sType+'" data-ids="'+asIdList.join(',')+'"><span>'+nChecked+'</span> item(s)</div>');
    $('.section_multidrag').prepend('<div class="multi_drag" data-type="'+sType+'" data-ids="'+asIdList.join(',')+'"><span>'+nChecked+'</span> item(s) selected</div>');
    $('.multi_drag').draggable(
    {
      helper: "clone",
      zIndex: 5000000,
      appendTo: "body",
      containment: "window",
      start: function()
      {
        var nFolderList = $(".menuFolderContainer:visible").length;
        if(!nFolderList)
          $(".menu_workspace:not(:visible)").parent().find(".menuActionMenuContainer").click();
      }
    });
  }
  else
  {
    $('.multi_drag:visible').attr('data-ids', asIdList.join(','));
    $('.multi_drag:visible').attr('data-type', sType);
    $('.multi_drag:visible > span').html(nChecked);
  }

  return true;
}



function listSelectBox(psListId, pbCheck)
{
  if(pbCheck)
  {
    $('#'+psListId+' ul li > div input[type=checkbox]').prop('checked', 'checked');
    listBoxClicked($('#'+ psListId +' ul li:first'));
  }
  else
  {
    $('#'+psListId+' ul li > div input[type=checkbox]').prop('checked', '');
    listBoxClicked($('#'+ psListId +' ul li:first'));
  }

}






/**
 * Comment
 */
function confirmMeetingForm()
{
  $('#meetingAddFormId').append('<input type="hidden" value="1" name="confirm_date" />').submit();
}