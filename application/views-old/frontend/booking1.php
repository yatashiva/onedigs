<style>
  .wrapper {
    position: relative;
    margin: 0 auto;
    overflow: hidden;
    padding: 5px;
    height: 50px;
  }
  .list {
    position: absolute;
    left: 0px;
    top: 0px;
    min-width: 3000px;
    margin-left: 12px;
    margin-top: 0px;
  }
  .list li {
    position: relative;
    text-align: center;
    cursor: grab;
    cursor: -webkit-grab;
    color: #efefef;
    vertical-align: middle;
  }
  .scroller {
    text-align: center;
    cursor: pointer;
    padding: 7px;
    padding-top: 11px;
    white-space: no-wrap;
    vertical-align: middle;
    background-color: #fff;
  }
  .scroller-left {
    display: inline;
    float: left;
    color: #79e6ff;
  }
  .scroller-right {
    float: right;
    color: #79e6ff;
  }
  .dropbtn {
    color: green;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }
  .dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
  }
  .dropdown {
    position: relative;
    display: inline-block;
  }
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 350px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  .dropdown a:hover {
    background-color: #ddd;
  }
  .show {
    display: block;
  }
</style>
<?php include("header.php"); ?>
<div class="container">
  <?php
foreach ($hotels as $hotels)
{
?>
  <div class="row" style="padding-top: 2%;padding-bottom: 2%;">
    <div class="col-md-6">
      <span style="font-size: 20px !important;font-weight: 400">
        <?php  echo $hotels['hotel_name']; ?>
      </span>
      <span style="color:#f5a623;">
        <?php
for($i=1; $i<=$hotels['hotel_grade']; $i++)
{
?>
        <i class="fa fa-star">
        </i>
        <?php
}
?> 
      </span> &nbsp;&nbsp;&nbsp;
      <br>
      <span style="font-size: 14px;color:grey;">
        <?php echo $hotels['hotel_address']; ?>
      </span>
    </div>
    <div class="col-md-1">
    </div>
    <div class="col-md-5 float-right" style="padding-top: 2%;">
      <div class="col-md-5 " style="border-right:1px solid lightgray;">
        <input style="font-size: 14px;border:none;background-color:white;" type="text" value="<?php echo $daterange;?>" disabled>
        </input>
      <span style="font-size: 12px;">
      </span>
    </div>
    <div class="col-md-7" style="text-align:center;">
      <input id = "roomtxt" style="font-size: 14px;border:none;background-color:white;width:9px;" type="text" value="<?= $rooms ?>" disabled>
      </input>
    <span style="font-size: 14px;"> Rooms - 
    </span>
    <input id = "adulttxt" style="font-size: 14px;border:none;background-color:white;width:9px;" type="text" value="<?= $adults ?>" disabled>
    </input>
  <span style="font-size: 14px;"> Adults - 
  </span>
  <input style="font-size: 14px;border:none;background-color:white;width:9px;" type="text" value="<?= $children ?>" disabled>
  </input>
<span style="font-size: 14px;"> Children
</span>

<!-- adding this anchor tag, as we are modifying the functionality-->
<br><span >
<a href="#" class="editbtn1" data-toggle="modal"
data-target="#myModal" id="cngeRmsAnc" style="pointer-events:none;" >Edit Rooms</a>
</span>

<!-- <span style="font-size: 14px;margin-top: 20px;">
<?php echo $rooms; ?> Rooms - <?php echo $adults; ?> Adults - <?php echo $children; ?> Children
</span> -->
<br>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="exBdCnt(<?php echo $rooms;?>)">&times;
        </button>
        <input type="hidden" value="" class="exBdCnt">
        <h4 class="modal-title">
          <h4> Room Selection 
          </h4>
          </div>
        <div class="modal-body" >
          <ul style="list-style-type: none;" id="roomRows">
          </ul>
        </div>
        <div class="modal-footer" >
          <button type="button"class="btn btn-success" onclick="addRw(rooms, 2)">Add Room
          </button>
          <button type="button"class=" btn btn-danger" onclick="dltRw()">Delete Room
          </button>
          <button type="button" class="btn btn-default" onclick="exBdCnt(<?php echo $rooms;?>)" data-dismiss="modal">Confirm
          </button>
          <input type="hidden" value="" class="exBdCnt">
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="row" style="padding-top: 2%;">
  <div class="col-md-6">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php 
$i= 0;
foreach ($gal as $key){ ?>
        <li data-target="#myCarousel" data-slide-to="< ?php echo $i ?>" >
        </li>
        <?php
$i++;
} ?>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <?php 
$j=0;
foreach ($gal as $gal ){ 
if($j==0){
?>
        <div class="item active">
          <?php }else{?>
          <div class="item">
            <?php  } ?>
            <img src="<?php echo base_url(); ?>gallery/<?php echo $gal['hotel_id'].'/commonfiles'.'/'.$gal['gallery']?>" style="width:555px; height:319px;"
                 alt="Los Angeles">
          </div>
          <?php  $j++; } ?>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left">
          </span>
          <span class="sr-only">Previous
          </span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right">
          </span>
          <span class="sr-only">Next
          </span>
        </a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row" style="padding-top:3%">
        <div class="col-md-12">
          <div>
            <div>
              <div class="scroller scroller-left">
                <i class="glyphicon glyphicon-chevron-left">
                </i>
              </div>
              <div class="scroller scroller-right">
                <i class="glyphicon glyphicon-chevron-right">
                </i>
              </div>
              <!-- <svg style="position: absolute;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> -->
              <!-- <defs> -->
              <!-- <symbol id="icon-point-left" viewBox="0 0 1792 1792"> -->
              <!-- <title>point-left</title> -->
              <!-- <path style='font-size:2px;width:2px' d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z"></path> -->
              <!-- </symbol> -->
              <!-- <symbol  id="icon-point-right" viewBox="0 0 1792 1792"> -->
              <!-- <title>point-right</title> -->
              <!-- <path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z"></path> -->
              <!-- </symbol> -->
              <!-- </defs> -->
              <!-- </svg> -->
              <!-- Nav tabs -->
              <div class='wrapper'>
                <ul class="nav nav-tabs list" id="myTab" role="tablist" style='border-bottom: 0px !important;'>
					<?php $x=1; foreach ($categories as $category=> $value) {
						if($x==1) {
					?>
						<li role="presentation" class="active">
						<a href="#tab1" role="tab" data-toggle="tab" style='height: 40px;padding-top: 5px;'>
						  <h5 class="text-center" style='font-size:15px;'>
							<?php echo $category; ?>
						  </h5>
						</a>
					  </li>
                  <?php } else { ?>
					  <li role="presentation">
						<a href="#tab<?php echo $x; ?>" role="tab" data-toggle="tab" style='height: 40px;padding-top: 5px;'>
						  <h5 class="text-center" style='font-size:15px;'>
							<?php echo $category; ?>
						  </h5>
						</a>
					  </li>
					  <!-- <li role="presentation">
						<a href="#tab<?php echo $x; ?>" role="tab" data-toggle="tab" style='height: 40px;padding-top: 5px;'>
						<h5 class="text-center" style='font-size:15px;'><?php echo $category; ?></h5>
						</a>
						</li>
						<li role="presentation">
						<a href="#tab<?php echo $x; ?>" role="tab" data-toggle="tab" style='height: 40px;padding-top: 5px;'>
						<h5 class="text-center" style='font-size:15px;'><?php echo $category; ?></h5>
						</a>
						</li> -->
                  <?php } $x++; } ?>
                </ul>
              </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
				<?php $x=1; $count=count($categories); if($count==0) { ?>
					<span style="font-size: 20px !important;padding-left:25% ;color:red">(Sorry, No rooms are vacant!)</span>
				<?php } foreach ($categories as $category) {
					$count=count($category);
					if($x==1) { 
				?>
					<div role="tabpanel" class="tab-pane active" id="tab1">
					<?php $j=1;	foreach($category as $cat ){ ?>
					<div class="row" style="padding-top:3%">
					<div class="col-md-7">
                    <?php 
						$this->load->model('Hotel_model');
						$params=array('hotel_id' =>$cat['hotel_id'],
						'category_id'=>$cat['category_id'],'sub_category_id'=>$cat['sub_category_id'],'date'=>$daterange ,'rooms'=>$rooms,'adults'=>$adults);
            $res= $this->Hotel_model->get_room_availability_sample($params);
						if($res=='true') {
					?>
						<input type="radio" id="cat_<?= $cat['sub_name'] ?>_rad" onclick="selectroom(this);" name="room" 
							data-catid = "<?= $cat['category_id'] ?>" data-subid = "<?= $cat['sub_category_id'] ?>"
							data-roomprice ="<?= $cat['price']; ?>"
							data-doubleprice = "<?= $cat['double_price']; ?>"
							data-extrabed = "<?= $cat['extra_bed_price']; ?>"
							data-editbtnid="cat_<?= $cat['sub_name'] ?>_btn">
                    
						<span style="font-size: 14px !important;padding-left:2%; ">
						  <?php echo $cat['category_name'].'-'.$cat['sub_name']; ?> Room
						</span>
                    <?php } else {?>
						<span style="font-size: 14px !important;padding-left:7% ;">
						  <?php echo $cat['category_name'].'-'.$cat['sub_name']; ?> Room 
						  <span style="color:red;">(Soldout)
						  </span>
						</span>
                    <?php } ?>
                    <div>
                      <span style="font-size: 14px;color:grey;width:250px !important;padding-left:10%; ">
                        <?php $category1=explode(',',$cat['amenities']); $am=count($category1);
							foreach($amenities as $amenity) {
								if($am<=3) $am=$am;
								else $am=3;		
								for($i=0;$i<$am;$i++) {
									if($amenity['id']== str_replace(' ', '',$category1[$i])) {
										echo $amenity['name'].','.' ';
									}
								}
							} ?>
                        <a style="color:#0073cf" href="" data-toggle="modal" data-target="#more_amenities<?php echo $j; ?>">More
                        </a>
                        <div class="modal fade form-group" id="more_amenities<?php echo $j; ?>" role="dialog">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;
                                </button>
                                <h4 class="modal-title">Amenities
                                </h4>
                              </div>
                              <div class="modal-body">
                                <div>
									<?php $category1=explode(',',$cat['amenities']); $am=count($category1);
										foreach($amenities as $amenity) {
											for($i=0;$i<$am;$i++) {
												if($amenity['id']== str_replace(' ', '',$category1[$i])) echo $amenity['name'].','.' ';
											}
										}
									?>
								</div>
                              </div>
                              <div class='modal-footer'>
                              </div>
                            </div>
                          </div>
                        </div>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-5 " >
                    <div class="col-md-6" style='margin-top:3px;'>
                      <strike>
                        <span style="font-size: 16px;color: grey;">₹
                          <?php echo number_format($cat['base_price'],2); ?> 
                        </span>
                      </strike>
                      <span style="font-size: 12px; color:red;">(
                        <?php echo number_format(100-($cat['price']/$cat['base_price'])*100); ?>% off)
                      </span>
                      <span style="font-size: 12px;">PerRoom/Night
                      </span>
                    </div>
                    <div class="col-md-6">
                      <span style="font-size: 14px !important;" class="fnPrc"> From &#8377;
                        <?php echo number_format($cat['price'],2); ?>
                      </span> &nbsp;

            
            <!-- commenting this code as alternative 'edit room' option is given at the top with id-cngeRmsAnc
                      <?php if ($res == 'true') { ?>
						          <span>
							        <a href="#" class="editbtn" data-toggle="modal"
							          data-target="#myModal" id="cat_<?= $cat['sub_name'] ?>_btn">Edit Rooms</a>
						          </span>
					            <?php } ?>
            -->    
                    
                    </div>
                  </div>
                </div>
                <?php if($j != $count) { ?>
					<hr style="margin-top: 0px !important ;margin-bottom: 0px !important  " />
                <?php } $j++; } ?>
				</div>
				<?php } else { ?>
					<div role="tabpanel" class="tab-pane" id="tab<?php echo $x; ?>">
					<?php $z=$j; $j=1; foreach($category as $cat ){  ?>
						<div class="row" style="padding-top:3%;">
							<div class="col-md-7">
							<?php
								$this->load->model('Hotel_model');
								$params=array('hotel_id' =>$cat['hotel_id'],'category_id'=>$cat['category_id'],'sub_category_id'=>$cat['sub_category_id'],'date'=>$daterange ,'rooms'=>$rooms,'adults'=>$adults);
                $res= $this->Hotel_model->get_room_availability_sample($params);
								if($res=='true') {
							?>
								<input type="radio" id="cat2_<?php $cat['sub_name']?>_rad" onclick="selectroom(this);" name="room" 
									data-catid = "<?= $cat['category_id'] ?>" data-subid = "<?= $cat['sub_category_id'] ?>"
									data-roomprice ="<?= $cat['price'] ?>"
									data-doubleprice = "<?= $cat['double_price'] ?>"
									data-extrabed = "<?= $cat['extra_bed_price'] ?>"
                  data-editbtnid="cat2_<?= $cat['sub_name'] ?>_btn">
                  <!--added editbtnid above, testing why the sub category rooms are not  -->
                  
                  <!-- Think this is a typo, copied twice? -->
									<!-- data-extrabed = "<?= $cat['extra_bed_price'] ?>"> -->
								<span style="font-size: 14px !important;padding-left:2% ;">
									<?php echo $cat['category_name'].''.$cat['sub_name']; ?> Room
								</span>
						<br>
                    <?php } else { ?>
						<span style="font-size: 14px !important;padding-left:7% ;">
						  <?php echo $cat['category_name'].'-'.$cat['sub_name']; ?> Room 
						  <span style="color:red;">(Soldout) 
						  </span>
						</span>
                    <br>
                    <?php } ?>
						<span style="font-size: 14px;color:grey;padding-left:10%; ">
                    <?php $category1=explode(',',$cat['amenities']); $am=count($category1);
						foreach($amenities as $amenity) {
							if($am <= 3) $am=$am;
							else $am=3;
							for($i=0; $i< $am; $i++) {
								if($amenity['id']== str_replace(' ', '',$category1[$i])) echo $amenity['name'].','.' ';
							}
						}
					?>
                    <a style="color:#0073cf" href="" data-toggle="modal" data-target="#more_amenities<?php echo $x; ?><?php echo $j; ?>">More
                      </a>
                      <div class="modal fade form-group" id="more_amenities<?php echo $x; ?><?php echo $j; ?>" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;
                              </button>
                              <h4 class="modal-title">Amenities
                              </h4>
                            </div>
                            <div class="modal-body">
                              <div> 
								  <?php $category1=explode(',',$cat['amenities']); $am=count($category1);
									foreach($amenities as $amenity) {
										for($i=0;$i<$am;$i++) {
											if($amenity['id']== str_replace(' ', '',$category1[$i]))echo $amenity['name'].','.' ';
										}
									}
								?>
                              </div>
                            </div>
                            <div class='modal-footer'>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                  </div>
                  <div class="col-md-5" >
                    <div class="col-md-6 ">
                      <strike>
                        <span style="font-size: 16px;color: grey;">₹
                          <?php echo number_format($cat['base_price'],2); ?> 
                        </span>
                      </strike>
                      <span style="font-size: 12px; color:red;">(
                        <?php echo number_format(100-($cat['price']/$cat['base_price'])*100); ?>% off)
                      </span>
                      <span style="font-size: 12px;">Per Room/Night
                      </span>
                    </div>
                    <div class='col-md-6'>
                      <span style="font-size: 14px !important;" > From &#8377;
                        <?php echo number_format($cat['price'],2); ?>
                      </span> &nbsp;
                    </div>
                  </div>
                </div>
                <?php if($j != $count) { ?>
					<hr style="margin-top: 0px !important ;margin-bottom: 0px !important  " />
                <?php } $j++; $z++; } ?>
              </div>
			  <?php } $x++; } ?>
			  <div class="row" id="errordiv" style="display:none">
				<div class="alert alert-danger">
					<!--a href="#" class="close" data-dismiss="alert" aria-label="close">&times; </a-->
					<p id="selErr"></p>
				</div>
              </div>
              <div class="row" id="successdiv" style="display:none">
				<div class="alert alert-success">
					<!--a href="#" class="close" data-dismiss="alert" aria-label="close">&times; </a-->
					<p id="selSuccess"></p>
				</div>
              </div>
              <div class="row">
					<div class="col-md-6">
						<button  class="continue" style="<?php if($count==0){?><?php echo'display: none;';}?>padding: 10px 20px;background-color:#8dc53f;color: white;border: 1px solid #8dc53f;border-radius: 5px;" >Continue Booking </button>
					</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
<div class='container'>
  <div class="row" style='margin-bottom:5px'>
    <div class="col-md-6" style="border-right: 1px solid lightgray;">
      <h5> Ratings 
      </h5>
      <br>
      <div class="row">
        <div class="col-md-2">
          <p style="font-size:14px;"> Poor
          </p>
        </div>
        <div class="col-md-5">
          <div class="progress" style="height:10px !important;background-color: transparent;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%">
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <p>3
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p style="font-size:14px;"> Excellent
          </p>
        </div>
        <div class="col-md-5">
          <div class="progress" style="height:10px !important;background-color: transparent;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <p>3
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p style="font-size:14px;"> Poor
          </p>
        </div>
        <div class="col-md-5">
          <div class="progress" style="height:10px !important;background-color: transparent;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%">
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <p>3
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <p style="font-size:14px;"> Excellent
          </p>
        </div>
        <div class="col-md-5">
          <div class="progress" style="height:10px !important;background-color: transparent;">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <p>3
          </p>
        </div>
      </div>
      <?php
if(empty($reviews))
{
echo "No Reviews Found";
}
else
{
foreach($reviews as $review)
{
?>
      <!--   <div class="row">
<div class="col-md-2">
<P style="font-size:14px;"> <?php echo $review['review']; ?></P>
</div>
<div class="col-md-5">
<div class="progress" style="height:10px !important;background-color: transparent;">
<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $review['ratings']*100/5; ?>" aria-valuemin="0" aria-valuemax="100" style="width:70%">
</div>
</div>
</div>
<div class="col-md-2">
<p><?php echo $review['ratings']; ?></p>
</div>
</div> -->
      <?php
}
}
?>
      <br/>
      <div class="btn6" style='margin-bottom:10px;padding-top:10px'>
        <span style="  font-size: 12px;  padding: 4px  7px !important;border: 1px solid #ebebeb !important;border-radius: 5px;">Couples
        </span>
        <span style="  font-size: 12px;  padding: 4px  7px !important;border: 1px solid #ebebeb !important;border-radius: 5px;">Solo Travel
        </span>
        <span style="  font-size: 12px;  padding: 4px  7px !important;border: 1px solid #ebebeb !important;border-radius: 5px;">Family
        </span>
      </div>

      <?php foreach($cord as $cord) { ?>
		  <iframe src="http://maps.google.com/?q=<?php echo $cord['latitude']; ?>,<?php echo $cord['longitude']; ?>&output=embed" id="someFrame"
				  scrolling="yes" frameborder="0" width="500" height="100">
		  </iframe>
      <?php } 
			$address=explode(',', $hotels['hotel_address']);
			$address=implode('+',$address);
	  ?>
      <div class='col-md-8 col-md-offset-1' align='center'>
        <button type='submit' class='btn btn-success' style='border-radius:10px;margin:10px'>
          <a itemProp='URL' class='direction-link' target='_blank' href='http://maps.google.com/maps?saddr=My+Location&daddr=<?php echo $address; ?>'
             style='text-decoration:none;color:white;'>Directions
          </a>
        </button>
      </div>
    </div>
    <div class="col-md-6">
      <h5> Hotel Amenities 
      </h5>
      <br>
      <div class="col-md-12">
        <!-- <div class="col-md-4" style="padding: 10px 20px;" > -->
        <?php $hotel=explode(',',$hotels['amenities']);
			foreach($amenities as $amenity) {
				for($i=0; $i< count($hotel); $i++) {
					if($amenity['id']== str_replace(' ', '',$hotel[$i])) {
		?>
			<div class="col-md-4" style="margin:1% 0px;">
			  <i class="<?php echo $amenity['icon']; ?>">
			  </i>
			  <span style="font-size: 14px;padding-left:5px;">
				<?php  echo $amenity['name']; ?>
			  </span>
			</div>
        <?php } } } ?>
        <!-- </div> -->
      </div>
      <div class="col-md-12">
        <p>Booking Policy
        </p>
        <p style="font-size:12px;">Check-in Time is 12:00 pm,
          <br>Check-out Time is 11:00 am.
        </p>
        <p style="font-size:12px;"> Your booking might be declined basis 'not having valid proof of marriage for couple stay' or 'having
          same city ID proof' as per hotels guidelines
        </p>
      </div>
    </div>
  </div>
</div>
<?php
}
?>
</div>

