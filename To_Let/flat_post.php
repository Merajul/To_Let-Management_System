<?php include './lsidebar.php'; ?>            


<div class="main-wrapper">
    <div class="main">
        <div class="main-inner">

            <div class="content-title">
                <div class="content-title-inner">
                    <div class="container">		
                        <h1>Flat Contain Information</h1>		

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
                        <div class="listing-detail col-lg-9 col-md-8">
                     
	<form method="post" action="./controller/system.php" enctype="multipart/form-data">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Flat Name</label>
                                    <input type="text" class="form-control" name="name" required="">
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <label for="">Mobile</label>
                                    <input type="number" class="form-control" name="mobile" required="">
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <label for=""> Drawing</label>
                                   <input type="radio" name="drawing" value="Yes" id="yes"> <label for="yes">Yes</label> <input type="radio" name="drawing" value="No" id="no"> <label for="no">No</label>
                                </div><!-- /.form-group -->
                              
                                 <div class="form-group">
                                    <label for=""> Dining</label>
                                   <input type="radio" name="dining" value="Yes" id="yesf"> <label for="yesf">Yes</label> <input type="radio" name="dining" value="No" id="nof"> <label for="nof">No</label>
                                </div><!-- /.form-group -->

                               <div class="form-group">
                                    <label for=""> Lift</label>
                                   <input type="radio" name="lift" value="Yes" id="lif1"> <label for="lif1">Yes</label> <input type="radio" name="lift" value="No" id="lif2"> <label for="lif2">No</label>
                                </div><!-- /.form-group -->

                               <div class="form-group">
                                    <label for=""> Gas</label>
                                   <input type="radio" name="gas" value="Yes" id="gas"> <label for="gas">Yes</label> <input type="radio" name="gas" value="No" id="gas1"> <label for="gas1">No</label>
                                </div><!-- /.form-group -->
                              
                               <div class="form-group">
                                    <label for=""> Generator</label>
                                   <input type="radio" name="generator" value="Yes" id="generas"> <label for="generas">Yes</label> <input type="radio" name="generator" value="No" id="generatort"> <label for="generatort">No</label>
                                </div><!-- /.form-group -->
                                 <div class="form-group">
                                    <label for="price"> Price</label>
                                   <input type="text" name="price" id="price" class="form-control">
                                </div><!-- /.form-group -->
                              
                               
                                <div class="form-group">
                                    <label for="fim">Image</label>
                                   <input type="file" name="image" id="fim">
                                </div><!-- /.form-group -->
                                <input type="hidden" name="londland_id" value="<?php echo $fetch_profile['reg_id']; ?>">


                            </div>

                            <div class="col-lg-12">
                                

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-left" name="Flat_submit">Update</button>
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

                       




