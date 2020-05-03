<div class="row">
    <div class="col-9">
	<?php
	if(isset($_SESSION['steamid'])) {
		include 'errors.php';
		
		if(isset($_POST['settings'])) {
			if($link->query("UPDATE users SET email='".$_POST['email']."', callsign='".$_POST['callsign']."' WHERE steamid=".$_POST['steamid'])){
				header('Location: '.$config['systemurl'].'/index.php?message=settings-success');
			} else {
				header('Location: '.$config['systemurl'].'/index.php?message=settings-error');
			}
		}
		if(isset($_POST['becop'])) {
			if($link->query("UPDATE users SET usergroup='2' WHERE steamid=".$_POST['steamid'])){
				header('Location: '.$config['systemurl'].'/index.php?message=access-success');
			} else {
				header('Location: '.$config['systemurl'].'/index.php?message=access-error');
			}
		}
		if(isset($_POST['call911'])) {
			$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$report_number = substr(str_shuffle($permitted_chars), 0, 10);
			if($link->query("INSERT INTO calllog (report_number, caller, assigned, location, description) VALUES ('".$report_number."', '".$_POST['caller']."', '0', '".$_POST['location']."', '".$_POST['desc']."')")){
				header('Location: '.$config['systemurl'].'/index.php?message=call-success');
			} else {
				header('Location: '.$config['systemurl'].'/index.php?message=call-error');
			}
		}
		if(isset($_GET['removepbolo'])) {
			if($link->query("UPDATE characters SET boloed='0' WHERE id=".$_GET['removepbolo'])){
				header('Location: '.$config['systemurl'].'/index.php?message=bolo-success');
			} else {
				header('Location: '.$config['systemurl'].'/index.php?message=bolo-error');
			}
		}
		if(isset($_GET['removevbolo'])) {
			if($link->query("UPDATE vehicles SET boloed='0' WHERE id=".$_GET['removevbolo'])){
				header('Location: '.$config['systemurl'].'/index.php?message=bolo-success');
			} else {
				header('Location: '.$config['systemurl'].'/index.php?message=bolo-error');
			}
		}
		if(isset($_POST['addpbolo'])) {
			if($link->query("UPDATE characters SET boloed='1', bolonotes='".$_POST['notes']."' WHERE id=".$_POST['id'])){
				header('Location: '.$config['systemurl'].'/index.php?message=bolo-success');
			} else {
				header('Location: '.$config['systemurl'].'/index.php?message=bolo-error');
			}
		}
		if(isset($_POST['addvbolo'])) {
			if($link->query("UPDATE vehicles SET boloed='1', bolonotes='".$_POST['notes']."' WHERE id=".$_POST['id'])){
				header('Location: '.$config['systemurl'].'/index.php?message=bolo-success');
			} else {
				header('Location: '.$config['systemurl'].'/index.php?message=bolo-error');
			}
		}
		if(isset($_POST['issuecit'])) {
			$received = time();
			
			if($link->query("INSERT INTO `citations` (`character`, `plate`, `title`, `received`) VALUES ('".$_POST['id']."', '".$_POST['plate']."', '".$_POST['title']."', '".$received."');")){
				header('Location: '.$config['systemurl'].'/index.php?message=citation-success');
			} else {
				header('Location: '.$config['systemurl'].'/index.php?message=citation-error');
			}
		}
		if(isset($_POST['writereport'])) {
			if($link->query("INSERT INTO `arrests` (`character`, `charge`, `jailtime`) VALUES ('".$_POST['id']."', '".$_POST['charge']."', '".$_POST['term']."');")){
				header('Location: '.$config['systemurl'].'/index.php?message=report-success');
			} else {
				header('Location: '.$config['systemurl'].'/index.php?message=report-error');
			}
		}
	?>
      <div class="card">
  <div class="card-body">
    <h5 class="card-title">Dashboard</h5>
    <h6 class="card-subtitle mb-2 text-muted">Welcome to <?php echo $config['systemtitle']; ?></h6>
    <p class="card-text">Welcome to our MDT & CAD system, this system is here to help you as a civillian or a law enforcement officer on our FiveM roleplay server, everything you need is in the navbar above or the links below.</p>
  </div>
</div>
<?php } else {
	echo '<div class="alert alert-danger" role="alert"><span class="badge badge-dark">No Permissions</span> You do not have permission to view this page, please ensure you are logged in and/or have the correct permissions.</div>';
} ?>
    </div>
    <div class="col-3">
    <?php
include 'sidebar.php';
?>
    </div>
 </div>