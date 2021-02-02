<?php require 'connection.php';


session_start();
 if ( !isset($_SESSION['loggedin']) ||  $_SESSION['loggedin']!=true )
 {
	 header('location:index.php');
	 exit;
 }
 
 
 

 
 
 ?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>user-profile</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
	
	
	
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
	margin-top: 0px;
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


	button.filled-button {
	background-color: #a4c639;
	color: #fff;
	font-size: 13px;
	text-transform: uppercase;
	font-weight: 700;
	padding: 12px 30px;
	border-radius: 30px;
	border: 0px solid grey;
	display: inline-block;
	transition: all 0.3s;
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
	
	
	 
	
	
	
	
  </head>
 <body>
 
 <!--modal login-->
 <form action="#" method="post">
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Change Password</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fa fa-lock prefix grey-text">&nbsp Current Password</i>
          <input type="password" name="password" id="defaultForm-email" style="border-radius:30px" class="form-control br validate" required>
         <!--  <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label> -->
        </div>
		<div class="md-form mb-5">
          <i class="fa fa-lock prefix grey-text">&nbsp New Password</i>
          <input type="password" name="new_password" id="defaultForm-email" style="border-radius:30px" class="form-control br validate" required>
         <!--  <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label> -->
        </div>
        <div class="md-form mb-4">
          <i class="fa fa-lock prefix grey-text">&nbsp Confirm New Password</i>
          <input type="password" name="confirm_newpassword" id="defaultForm-pass" style="border-radius:30px" class="form-control validate" required>
         <!--  <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label> -->
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button name="changepwd" class="filled-button">Change Password</button>
      </div>
    </div>
  </div>
</div>
</form>
<!--modal login-->
 
 
 <div class="callback-form contact-us ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2> <em>profile</em></h2>
             
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="get">
                <div class="d-flex justify-content-center">
				<!--  name -->
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name12" type="text" class="form-control" id="name" placeholder=" Name" value="<?php echo $_SESSION['user_name'];?>" required="">
                    </fieldset>
                  </div>
				  <!-- Phone number-->
                 
				 </div>
				<div class="d-flex justify-content-center">
					<div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="phone_number12" type="text" class="form-control" id="phone_number" value="<?php echo $_SESSION['phno'];?>" placeholder="Phone Number" required="">
                    </fieldset>
                  </div>
				</div>
				  
				  <!-- mail id-->
				<div class="d-flex justify-content-center">
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                        <input name="email12" type="email" class="form-control" id="email"  placeholder="Email address" value="<?php echo $_SESSION['email'];?>" required="">
                    </fieldset>
                  </div>
				</div>
				  
				  <!-- Birthdate-->
				<div class="d-flex justify-content-center">
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                        <input name="bday" type="date" class="form-control" id="bday"  placeholder="Birthdate" value="<?php echo $_SESSION['birthdate'];?>" required="">
                    </fieldset>
                  </div>
				</div>
				
                   <!-- gender-->
				<div class="d-flex justify-content-center">
				   <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
					<select name="gender" class="browser-default custom-select" value="<?php echo $_SESSION['gender'];?>">
							<option selected><?php echo $_SESSION['gender'];?></option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							
						</select>

                    </fieldset>
                  </div>
				</div>
				
				
                  <div class="col-lg-12 " style="margin-bottom:130px">
					<a  href="#" class='filled-button'>Update</a>
					  <a href="" class="filled-button" data-toggle="modal" data-target="#modalLoginForm">Change Password </a>
					  <a href="index.php" class="filled-button">Go to home Page</a>
                    
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

</body>
</html>