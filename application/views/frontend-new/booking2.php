<style>
	.image_size{
		height: 135px !important;
	}
</style>


<?php include("header.php"); ?>

    <!-- start Booking -->
<div style='background-color:#f3f3f3'>	
<div class='container' >
   <div class='col-md-8 col-md-offset-2 col-sm-12 col-xs-12' style='background-color:white;padding-bottom:50px;'>  
	 
	  
	  
    <?php
   
    // foreach($hoteldetails as $hoteldetails)
    // {
    ?>
			<h1 align='center' style='padding-top:50px'>Review your Booking</h1>
        <div class="row" style='margin-top:30px'>
		
		  <div class='col-md-12 col-sm-12 col-xs-12'>
            <div class='col-md-5 col-sm-12 col-xs-12 ' >
				 <!-- <img style="padding-top: 10px;" src="<?php echo base_url(); ?>uploads/<?php echo $hoteldetails['hotel_pic']; ?>" alt="Hyderbad" title="Hyderabad" class="image_size img-responsive center-block" />
			</div>	 -->
       <?php
         if($image['sub_category_id']==NULL)
         {
          ?>
           <img style="padding-top: 10px;" src="<?php echo base_url(); ?>gallery/<?php echo $hoteldetails['id']; ?>/roompics/<?php echo $image['category_id']; ?>/<?php echo $image['gallery']; ?>" alt="Hyderbad" title="Hyderabad" class="image_size img-responsive center-block" />
           <?php
         }
         elseif($image['sub_category_id']!=NULL)
         {
          ?>
          <img style="padding-top: 10px;" src="<?php echo base_url(); ?>gallery/<?php echo $hoteldetails['id']; ?>/subroompics/<?php echo $image['sub_category_id']; ?>/<?php echo $image['gallery']; ?>" alt="Hyderbad" title="Hyderabad" class="image_size img-responsive center-block" />
          <?php
         }
         else
         {
          ?>
        
         <img style="padding-top: 10px;" src="<?php echo base_url(); ?>uploads/<?php echo $hoteldetails['hotel_pic']; ?>" alt="Hyderbad" title="Hyderabad" class="image_size img-responsive center-block" />
         <?php
       }
       ?>
      </div>  
                

                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div>
						<h3><?php echo $hoteldetails['hotel_name']; ?>
						 <?php 
                        for($i=1;$i<=$hoteldetails['hotel_grade']; $i++)
                        {
                            ?>
                           <i class="fa fa-star" style='color:#f5a623'></i>
                           <?php
                       }
                       ?></h3>
						

                        
                        <p style="font-size: 14px;"><i class="fas fa-map-marker-alt" style='color:blue'></i><?php echo $hoteldetails['hotel_address']; ?></p>
						

						<p>Your Stay Includes</p>
						<ul class="list-inline" style='font-size:12px'>
                        <?php
                                       $hotel=explode(',',$sub['amenities']);
                                     
                                       foreach($amenities as $amenity)
                                        {

                                       for($i=0; $i< count($hotel); $i++)
                                       {
                                    
                                            if($amenity['id']== str_replace(' ', '',$hotel[$i]))
                                            {
                                               
                                     ?>
							<li><span class="<?php echo $amenity['icon']; ?>" style='color:green'></span> <?php echo $amenity['name']; ?></li>
							<!-- <li><span class="glyphicon glyphicon-ok" style='color:green'></span> Free Wireless Internet</li>
							<li><span class="glyphicon glyphicon-ok" style='color:green'></span>   Continental Breakfast</li> -->
                            <?php
                        }
                    }
                }
                ?>
                    </div>
					
                 </div>    
        </div>
	  </div>	
	 	
				
	
	 
		<div class='col-md-12 col-sm-12 col-xs-12' style='background-color:#fafafa;padding:20px;'>
			<div class='col-md-3 col-sm-12 col-xs-12'>
				<p>Check-In Time</p>
				<h3><strong><span style="font-weight: 500"><?php echo date('Y-m-d',strtotime($details['check_in'])); ?></span></strong></h3>
			</div>
			<div class='col-md-3 col-sm-12 col-xs-12'>
				<p>Check-Out Time</p>
				<h3><strong><span style="font-weight: 500"><?php echo date('Y-m-d',strtotime($details['check_out'])); ?></span></strong></h3>
			</div>
			<div class='col-md-3 col-sm-12 col-xs-12'>
				<p><?php echo $details['no_of_persons']; ?> Adults</p>
				<p style='margin-top:0px '>in <?php echo $details['no_of_rooms']; ?>  Room for <?php echo $details['no_of_days']; ?> Night</p>
			</div>
			<div class='col-md-3 col-sm-12 col-xs-12'>
				<p style='color:red'>Non Refundable</p>
				<a href='#' data-toggle="modal" data-target="#myModal" style='color: blue !important'>Booking&Cancellation </a>
			</div>		
		</div>
	 	
	

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Booking & Cancellation</h4>
        </div>
        <div class="modal-body">
     <!--  
      <?php 
      print_r($sub); 
      ?> -->
          <p><?php echo $sub['cancellation_policy']; ?></p>
         
      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	
	
				
                <div class="col-md-12 col-sm-12 col-xs-12" style=" ">
                  
                   
                  

                    <h3 style="padding-top: 20px"><?php echo $sub['name']; ?> Room</h3>
                    <p style="font-size: 12px;">
                        <?php
                        $explode=array(',',$sub['amenities']);
                        for($j=0; $j<count($explode); $j++)
                        {
                        foreach($amenities as $amenity)
                        {
                           if($amenity['id']==str_replace(' ','',$explode[$j]))
                           {
                            echo $amenity['name'];
                            echo " ";
                           }
                        }
                    }
                
                    ?>
                    </p>
                   
              
                </div>
			    
           

            <div class="col-md-5" id='traveller' style="border: 1px solid lightgray;border-radius:5px;padding: 5px 7px;display:none">
                <div class="row">
                    <span style="font-size: 18px !important; margin-left:5%; ">Contact Info</span>
                </div>
