<div class="row">
    <div class="col-9">
	<?php
	if(isset($_SESSION['steamid'])) {
		include 'errors.php';
	?>
      <div class="card">
  <div class="card-body">
    <h5 class="card-title">Manage Characters <span style="float:right;"><a class="btn btn-primary" href="#" data-toggle="modal" data-target="#newChar" role="button">Add Character</a></span></h5>
    <h6 class="card-subtitle mb-2 text-muted">This page allows you to add, manage and delete your characters.</h6>
	<?php
	if(isset($_POST['newchar'])) {
		if($link->query("INSERT INTO characters (steamid, firstname, lastname, dob, sex, address, license) VALUES ('".$steamprofile['steamid']."', '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['dob']."', '".$_POST['sex']."', '".$_POST['address']."', '".$_POST['license']."')")){
            header('Location: '.$config['systemurl'].'/index.php?page=characters&message=char-success');
        } else {
            header('Location: '.$config['systemurl'].'/index.php?page=characters&message=addchar-error');
        }
	}
	
	if(isset($_POST['editchar'])) {
		if($link->query("UPDATE characters SET lastname='".$_POST['lastname']."', address='".$_POST['address']."', license='".$_POST['license']."' WHERE id=".$_POST['charid'])){
            header('Location: '.$config['systemurl'].'/index.php?page=characters&message=char-updated');
        } else {
            header('Location: '.$config['systemurl'].'/index.php?page=characters&message=upchar-error');
        }
	}
	
	if(isset($_GET['delete'])) {
        if($link->query("DELETE FROM characters WHERE steamid=".$steamprofile['steamid']." AND id=".$_GET['delete'])){
            header('Location: '.$config['systemurl'].'/index.php?page=characters&message=char-deleted');
        } else {
            header('Location: '.$config['systemurl'].'/index.php?page=characters&message=delchar-error');
        }
	}
		$getChars = $link->query("SELECT * FROM characters WHERE steamid=".$steamprofile['steamid']);
		if ($getChars->num_rows > 0) {
			echo '<table class="table table-hover table-dark">
  <thead>
  <tr>
    <th scope="col">Full Name</th>
    <th scope="col">Driving License</th>
    <th scope="col">Date of Birth</th>
    <th scope="col">Gender</th>
    <th scope="col">Address</th>
    <th scope="col">&nbsp;</th>
  </tr>
  </thead>
  <tbody>';
			while($char = $getChars->fetch_assoc()) {
				if($char['sex'] == 1) {
					$sex = 'Male';
				} elseif($char['sex'] == 2) {
					$sex = 'Female';
				} elseif($char['sex'] == 3) {
					$sex = 'No Gender Set';
				}
				if($char['license'] == 1) {
					$license = 'No License';
				} elseif($char['license'] == 2) {
					$license = 'Valid';
				} elseif($char['license'] == 3) {
					$license = 'Expired';
				}
				echo '<tr>
    <td>'.$char['firstname'].' '.$char['lastname'].'</td>
    <td>'.$license.'</td>
    <td>'.$char['dob'].'</td>
    <td>'.$sex.'</td>
    <td>'.$char['address'].'</td>
    <td align="right"><a href="#" data-toggle="modal" data-target="#editChar-'.$char['id'].'"><i class="fas fa-edit"></i></a> <a style="color: red;" href="'.$config['systemurl'].'/index.php?page=characters&delete='.$char['id'].'"><i class="fas fa-trash"></i></a></td>
  </tr>';
				echo '<div class="modal fade" id="editChar-'.$char['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">'.$char['firstname'].' '.$char['lastname'].'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <p class="text-warning"><em>You are only able to edit the characters last name, address and license.</em></p>
	  <form name="editChar" method="post" action="">
	  <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" value="'.$char['lastname'].'"  class="form-control">
		<label for="address">Address</label>
  <input type="text" name="address" id="address" value="'.$char['address'].'"  class="form-control">
    <label for="license">Driving License</label>
  <select name="license" id="license" class="form-control">
	<option value="'.$char['license'].'" selected>(Current) '.$license.'</option>
    <option value="1">No License</option>
    <option value="2">Valid</option>
	<option value="3">Expired</option>
  </select>
  <p class="text-info"><em>The information below cannot be edited, if you made a mistake please delete the character and try again.</em></p>
  <label for="firstname">First Name</label>
  <input name="firstname" type="text" id="firstname" value="'.$char['firstname'].'" class="form-control" readonly>
  <label for="dob">Date of Birth</label>
  <input name="dob" type="text" id="dob" value="'.$char['dob'].'" class="form-control" readonly>
  <label for="sex">Gender</label>
  <input name="sex" type="text" id="sex" value="'.$sex.'" class="form-control" readonly>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<input name="charid" type="hidden" id="charid" value="'.$char['id'].'">
		<input class="btn btn-primary" type="submit" name="editchar" id="editchar" value="Save Changes">
		</form>
      </div>
    </div>
  </div>
</div>';
			}
			echo ' </tbody>
</table>';
		} else {
			echo '<div class="alert alert-info" role="alert"><span class="badge badge-dark">Information</span> You currently do not have any characters, please feel free to add one by <a href="#" data-toggle="modal" data-target="#newChar">clicking here</a>.</div>';
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