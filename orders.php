<?php
include 'connection.php';


session_start();
 if ( !isset($_SESSION['loggedin']) ||  $_SESSION['loggedin']!=true )
 {
	 header('location:index.php');
	 exit;
 }
 $uid=$_SESSION['userid'];
 

?>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	 
    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<style>
* {
  box-sizing: border-box;
}

.shopping-cart {
  width: 1100px;
  height: 150px;
  margin: 80px auto;
  background: #FFFFFF;
  box-shadow: 3px 2px 3px 3px rgba(0,0,0,0.10);
  border-radius: 6px;
 
  display: flex;
  flex-direction: column;
}

.title {
  height: 60px;
  border-bottom: 1px solid #E1E8EE;
  padding: 20px 30px;
  color: #5E6977;
  font-size: 18px;
  font-weight: 400;
}
 
.item {
  padding: 20px 30px;
  height: 120px;
  display: flex;
}
 
.item:nth-child(3) {
  border-top:  1px solid #E1E8EE;
  border-bottom:  1px solid #E1E8EE;
}


 
.like-btn {
  position: absolute;
  top: 9px;
  left: 15px;
  background: url('twitter-heart.png');
  width: 60px;
  height: 60px;
  background-size: 2900%;
  background-repeat: no-repeat;
}

.is-active {
  animation-name: animate;
  animation-duration: .8s;
  animation-iteration-count: 1;
  animation-timing-function: steps(28);
  animation-fill-mode: forwards;
}
 
@keyframes animate {
  0%   { background-position: left;  }
  50%  { background-position: right; }
  100% { background-position: right; }
}

.image {
  margin-right: 50px;
}
 
Let’s add some basic style to  product name and description.
.description {
  padding-top: 10px;
  margin-right: 60px;
  width: 115px;
}
 
.description span {
  display: block;
  font-size: 14px;
  color:black;
  font-weight: 400;
}
 
.description span:first-child {
  margin-bottom: 5px;
   color:black;
}
.description span:last-child {
  font-weight: 300;
  margin-top: 8px;
  color: black;
}

.quantity {
  padding-top: 20px;
  margin-right: 60px;
}
.quantity input {
  -webkit-appearance: none;
  border: none;
  text-align: center;
  width: 32px;
  font-size: 16px;
  color: #43484D;
  font-weight: 300;
}

 


.total-price {
  width: 83px;
  padding-top: 27px;
  text-align: center;
  font-size: 16px;
  color: #43484D;
  font-weight: 300;
}

@media (max-width: 800px) {
  .shopping-cart {
    width: 100%;
    height: auto;
    overflow: hidden;
  }
  .item {
    height: auto;
    flex-wrap: wrap;
    justify-content: center;
  }
  .image img {
    width: 50%;
  }
  .image,
  .quantity,
  .description {
    width: 100%;
    text-align: center;
    margin: 6px 0;
  }
 
}


.button1{
	margin-left:70px;
}
.qty
{
	width:30px;
	height:30px;
	margin-top:30px;
}
.add{
	margin-top:35px;
	margin-left:100px;
}
.add1{
	margin-top:35px;
	margin-left:5px;
}
</style>
  </head>
  <body>
  
  


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
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item ">
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
                 <?php  if (empty($_SESSION)){echo  "<a href='' class='dropdown-item'  id='logid12' data-toggle='modal' data-target='#modalLoginForm' >Login </a> ";}?>   
				   <?php if (!empty($_SESSION)){echo " <a class='dropdown-item' href=''>Manage Addresses</a>   ";}?>
					<?php if (!empty($_SESSION)){echo " <a class='dropdown-item' href='user_logout.php'>Logout</a>   ";}?>
					
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact123 - copy.php">Contact Us</a>
              </li>
			  <li class="nav-item ">
                <a href="cart.php" class="fa fa-shopping-cart" style="color:white;margin-top:1px;padding-top:1px;font-size:20px" aria-hidden="true"></a>
				<br>
				<a href="cart.php" style="color:white" class="nav-link ">cart</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
<br>
<br>






<?php

$sql="SELECT * FROM order_history WHERE user_id= '$uid'";
$result=mysqli_query($conn,$sql);


echo "<br>";
echo "<br>";
echo "<br>";
	$totalprice=0;

while($row = mysqli_fetch_assoc($result))
{
	
	$q=intval($row['quantity']);
	$pid=$row['product_id'];
	
	$sql1="SELECT * FROM product WHERE product_id=$pid";
	$result1=mysqli_query($conn,$sql1);
	$row1=mysqli_fetch_assoc($result1);
	$path=$row1['images_path'];
	$price=intval($row1['price']);
	$prid=$row1['product_id'];
	$product_name=$row1['product_name'];
	$desc=$row1['description'];
	
	

echo '<div class="shopping-cart" style="margin-top:100px">';
  echo '<div class="item">';
  
  
  
  echo   '<div class="buttons">';
  echo       '<span class="delete-btn"></span>';
  echo     '<span class="like-btn"></span>';
  echo   '</div>';
 
 
 
  echo   '<div class="image">';
  echo    "<a href='product-details.php?productid=$pid'><img src='$path' width='50' height='80' style='float:left' alt='' /></a>";
  echo  '</div>';
 
 
  echo  '<div class="description">';
  echo "<a href='product-details.php?productid=$pid'><span style='width:400px'>$desc</span></a>";
 echo   '</div>';
 
  $totalprice=$q*$price;
  echo  '<div class="description" style="margin-left:150px">';
  
   echo "<table>";
   echo "<span style='width:400px'><tr><td>Quantity </td><td>:   $q</td></tr></span>";
   echo "<span style='width:400px'><tr><td>Total Price </td><td>: ₹  $totalprice</td></tr></span>";
   echo "</table>";
  
 echo   '</div>';
 
 
 echo   '</div>';
echo '</div>';



	
}



?>




<script>
function qty(){
	var x=parseInt(document.getElementById('qty').value);
	var price=parseInt(document.getElementById('hprice').value);
	var y=x*price;
	document.getElementById("qtyxprice").innerHTML=y;
	
}
</script>













<script>
$('.like-btn').on('click', function() {
   $(this).toggleClass('is-active');
});

$('.minus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value &amp;amp;gt; 1) {
        value = value - 1;
    } else {
        value = 0;
    }
 
  $input.val(value);
 
});
 
$('.plus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value &amp;amp;lt; 100) {
        value = value + 1;
    } else {
        value =100;
    }
 
    $input.val(value);
});
</script>


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