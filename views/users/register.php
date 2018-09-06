<div class="alert alert-dark" >
	<h4 class="modal-title">Register User</h4>
  <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label>Email</label>
	  <input type="text" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" name='submit' class="btn btn-primary" value="Submit">Submit</button>
	<a class="btn btn-danger" href="<?php echo ROOT_URL.ROOT_SHARE_CONTROLLER;?>">Cancel</a>
	  

</form>
	
</div>

