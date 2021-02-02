<?php
include 'connection.php';
session_start();
$uid=$_SESSION['userid'];
$qty=$_GET['quantity'];
$prid=$_GET['prodid'];
$sql1="SELECT quantity FROM product where product_id='$prid'";
$result=mysqli_query($conn,$sql1);
$abc=mysqli_fetch_assoc($result);
$qt=$abc['quantity'];

if($qt>=$qty && $qty<=5){
$sql="UPDATE cart SET quantity=$qty  WHERE userid=$uid AND product_id=$prid";
mysqli_query($conn,$sql);
}
header("Location:cart.php");
?>