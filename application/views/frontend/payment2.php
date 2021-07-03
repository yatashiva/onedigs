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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/saved.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/responsive.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/css/bedpay.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

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

    <div class="container" style="
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;">

        <div class="row" style="padding-top:4%; padding-bottom:1%; border-bottom:1px solid lightgray; border-bottom: 2px dashed #ccc;">

            <div class="col-md-9">
                <span style="font-size: 18px !important;font-weight:400;  
                     color: #8dc53f;">AMOUNT TO COMPLETE THIS TRANSACTION</span>

            </div>

            <div class="col-md-3">
                <span style="font-size: 18px !important;font-weight:300;  
                        color: #8dc53f;text-align: right">Payable Amount: ₹ 4,544</span>

            </div>

            <div class="col-md-9">
                <span style="    font-size: 43px;
                        font-weight: normal;
                        display: block;
                        line-height: 64px;
                        color: #000;">₹ 4,535</span>

            </div>

        </div>

        <div style="padding-top: 3%;padding-bottom: 3%;">
            <div class="container">
                <div class="row">
                    <div class="  col-md-10 col-md-offset-1 col-sm-12 col-xs-12 bhoechie-tab-container">

                        <div class=" col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                            <div class="list-group" style="">
                                <a href="#" class="list-group-item active text-center">
                                    <span style="color:white;">Saved Cards</span>
                                </a>
                                <a href="#" class="list-group-item  text-center">
                                    <span style="color:white;">Debit Cards</span>
                                </a>
                                <a href="#" class="list-group-item  text-center">
                                    <span style="color:white;">Credit Cards</span>
                                </a>
                                <a href="#" class="list-group-item  text-center">
                                    <span style="color:white;">Internet Banking</span>
                                </a>

                            </div>
                        </div>

                        <div class=" col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                            <div class="bhoechie-tab-content active con ">
                                <ul>
                                    <div class="col-xs-12 col-md-8 col-md-offset-2">

                                        <!-- Mastercard - selectable -->
                                        <div class="credit-card mastercard selectable">
                                            <div class="credit-card-last4">
                                                8210
                                            </div>
                                            <div class="credit-card-expiry">
                                                10/22
                                            </div>
                                        </div>

                                        <!-- Amex - selectable -->
                                        <div class="credit-card amex selectable">
                                            <div class="credit-card-last4">
                                                8431
                                            </div>
                                            <div class="credit-card-expiry">
                                                01/24
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <a href="" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
                                        </div>

                                        <div class="col-lg-6">
                                            <a href="" class="btn btn-default btn-lg btn-block" role="button">Cancel</a>
                                        </div>

                                </ul>
                                </div>

                                <div class="bhoechie-tab-content  con ">

                                    <ul>
                                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                                            <div class="panel panel-default">

                                                <div class="panel-body">
                                                    <form role="form">
                                                        <div class="form-group">
                                                            <label for="cardNumber">
                                                                CARD NUMBER</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number" required autofocus />
                                                                <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-7 col-md-7">
                                                                <label for="expityMonth">EXPIRY DATE</label>
                                                                <div class="form-group">

                                                                    <div class="col-xs-6 col-md-6 pl-ziro">

                                                                        <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                                                    </div>
                                                                    <div class="col-xs-6 col-md-6 pl-ziro">
                                                                        <input type="text" class="form-control" id="expityYear" placeholder="YY" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-5 col-md-5 pull-right">
                                                                <div class="form-group">
                                                                    <label for="cvCode"> CV CODE</label>
                                                                    <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <a href="" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
                                            </div>

                                            <div class="col-lg-6">
                                                <a href="" class="btn btn-default btn-lg btn-block" role="button">Cancel</a>
                                            </div>

                                    </ul>
                                    </div>

                                    <div class="bhoechie-tab-content  con ">
                                        <ul>
                                            <div class="col-xs-12 col-md-8 col-md-offset-2">
                                                <div class="panel-heading display-table">
                                                    <div class="row display-tr">
                                                        <h3 class="text-center">Select Your Bank</h3>
                                                        <div class="display-td">
                                                            <img class="img-responsive center-block" src="http://i76.imgup.net/accepted_c22e0.png">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 " style="padding-top: 4%;">
                                                    <a href="" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
                                                </div>

                                                <div class="col-lg-6" style="padding-top: 4%;">
                                                    <a href="" class="btn btn-default btn-lg btn-block" role="button">Cancel</a>
                                                </div>

                                        </ul>
                                        </div>

                                        <div class="bhoechie-tab-content  con ">
                                            <ul>
                                                <div class="col-xs-12 col-md-8 col-md-offset-2">
                                                    <h3 class="text-center">Select Your Bank</h3>
                                                    <select class="form-control">
                                                        <option value="-1">Select</option>
                                                        <option value="1">Andhra Bank</option>
                                                        <option value="2">SBI</option>
                                                        <option value="3">SBH</option>
                                                        <option value="4">HDFC</option>
                                                        <option value="5">KOTAK</option>
                                                        <option value="6">Canara</option>
                                                        <option value="7">ICICI</option>
                                                    </select>

                                                    <div class="col-lg-6 " style="padding-top: 4%;">
                                                        <a href="" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
                                                    </div>

                                                    <div class="col-lg-6" style="padding-top: 4%;">
                                                        <a href="" class="btn btn-default btn-lg btn-block" role="button">Cancel</a>
                                                    </div>

                                            </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
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
                                                        <i style="font-size:35px;padding-left: 10px;" class="fab fa-facebook-f"></i>
                                                    </a>
                                                    <a target="_blank" href="http://twitter.com/" class="fl padR10" title="Twitter" data-reactid="298">
                                                        <i style="font-size:35px;padding-left: 10px;" class="fab fa-twitter"></i>
                                                    </a>
                                                    <a target="_blank" href="http://www.youtube.com/" class="fl padR10" title="youtube" data-reactid="300">
                                                        <i style="font-size:35px;padding-left: 10px;" class="fab fa-youtube"></i>
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
                <img src="<?php echo base_url();?>assets/frontend/img/footer-map-two.jpg" alt="">
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

                    <!-- <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> -->
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

                    <SCRIPT>
                        $(document).ready(function() {
                            $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
                                e.preventDefault();
                                $(this).siblings('a.active').removeClass("active");
                                $(this).addClass("active");
                                var index = $(this).index();
                                $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                                $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
                            });
                        });
                    </SCRIPT>

</body>

</html>