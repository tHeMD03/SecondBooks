<?php
session_start();

if(isset($_POST['submit'])){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "booksdb";

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	if ($create_password = $_POST['crtpassword'] == $confirm_password = $_POST['confpassword']) {
		$user_password = $_POST['confpassword'];
	}else{
		echo "Password does'nt match!!! and password set as default !!";
		$user_password = "12345";
	}
	$user_address = $_POST['address'];
	$city = $_POST['city'];
	$user_pincode = $_POST['pincode'];
	$sec_que_1 = $_POST['que1'];
	$sec_que_2 = $_POST['que2'];


	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection Failed !!" . mysqli_connect_error());
	}

	$sql = "INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_email`, `user_mobile`, `user_password`, `user_type`, `user_address`, `user_city`, `user_pincode`, `sec_que_1`, `sec_que_2`) VALUES (NULL, '$firstname', '$lastname', '$email', '$phone', '$user_password', '0', '$user_address', '$city', '$user_pincode', '$sec_que_1', '$sec_que_2');";

	if (mysqli_query($conn, $sql)) {

		$sql6 = mysqli_query($conn, "SELECT MAX(user_id) FROM users;");
		$row = mysqli_fetch_assoc($sql6);
		$u_id = $row['MAX(user_id)'];
		$_SESSION['uid'] = $row['MAX(user_id)'];
		$sql7 = mysqli_query($conn, "SELECT first_name FROM users WHERE user_id = $u_id;");
		$row2 = mysqli_fetch_assoc($sql7);
		$_SESSION['uname'] = $row2['first_name'];


		if(is_uploaded_file($_FILES['file']['tmp_name']))
		{

			if( strstr($_FILES['file']['name'],".exe"))
				die("It must not be .exe file");

			$allowed = array('jpg', 'jpeg', 'png');
			$fileExt = explode('.', $_FILES['file']['name']);

			$fileExtention = strtolower(end($fileExt));
			if(in_array($fileExtention, $allowed))
			{
				$sql = mysqli_query($conn, "SELECT MAX(user_id) FROM users;");
				$row = mysqli_fetch_assoc($sql);
				$filename = (string)$row['MAX(user_id)'];

				echo "File Name: " . $filename . "<br />";
				echo "Type: " . $_FILES["file"]["type"] . "<br />";
				echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
				echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";


				if (file_exists("../upload/" . $filename. '.jpg'))
				{
					echo $filename . " already exists. ";
				}
				else
				{
					copy($_FILES["file"]["tmp_name"],"upload/" . $filename.'.jpg');
					header("Location: index.php");
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
		header("Location: index.php");
		
	}else{
			// echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			mysqli_close($conn);
			header("Location: sign_up.php?error=1");
		}	
	
}

?>