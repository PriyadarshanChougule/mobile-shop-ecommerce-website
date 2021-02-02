<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['loggedin']) ||  $_SESSION['loggedin']!=true)
{
 header('location:index.php');
	 exit;
 }
 $uid=$_SESSION['userid'];
 
 
 if(isset($_POST['submit_card']) || isset($_POST['submitupi']))
 {
	 $sql1="SELECT * FROM cart WHERE userid='$uid'";
	 $result1=mysqli_query($conn,$sql1);
	 while($row1 = mysqli_fetch_assoc($result1))
	 {
		 $pid999=$row1['product_id'];
		 $cartqty=intval($row1['quantity']);
		 
		 
		 $date1=date('Y/m/d');
		 $sq="INSERT INTO order_history VALUES('$pid999','$cartqty','$uid','$date1','Not delivered')";
		 mysqli_query($conn,$sq);
		 
		 $sql2="SELECT quantity FROM product WHERE product_id='$pid999' LIMIT 1";
		 $result2=mysqli_query($conn,$sql2);
		 $row21 = $result2->fetch_assoc();
		//$result2=intval($result2);
		$qt=$row21['quantity'];
		 $reduced = $qt - $cartqty;
		 if($reduced>=0){
         $sql3="UPDATE product SET quantity='$reduced' WHERE product_id= $pid999";
		 mysqli_query($conn,$sql3);
		 }
	 }
 
	 $sql123="DELETE FROM cart WHERE userid='$uid'";
	 $result=mysqli_query($conn,$sql123);
 }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>
<style>
		button.filled-button {
	background-color: #a4c639;
	color: #fff;
	font-size: 13px;
	text-transform: uppercase;
	font-weight: 700;
	padding: 12px 30px;
	border-radius: 30px;
	display: inline-block;
	transition: all 0.3s;
	border:1px solid gray;
}

button.filled-button:hover {
	background-color: #fff;
	color: #a4c639;
}

button.border-button {
	background-color: transparent;
	color: #fff;
	border: 2px solid #fff;
	font-size: 13px;
	text-transform: uppercase;
	font-weight: 700;
	padding: 10px 28px;
	border-radius: 30px;
	display: inline-block;
	transition: all 0.3s;
}

button.border-button:hover {
	background-color: #fff;
	color: #a4c639;
}

.abc{
	
box-sizing:border-box;
	
width:900px;
padding-top:30px;
padding-bottom:20px;

  background: #FFFFFF;
  box-shadow: 1px 1px 3px 3px rgba(0,0,0,0.10);
  border-radius: 6px;
}

.card1{
	width:800px;
	height:40px;
	cursor:pointer;
	background-color:white;
	border:1px solid gray;  
	font-size: 20px;
}
.darshan{
	width:400px;
	margin-top:10px;
	justify-content:center;
	height:30px;
	border-radius:5px;
	border:1px solid gray;
	margin-bottom:10px;
}

input:focus{
	border:1px solid gray;
}
	</style>
  <body>




    <header class="" >
      <nav class="navbar navbar-expand-lg" style="background-color:black">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Mobile Store<em> Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home
                 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="searchproduct.php">Products</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Checkout</a>
              </li> -->
              <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
              
			  
			  
			  
                <div class="dropdown-menu">
					 <a class="dropdown-item" href="user_profile.php">profile</a>
                    <a class="dropdown-item" href="registeruser.php">New Registration</a>
					<a class="dropdown-item" href="#">About website</a>
                   <?php if (empty($_SESSION)){echo  "<a href='' class='dropdown-item' id='logid12' data-toggle='modal' data-target='#modalLoginForm' >Login </a> ";}?>   
				   <?php if (!empty($_SESSION)){echo " <a class='dropdown-item' href='addaddress.php'>Manage Addresses</a>   ";}?>
					<?php if (!empty($_SESSION)){echo " <a class='dropdown-item' href='user_logout.php'>Logout</a>   ";}?>
					
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact123 - copy.php">Contact Us</a>
              </li>
			  <li class="nav-item nav-link ">
                <a href="cart.php" class="fa fa-shopping-cart" style="color:white;font-size: 20px;" aria-hidden="true"></a>
				<br>
				<a href="cart.php" style="color:white;font-size: 15px;">cart</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container justify-content-center" style="">
	</br></br></br></br>
	</br></br></br></br>
	
          <span class="glyphicon glyphicon-ok" style="font-size:100px;margin-left:500px"></span>  
		  </br></br>
		  
			
		  <span style="font-size:20px;margin-left:470px"><strong><em> Order Plcaed</em></strong></span>
		  </br>
		 <span style="margin-left:480px;font-size:12px"> GO TO <a href="orders.php" > Your Orders  </a></span> </br>
		 <span style="margin-left:480px;font-size:12px"> GO TO <a href="index.php" > Home Page  </a></span>
		
	</div>
	</div>
	</body>
	</html>