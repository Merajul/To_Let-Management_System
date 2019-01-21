<?php include './lsidebar.php';?>            

		<!-- /.dashboard-header -->

					<div class="dashboard-subheader">
						<h2>All Members</h2>		

						<!-- /.dashboard-subheader-actions -->
					</div><!-- /.dashboard-header -->

					<div class="row">
						
	<?php 
	 $awlwxrSElect = mysqli_query($db,"SELECT * FROM member_wishlist WHERE landloard_id='$landlond' && status='0' ORDER BY wishlist_id DESC");
      while($fetchData = mysqli_fetch_array($awlwxrSElect)){
      	$get_value = $fetchData['member_id'];
      	$SearchSelect = mysqli_query($db,"SELECT * FROM member_reg WHERE member_id='$get_value'");
      	$fetch_result= mysqli_fetch_array($SearchSelect);


	 ?>
	<div class="col-md-6 col-lg-4 col-xl-3">
			<div class="listing-box">
	<div class="listing-box-image" style="background-image: url('images/<?php echo $fetch_result['image'] ?>')">		
            <a href="member_details.php?Members=<?php echo $fetch_result['member_id'] ?>" class="listing-box-image-link">
		</a>		
	</div><!-- /.listing-box-image -->

	<div class="listing-box-title">
		<h2><a href=""><?php echo $fetch_result['name']; ?></a></h2>
		<h3><?php echo $fetch_result['mobile']; ?></h3>
	</div><!-- /.listing-box-title -->

	<div class="listing-box-content">
		<p>
			<?php echo $fetch_result['present_address']; ?><br>
			<a href="#"><i class="fa fa-at"></i>  <?php echo $fetch_result['email']; ?></a><br>
			<a href="#"><i class="fa fa-phone"></i> <?php echo $fetch_result['mobile']; ?></a>
		</p>
		<p><?php echo $fetch_result['parment_address']; ?></p>

		

		<ul class="listing-box-social">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		</ul><!-- /.listing-row-social -->			
	</div><!-- /.listing-box-cotntent -->
</div>
	</div><!-- /.col-* -->

	<?php } ?>



<div class="pagination-wrapper">
	<!-- <ul class="pagination">
		<li class="page-item disabled">
			<a class="page-link" href="#" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
				<span class="sr-only">Previous</span>
			</a>
		</li>

		<li class="page-item">
			<a class="page-link" href="#">1</a>
		</li>

		<li class="page-item"><a class="page-link" href="#">2</a></li>

		<li class="page-item active"><a class="page-link" href="#">3 <span class="sr-only">(current)</span></a></li>

		<li class="page-item"><a class="page-link" href="#">4</a></li>

		<li class="page-item"><a class="page-link" href="#">5</a></li>

		<li class="page-item">
			<a class="page-link" href="#" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
				<span class="sr-only">Next</span>
			</a>
		</li>
	</ul> -->
</div><!-- /.pagination-wrapper -->
					</div><!-- /.row -->	
				</div><!-- /.container -->						
			</div><!-- /.dashboard-content -->			
		</div><!-- /.dashboard -->
	</div><!-- /.page-wrapper -->

	<!-- /.customizer -->

<script src="http://maps.googleapis.com/maps/api/js" type="text/javascript"></script>

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery.ezmark.min.js"></script>
<script type="text/javascript" src="assets/js/tether.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/gmap3.min.js"></script>
<script type="text/javascript" src="assets/js/leaflet.js"></script>
<script type="text/javascript" src="assets/js/leaflet.markercluster.js"></script>
<script type="text/javascript" src="assets/libraries/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/libraries/chartist/chartist.min.js"></script>
<script type="text/javascript" src="assets/js/scrollPosStyler.js"></script>
<script type="text/javascript" src="assets/js/villareal.js"></script>

</body>

<!-- Mirrored from villareal-html.wearecodevision.com/dashboard-agents.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Aug 2018 04:16:29 GMT -->
</html>