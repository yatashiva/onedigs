
<style>
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
</style>
<!-- start footer -->
<footer class="footer_area" style="background: #f1f1f1;border-top: 1px solid #ddd;
    margin: 0 auto;
    padding-top: 10px;
    padding-bottom: 10px;">
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
						
						
						
					</ul>
				</nav>
                        </div>
                        <div class="col-md-4">
                            <p style="color:#005b80">© 2020
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
