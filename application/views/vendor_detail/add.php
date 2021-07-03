	<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							    <div class="row">
							          <div class="col-xl-12">
							        <div class="card card-custom card-stretch gutter-b">
											<div class="card-header">
												<h3 class="card-title">Add Vendor
</h3>
												
											</div>
							        
							        <form class="form" action="<?php echo base_url();?>index.php/vendor_detail/add" method="POST" enctype="multipart/form-data">
							             <input type="hidden" name="user_type" value="2"/>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
   <label>Name</label>
 <input type="text" class = "form-control" id="name" name="name" placeholder="Name" required>
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Email</label>
   <input type="email" class="form-control" name="email" placeholder="Enter E-mail address" required/>
   
  </div> 
                    </div>
                </div>
   <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Phone Number</label>
   <input type="tel" class="form-control" id="mobile" name="phone_no" placeholder="Enter Phone Number" pattern = "-?[0-9]*(\.[0-9]+)?" required>
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Password</label>
   <input type="password"  id="password" name="password" placeholder="Password" required class="form-control"/>
   
  </div> 
                    </div>
                    
                </div>
                
                <div class="row">
    <div class="col-md-12">
       <div class="form-group">
   <label>Address</label>
    <textarea  id="address" name="address" placeholder="Address" class="form-control"  required rows="4"></textarea>
   
  </div> 
    </div>
   
</div>

             
  <div class="separator separator-dashed my-5"></div>


   
 

 
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
							        
							        

                    
