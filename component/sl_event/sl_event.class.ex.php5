<?php

require_once('component/sl_event/sl_event.class.php5');

class CSl_eventEx extends CSl_event
{
  private $casCpParam = array();
  private $_oDisplay = null;

  public function __construct()
  {
    parent::__construct();

    $sCandiUid = CDependency::getComponentUidByName('sl_candidate');
    $this->_oDisplay = CDependency::getCpHtml();
    $this->casCpParam = array(CONST_CP_UID => $sCandiUid, CONST_CP_ACTION => CONST_ACTION_VIEW, CONST_CP_TYPE => '', CONST_CP_PK => 0);

    return true;
  }

  //****************************************************************************
  //****************************************************************************
  // Interfaces and component settings
  //****************************************************************************
  //****************************************************************************


  public function getHtml()
  {
    return parent::getHtml();
  }

  public function getAjax()
  {
    $this->_processUrl();
    $oPage = CDependency::getCpPage();

    switch($this->csType)
    {
      case CONST_EVENT_TYPE_EVENT:

        switch($this->csAction)
        {
          case CONST_ACTION_ADD:
          case CONST_ACTION_EDIT:
            return json_encode($oPage->getAjaxExtraContent(array('data' => self::_getNoteForm($this->cnPk))));
            break;

          case CONST_ACTION_SAVEADD:
          case CONST_ACTION_SAVEEDIT:

            $asResult = $this->_saveNote($this->csAction);

            return json_encode($oPage->getAjaxExtraContent($asResult));
            break;
        }
        break;
    }

    return parent::getAjax();
  }


  //****************************************************************************
  //****************************************************************************
  //Component core
  //****************************************************************************
  //****************************************************************************


  public function getNotes($pnItemPk, $psItemType, $psNoteType = '', $pasExcludeType = array())
  {
    if(!assert('is_key($pnItemPk) && !empty($psItemType)'))
      return false;


    $asParams = $this->casCpParam;
    $asParams[CONST_CP_TYPE] = $psItemType;
    $asParams[CONST_CP_PK] = $pnItemPk;

    return $this->_getModel()->getFromCpValues($asParams, $psNoteType, '', $pasExcludeType);
  }


