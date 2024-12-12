<?php 

include("conn.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Craft India </title>
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Anybody:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
</head>
<body>
<div class="page-wrapper">
<?php include('header.php')?>

	<!-- Slider Two -->
	<section class="slider-two">
		<div class="main-slider_two swiper-container">
			<div class="swiper-wrapper">

				<!-- Slide -->
				<div class="swiper-slide">
					<div class="slider-two_image-layer" style="background-image:url(assets/images/bg1.jpg)"></div>
					<div class="auto-container">
						<div class="slider-two_content text-center">
							<div class="slider-two_circle"></div>
							<h1 class="slider-two_heading">Balkani Set</h1>
							<div class="slider-two_text">Truly unique designs that are specially curated to perfection</div>
							<div class="slider-two_button">
								<a href="<?=$site?>about-us.php" class="theme-btn btn-style-two">
									<span class="btn-wrap">
										<span class="text-one">Know More</span>
										<span class="text-two">Know More</span>
									</span>
								</a>
							</div>
							<div class="slider-two_image"><img src="assets/images/sli1.png" alt="" /></div>
							<div class="slider-two_image-two"><img src="assets/images/sli2.png" alt="" /></div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="swiper-slide">
					<div class="slider-two_image-layer" style="background-image:url(assets/images/bg2.jpg)"></div>
					<div class="auto-container">
						<div class="slider-two_content text-center">
							<div class="slider-two_circle"></div>
							<h1 class="slider-two_heading">Outdoor Sofa set</h1>
							<div class="slider-two_text">Truly unique designs that are specially curated to perfection</div>
							<div class="slider-two_button">
								<a href="<?=$site?>about-us.php" class="theme-btn btn-style-two">
									<span class="btn-wrap">
										<span class="text-one">Know More</span>
										<span class="text-two">Know More</span>
									</span>
								</a>
							</div>
							<div class="slider-two_image"><img src="assets/images/sli3.jpg" alt="" /></div>
							<div class="slider-two_image-two"><img src="assets/images/sli4.jpg" alt="" /></div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="swiper-slide">
					<div class="slider-two_image-layer" style="background-image:url(assets/images/bg3.webp)"></div>
					<div class="auto-container">
						<div class="slider-two_content text-center">
							<div class="slider-two_circle"></div>
							<h1 class="slider-two_heading">Outdoor Dining Table Set</h1>
							<div class="slider-two_text">Truly unique designs that are specially curated to perfection</div>
							<div class="slider-two_button">
								<a href="<?=$site?>about-us.php" class="theme-btn btn-style-two">
									<span class="btn-wrap">
										<span class="text-one">Know More</span>
										<span class="text-two">Know More</span>
									</span>
								</a>
							</div>
							<div class="slider-two_image"><img src="assets/images/sli5.jpg" alt="" /></div>
							<div class="slider-two_image-two"><img src="assets/images/sli6.png" alt="" /></div>
						</div>
					</div>
				</div>

			</div>
			<div class="slider-two-arrow">
				<!-- If we need navigation buttons -->
				<div class="slider-two_prev"><img src="assets/images/main-slider/slider-two-prev_arrow.png" alt="" /></div>
				<div class="slider-two_next"><img src="assets/images/main-slider/slider-two-next_arrow.png" alt="" /></div>
				<!-- If we need pagination -->
				<div class="slider-two_pagination"></div>
			</div>
		</div>
	</section>
	<!-- End Main Slider Section -->

	<!-- Welcome Two -->
	<section class="welcome-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<div class="sec-title_title">Welcome to Craft India</div>
					<h2 class="sec-title_heading">We use quality materials, natural and modern, making  buildings.</h2>
				</div>
				
			</div>
			<div class="row clearfix">
				<!-- Column -->
				<div class="welcome-two_content-column col-lg-5 col-md-12 col-sm-12">
					<div class="welcome-two_content-outer">
						<p>Welcome to Craft India! As a furniture-based company, Craft India specializes in designing and manufacturing high-quality, stylish, and durable furniture that adds elegance and functionality to any space. Whether you are looking for modern, traditional, or customized furniture solutions, Craft India ensures craftsmanship and innovation in every piece.</p>
						<p>Craft India is your ultimate destination for premium furniture that combines elegance, functionality, and exceptional craftsmanship. As a furniture-based company, we take pride in delivering high-quality pieces that cater to a wide array of styles and preferences, whether for residential or commercial spaces.</p>
                        <p>At Craft India, we believe that furniture is more than just functional—it's an expression of your personality and a crucial element in creating a comfortable and inviting environment. Our diverse range includes everything from classic designs that exude timeless sophistication to modern pieces that reflect contemporary trends.</p>
					</div>
				</div>
				<!-- Column -->
				<div class="welcome-two_image-column col-lg-7 col-md-12 col-sm-12">
					<div class="welcome-two_image-outer">
						<div class="welcome-two_image skewElem">
							<img src="assets/images/about.jpg" alt="" />
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Welcome One -->

<!-- Team One -->
	<section class="team-one">
        <div class="services-two_color-layer"></div>
		<div class="auto-container">
			<div class="sec-title centered">
				<div class="sec-title_title">Products</div>
				<h2 class="sec-title_heading">What we do?</h2>
			</div>
			<div class="team-one_slider swiper-container">
				<div class="swiper-wrapper">
				    <?php
                                            $sql = "SELECT * FROM `cat_prod` WHERE `sub_category_id` = '0' AND `status` = '1'";
                                            $res = mysqli_query($conn,$sql);
                                            if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                $cat_pd = htmlspecialchars($row['ct_pd_name']);
                                                $cat_url = htmlspecialchars($row['ct_pd_url']);
                                            $product_images = explode(",", $row['cat_pd_image']);
                                            ?>
					<div class="swiper-slide">
						<div class="team-block_one">
							<div class="team-block_one-inner">
								<div class="team-block_one-image">
									<img src="<?=$site?>admin/uploads/product/cat_pd_image/<?=$product_images[0]?>" alt="" />
								</div>
								<div class="team-block_one-content">
									<h3 class="team-block_one-heading"><a href="<?=$site?>products.php?category=<?=$cat_url?>"><?=$cat_pd?></a></h3>
								<a href="<?=$site?>products.php?category=<?=$cat_url?>" class="theme-btn btn-style-two">
									<span class="btn-wrap">
										<span class="text-one">all products</span>
										<span class="text-two">all products</span>
									</span>
								</a>
								</div>
							</div>
						</div>
					</div>
				
				<?php
                                            }
                                            }
                                            ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team One -->
	

	<!-- Steps One -->
	<section class="steps-one">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				
				<div class="sec-title_title">Following few steps</div>
				<h2 class="sec-title_heading">How it works</h2>
			</div>
			<div class="row clearfix">
				<!-- Column -->
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<!-- Step Block One -->
					<div class="step-block_two">
						<div class="step-block_two-inner">
							<div class="step-block_two-number">01</div>
							<div class="step-block_two-icon"><img src="assets/images/icons/step-1.svg" alt="" /></div>
							<h3 class="step-block_two-heading">Survey</h3>
							<div class="step-block_two-text">Erat volutpat. Ut wisi enim nexerci ullam corper nisl ut alcommo do consquat</div>
						</div>
					</div>
					<!-- Step Block One -->
					<div class="step-block_two">
						<div class="step-block_two-inner">
							<div class="step-block_two-number">02</div>
							<div class="step-block_two-icon"><img src="assets/images/icons/step-2.svg" alt="" /></div>
							<h3 class="step-block_two-heading">Design</h3>
							<div class="step-block_two-text">Erat volutpat. Ut wisi enim nexerci ullam corper nisl ut alcommo do consquat</div>
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="column col-lg-4 col-md-12 col-sm-12">
					<div class="step-block_two-image">
						<img src="assets/images/feat.webp" alt="" />
						
					</div>
				</div>
				<!-- Column -->
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<!-- Step Block One -->
					<div class="step-block_two style-two">
						<div class="step-block_two-inner">
							<div class="step-block_two-number">03</div>
							<div class="step-block_two-icon"><img src="assets/images/icons/step-3.svg" alt="" /></div>
							<h3 class="step-block_two-heading">Planning</h3>
							<div class="step-block_two-text">Erat volutpat. Ut wisi enim nexerci ullam corper nisl ut alcommo do consquat</div>
						</div>
					</div>
					<!-- Step Block One -->
					<div class="step-block_two style-two">
						<div class="step-block_two-inner">
							<div class="step-block_two-number">04</div>
							<div class="step-block_two-icon"><img src="assets/images/icons/step-4.svg" alt="" /></div>
							<h3 class="step-block_two-heading">Build</h3>
							<div class="step-block_two-text">Erat volutpat. Ut wisi enim nexerci ullam corper nisl ut alcommo do consquat</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Steps One -->

	<!-- Faq One -->
	<section class="faq-one">
		<div class="faq-one_image-layer" style="background-image:url(assets/images/background/faq-one_bg.jpg)"></div>
		<div class="faq-one_image-layer-two" style="background-image:url(assets/images/form.jpg)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Accordian Column -->
				<div class="faq-one_accordian-column col-lg-7 col-md-12 col-sm-12">
					<div class="faq-one_accordian-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="sec-title_title">Helpful Faqs</div>
							<h2 class="sec-title_heading">Planning Guide!</h2>
						</div>

						<!-- Accordion Box -->
						<ul class="accordion-box">
									
							<!-- Block -->
							<li class="accordion block active-block">
								<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>How do I know you’ll design what I want?</div>
								<div class="acc-content current">
									<div class="content">
										<div class="text">Erat volutpat. Ut wisi enim nostrud exerci ullam corper sus cipit lobortis o do connisl ut aliquip ex commo do consquatErat volutpat. Ut wisi enim nostrud eo do conxerci ullamcorper suscipit.</div>
									</div>
								</div>
							</li>
										
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Do you have sufficient experience to secure?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Erat volutpat. Ut wisi enim nostrud exerci ullam corper sus cipit lobortis o do connisl ut aliquip ex commo do consquatErat volutpat. Ut wisi enim nostrud eo do conxerci ullamcorper suscipit.</div>
									</div>
								</div>
							</li>

							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>How much do I need to invest in your full services?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Erat volutpat. Ut wisi enim nostrud exerci ullam corper sus cipit lobortis o do connisl ut aliquip ex commo do consquatErat volutpat. Ut wisi enim nostrud eo do conxerci ullamcorper suscipit.</div>
									</div>
								</div>
							</li>

							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Do you only take up projects?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Erat volutpat. Ut wisi enim nostrud exerci ullam corper sus cipit lobortis o do connisl ut aliquip ex commo do consquatErat volutpat. Ut wisi enim nostrud eo do conxerci ullamcorper suscipit.</div>
									</div>
								</div>
							</li>

						</ul>

					</div>
				</div>
				<!-- Form Column -->
				<div class="faq-one_form-column col-lg-5 col-md-8 col-sm-12">
					<div class="faq-one_form-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="faq-one_form-vector" style="background-image:url(assets/images/background/faq-one_vector.png)"></div>
						<h5>Request a Quote</h5>

						<!-- Default Form -->
						<div class="default-form">
							<form method="post" action="<?=$site?>contact-us.php">
								
								<div class="form-group">
									<input type="text" name="name" placeholder="Full Name" required="">
								</div>
								
								<div class="form-group">
									<input type="text" name="email" placeholder="Email Address" required="">
								</div>

								<div class="form-group">
									<input type="text" name="phone" placeholder="Phone No" required="">
								</div>
                               <div class="form-group">
									<input type="text" name="subject" placeholder="Subject" required="">
								</div>
							
								<div class="form-group">
									<textarea class="" name="message" placeholder="Enter your Message"></textarea>
								</div>
								
								<div class="form-group">
									<!-- Button Box -->
									<button type="submit" class="theme-btn btn-style-two" name="submit">
										<span class="btn-wrap">
											<span class="text-one">submit now</span>
											<span class="text-two">submit now</span>
										</span>
									</button>
								</div>
								
							</form>
						</div>
						<!-- End Default Form -->

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Faq One -->

 
	<!-- Testimonial Three -->
	<section class="testimonial-three">
		<div class="testimonial-three_color-layer"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="sec-title_title">Testimonials</div>
				<h2 class="sec-title_heading">Clients Reviews</h2>
			</div>
			<div class="inner-container">

				<div class="testimonial__slider-wrap">
					<div class="testimonial__active_two swiper-container">
						<div class="swiper-wrapper">
							<!-- Slide -->
							<div class="swiper-slide">
								<div class="testimonial-block_two">
									<div class="testimonial-block_two-inner">
										<div class="testimonial-block_two-content">
											<div class="testimonial-block_two-image">
												<img src="assets/images/resource/author-5.jpg" alt="">
											</div>
											<div class="testimonial-block_two-text">"Craft India transformed my living room with their stunning furniture collection. The quality and craftsmanship are unmatched. I’ve received countless compliments from guests!"</div>
											<div class="testimonial-block_two-rating">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
											<div class="testimonial-block_two-author">
												Aman Sharma 
												<span>Homeowner</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Slide -->
							<div class="swiper-slide">
								<div class="testimonial-block_two">
									<div class="testimonial-block_two-inner">
										<div class="testimonial-block_two-content">
											<div class="testimonial-block_two-image">
												<img src="assets/images/resource/author-6.jpg" alt="">
											</div>
											<div class="testimonial-block_two-text">"As an interior designer, I’m always on the lookout for unique and durable furniture. Craft India’s custom solutions have been a game-changer for my projects. Their team is professional, and the results are always exceptional."</div>
											<div class="testimonial-block_two-rating">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
											<div class="testimonial-block_two-author">
												Neha Gupta 
												<span>Interior Designer</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Slide -->
							<div class="swiper-slide">
								<div class="testimonial-block_two">
									<div class="testimonial-block_two-inner">
										<div class="testimonial-block_two-content">
											<div class="testimonial-block_two-image">
												<img src="assets/images/resource/author-5.jpg" alt="">
											</div>
											<div class="testimonial-block_two-text">"We needed furniture for our new office, and Craft India delivered beyond our expectations. The designs were sleek, and the team worked closely with us to ensure everything fit perfectly in our space."</div>
											<div class="testimonial-block_two-rating">
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
											<div class="testimonial-block_two-author">
												Rajiv Mehta 
												<span>Business Owner</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonial__nav_two swiper-container">
						<div class="swiper-wrapper">
							<div class="testimonial__nav-thumb swiper-slide">
								<img src="assets/images/resource/author-5.jpg" alt="">
							</div>
							<div class="testimonial__nav-thumb swiper-slide">
								<img src="assets/images/resource/author-6.jpg" alt="">
							</div>
							<div class="testimonial__nav-thumb swiper-slide">
								<img src="assets/images/resource/author-5.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="testimonial__nav-two-arrow">
						<!-- If we need navigation buttons -->
						<div class="testimonial__nav-two-slider-prev"><img src="assets/images/icons/client-one_prev-arrow.png" alt="" /></div>
						<div class="testimonial__nav_two-slider-next"><img src="assets/images/icons/client-one_next-arrow.png" alt="" /></div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Testimonial Three -->
