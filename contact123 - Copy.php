<?php
include 'connection.php';
 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>contact</title>

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

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

   
   	
<!--modal login-->
<form action="userloginscript.php" method="post">
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Log in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fa fa-envelope prefix grey-text">&nbsp Email</i>
          <input type="email" name="email233" id="defaultForm-email" style="border-radius:30px" class="form-control br validate" required>
         <!--  <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label> -->
        </div>

        <div class="md-form mb-4">
          <i class="fa fa-lock prefix grey-text">&nbsp Password</i>
          <input type="password" name="password11" id="defaultForm-pass" style="border-radius:30px" class="form-control validate" required>
         <!--  <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label> -->
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
       <button name="loginbtn12" type="submit"  class="filled-button"  >Login</button>
      </div>
    </div>
  </div>
  
</div>
</form>
<!--modal login-->

   
    
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Mobile Store<em> Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="searchproduct.php">Products</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="">Checkout</a>
              </li> -->
              <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
              
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="user_profile.php">profile</a>
                   <?php if (empty($_SESSION)){echo "<a class='dropdown-item' href='registeruser.php'>New Registration</a> ";}?>
                    <a class="dropdown-item" href="#">About Website</a>
                    <?php if (empty($_SESSION)){echo  "<a href='' class='dropdown-item' id='logid12' data-toggle='modal' data-target='#modalLoginForm' >Login </a> ";}?>
					<?php if (!empty($_SESSION)){echo " <a class='dropdown-item' href='addaddress.php'>Manage Addresses</a>   ";}?>
					<?php if (!empty($_SESSION)){echo " <a class='dropdown-item' href='orders.php'>Orders</a>   ";}?>
					<?php if (!empty($_SESSION)){echo " <a class='dropdown-item' href='user_logout.php'>Logout</a>   ";}?>
                </div>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="contact123 -Copy.php">Contact Us</a>
              </li>
			  <li class="nav-item">
                <a href="cart.php" class="fa fa-shopping-cart" style="color:white" aria-hidden="true"></a>
				<br>
				<a href="cart.php" style="color:white">cart</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Contact Us</h1>
            <span>feel free to send us a message now!</span>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information" style="margin-bottom:60px">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>Phone</h4>
              <p>This is our customer care support number. Contact us any time.</p>
              <a href="#">+91 7067520651</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <p>This is our companies email address. Mail us for any queries.</p>
              <a href = "mailto:contact@MobileStore.com?subject = Feedback&body = Message">contact@MobileStore.com</a>
            </div>
          </div>
         <!--  <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>Location</h4>
              <p>212 Barrington Court New York str <br> USA</p>
              <a href="#">View on Google Maps</a>
            </div>
          </div> -->
        </div>
      </div>
    </div>

    <div class="callback-form contact-us" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a <em>message</em></h2>
              <span></span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="get">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

   
  
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © 2020 Company Name
                - MOBILE STORE Website</a>
            </p>
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