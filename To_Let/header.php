<!DOCTYPE html>
<html>

<?php 
 include_once'controller/db_config.php';

 ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/chartist/chartist.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/leaflet.css" rel="stylesheet" type="text/css">
    <link href="assets/css/leaflet.markercluster.css" rel="stylesheet" type="text/css">
    <link href="assets/css/leaflet.markercluster.default.css" rel="stylesheet" type="text/css">    
    <link href="assets/css/villareal-turquoise.css" rel="stylesheet" type="text/css" id="css-primary">
	<link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">
	
    <title>Rental</title>
</head>

<body class="">
<div class="page-wrapper">
	
		<div class="header-wrapper">
	<div class="header">
		<div class="header-inner">
			<div class="container">
				<div class="header-topbar">
					<div class="header-topbar-left">
						<ul class="nav nav-pills nav-topbar">
                                                    <li class="nav-item"><a href="index.php" class="nav-link"><strong>Login</strong></a></li>
                                                    <li class="nav-item"><a href="reg_member.php" class="nav-link"><strong>Registration</strong></a></li>
							<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
						</ul><!-- /.nav -->
					</div><!-- /.header-topbar-left -->

					<div class="header-topbar-right nav-topbar nav-topbar-social">
						<ul class="nav nav-pills">
							<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-facebook"></i></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-twitter"></i></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-linkedin"></i></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-foursquare"></i></a></li>
						</ul><!-- /.nav -->
					</div><!-- /.header-topbar-right -->
				</div><!-- /.header-topbar -->

				<div class="header-top">
					<div class="header-top-inner">
						<a class="header-logo" href="index.php">
							<span class="header-logo-shape"></span> 
							<span class="header-logo-text"> To-Let </span>
						</a><!-- /.header-logo -->

						<div class="header-separator">
						</div><!-- /.header-separator -->

						<div class="header-search">
							<form method="get" action="">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-search"></i></span>
									<input type="text" placeholder="NID Search the site" class="form-control">
								</div><!-- /.form-group -->
							</form>
						</div><!-- /.header-search -->

						<div class="header-information">
							<i class="fa fa-at"></i>

							<div class="header-information-block">
								<strong>info@tolet.com</strong>
								<span>Ask Us Anything</span>
							</div><!-- /.header-information-block -->
						</div><!-- /.header-information -->

						<div class="header-information">
							<i class="fa fa-phone"></i>

							<div class="header-information-block">
								<strong>+88 01750830844</strong>
								<span>Call Us 24 hour's</span>
							</div><!-- /.header-information-block -->
						</div><!-- /.header-information -->

						<button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target=".nav-primary-wrapper">
	                        <span></span>
	                        <span></span>
	                        <span></span>
	                    </button>							
					</div><!-- /.header-top-inner -->
				</div><!-- /.header-top -->

				<div class="header-bottom">
					<div class="header-bottom-inner">
						
<div class="nav-primary-wrapper collapse navbar-toggleable-sm">
	<ul class="nav nav-pills nav-primary">
		<li class="nav-item">
			<a href="index.php" class="nav-link active">
				Home
			</a>	

			
		</li>

		
		

		<li class="nav-item">
			<a href="" class="nav-link ">
				Faq
			</a>

			
		</li>		

		<li class="nav-item">
			<a href="" class="nav-link ">
				contact
			</a>	

					
		</li>	

																		
	</ul><!-- /.nav -->
</div><!-- /.nav-primary -->


						<ul class="nav nav-pills nav-currencies">
                                                    <li class="nav-item"><a href="reg_landloard.php" class="nav-link">Signup Landload</a></li>
                                                        <li class="nav-item"><a href="reg_member.php" class="nav-link">Sign UP Member</a></li>

						</ul><!-- /.currencies -->
					</div><!-- /.header-bottom-inner -->
				</div><!-- /.header-bottom -->
			</div><!-- /.container -->
		</div><!-- /.header-inner -->
	</div><!-- /.header -->
</div><!-- /.header-wrapper-->
