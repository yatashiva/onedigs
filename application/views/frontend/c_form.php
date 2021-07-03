<?php include("header.php"); ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea , [type=number] {
     width: 100%;
     padding: 12px;
     border: 1px solid #ccc;
     border-radius: 4px;
     box-sizing: border-box;
     margin-top: 6px;
     margin-bottom: 16px;
     resize: vertical;
}

input[type=email] {
     width: 100%;
     padding: 12px;
     border: 1px solid #ccc;
     border-radius: 4px;
     box-sizing: border-box;
     margin-top: 6px;
     margin-bottom: 16px;
     resize: vertical;
}

input[type=submit] {
     background-color: #4CAF50;
     color: white;
     padding: 12px 20px;
     border: none;
     border-radius: 4px;
     cursor: pointer;
}

input[type=submit]:hover {
     background-color: #45a049;
}

.container {
     border-radius: 5px;
     padding: 20px;
}
</style>
</head>
<body>


<!-- bread-crumb start here -->
<div class="bread-crumb">
	<img src="<?php echo base_url();?>/assets/frontend/img/top-banner.jpg" class="img-responsive" alt="banner-top" title="banner-top">
</div>
<!-- bread-crumb end here -->

<!-- contactus start here -->
<div class="contactus">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
				<h4>
					<i class="icon_star_alt"></i> 
          <h2 class=" page-header text-center">Career Contact Form</h2>
					<i class="icon_star_alt"></i>
				</h4>
				<p></p>
			</div>
			<div class="col-sm-offset-2 col-md-8 col-sm-8  col-xs-12">
				<form action="<?php echo base_url();?>index.php/careers/" method="post" class="form-horizontal">
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="fname" name="firstname" class="form-control" placeholder="Your name.."/>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="lname" name="lastname" placeholder="Your last name.." class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" id="Cname" name="contact_number" placeholder="Your Contact Number"class="form-control"/>
						</div>
          </div>
          <div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12">
            <input type="email" id="emailId" name="emailId" placeholder="Your Email" class="form-control"/>
            </div>
          </div>
            <div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12">
                            <select id="career" name="career_optn">
                            <option value="hotel_management">Hotel Management</option>
                            <option value="head_cheff">Head Cheff</option>
                            <option value="buttler">Buttler</option>
                            <option value="others">Others</option>
                            </select>						
                        </div>
					</div>
					<div class="form-group">
						<div class="col-sm-12 col-md-12 col-xs-12">
							<i class="icofont icofont-pencil-alt-5"></i>
							<textarea id="pSummary" name="profile_summary" placeholder="Brief your profile.." class="form-control" ></textarea>
						</div>
					</div>
					<div class="buttons text-right">
						<input class="btn btn-ghost btn-ghost-bordered center-block" type="submit" value="Submit" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- contactus end here -->

<!--
<h2 class=" page-header text-center">Career Contact Form</h2>

<div class="container">
   <form action="<?php echo base_url();?>index.php/careers/" method="post">
     <label for="fname">First Name</label>
     <input type="text" id="fname" name="firstname" placeholder="Your name..">

     <label for="lname">Last Name</label>
     <input type="text" id="lname" name="lastname" placeholder="Your last name..">

     <label for="cNumber">Contact Number</label>
     <input type="number" id="lname" name="contact_number" placeholder="Your Contact Number">

     <label for="emailId">Emai ID</label>
     <input type="email" id="emailId" name="emailId" placeholder="Your Email">

     <label for="career_optn">Career Type</label>
     <select id="career" name="career_optn">
       <option value="hotel_management">Hotel Management</option>
       <option value="head_cheff">Head Cheff</option>
       <option value="buttler">Buttler</option>
       <option value="others">Others</option>
     </select>

     <label for="pSummary">Profile Summary</label>
     <textarea id="pSummary" name="profile_summary" placeholder="Brief your profile.." style="height:200px"></textarea>

    	<br>
    
     <input type="submit" class="btn btn-ghost btn-ghost-bordered center-block" value="Submit">
   </form>
   
</div>
-->

</body>
</html>

<?php include("footer.php"); ?>
