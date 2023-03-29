
<?php
	 if(isset($_REQUEST['submit'])){
		
		$username = "yogeshwa_contact";
	    $password = "Yogesh@123";
	    $dbname = "yogeshwa_contact";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}else{
	    $sql = "INSERT INTO contact(full_name, email, phone, message)"
	        . "VALUES ('".$_POST['full_name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['message']."')";
	
	if ($conn->query($sql) === TRUE) {
	    $subject ="website Contact Data";
	    $to ="info@yogeshwaraprefab.com";
	    $from=$_POST['email'];
		
		  $message = "Hello, I am ". $_POST['full_name'].", \nEmail id = ".$_POST['email'].", \nMobile No =". $_POST['phone']. ", \nMessage =" . $_POST['message'];
	   	
	    $headers = "From:".$from;
	    if(mail($to,$subject,$message,$headers)){
	        $success = "<b>Form Submit Sucessfully <br> Thank you " . $_POST['full_name'] . ", <br> We will contact you shortly.</b>";
	    }else{
	        $success = "Error in Submiting...";
	    }
	 
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	}
	 }

?>





<!DOCTYPE HTML>
<html lang="en-US">


<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Yogeshwara Prefab | Contact Us</title>
	<meta name="keyword" content="yogeshwara prefab, prefab in mahabaleshwar, prefabrication in maharashtra, near prefab, prefab in pune, prefab in kokan, prefabricated home, cottages, modular house, gazebo, readymade homes, portable cabins, rest house, prefab homes">
	<meta name="description" content="yogeshwara prefab, prefab in mahabaleshwar, prefabrication in maharashtra, near prefab, prefab in pune, prefab in kokan, prefabricated home, cottages, modular house, gazebo, readymade homes, portable cabins, rest house, prefab homes">
	<meta name="author" content="https://surajwebx.com/" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon Icon -->
 
        <!-- Header Start -->
        <?php include 'header.php';?>
        <!-- Header End -->
		
</head>

