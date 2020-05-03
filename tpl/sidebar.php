<style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
<?php
$isCop = $link->query("SELECT * FROM users WHERE steamid=".$steamprofile['steamid']);
if ($isCop->num_rows > 0) {
	while($cperm = $isCop->fetch_assoc()) {
		$c_group = $cperm["usergroup"];
		if($config['civ'] == $c_group) {
			echo '<div class="alert alert-info" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <h4 class="alert-heading">Police/Sherrif Players</h4>
  <p>If you are roleplaying as a law enforement officer, please ensure you have requested the correct usergroup to access the Dispatch & Bolo menus</p>
  <hr>
  <p class="mb-0"><a href="#" data-toggle="modal" data-target="#beCop">Click here to request this access, otherwise you will only be able to deal with AI peds.</a></p>
</div>';
		}
	}
}

$content = json_decode(file_get_contents("http://".$config['fivem_host'].":".$config['fivem_port']."/info.json"), true);
if($content){
	$gta5_players = file_get_contents("http://".$config['fivem_host'].":".$config['fivem_port']."/players.json");
	$content = json_decode($gta5_players, true);
	$pl_count = count($content);
	echo '<div class="alert alert-success" role="alert"><span class="badge badge-dark">Server Status</span><br />Our FiveM server is online and available.<br /><strong>Server Slots</strong> <span class="badge badge-info">'.$pl_count.'</span> / <span class="badge badge-info">'.$config['fivem_slots'].'</span><center><a style="margin-top: 5px;" class="btn btn-primary" href="fivem://connect/'.$config['fivem_host'].":".$config['fivem_port'].'" role="button">Connect</a> <a style="margin-top: 5px;" class="btn btn-info" href="https://www.trackyserver.com/server/524487" target="_blank" role="button">Vote Server</a></center></div>';
	if(!$pl_count == 0){
		echo '<span class="badge badge-light">Current Online Players</span><ul style="height:200px; overflow:hidden; overflow-y:scroll;" class="list-group">';
		foreach ($content as $player) {
			echo '<li style="margin-top: 5px;" class="list-group-item d-flex justify-content-between align-items-center">
		'.$player['name'].'
		<span class="badge badge-primary badge-pill">Ping: '.$player['ping'].'</span>
	  </li>';
		}
		echo '</ul>';
	}
} else {
	echo '<div class="alert alert-danger" role="alert"><span class="badge badge-dark">Server Status</span><br />Our FiveM server is currently offline.</div>';
}
?>