<?php
$warning_start 	= '<div class="alert alert-warning" role="alert"><span class="badge badge-dark">Warning</span> ';
$error_start	= '<div class="alert alert-danger" role="alert"><span class="badge badge-dark">Error</span> ';
$success_start	= '<div class="alert alert-success" role="alert"><span class="badge badge-dark">Information</span> ';
$message_end	= '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></div>';

if(empty($callsign)) {
	echo $warning_start.'You have not set a callsign, please set one in your <a href="#" data-toggle="modal" data-target="#settings">Settings</a>. <b><i>You will need this if you intend on roleplaying as a law enforcement officer!</i></b>'.$message_end;
}
if(empty($email)) {
	echo $error_start.'You have not set an email address, please set one in your <a href="#" data-toggle="modal" data-target="#settings">Settings</a>.'.$message_end;
}

// Success Messages
if($_GET['message'] == 'char-success') {
	echo $success_start.'You have successfully added that character!'.$message_end;
} elseif($_GET['message'] == 'char-updated') {
	echo $success_start.'You have successfully edited that character!'.$message_end;
} elseif($_GET['message'] == 'char-deleted') {
	echo $success_start.'You have successfully deleted that character!'.$message_end;
} elseif($_GET['message'] == 'veh-updated') {
	echo $success_start.'You have successfully edited that vehicle!'.$message_end;
} elseif($_GET['message'] == 'veh-deleted') {
	echo $success_start.'You have successfully deleted that vehicle!'.$message_end;
} elseif($_GET['message'] == 'veh-success') {
	echo $success_start.'You have successfully added that vehicle!'.$message_end;
} elseif($_GET['message'] == 'access-success') {
	echo $success_start.'You have successfully been granted access to the Dispatch & Bolo systems!'.$message_end;
} elseif($_GET['message'] == 'call-success') {
	echo $success_start.'Thank you for calling 911, a dispatcher will send an officer as quickly as possible!'.$message_end;
} elseif($_GET['message'] == 'settings-success') {
	echo $success_start.'Your settings have been saved successfully!'.$message_end;
} elseif($_GET['message'] == 'bolo-success') {
	echo $success_start.'You have successfully updated that bolo!'.$message_end;
} elseif($_GET['message'] == 'callend-success') {
	echo $success_start.'You have successfully ended the 911 call!'.$message_end;
} elseif($_GET['message'] == 'callassigned-success') {
	echo $success_start.'You have successfully assigned yourself to the 911 call!'.$message_end;
} elseif($_GET['message'] == 'delcall-success') {
	echo $success_start.'You have successfully deleted that 911 call!'.$message_end;
} elseif($_GET['message'] == 'citation-success') {
	echo $success_start.'You have successfully added that citation!'.$message_end;
} elseif($_GET['message'] == 'report-success') {
	echo $success_start.'You have successfully added that arrest report!'.$message_end;
}
// Error Messages
if($_GET['message'] == 'addchar-error') {
	echo $error_start.'This is embarrassing, we was unable to add that character.'.$message_end;
} elseif($_GET['message'] == 'upchar-error') {
	echo $error_start.'This is embarrassing, we was unable to edit that character.'.$message_end;
} elseif($_GET['message'] == 'delchar-error') {
	echo $error_start.'This is embarrassing, we was unable to delete that character.'.$message_end;
} elseif($_GET['message'] == 'upveh-error') {
	echo $error_start.'This is embarrassing, we was unable to edit that vehicle.'.$message_end;
} elseif($_GET['message'] == 'delveh-error') {
	echo $error_start.'This is embarrassing, we was unable to delete that vehicle.'.$message_end;
} elseif($_GET['message'] == 'addveh-error') {
	echo $error_start.'This is embarrassing, we was unable to add that vehicle.'.$message_end;
} elseif($_GET['message'] == 'access-error') {
	echo $error_start.'This is embarrassing, we was unable to grant you access to the Dispatch & Bolo systems.'.$message_end;
} elseif($_GET['message'] == 'call-error') {
	echo $error_start.'Sorry, the call dropped out. Please try again.'.$message_end;
} elseif($_GET['message'] == 'settings-error') {
	echo $error_start.'This is embarrassing, your settings could not be saved.'.$message_end;
} elseif($_GET['message'] == 'bolo-error') {
	echo $error_start.'This is embarrassing, we could not update that bolo.'.$message_end;
} elseif($_GET['message'] == 'callend-error') {
	echo $error_start.'This is embarrassing, we could not end that 911 call.'.$message_end;
} elseif($_GET['message'] == 'callassigned-error') {
	echo $error_start.'This is embarrassing, we could not assign you to that 911 call.'.$message_end;
} elseif($_GET['message'] == 'delcall-error') {
	echo $error_start.'This is embarrassing, we could not remove that 911 call.'.$message_end;
} elseif($_GET['message'] == 'citation-error') {
	echo $error_start.'This is embarrassing, we could not add that citation.'.$message_end;
} elseif($_GET['message'] == 'report-error') {
	echo $error_start.'This is embarrassing, we could not add that arrest report.'.$message_end;
}
?>