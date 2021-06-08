<?php

session_start();

require "db_connection.php";

$u_id = $_SESSION['uid'];

$sql = "DELETE FROM cart WHERE user_id='$u_id';";

if (mysqli_query($conn, $sql)) {
	header("Location: index.php");
}

?>