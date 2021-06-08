<?php 

    if($_POST['pass1'] == $_POST['pass2'])
    {
        
    
    require "db_connection.php";

    $password = $_POST['pass1'];
    $userid = $_GET['uid'];

     $sql = "UPDATE users SET user_password='$password' WHERE user_id='$userid'";

     if(mysqli_query($conn, $sql))
     {
         header("Location:login.php");
     }
    }
    else
    {
        header("Location:fp_enterpassword.php");
    }

?>