<form action="<?php echo base_url()?>index.php/reservation/create" id="paymentformsubmit"  method="post">
<!-- //<input type="hidden" name="id" value="<?php echo $details['id']; ?>" /> -->
                <input type="hidden" name="hotel_id" value="<?php echo $details['hotel_id'] ?>"/>
                <input type="hidden" name="category_id" value="<?php echo $details['category_id'] ?>"/>
                 <input type="hidden" name="sub_category_id" value="<?php echo $details['sub_category_id'] ?>"/>
                <input type="hidden" name="no_of_rooms" value="<?php echo $details['no_of_rooms'] ?>"/>
                <input type="hidden" name="no_of_persons" value="<?php echo $details['no_of_persons'] ?>"/> 
                <input type="hidden" name="check_in" value="<?php echo $details['check_in'] ?>"/>
                <input type="hidden" name="check_out" value="<?php echo $details['check_out'] ?>"/>
                <input type="hidden" name="price" value="<?php echo $details['price'] ?>"/>
                <input type="hidden" name="tax" value="<?php echo $details['tax'] ?>"/>
                <input type="hidden" name="total_price" value="<?php echo $details['total_price'] ?>"/> 
                <input type="hidden" name="no_of_days" value="<?php echo $details['no_of_days'] ?>"/>                
                               
                <input type="hidden" name="user_id" value="<?php if($this->session->userdata('is_logged_in')){
                    echo $this->session->userdata('login_id');
                } ?>"/>
                
                
                
                
                
                <div class="row" style="padding-top:30px;">
                    <span style="font-size: 16px !important; margin-left:5%;" >Traveller Mobile No</span>
                </div>

                <div class="row" style="padding-top:10px; margin-left:2.5%;">
                    <input type="text" style="width:90%; height:40px;" placeholder="Traveler Mmobile Number.." name="guest_name" id="guestname" required>
                </div>

                <div class="row" style="padding-top:40px; padding-bottom:15px; margin-left:2.5%; ">
                    <button type="submit" id="paymentproceed" style="background-color: #8dc53f;padding: 10px 30px;border-radius:7px" >Proceed to payment</button>
                </div>
            </div>
            </form>
        
		
        
		
        <div class="row" style="">
		 <div class='col-md-12 col-sm-12 col-xs-12'>
            <div class="col-md-6" style=" padding-left: 2%; padding-bottom:30px;">
                <span style="font-size: 18px !important;"> Inclusion</span>
                <ul style="font-size: 12px !important;">
                    <li> Free Wi-Fi</li>
                    <li> Complimentary stay for children under 5 without extra bed</li>
                    <li>All Applicable Taxes</li>
                </ul>
				 <!-- <form  style="font-size: 12px !important;">
					<div class="radio">
					  <label><input type="radio" name="optradio">Apply coupon GOINTH. Get upto 40% OFF on Int'l Hotels. T&C apply <a href='' style='color:#5ad1f6'>Know more</a></label>
					</div>
					<div class="radio">
					  <label><input type="radio" name="optradio">Apply coupon HSBCINTHOT. Use a HSBC Credit Card and get upto 40% OFF. T&C apply  <a href='' style='color:#5ad1f6'>Know more</a></label>
					</div>
					<div class="radio">
					  <label><input type="radio" name="optradio">I have a Promocode</label>
					</div>
				  </form> -->
            </div>
			<div class="col-md-4" style=" padding-left: 2%; padding-bottom:30px;">
				<div>
					<h3><strong>Booking Details</strong></h3>
					  <div class="card">
                                                      
                                    <div class="large">
                                      
                                            <div class="col-md-9 content_list" style=''>
                                                <div class="left">
                                                     <p>Rooms</p>                                           
                                                </div>
                                               
                                            </div>
											 <div class="col-md-3">
                                                      <p><?php echo $details['no_of_rooms']; ?></p>
                                                </div>
                                       <hr width='100%'>

                                            <div class="col-md-9 content_list">
                                                <div class="left">
                                                     <a href='#' data-toggle="modal" data-target="" ><p>Guest</p></a>                                           
                                                </div>
                                                
												
												<div class="modal fade" id="guestModal" role="dialog">
												<div class="modal-dialog">
												
												  <!-- Modal content-->
												  <div class="modal-content">
													<div class="modal-header">
													  <button type="button" class="close" data-dismiss="modal">&times;</button>
													  <h4 class="modal-title">Guest Details</h4>
													</div>
													<div class="modal-body">
													  <p>Guest Name</p>
													  <p>Guest EmailID</p>
													  <p>Guest Mobile Number</p>
													</div>
													<div class="modal-footer">
													  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>
												  </div>
												  
												</div>
											  </div>
												
												
												
                                            </div>
											<div class="col-md-3">
                                                      <p><?php echo $details['no_of_persons']; ?></p>
                                                </div>
                                         <hr width='100%'> 
                                      

                                            <div class="col-md-9 content_list">
                                                 <div class="left">
                                                     <p>Base Price</p>                                           
                                                </div>
                                               
                                            </div>
											 <div class="col-md-3">
                                                      <p>₹<?php echo $details['price'] ;?></p>
                                                </div>
                                          <hr width='100%'> 
                                       
                                            <div class="col-md-9">
                                                <div class="left">
                                                     <p>Charges</p>                                           
                                                </div>
                                                
                                            </div>
											<div class="col-md-3">
                                                      <p>₹<?php echo $details['tax']; ?></p>
                                                </div>
                                         <hr width='100%'>
                                        
                                            <div class="col-md-9">
                                                <div class="left">
                                                     <p>Nights</p>                                           
                                                </div>
                                                
                                            </div>
											<div class="col-md-3">
                                                      <p><?php echo $details['no_of_days']; ?></p>
                                                </div>

                                         <hr width='100%'>
                                            <div class="col-md-9">
                                                <div class="left">
                                                     <h3><strong>Total</strong></h3>                                           
                                                </div>
                                               
                                            </div>
											 <div class="col-md-3">
                                                      <p><strong>₹<?php echo $details['total_price']; ?></strong></p>
                                                </div>
                                      
                                       <hr width='100%'>
                                         
                                    </div>
                                </div>
				</div>
				
            </div>
		 </div>	
        </div>
		
		
   
	
	
	 <div class='col-md-12 col-xs-12 col-sm-12'>	

		 <?php   if (!$this->session->userdata('is_logged_in')) {
            
         ?>
        <h3><strong>Guest Details </strong>-OR- <a href='' data-toggle="modal" data-target="#login"><button class='btn btn-danger' id=''>Sign In</button></a> for easy access and to add more benefits.</h3>
    <?php }  else { ?>
    <h3><strong>Guest Details </strong></h3>
    <?php } ?>
		
		<div class='col-md-6 col-md-offset-4'>
		 <ul class="pagination" style='border-radius:50px'>
			<li><a href="#personal1" id='personal' >Personal</a></li>
			<li><a href="#business1" id='business' >Business</a></li>			
		  </ul>
		</div>  
		   
		 
		<div id='personal1' class='col-md-8 col-md-offset-2 active' >		 
		  <form method='post' action='<?php echo base_url()?>index.php/reservation/create'>
			
			 <input type="hidden" name="hotel_id" value="<?php echo $details['hotel_id'] ?>"/>
                <input type="hidden" name="category_id" value="<?php echo $details['category_id'] ?>"/>
                <input type="hidden" name="sub_category_id" value="<?php echo $details['sub_category_id'] ?>"/>
                <input type="hidden" name="no_of_rooms" value="<?php echo $details['no_of_rooms'] ?>"/>
                <input type="hidden" name="no_of_persons" value="<?php echo $details['no_of_persons'] ?>"/> 
                <input type="hidden" name="check_in" value="<?php echo $details['check_in'] ?>"/>
                <input type="hidden" name="check_out" value="<?php echo $details['check_out'] ?>"/>
                <input type="hidden" name="price" value="<?php echo $details['price'] ?>"/>
                <input type="hidden" name="tax" value="<?php echo $details['tax'] ?>"/>
                <input type="hidden" name="total_price" value="<?php echo $details['total_price'] ?>"/> 
                <input type="hidden" name="no_of_days" value="<?php echo $details['no_of_days'] ?>"/>                
                               
                <input type="hidden" name="user_id" value="<?php if($this->session->userdata('is_logged_in')){
                    echo $this->session->userdata('login_id');
                } ?>"/>
			
			
			<?php
            $i=1;
            $no=  $details['no_of_persons'];
            for($i=1; $i<= 1; $i++)
            {
            ?>
			
				<div class="input-group" >
				<label>Guest Name </label>
				 <div class='col-md-12' style='padding:0px !important'> 
				  <!-- <div class='col-md-2' style='padding:0px !important'>
				  <select class="custom-select" id="inputGroupSelect02" style='width:100%;padding:6px' name="sur[]">
					<option selected>Mr</option>
					
					<option value="1">Mrs</option>
					<option value="2">Ms</option>
				  </select>
				  </div> -->
				  <div class="col-md-12 input-group-append" style='padding:0px !important'>
					<input type="text" class="form-control" id="guest_name" placeholder="Enter First Name" name="guest_name[]" required/>
				  </div>
				  
				 </div> 
				  
				</div>
				<!-- <a id='add_guest' style='color:#43baed;margin-left:60px'>Add Guest User <i class="far fa-question-circle" title='please click to add guest user'></i></a> -->
				
			<!-- 	<div id='guest1'  style='display:none'>
					<div class="input-group" >
				<label>Guest Name</label>
				 <div class='col-md-12' style='padding:0px !important'> 
				  <div class='col-md-2' style='padding:0px !important'>
				  <select class="custom-select" id="inputGroupSelect02" style='width:100%;padding:6px'>
					<option selected>Mr</option>
					
					<option value="1">Mrs</option>
					<option value="2">Ms</option>
				  </select>
				  </div>
				  <div class="col-md-10 input-group-append" style='padding:0px !important'>
					<input type="text" class="form-control" id="guest_name" placeholder="Enter First Name" name="guest_name"/>
				  </div>				 
				 </div> 
				  
				</div>
				</div> -->
				

                   <div class="form-group">
                        <label>Email Address </label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email Address" name="email[]" style='width:100% !important' required>
                    </div>
					<div class="form-group">
                        <label>Mobile No </label>
						<div class='col-md-12' style='padding:0px !important'>
                       <!--  <div class='col-md-3' style='padding:0px !important'>
				  <select class="custom-select" id="inputGroupSelect02" style='width:100%;padding:6px'>
					<option selected>India(+91)</option>
					
					<option value="1">Germany(+49)</option>
					<option value="2">Australia(+61)</option>
				  </select>
				  </div> -->
				  <div class="col-md-12 input-group-append" style='padding:0px !important'>
					<input type="number" class="form-control" id="mobile" placeholder="Enter Mobile No" name="mobile[]" required />
				  </div>
						
                    </div>
					<!-- <h6>Please confirm the correct country code is entered</h6> -->
					</div>
                    <?php

                }
                ?>
                   <?php   if (!$this->session->userdata('is_logged_in')) { ?>
                   <div align='center' style="margin-top: 50px;">
                          <option class='btn btn-success' data-toggle="modal" data-target="#login" > Login To Proceed</option> 
                    </div>
                    <?php
                  }
                  else
                  {
                  ?>
                     <div align='center' style="margin-top: 50px;">
                          <option class='btn btn-success' data-toggle="modal" data-target="#personalModal" > Make Payment</option> 
                    </div>
                    <?php
                  }
                  ?>
					
					<div class="modal fade form-group" id="personalModal" role="dialog">
						<div class="modal-dialog">
						
						  <!-- Modal content-->
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							  <h4 class="modal-title">Select Payment</h4>
							</div>
							<div class="modal-body">
								<div>
								 <p style='display:inline'>
								 <input type="radio" name="online_payment" value="online_payment"> Online Payment</p>
								 <p class='pull-right' style='margin:0px '>
								  <input type="radio" name="online_payment" value="pay_at_hotel"> Pay At Hotel</p>
								</div>
							</div>
							<div class="modal-footer">
							 <div align='center'>
							  <button type="submit" class="btn btn-success">Submit</button>
							 </div> 
							</div>
						  </div>
						  
						</div>
					  </div>
					
					
		  </form>
		</div>
		<!-- business -->
		<div id='business1' style='margin-top:50px;margin-left:50px;display:none'>
			<form method='post' action='<?php echo base_url()?>index.php/reservation/create'>
			
			 <input type="hidden" name="hotel_id" value="<?php echo $details['hotel_id'] ?>"/>
                <input type="hidden" name="category_id" value="<?php echo $details['category_id'] ?>"/>
                <input type="hidden" name="sub_category_id" value="<?php echo $details['sub_category_id'] ?>"/>
                <input type="hidden" name="no_of_rooms" value="<?php echo $details['no_of_rooms'] ?>"/>
                <input type="hidden" name="no_of_persons" value="<?php echo $details['no_of_persons'] ?>"/> 
                <input type="hidden" name="check_in" value="<?php echo $details['check_in'] ?>"/>
                <input type="hidden" name="check_out" value="<?php echo $details['check_out'] ?>"/>
                <input type="hidden" name="price" value="<?php echo $details['price'] ?>"/>
                <input type="hidden" name="tax" value="<?php echo $details['tax'] ?>"/>
                <input type="hidden" name="total_price" value="<?php echo $details['total_price'] ?>"/> 
                <input type="hidden" name="no_of_days" value="<?php echo $details['no_of_days'] ?>"/>                
                               
                <input type="hidden" name="user_id" value="<?php if($this->session->userdata('is_logged_in')){
                    echo $this->session->userdata('login_id');
                } ?>"/>
			
			
			
			  <div class='col-md-12' style='background-color:#e4e4e4;padding:10px !important;    margin-left: -30px;'>
			  
			  	<h3>Business Profile</h3>
                
                  <div class='col-md-12' style='padding:0px !important;margin-top:10px'>
				    <div class="col-md-4 form-group" style='padding:0px !important'>
                        <label>GST Number</label>
                        <input type="text" class="form-control" id="gst_num" placeholder="EG:2AA0000AA547" name="gst_num" required>
                    </div>
					<div class="col-md-4 form-group">
                        <label>Company Name</label>
                        <input type="text" class="form-control" id="company_name" placeholder="Enter Company Name" name="company_name" required>
                    </div>
					<div class="col-md-4 form-group">
                        <label>Business Email ID</label>
                        <input type="email" class="form-control" id="business_mail" placeholder="Enter Business Email " name="business_mail" style='width: 97% !important' required />
                    </div>
				  </div>
				  <div class="col-md-12 form-group" style='padding:0px'>
                        <label>Company Address</label>
                        <input type="text" class="form-control" id="company_add" placeholder="Company Address" name="company_add" style='width: 97% !important' required>
                    </div>
					<!-- <div class="col-md-12 form-group" style='padding:0px'>
                        <label>Send Invoice to admin(Optional)</label>
                        <input type="text" class="form-control" id="company_add" placeholder="Admin EmailId" name="company_add" style='width: 97% !important' />
                    </div> -->
					<div class='col-md-12' style='padding:0px !important'>
				    <div class="col-md-4 form-group" style='padding:0px !important'>
                        <label>Phone Number</label>
                        <input type="text" class="form-control" id="phn_num" placeholder="+91" name="phone_num" required>
                    </div>
					<div class="col-md-4 form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" id="country" placeholder="India " name="country" required />
                    </div>
					<div class="col-md-4 form-group">
                        <label>State</label>
                        <input type="text" class="form-control" id="state" placeholder="Telangana" name="state" style='width: 97% !important' required />
                    </div>

				  </div>
				 
			  </div>
			  
			  <br>
			  <div class='col-md-8 col-md-offset-2'>

            <?php
            $i=1;
            $no= $details['no_of_persons']; 
            for($i=1; $i<= 1; $i++)
            {
            ?>

				<div class="input-group" style='margin-top:50px'>
				<label>Guest Name</label>
				 <div class='col-md-12' style='padding:0px !important'> 
				  <div class='col-md-2' style='padding:0px !important'>
				  <select class="custom-select" id="inputGroupSelect02" style='width:100%;padding:6px'>
					<option selected>Mr</option>
					
					<option value="1">Mrs</option>
					<option value="2">Ms</option>
				  </select>
				  </div>
				  <div class="col-md-10 input-group-append" style='padding:0px !important'>
					<input type="text" class="form-control" id="guest_name" placeholder="Enter First Name" name="guest_name"  />
				  </div>

				 </div> 
				  
				</div>
				<!-- <a href='#guest1' id='add_guest' style='color:#43baed;margin-left:60px'>Add Guest User <i class="far fa-question-circle" title='please click to add guest user'></i></a> -->
				
				<div id='guest1'  style='display:none'>
					<div class="input-group" >
				<label>Guest Name </label>
				 <div class='col-md-12' style='padding:0px !important'> 
				 <!--  <div class='col-md-2' style='padding:0px !important'>
				  <select class="custom-select" id="inputGroupSelect02" style='width:100%;padding:6px' name="sur[]">
					<option selected>Mr</option>
					
					<option value="1">Mrs</option>
					<option value="2">Ms</option>
				  </select>
				  </div> -->
				  <div class="col-md-12 input-group-append" style='padding:0px !important'>
					<input type="text" class="form-control" id="guest_name" placeholder="Enter First Name" name="guest_name[]" required />
				  </div>
				 </div> 
				  
				</div>
				</div>
				

                   <div class="form-group">
                        <label>Email Address </label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email Address" name="email[]" style='width:100% !important' required>
                    </div>
					<div class="form-group">
                        <label>Mobile No </label>
						<div class='col-md-12' style='padding:0px !important'>
                      <!--   <div class='col-md-3' style='padding:0px !important'>
				  <select class="custom-select" id="inputGroupSelect02" style='width:100%;padding:6px'>
					<option selected>India(+91)</option>
					
					<option value="1">Germany(+49)</option>
					<option value="2">Australia(+61)</option>
				  </select>
				  </div> -->
				  <div class="col-md-12 input-group-append" style='padding:0px !important'>
					<input type="number" class="form-control" id="mobile" placeholder="Enter Mobile No" name="mobile[]" required />
				  </div>
						
                    </div>
					<!-- <h6>Please confirm the correct country code is entered</h6> -->
					</div>
                    <?php
                }
                    ?>
                     <?php   if (!$this->session->userdata('is_logged_in')) { ?>
                   <div align='center' style="margin-top: 50px;">
                          <option class='btn btn-success' data-toggle="modal" data-target="#login" > Login To Proceed</option> 
                    </div>
                    <?php
                  }
                  else
                  {
                  ?>
                     <div align='center' style="margin-top: 50px;">
                          <option class='btn btn-success' data-toggle="modal" data-target="#businessModal" > Make Payment</option> 
                    </div>
                    <?php
                  }
                  ?>
					
					<div class="modal fade form-group" id="businessModal" role="dialog">
						<div class="modal-dialog">
						
						  <!-- Modal content-->
							<div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							  <h4 class="modal-title">Select Payment</h4>
							</div>
							<div class="modal-body">
								<div>
								 <p style='display:inline'>
								 <input type="radio" name="online_payment" value="online_pay"> Online Payment</p>
								 <p class='pull-right' style='margin:0px '>
								  <input type="radio" name="online_payment" value="hotel_pay"> Pay At Hotel</p>
								</div>
							</div>
							<div class="modal-footer">
							 <div align='center'>
							  <button type="submit" class="btn btn-success">Submit</button>
							 </div> 
							</div>
						  </div>
						  
						</div>
					  </div>
					
				</div>	
			</form>
		</div>
	 </div>	
	
 </div>	
</div>	

</div>

<?php
// }
?>
   <?php include("footer.php"); ?>
  
   
   <script> 
	$("#personal").click(function () {
        $("#business1").css("display","none")
        $("#personal1").css("display","block")
        // $("#").show();   
    });

    $("#business").click(function () {
        $("#business1").css("display","block")
        $("#personal1").css("display","none")
        // $("#").show();   
    });
	</script>
	
	<script>
		$("#add_guest").click(function () {
			
			$("#guest1").css("display","block")
			// $("#").show();   
    });
	</script>
	
	
    <script>
        $(document).ready(function(){
    $('#paymentproceed').attr('disabled',true);

    $('#guestname').keyup(function(){
        if($(this).val().length !=0){
            $('#paymentproceed').attr('disabled', false);
        }
        else
        {
            $('#paymentproceed').attr('disabled', true);        
        }
    })
});
    $('#paymentformsubmit').submit(function() {
        var payment = "<?php echo $this->session->userdata('is_logged_in'); ?>";
        if(payment==''||payment==null){

            $('#login').modal('show');
            return false;
        }else{
           return true;

        }
    });
    
    </script>

</body>

</html>