<?
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

    <title>address</title>

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
                <a class="dropdown-toggle nav-link active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
              
			  
			  
			  
                <div class="dropdown-menu">
					 <a class="dropdown-item" href="user_profile.php">profile</a>
                    <a class="dropdown-item" href="registeruser.php">New Registration</a>
					<a class="dropdown-item" href="#">About website</a>
				    <a class='dropdown-item' href=''>Manage Addresses</a> 
				   <a class='dropdown-item' href='orders.php'>Orders</a> 
					 <a class='dropdown-item' href='user_logout.php'>Logout</a>  
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact123 - copy.php">Contact Us</a>
              </li>
			  <li class="nav-item ">
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
	
	
	
	
	
	
	
 <div class="callback-form contact-us ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Add  new <em>Address</em></h2>
              <!-- <span>Suspendisse a ante in neque iaculis lacinia</span> -->
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="insertaddress.php" method="post">
                <div class="row">
				<!-- address name -->
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Name" >
                    </fieldset>
                  </div>
				  <!-- Mobile Number-->
                 <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="mobile_number" type="text" class="form-control" pattern="[0-9]+"  placeholder="Mobile Number" >
                    </fieldset>
                  </div>
				 </div>
				 
				 
			
				<div class="row">
				<!-- pincode-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="pincode" type="text" class="form-control" id="pincode"  placeholder="pincode" >
                    </fieldset>
                  </div>
				  <!-- landmark -->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="landmark" type="text" class="form-control" id="landmark"  placeholder="landmark" >
                    </fieldset>
                  </div>
				</div>
				
				
				
				<div class="row">
				<!-- Address Type-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <select name="addresstype" class="browser-default custom-select">
							<option selected>Address Type</option>
							
							<option value="Home">Home</option>
							<option value="Office">Office</option>
							
							
						</select>
                    </fieldset>
                  </div>
				  <!--City-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="city" type="text" class="form-control" id="city"  placeholder="City/Town" >
                    </fieldset>
                  </div>
				</div>
				
				<div class="row">
				<!-- State-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="state" type="text" class="form-control" id="state"  placeholder="State">
                    </fieldset>
                  </div>
				 
				
				<!-- Altername phno-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="alternateno" type="text" class="form-control" id="alternateno"  placeholder="Alternate Phone Number">
                    </fieldset>
                  </div>
				  <!-- Land Mark -->
				 <!--  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="landmark" type="text" class="form-control" id="landmark"  placeholder="Landmark" >
                    </fieldset>
                  </div>-->
				</div>	 
					
					
				<div class="row">
				 <!-- Address-->
				   <div class=" col-md-12 ">
                    <fieldset>
                        <textarea name="address12" class="form-control" id="address12"  placeholder="Address (Area,Street,House Number )" required></textarea>
                    </fieldset>
                  </div>
				  
				</div>
                  <div class="col-lg-12">
                    <fieldset>
					
                      <button type="submit" name="submit155" id="form-submit" class="filled-button">Add Address</button>
                    </fieldset>
                  </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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