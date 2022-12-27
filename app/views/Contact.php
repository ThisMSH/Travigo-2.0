<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Love travel? Discover, plan and book your perfect trip with expert advice, travel guides, destination information and inspiration from Lonely Planet.">
	<title>Travigo - Travel for everyone</title>
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
	<!--header--->
	<header>
		<a href="index" class="logo">
			<img src="../public/img/Travigo_logo.png" alt="Travigo Logo" id="logowhite" class="logowhite">
			<img src="../public/img/Travigo_logo_black.png" alt="Travigo Logo" id="logodark" class="logodark">
		</a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<?php
			if(isset($_SESSION['UserID'])) {
		?>
		<ul class="navbar">
			<li><a href="index">Home</a></li>
			<li><a href="Tours">Tours</a></li>
			<li><a href="about">About</a></li>
			<li><a href="Contact">Contact Us</a></li>
			<li><a href="dashboard">Dashboard</a></li>
			<li><a href="logout">Logout</a></li>
		</ul>
		<?php
			}else {
		?>
		<ul class="navbar">
			<li><a href="index">Home</a></li>
			<li><a href="Tours">Tours</a></li>
			<li><a href="about">About</a></li>
			<li><a href="Contact">Contact Us</a></li>
			<li><a href="login">Login</a></li>
		</ul>
		<?php
			}
		?>
	</header>

	<!--Home section--->
	<section class="home" id="home">
		<div class="home-text">
			<h1>Travigo <br> Travel</h1>
			<p>Explore our trips and live The Good Life with Travigo <br> Tours that make you fall in love with the world.</p>
			<a href="Tours" class="home-btn">Let's go now</a>
		</div>
	</section>

	<!--First section--->
	<section class="package" id="package">
		<div class="ttl">
			<h2>Contact Travigo Travel team</h2>
			<p class="awsome2">Our professional team is here to answer your questions, help you get the information you need and handle complaints. Send us a message and we will do our best to help.</p>
		</div>
	</section>

	<!-- Contact form -->
	<section class="contact-form">
		<div class="contact-info">
			<div>
				<h3>Contact Us</h3>
				<ul class="contact-us-list">
					<li>
						<span class="contact-icon"><i class='bx bxs-map' ></i></span>
						<a href="https://goo.gl/maps/Kw22ANFyPJr24cyA8" target="_blank">98 West 21th Street New York NY 10016</a>
					</li>
					<li>
						<span class="contact-icon"><i class='bx bxs-phone' ></i></i></span>
						<span>+(123)-123-1234</span>
					</li>
					<li>
						<span class="contact-icon"><i class='bx bxs-envelope' ></i></span>
						<a href="mailto:info@travigo.com">info@travigo.com</a>
					</li>
					<div class="social2">
						<a href="https://www.facebook.com/" target="_blank"><i class='bx bxl-facebook' ></i></a>
						<a href="https://www.instagram.com/" target="_blank"><i class='bx bxl-instagram-alt' ></i></a>
						<a href="https://twitter.com/home" target="_blank"><i class='bx bxl-twitter' ></i></a>
						<a href="https://www.linkedin.com/" target="_blank"><i class='bx bxl-linkedin' ></i></a>
					</div>
				</ul>
			</div>
		</div>


		<div class="contact-us-form">
			<h3>Give us your feedback</h3>
			<div class="boxbox1">
				<div class="text-box">
					<span>Your full name </span><span class="red-star">*</span>
				</div>
				<input type="text" name="" required>
			</div>
			<div class="boxbox1">
				<div class="text-box">
					<span>Your E-mail </span><span class="red-star">*</span>
				</div>
				<input type="text" name="" required>
			</div>
			<div class="boxbox1">
				<div class="text-box">
					<span>Subject </span><span class="red-star">*</span>
				</div>
				<input type="text" name="" required>
			</div>	
			<div class="boxbox2">
				<div class="text-box">
					<p>Your message <span class="red-star">*</span></p>
				</div>
				<br>
				<textarea placeholder="Write your feedback here..." name="" id="" cols="30" rows="5" required></textarea>
			</div>
			<div class="boxbox-submit">
				<input type="submit" value="Send">
			</div>
			<p class="required-pos"><span class="red-star">* </span> Required</p>
		</div>
	</section>

	<!--Newsletter--->
	<section class="newsletter">
		<div class="news-text">
			<h2>Newsletter</h2>
			<p>Subscribe For more php, CSS, and <br> coding tutorials</p>
		</div>

		<div class="send">
			<form>
				<input type="email" placeholder="Write Your Email" required>
				<input type="submit" value="Submit">
			</form>
		</div>
	</section>

	<!--footer--->
	<section id="contact">
		<div class="footer">
			<div class="main">
				<div class="list">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="about">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="Contact">Help</a></li>
						<li><a href="Tours">Tours</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Support</h4>
					<ul>
						<li><a href="about">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="Contact">Help</a></li>
						<li><a href="Tours">Tours</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Contact Info</h4>
					<ul>
						<li><a href="https://goo.gl/maps/Kw22ANFyPJr24cyA8" target="_blank">98 West 21th Street</a></li>
						<li><a href="https://goo.gl/maps/Kw22ANFyPJr24cyA8" target="_blank">New York NY 10016</a></li>
						<li><a href="Contact">+(123)-123-1234</a></li>
						<li><a href="mailto:info@travigo.com">info@travigo.com</a></li>
						<li><a href="Contact">+(123)-123-1234</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Connect</h4>
					<div class="social">
						<a href="https://www.facebook.com/" target="_blank"><i class='bx bxl-facebook' ></i></a>
						<a href="https://www.instagram.com/" target="_blank"><i class='bx bxl-instagram-alt' ></i></a>
						<a href="https://twitter.com/home" target="_blank"><i class='bx bxl-twitter' ></i></a>
						<a href="https://www.linkedin.com/" target="_blank"><i class='bx bxl-linkedin' ></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="end-text">
			<p>Copyright ©2022 All rights reserved | Travigo</p>
		</div>
	</section>

	<!--link to js--->
	<script type="text/javascript" src="../public/js/script.js"></script>

</body>
</html>