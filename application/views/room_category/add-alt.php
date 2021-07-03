	<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							    <div class="row">
							          <div class="col-xl-12">
							        <div class="card card-custom card-stretch gutter-b">
											<div class="card-header">
												<h3 class="card-title">Add Room Categories
</h3>
												
											</div>
							        
							        <form class="form" action="<?php echo base_url(); ?>index.php/room_category/add" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
   <label>Hotel Name</label>
    <select class = "form-control" name="hotel_id" style='z-index:999999' required>
                   <?php
            foreach ($hotels as $row) {
              ?>
              <option value="<?php echo $row['id']; ?>"><?php echo $row['hotel_name']; ?></option>
              <?php
            }
            ?>
                  </select>
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Category Name</label>
   <input type="text" class="form-control" name="category_name" placeholder="Enter Room Category" required/>
   
  </div> 
                    </div>
                </div>
  <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Room Pics</label>
   <input type="file" class="form-control" id="r"  name="hotel_gallery[]"   onchange="if(parseInt($(this).get(0).files.length)>8) alert('You can only upload a maximum of 8 files .Please Select Again');else alert('Upload Successfully' );" style='z-index:999999' required>
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Total Rooms</label>
   <input type="text" class="form-control" placeholder="Enter Total rooms" name="total_rooms" required/>
   
  </div> 
                    </div>
                    
                </div>
                 <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
   <label>City</label>
   <input type="text" name="location" required class="form-control" placeholder="Enter City"/>
   
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Hotel Area</label>
   <input type="text" class="form-control" placeholder="Enter Area" name="area" required/>
   
  </div> 
                    </div>
                </div>
<div class="form-group">

                <input type="hidden" class="form-control" id="latitude" name="hotel_latitude" required>
              </div>
              <div class="form-group">

                <input type="hidden" class="form-control" id="longitude" name="hotel_longitude" required>
                 <input type="hidden" class="form-control" id="address" name="hotel_address" required>
              </div>
  <div class="separator separator-dashed my-5"></div>
<div class="row">
    <div class="col-md-8">
       <div class="form-group">
   <label>Search Location</label>
   <input type="text" class="form-control"  id="search_location" placeholder="Search location" name="searchlocation" required/>
   
  </div> 
    </div>
    <div class="col-md-4">
        <div class="form-group">
         <button id="aaaa" class="btn btn-default get_map" type="button">
                            Locate
                          </button>
                          </div>
    </div>
</div>
  
 <div id="geomap"></div>
  <div class="separator separator-dashed my-5"></div>

   <h6>Location Details</h6>


                    <ul id="geoData">
                      <li>Full Address:
                        <span id="search_addr" class="adr"></span>
                      </li>
                      <li>Latitude:
                        <span id="search_latitude" class="lat"></span>
                      </li>
                      <li>Longitude:
                        <span id="search_longitude" class="long"></span>
                      </li>
                    </ul>


 
 <div class="card-footer">
  <button type="reset" class="btn btn-primary mr-2">Submit</button>
  <button type="reset" class="btn btn-secondary">Cancel</button>
 </div>
 </div>
</form>
							        </div>
							        </div>
							        </div>
							        </div>
							        </div>
							        
							        

                    
