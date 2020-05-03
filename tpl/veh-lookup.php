<div class="row">
    <div class="col-9">
	<?php
	if(isset($_SESSION['steamid'])) {
		include 'errors.php';
	?>
      <div class="card">
  <div class="card-body">
    <h5 class="card-title">Vehicle Lookup <span style="float:right;"><a class="btn btn-info" href="#" data-toggle="modal" data-target="#createBolo" role="button">Create Bolo</a> <a class="btn btn-warning" href="#" data-toggle="modal" data-target="#issueCit" role="button">Issue Citation</a></span></h5>
    <h6 class="card-subtitle mb-2 text-muted">This page allows you to search for vehicle information.</h6>
	<?php
		$getVeh = $link->query("SELECT * FROM vehicles WHERE plate='".$_POST['plate']."'");
		if ($getVeh->num_rows > 0) {
			while($veh = $getVeh->fetch_assoc()) {
				if($veh['boloed'] == 1){
					echo '<a href="#" data-toggle="modal" data-target="#vehiclesbolo"><div class="alert alert-danger" role="alert">This vehicle is a Vehicle of Interest of Interest and has an active bolo attached to it!</div></a>';
				}
				
				$getCiv = $link->query("SELECT * FROM characters WHERE id=".$veh['owner']);
				while($civ = $getCiv->fetch_assoc()) {
					$civid = $civ['id'];
					$firstname = $civ['firstname'];
					$lastname = $civ['lastname'];
					$dob = $civ['dob'];
				}
				if($veh['registration'] == 1) {
					$reg = 'Valid';
				} elseif($veh['registration'] == 2) {
					$reg = 'Expired';
				} elseif($veh['registration'] == 3) {
					$reg = 'Not Registered';
				}
				if($veh['insurance'] == 1) {
					$insurance = 'Valid';
				} elseif($veh['insurance'] == 2) {
					$insurance = 'Expired';
				} elseif($veh['insurance'] == 3) {
					$insurance = 'Not Insured';
				}
				
				echo '<div class="row">
    <div class="col-5">
      <label for="make">Make/Model</label>
  <input name="make" type="text" id="make" value="'.$veh['make'].'" class="form-control" readonly>
  <label for="plate">License Plate</label>
  <input name="plate" type="text" id="plate" value="'.$veh['plate'].'" class="form-control" readonly>
  <label for="colour">Colour</label>
  <input name="colour" type="text" id="colour" value="'.$veh['colour'].'" class="form-control" readonly>
  <label for="reg">Registration</label>
  <input name="reg" type="text" id="reg" value="'.$reg.'" class="form-control" readonly>
  <label for="insurance">Insurance</label>
  <input name="insurance" type="text" id="insurance" value="'.$insurance.'" class="form-control" readonly>
  <label for="owner">Owner/Date of Birth</label>
  <input name="owner" type="text" id="owner" value="'.$firstname.' '.$lastname.' ('.$dob.')" class="form-control" readonly>
    </div>
    <div class="col-7">
      <label for="record">Citation Record</label>
<textarea name="record" id="record" class="form-control" rows="15" readonly>';
$getCits = $link->query("SELECT * FROM `citations` WHERE `plate`='".$veh['plate']."' AND `character`=".$civid);
				if($getCits->num_rows > 0) {
					while($cit = $getCits->fetch_assoc()) {
						$received = date('d/m/Y', $cit['received']);
						echo '- '.$cit['title'].' ('.$received.') &#013;';
					}
				} else {
					echo '- NO CITATIONS FOUND ON RECORD';
				}
echo '</textarea> 
    </div>
  </div>
  
  <div class="modal fade" id="issueCit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Issue Citation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form name="issuecit" method="post" action="'.$config['systemurl'].'/index.php">
	  <label for="firstname">Citation Title</label>
       <input type="text" name="title" id="title" class="form-control" placeholder="Enter the title of the citation">
  <p class="text-info"><em>By issuing this citation, you have informed the subject of it, and that they must sign it too (roleplay)</em></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<input type="hidden" name="id" id="id" value="'.$civid.'">
		<input type="hidden" name="plate" id="plate" value="'.$veh['plate'].'">
        <input class="btn btn-primary" type="submit" name="issuecit" id="issuecit" value="Sign & Issue Citation">
		</form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="createBolo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Vehicle Bolo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form name="addvbolo" method="post" action="'.$config['systemurl'].'/index.php">
  <p class="text-info"><em>By updating this vehicles bolo status, you are aware that this vehicle will be added to the Vehicles of Interest list and all law enforcement officers will be on the look out for it.</em></p>
      <textarea name="notes" id="notes" class="form-control" rows="6" placeholder="Please enter any descriptive bolo notes here..."></textarea>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<input type="hidden" name="id" id="id" value="'.$veh['id'].'">
        <input class="btn btn-primary" type="submit" name="addvbolo" id="addvbolo" value="Update Bolo Status">
		</form>
      </div>
    </div>
  </div>
</div>
';
			}
		} else {
			echo '<div class="alert alert-info" role="alert"><span class="badge badge-dark">Information</span> No vehicles could be found with that license plate!</div>';
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