 <?php require 'connection.php';
 session_start();
 if ( !isset($_SESSION['loggedin']) ||  $_SESSION['loggedin']!=true )
 {
	
	 header('location: index -admin.php');
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

    <title>admin-addproduct</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
	<!-- <style>
	body{
	background-color: transparent!important;
	background-color: #aaa;
	}
	</style>
	 -->
	
	
	
	
  </head>
 <body >
 
 <div class="callback-form contact-us ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Add a new <em>Product</em></h2>
              <!-- <span>Suspendisse a ante in neque iaculis lacinia</span> -->
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="addproductscript.php" method="post" enctype="multipart/form-data">
                <div class="row">
				<!-- product name -->
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name1" type="text" class="form-control" id="name" placeholder="Product Name" required>
                    </fieldset>
                  </div>
				  <!-- Model Number-->
                 <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="model_number" type="text" class="form-control"  placeholder="Model Number" >
                    </fieldset>
                  </div>
				 </div>
				 
				 
				 <div class="row">
				<!-- description-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input  type="text" name="desc" class="form-control"   placeholder="Description/search terms" required>
                    </fieldset>
                  </div>
				  <!-- quantity-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input  type="number" name="quantity" class="form-control"   placeholder="quantity" required>
                    </fieldset>
                  </div>
				</div>
				 
				 
				<div class="row">
				<!-- Price-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="price" type="number" class="form-control" id="price"  placeholder="price" >
                    </fieldset>
                  </div>
				  <!-- category-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
						<select type="text" name="category" class="browser-default custom-select">
							<option selected>Category</option>
							<option value="Mobile">Mobile</option>
							<option value="Laptop">Laptop</option>
							<option value="Tablet">Tablet</option>
						</select>
                    </fieldset>
                  </div>
				</div>
				<div class="row">
				<!-- Product RAM-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <select name="ram" class="browser-default custom-select">
							<option selected>Product RAM</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="3">4</option>
							<option value="3">6</option>
							<option value="3">8</option>
							<option value="3">12</option>
							<option value="3">16</option>
						</select>
                    </fieldset>
                  </div>
				  <!-- Product ROM-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <select name="internal_memory" class="browser-default custom-select">
							<option selected>Internal Memory</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="6">6</option>
							<option value="8">8</option>
							<option value="12">12</option>
							<option value="16">16</option>
							<option value="32">32</option>
							<option value="64">64</option>
							<option value="128">128</option>
							<option value="256">256</option>
							<option value="512">512</option>
							<option value="1TB">1 TB</option>
							<option value="2TB">2TB</option>
						</select>
                    </fieldset>
                  </div>
				</div>
				<div class="row">
				 <!-- Display size-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                        <input name="displaysize" type="text" class="form-control" id="displaysize"  placeholder="Display Size" >
                    </fieldset>
                  </div>
				  <!-- SIM Type-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="sim" type="text" class="form-control" id="sim"  placeholder="SIM Type">
                    </fieldset>
                  </div>
				</div>
				<div class="row">
				<!-- Battery-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="battery" type="text" class="form-control" id="battery"  placeholder="Battery Capacity">
                    </fieldset>
                  </div>
				  <!-- Processor-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="processor" type="text" class="form-control" id="processor"  placeholder="Processor" >
                    </fieldset>
                  </div>
				</div>
				<div class="row">
				<!-- Clock Speed-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="clockspeed" type="text" class="form-control" id="clockspeed"  placeholder="Clock Speed" >
                    </fieldset>
                  </div>
				  <!-- Expandable memory-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="expandablememory" type="text" class="form-control" id="expandablememory"  placeholder="Expandable memory">
                    </fieldset>
                  </div>
				</div>
				<div class="row">
				<!-- Primary Camera Quality-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="primarycam" type="text" class="form-control" id="primarycam"  placeholder="Primary Camera Quality">
                    </fieldset>
                  </div>
				  <!-- Secondary Camera Quality-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="secondarycam" type="text" class="form-control" id="secondarycam"  placeholder="Secondary Camera Quality" >
                    </fieldset>
                  </div>
				</div>
				<div class="row">
				<!-- Connectivity-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <select name="connectivity" class="browser-default custom-select">
							<option selected>Connectivity Type</option>
							
							<option value="2G">2G</option>
							<option value="3G">3G</option>
							<option value="4G">4G</option>
							<option value="5G">5G</option>
							<option value="6G">6G</option>
							<option value="7G">7G</option>
							
						</select>
                    </fieldset>
                  </div>
				  <!--Width-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="width" type="text" class="form-control" id="width"  placeholder="Device Width" >
                    </fieldset>
                  </div>
				</div>
				<div class="row">
				<!-- height -->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="height" type="text" class="form-control" id="height"  placeholder="Device Height" >
                    </fieldset>
                  </div>
				  <!--Width-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="weight" type="text" class="form-control" id="weight"  placeholder="Device Weight" >
                    </fieldset>
                  </div>
				</div>
				<div class="row">
				<!-- Warrenty-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="warrenty" type="text" class="form-control" id="warrenty"  placeholder="Warrenty" >
                    </fieldset>
                  </div>
				  <!--Charger Type-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="chargertype" type="text" class="form-control" id="chargertype"  placeholder="Charger Type" >
                    </fieldset>
                  </div>
				</div>
				<div class="row">
				<!-- Image-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                     <!-- <input  type="file" name="image1020"  placeholder="Image1" accept="image/*" > -->
					  
					<!--<input type="hidden" value="100000000" name="MAX_FILE_SIZE">  -->
					  <input type="file" name="img123" class="form-control"   accept="image/*" required>  
                    </fieldset>
                  </div>
				  
				</div>
					
					
					
					
					<div class="row">
				<!-- company -->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="company_name" type="text" class="form-control" id="height"  placeholder="Manufacturing Company" >
                    </fieldset>
                  </div>
				  <!--catche-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="catche" type="text" class="form-control" id="weight"  placeholder="Catche Memory" >
                    </fieldset>
                  </div>
				</div>
					
					<div class="row">
				<!-- OS -->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="os" type="text" class="form-control" id="height"  placeholder="Operating System" >
                    </fieldset>
                  </div>
				  <!--touch screen-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <select name="Touch_Screen" class="browser-default custom-select">
							<option selected>Touch Screen</option>
							
							<option value="Yes">YES</option>
							<option value="NO">NO</option>
							
							
						</select>
                    </fieldset>
                  </div>
				</div>
					
					
					
					
				
					
					
					
					
                  <div class="col-lg-12">
                    <fieldset>
					<a href="index -admin.php" class="filled-button">Back</a>
                      <button type="submit" name="submit" id="form-submit" class="filled-button">Add Product</button>
                    </fieldset>
                  </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
	
</body>
</html>