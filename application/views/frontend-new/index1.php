<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Habit Place</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?php echo base_url();?>assets/frontend/img/favicon.png" sizes="32x32">

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.css" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- uikit -->
    <link rel="stylesheet" href="css/uikit.min.css" />

    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/datepicker.css" />
    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- rev slider -->
    <link rel="stylesheet" href="css/rev-slider/settings.css" />
    <!-- lightslider -->
    <link rel="stylesheet" href="css/lightslider.css">
    <!-- Theme -->
    <link rel="stylesheet" href="css/reset.css">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="css/responsive.css" />

    <!-- Socialmedia icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/css/bedpay.css" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Habit Place" />
    <meta property="og:description" content="Hotel Bookings & Management" />
    <meta property="og:url" id="og_url" content="http://www.Habitplace.com" />
    <meta property="og:site_name" content="Hotel Bookings & Management" />
    <meta property="og:image" content="http://159.65.152.153/habitplace/img/favicon.ico" />
    <meta name="theme-color" content="#3ac4fa">

</head>

<body>

    <!-- start preloader -->
    <div id="loader-wrapper">
        <div class="logo"><a href="index.php"><img src="<?php echo base_url();?>assets/frontend/img/loading-logo-one.png" alt="Habit Place"></a></div>
        <div id="loader">
        </div>
    </div>
    <!-- end preloader -->

    <!-- start header -->
    <header class="header_area" style="background-color: #0a243f;box-shadow:0 3px 10px 0 rgba(0,0,0,0.2);z-index:999;">

        <div class="container" style="padding: 2% 0px;">
            <a id="brand" class="clearfix " href="index.php">
                                <img class="img-responsive center-block"  src="<?php echo base_url();?>assets/frontend/img/footer-logo-one.png" alt="Habit Place">
                            </a>
            <!-- start mainmenu & logo -->
        </div>

    </header>
    <!-- end header -->

    <div class="fullwidthbanner-container">
        <div class="" style="background-color: #4b5556;height:320px;min-height:300px;z-index: -999;">
            <!-- start main slider -->

            <!-- start hotel booking -->
            <div class="hotel_booking_area" style="padding-top:50px;">

                <div class="container hotel_booking">

                    <div class="row">

                        <div class="col-md-3 " style="border-right: 1px solid #ebebeb;">
                            <div class=" ">
                                <input type="text" class="form-control" id="email" placeholder="Location, Locality, Area " name="email" style="padding: 14px 0 14px;border: none;text-align: center;min-height: 60px;">
                            </div>
                        </div>

                        <div class="col-md-2 " style="border-right: 1px solid #ebebeb;">
                            <div class=" ">
                                <input type="text" class="form-control" id="email" placeholder="Hotel" style="padding: 14px 0 14px;border: none;text-align: center;min-height: 60px;">
                            </div>
                        </div>

                        <div class="col-md-2 " style="border-right: 1px solid #ebebeb;">
                            <div class=" ">
                                <input type="text" class="form-control" id="email" placeholder="Check in - Check Out" style="padding: 14px 0 14px;border: none;text-align: center;min-height: 60px;">
                            </div>
                        </div>

                        <div class="col-md-2 " style="border-right: 1px solid #ebebeb;text-align: center">
                            <div class=" ">
                                <select class="form-control" style="padding: 14px 0 14px;border: none;text-align: center;min-height: 60px;">
                                    <option>Rooms and Guests</option>
                                    <option>Rooms</option>
                                    <option>Adults</option>
                                    <option>Children</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3 " style="background-color: #3ac4fa;text-align: center;border-radius:none 10px">
                            <div class=" ">
                                <button type="submit" class="" style="border: none;    padding: 17px 0 14px;color: white;background-color: #3ac4fa;font-size: 22px;">Search</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div style="padding: 7%;">
                <h4 class="text-center" style="color:white;font-family: 'Nunito', sans-serif;">Save 100% On Hotel Bookings</h4>
                <p class="text-center">Use Code : FIRSTROOM </p>
            </div>
            <!-- end hotel booking -->
        </div>

    </div>
    <!-- end main slider -->

    <!-- start hotel booking -->
    <div class="hotel_booking_area" style="padding-top:50px;">

        <div class="container hotel_booking">
            <form action="booking.php" method="=" GET " >
                    <div class="row ">

                        <div class="col-md-3 " style="border-right: 1px solid #ebebeb; ">
                            <div class=" ">
                                <input type="text " class="form-control " id="email " placeholder="Location, Locality, Area " name="location " style="padding: 14px 0 14px;border: none;text-align: center;min-height: 60px; ">
                            </div>
                        </div>

               <!--  <div class="col-md-2 " style="border-right: 1px solid #ebebeb; ">
                            <div class=" ">
                                <input type="date " class="form-control " id="email " placeholder="Hotel " style="padding: 14px 0 14px;border: none;text-align: center;min-height: 60px; " name="location " >
                            </div>
                        </div> -->

                       <div class="col-md-3 " style="border-right: 1px solid #ebebeb; ">
                            <div class=" ">
                                <input type="text " class="form-control " id="email " placeholder="Check in " style="padding: 14px 0 14px;border: none;text-align: center;min-height: 60px; " name="checkin ">
                            </div>
                        </div> 

                       <div class="col-md-3 " style="border-right: 1px solid #ebebeb; ">
                            <div class=" ">
                                <input type="text " class="form-control " id="email " placeholder="Check Out " style="padding: 14px 0 14px;border: none;text-align: center;min-height: 60px; " name="checkout ">
                            </div>
                        </div> 

                        <div class="col-md-3 " style="background-color: #3ac4fa;text-align: center;border-radius:none 10px ">
                            <div class=" ">
                                <button type="submit " class=" " style="border: none; padding: 17px 0 14px;color: white;background-color: #3ac4fa;font-size: 22px; ">Search</button>
                            </div>
                        </div>

                    </div>
                    </form>

                </div>
            </div>

            <div style="padding: 4%; ">
                    <h4 class="text-center " style="color:white;font-family: 'Nunito', sans-serif; "> Save 100% On Hotel Bookings</h4>
                    <p class="text-center ">Use Code : FIRSTROOM </p>
            </div>
            <!-- end hotel booking -->
        </div>

    </div>
    <!-- end main slider -->

        <section style="padding-top: 2% ">

                <div class="container ">
                        <div class="welcome ">
                            <div class="section_title nice_title content-center ">
                                <h3>  Trending  Destinations</h3>
                            </div>
                            <div class="section_description ">
                                <p> Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor. </p>
                            </div>
