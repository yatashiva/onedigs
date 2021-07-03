	<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							    <div class="row">
							          <div class="col-xl-12">
							        <div class="card card-custom card-stretch gutter-b">
											<div class="card-header">
												<h3 class="card-title">Edit Profile
</h3>
												
											</div>
							        
							        <form action="<?php echo base_url(); ?>index.php/admin/editprofile" method="POST" enctype="multipart/form-data" enctype="multipart/form-data">
							            <!--<input type="hidden" name="user_type" value="2"/>-->
							            
            <div class="card-body">
               
                 <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Name</label>
   <input type="text" class="form-control" placeholder="Enter Username" name="username"  value="<?php echo $details['username'] ?>" required/>
   
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Email</label>
   <input value="<?php echo $details['email']; ?>" type="email" class="form-control" placeholder="Enter Email" name="email" required/>
   
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Phone Number</label>
   <input value="<?php echo $details['phone_no']; ?>" type="text" class="form-control" placeholder="Enter Phone No" name="phone_no"  pattern = "-?[0-9]*(\.[0-9]+)?" required/>
   
  </div> 
                    </div>
                 
                </div>
               <?php if( $details['user_type'] == 4){?>

                <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
   <label>GSTIN</label>
   <input pattern="^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$"  type="text" class="form-control" id="gst_no" placeholder="GST Number" name="gst_no" value="<?php echo $details['gst_no']; ?>" required/>
   
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>PAN</label>
   <input  type="text" class="form-control" id="pan_no" placeholder="PAN Number" name="pan_no" value="<?php echo $details['pan_no']; ?>" required/>
   
  </div> 
                    </div>
                      <?php }?>        
                
                 
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
							        
							        

                    
