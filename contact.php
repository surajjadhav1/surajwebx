<?php
	 if(isset($_REQUEST['submit'])){
	
	    //$username = "surajweb_surajdb";
	    //$password = "Surajdb@123";
	    //$dbname = "surajweb_contact";
		
		$username = "suraj_data";
	    $password = "Suraj@123";
	    $dbname = "suraj_contact";
	
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
	    $to = "info@surajwebx.com";
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


<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Contact - Web Designer | Wordpress Developer | Graphics Designer | in Umbraj, Karad, Satara, Pune.</title>
    <meta name="keywords" content="Contact to Freelancer Suraj Jadhav, Web Designer in karad, Satara, Pune, Web Developer in karad, Satara, Pune, freelancer web designer, freelancer web Developer,  Website Designer,  Website Developer,  Wordpress Developer, Suraj, Suraj Jadhav" />
    <meta name="description" content=" Website Designer, Web Developer, Wordpress Developer, Graphics Design Expert. freelancer web designer in karad Satara Pune, freelancer web Developer, If you think we might be a good fit for a website designing and development project, please contact us and we’ll get back to you as soon as possible.  Mobile: +91 7057501858 Mail: surajwebx@gmail.com" />
    <meta name="author" content="surajwebx.com" />
    <link rel="canonical" href="contact.php" />
	
	<!-- Header File -->
        <?php include "headerfile.php"; ?>
	<!-- //Header File -->

        <!-- Header Area Start Here -->
        <header class="header">

            <!-- Header -->
                <?php include "header.php"; ?>
            <!-- //Header-->


           <div id="rt-sticky-placeholder"></div>
            <div id="header-menu" class="header-menu menu-layout1">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-area">
                                <a href="index.php" class="temp-logo">
                                    <img src="img\logo-dark.png" alt="logo"  title="Suraj Jadhav" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 d-flex justify-content-end position-static">
                            <nav id="dropdown" class="template-main-menu">
                                <ul>
								
								    <li>
                                        <a href="index.php"> <i class="fa fa-home"></i> Home</a>
                                    </li>
									
                                    <li>
                                        <a href="about.php"> <i class="fa fa-user"></i>  About Me</a>
                                    </li>
									
								
                                    <li>
                                        <a href="#"> <i class="fa fa-paper-plane"></i>
                                             Services 
                                            </a>
                                        <ul class="dropdown-menu-col-1">
                                            <li>
                                                <a href="website-designing-karad.php"> Web Designing</a>
                                            </li>
                                            <li>
                                                <a href="website-development-karad.php"> Web Development</a>
                                            </li>
                                            <li>
                                                <a href="wordpress-development-karad.php"> Wordpress Development</a>
                                            </li>
                                            <li>
                                                <a href="ecommers-website-karad.php"> E-Commers Website</a>
                                            </li>
											<li>
                                                <a href="responsive-website-karad.php"> Responsive Website</a>
                                            </li>
											<li>
                                                <a href="graphics-design-karad.php"> Graphics Design</a>
                                            </li>
                                        </ul>
                                    </li>
									
									<li>
                                        <a href="portfolio.php"> <i class="fa fa-desktop"></i>  Portfolio</a>
                                    </li>
									
									<li class="active">
                                        <a href="contact.php"> <i class="flaticon-call-answer"></i>  Contact</a>
                                    </li>
                                   
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-3 d-flex justify-content-end">
                            <div class="header-action-layout1">
                                <ul>
                                    <li class="header-action-number-2">
                                        <div class="item-icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-number"><a href="tel:7057501858">+91 7057501858</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End Here -->
		
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common breadcumb-color">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
							<!--<h1>Contact Us</h1>-->
                            <ul>
                                <li>
                                    <a href="index.php"> <i class="fa fa-home"></i> Home</a>
                                </li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Blog Area Start Here -->
        

   
            <br><br><br> <center> <h2 style="color: green;"><?php if (isset($success)){ echo "\n\n " . $success . " ";} ?> </h2></center>
   
 
        
        <section class="section-padding-10-10">
            <div class="container">
                <div class="gradiant heading2 animations5 fadeInDown animation-visible" data-appear-animation="fadeInDown">
                    <h1>Contact Us</h1>
                </div><br>
                
			<div class="row">
					<div class="col-lg-1">
					</div>
					 <div class="col-lg-10 animations7 fadeInLeft animation-visible" data-appear-animation="fadeInLeft">
                        <div class="contact-box-layout1">
                            <div class="contact-info">
                                <div class="media media-none-lg media-none--sm">
                                    <div class="item-icon">
                                        <i class="flaticon-call-answer"></i>
                                    </div>
                                    <div class="media-body space-md">
                                        <h4>Phone:</h4>
                                        <ul>
                                            <li>+91 7057501858</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="media media-none-lg media-none--sm">
                                    <div class="item-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="media-body space-md">
                                        <h4>E-mail:</h4>
                                        <ul>
                                            <li>info@surajwebx.com</li>
                                            <li>surajwebx@gmail.com</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="media media-none-lg media-none--sm">
                                    <div class="item-icon">
                                        <i class="flaticon-maps-and-flags"></i>
                                    </div>
                                    <div class="media-body space-md">
                                        <h4>Location:</h4>
                                        <ul>
                                            <li>At Umbraj, Tal:karad</li>
                                            <li>Dist:Satara 415109.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-1">
					</div>
				</div>
                
                <!----
				<div class="row">
					<div class="col-sm-1 col-md-1 col-lg-1">
					</div>
					<div class="col-sm-10 col-md-10 col-lg-10">
					
					<div class="google-map-area">
                        <div class="google-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6196.525732866139!2d74.074045!3d17.404808!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdacecb0dfb737040!2sSuraj%20Jadhav%20Web%20Designer%20%26%20Developer!5e1!3m2!1sen!2sin!4v1606713432070!5m2!1sen!2sin" width="970" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
                    </div>

				 </div>
					<div class="col-sm-1 col-md-1 col-lg-1">
					</div>
                </div><br><br><br>
            --><br>
				
                <div class="row">
					<div class="col-lg-1">
					</div>
					<div class="col-lg-10 animations7 fadeInRight animation-visible" data-appear-animation="fadeInRight">
                        <div class="single-blog-box-layout1">
                            
                            <div class="blog-form">
                                <div class="heading-layout4">
                                    <h3>Get In Touch</h3>
                                </div>
                              
								<form class="contact-form-box"  method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
								
                                    <div class="row gutters-15">
                                        <div class="col-md-6 col-12 form-group">
                                            <input type="text" placeholder="Name *" class="form-control" name="full_name" title="Example: Suraj Jadhav" required="">
                                        </div>
                                        <div class="col-md-6 col-12 form-group">
											<input type="text" placeholder="Mobile No *" class="form-control" pattern="[1-9]{1}[0-9]{9}" name="phone" title="Example: 7057501858" minlength="10" maxlength="10" required="">
                                        </div>
                                        <div class="col-12 form-group">
                                             <input type="email" placeholder="E-mail *" class="form-control" name="email" title="Example: Surajwebx@gmail.com" required="">
                                        </div>

                                        <div class="col-12 form-group">
                                            <textarea placeholder="Message *" class="textarea form-control" name="message"  rows="5" cols="20" required=""></textarea>
                                        </div>
                                        <div class="col-12 form-group text-center">
                                            <button type="submit" name="submit" class="btn-fill-xl bg-accent text-primarytext border-none">Submit</button>
                                        </div>
                                    </div>
                                    
                                    <div class="form-response"></div>
                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-1">
					</div>
                </div>
				
				
            </div>
        </section>
        <!-- Blog Area End Here -->


		<!-- Footer -->
			<?php include "footer.php"; ?>
		<!-- //Footer -->

	</body>
</html>
