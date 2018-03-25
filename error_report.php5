<?php
header("X-XSS-Protection: 0");
//if you want session to be handled in database
require_once('./common/lib/db_session.inc.php5');
require_once './conf/main_config.inc.php5';
require_once './common/lib/global_func.inc.php5';
require_once './component/dependency.inc.php5';

require_once './conf/custom_config/'.CONST_WEBSITE.'/config.inc.php5';

define('DB_NAME_SLISTEM','slistem');
define('DB_SERVER_SLISTEM', '127.0.0.1');
define('DB_USER_SLISTEM', 'pma_admin');
define('DB_PASSWORD_SLISTEM', 'KVW4PVVAWHASuRDz');
session_start();

@mysql_connect(DB_SERVER_SLISTEM, DB_USER_SLISTEM, DB_PASSWORD_SLISTEM) or die(mysql_error());
mysql_select_db(DB_NAME_SLISTEM) or die(mysql_error());

function get_all()
{
  $query = "SELECT t.*,l.firstname as firstname, l.lastname as lastname FROM tasks t inner join login l on l.loginpk = t.assignee t.flag = 'a'";

  $result = mysql_query($query);

  $array = array();
  while($data = mysql_fetch_assoc($result))
  {
    if($data['priority'] == 1){$data['_priority'] = "Critical";}
    if($data['priority'] == 2){$data['_priority'] = "High";}
    if($data['priority'] == 3){$data['_priority'] = "Medium";}
    if($data['priority'] == 4){$data['_priority'] = "Low";}
    $array[$data['id']] = $data ;
  }

  return $array;
}

function get_selected($id)
{
  $query = "SELECT t.*,l.firstname as firstname, l.lastname as lastname FROM tasks t inner join login l on l.loginpk = t.assignee where t.id = '$id'";

  $result = mysql_query($query);

  $array = array();
  while($data = mysql_fetch_assoc($result))
  {
    if($data['priority'] == 1){$data['_priority'] = "Critical";}
    if($data['priority'] == 2){$data['_priority'] = "High";}
    if($data['priority'] == 3){$data['_priority'] = "Medium";}
    if($data['priority'] == 4){$data['_priority'] = "Low";}
    $array[$data['id']] = $data ;
  }

  return $array;
}

if(!empty($_POST['description']))
{
  $priority = $_POST['priority'];
  $type = $_POST['type'];
  $status = $_POST['status'];
  $assignee = $_POST['assignee'];
  $estimated = $_POST['estimated'];
  $completedTime = $_POST['completedTime'];
  //$attachment = $_POST['attachment'];
  $notes = $_POST['notes'];
  $description = $_POST['description'];
  $id = $_POST['id'];

  //$oLogin = CDependency::getCpLogin();
  //$user_id = $oLogin->getuserPk();
  $user_id = 1;
  //$oDB = CDependency::getComponentByName('database');
  $sDate = date('Y-m-d H:i:s');

  if(isset($_FILES) && !empty($_FILES))
  {
    if(!empty($_FILES['attachment']['tmp_name']))
    {
      $time = time();
      $sPath = $_SERVER['DOCUMENT_ROOT'].'/common/upload/error/'.$time.'_attachment_'.$_FILES['attachment']['name'];
      $dPath = '/common/upload/error/'.$time.'_attachment_'.$_FILES['attachment']['name'];
      $bMoved = move_uploaded_file($_FILES['attachment']['tmp_name'], $sPath);

       //var_dump($_FILES['screenshot_1']['tmp_name']);

      if($bMoved)
        $sMessage = "\n\n  file uploaded:  ".$sPath;
      else
        $sMessage = "\n\n  ERROR: could not move the file :  ".$_FILES['attachment']['tmp_name'];
    }

  }

  if($id > 0)
  {
    $flag = 'a';
    if($status == 'deleted')
    {
      $flag = 'p';
    }
    $oldData = get_selected($id);
    $attachment = $oldData[$id]['attachment'];
    if(isset($dPath))
    {
      $attachment = $dPath;
    }

    $query = "UPDATE tasks SET priority = '$priority', type = '$type', status = '$status', assignee = '$assignee', estimated = '$estimated', completedTime = '$completedTime', notes = '$notes', description = '$description', date_updated = '$sDate', user_id = '$user_id', attachment = '$attachment', flag = '$flag' WHERE id = '$id'";

//echo $query;

    $slistemQueryUpdate = mysql_query($query);
  }
  else
  {
    $flag = 'a';
    if($status == 'deleted')
    {
      $flag = 'p';
    }
    $attachment = '';
    if(isset($dPath))
    {
      $attachment = $dPath;
    }

    $query = "INSERT INTO `tasks` (`priority`,`type`,`status`,`assignee`,`estimated`,`completedTime`,`notes`,`description`,`date_created`,`date_updated`,`user_id`,`attachment`,`flag`)
             VALUES('".$priority."','".$type."','".$status."','".$assignee."','".$estimated."','".$completedTime."','".$notes."','".$description."','".$sDate."','".$sDate."','".$user_id."','".$attachment."','".$flag."')";

    $slistemQueryUpdate = mysql_query($query);
  }

  $_POST['returnData'] = get_all();
  //echo $sMessage;
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
else
{
  $_POST['returnData'] = get_all();
}

?>

<html>

<head>
  <title>Slistem Error report</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="/common/js/jquery.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    function toggleForm(){
      //alert('asdasd');
      $("#bugForm").toggle();
    };

    function edit(id){
      var data = <?php echo json_encode($_POST['returnData']); ?>;
      data = data[id];
      $("#bugForm").show();
      $('#priority').val(data['priority']);
      $('#type').val(data['type']);
      $('#status').val(data['status']);
      $('#assignee').val(data['assignee']);
      $('#estimated').val(data['estimated']);
      $('#completedTime').val(data['completedTime']);
      $('#description').val(data['description']);
      $('#notes').val(data['notes']);
      $('#id').val(data['id']);
    };

  </script>
