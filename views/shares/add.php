<div class="alert alert-dark" >
	<h4 class="modal-title">Share something new!</h4>
  <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
  <div class="form-group">
    <label>Share Title</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label>Body</label>
	  <textarea class="form-control" name="body"></textarea>
  </div>
  <div class="form-group">
    <label>Link</label>
    <input type="text" class="form-control" name="link">
	<input type="hidden" class="form-control" name="user_id" value = "<?php echo $_SESSION['user_data']['id'];?>">  
  </div>
  <button type="submit" name='submit' class="btn btn-primary" value="Submit">Submit</button>
  <a class="btn btn-danger" href="<?php echo ROOT_URL.ROOT_SHARE_CONTROLLER;?>">Cancel</a>
</form>
	
</div>

