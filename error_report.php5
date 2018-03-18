<?php
header("X-XSS-Protection: 0");
//if you want session to be handled in database
require_once('./common/lib/db_session.inc.php5');
session_start();

if(!empty($_POST['description']))
{
  echo "asdsada";
}
//receive the ajax dump data
else if(!empty($_POST['mail']))
{
  /* send an email with everything we've got:
   * http referer, session (user), dump data received
   */

  $sMessage = 'Informations gathered concerning the crash:'."\n";


  if(isset($_FILES) && !empty($_FILES))
  {
    if(!empty($_FILES['screenshot_1']['tmp_name']))
    {
      $sPath = $_SERVER['DOCUMENT_ROOT'].'/common/upload/error/'.time().'_screebshot_1_'.$_FILES['screenshot_1']['name'];
      $bMoved = move_uploaded_file($_FILES['screenshot_1']['tmp_name'], $sPath);

       //var_dump($_FILES['screenshot_1']['tmp_name']);

      if($bMoved)
        $sMessage.= "\n\n  file uploaded:  ".$sPath;
      else
        $sMessage.= "\n\n  ERROR: could not move the file :  ".$_FILES['screenshot_1']['tmp_name'];
    }

    if(!empty($_FILES['screenshot_2']['tmp_name']))
    {
      $sPath = $_SERVER['DOCUMENT_ROOT'].'/common/upload/error/'.time().'_screebshot_2_'.$_FILES['screenshot_2']['name'];
      $bMoved = move_uploaded_file($_FILES['screenshot_2']['tmp_name'], $sPath);

      //var_dump($_FILES['screenshot_2']['tmp_name']);

      if($bMoved)
        $sMessage.= "\n\n  file uploaded:  ".$sPath;
      else
        $sMessage.= "\n\n  ERROR: could not move the file :  ".$_FILES['screenshot_2']['tmp_name'];
    }

    if(!empty($_FILES['screenshot_3']['tmp_name']))
    {
      $sPath = $_SERVER['DOCUMENT_ROOT'].'/common/upload/error/'.time().'_screebshot_3_'.$_FILES['screenshot_3']['name'];
      $bMoved = move_uploaded_file($_FILES['screenshot_3']['tmp_name'], $sPath);

      //var_dump($_FILES['screenshot_3']['tmp_name']);

      if($bMoved)
        $sMessage.= "\n\n  file uploaded:  ".$sPath;
      else
        $sMessage.= "\n\n  ERROR: could not move the file :  ".$_FILES['screenshot_3']['tmp_name'];
    }

  }

  if(isset($_POST['dump_html']) && !empty($_POST['dump_html']))
  {
    $sFile = '/common/upload/error/'.time().'_pagecontent.html';
    $sPath = $_SERVER['DOCUMENT_ROOT'].$sFile;

    $oFs = fopen($sPath, 'w+');
    @fputs($oFs, $_POST['dump_html']);
    @fclose($oFs);

    $_POST['dump_html'] = 'html file available here : https://'.$_SERVER['SERVER_NAME'].$sFile;
  }


  $sMessage.="------------------------------------------------------------\n\n Post: \n\n";
  $sMessage.= html_entity_decode(var_export($_POST, true));
  $sMessage.= "\n\n";

  $asData = $_SESSION;
  unset($asData['folder_tree']);
  unset($asData['settings']['menunav1']);
  unset($asData['settings']['menunav2']);

  unset($asData['sl_industry_list0']);
  unset($asData['sl_occupation_list0']);
  unset($asData['sl_industry_list1']);
  unset($asData['sl_occupation_list1']);
  unset($asData['HOME_PAGE_CHARTS']);

  $sMessage.="------------------------------------------------------------\n\n Session: \n\n";
  $sMessage.= var_export($asData, true);
  $sMessage.= "\n\n";


  $bSent = mail('munir@slate-ghc.com', 'Error on Slistem ', $sMessage);
  if(!$bSent)
  {
    $oFs = @fopen($_SERVER['DOCUMENT_ROOT'].'/error_report.txt', 'a+');
    if($oFs)
    {
      @fputs($oFs, $sMessage);
      @close($oFs);
    }
  }

  sleep(3);
  //header('location: /index.php5?sent='.(int)$bSent);

}

?>

<html>

<head>
  <title>Slistem Error report</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="/common/js/jquery.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>

  </style>
</head>

