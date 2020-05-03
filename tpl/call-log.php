<div class="row">
    <div class="col-9">
	<?php
	if(isset($_SESSION['steamid'])) {
		include 'errors.php';
	?>
      <div class="card">
  <div class="card-body">
    <h5 class="card-title">Call Overview</h5>
    <h6 class="card-subtitle mb-2 text-muted">This page allows you to view and manage 911 calls.</h6>
	<?php
$getDuty = $link->query("SELECT * FROM unitstatus WHERE callsign='".$callsign."'");
if ($getDuty->num_rows > 0) {
	if(isset($_POST['endcall'])) {
		if($link->query("DELETE FROM calllog WHERE id=".$_POST['callid'])){
            header('Location: '.$config['systemurl'].'/index.php?page=call-log&message=callend-success');
        } else {
            header('Location: '.$config['systemurl'].'/index.php?page=call-log&message=callend-error');
        }
	}
	
	if(isset($_POST['assigncall'])) {
		if($link->query("UPDATE calllog SET assigned='".$_POST['callsign']."' WHERE id=".$_POST['callid'])){
            header('Location: '.$config['systemurl'].'/index.php?page=call-log&message=callassigned-success');
        } else {
            header('Location: '.$config['systemurl'].'/index.php?page=call-log&message=callassigned-error');
        }
	}
	
	if(isset($_GET['delete'])) {
        if($link->query("DELETE FROM calllog WHERE id=".$_GET['delete'])){
            header('Location: '.$config['systemurl'].'/index.php?page=call-log&message=delcall-success');
        } else {
            header('Location: '.$config['systemurl'].'/index.php?page=call-log&message=delcall-error');
        }
	}
		$getCalls = $link->query("SELECT * FROM calllog");
		if ($getCalls->num_rows > 0) {
			echo '<table class="table table-hover table-dark">
  <thead>
  <tr>
    <th scope="col">Report #</th>
    <th scope="col">Caller</th>
    <th scope="col">Assigned</th>
    <th scope="col">Location</th>
    <th scope="col">&nbsp;</th>
  </tr>
  </thead>
  <tbody>';
			while($call = $getCalls->fetch_assoc()) {
				$getChars = $link->query("SELECT * FROM characters WHERE id=".$call['caller']);
				while($chars = $getChars->fetch_assoc()) {
					$firstname = $chars['firstname'];
					$lastname = $chars['lastname'];
				}
				if($call['assigned'] == '0') {
					$assigned = 'Not Assigned';
					$highlight = 'class="table-warning"';
					$form = '<form name="assignCall" method="post" action="">
		<input name="callsign" type="hidden" id="callsign" value="'.$callsign.'">
		<input name="callid" type="hidden" id="callid" value="'.$call['id'].'">
		<input class="btn btn-primary" type="submit" name="assigncall" id="assigncall" value="Assign Call">
		</form>';
				} else {
					$assigned = $call['assigned'];
					$highlight = '';
					$form = '<form name="endCall" method="post" action="">
					<input name="callsign" type="hidden" id="callsign" value="'.$callsign.'">
		<input name="callid" type="hidden" id="callid" value="'.$call['id'].'">
		<input class="btn btn-primary" type="submit" name="endcall" id="endcall" value="End Call">
		</form>';
				}
				if($assigned == $callsign) {
					$mycalls = 'class="table-info"';
				} else {
					$mycalls = '';
				}
				if($call['caller'] == '0') {
					$caller = 'Anonymous Caller';
				} else {
					$caller = $firstname.' '.$lastname;
				}
				echo '<tr '.$highlight.''.$mycalls.'>
    <td>#'.$call['report_number'].'</td>
    <td>'.$caller.'</td>
    <td>'.$assigned.'</td>
    <td>'.$call['location'].'</td>
    <td align="right"><a href="#" data-toggle="modal" data-target="#viewCall-'.$call['id'].'"><i class="fas fa-eye"></i></a> <a style="color: red;" href="'.$config['systemurl'].'/index.php?page=call-log&delete='.$call['id'].'"><i class="fas fa-trash"></i></a></td>
  </tr>';
				echo '<div class="modal fade" id="viewCall-'.$call['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Call Overview for Report # '.$call['report_number'].'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <label for="report">Report #</label>
  <input name="report" type="text" id="report" value="'.$call['report_number'].'" class="form-control" readonly>
  <label for="assigned">Assigned</label>
  <input name="assigned" type="text" id="assigned" value="'.$assigned.'" class="form-control" readonly>
	  <label for="caller">Caller</label>
  <input name="caller" type="text" id="caller" value="'.$caller.'" class="form-control" readonly>
	  <label for="location">Location</label>
  <input name="location" type="text" id="location" value="'.$call['location'].'" class="form-control" readonly>
  <label for="desc">Description</label>
<textarea name="desc" id="desc" class="form-control" rows="5" readonly>'.$call['description'].'</textarea> 
      </div>
      <div class="modal-footer">
	  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	  '.$form.'
      </div>
    </div>
  </div>
</div>';
			}
			echo ' </tbody>
</table>
<p><span class="table-info" style="float: left;">Blue Background = My Calls</span> <span class="table-warning" style="float: right;">Orange Background = Available/Unassigned Calls</span></p>';
		} else {
			echo '<div class="alert alert-info" role="alert"><span class="badge badge-dark">Information</span> There are currently no active 911 calls available.</div>';
		}
} else {
	echo '<div class="alert alert-warning" role="alert"><span class="badge badge-dark">Information</span> You are currently not on duty and can not take any 911 calls.</div>';
}
	?>
  </div>
</div>
<?php } else {
	echo '<div class="alert alert-danger" role="alert"><span class="badge badge-dark">No Permissions</span> You do not have permission to view this page, please ensure you are logged in and/or have the correct permissions.</div>';
}
?>
    </div>
    <div class="col-3">
    <?php
include 'sidebar.php';
?>
    </div>
 </div>