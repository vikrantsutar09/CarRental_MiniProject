
,<?php 
session_start();
 $username = $_POST['Username'];
 $password = $_POST['Password'];


 if ($username=="admin" && $password="123") 
 {
 		$_SESSION['user'] = "admin";
 		
 		header("Location:index.php");
 }
 else
 {
 		header("Location:login.php?status=fail");
 }


?>