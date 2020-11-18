<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booksdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	echo "Connection Failed". mysqli_connect_error();
}

$bid = $_REQUEST['bid'];

$sql = "DELETE FROM `books details` WHERE book_id='$bid';";

if (mysqli_query($conn, $sql)) {
	if (file_exists("upload/books" . $bid . ".jpg"))
    {
    	unlink( "upload/books". $bid .".jpg" );
    }
    header("Location: books_data.php");
}

mysqli_close($conn);

?>