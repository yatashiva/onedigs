	<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							    <div class="row">
							          <div class="col-xl-12">
							        <div class="card card-custom card-stretch gutter-b">
											<div class="card-header">
												<h3 class="card-title">Add Payment Margin
</h3>
												
											</div>
							        
							        <form class="form" action="<?php echo base_url(); ?>index.php/margin/add" method="POST" enctype="multipart/form-data">
							            
            <div class="card-body">
               
                 <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Select Hotel</label>
   <select type="text" class = "form-control"  name="name" required>
       <option disabled selected>Select Hotel</option>
                <?php foreach($hotels as $hotel)
                {
                  ?>
                  <option value="<?php echo $hotel['id']; ?>" ><?php echo $hotel['hotel_name']; ?> </option>
                  <?php
                }
                ?>
                </select>
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Percentage</label>
   <input type="number" class="form-control" placeholder="Enter Percentage" name="percentage" required/>
   
  </div> 
                    </div>
                    
                 
                </div>
                
               



   
 

 
 <div class="card-footer">
  <button type="submit" class="btn btn-primary mr-2">Submit</button>

 </div>
 </div>
</form>
							        </div>
							        </div>
							        </div>
							        </div>
							        </div>
							        
							        

                    
