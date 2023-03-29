
<?php
	 if(isset($_REQUEST['submit'])){
		
		
		$username = "surajweb_gpdryfruit";
	    $password = "satara@123";
	    $dbname = "surajweb_gpdryfruits";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}else{
	    $sql = "INSERT INTO `contact`(full_name, email, phone, message) " . "  VALUES ('".$_POST['full_name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['message']."')";
	
	if ($conn->query($sql) === TRUE) {
	    $subject ="website Contact Data";
	    $to = "info@gpdryfruits.com";
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

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="" name="author">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        
	<!-- SITE TITLE -->
	 <title>GP Group | Contact</title>
 
		
		<!-- Header  --> 
			<?php include 'header.php';?>
		<!-- //Header  --> 
		

<!-- START HEADER -->
<header class="header_wrap dark_skin main_menu_uppercase">
	<div class="top-header bg_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                	<ul class="contact_detail border_list list_none text-center text-md-left">
                        <li><a href="tel:975528721"><i class="ti-mobile"></i> <span>+91 975528721</span></a></li>
                        <li><a href="tel:9922463987"><i class="ti-mobile"></i> <span>+91 9922463987</span></a></li>
                        <li><a href="mailto:gpdryfruits@gmail.com"><i class="ti-email"></i> <span>gpdryfruits@gmail.com</span></a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list_none social_icons border_social rounded_social text-center">
                        <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                        <li><a href="#" class="sc_youtube"><i class="ion-social-youtube"></i></a></li>
                        <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg"> 
            <a class="navbar-brand" href="index.php">
                <img class="logo_light" src="assets/images/gplogo.png" alt="logo" />
                <img class="logo_dark" src="assets/images/gplogo.png" alt="logo" />
                <img class="logo_default" src="assets/images/gplogo.png" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="index.php">  <i class="fa fa-home"></i>&nbsp Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="about.php"> <i class="fa fa-user"></i>&nbsp About Us</a>
                    </li>
					<li>
                        <a class="nav-link" href="products.php"> <i class="fa fa-shopping-basket"></i>&nbsp Products</a>
                    </li>
                    <li>
                        <a class="nav-link" href="gallery.php"><i class="fa fa-image"></i>&nbsp Gallery</a>
                    </li>
                    <li class="active">
                        <a class="nav-link" href="contact.php"><i class="fa fa-mobile"></i>&nbsp Contact</a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
</header>
<!-- END HEADER -->

<!-- START SECTION BANNER -->
<section class="bg_light_yellow breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="assets/images/breadcrumb_bg.png">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-12 text-center">
            	<div class="page-title">
            		<h1>Contact Us</h1>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<section>
	<div class="container">

    <br><br><br> <center><?php if (isset($success)){ echo "\n\n <h2>" . $success . "</h2> ";} ?></center>
  
        <div class="row">
        	<div class="col-lg-4 col-md-6">
            	<div class="icon_box icon_box_style3 bg-white box_shadow6">
                	<div class="box_icon">
                		<span class="ti-mobile fnt40"></span>
                    </div>
                    <div class="intro_desc">
                        <h6 class="cnt">Mobile No</h6>
                        <p>+91 9975528721</p>
                        <p>+91 9922463987</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="icon_box icon_box_style3 bg-white box_shadow6">
                	<div class="box_icon">
                        <span class="ti-email fnt40"></span>
                    </div>
                    <div class="intro_desc">
                        <h6 class="cnt">E-mail</h6>
                        <p>gpdryfruits@gmail.com</p>
                        <p>gpdryfruits@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="icon_box icon_box_style3 bg-white box_shadow6">
                	<div class="box_icon">
                        <span class="ti-location-pin fnt40"></span>
                    </div>
                    <div class="intro_desc">
                        <h6 class="cnt">Address</h6>
                        <p>At Post Bhagyanagar</p>
                        <p>Sub Dist:Khanapur Dist:Sangali 415311.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- START SECTION CONTACT -->
<section>
	<div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6 form-border ">
            	<div class="heading_s2 mb-3 animation text-center" data-animation="fadeInUp" data-animation-delay="0.1s">
                	<h3>Get In touch</h3><br>
                </div>
                <div class="field_form animation" data-animation="fadeInLeft" data-animation-delay="0.1s">

                <form class="contact-form-box"  method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" placeholder="Name *" class="form-control" name="full_name" title="Example: Suraj Jadhav" required="">
                         </div>
                        <div class="form-group col-lg-6">
                            <input type="text" placeholder="Mobile No *" class="form-control" pattern="[1-9]{1}[0-9]{9}" name="phone" title="Example: 7057501858" minlength="10" maxlength="10" required="">
                        </div>
                        <div class="form-group col-12">
                            <input type="email" placeholder="E-mail *" class="form-control" name="email" title="Example: Surajwebx@gmail.com" required="">
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea required="required" placeholder="Your Message *"  class="form-control" name="message" rows="5"></textarea>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" title="Submit Your Message!" class="btn btn-primary btn-radius btn-borderd"  name="submit " value="Submit">Submit Info</button>
							
                        </div>
                        
                    </div>
                </form>	

                </div>
            </div>
           
        </div>
    </div>
</section>
<!-- END SECTION CONTACT -->







<div class="p-0">
	<div class="container-fluid p-0">
    	<div class="row no-gutters">
            <div class="col-md-12">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3808.3599183495858!2d74.5435442!3d17.3464057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc161bfccea152f%3A0x4d704eb61ad852dc!2sG%20%26%20P%20dry%20fruits!5e0!3m2!1sen!2sin!4v1629778404147!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div>
            </div>
        </div>
    </div>
</div>






		<!-- Footer  --> 
			<?php include 'footer.php';?>
		<!-- //Footer  --> 

	</body>

</html>
