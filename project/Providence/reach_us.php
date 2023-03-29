<?php
	 if(isset($_REQUEST['submit'])){
	
		$username = "provide2_contact";
	    $password = "Ranjit@123";
	    $dbname = "provide2_contact";
	
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}else{
	    $sql = "INSERT INTO contact(full_name, email, phone, message) "
	        . "VALUES ('".$_POST['full_name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['message']."')";
	
	if ($conn->query($sql) === TRUE) {
	    $subject ="website Contact Data";
	    $to = "care@providence.in.net";
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
<html lang="zxx">
    <head>

        <title>Providence International | Reach Us	</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="https://surajwebx.com/"/>
        <link rel="canonical" href="reach_us.php" />

        <!--Header File-->
            <?php include 'headerfile.php';?>
        <!--// Header File-->
 
    </head>
    <body>

        <!--Header-->
            <?php include 'header.php';?>
        <!--// Header -->


        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/img/logo.png" alt="image" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/logo.png" alt="image" />
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link">
                                        Home
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="who_we_are.php" class="nav-link">
                                        Who We are
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Our Purpose & Approach
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="holistic_care.php" class="nav-link">
                                                Holistic Care
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="home_care_support.php" class="nav-link">
                                                Home Care Support
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="training_employment.php" class="nav-link">
                                                Training & Employment
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="in_slight.php" class="nav-link">
                                        In-Sights
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="faq.php" class="nav-link">
                                        FAQ
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="reach_us.php" class="nav-link active">
                                        Reach US
                                    </a>
                                </li>
                            </ul>

                             <!--
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <span class="hotline">
                                        Call:
                                        <a href="tel:8765370651">(+91) 8765370651</a>
                                    </span>
                                </div>
                            </div>
                            -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Reach Us</h2>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

        <section class="contact-info-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">           
                      <center><?php if (isset($success)){ echo "\n\n <h2>" . $success . "</h2> ";} ?></center> <br><br> <br><br>
                     
                    <h2>Contact Details</h2>
                    <div class="bar"></div>

                </div>

              

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="bx bx-envelope"></i>
                            </div>
                            <h3>Email Here</h3>
                            <p>
                                <a href="mailto:info@providence.in.net" class="clrw">info@providence.in.net</a>
                            </p>
                            <p>
                                <a href="mailto:care@providence.in.net" class="clrw">care@providence.in.net</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="bx bx-map"></i>
                            </div>
                            <h3>Location Here</h3>
                            <p>
                                India, Maharashtra, <br />
                                Satara, Pin Code:415106.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="bx bxs-phone-call"></i>
                            </div>
                            <h3>Call Here</h3>
                            <p><a href="tel:9765370651">(+91) 97653 70651</a></p>
                            <p><a href="tel:8623074804">(+91) 86230 74804</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <div class="title">
                                <span>Contact</span>
                                <h3>Get In Touch</h3>
                            </div>

                            <form class="contact-form-box"  method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                                <div class="form-group">
                                    <input type="text" placeholder="Name *" class="form-control" name="full_name" title="Example: Suraj Jadhav" required="">
                                </div>

                                <div class="form-group">
                                <input type="text" placeholder="Mobile No *" class="form-control" pattern="[1-9]{1}[0-9]{9}" name="phone" title="Example: 7057501858" minlength="10" maxlength="10" required="">
                                </div>

                                <div class="form-group">
                                    <input type="email" placeholder="E-mail *" class="form-control" name="email" title="Example: Surajwebx@gmail.com" required="">
                                </div>

                                <div class="form-group">
                                    <textarea name="message" class="form-control" cols="30" rows="5" required="" placeholder="Your Message"></textarea>
                                </div>
                                <div class="process-btn">
                                    <br />
                                    <button type="submit"  name="submit" class="default-btn">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21537.20102718146!2d74.15143278342333!3d17.39857471192435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc1809cadce7947%3A0x325398031ce328fe!2sMasur%2C%20Maharashtra%20415106!5e0!3m2!1sen!2sin!4v1630911780052!5m2!1sen!2sin"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Footer File-->
        <?php include 'footer.php';?>
        <!--// Footer File-->
        
    </body>
</html>
