<div class="alert alert-light">
	
	<div ><?php if (isset($_SESSION['is_logged_in'])): ?>
		<a class="btn btn-secondary btn-share" href="<?php echo ROOT_URL.ROOT_SHARE_CONTROLLER;?>&?action=add">Share something</a></div><br/>
	<?php endif; ?>
	
	<?php foreach($viewmodel as $item): ?>
		<div class="alert alert-dark">
			<h4><?php echo $item['title']; ?></h4>
			<small><?php echo $item['create_date']; ?></small>
			<br/>
			<p><?php echo $item['body']; ?></p>
			<p><?php echo $item['link']; ?></p>
		</div>
	<?php endforeach;?>
</div>