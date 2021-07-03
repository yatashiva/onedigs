<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?php echo base_url();?>assets/frontend/img/favicon.png" sizes="16x16">

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.css" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- uikit -->
    <!-- <link rel="stylesheet" href="css/uikit.min.css" /> -->
    <!-- <link rel="stylesheet" href="css/uikit.docs.min.css" /> -->

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

</head>

<body id="booking_page" onload="loadingAjax();">

    <!-- start header -->
    <header class="header_area" style="background-color: #0a243f;box-shadow:0 3px 10px 0 rgba(0,0,0,0.2);z-index:999;">

        <div class="container" style="padding: 2% 0px;">
            <a id="brand" class="clearfix " href="#">
                <img class="img-responsive center-block"  src="<?php echo base_url();?>assets/frontend/img/footer-logo-one.png" alt="Trips">
            </a>
            <!-- start mainmenu & logo -->
        </div>

    </header>
    <!-- end header -->

    <!-- start breadcrumb -->
    <section class="breadcrumb_main_area margin-bottom-80">
        <div class="container-fluid">
            <div class="row">
                <div class="breadcrumb_main nice_title">
                    <h2>Booking</h2>
                    <!-- special offer start -->
                    <div class="special_offer_main">
                        <div class="container">
                            <div class="special_offer_sub">
                                <img src="<?php echo base_url();?>assets/frontend/img/special-offer-yellow-main.png" alt="imf">
                            </div>
                        </div>
                    </div>
                    <!-- end offer start -->
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrunb -->

    <!-- start other detect room section -->
    <div id="hotel">
        <section class="booking_area">
            <div class="container">
                <div class="booking">
                    <div role="tabpanel" id="booking_confirm">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#booking_info" aria-controls="booking_info" role="tab" data-toggle="tab"><i>1</i><span>booking info</span></a>
                            </li>
                            <li role="presentation">
                                <a href="#personal_info" aria-controls="personal_info" role="tab" data-toggle="tab"><i>2</i><span>personal info</span></a>
                            </li>
                            <li role="presentation">
                                <a href="#payment_info" aria-controls="payment_info" role="tab" data-toggle="tab"><i>3</i><span>payment info</span></a>
                            </li>
                            <li role="presentation">
                                <a href="#booking_done" aria-controls="booking_done" role="tab" data-toggle="tab"><i>4</i><span>Review</span></a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="hotel">
                            <!-- <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="booking_info">
                            <div class="booking_info_area">
                                <div class="facilities_name clearfix margin-bottom-150 margin-top-70">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-5">
                                            <img src="img/booking-step-one.jpg" alt="">
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-7">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="section_title clearfix margin-bottom-5">
                                                        <h5 class="floatleft">Deluxe Room <span class="price floatright margin-left-15">(&#2352;180 <sup class="day">/night</sup>)</span></h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="star margin-bottom-20">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 no-padding-left">
                                                    <ul class="single_facilities_name clearul">
                                                        <li>
                                                            <img src="img/home-facilities-icon-one.png" alt="">
                                                            <p>Breakfast</p>
                                                        </li>
                                                        <li>
                                                            <img src="img/home-facilities-icon-four.png" alt="">
                                                            <p>Room service</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                    <ul class="single_facilities_name clearul">
                                                        <li>
                                                            <img src="img/home-facilities-icon-two.png" alt="">
                                                            <p>Air conditioning</p>
                                                        </li>
                                                        <li>
                                                            <img src="img/home-facilities-icon-ten.png" alt="">
                                                            <p>GYM fecility</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                    <ul class="single_facilities_name clearul">
                                                        <li>
                                                            <img src="img/home-facilities-icon-eight.png" alt="">
                                                            <p>Free Parking</p>
                                                        </li>
                                                        <li>
                                                            <img src="img/home-facilities-icon-five.png" alt="">
                                                            <p>TV LCD</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                    <ul class="single_facilities_name clearul">
                                                        <li>
                                                            <img src="img/home-facilities-icon-three.png" alt="">
                                                            <p>Pet allowed</p>
                                                        </li>
                                                        <li>
                                                            <img src="img/home-facilities-icon-twelve.png" alt="">
                                                            <p>Wi-fi service</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="booking_next_btn padding-top-30 margin-top-50 clearfix border-top-whitesmoke">
                                                     <!--    <a href="#" class="btn btn-warning btn-sm btn-info">back</a> -->
                            <!--  <a href="#" class="btn btn-warning btn-sm floatright">Next</a>
                                                    </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                               -->

        </section>
        </div>
        <!-- end other detect room section -->

        <!-- start footer -->
        <footer class="footer_area">
            <div class="container">
                <div class="footer">
                    <div class="footer_top padding-top-40 clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer_widget">
                                <div class="footer_logo">
                                    <a href="#"><img src="<?php echo base_url();?>assets/frontend/img/footer-logo-one.png" alt=""></a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, conser adipiscing elit. In consectetur tincidunt dolor.</p>
                                <ul>
                                    <li>
                                        <P><i class="fa fa-map-marker"></i>xxxxxxxxxxx,
                                            <br> xxxxxxxxxxxxxx</P>
                                    </li>
                                </ul>
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
                                            <li><a href="#">T & C</a></li>
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

        <!-- uikit -->
        <!--
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-modal.js"></script>
        <script src="js/uikit-lightbox.js"></script>
        -->
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

        <!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
        <!--[if gte IE 9]>
            <script type="text/javascript">new WOW().init();</script>
        <![endif]-->

        <!--Opacity & Other IE fix for older browser-->
        <!--[if lte IE 8]>
            <script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
        <![endif]-->

        <!-- my js -->
        <script src="js/main.js"></script>
        <script>
            function loadingAjax() {

                var location = "<?php echo $_GET['location']; ?>";

                $.ajax({
                    type: "GET",
                    crossDomain: true,
                    url: "<?php echo base_url() ?> . "hotels",

                    data: {
                        "loc": location
                    },
                    success: function(data) {
                        console.log(data);
                        var obj = jQuery.parseJSON(JSON.stringify(data));
                        console.log(obj);

                        $.each(obj, function(key, value) {
                            if (value['loc'] == location) {
                                var id1 = value['id'];
                                $.ajax({
                                    type: "GET",
                                    crossDomain: true,
                                    url: "<?php echo base_url() ?> . "roomcategory",
                                    // data:{"hotel_id":id}, 
                                    success: function(data1) {
                                        console.log(data1);
                                        var obj1 = jQuery.parseJSON(JSON.stringify(data1));
                                        console.log(obj1);
                                        $.each(obj1, function(key1, value1) {
                                            var html = "";
                                            if (value1['hotel_id'] == id1) {
                                                html += '<div class="tab-content">';
                                                html += '<div role="tabpanel" class="tab-pane active" id="booking_info">';
                                                html += '<div class="booking_info_area">';
                                                html += '<div class="facilities_name clearfix margin-bottom-150 margin-top-70">';
                                                html += '<div class="row">';
                                                html += '<div class="col-lg-3 col-md-3 col-sm-5">';
                                                html += '<img src="img/booking-step-one.jpg" alt="">';
                                                html += '</div>';
                                                html += '<div class="col-lg-9 col-md-9 col-sm-7">';
                                                html += '<div class="row">';
                                                html += '<div class="col-lg-12 col-md-12">';
                                                html += '<div class="section_title clearfix margin-bottom-5">';
                                                html += '<h5 class="floatleft" > <var id="hotel_name">' + value['name'] + '</var><span class="price floatright margin-left-15">' + value1['room_type'] + 'Room with price ' + value1['price'] + ' </span></h5>';
                                                html += '</div>';
                                                html += '</div>';
                                                html += '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
                                                html += '<div class="star margin-bottom-20">';
                                                html += '<a href="#"><i class="fa fa-star"></i></a>';
                                                html += '<a href="#"><i class="fa fa-star"></i></a>';
                                                html += '<a href="#"><i class="fa fa-star"></i></a>';
                                                html += '<a href="#"><i class="fa fa-star"></i></a>';
                                                html += ' <a href="#"><i class="fa fa-star-o"></i></a>';
                                                html += '</div>';
                                                html += '</div>';
                                                html += '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 no-padding-left">';
                                                html += '<ul class="single_facilities_name clearul">';
                                                html += '<li>';
                                                html += '<img src="img/home-facilities-icon-one.png" alt="">';
                                                html += '<p>Breakfast</p>';
                                                html += '</li>';
                                                html += '<li>';
                                                html += '<img src="img/home-facilities-icon-four.png" alt="">';
                                                html += '<p>Room service</p>';
                                                html += '</li>';
                                                html += '</ul>';
                                                html += '</div>';
                                                html += '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">';
                                                html += '<ul class="single_facilities_name clearul">';
                                                html += '<li>';
                                                html += '<img src="img/home-facilities-icon-two.png" alt="">';
                                                html += '<p>Air conditioning</p>';
                                                html += '</li>';
                                                html += '<li>';
                                                html += '<img src="img/home-facilities-icon-ten.png" alt="">';
                                                html += '<p>GYM fecility</p>';
                                                html += '</li>';
                                                html += '</ul>';
                                                html += '</div>';
                                                html += '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">';
                                                html += '<ul class="single_facilities_name clearul">';
                                                html += '<li>';
                                                html += '<img src="img/home-facilities-icon-eight.png" alt="">';
                                                html += '<p>Free Parking</p>';
                                                html += '</li>';
                                                html += '<li>';
                                                html += '<img src="img/home-facilities-icon-five.png" alt="">';
                                                html += '<p>TV LCD</p>';
                                                html += '</li>';
                                                html += '</ul>';
                                                html += '</div>';
                                                html += '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">';
                                                html += '<ul class="single_facilities_name clearul">';
                                                html += '<li>';
                                                html += '<img src="img/home-facilities-icon-three.png" alt="">';
                                                html += '<p>Pet allowed</p>';
                                                html += '</li>';
                                                html += '<li>';
                                                html += '<img src="img/home-facilities-icon-twelve.png" alt="">';
                                                html += '<p>Wi-fi service</p>';
                                                html += '</li>';
                                                html += '</ul>';
                                                html += '</div>';
                                                html += '</div>';
                                                html += '</div>';

                                                html += '<div class="row">';
                                                html += '<div class="col-lg-12 col-md-12">';
                                                html += '<div class="booking_next_btn padding-top-30 margin-top-50 clearfix border-top-whitesmoke">';
                                                html += "<form action='room.php' method='GET'>";
                                                html += "<input type='hidden' name='hotel_id' value=" + value['id'] + " />";
                                                html += "<input type='hidden' name='room_id' value=" + id1 + " />";
                                                html += '<input type ="submit" class="btn btn-warning btn-sm floatright" value="Next">';
                                                html += "</form>";
                                                html += '</div>';
                                                html += '</div>';
                                                html += '</div>';
                                                html += '</div>';
                                                html += '</div>';
                                                html += '</div>';
                                                html += '</div>';
                                                html += '</div>';
                                                console.log(value['id']);

                                            }

                                            $(".hotel").append(html);

                                        });

                                    }

                                });
                            }

                        });
                    }
                });
            }
        </script>

</body>

<!-- Mirrored from premiumlayers.net/demo/html/hotelbooking/booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 May 2018 10:14:10 GMT -->

</html>