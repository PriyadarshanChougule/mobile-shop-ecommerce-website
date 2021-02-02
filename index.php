<?php
include 'connection.php';

session_start();



?>
<!DOCTYPE html>
<html lang="en">

  <head>
	<!--<meta http-equiv="refresh" content="60;url=user_logout.php"/>-->
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
          <a class="navbar-brand" href="index.php"><h2>Mobile Store<em> Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
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
				   <?php if (!empty($_SESSION)){echo " <a class='dropdown-item' href='orders.php'>Orders</a>   ";}?>
					<?php if (!empty($_SESSION)){echo " <a class='dropdown-item' href='user_logout.php'>Logout</a>   ";}?>
					
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact123 - copy.php">Contact Us</a>
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
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Welcome..<?php if (!empty($_SESSION)){echo $_SESSION['user_name'];}?></h6>
                  <h4>Checkout all <br> mobile  phones here </h4>
                  <p></p>
                  
				  <form action="searchproduct.php" method="post">
					<button type="submit" name="submitmobile" class="filled-button" >Mobiles</button>
					</form>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Hi..<?php if (!empty($_SESSION)){echo $_SESSION['user_name'];}?>	</h6>
                  <h4 style="color:white"> HERE IS WHAT YOU <br>HAVE ADDED TO<br>CART</h4>
                  <p></p>
                  <a href="about.html" class="filled-button">cart</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Hi..<?php if (!empty($_SESSION)){echo $_SESSION['user_name'];}?>	</h6>
                  <h4>Contact us <br>for your queries </h4>
                  <p></p>
                  <a href="contact123 - copy.php" class="filled-button">Contact Us</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->








<!--
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured <em>Products</em></h2>
              <span></span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-1-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span> <del><sup>$</sup>2000.00</del>  <sup>$</sup>1700.00 </span>
                </div>

                <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                <a href="#" class="filled-button">View More</a>
              </div>
            </div>
            
            <br>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-2-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span> <del><sup>$</sup>2000.00</del>  <sup>$</sup>1700.00 </span>
                </div>

                <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                <a href="#" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-3-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span> <del><sup>$</sup>2000.00</del>  <sup>$</sup>1700.00 </span>
                </div>

                <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                <a href="#" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>
        </div>
      </div>
    </div>
-->








<?php
$sql111="select * from product where admin_id = 1 LIMIT 2";
$result1=$conn->query($sql111);
$row=$result1->fetch_assoc();
	
		
		$path=$row['images_path'];
		$desc12=$row['description'];
		$pr=$row['price'];
		
		
	
		echo '<div class="services">';
      echo '<div class="container">';
        echo '<div class="row">';
         echo  '<div class="col-md-12">';
          echo  '<div class="section-heading">';
            echo  '<h2>Trending <em>Products</em></h2>';
             
           echo '</div>';
          echo '</div>';
		  
		  
		  
		  
		  
         echo  '<div class="col-md-4">';
          echo  '<div class="service-item">';
           echo   "<img src='$path' width='200' height='300' alt=''>";
            echo  '<div class="down-content">';
              echo  '<h4></h4>';
               echo '<div style="margin-bottom:10px;">';
               echo   "<span> ₹ $pr  </span>";
                echo '</div>';
						
               echo "<p>'$desc12'</p>";
               echo '<a href="product-details.php" class="filled-button">View More</a>';
              echo '</div>';
            echo '</div>';
            
            echo '<br>';
          echo '</div>';
		  
		  
		  $sql112="select * from product where admin_id = 1 ORDER BY admin_id LIMIT 1 OFFSET 1 ";
			$result12=$conn->query($sql112);
			$row=$result12->fetch_assoc();
	
		
		$path1=$row['images_path'];
		$desc13=$row['description'];
		$pri=$row['price'];
		  
		  
		  
		  echo  '<div class="col-md-4">';
          echo  '<div class="service-item">';
           echo   "<img src='$path1' width='200' height='300' alt=''>";
            echo  '<div class="down-content">';
              echo  '<h4></h4>';
               echo '<div style="margin-bottom:10px;">';
               echo   "<span> ₹ $pri  </span>";
                echo '</div>';
						
               echo "<p>'$desc13'</p>";
               echo '<a href="product-details.html" class="filled-button">View More</a>';
              echo '</div>';
            echo '</div>';
            echo '<br>';
          echo '</div>';
		  
		  
		  
		  
			$sql113="select * from product where admin_id = 1 ORDER BY admin_id LIMIT 1 OFFSET 3 ";
			$result125=$conn->query($sql113);
			$row=$result125->fetch_assoc();
	
		
			$path15=$row['images_path'];
			$desc135=$row['description'];
			$pric=$row['price'];
		  
		  
		  
		  
		  echo  '<div class="col-md-4">';
          echo  '<div class="service-item">';
           echo   "<img src='$path15' width='200' height='300' alt=''>";
            echo  '<div class="down-content">';
              echo  '<h4></h4>';
               echo '<div style="margin-bottom:10px;">';
               echo   "<span> ₹ $pric  </span>";
                echo '</div>';
						
               echo "<p>'$desc135'</p>";
               echo '<a href="product-details.html" class="filled-button">View More</a>';
              echo '</div>';
            echo '</div>';
            
            echo '<br>';
          echo '</div>';
		  
		  
		  
		  
		    
        echo '</div>';
      echo '</div>';
    echo '</div>';	


?>












	<center style="font-size: 25px; margin-top:30px"><em>Products</em></center>
	<br>
<div class="row">
<div class="container">
<div class="d-flex justify-content-center">
		<div class="col-sm-3">
			<div class="card" style="width: 200px;">
				<!--<img class="card-img-top" src="C:\xampp\htdocs\mobileshop3\mobileshop\images\MI A2.jpg" alt="Card image cap">-->
				<div class="card-body">
					<h5 class="card-title"><strong>PHONES</strong></h5>
					<p class="card-text">Click on the below button to view more mobile phones</p>
					<form action="searchproduct.php" method="post">
					<button type="submit" name="submitmobile" class="filled-button" >ALL PHONES</button>
					</form>
				</div>
			</div>
		</div >
	<div class="col-sm-3">
		<div class="card" style="width: 200px;">
			<!--<img class="card-img-top" src="C:\xampp\htdocs\mobileshop3\mobileshop\images\lappy.jpg" alt="Card image cap">-->
			<div class="card-body">
				<h5 class="card-title"><strong>LAPTOPS</strong></h5>
				<p class="card-text">Click on the below button to view more Laptops</p>
				
				<form action="searchproduct.php" method="post">
					<button type="submit" name="submitlaptop" class="filled-button" >ALL LAPTOPS</button>
					</form>
			</div>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="card" style="width: 200px;">
		<div class="card-body">
		<!--	<img class="card-img-top" src="C:\xampp\htdocs\mobileshop2\img\download (2).jpg" alt="Card image cap"> -->
			
				<h5 class="card-title"><strong>TABLETS</strong></h5>
				<p class="card-text">Click here to view more Tablets</p>
				<form action="searchproduct.php" method="post">
					<button type="submit" name="submittablet" class="filled-button" >ALL TABLETS</button>
					</form>
			</div>
		</div>
	</div>
	
</div>
</div>
</div>














    <div class="callback-form" style="margin-top:60px">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send Us a <em>Message</em></h2>
              <span></span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="post">
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
                      <button type="submit" id="form-submit" class="border-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <br>
      </div>
    </div>


    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © 2020 Company Name
                -  MOBILE STORE Website
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