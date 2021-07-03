
        <?php
        include('header.php');
       
?>

<style>
     .user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.panel-primary > .panel-heading {
    color: #fff;
    background-color: #8dc53f;
    border-color:#8dc53f;
}
</style>

           
                <!-- end header -->

        <!-- start payment -->  
        <!-- start container -->  
<h1 class="text-center"style="padding-top:20px;padding-bottom:20px;">My Bookings</h1>
<div class="container">
    <div class="well col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
    <?php 
   
   $i=1;
    foreach($result as $row)
    {
    ?>
           <div class="row user-row">
               <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                   <img class="img-circle"
                        src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50"
                        alt="User Pic">
               </div>
               <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                <div class="col-md-3"> <?php echo $row['reservation_id']; ?></div>
                <div class="col-md-3"><?php echo $row['name']; ?></div>
                <div class="col-md-3"><?php echo $row['date']; ?></div>
                <div class="col-md-3">Status<span class="badge"style="background-color: #f44336" ><?php echo $row['status']; ?></span></div> 
               </div>
               <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".user<?php echo $i; ?>">
                   <i class="glyphicon glyphicon-chevron-down text-muted"></i>
               </div>
           </div>
           <div class="row user-infos user<?php echo $i; ?>" >
               <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                   <div class="panel panel-primary">
                       <div class="panel-heading">
                           <h3 class="panel-title">User information</h3>
                       </div>
                       <div class="panel-body">
                           <div class="row">
                               <!-- <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                   <img class="img-circle"
                                        src="img/hotel.jpg"
                                        alt="User Pic">
                               </div> -->
                               <!-- <div class="col-xs-2 col-sm-2 hidden-md hidden-lg">
                                   <img class="img-circle"
                                        src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50"
                                        alt="User Pic">
                               </div> -->
                               <div class="col-xs-10 col-sm-10 hidden-md hidden-lg">
                                  
                                   <dl>
                                       <dt>Booking ID</dt>
                                       <dd> </dd>
                                       <dt>Name</dt>
                                       <dd> </dd>
                                       <dt>Check in</dt>
                                       <dd> </dd>
                                       <dt>Check out</dt>
                                       <dd></dd>
                                       <dt>Hotel Name</dt>
                                       <dd> </dd>
                                       <dt>Price</dt>
                                       <dd> </dd>
                                       <dt>Mode of Payment</dt>
                                       <dd> </dd>
                                       <dt>No.of Guest</dt>
                                       <dd> </dd>
                                       <dt>Guest Email</dt>
                                       <dd> </dd>
                                       <dt>Guest Number</dt>
                                       <dd> </dd>
                                   </dl>
                               </div>
                               <div class=" col-md-11 col-lg-11 col-md-offset-1 hidden-xs hidden-sm">
                                   
                                   <table class="table table-user-information">
                                       <tbody>
                                            <tr>
                                                    <td>Hotel Name</td>
                                                    <td><?php echo $row['name']; ?></td>
                                                </tr>
                                       <tr>
                                           <td>Booking ID</td>
                                           <td><?php echo $row['reservation_id']; ?></td>
                                       </tr>
                                       <tr>
                                           <td>Name</td>
                                           <td><?php echo $row['uname']; ?></td>
                                       </tr>
                                       <tr>
                                           <td>Check in</td>
                                           <td><?php echo $row['check_in']; ?></td>
                                       </tr>
                                       <tr>
                                           <td>Check out</td>
                                           <td><?php echo $row['check_out']; ?></td>
                                       </tr>
                                      
                                        <tr>
                                                <td>Price</td>
                                                <td><?php echo $row['price']; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Mode of Payment</td>
                                                <td><?php echo $row['payment_type']; ?></td>
                                            </tr>
                                            
                                            <tr>
                                                    <td>No.of Guests</td>
                                                    <td><?php echo $row['persons']; ?></td>
                                                </tr>
                                            <tr>
                                                <td>Guest Email</td>
                                                <td><?php echo $row['guest_email']; ?></td>
                                            </tr>
                                            <tr>
                                                    <td>Guest Number</td>
                                                    <td><?php echo $row['guest_numbers']; ?></td>
                                                </tr>
                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>
                       <div class="panel-footer">
                           <button class="btn btn-sm btn-primary" type="button"
                                    onclick="resendEmail(<?php echo $row['booking_id']; ?>)"><i class="glyphicon glyphicon-envelope"></i></button>
                           
                            <button class="btn btn-sm btn-primary" type="button"
                                    onclick="resendSms(<?php echo $row['booking_id']; ?>)"><i class="glyphicon glyphicon-comment"></i></button>
                           
                           
                           <span class="pull-right">
                               <!-- <button class="btn btn-sm btn-warning" type="button"
                                       data-toggle="tooltip"
                                       data-original-title="Edit this user"><i class="glyphicon glyphicon-edit"></i></button> -->
                                       <?php
                                       $to=date('Y-m-d H:i:s');
                                       if(($row['check_in'] > $to ) && ($row['status']=="booked"))
                                       {
                                        ?>
                                        <input type="hidden" name="booking_id" value="<?php echo $row['booking_id']; ?>" id="booking_id" />
                               <button class="btn btn-sm btn-danger" type="button"
                                       data-toggle="tooltip" id="cancel"
                                       data-original-title="cancel this booking">Booking Cancel</button>
                                       <?php
                                     }
                                    ?>
                           </span>
                       </div>
                   </div>
               </div>
           </div>
   
   
                <!--    <div class="row user-row">
               <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                   <img class="img-circle"
                        src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50"
                        alt="User Pic">
               </div>
               <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                    <div class="col-md-3">Booking ID</div>
                    <div class="col-md-3">Name</div>
                    <div class="col-md-3">Date</div>
                    <div class="col-md-3">Status<span class="badge"style="background-color: #f44336" >Booked</span></div> 
                   </div>
               
               <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".user2">
                   <i class="glyphicon glyphicon-chevron-down text-muted"></i>
               </div>
           </div>
           <div class="row user-infos user2">
               <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                   <div class="panel panel-primary">
                       <div class="panel-heading">
                           <h3 class="panel-title">User information</h3>
                       </div>
                       <div class="panel-body">
                           <div class="row"> -->
                               <!-- <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                   <img class="img-circle"
                                        src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"
                                        alt="User Pic">
                               </div>
                               <div class="col-xs-2 col-sm-2 hidden-md hidden-lg">
                                   <img class="img-circle"
                                        src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50"
                                        alt="User Pic">
                               </div> -->
                              <!--  <div class="col-xs-10 col-sm-10 hidden-md hidden-lg">
                                   
                                    <dl>
                                            <dt>Booking ID</dt>
                                            <dd>xxxxx</dd>
                                            <dt>Name</dt>
                                            <dd>xxxxx</dd>
                                            <dt>Check in</dt>
                                            <dd>15-3-2018</dd>
                                            <dt>Check out</dt>
                                            <dd>23-3-2018</dd>
                                            <dt>Hotel Name</dt>
                                            <dd>xxxxx</dd>
                                            <dt>Price</dt>
                                            <dd>xxxxx</dd>
                                            <dt>No.of Guest</dt>
                                            <dd>xxxx</dd>
                                        </dl>
                                    </div>
                                    <div class=" col-md-11 col-lg-11 col-md-offset-1 hidden-xs hidden-sm">
                                        
                                        <table class="table table-user-information">
                                            <tbody>
                                                 <tr>
                                                         <td>Hotel Name</td>
                                                         <td>xxxxx</td>
                                                     </tr>
                                            <tr>
                                                <td>Booking ID</td>
                                                <td>xxxxx</td>
                                            </tr>
                                            <tr>
                                                <td>Name</td>
                                                <td>xxxxx</td>
                                            </tr>
                                            <tr>
                                                <td>Check in</td>
                                                <td>15-3-2018</td>
                                            </tr>
                                            <tr>
                                                <td>Check out</td>
                                                <td>23-3-2018</td>
                                            </tr>
                                           
                                             <tr>
                                                     <td>Price</td>
                                                     <td>xxxx</td>
                                                 </tr>
                                                 <tr>
                                                         <td>No.of Guest</td>
                                                         <td>xxxx</td>
                                                     </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                       <div class="panel-footer">
                           <button class="btn btn-sm btn-primary" type="button"
                                   data-toggle="tooltip"
                                   data-original-title="Send message to user"><i class="glyphicon glyphicon-envelope"></i></button>
                           <span class="pull-right">
                               <!-- <button class="btn btn-sm btn-warning" type="button"
                                       data-toggle="tooltip"
                                       data-original-title="Edit this user"><i class="glyphicon glyphicon-edit"></i></button> -->
                               <!-- <button class="btn btn-sm btn-danger" type="button"
                                       data-toggle="tooltip"
                                       data-original-title="Remove this user"><i class="glyphicon glyphicon-remove"></i></button>
                           </span>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row user-row">
               <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                   <img class="img-circle"
                        src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50"
                        alt="User Pic">
               </div>
               <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                    <div class="col-md-3">Booking ID</div>
                    <div class="col-md-3">Name</div>
                    <div class="col-md-3">Date</div>
                    <div class="col-md-3">Status<span class="badge"style="background-color: #f44336" >Booked</span></div> 
                   </div>
               
               <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".user3">
                   <i class="glyphicon glyphicon-chevron-down text-muted"></i>
               </div>
           </div>
           <div class="row user-infos user3">
               <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                   <div class="panel panel-primary">
                       <div class="panel-heading">
                           <h3 class="panel-title">User information</h3>
                       </div>
                       <div class="panel-body">
                           <div class="row"> --> 
                               <!-- <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                   <img class="img-circle"
                                        src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"
                                        alt="User Pic">
                               </div>
                               <div class="col-xs-2 col-sm-2 hidden-md hidden-lg">
                                   <img class="img-circle"
                                        src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50"
                                        alt="User Pic">
                               </div> -->
                          <!--      <div class="col-xs-10 col-sm-10 hidden-md hidden-lg">
                                   
                                    <dl>
                                            <dt>Booking ID</dt>
                                            <dd>xxxxx</dd>
                                            <dt>Name</dt>
                                            <dd>xxxxx</dd>
                                            <dt>Check in</dt>
                                            <dd>15-3-2018</dd>
                                            <dt>Check out</dt>
                                            <dd>23-3-2018</dd>
                                            <dt>Hotel Name</dt>
                                            <dd>xxxxx</dd>
                                            <dt>Price</dt>
                                            <dd>xxxxx</dd>
                                            <dt>No.of Guest</dt>
                                            <dd>xxxx</dd>
                                        </dl>
                                    </div>
                                    <div class=" col-md-11 col-lg-11 col-md-offset-1 hidden-xs hidden-sm">
                                        
                                        <table class="table table-user-information">
                                            <tbody>
                                                 <tr>
                                                         <td>Hotel Name</td>
                                                         <td>xxxxx</td>
                                                     </tr>
                                            <tr>
                                                <td>Booking ID</td>
                                                <td>xxxxx</td>
                                            </tr>
                                            <tr>
                                                <td>Name</td>
                                                <td>xxxxx</td>
                                            </tr>
                                            <tr>
                                                <td>Check in</td>
                                                <td>15-3-2018</td>
                                            </tr>
                                            <tr>
                                                <td>Check out</td>
                                                <td>23-3-2018</td>
                                            </tr>
                                           
                                             <tr>
                                                     <td>Price</td>
                                                     <td>xxxx</td>
                                                 </tr>
                                                 <tr>
                                                         <td>No.of Guest</td>
                                                         <td>xxxx</td>
                                                     </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                       <div class="panel-footer">
                           <button class="btn btn-sm btn-primary" type="button"
                                   data-toggle="tooltip"
                                   data-original-title="Send message to user"><i class="glyphicon glyphicon-envelope"></i></button>
                           <span class="pull-right">
                               <!-- <button class="btn btn-sm btn-warning" type="button"
                                       data-toggle="tooltip"
                                       data-original-title="Edit this user"><i class="glyphicon glyphicon-edit"></i></button> -->
                              <!--  <button class="btn btn-sm btn-danger" type="button"
                                       data-toggle="tooltip"
                                       data-original-title="Remove this user"><i class="glyphicon glyphicon-remove"></i></button>
                           </span>
                       </div>
                   </div>
               </div> -->
               <?php
               $i++;

               }
               ?>
           </div>

   
   
           
           
       </div>
   </div>

 <!-- start footer -->
 <?php
 include('footer.php');
 ?>

  
<script>
    $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

  
});
      $('#cancel').click(function () {
            var url= "<?php echo base_url(); ?>index.php/login_user/cancel"
            var id=$('#booking_id').val();
           
            $.ajax({
                    type : 'POST',
                    url : url,
                    data : {"id": id},
                    
                    success: function(result){
                      console.log(result);
                        
                        if(result=='success'){
                            location.reload();  
                        }
                    }
                    });
            });

</script>

<script>
    function resendEmail(inputVar) {
            var url= "<?php echo base_url(); ?>index.php/Send_email_new/"
          
                        
            $.ajax({
                    type : 'POST',
                    url : url,
                    data :{inputVar: inputVar},
                    success: function(result){
                            console.log('Returned from Send_email_new controller');
                            console.log(result);
                        }
                    });
                    

        };
        
        function resendSms(inputVar) {
            var url= "<?php echo base_url(); ?>index.php/Send_sms_new/"
          
                        
            $.ajax({
                    type : 'POST',
                    url : url,
                    data :{inputVar: inputVar},
                    success: function(result){
                            console.log('Returned from Send_sms_new controller');
                            // console.log(result);
                        }
                    });
                    

        };
    </script>
      
		