<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete User</title>

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
	<style type="text/css">
		.header{
			background-image: linear-gradient(270deg,#ff4000, #ffe600);
		}

		table{
			margin-left: 20px;
		}

		th, td{
			color: black;
			padding: 5px 5px;
			border-bottom: 2px solid grey;
		}

		a{
			color: black;
		}

		tr:hover{
			background-color: #d9d9d9;
		}
	</style>
</head>

<body>

	<?php include 'admin_header.php'; ?>

    <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Delete User</h1>
				</div>
			</div>
		</div>
	</section>

	<?php
	    if (isset($_SESSION['aid'])) {
	    	
	    require "db_connection.php";

		$sql = "SELECT * FROM users;";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "<table style='width: 100%;'>
			<tr class='header'>
			<th>user_id</th>
			<th>first_name</th>
			<th>last_name</th>
			<th>user_email</th>
			<th>user_mobile</th>
			<th>user_address</th>
			<th>user_city</th>
			<th>user_pincode</th>
			<th></th>
			</tr>";
			while ($row = mysqli_fetch_assoc($result)) {
				$uid = $row['user_id'];
				echo "<tr>
				<td>".$row['user_id']."</td>
				<td>".$row['first_name']."</td>
				<td>".$row['last_name']."</td>
				<td>".$row['user_email']."</td>
				<td>".$row['user_mobile']."</td>
				<td>".$row['user_address']."</td>
				<td>".$row['user_city']."</td>
				<td>".$row['user_pincode']."</td>
				<td><a href='remove_user.php?uid=$uid'>
				<svg width='1.5em' height='1.5em' viewBox='0 0 16 16' class='bi bi-x-circle' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
				<path fill-rule='evenodd' d='M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
				<path fill-rule='evenodd' d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
				</svg>
				</a></td>
				</tr>";
			}
			echo "</table>";

		}else{
			echo "<h2>0 Results !!</h2>";
		}

		mysqli_close($conn);
	} # End of first if
	else
	{header("Location: admin.php");}

	?>

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