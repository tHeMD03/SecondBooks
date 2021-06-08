<!DOCTYPE html>
<html lang="en">

<?php

if (isset($_POST['login'])) {
  
  require "db_connection.php";
	
  $email = $_POST['email'];
	$login_password = $_POST['pswd'];

	$sql = "SELECT * FROM admin WHERE admin_email='$email';";
	$result = mysqli_query($conn, $sql);

	if($row = mysqli_fetch_assoc($result)){
		if($login_password == $row['admin_password']){
			session_start();
			$_SESSION['aid'] = $row['ID'];
			$_SESSION['admin_name'] = $row['admin_name'];
			header("Location: admin.php");
		}else{
			echo "<script> window.alert('Incorrect Email Or Password') </script>";
		}
	}
}

?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>

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
    	<script src='js/loginvalidation.js' type="text/javascript"></script>
    	<style type="text/css">
    		.login{
    			margin: auto;
    		}
    	</style>
    </head>

    <body>

    	<?php include 'admin_header.php'; ?>

    	<section class="banner-area organic-breadcrumb">
    		<div class="container">
    			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
    				<div class="col-first">
    					<h1>Admin Section</h1>
    				</div>
    			</div>
    		</div>
    	</section>
    	<?php
	    	if (!isset($_SESSION['aid'])) {
	    		echo '<div class="col-lg-6 login">
	    		<div class="login_form_inner">
	    			<h3>Log in to enter</h3>
	    			<form class="row login_form" action="admin.php" method="post" id="contactForm">
	    				<div class="col-md-12 form-group">
	    					<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" onblur="emailValidate()" required>
	    				</div>
	    				<div class="col-md-12 form-group">
	    					<input type="password" class="form-control" id="password" name="pswd" placeholder="Password" onblur="passValidate()" required>
	    				</div>
	<!-- 							<div class="col-md-12 form-group">
									<div class="creat_account">
										<input type="checkbox" id="f-option2" name="selector">
										<label for="f-option2">Keep me logged in</label>
									</div>
								</div> -->
								<div class="col-md-12 form-group">
									<input type="submit" name="login" value="Login" class="primary-btn">
									<a href="forgot_password.php">Forgot Password?</a>
								</div>
							</form>
						</div>
					</div>';
	    	}
    	
		?>

    <!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->

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