<style>

.travel_management {
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
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Travel Agent Details</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit Travel Agent</li>
                            </ol>
							
                        </div>
                    </div>  
<div class='container'>  					
            <div class="card-box col-md-12 travel_management">
			<div class='card-head'>
				<h2 align='center'>Edit Travel Agent Details</h2>
			</div>
			<div class='card-body'>
                <form action="<?php echo base_url();?>index.php/travel_agent/edit/<?php echo $agent_detail['id']; ?>" method="POST">
                    <input type="hidden" name="user_type" value="2"/>
				<div>
				   <div class='col-md-6'>	
                    <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                        <label class = "mdl-textfield__label" for="name">Name</label>
                        <input type="test" class = "mdl-textfield__input" id="name" name="name" placeholder="Name" value="<?php echo $agent_detail['name']; ?>"  required>
                    </div>
				   </div>
				   <div class='col-md-6'>	
                    <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                        <label class = "mdl-textfield__label" for="simpleFormEmail">Email address</label>
                        <input type="email" class = "mdl-textfield__input" id="email" name="email" placeholder="Enter email address" value="<?php echo $agent_detail['email']; ?>" required>
                    </div>
				   </div>	
				</div>
				<div>
				   <div class='col-md-6'>	
                    <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                        <label class = "mdl-textfield__label" for="mobile">Phone Number</label>
                        <input type="text" class = "mdl-textfield__input" id="mobile" name="phone_no" placeholder="Enter Phone Number" pattern = "-?[0-9]*(\.[0-9]+)?" value="<?php echo $agent_detail['phone_no']; ?>" required>
				   <span class = "mdl-textfield__error">Number required!</span>
                    </div>
				   </div>
                 
				</div>	
				<div class='col-md-12'>
                    <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                        <label class = "mdl-textfield__label" for="address">Address</label>
                        <input type="textarea" class = "mdl-textfield__input" id="address" name="address" placeholder="Address" value="<?php echo $agent_detail['address']; ?>" required >
                        <!-- <textarea class="form-control" id="address" name="address" >
                            Address

                        </textarea> -->
                    </div>
				</div>

                    
                <!-- Adding these inputs to accomadate the edit option for newly added fields -->
				<div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Account Number</label>
                <input type="text" class = "mdl-textfield__input" id="hotel_acc_no" placeholder="Enter Account Number" name="hotel_acc_no" value="<?php echo $agent_detail['hotel_acc_no']; ?>" required>
              </div>
              </div>
			 
			  <div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                <label class = "mdl-textfield__label" for="exampleInputEmail1">IFSC code</label>
                <input type="text" class = "mdl-textfield__input" id="hotel_ifsc_code" placeholder="Enter IFSC code" name="hotel_ifsc_code"  value="<?php echo $agent_detail['hotel_ifsc_code']; ?>" required>
              </div>
              </div>
		
				<div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Full Name</label>
                <input type="text" class = "mdl-textfield__input" id="fullname" placeholder="Enter Full Name" name="fullname" value="<?php echo $agent_detail['fullname']; ?>" required>
              </div>
              </div>
			  <div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Branch</label>
                <input type="text" class = "mdl-textfield__input" id="acc_branch" placeholder="Enter Branch" name="acc_branch" value="<?php echo $agent_detail['acc_branch']; ?>" required>
              </div>
              </div>

              <div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                <label class = "mdl-textfield__label" for="exampleInputEmail1">GST Number</label>
                <input type="text" class = "mdl-textfield__input" id="gst_no" placeholder="GST Number" name="gst_no" value="<?php echo $agent_detail['gst_no']; ?>" required>
              </div>
              </div>

              <div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Pan Number</label>
                <input type="text" class = "mdl-textfield__input" id="pan_no" placeholder="PAN Number" name="pan_no" value="<?php echo $agent_detail['pan_no']; ?>" required>
              	</div>


					<div align='center'>
                    <button type="submit" class="btn btn-success">Submit</button>
					</div>
                </form>
				</div>
            </div>
</div>