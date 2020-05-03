<div class="row">
    <div class="col-9">
	<?php
	if(isset($_SESSION['steamid'])) {
		include 'errors.php';
		if($config['police'] <= $perm) {
	?>
      <div class="card">
  <div class="card-body">
    <h5 class="card-title">Unit Control Panel <span style="float: right;">Callsign: <?php echo $callsign; ?></span></h5>
    <h6 class="card-subtitle mb-2 text-muted">This page allows you to change your unit status.</h6>
	<?php
	if(isset($_GET['duty'])) {
		if($link->query("INSERT INTO unitstatus (status, callsign) VALUES ('1', '".$callsign."')")){
            header('Location: '.$config['systemurl'].'/index.php?page=unit-control');
        }
	}
	if(isset($_GET['offduty'])) {
		if($link->query("DELETE FROM unitstatus WHERE callsign='".$callsign."'")){
            header('Location: '.$config['systemurl'].'/index.php?page=unit-control');
        }
	}
	if(isset($_GET['action'])) {
		if($link->query("UPDATE unitstatus SET status='".$_GET['action']."' WHERE callsign='".$callsign."'")){
            header('Location: '.$config['systemurl'].'/index.php?page=unit-control');
        }
	}
		$getStatus = $link->query("SELECT * FROM unitstatus WHERE callsign='".$callsign."'");
		if ($getStatus->num_rows > 0) {
			while($status = $getStatus->fetch_assoc()) {
				if($status['status'] == 1) {
					$title = 'Available (10-8)';
					$colour = 'success';
				} elseif($status['status'] == 2) {
					$title = 'Unavailable (10-7)';
					$colour = 'light';
				} elseif($status['status'] == 3) {
					$title = 'En Route (10-97)';
					$colour = 'warning';
				} elseif($status['status'] == 4) {
					$title = 'On Scene (10-23)';
					$colour = 'info';
				} elseif($status['status'] == 5) {
					$title = 'Busy (10-6)';
					$colour = 'secondary';
				} elseif($status['status'] == 6) {
					$title = 'Transport (10-9)';
					$colour = 'primary';
				} elseif($status['status'] == 7) {
					$title = 'Panic Button Pressed (10-99)';
					$colour = 'danger';
				}
			}
			echo '<div class="alert alert-'.$colour.'" role="alert">
  <center>CURRENT STATUS: <b>'.$title.'</b></center>
</div>
			<div class="row">
			<div class="col">
      <a class="btn btn-success btn-lg btn-block" href="'.$config['systemurl'].'/index.php?page=unit-control&action=1" role="button">AVAILABLE</a>
    </div>
	<div class="col">
      <a class="btn btn-light btn-lg btn-block" href="'.$config['systemurl'].'/index.php?page=unit-control&action=2" role="button">UNAVAILABLE</a>
    </div>
	<div class="col">
      <a class="btn btn-warning btn-lg btn-block" href="'.$config['systemurl'].'/index.php?page=unit-control&action=3" role="button">EN ROUTE</a>
    </div>
			</div>
			<div class="row" style="margin-top: 5px;">
			<div class="col">
      <a class="btn btn-info btn-lg btn-block" href="'.$config['systemurl'].'/index.php?page=unit-control&action=4" role="button">ON SCENE</a>
    </div>
	<div class="col">
      <a class="btn btn-secondary btn-lg btn-block" href="'.$config['systemurl'].'/index.php?page=unit-control&action=5" role="button">BUSY</a>
    </div>
	<div class="col">
      <a class="btn btn-primary btn-lg btn-block" href="'.$config['systemurl'].'/index.php?page=unit-control&action=6" role="button">TRANSPORT</a>
    </div>
			</div>
			<div class="row" style="margin-top: 5px;">
			<div class="col">
      <a class="btn btn-danger btn-lg btn-block" href="'.$config['systemurl'].'/index.php?page=unit-control&action=7" role="button">PANIC BUTTON</a>
    </div>
	<div class="col">
      <a class="btn btn-dark btn-lg btn-block" style="border-color: grey;" href="'.$config['systemurl'].'/index.php?page=unit-control&offduty" role="button">Go off Duty</a>
    </div>
			</div>';
			echo '<div class="row" style="margin-top: 10px;">
			<div class="col-9">
			<div class="alert alert-success" role="alert">
  <span class="badge badge-dark">Available Units</span><br /><b>';
			$getAvailable = $link->query("SELECT * FROM unitstatus WHERE status='1'");
		if ($getAvailable->num_rows > 0) {
			while($unit = $getAvailable->fetch_assoc()) {
				echo $unit['callsign'].', ';
			}
		} else {
			echo 'There are no available units!';
		}			
			echo '</b></div>
			</div>
			<div class="col-3 alert alert-light" style="text-align:center;"><b>
			10-8 = Available<br />
			10-7 = Unavailable<br />
			10-97 = En Route<br />
			10-23 = On Scene<br />
			10-6 = Busy<br />
			10-9 = Transport<br />
			10-99 = Panic Button
			</b></div>
			</div>';
		} else {
			echo '<a class="btn btn-primary btn-lg btn-block" href="'.$config['systemurl'].'/index.php?page=unit-control&duty" role="button">Go on Duty</a>';
		}
	?>
  </div>
</div>
<?php
		} else {
			echo '<div class="alert alert-info" role="alert"><span class="badge badge-dark">Your are not a law enforcement officer</span><br />It seems that you are trying to access a page meant for law enforement officers only, if you require access, view the messages on the right hand side.</div>';
		}

 } else {
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