<form name="dumpForm" method="post" enctype="multipart/form-data" action="" >
<table  style="margin-top:20px;">
  <tr>
    <td style='padding-left: 10px;'>
      <label for="priority">Priority</label>
      <select class="form-control" id="priority" name="priority">
        <option value='critical'>Critical</option>
        <option value='high'>High</option>
        <option value='medium'>Medium</option>
        <option value='low'>Low</option>
      </select>
    </td>
    <td style='padding-left: 10px;'>
    <label for="type">Type</label>
      <select class="form-control" id="type" name="type">
        <option value='bug'>Bug</option>
        <option value='development'>Development</option>
        <option value='improvement'>Improvement</option>
        <option value='research'>Research</option>
      </select>
    </td>
    <td style='padding-left: 10px;'>
      <label for="type">Status</label>
      <select class="form-control" id="status" name="status">
        <option value='created'>Created</option>
        <option value='progress'>In progress</option>
        <option value='completed'>Completed</option>
        <option value='cancelled'>Cancelled</option>
      </select>
    </td>
    <td style='padding-left: 10px;'>
      <label for="type">Assignee</label>
      <select class="form-control" id="assignee" name="assignee">
        <option value='494'>Munir Anameric</option>
        <option value='434'>Rossana Kyamu</option>
        <option value='535'>Shyam Kumar</option>
      </select>
    </td>
    <td style='padding-left: 10px;'>
      <label for="estimated">Estimated Time</label>
      <input class="form-control" type="text" id="estimated" name="estimated">
    </td>
    <td style='padding-left: 10px;'>
      <label for="estimated">Completed Time</label>
      <input class="form-control" type="text" id="completedTime" name="completedTime">
    </td>
    <td style='padding-left: 10px;'>
      <label for="attachment">Attachment</label>
      <input id="attachment" type="file" name="attachment" />
    </td>
  </tr>
</table>
<table  style='margin-top: 10px;'>
  <tr>
    <td style='padding-left: 10px;'>
      <label for="description">Description</label>
      <textarea style="width: 600px;"class="form-control"id="description" name="description" rows="4"></textarea>
    </td>
    <td style='padding-left: 10px;'>
      <label for="notes">Notes</label>
      <textarea style="width: 600px;"class="form-control" id="notes" name="notes" rows="4"></textarea>
    </td>
  </tr>
  <tr>
    <td style='padding-left: 10px; padding-top: 10px;'><input type="submit" value="Add Task" /></td>
  </tr>
</table>
</form>

<br><br>

<body class="error_report_body_" style="">
  <div class="error_main_container_">
    <table style="margin-top:20px;">
  <tr>
    <th style='padding-left: 10px;'>Search: </th>
    <td style='padding-left: 5px;'><input style="width:150px;" type="text" class="form-control" id="search"></td>
    <th style='padding-left: 10px;'>Sort by: </th>
    <td style='padding-left: 5px;'>
      <select class="form-control" id="sort">
          <option>Priority</option>
          <option>Date Created</option>
          <option>Status</option>
        </select>
      </td>
      <td style='padding-left: 10px;'>
        <button type="button" class="btn btn-success">Add New</button>
      </td>
  </tr>
