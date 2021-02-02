<?php
include 'connection.php';

session_start();
 if ( !isset($_SESSION['loggedin']) ||  $_SESSION['loggedin']!=true )
 {
	 header('location:index.php');
	 exit;
 }
 $uid=$_SESSION['userid'];
 

$prid=$_GET['prid'];

$sql="DELETE FROM cart where product_id=$prid AND userid=$uid";

$result=mysqli_query($conn,$sql);
if($result)
{
	header("location:cart.php");
}
?>
