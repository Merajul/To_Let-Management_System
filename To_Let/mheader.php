<!DOCTYPE html>
<html>
    <?php
    session_start();
    ob_start();
    if (!isset($_SESSION['Member'])) {
        header("index.php");
    }
    @$member = $_SESSION['Member'];
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

                    <button class="navbar-toggler pull-xs-right hidden-lg-up" type="button" data-toggle="collapse" data-target=".dashboard-nav-primary">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>						
                </div><!-- /.dashboard-title -->
                <?php
                $fetch_member = member_info($db, $member);
                ?>

                <div class="dashboard-user hidden-md-down">
                    <div class="dashboard-user-image" style="background-image: url('images/<?php echo $fetch_member['image']; ?>');">
                    </div><!-- /.dashboar-user-image -->
                    <strong><?php echo $fetch_member['name']; ?></strong>
                </div><!-- /.dashboard-user -->

                <div class="dashboard-nav-primary collapse navbar-toggleable-md">
                    <ul class="nav nav-stacked">
                        <li class="nav-item">
                            <a href="memberpage.php" class="nav-link ">
                                <i class="fa fa-building"></i> My profile
                            </a>
                        </li>

<!--                        <li class="nav-item">
                            <a href="member_view_landlond.php" class="nav-link active">
                                <i class="fa fa-suitcase"></i> Landload view
                            </a>
                        </li>					-->

                         <li class="nav-item">
                                <a href="memberProfile_edit.php" class="nav-link ">
                                        <i class="fa fa-users"></i>Edit Profile
                                </a>
                        </li>					
                        
                        <li class="nav-item">
                            <a href="controller/logout.php?Member" class="nav-link">
                                <i class="fa fa-sign-out"></i> Logout
                            </a>
                        </li>					
                    </ul>
                </div><!-- /.dashboard-nav-primary -->

                <div class="dashboard-tags hidden-md-down">
                    <h2>Tags</h2>

                    <ul>
                        <li><a href="#" class="tag-red">Most Recent</a></li>
                        <li><a href="#" class="tag-green">Properties For Review</a></li>
                        <li><a href="#" class="tag-blue">Open Houses</a></li>
                        <li><a href="#" class="tag-yellow">Pricing Plans</a></li>
                        <li><a href="#">Interesting Reviews</a></li>
                    </ul>
                </div><!-- /.dashboard-tags -->

                <div class="dashboard-text hidden-md-down">
                    <h2>Do you need help?</h2>

                    <p>
                        If you have any questions, feel free to use our profile form. We will contact you as soon as possible.
                    </p>
                </div><!-- /.dashboard-text -->

            </div><!-- /.dashboard-sidebar -->



            <div class="dashboard-content">	
                <div class="container-fluid">
                    <!--					<div class="dashboard-header">
                                                                    <h1>Agents</h1>
                                                                    
                                                                     <div class="header-search">
                                                                         <br>
                                                                            <form method="get" action="">
                                                                                    <div class="input-group">
                                                                                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                                                                            <input type="text" placeholder="NID Search the site" class="form-control">
                                                                                    </div> /.form-group 
                                                                            </form>
                                                                    </div>
                    
                                                                    
                                                            </div>-->