</table>
<table style="margin-top:20px;" class="table table-striped">
  <tr>
    <th style='width:10%;'>Priority</th>
    <th style='width:10%;'>Type</th>
    <th style='width:20%;'>Description</th>
    <th style='width:20%;'>Notes</th>
    <th style='width:5%;'>Date Created</th>
    <th style='width:5%;'>Date Updated</th>
    <th style='width:5%;'>Status</th>
    <th style='width:10%;'>Assignee</th>
    <th style='width:10%;'>Attachment</th>
    <th style='width:10%;'>Action</th>
  </tr>
  <tr>
    <td>Critical</td>
    <td>Bug</td>
    <td>
      An 'error' is a deviation from accuracy or correctness. A 'mistake' is an error caused by a fault: the fault being misjudgment, carelessness, or forgetfulness. Now, say that I run a stop sign because I was in a hurry, and wasn't concentrating, and the police stop me, that is a mistake. If, however, I try to park in an area with conflicting signs, and I get a ticket because I was incorrect on my interpretation of what the signs meant, that would be an error. The first time it would be an error. The second time it would be a mistake since I should have known better
    </td>
    <td>
      A note is a string of text placed at the bottom of a page in a book or document or at the end of a chapter, volume or the whole text. The note can provide an author's comments on the main text or citations of a reference work in support of the text, or both
    </td>
    <td>2018-03-14 20:30</td>
    <td>2018-03-14 20:30</td>
    <td>Created</td>
    <td>Munir Anameric</td>
    <td><a>Attachment</a></td>
    <td><a>Edit</a> / <a>Delete</a></td>
  </tr>
  <tr>
    <td>High</td>
    <td>Bug</td>
    <td>
      An 'error' is a deviation from accuracy or correctness. A 'mistake' is an error caused by a fault: the fault being misjudgment, carelessness, or forgetfulness. Now, say that I run a stop sign because I was in a hurry, and wasn't concentrating, and the police stop me, that is a mistake. If, however, I try to park in an area with conflicting signs, and I get a ticket because I was incorrect on my interpretation of what the signs meant, that would be an error. The first time it would be an error. The second time it would be a mistake since I should have known better
    </td>
    <td>
      A note is a string of text placed at the bottom of a page in a book or document or at the end of a chapter, volume or the whole text. The note can provide an author's comments on the main text or citations of a reference work in support of the text, or both
    </td>
    <td>2018-03-14 20:30</td>
    <td>2018-03-14 20:30</td>
    <td>Created</td>
    <td>Munir Anameric</td>
    <td><a>Attachment</a></td>
    <td><a>Edit</a> / <a>Delete</a></td>
  </tr>
  <tr>
    <td>Medium</td>
    <td>New Development</td>
    <td>
      An 'error' is a deviation from accuracy or correctness. A 'mistake' is an error caused by a fault: the fault being misjudgment, carelessness, or forgetfulness. Now, say that I run a stop sign because I was in a hurry, and wasn't concentrating, and the police stop me, that is a mistake. If, however, I try to park in an area with conflicting signs, and I get a ticket because I was incorrect on my interpretation of what the signs meant, that would be an error. The first time it would be an error. The second time it would be a mistake since I should have known better
    </td>
    <td>
      A note is a string of text placed at the bottom of a page in a book or document or at the end of a chapter, volume or the whole text. The note can provide an author's comments on the main text or citations of a reference work in support of the text, or both
    </td>
    <td>2018-03-14 20:30</td>
    <td>2018-03-14 20:30</td>
    <td>Created</td>
    <td>Munir Anameric</td>
    <td><a>Attachment</a></td>
    <td><a>Edit</a> / <a>Delete</a></td>
  </tr>
  <tr>
    <td>Low</td>
    <td>Research</td>
    <td>
      An 'error' is a deviation from accuracy or correctness. A 'mistake' is an error caused by a fault: the fault being misjudgment, carelessness, or forgetfulness. Now, say that I run a stop sign because I was in a hurry, and wasn't concentrating, and the police stop me, that is a mistake. If, however, I try to park in an area with conflicting signs, and I get a ticket because I was incorrect on my interpretation of what the signs meant, that would be an error. The first time it would be an error. The second time it would be a mistake since I should have known better
    </td>
    <td>
      A note is a string of text placed at the bottom of a page in a book or document or at the end of a chapter, volume or the whole text. The note can provide an author's comments on the main text or citations of a reference work in support of the text, or both
    </td>
    <td>2018-03-14 20:30</td>
    <td>2018-03-14 20:30</td>
    <td>Created</td>
    <td>Rossana</td>
    <td><a>Attachment</a></td>
    <td><a>Edit</a> / <a>Delete</a></td>
  </tr>
  <tr>
    <td>Low</td>
    <td>Research</td>
    <td>
      An 'error' is a deviation from accuracy or correctness. A 'mistake' is an error caused by a fault: the fault being misjudgment, carelessness, or forgetfulness. Now, say that I run a stop sign because I was in a hurry, and wasn't concentrating, and the police stop me, that is a mistake. If, however, I try to park in an area with conflicting signs, and I get a ticket because I was incorrect on my interpretation of what the signs meant, that would be an error. The first time it would be an error. The second time it would be a mistake since I should have known better
    </td>
    <td>
      A note is a string of text placed at the bottom of a page in a book or document or at the end of a chapter, volume or the whole text. The note can provide an author's comments on the main text or citations of a reference work in support of the text, or both
    </td>
    <td>2018-03-14 20:30</td>
    <td>2018-03-14 20:30</td>
    <td>Created</td>
    <td>Rossana</td>
    <td><a>Attachment</a></td>
    <td><a>Edit</a> / <a>Delete</a></td>
  </tr>
  <tr>
    <td>Low</td>
    <td>Research</td>
    <td>
      An 'error' is a deviation from accuracy or correctness. A 'mistake' is an error caused by a fault: the fault being misjudgment, carelessness, or forgetfulness. Now, say that I run a stop sign because I was in a hurry, and wasn't concentrating, and the police stop me, that is a mistake. If, however, I try to park in an area with conflicting signs, and I get a ticket because I was incorrect on my interpretation of what the signs meant, that would be an error. The first time it would be an error. The second time it would be a mistake since I should have known better
    </td>
    <td>
      A note is a string of text placed at the bottom of a page in a book or document or at the end of a chapter, volume or the whole text. The note can provide an author's comments on the main text or citations of a reference work in support of the text, or both
    </td>
    <td>2018-03-14 20:30</td>
    <td>2018-03-14 20:30</td>
    <td>Created</td>
    <td>Rossana</td>
    <td><a>Attachment</a></td>
    <td><a>Edit</a> / <a>Delete</a></td>
  </tr>
</table>

  </div>
</body>
</html>