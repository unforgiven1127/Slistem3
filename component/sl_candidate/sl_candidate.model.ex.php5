<?php

class CSl_candidateModelEx extends CSl_candidateModel
{
  private $casAttribute = array(
      'candi' => array('candi_lang', 'candi_indus', 'candi_occu'),
      'comp' => array('cp_indus')
      );

  public function __construct()
  {
    $this->cbIsAdmin = CDependency::getCpLogin()->isAdmin();

    parent::__construct();
    return true;
  }



  public function getCandidateData($pvPk, $pbFullProfile = false, $pbForceArray = false)
  {
    if(!assert('(is_key($pvPk) || is_arrayOfInt($pvPk)) && is_bool($pbFullProfile)'))
      return array();

    $oQB = $this->getQueryBuilder();
    $oQB->setTable('sl_candidate', 'scan');

    if($pbFullProfile)
    {
      $oQB->addSelect('scpr.*, scrs.*, scan.*,
        scan.date_created as date_added,
        slog.firstname as cons_firstname, slog.lastname as cons_lastname,
        slog.loginpk as creatorfk, CONCAT(slog.firstname, " ", slog.lastname) as creator, slog.pseudo as creator_short,
        sind.label as industry, socc.label as occupation,
        scom.name as company_name, scom.is_client as cp_client, scom.sl_companypk, scom.sl_companypk as companyfk,
        scrs.date_created as date_rss, sloc.location, slan.language, snat.nationality,
        (scpr.salary + scpr.bonus) as full_salary, scpr.grade, scpr.title,

        satt.`type` as attribute_type,
        satt.attributefk as attribute_value,
        IF(sind2.label IS NOT NULL, sind2.label, IF(socc2.label IS NOT NULL, socc2.label,  satt.attributefk)) as attribute_label
        ');


      $oQB->addJoin('left', 'sl_location', 'sloc', 'sloc.sl_locationpk = scan.locationfk');
      $oQB->addJoin('left', 'sl_language', 'slan', 'slan.sl_languagepk = scan.languagefk');
      $oQB->addJoin('left', 'sl_nationality', 'snat', 'snat.sl_nationalitypk = scan.nationalityfk');
      $oQB->addJoin('left', 'sl_candidate_profile', 'scpr', 'scpr.candidatefk = scan.sl_candidatepk');
      $oQB->addJoin('left', 'sl_industry', 'sind', 'sind.sl_industrypk = scpr.industryfk');
      $oQB->addJoin('left', 'sl_occupation', 'socc', 'socc.sl_occupationpk = scpr.occupationfk');
      $oQB->addJoin('left', 'sl_company', 'scom', 'scom.sl_companypk = scpr.companyfk');
      $oQB->addJoin('left', 'sl_company_rss', 'scrs', 'scrs.companyfk = scom.sl_companypk');
      $oQB->addJoin('left', 'shared_login', 'slog', 'slog.loginpk = scan.created_by');

      $oQB->addJoin('left', 'sl_attribute', 'satt', 'satt.`type` IN ("'.implode('","', $this->casAttribute['candi']).'") AND itemfk = scan.sl_candidatepk');
      $oQB->addJoin('left', 'sl_industry', 'sind2', 'satt.`type` = "candi_indus" AND sind2.sl_industrypk = satt.attributefk');
      $oQB->addJoin('left', 'sl_occupation', 'socc2', 'satt.`type` = "candi_occu" AND socc2.sl_occupationpk = satt.attributefk');
    }
    else
      $oQB->addSelect('scan.*');


    if(is_integer($pvPk))
      $oQB->addWhere('scan.sl_candidatepk = '.$pvPk);
    else
      $oQB->addWhere('scan.sl_candidatepk IN ('.implode(',', $pvPk).') ');


    /*if(!$this->cbIsAdmin)
    {
      $oQB->addWhere('scan._sys_status = 0 ');
    }*/



    /*$fStart = microtime();
    echo('<br /><br /><br />'.str_replace('LEFT JOIN', '<br />LEFT JOIN', $oQB->getSql()).'<br /><br /><br />');
    dump(' - - - - - - ');
    dump($oQB->getSql());
    $fEnd = microtime();
    echo 'In '.round((($fEnd-$fStart)*1000), 5).'ms <br />';*/
    $sQuery = $oQB->getSql();




    //echo $sQuery;
    $oDbResult = $this->oDB->ExecuteQuery($sQuery);
    $bRead = $oDbResult->readFirst();
    if(!$bRead)
      return array();

    $asCandidate = array();
    while($bRead)
    {
      $nPk = (int)$oDbResult->getFieldValue('sl_candidatepk');

      if(empty($asCandidate[$nPk]))
      {
        $asCandidate[$nPk] = $oDbResult->getData();
        $asCandidate[$nPk]['sl_candidatepk'] = (int)$asCandidate[$nPk]['sl_candidatepk'];
        $asCandidate[$nPk]['attribute'] = array();
      }

      $sAttribute = $oDbResult->getFieldValue('attribute_type');
      if(!empty($sAttribute))
        $asCandidate[$nPk]['attribute'][$sAttribute][$oDbResult->getFieldValue('attribute_value')] = $oDbResult->getFieldValue('attribute_label');

      $bRead = $oDbResult->readNext();
    }

    if(is_integer($pvPk) && !$pbForceArray)
       return $asCandidate[$pvPk];

    return $asCandidate;
  }

  public function getCandidateFormData($pnPk)
  {
    if(!assert('is_key($pnPk)'))
      return new CDbResult();

    $oQB = $this->getQueryBuilder();
    $oQB->setTable('sl_candidate', 'scan');

    $oQB->addSelect('scan.*, scpr.*,
      scan.date_created as date_added, scan.is_client as client,
      sind.label as industry, socc.label as occupation,
      scom.name as company_name, scom.is_client, scom.sl_companypk, scom.sl_companypk as companyfk,
      sloc.location, slan.language, snat.nationality,
      (scpr.salary + scpr.bonus) as full_salary, scpr.grade, scpr.title,

      GROUP_CONCAT(satt.`type`) as attribute_type,
      GROUP_CONCAT(satt.attributefk) as attribute_value,
      GROUP_CONCAT(IF(sind2.label IS NOT NULL, sind2.label, IF(socc2.label IS NOT NULL, socc2.label,  satt.attributefk))) as attribute_label
    ');

    $oQB->addJoin('left', 'sl_location', 'sloc', 'sloc.sl_locationpk = scan.locationfk');
    $oQB->addJoin('left', 'sl_language', 'slan', 'slan.sl_languagepk = scan.languagefk');
    $oQB->addJoin('left', 'sl_nationality', 'snat', 'snat.sl_nationalitypk = scan.nationalityfk');
    $oQB->addJoin('left', 'sl_candidate_profile', 'scpr', 'scpr.candidatefk = scan.sl_candidatepk');
    $oQB->addJoin('left', 'sl_industry', 'sind', 'sind.sl_industrypk = scpr.industryfk');
    $oQB->addJoin('left', 'sl_occupation', 'socc', 'socc.sl_occupationpk = scpr.occupationfk');
    $oQB->addJoin('left', 'sl_company', 'scom', 'scom.sl_companypk = scpr.companyfk');


    $oQB->addJoin('left', 'sl_attribute', 'satt', 'satt.`type` IN ("'.implode('","', $this->casAttribute['candi']).'") AND itemfk = scan.sl_candidatepk');
    $oQB->addJoin('left', 'sl_industry', 'sind2', 'satt.`type` = "candi_indus" AND sind2.sl_industrypk = satt.attributefk');
    $oQB->addJoin('left', 'sl_occupation', 'socc2', 'satt.`type` = "candi_occu" AND socc2.sl_occupationpk = satt.attributefk');

    $oQB->addWhere('scan.sl_candidatepk = '.$pnPk);
    $oQB->addWhere('scan.sl_candidatepk = '.$pnPk);

    $oQB->addGroup('scan.sl_candidatepk');


    if(!$this->cbIsAdmin)
    {
      $oQB->addWhere('scan._sys_status = 0');
    }


    $sQuery = $oQB->getSql();


    return $this->oDB->ExecuteQuery($sQuery);
  }




  public function getContact($pnItemPk, $psItemType = 'candi', $pnUser = 0, $panUserGroup = array(), $pbVisibleOnly = false, $pbGrouped = true)
  {
    if(!assert('is_key($pnItemPk) && is_integer($pnUser) && !empty($psItemType) '))
      return new CDbResult();

    if(!assert('empty($panUserGroup) || is_arrayOfInt($panUserGroup)'))
      return new CDbResult();

    if(!assert('is_bool($pbVisibleOnly) && is_bool($pbGrouped)'))
      return new CDbResult();

    /*if($pbVisibleOnly)
    {
      $oLogin = CDependency::getCpLogin();
      if(empty($pnUser))
      {
        $pnUser = $oLogin->getUserPk();
      }

      if(empty($panUserGroup))
        $sRestrictionSQL = ', IF(scon.visibility = 1 OR scon.loginfk = '.$pnUser.', 1, 0 ) as visible ';
      else
        $sRestrictionSQL = ', IF(scon.visibility = 1 OR scon.loginfk = '.$pnUser.' OR scon.groupfk IN ('.implode(',', $panUserGroup).'), 1, 0) as visible ';

    }
    else
      $sRestrictionSQL = ', 1 as visible';*/

    $sQuery = 'SELECT *, scon.loginfk as creatorfk
      ,GROUP_CONCAT(scvi.loginfk) as custom_visibility
      FROM sl_contact as scon
      LEFT JOIN sl_contact_visibility as scvi ON (scvi.sl_contactfk = scon.sl_contactpk )
      WHERE item_type = '.$this->oDB->dbEscapeString($psItemType).' AND itemfk = '.$pnItemPk.'

      GROUP BY sl_contactpk
      ORDER BY date_create DESC ';


    //echo $sQuery;
    return $this->oDB->ExecuteQuery($sQuery);
  }


  public function getContactByPk($pvItemPk)
  {
    if(!assert('is_key($pvItemPk) || is_arrayOfInt($pvItemPk) '))
      return new CDbResult();


    if(is_array($pvItemPk))
    {
      $pvItemPk = implode(',', $pvItemPk);
    }

    $sQuery = 'SELECT *, scon.loginfk as creatorfk ,GROUP_CONCAT(scvi.loginfk) as custom_visibility
      FROM sl_contact as scon
      LEFT JOIN sl_contact_visibility as scvi ON (scvi.sl_contactfk = scon.sl_contactpk )
      WHERE scon.sl_contactpk IN ('.$pvItemPk.')

      GROUP BY sl_contactpk
      ORDER BY date_create DESC ';


    //echo $sQuery;
    return $this->oDB->ExecuteQuery($sQuery);
  }






  /* ****************************************************** */
  /* ****************************************************** */
  //Company related

  public function getCompanyData($pvPk, $pbFullProfile = false)
  {
    if(!assert('(is_key($pvPk) || is_arrayOfInt($pvPk)) && is_bool($pbFullProfile)'))
      return array();

    if($pbFullProfile)
    {
      $sQuery = 'SELECT scom.*, sind.label as indus_name, sind.sl_industrypk FROM sl_company as scom
        LEFT JOIN sl_attribute as satt ON (satt.`type` = \'cp_indus\' AND satt.itemfk = scom.sl_companypk)
        LEFT JOIN sl_industry as sind ON (sind.sl_industrypk = satt.attributefk)';
    }
    else
      $sQuery = 'SELECT * FROM sl_company as scom ';

    if(is_integer($pvPk))
      $sQuery.= ' WHERE scom.sl_companypk = '.$pvPk;
    else
      $sQuery.= ' WHERE scom.sl_companypk IN ('.implode(',', $pvPk).') ';

    //echo $sQuery;
    $oDbResult = $this->oDB->ExecuteQuery($sQuery);
    $bRead = $oDbResult->readFirst();
    if(!$bRead)
      return array();



    $asCompany = array();
    while($bRead)
    {
      $nCompanyPk = (int)$oDbResult->getFieldValue('sl_companypk');
      if(!isset($asCompany[$nCompanyPk]))
      {
        $asCompany[$nCompanyPk] = $oDbResult->getData();
        $asCompany[$nCompanyPk]['industry'] = array();
        $asCompany[$nCompanyPk]['industry_id'] = array();
      }

      $asCompany[$nCompanyPk]['industry'][] = $oDbResult->getFieldValue('indus_name');
      $asCompany[$nCompanyPk]['industry_id'][] = (int)$oDbResult->getFieldValue('sl_industrypk');
      $bRead = $oDbResult->readNext();
    }

     if(is_integer($pvPk))
       return $asCompany[$pvPk];

    return $asCompany;
  }


  public function countCompanies()
  {
    $sQuery = 'SELECT count(*) as nCount FROM sl_company ';

    //echo $sQuery;
    $oDbResult = $this->oDB->ExecuteQuery($sQuery);
    $bRead = $oDbResult->readFirst();
    if(!$bRead)
      return 0;

    return (int)$oDbResult->getFieldValue('nCount');
  }


  public function getCompanyDepartment($pnCompanyFk)
  {
    if(!assert('is_key($pnCompanyFk)'))
      return new CDbResult();

    $sQuery = 'SELECT scpr.department, count(*) as nCount FROM sl_candidate_profile as scpr';
    $sQuery.= ' WHERE scpr.companyfk = '.$pnCompanyFk.' GROUP BY scpr.department ';

    return $this->oDB->ExecuteQuery($sQuery);
  }

  public function getFeedByCompanyFk($pnCompanyFk)
  {
    if(!assert('is_key($pnCompanyFk)'))
      return new CDbResult();

    $sQuery = 'SELECT *, scom.name as company_name ';
    $sQuery.= ' FROM sl_company as scom ';
    $sQuery.= ' LEFT JOIN sl_company_rss as scrs ON (scrs.companyfk = scom.sl_companypk) ';
    $sQuery.= ' WHERE scom.sl_companypk = '.$pnCompanyFk;

    return $this->oDB->ExecuteQuery($sQuery);
  }







  /* ****************************************************** */
  /* ****************************************************** */
  //Common

  public function getIndustry($pbIncludeCategory = true, $pbIgnoreRights = false)
  {
    if(!assert('is_bool($pbIncludeCategory) && is_bool($pbIgnoreRights)'))
      return array();

    if($pbIgnoreRights)
    {
      $sQuery = 'SELECT * FROM sl_industry as sind
        LEFT JOIN  sl_industry as parent ON (parent.sl_industrypk = sind.parentfk) ';

      if(!$pbIncludeCategory)
        $sQuery.= ' WHERE parentfk <> 0 ';

      $sQuery.= ' ORDER BY parent.label, sind.label ';
    }
    else
    {

      $oQB = $this->getQueryBuilder();
      $oQB->setTable('sl_industry', 'sind');
      $oQB->addSelect('sind.*');
      $oQB->addJoin('left', 'sl_industry', 'parent', 'parent.sl_industrypk = sind.parentfk');
      $oQB->setOrder('parent.label, sind.label');

      if(!$pbIncludeCategory)
        $oQB->addWhere('parentfk <> 0');

      $sQuery = $oQB->getSql();
    }
    return $this->oDB->ExecuteQuery($sQuery);
  }


  public function getOccupation($pbIncludeCategory = true, $pbIgnoreRights = false)
  {
    if(!assert('is_bool($pbIncludeCategory) && is_bool($pbIgnoreRights)'))
      return array();

    if($pbIgnoreRights)
    {
      $sQuery = 'SELECT socc.* FROM sl_occupation as socc
        LEFT JOIN  sl_occupation as parent ON (parent.sl_occupationpk = socc.parentfk)';

      if(!$pbIncludeCategory)
        $sQuery.= ' WHERE socc.is_category = 0 ';

      $sQuery.= ' ORDER BY parent.label, socc.label ';
    }
    else
    {

      $oQB = $this->getQueryBuilder();
      $oQB->setTable('sl_occupation', 'socc');
      $oQB->addSelect('socc.*');
      $oQB->addJoin('left', 'sl_occupation', 'parent', 'parent.sl_occupationpk = socc.parentfk');
      $oQB->setOrder('parent.label, socc.label');

      if(!$pbIncludeCategory)
        $oQB->addWhere('is_category = 0');

      $sQuery = $oQB->getSql();
    }

    return $this->oDB->ExecuteQuery($sQuery);
  }


  public function getCandidateRm($pnPk, $pbActiveOnly = true, $pbFriendly = true)
  {
    if(!assert('is_key($pnPk)'))
      return array();

    $oLogin = CDependency::getCpLogin();
    $asRm = array();

    $sQuery = 'SELECT * FROM sl_candidate_rm as scrm
      INNER JOIN shared_login as slog ON (slog.loginpk = scrm.loginfk)
      WHERE scrm.candidatefk = '.$pnPk.' AND scrm.date_expired IS NULL ';

    if($pbActiveOnly)
      $sQuery.= ' AND slog.status > 0 ';

    $oDbResult = $this->oDB->ExecuteQuery($sQuery);
    $bRead = $oDbResult->readFirst();
    while($bRead)
    {
      $asManagerData = $oDbResult->getData();
      $asManagerData['loginfk'] = (int)$asManagerData['loginfk'];

      $asRm[$asManagerData['loginfk']] = array(
          'email' => $asManagerData['email'],
          'name' => $oLogin->getUserNameFromData($asManagerData, $pbFriendly),
          'link' => $oLogin->getUserLink($asManagerData['loginfk'], $pbFriendly)
          );

      $bRead = $oDbResult->readNext();
    }

    return $asRm;
  }


  public function getMonthlyMeeting($pnLoginPk, $psDateStart, $psDateEnd)
  {
    $sQuery = 'SELECT count(*) as nb_meeting,
      SUM(IF(smee.attendeefk = '.$pnLoginPk.', 1, 0)) as nb_mine,
      SUM(IF(smee.attendeefk = '.$pnLoginPk.' AND smee.meeting_done = 1, 1, 0)) as nb_done,
      SUM(IF(smee.attendeefk = '.$pnLoginPk.' AND smee.meeting_done = -1, 1, 0)) as nb_cancel,
      DATE_FORMAT(smee.date_meeting,"%Y-%m-01") as date_month

      FROM sl_meeting as smee
      INNER JOIN sl_candidate as scan ON (scan.sl_candidatepk = smee.candidatefk)
      WHERE (smee.created_by = '.$pnLoginPk.' OR smee.attendeefk = '.$pnLoginPk.')
      AND date_meeting >= "'.$psDateStart.'" AND date_meeting <= "'.$psDateEnd.'"
      GROUP BY date_month
      ORDER BY date_month DESC ';

    $oDbResult = $this->oDB->ExecuteQuery($sQuery);
    $bRead = $oDbResult->readFirst();

    $asMeeting = array();
    while($bRead)
    {
      $asMeetingData = $oDbResult->getData();

      $asMeeting[$asMeetingData['date_month']] = array('nb_meeting' => (int)$asMeetingData['nb_meeting'],
          'nb_mine' => (int)$asMeetingData['nb_mine'],
          'nb_done' => (int)$asMeetingData['nb_done'], 'nb_cancel' => (int)$asMeetingData['nb_cancel'],
          'nb_pending' => ((int)$asMeetingData['nb_mine'] - (int)$asMeetingData['nb_done'] - (int)$asMeetingData['nb_cancel']));

      //dump($asMeetingData['nb_meeting'].' - '.$asMeetingData['nb_done'].' - '.$asMeetingData['nb_cancel']);
      $bRead = $oDbResult->readNext();
    }
    //dump($asMeeting);

    return $asMeeting;
  }

  public function getDuplicate($pvCandidate, $pnForceTarget = 0, $pbPermissive = false)
  {
    if(!assert('(is_key($pvCandidate) || is_array($pvCandidate)) && is_integer($pnForceTarget)'))
      return new CDbResult();

    if(is_array($pvCandidate))
    {
      $asCandidate = $pvCandidate;
      $nCandidatePk = 0;
      set_array($asCandidate['company_name']);
    }
    else
    {
      $nCandidatePk = $pvCandidate;

      $asCandidate = $this->getCandidateData($nCandidatePk, true);
      if(empty($asCandidate))
        return new CDbResult();
    }


    $asContactSql = array();
    if(!empty($nCandidatePk))
    {
      $sQuery = 'SELECT * FROM sl_contact as scon WHERE scon.`item_type` = "candi" AND scon.itemfk = '.$nCandidatePk;
      $oDbResult = $this->ExecuteQuery($sQuery);
      $bRead = $oDbResult->readFirst();

      while($bRead)
      {
        $asContactSql[] = ' ( scon.value LIKE '.$this->dbEscapeString($oDbResult->getFieldValue('value')).' ) ';
        $bRead = $oDbResult->readNext();
      }
    }

    //dump($asCandidate);
    $sQuery = 'SELECT scan.*, scom.name as company_name,
      sind.label as industry, socc.label as occupation, GROUP_CONCAT(scon.value) as contacts

      FROM sl_candidate as scan

      LEFT JOIN sl_candidate_profile as scpr ON (scpr.candidatefk = scan.sl_candidatepk)
      LEFT JOIN sl_company as scom ON (scom.sl_companypk = scpr.companyfk)
      LEFT JOIN sl_contact as scon ON (scon.item_type = "candi" AND scon.itemfk = scan.sl_candidatepk)

      LEFT JOIN sl_industry as sind ON (sind.sl_industrypk = scpr.industryfk)
      LEFT JOIN sl_occupation as socc ON (socc.sl_occupationpk = scpr.occupationfk)

      WHERE
        scan.sl_candidatepk <> '.$nCandidatePk.'
        AND _sys_status = 0
        AND
        ( ';

      if(!$pbPermissive)
      {
        $sQuery.= '
          (
            (scan.firstname LIKE '.$this->dbEscapeString($asCandidate['firstname'].'%').'
              OR LOWER(scan.firstname) IN ("mr", "ms", "mr.", "ms.", "mr", "?", "??", "-", "_")
            )
            AND
            (
              (scan.lastname LIKE '.$this->dbEscapeString($asCandidate['lastname']).'
               AND scom.name LIKE '.$this->dbEscapeString($asCandidate['company_name'].'%').'
              )
              OR
              (scan.lastname LIKE '.$this->dbEscapeString($asCandidate['lastname'].'%').'
               AND scpr.companyfk = '.$this->dbEscapeString($asCandidate['sl_companypk']).'
              )
              OR
              (scan.lastname LIKE '.$this->dbEscapeString($asCandidate['lastname'].'%').'
               AND scpr.companyfk = '.$this->dbEscapeString($asCandidate['sl_companypk']).'
              )
            )
          )';
      }
      else
      {
        $sQuery.= '
          (
            (scan.firstname LIKE '.$this->dbEscapeString('%'.$asCandidate['firstname'].'%').'
              OR LOWER(scan.firstname) IN ("mr", "ms", "mr.", "ms.", "mr", "?", "??", "-", "_")
            )
            AND
            (
              (scan.lastname LIKE '.$this->dbEscapeString($asCandidate['lastname']).'
               AND scom.name LIKE '.$this->dbEscapeString('%'.$asCandidate['company_name'].'%').'
              )
              OR
              (scan.lastname LIKE '.$this->dbEscapeString($asCandidate['lastname'].'%').'
               AND scom.name LIKE '.$this->dbEscapeString($asCandidate['company_name'].'%').'
              )
            )
          )';
      }


    if(!empty($asContactSql))
    {
      $sQuery.= ' OR
        (  scan.lastname LIKE '.$this->dbEscapeString($asCandidate['lastname']).'
           AND
           ('.implode(' OR ', $asContactSql).')
        )
        ';
    }

    if(!empty($pnForceTarget))
    {
      $sQuery.= ' OR ( scan.sl_candidatepk = '.$pnForceTarget.' ) ';
    }

    $sQuery.= '
          )
          GROUP BY scan.sl_candidatepk
          ORDER BY scan.sl_candidatepk DESC ';

    //echo $sQuery;
    return $this->oDB->ExecuteQuery($sQuery);
  }


  public function getLastPositionPlayed($pnCandidatePk)
  {
    if(!assert('is_key($pnCandidatePk)'))
      return false;


    $sQuery = 'SELECT MAX(date_created)
      FROM sl_position_link as spos
      WHERE candidatefk = '.$pnCandidatePk.' ';

    $oDbResult = $this->oDB->ExecuteQuery($sQuery);
    $bRead = $oDbResult->readFirst();

    if(!$bRead)
      return '';

    return $oDbResult->getFieldValue('date_created');
  }

  public function getLastInterView($pnCandidatePk)
  {
    if(!assert('is_key($pnCandidatePk)'))
      return false;


    $sQuery = 'SELECT MAX(date_meeting) as meeting, MAX(date_met) as met
      FROM sl_meeting as smee
      WHERE candidatefk = '.$pnCandidatePk.' AND meeting_done >= 0';

    $oDbResult = $this->oDB->ExecuteQuery($sQuery);
    $bRead = $oDbResult->readFirst();

    if(!$bRead)
      return '';

    return array('meeting' => $oDbResult->getFieldValue('meeting'), 'met' => $oDbResult->getFieldValue('met'));
  }
}
