<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['loggedin']) ||  $_SESSION['loggedin']!=true)
{
 header('location:index.php');
	 exit;
 }
 $uid=$_SESSION['userid'];
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>
<style>
		input.filled-button {
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

input.filled-button:hover {
	background-color: #fff;
	color: #a4c639;
	cursor:pointer;
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
			  <li class="nav-item nav-link active">
                <a href="cart.php" class="fa fa-shopping-cart" style="color:white" aria-hidden="true"></a>
				<br>
				<a href="cart.php" style="color:white">cart</a>
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
	<span class="d-flex justify-content-center"> <h4>Select Address or</h4></span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<a href="addaddress.php">add new address</a>
	
	<br>
	<br>
	<form action="payment.php" method="post">
	<div class="container  abc">
	<?php
	include 'connection.php';
	$sql140="SELECT * FROM user_address WHERE user_id='$uid'";
	$result11=mysqli_query($conn,$sql140);
	
	while($row=mysqli_fetch_assoc($result11))
	{
		
		$adid=$row['address_id'];
	echo  "<input type='radio' value='$adid' name='address299' />";
	
	echo '&nbsp'.$row['user_name'];
	echo '<br>&nbsp&nbsp&nbsp&nbsp'.$row['phone_no'];
	echo '<br>&nbsp&nbsp&nbsp&nbsp'.$row['address'];
	
	echo '<br>&nbsp&nbsp&nbsp&nbsp'. $row['city'];
	echo '<br>&nbsp&nbsp&nbsp&nbsp'. $row['state'];
	echo  '<br>&nbsp&nbsp&nbsp&nbsp'. $row['pincode'];
	echo  '<br>&nbsp&nbsp&nbsp&nbsp';
	echo  '<br>';
	}
	echo "<br/>";
	
	echo '</div>';
	echo '<br>';
	echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ';
	 echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp';
	 echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ';
	 echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp';
	 echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ';
	 echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp';
	 echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ';
	 echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp';
	 echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ';
	 echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp';
	  echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ';
	 echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ';
	 echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ';
	 echo  "<input type='submit' name='submit155'  class='filled-button' value='PROCEED'>" ?>
	</form>
	<br>
	<br>
	
	
	
	
	
	 <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
	</body>
	</html>