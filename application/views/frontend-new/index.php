<?php include("header.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script  defer src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyADtaHhb5sxvii-tBlIEPKfxsKV9RFl91A"  type="text/javascript"></script>
	<!--TOP SECTION-->
		<div class="hom-body-section">
			<div class="container">
				<div class="row">
					<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-5" id="mhide">
						<img class="img-fluid" width="100%" style="margin-top: 55px" src="<?php echo base_url(); ?>assets/frontend2/images/hotel2.svg">
					</div>
					<div class="col-md-2" id="mhide"></div>
					<div class="col-md-5">
						<div class="book-form inn-com-form">
							<form class="col s12" id="serach-form" action="<?php echo base_url();?>index.php/hotel/search" method="get" autocomplete="off">
								<div class="row">
									<div class="input-field col s12">
										<input id="places" type="text" class="form-control"  name="location" type="text" class="validate">
										<label>Location</label>
									</div>
									
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input type="text" id="from" name="from">
										<label for="from">Checkin</label>
									</div>
									<div class="input-field col s6">
										<input type="text" id="to" name="to">
										<label for="to">Checkout</label>
									</div>
								</div>
								
								<div class="row">
									<div class="input-field col s6">
										<select>
											<option value="" disabled selected>No of Guests</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="1">4</option>
										</select>
									</div>
									<div class="input-field col s6">
										<select>
											<option value="" disabled selected>No of Rooms</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="1">4</option>
										</select>
									</div>
								</div>
								
								
								<div class="row">
									<div class="input-field col s12">
										<input type="submit" value="Search" class="form-btn"> </div>
								</div>
							</form>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->

				</div>
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
	</section>
	<!--END HEADER SECTION-->
	<section>
		<!-- LOGIN SECTION -->
		<div id="modal1" class="modal fade" role="dialog">
			<div class="log-in-pop">
				<div class="log-in-pop-left">
					<h1>Welcome... </h1>
					<p>Don't have an account? Create your account.</p>
					<h4>Login with social media</h4>
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
						</li>
						<li><a href="#"><i class="fa fa-google"></i> Google+</a>
						</li>
						<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
						</li>
					</ul>
				</div>
				<div class="log-in-pop-right">
					<a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
					</a>
					<h4>Login</h4>
					<p>Don't have an account? Create your account. It's take less then a minutes</p>
					<form class="s12">
						<div>
							<div class="input-field s12">
								<input type="text" data-ng-model="name" class="validate">
								<label>User name</label>
							</div>
						</div>
						<div>
							<div class="input-field s12">
								<input type="password" class="validate">
								<label>Password</label>
							</div>
						</div>
						<div>
							<div class="s12 log-ch-bx">
								<p>
									<input type="checkbox" id="test5" />
									<label for="test5">Remember me</label>
								</p>
							</div>
						</div>
						<div>
							<div class="input-field s4">
								<input type="submit" value="Login" class="waves-effect waves-light log-in-btn"> </div>
						</div>
						<div>
							<div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Forgot password</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- REGISTER SECTION -->
		<div id="modal2" class="modal fade" role="dialog">
			<div class="log-in-pop">
				
				<div class="log-in-pop-right">
					<a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
					</a>
					<h4>Create an Account</h4>
					<p>Don't have an account? Create your account. It's take less then a minutes</p>
					<form class="s12">
						<div>
							<div class="input-field s12">
								<input type="text" data-ng-model="name1" class="validate">
								<label>User name</label>
							</div>
						</div>
						<div>
							<div class="input-field s12">
								<input type="email" class="validate">
								<label>Email id</label>
							</div>
						</div>
						<div>
							<div class="input-field s12">
								<input type="password" class="validate">
								<label>Password</label>
							</div>
						</div>
						<div>
							<div class="input-field s12">
								<input type="password" class="validate">
								<label>Confirm password</label>
							</div>
						</div>
						<div>
							<div class="input-field s4">
								<input type="submit" value="Register" class="waves-effect waves-light log-in-btn"> </div>
						</div>
						<div>
							<div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> </div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- FORGOT SECTION -->
		<div id="modal3" class="modal fade" role="dialog">
			<div class="log-in-pop">
				<div class="log-in-pop-left">
					<h1>Hello... <span>{{ name3 }}</span></h1>
					<p>Don't have an account? Create your account. It's take less then a minutes</p>
					<h4>Login with social media</h4>
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
						</li>
						<li><a href="#"><i class="fa fa-google"></i> Google+</a>
						</li>
						<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
						</li>
					</ul>
				</div>
				<div class="log-in-pop-right">
					<a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
					</a>
					<h4>Forgot password</h4>
					<p>Don't have an account? Create your account. It's take less then a minutes</p>
					<form class="s12">
						<div>
							<div class="input-field s12">
								<input type="text" data-ng-model="name3" class="validate">
								<label>User name or email id</label>
							</div>
						</div>
						<div>
							<div class="input-field s4">
								<input type="submit" value="Submit" class="waves-effect waves-light log-in-btn"> </div>
						</div>
						<div>
							<div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<script src="<?php echo base_url(); ?>assets/frontend2/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/frontend2/js/jquery-ui.js"></script>
	<script src="<?php echo base_url(); ?>assets/frontend2/js/angular.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/frontend2/js/bootstrap.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/frontend2/js/materialize.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/frontend2/js/jquery.mixitup.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/frontend2/js/custom.js"></script>
	
	 <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADtaHhb5sxvii-tBlIEPKfxsKV9RFl91A&libraries=places"></script>-->
	 <script>
    $(function() {
        // add input listeners
        google.maps.event.addDomListener(window, 'load', function () {
            var from_places = new google.maps.places.Autocomplete(document.getElementById('places'));
            var to_places = new google.maps.places.Autocomplete(document.getElementById('to_places'));

            google.maps.event.addListener(from_places, 'place_changed', function () {
                var from_place = from_places.getPlace();
                var from_address = from_place.formatted_address;
                $('#origin').val(from_address);
            });

            google.maps.event.addListener(to_places, 'place_changed', function () {
                var to_place = to_places.getPlace();
                var to_address = to_place.formatted_address;
                $('#destination').val(to_address);
            });

        });
      

    });

</script>
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
