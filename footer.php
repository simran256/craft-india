<?php 
include("conn.php");

$sql ="SELECT * FROM `users` WHERE `status` = '1'";
$res = mysqli_query($conn, $sql);
if ($res && mysqli_num_rows($res) > 0){
$row = mysqli_fetch_assoc($res);
$c_num = $row['mobile'];
$w_num = $row['whatsapp_number'];
$email = $row['email'];
$address = $row['address'];
$fb = $row['facebook_link'];
$tw = $row['twittter_link'];
$yt = $row['youtube_link'];
$insta = $row['instagram_link'];
}
?>
<!-- Info One -->
	<section class="info-one">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Info Block One -->
				<div class="info-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-content">
							<div class="info-block_one-icon fa-solid fa-phone fa-fw"></div>
							Phone No: <br> +91-<?=$c_num?>
						</div>
					</div>
				</div>

				<!-- Info Block One -->
				<div class="info-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-content">
							<div class="info-block_one-icon fa-solid fa-envelope"></div>
							Email Id: <br> <?=$email?>
						</div>
					</div>
				</div>

				<!-- Info Block One -->
				<div class="info-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-content">
							<div class="info-block_one-icon fa-solid fa-map fa-fw"></div>
							<?=$address?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Info One -->
<!-- Footer Style -->
	<footer class="footer-style-two">
		<div class="footer-two_bg-image" style="background-image: url(assets/images/background/footer-bg-2.jpg)"></div>
		<div class="auto-container">
			
			<!-- Widgets Section -->
			<div class="widgets-section">
				<div class="row clearfix">
					<div class="footer-column col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget info-widget">
							<h5>Information</h5>
							<p>Welcome to Craft India! As a furniture-based company, Craft India specializes in designing and manufacturing high-quality, stylish, and durable furniture that adds elegance and functionality to any space. Whether you are looking for modern, traditional, or customized furniture solutions, Craft India ensures craftsmanship and innovation in every piece.</p>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="footer-column col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget contact-widget">
							<h5>quick links</h5>
							<ul class="footer-list">
								<li><a href="<?=$site?>">Home</a></li>
								<li><a href="<?=$site?>about-us.php">About us</a></li>
								<li><a href="<?$site?>gallery.php">Gallery</a></li>
								<li><a href="<?=$site?>contact-us.php">Contact us</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="footer-column col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget newsletter-widget">
							<h5>Newsletter</h5>
							<p>subscribe and get recent news and offers.</p>
							<!-- Subscribe Box -->
							<div class="subscribe-box style-three">
								<form method="post" action="#">
									<div class="form-group">
										<input type="email" name="search-field" value="" placeholder="Enter Your Email" required>
										<button type="submit">Subscribe</button>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="copyright">Copyright &copy; Craft India 2024. All Rights Reserved.</div>
					<!-- Social Box -->
					<div class="footer_socials">
						<a href="<?=$fb?>"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="<?=$tw?>"><i class="fa-brands fa-twitter"></i></a>
						<a href="<?=$yt?>"><i class="fa-brands fa-youtube"></i></a>
						<a href="<?=$insta?>"><i class="fa-brands fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/backtotop.js"></script>
<script src="assets/js/odometer.js"></script>
<script src="assets/js/parallax-scroll.js"></script>
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/SplitText.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/ScrollToPlugin.min.js"></script>
<script src="assets/js/ScrollSmoother.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>
<script src="assets/js/jquery.marquee.min.js"></script>
<script src="assets/js/color-settings.js"></script>
<script src="assets/js/script.js"></script>