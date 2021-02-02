<?php
include 'connection.php';
session_start();
if ( !isset($_SESSION['loggedin']) ||  $_SESSION['loggedin']!=true )
 {
	
	 header('location: index -admin.php');
	 exit;
 }
$adminid = $_SESSION['admin_id'];
if(isset($_POST['submit']))
{
	$name1=$_POST['name1'];
	$model_number=$_POST['model_number'];
	
	$price=$_POST['price'];
	$category=$_POST['category'];
	$ram=$_POST['ram'];
	$internal_memory=$_POST['internal_memory'];
	$displaysize=$_POST['displaysize'];
	$sim=$_POST['sim'];
	$battery=$_POST['battery'];
	$processor=$_POST['processor'];
	$clockspeed=$_POST['clockspeed'];
	$expandablememory=$_POST['expandablememory'];
	$primarycam=$_POST['primarycam'];
	$secondarycam=$_POST['secondarycam'];
	$connectivity=$_POST['connectivity'];
	$width=$_POST['width'];
	$height=$_POST['height'];
	$weight=$_POST['weight'];
	$warrenty=$_POST['warrenty'];
	$chargertype=$_POST['chargertype'];
	$description=$_POST['desc'];
	
	$quantity=$_POST['quantity'];
	
	
	
	
	$os=$_POST['os'];
	$company=$_POST['company_name'];
	$touch_screen=$_POST['Touch_Screen'];
	$catche=$_POST['catche'];
	
	
	
	
	$target_path="images/";
	$target_path=$target_path.basename($_FILES['img123']['name']);
	
	
	if(move_uploaded_file($_FILES['img123']['tmp_name'],$target_path))
	{
		
		$sql="INSERT into `product` values('','$category','$target_path','$price','$name1','$description','$quantity','$adminid')";
		$res=mysqli_query($conn,$sql);
		
		$sql2="SELECT product_id FROM product ORDER BY product_id DESC LIMIT 1";
		
		
		
		$result=mysqli_query($conn,$sql2);
		$id = mysqli_fetch_assoc($result);
		$ans=$id['product_id'];
		$sql1="INSERT into `specifications` (product_id) values('$ans')";
		
		$sql2="INSERT into specifications(product_id,model_number,model_name,RAM,ROM,display_size,sim_type,battery,processor,clock_speed,expandable_memory,primary_camquality,secondary_camquality,connectivity,width,height,weight,warrenty,charger_type) values('$ans','$model_number','$name1','$ram','$internal_memory','$displaysize','$sim','$battery','$processor','$clockspeed','$expandablememory','$primarycam','$secondarycam','$connectivity','$width','$height','$weight','$warrenty','$chargertype') ";
		mysqli_query($conn,$sql2);
		
		$addby="INSERT into product_added_by values('$ans','$adminid')";
		mysqli_query($conn,$addby);
		if(true)
		{
			
			echo '<script language="javascript">';
			echo 'alert("product added successfully ")';
			echo '</script>';
			header("Location:addproduct-admin.php");
		}
		else
		{
			echo "Error:".$sql.$conn->error;
		}
	}
	
	
}
?>