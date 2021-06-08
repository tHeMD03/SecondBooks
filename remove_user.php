<?php

require "db_connection.php";

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