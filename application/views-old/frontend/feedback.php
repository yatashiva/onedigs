<?php include("header.php"); ?>

<div class="container" style='margin-top:2%;margin-bottom:2%'>

	<div class='col-md-6 col-md-offset-3' style='border-radius:5px;padding:30px;-moz-box-shadow: 0px 1px 5px #706870;
-webkit-box-shadow: 0px 1px 5px #706870;
box-shadow: 0px 1px 5px #706870;'>

<h2 style='text-align:center;color:red'>Feedback Form</h2>
	<form action='' method='post' >
		<div class='form-group'>
			<label>Name</label>
			<input type='text' class='form-control' name='name' placeholder='Enter FullName' />
		</div>
		<div class='form-group'>
			<label>Email</label>
			<input type='email' class='form-control' name='email' placeholder='Enter EmailId'/>
		</div>
		<div class='form-group'>
			<label>Mobile No</label>
			<input type='number' class='form-control' name='mobile' placeholder='Enter Phone No' />
		</div>
		<div class='form-group'>
			<label class='control-label'>Feedback</label>
			<textarea type='text' class='form-conrol' placeholder='Enter Feedback...' style='width:512px;display:inherit'></textarea>
		</div>
		<div align='center'>
			<button type='submit' name='submit' class='btn btn-success'>Submit</button>
		</div>
	</form>

	</div> 
</div>		

<?php include("footer.php"); ?>	