<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

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

		th, td{
			color: black;
			padding: 5px 5px;
			border-bottom: 2px solid grey;
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
					<h1>Users</h1>
				</div>
			</div>
		</div>
	</section>

	<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "booksdb";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		echo "Connection Failed ". mysqli_connect_error();
	}

	$sql = "SELECT * FROM `books details`;";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		echo "<table style='width: 100%;'>
		<tr class='header'>
		<th>Book ID</th>
		<th>Book Title</th>
		<th>ISBN</th>
		<th>Genre</th>
		<th>Author</th>
		<th>Price(Rs.)</th>
		<th>Pages</th>
		<th>Publisher</th>
		<th>Language</th>
		<th></th>
		</tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			$bid = $row['book_id'];
			echo "<tr>
			<td>".$row['book_id']."</td>
			<td>".$row['book_title']."</td>
			<td>".$row['book_ISBN']."</td>
			<td>".$row['book_genre']."</td>
			<td>".$row['author_name']."</td>
			<td>".$row['book_price']."</td>
			<td>".$row['book_pages']."</td>
			<td>".$row['book_publisher']."</td>
			<td>".$row['book_language']."</td>
			<td><a href='remove_book.php?bid=$bid'>
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