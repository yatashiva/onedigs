<?php //var_dump($reservations);die; ?>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<style>
.from1
{
    width: 250px;
    border-radius: 5px;
    height: 40px;
}
</style>
                <div class="row">

                        <div class="">
                        <form action="<?php echo base_url(); ?>index.php/reservation/index" method="POST" >
                        
                            <input type="date" name="from" placeholder="From "  value="<?php if(isset($from)){ echo $from; }  ?>" class="from1" />
                      <input type="date" name="to" placeholder="To" class="from1"  value="<?php if(isset($to)){ echo $to; }  ?>"/>
                      <select name="category" class="from1" id="category" >
                      <option value="all">All</option>
                      <option value="booked">Booked</option>
                      <option vlue="cancelled">cancelled</option>
                      </select>
                      <input type="text" name="booking_id" placeholder="booking_id" class="from1" value="<?php if(isset($booking_id)){ echo $booking_id; }  ?>"  />
                   
                       <input type="submit" value="Search" class="btn btn-info"  />
                      </form>


                            <div class="card card-topline-aqua" style="margin-top:30px;">
                                <div class="card-head">
                                    <header>Bookings</header>
                                    <!-- <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div> -->
                                </div>
                                <div class="card-body ">
                                  <div class="table-scrollable">
                                    <table id="example1" class="display table table-striped"  style="width:100%;">
                                        <thead align="center" >
                                            <tr>
                                                <th >Booking Id</th>
                                                <th>Rservation Id</th>
                                                <th>Hotel</th>
                                                <th>Room type</th>
                                                <th>No of Rooms</th>
                                                <th>Price</th>
                                                <th>check in</th>
                                                <th>Check out</th>
                                                <th>Payment Type</th>   
                                                <!-- <th>Booked by</th> -->
                                                <th>booked_on</th>
                                                <th>Booking_status</th>
                                                <th >actions</td>
                                            </tr>
                                        </thead>
                                        <tbody align="center"  >
                                            
                                               <?php foreach($reservations as $rev){ ?>
                                                <tr>
                                                     <td><?php echo $rev['id'] ?></td>
                                                     <td><?php echo $rev['reservation_id'] ?></td>
                                                    <td><?php echo $rev['name'] ?></td>
                                                    <td><?php echo $rev['catname'] ?></td>
                                                    <td><?php echo $rev['no_of_rooms'] ?></td>
                                                    <td><?php echo $rev['price'] ?></td>
                                                    <td><?php echo $rev['check_in'] ?></td>
                                                    <td><?php echo $rev['check_out'] ?></td>
                                                    <td><?php echo $rev['payment_type'] ?></td>
                                                    <!-- <td><?php echo $rev['user_id'] ?></td>                      -->
                                                     <td ><?php echo $rev['created_at'] ?></td>
                                                     <td align="center"><?php echo $rev['booking_status'] ?></td>
                                                    <td align="center">
                                                    <?php if($rev['booking_status'] == "cancelled") { ?>
                                                    <a href="#" ><i class='fa fa-eye' title='view'></i></a>
                                                    <?php } else  { ?>
                                                    
                                                    <a href="<?php echo base_url(); ?>index.php/reservation/cancel_booking/<?php echo $rev['id']; ?>" ><i class='fa fa-times' title='view'></i></a>
                                                    <?php } ?>
                                                    </td>
                                                </tr>
                                              <?php } ?>
                                           
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

  <script>
 $("select#category option")
   .each(function() { 
    console.log(this.value);

    this.selected = (this.value == "<?php echo $category; ?>"); 
 });
</script>
