<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Cart</title>

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <style type="text/css">
        
        svg{
            color: black;
        }

        svg:hover{
            color: blue;
        }

    </style>
</head>

<body>

    <?php include 'header.php'; ?>
    <!-- End Header Area -->
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <!-- <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  
                            if(isset($_SESSION['uid'])){

                                require "db_connection.php";

                                $u_id = $_SESSION['uid'];
                                $uid = $_SESSION['uid'];
                                $sub_total = 0; 

                                $sql1 = "SELECT * FROM cart WHERE user_id ='$u_id';";
                                $result1 = mysqli_query($conn, $sql1);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row1 = mysqli_fetch_assoc($result1)) {

                                        $b_id=$row1['book_id'];
                                        $uid = $_SESSION['uid'];
                                        $bid=$row1['book_id'];

                                        $sql = "SELECT * FROM `books details` WHERE 
                                                book_id='$b_id';";
                                        $result = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_assoc($result);

                                        echo '<tr>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img width=75 height=100 src="upload/books/'.$row1["book_id"].'.jpg" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <p>'.$row["book_title"].'</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>Rs.'.$row1["price_total"] / $row1["cart_total"].'</h5>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <input type="text" name="qty" id="sst" maxlength="12" 
                                                    value="'.$row1["cart_total"].'" title="Quantity:"
                                                        class="input-text qty">
                                                    <button onclick=""
                                                        class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                                    <button onclick=""
                                                        class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>

                                            </div>
                                            </td>
                                            <td>
                                            <h5>Rs.'.$row1["price_total"].'</h5>
                                            </td>
                                            <td><a href="remove_cart_item.php?uid='.$uid.'&bid='.$bid.'">
                                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                            </svg>
                                            </a></td>
                                        </tr>';
                                        $sub_total = $sub_total + $row1['price_total'];
                                    } # End of while
                                } # End of if
                                else{
                                    echo "<h2>0 Results !!</h2>";
                                }   
                                echo  '<tr class="bottom_button">
                                        <td>
                                            <a class="gray_btn" href="#">Update Cart</a>
                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <div class="cupon_text d-flex align-items-center">
                                                <input type="text" placeholder="Coupon Code">
                                                <a class="primary-btn" href="#">Apply</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            <h5>Subtotal</h5>
                                        </td>
                                        <td>
                                            <h5>Rs.'.$sub_total.'</h5>
                                        </td>
                                    </tr>
                                    <!-- <tr class="shipping_area">
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <h5>Shipping</h5>
                                        </td>
                                        <td>
                                            <div class="shipping_box">
                                                <ul class="list">
                                                    <li><a href="#">Flat Rate: $5.00</a></li>
                                                    <li><a href="#">Free Shipping</a></li>
                                                    <li><a href="#">Flat Rate: $10.00</a></li>
                                                    <li class="active"><a href="#">Local Delivery: $2.00</a></li>
                                                </ul>
                                                <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                                <select class="shipping_select">
                                                    <option value="1">Bangladesh</option>
                                                    <option value="2">India</option>
                                                    <option value="4">Pakistan</option>
                                                </select>
                                                <select class="shipping_select">
                                                    <option value="1">Select a State</option>
                                                    <option value="2">Select a State</option>
                                                    <option value="4">Select a State</option>
                                                </select>
                                                <input type="text" placeholder="Postcode/Zipcode">
                                                <a class="gray_btn" href="#">Update Details</a>
                                            </div>
                                        </td>
                                    </tr> -->
                                    <tr class="out_button_area">
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <div class="checkout_btn_inner d-flex align-items-center">
                                                <a class="gray_btn" href="category.php?category=">Continue Shopping</a>
                                                <a class="primary-btn" href="place_order.php">Checkout</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>';
            mysqli_close($conn);
        }else{
            echo '<script> location.replace("login.php"); </script>';
        }
    ?>
    <!--================End Cart Area =================-->

    <!-- start footer Area -->
    <?php include "footer.php" ?>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>