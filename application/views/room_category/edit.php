	<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							    <div class="row">
							          <div class="col-xl-12">
							        <div class="card card-custom card-stretch gutter-b">
											<div class="card-header">
												<h3 class="card-title">Edit Room Categories
</h3>
												
											</div>
							        
							        <form class="form" action="<?php echo base_url(); ?>index.php/room_category/edit/<?php echo $room_category['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
   <label>Hotel Name</label>
    <select class = "form-control" name="hotel_id" style='z-index:999999' required>
                    <?php
            foreach ($hotels as $row) {
              ?>
              <option value="<?php echo $row['id']; ?>" <?php if($room_category['hotel_id']==$row['id']){echo 'selected';} ?>><?php echo $row['hotel_name']; ?></option>
              <?php
            }
            ?>
                  </select>
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Category Name</label>
   <input type="text" class="form-control" name="category_name" value="<?php echo $room_category['category_name']; ?>" placeholder="Enter Room Category" required/>
   
  </div> 
                    </div>
                </div>
   <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Room Pics</label>
   <input type="file" class="form-control" id="r"  name="hotel_gallery[]" multiple required>
   <?php if($room_images!=''){
                   foreach ($room_images as $gal){
                   ?>
                <img src="<?php echo base_url(); ?>gallery/<?php echo $gal['hotel_id'].'/roompics'.'/'.$room_category['id'].'/'.$gal['gallery']?>" height= '150px' width='200px'>
               <?php }} ?>
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>No Of Rooms</label>
   <input type="number" name="no_of_rooms" value="<?php echo $room_category['no_of_rooms']; ?>" placeholder="Enter No Of Rooms " class="form-control"  required/>
   
  </div> 
                    </div>
                    
                </div>
                 <div class="row">
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Capacity</label>
   <input type="text" name="capacity" value="<?php echo $room_category['capacity']; ?>" required class="form-control" placeholder="Enter Capacity"/>
   
  </div> 
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Base Price</label>
   <input type="text" class="form-control" value="<?php echo $room_category['baseprice']; ?>" placeholder="Enter Base Price" name="baseprice" required/>
   
  </div> 
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Price</label>
   <input type="text" class="form-control" value="<?php echo $room_category['price']; ?>" placeholder="Enter Price" name="price" required/>
   
  </div> 
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Double Price</label>
   <input type="text" class="form-control" value="<?php echo $room_category['double_price']; ?>" placeholder="Enter Double Price" name="doubleprice" required/>
   
  </div> 
                    </div>
                </div>
                
                <div class="row">
    <div class="col-md-4">
       <div class="form-group">
   <label>Extra Bed Price</label>
   <input type="text" class="form-control"  value="<?php echo $room_category['extra_bed_price']; ?>" placeholder="Enter Extra Bed Price" name="bedprice" required/>
   
  </div> 
    </div>
     <div class="col-md-4">
        	<div class="form-group row align-items-center">
																		<label class="col-xl-3 col-lg-3 col-form-label">Refund Settings</label>
																		<div class="col-lg-9 col-xl-6">
																			<div class="checkbox-inline">
																				<label class="checkbox">
																				<input name="refund" value="Refundable" type="radio" />
																				<span></span>Refundable</label>
																				<label class="checkbox">
																				<input name="refund" value="Non-Refundable" type="radio" />
																				<span></span>Non-Refundable</label>
																			
																			</div>
																		</div>
																	</div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
														<label for="exampleSelect2">Example multiple select 
														<span class="text-danger">*</span></label>
														<select multiple="multiple" name="amenities[]"  required class="form-control" id="exampleSelect2">
													<?php
            $list = explode(',',$room_category['amenities']);
            
            foreach ($amenities as $row) {
              ?>
              <option value="<?php echo $row['id']; ?>" <?php if(in_array($row['id'],$list)){echo 'selected';} ?>><?php echo $row['name']; ?></option>
              <?php
            }
            ?>
														</select>
													</div>
    </div>
</div>

             
  <div class="separator separator-dashed my-5"></div>

<div class="form-group">
    <label>Description</label>
    <div class="col-md-12">
     <textarea name="description" class="form-control" data-provide="markdown" required rows="10"><?php echo $room_category['description']; ?></textarea>
    </div>
   </div>
   
   <div class="form-group">
    <label>Cancellation Policy</label>
    <div class="col-md-12">
     <textarea name="cancellation_policy" class="form-control" data-provide="markdown" required rows="10"><?php echo $room_category['cancellation_policy']; ?></textarea>
    </div>
   </div>
 

 
 <div class="card-footer">
  <button type="submit" class="btn btn-primary mr-2">Submit</button>
  <button class="btn btn-secondary">Cancel</button>
 </div>
 </div>
</form>
							        </div>
							        </div>
							        </div>
							        </div>
							        </div>
							        
							        

                    
