<?php
	if(isset($_REQUEST['submit']))
	{
	
		$username = "yogeshwa_wood";
		$password = "National@123";
		$dbname= "yogeshwa_national";

     
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				die("Connection failed: " . $conn->connect_error);
			}
			else
			{
				$sql = "INSERT INTO contact(full_name, email, phone, message) "
					. "VALUES ('".$_POST['full_name']."', 
							   '".$_POST['email']."', 
							   '".$_POST['phone']."', 
							   '".$_POST['message']."')";
			
				if ($conn->query($sql) === TRUE) 
				{
					$subject ="website Contact Data";
					$to = "info@surajwebx.com";
					$from=$_POST['email'];
					
					  $message = "Hello, I am ". $_POST['full_name'].", 
								 \nEmail id = ".$_POST['email'].", 
								 \nMobile No =". $_POST['phone']. ", 
								 \nMessage =" . $_POST['message'];
					
					$headers = "From:".$from;
					if(mail($to,$subject,$message,$headers))
						{
							$success = "<b>Form Submit Sucessfully <br> Thank you " . $_POST['full_name'] . ", <br> We will contact you shortly.</b>";
						}
						else
						{
							$success = "Error in Submiting...";
						}
				} 
				else 
				{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				$conn->close();
			}
	}
?>




<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="National Furniture & Wood Supplier, Wooden Packaging Supply in Umbraj, Wooden Packaging Supply in Satara, Wooden Crates, Wooden Door, 
Wooden Pallets Rectangular Wooden Storage Crate, Plain Rectangular Wooden Storage Crate, Square Wooden Open Crate, Rectangular Soft Wooden Storage Crates,  Rectangular Wooden Pallets,  Rectangular Hardwood Wooden Pallet, Pine Wood Wooden Pallet,  Brown Babool Wooden Door, Plywood Boxes, Jungle Wood Swan Timber Packaging Wood, Fire Wood" />
		<meta name="description" content=" National Furniture & Wood Supplier, Wooden Packaging Supply in Umbraj, Wooden Packaging Supply in Satara, Wooden Crates, Wooden Door, 
Wooden Pallets Rectangular Wooden Storage Crate, Plain Rectangular Wooden Storage Crate, Square Wooden Open Crate, Rectangular Soft Wooden Storage Crates,  Rectangular Wooden Pallets,  Rectangular Hardwood Wooden Pallet, Pine Wood Wooden Pallet,  Brown Babool Wooden Door, Plywood Boxes, Jungle Wood Swan Timber Packaging Wood, Fire Wood" />
		<meta name="author" content="https://surajwebx.com/" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<title>Contact Us | National Furniture & Wood Supplier</title>

		<!-- Header -->
			<?php include "header.php"; ?>
		<!-- //Header -->
		
	</head>

<body>

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
          <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-classic">
            <!-- ttm-topbar-wrapper -->
            <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">
                        <ul class="top-contact ttm-highlight-left text-left">
                              <li><i class="fa fa-phone"></i><span class="tel-no">  <a href="tel:9028881786"> +91 9028881786</a> / <a href="tel:9850751077"> +91 9850751077</a>  </span></li>
                        </ul>
                        <div class="topbar-right text-right">
                            <ul class="top-contact">
                                <li><i class="fa fa-envelope-o"></i><strong>Email : </strong><a href="mailto:nationalfurnitureandwood@gmail.com"> nationalfurnitureandwood@gmail.com</a></li>
                            </ul>
                            <div class="ttm-social-links-wrapper list-inline">
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/Nationalwoodenpackaging/" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/jameer8636/" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="https://wa.me/919028881786" target="blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ttm-topbar-wrapper end -->
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="index.php" title="Boldman" rel="home">
                                        <img id="logo-img" class="img-center" src="images/logo-img.png" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                        <div class="header-btn">
                                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-round ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-black" href="#">Request Quote</a>
                                        </div>
                             
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="products.php">Products</a></li>
                                            <li class="active"><a href="contact-us.php">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->
        </header><!--header end-->

	<div class="ttm-page-title-row">
            <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading">
                                <h1 class="title">Contact Us</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php"><i class="ti ti-home"></i> Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                <span><span>Contact Us</span></span>
                            </div>  
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div>
       

    <!--site-main start-->
    <div class="site-main">
        
    <br><br> <center> <h2 style="color: green;"><?php if (isset($success)){ echo "\n\n " . $success . " ";} ?> </h2></center>


		<section class="ttm-row pb-160 res-991-pb-100 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 pr-60 res-767-pr-15">
                        <!-- section title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h5>GET IN TOUCH</h5>
                                <h2 class="title">Contact Form</h2>
                            </div>
                            <div class="title-desc">Fill the below form and submite after we are contact you.</div>
                        </div><!-- section title end -->
						
						
                        
						<form class="ttm-contactform wrap-form clearfix"  method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-user"></i>
										<input type="text" placeholder="Full  Name *" name="full_name"  title="Example: Suraj Jadhav"  required="required"></span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-mobile"></i>
										<input type="text" placeholder="Mobile No *" pattern="[1-9]{1}[0-9]{9}" name="phone"  title="Example: 7057501858" minlength="10" maxlength="10"  required="required"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-email"></i>
										<input type="email" placeholder="Email Address *"  title="Example: Surajwebx@gmail.com"  required="required"></span>
                                    </label>
                                </div>
                                
                            </div>
                            <label>
                                <span class="text-input"><i class="ttm-textcolor-skincolor ti-comment"></i>
								<textarea cols="40" placeholder="Message *"  name="message" required="required"></textarea></span>
                            </label>
							
							
                            <input type="submit" name="submit" class="ttm-btn ttm-btn-size-sm ttm-btn-shape-round ttm-btn-style-fill ttm-icon-btn-right ttm-btn-bgcolor-skincolor" value="Send Message">
							
                        </form>
                    </div>
					
					
                    <div class="col-md-5">
                        <div class="ttm-rounded-shadow-box pt-40 pr-50 pb-55 pl-50 box-shadow2 res-767-mt-40 clearfix">
                            <h4>Contact Info</h4>
                            <ul class="ttm_contact_widget_wrapper">
                                <li><i class="ttm-textcolor-skincolor ti ti-location-pin"></i>NH 4, Near Sharda Clinic, Umbraj. Tal-Karad, Dist-Satara 415109.</li>
                                <li><i class="ttm-textcolor-skincolor ti ti-mobile"></i> (+91) 9028881786 <br> (+91) 9850751077 </li>
                                <li><i class="ttm-textcolor-skincolor ti ti-comment"></i><a href="mailto:nationalfurnitureandwood@gmail.com">nationalfurnitureandwood@gmail.com</a></li>
                            </ul>
                            <div class="social-icons circle social-hover">
                                <ul class="list-inline">
                                    <li class="social-facebook"><a class="tooltip-top ttm-textcolor-skincolor" target="_blank" href="https://www.facebook.com/Nationalwoodenpackaging/" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a class="tooltip-top ttm-textcolor-skincolor" target="_blank" href="https://www.instagram.com/jameer8636/" data-tooltip="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li class="social-gplus"><a class=" tooltip-top ttm-textcolor-skincolor" target="_blank" href="https://wa.me/919028881786" data-tooltip="Whats App"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
					
					
                </div><!-- row end -->
            </div>
        </section>


    </div><!--site-main end-->


		<!-- Header -->
			<?php include "footer.php"; ?>
		<!-- //Header -->
	
	</body>

</html>