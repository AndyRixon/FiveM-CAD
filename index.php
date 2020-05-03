<?php
include 'config.php';
require $config['systempath'].'/steamauth/steamauth.php';
if(isset($_SESSION['steamid'])) {
	include $config['systempath'].'/steamauth/userInfo.php';
}

include $config['systempath'].'/tpl/header.php';

if($perm == $config['banned']) {
	echo '<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">You are BANNED!</h4>
  <p>It appears you have been naughty, therefore we have taken the appropriate action to ban your account, maybe next time you will learn your lesson!</p>
  <hr>
  <p class="mb-0">If you feel this was a mistake or deserve another chance, feel free to <a href="https://www.lsrpv.com/index.php?/forum/11-ban-appeals/">appeal this ban on our forum</a>.</p>
</div>';
} else {
	switch($_GET['page']) {
		case 'logout':
			session_unset();
			session_destroy();
			$getStatus = $link->query("SELECT * FROM unitstatus WHERE callsign='".$callsign."'");
				if ($getStatus->num_rows > 0) {
					$link->query("DELETE FROM unitstatus WHERE callsign='".$callsign."'");
				}
			header('Location: '.$config['systemurl']);
			exit;
		break;
		case 'admin':
			include $config['systempath'].'/tpl/admin.php';
		break;
		case 'call-log':
			include $config['systempath'].'/tpl/call-log.php';
		break;
		case 'characters':
			include $config['systempath'].'/tpl/characters.php';
		break;
		case 'vehicles':
			include $config['systempath'].'/tpl/vehicles.php';
		break;
		case 'civ-lookup':
			include $config['systempath'].'/tpl/civ-lookup.php';
		break;
		case 'veh-lookup':
			include $config['systempath'].'/tpl/veh-lookup.php';
		break;
		case 'unit-control':
			include $config['systempath'].'/tpl/unit-control.php';
		break;
		default:
			include $config['systempath'].'/tpl/home.php';
		break;
	}
}

include $config['systempath'].'/tpl/footer.php';