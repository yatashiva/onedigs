
<?php include("header.php"); ?>

    <div class="fullwidthbanner-container">

        <div class="" style="background-color: #636363;height:400px;min-height:400px;z-index: -999;">
            <!-- start main slider -->

            <!-- start hotel booking -->
            <div class="hotel_booking_area" style="padding-top:8%;">

                <div class="container hotel_booking" style="width:900px;">
				
				<form id="serach-form" action="<?php echo base_url();?>index.php/hotel/search" method="get">
                    <div class="row">

                        <div class="col-md-3 " style="border-right: 1px solid #ebebeb;padding:0px !important">
                            <div class=" ">
                                <input id="places" type="text" class="form-control" placeholder="Location, Locality, Area "  name="location" style="padding: 14px 0 14px;border: none;text-align: center;min-height: 60px;" required>
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

                        <div class="col-md-3 " style="background-color: #8dc53f;text-align:center;padding-right: 15px;
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
                                <button  type="submit" onclick="return checkInput()" id="destination_search" class="" style=" border: none;  padding: 18px 70px 18px;color: white;background-color: #8dc53f;font-size: 18px;outline:none;">
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
                <div id="roomsdiv" class="col-md-3 " style="padding: 14px 0 14px;border: none;text-align: center;min-height: 60px;display:none;background-color: white;    z-index: 9;">
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

