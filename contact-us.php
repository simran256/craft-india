<?php
include("conn.php");
$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='contact'";
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
			<h2>Contact Us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.php">Home</a></li>
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Contact One -->
	<section class="contact-one">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">CONTACT INFO</div>
				<h2 class="sec-title_heading">Get in touch!</h2>
				
			</div>
			<div class="row clearfix">
				
				<?php
				
				$sql = "SELECT * FROM `users`";
				$res = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($res);
				$email = $row['email'];
				$num = $row['mobile']; 
				$address = $row['address']; 
		
			
				?>
				<!-- Contact Info Block -->
				<div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
					<div class="contact-info-block_inner">
						<span class="contact-info-block_icon fa-solid fa-location-dot fa-fw"></span>
						<h4 class="contact-info-block_heading">Address</h4>
						<div class="contact-info-block_text"><?=$address?></div>
					</div>
				</div>
				
				<!-- Contact Info Block -->
				<div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
					<div class="contact-info-block_inner">
						<span class="contact-info-block_icon fa fa-envelope"></span>
						<h4 class="contact-info-block_heading">Email</h4>
						<div class="contact-info-block_text"> <a href="mailto:<?=$email?>"><?=$email?></a></div>
					</div>
				</div>
				
				
				<!-- Contact Info Block -->
				<div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
					<div class="contact-info-block_inner">
						<span class="contact-info-block_icon fa-solid fa-phone fa-fw"></span>
						<h4 class="contact-info-block_heading">Mobile number</h4>
						<div class="contact-info-block_text"><a href="+91-<?=$num?>">+91-<?=$num?></a></div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact One -->

	<!-- Contact Form One -->
	<section class="contact-form-one" id="contact">
		<div class="auto-container">
			<div class="inner-container">
				
				<!-- Sec Title -->
				<div class="sec-title centered">
					<div class="sec-title_title">CONTACT US</div>
					<h2 class="sec-title_heading">Have questions?  Get in touch!</h2>
				</div>
				
				<!-- Default Form -->
				<div class="contact-form">
					<form method="post" action="#" id="contact-form">
						<div class="row clearfix">
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="name" placeholder="Name" required="">
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="email" placeholder="Email" required="">
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="phone" placeholder="Phone" required="">
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="subject" placeholder="Subject" required="">
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<textarea class="" name="message" placeholder="how can i help you? Feel free to get in touch"></textarea>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
								<!-- Button Box -->
								<div class="button-box">
									<button class="theme-btn btn-style-three" type="submit" name= "submit">
										<span class="btn-wrap">
											<span class="text-one">get in touch</span>
											<span class="text-two">get in touch</span>
										</span>
									</button>
								</div>
							</div>
							
						</div>
					</form>
				</div>
				<!-- End Default Form -->
				
			</div>
		</div>
	</section>
	<!-- End Contact Form One -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.9114429838046!2d77.04575508745694!3d28.632416121352755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d051a5b1fd36d%3A0x2f86d207ee2ae66e!2sMaharani%20Enclave%2C%20Hastsal%2C%20Delhi%2C%20110059!5e0!3m2!1sen!2sin!4v1732685138244!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	
</div>
<!-- End PageWrapper -->
<?php include('footer.php')?>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Insert into the database
    $sql = "INSERT INTO tbl_contact(name, email, phone, subject, message)
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";
    $res = mysqli_query($conn, $sql);
    
      if ($email === false) {
           echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Invalid email address",
                        text: "Failed to send the email. Please try again later.",
                        confirmButtonText: "OK"
                    });
                </script>';
 
        exit;
    }
    
      ob_start(); 
    include 'emailTemplate.php'; 
     $message2 = ob_get_clean(); 
     
       $to = "developer.web2techsolutions@gmail.com";
    $subject = $subject;
    // $body = "<html><body>";
    // $body .= "<h2>Enquiry From: " . $name . "</h2>";
    // $body .= "<p><strong>Name:</strong> " . $name . "</p>";
    // $body .= "<p><strong>Email:</strong> " . $email . "</p>";
    // $body .= "<p><strong>Number:</strong> " . $phone . "</p>";
    // $body .= "<p><strong>Subject:</strong> " . $subject . "</p>";
    // $body .= "<p><strong>Message:</strong> " . $message . "</p>";
    $body .= $message2; // This will append the content of emailTemplate.php
    $body .= "</body></html>";
    
    
    
     $headers = "From: no-reply@Craft-india.com\r\n" .
                       "Reply-To: no-reply@Craft-india.com\r\n" .
                       "MIME-Version: 1.0\r\n" .
                       "Content-Type: text/html; charset=UTF-8\r\n";
                       
                         if (mail($to, $subject, $body, $headers)) {
                echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Data Sent Successfully",
                      
                        confirmButtonText: "OK"
                    }).then(function() {
                        window.location.href = "index.php";
                    });
                </script>';
            } else {
                echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Email Error!",
                        text: "Failed to send the email. Please try again later.",
                        confirmButtonText: "OK"
                    });
                </script>';
            }
}
?>
