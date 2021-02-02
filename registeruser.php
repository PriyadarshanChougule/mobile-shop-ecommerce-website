<?php include 'connection.php';
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone=$_POST['phone_number'];
	$confirmpass=$_POST['confirm'];
	$birthdate=$_POST['birthdate'];
	$gender=$_POST['gender'];
	

if($password==$confirmpass)
{
	$hash = password_hash($password, PASSWORD_DEFAULT);
	$sql="INSERT INTO user_account VALUES('','$name','$email','$phone','$gender','$birthdate','','$hash')";
	$result=mysqli_query($conn,$sql);
	echo "success";
}else{
	//echo "<script>alert('passwords don't match!!')</script>";
	echo '<script>alert("Passwords Do Not Match")</script>'; 
}
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

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <!-- <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css"> -->
	 <style>
	 h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}
.section-heading {
	text-align: center;
	margin-bottom: 80px;
}

.section-heading h2 {
	font-size: 36px;
	font-weight: 600;
	color: #1e1e1e;
}

.section-heading em {
	font-style: normal;
	color: #a4c639;
}

.section-heading span {
	display: block;
	margin-top: 15px;
	text-transform: uppercase;
	font-size: 15px;
	color: #666;
	letter-spacing: 1px;
}

	
	body {
  font-family: 'Poppins', sans-serif;
  overflow-x: hidden;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
ul {
	padding: 0;
	margin: 0;
	list-style: none;
}
a.filled-button {
	background-color: #a4c639;
	color: #fff;
	font-size: 13px;
	text-transform: uppercase;
	font-weight: 700;
	padding: 12px 30px;
	border-radius: 30px;
	display: inline-block;
	transition: all 0.3s;
}

a.filled-button:hover {
	background-color: #fff;
	color: #a4c639;
}

a.border-button {
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

a.border-button:hover {
	background-color: #fff;
	color: #a4c639;
}
.section-heading em {
	font-style: normal;
	color: #a4c639;
}
#preloader .jumper {
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  display: block;
  position: absolute;
  margin: auto;
  width: 50px;
  height: 50px;
}

.request-form {
	background-color: #a4c639;
	padding: 40px 0px;
	color: #fff;
}

.request-form h4 {
	font-size: 22px;
	font-weight: 600;
}

.request-form span {
	font-size: 15px;
	font-weight: 400;
	display: inline-block;
	margin-top: 10px;
}

.request-form a.border-button {
	margin-top: 12px;
	float: right;
}

.callback-services {
	border-top: 1px solid #eee;
	paddin-top:140px;
}

.contact-us {
	background-color: #f7f7f7;
	padding: 70px 0px;
}

.contact-us .contact-form {
	background-color: transparent!important;
	padding: 0!important;
}

.callback-form {
	/* margin-top: 140px;*/ 
}

.callback-form .contact-form {
	background-color: #a4c639;
	padding: 60px;
	border-radius: 5px;
	text-align: center;
}

.callback-form .contact-form select,
.callback-form .contact-form input {
	border-radius: 20px;
	height: 40px;
	line-height: 40px;
	display: inline-block;
	padding: 0px 15px;
	color: #6a6a6a;
	font-size: 13px;
	text-transform: none;
	box-shadow: none;
	border: none;
	margin-bottom: 35px;
}

.callback-form .contact-form select:focus,
.callback-form .contact-form input:focus {
	outline: none;
	box-shadow: none;
	border: none;
}

.callback-form .contact-form textarea {
	border-radius: 20px;
	height: 120px;
	max-height: 200px;
	min-height: 120px;
	display: inline-block;
	padding: 15px;
	color: #6a6a6a;
	font-size: 13px;
	text-transform: none;
	box-shadow: none;
	border: none;
	margin-bottom: 135px;
}

.callback-form .contact-form textarea:focus {
	outline: none;
	box-shadow: none;
	border: none;
}

.callback-form .contact-form ::-webkit-input-placeholder { /* Edge */
  color: #aaa;
}
.callback-form .contact-form :-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #aaa;
}
.callback-form .contact-form ::placeholder {
  color: #aaa;
}

.callback-form .contact-form button.border-button {
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
	outline: none;
	box-shadow: none;
	text-shadow: none;
	cursor: pointer;
}

.callback-form .contact-form button.border-button:hover {
	background-color: #fff;
	color: #a4c639;
}

.contact-us .contact-form button.filled-button {
	background-color: #a4c639;
	color: #fff;
	border: none;
	font-size: 13px;
	text-transform: uppercase;
	font-weight: 700;
	padding: 12px 30px;
	border-radius: 30px;
	display: inline-block;
	transition: all 0.3s;
	outline: none;
	box-shadow: none;
	text-shadow: none;
	cursor: pointer;
}

.contact-us .contact-form button.filled-button:hover {
	background-color: #fff;
	color: #a4c639;
}


	
	</style>
	
	
	 
	
	
	
	
  </head>
 <body >
 <div class="callback-form contact-us ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2> <em>Register</em> Here</h2>
              <!-- <span>Suspendisse a ante in neque iaculis lacinia</span> -->
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="registeruser.php" method="post">
                <div class="d-flex justify-content-center">
				<!--  name -->
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder=" Name" required="">
                    </fieldset>
                  </div>
				  <!-- Phone number-->
                 
				 </div>
				  <div class="d-flex justify-content-center">
					<div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="phone_number" type="text" class="form-control" id="phone_number"  placeholder="Phone Number" required="">
                    </fieldset>
                  </div>
				  </div>
				<div class="d-flex justify-content-center">
				 <!-- mail id-->
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                        <input name="email" type="email" class="form-control" id="email"  placeholder="Email address" required="">
                    </fieldset>
                  </div>
				  </div>
				  
				  
				  <!--birthdate-->
				<div class="d-flex justify-content-center">
				<div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="birthdate" type="date" class="form-control" id="birthdate"  placeholder="Birthdate" required="">
                    </fieldset>
                 </div>
				</div>
				  
				  
				  
				    <!--gender-->
				<div class="d-flex justify-content-center">
				<div class="col-lg-6 col-md-12 col-sm-12">
                   
				  <fieldset>
                      <select name="gender" class="browser-default custom-select">
							<option selected>Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							
						</select>
                    </fieldset>
				  </div>
				</div>
				  
				  
				  
				  
				  <!-- password-->
				   
				
				<div class="d-flex justify-content-center">
				<div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="password" type="password" class="form-control" id="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
						 title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"	placeholder="Password" required="">
                    </fieldset>
                  </div>
				</div>
				 <!-- confirm password-->
				<div class="d-flex justify-content-center">
				<div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="confirm" type="password" class="form-control" id="confirm"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
						 title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Confirm Password" required="">
                    </fieldset>
                 </div>
				</div>
				<script>
				var password = document.getElementById("password")
				, confirm_password = document.getElementById("confirm");

					function validatePassword(){
					if(password.value != confirm_password.value) {
					confirm_password.setCustomValidity("Passwords Don't Match");
					}
				</script>
				
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" name="submit" id="form-submit"  class="filled-button">Register</button>
					   <a href="index.php" id="form-submit" class="filled-button">Go to Home page</a>
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