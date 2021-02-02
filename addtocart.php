<?php
include 'connection.php';
session_start();
 if ( !isset($_SESSION['loggedin']) ||  $_SESSION['loggedin']!=true )
 {
	 header('location:index.php');
	 exit;
 }
 echo $prod_id;
$p_id=$_GET['productid'];
$u_id=$_SESSION['userid'];

$sql="INSERT INTO cart(userid,product_id,quantity) values($u_id,$p_id,1)";
$result1=$conn->query($sql);
if($result1){
	header("Location:searchproduct.php");
}
?>