<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Habit Place</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?php echo base_url();?>assets/frontend/img/favi.png" sizes="32x32">

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>

    <!-- fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/font-awesome.css" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.min.css" />

    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/uikit.min.css" />

    <!-- animate -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/animate.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/datepicker.css" />
    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/owl.carousel.css">
    <!-- rev slider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/rev-slider/settings.css" />
    <!-- lightslider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/lightslider.css">
    <!-- Theme -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/reset.css">

    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/style.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/ 	 	css/responsive.css" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Habit Place" />
    <meta property="og:description" content="Hotel Bookings & Management" />
    <meta property="og:url" id="og_url" content="http://www.Habitplace.com" />
    <meta property="og:site_name" content="Hotel Bookings & Management" />
    <meta property="og:image" content="http://159.65.152.153/habitplace/img/favicon.ico" />
    <meta name="theme-color" content="#3ac4fa">

</head>

<body style=" font-family: 'Nunito', sans-serif; color: #404040; -webkit-font-smoothing: auto;">

    <!-- start header -->
    <header class="header_area" style="background-color: #636363;box-shadow:0 3px 10px 0 rgba(0,0,0,0.2);z-index:999;">
        <div class="container" style="padding: 1% 0px;">
            <div class="col-md-6">
                <a id="brand" class="clearfix " href="index.html">
                        <img class="img-responsive" src="<?php echo base_url();?>assets/frontend/img/footer-logo-one.png" alt="Trips">
                    </a>
            </div>
            <div class="col-md-6 text-right float-right">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <a href="" data-toggle="modal" data-target="#login">Login </a>|
                    <a href="" data-toggle="modal" data-target="#signup">Sign Up </a>
                    <span>
                            <img class="  " src="<?php echo base_url();?>assets/frontend/img/menu.png" alt="Login">
                        </span>
                </div>
            </div>

        </div>
    </header>
    <!-- end header -->

    <!-- start payment -->
    <!-- start container -->

    <div class="container" style="width: 1250px;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;">
