<?php include 'connection.php';
session_start();
 if ( !isset($_SESSION['loggedin']) ||  $_SESSION['loggedin']!=true )
 {
	 header('location: index -admin.php');
	 exit;
 }
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phno=$_POST['phone_number'];
 $adminid=$_SESSION['admin_id'];
 $sql="UPDATE admin_info SET name='$name', email='$email', phone_number='$phno' WHERE admin_id='$adminid'";
 mysqli_query($conn,$sql);
 header("Location : admin-profile.php");
?>