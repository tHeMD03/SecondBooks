<?php

	require "db_connection.php";

	$uid = $_GET['uid'];
	$bid = $_GET['bid'];

	$sql = "DELETE FROM cart WHERE user_id= '$uid' AND book_id= '$bid';";

	if (mysqli_query($conn, $sql)) {
		header("Location: cart.php");
	}

?>