<div class="row">
    <div class="col-9">
	<?php
	if(isset($_SESSION['steamid'])) {
		include 'errors.php';
	?>
      <div class="card">
  <div class="card-body">
    <h5 class="card-title">Civillian Lookup <span style="float:right;"><a class="btn btn-info" href="#" data-toggle="modal" data-target="#createBolo" role="button">Create Bolo</a> <a class="btn btn-warning" href="#" data-toggle="modal" data-target="#issueCit" role="button">Issue Citation</a> <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#writeReport" role="button">Write Arrest Report</a></span></h5>
    <h6 class="card-subtitle mb-2 text-muted">This page allows you to search for civillian information.</h6>
	<?php
		$getCiv = $link->query("SELECT * FROM characters WHERE firstname='".$_POST['firstname']."' AND lastname='".$_POST['lastname']."' AND dob='".$_POST['dob']."'");
		if ($getCiv->num_rows > 0) {
			while($civ = $getCiv->fetch_assoc()) {
				if($civ['sex'] == 1) {
					$sex = 'Male';
				} elseif($civ['sex'] == 2) {
					$sex = 'Female';
				}
				if($civ['license'] == 1) {
					$license = 'No License';
				} elseif($civ['license'] == 2) {
					$license = 'Valid';
				} elseif($civ['license'] == 3) {
					$license = 'Expired';
				}
				if($civ['boloed'] == 1){
					echo '<a href="#" data-toggle="modal" data-target="#personsbolo"><div class="alert alert-danger" role="alert">This person is a Person of Interest and has an active bolo attached to them!</div></a>';
				}
				
				echo '<div class="row">
    <div class="col-5">
      <label for="firstname">First Name</label>
  <input name="firstname" type="text" id="firstname" value="'.$civ['firstname'].'" class="form-control" readonly>
  <label for="lastname">Last Name</label>
  <input name="lastname" type="text" id="lastname" value="'.$civ['lastname'].'" class="form-control" readonly>
  <label for="dob">Date of Birth</label>
  <input name="dob" type="text" id="dob" value="'.$civ['dob'].'" class="form-control" readonly>
  <label for="sex">Gender</label>
  <input name="sex" type="text" id="sex" value="'.$sex.'" class="form-control" readonly>
  <label for="address">Address</label>
  <input name="address" type="text" id="address" value="'.$civ['address'].'" class="form-control" readonly>
  <label for="license">Driving License</label>
  <input name="license" type="text" id="license" value="'.$license.'" class="form-control" readonly>
    </div>
    <div class="col-7">
      <label for="record">Criminal Record</label>
<textarea name="record" id="record" class="form-control" rows="16" readonly>Citations
====================================
';
$getCits = $link->query("SELECT * FROM `citations` WHERE `character`=".$civ['id']);
				if($getCits->num_rows > 0) {
					while($cit = $getCits->fetch_assoc()) {
						$received = date('d/m/Y', $cit['received']);
						echo '- '.$cit['title'].' ('.$received.') &#013;';
					}
				} else {
					echo '- NO CITATIONS FOUND ON RECORD';
				}
echo '

Arrest Reports
====================================
';
$getRep = $link->query("SELECT * FROM `arrests` WHERE `character`=".$civ['id']);
				if($getRep->num_rows > 0) {
					while($rep = $getRep->fetch_assoc()) {
						echo '- '.$rep['charge'].' ('.$rep['jailtime'].') &#013;';
					}
				} else {
					echo '- NO ARREST REPORTS FOUND ON RECORD';
				}
echo '</textarea> 
    </div>
  </div>
  
  <div class="modal fade" id="writeReport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Write Arrest Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form name="writereport" method="post" action="'.$config['systemurl'].'/index.php">
	  <label for="charge">Charge</label>
       <input type="text" name="charge" id="charge" class="form-control" placeholder="Enter the arresting charge">
  <label for="term">Jail Term</label>
       <input type="text" name="term" id="term" class="form-control" placeholder="Enter the jail term in months">
	   <p class="text-info"><em>Example: 18months</em></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<input type="hidden" name="id" id="id" value="'.$civ['id'].'">
        <input class="btn btn-primary" type="submit" name="writereport" id="writereport" value="Write Arrest Report">
		</form>
      </div>
    </div>
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
		<input type="hidden" name="id" id="id" value="'.$civ['id'].'">
		<input type="hidden" name="plate" id="plate" value="No Plate">
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
        <h5 class="modal-title" id="exampleModalLabel">Create Persons Bolo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form name="addpbolo" method="post" action="'.$config['systemurl'].'/index.php">
  <p class="text-info"><em>By updating this persons bolo status, you are aware that this person will be added to the Persons of Interest list and all law enforcement officers will be on the look out for them.</em></p>
      <textarea name="notes" id="notes" class="form-control" rows="6" placeholder="Please enter any descriptive bolo notes here..."></textarea>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<input type="hidden" name="id" id="id" value="'.$civ['id'].'">
        <input class="btn btn-primary" type="submit" name="addpbolo" id="addpbolo" value="Update Bolo Status">
		</form>
      </div>
    </div>
  </div>
</div>
';
			}
		} else {
			echo '<div class="alert alert-info" role="alert"><span class="badge badge-dark">Information</span> No persons could be found with that name or date of birth!</div>';
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