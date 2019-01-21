<?php 
 session_start();

 if(isset($_GET['landloader'])){
 	session_destroy();
 	header("Location:../index.php");
 } 

 if(isset($_GET['Member'])){
 	session_destroy();
 	header("Location:../index.php");
 }

 ?>