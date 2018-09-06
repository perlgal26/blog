<div class ="text-center">
	<h1>Welcome To ShareBoard</h1>
	<p class="lead">Share your post with others!</p>
	<?php if (empty($_SESSION)): ?>
		<a class="btn btn-secondary btn-share" href="<?php echo ROOT_URL.ROOT_USERL_CONTROLLER;?>">Login</a><br/>
	<?php else: ?>
	
	<a class="btn btn-secondary text-center" href="<?php echo ROOT_URL.ROOT_SHARE_CONTROLLER;?>">Share Now</a>
	<?php endif; ?>
</div>
