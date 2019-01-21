<?php include './mheader.php'; ?>            


<div class="main-wrapper">
    <div class="main">
        <div class="main-inner">

            <div class="content-title">
                <div class="content-title-inner">
                    <div class="container">		
                        <h1>My Profile Update </h1>		

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
                     
	<form method="post" action="./controller/system.php" enctype="multipart/form-data">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $fetch_member['name'] ?>" required="">
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <label for="">email</label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $fetch_member['email'] ?>" required="">
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <label for=""> Mobile</label>
                                    <input type="text" class="form-control" name="mobile" value="<?php echo $fetch_member['mobile'] ?>" required="">
                                </div><!-- /.form-group -->
                               
                                
                               
                               

                            </div>

                            <div class="col-lg-12">
                                
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" class="form-control" name="password" value="<?php echo $fetch_member['password'] ?>">
                                </div><!-- /.form-group -->
                                <input type="hidden" name="landload_id" value="<?php echo $fetch_member['member_id']; ?>">
                               
                                <div class="form-group">
                                    <label>Picture</label>
                                    <input type="file" class="form-control" name="image" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-left" name="member_UpdateProfile">Update</button>
                                </div>


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

                       




