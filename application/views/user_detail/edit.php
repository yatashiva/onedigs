<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NOHO Rooms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?php echo base_url(); ?>assets/admin/img/favi.jpg" sizes="32x32">

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
      <style>
body{
	
}

	#mainform{
width:960px;
margin:20px auto;
padding-top:20px;
font-family:'Fauna One',serif
}
#mainform h2{
width:100%;
float:left;
text-align:center;
margin-top:35px
}
.innerdiv{
width:65%;
float:left
}
form{
background-color:#fff;
color:#123456;
box-shadow:0 1px 1px 1px gray;
width:500px;
margin:50px 250px 0 50px;
float:left;
height:400px;
padding:10px
}
h3{
margin-top:0;
color:#fff;
background-color:#8dc53f;
text-align:center;
width:100%;
height:50px;
padding-top:30px
}
input{
width:250px;
height:30px;
margin-top:10px;
border-radius:3px;
padding:2px;
box-shadow:0 1px 1px 0 #a9a9a9;
margin:10px
}
input[type=button]{
background-color:#8dc53f;
border:1px solid #fff;
font-family:'Fauna One',serif;
font-weight:700;
font-size:18px;
color:#fff;
width:150px;

margin-top:30px
}
span{
color:green
}
#myForm div{
color:red;
font-size:14px
}

.edit_form{
	border-radius:10px;
	
}
</style>

</head>

<!-- <body style="font-family:'Helvetica';">
 -->
 <body style='background-image:url(<?php echo base_url(); ?>gallery/hotel_wall3.jpg);'> 
    <!-- start preloader -->
   <!--  <div id="loader-wrapper">
        <div class="logo">
            <a href="<?php echo base_url(); ?>">
               
            </a>
        </div>
        <div id="loader">
        </div>
    </div> -->
    <!-- end preloader -->

    <!-- start header -->
    <header class="header_area" style="background-color: white;box-shadow:0 3px 10px 0 rgba(0,0,0,0.2) !important;z-index:999;position  :relative">
        <div class="container" style="padding: 1% 0px;">
            <div class="col-md-6">
                <a id="brand" class="clearfix " href="<?php echo base_url();?>">
            <img class="img-responsive" style='margin-top:10px' src="<?php echo base_url();?>assets/admin/img/logo.png" alt="Habit Place">
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
                             
                                <span class="dropdown">
                                        <span style="color:#8dc53f" class="dropdown-toggle" type="button" data-toggle="dropdown" alt="Login"><a href='' style='text-decoration:none'> Welcome, <?php echo $this->session->userdata('name'); ?></a></span>
                                        
                                        <ul class="dropdown-menu" style="margin-top: 10%;">
                                          <li><a href="#"  onclick="profile('<?php echo $this->session->userdata('login_id'); ?>')">Profile</a></li>
                                         <!--  <li><a href="">Change Password</a></li> -->
                                          <li><a href="<?php echo base_url(); ?>index.php/login_user/mybookings/<?php echo $this->session->userdata('login_id'); ?>">My History</a></li>
                                          <li><a href="<?php echo base_url();?>index.php/login_user/logout">Logout</a></li>
                                        </ul>
                                    </span>
                               
                            </div>
                      <?php } ?>  
                
            </div>

        </div>
    </header>


  

 
<div class="container">
<div class='col-md-6 col-md-offset-4 col-xs-12' style='margin-left:25%'>
<?php
// print_r($user_detail);
?>


<form action="<?php echo base_url(); ?>index.php/user_detail/edit/<?php echo $user_detail['login_id']; ?>" method="POST" enctype="multipart/form-data" id="myForm"  name="myForm" class='edit_form'>
<h3 style='border-radius:5px'>Edit Your Profile!</h3>
<table>
<tr>
<td>Username</td>
<td><input type='text' id='username' name='name'  placeholder='Edit Name'  value="<?php echo $user_detail['name']; ?>" required></td>
<td>
<div id='username'></div>
</td>
</tr>
<tr>
<td>Mobile Number</td>
<td><input id='number' name='phone_no'  type='number' placeholder='Edit Number'  value="<?php echo $user_detail['phone_no']; ?>" required></td>
<td>
<div id='mobile'></div>
</td>
</tr>
<tr>
<td>Email</td>
<td><input id='email' name='email'  type='email' placeholder='Edit EmailId'  value="<?php echo $user_detail['email']; ?>" required></td>
<td>
<div id='email'></div>
</td>
</tr>