<!-- This seciton is hidden, based on clients inputs -->

                            <div class="row " style="display:none; ">
    <div class="col-md-8 ">
        <div class="col-md-6 "><a href="accomodation.html "><img class="img-responsive "src="<?php echo base_url();?>assets/frontend/img/slide/1.png"></a>
        </div>
        <div class="col-md-6"><a href="accomodation.html"><img class="img-responsive"src="<?php echo base_url();?>assets/frontend/slide/img/2.png"></a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="margin-bottom:10px;">
            <div class="col-md-6"><a href="accomodation.html"><img class="img-responsive"src="<?php echo base_url();?>assets/frontend/slide/img/3.jpg"></a></div>
            <div class="col-md-6"><a href="accomodation.html"><img class="img-responsive"src="<?php echo base_url();?>assets/frontend/slide/img/4.jpg"></a></div>
        </div>
        <div class="row">
            <div class="col-md-6"><a href="accomodation.html"><img class="img-responsive"src="<?php echo base_url();?>assets/frontend/slide/img/5.jpg"></a></div>
            <div class="col-md-6"><a href="accomodation.html"><img class="img-responsive"src="<?php echo base_url();?>assets/frontend/slide/img/6.jpg"></a></div>
        </div>

    </div>

    </div>

    </div>
    </div>

    </section>

    <!-- start welcome section -->

    <!-- start About Us section -->
    <section class="about_us_area margin-bottom-128" style="margin-bottom: 12px;margin-top:50px;">
        <div class="container">
            <div class="about_us clearfix">

                <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
                    <div class="showcase">
                        <div class="section_title margin-bottom-50">
                            <h5 class="text-center">Destinations</h5>
                        </div>
                        <div class="section_description">
                            <div class="clearfix demo" style="">
                                <ul id="vertical" class="gallery list-unstyled">
                                    <li data-thumb="<?php echo base_url();?>assets/frontend/img/lightslider-img/cS-22.jpg">
                                        <img alt="slider" src="<?php echo base_url();?>assets/frontend/img/lightslider-img/cS-22.jpg" />
                                    </li>
                                    <li data-thumb="<?php echo base_url();?>assets/frontend/img/lightslider-img/cS-21.jpg">
                                        <img alt="slider" src="<?php echo base_url();?>assets/frontend/img/lightslider-img/cS-21.jpg" />
                                    </li>

                                    <li data-thumb="<?php echo base_url();?>assets/frontend/img/lightslider-img/cS-23.jpg">
                                        <img alt="slider" src="<?php echo base_url();?>assets/frontend/img/lightslider-img/cS-23.jpg" />
                                    </li>
                                    <li data-thumb="<?php echo base_url();?>assets/frontend/img/lightslider-img/cS-24.jpg">
                                        <img alt="slider" src="<?php echo base_url();?>assets/frontend/img/lightslider-img/cS-24.jpg" />
                                    </li>
                                    <li data-thumb="<?php echo base_url();?>assets/frontend/img/lightslider-img/cS-25.jpg">
                                        <img alt="slider" src="<?php echo base_url();?>assets/frontend/img/lightslider-img/cS-25.jpg" />
                                    </li>
                                    <li data-thumb="<?php echo base_url();?>assets/frontend/img/lightslider-img/cS-26.jpg">
                                        <img alt="slider" src="<?php echo base_url();?>assets/frontend/img/lightslider-img/cS-26.jpg" />
                                    </li>
                                    <li data-thumb="<?php echo base_url();?>assets/frontend/img/lightslider-img/cS-27.jpg">
                                        <img alt="slider" src="<?php echo base_url();?>assets/frontend/img/lightslider-img/cS-27.jpg" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="customer_says">
                        <div class="section_title margin-bottom-50">
                            <h5>Customer Says</h5>
                        </div>
                        <div class="section_description">
                            <div id="customer_says_slider" class="carousel slide" data-ride="carousel" data-pause="none">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="single_says">
                                            <div class="customer_comment">
                                                <p>
                                                    Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan urna vitae molestie interdum.
                                                </p>
                                                <p>
                                                    Nam sed placerat libero, non eleifend dolor.
                                                </p>
                                            </div>
                                            <div class="customer_detail clearfix">
                                                <div class="customer_pic alignleft-20">
                                                    <a href="#"><img src="<?php echo base_url();?>assets/frontend/img/customer-says-one.png" alt=""></a>
                                                </div>
                                                <div class="customer_identity floatleft">
                                                    <h6>John Doe</h6>
                                                    <p>www.john.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="single_says">
                                            <div class="customer_comment">
                                                <p>
                                                    Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan urna vitae molestie interdum.
                                                </p>
                                                <p>
                                                    Nam sed placerat libero, non eleifend dolor.
                                                </p>
                                            </div>
                                            <div class="customer_detail clearfix">
                                                <div class="customer_pic alignleft-20">
                                                    <a href="#"><img src="<?php echo base_url();?>assets/frontend/img/customer-says-one.png" alt=""></a>
                                                </div>
                                                <div class="customer_identity floatleft">
                                                    <h6>John Doe</h6>
                                                    <p>www.john.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="slider_says left" href="#customer_says_slider" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="slider_says right" href="#customer_says_slider" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end About Us section -->

    <!-- start footer -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer">
                <div class="footer_top padding-top-40 clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4">

                        <div>
                            <h7 style="color:white;">Follow Us</h7>
                            <br>
                            <a target="_blank" href="http://www.facebook.com/">
                                <i style="font-size:35px" class="fab fa-facebook"></i>

                            </a>
                            <a target="_blank" href="http://twitter.com/" class="fl padR10" title="Twitter" data-reactid="298">
                                <i style="font-size:35px" class="fab fa-twitter-square"></i>

                            </a>
                            <a target="_blank" href="http://www.youtube.com/" class="fl padR10" title="youtube" data-reactid="300">
                                <i style="font-size:35px" class="fab fa-youtube"></i>
                            </a>
                            <!--        //G+ is not mentioned in the reference site
                                    <a target="_blank" href="https://plus.google.com/" class="fl" title="Google Plus"
                                    data-reactid="302">
                                    <i style="font-size:35px" class="fab fa-google-plus-square"></i>
                                </a>
