<div class="alert alert-dark" >
	<h4 class="modal-title">Update your share...</h4>
  <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
 <?php foreach($viewmodel as $item): ?>
  <div class="form-group">
    <label>Share Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo $item['title'];?>">
  </div>
  <div class="form-group">
    <label>Body</label>
	  <textarea class="form-control" name="body" ><?php echo $item['body'];?></textarea>
  </div>
  <div class="form-group">
    <label>Link</label>
    <input type="text" class="form-control" name="link" value="<?php echo $item['link'];?>">
	<input type="hidden" class="form-control" name="user_id" value = "<?php echo $_SESSION['user_data']['id'];?>">
	<input type="hidden" class="form-control" name="editId" value = "<?php echo $item['id'];?>">
	
  </div>
  <button type="submit" name='update' class="btn btn-primary" value="update">Update</button>
  <a class="btn btn-danger" href="<?php echo ROOT_URL.ROOT_SHARE_CONTROLLER;?>">Cancel</a>
</form>
<?php endforeach;?>	
</div>

