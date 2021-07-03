

 <style>
body{
}
	


	#mainform{
width:960px;
margin:20px auto;
padding-top:20px;
font-family:'Fauna One',serif
}
#mainform h2{
width:100%;
float:left;
text-align:center;
margin-top:35px
}
.innerdiv{
width:65%;
float:left
}
form{
background-color:#fff;
color:#123456;
box-shadow:0 1px 1px 1px gray;
width:500px;
margin:50px 250px 0 50px;
float:left;
height:400px;
padding:10px
}
h3{
margin-top:0;
color:#fff;
background-color:#8dc53f;
text-align:center;
width:100%;
height:50px;
padding-top:30px
}
input{
width:250px;
height:30px;
margin-top:10px;
border-radius:3px;
padding:2px;
box-shadow:0 1px 1px 0 #a9a9a9;
margin:10px
}
input[type=button]{
background-color:#8dc53f;
border:1px solid #fff;
font-family:'Fauna One',serif;
font-weight:700;
font-size:18px;
color:#fff;
width:150px;

margin-top:30px
}
span{
color:green
}
#myForm div{
color:red;
font-size:14px
}

.edit_form{
	border-radius:10px;
	
}
</style>
<div class="container">

<div class='col-md-6 col-md-offset-4 col-xs-12' style='margin-left:25%'>
<?php
// print_r($user_detail);
?>


<form action="<?php echo base_url(); ?>index.php/login_user/changepassword" method="POST" enctype="multipart/form-data" id="myForm"  name="myForm" class='edit_form'>
<h3 style='border-radius:5px'>Change Password!</h3>
<table>
<tr>

<td><input type='hidden' id='username' name='email'  placeholder='Edit Name'  value="<?php echo $email; ?>" required></td>
<td>
<div id='username'></div>
</td>
</tr>
<tr>
<td>Password</td>
<td><input id='password' name='password'  type='password' placeholder=''   required></td>
<td>
<div id='mobile'></div>
</td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input id='cpassword' name='cpassword'  type='password' placeholder=''   required></td>
<td>
<div id='email'></div>
</td>
</tr>

</table>
<br>
<br>
<br>
<div align='center'>
<input type='submit' onclick="return passwordcheck()" value='change' style='border-radius:5px' >
</div>
</form>

</div>
</div>
<script>
function passwordcheck()
{
	var password=document.getElementById('password').value;
	var cpassword=document.getElementById('cpassword').value;
	if(password==cpassword)
	{
		return true;
	}
	else
	{
		alert("Passwords Do not match!!");
		return false;
	}
}
</script>

