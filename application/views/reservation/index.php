<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">-->

<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
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

<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							   
							    <div class="row" >
							        
							        <div class="col-xl-12">
										<!--begin::Advance Table Widget 1-->
										<div class="card card-custom card-stretch gutter-b">
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
											    <!--begin: Search Form-->
										<!--<form class="mb-15">-->
											
										<!--	<div class="row mb-8">-->
										<!--		<div class="col-lg-3 mb-lg-0 mb-6">-->
										<!--			<label>From Date:</label>-->
										<!--			<div class="input-daterange input-group" id="kt_datepicker">-->
										<!--				<input type="text" class="form-control datatable-input" name="start" placeholder="From" data-col-index="5" />-->
										<!--				<div class="input-group-append">-->
										<!--					<span class="input-group-text">-->
										<!--						<i class="la la-ellipsis-h"></i>-->
										<!--					</span>-->
										<!--				</div>-->
										<!--				<input type="text" class="form-control datatable-input" name="end" placeholder="To" data-col-index="5" />-->
										<!--			</div>-->
										<!--		</div>-->
											
										<!--	</div>-->
										<!--	<div class="row mt-8">-->
										<!--		<div class="col-lg-12">-->
										<!--		<button class="btn btn-primary btn-primary--icon" id="kt_search">-->
										<!--			<span>-->
										<!--				<i class="la la-search"></i>-->
										<!--				<span>Search</span>-->
										<!--			</span>-->
										<!--		</button>&#160;&#160; -->
										<!--		<button class="btn btn-secondary btn-secondary--icon" id="kt_reset">-->
										<!--			<span>-->
										<!--				<i class="la la-close"></i>-->
										<!--				<span>Reset</span>-->
										<!--			</span>-->
										<!--		</button></div>-->
										<!--	</div>-->
										<!--</form>-->
												<!--begin::Table-->
												<div class="table-responsive">
													<table class="table table-bordered table-hover" id="booking_table">
														<thead>
															<tr>
												
                                                <th>Reservation Id</th>
                                                <th>Hotel</th>
                                                <th>Room type</th>
                                                <!--<th>No of Rooms</th>-->
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
                                            
                                               <?php foreach($reservations as $rev){ ?>
                                                <tr>
                                                 
                                                     <td><?php echo $rev['reservation_id'] ?> 
                                                    <?php
                                                    $booking_date=$rev['created_at'];
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
                                                    
                                                     
                                                    
                                                    
                                                       <?php } ?>
                                                    
                                                    </td>
                                                    <td><?php echo $rev['name'] ?></td>
                                                    <td><?php echo $rev['catname'] ?> x(<?php echo $rev['no_of_rooms'] ?>)</td>
                                                    <!--<td></td>-->
                                                    <td>₹<?php echo $rev['total_price'] ?></td>
                                                    <td><?php echo $rev['check_in'] ?></td>
                                                    <td><?php echo $rev['check_out'] ?></td>
                                                    <td><?php echo $rev['payment_type'] ?></td>
                                                  
                                                     <td ><?php echo $rev['created_at'] ?></td>
                                                     <td><?php
                                                     if($rev['booking_status']=="cancelled") { ?>
                                                     <span class="label label-lg label-light-danger label-inline">Cancelled</span>
                                                    <?php } else  { ?>
                                                    
                                                     
                                                    
                                                     <span class="label label-lg label-light-success label-inline">Booked</span>
                                                       <?php } ?>
                                                     </td>
                                                    <td>
                                                    <?php if($rev['booking_status'] == "cancelled") { ?>
                                                    <a  href="#" data-toggle="modal" data-target="#exampleModalSizeLg<?php echo $rev['id']; ?>" data-id="<?php echo $rev['id']; ?>"><span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-19-122603/theme/html/demo13/dist/../src/media/svg/icons/General/Visible.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span></a>
<div class="modal fade" id="exampleModalSizeLg<?php echo $rev['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
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
    <td><?php echo $rev['reservation_id'] ?></td>
    <th>Guest Name:</th>
    <td><?php echo $rev['guest_name'] ?></td>
    
  </tr>
  
  <tr>
    <th rowspan="2">Contact Info:</th>
    <td><?php echo $rev['guest_numbers'] ?></td>
    <th rowspan="2">Booking Price:</th>
    <td>₹ <?php echo $rev['price'] ?></td>
  </tr>
  <tr>
   
    <td><?php echo $rev['guest_email'] ?></td>
     <td>₹ <?php echo $rev['tax'] ?>&nbsp;<span style="color:red">( Total : ₹ <?php echo $rev['total_price'] ?> )</span></td>
  </tr>
   <tr>
    <th>Hotel Name:</th>
    <td><?php echo $rev['name'] ?></td>
    <th>Room Type:</th>
    <td><?php echo $rev['catname'] ?> x(<?php echo $rev['no_of_rooms'] ?>)</td>
    
  </tr>
  <tr>
      <th>Checkin:</th>
    <td><?php echo $rev['check_in'] ?></td>
    <th>Checkout:</th>
    <td><?php echo $rev['check_out'] ?></td>
  </tr>
  <tr>
      <th>Mode of Payment:</th>
    <td><?php echo $rev['payment_type'] ?></td>
    <th>Booking Daate:</th>
    <td><?php echo $rev['created_at'] ?></td>
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
                                                      <a href="#" class="open-AddBookDialog1" data-toggle="modal" data-target="#exampleModalSizeLg<?php echo $rev['id']; ?>" data-id="<?php echo $rev['id']; ?>"><span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-19-122603/theme/html/demo13/dist/../src/media/svg/icons/General/Visible.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span></a>
<div class="modal fade" id="exampleModalSizeLg<?php echo $rev['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
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
    <td><?php echo $rev['reservation_id'] ?></td>
    <th>Guest Name:</th>
    <td><?php echo $rev['guest_name'] ?></td>
    
  </tr>
  
  <tr>
    <th rowspan="2">Contact Info:</th>
    <td><?php echo $rev['guest_numbers'] ?></td>
    <th rowspan="2">Booking Price:</th>
    <td>₹ <?php echo $rev['price'] ?></td>
  </tr>
  <tr>
   
    <td><?php echo $rev['guest_email'] ?></td>
     <td>₹ <?php echo $rev['tax'] ?>&nbsp;<span style="color:red">( Total : ₹ <?php echo $rev['total_price'] ?> )</span></td>
  </tr>
   <tr>
    <th>Hotel Name:</th>
    <td><?php echo $rev['name'] ?></td>
    <th>Room Type:</th>
    <td><?php echo $rev['catname'] ?> x(<?php echo $rev['no_of_rooms'] ?>)</td>
    
  </tr>
  <tr>
      <th>Checkin:</th>
    <td><?php echo $rev['check_in'] ?></td>
    <th>Checkout:</th>
    <td><?php echo $rev['check_out'] ?></td>
  </tr>
  <tr>
      <th>Mode of Payment:</th>
    <td><?php echo $rev['payment_type'] ?></td>
    <th>Booking Daate:</th>
    <td><?php echo $rev['created_at'] ?></td>
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
                                                    
                                                    <a class="open-AddBookDialog" href="#" data-toggle="modal" data-target="#exampleModalCenter" data-id="<?php echo $rev['id']; ?>">
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
										<!--end::Advance Table Widget 1-->
									</div>
								</div>
								<!--end::Row-->
							
							    
							    
							    </div>
							    </div>
							     <script>
							     $(document).ready(function() {
                                    $('#booking_table').DataTable();
                                } );
							    </script>
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
                               window.location.href ='reservation';</script>";
                            
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



<!-- Modal-->


<script>
    $(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
     $(".modal-body #bookId").val( myBookId );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
</script>

<!--<script>-->
<!--    $(document).on("click", ".open-AddBookDialog1", function () {-->
<!--     var myBookId1 = $(this).data('id');-->
<!--     $.ajax({url:"modal_ajax.php?id="+myBookId1,cache:false,success:function(result){-->
<!--          $(".modal-content").html(result);-->
<!--      }});-->
<!--});-->
<!--</script>-->

									
							    