<?php 
	session_start();
	$getData = new toursController();
	$Tours = $getData->getTours();
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

	<!--Package section--->
	<section class="package" id="package">
		<div class="ttl">
			<h2>Discover our offers</h2>
		</div>
		<!-- ====================== First tour ====================== -->
		<?php foreach($Tours as $tour) { ?>
		<div class="package-content2">
			<div class="box">
				<div class="thum">
					<img src="../public/uploads/<?= $tour['Image'];?>" alt="<?= $tour['Destination'];?> image">
					<h3>$<?= $tour['Price']; ?></h3>
				</div>

				<div class="dest-content">
					<div class="location">
						<h4><?= $tour['Destination']; ?></h4>
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

			<div>
				<div class="container-box-r">
					<p><?= $tour['Description']; ?></p>
				</div>

				<div class="book-r">
					<h3>Are you interested to visit <?= $tour['Destination']; ?>? What are you waiting for? Book now!</h3>
					<button>Book</button>
				</div>
			</div>
		</div>
		<?php } ?>
		<!--
		<div class="package-content2">
			<div class="switch-order">
				<div class="container-box-l">
					<p>Booming with diversity, culture, history and innovation, NYC (AKA New York City) radiates an energy that is best experienced in person. From a robust culinary scene to larger-than-life attractions, there’s plenty to explore across the five boroughs. Don’t wait—a New York minute is just too good to miss. <br>
						<span class="country-des">Even if the picture looks like Alaska or somewhere else similar to it, but it’s really New York (source: ...).</span></p>
				</div>

				<div class="book-l">
					<h3>Are you interested to visit New York? What are you waiting for? Book now!</h3>
					<button>Book</button>
				</div>
			</div>

			<div class="box">
				<div class="thum">
					<img src="../public/img/img2.png" alt="New York image">
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
		</div>
		<div class="package-content2">
			<div class="box">
				<div class="thum">
					<img src="../public/img/img3.png" alt="Dubai image">
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

			<div>
				<div class="container-box-r">
					<p>Every visit to Dubai promises something new. From record-breaking attractions that are changing our skyline to fresh surprises for the family to enjoy and exciting thrills to try for the adventurous, there’s so much to take in on every trip. So tick off that travel checklist you've been working on, see what's on while you’re in Dubai and then dive straight in – the city’s latest and greatest awaits. <br>
						<span class="country-des">And of course we have snowy mountains in Dubai, all good.</span></p>
				</div>

				<div class="book-r">
					<h3>Are you interested to visit Dubai? What are you waiting for? Book now!</h3>
					<button>Book</button>
				</div>
			</div>
		</div>
		<div class="package-content2">
			<div class="switch-order">
				<div class="container-box-l">
					<p>The desert heat, the noisy streets and the sheer size of Cairo will leave even the most adaptable traveler with a serious case of culture shock. The constant bombardment of street vendors, the inescapable aroma of livestock and the seemingly chaotic way of life will joggle the senses. But be patient. Take some time to relax over a cup of tea, to wander the ancient streets and to watch the sun lower over the mighty Nile River. It won't take long for the city's treasures to reveal themselves. <br>
						<span class="country-des">It also gives a real feeling of visiting Marrakech at the same time, 2 in 1.</span></p>
				</div>

				<div class="book-l">
					<h3>Are you interested to visit Cairo? What are you waiting for? Book now!</h3>
					<button>Book</button>
				</div>
			</div>

			<div class="box">
				<div class="thum">
					<img src="../public/img/mar.jpg" alt="Cairo image">
					<h3>$449</h3>
				</div>

				<div class="dest-content">
					<div class="location">
						<h4>Cairo</h4>
						<p>4h - 5h</p>
					</div>
					<div class="stars">
						<a href="#"><i class='bx bxs-star gray-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
				</div>
			</div>
		</div>
		-->
	</section>
	

	<!--After package section--->
	<section class="destination" id="destination">
		<div class="title">
			<h2>And more to come later!</h2>
			<br>
			<p class="awsome">Subscribe to our newsletter to recieve the latest news about our offers. “php, CSS, and coding tutorials” is just a troll.</p>
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