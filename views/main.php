<html>
	<head>
		<title>Shareboard</title>
		<link  rel="stylesheet" href="assets/css/style.css"  type=”text/css”>
		<link  rel="stylesheet" href="assets/css/bootstrap.css">
		<script src="assets/js/blog.js" type="text/javascript"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php echo ROOT_URL;?>">Shareboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <!--<a class="nav-link" href="<?php echo ROOT_URL.ROOT_HOME_CONTROLLER;?>">Home</a>
          </li>-->
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo ROOT_URL.ROOT_SHARE_CONTROLLER;?>">Shares</a>
          </li>
        </ul>
		  <ul class="navbar-nav navbar-right">
			  
			  <?php if(isset($_SESSION['is_logged_in'])) :?>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo ROOT_URL.ROOT_SHARE_CONTROLLER;?>">Welcome <?php echo $_SESSION['user_data']['name'];?></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo ROOT_URL.ROOT_USERLO_CONTROLLER;?>">logout</a>
          </li>
			  <?php else : ?>
			  <li class="nav-item active">
            <a class="nav-link" href="<?php echo ROOT_URL.ROOT_USERL_CONTROLLER;?>">Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo ROOT_URL.ROOT_USERR_CONTROLLER;?>">Register</a>
          </li>
			  <?php endif; ?>
        </ul>
        <!--<form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
      </div>
    </nav>
	<br/>	
    <main role="main" class="container">
	  <?php Message::display();?>
      <div class="starter-template">  
       	<?php require($view);?>
      </div>

    </main><!-- /.container -->
	</body>
</html>