<!-- Services One -->
	<section class="services-one">
		<div class="services-one_image-layer" style="background-image:url(assets/images/background/service-one_bg.jpg)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<div class="sec-title_title">Company Services</div>
					<h2 class="sec-title_heading">We specialize in these fields.</h2>
				</div>
				
			</div>
			<div class="inner-container">
				<div class="services-one_circle-color"></div>
				<div class="row clearfix">
					<!-- Blocks Column -->
					<div class="services-one_blocks-column col-lg-8 col-md-12 col-sm-12">
						<div class="services-one_blocks-outer">
							<div class="row clearfix">

								<!-- Service Block One -->
								<div class="service-block_one col-lg-6 col-md-6 col-sm-12">
									<div class="service-block_one-inner">
										<div class="service-block_one-upper">
											<div class="service-block_one-icon"><img src="assets/images/icons/service-5.svg" alt="" /></div>
											<h5 class="service-block_one-heading"><a href="#">Custom Furniture Design</a></h5>
										</div>
										<div class="service-block_one-text">Craft India specializes in creating bespoke furniture tailored to your specific needs and preferences.</div>
									</div>
								</div>

								<!-- Service Block One -->
								<div class="service-block_one col-lg-6 col-md-6 col-sm-12">
									<div class="service-block_one-inner">
										<div class="service-block_one-upper">
											<div class="service-block_one-icon"><img src="assets/images/icons/service-6.svg" alt="" /></div>
											<h5 class="service-block_one-heading"><a href="#">Premium Quality Materials</a></h5>
										</div>
										<div class="service-block_one-text">We use only the finest materials, including high-grade wood, metal, and upholstery, to ensure durability,every piece.</div>
									</div>
								</div>

								<!-- Service Block One -->
								<div class="service-block_one col-lg-6 col-md-6 col-sm-12">
									<div class="service-block_one-inner">
										<div class="service-block_one-upper">
											<div class="service-block_one-icon"><img src="assets/images/icons/service-7.svg" alt="" /></div>
											<h5 class="service-block_one-heading"><a href="#">Diverse Furniture Styles</a></h5>
										</div>
										<div class="service-block_one-text">From timeless traditional designs to sleek and modern aesthetics, Craft India offers a wide range of furniture .</div>
									</div>
								</div>

								<!-- Service Block One -->
								<div class="service-block_one col-lg-6 col-md-6 col-sm-12">
									<div class="service-block_one-inner">
										<div class="service-block_one-upper">
											<div class="service-block_one-icon"><img src="assets/images/icons/service-8.svg" alt="" /></div>
											<h5 class="service-block_one-heading"><a href="#">Outdoor Furniture Expertise</a></h5>
										</div>
										<div class="service-block_one-text">Craft India also excels in crafting weather-resistant outdoor furniture that enhances patios, gardens.</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- Video Column -->
					<div class="services-one_video-column col-lg-4 col-md-8 col-sm-12">
						<div class="services-one_video-outer">
							<div class="service-block_one-video skewElem">
								<img src="assets/images/specialize.webp" alt="" />
								
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- End Services One -->


    </div>
<?php include('footer.php')?>
</body>
</html>