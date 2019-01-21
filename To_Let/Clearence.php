<?php include './lsidebar.php'; ?>            


<div class="main-wrapper">
    <div class="main">
        <div class="main-inner">

            <div class="content-title">
                <div class="content-title-inner">
                    <div class="container">		
                        <h1>Member Detail Page</h1>		
                        <?php 
                        $memberId= $_GET['details'];
                        $fetch_profile = member_info($db,$memberId);

                         ?>

                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php">Properties</a></li>
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
                                    <a href="#" style="background-image: url('images/<?php echo $fetch_profile['image']; ?>');"></a>
                                </div><!-- /.listing-user-image -->

                                <div class="listing-user-title">
                                    <h2><?php echo $fetch_profile['name']; ?></h2>
                                    <h3>Pvt Job</h3>
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
                                            <li><strong>Name</strong><span><?php echo $fetch_profile['name'] ?></span></li>
                                            <li><strong>Phone</strong><span><?php echo $fetch_profile['mobile'] ?></span></li>
                                            <li><strong>E-mail</strong><span><?php echo $fetch_profile['email'] ?></span></li>                          
                                                                     
                                            <li><strong>Nid</strong><span><?php echo $fetch_profile['nid'] ?></span></li>
                                            <li><strong>Police Clearence</strong><span><?php echo $fetch_profile['police_clearence'] ?></span></li>
                                            <li><strong> Details</strong><span><?php echo $fetch_profile['present_address'] ?></span></li>
                  
                                                        
                                        </ul>

                                        
                                        
                                    </div><!-- /.overview -->				
                                </div><!-- col-* -->

                                <div class="col-lg-4">
                                    <h2>House Details</h2>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel sem ut magna posuere tincidunt non ut magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel sem ut magna posuere tincidunt non ut magna. 
                                    </p>
                                </div><!-- /.col-* -->
                            </div><!-- /.row -->
                             <form method="post" action="./controller/system.php">
                            <div class="filter filter-primary checkbox-light">
                               
                                    <div class="row">
                                        <!-- /.col-* -->

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> End Date</label>
                                                <input type="date" class="form-control" name="end_time">
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-* -->

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label> Remark</label>
                                                <input type="text" class="form-control" name="remark">
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-* -->
                                        <input type="hidden" name="memberId" value="<?php echo $memberId; ?>">

                                        <!-- /.col-* -->

                                        <!-- /.col-* -->			
                                    </div><!-- /.row -->
                                    <div class="row filter-options">
                                        <!-- /.row -->

                                        <div class="col-sm-12">
                                            <div class="filter-sort">
                                                <strong>Order By</strong>

                                                <div class="checkbox-inline">
                                                    <label><input type="radio" name="order" value="40" checked="checked">40%</label>
                                                </div><!-- /.checkbox -->

                                                <div class="checkbox-inline">
                                                    <label><input type="radio" name="order" value="60"> 60%</label>
                                                </div>
                                                <div class="checkbox-inline">
                                                    <label><input type="radio" name="order" value="80"> 80%</label>
                                                </div>
                                                <div class="checkbox-inline">
                                                    <label><input type="radio" name="order" value="100"> 100 %</label>
                                                </div>
                                                <!-- /.checkbox -->
                                            </div><!-- /.filter-order -->				
                                        </div><!-- /.col-* -->
                                    </div><!-- /.row -->
                                
                            </div>

                          
                   
                            <div class="center">
                                <br>
                                <button class="btn btn-primary pull-left" name="Clearance_submit"> Clearance </button>
                            </div>

                            </form>
                            <!-- /.listing-contact-form -->


                            <!-- /.listing-box-wrapper -->

                            <!-- /.pagination-wrapper -->	
                        </div><!-- /.col-* -->

                        <div class="col-md-4 col-lg-3">
                            <div class="widget">
                                <h3 class="widgettitle"></h3>


                                <div class="listing-small">
                                    <div class="listing-small-inner">
                                        <div class="listing-small-image">
                                            <a href="#" style="background-image: url('assets/img/tmp/tmp-5.jpg');">
                                            </a>
                                        </div><!-- /.listing-small-image -->

                                        <div class="listing-small-content">
                                            <h3><a href="#">Bright Island Route</a></h3>
                                            <h4>$ 40.000</h4>
                                        </div><!-- /.listing-small-content -->
                                    </div><!-- /.listing-small-inner -->
                                </div><!-- /.listing-small -->

                                <div class="listing-small">
                                    <div class="listing-small-inner">
                                        <div class="listing-small-image">
                                            <a href="#" style="background-image: url('assets/img/tmp/tmp-4.jpg');">
                                            </a>
                                        </div><!-- /.listing-small-image -->

                                        <div class="listing-small-content">
                                            <h3><a href="#">Misty Valley</a></h3>
                                            <h4>$ 27.000</h4>
                                        </div><!-- /.listing-small-content -->
                                    </div><!-- /.listing-small-inner -->
                                </div><!-- /.listing-small -->

                                <div class="listing-small">
                                    <div class="listing-small-inner">
                                        <div class="listing-small-image">
                                            <a href="#" style="background-image: url('assets/img/tmp/tmp-11.jpg');">
                                            </a>
                                        </div><!-- /.listing-small-image -->

                                        <div class="listing-small-content">
                                            <h3><a href="#">Foggy Anchor Campus</a></h3>
                                            <h4>$ 840.000</h4>
                                        </div><!-- /.listing-small-content -->
                                    </div><!-- /.listing-small-inner -->
                                </div><!-- /.listing-small -->

                            </div><!-- /.widget -->					





