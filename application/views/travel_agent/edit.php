	<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							    <div class="row">
							          <div class="col-xl-12">
							        <div class="card card-custom card-stretch gutter-b">
											<div class="card-header">
												<h3 class="card-title">Edit Travel Agent
</h3>
												
											</div>
							        
							        <form action="<?php echo base_url();?>index.php/travel_agent/edit/<?php echo $agent_detail['id']; ?>" method="POST" enctype="multipart/form-data">
							            <input type="hidden" name="user_type" value="2"/>
							            
            <div class="card-body">
               
                 <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Name</label>
   <input value="<?php echo $agent_detail['name']; ?>" type="text" class="form-control" placeholder="Enter Name" name="name" required/>
   
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Email</label>
   <input value="<?php echo $agent_detail['email']; ?>" type="email" class="form-control" placeholder="Enter Email" name="email" required/>
   
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Phone Number</label>
   <input value="<?php echo $agent_detail['phone_no']; ?>" type="text" class="form-control" placeholder="Enter Phone No" name="phone_no"  pattern = "-?[0-9]*(\.[0-9]+)?" required/>
   
  </div> 
                    </div>
                 
                </div>
                  <div class="row">
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Account No</label>
   <input  type="text" class="form-control"id="hotel_acc_no" placeholder="Enter Account Number" name="hotel_acc_no" value="<?php echo $agent_detail['hotel_acc_no']; ?>" required/>
   
  </div> 
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
   <label>IFSC</label>
   <input  type="text" class="form-control" id="hotel_ifsc_code" placeholder="Enter IFSC code" name="hotel_ifsc_code"  value="<?php echo $agent_detail['hotel_ifsc_code']; ?>" required/>
   
  </div> 
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Account Name</label>
   <input  type="text" class="form-control" id="fullname" placeholder="Enter Account Full Name" name="fullname" value="<?php echo $agent_detail['fullname']; ?>" required/>
   
  </div> 
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Branch</label>
   <input  type="text" class="form-control" id="acc_branch" placeholder="Enter Branch" name="acc_branch" value="<?php echo $agent_detail['acc_branch']; ?>" required/>
   
  </div> 
                    </div>
                 
                </div>
                <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
   <label>GSTIN</label>
   <input pattern="^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$"  type="text" class="form-control" id="gst_no" placeholder="GST Number" name="gst_no" value="<?php echo $agent_detail['gst_no']; ?>" required/>
   
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>PAN</label>
   <input  type="text" class="form-control" id="pan_no" placeholder="PAN Number" name="pan_no" value="<?php echo $agent_detail['pan_no']; ?>" required/>
   
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Address</label>
   <textarea id="address" name="address" placeholder="Address"  required class="form-control"><?php echo $agent_detail['address']; ?></textarea>
  
   
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
							        
							        

                    
