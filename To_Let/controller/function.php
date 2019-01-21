<?php 
 include'db_config.php';

 function landload_info($db,$landloadId){
 		$select = mysqli_query($db,"SELECT * FROM landload_reg WHERE reg_id='$landloadId'");
 		return $fetch = mysqli_fetch_array($select);

 }


 function member_info($db,$member){
 		$select = mysqli_query($db,"SELECT * FROM  member_reg WHERE member_id='$member'");
 		return $fetch = mysqli_fetch_array($select);

 }







 ?>