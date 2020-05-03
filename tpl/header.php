<?php
// Get the users info...
if(isset($_SESSION['steamid'])) {
	$getUser = $link->query("SELECT * FROM users WHERE steamid=".$steamprofile['steamid']);
	if ($getUser->num_rows > 0) {
		while($user = $getUser->fetch_assoc()) {
			$perm = $user["usergroup"];
			$callsign = $user["callsign"];
			$email = $user["email"];
		}
	}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $config['systemurl']; ?>/tpl/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $config['systemurl']; ?>/tpl/fontawesome/css/all.css">

    <title><?php echo $config['systemtitle']; ?></title>
  </head>
  <body style='background-color: #3e3f41; background-image: url("<?php echo $config['systemurl']; ?>/tpl/img/bg.jpg"); background-size: cover; background-position: center; background-repeat: no-repeat;'>
  <div class="container">
  <div class="row">
    <div class="col-8" style="margin-top: 17px;"><img src="<?php echo $config['systemurl']; ?>/tpl/img/logo.png" /></div>
    <div class="col-4" style="text-align: right; margin-top: 30px; margin-bottom: 30px;"><?php if(!isset($_SESSION['steamid'])) { loginbutton('rectangle'); }  else { echo ' <a class="btn btn-info" href="#" data-toggle="modal" data-target="#settings" role="button">Settings</a> <a class="btn btn-warning" href="'.$config['systemurl'].'/index.php?page=logout" role="button">Logout</a>'; } ?></div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin-bottom:10px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <?php if(isset($_SESSION['steamid'])) { ?>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $config['systemurl']; ?>">Dashboard</a>
      </li>
	<?php

		if($config['police'] <= $perm) {	
?>	
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dispatch
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo $config['systemurl']; ?>/index.php?page=call-log">Call Overview</a>
		  <a class="dropdown-item" href="<?php echo $config['systemurl']; ?>/index.php?page=unit-control">Unit Control Panel</a>
		  <?php
		  $getDuty = $link->query("SELECT * FROM unitstatus WHERE callsign='".$callsign."'");
if ($getDuty->num_rows > 0) {
		  ?>
		  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#civlookup">Civillian Lookup</a>
		  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#vehlookup">Vehicle Lookup</a>
		  </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Active Bolos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#personsbolo">Persons of Interest</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#vehiclesbolo">Vehicles of Interest</a>
        </div>
      </li>
<?php } 
		} ?>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Civillian
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#call911">Call 911</a>
          <a class="dropdown-item" href="<?php echo $config['systemurl']; ?>/index.php?page=characters">Manage Characters</a>
          <a class="dropdown-item" href="<?php echo $config['systemurl']; ?>/index.php?page=vehicles">Manage Vehicles</a>
        </div>
      </li>
    </ul>
	<span class="navbar-text">
      Welcome back, <strong><?php echo $steamprofile['personaname']; ?></strong>
    </span>
  <?php } else { ?>
  <span class="navbar-text">
      Welcome back, Guest
    </span>
  <?php } ?>
  </div>
</nav>