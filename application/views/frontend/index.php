
<?php include("header.php"); ?>
<style>

    .fullwidthbanner-container {
    width: 100%;
    position: relative;
    padding: 0;
    overflow: hidden;
    height: 60%;
    margin-bottom: 200px;
}
.form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
#serach-form .form-control {
    line-height: 1;
    outline: none;
    padding: 19px 50px 19px 16px;
    font-size: 16px;
    color: rgba(0,0,0,.87);
    background-color: transparent;
    border: none;
    box-shadow: none;
    box-sizing: border-box;
    transition: .2s;
    font-weight: 500;
    /*text-transform: capitalize;*/
    
}
#nav-logo-alt {
    display:none;
}
.inline>li {
    margin-right: 2px;
}
#flinks,li a {
  /*display: block;*/
  /*color: white;*/
  /*text-align: center;*/
  padding: 16px;
  text-decoration: none;
  font-size:16px;
}
#flinks,li {
  float: left;
}
@media screen and (max-width: 800px) {
    #mhide {
        display:none;
    }
}
</style>

    <div class="fullwidthbanner-container" style="overflow-y: hidden;">

        <div class="" style="background-color: #fff;height:100%;z-index: -999;">
            <!-- start main slider -->
<center><img class="img-fluid" width="250px" src="https://res.cloudinary.com/mallinamala/image/upload/v1618949600/ola_kite_logo_copy_ujqxcx.png">

</center>
            <!-- start hotel booking -->
            <div class="hotel_booking_area" style="padding-top:5%;">
                <!--<br>-->
<center><h2 style="font-family:Open Sans;font-weight:600">Search for Hotels</h2></center>
                <br>

                <div class="container hotel_booking" style="max-width:900px;box-shadow: 0px 0px 11px rgb(0 0 0 / 36%);">
				
				<form id="serach-form" action="<?php echo base_url();?>index.php/hotel/search" method="get">
                    <div class="row">

                        <div class="col-md-3 " style="border-right: 1px solid #ebebeb;padding:0px !important">
                            <div class=" ">
                                <input id="places" type="text" class="form-control" placeholder="Enter Location "  name="location" style="padding: 14px 0 14px;border: none;text-align: center;min-height: 60px;" required>
                            </div>
                        </div>

                        <div class="col-md-3 " style="border-right: 1px solid #ebebeb;">
                            <div class=" ">
                                <input id="checkin_checkout" type="text" class="form-control" placeholder="Check In-Check Out" name="daterange" style="padding: 14px 0 14px;border: none;text-align: center;min-height: 60px;" required autocomplete="off"/>
                            </div>
                        </div>

                        <div class="col-md-3 " style="border-right: 1px solid #ebebeb;text-align: center">
                            <div class=" ">
                                <input id="rooms" type="text" class="form-control" Placeholder="1 Room, 1 Guest"  placeholder="No of Rooms"  style="padding: 14px 0 14px;border: none;text-align: center;min-height: 60px;" autocomplete="off" />
                            </div>
                        </div>

                        <div class="col-md-3 " style="background-color: #f9ad4c;text-align:center;padding-right: 15px;
    padding-left: 15px !important;border:hidden 5px #000000;
