<div class="alert alert-light">
	
	<div><?php if (isset($_SESSION['is_logged_in'])): ?>
		<a class="btn btn-secondary btn-share" href="<?php echo ROOT_URL.ROOT_SHARE_CONTROLLER;?>&?action=add">Share something</a></div><br/>
	<?php endif; ?>
	
	<?php foreach($viewmodel as $item): ?>
		<div class="alert alert-dark">
			<p><?php echo $item['title']; ?></p>
			<p><small><?php echo $item['create_date']; ?></small></p>
			<br/>
			<p><?php echo $item['body']; ?></p>
			<p>source: <a href="<?php echo $item['link']; ?> " target="_blank"><?php echo $item['link']; ?></a></p>
			<p class="text-right"><small>Submitted by <?php echo $item['name']; ?></small></p>
			
			<?php if (isset($_SESSION['is_logged_in']) && ($_SESSION['user_data']['id'] == $item['user_id'])): ?>
			<div>
				<form method="post" action="<?php echo ROOT_URL.ROOT_SHARE_CONTROLLER;?>&?action=delete">
				<input type="hidden" id="delId" name="delId" value="<?php echo $item['id'];?>">
				<button type="submit" name="delete" class="btn btn-danger" value="delete" onClick="return confirm('Are you sure you want to delete?')">Delete</button>
				</form>

				<form method="post" action="<?php echo ROOT_URL.ROOT_SHARE_CONTROLLER;?>&?action=edit">	
				<input type="hidden" id="editId" name="editId" value="<?php echo $item['id'];?>">
				<button type="submit" name="edit" class="btn btn-secondary" value="edit">Edit</button>
				</form>
			</div>
			
			<?php endif; ?>  
			
		</div>
	<?php endforeach;?>
	
</div>