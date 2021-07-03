<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<style>
     #bookinginfo,table, th, td {
        border: 1px solid #eae6e6;
  border-collapse: collapse;
    }
    #bookinginfo,th, td {
  padding: 5px;
  text-align: left;    
}
@media print {
  body * {
    visibility: hidden;
  }
  #section-to-print, #section-to-print * {
    visibility: visible;
  }
  #section-to-print {
    position: absolute;
    left: 0;
    top: 0;
  }
/*   #section-to-print:before {*/
/*    content: url("https://res.cloudinary.com/mallinamala/image/upload/v1617777694/logo_dxdulq.png");*/
/*  }*/
/*  img {*/
       
/*        width: 50px !important;*/
/*}*/
}
</style>
<div class="container">
<div class="row">
									<div class="col-xl-4">
										<!--begin::Mixed Widget 2-->
										<div class="card card-custom bg-gray-100 card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 bg-primary py-5">
												<h3 class="card-title font-weight-bolder text-white">Stats</h3>
											
											</div>
											<!--end::Header-->
					<!--begin::Body-->
											<div class="card-body p-0 position-relative overflow-hidden">
												<!--begin::Chart-->
												<div id="kt_mixed_widget_2_chart" class="card-rounded-bottom bg-primary" style="height: 200px"></div>
												<!--end::Chart-->
												<!--begin::Stats-->
												<div class="card-spacer mt-n25">
													<!--begin::Row-->
													<div class="row m-0">
													    <?php
						         if ($this->session->userdata('is_logged_in')) {
						         	if($this->session->userdata('user_type')==1 || $this->session->userdata('user_type')==2)
						         	{
						         		?>
														<div class="col bg-white px-6 py-8 rounded-xl mr-7 mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-info d-block my-2">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/Media/Equalizer.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
																		<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
																		<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
																		<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="<?php echo base_url();?>index.php/hotel/" class="text-info font-weight-bold font-size-h6">Total Hotels</a>
														</div>
														<?php
						    }
						}
						    ?>
														<div class="col bg-white px-6 py-8 rounded-xl mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/Communication/Add-user.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
																		<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<?php
						         if ($this->session->userdata('is_logged_in')) {
						         	if($this->session->userdata('user_type')==1 || $this->session->userdata('user_type')==2)
						         	{
						         		?>
															<a href="<?php echo base_url();?>index.php/reservation/" class="text-warning font-weight-bold font-size-h6 mt-2">Bookings</a>
															  <?php
						        }
						        else
						        {
						        	?>
						        		<a href="<?php echo base_url();?>index.php/reservation/reservations_by_agent" class="text-warning font-weight-bold font-size-h6 mt-2">Bookings</a>
						        	
						        	<?php
						        }
						    }

						        ?>
														</div>
													</div>
													<!--end::Row-->
													<!--begin::Row-->
													<div class="row m-0">
													     <?php
						         if ($this->session->userdata('is_logged_in')) {
						         	if($this->session->userdata('user_type')==1 )
						         	{
						         		?>
														<div class="col bg-white px-6 py-8 rounded-xl mr-7">
															<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/Design/Layers.svg-->
													
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="<?php echo base_url();?>index.php/user_detail/" class="text-danger font-weight-bold font-size-h6 mt-2">Users</a>
														</div>
														<?php
						    }
						}
						    
						       
						         if ($this->session->userdata('is_logged_in')) {
						         	if($this->session->userdata('user_type')==1)
						         	{
						         		?>
														<div class="col bg-white px-6 py-8 rounded-xl">
															<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/Communication/Urgent-mail.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
																		<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="<?php echo base_url();?>index.php/travel_agent/" class="text-success font-weight-bold font-size-h6 mt-2">Travel Agents</a>
															<br>
															<!--<?php foreach($agents as $n){ ?>-->
						         <!--     <span class="info-box-number"><?php echo $n; ?></span>-->
						         <!--     <?php } ?>-->
						              
														</div>
														 <?php
						    }
						}
						   if ($this->session->userdata('is_logged_in')) {
						         	if($this->session->userdata('user_type')==4)
						         	{
						         		?>
						         			<div class="col bg-white px-6 py-8 rounded-xl">
															<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/Communication/Urgent-mail.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
																		<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="<?php echo base_url();?>index.php/travel_agent/amount_gained" class="text-success font-weight-bold font-size-h6 mt-2">Earnings</a>
															 <?php
						           foreach($amount_gained as $rev)
						           {
						           	?>
						           	<br>
						              <!--<span class="info-box-number"><?php echo $rev['count(*)']*50; ?></span>-->
						             
						           <?php
						       }
						       ?>
														</div>
														 <?php
						    }
						}
						    ?>
													</div>
													<!--end::Row-->
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Body-->
							</div>
							<!--end::Container-->
						</div>
					 <?php
						         if ($this->session->userdata('is_logged_in')) {
						         	if($this->session->userdata('user_type')==1)
						         	{
						         		?>
						<div class="col-xl-8">
						       <div class="col-xl-12">
						           <div id="myChart" style="width:100%; height:500px;"></div>
										
									</div>
						</div>
							<?php
						    }
						}
						    ?>
						<!--end::Entry-->
						</div>
						 <?php
						         if ($this->session->userdata('is_logged_in')) {
						         	if($this->session->userdata('user_type')==1)
						         	{
						         		?>
										<!--end::Mixed Widget 2-->
										<div class="row">
										    <div class="col-xl-12">
										        <!--begin::Advance Table Widget 5-->
								<div class="card card-custom gutter-b">
									<!--begin::Header-->
										<div class="card-header">
										<div class="card-title">
											<span class="card-icon">
												<i class="flaticon2-list-3 text-primary"></i>
											</span>
											<h3 class="card-label">Bookings</h3>
										</div>
										
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body py-0" style="margin-top:10px">
										<!--begin::Table-->
											<div class="table-responsive">
													<table class="table table-head-custom table-vertical-center table-bordered" id="booking_table">
														<thead>
															<tr>
												
                                                <th>Reservation Id</th>
                                                <th>Hotel</th>
                                              <th>Room Type</th>
                                                <th>Price</th>
                                                <th>check in</th>
                                                <th>Check out</th>
                                                <th>Payment Type</th> 
                                                
                                              
                                                <th>Booked On</th>
                                                <th>Status</th>
                                                <th>Action</td>
															</tr>
														</thead>
													   <tbody>
                                            
                                              <?php
                                                $reservation = $this->db->get_where('reservations');
                                                
                                               
                                                // 	$i=1;
                                                foreach ($reservation->result() as $row){
// {
//     echo $row->name;
// }
                                                

										
                                           
        //                                       foreach($travel_agent as $rev){ 
											   
											   ?>
                                                <tr>
                                                 
                                                     <td><?php echo $row->reservation_id; ?>&nbsp; <?php
                                                    $booking_date=$row->created_at;
                                                    $current_date=date("Y-m-d h:i:sa");
                                                   $timestamp1 = strtotime($booking_date);
                                                   $timestamp2= strtotime($current_date);

$day1=date('d', $timestamp1);
// echo $day;
$day2=date('d', $timestamp2);
// echo $day2;
if($day1==$day2){ 
?>
                                                     <span style="font-size:8px" class="label label-lg label-light-danger label-inline">Recent</span>
                                                    <?php } else  { ?>
                                                    
                                                     
                                                    
                                                    
                                                       <?php } ?></td>
                                                    <td>   <?php
                                                $hotel = $this->db->get_where('hotels',array('id' => $row->hotel_id));
                                                // 	$i=1;
                                                foreach ($hotel->result() as $hot){
                                              //  echo $hot->hotel_name;

											   ?><?php echo $hot->hotel_name; ?></td>
                                                   
                                                     <?php } ?>
                                                    <td><?php
                                                $roomtype = $this->db->get_where('room_categories',array('id' => $row->category_id));
                                                // 	$i=1;
                                                foreach ($roomtype->result() as $rt){
                                              //  echo $hot->hotel_name;

											   ?><?php echo $rt->category_name; ?> x(<?php echo $row->no_of_rooms; ?>)</td> <?php } ?>
                                                    <td><?php echo $row->total_price; ?></td>
                                                    <td><?php echo $row->check_in; ?></td>
                                                    <td><?php echo $row->check_out; ?></td>
                                                    <td><?php echo $row->payment_type; ?></td>
                                                  
                                                     <td ><?php echo $row->created_at; ?></td>
                                                   
                                                     <td><?php
                                                     if($row->booking_status=="cancelled") { ?>
                                                     <span class="label label-lg label-light-danger label-inline">Cancelled</span>
                                                    <?php } else  { ?>
                                                    
                                                     
                                                    
                                                     <span class="label label-lg label-light-success label-inline">Booked</span>
                                                       <?php } ?>
                                                     </td>
                                                   
                                                     <td>
                                                    <?php if($row->booking_status == "cancelled") { ?>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModalSizeLg<?php echo $row->id; ?>"><span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-19-122603/theme/html/demo13/dist/../src/media/svg/icons/General/Visible.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span></a>
<div class="modal fade" id="exampleModalSizeLg<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content print-content-only" id="section-to-print">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Booking Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
              

<table class="table" style="width:100%;" id="bookinginfo">
  <tr>
    <th>Booking ID:</th>
    <td><?php echo $row->reservation_id; ?></td>
    <th>Guest Name:</th>
    <td><?php echo $row->guest_name; ?></td>
    
  </tr>
  
  <tr>
    <th rowspan="2">Contact Info:</th>
    <td><?php echo $row->guest_numbers; ?></td>
    <th rowspan="2">Booking Price:</th>
    <td>₹ <?php echo $row->price; ?></td>
  </tr>
  <tr>
   
    <td><?php echo $row->guest_email; ?></td>
     <td>₹ <?php echo $row->tax; ?>&nbsp;<span style="color:red">( Total : ₹ <?php echo $row->total_price; ?> )</span></td>
  </tr>
   <tr>
    <th>Hotel Name:</th>
    <td><?php echo $hot->hotel_name; ?></td>
    <th>Room Type:</th>
    <td><?php echo $rt->category_name; ?> x(<?php echo $row->no_of_rooms; ?>)</td>
    
  </tr>
  <tr>
      <th>Checkin:</th>
    <td><?php echo $row->check_in; ?></td>
    <th>Checkout:</th>
    <td><?php echo $row->check_out; ?></td>
  </tr>
  <tr>
      <th>Mode of Payment:</th>
    <td><?php echo $row->payment_type; ?></td>
    <th>Booking Daate:</th>
    <td><?php echo $row->created_at; ?></td>
  </tr>
 
 
</table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button onclick="window.print();" type="button" class="btn btn-primary font-weight-bold">Print</button>
            </div>
        </div>
    </div>
</div>
                                                    <?php } else  { ?>
                                                      <a ref="#" data-toggle="modal" data-target="#exampleModalSizeLg<?php echo $row->id; ?>"  ><span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-19-122603/theme/html/demo13/dist/../src/media/svg/icons/General/Visible.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span></a>
<div class="modal fade" id="exampleModalSizeLg<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content" id="section-to-print">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Booking Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
              

<table class="table" style="width:100%;" id="bookinginfo">
  <tr>
    <th>Booking ID:</th>
    <td><?php echo $row->reservation_id; ?></td>
    <th>Guest Name:</th>
    <td><?php echo $row->guest_name; ?></td>
    
  </tr>
  
  <tr>
    <th rowspan="2">Contact Info:</th>
    <td><?php echo $row->guest_numbers; ?></td>
    <th rowspan="2">Booking Price:</th>
    <td>₹ <?php echo $row->price; ?></td>
  </tr>
  <tr>
   
    <td><?php echo $row->guest_email; ?></td>
     <td>₹ <?php echo $row->tax; ?>&nbsp;<span style="color:red">( Total : ₹ <?php echo $row->total_price; ?> )</span></td>
  </tr>
   <tr>
    <th>Hotel Name:</th>
    <td><?php echo $hot->hotel_name; ?></td>
    <th>Room Type:</th>
    <td><?php echo $rt->category_name; ?> x(<?php echo $row->no_of_rooms; ?>)</td>
    
  </tr>
  <tr>
      <th>Checkin:</th>
    <td><?php echo $row->check_in; ?></td>
    <th>Checkout:</th>
    <td><?php echo $row->check_out; ?></td>
  </tr>
  <tr>
      <th>Mode of Payment:</th>
    <td><?php echo $row->payment_type; ?></td>
    <th>Booking Daate:</th>
    <td><?php echo $row->created_at; ?></td>
  </tr>
 
 
</table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" onclick="window.print();" class="btn btn-primary font-weight-bold">Print</button>
            </div>
        </div>
    </div>
</div>
                                                    
                                                    <a class="open-AddBookDialog" href="#" data-id="<?php echo $row->id; ?>" data-toggle="modal" data-target="#exampleModalCenter">
<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-19-122603/theme/html/demo13/dist/../src/media/svg/icons/Navigation/Close.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
            <rect x="0" y="7" width="16" height="2" rx="1"/>
            <rect opacity="0.3" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000) " x="0" y="7" width="16" height="2" rx="1"/>
        </g>
    </g>
</svg><!--end::Svg Icon--></span></a>
                                                    <?php } ?>
                                                    </td>
                                                </tr>
                                              <?php } ?>
                                           
                                        </tbody>
													</table>
												
												</div>
										<!--end::Table-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Advance Table Widget 5-->
								
										    </div>
										</div>
											<?php
						    }
						}
						    ?>
									</div>
									 <script>
							     $(document).ready(function() {
                                    $('#booking_table').DataTable();
                                } );
							    </script>
							    	 <script>
							     $(document).ready(function() {
                                    $('#kt_advance_table_widget_1').DataTable();
                                } );
							    </script>
							    
							    <!-- Button trigger modal -->

