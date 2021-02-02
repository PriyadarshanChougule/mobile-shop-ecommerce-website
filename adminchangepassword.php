<?php
require 'connection.php';
session_start();
$adid=$_SESSION['admin_id'];
$phno=$_SESSION['phno'];
if(isset($_POST['changepwd']))
{
	
	$old=$_POST['password'];
	$newpwd=$_POST['new_password'];
	$confirmnew=$_POST['confirm_newpassword'];
	$sql10="SELECT * FROM admin_info WHERE admin_id='$adid' ";
	$result10=mysqli_query($conn,$sql10);
	$num=mysqli_num_rows($result10);
	if($newpwd==$confirmnew && $num==1)
	{
		$sql12="UPDATE admin_info SET Password='$confirmnew' where admin_id='$adid'";
		$result12=mysqli_query($conn,$sql12);
		
			
		
	}
	header("Location:admin-profile.php");
}

?>