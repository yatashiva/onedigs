        <style>
		.vendor_management{
			border:1px solid transparent;
		border-top: 3px solid #8dc53f;
		-moz-box-shadow: 1px 1px 5px #757075;
		-webkit-box-shadow: 1px 1px 5px #757075;
		box-shadow: 1px 1px 5px #757075;
		
		padding:20px;
		
		}
		</style>
		<div class="page-bar">
                        <div class="page-title-breadcrumb">
                            
                            <ol class="breadcrumb page-breadcrumb pull-left">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Vendor Hotel Management</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit Vendor Hotel</li>
                            </ol>
							
                        </div>
                    </div>
		<div class='container'>  
			
            <div class="card-box col-md-12 vendor_management">
			  <div class='card-head'>
				<h2 align='center'>Edit Vendor Details</h2>
			  </div>
			  <div class='card-body'>
			  <?php
			  $vendor=$vendor_detail;
			  	?>
			 
                <form action="<?php echo base_url();?>index.php/vendor_detail/edit/<?php echo $vendor['id']; ?>" method="POST" style='width:100%'>
                    <input type="hidden" name="user_type" value="2"/>
                    <input type="hidden" name="login_id" value="<?php echo $vendor['login_id']; ?>"/>
				<div>
				  <div class='col-md-6'>	
                    <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                        <label class = "mdl-textfield__label" for="name">Name</label>
                        <input type="test" class = "mdl-textfield__input" id="name" name="name" placeholder="Name" value="<?php echo $vendor['name']; ?> " required>
                    </div>
				  </div>
				  <div class='col-md-6'>	
                    <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                        <label class = "mdl-textfield__label" for="simpleFormEmail">Email address</label>
                        <input type="email" class = "mdl-textfield__input" id="email" name="email" placeholder="Enter email address" value="<?php echo $vendor['email']; ?>" required>
                    </div>
				   </div>
				</div>
				<div>
				  <div class='col-md-6'>	
                    <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                        <label class = "mdl-textfield__label" for="mobile">Phone Number</label>
                        <input type="text" class = "mdl-textfield__input" id="mobile" name="phone_no" placeholder="Enter Phone Number" pattern = "-?[0-9]*(\.[0-9]+)?" value="<?php echo $vendor['phone_no'] ; ?>" required>
				   <span class = "mdl-textfield__error">Number required!</span>
                    </div>
				  </div>
				  
                
				<div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                <label class = "mdl-textfield__label" for="hotel_acc_no">Account Number</label>
                <input type="text" class = "mdl-textfield__input" id="hotel_acc_no" placeholder="Enter Account Number" value="<?php echo $vendor['hotel_acc_no'] ; ?>" name="hotel_acc_no"  required>
              </div>
              </div>
			 
			  <div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                <label class = "mdl-textfield__label" for="hotel_ifsc_code">IFSC code</label>
                <input type="text" class = "mdl-textfield__input" id="ifsc_code" placeholder="Enter IFSC code" name="hotel_ifsc_code" value="<?php echo $vendor['hotel_ifsc_code'] ; ?>"required>
              </div>
              </div>

				<div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                <label class = "mdl-textfield__label" for="full_name">Full Name</label>
                <input type="text" class = "mdl-textfield__input" id="full_name" placeholder="Enter Full Name" name="full_name" value="<?php echo $vendor['full_name'] ; ?>" required>
              </div>
              </div>

			  <div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                <label class = "mdl-textfield__label" for="acc_branch">Branch</label>
                <input type="text" class = "mdl-textfield__input" id="acc_branch" placeholder="Enter Branch" name="acc_branch" value="<?php echo $vendor['acc_branch'] ; ?>" required>
              </div>
              </div>


				</div>
				<div class='col-md-12 '>	
                    <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                        <label class = "mdl-textfield__label" for="address">Address</label>
                        <input type="textarea" class = "mdl-textfield__input" id="address" name="address" placeholder="Address" value="<?php echo $vendor['address']; ?> " required>
                        <!-- <textarea class="form-control" id="address" name="address" >
                            Address

                        </textarea> -->
                    </div>
				</div>	
					<div align='center'>
                    <button type="submit" class="btn btn-success">Submit</button>
					</div>
                </form>
               
				</div>
            </div>
		</div>	