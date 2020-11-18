<?php 

    if($_POST['pass1'] == $_POST['pass2'])
    {
        
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "booksdb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $password = $_POST['pass1'];
    $userid = $_GET['uid'];

    if(!$conn){
        die("Connection failed" . mysqli_connect_error());
    }
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