-moz-border-radius-topleft: 0px;
-moz-border-radius-topright:6px;
-moz-border-radius-bottomleft:0px;
-moz-border-radius-bottomright:6px;
-webkit-border-top-left-radius:0px;
-webkit-border-top-right-radius:6px;
-webkit-border-bottom-left-radius:0px;
-webkit-border-bottom-right-radius:6px;
border-top-left-radius:0px;
border-top-right-radius:6px;
border-bottom-left-radius:0px;
border-bottom-right-radius:6px;">
                            <div class="">
                                <button  type="submit" onclick="return checkInput()" id="destination_search" class="" style=" border: none;  padding: 18px 70px 18px;color: white;background-color: #f9ad4c;font-size: 18px;outline:none;">
                                 Search  
                                </button>
                            </div>
							
                        </div>
                        
                        <input type="hidden" name="rooms"  value=""  id="roomhidden"/>
                        </form>
                    </div>
                </div>
            </div>

            <!-- onclick div reveal area starts -->
            <div class="container " style="position: absolute;margin-left: 17%;width:900px;">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div  id="roomsdiv" class="col-md-3 " style="padding: 14px 0 14px;text-align: center;min-height: 60px;display:none;background-color: white;    z-index: 9;border-bottom: 4px solid #3883c4">
                    <div class="row">
                        <div class="input-group">
                            <label style="width: 100px;">Rooms</label>

                            <button type="button" class=" minus" id="minus1">
                                <i class="fa fa-minus"></i>
                            </button>

                            <input type="text" id="spinner1" class="spin " value="1" min-value=1 max-value=6 readonly>

                            <button type="button" class=" plus" id="plus1">

                                <i class="fa fa-plus"></i>
                            </button>

                        </div>
                        <br>
                        <div class="input-group">
                            <label style="width: 100px;">Adults</label>

                            <button type="button" class=" minus" id="minus2">
                                <i class="fa fa-minus"></i>
                            </button>
                        <!-- the max-value below is changed to 12 as our hotel rooms max-value 6 would allow only 12 guests as max-value -->
                            <input type="text" id="spinner2" class="spin" value="1" min-value=1 max-value=12 readonly>

                            <button type="button" class=" plus" id="plus2">
                                <i class="fa fa-plus"></i>
                            </button>

                        </div>
                        <br>
                        <div class="input-group">
                            <label style="width: 100px;">Children
                                <br>
                                <span style="font-size: 10px;">
                                Below 7 years
                            </span>
                            </label>

                            <button type="button" class=" minus" id="minus3">
                                <i class="fa fa-minus"></i>
                            </button>

                            <input type="text" id="spinner3" class="spin" value="0" min-value=0 max-value=18 readonly>

                            <button type="button" class=" plus" id="plus3">
                                <i class="fa fa-plus"></i>
                            </button>

                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <!-- <div class="container" id="mhide" style="margin-top:10%">
                <div class="col-md-2"></div>
                <div class="col-md-3"><img src="https://res.cloudinary.com/mallinamala/image/upload/v1620185403/antibacterial_g2dld7.svg" class="img-fluid" width="80px"></div>
                <div class="col-md-3"><img src="https://res.cloudinary.com/mallinamala/image/upload/v1620185403/mask_y6yjpu.svg" class="img-fluid" width="80px"></div>
                <div class="col-md-3"><img src="https://res.cloudinary.com/mallinamala/image/upload/v1620185595/distance_ef87y4.svg" class="img-fluid" width="80px"></div>
            </div> -->

<!-- commented as client wants to add more inputs on this and add this funtionality later -->
          <!--   <ul class="list-inline " style="text-align: center;">
                                <?php foreach($trending_destinations as $destinations): ?>
                                <?php $address=explode(',', $destinations['locations']);
                                $location=$address[0];$address=implode('%2C+', $address);?>
                                  <li><a href="<?php echo base_url();?>index.php/hotel/search?location=<?php echo $address;?>&daterange=<?php echo date("Y-m-d").'+-+'.date("Y-m-d", strtotime("+1 day"))?>&rooms=1+Rooms%2C1+Adults%2C0+Children">
                                       <img id="citSrt" style="width:200px; height:200px;border-radius: 5%;" class="img-responsive" src="<?php echo base_url();?>/uploads/trending_destinations/<?php echo $destinations['location_pic']; ?>">
                                      </a><?php echo $location;Lo ?>
                                  </li>
                                <?php endforeach; ?>
                            </ul> -->

                            

            <!-- onclick div reveal area ends -->

            

            <!-- end hotel booking -->
        </div>

    </div>
    <!-- end main slider -->
<?php //$this->load->view('frontend/destination');?>

 <!-- start footer -->