  public function displayNotes($pnItemPk, $psItemType, $psNoteType = '', $pasExcludeType = array(), $pbAddLink = true, $psLinkDefaultType = '')
  {
    if(!assert('is_key($pnItemPk) && !empty($psItemType)'))
      return array();


    $asNotes = array();
    $asNotes = $this->getNotes($pnItemPk, $psItemType, $psNoteType, $pasExcludeType);


    if($psNoteType == 'character')
    {
      $allAreas = array();
      $allAreas['character_note'] = 'character_note';
     /* $allAreas['current_podition_note'] = 'current_podition_note';
      $allAreas['product_exp_note'] = 'product_exp_note';
      $allAreas['compensation_note'] = 'compensation_note';
      $allAreas['move_note'] = 'move_note';
      $allAreas['career_note'] = 'career_note';
      $allAreas['timeline_note'] = 'timeline_note';
      $allAreas['keywants_note'] = 'keywants_note';
      $allAreas['past_note'] = 'past_note';
      $allAreas['education_note'] = 'education_note';*/

      foreach ($allAreas as $key => $value)
      {
        $addNotes = $this->getNotes($pnItemPk, $psItemType, $value, $pasExcludeType);
        if(isset($addNotes) && !empty($addNotes))
        {
          array_push($asNotes,$addNotes[0]);
        }
      }
    }

    uasort($asNotes, sort_multi_array_by_value('date_create', 'reverse'));

    foreach ($asNotes as $key => $note)
    {

      $splitted1 = explode("Content-Type: multipart/related;",$asNotes[$key]['content']);
      if($asNotes[$key]['type'] == "email_sent" && isset($splitted1[1]) && !empty($splitted1[1]))
      {

        $asNotes[$key]['content'] = $splitted1[1];

        $asNotes[$key]['content'] = str_replace("<br />","",$asNotes[$key]['content']);

        $splitted = explode(" ",$asNotes[$key]['content']);

        foreach ($splitted as $i => $value)
        {
          if(strlen($splitted[$i]) > 30)
          {
            $splitted[$i] = '';
          }
        }

        $imploted = implode(" ",$splitted);

        $asNotes[$key]['content'] = $imploted;

        $asNotes[$key]['content'] = TRIM($asNotes[$key]['content']);
      }

        $asNotes[$key]['content'] = str_replace("Content-Type: text/plain; charset=utf-8","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-Transfer-Encoding: 7bit","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-Type: text/html; charset=utf-8","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-Transfer-Encoding: quoted-printable","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("------=_Part_339388_953714533.1467092718630"," ",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-Type: image/png; name=slate_header_small.png","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-Disposition: attachment; filename=slate_header_small.png","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-Transfer-Encoding: base64","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-ID:","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-Type: image/png; name=linkedin.png","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-Disposition: attachment; filename=linkedin.png ","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-Transfer-Encoding: base64","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-Type: image/png; name=slate_logo_small.png","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-Disposition: attachment; filename=slate_logo_small.png","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-ID:","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-Disposition: attachment; filename=linkedin.png","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-Type: multipart/related; ","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Connect to Slate:","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("------=_Part_3526789_7121016.1442195907117","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("Content-Type: text/plain; charset=utf-8","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("=C2=B7","*",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("=20","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("=E2=80=93","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("1=20","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("5=20","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("2=20","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("=A8=E3=80=82","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("()","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("(=E3=82=A2) =E4=B8=","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("(=E3=82=A6) ","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("(=E3=82=A8) =E4=B8=8A=","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("TGlua2VkSW4gCgo=","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("(JP=)","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("(PM/PL=E5=","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("=80=99=E8=A3=9C) /","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("=E9=81=8B=","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("=B0=9A=E5=8F=AF","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("=85=E9=A0=88 ()","",$asNotes[$key]['content']);
        $asNotes[$key]['content'] = str_replace("(5=E9=A8=93)=E3=81=93=E3=81","",$asNotes[$key]['content']);

/*

        $splitted = explode(" ",$asNotes[$key]['content']);

        foreach ($splitted as $i => $value)
        {
          if(strlen($splitted[$i]) > 30)
          {
            $splitted[$i] = '';
          }
        }

        $imploted = implode(" ",$splitted);

        $asNotes[$key]['content'] = $imploted;

        $asNotes[$key]['content'] = TRIM($asNotes[$key]['content']);*/

    }

    //$asNotes = $return['all']; // bos array donunce burada patliyor...
    //$query = $return['query'];

    $oPage = CDependency::getCpPage();
    $oHTML = CDependency::getCpHtml();
    $oLogin = CDependency::getCpLogin();
    $nPriotity = 0;
    $bAddLink = false;
    $sHTML = '';

    /*if($oLogin->getUserPk() == 101 || isDevelopment() )
        {
          $sHTML.= '<a href="javascript:;" onclick="$(this).parent().find(\'.query\').toggle(); ">SQLquery... </a>
            <span class="hidden query"><br />'.$query.'</span><br /><br /><br />';
        }*/

    if ($psNoteType != 'cp_history' || $oLogin->isAdmin())
    {
      $sHTML.= '<div class="tab_bottom_link">';
      $asItem = array('cp_uid' => '555-001', 'cp_action' => CONST_ACTION_VIEW,
        'cp_type' => $psItemType, 'cp_pk' => $pnItemPk, 'default_type' => $psLinkDefaultType);

      if($psLinkDefaultType == 'character')
        $sLabel = 'Add a character note';
      else
        $sLabel = 'Add a note';

      $sURL = $oPage->getAjaxUrl('sl_event', CONST_ACTION_ADD, CONST_EVENT_TYPE_EVENT, 0, $asItem);
      $sJavascript = 'var oConf = goPopup.getConfig(); oConf.width = 950; oConf.height = 550;  goPopup.setLayerFromAjax(oConf, \''.$sURL.'\'); ';
      $sHTML.= '<a href="javascript:;" onclick="'.$sJavascript.'">'.$sLabel.'</a>';
      $sHTML.= '</div>';
    }

    if($psNoteType == 'cp_history')
    {
      $candidate_id = $pnItemPk;
      $companyHistory = getCompanyHistory($candidate_id);

      if(isset($companyHistory[0]) && !empty($companyHistory[0]) && !empty($companyHistory[0]['table']))
      {
        foreach ($companyHistory as $key => $value)
        {
          $addNotes = array();

          $addNotes['_fts'] = $value['action'];
          $addNotes['companyName'] = "";
          $addNotes['content'] = $value['action'];
          $addNotes['cp_action'] = "ppav";
          $addNotes['cp_params'] = "";
          $addNotes['cp_pk'] = (string)$candidate_id;
          $addNotes['cp_type'] = "candi";
          $addNotes['cp_uid'] = "555-001";
          $addNotes['created_by'] = $value['userfk'];
          $addNotes['custom_type'] = "";
          $addNotes['date_create'] = $value['date'];
          $addNotes['date_display'] = $value['date'];
          $addNotes['date_update'] = "";
          $addNotes['event_linkpk'] = "";
          $addNotes['eventfk'] = "";
          $addNotes['eventpk'] = "";
          $addNotes['title'] = "";
          $addNotes['type'] = "cp_history";
          $addNotes['updated_by'] = '';

          array_push($asNotes,$addNotes);

        }
      }

    }

    if(empty($asNotes))
    {
      $sHTML.= '<div class="entry"><div class="note_content"><em>No entry found.</em></div></div>';
    }
    else
    {
      $nCurrentUser = $oLogin->getUserPk();
      $asEventType = getEventTypeList();

      $oPage->addCssFile($this->getResourcePath().'/css/sl_event.css');
      $asUsers = $oLogin->getUserList(0, false, true);
      $sPic = $oHTML->getPicture($this->getResourcePath().'/pictures/edit_16.png');

      $dNow = date('Y-m-d H:i:s');
      $s1HourAgo = date('Y-m-d H:i:s', strtotime('-1 hour'));
      $dAMonthAgo = date('Y-m-d H:i:s', strtotime('-1 month'));
      $dTwoMonthAgo = date('Y-m-d H:i:s', strtotime('-2 month'));

      //$str = 'In My Cart : 11 12 items';
      //preg_match_all('!\d+!', $str, $matches);

      // array gelmezse patliyo... duzelt... MCA
      foreach($asNotes as $asNote)
      {
        if (strpos($asNote['content'], 'for position #') !== false) {
            $exploded = explode('for position #',$asNote['content']);
            $exploded = $exploded[1];
            preg_match_all('!\d+!', $exploded, $position);
            $position_id = $position[0][0];
            $companyInformation = getPositionInformation($position_id);
        }
        if (isset($asNote) && !empty($asNote) && isset($asNote['content']) && strpos($asNote['content'], 'Status changed to') !== false) {
          $asNote['content'] = '<b><i>'.$asNote['content'].' - '.$companyInformation['name'].'</i></b>';
        }

        if($asNote['date_display'] > $dTwoMonthAgo)
          $nPriotity = 2;
        elseif($asNote['date_display'] > $dAMonthAgo)
          $nPriotity = 1;

        //some types (custom or not) may nopt be available for users to use (ex: cp_history)
        if($asNote['custom_type'] || !isset($asEventType[$asNote['type']]['label']))
          $sType = ucfirst(str_replace('_', ' ', $asNote['type']));
        else
          $sType = $asEventType[$asNote['type']]['label'];

        //generic class used for all types of items
        $sHTML.= $oHTML->getBlocStart('', array('class' => 'entry'));

          $sHTML.= $oHTML->getBlocStart('', array('class' => 'note_header'));
            $sHTML.= '&rarr;&nbsp;&nbsp;'.$oHTML->getSpan('', getDateDifference($asNote['date_display'], $dNow).' ago' , array('class' => 'note_date'));
            $sHTML.= '&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;'.$oHTML->getSpan('', $sType, array('class' => 'note_type')).'&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;';

            $sHTML.= $oHTML->getSpanStart();

            if(empty($asUsers[$asNote['created_by']]) || $asNote['created_by'] == -1)
              $sHTML.= ' by '.$oLogin->getUserLink(-1);
            else
              $sHTML.= ' by '.$oLogin->getUserLink($asUsers[$asNote['created_by']], true);

            $sHTML.= $oHTML->getSpanEnd();

            $sHTML.= $oHTML->getSpanStart('', array('class' => 'note_chronology'));
            $sHTML.= substr($asNote['date_display'], 0,-3);
            $sHTML.= $oHTML->getSpanEnd();

          $sHTML.= $oHTML->getBlocEnd();

          if($asNote['title'] == $asNote['content'])
            $asNote['title'] = '';

          if(!empty($asNote['title']) && !empty($asNote['content']))
          {
            $sHTML.= $oHTML->getBloc('', '<span class="note_innerTitle">'.$asNote['title'].'</span><br /><span class="note_innerContent">'.
                    $asNote['content'].'</span>', array('class' => 'note_content'));
          }
          else
            $sHTML.= $oHTML->getBloc('', $asNote['title'].$asNote['content'], array('class' => 'note_content'));

          if ($psNoteType != 'cp_history' || $oLogin->isAdmin())
          {
            //Should we Display the link to edit notes
            //Right to do so or creator and note has been created a bit (allow fix typos)
            $bEdit = (($asNote['created_by'] == $nCurrentUser) && ($asNote['date_create'] > $s1HourAgo));
            if($bEdit || CDependency::getComponentByName('right')->canAccess('555-004', CONST_ACTION_MANAGE, CONST_EVENT_TYPE_EVENT, 0))
            {
              $asCpParam = array(CONST_CP_UID => '555-001',
                CONST_CP_ACTION => CONST_ACTION_VIEW, CONST_CP_TYPE => $psItemType, CONST_CP_PK => $pnItemPk);
              $sURL = $oPage->getAjaxurl($this->csUid, CONST_ACTION_EDIT, CONST_EVENT_TYPE_EVENT, (int)$asNote['eventpk'], $asCpParam);

              $sHTML.= $oHTML->getBloc('', $sPic, array('class' => 'note_edit_link', 'onclick' => '
                var oConf = goPopup.getConfig();
                oConf.width = 950;
                oConf.height = 550;
                goPopup.setLayerFromAjax(oConf, \''.$sURL.'\');'));
            }
          }

        $sHTML.= $oHTML->getBlocEnd();
      }
    }

    return array('content' => $sHTML, 'nb_result' => count($asNotes), 'priority' => $nPriotity);
  }


  /**
   * Display the event form
   * @param integer  $pnPk
   * @return string HTML
 */
  private function _getNoteForm($pnPk)
  {
    // not ekleme kismi buraya geliyor
    if(!assert('is_integer($pnPk)'))
      return '';

    $addHtm = '';
    $oHTML = CDependency::getCpHtml();

    //Fetch the data from the calling component
    $sCp_Uid = getValue(CONST_CP_UID);
    if(empty($sCp_Uid))
      return $oHTML->getBlocMessage(__LINE__.' - Oops, missing some informations to create a note.');


    $sCp_Action = getValue(CONST_CP_ACTION);
    $sCp_Type = getValue(CONST_CP_TYPE);
    $nCp_Pk = (int)getValue(CONST_CP_PK, 0);

    $oPage = CDependency::getCpPage();
    $oPage->addCssFile(self::getResourcePath().'css/sl_event.css');
    $oDB = CDependency::getComponentByName('database');

    //If editing the contact
    if(!empty($pnPk))
    {
      $sQuery = 'SELECT * FROM event as ev ';
      $sQuery.= 'INNER JOIN event_link as el ON (el.eventfk = ev.eventpk AND el.eventfk = '.$pnPk.') ';

      $oDbResult = $oDB->ExecuteQuery($sQuery);
      $bRead = $oDbResult->readFirst();
      if(!$bRead)
        return __LINE__.' - This note is linked to an item that doesn\'t exist.';

      $sURL = $oPage->getAjaxUrl($this->csUid, CONST_ACTION_SAVEEDIT, CONST_EVENT_TYPE_EVENT, $pnPk);
    }
    else
    {
      $oDbResult = new CDbResult();
      $sURL = $oPage->getAjaxUrl($this->csUid, CONST_ACTION_SAVEADD, CONST_EVENT_TYPE_EVENT);
    }


    /* @var $oForm CFormEx */
    $oForm = $oHTML->initForm('evtAddForm');
    $oForm->setFormParams('', true, array('action' => $sURL, 'class' => 'fullPageForm','submitLabel'=>'Save'));
    $oForm->setFormDisplayParams(array('noCancelButton' => 1));

    $oForm->addField('input', CONST_CP_UID, array('type' => 'hidden', 'value' => $sCp_Uid));
    $oForm->addField('input', CONST_CP_ACTION, array('type' => 'hidden', 'value' => $sCp_Action));
    $oForm->addField('input', CONST_CP_TYPE, array('type' => 'hidden', 'value' => $sCp_Type));
    $oForm->addField('input', CONST_CP_PK, array('type' => 'hidden', 'value' => $nCp_Pk));
    $oForm->addField('input', 'no_candi_refresh', array('type' => 'hidden', 'value' => getValue('no_candi_refresh', 0)));
    $oForm->addField('misc', '', array('type' => 'title', 'title'=> 'Add a note'));

    if(!empty($pnPk) && CDependency::getCpLogin()->isAdmin())
    {
      $oForm->addField('checkbox', 'delete_note', array('label'=>'Delete note ?', 'value' => $pnPk, 'textbefore' => 1));
    }


    $asEvent = getEventTypeList(false, $sCp_Type, CDependency::getCpLogin()->isAdmin());
    $sEventType = $oDbResult->getFieldValue('type');

    if(!empty($sEventType) && !isset($asEvent[$sEventType]))
    {
      //a type that is not available for user selection
      //$oForm->addField('misc', '', array('type' => 'text', 'text' => $sEventType.' (can not be changed)', 'style' => 'position: absolute; right: 0;'));
      $oForm->addField('input', '', array('label'=>'Note type', 'value' => $sEventType.'     (can\'t be changed)', 'readonly' => 'readonly', 'style' => 'width: 250px; background-color: #efefef; font-style: italic;'));
      $oForm->addField('hidden', 'event_type', array('value' => $sEventType));
      $oForm->addField('hidden', 'custom_type', array('value' => 1));
    }
    else
    {
      $oForm->addField('select', 'event_type', array('label'=>'Note type', 'onchange' => 'if($(this).val() == \'character\'){ $(this).closest(\'.ui-dialog\').find(\'.note_tip_container\').show(); } else { $(this).closest(\'.ui-dialog\').find(\'.note_tip_container\').hide(); } '));
      $oForm->setFieldControl('event_type', array('jsFieldNotEmpty' => ''));

      if(empty($sEventType))
        $sEventType = getValue('default_type', 'note');

      foreach($asEvent as $asEvents)
      {
        if($sEventType == 'note' && $asEvents['value'] != 'character')
        {
          if($asEvents['value'] == $sEventType)
          $oForm->addOption('event_type', array('value'=>$asEvents['value'], 'label' => $asEvents['label'], 'group' => $asEvents['group'], 'selected'=>'selected'));
          else
            $oForm->addOption('event_type', array('value'=>$asEvents['value'], 'label' => $asEvents['label'], 'group' => $asEvents['group']));
        }
        else if($sEventType == 'character')
        {
          if($asEvents['value'] == 'character')
          {
            if($asEvents['value'] == $sEventType)
              $oForm->addOption('event_type', array('value'=>$asEvents['value'], 'label' => $asEvents['label'], 'group' => $asEvents['group'], 'selected'=>'selected'));
            else
              $oForm->addOption('event_type', array('value'=>$asEvents['value'], 'label' => $asEvents['label'], 'group' => $asEvents['group']));
          }
        }
      }
    }


    $sDate = $oDbResult->getFieldValue('date_display');
    if(empty($sDate))
      $sDate = date('Y-m-d H:i');
    else
      $sDate = date('Y-m-d H:i', strtotime($sDate));

    //$oForm->addField('input', 'date_event', array('type' => 'datetime', 'label'=>'Date', 'value' => $sDate));
   $oForm->addField('input', 'date_event', array('type' => 'hidden', 'label'=>'Date', 'value' => $sDate));



    $sHTML = '';

    if($sEventType != 'character')
    {
      $oForm->addField('input', 'title', array('label'=>'Note title', 'value' => $oDbResult->getFieldValue('title')));
      $oForm->setFieldControl('title', array('jsFieldMinSize' => '2','jsFieldMaxSize' => 255));

      $oForm->addField('textarea', 'content', array('label'=>'Description', 'value' => $oDbResult->getFieldValue('content'), 'isTinymce' => 1));
      $oForm->setFieldControl('content', array('jsFieldMinSize' => '2','jsFieldMaxSize' => 9000));
    }

    if($sEventType == 'character')// eklenmis 10 lu varsa eskisi gibi sadece tek alan gosterilecek
    {
      $validCharacterNotes = getCharacterNotes($nCp_Pk);
      $validCharacterNotesLength = count($validCharacterNotes);

      $candidateActiveMeetings = getCandidateActiveMeetings($nCp_Pk);
      $candidateActiveMeetingsLength = count($candidateActiveMeetings);

      ChromePhp::log($candidateActiveMeetings);
      ChromePhp::log($candidateActiveMeetingsLength);

      $characterNoteControlFlag = false;
      if($candidateActiveMeetingsLength == 0)
      {
        $characterNoteControlFlag = true;
      }
      if($validCharacterNotesLength >= 1) // ilgili bolumleri iceriyor mu bakmamiz gerekiyor.
      {

        $contantArray = array();
        $contantArray[] = 'Personality and communication';
        $contantArray[] = 'Current position and responsibilities';
        $contantArray[] = 'Product or technical expertise';
        $contantArray[] = 'Compensation breakdown';
        $contantArray[] = 'Reason for moving';
        $contantArray[] = 'Career history';
        $contantArray[] = 'Move timeline';
        $contantArray[] = 'Key wants';
        $contantArray[] = 'Companies – introduced recently / bing pitched';
        $contantArray[] = 'Education and training';

        //$characterNoteContent = $validCharacterNotes[0]['content'];
        foreach ($validCharacterNotes as $key1 => $validCharacterNote)
        {
          $count = 0;
          $characterNoteContent = $validCharacterNote['content'];

          foreach ($contantArray as $key2 => $value)
          {
            if(strpos($characterNoteContent,$value))
            {
              $count ++;
            }
          }
          if($count >= 7)//sql sonucu olan karakter note >180 oldugu icin sadece bu kontrol yeterli
          {
            $characterNoteControlFlag = true;
          }
        }

      }
      if($characterNoteControlFlag)
      {

        $oForm->addField('textarea', 'character', array('label'=>'Character note', 'value' => $oDbResult->getFieldValue('content'), 'isTinymce' => 1));
        $oForm->setFieldControl('character', array('jsFieldMinSize' => '2','jsFieldMaxSize' => 9000));
      }
      else
      {
        $skillArray = array();
        $skillArray['skill_ag'] = '0';
        $skillArray['skill_ap'] = '0';
        $skillArray['skill_am'] = '0';
        $skillArray['skill_mp'] = '0';
        $skillArray['skill_in'] = '0';
        $skillArray['skill_ex'] = '0';
        $skillArray['skill_fx'] = '0';
        $skillArray['skill_ch'] = '0';
        $skillArray['skill_ed'] = '0';
        $skillArray['skill_pl'] = '0';
        $skillArray['skill_e'] = '0';

        $candidate_info = getCandidateInformation($nCp_Pk);

        foreach ($skillArray as $key => $value)
        {
          if(!empty($candidate_info[$key]))
          {
            $skillArray[$key] = $candidate_info[$key];
          }
        }

        $addHtml = "
        <div style='margin-left:150px; margim-top:10px;'>
          <table>
            <tr>
             <td style='width:30px !important;' ><p class='spinner_label2'>AG</p></td>
             <td style='width:30px !important;' ><p class='spinner_label2'>AP</p></td>
             <td style='width:30px !important;' ><p class='spinner_label2'>AM</p></td>
             <td style='width:30px !important;' ><p class='spinner_label2'>MP</p></td>
             <td style='width:30px !important;' ><p class='spinner_label2'>IN</p></td>
             <td style='width:30px !important;' ><p class='spinner_label2'>EX</p></td>
             <td style='width:30px !important;' ><p class='spinner_label2'>FX</p></td>
             <td style='width:30px !important;' ><p class='spinner_label2'>CH</p></td>
             <td style='width:30px !important;' ><p class='spinner_label2'>ED</p></td>
             <td style='width:30px !important;' ><p class='spinner_label2'>PL</p></td>
             <td style='width:30px !important;' ><p class='spinner_label2'>E</p></td>
            </tr>
            <tr>
              <td><input type='text' style='width:30px;text-align: center;' name='skill_ag' value='".$skillArray['skill_ag']."'/></td>
              <td><input type='text' style='width:30px;text-align: center;' name='skill_ap' value='".$skillArray['skill_ap']."'/></td>
              <td><input type='text' style='width:30px;text-align: center;' name='skill_am' value='".$skillArray['skill_am']."'/></td>
              <td><input type='text' style='width:30px;text-align: center;' name='skill_mp' value='".$skillArray['skill_mp']."'/></td>
              <td><input type='text' style='width:30px;text-align: center;' name='skill_in' value='".$skillArray['skill_in']."'/></td>
              <td><input type='text' style='width:30px;text-align: center;' name='skill_ex' value='".$skillArray['skill_ex']."'/></td>
              <td><input type='text' style='width:30px;text-align: center;' name='skill_fx' value='".$skillArray['skill_fx']."'/></td>
              <td><input type='text' style='width:30px;text-align: center;' name='skill_ch' value='".$skillArray['skill_ch']."'/></td>
              <td><input type='text' style='width:30px;text-align: center;' name='skill_ed' value='".$skillArray['skill_ed']."'/></td>
              <td><input type='text' style='width:30px;text-align: center;' name='skill_pl' value='".$skillArray['skill_pl']."'/></td>
              <td><input type='text' style='width:30px;text-align: center;' name='skill_e' value='".$skillArray['skill_e']."'/></td>
            </tr>
          </table>
        </div>";

        $oForm->addField('textarea', 'personality_note', array('placeholder'=>'Sections must be filled.  If not completed with 25 characters or more will not be able to save.','label'=>'Personality & Communication', 'value' => $oDbResult->getFieldValue('personality_note'), 'isTinymce' => 1));
        $oForm->setFieldControl('personality_note', array('jsFieldMinSize' => '2','jsFieldMaxSize' => 9000));

        $oForm->addField('textarea', 'current_podition_note', array('placeholder'=>'Sections must be filled.  If not completed with 25 characters or more will not be able to save.','label'=>'Current Position & Responsibilities', 'value' => $oDbResult->getFieldValue('current_podition_note'), 'isTinymce' => 1));
        $oForm->setFieldControl('current_podition_note', array('jsFieldMinSize' => '2','jsFieldMaxSize' => 9000));

        $oForm->addField('textarea', 'career_note', array('placeholder'=>'Sections must be filled.  If not completed with 25 characters or more will not be able to save.','label'=>'Career History', 'value' => $oDbResult->getFieldValue('career_note'), 'isTinymce' => 1));
        $oForm->setFieldControl('career_note', array('jsFieldMinSize' => '2','jsFieldMaxSize' => 9000));

        $oForm->addField('textarea', 'product_exp_note', array('placeholder'=>'Sections must be filled.  If not completed with 25 characters or more will not be able to save.','label'=>'Product or Technical Expertise', 'value' => $oDbResult->getFieldValue('product_exp_note'), 'isTinymce' => 1));
        $oForm->setFieldControl('product_exp_note', array('jsFieldMinSize' => '2','jsFieldMaxSize' => 9000));

        $oForm->addField('textarea', 'education_note', array('placeholder'=>'Sections must be filled.  If not completed with 25 characters or more will not be able to save.','label'=>'Education & Training', 'value' => $oDbResult->getFieldValue('education_note'), 'isTinymce' => 1));
        $oForm->setFieldControl('education_note', array('jsFieldMinSize' => '2','jsFieldMaxSize' => 9000));

        $oForm->addField('textarea', 'move_note', array('placeholder'=>'Sections must be filled.  If not completed with 25 characters or more will not be able to save.','label'=>'Reason for moving', 'value' => $oDbResult->getFieldValue('move_note'), 'isTinymce' => 1));
        $oForm->setFieldControl('move_note', array('jsFieldMinSize' => '2','jsFieldMaxSize' => 9000));

        $oForm->addField('textarea', 'timeline_note', array('placeholder'=>'Sections must be filled.  If not completed with 25 characters or more will not be able to save.','label'=>'Move timeline', 'value' => $oDbResult->getFieldValue('timeline_note'), 'isTinymce' => 1));
        $oForm->setFieldControl('timeline_note', array('jsFieldMinSize' => '2','jsFieldMaxSize' => 9000));

        $oForm->addField('textarea', 'compensation_note', array('placeholder'=>'Sections must be filled.  If not completed with 10 characters or more will not be able to save.','label'=>'Compensation Breakdown', 'value' => $oDbResult->getFieldValue('compensation_note'), 'isTinymce' => 1));
        $oForm->setFieldControl('compensation_note', array('jsFieldMinSize' => '2','jsFieldMaxSize' => 9000));

        $oForm->addField('textarea', 'keywants_note', array('placeholder'=>'Sections must be filled.  If not completed with 25 characters or more will not be able to save.','label'=>'Key Wants', 'value' => $oDbResult->getFieldValue('keywants_note'), 'isTinymce' => 1));
        $oForm->setFieldControl('keywants_note', array('jsFieldMinSize' => '2','jsFieldMaxSize' => 9000));

        $oForm->addField('textarea', 'past_note', array('placeholder'=>'Sections must be filled.  If not completed with 10 characters or more will not be able to save.','label'=>'Companies – introduced recently / bing pitched', 'value' => $oDbResult->getFieldValue('past_note'), 'isTinymce' => 1));
        $oForm->setFieldControl('past_note', array('jsFieldMinSize' => '2','jsFieldMaxSize' => 9000));


        $oForm->addCustomHtml($addHtml);

      }

      $sURL = $oPage->getAjaxUrl('555-001', CONST_ACTION_VIEW, CONST_CANDIDATE_TYPE_MEETING, $nCp_Pk);
      $sId = uniqid();

      /*$sHTML.= "<script>
                  document.getElementById('event_typeId').disabled = true;
                </script>";*/

      /*$sHTML.= '<b style="padding-left: 60px;">Tips:</b><br />
        <div id="'.$sId.'" data-id="'.$sId.'" class="note_tip_container" >
        <ul class="note_tip_list">
        <li> >>&nbsp;&nbsp;<span style="color: red; font-size: inherit;">Meeting assessement</span>: use the dedicated meeting feature and set your meeting "done". [
        <a href="javascript:;" style="font-size: inherit; font-weight: bold;" onclick=" goPopup.removeLastByType(\'layer\');
        var oConf = goPopup.getConfig();
        oConf.width = 950; oConf.height = 550;
        goPopup.setLayerFromAjax(oConf, \''.$sURL.'\');">here</a> ]</li>
        <li>What does the candidate do -what is his profession? 	</li>
        <li>What is his scope of experience in this profession? Is he specific or broad?</li>
        <li>Is the candidate intelligent and able to solve problems or not?</li>
        <li>Can the candidate manage problems or not?</li>
        <li>What does the candidate hope to accomplish before he moves to the next position?</li>
        <li>What is his vision for his future? What is the next step for him if and when he moves?</li>
        <li>How does he look? Is he confident and articulate? Does he have a powerful presence?</li>
        <li>Can he manage a team and is he ambitious?</li>
        <li>Is he met (not placeable), notable (placeable) or top shelf (Absolutely placeable)?</li>
        <li>Focus on your candidate\'s career process and placability when you are writing comments. </li>

        <ul>
        <div class="floatHack" />
        </div>
        <script>
        setTimeout(" autoscroll_'.$sId.'(0);", 7500);
        function autoscroll_'.$sId.'(pnIteration)
        {
          if(pnIteration > 10)
            return false;

          var nScroll = $(\'#'.$sId.'\').scrollTop();
          if(nScroll < 220)
          {
            $(\'#'.$sId.'\').animate({scrollTop: (nScroll+56)}, 500);
            //alert($(\'#'.$sId.'\').scrollTop());
          }
          else
            $(\'#'.$sId.'\').animate({scrollTop: 0}, 500);

          setTimeout(" autoscroll_'.$sId.'("+(pnIteration+1)+");", 4500);
        }
        </script>
        ';*/
    }

    /*if($sEventType == 'character')
    {
      $sHTML = $this->_oDisplay->render('character_note_add');
    }*/

    $sHTML.= $oForm->getDisplay();


    $sHTML.= $oHTML->getBlocEnd();
    return $sHTML;
  }


  /**
   * Implement for the candidate form... add notes through an array of data except of using post
   * @param integer $pnItemPk
   * @param string $psType
   * @param sting $psContent
   * @return array
   */
  public function addNote($pnItemPk, $psType, $psContent, $pnLoginfk = 0)
  {
    if(!assert('is_key($pnItemPk) && !empty($psType)'))
      return array('error' => 'Could not add the note.');

    if(!assert('is_integer($pnLoginfk)'))
      return array('error' => 'Could not add the note.');

    if(empty($psContent))
      return array('error' => __LINE__.' - Can not create empty notes.');

    $asEventType = getEventTypeList();

    $asEvent = array();
    $asEvent['item_uid'] = '555-001';
    $asEvent['item_action'] = CONST_ACTION_VIEW;
    $asEvent['item_type'] = CONST_CANDIDATE_TYPE_CANDI;
    $asEvent['item_pk'] = (int)$pnItemPk;

    $asEvent['date'] = date('Y-m-d H:i:s');
    $asEvent['type'] = filter_var($psType, FILTER_SANITIZE_STRING);
    $asEvent['title'] = '';
    $asEvent['content'] = $psContent;
    $asEvent['coworker'] = array();
    $asEvent['notify'] = 0;
    $asEvent['add_calendar'] = 0;

    if(isset($asEventType[$psType]))
      $asEvent['custom_type'] = 0;
    else
      $asEvent['custom_type'] = 1;

    $asEvent['reminder_date'] = '';
    $asEvent['reminder_time'] = 0;
    $asEvent['reminder_before'] = '';
    $asEvent['reminder_user'] = 0;
    $asEvent['reminder_message'] = '';

    if(!empty($pnLoginfk))
      $asEvent['loginfk'] = $pnLoginfk;

    return parent::_getEventSave(0, $asEvent);
  }


  public function getLastEvent($panItem, $psItemUid = '', $psItemAction = '', $psItemType = '', $psEventType = '', $pasExcludeType = array())
  {
    //if(!assert('is_arrayOfInt($panItem)'))
      //return false;

    /*$sQuery = '
      SELECT MAX(elin.event_linkpk), elin.*, even.*
      FROM event_link as elin
      INNER JOIN event as even ON (even.eventpk = elin.eventfk)

      WHERE  elin.cp_uid = '.$this->_getModel()->dbEscapeString($psItemUid).'
      AND elin.cp_action = '.$this->_getModel()->dbEscapeString($psItemAction).'
      AND elin.cp_type = '.$this->_getModel()->dbEscapeString($psItemType).'
      AND elin.cp_pk IN ('.implode(',', $panItem).') ';

    if(!empty($psEventType))
      $sQuery.= ' AND even.type = '.$this->_getModel()->dbEscapeString($psEventType).' ';

    if(!empty($pasExcludeType))
      $sQuery.= ' AND even.cp_type NOT IN ("'.implode('","', $pasExcludeType).'") ';


    $sQuery.= ' GROUP BY elin.cp_uid, elin.cp_action, elin.cp_pk';*/
    //dump($sQuery);
    $sQuery = "SELECT el.cp_pk,el.cp_type, e.* FROM event_link el
              INNER JOIN event e on e.eventpk = el.eventfk
              WHERE el.cp_pk = '".$panItem."' AND (e.type = 'character' OR e.type = 'note')
              ORDER BY el.event_linkpk DESC";

    return $this->_getModel()->executeQuery($sQuery);
  }

  private function _saveNote($psAction = '')
  {
    $oLogin = CDependency::getCpLogin();
    $event_type = filter_var(getValue('event_type'), FILTER_SANITIZE_STRING);
    $content = purify_html(getValue('content'));

    $note_title = purify_html(getValue('title'));
    $delete_flag = getValue('delete_note'); // silinecek olan id yi getiriyor.
    $candidate_id = (int)getValue(CONST_CP_PK);
    $user_id = $oLogin->getuserPk();

    $userInfo = getUserInformaiton($user_id);

    $userName = $userInfo['firstname']." ".$userInfo['lastname'];

    if(empty($delete_flag))
    {
      $note = $userName." created a new";
      if($event_type == "character" || $event_type == "email" || $event_type == "meeting" || $event_type == "phone" ||$event_type == "update")
      {
        $note .= " ".$event_type." note: </b><br>";
      }
      else if($event_type == "cp_history")
      {
        $note .= " company history note: </b><br>";
      }
      else
      {
        $note .= " note: <br>";
      }

      //$note .= "<b>".$note_title."</b><br>";
      //$note .= $content;
    }
    else
    {
      $note = $userName." deleted note #".$delete_flag;
    }

    if(!empty($this->cnPk))
    {
      $note = $userName." edited note #".$this->cnPk;
    }

    insertLog($user_id, $candidate_id, $note);

    if($event_type == 'character')
    {
      $characterNoteArray = array();
      $addedFlag = true;

      $characterNoteArray['Personality_and_communication'] = purify_html(getValue('personality_note'));
      $characterNoteArray['Current_position_and_responsibilities'] = purify_html(getValue('current_podition_note'));
      $characterNoteArray['Career_history'] = purify_html(getValue('career_note'));
      $characterNoteArray['Product_or_technical_expertise'] = purify_html(getValue('product_exp_note'));
      $characterNoteArray['Education_and_training'] = purify_html(getValue('education_note'));
      $characterNoteArray['Reason_for_moving'] = purify_html(getValue('move_note'));
      $characterNoteArray['Move_timeline'] = purify_html(getValue('timeline_note'));
      $characterNoteArray['Compensation_breakdown'] = purify_html(getValue('compensation_note'));
      $characterNoteArray['Key_wants'] = purify_html(getValue('keywants_note'));
      $characterNoteArray['Companies_–_introduced_recently_/_bing_pitched'] = purify_html(getValue('past_note'));

      $skillValues = array();
      $skillValues['skill_ag'] = getValue('skill_ag');
      $skillValues['skill_ap'] = getValue('skill_ap');
      $skillValues['skill_am'] = getValue('skill_am');
      $skillValues['skill_mp'] = getValue('skill_mp');
      $skillValues['skill_in'] = getValue('skill_in');
      $skillValues['skill_ex'] = getValue('skill_ex');
      $skillValues['skill_fx'] = getValue('skill_fx');
      $skillValues['skill_ch'] = getValue('skill_ch');
      $skillValues['skill_ed'] = getValue('skill_ed');
      $skillValues['skill_pl'] = getValue('skill_pl');
      $skillValues['skill_e'] = getValue('skill_e');

      $simpleCharacterNote = purify_html(getValue('character'));

      $oEvent = CDependency::getComponentByName('sl_event');

      $characterNoteFlag = false;
      $characterNote = "";

      if(empty($simpleCharacterNote))
      {
        foreach ($skillValues as $key => $skill)
        {
          if($skill == null || $skill < 0 || $skill > 9)
          {
            return array('error' => __LINE__.' - All skill areas should have a value between 0 - 9');
          }
        }

        foreach ($characterNoteArray as $key => $value)
        {
          if(isset($value) && !empty($value))
          {
            if($key != 'Compensation_breakdown' && $key != 'Companies_–_introduced_recently_/_bing_pitched' && strlen($value) < 32)
            {//<p></p> icinde geldigi icin +7 ekledik
              return array('error' => __LINE__.' - All areas should have 25 caracters');
            }
            if($key == 'Compensation_breakdown' && strlen($value) < 17)//<p></p> icinde geldigi icin +7 ekledik
            {
              return array('error' => __LINE__.' - Compensation breakdowns should have 10 caracters');
            }
            if($key == 'Companies_–_introduced_recently_/_bing_pitched' && strlen($value) < 17)
            { //<p></p> icinde geldigi icin +7 ekledik
              return array('error' => __LINE__.' - Companies introduced should have 10 caracters');
            }
            $characterNoteFlag  = true;
            $title = str_replace('_',' ',$key);
            $title .= " : ";
            $value = str_replace('<p>','',$value);
            $characterNote .= "<b>".$title."</b>".$value;
          }
          else
          {
            return array('error' => __LINE__.' - The candidate must have 10 character notes. Please fill all areas.');
          }
        }
        if($characterNoteFlag)
        {
            $asResult = $oEvent->addNote((int)$candidate_id, 'character', $characterNote);
            updateCandidateSkills($candidate_id,$skillValues);
            $addedFlag = false;
        }
      }
      else
      {
        $asResult = $oEvent->addNote((int)$candidate_id, 'character', $simpleCharacterNote);
        $addedFlag = false;
      }

      if($addedFlag) // hepsi bos geldi ekleme yapilmadi
      {
        return array('error' => __LINE__.' - Can not create empty notes.');
      }
    }
    else
    {
      if((empty($event_type) && !getValue('delete_note')) || (empty($content) && !getValue('delete_note')))
        return array('error' => __LINE__.' - Can not create empty notes.');

      $oPage = CDependency::getCpPage();
      $sURL = $oPage->getAjaxUrl('555-001', CONST_ACTION_VIEW, getValue(CONST_CP_TYPE), (int)getValue(CONST_CP_PK));


      if(!empty($this->cnPk) && getValue('delete_note') && CDependency::getCpLogin()->isAdmin())
      {
        $asResult = parent::_getEventDelete($this->cnPk);

        $asResult['action'] = ' view_candi("'.$sURL.'", "#tabLink1"); goPopup.removeByType(\'layer\'); ';
        unset($asResult['reload']);
        return $oPage->getAjaxExtraContent($asResult);
      }

      $asResult = parent::_getEventSave($this->cnPk);
      if(isset($asResult['error']))
        return $oPage->getAjaxExtraContent($asResult);


      $sType = getValue('event_type');
      if($sType == 'cp_history')
      {
        $oMail = CDependency::getComponentByName('mail');
        $oMail->createNewEmail();
        $oMail->setFrom(CONST_PHPMAILER_EMAIL, CONST_PHPMAILER_DEFAULT_FROM);
        $oMail->addRecipient(CONST_DEV_EMAIL, CONST_DEV_EMAIL);

        if($psAction == CONST_ACTION_SAVEADD)
          $oResult = $oMail->send('Slistem - note cp_history manually created', 'Please add a cp_hidden note with the company name for '.$sURL);
        else
          $oResult = $oMail->send('Slistem - note cp_history manually updated', 'Please check the cp_hidden matches the cp_history note for '.$sURL);
      }

      set_array($asResult['action'], '');


      if((bool)getValue('no_candi_refresh', 0))
        $asResult['action'].= ' goPopup.removeLastByType(\'layer\'); ';
      else
        $asResult['action'].= ' view_candi("'.$sURL.'", "#tabLink1"); goPopup.removeByType(\'layer\'); ';

      $asResult['timedUrl'] = '';
      $asResult['url'] = '';
    }


    return $asResult;
  }

}