</head>

<?php

/*if(!empty($_POST['returnData']))
{
  $data = $_POST['returnData'];
  //var_dump($data);
}*/

?>

<div id="bugForm" style="display: none; background-color: #D3D3D3; margin-left: 10px; margin-top: 10px; width: 1300px !important;border-radius: 25px;padding: 20px;">
<form id="addNewBug" name="addNewBug" method="post" enctype="multipart/form-data" action="" >
<table>
  <tr>
    <td><h3>ADD / EDIT TASK</h3></td>
  </tr>
</table>
<table  style="margin-top:20px;">
  <tr>
    <td style='padding-left: 10px;'>
      <label for="priority">Priority</label>
      <select class="form-control" id="priority" name="priority">
        <option value='1'>Critical</option>
        <option value='2'>High</option>
        <option value='3'>Medium</option>
        <option value='4'>Low</option>
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
      <label for="status">Status</label>
      <select class="form-control" id="status" name="status">
        <option value='created'>Created</option>
        <option value='progress'>In progress</option>
        <option value='completed'>Completed</option>
        <option value='cancelled'>Cancelled</option>
        <option value='deleted'>Deleted</option>
      </select>
    </td>
    <td style='padding-left: 10px;'>
      <label for="assignee">Assignee</label>
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
      <label for="completedTime">Completed Time</label>
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
      <textarea style="width: 600px;"class="form-control"id="description" name="description" rows="6"></textarea>
    </td>
    <td style='padding-left: 10px;'>
      <label for="notes">Notes</label>
      <textarea style="width: 600px;"class="form-control" id="notes" name="notes" rows="6"></textarea>
    </td>
  </tr>
  <tr>
    <td hidden="hidden" ><input id='id' name='id'></input></td>
    <td style='padding-left: 10px; padding-top: 10px;'><button class="btn btn-primary" type="submit" value="Submit" />Submit</td>
  </tr>
</table>
</form>
</div>

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
        <button type="button" onclick="toggleForm();" class="btn btn-success">Add New Task</button>
      </td>
  </tr>
</table>
<table style="margin-top:20px;" class="table table-striped">
  <tr>
    <th style='width:2%; padding-left: 15px;'>ID</th>
    <th style='width:8%;'>Priority</th>
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
  <?php
  $data = $_POST['returnData'];
  foreach ($data as $key => $value) {
    $attachment = '';
    if($value['attachment'] != '')
    {
      //$name = 'https://beta2.slate.co.jp/common/upload/error/1521949417_attachment_netTest.doc';
      $attachment = 'Attachemt';
    }
    echo "<tr>";
      echo "<td style='padding-left: 15px;'>".$value['id']."</td>";
      echo "<td>".$value['_priority']."</td>";
      echo "<td>".$value['type']."</td>";
      echo "<td>".$value['description']."</td>";
      echo "<td>".$value['notes']."</td>";
      echo "<td>".$value['date_created']."</td>";
      echo "<td>".$value['date_updated']."</td>";
      echo "<td>".$value['status']."</td>";
      echo "<td>".$value['firstname']." ".$value['lastname']."</td>";
      echo "<td><a href='".$value['attachment']."' target=_blank'>".$attachment."</a></td>";
      echo "<td><button type='button' onclick='edit(".$value['id'].");'>Edit</button></td>";
    echo "</tr>";
  } ?>
</table>

  </div>
</body>
</html>