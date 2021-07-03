	<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							    <div class="row">
							          <div class="col-xl-12">
							        <div class="card card-custom card-stretch gutter-b">
											<div class="card-header">
												<h3 class="card-title">Edit Vendor
</h3>
												
											</div>
							         <?php
			  $vendor=$vendor_detail;
			  	?>
			 
							        <form class="form" ction="<?php echo base_url();?>index.php/vendor_detail/edit/<?php echo $vendor['id']; ?>" method="POST" enctype="multipart/form-data">
							             <input type="hidden" name="user_type" value="2"/>
                    <input type="hidden" name="login_id" value="<?php echo $vendor['login_id']; ?>"/>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
   <label>Name</label>
 <input value="<?php echo $vendor['name']; ?> " type="text" class = "form-control" id="name" name="name" placeholder="Name" required>
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Email</label>
   <input value="<?php echo $vendor['email']; ?>" type="email" class="form-control" name="email" placeholder="Enter E-mail address" required/>
   
  </div> 
                    </div>
                </div>
   <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Phone Number</label>
   <input type="tel" class="form-control" id="mobile" name="phone_no" placeholder="Enter Phone Number" pattern = "-?[0-9]*(\.[0-9]+)?" value="<?php echo $vendor['phone_no'] ; ?>" required>
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Password</label>
   <input type="password" readonly  id="password" name="password" placeholder="Password" required class="form-control"/>
   
  </div> 
                    </div>
                    
                </div>
              
                <div class="row">
    <div class="col-md-12">
       <div class="form-group">
   <label>Address</label>
    <textarea  id="address" name="address" placeholder="Address" class="form-control"  required rows="4"><?php echo $vendor['address']; ?></textarea>
   
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
							        
							        

                    
