<?php 
 include_once'db_config.php';
 session_start();

 if(isset($_POST['Landlord_registration'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $country = $_POST['country'];
  $district = $_POST['district'];
  $address = $_POST['address'];
  $house_no = $_POST['house_no'];
  $road_no = $_POST['road_no'];
  $home_vat_id = $_POST['home_vat_id'];
  $nid = $_POST['nid'];
  $police_clearnce = $_POST['police_clearnce'];
  $password = $_POST['password'];
  $con_password = $_POST['con_password'];

    if (!$_FILES['image']['error']) {
      $pic = time().$_FILES['image']['name'];
      $dir = "../images";
      $image = "$dir/$pic";
      copy($_FILES['image']['tmp_name'], $image);
      }

  $awlwxrSElect = mysqli_query($db,"SELECT * FROM landload_reg WHERE name='$name' && email='$email' && mobile='$mobile'");
  $counting = mysqli_num_rows($awlwxrSElect);
    if($counting!=0){
      ?>
      <script>alert("Already Exit !"); window.location.replace('../reg_landloard.php');</script>
  <?php }else{


  $Landlord_registration = mysqli_query($db,"INSERT INTO landload_reg (name,email,mobile,address,house_no,road_no,home_vat_id,nid,police_clearence,password,country,district,image,status) VALUES ('$name', '$email', '$mobile', '$address', '$house_no', '$road_no', '$home_vat_id', '$nid', '$police_clearnce', '$password', '$country', '$district','$image', '1')");


  if($Landlord_registration){ ?>
      <script>alert("Registration Successfully !"); window.location.replace('../reg_landloard.php');</script>
  <?php }else{ ?>
    <script>alert("Registration Fails !"); window.location.replace('../reg_landloard.php');</script>
 <?php  }
  }//end else


 }

// land loader update 
 if(isset($_POST['Landlord_UpdateProfile'])){
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$mobile = $_POST['mobile'];
 	$address = $_POST['address'];
 	$house_no = $_POST['house_no'];
 	$road_no = $_POST['road_no'];
 	$home_vat_id = $_POST['home_vat_id'];
 	$nid = $_POST['nid'];
 	$police_clearnce = $_POST['police_clearnce'];
  $password = $_POST['password'];
 	$landload_id = $_POST['landload_id'];

    if (!$_FILES['image']['error']) {
      $pic = time().$_FILES['image']['name'];
      $dir = "../images";
      $image = "$dir/$pic";
      copy($_FILES['image']['tmp_name'], $image);
      }

 	$Landlord_update = mysqli_query($db,"UPDATE landload_reg SET name='$name',email='$email',mobile='$mobile',address='$address',house_no='$house_no',road_no='$road_no',home_vat_id='$home_vat_id',nid='$nid',police_clearence='$police_clearnce',password='$password',image='$image' WHERE reg_id ='$landload_id'");

  if($Landlord_update){ ?>
      <script>alert("Update Successfully !"); window.location.replace('../landloarddetails.php');</script>
  <?php }else{ ?>
    <script>alert("Update Fails !"); window.location.replace('../landloarddetails.php');</script>
 <?php  }


	}//end if



	


/// member registration  
if(isset($_POST['Member_registration'])){
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$mobile = $_POST['mobile'];
 	$country = $_POST['country'];
 	$district = $_POST['district'];
 	$present_address = $_POST['present_address'];
 	$permanent_address = $_POST['permanent_address'];
 	$nid = $_POST['nid'];
 	$police_clearnce = $_POST['police_clearnce'];
 	$password = $_POST['password'];
 	$con_password = $_POST['con_password'];


	if (!$_FILES['image']['error']) {
      $pic = time().$_FILES['image']['name'];
      $dir = "../images";
      $image = "$dir/$pic";
      copy($_FILES['image']['tmp_name'], $image);
      }
		

 	$awlwxrSElect = mysqli_query($db,"SELECT * FROM member_reg WHERE name='$name' && email='$email' && mobile='$mobile'");
 	$counting = mysqli_num_rows($awlwxrSElect);
    if($counting!=0){
    	?>
 			<script>alert("Already Exit !"); window.location.replace('../reg_landloard.php');</script>
 	<?php }else{


 	$Landlord_registration = mysqli_query($db,"INSERT INTO member_reg (name,mobile,email,password,nid,police_clearence,country,district,present_address,parment_address,image,status) VALUES ('$name', '$mobile', '$email', '$password', '$nid', '$police_clearnce', '$country', '$district', '$present_address', '$permanent_address', '$image', '1')");


 	if($Landlord_registration){ ?>
 			<script>alert("Registration Successfully !"); window.location.replace('../reg_member.php');</script>
 	<?php }else{ ?>
 		<script>alert("Registration Fails !"); window.location.replace('../reg_member.php');</script>
 <?php	}
	}//end else


 }
	
 
 
 // member update profile 
 
 
 if(isset($_POST['member_UpdateProfile'])){
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$mobile = $_POST['mobile'];
 	$password = $_POST['password'];
 	

 	$landload_id = $_POST['landload_id'];

    if (!$_FILES['image']['error']) {
      $pic = time().$_FILES['image']['name'];
      $dir = "../images";
      $image = "$dir/$pic";
      copy($_FILES['image']['tmp_name'], $image);
      }

 	$Landlord_update = mysqli_query($db,"UPDATE member_reg SET name='$name',email='$email',mobile='$mobile',password='$password',image='$image' WHERE member_id ='$landload_id'");

  if($Landlord_update){ ?>
      <script>alert("Update Successfully !"); window.location.replace('../memberpage.php');</script>
  <?php }else{ ?>
    <script>alert("Update Fails !"); window.location.replace('../memberpage.php');</script>
 <?php  }


	}//end if

//member profile update end 
 
 
 
 
 
 
 
 
 


// Member wish list  addd 
 if(isset($_POST['wishlist_member'])){
    $member_id = $_POST['member_id'];
   $londland_id = $_SESSION['landloader'];
   $accept_date = $_POST['accept_date'];
   $police_clearance = $_POST['police_clearance'];
   $certificate = $_POST['certificate'];
 
    $memberClearance_check = mysqli_query($db,"SELECT * FROM member_wishlist WHERE member_id='$member_id' && clearance_checking='0' ORDER BY wishlist_id DESC");
      $clearance_counting = mysqli_num_rows($memberClearance_check);
      
      if($clearance_counting !=0){ ?>
           <script>alert("Sorry Clearance Flails !"); window.location.replace('../landloarddetails.php');</script>
    <?php  }else{
       

      $awlwxrSElect = mysqli_query($db,"SELECT * FROM member_wishlist WHERE member_id='$member_id' && landloard_id='$londland_id'");
      $counting = mysqli_num_rows($awlwxrSElect);
        if($counting!=0){
      ?>
      <script>alert("Already Exit !"); window.location.replace('../landloarddetails.php');</script>
  <?php }else{

    $memberInsert = mysqli_query($db,"INSERT INTO member_wishlist (member_id,landloard_id,accept_date,certificate,police_clearance_no,status) VALUES ('$member_id','$londland_id','$accept_date','$certificate','$police_clearance','1')");
    $policeClearance = mysqli_query($db,"UPDATE member_reg SET police_clearence='$police_clearance' WHERE member_id='$member_id'");

      if($memberInsert && $policeClearance){ ?>
      <script>alert("Welcome to my home !"); window.location.replace('../landloarddetails.php');</script>
  <?php }else{ ?>
    <script>alert("Fails !"); window.location.replace('../landloarddetails.php');</script>
 <?php  }
 }

}//end else for clearance
}

// Member remove wish list  update 
 if(isset($_GET['wishlist_remove_member'])){
    $member_id = $_GET['wishlist_remove_member'];
   $londland_id = $_SESSION['landloader'];
   $accept_date = date('Y-m-d');


    $memberInsert = mysqli_query($db,"UPDATE member_wishlist SET status='0' WHERE member_id='$member_id' && landloard_id='$londland_id'");

      if($memberInsert){ ?>
      <script>alert("Remove wish list !"); window.location.replace('../landloarddetails.php');</script>
  <?php }else{ ?>
    <script>alert("Fails !"); window.location.replace('../landloarddetails.php');</script>
 <?php  }


}





// flat post insert 
 if(isset($_POST['Flat_submit'])){
  $name=$_POST['name'];
  $drawing=$_POST['drawing'];
  $dining=$_POST['dining'];
  $lift=$_POST['lift'];
  $gas=$_POST['gas'];
  $generator=$_POST['generator'];
 
   $accept_date = date('Y-m-d');
    $mobile=$_POST['mobile'];
    $londland_id=$_POST['londland_id'];
    $price=$_POST['price'];


  if (!$_FILES['image']['error']) {
      $pic = time().$_FILES['image']['name'];
      $dir = "../images";
      $image = "$dir/$pic";
      copy($_FILES['image']['tmp_name'], $image);
      }
    

      $awlwxrSElect = mysqli_query($db,"SELECT * FROM flat_post WHERE flat_name='$name' && landloard_id='$londland_id'");
      $counting = mysqli_num_rows($awlwxrSElect);
        if($counting!=0){
      ?>
      <script>alert("Already Exit !"); window.location.replace('../flat_post.php');</script>
  <?php }else{

    $memberInsert = mysqli_query($db,"INSERT INTO flat_post (flat_name,landloard_id,drawing,dining,lift,gas,generator,date,price,phone,image) VALUES ('$name','$londland_id','$drawing','$dining','$lift','$gas','$generator','$accept_date','$price','$mobile','$image')");

      if($memberInsert){ ?>
      <script>alert("Thanks For Add Flat Post !"); window.location.replace('../flat_post.php');</script>
  <?php }else{ ?>
    <script>alert("Fails !"); window.location.replace('../flat_post.php');</script>
 <?php  }
 }

}



// Member remove wish list  update 
 if(isset($_POST['Clearance_submit'])){
    $member_id = $_POST['memberId'];
    $londland_id = $_SESSION['landloader'];
    $end_time = $_POST['end_time'];
    $remark = $_POST['remark'];
    $order = $_POST['order'];


    $memberInsert = mysqli_query($db,"UPDATE member_wishlist SET clearance='$order', clearance_date='$end_time', remark='$remark', status='0',clearance_checking='1' WHERE member_id='$member_id' && landloard_id='$londland_id'");

      if($memberInsert){ ?>
      <script>alert("Clearance wish list  !"); window.location.replace('../landloarddetails.php');</script>
  <?php }else{ ?>
    <script>alert("Fails !"); window.location.replace('../landloarddetails.php');</script>
 <?php  }


}





 ?>