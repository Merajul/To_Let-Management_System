<?php include './lsidebar.php'; ?>            


<div class="main-wrapper">
    <div class="main">
        <div class="main-inner">
            <?php
            @$MemberValue = $_GET['Members'];
            $memberProfile = member_info($db, $MemberValue);
            ?>
            <div class="content-title">
                <div class="content-title-inner">
                    <div class="container">		
                        <h1>Member Detail Page</h1>		

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
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
                                    <a href="#" style="background-image: url('images/<?php echo $memberProfile['image']; ?>');"></a>
                                </div><!-- /.listing-user-image -->

                                <div class="listing-user-title">
                                    <h2><?php echo $memberProfile['name']; ?> </h2>
                                    <span><?php echo $memberProfile['name']; ?></span>
                     <!-- <h3><?php echo $memberProfile['email']; ?></h3> -->
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
                                            <li><strong>Name</strong><span><?php echo $memberProfile['name']; ?></span></li>
                                            <li><strong>Phone</strong><span><?php echo $memberProfile['mobile']; ?></span></li>
                                            <li><strong>E-mail</strong><span><?php echo $memberProfile['email']; ?></span></li>                          
                                            <li><strong>Nid</strong><span><?php echo $memberProfile['nid']; ?></span></li>
                                            <li><strong>Police Clearence</strong><span><?php echo $memberProfile['police_clearence']; ?></span></li>
                                            <li><strong>Present Address</strong><span><?php echo $memberProfile['present_address']; ?> </span></li>  
                                            <li><strong>Parment Address</strong><span><?php echo $memberProfile['parment_address']; ?> </span></li>  
                                             </ul>
                                    </div><!-- /.overview -->               
                                </div><!-- col-* -->

                                <div class="col-lg-4">
                                    <h2>BIO</h2>

                                    <p>
                                        <?php echo $memberProfile['present_address']; ?> 
                                    </p>
                                    <p>
                                        <?php echo $memberProfile['parment_address']; ?> 

                                    </p>
                                </div><!-- /.col-* -->
                            </div><!-- /.row -->

                            <div class="filter filter-primary checkbox-light">
                                <table class="table table-bordered" style="color: #fff;">
                                    <tr>
                                        <th>Landload name</th>
                                        <th>Start date</th>
                                        <th>End date</th>
                                        <th>Status</th>
                                        <th>Remark</th>
                                    </tr>
                                    <?php
                                    $select_landload = mysqli_query($db,"SELECT * FROM member_wishlist WHERE member_id='$MemberValue'");
                                    while($fetch_landload =  mysqli_fetch_array($select_landload)){
                                        $member_id = $fetch_landload['member_id'];
                                        $landload_id = $fetch_landload['landloard_id'];
//                                        
                                        $selectLandload = mysqli_query($db,"SELECT * FROM landload_reg WHERE reg_id='$landload_id'");
                                        $fetch_landinfo = mysqli_fetch_array($selectLandload);
                                        
                                        
                                    ?>
                                    
                                    <tr>
                                        <td><a style="color:#fff;" href="single_landload.php?LandloadInfo=<?php echo $fetch_landload['landloard_id'];?>" ><?php echo $fetch_landinfo['name'];?></a></td>
                                        <td><?php echo $fetch_landload['accept_date'];?></td>
                                        <td><?php echo $fetch_landload['clearance_date'];?></td>
                                        <td><?php echo $fetch_landload['remark'];?></td>
                                        <td><?php echo $fetch_landload['clearance'];?></td>
                                      
                                    </tr>
                                    
                                    <?php }?>
                                    
                                </table>


                            </div>
                            <br>

                            <form method="post" action="./controller/system.php">
                                <div class="filter filter-primary checkbox-light">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Certificate</label>

                                                <select class="form-control" name="certificate">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-* -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Police Clearence No</label>
                                                <input type="text" class="form-control" name="police_clearance">
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-* -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Start Date</label>
                                                <input type="date" class="form-control" placeholder="D-M-Y" name="accept_date">
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-* -->
                                        <input type="hidden" value="<?php echo $MemberValue; ?>" name="member_id">

                                        <!-- /.col-* -->

                                        <!-- /.col-* -->			
                                    </div><!-- /.row -->
                                    <!-- /.row -->

                                </div>



                                <div class="pull-left">
                                    <br>
                                    <button type="submit" name="wishlist_member" class="btn btn-primary">Add My House</button>
                                </div>

                            </form>

                            <!-- /.listing-contact-form -->


                            <!-- /.listing-box-wrapper -->

                            <!-- /.pagination-wrapper -->	
                        </div><!-- /.col-* -->

                        <div class="col-md-4 col-lg-3">
                            <div class="widget">
                                <h3 class="widgettitle">Recent Properties</h3>


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

                            <button onclick="myFunction()">Print this page</button>

                            <script>
                                function myFunction() {
                                    window.print();
                                }
                            </script>





