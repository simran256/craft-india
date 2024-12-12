<?php
 include("conn.php");
$category_slug = isset($_GET['category']) ? mysqli_real_escape_string($conn, $_GET['category']) : '';

// Fetch the specific main category based on slug
$main_cat_sql = "SELECT * FROM `cat_prod` WHERE ct_pd_url = '$category_slug' AND sub_category_id = '0' AND status = '1'";
$main_cat_res = mysqli_query($conn, $main_cat_sql);
$main_category = mysqli_fetch_assoc($main_cat_res);

$cat_id = $main_category['id'];
 $cat_name = $main_category['ct_pd_name'];

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
    <section class="page-title" style="background-image:url(assets/images/bg1.jpg)">
        <div class="auto-container">
			<h2><?=$cat_name?></h2>
			<ul class="bread-crumb clearfix">
				<li><a href="<?=$site?>index.php">Home</a></li>
				<li><?=$cat_name?></li>
			</ul>
        </div>
    </section>
   
	<section class="project-one">
		<div class="auto-container">
			<div class="row clearfix">
			    <?php 
                    $sql = "SELECT * FROM `cat_prod` WHERE sub_category_id = '$cat_id' AND sub_category_id1 = '0' AND status = '1'";
                    $res = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($res)){
                        $sub_cat = $row['ct_pd_name'];
                        $sub_mrp = $row['cat_pd_mrp'];
                        $sub_price = $row['cat_pd_price'];
                        $cat_url = htmlspecialchars($row['ct_pd_url']);
                    
                      $product_images = explode(",", $row['cat_pd_image']); // Split image filenames
                    ?>
				<div class="project-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="project-block_one-inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="project-block_one-image">
							<a href="<?=$site?>product-details/<?=$cat_url?>"><img src="<?=$site?>admin/uploads/product/cat_pd_image/<?=$product_images[0]?>" alt="" /></a>
						</div>
						<div class="project-block_one-content">
							<h3 class="project-block_one-heading"><a href="<?=$site?>product-details/<?=$cat_url?>"><?=$sub_cat?></a></h3>
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