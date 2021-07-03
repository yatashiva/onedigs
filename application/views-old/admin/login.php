<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>NOHO Rooms</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="<?php echo base_url(); ?>assets/admin/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/admin/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap -->
	<link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/pages/extra_pages.css">
	<!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/img/favicon.png" /> 
	
	
	
</head>
<body style="background-image:url(<?php echo base_url(); ?>gallery/admin_login_images/cityscape.jpg);background-repeat:none;background-size:100%">
    <div class="form-title">
        
    </div>
     <p style="text-align: center; color: white;"><?php if(isset($data))
        {
            echo $data;
        }
        ?>
        </p>
    <!-- Login Form-->
    <div class="login-form text-center">
        <!-- <div class="toggle"><i class="fa fa-user-plus"></i>
        </div> -->
        <div></div>
        <div class="form formLogin">
			<!-- <img src='<?php echo base_url(); ?>assets/admin/img/admin_logo.png' class='img-responsive center-block' /> -->
            <form action="<?php echo base_url(); ?>index.php/login_user/login" method="post" style='margin-top:20px'>
                <!-- <input type="text" placeholder="Email" name="email"/> -->
                <input type="email" class=""  placeholder="Enter email address" name="email" value="<?php if($this->input->cookie('email')) { echo $this->input->cookie('email',true); } ?>" required>
                <input type="password" class=""  placeholder="Password" name="password" value="<?php if($this->input->cookie('password')) { echo $this->input->cookie('password',true); } ?>" required>
                <div class="remember text-left">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox2" type="checkbox" name="remember" <?php if($this->input->cookie('email')) { echo "checked"; } ?> >
                        <label for="checkbox2">
                            Remember me
                        </label>
                    </div>
                </div>
                <button>Login</button>
                <div class="forgetPassword"><a href="javascript:void(0)">Forgot your password?</a>
                </div>
            </form>
        </div>
        <div class="form formRegister">
            <h2>Interested?</h2>
            <form>
                <input type="text" placeholder="Username" />
                <input type="password" placeholder="Password" />
                <input type="email" placeholder="Email Address" />
                <input type="text" placeholder="Full Name" />
                <input type="tel" placeholder="Phone Number" />
                <button>Register</button>
            </form>
        </div>
        <div class="form formReset">

            <h2>Get your password?</h2>
            <form action="<?php echo base_url(); ?>index.php/login_user/forgetPassword" method="POST">
                <input type="email" placeholder="Email Address" name="email"  required />
                <button>Send Password</button>
            </form>
        </div>
    </div>
    <!-- start js include path -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery/jquery.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/extra_pages/pages.js" ></script>
    <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/smile/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Mar 2018 04:41:11 GMT -->
</html>




  