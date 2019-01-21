<?php include './header.php'; ?>

<div class="main-wrapper">
    <div class="main">
        <div class="main-inner">

            <div class="content-title">
                <div class="content-title-inner">
                    <div class="container">		
                        <h1>Login Member Page</h1>		

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
                     <form method="post" action="./controller/system.php" enctype="multipart/form-data">
                        <div class="col-lg-8">
                            <div class="content">	               
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" required>
                                        </div><!-- /.form-group -->
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" required>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div><!-- /.form-group -->
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Conform Password</label>
                                            <input type="password" class="form-control" name="con_password" required>
                                        </div><!-- /.form-group -->
                                    </div>

                                    

                                  
                                </div><!-- /.row -->

                                <div class="page-header page-header-small">
                                    <h3>Location</h3>
                                </div><!-- /.page-header -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control" name="country" required>
                                                <option value=""></option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="India">India</option>
                                                <option value="Pakistan">Pakistan</option>
                                            </select>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-* -->

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>District</label>
                                            <select class="form-control" name="district" required>
                                                <option value=""></option>
                                                <option value="Barguna">Barguna</option>
                                                <option value="Barisal">Barisal</option>
                                                <option value="Bhola">Bhola</option>
                                                <option value="Jhalokati">Jhalokati</option>
                                                <option value="Patuakhali">Patuakhali</option>
                                                <option value="Pirojpur">Pirojpur</option>
                                                <option value="Bandarban">Bandarban</option>
                                                <option value="Brahmanbaria">Brahmanbaria</option>
                                                <option value="Chandpur">Chandpur</option>
                                                <option value="Chittagong">Chittagong</option>
                                                <option value="Comilla">Comilla</option>
                                            </select>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-* -->

                                    
                                </div><!-- /.row -->

                               <!--  <div class="page-header page-header-small">
                                    <h3>Contact Information</h3>
                                </div> -->

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Nid</label>
                                            <input type="text" class="form-control" name="nid" required>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-* -->

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Police Clearence</label>
                                            <input type="text" class="form-control" name="police_clearnce">
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-* -->

                                    

                                   <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input type="text" class="form-control" name="mobile" required>
                                        </div><!-- /.form-group -->
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Present Address</label>
                                            <textarea class="form-control" name="present_address" required></textarea>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-* --> 
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Permanent  Address</label>
                                            <textarea class="form-control" name="permanent_address"></textarea>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-* -->

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Picture</label>
                                            <input type="file" class="form-control" name="image" required>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-* -->
                                </div>

                                <div class="center">
                              
                                    <button class="btn btn-primary" name="Member_registration">Submit</button>
                                </div><!-- /.center -->
                            </div>
                        </div>
                         
                    </form>




                                <div class="col-lg-4">


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
                                                    <a href="#" style="background-image: url('assets/img/tmp/tmp-5.jpg');">
                                                    </a>
                                                </div><!-- /.listing-small-image -->

                                                <div class="listing-small-content">
                                                    <h3><a href="#">Bright Island Route</a></h3>
                                                    <h4>$ 40.000</h4>
                                                </div><!-- /.listing-small-content -->
                                            </div><!-- /.listing-small-inner -->
                                        </div>

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
                                        </div>

                                    </div>

                                </div>










                                <!-- /.col-* -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>



                    <!-- /.content -->
                </div><!-- /.main-inner -->
            </div><!-- /.main -->
        </div><!-- /.main-wrapper -->

        <?php include './footer.php'; ?>