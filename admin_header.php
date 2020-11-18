<!DOCTYPE html>
<html lang="en">

<?php
session_start();
//print_r($_SESSION);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
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
					<a class="navbar-brand logo_h" href="admin.php">JUNGLEBOOK ADMIN SECTION</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<!-- <li class="nav-item active"><a class="nav-link" href="admin.php">Home</a></li> -->
							<?php 
							if (isset($_SESSION['aid'])) {
								echo '<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false">Books</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="add_product.php">Add Books</a></li>
									<li class="nav-item"><a class="nav-link" href="books_data.php">Books Data</a></li>
									</li>
								</ul>
							</li>
                            <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false">Users</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="add_user.php">Add user</a></li>
									<li class="nav-item"><a class="nav-link" href="show_user.php">show user</a></li>
									<li class="nav-item"><a class="nav-link" href="delete_user.php">Delete user</a></li>
									</li>
								</ul>
							</li>
							
						</ul>
					</div>
<!-- 					<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li> -->';
					}
					?>
					<?php
						if(isset($_SESSION['aid'])){
								echo "<span><form method = 'POST' action='logout_admin.php'>
								<button class='btn btn-warning' type='submit' name='logout' style='margin-left: 20px;'>Logout</button>
								</form></span>";
							}
						?>

						<img src="upload/admin/<?php
								if(isset($_SESSION['aid']))
									{echo $_SESSION['aid'].'.jpg';}
								else
									{echo 'default.jpg';}	
						?>"  style="width: 50px; height: 50px; border-radius: 50%; border: 1px solid white; margin-top: 10px; margin-left: 20px; margin-bottom: 10px;">
						
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