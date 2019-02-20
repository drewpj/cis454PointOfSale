<?php
//start session.
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>454 Project</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
* {
  box-sizing: border-box;
}

.column {
  float: middle;
  width: 25%;
  padding: 20px;
  height: 1050px;
}

</style>

</head>
<body class="animsition">
	<div class = "page-wrap">
	<!-- header fixed -->
	<div class="wrap_header fixed-header2 trans-0-4">
		<!-- Logo -->
		<a href="index.html" class="logo">
			<img src="images/logo.png".png alt="IMG-LOGO">
		</a>
		<!-- Menu -->
		<div class="wrap_menu">
			<nav class="menu">
				<ul class="main_menu">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="menu.php">Menu</a>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
		<!-- Header Icon -->
		<div class="header-icons">
			<a href="login.html" class="header-wrapicon1 dis-block">
				<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
			</a>
			<span class="linedivide1"></span>
			<div class="header-wrapicon2">
				<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
				<span class="header-icons-noti">0</span>
				<!-- Header cart noti -->
				<div class="header-cart header-dropdown">
					<ul class="header-cart-wrapitem">
						
					
					<div class="header-cart-buttons">
						<div class="header-cart-wrapbtn">
							<!-- Button -->
							<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
								View Cart
							</a>
						</div>
						<div class="header-cart-wrapbtn">
							<!-- Button -->
							<a href="checkout.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
								Check Out
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header -->
	<header class="header1">
		<!-- Header -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>
				<div class="topbar-child2">
					<span class="topbar-email">
						contact@GroupThirteen.com
					</span>
				</div>
			</div>
			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html" class="logo">
					<img src="images/logo.png" alt="IMG-LOGO">
				</a>
				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="HomePage.php">Home</a>
							</li>
							<li>
								<a href="menu.php">Menu</a>
							</li>
							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</nav>
				</div>
				<!-- Header Icon -->
				<div class="header-icons">
					<a href="login.html" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
						<?php
							//this is for printing the email if user is logged in.
							if (isset($_SESSION['email'])) {
								echo($_SESSION['email']); 
							}
							//Otherwise, prompt user to log in.
							else {
								echo("login");
							}
							
							//If user is of category manager, then allow them to access the manager page.
							if (isset($_SESSION['type']) && $_SESSION['type'] == "Manager") {
								echo(" <br> <a href='manager.php'> Manage Orders </a>");
							}
						?>
					</a>
					<span class="linedivide1"></span>
					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>
						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>
									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											"This will be when they add to cart"
										</a>
										<span class="header-cart-item-info">
											1 x $00.00
										</span>
									</div>
								</li>
							<div class="header-cart-total">
								Total: $00.00
							</div>
							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="checkout.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">
					Our Products
				</h3>
			</div>
					
	<!--Our Products -->
	<class="bgwhite p-t-66 p-b-60">
				<center>
					<div class="row">
 						<div class="column" style="margin:auto;">
    					
    						<p>
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/dinner9.jpg" alt="IMG-PRODUCT">
								<div class="block2-overlay trans-0-4">
									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->					 
										<form action="cart.php" method="POST">
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="id" type="text" value="11">
												Add to Cart
											</button>
										</form>	
									</div>
								</div>
							</div>
							<div class="block2-txt p-t-20">
								<span class="block2-name dis-block s-text3 p-b-5">
									Garden Pizza with Sun-dried Tomatoes, Basil and Pesto, Sprinkled with Pine Nuts
								</span>
								<span class="block2-price m-text6 p-r-5">
									$19.50
								</span>
							</div>
						</div>
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="images/dinner3.jpg" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
										
										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->					 
											<form action="cart.php" method="POST">
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="id" type="text" value="9">
													Add to Cart
												</button>
											</form>	
										</div>
									</div>
								</div>
								<div class="block2-txt p-t-20">
									<span class="block2-name dis-block s-text3 p-b-5">
										Grilled Salmon Served with Roast Potatoes, Parsnip and Sweet Potatoes
									</span>
									<span class="block2-price m-text6 p-r-5">
										$26.00
									</span>
								</div>
							</div>
						</p>
						</div>
  
						<div class="column">
						<p>
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="images/dinner1.jpg" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->					 
											<form action="cart.php" method="POST">
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="id" type="text" value="12">
													Add to Cart
												</button>
											</form>	
										</div>
									</div>
								</div>
								<div class="block2-txt p-t-20">
									<span class="block2-name dis-block s-text3 p-b-5">
										Spicy Chicken on a Bed of Flavored Rice Accompanied by Sauces
									</span>
									<span class="block2-price m-text6 p-r-5">
										$27.00
									</span>
								</div>
							</div>
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="images/breakfast2.jpg" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
									
										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->					 
											<form action="cart.php" method="POST">
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="id" type="text" value="13">
													Add to Cart
												</button>
											</form>	
										</div>
									</div>
								</div>
								<div class="block2-txt p-t-20">
									<span class="block2-name dis-block s-text3 p-b-5">
										Egg on Avocado Toast
									</span>
									<span class="block2-price m-text6 p-r-5">
										$15.00
									</span>
								</div>
							</div>
						</p>
						</div>
  
						<div class="column">
						<p>
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="images/dinner7.jpg" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
											
										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->					 
											<form action="cart.php" method="POST">
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="id" type="text" value="3">
													Add to Cart
												</button>
											</form>	
										</div>
									</div>
								</div>
								<div class="block2-txt p-t-20">
									<span class="block2-name dis-block s-text3 p-b-5">
										Fettaccini in a Creamy Sauce with Tomatoes, Spinach and Ricotta Cheese
									</span>
									<span class="block2-price m-text6 p-r-5">
										$35.00
									</span>
								</div>
							</div>
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="images/lunch1.jpg" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
											
										<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->					 
											<form action="cart.php" method="POST">
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="id" type="text" value="6">
													Add to Cart
												</button>
											</form>	
										</div>
									</div>
								</div>
								<div class="block2-txt p-t-20">
									<span class="block2-name dis-block s-text3 p-b-5">
										Fried Buffalo Chicken Sandwich with Bleu Cheese Dressing and Arugula 
									</span>
									<span class="block2-price m-text6 p-r-5">
										$22.00
									</span>
								</div>
							</div>
						</p>
						</div>
  
						<div class="column">
						<p>
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="images/dinner2.jpg" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
											
										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->					 
											<form action="cart.php" method="POST">
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="id" type="text" value="10">
													Add to Cart
												</button>
											</form>	
										</div>
									</div>
								</div>
								<div class="block2-txt p-t-20">
									<span class="block2-name dis-block s-text3 p-b-5">
										Roast Pork Drizzled in a Lemon Aioli with Seasonal Vegetables for 2 
									</span>
									<span class="block2-price m-text6 p-r-5">
										$38.00
									</span>
								</div>
							</div>
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="images/lunch2.jpg" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
										
										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->					 
											<form action="cart.php" method="POST">
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="id" type="text" value="14">
													Add to Cart
												</button>
											</form>	
										</div>
									</div>
								</div>
								<div class="block2-txt p-t-20">
									<span class="block2-name dis-block s-text3 p-b-5">
										Breakfast Sandwich - Runny Poached Egg with Classic Fillings
									</span>
									<span class="block2-price m-text6 p-r-5">
										$18.00
									</span>
								</div>
							</div>
						</p>
						</div>
  					</div>
				</center>
	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
		</div>
				
		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>
			<a href="#">
				<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
			</a>
			<a href="#">
				<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>
			<a href="#">
				<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
			</a>
			<a href="#">
				<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
			</a>
			<div class="t-center s-text8 p-t-20"> Copyright © 2019 All rights reserved. | This website was made by Group 13		</div>
			<div class="t-center s-text8 p-t-20">
				Images borrowed from https://www.pexels.com/search/food/?fbclid=IwAR1QwFFDgV_PVpvdSMK3r5-VZTZMCSdLdaUibs5IUCF3djRJwSDToqXbcK4. 
			</div>
	</footer>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</div>
</body>
</html>
