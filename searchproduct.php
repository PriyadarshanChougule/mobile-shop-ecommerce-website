<?php
include 'connection.php';
session_start();
?>

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
	<!--<style>
	.x{
		padding-top:500px;
		margin-left:50px;
	}
	</style>-->
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
               <form action="searchproduct.php" method="post">
				<input type="text" placeholder="Search.." name="search123" style="border-radius:10px;margin-top:10px;margin-left:0px">
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
	
	
	
	
	
	
		
<br>
<br>

<?php
include 'connection.php';
if(isset($_POST['searchproduct']))
{
	$searchterm=$_POST['search123'];
	if($searchterm=="")
	{
		echo "<br><br><br><br>";
		echo "<p style='text-align:center;font-size:25px'>Please enter something to search...</p>";
	}
	else{
	$sql="SELECT * FROM product where description LIKE '%$searchterm%' AND admin_id != 0 ";
	
	
	
	
	$count=0;
	$result1=$conn->query($sql);
	echo "<table>";
	while($row1 = mysqli_fetch_assoc($result1))
		{ 
			$count++;
			$path=$row1['images_path'];
			$desc12=$row1['description'];
			$pr=$row1['price'];
			$productid=$row1['product_id'];
			if($count%3==1)
			{				
				echo "<tr>";
			}
			
			echo "<td style='margin-right:0px;padding-right:0px'>";
			echo '<div class="services">';
			echo '<div class="container">';
			echo '<div class="row container">';
			
			
		  
			
			echo  '<div class="col-md-12">';
			echo  '<div class="service-item">';
			echo   "<img src='$path' width='200px' height='300px'  style='margin-right:0px;padding-right:0px' alt=''>";
            echo  '<div class="down-content">';
            echo  '<h4></h4>';
            echo '<div style="margin-bottom:10px;">';
            echo   "<span> ₹ $pr  </span>";
			
			echo '</div>';
            echo "<p style='width:300px'>'$desc12'</p>";
            echo "<a href='product-details.php?productid=$productid' class='filled-button'>View More</a>";
            echo '</div>';
            echo '</div>'; 
			echo '</div>';
			echo '</td>';
		    if($count%3==0)
			{
				echo "</tr>";
			}
			
        echo '</div>';
      echo '</div>';
    echo '</div>';	
	
		}
echo "</table>";
	
	}
	
	
	
	
	
}



if(isset($_POST['submitmobile']))
{
	$sqlmobile="SELECT * FROM Product where category='Mobile' AND admin_id!= 0";
		
	$count1=0;
	$result2=$conn->query($sqlmobile);
	echo "<table>";
	while($row2 = mysqli_fetch_assoc($result2))
		{ 
			$count1++;
			$path2=$row2['images_path'];
			$desc13=$row2['description'];
			$pr2=$row2['price'];
			$productid2=$row2['product_id'];
			if($count1%3==1)
			{				
				echo "<tr>";
			}
			
			echo "<td style='margin-right:0px;padding-right:0px'>";
			echo '<div class="services">';
			echo '<div class="container">';
			echo '<div class="row container">';
			
			
		  
			
			echo  '<div class="col-md-12">';
			echo  '<div class="service-item">';
			echo   "<img src='$path2' width='200px' height='300px'  style='margin-right:0px;padding-right:0px' alt=''>";
            echo  '<div class="down-content">';
            echo  '<h4></h4>';
            echo '<div style="margin-bottom:10px;">';
            echo   "<span> ₹ $pr2  </span>";
			
			echo '</div>';
            echo "<p style='width:300px'>'$desc13'</p>";
            echo "<a href='product-details.php?productid=$productid2' class='filled-button'>View More</a>";
            echo '</div>';
            echo '</div>'; 
			echo '</div>';
			echo '</td>';
		    if($count1%3==0)
			{
				echo "</tr>";
			}
			
        echo '</div>';
      echo '</div>';
    echo '</div>';	
	
		}
echo "</table>";
	
	
	
}