<footer class="footer_area"  style="padding: 10px 0px;
   background: #f1f1f1;border-top: 1px solid #ddd;
    margin: 0 auto;
   
    padding-bottom: 10px;
    width: 100%;
    z-index: 999;
    bottom: 0px;color:#333">
        <div class="container noprnt">

           

                <div class="row">
                    <div class="container">
                        <div class="col-md-8">
                            <nav>
					<ul id="flinks" class="inline clearFix" style="list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;">
						
						<li><a href="<?php echo base_url();?>index.php/hotel/aboutus" title="About Us" rel="nofollow">About Us</a></li>
					
						
						<li><a rel="nofollow" href="<?php echo base_url();?>index.php/hotel/privacy" title="Privacy Policy">Privacy Policy</a></li>
						<li><a rel="nofollow" href="<?php echo base_url();?>index.php/hotel/terms_conditions" title="Terms & Conditions">Terms & Conditions</a></li>
							<!--<li><a rel="nofollow" class="forceHttp recent" title="Careers" href="http://www.cleartrip.com/jobs">Careers</a></li>-->
										
						
						
						
					</ul>
				</nav>
                        </div>
                        <div class="col-md-4">
                            <p style="color:#005b80">© 2021
                              <a href="#" style="color:#005b80">OlaKite</a>. All rights reserved</p>
                        </div>
                        <!--<div class="footer_copyright margin-tb-30 content-center">-->
                        <!--    <p style="color:#005b80">© 2020-->
                        <!--        <a href="#" style="color:#005b80">OlaKite</a>. All rights reserved</p>-->
                        <!--</div>-->
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- end footer -->
    
   

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
       <form id="loginform">
  <div class="form-group">
    <label for="email">Email/Mobile No</label>
    <input style="border: 1px solid #dfdfdf;
    padding: 8px;
    box-sizing: border-box;
    height: 45px;
    border-radius: 2px;" type="text" class="form-control" name="email" id="email" placeholder="Enter Email/Mobile No" value="<?php if($this->input->cookie('user_name')) { echo $this->input->cookie('user_name',true); } ?>" >
   
  </div>
  
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" <?php if($this->input->cookie('user_name')) { echo "checked" ; } ?>>
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <!--<button style="border-radius: .25rem;" type="submit" class="btn btn-primary">Login</button>-->
  <input style="border-radius: .25rem;" type="button" value="Login" id="submitlogin"  class="btn btn-primary">
</form>
      </div>
      <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        <div class="text-center">
                            Don't have a Account? <a href="" data-toggle="modal" data-target="#signup" id="showsignup" style="color: #005b80">Register  </a>
                        </div>
                    </div>
      
    </div>
  </div>
</div>
  

<!-- Modal -->


    <div id="login1" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            

                <div class="modal-body">

                        <button type="button" class="close" data-dismiss="modal" ><span style="font-size: 45px;color: black;">&times;</span></button>
                    <!-- <p>Some text in the modal.</p> -->
                    <h2 style="" class="modal-title">Login</h2><br>
                    <form id="loginform">
  <div class="form-group">
    <label for="exampleInputEmail1">Email/Mobile No</label>
    <input type="text" class="form-control popstyle" name="email" id="email" placeholder="Enter Email/Mobile No" value="<?php if($this->input->cookie('user_name')) { echo $this->input->cookie('user_name',true); } ?>"  />
    
  </div>
  
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" <?php if($this->input->cookie('user_name')) { echo "checked" ; } ?> >
    <label class="form-check-label" for="exampleCheck1">Remeber Me</label>
  </div>
  <!--<button type="submit" class="btn btn-primary">Login</button>-->
  <input type="button" value="Login" id="submitlogin"  class="btn btn-primary">
