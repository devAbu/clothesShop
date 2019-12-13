<?php
require 'connection/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>OUTFIT4ALL</title>
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
	<!-- <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"> -->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!-- <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css"> -->
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
				<a href="index.html" class="logo">
					<img src="images/logoPNG.png" alt="logo">
				</a>

				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.html">Home</a>
							</li>

							<li>
								<a href="shop.html">Shop</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="wrap_header_mobile">

			<a href="index.html" class="logo-mobile">
				<img src="images/logoPNG.png" alt="logo">
			</a>

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
						<a href="index.html">Home</a>
					</li>

					<li class="item-menu-mobile">
						<a href="shop.html">Shop</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- TODO: izmijenit tekst -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<?php
				$sql = "SELECT image FROM bgImages where name = 'homeBg1'";
				$result = $dbc->query($sql);

				$count = $result->num_rows;

				if ($count > 0) {
					while ($row = $result->fetch_assoc()) {
						echo '<div class="item-slick1 item1-slick1" style="background-image: url(data:image/jpeg;base64,' . base64_encode($row["image"]) . '">';
					}
				}
				?>
				<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
						Women Collection 2018
					</span>

					<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
						New arrivals
					</h2>

					<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
						<a href="shop.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
							Shop Now
						</a>
					</div>
				</div>
			</div>

			<?php
			$sql = "SELECT image FROM bgImages where name = 'homeBg2'";
			$result = $dbc->query($sql);

			$count = $result->num_rows;

			if ($count > 0) {
				while ($row = $result->fetch_assoc()) {
					echo '<div class="item-slick1 item2-slick1" style="background-image: url(data:image/jpeg;base64,' . base64_encode($row["image"]) . '">';
				}
			}
			?>
			<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
				<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
					Men Collection 2018
				</span>

				<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
					New arrivals
				</h2>

				<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
					<a href="shop.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
						Shop Now
					</a>
				</div>
			</div>
		</div>

		<?php
		$sql = "SELECT image FROM bgImages where name = 'homeBg3'";
		$result = $dbc->query($sql);

		$count = $result->num_rows;

		if ($count > 0) {
			while ($row = $result->fetch_assoc()) {
				echo '<div class="item-slick1 item3-slick1" style="background-size: 1520px 1000px;background-image: url(data:image/jpeg;base64,' . base64_encode($row["image"]) . '">';
			}
		}
		?>
		<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
			<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
				Women Collection 2018
			</span>

			<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
				New arrivals
			</h2>

			<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
				<a href="shop.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
					Shop Now
				</a>
			</div>
		</div>
		</div>

		</div>
		</div>
	</section>

	<div class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">

				<?php
				$sql = "SELECT * FROM categoriesimage";
				$result = $dbc->query($sql);

				$count = $result->num_rows;

				if ($count > 0) {
					while ($row = $result->fetch_assoc()) {
						echo '<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="data:image/jpeg;base64,' . base64_encode($row["image"]) . '" alt="' . $row["name"] . '">

						<div class="block1-wrapbtn w-size2">
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								' . $row["name"] . '
							</a>
						</div>
					</div>
				</div>';
					}
				}
				?>
			</div>
		</div>
	</div>

	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Featured Products
				</h3>
			</div>

			<div class="wrap-slick2">
				<div class="slick2">

					<?php
					$sql = "SELECT * FROM featuredProduct";
					$result = $dbc->query($sql);

					$count = $result->num_rows;

					if ($count > 0) {
						while ($row = $result->fetch_assoc()) {
							echo '<div class="item-slick2 p-l-15 p-r-15">
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="data:image/jpeg;base64,' . base64_encode($row["image"]) . '" alt="' . $row["name"] . '">

								<div class="block2-overlay trans-0-4">
									<div class="block2-btn-addcart w-size1 trans-0-4">
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Buy now <i class="fa fa-shopping-cart ml-2"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="block2-txt p-t-20">
								<a href="singleProduct.html" class="block2-name dis-block s-text3 p-b-5">
									' . $row["name"] . '
								</a>

								<span class="block2-price m-text6 p-r-5">
									$' . $row["price"] . '
								</span>
							</div>
						</div>
					</div>';
						}
					}
					?>
				</div>
			</div>

		</div>
	</section>

	<section class="instagram p-t-20">
		<div class="sec-title p-b-52 p-l-15 p-r-15">
			<h3 class="m-text5 t-center">
				Follow us on Instagram
			</h3>
		</div>

		<div class="flex-w">
			<?php
			$sql = "SELECT * FROM instagram";
			$result = $dbc->query($sql);

			$count = $result->num_rows;

			if ($count > 0) {
				while ($row = $result->fetch_assoc()) {
					echo '<div class="block4 wrap-pic-w">
				<img src="data:image/jpeg;base64,' . base64_encode($row["image"]) . '" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							' . $row["description"] . '
						</p>
					</div>
				</a>
			</div>';
				}
			}
			?>
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

	<!-- <div id="dropDownSelect1"></div> -->




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
	</script> -->

	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<!-- <script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script> -->
	<!-- <script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script> -->
	<!-- <script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script> -->
	<script src="js/main.js"></script>

	<script>
		var year = new Date().getFullYear()
		$('#currentYear').html(year)
	</script>

</body>

</html>