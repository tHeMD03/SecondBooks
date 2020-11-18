<?php
session_start();

if (isset($_SESSION['uid'])) {

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "booksdb";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Connection Failed". mysqli_connect_error());
	}

	$cart_total = 0;

	$u_id = $_SESSION['uid'];

	$sql = "SELECT cart_total FROM cart WHERE user_id ='$u_id';";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		
		while ($row = mysqli_fetch_assoc($result)) {
			$cart_total = $cart_total + $row['cart_total'];
		}
	}

	mysqli_close($conn);
}


//print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    	.logout{
    		margin-top: 4px;
    	}
    	#welcome{
    		font-size: 22px;
    		margin-left: 5px;
    		margin-top: 15px;
    		color: black;
    	}
    </style>
</head>
<body>
<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php">JUNGLEBOOK</a>
					<?php
					if (isset($_SESSION['uname'])){
						echo '<p id="welcome"> Welcome <b>'. $_SESSION['uname'] .'</b></p>';
					}
					?>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="category.php?category=">Category</a></li>
							
									<?php 
									if (isset($_SESSION['uid'])) {
										echo '<li class="nav-item submenu dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 			aria-expanded="false">Shop</a>
											<ul class="dropdown-menu">
											<li class="nav-item"><a class="nav-link" href="cart.php">Shopping Cart</a></li>
											<li class="nav-item"><a class="nav-link" href="tracking.php">Tracking</a></li>
											</ul>
											</li>';
									}
									?>

							<?php
							if(!isset($_SESSION['uid'])){
								echo "<li class='nav-item'><a class='nav-link' href='login.php'>Login</a></li>";
							}
							?>
							<li>
							<?php
							if(isset($_SESSION['uid'])){
								echo "<span><form method = 'POST' action='logout.php'>
								<button class='btn btn-warning logout' type='submit' name='logout'>Logout</button>
								</form></span>";
							}
							?>
							</li>
							<!-- <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Login</a> -->
								 <!-- <ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="sign_up.php">Sign up</a></li>
									<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
								</ul> -->
							<li class="nav-item">
							<div class="col-sm-6" style="">
							<img src="upload/<?php 
										if(isset($_SESSION['uid'])){echo $_SESSION['uid'] .'.jpg';}
										else{echo 'default.jpg';}?>" style=" width: 45px; height: 45px; border-radius: 50%;">
							</div>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
						<?php
						if (isset($_SESSION['uid'])) {
							echo '
							<li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
							<h6 style="margin-top: 20px; margin-left:-30px; width: 18px; text-align:center; background-color: orange; color: white; border-radius: 50%;">';

							echo $cart_total;


							echo '</h6>
							</li>';
						}
						?>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
</body>
</html>