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
	<title>Product</title>
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<?php include 'header.php'; ?>
	<!-- End Header Area -->


	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Product Details Page</h1>
<!-- 					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.html">product-details</a>
					</nav> -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<?php 
	
	require "db_connection.php";

	$book_id = $_GET['book_id'];

	$sql = "SELECT * FROM `books details` WHERE book_id='$book_id'";;
	$result = mysqli_query($conn, $sql);
				
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo '<div class="product_image_area">
					<div class="container">
						<div class="row s_product_inner">
							<div class="col-lg-6">
				
							<div class="single-prd-item">
							<img class="img-fluid" src="upload/books/'.$book_id.'.jpg" alt="Book">
						</div>
						
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">';
						
						echo '<h3>'.$row['book_title'].'</h3>
						<h2>Rs. '.$row['book_price'].'</h2> 
						<h3>About</h3>
						<p>'.$row['book_description'].'</p> 
						<div class="product_count">
							<label for="qty">Quantity:</label>
							<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
								class="input-text qty">'; ?>
	<button
		onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
		class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
	<button
		onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
		class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
	<?php echo '</div>
						<div class="card_area d-flex align-items-center">
							<a class="primary-btn" href="#">Buy</a>
							<a class="primary-btn" href="add_cart.php?book_id='.$book_id.'">Add to Cart</a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
						aria-selected="true">About Author</a>
				</li>
					<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
						aria-controls="profile" aria-selected="false"> Book Details</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
						aria-controls="contact" aria-selected="false">Comments</a>
				</li> -->
				<li class="nav-item">
					<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab"
						aria-controls="review" aria-selected="false">Reviews</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					
				<h5>'.$row['author_name'].'</h5>
					<p>'.$row['author_description'].'</p>

				</div> 
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								
								<tr>
									<td>
										<h5>paperback</h5>
									</td>
									<td>
										<h5>'.$row["book_pages"].' pages</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>ISBN</h5>
									</td>
									<td>
										<h5>'.$row["book_ISBN"].'</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Dimensions</h5>
									</td>
									<td>
										<h5>'.$row["book_dimension"].' cm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Publisher</h5>
									</td>
									<td>
										<h5>'.$row["book_publisher"].'</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Language</h5>
									</td>
									<td>
										<h5>'.$row["book_language"].'</h5>
									</td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>'; 
		}
	}
	?>
	<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
		<div class="row">
			<div class="col-lg-6">
				<div class="row total_rate">
					<div class="col-6">
						<div class="box_total">
							<h5>Overall</h5>
							<h4>4.0</h4>
							<h6>(03 Reviews)</h6>
						</div>
					</div>
					<div class="col-6">
						<div class="rating_list">
							<h3>Based on 3 Reviews</h3>
							<ul class="list">
								<li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
											class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										01</a></li>
								<li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
											class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										01</a></li>
								<li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
											class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										01</a></li>
								<li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
											class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										01</a></li>
								<li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i
											class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										01</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="review_list">
					<div class="review_item">
						<div class="media">
							<div class="d-flex">
								<img src="img/product/review-1.png" alt="">
							</div>
							<div class="media-body">
								<h4>Blake Ruiz</h4>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
							laboris nisi ut aliquip ex ea
							commodo</p>
					</div>
					<div class="review_item">
						<div class="media">
							<div class="d-flex">
								<img src="img/product/review-2.png" alt="">
							</div>
							<div class="media-body">
								<h4>Blake Ruiz</h4>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
							laboris nisi ut aliquip ex ea
							commodo</p>
					</div>
					<div class="review_item">
						<div class="media">
							<div class="d-flex">
								<img src="img/product/review-3.png" alt="">
							</div>
							<div class="media-body">
								<h4>Blake Ruiz</h4>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
							laboris nisi ut aliquip ex ea
							commodo</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="review_box">
					<h4>Add a Review</h4>
					<p>Your Rating:</p>
					<ul class="list">
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
					</ul>
					<p>Outstanding</p>
					<form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
						novalidate="novalidate">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name"
									placeholder="Your Full name" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Your Full name'">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email"
									placeholder="Email Address" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Email Address'">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" id="number" name="number"
									placeholder="Phone Number" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Phone Number'">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Review"
									onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Review'"></textarea></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" value="submit" class="primary-btn">Submit Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</section>
	<!--================End Product Description Area =================-->


	<!-- start footer Area -->
	<?php include "footer.php" ?>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
		integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
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