<body>
	<div class="em40_header_area_main ">

 	<!-- Head Start -->
	 <?php include 'head.php';?>
    <!-- Head End -->

		<div class="tx_top2_relative">
			<div class="">
				<div class="tx_relative_m">
					<div class="">
						<div class="mainmenu_width_tx  ">
							<div class="smartdev-main-menu one_page hidden-xs hidden-sm witr_h_h10">
								<div class="smartdev_nav_area scroll_fixed postfix">
									<div class="container">
										<div class="row logo-left">
											<!-- LOGO -->
											<div class="col-md-3 col-sm-3 col-xs-4">
												<div class="logo">
													<a class="main_sticky_main_l" href="index.php" title="smartdev">
														<img src="assets/images/logo.png" alt="smartdev">
													</a>
													<a class="main_sticky_l" href="index.php" title="smartdev">
														<img src="assets/images/logo2.png" alt="smartdev">
													</a>
												</div>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-8">
												<nav class="smartdev_menu">
													<ul class="sub-menu">


														<li><a href="index.php">Home</a></li>
														<li><a href="about.php">About Us</a></li>
														<li><a href="product.php">Products</a></li>
														<li><a href="gallery.php">Gallery</a></li>
														<li class="active"><a href="contact.php">Contact Us</a></li>

													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- MOBILE MENU Logo AREA -->
	<div class="mobile_logo_area hidden-md hidden-lg">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="mobile_menu_logo text-center">
						<a href="index.php" title="smartdev">
							<img src="assets/images/logo.png" alt="smartdev">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- MOBILE MENU AREA -->
	<div class="home-2 mbm hidden-md hidden-lg  header_area main-menu-area">
		<div class="menu_area mobile-menu">
			<nav class="smartdev_menu">
				<ul class="sub-menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="product.php">Products</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li class="active"><a href="contact.php">Contact Us</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- END MOBILE MENU AREA  -->


	<!-- breadcumb-area -->
	<div class="breadcumb-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 txtc  text-center ccase">
					<div class="brpt">
						<h2>Contact Us</h2>
					</div>
					<div class="breadcumb-inner">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><i class="fas fa-angle-right"></i></li>
							<li>Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="smartdev_service_area contact_service">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="witr_section_title">
						<div class="witr_section_title_inner text-center">
							<h3 style="color: green;"><?php if (isset($success)){ echo "\n\n " . $success . " ";} ?></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<div class="smartdev_service_area contact_service">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="witr_section_title">
						<div class="witr_section_title_inner text-center">
							<h3>Get In Touch</h3>
							<p>Have you any problem, please contact us via message or Call </p>
						</div>
					</div>
				</div>
			</div>
			<div class="row service2_top">

				<!-- smartdev_service_01 -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service-item all_color_service same2 text-center">
						<div class="service_top_image"></div>
						<div class="text_box all_icon_color">
							<i class="fas fa-map-marker-alt"></i>
							<h3>Office Address </h3>
							<p class="blk">Sr. No. 59/1, Venkatesh lake life, Jambhulwadi road, Ambegaon Bk, Pune- 411046.</p>
						</div>
					</div>
				</div>

				<!-- smartdev_service_02 -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service-item all_color_service same2 text-center">
						<div class="service_top_image"></div>
						<div class="text_box all_icon_color">
							<i class="fa fa-phone"></i>
							<h3>Contact Number</h3>
							<a href="tel:7030627414">+91 7030627414</a><br>
							<a href="tel:9325909803">+91 9325909803</a>
						</div>
					</div>
				</div>
				
				<!-- smartdev_service_03 -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service-item all_color_service same2 text-center">
						<div class="service_top_image"></div>
						<div class="text_box all_icon_color">
							<i class="far fa-envelope"></i>
							<h3>Message Us </h3>
							<a href="mailto:yogeshwaraprefab@gmail.com">yogeshwaraprefab@gmail.com</a><br><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- securtv_contact4_area -->
	<div class="securtv_contact4_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="witr_section_title">
						<div class="witr_section_title_inner text-center">
							<!--<h3>Have Any Questions Or</h3>
							<h3>Face Any Problem Contact With Us</h3>-->
						</div>
					</div>
				</div>
			</div>
			<div class="row contact3_top">
				<div class="col-lg-12">
					<div class="apartment_area ">
						<div class="apartment_text">
						<p class="blk">
							If you Wold like to know more about us, please fill the form below.
						</p><br>
						
						
 
						</div>
						<div class="witr_apartment_form">
						<form class="contact-form-box"  method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
								<div class="form-row">
									<div class="form-group col-md-6">
										<span><input type="text" name="full_name" placeholder=" Name*"></span>
									</div>
									<div class="form-group col-md-6">
										<div class="witr_form_field2">
											<span><input type="text" placeholder="Mobile No *"
													pattern="[1-9]{1}[0-9]{9}" name="phone" title="Example: 9011385001"
													minlength="10" maxlength="10" required=""></span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<span><input type="email" name="email" placeholder="Email*"></span>
								</div>

								<div class="form-group">
									<span><textarea name="message" placeholder="Comments/Message"></textarea></span>
								</div>
								<p><button type="submit" name="submit" class="btn btn-primary">Submit Now</button></p>
								<div class="row">
									<div class="col-lg-12 text-center">
										<p class="form-messege"></p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	


	  <!--
	<div class="container">
		<div class="row pb80">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.137578578438!2d74.07185405082116!3d17.4051839880094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2295ddc8e8bf9%3A0xdacecb0dfb737040!2sSuraj%20Jadhav%20Web%20Designer%20%26%20Developer!5e0!3m2!1sen!2sin!4v1653801022587!5m2!1sen!2sin"
				width="1920" height="600" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>
-->

        <!-- Header Start -->
        <?php include 'footer.php';?>
        <!-- Header End -->

</body>

</html>