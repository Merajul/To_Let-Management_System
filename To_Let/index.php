<?php include './header.php'; ?>

<div class="main-wrapper">
    <div class="main">
        <div class="main-inner">


            <div class="content">
                <div class="map-google-wrapper pull-top">
                    <div id="map-google"></div>	
                    <div class="map-filter-wrapper">

                        <br>
                        <br>
                        <form action="./controller/login_checking.php" method="post">
                            <div class="map-filter filter">

                                <br>
                                <div class="form-group">
                                    <label>Login Catagory</label>

                                    <select class="form-control" name="who_login" required>
                                        <option value="Landloard">Landloard</option>
                                        <option value="Member">Member</option>

                                    </select>
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="userEmail" required>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div><!-- /.form-group -->
                                <!-- <div class="form-group-bottom-link">
                                    <a href="reset-password.html">I forgot my password <i class="fa fa-long-arrow-right"></i></a>
                                </div> --><!-- /.form-group-bottom-link -->

                                <div class="form-group-btn">
                                   <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div><!-- /.form-group -->	
                        </div><!-- /.filter -->

                        <br>
                        <br>





                    </div><!-- /.filter-wrapper -->

                </div><!-- /.map-google-wrapper -->




                <!-- /.information-bar -->

                <div class="container">
                    <!-- /.page-header -->

                    <!-- /.row -->

                    <!-- /.row -->



                    <div class="push-bottom">
                        <div class="page-header">
                            <h1>Popular Property Categories</h1>

                            <p>
                                 Best property categories.
                            </p>
                        </div><!-- /.page-header -->

                        <div class="categories">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="category" style="background-image: url('assets/img/tmp/tmp-6.jpg');">
                                                <a href="properties.html" class="category-link">
                                                    <span class="category-content">
                                                        <span class="category-title">Villas</span>
                                                        <span class="category-subtitle">30 submissions in directory</span>
                                                        <span class="btn btn-primary">View List</span>
                                                    </span><!-- /.category-content -->
                                                </a>
                                            </div><!-- /.category -->
                                        </div><!-- /.col-* -->

                                        <div class="col-sm-6">
                                            <div class="category">
                                                <a href="properties.html" class="category-link">
                                                    <span class="category-content">
                                                        <span class="category-title">Houses</span>
                                                        <span class="category-subtitle">98 submissions in directory</span>
                                                        <span class="btn btn-primary">View List</span>
                                                    </span><!-- /.category-content -->
                                                </a>
                                            </div><!-- /.category -->
                                        </div><!-- /.col-* -->
                                    </div><!-- /.row -->

                                    <div class="category" style="background-image: url('assets/img/tmp/tmp-13.jpg');">
                                        <a href="properties.html" class="category-link">
                                            <span class="category-content">
                                                <span class="category-title">Condos</span>
                                                <span class="category-subtitle">312 submissions in directory</span>
                                                <span class="btn btn-primary">View List</span>
                                            </span><!-- /.category-content -->
                                        </a>
                                    </div><!-- /.category -->
                                </div><!-- /.col-* -->

                                <div class="col-lg-4">
                                    <div class="category category-vertical" style="background-image: url('assets/img/tmp/tmp-7.jpg');">
                                        <a href="properties.html" class="category-link">
                                            <span class="category-content">
                                                <span class="category-title">Apartments</span>
                                                <span class="category-subtitle">213 submissions in directory</span>
                                                <span class="btn btn-primary">View List</span>
                                            </span><!-- /.category-content -->
                                        </a>
                                    </div><!-- /.category -->
                                </div><!-- /.col-* -->
                            </div><!-- /.row -->
                        </div><!-- /.categories -->
                    </div>
                </div><!-- /.container -->

                <div class="image-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="image-description-wrapper col-md-12 col-lg-7">			
                                <div class="image-description">
                                    <h2>Real Estate</h2>

                                    <p>
                                        Villareal is advanced real estate application kit.
                                    </p>

                                    <a href="blog.html" class="btn btn-primary">View</a>
                                </div><!-- /.image-description -->
                            </div><!-- /.col-* -->			
                        </div><!-- /.row -->		
                    </div><!-- /.container -->		

                    <div class="image-holder col-lg-5 col-lg-offset-7 hidden-md-down">
                    </div><!-- /.col-* -->
                </div><!-- /.image-wrapper -->

                <!-- /.container -->
            </div><!-- /.content -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->
</div><!-- /.main-wrapper -->

<?php
include './footer.php';
?>