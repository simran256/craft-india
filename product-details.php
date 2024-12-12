<?php

include("conn.php");

$url = mysqli_real_escape_string($conn, $_GET['alias']);

// Fetch product details
$query = "SELECT * FROM `cat_prod` WHERE ct_pd_url = '$url' AND status = '1' LIMIT 1";
$header = mysqli_query($conn, $query);

if (mysqli_num_rows($header) > 0) {
    $header1 = mysqli_fetch_assoc($header);
    
    // Product details
    $subcategory_id = $header1['sub_category_id']; // Get the parent category ID
    $subcategory_name = $header1['ct_pd_name']; // Get the subcategory/product name
    $product_images = explode(",", $header1['cat_pd_image']); // Split image filenames
    $price = $header1['cat_pd_price'];
    $mrp = $header1['cat_pd_mrp'];
    $long_desc = $header1['long_description'];

    // Fetch main category name
    $cat_query = "SELECT ct_pd_name FROM `cat_prod` WHERE id = '$subcategory_id' AND status = '1' LIMIT 1";
    $cat_res = mysqli_query($conn, $cat_query);
    $cat_data = mysqli_fetch_assoc($cat_res);

    if ($cat_data) {
        $cat_name = $cat_data['ct_pd_name']; // Get the main category name
    } else {
        $cat_name = 'Unknown Category';
    }
} else {
    die("Product not found.");
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Craft India </title>
<link href="<?=$site?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?=$site?>assets/css/style.css" rel="stylesheet">
<link href="<?=$site?>assets/css/responsive.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Anybody:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
</head>
<body>
<div class="page-wrapper">
<?php include('header.php')?>
    <section class="page-title" style="background-image:url(assets/images/bg1.jpg)">
        <div class="auto-container">
			<h2><?=$subcategory_name?></h2>
			<ul class="bread-crumb clearfix">
				<li><a href="<?=$site?>index.php">Home</a></li>
                <li><a href="#"><?=$cat_name?></a></li>
				<li><?=$subcategory_name?></li>
			</ul>
        </div>
    </section>
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                	<div class="shop-single">
                        <div class="product-details">
                            <div class="basic-details">
                                <div class="row clearfix">
                                   
                                    <div class="info-column col-lg-12 col-md-12 col-sm-12">
                                          <figure class="image-box"><img  src="<?=$site?>admin/uploads/product/cat_pd_image/<?=$product_images[0]?>"></figure>
                                        <div class="details-header">
                                            <h4><?=$subcategory_name?></h4>   
                                        </div>

                                        <div class="text">
                                            <p> <?=$long_desc?> </p>         
                                        </div>
										
									</div>
                                </div>
                            </div>
                            <!--Basic Details-->
						</div>
                    </div>
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-8 col-sm-12">
                	<aside class="sidebar sticky-top">
						<div class="sidebar-widget popular-widget">
							<!-- Sidebar Title -->
							<div class="sidebar-title">
								<h5>Popular Category</h5>
							</div>
							<div class="widget-content">
								<ul class="popular-list">
								 <?php
                                            $sql = "SELECT * FROM `cat_prod` WHERE `sub_category_id` = '0' AND `status` = '1'";
                                            $res = mysqli_query($conn,$sql);
                                            if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                $cat_pd = htmlspecialchars($row['ct_pd_name']);
                                                $cat_url = htmlspecialchars($row['ct_pd_url']);
                                            
                                            ?>
												<li><a href="<?=$site?>products.php?category=<?=$cat_url?>"><?=$cat_pd?></a></li>
											<?php
                                            }
                                            }
                                            ?>
								</ul>
							</div>
						</div>

						
                    </aside>
                </div>
                
            </div>
        </div>
    </div>
    <!--End Blog Small Section-->

</div>
<?php include('footer.php')?>
</body>
</html>