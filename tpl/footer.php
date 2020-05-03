<?php if(isset($_SESSION['steamid'])) { include 'modals.php'; } ?>
<div class="row" style="margin-top:10px;">
    <div class="col-4">
      <h4>Common Pages</h4>
	  <div class="list-group">
  <a href="<?php echo $config['systemurl']; ?>/index.php?page=call-log" class="list-group-item list-group-item-action">Call Overview</a>
  <a href="<?php echo $config['systemurl']; ?>/index.php?page=unit-control" class="list-group-item list-group-item-action">Unit Control Panel</a>
  <a href="<?php echo $config['systemurl']; ?>/index.php?page=characters" class="list-group-item list-group-item-action">Manage Characters</a>
  <a href="<?php echo $config['systemurl']; ?>/index.php?page=vehicles" class="list-group-item list-group-item-action">Manage Vehicles</a>
</div>
    </div>
    <div class="col-4">
      <h4>Common Links</h4>
	  <div class="list-group">
  <a href="<?php echo $config['genlink1']['url']; ?>" target="_blank" class="list-group-item list-group-item-action"><?php echo $config['genlink1']['title']; ?></a>
  <a href="<?php echo $config['genlink2']['url']; ?>" target="_blank" class="list-group-item list-group-item-action"><?php echo $config['genlink2']['title']; ?></a>
  <a href="<?php echo $config['genlink3']['url']; ?>" target="_blank" class="list-group-item list-group-item-action"><?php echo $config['genlink3']['title']; ?></a>
  <a href="<?php echo $config['genlink4']['url']; ?>" target="_blank" class="list-group-item list-group-item-action"><?php echo $config['genlink4']['title']; ?></a>
    </div>
  </div>
  <div class="col-4" style="text-align: right;">
      <p class="text-info">Copyright &copy; <?php echo date('Y'); ?> <?php echo $config['systemtitle']; ?></p>
	  <p class="text-black-50">Made with <i class="fas fa-heart"></i> by <a href="https://www.lsrpv.com" target="_blank">LSRPV</a></p>
  </div>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="<?php echo $config['systemurl']; ?>/tpl/js/bootstrap.min.js"></script>
  </body>
</html>