<?php include './mheader.php'; ?>            
<div class="main-wrapper">
    <div class="main">
        <div class="main-inner">

            <div class="content-title">
                <div class="content-title-inner">
                    <div class="container">		
                        <h1>My Profile</h1>		

                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="properties.html">Properties</a></li>
                            <li class="active">Standard Detail</li>
                        </ol>			
                    </div><!-- /.container -->
                </div><!-- /.content-title-inner -->
            </div><!-- /.content-title -->


            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="listing-detail col-md-8 col-lg-9">
                            <div class="listing-user">
                                <div class="listing-user-image">
                                    <a href="#" style="background-image: url('images/<?php echo $fetch_member['image']; ?>');"></a>
                                </div><!-- /.listing-user-image -->

                                <div class="listing-user-title">
                                    <h2><?php echo $fetch_member['name']; ?> </h2>
                                    <!-- <h3><?php echo $fetch_member['email']; ?></h3> -->
                                </div><!-- /.listing-user-title -->

                                <div class="listing-user-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-foursquare"></i></a></li>
                                    </ul><!-- /.listing-row-social -->				
                                </div><!-- /.listing-user-social -->
                            </div><!-- /.listing-user -->

                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="overview">
                                        <h2>Information</h2>

                                        <ul>
                                            <li><strong>Name</strong><span><?php echo $fetch_member['name']; ?></span></li>
                                            <li><strong>Phone</strong><span><?php echo $fetch_member['mobile']; ?></span></li>
                                            <li><strong>E-mail</strong><span><?php echo $fetch_member['email']; ?></span></li>			                
                                            <li><strong>Nid</strong><span><?php echo $fetch_member['nid']; ?></span></li>
                                            <li><strong>Police Clearence</strong><span><?php echo $fetch_member['police_clearence']; ?></span></li>
                                            <li><strong>Present Address</strong><span><?php echo $fetch_member['present_address']; ?> </span></li>  
                                            <li><strong>Parment Address</strong><span><?php echo $fetch_member['parment_address']; ?> </span></li>  
                                            <li><strong>Status</strong><span> Best </span></li>  
                                            <?php
                                             $select_land = mysqli_query($db, "SELECT * FROM member_wishlist WHERE  member_id='$member' && status='1' ORDER BY wishlist_id DESC");
                                             $fetch_landload_name = mysqli_fetch_array($select_land);
                                             
                                             $selectMir = mysqli_query($db, "SELECT * FROM landload_reg WHERE  reg_id='$member'");
                                             $fetch_name= mysqli_fetch_array($selectMir);
                                            ?>
                                            <li><strong>Landlord Name</strong><span><a href="single_landload.php?LandloadInfo=<?php echo $fetch_landload_name['landloard_id'];?>"><?php echo $fetch_name['name'];?></a> </span></li>  

                                        </ul>
                                    </div><!-- /.overview -->				
                                </div><!-- col-* -->

                                <div class="col-md-4 col-lg-4">
                                    <h2>BIO</h2>

                                    <p>
                                        <?php echo $fetch_member['present_address']; ?> 
                                    </p>
                                    <p>
                                        <?php echo $fetch_member['parment_address']; ?> 

                                    </p>
                                </div><!-- /.col-* -->
                            </div><!-- /.row -->





                            <!-- /.listing-contact-form -->


                            <!-- /.listing-box-wrapper -->

                            <!-- /.pagination-wrapper -->	
                        </div><!-- /.col-* -->

                        <div class="col-md-4 col-lg-3">
                            <div class="widget">
                                <h3 class="widgettitle">Properties</h3>


                                <!-- /.listing-small -->

                                <!-- /.listing-small -->

                                <div class="listing-small">
                                    <div class="listing-small-inner">
                                        <!-- /.listing-small-image -->

                                        <button onclick="myFunction()">Print this page</button>

                                        <script>
                                            function myFunction() {
                                                window.print();
                                            }
                                        </script>

                                        <!-- /.listing-small-content -->
                                    </div><!-- /.listing-small-inner -->
                                </div><!-- /.listing-small -->

                            </div><!-- /.widget -->					





