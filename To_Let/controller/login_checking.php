<?php 
 session_start();
 include_once'db_config.php';


  $who_login = $_POST['who_login'];
  $email = $_POST['userEmail'];
  $password = $_POST['password'];

 if($who_login=='Landloard'){// Landloard login checking 

 		$selectLandloard = mysqli_query($db,"SELECT * FROM landload_reg WHERE email='$email' && password='$password'");
 	    $countLandloader = mysqli_num_rows($selectLandloard);
 		$fetch_land = mysqli_fetch_array($selectLandloard);

 		if($countLandloader==1){
 			$_SESSION['landloader'] = $fetch_land['reg_id'];
 			header("Location:../landloarddetails.php");
 		}else{ ?>
 			<script> 
 				alert("Email or Password Wrong !");
 				window.location.replace('../index.php');
 			</script>
 		<?php }


 }else{// member login checking 
	

 	$selectMember = mysqli_query($db,"SELECT * FROM member_reg WHERE email='$email' && password='$password'");
 	    $countLandloader = mysqli_num_rows($selectMember);
 		$fetch_member = mysqli_fetch_array($selectMember);

 		if($countLandloader==1){
 			$_SESSION['Member'] = $fetch_member['member_id'];
 			header("Location:../memberpage.php");
 		}else{ ?>
 			<script> 
 				alert("Email or Password Wrong !");
 				window.location.replace('../index.php');
 			</script>
 		<?php }




 }



 ?>