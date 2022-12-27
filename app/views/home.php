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

	<link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

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
			<?php
				if(isset($_SESSION['UserID'])) {
			?>
			<h1>Welcome Back <br> Mr. <?= $_SESSION['UserName']?></h1>
			<?php
				}else {
			?>
			<h1>Travigo <br> Travel</h1>
			<?php
				}
			?>
			<p>Explore our trips and live The Good Life with Travigo <br> Tours that make you fall in love with the world.</p>
			<a href="Tours" class="home-btn">Let's go now</a>
		</div>
	</section>

	<!--container--->
	<section class="container">
		<div class="text">
			<h2>Start Your Vacation <br> with Lots of Services!</h2>
		</div>

		<div class="row-items">
			<a href="Tours" class="container-box">
				<div class="container-img">
					<img src="../public/img/trip1.png" alt="Ship icon">
				</div>
				<h4>Ship Cruises</h4>
				<p>150 Properties</p>
			</a>

			<a href="Tours" class="container-box">
				<div class="container-img">
					<img src="../public/img/trip2.png" alt="Salad icon">
				</div>
				<h4>Food Tours</h4>
				<p>150 Properties</p>
			</a>

			<a href="Tours" class="container-box">
				<div class="container-img">
					<img src="../public/img/trip3.png" alt="Sunset icon">
				</div>
				<h4>Summer Rest</h4>
				<p>150 Properties</p>
			</a>

		</div>
	</section>

	<!--Package section--->
	<section class="package" id="package">
		<div class="title">
			<h2>Our Upcoming <br> Tour Package</h2>
		</div>

		<div class="package-content">
			<div class="box">
				<div class="thum">
					<a href="Tours">
						<img src="../public/img/img1.png" alt="London image">
					</a>
					<h3>$499</h3>
				</div>

				<div class="dest-content">
					<div class="location">
						<h4>London</h4>
						<p>4h - 5h</p>
					</div>
					<div class="stars">
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
				</div>
			</div>

			<div class="box">
				<div class="thum">
					<a href="Tours">
						<img src="../public/img/img2.png" alt="New York image">
					</a>
					<h3>$499</h3>
				</div>

				<div class="dest-content">
					<div class="location">
						<h4>New York</h4>
						<p>4h - 5h</p>
					</div>
					<div class="stars">
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
				</div>
			</div>

			<div class="box">
				<div class="thum">
					<a href="Tours">
						<img src="../public/img/img3.png" alt="Dubai image">
					</a>
					<h3>$499</h3>
				</div>

				<div class="dest-content">
					<div class="location">
						<h4>Dubai</h4>
						<p>4h - 5h</p>
					</div>
					<div class="stars">
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!--destination section--->
	<section class="destination" id="destination">
		<div class="title">
			<h2>Our Most Popular <br> Destination!</h2>
		</div>

		<div class="destination-content">
			<div class="col-content">
				<a href="Tours">
					<img src="../public/img/img-1.jpg" alt="Peru image">
				</a>
				<h5>Machu Picchu</h5>
				<p>PERU</p>
			</div>

			<div class="col-content">
				<a href="Tours">
					<img src="../public/img/img-2.jpg" alt="Peru image">
				</a>
				<h5>Machu Picchu</h5>
				<p>PERU</p>
			</div>

			<div class="col-content">
				<a href="Tours">
					<img src="../public/img/img-3.jpg" alt="Peru image">
				</a>
				<h5>Machu Picchu</h5>
				<p>PERU</p>
			</div>

			<div class="col-content">
				<a href="Tours">
					<img src="../public/img/img-4.jpg" alt="Peru image">
				</a>
				<h5>Machu Picchu</h5>
				<p>PERU</p>
			</div>

			<div class="col-content">
				<a href="Tours">
					<img src="../public/img/img-5.jpg" alt="Peru image">
				</a>
				<h5>Machu Picchu</h5>
				<p>PERU</p>
			</div>

			<div class="col-content">
				<a href="Tours">
					<img src="../public/img/img-6.jpg" alt="Peru image">
				</a>
				<h5>Machu Picchu</h5>
				<p>PERU</p>
			</div>

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