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

$u_id = $_SESSION['uid'];

$sql = "DELETE FROM cart WHERE user_id='$u_id';";

if (mysqli_query($conn, $sql)) {
	header("Location: index.php");
}

?>