<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NOHO Rooms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?php echo base_url(); ?>assets/frontend/img/favicon.png" sizes="32x32">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Habit Place" />
    <meta property="og:description" content="Hotel Bookings & Management" />
    <meta property="og:url" id="og_url" content="http://www.Habitplace.com" />
    <meta property="og:site_name" content="Hotel Bookings & Management" />
    <meta property="og:image" content="<?php echo base_url(); ?>assets/frontend/img/favicon.png" />
    <meta name="theme-color" content="#3ac4fa">

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

    </style>
</head>

<body style="font-family:'Helvetica';">

    <!-- start preloader -->
    <div id="loader-wrapper">
        <div class="logo">
            <a href="<?php echo base_url(); ?>">
               
            </a>
        </div>
        <div id="loader">
        </div>
    </div>
    <!-- end preloader -->

    <!-- start header -->
    <header class="header_area" style="background-color: #636363;z-index:999;position  :relative">
        <div class="container" style="padding: 1% 0px;">
            <div class="col-md-6">
                <a id="brand" class="clearfix noprnt" href="<?php echo base_url();?>">
            <img class="img-responsive" style='margin-top:10px' src="<?php echo base_url();?>assets/frontend/img/asqa copy.png" alt="Habit Place">
        </a>
            </div>
            <div class="col-md-6 text-right float-right">
                    <div class="col-md-4">
                        </div>
                
                     <?php   if (!$this->session->userdata('is_logged_in')) { ?>
                          
                        <div class="col-md-8" style="margin:4% auto;">   
                    <a href="" data-toggle="modal" data-target="#login" >Login </a>|
                    <a href="" data-toggle="modal" data-target="#signup" >Sign Up </a>
                </div>
                     <?php } else if($this->session->userdata('is_logged_in')){ ?>
                        
                            <div class="col-md-8" style="margin:4% auto;">
                            <a style="margin-right:10%;" href="<?php echo base_url(); ?>index.php/login_user/mybookings/<?php echo $this->session->userdata('login_id'); ?>">Booking History</a>
                                <span class="dropdown">
                                        <span class="noprnt" style="color:#8dc53f" class="dropdown-toggle" type="button" data-toggle="dropdown" alt="Login"><a href='' style='text-decoration:none'> Welcome, <?php echo $this->session->userdata('name'); ?></a></span>
                                        
                                        <ul class="dropdown-menu" style="margin-top: 10%;">
                                          <li><a href="#"  onclick="profile('<?php echo $this->session->userdata('login_id'); ?>')">Profile</a></li>
                                         <!--  <li><a href="">Change Password</a></li> -->
                                          <!-- <li><a href="<?php echo base_url(); ?>index.php/login_user/mybookings/<?php echo $this->session->userdata('login_id'); ?>">My History</a></li> -->
                                          <li><a href="<?php echo base_url();?>index.php/login_user/logout">Logout</a></li>
                                        </ul>
                                    </span>
                               
                            </div>
                      <?php } ?>  
                
            </div>

        </div>
    </header>
    <!-- end header -->