<?php
foreach($details as $hotel)
{
    ?>
        <div class="row" style="padding-top:2%; padding-bottom:2%; border-bottom:1px solid lightgray;">

            <div class="col-md-3">
                <span style="font-size: 15px !important;font-weight:500"><?php echo $hotel['hotel_name']; ?></span>
                <br>
                <span style="font-size: 13px;color:grey;overflow: hidden;
                     text-overflow: ellipsis;"><?php echo $hotel['hotel_address']; ?></span>
            </div>

            <div class="col-md-2">
                <span style="font-size: 15px !important;font-weight:500">CheckIn</span>
                <br>
                <span style="font-size: 13px;"><?php echo date('d-m-Y',strtotime($hotel['check_in'])); ?></span>
            </div>

            <div class="col-md-2">
                <span style="font-size: 15px !important;font-weight:500">CheckOut</span>
                <br>
                <span style="font-size: 13px;"><?php echo date('d-m-Y',strtotime($hotel['check_out'])); ?></span>
            </div>

            <div class="col-md-2">
                <span style="font-size: 15px !important;font-weight:500">Number of Nights</span>
                <br>
                <span style="font-size: 13px;"><?php echo $hotel['no_of_days']; ?></span>
            </div>

            <div class="col-md-3">
                <span style="font-size: 15px !important;font-weight:500">Number of Guests</span>
                <br>
                <span style="font-size: 13px;"><?php echo $hotel['no_of_persons']; ?></span>
            </div>
        </div>

        <div class="row" style="padding-top:2%; padding-bottom:2%;">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-10">
                        <p style="font-size: 14px;"><?php echo $hotel['category_name']; ?> Room </p>
                    </div>
                    <div class="col-md-2" style="text-align:right;">
                        <p>₹ <?php echo $hotel['total_price']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <p style="font-size: 14px;">Service Charge</p>
                    </div>
                    <div class="col-md-2" style="text-align:right;">
                        <p>₹ 0</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <p style="font-size: 14px;">GST</p>
                    </div>
                    <div class="col-md-2" style="text-align:right;">
                        <p>₹ 0</p>
                    </div>
                </div>

                <div class="row" style="border-bottom:1px solid lightgray; 
                            border-top:1px solid lightgray; padding-top:2%;">
                    <div class="col-md-10">
                        <p style="font-size: 14px;">Total Price</p>
                    </div>

                    <div class="col-md-2" style="text-align:right;">
                        <p>₹ <?php echo $hotel['total_price']; ?></p>
                    </div>
                </div>
                <div class="row" style="padding-top:5%">
                    <button type="button" style="background-color:#8dc53f;
                               padding: 12px 12px;
                               color:#ffffff;
                               border:1px solid #8dc53f;
                               float: right;
                               font-size:14px;
                               border-radius: 5px;
                               font-weight: 500;"><a href="payment2.html">Make Payment</a></button>
                </div>

            </div>
<?php
}
?>
            <div class="col-md-6">

            </div>
        </div>

    </div>
    <!-- End container -->

    <!-- start footer -->
    <footer class="footer_area">
        <div class="container">

            <div class="footer">

                <div class="footer_top padding-top-40 clearfix">

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="row">
                            <div class="footer_widget clearfix">
                                <h5 class="padding-left-15">Follow Us</h5>
                                <div class="col-lg-12 col-md-12 col-sm-6">
                                    <a target="_blank" href="http://www.facebook.com/">
                                        <i style="font-size:35px;padding-left: 10px;" class="fa fa-facebook-f"></i>
                                    </a>
                                    <a target="_blank" href="http://twitter.com/" class="fl padR10" title="Twitter" data-reactid="298">
                                        <i style="font-size:35px;padding-left: 10px;" class="fa fa-twitter"></i>
                                    </a>
                                    <a target="_blank" href="http://www.youtube.com/" class="fl padR10" title="youtube" data-reactid="300">
                                        <i style="font-size:35px;padding-left: 10px;" class="fa fa-youtube"></i>
                                    </a>

                                    <p style="color:lightgrey">Book Tickets faster.
                                        <br> Download our mobile Apps</p>

                                    <div class="col-md-6  col-xs-12">
                                        <div class="row">
                                            <a target="_blank" href="https://play.google.com/store">
                                <img class=" storeIcon" src="<?php echo base_url();?>assets/frontend/img/Google_play.png">
                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <a target="_blank" href="https://www.apple.com/itunes/">
                                <img class="  storeIcon" src="<?php echo base_url();?>assets/frontend/img/App-Store.png">
                            </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="row">
                            <div class="footer_widget clearfix">
                                <h5 class="padding-left-15">Quick Links</h5>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <ul>
                                        <li>
                                            <a href="#">About us</a>
                                        </li>
                                        <li>
                                            <a href="#">Careers</a>
                                        </li>
                                        <li>
                                            <a href="#">Terms of services</a>
                                        </li>
                                        <li>
                                            <a href="#">Privacy policy </a>
                                        </li>
                                        <li>
                                            <a href="#">Feedback</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 sol-sm-6">
                                    <ul>

                                        <li>
                                            <a href="#">Join our network</a>
                                        </li>
                                        <li>
                                            <a href="#">Corporate</a>
                                        </li>
                                        <li>
                                            <a href="#">Travel agents </a>
                                        </li>
                                        <li>
                                            <a href="#">Weddings</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget">
                            <h5>We Are Global</h5>
                            <div class="footer_map">
                                <a href="#">
                <img src="<?php echo base_url();?>assets/frontend/img/footer-map-two.png" alt="">
            </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="container">
                        <div class="footer_copyright margin-tb-30 content-center">
                            <p>© 2018
                                <a href="#">Habit Place</a>. All rights reserved</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- modal -->
    <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <!-- <p>Some text in the modal.</p> -->
                    <form>
                        Enter Email Id or Mobile Number
                        <input type="text" class="form-control" value="Enter here" />
                        <br>
                        <input type="checkbox"> Remember Me
                        <br>
                        <br>
                        <input type="submit" value="Login" class="btn btn-default">
                    </form>
                </div>

            </div>

        </div>
    </div>

    <div id="signup" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Create Account</h4>
                </div>
                <div class="modal-body">
                    <!-- <p>Some text in the modal.</p> -->
                    <form>
                        Enter Mobile Number
                        <input type="text" class="form-control" value="Enter Mobile number" />
                        <br> Enter Email Id(Optional)
                        <input type="text" class="form-control" value="Your Email Id(Optional)" />
                        <br>
                        <!-- <input type="checkbox" > Remember Me  -->
                        <br>
                        <input type="submit" value="Create Account" class="btn btn-default center-block">
                        <br>
                        <a href="" style="color: blue" class="center-block text-center">Terms and Conditions*</a>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                    <div class="text-center">
                        Already have a Account?
                        <a href="" data-toggle="modal" data-target="#login" style="color: blue">Login Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

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