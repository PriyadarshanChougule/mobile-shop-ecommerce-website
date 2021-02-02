<?php
include 'connection.php';
session_start();
if ( !isset($_SESSION['loggedin']) ||  $_SESSION['loggedin']!=true )
 {
	
	 header('location: index.php');
	 exit;
 }

if(isset($_POST['submit155']))
{
	$uid=$_SESSION['userid'];
	$name=$_POST["name"];
	$mobile=$_POST["mobile_number"];
	$pincode=$_POST["pincode"];
	$landmark=$_POST["landmark"];
	$addresstype=$_POST["addresstype"];
	$city=$_POST["city"];
	$state=$_POST["state"];
	$alternate=$_POST["alternateno"];
	$address=$_POST["address12"];
	
	$sql155="INSERT INTO `user_address` VALUES ('$uid','$name','$mobile','$pincode','$address','$city','$alternate','$state','$addresstype','$landmark','')";
	$result155=mysqli_query($conn,$sql155);
	if($result155){
		header("Location:addaddress.php");
	}
	
 } 
?>