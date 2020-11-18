<?php
//session_start();

if(isset($_POST['submit'])){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "booksdb";

	$firstname = $_POST['firstname'];

	$email = $_POST['email'];

	$user_password = $_POST['confpassword'];


	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection Failed !!" . mysqli_connect_error());
	}
		$admin_id = rand(100,999);
		$sql = "INSERT INTO `admin`(`admin_name`, `admin_email`, `admin_password`, `admin_id`) VALUES ('$firstname','$email','$user_password', '$admin_id')";

	// $sql = "INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_email`, `user_mobile`, `user_password`, `user_type`, `user_address`, `user_city`, `user_pincode`, `sec_que_1`, `sec_que_2`) VALUES (NULL, '$firstname', '$lastname', '$email', '$phone', '$user_password', 
	// 	'$user_type', '$user_address', '$city', '$user_pincode', '$sec_que_1', '$sec_que_2');";

	if(mysqli_query($conn, $sql)) {
		
	} else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	// $sql6 = mysqli_query($conn, "SELECT MAX(user_id) FROM users;");
	// $row = mysqli_fetch_assoc($sql6);
	// $u_id = $row['MAX(user_id)'];
	// $_SESSION['uid'] = $row['MAX(user_id)'];
	// $sql7 = mysqli_query($conn, "SELECT first_name FROM users WHERE user_id = $u_id;");
	// $row2 = mysqli_fetch_assoc($sql7);
	// $_SESSION['uname'] = $row2['first_name'];
	// $_SESSION['utype'] = $user_type;

	
	if(is_uploaded_file($_FILES['file']['tmp_name']))
	{

	if( strstr($_FILES['file']['name'],".exe"))
		die("It must not be .exe file");

	$allowed = array('jpg', 'jpeg', 'png');
	$fileExt = explode('.', $_FILES['file']['name']);

    $fileExtention = strtolower(end($fileExt));
	if(in_array($fileExtention, $allowed))
	{
		// $sql = mysqli_query($conn, "SELECT MAX(user_id) FROM users;");
	 //    $row = mysqli_fetch_assoc($sql);
	    $filename = mysqli_insert_id($conn);

	    // echo "File Name: " . $filename . "<br />";
	    // echo "Type: " . $_FILES["file"]["type"] . "<br />";
	    // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
	    // echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

	   
	    if (file_exists("../upload/admin/" . $filename. '.jpg'))
	      {
	      	echo $filename . " already exists. ";
	      }
	    else
	      {
		  copy($_FILES["file"]["tmp_name"],"upload/admin/" . $filename.'.jpg');
	      header("Location: add_user.php");
	      }
	}
	else
	  {
	  
	   echo "only jpeg ,png files can be uploaded";
	  }
	}
	else{
	  echo "<script> window.alert('Plz Select File') </script>";
	}
		
	mysqli_close($conn);

}

?>