</table>
<br>
<br>
<br>
<div align='center'>
<input type='submit' name='' value='Submit' style='border-radius:5px' >
</div>
</form>

</div>
</div>
<footer class="footer_area" style="margin-top: 50px;">
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
                    <a href="<?php echo base_url();?>index.php/hotel/aboutus">About us</a>
                </li>
                <li>
                    <a href="#">Careers</a>
                </li>
               
                <li>
                    <a href="<?php echo base_url();?>index.php/hotel/privacy">Privacy policy </a>
                </li>
                
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 sol-sm-6">
            <ul>
               
                <li>
                      <a href="<?php echo base_url();?>index.php/hotel/terms_conditions">Terms of services</a>
                </li>
                <li>
                   <a href="#">Feedback</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>index.php/hotel/faq"">FAQ</a>
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
           
               
                <img src="<?php echo base_url();?>assets/frontend/img/footer-map-two.png" alt="">
				
           
        </div>
    </div>
</div>

</div>

                <div class="row">
                    <div class="container">
                        <div class="footer_copyright margin-tb-30 content-center">
                            <p>© 2018
                                <a href="#">NOHO</a>. All rights reserved</p>
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
            

                <div class="modal-body">

                        <button type="button" class="close" data-dismiss="modal" ><span style="font-size: 45px;color: black;">&times;</span></button>
                    <!-- <p>Some text in the modal.</p> -->
                    <h2 style="" class="modal-title">Login</h2><br>
                    <form id="loginform">
                        <span style="font-size:14px;">Enter Email Id (or) Mobile Number</span>
                            
                        <br><br>
                        <input type="text" class="form-control popstyle" name="email" id="email" placeholder="Enter here"  />
                        <br>
                        <?php
                      
                        ?>
                        <input type="checkbox" name="remember"> Remember Me
                        <br>
                        <br>
                        <input type="button" value="Login" id="submitlogin"  class="btn btn-default" style=" padding: 14px 22px 13px;
                        background-color: #8dc53f;
                        color: white;
                        font-size: 16px;">
                    </form>
                </div>
                <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        <div class="text-center">
                            Don't have a Account? <a href="" data-toggle="modal" data-target="#signup" id="showsignup" style="color: blue">click here  </a> to create an account
                        </div>
                    </div>
            </div>

        </div>
    </div>

    <div id="signup" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                
                <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" ><span style="font-size: 45px;color: black;">&times;</span></button>
                        <h2 style="" class="modal-title">Create Account</h2><br>
                    <!-- <p>Some text in the modal.</p> -->
                    <form id="register">
                         Enter name
                        <input type="text" class="form-control popstyle" name="name" id="name1" placeholder="Enter Name"  required/>
                        <br>
                        Enter Mobile Number
                        <input type="text" class="form-control popstyle" name="phone_no" id="phone_no1" placeholder="Enter Mobile number" required/>
                        <br> Enter Email Id(Optional)
                        <input type="text" class="form-control popstyle"  name="email" id="email1" placeholder="Your Email Id(Optional)" />
                        <br>
                        <!-- <input type="checkbox" > Remember Me  -->
                        <br>
                        <input type="button" value="Create Account" id="submit" class="btn btn-default center-block" style=" padding: 14px 22px 13px;
                        background-color: #8dc53f;
                        color: white;
                        font-size: 16px;">
                        <br>
                        <a href="#" style="color: blue" class="center-block text-center">Terms and Conditions*</a>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                    <div class="text-center">
                        Already have a Account? <a href="" data-toggle="modal" data-target="#login" id="showlogin" style="color: blue">Login Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="otp" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                
                <div class="modal-body">
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                        <h2 style="" class="modal-title text-center">Submit OTP</h2><br>
                    <p>Please enter the otp sent to your mobile (or)Mail id</p>
                    <form id="otpsubmit">
                        <input type="hidden" name="phone_no" id="phone_no" value=""/>
                        <input type="hidden" name="email" id="email" value=""/>
                        
                        
                        <input type="text" class="form-control popstyle" name="otp" id="otp" placeholder="Enter OTP" required/>
                       <br>
                        <input type="button" value="Submit" id="submitotp" class="btn btn-default center-block" style=" padding: 14px 22px 13px;
                        background-color: #8dc53f;
                        color: white;
                        font-size: 16px;">
                        <!-- <br> -->
                        <!-- <a href="" style="color: blue" class="center-block text-center">Terms and Conditions*</a> -->
                    </form>
                </div>
            </div>

        </div>
    </div>
	
	
	<div id="change_password" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                
                <div class="modal-body">
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                        <h2 style="" class="modal-title text-center">Change Password</h2><br>
                   
                    <form id="password_submit">
                        <input type="hidden" name="phone_no" id="phone_no" value=""/>
                        <input type="hidden" name="email" id="email" value=""/>
                        
                        
                        <input type="text" class="form-control popstyle" name="old_password" id="old_password" placeholder="Enter Password" required />
						<br>
						<input type="text" class="form-control popstyle" name="new_password" id="new_password" placeholder="Enter New Password" required />
                       <br>
                        <input type="button" value="Submit" id="submit_password" class="btn btn-default center-block" style=" padding: 14px 22px 13px;
                        background-color: #8dc53f;
                        color: white;
                        font-size: 16px;">
                        <!-- <br> -->
                        <!-- <a href="" style="color: blue" class="center-block text-center">Terms and Conditions*</a> -->
                    </form>
                </div>
            </div>

        </div>
    </div>


       <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
    <!-- <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> -->

    <!-- jquery library -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
      
    <!-- bootstrap -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/moment.min.js"></script>
    <!-- rev slider -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/rev-slider/rs-plugin/jquery.themepunch.plugins.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/rev-slider/rs-plugin/jquery.themepunch.revolution.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/rev-slider/rs.home.js"></script>
    <!-- uikit -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/uikit.min.js"></script>
    <!-- easing -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.easing.1.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/datepicker.js"></script>
    <!-- scroll up -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.scrollUp.min.js"></script>
    <!-- owlcarousel -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/owl.carousel.min.js"></script>
    <!-- lightslider -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/lightslider.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/daterangepicker-master/daterangepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/daterangepicker-master/daterangepicker.css"></script>
	

    <!-- wow Animation -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/wow.min.js"></script>
    <!--Activating WOW Animation only for modern browser-->
    <!--[if !IE]><!-->
    <script type="text/javascript">
        new WOW().init();
    </script>
    <!--<![endif]-->

    <!-- my js -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/main.js"></script>

