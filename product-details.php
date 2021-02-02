<?php
include 'connection.php';
session_start();
 if ( !isset($_SESSION['loggedin']) ||  $_SESSION['loggedin']!=true )
 {
	 header('location:index.php');
	 exit;
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

    <title>product-details</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
  <!--  <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  -->
    <!-- ***** Preloader End ***** -->

  

    <header class="">
      <nav class="navbar navbar-expand-lg"  style="background-color:black">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Mobile Store<em> Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
			
			   <li class="nav-item ">
               <form action="searchproduct.php" method="post">
				<input type="text" placeholder="Search.." name="search" style="border-radius:10px;margin-top:10px;margin-left:0px">
				<button type="submit" class="fa fa-search" name="searchproduct" style="padding-bottom:5px"></button>
				</form>
              </li>
			
			
			
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item active">
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
                  <?php  if (empty($_SESSION)){echo  "<a href='' class='dropdown-item' id='logid12' data-toggle='modal' data-target='#modalLoginForm' >Login </a> ";}?>   
				   <?php if (!empty($_SESSION)){echo " <a class='dropdown-item' href=''>Manage Addresses</a>   ";}?>
				    <?php if (!empty($_SESSION)){echo " <a class='dropdown-item' href='orders.php'>Orders</a>   ";}?>
					<?php if (!empty($_SESSION)){echo " <a class='dropdown-item' href='user_logout.php'>Logout</a>   ";}?>
					
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact123 - copy.php">Contact Us</a>
              </li>
			  <li class="nav-item">
                <a href="#" class="fa fa-shopping-cart" style="color:white" aria-hidden="true"></a>
				<br>
				<a href="#" style="color:white">cart</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>



<br>
<br>
<br>

<?php
include 'connection.php';

$prod_id=$_GET['productid'];
$sql="SELECT * FROM product WHERE product_id=$prod_id LIMIT 1";

//$result1=mysqli_query($conn,$sql1);



$result1=$conn->query($sql);
$row = mysqli_fetch_assoc($result1 );


$path=$row['images_path'];
$desc12=$row['description'];
$pr=$row['price'];
$cat=$row['category'];
$quantity1=$row['quantity'];
    echo '<div class="services">';
    echo ' <div class="container">';
    echo  '  <div class="row">';
    echo     ' <div class="col-md-7">';
    echo        '<div>';
    echo        " <img src='$path' width='450px' height='380px' alt='' style='  position: -webkit-sticky;   top : 130px ;border:1px solid gray; padding:20px;margin-bottom:50px' class='img-fluid wc-image'> ";
    echo       ' </div>';
	
	echo   '<br>';


    echo      '  <br>';
    echo      '</div>';
	
    echo      '<div class="col-md-5">';
    echo      '<div class="sidebar-item recent-posts">';
    echo     ' <div class="sidebar-heading">';
    echo     '   <h4>Description</h4><br>';
	echo 		$desc12;
    echo          '</div>';

     echo       '  <div class="content">';
    echo         '   <p></p>';
    echo         ' </div>';
    echo        '</div>';

     echo       '<br>';
    echo       ' <br>';
          
    echo       ' <h4>Add to Cart</h4>';

     echo      ' <br>';

     echo       '<form action="" method="post">';
     echo        ' <div class="row">';
     echo          ' <div class="col-md-6 col-sm-12">';
     echo          '   <div class="form-group">';
     echo            '   <label for="">Color</label>';
     echo             '  <select class="form-control">';
     echo              '   <option value="Red">Red</option>';
     echo              '   <option value="Black">Black</option>';
     echo              '   <option value="Blue">Blue</option>';
	echo				'  <option value="Lightgreen">Light Green</option>';
     echo              ' </select>';
     echo            ' </div>';
     echo          ' </div>';
     echo        ' </div>';

     echo        ' <div class="row">';
     echo          ' <div class="col-md-6 col-sm-12">';
      echo           ' <div class="form-group">';
     echo               '<label for="">Quantity</label>';
     echo               '<input type="text" value="1" required="" class="form-control">';
     echo             '</div>';
     echo          ' </div>';
	 
	 
	 echo          ' <div class="col-md-12 col-sm-12">';
      echo           ' <div class="form-group">';
	  if($quantity1<1)
	  {
		  echo    '<label for="" style="color:red;font-size: 25px;">Out Of Stock...</label>';
	  }
	  else if($quantity1<6){
			echo    '<label for="" style="color:red;  font-size: 20px;">Hurry Up , Only ' . $quantity1 . ' left...</label>';
		}
     echo             '</div>';
     echo          ' </div>';
	 
     echo          ' <div class="col-lg-12">';
     echo            ' <div class="form-group">';
	 if($quantity1>=1)
	 {
		echo               "<a href='addtocart.php?productid=$prod_id' class='filled-button'>Add to Cart</a>";
	 }
     echo             '</div>';
      echo          '</div>';
      echo       ' </div>';
      echo     ' </form>';
    echo       ' <br>';
	
	
	
	
	
	
	

$sql2="SELECT * FROM specifications WHERE product_id=$prod_id";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);


	$name1=$row2['model_name'];
	$model_number=$row2['model_name'];	
	
	
	$ram=$row2['RAM'];
	$internal_memory=$row2['ROM'];
	$displaysize=$row2['display_size'];
	$sim=$row2['sim_type'];
	$battery=$row2['battery'];
	$processor=$row2['processor'];
	$clockspeed=$row2['clock_speed'];
	$expandablememory=$row2['expandable_memory'];
	$primarycam=$row2['primary_camquality'];
	$secondarycam=$row2['secondary_camquality'];
	$connectivity=$row2['connectivity'];
	$width=$row2['width'];
	$height=$row2['height'];
	$weight=$row2['weight'];
	$warrenty=$row2['warrenty'];
	$chargertype=$row2['charger_type'];
	

	
	
	
	
	 echo        ' <div class="row">';
     echo          ' <div class="col-md-6 col-sm-12">';
      echo           ' <div class="form-group">';
     echo               '<label for=""><em><strong>Specifications</em></strong></label>';
     echo               '<hr Style="width:500px;">';
     echo             '</div>';
     echo          ' </div>';
     echo          ' <div class="col-lg-12">';
     echo            ' <div class="form-group">';
	 echo 				'<table>';
     echo               "<tr> <td style='padding-right:100px'>Name  </td><td>:</td> <td style='padding-left:50px'>	 " . $name1 ."</td></tr>";
	 echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>Model Number  </td><td>:</td> <td style='padding-left:50px'>	 " . $model_number ."</td></tr>";
	 
	 
	 echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>Price </td><td>:</td> <td style='padding-left:50px'>	 ₹ " . $pr."</td></tr>";
	 
	 
	  echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>Category </td><td>:</td> <td style='padding-left:50px'>	  " . $cat."</td></tr>";
	 
	 echo 				"<tr><td><br></td></tr>";
	  echo				"<tr><td><br></td></tr>";
	 echo 				"<tr> <td style='padding-right:100px'><em><strong>Dimensions </em></strong></td></tr>";
	 echo				'<tr><td><hr Style="width:100%;"></td><td><hr Style="width:100%;"></td><td><hr Style="width:100%;"></td></tr>';
	 
	 
	 
	  
	 echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>Display Size </td><td>:</td> <td style='padding-left:50px'>	 " . $displaysize."</td></tr>";
	 
	 
	  
	 echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>width </td><td>:</td> <td style='padding-left:50px'>	 " . $width."</td></tr>";
	 
	 
	  
	 echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>Height </td><td>:</td> <td style='padding-left:50px'>	 " . $height."</td></tr>";
	 
	 
	  
	 echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>weight </td><td>:</td> <td style='padding-left:50px'>	 " . $weight."</td></tr>";
	 
	 echo 				"<tr><td><br></td></tr>";
	  echo				"<tr><td><br></td></tr>";
	 echo 				"<tr> <td style='padding-right:100px'><em><strong>Memory</em></strong></td></tr>";
	  echo				'<tr><td><hr Style="width:100%;"></td><td><hr Style="width:100%;"></td><td><hr Style="width:100%;"></td></tr>';
	  
	  
	 echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>Internal Memory </td><td>:</td> <td style='padding-left:50px'>	 " ."</td></tr>";
	 
	 
	 echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>Expandable Memory </td><td>:</td> <td style='padding-left:50px'>	 " . $expandablememory."</td></tr>";
	  
	  
	 echo 				"<tr><td><br></td></tr>";
	 echo				"<tr><td><br></td></tr>";
	 echo 				"<tr> <td style='padding-right:100px;'><em><strong>Processor</strong></em></td></tr>";
	 echo				'<tr><td><hr Style="width:100%;"></td><td><hr Style="width:100%;"></td><td><hr Style="width:100%;"></td></tr>';
	  
	  
	  echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>Processor </td><td>:</td> <td style='padding-left:50px'>	 " . $processor."</td></tr>";


	 echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>Clock Speed </td><td>:</td> <td style='padding-left:50px'>	 " . $secondarycam."</td></tr>";
	 
	  
	  
	  
	  
	echo 				"<tr><td><br></td></tr>";
	 echo				"<tr><td><br></td></tr>";
	 echo 				"<tr> <td style='padding-right:100px;'><em><strong>Camera</strong></em></td></tr>";
	 echo				'<tr><td><hr Style="width:100%;"></td><td><hr Style="width:100%;"></td><td><hr Style="width:100%;"></td></tr>';
	  
	  
	  echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>Primary Camera</td><td>:</td> <td style='padding-left:50px'>	 " . $primarycam."</td></tr>";


	 echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>Secondary Camera </td><td>:</td> <td style='padding-left:50px'>	 " . $secondarycam."</td></tr>";
	   
	  
	  
	  
	   
	  
	echo 				"<tr><td><br></td></tr>";
	 echo				"<tr><td><br></td></tr>";
	 echo 				"<tr> <td style='padding-right:100px;'><em><strong>Others</strong></em></td></tr>";
	 echo				'<tr><td><hr Style="width:100%;"></td><td><hr Style="width:100%;"></td><td><hr Style="width:100%;"></td></tr>';
	  
	  
	  echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>Connectivity Type</td><td>:</td> <td style='padding-left:50px'>	 " . $connectivity."</td></tr>";


	 echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>Charger Type </td><td>:</td> <td style='padding-left:50px'>	 " . $chargertype."</td></tr>";
	    
	   echo				"<tr><td><br></td></tr>";
	 echo 				"<tr > <td style='padding-right:100px'>Warrenty </td><td>:</td> <td style='padding-left:50px'>	 " . $warrenty."</td></tr>";
	  
	  
	  
	echo				'</table>';
     echo             '</div>';
      echo          '</div>';
      echo       ' </div>';
	
	
	
	
	
	
	
	
	
	
    echo      '</div>';
    echo    '</div>';
    echo    '<br>';









 ?>     
        <br>
        <br>
        <br>
      </div>
    </div>

    <!-- Footer Starts Here -->
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