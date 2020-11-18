<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Books</title>

    <!-- CSS
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
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	
	<?php include 'admin_header.php'; ?>
	<?php
		if (!$_SESSION['aid']) {
			header("Location: admin.php");
		}
	?>

    <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Add Books</h1>
				</div>
			</div>
		</div>
	</section>

    <div class="col-lg-6">
					<div style="padding-top: 0px" class="login_form_inner">
						<h3>Add Book</h3>
						<form class="row login_form" action="product_submit.php" method="post" id="contactForm"  enctype="multipart/form-data">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="bname" name="bname" placeholder="Book Title" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Book Title'">
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN No" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ISBN No'">
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="genre" name="genre" placeholder="Book Genre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Book Genre'">
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="book_dec" name="book_dec" placeholder="Book Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Book Description'">
                            </div>
                           
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="author_name" name="author_name" placeholder="Author Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Author Name'">
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="bprice" name="bprice" placeholder="Book Price" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Book Price'">
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="pages" name="pages" placeholder="Pages of book" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pages of book'">
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="dimention" name="dimention" placeholder="x*x*x cm" onfocus="this.placeholder = ''" onblur="this.placeholder = 'x*x*x cm'">
							</div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="publisher" name="publisher" placeholder="Publisher" onfocus="this.placeholder = ''" onblur="this.placeholder = 'publisher'">
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="language" name="language" placeholder="Language" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Language'">
                            </div>
                            
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="author_dec" name="author_dec" placeholder="Author Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Author Description'">
                            </div>
                        
							<div class="col-md-12 form-group">
								<input type="file" class="form-control" id="file" name="file">
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Add</button>
				
							</div>
						</form>
					</div>
				</div>
			</div>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>