<?php //var_dump($reservations);die; ?>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<style>
.from1
{
    width: 250px;
    border-radius: 5px;
    border-color: #208e24;
}
.booking_styling{
	
	height:100px;
	padding:0px !important;
	margin: -14px -20px -10px;
}
.reserve_search{
	border-radius:100px;
	margin-left:5px;
	padding-left:30px;
	border: 0.7px solid #208e24;
	opacity: 1;
}
form{
	padding-top:30px;
	padding-left:30px
}
</style>

			<div class='booking_styling'>
			
                        <form action="<?php echo base_url(); ?>index.php/reservation/index" method="POST" >
                         <span>
						
                            <input type="date" name="from" placeholder="Enter From date" class='reserve_search from1' value="<?php if(isset($from)){ echo $from; }  ?>" /></span>
                      <input type="date" name="to" placeholder="Enter To Date" class="from1 reserve_search" value="<?php if(isset($to)){ echo $to; }  ?>"/>
                      <select name="category" class="from1 reserve_search" id="category" style='padding:3px'>
                      <option value="all" >    All</option>
                      <option value="booked">    Booked</option>
                      <option value="cancelled">    cancelled</option>
                      </select>
                      <?php
                      if($this->session->userdata('user_type')==1)
                      {
                        ?>
                      <input type="text" name="location" placeholder="location" class="from1 reserve_search" value="<?php if(isset($location)){ echo $location; }  ?>" >
                      <?php
                    }
                    else
                    {
                      ?>
                       <input type="hidden" name="location" placeholder="location" class="from1 reserve_search" value="<?php if(isset($location)){ echo $location; }  ?>" >
                       <?php
                    }
                    ?>
                      <input type="text" name="booking_id" placeholder="booking_id" class="from1 reserve_search" style="margin-top:20px;" value="<?php if(isset($booking_id)){ echo $booking_id; }  ?>"  />
                   
                       <input type="submit" value="Search" class="btn btn-success btn-sm" style='border-radius:100px;margin-left:10px;margin-top:0px' />
					 
                      </form>

					</div> 
                <div class="row">

                        <div class="col-md-12">
						
						 
					  
					  
					  
					  
					   <!-- start Payment Details -->
                    <div class="row" style="margin-top:30px;">
                        <div class="col-md-12 col-sm-12">
                            <div class="card  card-box">
                                <div class="card-head">
                                    <header>Bookings</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"> Refresh</a>
	                                   
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="table-scrollable">
										<div class="">
											<table class="table table-striped display product-overview mb-30" id="support_table5">
												<thead>
													<tr>
														 <th>S.No</th>
                                                <th>Reservation Id</th>
                                                <th>Hotel</th>
                                                <th>Room type</th>
                                             <th>Sub Room</th> 
                                                <th>No of Rooms</th>
                                                <th>Guest Details </th>
                                               <!--  <th>Price</th> -->
                                                <th> Total Price</th>
                                                <th>Payment Margin</th>
                                                <th>check in</th>
                                                <th>Check out</th>
                                                <th>Payment Type</th>  
                                                <!-- <th>Booked by</th> -->
                                               <!--  <th>booked_on</th> -->
                                                <th>Booking_status</th>
                                                <th>actions</th>
													</tr>
												</thead>
												
												
											 <tbody align="center"  >
                                            
                                               <?php 
                                               $i=1; 
                                               foreach($reservations as $rev){ ?>
                                                <tr>
                                                     <td><?php echo $i; ?></td>
                                                     <td><?php echo $rev['reservation_id'] ?></td>
                                                    <td><?php echo $rev['name'] ?></td>
                                                    <td><?php echo $rev['catname'] ?></td>
                                                  <?php
                                                  $this->load->model('Hotel_model');
                                                  // echo $rev['sub_category_id'];
                                                  // echo "<br/>";
                                                  $sub_name=$this->Hotel_model->getSubcate_name($rev['sub_category_id']);
                                                  // print_r($sub_name);
                                                  if(!empty($sub_name))
                                                  {
                                                    // foreach ($sub_name as $sub) {
                                                      
                                                    
                                                    ?>
                                                    <td><?php echo $sub_name['sub_name']; ?> </td>
                                                    <?php
                                                  // }
                                                }
                                                  else
                                                  {
                                                    ?>
                                                    <td>--</td>
                                                    <?php
                                                  }
                                                  ?>
                                                    <td><?php echo $rev['no_of_rooms'] ?></td>
                                                    <td><?php echo $rev['guest_name']; ?> (<?php echo $rev['guest_numbers'] ; ?>) </td>
                                                <!--     <td><?php echo $rev['price'] ?></td> -->
                                                     <td><?php echo $rev['total_price'] ?></td>
                                                      <td><?php echo $rev['hotel_margin'] ?></td>
                                                    <td><?php echo date('Y-m-d',strtotime($rev['check_in'])) ?></td>
                                                    <td><?php echo date('Y-m-d',strtotime($rev['check_out'])) ?></td>
                                                  <td><?php echo $rev['payment_type'] ?></td>
                                                    <!-- <td><?php echo $rev['user_id'] ?></td>                      -->
                                                     <!-- <td ><?php echo date('Y-m-d',strtotime($rev['created_at'])) ?></td> -->
                                                     <td align="center">
													 <?php if($rev['booking_status'] == "cancelled") {
														 ?>
														<span class="label label-sm label-warning"><?php echo $rev['booking_status'] ?></span>
				                                     <?php } else  { 
													 ?>		
													    <span class="label label-sm label-success"><?php echo $rev['booking_status'] ?></span>
													<?php } ?>	
														 </td>
                                                    <td align="center">
                                                    <?php if($rev['booking_status'] == "cancelled") { ?>
                                                    <!-- <a href="#" ><i class='fa fa-eye' title='view'></i></a> -->
                                                    <?php } else  { ?>
                                                    
                                                    <a href="<?php echo base_url(); ?>index.php/reservation/cancel_booking/<?php echo $rev['id']; ?>" ><i class='fa fa-times' title='view'></i></a>
                                                    <?php } ?>
                                                    </td>
                                                </tr>
                                              <?php 
                                              $i++;
                                              }
                                               ?>
                                           
                                        </tbody>
											</table>
										</div>
									</div>	
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Payment Details -->
					  
					  
					  
                        </div>
                    </div>

  <script>
 $("select#category option")
   .each(function() { 
    console.log(this.value);

    this.selected = (this.value == "<?php echo $category; ?>"); 
 });
</script>
