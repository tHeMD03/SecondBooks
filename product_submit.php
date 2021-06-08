  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    
    require "db_connection.php";


    $bname = $_POST['bname'];
    $isbn = $_POST['isbn'];
    $genre = $_POST['genre'];
    $book_dec = $_POST['book_dec'];
    $author_name = $_POST['author_name'];
    $price = $_POST['bprice'];
    $page = $_POST['pages'];
    $dimention = $_POST['dimention'];
    $publisher = $_POST['publisher'];
    $language = $_POST['language'];
    $author_dec = $_POST['author_dec'];

    $sql = "INSERT INTO `books details` (`book_id`, `book_title`, `book_ISBN`, `book_genre`, `book_description`, `author_name`, `book_price`, `book_pages`, `book_dimension`, `book_publisher`, `book_language`, `author_description`) VALUES (NULL, '$bname', '$isbn', '$genre', '$book_dec', '$author_name', '$price', '$page', '$dimention', '$publisher', '$language', '$author_dec');";
    
    if(mysqli_query($conn, $sql)){

        echo '<script>alert("data inserted successfully");</script>';

        $img_name = mysqli_insert_id($conn);

        header("Location: add_product.php");
    }
    mysqli_close($conn);

    if(is_uploaded_file($_FILES['file']['tmp_name']))
    {

        if( strstr($_FILES['file']['name'],".exe"))
            die("It must not be .exe file");



    if(($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/png"))
    {
        if (file_exists("upload/books/" . $img_name . ".jpg"))
        {
          echo '<script>alert("File Already Exists")</script>';
        }
        else
        {
          copy($_FILES["file"]["tmp_name"],"upload/books/" . $img_name . ".jpg");
          header("Location:add_product.php");
        }
    }
    else
    {
        echo '<script>alert("Only jpg File can be uploaded")</script>';
    }
}
else
    echo '<script>alert("File is not selected/uploded")</script>';

?>
</body>
</html>