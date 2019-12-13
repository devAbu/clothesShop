<?php
require 'connection/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- TODO: ime artikla -->
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="ABOC">
	<meta name="keywords" content="online shop, clothes, best e-commerce, h&m">
	<!-- TODO: opis -->
	<meta name="description" content="">
	<link rel="shortcut icon" type="image/x-icon" href="images/logoIco.ico" />
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="animsition">

	<header class="header1">
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
				</div>
			</div>

			<div class="wrap_header">
				<a href="index.php" class="logo">
					<img src="images/logoPNG.png" alt="logo">
				</a>

				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="shop.php">Shop</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="wrap_header_mobile">

			<a href="index.php" class="logo-mobile">
				<img src="images/logoPNG.png" alt="logo">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<div class="wrap-side-menu">
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.php">Home</a>
					</li>

					<li class="item-menu-mobile">
						<a href="shop.php">Shop</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="images/artikal-1.2.jpg">
							<div class="wrap-pic-w">
								<img src="images/artikal-1.2.jpg" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="images/artikal-1.3.jpg">
							<div class="wrap-pic-w">
								<img src="images/artikal-1.3.jpg" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="images/artikal-1.jpg">
							<div class="wrap-pic-w">
								<img src="images/artikal-1.jpg" alt="IMG-PRODUCT">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					Boxy T-Shirt with Roll Sleeve Detail
				</h4>

				<span class="m-text17">
					$22
				</span>

				<p class="s-text8 p-t-10">
					Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare
					feugiat.
				</p>

				<div class="p-t-33 p-b-60">
					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Buy now <i class="fa fa-shopping-cart ml-2"></i>
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel
							sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>



	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Related Products
				</h3>
			</div>
			<div class="wrap-slick2">
				<div class="slick2">
					<!-- TODO: zaivis koji je artikal (koja kategorija) -->
					<div class="item-slick2 p-l-15 p-r-15">
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="images/item-02.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<div class="block2-btn-addcart w-size1 trans-0-4">
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Buy now <i class="fa fa-shopping-cart ml-2"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="block2-txt p-t-20">
								<a href="singleProduct.php" class="block2-name dis-block s-text3 p-b-5">
									Herschel supply co 25l
								</a>

								<span class="block2-price m-text6 p-r-5">
									$75.00
								</span>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-03.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<div class="block2-btn-addcart w-size1 trans-0-4">
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Buy now <i class="fa fa-shopping-cart ml-2"></i>
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="singleProduct.php" class="block2-name dis-block s-text3 p-b-5">
									Denim jacket blue
								</a>

								<span class="block2-price m-text6 p-r-5">
									$92.50
								</span>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-05.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<div class="block2-btn-addcart w-size1 trans-0-4">
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Buy now <i class="fa fa-shopping-cart ml-2"></i>
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="singleProduct.php" class="block2-name dis-block s-text3 p-b-5">
									Coach slim easton black
								</a>

								<span class="block2-price m-text6 p-r-5">
									$165.90
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<footer class="bg6 p-l-45 p-r-45">
		<div class="flex-w p-b-30">
			<div class="w-size20 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					OUTFIT4ALL
				</h4>

				<div>
					<p class="s-text7 w-size27">
						<!-- TODO: kratki opis -->
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us
						on (+1) 96 716 6879
					</p>
				</div>
			</div>

			<div class="w-size2 p-t-30 p-l-15 p-r-15 respon3">
				<div class="flex-m p-t-30">
					<a href="#" class="fs-30 color1 p-r-25 fa fa-facebook"></a>
					<a href="#" class="fs-30 color1 p-r-25 fa fa-instagram"></a>
					<a href="#" class="fs-30 color1 p-r-25 fa fa-pinterest-p"></a>
				</div>
			</div>


			<div class="col-md-12 text-center mt-5">
				<p>
					&copy; <span id="currentYear"></span> All rights reserved | Created by <a href="https://abocdev.com/">Aboc</a>
				</p>
			</div>

		</div>
	</footer>



	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-up" aria-hidden="true"></i>
		</span>
	</div>

	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- <script type="text/javascript" src="vendor/select2/select2.min.js"></script> -->
	<!-- <script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script> -->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<!-- <script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script> -->
	<script src="js/main.js"></script>

	<script>
		var year = new Date().getFullYear()
		$('#currentYear').html(year)
	</script>

</body>

</html>