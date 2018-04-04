<?php

require ("lib/main.php");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.css">
		<link rel="stylesheet" href="css/style.css"> <!-- TODO -->

		<title>Y-Knot | 0_1 | <?php echo $pageName; ?></title> <!-- TODO -->
	</head>
	<body id="customer_form" class="page">
		<!-- <div class="head"> -->
			<!-- <h2 class="text-info container head-title">
			</h2> -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
	      <a href="index.php" class="navbar-brand">Y-Knot Embroidery</a>
				<!-- <span class="text-muted">|</span> -->
				<!-- <?php echo $pageName; ?> -->
				<!-- <span class="text-muted">|</span> -->
		    <div id="navbar" class="collapse navbar-collapse">
		      <ul class="navbar-nav mr-auto">
		        <li class="nav-item">
							<a id="head_internal_form_button" href="register.php" class="nav-link active">Register</a>
						</li>
						<li class="nav-item">
							<a id="head_internal_form_button" href="login.php" class="nav-link">Login</a>
						</li>
						<li class="nav-item">
							<a id="head_customer_form_button" href="contact.php" class="nav-link">Contact</a>
						</li>
						<li class="nav-item">
							<a id="head_about_button" href="about.php" class="nav-link">About</a>
						</li>
						<li class="nav-item">
							<a id="head_shop_button" href="shop.php" class="nav-link">Shop</a>
						</li>
						<li class="nav-item">
							<a id="head_cart_button" href="cart.php" class="nav-link">Cart</a>
						</li>
						<li class="nav-item">
							<a id="head_request_button" href="request.php" class="nav-link">Request</a>
						</li>
		      </ul>
		    </div>
			</nav>

		<!-- </div> -->
		<div class="main">
