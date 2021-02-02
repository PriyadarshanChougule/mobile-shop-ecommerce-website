<?php
require 'connection.php';
if(isset($_POST['loginbtn12']))
{
	
	
	$email=$_POST["email233"];
	$password=$_POST["password11"];
	$sql25="SELECT * FROM user_account WHERE email='$email' LIMIT 1";
	$result25=mysqli_query($conn,$sql25);
	$num=mysqli_num_rows($result25);
	session_start();
	if($num==1)
	{
		
		$row = mysqli_fetch_assoc($result25);
		$name=$row['user_name'];
		$hash=$row['password'];
		
		if(password_verify($password ,$hash))
		{
			$_SESSION['phno']=$row['phone_no'];
			$_SESSION['birthdate']=$row['birthdate'];
			$_SESSION['gender']=$row['gender'];
			$_SESSION['user_name']=$name; 
			$_SESSION['email']=$email; 
			$_SESSION['loggedin']=true;
			$_SESSION['userid']=$row['user_id'];
		
			 header('Location:index.php');
		}
		else{
			
			 echo '<script>alert("Invalid Login Credentials...")</script>';
			header('Location:index.php');
		}
	
	}
	
	
}


?>