<!DOCTYPE html>
<html lang="zxx">
    <head>

        <title>Providence International | Home</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="https://surajwebx.com/"/>
        <link rel="canonical" href="index.php" />

        <!--Header File-->
            <?php include 'headerfile.php';?>
        <!--// Header File-->

        <!--Slider Script-->
        <script src="assets/js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
              [{b:0,d:2000,y:30,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
              [{b:500,d:1500,o:1}],
              [{b:0,d:1000,y:380,e:{y:6}}],
              [{b:300,d:1000,x:80,e:{x:6}}],
              [{b:300,d:1000,x:330,e:{x:6}}],
              [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
              [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
              [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
              [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $LazyLoading: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1600;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>

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
                                <img src="assets/img/logo.png" class="img-width" alt="image" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/logo.png"  class="max-wid" alt="image" />
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link active">
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
                                    <a href="reach_us.php" class="nav-link">
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

      
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">

<!-- Loading Screen -->
<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="assets\img\spin.svg" />
</div>

<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">

    <div>
        <img data-u="image" data-src="assets\img\slider\001.webp" />
    </div>
    <div>
        <img data-u="image" data-src="assets\img\slider\003.webp" />
    </div>
    <div>
        <img data-u="image" data-src="assets\img\slider\004.webp" />
    </div>
    <div>
        <img data-u="image"  data-src="assets\img\slider\005.webp" />
    </div>
    <div>
        <img data-u="image" data-src="assets\img\slider\006.webp" />
    </div>
</div>


<!-- Bullet Navigator -->
<div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
    <div data-u="prototype" class="i" style="width:12px;height:12px;">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
        </svg>
    </div>
</div>

<!-- Arrow Navigator -->
<div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
    <svg viewbox="0 0 16000 16000" style="position:absolute;background-color: #03297d;border-radius: 30px;top:0;left:0;width:100%;height:100%;">
        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
    </svg>
</div>

<div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
    <svg viewbox="0 0 16000 16000" style="position:absolute;background-color: #03297d;border-radius: 30px;top:0;left:0;width:100%;height:100%;">
        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
    </svg>
</div>
</div>




        <section class="pt-100">
            <div class="container-fluid">
                <div class="row">
                <marquee class="bxt">  
                    <h4>
                    A Care Giving company focusing on Geriatric Care and Home Support at your door steps
                </h4>
                </marquee>  
                </div>
            </div>
        </section>

        <section class="overview-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="overview-image">
                            <img src="assets\img\home\prohd.webp" class="rounded mx-auto d-block" alt="image" />
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="overview-content">
                            <h3>Who we are </h3>
                            <div class="bar"></div>

                            <p class="pbn16">
                                Providence International is a Home Health Care initiative based on extensive research & experience of working with elderly and their families.
                            </p>
                            <p class="pbn16">
                                Incorporated in Toronto, Canada supporting operations across the globe...starting with Western India.
                            </p>
                            <p class="pbn16">
                                Our associates have developed world class expertise across the continuum of senior living, geriatric healthcare, research, innovation and education.  
                                Its vision is to create a world where every older adult enjoys a life of purpose, inspiration and fulfilment.

                            </p>
                            <p class="pbn16">
                                Our approach is to develop long-term, collaborative relationships with local partners who share our vision and passion for transforming services for seniors.
                            </p>
                            <p class="pbn16">
                                Providence is helping global healthcare providers improve the quality of geriatrics care by providing innovative services, training and technologies that:
                            </p>

                            <ul class="">
                                    <li>Improve the delivery of senior residential and healthcare;</li>
                                    <li>Improve and manage age-related cognitive and physical decline;</li>
                                    <li>Improve safety and wellness outcomes for clients in late life;</li>
                                    <li>Enhance quality of life for our senior population;</li>
                                    <li>Foster greater autonomy for seniors</li>
                                </ul>


                            <div class="overview-btn">
                               <a href="who_we_are.php" class="default-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-area pt-100 pb-100">
            <div class="container">
                <div class="section-title">
                <img src="assets\img\home\withu.png" class="rounded mx-auto d-block" alt="image">
                    <h2>Our Purpose &amp; Approach</h2>
                    <div class="bar"></div>
                    <p>
                        Our compassionate care enables independent living possible
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <div class="services-image">
                                <a href="holistic_care.php"><img src="assets/img/services/service1.webp" alt="image" /></a>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="holistic_care.php">Holistic Care</a>
                                </h3>
                                <a href="holistic_care.php" class="newbtn">Read More +</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <div class="services-image">
                                <a href="home_care_support.php"><img src="assets/img/services/service2.webp" alt="image" /></a>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="home_care_support.php">Home Care Support</a>
                                </h3>
                                <a href="home_care_support.php" class="newbtn">Read More +</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <div class="services-image">
                                <a href="training_employment.php"><img src="assets/img/services/service3.webp" alt="image" /></a>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="training_employment.php">Training &amp; Employment</a>
                                </h3>
                                <a href="training_employment.php" class="newbtn">Read More +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="blog-details-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                            <img src="assets\img\home\core.webp" class="rounded mx-auto d-block" alt="image" />
                    </div>
                </div>
            </div>
        </section>

        <div class="newsletter-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="newsletter-content text-center">
                            <h2 class="clr-white">Frequently Asked Questions?</h2><hr>
                            <b class="clr-white">Some question and answe view here...</b>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <a href="faq.php" class="default-btn" style="border: solid 2px #ffffff;">View FAQ</a>
                    </div>
                </div>
            </div>
        </div>


       
        <section class="client-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="client-inner-box">
                            <div class="title">
                                <h3>What Clients Say</h3>
                            </div>
                            <div class="client-slider owl-carousel owl-theme">
                                <div class="client-item">
                                    <p>
                                        My caregiver is understanding, positive and helps motivate me to do what I need to do. He is really good with my husband who won’t be comfortable with strangers. Our Care giver’s compassion made us a
                                        good match for us
                                    </p>
                                    <div class="client-info">
                                        <img src="assets/img/client/client-info-1.webp" alt="image" />
                                        <h3>Vasanthi Kamath</h3>
                                        <span>Pune</span>
                                    </div>
                                </div>
                                <div class="client-item">
                                    <p>
                                        The Providence is very conscientious and reliable. Their Care givers are experienced and understand needs of the patient. What surprised me is their founders caring support by themselves at the Beck
                                        and Call.
                                    </p>
                                    <div class="client-info">
                                        <img src="assets/img/client/client-info-4.webp" alt="image" />
                                        <h3>Prakash K</h3>
                                        <span>Toronto</span>
                                    </div>
                                </div>
                                <div class="client-item">
                                    <p>
                                        The caregivers of Providence are experienced, fast learners and highly reliable. We are fortunate to have such good hands.
                                    </p>
                                    <div class="client-info">
                                        <img src="assets/img/client/client-info-3.webp" alt="image" />
                                        <h3>Chaya Prabhune</h3>
                                        <span>Mumbai</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="client-image">
                            <img src="assets/img/client/test.png" alt="image" />
                            <div class="client-shape">
                                <img src="assets/img/client/client-shape-1.png" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 

        <!---
        <section class="fun-facts-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="1024">00</span>
                            </h3>
                            <p>Health Websites</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="867">00</span>
                            </h3>
                            <p>Top Hospitality</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="2067">00</span>
                            </h3>
                            <p>Happy Customers</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="3265">00</span>
                            </h3>
                            <p>Innovative Approach</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    -->

    
        <!--Footer File-->
        <?php include 'footer.php';?>
        <!--// Footer File-->

        <script type="text/javascript">jssor_1_slider_init();</script>
        
    </body>
</html>