	<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							    <div class="row">
							          <div class="col-xl-12">
							        <div class="card card-custom card-stretch gutter-b">
											<div class="card-header">
												<h3 class="card-title">Add Taxes
</h3>
												
											</div>
							        
							        <form class="form" action="<?php echo base_url(); ?>index.php/taxes/add" method="POST" enctype="multipart/form-data">
							            
            <div class="card-body">
               
                 <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Minimum amount</label>
   <input type="text" class="form-control" placeholder="Minimum" name="min" required/>
   
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Maximum</label>
   <input type="text" class="form-control" placeholder="Maximum" name="max" required/>
   
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Tax(in percentage)</label>
   <input type="text" class="form-control" placeholder="Tax" name="tax" required/>
   
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
							        
							        

                    
