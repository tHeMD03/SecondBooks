<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booksdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
	die("Connection Failed". mysqli_connect_error());
}

if (isset($_SESSION['uid'])) {
	$book_id = $_GET['book_id'];

	$u_id = $_SESSION['uid'];

	$sql3 = "SELECT book_id,book_price FROM `books details` WHERE book_id='$book_id';";
	$result1 = mysqli_query($conn, $sql3);

	$sql = "SELECT * FROM cart WHERE user_id='$u_id' AND book_id='$book_id';";
	$result = mysqli_query($conn, $sql);



	if (mysqli_num_rows($result) == 1) {

		$row = mysqli_fetch_assoc($result);
		$cart_total = $row['cart_total'] + 1;

		$row1 = mysqli_fetch_assoc($result1);
		$price_total = $cart_total * $row1['book_price'];

		$sql2 = "UPDATE cart SET cart_total='$cart_total',price_total='$price_total' WHERE user_id='$u_id' AND 
				book_id='$book_id';";

		if(mysqli_query($conn, $sql2)) {
			header("Location: category.php?category=");
		}
	}else{
		$cart_total = 1;
		$row = mysqli_fetch_assoc($result1);
		$price_total = $cart_total * $row['book_price']; 

		$sql1 = "INSERT INTO cart (user_id, cart_total, book_id, price_total) VALUES ('$u_id', '$cart_total', '$book_id', 
		'$price_total');";

		if (mysqli_query($conn, $sql1)) {
			header("Location: category.php?category=$error");
		}
	}
}else{
	header("Location: login.php");
}


mysqli_close($conn);

?>