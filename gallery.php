<?php

include("conn.php");
$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='gallery'";
$headerResult = mysqli_query($conn, $headerQuery);

if ($headerResult && mysqli_num_rows($headerResult) > 0) {
    // Fetch data as an associative array
    $header1 = mysqli_fetch_assoc($headerResult);
} else {
    $header1 = ['page_title' => '', 'message' => '', 'page_keyword' => '']; // Default values if no result is found
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta charset="utf-8">
	<title><?php echo $header1['page_title'];?></title>		
    <!--<meta name="author" content="<?php echo $theme['company_name'];?>">-->
    <meta name="description" content="<?php echo $header1['message'];?>">
    <link rel="canonical" href="<?php echo $header1['page_keyword'];?>" >
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Anybody:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
</head>
<body>
<div class="page-wrapper">
<?php include('header.php')?>
    <section class="page-title" style="background-image:url(assets/images/bg1.jpg)">
        <div class="auto-container">
			<h2>Gallery</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.php">Home</a></li>
				<li>Gallery</li>
			</ul>
        </div>
    </section>
    	<!-- Project One -->
	<section class="project-one">
		<div class="auto-container">
			<div class="row clearfix">
			    	<?php
						
						$sql = "SELECT * FROM `gallery` WHERE `status` = '1' limit 8";
						$res = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($res)){
						    $image = $row['image'];
						    
						
						
						?>
				<div class="project-block_one col-lg-4 col-md-12 col-sm-12">
					<div class="project-block_one-inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="project-block_one-image">
							<a href="#"><img src="<?=$site?>admin/uploads/gallery/<?=$image?>" alt="" /></a>
						</div>
					
					</div>
				</div>
           <?php
						}
						?>
			</div>
		</div>
	</section>
	<!-- End Project One -->
    </div>
    <?php include('footer.php')?>
</body>
</html>
	