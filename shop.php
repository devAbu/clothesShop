<?php
require 'connection/connect.php';
if (isset($_REQUEST['type'])) {
	$type = $_REQUEST['type'];
	$menType = explode(",", $type);
}

if (isset($_REQUEST['sexType'])) {
	$sexType = $_REQUEST['sexType'];
} else {
	$sexTypeArray = array('men', 'women');
}

if (isset($_REQUEST['priceFrom'])) {
	$priceFrom = $_REQUEST['priceFrom'];
}

if (isset($_REQUEST['priceTo'])) {
	$priceTo = $_REQUEST['priceTo'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Shop</title>
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
	<!-- TODO: vidjet za sta je i mozda obrisat -->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
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

	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/winterShop.jpg);">
		<h2 class="l-text2 t-center">
			Women
		</h2>
		<p class="m-text13 t-center">
			New Arrivals Women Collection 2018
		</p>
	</section>


	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="shop.php" class="s-text13 active1">
									All
								</a>
							</li>

							<li class="p-t-4">
								<a class="s-text13" data-toggle="collapse" href="#menCategories" role="button" aria-expanded="false" aria-controls="collapseExample">
									Men
								</a>
								<ul class="collapse m-l-10" id="menCategories">
									<li>
										<label for="menJackets" class="categoryLabel">Jackets</label>

										<input type="checkbox" name="menJackets" id="menJackets">
									</li>
									<li>
										<label for="menSweatshirts" class="categoryLabel">Sweatshirts & Hoodies</label>
										<input type="checkbox" name="menSweatshirts" id="menSweatshirts">
									</li>
									<li>
										<label for="menTshirts" class="categoryLabel">T-shirts</label>
										<input type="checkbox" name="menTshirts" id="menTshirts">
									</li>
									<li>
										<label for="menJeans" class="categoryLabel">Jeans</label>
										<input type="checkbox" name="menJeans" id="menJeans">
									</li>
									<li>
										<label for="menAccessories" class="categoryLabel">Accessories</label>
										<input type="checkbox" name="menAccessories" id="menAccessories">
									</li>
								</ul>
							</li>

							<li class="p-t-4">
								<a class="s-text13" data-toggle="collapse" href="#womenCategories" role="button" aria-expanded="false" aria-controls="collapseExample">
									Women
								</a>
								<ul class="collapse m-l-10" id="womenCategories">
									<li>
										<label for="womenJackets" class="categoryLabel">Jackets</label>

										<input type="checkbox" name="womenJackets" id="womenJackets">
									</li>
									<li>
										<label for="womenSweatshirts" class="categoryLabel">Sweatshirts &
											Hoodies</label>
										<input type="checkbox" name="womenSweatshirts" id="womenSweatshirts">
									</li>
									<li>
										<label for="womenTshirts" class="categoryLabel">T-shirts</label>
										<input type="checkbox" name="womenTshirts" id="womenTshirts">
									</li>
									<li>
										<label for="womenJeans" class="categoryLabel">Jeans</label>
										<input type="checkbox" name="womenJeans" id="womenJeans">
									</li>
									<li>
										<label for="womenDresses" class="categoryLabel">Dresses</label>
										<input type="checkbox" name="womenDresses" id="womenDresses">
									</li>
									<li>
										<label for="womenAccessories" class="categoryLabel">Accessories</label>
										<input type="checkbox" name="womenAccessories" id="womenAccessories">
									</li>
								</ul>
							</li>

							<li class="p-t-4">
								<a href="shop.php?type=accessories" class="s-text13">
									Accessories
								</a>
							</li>
						</ul>

						<h4 class="m-text14 p-b-32">
							Filters
						</h4>
						<?php
						if (isset($_REQUEST['priceFrom'])) {
							echo '<input type="number" id="lowPrice" value="' . $priceFrom . '" hidden>';
						}
						if (isset($_REQUEST['priceTo'])) {
							echo '<input type="number" id="highPrice" value="' . $priceTo . '" hidden>';
						}
						?>

						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Price
							</div>
							<div class="wra-filter-bar">
								<div id="filter-bar"></div>
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4" id="filterButton">
										Apply
									</button>
								</div>

								<div class="s-text3 p-t-10 p-b-10">
									Range: $<span id="value-lower"></span> - $<span id="value-upper"></span>
									<input type="number" id="priceFrom" name="priceFrom" hidden>
									<input type="number" id="priceTo" name="priceTo" hidden>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<div class="flex-sb-m flex-w p-b-35">
						<!-- <div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products or Brands...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div> -->

						<span class="s-text8 p-t-5 p-b-5">
							<?php
							$sql = "select * from product";

							if (!empty($type) && !empty($sexType)  && !empty($priceTo)) {

								if (count($menType) == 5) {
									$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]', '$menType[3]', '$menType[4]') AND price between '$priceFrom' and '$priceTo' and sexType = '$sexType'";
								} else if (count($menType) == 4) {
									$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]', '$menType[3]') AND price between '$priceFrom' and '$priceTo' and sexType = '$sexType' ";
								} else if (count($menType) == 3) {
									$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]') AND price between '$priceFrom' and '$priceTo' and sexType = '$sexType' ";
								} else if (count($menType) == 2) {
									$sql .= " where type IN ('$menType[0]', '$menType[1]') AND price between '$priceFrom' and '$priceTo' and sexType = '$sexType' ";
								} else if (count($menType) == 1) {
									$sql .= " where type IN ('$menType[0]') AND price between '$priceFrom' and '$priceTo' and sexType = '$sexType' ";
								}
							} else if (!empty($type) && !empty($priceTo)) {

								if (count($menType) == 5) {
									$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]', '$menType[3]', '$menType[4]') AND price between '$priceFrom' and '$priceTo' and sexType in ('$sexTypeArray[0]', '$sexTypeArray[1]') ";
								} else if (count($menType) == 4) {
									$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]', '$menType[3]') AND price between '$priceFrom' and '$priceTo' and sexType in ('$sexTypeArray[0]', '$sexTypeArray[1]') ";
								} else if (count($menType) == 3) {
									$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]') AND price between '$priceFrom' and '$priceTo' and sexType in ('$sexTypeArray[0]', '$sexTypeArray[1]') ";
								} else if (count($menType) == 2) {
									$sql .= " where type IN ('$menType[0]', '$menType[1]') AND price between '$priceFrom' and '$priceTo' and sexType in ( '$sexTypeArray[0]', '$sexTypeArray[1]') ";
								} else if (count($menType) == 1) {
									$sql .= " where type IN ('$menType[0]') AND price between '$priceFrom' and '$priceTo' and sexType in( '$sexTypeArray[0]', '$sexTypeArray[1]' )";
								}
							} else if (!empty($priceTo)) {
								$sql .= " where price between '$priceFrom' and '$priceTo'";
							} else if (!empty($type)) {
								if (count($menType) == 5) {
									$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]', '$menType[3]', '$menType[4]') and sexType in ('$sexTypeArray[0]', '$sexTypeArray[1]')";
								} else if (count($menType) == 4) {
									$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]', '$menType[3]') and sexType in( '$sexTypeArray[0]', '$sexTypeArray[1]')";
								} else if (count($menType) == 3) {
									$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]') and sexType in ( '$sexTypeArray[0]', '$sexTypeArray[1]')";
								} else if (count($menType) == 2) {
									$sql .= " where type IN ('$menType[0]', '$menType[1]') and sexType in ('$sexTypeArray[0]', '$sexTypeArray[1]')";
								} else if (count($menType) == 1) {
									$sql .= " where type IN ('$menType[0]') and sexType in ( '$sexTypeArray[0]', '$sexTypeArray[1]')";
								}
							}

							$result = $dbc->query($sql);

							$count = $result->num_rows;

							echo 'Showing ' . $count . ' results';
							?>

						</span>
					</div>

					<div class="row">
						<?php
						$sql = "SELECT * FROM product";

						if (!empty($type) && !empty($sexType) && !empty($priceTo)) {
							if (count($menType) == 5) {
								$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]', '$menType[3]', '$menType[4]') AND sexType = '$sexType' AND price between '$priceFrom' and '$priceTo'";
							} else if (count($menType) == 4) {
								$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]', '$menType[3]') AND sexType = '$sexType' AND price between '$priceFrom' and '$priceTo' ";
							} else if (count($menType) == 3) {
								$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]') AND sexType = '$sexType' AND price between '$priceFrom' and '$priceTo' ";
							} else if (count($menType) == 2) {
								$sql .= " where type IN ('$menType[0]', '$menType[1]') AND sexType = '$sexType' AND price between '$priceFrom' and '$priceTo' ";
							} else if (count($menType) == 1) {
								$sql .= " where type IN ('$menType[0]') AND sexType = '$sexType' AND price between '$priceFrom' and '$priceTo' ";
							}
						} else if (!empty($type) && !empty($priceTo)) {
							if (count($menType) == 5) {
								$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]', '$menType[3]', '$menType[4]') AND price between '$priceFrom' and '$priceTo' and sexType in ('$sexTypeArray[0]', '$sexTypeArray[1]') ";
							} else if (count($menType) == 4) {
								$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]', '$menType[3]') AND price between '$priceFrom' and '$priceTo' and sexType in ('$sexTypeArray[0]', '$sexTypeArray[1]') ";
							} else if (count($menType) == 3) {
								$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]') AND price between '$priceFrom' and '$priceTo' and sexType in ('$sexTypeArray[0]', '$sexTypeArray[1]') ";
							} else if (count($menType) == 2) {
								$sql .= " where type IN ('$menType[0]', '$menType[1]') AND price between '$priceFrom' and '$priceTo' and sexType in ( '$sexTypeArray[0]', '$sexTypeArray[1]') ";
							} else if (count($menType) == 1) {
								$sql .= " where type IN ('$menType[0]') AND price between '$priceFrom' and '$priceTo' and sexType in( '$sexTypeArray[0]', '$sexTypeArray[1]' )";
							}
						} else if (!empty($priceTo)) {
							$sql .= " where price between '$priceFrom' and '$priceTo'";
						} else if (!empty($type)) {
							if (count($menType) == 5) {
								$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]', '$menType[3]', '$menType[4]') and sexType in ('$sexTypeArray[0]', '$sexTypeArray[1]')";
							} else if (count($menType) == 4) {
								$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]', '$menType[3]') and sexType in( '$sexTypeArray[0]', '$sexTypeArray[1]')";
							} else if (count($menType) == 3) {
								$sql .= " where type IN ('$menType[0]', '$menType[1]', '$menType[2]') and sexType in ( '$sexTypeArray[0]', '$sexTypeArray[1]')";
							} else if (count($menType) == 2) {
								$sql .= " where type IN ('$menType[0]', '$menType[1]') and sexType in ('$sexTypeArray[0]', '$sexTypeArray[1]')";
							} else if (count($menType) == 1) {
								$sql .= " where type IN ('$menType[0]') and sexType in ( '$sexTypeArray[0]', '$sexTypeArray[1]')";
							}
						}

						$result = $dbc->query($sql);

						$count = $result->num_rows;

						if ($count > 0) {
							while ($row = $result->fetch_assoc()) {
								echo '<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="data:image/jpeg;base64,' . base64_encode($row["image"]) . '" alt="' . $row["name"] . '">

									<div class="block2-overlay trans-0-4">
										<div class="block2-btn-addcart w-size1 trans-0-4">
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Buy now
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="singleProduct.php" class="block2-name dis-block s-text3 p-b-5">
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

					<!-- TODO: uradit pagination-->
					<!-- <div class="flex-m flex-w flex-c-m">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div> -->
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
	<!-- TODO: vidjet sta su -->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>

	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<!-- <script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script> -->

	<script type="text/javascript">
		var filterBar = document.getElementById('filter-bar');

		var lowPrice = $('#lowPrice').val()
		var highPrice = $('#highPrice').val()


		if (lowPrice == 0 || typeof lowPrice == 'undefined' || lowPrice === null) {
			lowPrice = 0
		}

		if (highPrice == 0 || typeof highPrice == 'undefined' || highPrice === null) {
			highPrice = 999
		}


		noUiSlider.create(filterBar, {

			start: [lowPrice, highPrice],
			connect: true,
			range: {
				'min': 0,
				'max': 999
			}
		});

		var skipValues = [
			document.getElementById('value-lower'),
			document.getElementById('value-upper')
		];

		var priceFrom;
		var priceTo;

		filterBar.noUiSlider.on('update', function(values, handle) {
			skipValues[handle].innerHTML = Math.round(values[handle]);

			if (skipValues[handle].id == "value-lower") {
				priceFrom = Math.round(values[handle])
				$('#priceFrom').val(priceFrom)
			} else if (skipValues[handle].id = "value-upper") {
				priceTo = Math.round(values[handle])
				$('#priceTo').val(priceTo)
			}

			if (priceFrom == priceTo) {
				console.log('ne smije bit isti')
			}

		});
	</script>
	<script src="js/main.js"></script>

	<script>
		var year = new Date().getFullYear()
		$('#currentYear').html(year)
	</script>


	<script>
		$('#filterButton').click(function() {

			var menJackets = document.getElementById("menJackets").checked;
			var menSweatshirts = document.getElementById("menSweatshirts").checked;
			var menTshirts = document.getElementById("menTshirts").checked;
			var menJeans = document.getElementById("menJeans").checked;
			var menAccessories = document.getElementById("menAccessories").checked;

			var womenJackets = document.getElementById("womenJackets").checked;
			var womenSweatshirts = document.getElementById("womenSweatshirts").checked;
			var womenTshirts = document.getElementById("womenTshirts").checked;
			var womenJeans = document.getElementById("womenJeans").checked;
			var womenDresses = document.getElementById("womenDresses").checked;
			var womenAccessories = document.getElementById("womenAccessories").checked;

			var url = window.location.href;

			if (url.indexOf("?") > -1) {
				url = url.substr(0, url.indexOf("?"));
			}

			var menArray = []
			if (menJackets == true) {
				menArray.push('jackets')
			}
			if (menSweatshirts == true) {
				menArray.push('sweatshirts')
			}
			if (menTshirts == true) {
				menArray.push('tshirts')
			}
			if (menJeans == true) {
				menArray.push('jeans')
			}
			if (menAccessories == true) {
				menArray.push('accessories')
			}

			var womenArray = []
			if (womenJackets == true) {
				womenArray.push('jackets')
			}
			if (womenSweatshirts == true) {
				womenArray.push('sweatshirts')
			}
			if (womenTshirts == true) {
				womenArray.push('tshirts')
			}
			if (womenJeans == true) {
				womenArray.push('jeans')
			}
			if (womenAccessories == true) {
				womenArray.push('accessories')
			}
			if (womenDresses == true) {
				womenArray.push('dresses')
			}

			if (menArray.length > 0 || womenArray.length > 0) {
				if (url.indexOf("type") == -1) {
					if (url.indexOf("?") < 0) {
						console.log(menArray)
						url += "?type" + "=" + menArray + "&sexType=men,women";
					} else {
						url += "&type" + "=" + menArray + "&sexType=men,women";
					}
				}
			} else if (menArray.length > 0) {
				if (url.indexOf("type") == -1) {
					if (url.indexOf("?") < 0) {
						console.log(menArray)
						url += "?type" + "=" + menArray + "&sexType=men";
					} else {
						url += "&type" + "=" + menArray + "&sexType=men";
					}
				}
			} else if (womenArray.length > 0) {
				if (url.indexOf("type") == -1) {
					if (url.indexOf("?") < 0) {
						console.log(womenArray)
						url += "?type" + "=" + womenArray + "&sexType=women";
					} else {
						url += "&type" + "=" + womenArray + "&sexType=women";
					}
				}
			}


			if (url.indexOf("?") < 0) {
				url += "?priceFrom" + "=" + priceFrom;
				url += "&priceTo" + "=" + priceTo;
			} else {
				url += "&priceFrom" + "=" + priceFrom;
				url += "&priceTo" + "=" + priceTo;
			}


			window.location.href = url

		})
	</script>

</body>

</html>