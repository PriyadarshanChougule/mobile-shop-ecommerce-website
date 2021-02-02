<?php  
include  'connection.php';
if(isset($_POST['loginbtn12']))
{
	
	$email=$_POST['email'];
	$pass=$_POST['password11'];
	$sql55="SELECT user_name,password FROM user_account where email='$email' ";
	$res=mysqli_query($conn,$sql55);
	if(mysqli_num_rows($res)==1)
	{
		session_start();
		$row = mysqli_fetch_assoc($res);
		$name=	$row['user_name'];
		$password=$row['password'];
		
		if(password_verify('$pass', $password))
		{
			
			$_SESSION['name']=$name; 
			$_SESSION['email']=$email; 
			$_SESSION['loggedin']=true;
			header("Location:index.php");
			
		}
		else{
			 echo '<script>alert("Invalid Login Credentials...")</script>';
		}
	
	}
	
}
 
 ?>