<div class="row">
    <div class="col-9">
	<?php
	if(isset($_SESSION['steamid'])) {
		include 'errors.php';
	?>
      <div class="card">
  <div class="card-body">
    <h5 class="card-title">Manage Vehicles <span style="float:right;"><a class="btn btn-primary" href="#" data-toggle="modal" data-target="#newVeh" role="button">Add Vehicles</a></span></h5>
    <h6 class="card-subtitle mb-2 text-muted">This page allows you to add, manage and delete your vehicles.</h6>
	<?php
	if(isset($_POST['newveh'])) {
		if($link->query("INSERT INTO vehicles (steamid, make, plate, registration, insurance, owner, colour) VALUES ('".$steamprofile['steamid']."', '".$_POST['make']."', '".$_POST['plate']."', '".$_POST['reg']."', '".$_POST['insurance']."', '".$_POST['owner']."', '".$_POST['colour']."')")){
            header('Location: '.$config['systemurl'].'/index.php?page=vehicles&message=veh-success');
        } else {
            header('Location: '.$config['systemurl'].'/index.php?page=vehicles&message=addveh-error');
        }
	}
	
	if(isset($_POST['editveh'])) {
		if($link->query("UPDATE vehicles SET plate='".$_POST['plate']."', registration='".$_POST['reg']."', insurance='".$_POST['insurance']."', owner='".$_POST['listchars']."', colour='".$_POST['colour']."' WHERE id=".$_POST['vehid'])){
            header('Location: '.$config['systemurl'].'/index.php?page=vehicles&message=veh-updated');
        } else {
            header('Location: '.$config['systemurl'].'/index.php?page=vehicles&message=upveh-error');
        }
	}
	
	if(isset($_GET['delete'])) {
        if($link->query("DELETE FROM vehicles WHERE steamid=".$steamprofile['steamid']." AND id=".$_GET['delete'])){
            header('Location: '.$config['systemurl'].'/index.php?page=vehicles&message=veh-deleted');
        } else {
            header('Location: '.$config['systemurl'].'/index.php?page=vehicles&message=delveh-error');
        }
	}
		$getVehs = $link->query("SELECT * FROM vehicles WHERE steamid=".$steamprofile['steamid']);
		if ($getVehs->num_rows > 0) {
			echo '<table class="table table-hover table-dark">
  <thead>
  <tr>
    <th scope="col">Make/Model</th>
	<th scope="col">Colour</th>
    <th scope="col">License Plate</th>
    <th scope="col">Registration</th>
    <th scope="col">Insurance</th>
    <th scope="col">Owner</th>
    <th scope="col">&nbsp;</th>
  </tr>
  </thead>
  <tbody>';
			while($veh = $getVehs->fetch_assoc()) {
				$getOwner = $link->query("SELECT * FROM characters WHERE id=".$veh['owner']." AND steamid=".$steamprofile['steamid']);
				while($owner = $getOwner->fetch_assoc()) {
					$firstname = $owner['firstname'];
					$lastname = $owner['lastname'];
					$ownerid = $owner['id'];
				}
				$getChars = $link->query("SELECT * FROM characters WHERE steamid=".$steamprofile['steamid']);
				$listchars = '<label for="listchars">Owner</label>
		<select name="listchars" id="listchars" class="form-control">';
			$listchars .= '<option value="'.$ownerid.'" selected>(CURRENT) '.$firstname.' '.$lastname.'</option>';
				while($chars = $getChars->fetch_assoc()) {
					$listchars .= '<option value="'.$chars['id'].'">'.$chars['firstname'].' '.$chars['lastname'].'</option>';
				}
				$listchars .= '</select>';
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
				echo '<tr>
    <td>'.$veh['make'].'</td>
	<td>'.$veh['colour'].'</td>
    <td>'.$veh['plate'].'</td>
    <td>'.$reg.'</td>
    <td>'.$insurance.'</td>
    <td>'.$firstname.' '.$lastname.'</td>
    <td align="right"><a href="#" data-toggle="modal" data-target="#editVeh-'.$veh['id'].'"><i class="fas fa-edit"></i></a> <a style="color: red;" href="'.$config['systemurl'].'/index.php?page=vehicles&delete='.$veh['id'].'"><i class="fas fa-trash"></i></a></td>
  </tr>';
				echo '<div class="modal fade" id="editVeh-'.$veh['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">'.$veh['make'].' with plate '.$veh['plate'].'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form name="editVeh" method="post" action="">
	  <label for="make">Make/Model</label>
  <input name="make" type="text" id="make" value="'.$veh['make'].'" class="form-control" readonly>
  <p class="text-info"><em>You can not edit the make/model of this vehicle, if you made a mistake, delete it and try again.</em></p>
  <label for="colour">Colour</label>
        <input type="text" name="colour" id="colour" value="'.$veh['colour'].'"  class="form-control">
	  <label for="plate">License Plate</label>
        <input type="text" name="plate" id="plate" value="'.$veh['plate'].'"  class="form-control">
		<label for="reg">Registration</label>
		<select name="reg" id="reg" class="form-control">
	<option value="'.$veh['registration'].'" selected>(CURRENT) '.$reg.'</option>
    <option value="1">Valid</option>
    <option value="2">Expired</option>
	<option value="3">Not Registered</option>
  </select>
  <label for="insurance">Insurance</label>
		<select name="insurance" id="insurance" class="form-control">
	<option value="'.$veh['insurance'].'" selected>(CURRENT) '.$insurance.'</option>
    <option value="1">Valid</option>
    <option value="2">Expired</option>
	<option value="3">Not Insured</option>
  </select>
  '.$listchars.'
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<input name="vehid" type="hidden" id="vehid" value="'.$veh['id'].'">
		<input class="btn btn-primary" type="submit" name="editveh" id="editveh" value="Save Changes">
		</form>
      </div>
    </div>
  </div>
</div>';
			}
			echo ' </tbody>
</table>';
		} else {
			echo '<div class="alert alert-info" role="alert"><span class="badge badge-dark">Information</span> You currently do not have any vehicles, please feel free to add one by <a href="#" data-toggle="modal" data-target="#newVeh">clicking here</a>.</div>';
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