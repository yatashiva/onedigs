	<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							    <div class="row">
							          <div class="col-xl-12">
							        <div class="card card-custom card-stretch gutter-b">
											<div class="card-header">
												<h3 class="card-title">Edit Sub-room Categories
</h3>
												
											</div>
							        
							        <form class="form" action="<?php echo base_url(); ?>index.php/room_category/subedit/<?php echo $sub_category['id'] ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
   <label>Select Hotel Name</label>
    <select class = "form-control" name="hotel_id" style='z-index:999999' required>
             <option value="">Select Hotel Name</option>

                
                    <?php

                        foreach ($hotels as $row) { ?>

              <option value="<?php echo $row['id']; ?>" <?php if($sub_category['hotel_id']==$row['id']){echo 'selected';} ?>><?php echo $row['hotel_name']; ?></option>
                            

                   <?php     }

                    ?>
                  </select>
  </div> 
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
   <label>Select Category</label>
   <select name="category_id" class = "form-control"  required>

                </select>
  </div> 
                    </div>
                    <div class="col-md-12">
                       <div class="form-group">
   <label>Sub Category Name</label>
   <input type="text" class="form-control" value="<?php echo $sub_category['sub_name']?>" name="sub_name" placeholder="Enter Room Category" required/>
   
  </div> 
                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    var hotel_id = <?php echo $sub_category['hotel_id']; ?>;
                    var category_id = <?php echo $sub_category['category_id']; ?>;
                    if(hotel_id!=null){
                      $.ajax({
                                url: '<?php echo base_url();?>index.php/room_category/myformAjax/' + hotel_id,
                                type: "GET",
                                dataType: "json",
                               
                                success:function(data) {
                                  
                                    $('select[name="category_id"]').empty();
                                    $.each(data, function(key, value) {
                                      if(value.id==category_id){
                                        $('select[name="category_id"]').append('<option value="'+ value.id +'" selected >'+ value.category_name +'</option>');
                                      }else{
                                        $('select[name="category_id"]').append('<option value="'+ value.id +'" >'+ value.category_name +'</option>');
                                      }
                                    });
                                }
                            });
                    }
                    $('select[name="hotel_id"]').on('change', function() {

                        var id = $(this).val();
                       
                        if(id) {
                            $.ajax({
                                url: '<?php echo base_url();?>index.php/room_category/myformAjax/' + id,
                                type: "GET",
                                dataType: "json",
                               
                                success:function(data) {
                                  
                                    $('select[name="category_id"]').empty();
                                    $.each(data, function(key, value) {
                                        $('select[name="category_id"]').append('<option value="'+ value.id +'">'+ value.category_name +'</option>');
                                    });
                                }
                            });
                        }
                        else{
                            $('select[name="category_id"]').empty();
                        }
                    });
                });
            </script>
   <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Room Pics</label>
  <input type="file" class="form-control" id="r"  name="hotel_gallery[]" multiple  required>
                <!-- onchange="if(parseInt($(this).get(0).files.length)>8) alert('You can only upload a maximum of 8 files .Please Select Again');else alert('Upload Successfully' );"> -->
                <?php if($image!=''){
                // echo $image['hotel_id'];
                // die();
                //    foreach ($image as $gal){
                //     print_r($gal);
                //     echo $gal['hotel_id'];
                //     die();
                   ?>
                <img src="<?php echo base_url(); ?>gallery/<?php echo $image['hotel_id']; ?>/subroompics/<?php echo $image['sub_category_id']; ?>/<?php echo $image['gallery']?>" height= '150px' width='200px'>
               <?php } ?>
              </div>
  </div> 
                   
                    <div class="col-md-6">
                       <div class="form-group">
   <label>No Of Rooms</label>
   <input  type="number" value="<?php echo $sub_category['num_of_rooms']?>" name="no_of_rooms" placeholder="Enter No Of Rooms " class="form-control"  required/>
   
  </div> 
                    </div>
                    
                </div>
                 <div class="row">
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Capacity</label>
   <input value="<?php echo $sub_category['capacity']?>" type="text" name="capacity" required class="form-control" placeholder="Enter Capacity"/>
   
  </div> 
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Base Price</label>
   <input value="<?php echo $sub_category['base_price']?>" type="text" class="form-control" placeholder="Enter Base Price" name="base_price" required/>
   
  </div> 
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Price</label>
   <input value="<?php echo $sub_category['price']?>" type="text" class="form-control" placeholder="Enter Price" name="price" required/>
   
  </div> 
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Double Price</label>
   <input value="<?php echo $sub_category['double_price']?>" type="text" class="form-control" placeholder="Enter Double Price" name="doubleprice" required/>
   
  </div> 
                    </div>
                </div>
                
                <div class="row">
    <div class="col-md-6">
       <div class="form-group">
   <label>Extra Bed Price</label>
   <input value="<?php echo $sub_category['extra_bed_price']?>" type="text" class="form-control"  id="search_location" placeholder="Enter Extra Bed Price" name="bedprice" required/>
   
  </div> 
    </div>
    <div class="col-md-6">
        <div class="form-group">
														<label for="exampleSelect2">Amenities 
														<span class="text-danger">*</span></label>
														<select multiple="multiple" name="amenities[]"  required class="form-control" id="exampleSelect2">
													 
            <?php
            $list = explode(',',$sub_category['amenities']);
            foreach ($amenities as $row) {
              ?>
              <option  value="<?php echo $row['id']; ?>" <?php if(in_array($row['id'],$list)){echo 'selected';} ?>> <?php echo $row['name']; ?></option>
              <?php
            }
            ?>
														</select>
													</div>
    </div>
</div>

             
  <div class="separator separator-dashed my-5"></div>


   <div class="form-group">
    <label>Cancellation Policy</label>
    <div class="col-md-12">
     <textarea name="cancellation_policy" class="form-control" data-provide="markdown" required rows="10"><?php echo $sub_category['cancellation_policy']; ?></textarea>
    </div>
   </div>
 

 
 <div class="card-footer">
  <button type="submit" class="btn btn-primary mr-2">Submit</button>
  <button type="reset" class="btn btn-secondary">Cancel</button>
 </div>
 </div>
</form>
							        </div>
							        </div>
							        </div>
							        </div>
							        </div>
							        
							        

                    
