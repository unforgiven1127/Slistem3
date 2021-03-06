<?php

class CDbResult
{
  private $coSQLResult;
  private $coSQLCurrentResult;
  private $coCurrentResult;
  private $cnRowNumber;
  private $cnNumRows;

  public function __construct($poDbResult = null)
  {
    if(!empty($poDbResult))
      $this->loadDbResult($poDbResult);
  }

  public function reset()
  {
    $this->coSQLResult = null;
    $this->coCurrentResult = null;
    $this->coSQLCurrentResult = null;
    $this->cnRowNumber = 0;
    $this->cnNumRows = 0;

    return true;
  }


  public function loadDbResult($poDbResult)
  {
    //stopped working when switched to mysqli O_o
    //if(!assert('!is_object($poDbResult)'))
    if(!assert('is_a($poDbResult, "mysqli_result")'))
      return false;

    if(empty($poDbResult))
      $this->coSQLResult = null;
    else
      $this->coSQLResult = $poDbResult;

    $this->coCurrentResult = null;
    $this->cnRowNumber = 0;

    if(empty($poDbResult))
       $this->cnNumRows = 0;
    else
      $this->cnNumRows = (int)mysqli_num_rows($poDbResult);

    return true;
  }

  public function isLoaded()
  {
    if(empty($this->coSQLResult))
      return false;

    return true;
  }

  public function returnSQLResult()
  {
    return (array)$this->coSQLCurrentResult;
  }


  public function readFirst()
  {
    if($this->cnNumRows == 0 || empty($this->coSQLResult))
      return false;

    $this->cnRowNumber = 0;
    if (!mysqli_data_seek($this->coSQLResult, 0))
      return false;

    $this->coSQLCurrentResult = mysqli_fetch_assoc($this->coSQLResult);
    return true;
  }

  public function readNext()
  {
    if($this->cnNumRows == 0 || empty($this->coSQLResult))
      return false;

    $this->cnRowNumber++;
    if ($this->cnRowNumber >= $this->cnNumRows)
      return false;

    $bResult = (bool)mysqli_data_seek($this->coSQLResult, $this->cnRowNumber);
    $this->coSQLCurrentResult = mysqli_fetch_assoc($this->coSQLResult);

    return $bResult;
  }

  public function readPrevious()
  {
    if($this->cnNumRows == 0 || empty($this->coSQLResult))
      return false;

    $this->cnRowNumber--;
    if ($this->cnRowNumber < 0)
      return false;

    $bResult = (bool)mysqli_data_seek($this->coSQLResult, $this->cnRowNumber);
    $this->coSQLCurrentResult = mysqli_fetch_assoc($this->coSQLResult);

    return $bResult;
  }


  public function numRows()
  {
    return (int)$this->cnNumRows;
  }


  public function getData()
  {
    if($this->cnNumRows == 0 || empty($this->coSQLResult))
      return array();

    //remove all the spaces at the end of characters fields
    foreach($this->coSQLCurrentResult as $sKey => $vValue)
    {
      if(in_array(substr($sKey, -2), array('pk', 'fk')))
        $this->coSQLCurrentResult[$sKey] = (int)$vValue;
      else
        $this->coSQLCurrentResult[$sKey] = rtrim($vValue);
    }

    return $this->coSQLCurrentResult;
  }

  public function getAll()
  {
    return $this->getRawData();
  }

  public function getRawData()
  {
    if($this->cnNumRows == 0 || empty($this->coSQLResult))
      return array();

    if($this->cnRowNumber !== 0)
    {
      assert('false; // getting raw result reset the result pointer');
      exit();
    }

    mysqli_data_seek($this->coSQLResult, 0);
    $asResult = array();

    while($asRow = mysqli_fetch_assoc($this->coSQLResult))
    {
      //remove all the spaces at the end of characters fields
      foreach($asRow as $sKey => $vValue)
        $asRow[$sKey] = rtrim($vValue);

      $asResult[] = $asRow;
    }
    mysqli_data_seek($this->coSQLResult, 0);

    return $asResult;
  }

  public function getFieldValue($psField, $psType = CONST_PHP_VARTYPE_STR)
  {
    if(empty($psField) || $this->cnNumRows == 0 || empty($this->coSQLCurrentResult) || !isset($this->coSQLCurrentResult[$psField]))
      return '';

    $vReturn = null;

    switch($psType)
    {
      case CONST_PHP_NOVARTYPE :
        $vReturn = $this->coSQLCurrentResult[$psField];
        break;
      case CONST_PHP_VARTYPE_INT:
        $vReturn = (int)$this->coSQLCurrentResult[$psField];
        break;

      case CONST_PHP_VARTYPE_FLOAT:
        $vReturn = (float)$this->coSQLCurrentResult[$psField];
        break;

      case CONST_PHP_VARTYPE_BOOL:
        $vReturn = (bool)$this->coSQLCurrentResult[$psField];
        break;

      case CONST_PHP_VARTYPE_ARRAY:
        $vReturn = (array)$this->coSQLCurrentResult[$psField];
        break;

      case CONST_PHP_VARTYPE_SERIALIZED:
        $vReturn = unserialize(rtrim($this->coSQLCurrentResult[$psField]));
        break;

      case CONST_PHP_VARTYPE_JSON:
      default:
        $vReturn = json_decode(rtrim($this->coSQLCurrentResult[$psField]));
      break;

      case CONST_PHP_VARTYPE_STR:
      default:
        $vReturn = (string)rtrim($this->coSQLCurrentResult[$psField]);
      break;
    }

    return $vReturn;
  }


  public function setFieldValue($psFieldName, $pvFieldValue)
  {
    $this->coSQLCurrentResult[$psFieldName] = $pvFieldValue;
    if(empty($this->cnNumRows))
    {
      $this->cnNumRows = 1;
      $this->cnRowNumber = 0;
    }

    return true;
  }
}