if(isset($_POST['submitlaptop']))
{
	$sqlmobile="SELECT * FROM Product where category='Laptop' AND admin_id!= 0";
		
	$count1=0;
	$result2=$conn->query($sqlmobile);
	echo "<table>";
	while($row2 = mysqli_fetch_assoc($result2))
		{ 
			$count1++;
			$path2=$row2['images_path'];
			$desc13=$row2['description'];
			$pr2=$row2['price'];
			$productid2=$row2['product_id'];
			if($count1%3==1)
			{				
				echo "<tr>";
			}
			
			echo "<td style='margin-right:0px;padding-right:0px'>";
			echo '<div class="services">';
			echo '<div class="container">';
			echo '<div class="row container">';
			
			
		  
			
			echo  '<div class="col-md-12">';
			echo  '<div class="service-item">';
			echo   "<img src='$path2' width='200px' height='300px'  style='margin-right:0px;padding-right:0px' alt=''>";
            echo  '<div class="down-content">';
            echo  '<h4></h4>';
            echo '<div style="margin-bottom:10px;">';
            echo   "<span> ₹ $pr2  </span>";
			
			echo '</div>';
            echo "<p style='width:300px'>'$desc13'</p>";
            echo "<a href='product-details.php?productid=$productid2' class='filled-button'>View More</a>";
            echo '</div>';
            echo '</div>'; 
			echo '</div>';
			echo '</td>';
		    if($count1%3==0)
			{
				echo "</tr>";
			}
			
        echo '</div>';
      echo '</div>';
    echo '</div>';	
	
		}
echo "</table>";
	
	
	
}





if(isset($_POST['submittablet']))
{
	$sqlmobile="SELECT * FROM Product where category='Tablet' AND admin_id!= 0";
		
	$count1=0;
	$result2=$conn->query($sqlmobile);
	echo "<table>";
	while($row2 = mysqli_fetch_assoc($result2))
		{ 
			$count1++;
			$path2=$row2['images_path'];
			$desc13=$row2['description'];
			$pr2=$row2['price'];
			$productid2=$row2['product_id'];
			if($count1%3==1)
			{				
				echo "<tr>";
			}
			
			echo "<td style='margin-right:0px;padding-right:0px'>";
			echo '<div class="services">';
			echo '<div class="container">';
			echo '<div class="row container">';
			
			
		  
			
			echo  '<div class="col-md-12">';
			echo  '<div class="service-item">';
			echo   "<img src='$path2' width='200px' height='300px'  style='margin-right:0px;padding-right:0px' alt=''>";
            echo  '<div class="down-content">';
            echo  '<h4></h4>';
            echo '<div style="margin-bottom:10px;">';
            echo   "<span> ₹ $pr2  </span>";
			
			echo '</div>';
            echo "<p style='width:300px'>'$desc13'</p>";
            echo "<a href='product-details.php?productid=$productid2' class='filled-button'>View More</a>";
            echo '</div>';
            echo '</div>'; 
			echo '</div>';
			echo '</td>';
		    if($count1%3==0)
			{
				echo "</tr>";
			}
			
        echo '</div>';
      echo '</div>';
    echo '</div>';	
	
		}
echo "</table>";
	
	
	
}



	echo '<br>';
	echo '<br>';
	echo '<br>';echo '<br>';echo '<br>';
	echo '<div class="sub-footer" style="position:fixed;left:0;width:100%; bottom: 0;">';
     echo '<div class="container">';
	echo '<div class="row">';
    echo  '       <div class="col-md-12">';
    echo        '<p>';
    echo            'Copyright © 2020 Company Name';
      echo            ' -  MOBILE STORE Website';
     echo          '</p>';
     echo       ' </div>';
     echo      '</div>';
    echo  '  </div>';
    echo '</div>';
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