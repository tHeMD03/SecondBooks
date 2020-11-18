<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "booksdb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $email = $_POST['email'];
    $sec_q_1 = $_POST['sec1'];
    $sec_q_2 = $_POST['sec2'];
    

    if(!$conn){
        die("Connection failed" . mysqli_connect_error());
    }
     $sql = "SELECT * FROM users WHERE user_email='$email';";

     $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result) > 0)
     {
        $row = mysqli_fetch_assoc($result);
        if($row['sec_que_1'] == $sec_q_1 && $row['sec_que_2'] == $sec_q_2)
        {
            $u_id = $row['user_id'];
            header("Location: fp_enterpassword.php?uid=$u_id");
        }else
            header("Location: forgot_password1.php?error=1");
         
     }


?>