<!-- using this to update no of days in price calclulation in this view -->
<?php
$daterange = str_replace('%20',' ',$daterange); 
		$ex=explode(' - ',$daterange);
			$date1 = $ex[0];
			 $date2 = $ex[1];
      $no_of_days=(strtotime($date2)-strtotime($date1))/(24*60*60); 
?>


<?php include("footer.php"); ?>
<!-- wow Animation -->
<script src="<?php echo base_url(); ?>assets/frontend/js/wow.min.js">
</script>
<!--Activating WOW Animation only for modern browser-->
<!--[if !IE]><!-->
<script type="text/javascript">new WOW().init();
</script>
<!--<![endif]-->
<!-- my js -->
<script src="<?php echo base_url(); ?>assets/frontend/js/main.js">
</script>
<script src="<?php echo base_url(); ?>assets/frontend/jquery.scrolling-tabs.js">
</script>
<script src="<?php echo base_url(); ?>assets/frontend/st-demo.js">
</script>
<script>

  // global modal variables
  var rooms =  <?= $rooms ?>;
  var adults = <?= $adults ?>;
  var children = <?= $children ?>;
  var no_of_days = <?= $no_of_days ?>;
  var extrabeds = 0;
  var roomprice = 0;
  var doubleprice = 0;
  var extrabedprice = 0;
  var totalprice = 0;
  var available = true;
  
  // adding this as a flag status for room-category selection 
  var roomSelect = 0;

  
  var reservationurl = "<?= base_url() . 'index.php/reservation/add/' . $hotel_id . '/' . $daterange ?>";
  var ajaxcheckurl = "<?= base_url() . 'index.php/hotel/get_room_type_availability/' . $hotel_id . '/' . $daterange ?>";
  var s_category = '';
  var s_subcategory = '';
  
  // enable it on current selected category
  $(".editbtn").hide();
  
  function selectroom(obj) {
	  roomprice = parseFloat($(obj).data('roomprice'));
	  doubleprice = parseFloat($(obj).data('doubleprice'));
	  extrabedprice = parseFloat($(obj).data('extrabed'));
	  
	  s_category = $(obj).data('catid');
	  s_subcategory = $(obj).data('subid');
	  
	  btnid = $(obj).data('editbtnid');
	 

    //modified this code to update the price calculation- added no of days and added calculation for multiple cases
    if ((adults % rooms ) == 0) {
          if ((adults == 1) || (adults == rooms)){
              totalprice = (rooms) * (roomprice) * no_of_days; 
              }else{
		            totalprice = (rooms) * (roomprice + doubleprice) * no_of_days;
                   }
	        } else {
	           		totalpriceInitial = (rooms) *  (roomprice) * (no_of_days);
	           		reminder = (adults % rooms);
                 console.log(reminder);
	           		totalprice =  totalpriceInitial + (reminder * doubleprice * no_of_days);
	              } 
    

    //commenting this code as this is the base version created
	  // if ((adults % rooms ) == 0) {
		// totalprice = (rooms) * (roomprice + doubleprice) * no_of_days;
	  // } else {
		// totalprice = (adults / 2 ) * no_of_days * (roomprice + doubleprice) + (roomprice) ;
	  // } 
	  
	  // enable it on current selected category
	  $(".editbtn").hide();

		//This doesnt seem working for subcategories
    //document.getElementById(btnid).style.display = 'block';
    
    // enabling the new anchor 'edit rooms' option
      $("#cngeRmsAnc").css({"pointer-events":"auto","color":"red"});

    
    //taken from internet | this is working for  display:block and is blocking 'edit rooms' link
    jQuery(function($) {
    $("#btnid").css('display','block');
    });
	  
    //adding this to make room-category selection recognizable
    roomSelect = 1;
    if (roomSelect == 1){
      console.log('room selection done');
    }

	  console.log('btnid = ' + btnid + ' new room price = ' + roomprice + ' extra bed = ' + extrabedprice + ' double = ' + doubleprice);
	  
	  document.getElementById("successdiv").style.display = 'block';
	  document.getElementById("errordiv").style.display = 'none';
	  $('#selSuccess').html('Your request for booking ' + rooms + ' Rooms costs <strong>&#8377 ' +totalprice+ '</strong>');
	  
	  $('#unsetDefaultGraph').prop("disabled", false);
	  setTimeout(document.getElementById('selErr').innerHTML= '', 3000);

  };
  
  function addRw(i, guests){
    //modifing this, to restrict addition of rooms to 6, max rooms-6 has been constant from the home page-search room selection
    //modified value of i to rectify the bug-similar room number and empty price values after 2 rooms
    var i = $('#roomRows li').size();
    if(i !=6)
    {
    $("#roomRows").append('<li> \
		<div class="row"> \
			<div class="col-sm-2"><label style="margin-top:10px"> Room - ' + (i + 1) + '</label></div> \
				<div class="col-sm-4"> \
					<div class="form-group"> \
						<label class="col-sm-6 control-label" for = "num_guests" style="margin-top:10px"> No. of Guests </label> \
						<div class="col-sm-6"> \
							<select class="form-control" name="num_guests" onchange = "updateRowPrice('+i+')" id = "room' + i + 'guests"> \
								<option value="" disabled>-- Select Guests --</option> \
								<option value="1">1 Guest </option> \
								<option value="2">2 Guests</option> \
							</select> \
						</div> \
					</div> \
				</div> \
				<div class="col-sm-3"> \
					<div class="form-group">  \
						<div class="col-sm-2"> \
							<input type="checkbox" name = "extra_bed"  id="room'+i+'extrabed" onchange = "updateRowPrice('+i+')"> \
						</div> \
						<label class="col-sm-10 control-label" for = "extra_bed" style="margin-top:10px"> Extra Bed </label> \
					</div> \
				</div>  \
				<div class="col-sm-3"> \
					<div class="form-group"> \
						<label class="col-sm-6 control-label" for = "price" style="margin-top:10px"> Price </label> \
						<div class="col-sm-6"> \
							<input type="text" name="price" value="0" id="room'+i+'price" class="form-control" disabled> \
						</div> \
					</div> \
				<div> \
			</div><hr>	\
		  </li>');
    $('#room' + i + 'guests').val(guests);
    console.log("new row " +  $('#room' + i + 'guests').val());
    updateRowPrice(i);
    }
  }
  
  function dltRw(){
    var x = $('#roomRows li').size();
    //modified this, last room will not be deleted
    if(x != 1){
    $("#roomRows  li:last").remove();  
    rooms--;  
    }
  }
  
  function addNewRw() {
    addRw(rooms, 2);
    rooms++;
  }
  function updateRowPrice(i)
  {
    var guests = $('#room' + i +'guests').val();
    var extrabed = $('#room'+i+'extrabed').is(':checked');
    var rowtotal = 0;
    
    if (guests == 1) {
      rowtotal = roomprice;
    }
    else if (guests == 2) {
      rowtotal = parseFloat(roomprice) + parseFloat(doubleprice);
    }
    if (guests > 0 && extrabed) {
      rowtotal += parseFloat(extrabedprice);
    }
    $('#room'+i+'price').val(rowtotal);
    console.log(i + " row total " + rowtotal + " guests = " + guests);
  }
  
  function initRws(){
    $("#roomRows").empty();
    var total = adults;
    for (i = 0; i < rooms; ++i) {
      addRw(i, (total - 2) >= 0 ? 2 : (2 - total));
      total = total - 2;
    }
    totalprice = 0;
  }
  
  function exBdCnt(rooms){
    var rows = $('#roomRows li').size();
    var x = 0;
    for(i = 1; i <= rows ; i++)
    {
      if($('#room_'+i+'extrabed').is(':checked')){
        x=x+1;
      };
    }
    $('.exBdCnt').val(x);
    var radioValue = $("input[name='room']:checked").attr("data-href");
    var radioValue2 = $('.exBdCnt').val()+'/';
    var fnlRadioValue = radioValue+radioValue2;
    $("input[name='room']:checked").attr("data-href",fnlRadioValue);
  };
 
  
  $("#myModal").on('show.bs.modal', function () {
    initRws();
  });
  
  $("#myModal").on('hide.bs.modal', function () {
	// count number of rooms, guests, extra beds
	rooms = $('#roomRows li').size();
    adults = 0;
    extrabeds = 0;
    totalprice = 0;

    for(i = 0; i < rooms ; i++)
    {
		adults += parseInt($('#room' + i +'guests').val());
		if($('#room'+ i +'extrabed').is(':checked')){
			extrabeds++;
		};
    //adding no_of_days in the price flow
		totalprice += parseFloat($('#room'+ i +'price').val()) * no_of_days;
    }
    
    $('#roomtxt').val(rooms);
    $('#adulttxt').val(adults);
    
    // get new availability for the selected room type
    $.get(ajaxcheckurl + '/'  + s_category + '/' + s_subcategory + '/' + rooms + '/' + adults, 
		function(data, status) {
			if (data.trim() == "true") {
				available = true;
				document.getElementById("successdiv").style.display = 'block';
				document.getElementById("errordiv").style.display = 'none';
				$('#selSuccess').html('Your request for booking ' + rooms + ' Rooms costs <strong>&#8377 ' +totalprice+ '</strong>');
			} else {
				available = false;
				document.getElementById("errordiv").style.display = 'block';
				document.getElementById("successdiv").style.display = 'none';
				document.getElementById('selErr').innerHTML= 'Requested number of rooms are not available during the selected dates.!';
			}
		});
  });
  
  
  $('.continue').click(function() {
	
	var url = reservationurl + '/' +   s_category + '/' + s_subcategory + '/' + rooms + '/' + adults + '/' + children + '/' + extrabeds;
	
  //commenting this code, as the below condition is not recognising, subcategories checked status
	//if(!$("input[name='room']").prop('checked'))
  console.log(roomSelect);

  if(roomSelect == 0){
      console.log('No room selection- error ');
      document.getElementById("successdiv").style.display = 'none';
      document.getElementById("errordiv").style.display = 'block';
	  document.getElementById('selErr').innerHTML= 'Please select a room to proceed!';
	  return;
    }
    
    if (available == false) {
		document.getElementById("successdiv").style.display = 'none';
		document.getElementById("errordiv").style.display = 'block';
		document.getElementById('selErr').innerHTML= 'Requested number of rooms are not available during the selected dates.!';
	}
	
    $(location).attr('href', url);
   
  
  });
  
  var latitude = <?php echo $cord['latitude']; ?>;
  var longitude = <?php echo $cord['longitude'];  ?>;
  var myLatlng = new google.maps.LatLng(latitude,longitude);
  
  function initialize() {
    var mapProp = {
      center: myLatlng,
      zoom: 12,
      mapTypeId: google.maps.mapTypeId.ROADMAP
    };
    var maker = new goole.maps.Maker({
      position: myLatlng
    }
                                    )
    var map = new google.maps.Map(document.getElementById('map'),
                                  maker
                                 );
    maker.setMap(map);
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script>
  var hidWidth;
  var scrollBarWidths = 40;
  var widthOfList = function () {
    var itemsWidth = 0;
    $('.list li').each(function () {
      var itemWidth = $(this).outerWidth();
      itemsWidth += itemWidth;
    }
                      );
    return itemsWidth;
  };
  var widthOfHidden = function () {
    return (($('.wrapper').outerWidth()) - widthOfList() - getLeftPosi()) - scrollBarWidths;
  };
  var getLeftPosi = function () {
    return $('.list').position().left;
  };
  var reAdjust = function () {
    if (($('.wrapper').outerWidth()) < widthOfList()) {
      $('.scroller-right').show();
      $('.scroller-left').show();
    }
    else {
      $('.scroller-left').show();
      $('.scroller-right').show();
    }
    if (getLeftPosi() < 0) {
      $('.scroller-left').show();
      $('.scroller-right').show();
    }
    else {
      $('.item').animate({
        left: "-=" + getLeftPosi() + "px" }
                         , 'slower');
      $('.scroller-left').show();
      $('.scroller-right').show();
    }
  }
  reAdjust();
  $(window).on('resize', function (e) {
    reAdjust();
  }
              );
  $('.scroller-right').click(function () {
    $('.scroller-left').fadeIn('slower');
    $('.scroller-right').fadeOut('slower');
    $('.list').animate({
      left: "+=" + widthOfHidden() + "px" }
                       , 'slower', function () {
    }
                      );
  }
                            );
  $('.scroller-left').click(function () {
    $('.scroller-right').fadeIn('slower');
    $('.scroller-left').fadeOut('slower');
    $('.list').animate({
      left: "-=" + getLeftPosi() + "px" }
                       , 'slower', function () {
    }
                      );
  }
                           );
</script>
</body>
</html>
