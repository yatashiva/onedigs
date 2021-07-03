<?php include("header.php"); ?>


 <style>
/**
 * demo styles 
 */
html, body{
    background: #efefef;  
    box-sizing: border-box;
    padding: 10px;
}

h1{
    text-align: center;
    margin: 0 0 10px 0;
    padding: 0;
    font-size: 22px;
    color: #212529;
}

a{
    color: #212529;
}

a:hover{
  text-decoration: none;
}

[data-jplist-group]{
    display: flex;
    font-size: 16px;
    flex-wrap: nowrap;
    flex-direction: column;
    align-items: center;
    width: 100%;
    margin: 0 20px;
    box-sizing: border-box;
}

[data-jplist-item]{
  border-bottom: 1px dotted #ccc;
  width: 100%;
  text-align: center;
  padding: 10px 0;
}

/**
 * slider styles
 */
[data-jplist-control="slider-range-filter"]{
    display: flex;
    flex-direction: column;
    font-size: 12px;
    align-items: center;
    width: 100%;
}

.range-slider-value{
    width: 100px;
    box-sizing: border-box;
    padding: 0 5px;
}

.jplist-slider {
    width: 100%;
    height: 20px;
    background-color: #fff;
    margin: 15px;
    margin: 15px;
    border-radius: .25rem;
    position: relative;
    box-sizing: border-box;
}

.jplist-slider::before {
    content: '';
    display: block;
    width: 100%;
    height: 3px;
    background: #fff;
    position: absolute;
    z-index: 100;
    left: 0;
    top: 50%;
    transform: translate(0, -50%);
    opacity: 0;
}

.jplist-slider-holder-1,
.jplist-slider-holder-2 {
    width: 20px;
    height: 100%;
    border-radius: .25rem;
    display: block;
    cursor: pointer;
    position: absolute;
    top: 0;
    left: 0;
    transform: translate(-50%, 0);
    z-index: 200;
    transition: 0.3s background-color;
    padding: 0;
    margin: 0;
    font-size: 0;
    line-height: 0;
}

.jplist-slider-holder-1 {
    background: #000;
}

.jplist-slider-holder-2 {
    background: #106CD6;
}

.jplist-slider-holder-1:active,
.jplist-slider-holder-2:active{
    background: #00448c;
    box-shadow: 0px 0px 10px #fff;
}

.jplist-slider-range {
    width: 0;
    height: 20px;
    background: #ccc;
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    background-image: linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
    background-size: 1rem 1rem;
}

.jplist-slider-values{
  width: 100%;
}

[data-type="value-1"],
[data-type="value-2"]{
  color: #e83e8c;
}

[data-jplist-control="no-results"]{
  padding: 20px 0;
  color: #3e6894;
}
</style>


