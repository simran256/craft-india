<?php include("conn.php");


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
	<!-- Main Header / Header Style Two -->
	<header class="main-header header-style-two">
		<!-- Header Top -->
		<div class="header-top">
			<div class="auto-container">
				<div class="inner-container">
					<div class="d-flex justify-content-between align-items-center flex-wrap">
						
						<div class="header-top_text">We are a modern and creative collective</div>

						<div class="right-box d-flex align-items-center flex-wrap">
							<!-- Info List -->
							<ul class="header-top_list">
								<li>
									<span class="icon"><img src="<?=$site?>assets/images/icons/phone.png" alt="" /></span>
									<a href="tel:<?=$c_num?>"> +91-<?=$c_num?>  </a>
								</li>
							</ul>
							<!-- Social Box -->
							<div class="header_socials">
								<span>Follow Us :</span>
								<a href="<?=$fb?>"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="<?=$tw?>"><i class="fa-brands fa-twitter"></i></a>
								<a href="<?=$insta?>"><i class="fa-brands fa-instagram"></i></a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<!-- Header Upper -->
		<div class="header-upper">
			<div class="auto-container">
				<div class="inner-container">
					<div class="d-flex justify-content-between align-items-center flex-wrap">
						
						<div class="logo-box">
							<div class="logo"><a href="<?=$site?>index.php"><img src="<?=$site?>assets/images/logo.png" alt="" title=""></a></div>
							<div class="logo-2"><a href="<?=$site?>index.php"><img src="<?=$site?>assets/images/logo.png" alt="" title=""></a></div>
						</div>
						
						<div class="nav-outer">
							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<!-- Toggle Button -->    	
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li><a href="<?=$site?>index.php">Home</a></li>
										<li><a href="<?=$site?>about-us.php">About us</a></li>
										<li class="dropdown"><a href="#">Products</a>
											<ul>
											      <?php
                                            $sql = "SELECT * FROM `cat_prod` WHERE `sub_category_id` = '0' AND `status` = '1'";
                                            $res = mysqli_query($conn,$sql);
                                            if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                $cat_pd = htmlspecialchars($row['ct_pd_name']);
                                                $cat_url = htmlspecialchars($row['ct_pd_url']);
                                                 $product_images = explode(",", $row['cat_pd_image']);
                                            
                                            ?>
												<li><a href="<?=$site?>products.php?category=<?=$cat_url?>"><?=$cat_pd?></a></li>
											<?php
                                            }
                                            }
                                            ?>
											</ul>
										</li>
										<li><a href="<?=$site?>gallery.php">Gallery</a></li>
										<li><a href="<?=$site?>contact-us.php">Contact us</a></li>
									</ul>
								</div>
							</nav>
						</div>
						
						<!-- Main Menu End-->
						<div class="outer-box d-flex align-items-center flex-wrap">
							
							<!-- Button Box -->
							<div class="header_button-box">
								<a href="<?=$site?>contact-us.php" class="theme-btn btn-style-three">
									<span class="btn-wrap">
										<span class="text-one">Get In Touch</span>
										<span class="text-two">Get In Touch</span>
									</span>
								</a>
							</div>

							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!--End Header Upper-->
		
		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon flaticon-close-1"></span></div>
			
			<nav class="menu-box">
				<div class="nav-logo"><a href="<?=$site?>index.php"><img src="<?=$site?>assets/images/logo.png" alt="" title=""></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
			</nav>
		</div>
		<!-- End Mobile Menu -->
	
	</header>
	<!-- End Main Header -->
	