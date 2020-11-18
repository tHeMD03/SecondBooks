<!DOCTYPE html>
<html lang="en">



<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Users</title>

    <!-- CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/signup_validation.js" type="text/javascript"></script>
	<style type="text/css">
		.adduser{
			float: left;
		}
		.addadmin{
			float: right;
		}
	</style>
</head>

<body>
	
	<?php include 'admin_header.php'; ?>
	<?php
		if (!$_SESSION['aid']) {
			header("Location: admin.php"); 
		}
	?>

    <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Add Users</h1>
				</div>
			</div>
		</div>
	</section>

    <div class="col-lg-5 adduser">
					<div style="padding-top: 20px" class="login_form_inner">
						<h2>Add User</h2>
						<form class="row login_form" action="add_user_post.php" method="post" id="contactForm" enctype="multipart/form-data">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="fname" name="firstname" placeholder="First Name" 
								onblur="checkFname()" required>
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="lname" name="lastname" placeholder="Last Name"
								onblur="checkLname()" required>
                            </div>
                            <div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" onblur="EmailValidate()" required>
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="phone" name="phone" placeholder="Contact No." onblur="phoneValidation()" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control password" id="password" name="crtpassword" placeholder="Create Password" required>
                            </div>
                            <div class="col-md-12 form-group">
								<input type="password" class="form-control password" id="cpassword" name="confpassword" placeholder="Confirm Password" 
								onblur="passValidate()" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="utype" name="utype" placeholder="Enter User Type" required>
                            </div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="city" name="city" placeholder="Enter your City" onblur="cityValidate()" required>
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter Pincode" onblur="pincodeValidate()" required>
                            </div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="security1" name="que1" placeholder="Security Que. 1: What's your pet name?" required>
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="security2" name="que2" placeholder="Security Que. 2: What's your college name?" required>
							</div>
							<div class="col-md-12 form-group">
								<p>Upload ur Profile Pic: </p>
								<input type=file class="form-control" id="profileimg" name="file" 
								required>
							</div>
							<div class="col-md-12 form-group">
								<!-- <div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div> -->
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" name="submit" class="primary-btn">Add User</button>
								<!-- <a href="#">Forgot Password?</a> -->
							</div>
						</form>
					</div>
				</div>
				<div>
					<a href="add_admin.php" class="primary-btn" style="margin-top: 20px;">Add Admin</a>
				</div>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>