<style>
section.range-slider {
  position: relative;
  /* width: 300px;
  height: 300px; */
  float: left;
  text-align: center;
}
section.range-slider input[type="range"] {
  pointer-events: none;
  position: absolute;
  -webkit-appearance: none;
  -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
  border: none;
  border-radius: 14px;
  background: #F1EFEF;
  box-shadow: inset 0 1px 0 0 #cdc6c6, inset 0 -1px 0 0 #d9d4d4;
  -webkit-box-shadow: inset 0 1px 0 0 #cdc6c6, inset 0 -1px 0 0 #d9d4d4;
  overflow: hidden;
  left: 0;
  top: 50px;
  /* width: 300px; */
  outline: none;
  height: 20px;
  margin: 0;
  padding: 0;
}
section.range-slider input[type="range"]::-webkit-slider-thumb {
  pointer-events: all;
  position: relative;
  z-index: 1;
  outline: 0;
  -webkit-appearance: none;
  width: 20px;
  height: 20px;
  border: none;
  border-radius: 14px;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #dad8da), color-stop(100%, #413F41));
  /* android <= 2.2 */
  background-image: -webkit-linear-gradient(top, #dad8da 0, #413F41 100%);
  /* older mobile safari and android > 2.2 */
  background-image: linear-gradient(to bottom, #dad8da 0, #413F41 100%);
  /* W3C */
}
section.range-slider input[type="range"]::-moz-range-thumb {
  pointer-events: all;
  position: relative;
  z-index: 10;
  -moz-appearance: none;
  width: 15px;
  height: 20px;
  border: none;
  border-radius: 14px;
  background-image: linear-gradient(to bottom, #dad8da 0, #413F41 100%);
  /* W3C */
}
section.range-slider input[type="range"]::-ms-thumb {
  pointer-events: all;
  position: relative;
  z-index: 10;
  -ms-appearance: none;
  width: 15px;
  height: 20px;
  border-radius: 14px;
  border: 0;
  background-image: linear-gradient(to bottom, #dad8da 0, #413F41 100%);
  /* W3C */
}
section.range-slider input[type=range]::-moz-range-track {
  position: relative;
  z-index: -1;
  background-color: black;
  border: 0;
}
section.range-slider input[type=range]:last-of-type::-moz-range-track {
  -moz-appearance: none;
  background: none transparent;
  border: 0;
}
section.range-slider input[type=range]::-moz-focus-outer {
  border: 0;
}

.result_change{
	background-color:white;
	margin-top:40px;
}
.seperation{
	padding: 10px;
	border-right: 1px solid #ebebeb;
	text-align:center;
}


</style>


			<div class='col-md-10 col-md-offset-1 result_change'>
				
                    <div class="row" style='font-size:14px'>

                        <div class="col-md-9" >
                            <!-- location -->
							<div class="col-md-4 seperation">
                            <span>
								<span class="glyphicon glyphicon-equalizer" style='color:#8dc53f;display:block'></span>
                                <input type="text" id="placetext" name="place" style="display: inline-block; width:160px;height: 30px;overflow: hidden;text-overflow: ellipsis; border: none;color:black" value="<?php echo $location ?>" readonly />
                            </span> 
							&nbsp;
							
                            <span class="dropdown">
                                    <a href="#" id="place" style="color:blue;font-size:12px" data-toggle="dropdown">Change</a>
                                    <div class="dropdown-menu" style="width:400px;padding:20px">
                                    <span>Location</span><br><br>
                                    <!-- <div class= "row"style="margin-top: 30px;margin-left: 2% ;margin-right:2%"> -->
                                    
                                    <input id="places" type="text" class=""  placeholder="Location, Locality, Area " name="email" style="padding: 0px 14px;border:1px solid grey;text-align: center;min-height: 40px; width:160px;border-radius:5px "value="<?php echo $location ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="button" id="locationsearch" class="btn btn-primary" style="border-radius:5px">search</button>
                                    <!-- </div> -->
                                    </div>

                            </span> 
							</div>&nbsp; 
                            <!-- date Range-->
							<div class="col-md-4 seperation">
                            <span>
								<span class="glyphicon glyphicon-calendar" style='color:#8dc53f;display:block'></span>
                                <input type="text" id="datetext" name="room" style="display: inline-block; width: 160px;height: 30px;overflow: hidden;text-overflow: ellipsis; border: none;color:black" value="<?php echo  $date_range; ?>" readonly/>
                            </span>
								&nbsp;
                            <span>
                                    <a href="#" id="date" style="color:blue;font-size:12px">Change</a>
                            </span> 
							</div>&nbsp; 
                            <!-- rooms and Guests text -->
							<div class='col-md-4 seperation' style='margin-top:-20px'>
                            <span>
								<span class="glyphicon glyphicon-user" style='color:#8dc53f;display:block'></span> 
                                <input type="text" id="roomtext" name="rooms" style="display: inline-block; width: 140px;height: 30px;overflow: hidden;text-overflow: ellipsis; border: none;color:black" value="<?php echo  $rooms; ?>" readonly/>
                            </span> &nbsp;
                            <!-- rooms and guests  -->
                            <span class="dropdown">
                                <a href="#" id="room" style="color:blue;font-size:12px" data-toggle="dropdown">Change</a>
                                <div class="dropdown-menu" style="width:200px;padding:20px;">
                                    <div class="input-group">
                                        <label style="width: 100px;">Rooms</label>
                                       <div align='center'>
									     <button type="button" class="minus" id="minus1"><i class="fa fa-minus"></i></button>
                                        <input type="text"  id="spinner1" class="spin " value="<?php echo $room ?>" min-value=1 max-value=6 readonly>
                                        <button type="button" class="plus" id="plus1"><i class="fa fa-plus"></i></button>
										 
										 </div>
                                    </div>
                                <br>
                                    <div class="input-group">
                                        <label style="width: 100px;">Adults</label>
                                        <div align='center'>
										<button type="button" class="minus" id="minus2"><i class="fa fa-minus"></i></button>
                                        <input type="text"  id="spinner2" class="spin" value="1"  min-value=1 max-value=18 readonly>
                                        <button type="button" class="plus" id="plus2"><i class="fa fa-plus"></i></button>
										
										</div>
                                    </div>
                                <br>
                                    <div class="input-group">
                                        <label style="width: 100px;">Children  <br><span style="font-size: 10px;">Below 7 years</span></label>
                                        <div align='center'>
										<button type="button" class="minus" id="minus3"><i class="fa fa-minus"></i></button>
                                        <input type="text" id="spinner3" class="spin" value="0" min-value=0 max-value=18 readonly>
                                        <button type="button" class="plus" id="plus3"><i class="fa fa-plus"></i></button>
										
										</div>
                                    </div>
                                <br>
                                    <button id="roomsearch" type="button" class="btn btn-primary" style="border-radius:5px">Search</button>
                                    </div>
                            </span>
							</div>
                         </div>
                <div class="col-md-3" style='margin-top:20px'>
				 <span class="glyphicon glyphicon-sort" style='color:#8dc53f'></span>
                Sort By:
                  <!--  <form action="<?php echo base_url(); ?>index.php/hotel/search?location=<?php echo $location; ?>&daterange=<?php echo $date_range; ?>&rooms=<?php echo $rooms; ?>" method="GET" id="form1"> -->
				  
                    <select name="sort" id="sort"  onchange="abc();" style='border:1px solid #ebebeb;border-radius:50px'>
                    <option value="">Select option</option>
                        <option value="0">Popularity</option>
                        <option value="1">Price High to Low</option>
                        <option value="2">Price Low to High</option>
                        <option value="3">Discount</option>
                    </select>
                    <!--  </form> -->
                 </form>
                </div>
            </div>
		</div>	
			
    <section >
        <div class="container">
            <div class="row">

                <div class="col-md-3" style="margin-top:30px;border-right:1px solid lightgray;border-left:1px solid lightgray;border-top:2px solid #8dc53f; padding-left:-10px !important">
                    <div class="row">
                        <h4 class="text-center" style="padding-top:10%;">Filter By</h4>
                        <!-- <input type="range"  Minimum = 100, Maximum = 500, Step = 10 /> -->
                        <!-- <p style="padding:10px 30px;border-bottom: 1px solid lightgray">Price</p>    -->
                        <form action="" method="POST" id="form">
                  
						
<div style="margin-left: 20px;">
                        <p style="padding:10px 30px;border-top: 1px solid lightgray;font-size:16px;color::#8dc53f"><i class="fa fa-rupee-sign" style='color:#8dc53f'></i> Price</p>
						
								
					<!-- <label for="range"> -->
      <!-- <input type="range" name="range" id="range" min="<?php echo $min_value; ?>" max="<?php echo $max_value; ?>" step="5" value="175"/> -->
<!-- </label> -->
 <!-- <output for="range" class="output"></output> -->
 
 
 
 
 <!-- <div -->
    <!-- data-jplist-control="slider-range-filter" -->
    <!-- data-path=".price" -->
    <!-- data-group="prices-group-1" -->
    <!-- data-name="price-filter-1" -->
    <!-- data-min="1" -->
    <!-- data-from="100" -->
    <!-- data-to="500" -->
    <!-- data-max="1000"> -->

	 <!-- <div class="jplist-slider" data-type="slider"></div> -->
	 
	 <!-- <div class="jplist-slider-values"> -->
     	<!-- <b>Min:</b> <span data-type="min"></span>, -->
     	<!-- <b>Value 1:</b> <span data-type="value-1"></span>, -->
     	<!-- <b>Value 2:</b> <span data-type="value-2"></span>, -->
     	<!-- <b>Max:</b> <span data-type="max"></span> -->
	 <!-- </div> -->
<!-- </div> -->


 
						
                        <section class="range-slider" onchange="abc();">
              <textarea name="pricerange" class="rangeValues" style="height:20px !important;width:160px;" > </textarea> 
                 <input  min="<?php echo $min_value; ?>"  value="<?php echo $min;?>" step="500" type="range"> 
               <input   max="<?php echo $max_value; ?>" value="<?php echo $max; ?>"step="500" type="range">
        </section>
        </div>
                                                <div style="margin-top: 85px;"><p style="padding:10px 30px;border-top: 1px solid lightgray;word-spacing:2px;font-size:16px;color::#8dc53f"><i class="glyphicon glyphicon-signal" style='color:#8dc53f'></i> HotelAmenities</p>
                            <ul class='amenities_list' style='padding-left:10px;font-size:14px;' multiple>
                          <?php   foreach($amenities as $amenity)
                            {
                            ?>
                                <li style='display: inline-block'><input type='checkbox' name='type[]' value="<?php echo $amenity['id']; ?>" onchange="abc();" class="amenities" /> <?php echo $amenity['name']; ?></li>
                                <?php
                            }
                            ?>
                            </ul>
                        </div>
						<!-- <div>
                        <p style="padding:10px 30px;font-size:13px;border-top: 1px solid lightgray;word-spacing:2px"><i class="fas fa-hotel" style='color:#8dc53f;'></i> Accomodation Type</p>
						<ul class='amenities_list' style='font-size:12px;' multiple>
								<li><input type='checkbox' name='resort' />Resort</li>
								<li><input type='checkbox' name='swimming_pool' />Hotel</li>
								<li><input type='checkbox' name='villa' />Villa</li>
								<li><input type='checkbox' name='gym' />Apartment</li>
						</ul>
						</div> -->
						<div>
 <p style="padding:10px 30px;border-top: 1px solid lightgray;word-spacing:2px;font-size:16px;color::#8dc53f"><i class="glyphicon glyphicon-star-empty" style='color:#8dc53f'></i> Star Rating</p>
                        <ul class='amenities_list' style='padding-left:10px;font-size:14px'>
                                <li style='word-spacing:2px'><input type='checkbox' name='rating[]' value=1 onclick="abc();" class="example" />1 Star <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> </li>
                                <li style='word-spacing:2px'><input type='checkbox' name='rating[]' value=2  onclick="abc();" class="example" />2 Star <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> </li>
                                <li style='word-spacing:2px'><input type='checkbox' name='rating[]' value=3  onclick="abc();" class="example" />3 Star <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i></li>
                                <li style='word-spacing:2px'><input type='checkbox' name='rating[]' value=4 onclick="abc();" class="example" />4 Star <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i></li>
                                <li style='word-spacing:2px'><input type='checkbox' name='rating[]' value=5  onclick="abc();" class="example" />5 Star <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i></li>
                            
                        </ul>
                        </div>
                        <!-- </form> -->

                    </div>
                </div>

                <div class="col-md-9" style="height:'';padding-top: 2%;">
                    <div class="row">
                        <div class="col-md-6" style="height: 30px;"><?php echo $count;?> results found</div>
                        <div class="col-md-6" style="height: 30px;">
                            <i class="fa fa-th-large pull-right" id="grid"></i> &nbsp;&nbsp;
                            <i class="fa fa-th-list pull-right" id="list"></i>
                        </div>
                    </div>
			<div class='row'>
				<div class='col-md-10 col-md-offset-1 text-center' style='padding:20px'>
					<p style='color:#efab61;border: 1px dotted #efab61;fontsize:14px;text-align:center'>  <i class="fas fa-percent" style='color:white;background-color:#efab61'></i>   Coupon BOOK25 Applied on all. Get Upto 25% off till 31st Dec. Read T&C</p>
				</div>
			</div>
            <div class="clearfix"></div>

            <!-- grid start -->
            <div id="griditems">
                <div class="row">
                <?php
                if(empty($hotels))
                {
                    echo "No Results Found";
                }
                else {
                
                
                foreach($hotels as $hotel)
                {
                    ?>
                    <div class="col-md-6">
                        <div class="" style="box-shadow: inset 0px 0px 5px 2px #eaebed;
                            border-radius: 5px;margin-top: 2%;">
                            <div class="col-md-12" style='padding-left:15px !important'>
                                <img style="padding-top: 10px;width:470px;height:225px;" align='center' src="<?php echo base_url();?>/uploads/<?php echo $hotel['hotel_pic']; ?>" alt="Hyderbad" title="Hyderabad" class="img-responsive center-block" />
                            </div>
                            <div class="row" style="padding: 20px;">
                                <div class="col-md-6"></div>

                                <!-- <div class="col-md-6" style="margin-top:3%;">
                                    <div class="col-md-6 " style="border-right: 1px solid lightgray;">
                                        <strike><span style="font-size: 16px;">₹ 1,500 </span>  </strike>
                                        <br>
                                        <span style="font-size: 16px;margin-top: 10px;color:red;">5% Off </span>
                                    </div>
                                    <div class="col-md-6">
                                        <span style="font-size: 20px;font-weight: 400;">₹ 1,426 </span>
                                        <br>
                                        <span style="font-size: 14px;padding-top: 5px;">Room/Night</span>
                                    </div>
                                </div> -->
							<div>	
                                <div class="col-md-7" style='padding-right: 25px;padding-left: 25px;margin-top:20px'>
                                    <span style="font-size: 18px;color: #404040;display:inline"><?php echo $hotel['hotel_name']; ?></span>
									
                                    <br>
                                    <span style="font-size: 14px;color:grey;"><?php echo $hotel['location']; ?></span>
									
                                    <p style="color:#f5a623;"> 
                                    <?php
                                    if($hotel['hotel_grade']!=0)
                                    {
                                    for($i=1; $i<= $hotel['hotel_grade']; $i++)
                                        {
                                            ?>
                                            <i class="fa fa-star" checked></i> 
                                            <?php
                                        }
                                    }
                                    // else
                                    // {
                                    //     echo "No Star Rating found";
                                       
                                    // }
                                 ?>
                                   </p>
                                    <span style="  font-size: 12px;  padding: 3px  7px !important;border: 1px solid #ebebeb !important;border-radius: 5px;">Couples</span>
                                    <span style="  font-size: 12px;  padding: 3px  7px !important;border: 1px solid #ebebeb !important;border-radius: 5px;">Solo Travel</span>
                                    <span style="  font-size: 12px;  padding: 3px  7px !important;border: 1px solid #ebebeb !important;border-radius: 5px;">Family</span>

                                </div>
								<div class='col-md-5' style='padding-right: 25px;padding-left: 25px;margin-top:20px'>
									<div class="col-md-6 " style="border-right: 1px solid lightgray;">
                        <strike>
                            <span style="font-size: 16px;">₹<?php echo $hotel['base_price']; ?></span>
                        </strike>
                        <br>
                        <span style="font-size: 12px;margin-top: 10px;color:red;"><?php echo (100-(($hotel['min_price']/$hotel['base_price'])*100));?>%Off </span>
                    </div>
                    <div class="col-md-6">
                        <span style="font-size: 20px;font-weight: 400;" >₹<?php echo $hotel['min_price']; ?></span>
                        <br>
                        <span style="font-size: 14px;padding-top: 5px;">Room/Night</span>
                
                    </div>
								</div>
							</div>	
                                <div class="col-md-12 pull-right ">
                                    <div style="text-align:right">
									  <p>
                                        <a href="<?php echo base_url(); ?>index.php/hotel/get_hotel_by_id/<?php echo $hotel['id']; ?>/<?php echo str_replace(' ', '',$date_range); ?>/<?php echo preg_replace('/[ ,]+/', '', $rooms); ?>" style="padding: 10px 20px;background-color:#8dc53f;color: white;border: 1px solid #8dc53f;border-radius: 5px;">Book Now </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                        }
                    ?>                           
                             
            </div>

        </div>
        <!-- grid end-->
        <!-- list start-->
        <div  id="listitems" style='display:none'>
            <?php 
        foreach($hotels as $hotel)
                {
                    ?>
            <div class="col-md-12" style="box-shadow: inset 0px 0px 5px 2px #eaebed; border-radius: 5px;margin-top: 2%;margin-bottom: 2%;padding:20px;">
                <div class="col-md-4">
                    <img src="<?php echo base_url();?>/uploads/<?php echo $hotel['hotel_pic']; ?>" alt="Hyderbad" title="Hyderabad" class="img-responsive center-block"
                    />
                </div>
                <div class="col-md-5" style="margin-top: 2%;">
                    <span style="font-size: 18px;color: #404040;"><?php echo $hotel['hotel_name']; ?></span>
                    <br>
                    <span style="font-size: 14px;color:grey;"><?php echo $hotel['location']; ?></span>
                    <p style="color:#f5a623;">
                        <!-- <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i> -->
                        <?php
                                    if($hotel['hotel_grade']!=0)
                                    {
                                    for($i=1; $i<= $hotel['hotel_grade']; $i++)
                                        {
                                            ?>
                                            <i class="fa fa-star" checked></i> 
                                            <?php
                                        }
                                    }
                                    // else
                                    // {
                                    //     echo "No Star Rating found";
                                       
                                    // }
                                 ?>
                    </p>
                    <span style="  font-size: 12px;  padding: 3px  7px !important;border: 1px solid #ebebeb !important;border-radius: 5px;">Couples</span>
                    <span style="  font-size: 12px;  padding: 3px  7px !important;border: 1px solid #ebebeb !important;border-radius: 5px;">Solo Travel</span>
                    <span style="  font-size: 12px;  padding: 3px  7px !important;border: 1px solid #ebebeb !important;border-radius: 5px;">Family</span>
                </div>
                
                
                <div class="col-md-3" style="margin-top:3%">
                    <div class="col-md-6 " style="border-right: 1px solid lightgray;">
                        <strike>
                            <span style="font-size: 16px;">₹ 1500</span>
                        </strike>
                        <br>
                        <span style="font-size: 16px;margin-top: 10px;color:red;">5% Off </span>
                    </div>
                    <div class="col-md-6">
                        <span style="font-size: 20px;font-weight: 400;" >₹ 1000</span>
                        <br>
                        <span style="font-size: 14px;padding-top: 5px;">Room/Night</span>
                
                    </div>
                </div>
                
                <div class="col-md-6 pull-right " style="margin-top:0%">
                        
                        <div style="text-align:right;">
                                <!-- <a href="booking1.html" style="padding: 10px 20px;background-color:#8dc53f;color: white;border: 1px solid #8dc53f;border-radius: 5px;">Book Now </a> -->
                                <a href="<?php echo base_url(); ?>index.php/hotel/get_hotel_by_id/<?php echo $hotel['id']; ?>/<?php echo str_replace(' ', '',$date_range); ?>/<?php echo preg_replace('/[ ,]+/', '', $rooms); ?>" style="padding: 10px 20px;background-color:#8dc53f;color: white;border: 1px solid #8dc53f;border-radius: 5px;">Book Now </a>
                        </div>
                </div>
        </div>
        <?php
                    }
                        // }
                    ?>  
        </div>
        </div>
    </div>
</div>
    </section>

<?php include("footer.php"); ?>

 
    <!--Activating WOW Animation only for modern browser-->
    <!--[if !IE]><!-->
    <script type="text/javascript">
        new WOW().init();
    </script>
      <script>

     
     function abc()
{
//       $('input.example').on('change', function() {
//     $('input.example').not(this).prop('checked', false);  
// });
     $('#form').submit();
}
function xyz()
{
//       $('input.example').on('change', function() {
//     $('input.example').not(this).prop('checked', false);  
// });
     $('#form1').submit();
}
 </script>
    <!--<![endif]-->

    <!-- my js -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/main.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/js/jquery-date-range-picker-master/dist/daterangepicker.min.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery-date-range-picker-master/src/jquery.daterangepicker.js"></script>

    <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
     -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA084TI9mG1OMcJkrEsBb0LDy5f7EpwL94&libraries=places"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/multirange.js"></script>

    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/list.min.js"></script> -->
    

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#list').css("color", "#007acc");
            $('[data-toggle="popover"]').popover({
                placement: 'bottom',
                container: 'body',
                html: true,
                content: function() {
                    return $(this).next('.popper-content').html();
                }
            });

             $('.dropdown-menu>input').click(function(e){
	            e.stopPropagation();
                });
            $('#roomsearch').click(function(){
                search();
            });
            $('#locationsearch').click(function(){
                var location = $('#places').val();
                $('#placetext').val(location);
                search();
            });
            function search(){
                var place = $('#placetext').val();
                var date = $('#datetext').val();
                var rooms = $('#roomtext').val();
                var url="<?php echo base_url(); ?>index.php/hotel/search?location="+place+"&daterange="+date+"&rooms="+rooms;
                // alert(url);
                
                window.location = url;
                
            }

            var start= '<?php echo $start ?>';
            var end= '<?php echo $end ?>';
            
            function cb(start, end) {
                  $('#datetext').val(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
                  search();
                }

               $('#date').daterangepicker({
                        startDate: start,
                        endDate: end, 
                        minDate:moment(),
                        autoApply:true,
                        locale:{
                            format:'YYYY-MM-DD' 
                        }
                        // maxDate:moment().add(29, 'days')                   
                    },cb);

                cb(start, end);
        });

        function initialize() {
                var options = {
                    types: ['(cities)'],
                    componentRestrictions: {country: "IN"},
                    };
            
            var input = document.getElementById('places');
            new google.maps.places.Autocomplete(input,options);
        }
        google.maps.event.addDomListener(window, 'load', initialize);

        
        $(document).on('click', '.minus', function(e) {
            var suffix = this.id.match(/\d+/);
            var minvalue = $('#spinner' + suffix).attr('min-value');
            if (parseFloat($('#spinner' + suffix).val()) > minvalue) {
                // $('#spinner'+suffix).val(parseFloat($('#spinner'+suffix).val())-1);
                $('#spinner' + suffix).attr('value', parseFloat($('#spinner' + suffix).val()) - 1);

            }
            var guests = parseFloat($('#spinner2').val()) + parseFloat($('#spinner3').val());
            $('#roomtext').val($('#spinner1').val() + ' Rooms , ' + guests + ' Guests');
            e.stopPropagation();

        });

        $(document).on('click', '.plus', function(e) {
            var suffix = this.id.match(/\d+/);
            var maxvalue = $('#spinner' + suffix).attr('max-value');
            if (parseFloat($('#spinner' + suffix).val()) < maxvalue) {
                //  alert(parseFloat($('#spinner'+suffix).val())+1);
                var newvalue = parseFloat($('#spinner' + suffix).val()) + 1;
                // $('#spinner'+suffix).val(parseFloat($('#spinner'+suffix).val())+1);
                $('#spinner' + suffix).attr('value', newvalue);

            }
            var guests = parseFloat($('#spinner2').val()) + parseFloat($('#spinner3').val());
            $('#roomtext').val($('#spinner1').val() + ' Rooms , ' + guests + ' Guests');
            e.stopPropagation();

        });

        $('#grid').click(function() {
            $('#grid').css("color", "#007acc");
            $('#list').css("color", "#000");

            $('#griditems').show();
            $('#listitems').hide();
        });
        $('#list').click(function() {
            $('#list').css("color", "#007acc");
            $('#grid').css("color", "#000");

            $('#griditems').hide();
            $('#listitems').show();
        });

        // var options = {
        //     valueNames: [ 'price' ]
        // };
        // var hackerList = new List('listitems', options);
    </script>

<script type="text/javascript">
   
        console.log("hai");
    $("input.example").each(function(){
     var check=$(this).val();
     console.log("hai");
     var result=new Array();
//       var a = "5";
// var x = new Array();
// x = a.split(",");
// alert(x.length);
     var myArr = "<?php echo $rating; ?>";
      result = myArr.split(",");

       var arrayLength = result.length;
     console.log(arrayLength);
for (var i = 0; i < arrayLength; i++) {
    if(check== result[i])
    {
    
        console.log("hello");
        // $(this).checked=true;
        $(this).prop('checked', true);
     }
 }
    
 });
    $("input.amenities").each(function(){
     var check=$(this).val();
     console.log("hai");
     var result=new Array();
//       var a = "5";
// var x = new Array();
// x = a.split(",");
// alert(x.length);
     var myArr = "<?php echo $type; ?>";
      result = myArr.split(",");

       var arrayLength = result.length;
     console.log(arrayLength);
for (var i = 0; i < arrayLength; i++) {
    if(check== result[i])
    {
    
        console.log("hello");
        // $(this).checked=true;
        $(this).prop('checked', true);
     }
 }
    
 });
       </script>
         <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>


<script>
        function getVals(){
          // Get slider values
          var parent = this.parentNode;
          var slides = parent.getElementsByTagName("input");
            var slide1 = parseFloat( slides[0].value );
            var slide2 = parseFloat( slides[1].value );
          // Neither slider will clip the other, so make sure we determine which is larger
          if( slide1 > slide2 ){ var tmp = slide2; slide2 = slide1; slide1 = tmp; }
          
          var displayElement = parent.getElementsByClassName("rangeValues")[0];
              displayElement.innerHTML = " " + slide1 + " - " + slide2 + "";
        }
        
        window.onload = function(){
          // Initialize Sliders
          var sliderSections = document.getElementsByClassName("range-slider");
              for( var x = 0; x < sliderSections.length; x++ ){
                var sliders = sliderSections[x].getElementsByTagName("input");
                for( var y = 0; y < sliders.length; y++ ){
                  if( sliders[y].type ==="range" ){
                    sliders[y].oninput = getVals;
                    // Manually trigger event first time to display values
                    sliders[y].oninput();
                  }
                }
              }
        }
        </script>

		
		
		<!-- price Filter -->
		
		<!-- <script> -->
			<!-- $('#range').on("change", function() { -->
    <!-- $('.output').val(this.value +",000  $" ); -->
    <!-- }).trigger("change"); -->
		<!-- </script> -->
		
	<script>
	jplist.init();
	</script>	
		
		
</body>

</html>