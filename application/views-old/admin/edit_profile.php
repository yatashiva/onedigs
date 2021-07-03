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
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Profile Details</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit Profile Details</li>
                            </ol>
							
                        </div>
                    </div>  
<div class='container'>  					
            <div class="card-box col-md-12 travel_management">
			<div class='card-head'>
				<h2 align='center'>Edit Profile Details</h2>
			</div>
			<div class='card-body'>
                <form action="<?php echo base_url();?>index.php" method="POST">
                    <input type="hidden" name="user_type" value="2"/>
				<div>
				   <div class='col-md-6'>	
                    <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                        <label class = "mdl-textfield__label" for="name">Name</label>
                        <input type="test" class = "mdl-textfield__input" id="name" name="profile_name" placeholder="Name">
                    </div>
				   </div>
				   <div class='col-md-6'>	
                    <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                        <label class = "mdl-textfield__label" for="simpleFormEmail">Email address</label>
                        <input type="email" class = "mdl-textfield__input" id="email" name="profile_email" placeholder="Enter email address">
                    </div>
				   </div>	
				</div>
				<div>
				   <div class='col-md-6'>	
                    <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                        <label class = "mdl-textfield__label" for="mobile">Phone Number</label>
                        <input type="text" class = "mdl-textfield__input" id="mobile" name="profile_phone_no" placeholder="Enter Phone Number" pattern = "-?[0-9]*(\.[0-9]+)?">
				   <span class = "mdl-textfield__error">Number required!</span>
                    </div>
				   </div>
                   <div class='col-md-6'> 				   
                    <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                        <label class = "mdl-textfield__label" for="address">Address</label>
                        <input type="textarea" class = "mdl-textfield__input" id="address" name="address" placeholder="Address">
                        <!-- <textarea class="form-control" id="address" name="address" >
                            Address

                        </textarea> -->
                    </div>
				   </div>
				</div>	
					
					<div align='center'>
                    <button type="submit" class="btn btn-success">Submit</button>
					</div>
                </form>
				</div>
            </div>
</div>