</form>
                   
                </div>
                <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        <div class="text-center">
                            Don't have a Account? <a href="" data-toggle="modal" data-target="#signup" id="showsignup" style="color:">Register  </a>
                        </div>
                    </div>
            </div>

        </div>
    </div>
    
    <!-- Modal -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Signup</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
       <form id="register">
            <div class="form-group">
    <label for="email">Name</label>
    <input style="border: 1px solid #dfdfdf;
    padding: 8px;
    box-sizing: border-box;
    height: 45px;
    border-radius: 2px;" type="text" class="form-control" name="name" id="name1" placeholder="Enter Name" required>
   
  </div>
  <div class="form-group">
    <label for="email">Mobile No</label>
    <input style="border: 1px solid #dfdfdf;
    padding: 8px;
    box-sizing: border-box;
    height: 45px;
    border-radius: 2px;" type="text" class="form-control" name="phone_no" id="phone_no1" placeholder="Enter Mobile No" required>
   
  </div>
  
   <div class="form-group">
    <label for="email">Email (Optional)</label>
    <input style="border: 1px solid #dfdfdf;
    padding: 8px;
    box-sizing: border-box;
    height: 45px;
    border-radius: 2px;" type="text" class="form-control" name="email" id="email1" placeholder="Enter Email">
   
  </div>
  
  <div class="form-group">
      <p style="font-size:10px">By clicking signup, you are agreed for Olakite <a href="<?php echo base_url();?>index.php/hotel/terms_conditions" style="color: #005b80">Terms and Conditions</a></p>
  </div>
 
  <!--<button style="border-radius: .25rem;" type="submit" class="btn btn-primary">Login</button>-->
  <input style="border-radius: .25rem;" type="button" value="Signup" id="submit"  class="btn btn-primary">
  
</form>
      </div>
      <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                    <div class="text-center">
                        Already have a Account? <a href="" data-toggle="modal" data-target="#login" id="showlogin" style="color: #005b80">Login Now</a>
                    </div>
                </div>
      
    </div>
  </div>
</div>

    <div id="signup1" class="modal fade" role="dialog">
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
                        <a href="<?php echo base_url();?>index.php/hotel/terms_conditions" style="color: blue" class="center-block text-center">Terms and Conditions*</a>
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
    
    <!-- Modal -->
<div class="modal fade" id="otp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Enter OTP</h5>
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
        <!--  <span aria-hidden="true">&times;</span>-->
        <!--</button>-->
      </div>
      <div class="modal-body">
         
       <form id="otpsubmit">
  <div class="form-group">
       <input type="hidden" name="phone_no" id="phone_no" value=""/>
                        <input type="hidden" name="email" id="email" value=""/>
    <label for="email">OTP</label>
    <input style="border: 1px solid #dfdfdf;
    padding: 8px;
    box-sizing: border-box;
    height: 45px;
    border-radius: 2px;" type="text" class="form-control" name="otp" id="otp" placeholder="Enter OTP">
   
  </div>
  

  <input style="border-radius: .25rem;" type="button" value="Verify" id="submitotp"  class="btn btn-primary">
</form>
      </div>
     
      
    </div>
  </div>