<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "u364384312_admin2", "@B!t@G8t", "u364384312_olakite_noho");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if (isset($_POST['submit'])) 
             {
                
// Attempt insert query execution
// $sql = "INSERT INTO reservations (booking_status, reason, updated_at) VALUES ('Peter', 'Parker', 'peterparker@mail.com') WHERE id=";
$sql = "UPDATE reservations SET booking_status='cancelled',reason='".$_POST['reason']."' WHERE id='".$_POST['bookId']."'";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
    echo"<script type='text/javascript'>
                               window.location.href ='dashboard';</script>";
                            
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
 
// Close connection
mysqli_close($link);
?>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cancel Booking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Reason for Cancellation</label>
    <select name="reason" class="form-control" id="exampleFormControlSelect1">
      <option value="Changed my plan">Changed my plan</option>
      <option value="Booking by mistake">Booking by mistake</option>
      <option value="Others">Others</option>
     
    </select>
     <input type="hidden" name="bookId" id="bookId" value=""/>
    
  </div>
  <input type="submit" class="btn btn-primary" value="Submit" name="submit">
</form>
      </div>
      
    </div>
  </div>
</div>
<script>
    $(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
     $(".modal-body #bookId").val( myBookId );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
</script>
				
				<script>
google.charts.load('current',{packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
// Set Data
var data = google.visualization.arrayToDataTable([
  ['Price', 'Size'],
  [4,29],[3,28],[4,27],[80,9],[90,9],
  [100,9],[110,10],[120,11],
  [130,14],[140,14],[150,15]
]);
// Set Options
var options = {
  title: 'Hotel Bookings data',
  hAxis: {title: 'Date'},
  vAxis: {title: 'No.of Bookings'},
  legend: 'none'
};
// Draw
var chart = new google.visualization.LineChart(document.getElementById('myChart'));
chart.draw(data, options);
}
</script>					