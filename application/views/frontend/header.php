<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Olakite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="https://res.cloudinary.com/mallinamala/image/upload/v1617777694/logo_dxdulq.png" sizes="32x32">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="OlaKite" />
    <meta property="og:description" content="Hotel Bookings & Management" />
    <meta property="og:url" id="og_url" content="http://www.olakite.com" />
    <meta property="og:site_name" content="Hotel Bookings & Management" />
    <meta property="og:image" content="<?php echo base_url(); ?>assets/frontend/img/favicon.png" />
    <meta name="theme-color" content="#005b80">

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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/jquery.scrolling-tabs.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/st-demo.css">

    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/style.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/responsive.css" />

    <!-- Socialmedia icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Date picker -->

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/css/bed.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/js/jquery-date-range-picker-master/dist/daterangepicker.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <style>
        .popstyle{
   /* input[type="text"], input[type="email"], textarea, textarea.form-control { */
    height: 50px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background: #f8f8f8;
    border: 1px solid #8dc53f;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 50px;
    color: #888;
    border-radius:10px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-box-shadow: 0 1px 0 0 #fff;
    -webkit-box-shadow: 0 1px 0 0 #fff;
    box-shadow: 0 1px 0 0 #fff;
    -o-transition: all .3s;
    -moz-transition: all .3s;
    -webkit-transition: all .3s;
    -ms-transition: all .3s;
    transition: all .3s;

    
/* }  */
}

.close{
    opacity:1 !important;
    outline:none;
}
.dropdown-menu{
        box-shadow: 0 0px 85px 0px rgba(0,0,0,0.2) !important;
    }
    #profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
    border:2px solid #03b1ce ;}
    .tital{ font-size:16px; font-weight:500;}
     .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}    

	
    <!--  card   -->
	
	.card {
    
    transition: 0.3s;
    width: 100%;
    border-radius: 5px;
	
}

.card:hover {
    
}

.large{
 
	
	font-size:15px;
	position:relative;
   padding:10px;
	
}

.dropdown-menu li a:hover{
	background-color:#1f46b0;
	color:white;
}

.amenities_list li{
	list-style:none;
    border: 1px solid #dfdddd;
    border-radius: 18px;
    padding: 2px 16px;
    margin-right: 10px;
    margin-bottom: 10px;
	float:left;
}
.amenities_list li:hover{
	background-color:#8dc53f;
	color:white
}	
a {
    color: #005b80;
}

.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
h1,h2,h3,h4,h5,h6 {
    font-family:Open Sans;
}
@media only screen and (max-width: 767px){
.container {
    width: 100%;
}
}
.minus, .plus {
    border-radius: 10px;
    background: transparent;
    border: 1px solid #005b80;
}
@media only screen and (min-width: 992px) and (max-width: 1199px){
.hotel_booking {
    padding: 0px 0px;
}
}
@media (min-width: 576px){
.modal-dialog {
    max-width: 500px;
    min-width:400px;
    margin: 1.75rem auto;
}
}
.modal-content {
    width:100% !important;
   border-radius: 0px;
}
.modal-header {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    /*align-items: flex-start;*/
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
    border-top-left-radius: .3rem;
}
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">
</head>

<body style="font-family:'Open Sans'">

    <!-- start preloader -->
    <!-- <div id="loader-wrapper">
        <div class="logo">
            <a href="https://res.cloudinary.com/mallinamala/image/upload/v1611064796/tenor_2_jrf0ji.gif">
               <img class="img-fluid" width="100px" src="https://res.cloudinary.com/mallinamala/image/upload/v1611064796/tenor_2_jrf0ji.gif">
            </a>
        </div>
       
    </div> -->
    <!-- end preloader -->

    <!-- start header -->
    <header class="header_area" style="background-color: #fff;z-index:999;position  :relative;height:80px">
        <div class="container" style="padding: 0px 0px;">
            <div class="row" style="display:flex">
            <div class="col-md-6">
                <a href="<?php echo base_url();?>"><img class="img-fluid" width="150px" id="nav-logo-alt" src="https://res.cloudinary.com/mallinamala/image/upload/v1618949600/ola_kite_logo_copy_ujqxcx.png"></a>
            </div>
            <div class="col-md-6 text-right float-right" style="margin-top: 28px;">
                   
                       
                
                     <?php   if (!$this->session->userdata('is_logged_in')) { ?>
                          
                       
                    <a href="" data-toggle="modal" data-target="#login" >Login </a>|
                    <a href="" data-toggle="modal" data-target="#signup" >Sign Up </a>
               
                     <?php } else if($this->session->userdata('is_logged_in')){ ?>
                        
                           
                           
                                <span class="dropdown">
                                        <span class="noprnt" style="color:#8dc53f" class="dropdown-toggle" type="button" data-toggle="dropdown" alt="Login"><a href='' style='text-decoration:none'> Welcome, <?php echo $this->session->userdata('name'); ?></a></span>
                                        
                                        <ul class="dropdown-menu" style="margin-top: 10%;">
                                          <li><a href="#"  onclick="profile('<?php echo $this->session->userdata('login_id'); ?>')">Profile</a></li>
                                          <li> <a href="<?php echo base_url(); ?>index.php/login_user/mybookings/<?php echo $this->session->userdata('login_id'); ?>">Booking History</a></li>
                                         <!--  <li><a href="">Change Password</a></li> -->
                                          <!-- <li><a href="<?php echo base_url(); ?>index.php/login_user/mybookings/<?php echo $this->session->userdata('login_id'); ?>">My History</a></li> -->
                                          <li><a href="<?php echo base_url();?>index.php/login_user/logout">Logout</a></li>
                                        </ul>
                                    </span>
                               
                            
                      <?php } ?>  
                
            </div>
            </div>

        </div>
    </header>
    <!-- end header -->