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
			  <li class="nav-item nav-link active">
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
	
	<span class="d-flex justify-content-center"> <h4 style="font-size: 30px;">Payment</h4></span>
	
	<br>
	<br>
	
	<div class="container  abc">
	<button name="card" class="card1" onclick="myFunction()">Credit/Debit Card<span class="glyphicon glyphicon-chevron-down"></button>
		<div id="myDIV">
		<form action="paymentsuccess.php" method="post">
			<input type="text" name="card_number" class="darshan"  placeholder="card number" required>
			<input type="text" name="name" class="darshan" placeholder="Card Holder Name" required>
			
			<select type="text" name="month" class=" darshan browser-default custom-select">
							<option selected>Expiry Month</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
			</select>
						
			<select type="text" name="year" class=" darshan browser-default custom-select">
							<option >Expiry Year</option>
							<option value="21">2021</option>
							<option value="22">2022</option>
							<option value="23">2023</option>
							<option value="24">2024</option>
							<option value="25">2025</option>
							<option value="26">2026</option>
							<option value="27">2027</option>
							<option value="28">2028</option>
							<option value="29">2029</option>
							<option value="30">2030</option>
							<option value="31">2031</option>
							<option value="32">2032</option>
			</select>		
			<br>
			<button type="submit" name="submit_card" class="filled-button" style="width:800px;margin-bottom:50px">pay</button>	
			</form>
		</div>
		
		
		
		
	<button name="upi" class="card1"  onclick="myFunction1()"> UPI&nbsp;<span class="glyphicon glyphicon-chevron-down"><span></button>
	<div id="myDIV1">
		<form action='paymentsuccess.php' method='post'>
		<input type="text" name="upiid" class="darshan" placeholder="Enter UPI ID" required>
		<button type='submit' name="submitupi" class="filled-button" style="width:300px;margin-bottom:50px;margin-top:10px">pay</button>
		</form>
	</div>
	</div>
	
	
	<br>
	<br>
	<script>
	function myFunction() {
		var x = document.getElementById("myDIV");
		if (x.style.display === "none") {
		x.style.display = "block";
		} else {
		x.style.display = "none";
		}
	}
	
	function myFunction1() {
		var x = document.getElementById("myDIV1");
		if (x.style.display === "none") {
		x.style.display = "block";
		} else {
		x.style.display = "none";
		}
	}
	</script>
	<?php include 'connection.php';
	
	if(isset($_POST['submit155']))
	{
		$address99=$_POST['address299'];
		
	}
	?>
	
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