<!-- commented as client wants to add more inputs on this and add this funtionality later -->
            <!-- <ul class="list-inline " style="text-align: center;">
                                <?php foreach($trending_destinations as $destinations): ?>
                                <?php $address=explode(',', $destinations['locations']);$address=implode('%2C+', $address);?>
                                  <li><a href="<?php echo base_url();?>index.php/hotel/search?location=<?php echo $address;?>&daterange=<?php echo date("Y-m-d").'+-+'.date("Y-m-d", strtotime("+1 day"))?>&rooms=1+Rooms%2C1+Adults%2C0+Children">
                                       <img id="citSrt" style="width:50px; height:50px;border-radius: 50%;" class="img-responsive" src="<?php echo base_url();?>/uploads/trending_destinations/<?php echo $destinations['location_pic']; ?>">
                                      </a>
                                  </li>
                                <?php endforeach; ?>
                            </ul> -->

            <!-- onclick div reveal area ends -->

             <div class="container" style="MARGIN-TOP: 6.5%;">
                 <div class="section_description">
                     <div id="customer_says_slider" class="carousel slide" data-ride="carousel" data-pause="none">
                         <!-- Wrapper for slides -->
                         <div class="carousel-inner" role="listbox">
                             <div class="item active ">
                                 <div class="single_says">
                                     <div class="text-center">
                                         <h2 style="color:white">Save 50% On Hotel Bookings </h2>
                                         <p style="color:white"> Use Promocode : FIRSTROOM</p>
                                         <p style="color:white">T & C Apply</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="item ">
                                 <div class="single_says">
                                     <div class="text-center">
                                         <h2 style="color:white">Save 70% On Hotel Bookings </h2>
                                         <p style="color:white"> Use Promocode : HOTEL70</p>
                                         <p style="color:white">T & C Apply</p>
                                     </div>
                                 </div>
                             </div>

                         </div>

                     </div>
                 </div>
             </div>

            <!-- end hotel booking -->
        </div>

    </div>
    <!-- end main slider -->

    <section style="padding-top: 2%">

        <div class="container">
            <div class="welcome">
                <div class="section_title nice_title content-center">
                    <h3> Trending Destinations</h3>
                </div>

                <!-- This seciton is hidden, based on clients inputs -->
                <div class="row" style="display:none;">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <a href="accomodation.html">
                                <img class="img-responsive" src="<?php echo base_url();?>assets/frontend/img/slide/1.png">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="accomodation.html">
                                <img class="img-responsive" src="<?php echo base_url();?>assets/frontend/img/slide/2.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row" style="margin-bottom:10px;">
                            <div class="col-md-6">
                                <a href="accomodation.html">
                                    <img class="img-responsive" src="<?php echo base_url();?>assets/frontend/img/slide/3.png">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="accomodation.html">
                                    <img class="img-responsive" src="<?php echo base_url();?>assets/frontend/img/slide/4.png">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="accomodation.html">
                                    <img class="img-responsive" src="<?php echo base_url();?>assets/frontend/img/slide/5.png">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="accomodation.html">
                                    <img class="img-responsive" src="<?php echo base_url();?>assets/frontend/img/slide/6.png">
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- start welcome section -->

    <!-- start About Us section -->
    <section class="about_us_area margin-bottom-10" style="margin-bottom: 12px;margin-top:10px;">
        <div class="container">
            <div class="about_us clearfix">

                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="showcase">

                        <div class="section_description" >
                            <div class="clearfix demo">
                                <ul id="vertical" class="gallery list-unstyled" >
                                <?php foreach($trending_destinations as $destinations): ?>
                                   <?php $address=explode(',', $destinations['locations']);
                                    $address1=implode(', ', $address);
                                    $address=implode('%2C+', $address);
                                     ?>
                                     <li data-thumb="<?php echo base_url();?>/uploads/trending_destinations/<?php echo $destinations['location_pic']; ?>">
                                        <a href="<?php echo base_url();?>index.php/hotel/search?location=<?php echo $address;?>&daterange=<?php echo date("Y-m-d").'+-+'.date("Y-m-d", strtotime("+1 day"))?>&rooms=1+Rooms%2C1+Adults%2C0+Children">
                                        <span style="font-size:2em;position:absolute;left:25%;color:white;"><br><br><br><br><br><?php echo $address1;?></span><img alt="slider" src="<?php echo base_url();?>/uploads/trending_destinations/<?php echo $destinations['location_pic']; ?>"/></a>
                                    </li>
                                    <?php endforeach; ?>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end About Us section -->

    <section style="padding-top: 2%;margin-bottom:2%">

        <div class="container">
            <div class="welcome">
                <div class="section_title nice_title content-center">
                    <h3>Top Hotels</h3>
                </div>

                <div id="Carousel" class="carousel slide">

                    <ol class="carousel-indicators" >
                        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#Carousel" data-slide-to="1"></li>
                        <li data-target="#Carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Carousel items -->
                    <div class="carousel-inner">
                    


                            <?php
                            $i=1; 
                            foreach($hotels as $hotel){
                                if($i<=3 && $i%3==1){ ?>
                            <div class="item active">
                            <div class="row">

                            <?php
                                }
                                else if ($i%3==1)
                                {
                                    ?>
                                    </div>
                                    </div>
                                    <div class="item"> 
                                    <div class="row">
                                    <?php

                                }
                                else{

                                }
                                ?>
                            <?php $room = '1';
                                  $date_range =  date("Y-m-d").' - '.date("Y-m-d", strtotime("+1 day"));
                                  $adults = '1';
                                  $children = '0';
                                  ?>

                            <div onclick="location.href='<?php echo base_url(); ?>index.php/hotel/get_hotel_by_id_sample/<?php echo $hotel['id']; ?>/<?php echo $date_range ?>/<?php echo $room; ?>/<?php echo $adults; ?>/<?php echo $children; ?>';"
                            class="col-md-4" style="padding-top:270px;text-align:center;max-width:100%; height:270px;background: url(<?php echo base_url();?>/uploads/<?php echo $hotel['hotel_pic'];?> ); background-repeat: no-repeat;background-size: 95% 95%;"> 
                            <a href="<?php echo base_url(); ?>index.php/hotel/get_hotel_by_id_sample/<?php echo $hotel['id']; ?>/<?php echo $date_range ?>/<?php echo $room; ?>/<?php echo $adults; ?>/<?php echo $children; ?>">
                            <p style="text-align: center"><b><?php echo $hotel['hotel_name']; ?></b><br><?php echo $hotel['location']; ?>  
                            </p></a></div> 
                            <?php 
                            $i++;
                        } ?>

                            </div>
                  
                        </div>
                  
                    <br><br><br>
                    </div>
                    <!--.carousel-inner-->
                    <a data-slide="prev" href="#Carousel" class="left carousel-control" style='height: 40px;width: 40px;background: none repeat scroll 0 0 #222222;border: 4px solid #FFFFFF;border-radius: 23px 23px 23px 23px;margin-top: 90px;background: #222222 none repeat scroll 0 0;border: 4px solid #ffffff; 
					    border-radius: 27px;height: 40px;left: -12px;margin-top: 100px !important;width: 64px;'>‹</a>
                    <a data-slide="next" href="#Carousel" class="right carousel-control" style='background-image: linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);left: auto;left: -12px;height: 40px;width: 40px;background: none repeat scroll 0 0 #222222;border: 4px solid  #FFFFFF;border-radius: 23px 23px 23px 23px;margin-top: 90px;background: #222222 none repeat scroll 0 0;border: 4px solid #ffffff;border-radius: 27px;height: 40px;left: -12px;margin-top: 100px;
                    width: 64px;position: absolute;top: 0;bottom: 0;left: auto;font-size: 20px;color: #fff;
					text-align: center;text-shadow: 0 1px 2px rgba(0,0,0,.6);filter: alpha(opacity=50);
					'>›</a>
                </div>
                <!--.Carousel-->
            </div>
        </div>
    </section>

<?php include("footer.php"); ?>

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