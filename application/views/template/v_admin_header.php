<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>HowFrameWork</title>
		<meta name="description" content="">
    	<meta name="author" content="">

		<link href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('public/css/app.css');?>" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	    
	</head>

	<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url(); ?>">Application</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li <?php if(current_url()== base_url('pages/view/home')) echo  'class="active"' ?>>
						<a href="<?php echo base_url('pages/view/home') ?>">Home</a>
					</li>
					<li <?php if(current_url()== base_url('pages/view/about')) echo  'class="active"' ?>>
						<a href="<?php echo base_url('pages/view/about') ?>">About</a>
					</li>
					<li <?php if(current_url()== base_url('news')) echo  'class="active"' ?>>
						<a href="<?php echo base_url('news') ?>">News</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
					<?php if (isset($user['username']) && ($user['username'] != '')) { ?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="icon-user"></i> <?php echo $user['username']; ?>
							<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Profile</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo site_url('logout'); ?>">Sign Out</a></li>
						</ul>
					</li>
					<?php } ?>
				</ul>

			</div><!--/.nav-collapse -->
		</div>
	</nav>

	<div class="container">