</div>
  

    <div id="otp1" class="modal fade" role="dialog">
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
                        console.log(result);
                        // alert(result['userdetails']['id']);
                        if(result['status']=='success'){

                            $('#signup').find('form').trigger('reset');            
                            $('#signup').modal('hide');
                            $("#otp #phone_no").val(result['userdetails']['phone_no']);
                            $('#otp').modal('show');
                           
							
                            
                        }
                        else if(result['status']=='fail')
                        {
                        	alert(result['error']);
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
                          console.log(result);
                               console.log($('#loginform').serialize());
                        if(result['status']=='success'){
                            $('#login').modal('hide');
                            $("#otp #phone_no").val(result['details']['phone_no']);
                            $('#otp').modal('show');
                           
							
                            
                        }
                        else if(result['status']=='failed')
                        {
                        	alert(result['error']);
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


    <!-- daterangepicker -->

    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/js/jquery-date-range-picker-master/dist/daterangepicker.min.css"> -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery-date-range-picker-master/src/jquery.daterangepicker.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


    <!-- plcesapi -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAScIOzzgjWSSmaFPm0iCk7PtHgeBHRBFc&libraries=places"></script>
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP1OOTdnjMCXhXZ729xDqtxsvUJV36txQ&libraries=places"
    type="text/javascript"></script> -->
<script>
 function checkInput() {
  var place =document.getElementById('places').value;
  console.log(place);
  var aFirst = place.split(', ');
  if(aFirst.length !=3)
  {
  
    alert("Please enter valid place");
      return false;
    
  }
  else
  {
    return true;
  }
}
</script>
    <script type="text/javascript">

        $(document).ready(function() {
            // dateRangePicker
            
                // $('#checkin_checkout').dateRangePicker();
                $('#checkin_checkout').daterangepicker({
                        minDate:moment(),
                        endDate:moment().add(1,'days'),
                        autoApply:true,
                        locale:{
                            format:'YYYY-MM-DD' 
                        }
                        // maxDate:moment().add(29, 'days')                   
                    });
            // places
            function initialize() {
                var options = {
                    types: ['(cities)'],
                    componentRestrictions: {country: "IN"},
                    };
                var input = document.getElementById('places');
                new google.maps.places.Autocomplete(input,options);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
			
            // rooms
			
            $('#rooms').click(function(e) {
                $('#roomsdiv').show();
                e.stopPropagation();

            });
            $(document).click(function(e) {
                $("#roomsdiv").hide();
                // var guests = parseFloat($('#spinner2').val()) + parseFloat($('#spinner3').val());
                   var guests = parseFloat($('#spinner2').val());
                // $('#rooms').val($('#spinner1').val() + ' Rooms,' + guests + ' Guests');
                 $('#rooms').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
               
                $('#roomhidden').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                e.stopPropagation();
                
            });

            $('.minus').click(function(e) {
                var suffix = this.id.match(/\d+/);
                var minvalue = $('#spinner' + suffix).attr('min-value');
                if (parseFloat($('#spinner' + suffix).val()) > minvalue) {
                    $('#spinner' + suffix).val(parseFloat($('#spinner' + suffix).val()) - 1);
                }
                // var guests = parseFloat($('#spinner2').val()) + parseFloat($('#spinner3').val());
                 var guests = parseFloat($('#spinner2').val());
                 $('#rooms').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
              
                // $('#rooms').val($('#spinner1').val() + ' Rooms,' + guests + ' Guests');
                $('#roomhidden').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                e.stopPropagation();

            });
            $('.plus').click(function(e) {
                var suffix = this.id.match(/\d+/);
                var maxvalue = $('#spinner' + suffix).attr('max-value');
                if (parseFloat($('#spinner' + suffix).val()) < maxvalue) {
                    $('#spinner' + suffix).val(parseFloat($('#spinner' + suffix).val()) + 1);
                }
                // var guests = parseFloat($('#spinner2').val()) + parseFloat($('#spinner3').val());
                // $('#rooms').val($('#spinner1').val() + ' Rooms,' + guests + ' Guests');
                 var guests = parseFloat($('#spinner2').val());
                 $('#rooms').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
               
                $('#roomhidden').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                
                e.stopPropagation();
            });

             $('#plus1').click(function(){    
                // value in the if condition is changed ot suit the max-value of guest
                if (parseFloat($('#spinner2').val()) < 11) {
                $('#spinner2').val(parseFloat($('#spinner1').val()) * 2 );
                $('#rooms').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                $('#roomhidden').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                }
            });

            $('#minus1').click(function(){    
                if(parseFloat($('#spinner1').val()) > 1){
                    if(parseFloat($('#spinner2').val()) != 2){
                $('#spinner2').val(parseFloat($('#spinner2').val()) - 2 );
                $('#rooms').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                $('#roomhidden').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                    };
                };
                if(parseFloat($('#spinner1').val()) == 1){
                    $('#spinner2').val(2 );
                };
            });

            $('#plus2').click(function(){                
                var test = parseFloat($('#spinner2').val()) / 2;
                test = test + 0.5;
                test2 = Math.floor(test);
                $('#spinner1').val(test2);
                $('#rooms').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                $('#roomhidden').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                console.log(test+'and'+test2);
            });
            $('#minus2').click(function(){                
                var test = parseFloat($('#spinner1').val());
                var test2 = parseFloat($('#spinner2').val());
                if (test2 < test ){
                    $('#spinner1').val(parseFloat($('#spinner2').val()));
                };                
                $('#rooms').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                $('#roomhidden').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                console.log(test+'and'+test2);
            });

        });
    </script>

   
    
</body>

</html>