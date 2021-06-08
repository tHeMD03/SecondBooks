<?php

session_start();

require "db_connection.php";

$u_id = $_SESSION['uid'];
$sub_total = 0; 
$items_count = 0;

$sql1 = "SELECT * FROM cart WHERE user_id ='$u_id';";
$result = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$sub_total = $sub_total + $row['price_total'];
		$items_count = $items_count + $row['cart_total'];
	}

	$date = date("yy/m/d");
	$order_id = $name.(string)rand(100,999);
	$sub_total += 50;

	$sql = "INSERT INTO orders (order_id, user_id, order_date, order_total, order_quantity) VALUES ('$order_id', '$u_id', '$date', '$sub_total', '$items_count');";
	if (mysqli_query($conn, $sql)) {
		header("Location: confirmation.php");
	}else{
		header("Location: confirmation.php");
	}
}else{
	header("Location: index.php");
}
?>