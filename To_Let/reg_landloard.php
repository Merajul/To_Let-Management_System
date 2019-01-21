<?php include './header.php';?>
	    
   <div class="main-wrapper">
    <div class="main">
        <div class="main-inner">

            <div class="content-title">
                <div class="content-title-inner">
                    <div class="container">		
                        <h1>Registration Landlord Page</h1>		

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
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="name" required="">
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <label for="">email</label>
                                    <input type="text" class="form-control" name="email" required="">
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <label for=""> Mobile</label>
                                    <input type="text" class="form-control" name="mobile" required="">
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label>Country</label>
                                    <select class="form-control" name="country" required="">
                                        <option value=""></option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="India">India</option>
                                        <option value="Pakistan">Pakistan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>District</label>
                                    <select class="form-control" name="district">
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
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" name="address" required>
                                </div>
                                <div class="form-group">
                                    <label for="">House NO</label>
                                    <input type="text" class="form-control" name="house_no" required>
                                </div>
                               

                            </div>

                            <div class="col-lg-4">
                                 <div class="form-group">
                                    <label for="">Road No</label>
                                    <input type="text" class="form-control" name="road_no">
                                </div>
                                <div class="form-group">
                                    <label for="">Home Vat ID</label>
                                    <input type="text" class="form-control" name="home_vat_id">
                                </div>

                                <div class="form-group">
                                    <label for="">NID</label>
                                    <input type="text" class="form-control" name="nid" required>
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <label for="">Police Clearence</label>
                                    <input type="text" class="form-control" name="police_clearnce">
                                </div><!-- /.form-group -->

                               
                               
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" class="form-control" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Conform Password</label>
                                    <input type="text" class="form-control" name="con_password" required>
                                </div>
                                 <div class="form-group">
                                    <label>Picture</label>
                                    <input type="file" class="form-control" name="image" required>
                                </div><!-- /.form-group -->
                                 <div class="form-group">
                                    <label for="">Terms and condation</label>
                                    <input type="checkbox" class="" required="">
                                </div>


                          
                                  

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-left" name="Landlord_registration">Sign up</button>
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
            </div><!-- /.content -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->
</div><!-- /.main-wrapper -->

   <?php include './footer.php';?>