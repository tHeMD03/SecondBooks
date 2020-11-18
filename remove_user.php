<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booksdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	echo "Connection Failed". mysqli_connect_error();
}

$uid = $_REQUEST['uid'];

$sql = "DELETE FROM `users` WHERE user_id='$uid';";

if (mysqli_query($conn, $sql)) {
	if (file_exists("upload/" . $uid . ".jpg"))
    {
    	unlink( "upload/". $uid .".jpg" );
    }
    header("Location: delete_user.php");
}

mysqli_close($conn);

?>