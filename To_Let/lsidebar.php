<!DOCTYPE html>
<html>
<?php 
 session_start();
 ob_start();
 if(!isset($_SESSION['landloader'])){
 	header("index.php");
 }
 @$landlond = $_SESSION['landloader'];
 include'controller/function.php';
 ?>
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
	
    <title>To-Let</title>
</head>

<body class="">
	<div class="page-wrapper">
		<div class="dashboard-wrapper">
			<div class="dashboard-sidebar">
				<div class="dashboard-title">
                                    <a href="index.php">
						<span class="logo-shape"></span> To-Let
					</a>
                                    <br>
                                   
                                
                                    

					<button class="navbar-toggler pull-xs-right hidden-lg-up" type="button" data-toggle="collapse" data-target=".dashboard-nav-primary">
                        <span></span>
                        <span></span>
                        <span></span>
                  
                    </button>						
				</div><!-- /.dashboard-title -->
				<?php 
					$fetch_profile = landload_info($db,$landlond);

				 ?>

				<div class="dashboard-user hidden-md-down">
					<div class="dashboard-user-image" style="background-image: url('images/<?php echo $fetch_profile['image'] ?>');">
					</div><!-- /.dashboar-user-image -->
					<strong><?php echo $fetch_profile['name'] ?></strong>
                                        
				</div><!-- /.dashboard-user -->

				<div class="dashboard-nav-primary collapse navbar-toggleable-md">
					<ul class="nav nav-stacked">


						<li class="nav-item">
                            <a href="landloarddetails.php" class="nav-link active">
								<i class="fa fa-suitcase"></i> My Profile
							</a>
						</li>	
						<li class="nav-item">
                            <a href="lagent.php" class="nav-link ">
								<i class="fa fa-building"></i> All Members
							</a>
						</li>
				
						<li class="nav-item">
						    <a href="myProfile.php" class="nav-link active">
								<i class="fa fa-suitcase"></i> My Profile Edit
							</a>
						</li>					

						

					<!-- 	<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-pie-chart"></i> Charts
							</a>
						</li> -->

						<li class="nav-item">
							<a href="memberOld_history.php" class="nav-link ">
								<i class="fa fa-users"></i> Users
							</a>
						</li>					

						<li class="nav-item">
							<a href="controller/logout.php?landloader" class="nav-link">
								<i class="fa fa-sign-out"></i> Logout
							</a>
						</li>					
					</ul>
				</div><!-- /.dashboard-nav-primary -->

				<!-- /.dashboard-tags -->

				<div class="dashboard-text hidden-md-down">
					<h2>Do you need help?</h2>

					<p>
						If you have any questions, feel free to use our profile form. We will contact you as soon as possible.
					</p>
				</div><!-- /.dashboard-text -->
				
			</div><!-- /.dashboard-sidebar -->
                        
                        
                        
                        	<div class="dashboard-content">	
				<div class="container-fluid">
					<div class="dashboard-header">
						
                                                
                                            <div class="header-search" style="margin-top: 4px;">
                                                   
                                                    
							<form method="post" action="member_search_result.php">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-search"></i></span>
									<input type="text" placeholder="NID Search the site" name="nid_search" class="form-control">
								</div><!-- /.form-group -->
							</form>
                                                     <br>
                                                    
						</div>

						
					</div>
                                   
            