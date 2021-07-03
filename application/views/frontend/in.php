<?php include("header.php"); ?>

<style>
header {
    box-shadow: 0 2px 6px 0 rgb(0 0 0 / 10%), 0 1px 2px 0 rgb(0 0 0 / 10%) !important;
    box-sizing: border-box !important;
    /*height: 70px;*/
}
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

* {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container1 {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container1 {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
/*.container {*/
/*    width:100%;*/
/*}*/
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
}

/* Tooltip text */
.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  padding: 5px 0;
  border-radius: 6px;
 
  /* Position the tooltip text - see examples below! */
  position: absolute;
  z-index: 1;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
  visibility: visible;
}

</style>
<div style='background-color:#fff;padding-bottom:3%'>
    <section>
        <div class="container" >
      <!--    <form action="" method="POST" id="form" style='background-color:white'> -->
		
			<div class="row" style='font-size:16px;-moz-box-shadow: 1px 0px 5px #e8cfcf;-webkit-box-shadow: 1px 0px 5px #e8cfcf;padding:20px;margin-top:30px;background-color:white;border-radius:10px'>

                        <div class="col-md-9" >
                            <!-- location -->
                            <span>
                                <input type="text" id="placetext" name="place" style="display: inline-block; width:160px;height: 30px;overflow: hidden;text-overflow: ellipsis; border: none;color:black" value="<?php echo $location ?>" readonly />
                            </span> &nbsp;
                            <span class="dropdown">
                                    <a href="#" id="place" style="color:blue;font-size:12px" data-toggle="dropdown">Change</a>
                                    <div class="dropdown-menu" style="width:400px;padding:20px">
                                    <span>Location</span><br><br>
                                    <!-- <div class= "row"style="margin-top: 30px;margin-left: 2% ;margin-right:2%"> -->
                                    
                                    <input id="places" type="text" class=""  placeholder="Location, Locality, Area " name="email" style="padding: 0px 14px;border:1px solid grey;text-align: center;min-height: 40px; width:160px;border-radius:5px "value="<?php echo $location ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="button" id="locationsearch" class="btn btn-primary" style="border-radius:5px">search</button>
                                    <!-- </div> -->
                                    </div>

                            </span> &nbsp; &nbsp;
                            <!-- date Range-->
                            <span>
                                <input type="text" id="datetext" name="room" style="display: inline-block; width: 160px;height: 30px;overflow: hidden;text-overflow: ellipsis; border: none;color:black" value="<?php echo  $date_range; ?>" readonly/>
                            </span> &nbsp;
                            <span>
                                    <a href="#" id="date" style="color:blue;font-size:12px">Change</a>
                            </span> &nbsp; &nbsp;
                            <!-- rooms and Guests text -->
                            <span>
                                <input type="text" id="roomtext" name="rooms" style="display: inline-block; width: 140px;height: 30px;overflow: hidden;text-overflow: ellipsis; border: none;color:black" value="<?php echo  $rooms; ?>" readonly/>
                            </span> &nbsp;
                            <input type="hidden" value = "" id="roomtexthidden"  />
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
                                        <input type="text"  id="spinner2" class="spin" value="<?php echo $adults ?>"  min-value=1 max-value=12 readonly>
                                        <button type="button" class="plus" id="plus2"><i class="fa fa-plus"></i></button>
										
										</div>
                                    </div>
                                <br>
                                    <div class="input-group">
                                        <label style="width: 100px;">Children  <br><span style="font-size: 10px;">Below 7 years</span></label>
                                        <div align='center'>
										<button type="button" class="minus" id="minus3"><i class="fa fa-minus"></i></button>
                                        <input type="text" id="spinner3" class="spin" value="<?php echo $children ?>" min-value=0 max-value=18 readonly>
                                        <button type="button" class="plus" id="plus3"><i class="fa fa-plus"></i></button>
										
										</div>
                                    </div>
                                <br>
                                    <button id="roomsearch" type="button" class="btn btn-primary" style="border-radius:5px">Search</button>
                                    </div>
                            </span>
                         </div>
                <div class="col-md-3">
               
                  <!--  <form action="<?php echo base_url(); ?>index.php/hotel/search?location=<?php echo $location; ?>&daterange=<?php echo $date_range; ?>&rooms=<?php echo $rooms; ?>" method="GET" id="form1"> -->
                      <form action="" method="POST" id="form">
					   Sort By:
                    <select name="sort" id="sort" style="border:0.5px solid #e4e4e4;" onchange="abc();">
                    <option value="">Select option</option>
                        <option value="0">Popularity</option>
                        <option value="1">Price High to Low</option>
                        <option value="2">Price Low to High</option>
                        <option value="3">Discount</option>
                    </select>
              
                 
                </div>
            </div>
		
		
            <div class="row" style='margin-top:20px'>

                <div class="col-md-3" style="padding-top: 16px;
    border-right: 1px solid #e1e2e3;
    border-left: 1px solid #e1e2e3;
    border-top: 1px solid #e1e2e3;
    border-radius: 4px;
    background-color: #fff;
    height: auto;
    position: -webkit-sticky;
    position: sticky;
    bottom: 0;
    vertical-align: bottom;
   
    display: inline-block;
    min-height: calc(100vh - 80px);">
                    <div class="row">
                        <h3 class="text-center" style="padding-top:10px;">Filters</h3>
                        <!-- <input type="range"  Minimum = 100, Maximum = 500, Step = 10 /> -->
                        <!-- <p style="padding:10px 30px;border-bottom: 1px solid lightgray">Price</p>    -->
                      
                  <div  style='background-color:white'>
<div style="margin-left: 20px;">
                        <p style="padding:10px 30px;border-top: 1px solid lightgray;word-spacing:2px;margin-left:-20px;"><i class="fa fa-rupee-sign" style='color:#005b80'></i> Price</p>
					
                        <section class="range-slider" onchange="price();">
              <textarea name="pricerange" class="rangeValues" rows="1" cols="25" style="text-align: center;
 border-style: none; border-color: Transparent; overflow: auto;resize: none;" readonly >  </textarea>
             <!--    <input  min="<?php echo $min_value; ?>"  value="<?php echo $min;?>" step="500" type="range">
                <input   max="<?php echo $max_value; ?>" value="<?php echo $max; ?>"step="500" type="range"> -->
                 <input  min="<?php if(isset($min_value)) {echo $min_value; }else{ echo 0; }?>"  value="<?php if(isset($min)) {echo $min;}else{echo 0; } ?>" step="500" type="range">
                <input   max="<?php if(isset($max_value)) {echo $max_value; }else{ echo 0; }?>" value="<?php if(isset($max)) {echo $max;}else{echo 0; } ?>"step="500" type="range">
                <input type="hidden" name="min" value="<?php if(isset($min_value)) {echo $min_value; }else{ echo 0; }?>">
                <input type="hidden" name="max" value="<?php if(isset($max_value)) {echo $max_value; }else{ echo 0; }?>" >
                <input type="hidden" name="original" id="original" value=<?php if(isset($original)) {echo $original; }else{ echo 0; }?> >
        </section>
  
        </div>
        
                                              
						
						
						
						 <div class='row'  style="margin-top: 85px;">
                        <p style='padding:10px 30px;border-top: 1px solid lightgray;word-spacing:2px;width:90%;margin-left: 15px;'><i class="fas fa-hotel" style='color:#005b80;'></i> Popular Areas</p>
						<ul class='amenities_list' style="margin-right:30px" multiple>
            <?php 

            foreach($areas as $area)
            {
              ?>
           
								<li><input type='checkbox' name='area[]' value="<?php echo $area['area']; ?>" onclick="abc();" class="areas" />&nbsp;<?php echo $area['area']; ?></li>
							
                <?php
              }
              ?>
						</ul>
						</div>
						
						
						
						
						<div class='row'>
						<p style="padding:10px 30px;border-top: 1px solid lightgray;word-spacing:2px;width:90%;margin-left: 15px;margin-top:10px"><i class="glyphicon glyphicon-star" style='color:#005b80'></i> Star Rating</p>
                        <ul class='amenities_list' style='margin-right:30px'>
                                <li style='word-spacing:2px'><input type='checkbox' name='rating[]' value=1 onclick="abc();" class="example" />&nbsp;1 Star<i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> </li>
                                <li style='word-spacing:2px'><input type='checkbox' name='rating[]' value=2  onclick="abc();" class="example" />&nbsp;2 Star<i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> </li>
                                <li style='word-spacing:2px'><input type='checkbox' name='rating[]' value=3  onclick="abc();" class="example" />&nbsp;3 Star<i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i></li>
                                <li style='word-spacing:2px'><input type='checkbox' name='rating[]' value=4 onclick="abc();" class="example" />&nbsp;4 Star<i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i></li>
                                <li style='word-spacing:2px'><input type='checkbox' name='rating[]' value=5  onclick="abc();" class="example" />&nbsp;5 Star<i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i> <i class="glyphicon glyphicon-star-empty" style='color:#f5a623'></i></li>
                            
                        </ul>
                        </div>
                      </form>
                    </div>
                </div>
                </div>

                <div class="col-md-9" style="height:'';padding-top: 2%;">
                    <div class="row">
                        <div class="col-md-6" style="height: 30px;"><?php
                        if($count==0){
                            echo "No Hotels Found in this City";
                        }
                        else {
                        echo "$count Hotels Found";
                         
                        }
                        ?>
                        </div>
                        <div class="col-md-6" style="height: 30px;">
                            <i class="fa fa-th-large pull-right" id="grid"></i> &nbsp;&nbsp;
                            <i class="fa fa-th-list pull-right" id="list"></i>
                        </div>
                    </div>
              
			<!-- <div class='row'> -->
				<!-- <div class='col-md-10 col-md-offset-1 text-center' style='padding:20px'> -->
					<!-- <p style='color:#efab61;border: 1px dotted #efab61;fontsize:14px;text-align:center'>  <i class="fas fa-percent" style='color:white;background-color:#efab61'></i>   Coupon BOOK25 Applied on all. Get Upto 25% off till 31st Dec. Read T&C</p> -->
				<!-- </div> -->
			<!-- </div> -->

            <div class="clearfix"></div>

            <!-- grid start -->
            <div id="griditems" style="display:none">
                <div class="row">
                <?php
                if(empty($hotels))
                {
                    echo "No hotels found in this city";
                }
                else {
                
                
                    foreach($hotels as $hotel)
                    {
                        ?>
                        <div class="col-md-6"  style=''>
                            <div class="" style="
    border: solid 1.5px #005b80;
    padding: 0!important;
    margin-top: 40px!important;
    border-radius: 5px;">
                                <div class="col-md-12" style='padding-left:15px !important'>
                                    <img style="padding-top: 10px;width:470px;height:225px;" align='center' src="<?php echo base_url();?>/uploads/<?php echo $hotel['hotel_pic']; ?>" alt="Hyderbad" title="Hyderabad" class="img-responsive center-block" />
                                </div>
                                <div class="row" style="padding: 20px;">
                                   
    
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
                                    <div class="col-md-6" style='margin-top:20px;
                                    overflow: hidden;text-overflow: ellipsis;'>
                                        <h3 style="font-size: 18px;font-weight: 700;line-height: 24px;color: #222;"><?php echo $hotel['hotel_name']; ?></h3>
                                        <p style="margin:1px;color:#f5a623;"> 
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
                                        ?>
                                        </p>
                                        <span style="font-size: 14px;color:grey;padding:1px 3px;"><?php echo $hotel['location']; ?></span>
                                        
                                       

                                </div>

								<div class='col-md-6' style='margin-top:20px;overflow: hidden;text-overflow: ellipsis;'>
									<div class="col-md-6 " style="border-right: 1px solid lightgray;">
                        <strike>
                            <span style="font-size: 16px;">₹<?php echo $hotel['base_price']; ?></span>
                        </strike>
                        <br>
                        <span style="font-size: 16px;margin-top: 10px;color:red;overflow: hidden;text-overflow: ellipsis;"><?php echo round((100-($hotel['min_price']/$hotel['base_price'])*100));?>%Off </span>
                    </div>
                    <div class="col-md-6" >
                        <span style="font-size: 20px;font-weight: 400;overflow: hidden;text-overflow: ellipsis;" >₹<?php echo $hotel['min_price']; ?></span>
                        <br>
                        <span style="font-size: 14px;padding-top: 5px;">Room/Night</span>
                
                    </div>
								</div>
							</div>	
                                <div class="col-md-12 pull-right ">
                                    <div style="text-align:right">
									  <p>
                                       <!--  <a href="<?php echo base_url(); ?>index.php/hotel/get_hotel_by_id/<?php echo $hotel['id']; ?>/<?php echo $date_range; ?>/<?php echo $room; ?>/<?php echo $adults; ?>/<?php echo $children; ?>" style="padding: 10px 20px;background-color:#8dc53f;color: white;border: 1px solid #8dc53f;border-radius: 5px;">Book Now </a> -->
                                         
                                          <a href="<?php echo base_url(); ?>index.php/hotel/get_hotel_by_id_sample/<?php echo $hotel['id']; ?>/<?php echo $date_range; ?>/<?php echo $room; ?>/<?php echo $adults; ?>/<?php echo $children; ?>" style="padding: 10px 20px;background-color:#f79517;color: white;border: 1px solid #f79517;border-radius: 5px;">Book Now </a>
                                       </p>
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
        <div  id="listitems">
            <?php 
        foreach($hotels as $hotel)
                {
                    ?>
            <div class="col-md-12" style="box-shadow: inset 0px 0px 5px 2px #eaebed; border-radius: 10px;margin-top: 1%;margin-bottom: 2%;padding:15px 10px;background-color:white;border: solid 1.5px #005b80;">
               <!--  <div class="col-md-4" style="padding-left:4px !important;"> -->
                   <!--  <img src="<?php echo base_url();?>/uploads/<?php echo $hotel['hotel_pic']; ?>" alt="<?php echo $hotel['hotel_name']; ?>" title="<?php echo $hotel['hotel_name']; ?>" style="border-radius: 0.5rem;" class="img-responsive center-block"
                    />  -->

                    <!-- Container for the image gallery -->
                    <div class="col-md-4" style="padding-left:4px !important;">
<div class="container1"> 
<?php 

$i=0;
$status='none';
$count=count($hotel['gall']);
    foreach($hotel['gall'] as $gal){
        ++$i;
        if($i==1) {$status='block';}else{$status='none';}
        ?>
        
  <!-- Full-width images with number text -->
  <div class="mySlides<?php echo $hotel['id']?>" style="display: <?php echo $status;?>;height: 160px;width: 250px;" >
   <!--  <div class="numbertext"><?php //echo $i."/".$count;?></div> -->
      <img src="<?php echo base_url(); ?>gallery/<?php echo $gal['hotel_id'].'/commonfiles'.'/'.$gal['gallery']?>" style="width:100%;height: 100%;">
  </div>
<?php  if($i==6){break;} }?>

 

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(<?php echo $hotel['id']?>,0)">&#10094;</a>
  <a class="next" onclick="plusSlides(<?php echo $hotel['id']?>,-1)">&#10095;</a>

  <!-- Image text -->
  <!-- <div class="caption-container1">
    <p id="caption"></p>
  </div> -->

  <!-- Thumbnail images -->
  <div class="row" class="col-md-4" style="width: 250px;margin-left: 0px;">
    <?php 
$i=0;
$flag='';
$count=count($hotel['gall']);
    foreach($hotel['gall'] as $gal){
        $i++;
        if($i==1) {$flag="active";}else {$flag="demo".$hotel['id']." cursor";}?>
     <?php if($i<=5){?>   
    <div class="column">
      <img class="<?php echo $flag?>" src="<?php echo base_url(); ?>gallery/<?php echo $gal['hotel_id'].'/commonfiles'.'/'.$gal['gallery']?>" style="width:100%;height: 40px;" onclick="currentSlide(<?php echo $hotel['id'].",".$i;?>)" alt="">
    </div>
<?php } else{?>
    <div class="column">
      <button class="<?php echo $flag?>"  style="width:100%;height: 40px;background-image: url(<?php echo base_url(); ?>gallery/<?php echo $gal['hotel_id'].'/commonfiles'.'/'.$gal['gallery']?>);background-color: #cccccc;background-size: cover;" onclick="<?php echo base_url(); ?>index.php/hotel/get_hotel_by_id_sample/<?php echo $hotel['id']; ?>/<?php echo $date_range; ?>/<?php echo $room; ?>/<?php echo $adults; ?>/<?php echo $children; ?>" alt="" ><a style="color: white;"href="<?php echo base_url(); ?>index.php/hotel/get_hotel_by_id_sample/<?php echo $hotel['id']; ?>/<?php echo $date_range; ?>/<?php echo $room; ?>/<?php echo $adults; ?>/<?php echo $children; ?>">See All</a></button>


    </div>
    <?php }if($i==6)break;}?>
  
  </div>
</div>
<input id="hids" value="<?php echo $hotel['id']?>" type="hidden" class="hids"></input>
     <!-- <script type="text/javascript">
        var hid='<?php echo $hotel["id"]?>';
        alert(hid);
    showSlides(hid,1);
</script>  -->              <?php 
                    // print_r($hotel); 
                    ?>
                </div>
                <div class="col-md-4" style="margin-top: 1%;">
                    <p style="color:#f79517"><?php
                                        if($hotel['hotel_grade']!=0)
                                        {
                                        for($i=1; $i<= $hotel['hotel_grade']; $i++)
                                            {
                                                ?>
                                                <i class="fa fa-star" checked></i> 
                                                <?php
                                            }
                                        }
                                        ?> &nbsp;&nbsp;HOTEL</p>
                   <h3 style="font-size: 18px;font-weight: 700;line-height: 24px;color: #222;"><?php echo $hotel['hotel_name']; ?> 
                      
                   
                </h3>
                    <!--<br>-->
                    <span style="font-size: 14px;color:#005b80;" class="tooltiptext" data-toggle="tooltip" data-placement="right" title="<?php echo $hotel['hotel_address']; ?>"><?php echo $hotel['area']; ?>, <?php echo $hotel['location']; ?></span>
                    <br>
                       
                     <div style="margin-top:3%"> 
                     <?php $hotel1=explode(',',$hotel['amenities']); $am=count($hotel1);
                    //  explode(',',$hotel['amenities']);
			foreach($amenities as $amenity) {
				// for($i=0; $i< count($hotel1); $i++) {
				if($am<=3) $am=$am;
								else $am=3;		
								for($i=0;$i<$am;$i++) {
					if($amenity['id']== str_replace(' ', '',$hotel1[$i])) {
		?>
                    <span> <img src="<?php echo $amenity['icon']; ?>" width="14px" onerror="this.src='https://res.cloudinary.com/mallinamala/image/upload/v1620106252/olakite_amenities/tick_mfdhy9.svg';">&nbsp;&nbsp;<span style="font-size:12px"><?php  echo $amenity['name']; ?></span></span><br>
                        <?php } } } ?>
                        </div>
                        <div style="margin-top:3%"> 
                        <ul class="list-unstyled mb-2 d-md-flex flex-lg-wrap flex-xl-nowrap">
                                                    <?php 
                                                       // print_r($a);
                                                       foreach($hotel['options'] as $opt){
                                                       
                                                        if($opt['pay_at_hotel']=='on'){
                                                        
                                                                       ?>
                                                            <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0">
                                                        <span class="font-weight-normal font-size-14">Pay At Hotel</span>
                                                    </li>
                                                       <?php                                                  } elseif($opt['free_cancelation']=='on') {
                                                        
                                                                       ?>
                                                            <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0">
                                                        <span class="font-weight-normal font-size-14">Free Cancellation</span>
                                                    </li>
                                                       <?php                                                  }  
                                                       if($opt['couple_friendly']=='on') {
                                                        
                                                                       ?>
                                                            <li class="border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0">
                                                        <span class="font-weight-normal font-size-14">Couple Friendly</span>
                                                    </li>
                                                       <?php                                                  }  break;}
                                                        ?>
                                                    </ul>
                       </div>
                      
                   
                </div>
                
              
                <div class="col-md-4" style="margin-top:1%;text-align:right;border-left: 0.1rem solid rgb(232, 243, 255);">
                  
                    <div class="col-md-12">
                          <?php
				$qid=$hotel['id'];
                                                $reservation = $this->db->get_where('room_categories', array('id' => $qid));
                                                
                                               
                                                // 	$i=1;
                                                foreach ($reservation->result() as $row){
// {
//     echo $row->name;
// }
                                                

										
                                           
        //                                       foreach($travel_agent as $rev){ 
											   
											   ?>
                        <span style="border-radius: 1.5rem;
    
    color: rgb(43, 172, 54);
    background-color: rgb(233, 246, 234);
    font-size:12px;
    padding: 0.3rem 0.8rem;
    border: none;"><span><?php echo $row->refund_status; ?> Booking</span></span>
  
											   <?php
                                                }
                                                ?>
    <br>
                        <span style="margin-right: 8px;
    font-size: 24px;
    font-weight: 700;
    color: #ee2a24;" >₹ <?php echo $hotel['min_price']; ?></span><span style="text-decoration: line-through;font-size:16px;color: #6d787d;margin-right: 8px;">₹ <?php echo $hotel['base_price']; ?></span><span style="font-size: 14px;
    font-weight: 600;
    color: #f5a623;
    line-height: 25px;"><?php echo number_format(100-($hotel['min_price']/$hotel['base_price'])*100); ?>%</span>
                        <br>
                        <span style="font-size: 14px;padding-top: 5px;">Room/Night</span>
                        <br><br>
                        <div style="text-align:right;margin-top:15%" class="pull-right">
                                <!-- <a href="booking1.html" style="padding: 10px 20px;background-color:#8dc53f;color: white;border: 1px solid #8dc53f;border-radius: 5px;">Book Now </a> -->
                                <a href="<?php echo base_url(); ?>index.php/hotel/get_hotel_by_id_sample/<?php echo $hotel['id']; ?>/<?php echo $date_range; ?>/<?php echo $room; ?>/<?php echo $adults; ?>/<?php echo $children; ?>" style="padding: 10px 20px;background-color:#f79517;color: white;border: 1px solid #f79517;border-radius: 5px;">Book Now </a>
                        </div>
                
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
</div>


 
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
function price()
{
    $('#original').val(1);
    abc();
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

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css">

    <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
     -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAScIOzzgjWSSmaFPm0iCk7PtHgeBHRBFc&libraries=places"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/multirange.js"></script>

    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/list.min.js"></script> -->
    

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        $(document).ready(function() {
            var rooms = <?php echo $room ?>;
            var adults = <?php echo $adults ?>;
            var children = <?php echo $children ?>;
            var h_ids = document.getElementsByClassName("hids");
 
            $('#roomtexthidden').val(rooms + ' Rooms'+adults+' Adults'+children+' Children');
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
                var rooms = $('#roomtexthidden').val();
                var url="<?php echo base_url(); ?>index.php/hotel/search?location="+place+"&daterange="+date+"&rooms="+rooms;
                // alert(url);
                
                window.location = url;
                
            }

            var start= '<?php echo $start ?>';
            var end= '<?php echo $end ?>';
            
            function cb(start, end) {
                  $('#datetext').val(start.format('YYYY-MM-DD')+'+-+'+ end.format('YYYY-MM-DD'));
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

        

        //Modified the below  minus and plus sipnner logic to have rooms and adults relation
        $(document).on('click', '.minus', function(e) {
            var suffix = this.id.match(/\d+/);
            var minvalue = $('#spinner' + suffix).attr('min-value');
            if (parseFloat($('#spinner' + suffix).val()) > minvalue) {
                $('#spinner'+suffix).val(parseFloat($('#spinner'+suffix).val())-1);
            }
            var guests = parseFloat($('#spinner2').val());
            $('#roomtext').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
            $('#roomtexthidden').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
            e.stopPropagation();

        });

        $(document).on('click', '.plus', function(e) {
            var suffix = this.id.match(/\d+/);
            var maxvalue = $('#spinner' + suffix).attr('max-value');
            if (parseFloat($('#spinner' + suffix).val()) < maxvalue) {
                $('#spinner'+suffix).val(parseFloat($('#spinner'+suffix).val())+1);

            }
            var guests = parseFloat($('#spinner2').val())
            $('#roomtext').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
            $('#roomtexthidden').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
            e.stopPropagation();

        });
             
        $(document).on('click', '#plus1', function(e) {
                if (parseFloat($('#spinner2').val()) < 11) {
                $('#spinner2').val(parseFloat($('#spinner1').val()) * 2 );
                $('#roomtext').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                $('#roomtexthidden').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                }
                e.stopPropagation();
            });

                
        $(document).on('click', '#minus1', function(e) {
                if(parseFloat($('#spinner1').val()) > 1){
                    if(parseFloat($('#spinner2').val()) != 2){
                $('#spinner2').val(parseFloat($('#spinner2').val()) - 2 );
                    };
                };
                if(parseFloat($('#spinner1').val()) == 1){
                    $('#spinner2').val(2 );
                };
                $('#roomtext').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                $('#roomtexthidden').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
               
                e.stopPropagation();
            });
                
        $(document).on('click', '#plus2', function(e) {             
                var test = parseFloat($('#spinner2').val()) / 2;
                test = test + 0.5;
                test2 = Math.floor(test);
                $('#spinner1').val(test2);
                $('#roomtext').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                $('#roomtexthidden').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                console.log(test+'and'+test2);
            });
                
        $(document).on('click', '#minus2', function(e) {          
                var test = parseFloat($('#spinner1').val());
                var test2 = parseFloat($('#spinner2').val());
                if (test2 <= test ){
                    $('#spinner1').val(parseFloat($('#spinner2').val()));
                };                
                $('#roomtext').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                $('#roomtexthidden').val($('#spinner1').val() + ' Rooms,' +$('#spinner2').val()+' Adults,' + $('#spinner3').val()+' Children');
                console.log(test+'and'+test2);
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
        <script>
            $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
        </script>

        <script>
            
var slideIndex = 1;
var prev_slideIndex=1;
 var h_ids = document.getElementsByClassName("hids");

 for(var p=0;p<h_ids.length;p++){
   
showSlides(h_ids[p].value,1);
 }
// showSlides(3,1);
/*var hcount='<?php echo $count?>';
for(var i=0;i<hcount;i++){
    showSlides('<?php echo $hids['+i+'],1?>');
}*/
//var slideIndex=$this.getElementsByClassName
//showSlides(2,1);

// Next/previous controls
function plusSlides(n,id) {
  showSlides(n,id);
}

// Thumbnail image controls
function currentSlide(n,id) {
  showSlides(n,id);
}

function showSlides(n,slideIndex) {
  var i;
 // slideIndex=id;
  var slides = document.getElementsByClassName("mySlides"+n);
  var dots = document.getElementsByClassName("demo"+n);
  var captionText = document.getElementById("caption");
  if(slideIndex==0){slideIndex=prev_slideIndex+1;}
  if(slideIndex<0){slideIndex=prev_slideIndex-1;}
  if (slideIndex > slides.length) {slideIndex = 1}
    /*alert("n:"+n+"slideslength:"+slides.length+"slideIndex:"+slideIndex);
    alert("n:"+n+"dotslength:"+dots.length+"slideIndex:"+slideIndex);*/
  if (slideIndex < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
    //alert("dotsclass"+dots[i].className);
  }
  prev_slideIndex=slideIndex;
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
  return;
}
        </script>

</body>

</html>