<script>
$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();

      return false;
    }
  });
});
        $('#submit').click(function () {
            var url= "<?php echo base_url(); ?>index.php/user_detail/add"
            $name=$('#name1').val();
            $mobile=$('#phone_no1').val();
            if($name =='' && $mobile=='')
            {
                alert("Please fill all required fields");
            }
            else
            {
            $.ajax({
                    type : 'POST',
                    url : url,
                    data : $('#register').serialize(),
                    dataType: 'json',
                    success: function(result){
                        // alert(result['userdetails']['id']);
                        if(result['status']=='success'){
                            $('#signup').find('form').trigger('reset');            
                            $('#signup').modal('hide');
                            $("#otp #phone_no").val(result['userdetails']['phone_no']);
                            $('#otp').modal('show');
                           
							
                            
                        }
                    }
                    });
        }
            });
            $('#submitotp').click(function () {
            var url= "<?php echo base_url(); ?>index.php/login_user/checkotp"
            $.ajax({
                    type : 'POST',
                    url : url,
                    data : $('#otpsubmit').serialize(),
                    
                    success: function(result){
                        console.log(result.length);
                        var output="success";
                        if(result.length > 1) {
                             console.log("hello");
                            location.reload();
                            window.location.reload(true);  
                           

                        }
                        else
                        {
                            alert("Invalid otp");
                        }
                    }
                    });
            });
			
			$('#submit_password').click(function () {
			 $('#change_password').modal('show');
			 });
			 
            $('#submitlogin').click(function () {

            var url= "<?php echo base_url(); ?>index.php/login_user/createotp"
            console.log($('#loginform').serialize());
            $.ajax({
                    type : 'POST',
                    url : url,
                    data : $('#loginform').serialize(),
                    dataType: 'json',                    
                    success: function(result){
                         // alert(result);
                        if(result['status']=='success'){
                            $('#login').modal('hide');
                            $("#otp #phone_no").val(result['details']['phone_no']);
                            $('#otp').modal('show');
                           
							
                            
                        }
                    }
                    });
            });
            $('#showlogin').click(function(){
                $('#signup').modal('hide');
            });
            $('#showsignup').click(function(){
                $('#login').modal('hide');
            });
        function profile(id){
            var url= "<?php echo base_url(); ?>index.php/login_user/profile"
            $.ajax({
                    type : 'POST',
                    url : url,
                    data : {"id" : id},
                   // dataType: 'json',                    
                    success: function(result){
                        // alert(result);
                        console.log(result);
                       // console.log(typeof(result));
                        var obj = JSON.parse(result);
//                      $.each($.parseJSON(result), function(k, v) {
//     alert(k + ' is ' + v);
// });
// $.each(result, function(key,value){       
//     console.log(value.username);
// });

console.log(obj['id']);
$("#divname").html("");
$("#fname").html("");
$("#divemail").html("");
$("#number").html("");
  $('<p>'+obj['username']+'</p>').appendTo('#divname');
   $('<p>'+obj['username']+'</p>').appendTo('#fname');
    $('<p>'+obj['email']+'</p>').appendTo('#divemail');
     $('<p>'+obj['phone_no']+'</p>').appendTo('#number');
      // $('<p>'+obj['created_at']+'</p>').appendTo('#dv');
$('#myModal').modal();
//console.log(obj['name']);
//console.log(result['email']);

      

                    }
                    });
            }
    
    </script>
    <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog" style='width:500px'>
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"style="padding-right:10px;padding-top:10px;">&times;</button>
                  
                  <div class="modal-header"style="background-color: #5cb85c;">  <h4 class="text-center">User Profile</h4></div>
                  <div class="modal-body"style="height:400px;">
                             
                          <div class="box box-info">
                              
                                  <div class="box-body">
                                           <div class="col-sm-12">
                                           <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                                      
                                      <input id="profile-image-upload" class="hidden" type="file">
                      <div style="color:#999;" id="divname"></div>
                                      <!--Upload Image Js And Css-->
                                 
                                    
                         
                                      
                                      
                                           
                                           
                                           </div>
                                    
                                    <br>
                          
                                    <!-- /input-group -->
                                  </div>
                                  
                                
                                  
                      <div class="col-md-5 col-sm-6  col-xs-6 tital " >First Name:</div>
					  <div class="col-md-7 col-sm-6 col-xs-6" id="fname"></div>
                           <div class="clearfix"></div>
                      <div class="bot-border"></div>
                      
                      <div class="col-md-5 col-sm-6  col-xs-6 tital " >Email:</div>
					  <div class="col-md-7 col-sm-6 col-xs-6" id="divemail"> </div>
                        <div class="clearfix"></div>
                      <div class="bot-border"></div>
                      
                      <div class="col-md-5 col-sm-6  col-xs-6 tital " >Phone Number:</div><div class="col-md-7 col-sm-6 col-xs-6" id="number"> </div>
					  
					  
					 
                        <!-- <div class="clearfix"></div>
                      <div class="bot-border"></div>
                     
                      <div class="col-sm-3 col-sm-offset-1 col-xs-6 tital " >Date Of Joining:</div><div class="col-sm-4 col-sm-offset-3 col-xs-6">15 Jun 2016</div> -->
                      
                        <div class="clearfix"></div>
                      <div class="bot-border"></div>
                      
                    <!-- <div class="col-sm-3 col-sm-offset-1 col-xs-6 tital " >Date Of Creation:</div><div class="col-sm-4 col-sm-offset-3 col-xs-6" id="dv"></div>
                      
                        <div class="clearfix"></div>
                      <div class="bot-border"></div>
                      
                      <!-- <div class="col-sm-3 col-sm-offset-1 col-xs-6 tital " >Place Of Birth:</div><div class="col-sm-4 col-sm-offset-3 col-xs-6">Shirdi</div>
                      
                       <div class="clearfix"></div>
                      <div class="bot-border"></div> 
                      
                      <div class="col-sm-3 col-sm-offset-1 col-xs-6 tital " >Nationality:</div><div class="col-sm-4 col-sm-offset-3 col-xs-6">Indian</div>
                      
                       <div class="clearfix"></div>
                      <div class="bot-border"></div>
                      
                      <div class="col-sm-3 col-sm-offset-1 col-xs-6 tital " >Religion:</div><div class="col-sm-4 col-sm-offset-3 col-xs-6">Hindu</div> -->
                      
                      
                                  <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                      
                              </div>
                             
                              
						     
                          </div> 
					    <div align='center'>	  
						  <a href='<?php echo base_url(); ?>index.php/user_detail/edit/<?php echo $_SESSION['login_id']; ?>'><button   class='btn btn-lg btn-success'><p  style='color:white;text-decoration:none'>Edit</p></button></a>
					   </div> 
                          </div>
                      </div>  
                         </div>
                         </div>
                         </div>

</body>
</html>