-->

                        </div>
                        <!--
                           This section is requested by clients
                       -->
                        <br>
                        <div>
                            <h7 style="color:white;"><i></i>Book Tickets faster.
                                <br> Download our mobile Apps</i>
                            </h7>
                            <div>
                                <a target="_blank" href="https://play.google.com/store"><img class="storeIcon" src="<?php echo base_url();?>assets/frontend/img/Google_play.png"></a>
                                <a target="_blank" href="https://www.apple.com/itunes/"><img  class="storeIcon" src="<?php echo base_url();?>assets/frontend/img/App-Store.png"></a>
                            </div>
                        </div>

                        <!--   
                                //Client asked us to remove this Footer_logo section

                                <div class="footer_logo">
                                <a href="#"><img src="img/footer-logo-one.png" alt=""></a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, conser adipiscing elit. In consectetur tincidunt dolor.</p>
                                <ul>
                                    <li>
                                        <P><i class="fa fa-map-marker"></i>xxxxxxxxxxx, <br> xxxxxxxxxxxxxx</P>
                                    </li>
                                </ul>
                            -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="row">
                        <div class="footer_widget clearfix">
                            <h5 class="padding-left-15">Quick Links</h5>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul>
                                    <li><a href="#">Rooms Details</a></li>
                                    <li><a href="#">Food & Drinks</a></li>
                                    <li><a href="#">Beach Venues</a></li>
                                    <li><a href="#">Amenities</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 sol-sm-6">
                                <ul>
                                    <li><a href="#">Locations</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">T&C</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer_widget">
                        <h5>We Are Global</h5>
                        <div class="footer_map">
                            <a href="#"><img src="<?php echo base_url();?>assets/frontend/img/footer-map-two.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="footer_copyright margin-tb-50 content-center">
                        <p>© 2018 <a href="#">Habit Place</a>. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- jquery library -->
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- rev slider -->
    <script src="js/rev-slider/rs-plugin/jquery.themepunch.plugins.min.js"></script>
    <script src="js/rev-slider/rs-plugin/jquery.themepunch.revolution.js"></script>
    <script src="js/rev-slider/rs.home.js"></script>
    <!-- uikit -->
    <script src="js/uikit.min.js"></script>
    <!-- easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/datepicker.js"></script>
    <!-- scroll up -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- owlcarousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- lightslider -->
    <script src="js/lightslider.js"></script>

    <!-- wow Animation -->
    <script src="js/wow.min.js"></script>
    <!--Activating WOW Animation only for modern browser-->
    <!--[if !IE]><!-->
    <script type="text/javascript">
        new WOW().init();
    </script>
    <!--<![endif]-->

    <!-- my js -->
    <script src="js/main.js"></script>

</body>

</html>