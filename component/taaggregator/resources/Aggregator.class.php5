<?php
require_once('component/taaggregator/resources/lib/encoding_converter.class.php5');

class attribute
{
    protected $nDelay = 3;
    protected $nRecords = 10;
    protected $nPages = 2;
    protected $nLimit = 200;
 }

class Aggregator extends attribute
{
  protected $result;
  protected $arr;

  protected $asError;
  protected $csSuccessMessage;
  protected $nJobID;
  protected $csPositionName;
  protected $sText;


  public function __construct()
  {
      return true;
   }

  public function __destruct()
  {
   //Destructor
    $asError =  $this->error_get_line();
     if(!empty($asError))
       $this->notifyErrorMessage($asError);
    }


  //=================================================================
  //=================================================================
  //Prototype

   public function saveUrl(){}
   public function getJobs(){}
   public function getPosition(){}

  //=================================================================
  //=================================================================

   protected function _getFormattedDate($psPostDate)
   {
      $nTime = strtotime($psPostDate);
      $sDate = date('Y-m-d',$nTime);

      return $sDate;
   }

   /**
    * Log the execution
    * @param string $sURL
    * @return boolean true
    */

  protected function _logMessage($psURL)
  {
   if(!assert('!empty($psURL)'))
       return '';

    $sText = '';
    $asDebug = debug_backtrace();

    foreach($asDebug as $asLine)
    {
    $sText.= ' -> ';
    if(isset($asLine['file']))
      $sText.= 'Executed in '.$asLine['file'].' / ';
    if(isset($asLine['file']))
      $sText.= 'Line '.$asLine['line'].' ';
    if(isset($asLine['sJObDetailURL']))
      $sText.= 'URL '.$psURL.' ';

     $sText.= "\n";
    }
   $sText.= "\n";

   $oFs = fopen($_SERVER['DOCUMENT_ROOT'].'/log/logMessage.log', 'a+');
   if($oFs)
   {
     fwrite($oFs, $sText);
     fclose($oFs);
    }
    return true;
  }

  /**
   * Log the Position things
   * @param string $psPosition
   * @param integer $pnJobPk
   * @param date $psDate
   * @return boolean
   */

  protected function _logPosition($psPosition,$pnJobPk,$psDate)
  {
    $sText = '';
    $asDebug = debug_backtrace();

    foreach($asDebug as $asLine)
    {
        $sText.= ' -> ';
        if(isset($asLine['file']))
            $sText.= 'Executed in '.$asLine['file'].' / ';
        if(isset($asLine['line']))
            $sText.= 'Line '.$asLine['line'].' ';
        if(isset($psPosition))
            $sText.= 'Position '.$psPosition.' ';
        if(isset($psDate))
            $sText.= 'on '.$psDate.' ';
        if(isset($pnJobPk))
            $sText.= 'Job ID '.$pnJobPk.' ';
        if(isset($asLine['company_name']))
            $sText.= 'Company Name '.$asLine['company_name'].' ';

        $sText.= "\n";
      }
    $sText.= "\n";

   $oFs = fopen($_SERVER['DOCUMENT_ROOT'].'/log/logPosition.log','a+');
   if($oFs)
   {
     fwrite($oFs, $sText);
     fclose($oFs);
     }
    return true;
  }

  /**
   * Notify Error Message
   * @param type $pasErrorDetail
   * @return string
   */

  protected function notifyErrorMessage($pasErrorDetail)
  {
   if(!assert('!empty($pasErrorDetail)'))
    return '';

    $oMail = CDependency::getComponentByName('mail');
    $sSender = 'admin@talentatlas.com';
    $sAddress = 'abaral@bulbouscell.com';

    if(is_array($pasErrorDetail))
    {
        $sSubject = 'Error Occurred during execution';
        $sContent = 'Error Message '.$pasErrorDetail['message'].'<br/> in file  '.$pasErrorDetail['file'].'<br/> on line '.$pasErrorDetail['line'];
        $oMail->sendRawEmail($sSender,$sAddress,$sSubject,$sContent);
     }
   }

 /**
  * Notify moderator
  * @param array $pasContent
  * @return boolean
  */

  protected function _notifyModerator($pasContent, $pasRecipient = array())
  {
    if(!assert('!empty($pasContent)'))
      return '';

    $oMail = CDependency::getComponentByName('mail');
    $sSender = 'admin@talentatlas.com';
    $sAddress = 'sboudoux@bulbouscell.com';
    $sSubject = 'Following Positions has been created in the Talent Atlas '.date('Y-m-d H:i:s');
    $sContent = '';

    foreach ($pasContent as $sPositionName)
    {
      $sContent.=  $sPositionName.'<br/><br/>';
    }

    $oMail->sendRawEmail($sSender, $sAddress, $sSubject, $sContent);

    foreach($pasRecipient as $sUserName => $sUserEmail)
    {
      $oMail->sendRawEmail($sSender, $sUserEmail, $sSubject, $sContent);
    }

    return true;
  }

   /**
    * Get the job urls
    * @param integer $nWebsitefk
    * @return array
    */

   protected function getAllJobURLs($pnWebsitefk,$pnRecords)
   {
     $oDB = CDependency::getComponentByName('database');

     if(!assert('!empty($pnWebsitefk) && !empty($pnRecords)'))
        return array('');

      $sQuery = 'SELECT * FROM  `website_joburl` WHERE `websitefk` = '.$pnWebsitefk.' and status = 0 and parentfk !=0 order by website_joburlpk asc limit '.$pnRecords.'';
      $oDbResult = $oDB->ExecuteQuery($sQuery);
      $bRead = $oDbResult->readFirst();
      $asJobURL = array();
      while($bRead)
      {
          $asJobURL[] = $oDbResult->getData();
          $bRead = $oDbResult->readNext();
      }
       return $asJobURL;
    }

