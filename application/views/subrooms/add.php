	<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							    <div class="row">
							          <div class="col-xl-12">
							        <div class="card card-custom card-stretch gutter-b">
											<div class="card-header">
												<h3 class="card-title">Add Sub-room Categories
</h3>
												
											</div>
							        
							        <form class="form" action="<?php echo base_url(); ?>index.php/room_category/addsub" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
   <label>Select Hotel Name</label>
    <select class = "form-control" name="hotel_id" style='z-index:999999' required>
             <option value="">Select Hotel Name</option>

                    <?php

                        foreach ($hotels as $row) {

                            echo "<option value='".$row['id']."'>".$row['hotel_name']."</option>";

                        }

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
   <input type="text" class="form-control" name="sub_name" placeholder="Enter Room Category" required/>
   
  </div> 
                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
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
  <input type="file" class="form-control" id="r"  name="hotel_gallery[]"   onchange="if(parseInt($(this).get(0).files.length)>8) alert('You can only upload a maximum of 8 files .Please Select Again');else alert('Upload Successfully' );" required>
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>No Of Rooms</label>
   <input type="number" name="no_of_rooms" placeholder="Enter No Of Rooms " class="form-control"  required/>
   
  </div> 
                    </div>
                    
                </div>
                 <div class="row">
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Capacity</label>
   <input type="text" name="capacity" required class="form-control" placeholder="Enter Capacity"/>
   
  </div> 
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Base Price</label>
   <input type="text" class="form-control" placeholder="Enter Base Price" name="base_price" required/>
   
  </div> 
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Price</label>
   <input type="text" class="form-control" placeholder="Enter Price" name="price" required/>
   
  </div> 
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Double Price</label>
   <input type="text" class="form-control" placeholder="Enter Double Price" name="doubleprice" required/>
   
  </div> 
                    </div>
                </div>
                
                <div class="row">
    <div class="col-md-6">
       <div class="form-group">
   <label>Extra Bed Price</label>
   <input type="text" class="form-control"  id="search_location" placeholder="Enter Extra Bed Price" name="bedprice" required/>
   
  </div> 
    </div>
    <div class="col-md-6">
        <div class="form-group">
														<label for="exampleSelect2">Aminities 
														<span class="text-danger">*</span></label>
														<select multiple="multiple" name="amenities[]"  required class="form-control" id="exampleSelect2">
													 <?php
            foreach ($amenities as $row) {
              ?>
              <option  value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
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
     <textarea name="cancellation_policy" class="form-control" data-provide="markdown" required rows="10"></textarea>
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
							        
							        

                    
