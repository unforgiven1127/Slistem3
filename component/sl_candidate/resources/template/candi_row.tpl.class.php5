<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/component/display/resources/class/template/template.tpl.class.php5');

class CCandi_row extends CTemplate
{

  public function __construct(&$poTplManager, $psUid, $pasParams, $pnTemplateNumber)
  {
    $this->csTplType = 'row';
    $this->casTplToLoad = array();
    $this->casTplToProvide = array();

    parent::__construct($poTplManager, $psUid, $pasParams, $pnTemplateNumber);
  }

  public function getTemplateType()
  {
    return $this->csTplType;
  }

  public function getRequiredFeatures()
  {
    return array('to_load' => $this->casTplToLoad, 'to_provide' => $this->casTplToProvide);
  }

  public function getDisplay($pasData, $pasField, $pasColumnParam = array(), $pasHeader = array())
  {
    $oPage = CDependency::getCpPage();
    $oDisplay = CDependency::getCpHtml();
    $oLogin = CDependency::getCpLogin();

    if(empty($pasData['_is_admin']) && $pasData['_sys_redirect'] > 0)
      $nCandidatePk = $pasData['_sys_redirect'];
    else
      $nCandidatePk = $pasData['sl_candidatepk'];

    $sViewURL = $oPage->getAjaxUrl('sl_candidate', CONST_ACTION_VIEW, CONST_CANDIDATE_TYPE_CANDI, (int)$pasData['PK']);
    $sViewJS = 'view_candi(\''.$sViewURL.'\');';

    $asOption = array('class' => $pasColumnParam[0]['tag']);
    $candidate_id = $pasData['sl_candidatepk'];
    $candidateLastStatus = getLastStatus($candidate_id);

    $lastStatusClean = 0;
    if(isset($candidateLastStatus[0]))
    {
      $lastStatusClean = $candidateLastStatus[0]['status'];
    }

    if($candidate_id == 418815)
    {
      ChromePhp::log($lastStatusClean);
    }

    $lastStatus_ = 0;
    if(isset($candidateLastStatus[0]))
    {
      $lastStatus_ = $candidateLastStatus[0]['status'];
      if($lastStatus_ == 200 && isset($candidateLastStatus[1]['status']) && $candidateLastStatus[1]['status'] == 101)
      {
        $lastStatus_ =$candidateLastStatus[1]['status'];
      }
    }

    $alreadyPlaced = true;
    if($lastStatus_ == 101)
    {
        $alreadyPlaced = false;
    }
    $CandidatePlacedFlag = getCandidatePlacedFlag($candidate_id);

    $placementCount = getCandidatePlacementCount($candidate_id);

    $candidateActiveFlag = true;
    $isCandidateActive = isCandidateActive($candidate_id);
    if(isset($isCandidateActive[0]['activeCount']))
    {
      if($isCandidateActive[0]['activeCount'] > 0)
      {
        $candidateActiveFlag = false;
      }
    }

    $CandidatePlacementCount = 0;
    if(isset($placementCount[0]['placement_count']))
    {
      $CandidatePlacementCount = $placementCount[0]['placement_count'];
    }

    $newClass = " ";
    $blurClass = " ";
    $blurClass2 = " ";
    if($CandidatePlacementCount > 0)
    {
      if($lastStatusClean > 0)
      {
        $newClass = " highClass2 ";
      }
      else
      {
        $newClass = " highClass ";
      }
    }
    if($candidate_id == 154310)
    {
      ChromePhp::log($candidateActiveFlag);
    }
    if($candidateActiveFlag)
    {
      $blurClass = "Opac ";
      $blurClass2 = " opacity: 0.5 !important; ";
    }
    /*if($alreadyPlaced && $CandidatePlacedFlag)
    {
      $newClass = " highClass ";
    }*/

    $sHTML = '';
    $sHTML.= $oDisplay->getBlocStart('', array('class' => 'tplListRow '.$newClass.' tplCandiRow'));


    //get the uniq column id from the column param for js sort features
    //inherit the column style/class
    set_array($pasColumnParam[0]['tag'], '');

    $sHTML.= $oDisplay->getBloc('', '<input name="listBox[]" value="'.$nCandidatePk.'" id="listBox_'.$nCandidatePk.'" class="listBox" type="checkbox" onchange="listBoxClicked(this);" />', $asOption);


    set_array($pasColumnParam[1]['tag'], '');
    $asOption = array('class' => $pasColumnParam[1]['tag'].' tplCandiRow_small');
    $sHTML.= $oDisplay->getBloc('', '<label class="list_item_draggable " for="listBox_'.$nCandidatePk.'" data-ids="'.$nCandidatePk.'" data-type="candi" data-title="'.$pasData['sl_candidatepk'].' - '.$pasData['lastname'].' '.$pasData['firstname'].'">'.$pasData['sl_candidatepk'].'</label>', $asOption);


    set_array($pasColumnParam[2]['tag'], '');
    $asOption = array('class' => $pasColumnParam[2]['tag'].' tplCandiRow_continuous clickable','onclick' => $sViewJS);
    if(1)// $pasData['cp_client'] == 1 || $pasData['is_client'] kaldirdik
    {
      $company_id = $pasData['sl_companypk'];
      $company_information = getCompanyInformation($company_id);
      $level = $company_information['level'];
      $levelClass = getLevelIcon($level);

      //$asOption['class'].= ' tplCandi_client';
      $asOption['class'].= ' '.$levelClass.' ';

      $asOption['title'] = 'Work for a client company';
      $asOption['sort_value'] = '1';
    }
    else
    {
      $asOption['sort_value'] = '2';
    }
    $sHTML.= $oDisplay->getBloc('', '', $asOption);


    set_array($pasColumnParam[3]['tag'], '');
    $asOption = array('class' => $pasColumnParam[3]['tag'].' tplCandiRow_continuous clickable');

    //priority to in_ply: dynamic status, he's in play now !!
    $sValue = '';


    $candidateLastStatus = getLastStatus($candidate_id);
    $statusGroup = array();
    $groupFlag = true;
    foreach ($candidateLastStatus as $key => $value)
    {
      if(!isset($statusGroup[$value['positionfk']]))
      {
        $statusGroup[$value['positionfk']] = array();
      }
      $statusGroup[$value['positionfk']][] = $value['status'];
    }
    foreach ($statusGroup as $key => $value)
    {
      if($value[0] != 200)
      {
        $lastStatus = $value[0];
        $groupFlag = false;
      }
    }

    if($groupFlag)
    {
      if(isset($candidateLastStatus[0]))
      {
        $lastStatus = $candidateLastStatus[0]['status'];
        if($lastStatus == 200 && isset($candidateLastStatus[1]['status']) && $candidateLastStatus[1]['status'] == 101)
        {
          $lastStatus =$candidateLastStatus[1]['status'];
        }
      }
      else
      {
        $lastStatus = 0;
      }
    }

    $nValue = 0;
    //if(!empty($pasData['_pos_status']))
    $lastStatus = $lastStatusClean;
    if($lastStatusClean > 0)
    {
      if($lastStatusClean == 1)
      {
        $asOption['class'].= ' tplCandi_status'.$blurClass;
        $sValue = ' ptchd';
        $asOption['title'] = 'Pitched';
      }
      else if($lastStatusClean == 2)
      {
        $asOption['class'].= ' tplCandi_status'.$blurClass;
        $sValue = ' ressnt';
        $asOption['title'] = 'Resume sent';
        $nValue = 5;
      }
      else if($lastStatusClean >= 50 && $lastStatusClean <= 70)
      {
        $asOption['class'].= ' tplCandi_status'.$blurClass;
        $nWeighted = ($lastStatusClean-50);
        $asOption['class'].= ' tplCandi_status_50'.$blurClass;
        $sValue = ' CCM '.$nWeighted;
        $asOption['title'] = $sValue;
        $nValue = $nWeighted+5;
      }
      else if($lastStatusClean == 100)
      {
        $asOption['class'].= ' tplCandi_status'.$blurClass;
        $sValue = ' offer';
        $asOption['title'] = 'Offer';
        //$asOption['style'] = "background: transparent url('/component/sl_candidate/resources/pictures/status/status_offer.jpg') no-repeat center 5px;".$blurClass2;
        $asOption['class'].= ' tplCandi_status_100'.$blurClass;
        $nValue = 20;
      }
      else if($lastStatusClean == 101)
      {
        $asOption['class'].= $blurClass;
      }
      elseif($lastStatusClean == 151)//$pasData['_pos_status']
      {
        $asOption['class'].= ' tplCandi_status tplCandi_status_151'.$blurClass;
        $asOption['title'] = 'Last action has expired';
        $sValue = ' expire';
        $nValue = 3;
      }
      elseif($lastStatusClean == 200 || $lastStatusClean == 251)
      {
        $asOption['class'].= ' tplCandi_status tplCandi_status_inactive'.$blurClass;
        $sValue = ' inactive';
        $asOption['title'] = 'Candidate inactive: expired, stalled, fallen';
        $nValue = 2;
      }
      else
      {
        $nValue = 0;
      }
    }
    else
    {
      $nValue = 0;
    }

    if($CandidatePlacementCount == 1)
    {
      $sValue.= "<div style='margin-top:5px; ".$blurClass2."'><img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''></div>";
    }
    else if($CandidatePlacementCount == 2)
    {
      $sValue.= "<div style='margin-top:5px; ".$blurClass2."'>
        <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
        <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
      </div>";
    }
    else if($CandidatePlacementCount == 3)
    {
      $sValue.= "<div style='margin-top:5px; ".$blurClass2."'>
        <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
        <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
      </div>";
      $sValue.= "<div style='margin-top:5px; ".$blurClass2."'>
        <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
      </div>";
    }
    else if($CandidatePlacementCount > 3)
    {
      $sValue.= "<div style='margin-top:5px; ".$blurClass2."'>
        <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
        <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
      </div>";
      $sValue.= "<div style='margin-top:5px; ".$blurClass2."'>
        <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
        <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
      </div>";
    }
    /*if($lastStatus > 0)
    {
      if($lastStatus < 101)//$pasData['_pos_status']
      {
        //$asOption['class'].= ' tplCandi_status_active tplCandi_status';
        $asOption['class'].= ' tplCandi_status';
        $asOption['title'] = 'Candidate active: pitched, CCM, offer ';
        $nValue = 4;

        switch($lastStatus)//$pasData['_pos_status']
        {
          case 1: $sValue = ' ptchd'; $asOption['title'] = 'Pitched'; break;
          case 2: $sValue = ' ressnt'; $asOption['title'] = 'Resume sent'; $nValue = 5; break;

          case ($pasData['_pos_status'] >= 50 && $pasData['_pos_status'] < 100):
            $nWeighted = ((int)$pasData['_pos_status']-50);
            $asOption['class'].= ' tplCandi_status_50 hereTest';
            $sValue = ' CCM '.$nWeighted; $asOption['title'] = $sValue; $nValue = $nWeighted+5; break;

        case 100:
            $sValue = ' offer';
            $asOption['title'] = 'Offer';
            $asOption['class'].= ' tplCandi_status_100';
            $nValue = 20;
            break;
        }
      }
      elseif($lastStatus == 101)//$pasData['_pos_status']
      {
        //ChromePhp::log($placementCount);
        $placementCount = $placementCount[0]['placement_count'];
        $asOption['class'].= ' _tplCandi_status_placed';
        //$sValue = ' placed';
        $asOption['title'] = 'Candidate has been placed';
        $nValue = 1;
        if($placementCount == 1)
        {
          $sValue.= "<div style='margin-top:5px;'><img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''></div>";
        }
        else if($placementCount == 2)
        {
          $sValue.= "<div style='margin-top:5px;'>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
          </div>";
        }
        else if($placementCount == 3)
        {
          $sValue.= "<div style='margin-top:5px;'>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
          </div>";
          $sValue.= "<div style='margin-top:5px;'>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
          </div>";
        }
        else if($placementCount > 3)
        {
          $sValue.= "<div style='margin-top:5px;'>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
          </div>";
          $sValue.= "<div style='margin-top:5px;'>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
          </div>";
        }
        //$sValue.= "<div style='margin-top:5px;'>(".$placementCount.")</div>";
        //$sValue.= "<div style='margin-top:5px;'><b style='color:black'>(".$placementCount."X)</b><img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''></div>";
      }
      elseif($lastStatus == 151)//$pasData['_pos_status']
      {
        $asOption['class'].= ' tplCandi_status tplCandi_status_151';
        $asOption['title'] = 'Last action has expired';
        $sValue = ' expire';
        $nValue = 3;
      }
      elseif($lastStatus == 200 || $lastStatus == 251)
      {
        $asOption['class'].= ' tplCandi_status tplCandi_status_inactive';
        $sValue = ' inactive';
        $asOption['title'] = 'Candidate inactive: expired, stalled, fallen';
        $nValue = 2;
      }
      else
      {
        $asOption['class'].= ' ';
        $sValue = ' ';
        $asOption['title'] = '';
        $nValue = 0;
      }

      $iconAlreadyAddedFlag = strpos($asOption['class'], '_tplCandi_status_placed');
      if($alreadyPlaced && $CandidatePlacedFlag && !$iconAlreadyAddedFlag)
      {
        $placementCount = getCandidatePlacementCount($candidate_id);
        //ChromePhp::log($placementCount);
        $placementCount = $placementCount[0]['placement_count'];
        $asOption['class'].= ' _tplCandi_status_placed';
        //$asOption['title'] = 'Candidate has been placed';
        $nValue = 1;
        if($placementCount == 1)
        {
          $sValue.= "<div style='margin-top:5px;'><img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''></div>";
        }
        else if($placementCount == 2)
        {
          $sValue.= "<div style='margin-top:5px;'>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
          </div>";
        }
        else if($placementCount == 3)
        {
          $sValue.= "<div style='margin-top:5px;'>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
          </div>";
          $sValue.= "<div style='margin-top:5px;'>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
          </div>";
        }
        else if($placementCount > 3)
        {
          $sValue.= "<div style='margin-top:5px;'>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
          </div>";
          $sValue.= "<div style='margin-top:5px;'>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
            <img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''>
          </div>";
        }
        //$sValue.= "<div style='margin-top:5px;'>(".$placementCount.")</div>";
        //$sValue.= "<div style='margin-top:5px;'><b style='color:black'>(".$placementCount."X)</b><img src='/component/sl_candidate/resources/pictures/status/list_placed.png' alt=''></div>";
      }

    }*/
    //else
      //$nValue = 0;

    /* Debug status sort
     * set_array($pasData['sort_status'], 0);
    $sValue.= $pasData['sort_status'];*/

    /*In play is now (again) automatic, so we don't really need the icon anymore
    if($pasData['_in_play'] > 0)
    {
      $sValue = strtoupper(substr(trim($sValue), 0, 3));
      $asOption['class'].= ' tplCandi_inplay';
      $sValue.= '<span class="tplCandi_status_play" title="In play">&nbsp;</span>';
      $nValue+= 5;
    }*/

    $asOption['onclick'] = 'view_candi(\''.$sViewURL.'\', \'#tabLink8\');';
    $asOption['sort_value'] = $nValue;
    $sHTML.= $oDisplay->getBloc('', $sValue, $asOption);


    set_array($pasColumnParam[4]['tag'], '');
    $asOption = array('class' => $pasColumnParam[4]['tag'].' tplCandiRow_continuous clickable');
    $asOption['sort_value'] = (int)$pasData['grade'];
    $asOption['onclick'] = 'view_candi(\''.$sViewURL.'\');';
    switch($pasData['grade'])
    {
      case 1:
        $asOption['class'].= ' tplCandi_grade_met';
        $asOption['title'] = 'Met grade candidate';
        break;

      case 2:
        $asOption['class'].= ' tplCandi_grade_low';
        $asOption['title'] = 'Low grade candidate';
        break;

      case 3:
        $asOption['class'].= ' tplCandi_grade_high';
        $asOption['title'] = 'High grade candidate';
        break;

      case 4:
        $asOption['class'].= ' tplCandi_grade_top';
        $asOption['title'] = 'Top shelf candidate';
        break;
    }
    $sHTML.= $oDisplay->getBloc('', '', $asOption);

    set_array($pasColumnParam[5]['tag'], '');
    $asOption = array('class' => $pasColumnParam[5]['tag']);
    $asOption['sort_value'] = (int)$pasData['_has_doc'];

    if($pasData['_has_doc'])
    {
      $sURL = $oPage->getAjaxUrl('555-001', CONST_ACTION_VIEW, CONST_CANDIDATE_TYPE_DOC, (int)$pasData['sl_candidatepk']);
      $asOption['class'].= ' tplCandi_resume';
      $asOption['title'] = 'Resume';
      $asOption['onclick'] = 'window.open(\''.$sURL.'\', \'_view_res\'); ';
    }
    $sHTML.= $oDisplay->getBloc('', '&nbsp;', $asOption);


    /*if(empty($pasData['_is_admin']) && $pasData['_sys_redirect'] > 0)
    {
      set_array($pasColumnParam[6]['tag'], '');
      $asOption = array('class' => $pasColumnParam[6]['tag'].' tplCandiRow_continuous tpl_link_cell');

      if((int)$pasData['sex'] == 1)
        $asOption['class'].= ' tplCandi_man';
      else
        $asOption['class'].= ' tplCandi_woman';

      $sURL = $oPage->getAjaxUrl('sl_candidate', CONST_ACTION_VIEW, CONST_CANDIDATE_TYPE_CANDI, (int)$pasData['_sys_redirect']);
      $asOption['onclick'] = 'view_candi(\''.$sURL.'\');';

      $sLink = $oDisplay->getLink($pasData['lastname'], 'javascript:;');
      $sHTML.= $oDisplay->getBloc('', $sLink, $asOption);

      set_array($pasColumnParam[7]['tag'], '');
      $asOption = array('class' => $pasColumnParam[7]['tag'].' tpl_link_cell');
      $asOption['onclick'] = 'view_candi(\''.$sURL.'\');';


      $sLink = $oDisplay->getLink($pasData['firstname'], 'javascript:;');
      $sHTML.= $oDisplay->getBloc('', $sLink, $asOption);

      $asOption = array('class' => 'merged');
      $sHTML.= $oDisplay->getBloc('', 'Candidate [#'.$pasData['sl_candidatepk'].'] merged to #'.$pasData['_sys_redirect'], $asOption);
    }
    else*/
    {
      set_array($pasColumnParam[6]['tag'], '');

      $candidate_id_class = 'candidate_'.$candidate_id;
      $asOption = array('class' => $pasColumnParam[6]['tag'].' tplCandiRow_continuous tpl_link_cell '.$candidate_id_class);

      if($pasData['_sys_status'] > 0)
        $asOption['class'].= ' deleted';

      if((int)$pasData['sex'] == 1)
        $asOption['class'].= ' tplCandi_man';
      else
        $asOption['class'].= ' tplCandi_woman';

      $sURL = $oPage->getAjaxUrl('sl_candidate', CONST_ACTION_VIEW, CONST_CANDIDATE_TYPE_CANDI, (int)$pasData['sl_candidatepk']);
      $asOption['onclick'] = 'view_candi(\''.$sURL.'\');';

      $sLink = $oDisplay->getLink($pasData['lastname'], 'javascript:;');
      $sHTML.= $oDisplay->getBloc('', $sLink, $asOption);


      set_array($pasColumnParam[7]['tag'], '');
      $asOption = array('class' => $pasColumnParam[7]['tag'].' tpl_link_cell');
      $asOption['onclick'] = 'view_candi(\''.$sURL.'\');';

      if($pasData['_sys_status'] > 0)
        $asOption['class'].= ' deleted';

      $sLink = $oDisplay->getLink($pasData['firstname'].'&nbsp;', 'javascript:;');
      $sHTML.= $oDisplay->getBloc('', $sLink, $asOption);


      set_array($pasColumnParam[8]['tag'], '');
      $asOption = array('class' => $pasColumnParam[8]['tag'].' tpl_link_cell');
      if(!empty($pasData['company_name']))
      {
        $sURL = $oPage->getAjaxUrl('sl_candidate', CONST_ACTION_VIEW, CONST_CANDIDATE_TYPE_COMP, (int)$pasData['sl_companypk']);
        $asOption['onclick'] = 'view_comp(\''.$sURL.'\');';
        $sLink = $oDisplay->getLink($pasData['company_name'], 'javascript:;');
      }
      else
        $sLink = '';

      $sHTML.= $oDisplay->getBloc('', $sLink, $asOption);


      // -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-
      // -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-  -=-
      // display field if selected in user settings

      $nColNumber = 9;

      if(isset($pasHeader['position_play_company']))
      {
        set_array($pasColumnParam[$nColNumber]['tag'], '');
        $asOption = array('class' => $pasColumnParam[$nColNumber]['tag']);
        $sHTML.= $oDisplay->getBloc('', $pasData['position_play_company'], $asOption);

        $nColNumber++;
      }

      if(isset($pasData['activity']))
      {
        set_array($pasColumnParam[$nColNumber]['tag'], '');
        $asOption = array('class' => $pasColumnParam[$nColNumber]['tag'].'');

        if($pasData['_in_play'] > 1)
        {
          $sValue = $pasData['_in_play'].' active positions';
          $asOption['title'] = $pasData['activity'];
          $asOption['class'].= ' clickable';
          $asOption['onclick'] = ' tp(this);';
        }
        elseif($pasData['_in_play'] < 0)
        {
          $sValue = $pasData['_in_play'].' inactive positions';
          $asOption['title'] = $pasData['activity'];
          $asOption['class'].= ' clickable';
          $asOption['onclick'] = ' tp(this); ';
        }
        else
          $sValue = $pasData['activity'];

        $sHTML.= $oDisplay->getBloc('', $sValue, $asOption);
        $nColNumber++;
      }

      if(isset($pasHeader['title']))
      {
        set_array($pasColumnParam[$nColNumber]['tag'], '');
        $asOption = array('class' => $pasColumnParam[$nColNumber]['tag']);
        $sHTML.= $oDisplay->getBloc('', $pasData['title'], $asOption);

        $nColNumber++;
      }

      if(isset($pasHeader['department']))
      {
        //set_array($pasColumnParam[$nColNumber]['tag'], '');
        $asOption = array('style'=>'width:100px !important;');//'class' => $pasColumnParam[$nColNumber]['tag'],
        $sHTML.= $oDisplay->getBloc('', $pasData['department'], $asOption);

        $nColNumber++;
      }

      if(isset($pasHeader['lastNote']))
      {
        //paste character note if exists else last note.
        $candidateLastNote = getSelectedNote($pasData['lastNote']);

        set_array($pasColumnParam[$nColNumber]['tag'], '');
        set_array($pasColumnParam[$nColNumber]['tag'], '');
        $asOption = array('class' => $pasColumnParam[$nColNumber]['tag']);
        $asOption['sort_value'] = (int)$pasData['lastNote'];

        $note_date = '-';
        $note_content = '-';

        if(isset($candidateLastNote[0]['date_create']))
        {
          $note_date = $candidateLastNote[0]['date_create'];
        }
        if(isset($candidateLastNote[0]['content']))
        {
          $note_content = $candidateLastNote[0]['content'];
          $note_content = htmlentities($note_content);
          $note_content = str_replace(array('"', '\''), '&quot;', $note_content);
        }

        if(!empty($pasData['note_date']))
        {
          $note_date = $pasData['note_date'];
        }
        if(isset($pasData['note_content']))
        {
          $note_content = htmlentities($pasData['note_content']);
          $note_content = str_replace(array('"', '\''), '&quot;', $note_content);
        }
        if(!empty($note_date))
        {
          $asOption['class'].= ' tplCandi_note';
          $asOption['title'] = "<div class=\'list_note_title\'>Last entry on the <span>".substr($note_date,0,10)."</span></div>". $note_content;
          $asOption['onmouseover'] = ' $(this).tooltip({content: function(){ return $(this).attr(\'title\'); }}).mouseenter(); ';
          //$asOption['onmouseover'] = ' $(this).tooltip({content: function(){ return $(this).attr(\'title\'); }}); ';
          //$asOption['onmouseout'] = "alert('test')"; // works
          //$asOption['onmouseout'] = "$('.closepopup').hide();"; // sometimes notes are not closed, so I added this part and it works
          $asOption['onmouseout'] = "$('.ui-tooltip-content').parents('div').remove();";
        }

        $sHTML.= $oDisplay->getBloc('', '', $asOption);
        $nColNumber++;
      }

      if(isset($pasHeader['date_birth']))
      {
        set_array($pasColumnParam[$nColNumber]['tag'], '');
        $asOption = array('class' => $pasColumnParam[$nColNumber]['tag'].' alignCenter');
        $sHTML.= $oDisplay->getBloc('', $pasData['age'], $asOption);

        $nColNumber++;
      }

      //salary
      if(isset($pasHeader['salary']))
      {
        set_array($pasColumnParam[$nColNumber]['tag'], '');
        $asOption = array('class' => $pasColumnParam[$nColNumber]['tag'].' list_salary_cell');
        $asOption['sort_value'] = (int)$pasData['full_salary'];
        if(empty($pasData['full_salary']))
          $sHTML.= $oDisplay->getBloc('', '', $asOption);
        else
        {
          $full_salary = (int)$pasData['full_salary']/1000000;
          $salary_unit = 'M';
          if ($full_salary < 1)
          {
            $full_salary = (int)$pasData['full_salary']/1000;
            $salary_unit = 'K';
          }

          $sHTML.= $oDisplay->getBloc('', round($full_salary, 1).$salary_unit, $asOption);
        }

        $nColNumber++;
      }

      //phone
      if(isset($pasHeader['phone']))
      {
        set_array($pasColumnParam[$nColNumber]['tag'], '');
        $asOption = array('class' => $pasColumnParam[$nColNumber]['tag'].' alignCenter');
        $sHTML.= $oDisplay->getBloc('', "7785552525", $asOption);

        $nColNumber++;
      }

      //creator/person in charge
      if(isset($pasHeader['manager']))
      {
        set_array($pasColumnParam[$nColNumber]['tag'], '');
        $asOption = array('class' => $pasColumnParam[$nColNumber]['tag']);
        if(empty($pasData['created_by']))
          $sHTML.= $oDisplay->getBloc('', '-', $asOption);
        else
          $sHTML.= $oDisplay->getBloc('', $oLogin->getUserLink((int)$pasData['created_by'] , true), $asOption);

        $nColNumber++;
      }


      $asItem = array(CONST_CP_UID => '555-001', CONST_CP_ACTION => CONST_ACTION_VIEW, CONST_CP_TYPE => CONST_CANDIDATE_TYPE_CANDI, CONST_CP_PK => $pasData['sl_candidatepk']);
      $sHTML.= $oDisplay->getBlocStart('', array('class' => 'rowActionContainer'));

      $sURL = $oPage->getAjaxUrl('sl_candidate', CONST_ACTION_EDIT, CONST_CANDIDATE_TYPE_CANDI, $pasData['sl_candidatepk'], $asItem);
      $sHTML.= '<a class="candi_row_edit" title="Edit candidate profile" onclick="edit_candi(\''.$sURL.'\');" title="Edit candidate"  href="javascript:;">&nbsp;</a>';

      $sURL = $oPage->getAjaxUrl('sl_event', CONST_ACTION_ADD, CONST_EVENT_TYPE_EVENT, 0, $asItem);
      $sHTML.= '<a class="candi_row_note" title="Add a nore or character note" onclick="add_candi_note(\''.$sURL.'\');" href="javascript:;">&nbsp;</a>';

      if(!empty($pasData['folderfk']))
      {
        $folder_obj = CDependency::getComponentByName('sl_folder');
        $folder_db = $folder_obj->getFolder((int)$pasData['folderfk']);

        $read = $folder_db->readFirst();

        $folder_owner = $folder_db->getFieldValue('ownerloginfk');
        $current_user = $oLogin->getUserPk();

        if ($folder_owner == $current_user || $oLogin->isAdmin())
        {
          $sURL = $oPage->getAjaxUrl('sl_folder', CONST_ACTION_DELETE, CONST_FOLDER_TYPE_ITEM, 0,
            array('folderpk' => $pasData['folderfk'], 'item_type' => 'candi', 'ids' => $pasData['sl_candidatepk']));
          $sHTML.= '<a class="candi_row_folder" title="Remove candidate from the folder" onclick="if(window.confirm(\'Remove from the folder ?\')){ AjaxRequest(\''.$sURL.'\'); $(this).closest(\'li.tplListRowContainer\').remove(); }" href="javascript:;">&nbsp;</a>';
        }
      }

      $sHTML.= $oDisplay->getBlocEnd();


      /*$nCount = 0;
      foreach($pasField as $sFieldName)
      {
        if(!isset($pasData[$sFieldName]))
        {
          $sHTML.= $oDisplay->getBloc('', '', $asOption);
        }
        else
        {
          $sValue = $pasData[$sFieldName];
          $sHTML.= $oDisplay->getBloc('', $sValue, $asOption);
        }

        $nCount++;
      }*/
    }

    $sHTML.= $oDisplay->getBlocEnd();
    return $sHTML;
  }
}