    /**
     * Check if it is valid URL
     * @param string $sURL
     * @return boolean
     */
    protected function checkURL($psURL)
    {
     if(!assert('!empty($psURL)'))
        return false;

       $sURL = @parse_url($psURL);
       if(!$sURL)
          return false;

        $sURL = array_map('trim', $sURL);
        $sURL['port'] = (!isset($sURL['port'])) ? 80 : (int)$sURL['port'];

        $sPath = (isset($sURL['path'])) ? $sURL['path'] : '/';
        $sPath .= (isset($sURL['query'])) ? "?$sURL[query]" : '';

        if(isset($sURL['host']) && $sURL['host'] != gethostbyname($sURL['host']))
        {
         $sFp = fsockopen($sURL['host'], $sURL['port'], $errno, $errstr, 30);
         if(!$sFp)
           return false;

         fputs($sFp, "HEAD $sPath HTTP/1.1\r\nHost: $sURL[host]\r\n\r\n");
         $sHeaders = fread($sFp, 4096);
         fclose($sFp);

        if(preg_match('#^HTTP/.*\s+[(200|301|302)]+\s#i', $sHeaders))
           return true;
        else
           return false;
         }
        else return false;
       }

     /**
      * Check the URL already exist or not
      * @param string $sURL
      * @param boolean $enable
      * @return boolean
      */

     public function checkURLNotExist($psURL,$enable=false)
     {
       $oDB = CDependency::getComponentByName('database');

       if(!assert('!empty($psURL)'))
         return false;

      $sQuery = "SELECT url FROM `website_joburl` WHERE `url` LIKE '%".$psURL."%'";
      $oDbResult = $oDB->ExecuteQuery($sQuery);
      $bRead = $oDbResult->readFirst();
      if($bRead)
        return false;
      else
        return true;

     }

    /**
     * Check if the job already exist or not
     * @param integer $pnPk
     * @param integer $pnWebsitepk
     * @return boolean
     */

    protected function _checkJobNotExist($pnPk,$pnWebsitepk)
    {
      $oDB = CDependency::getComponentByName('database');

      if(!assert('!empty($pnPk) && !empty($pnWebsitepk)'))
        return false;

      $sQuery = 'SELECT * from job where weburlfk = '.$pnPk.' and websitefk = '.$pnWebsitepk.'';
      $oDbResult = $oDB->ExecuteQuery($sQuery);
      $bRead = $oDbResult->readFirst();

      if($bRead)
        return false;
      else
        return true;
     }

     /**
      * Check for the Duplicate records with different URL
      * @param string $sURL
      * @param integer $nWebsitefk
      * @return false
      */

     protected function getCheckDuplicate($pnWebsitefk,$psURL)
     {
      $oDB = CDependency::getComponentByName('database');
      if(!assert('!empty($psURL) && !empty($pnWebsitefk)'))
        return false;

      $ascurrentJob = explode("/",$psURL);
      $scurrentJobID = end($ascurrentJob);

      $sQuery = 'SELECT * FROM website_joburl WHERE websitefk = '.$pnWebsitefk.' and url LIKE "%'.$scurrentJobID.'%"';
      $oDbResult = $oDB->ExecuteQuery($sQuery);
      $bRead = $oDbResult->readFirst();

      if($bRead)
          return false;
      else
          return true;
      }

   /**
     * Get the error details
     * @return array
     */

    public function error_get_line()
    {
        $asError = error_get_last();
        if (empty($asError)) {
            return;
          }
        $asDebug = debug_backtrace();
        if (($asError['file'] == $asDebug[0]['file'])) {
            return $asError;
        }
     }

     /**
      * Function to check if the job is old one
      * @param type $psDate
      * @return boolean
      */

     protected function _checkTwoMonth($psDate,$pnPnPk)
     {
       $sTime = strtotime($psDate);
       $sTwoMonths = strtotime('-2 months');

       $oDB  = CDependency::getComponentByName('database');
       if($sTime > $sTwoMonths)
       {
           $sQuery = 'UPDATE website_joburl SET status = 1 WHERE website_joburlpk='.$pnPnPk.'';
           $oDbResult = $oDB->ExecuteQuery($sQuery);

            return true;
          }
          else
            return false;
       }

    /**
      * Sanitize input
      * @param string $psString
      * @return sanitized encoded string
      */

   protected function sanitize($psString)
   {
      $psString = str_replace('\\n', "\n",$psString);
      $psString = str_replace('\\\n', "\n",$psString);
      $psString = str_replace('&nbsp;', ' ',$psString);
      $psString = str_replace('\\', '',$psString);
      $psString =  CEncoding::toUTF8($psString);

      $psString = strip_tags($psString);
      $psString = trim($psString);
      return mysql_real_escape_string($psString);
    }


     /**
      * Make data clean
      * @param string $psString
      * @return sanitized encoded string
      */
   protected function dosanitize($psString)
   {
      $sString = str_replace("&nbsp;", " ",$psString);
      $sString = strip_tags($sString);
      $sString = trim($sString);
      return mysql_real_escape_string($sString);

     }





    }
?>