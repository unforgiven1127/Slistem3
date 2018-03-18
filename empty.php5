<!DOCTYPE html>
<html lang="en">
<head>
  <title>Slistem Development Tracker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript" >
  $("#upload").click(function(){
  	alert('click');
    var file_data = $('#attachment').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    alert(form_data);
    $.ajax({
        url: 'upload.php', // point to server-side PHP script
        dataType: 'text',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(php_script_response){
            alert(php_script_response); // display response from the PHP script, if any
        }
     });
});
  </script>

</head>

<body>
<table style="margin-top:20px;">
	<tr>
		<th style='padding-left: 10px;'>Search: </th>
		<td style='padding-left: 5px;'><input style="width:150px;" type="text" class="form-control" id="search"></td>
		<th style='padding-left: 10px;'>Sort by: </th>
		<td style='padding-left: 5px;'>
			<select class="form-control" id="sort">
			    <option>Severity</option>
			    <option>Date Created</option>
			    <option>Status</option>
		  	</select>
  		</td>
  		<td style='padding-left: 10px;'>
  			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add New
			</button>
  		</td>
	</tr>
</table>
<table style="margin-top:20px;" class="table table-striped">
	<tr>
		<th style='width:10%;'>Severity</th>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<input id="attachment" type="file" name="attachment" />
		<button id="upload">Upload</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>