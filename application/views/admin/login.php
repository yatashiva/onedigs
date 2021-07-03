<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head>
	
		<meta charset="utf-8" />
		<title>Olakite | Admin Login</title>
	
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="<?php echo base_url(); ?>assets/admin2/assets/css/pages/login/classic/login-5.css?v=7.2.5" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo base_url(); ?>assets/admin2/assets/plugins/global/plugins.bundle.css?v=7.2.5" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/admin2/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.2.5" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/admin2/assets/css/style.bundle.css?v=7.2.5" rel="stylesheet" type="text/css" />
			<link href="<?php echo base_url(); ?>assets/admin2/assets/css/login.css?v=7.2.5" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="https://res.cloudinary.com/mallinamala/image/upload/v1617777694/logo_dxdulq.png" />
		<style>
		    .login.login-1 .login-forgot, .login.login-1 .login-signin, .login.login-1 .login-signup { display: none; }
.login.login-1.login-signin-on .login-signup { display: none; }
.login.login-1.login-signin-on .login-signin { display: block; }
.login.login-1.login-signin-on .login-forgot { display: none; }
.login.login-1.login-signup-on .login-signup { display: block; }
.login.login-1.login-signup-on .login-signin { display: none; }
.login.login-1.login-signup-on .login-forgot { display: none; }
.login.login-1.login-forgot-on .login-signup { display: none; }
.login.login-1.login-forgot-on .login-signin { display: none; }
.login.login-1.login-forgot-on .login-forgot { display: block; }
@media (min-width: 992px) {
  .login.login-1 .login-aside { width: 100%; max-width: 600px; }
  .login.login-1 .login-form { width: 100%; max-width: 400px; }
}
@media (min-width: 992px) and (max-width: 1399.98px) {
  .login.login-1 .login-aside { width: 100%; max-width: 400px; }
}
@media (max-width: 991.98px) {
  .login.login-1 .login-form { width: 100%; max-width: 350px; }
}
@media (max-width: 575.98px) {
  .login.login-1 .login-form { width: 100%; max-width: 100%; }
}

		</style>
	
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
				<!--begin::Aside-->
				<div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10" style="background-image: url(https://preview.keenthemes.com/metronic/theme/html/demo13/dist/assets/media/bg/bg-4.jpg);">
					<!--begin: Aside Container-->
					<div class="d-flex flex-row-fluid flex-column justify-content-between">
						<!--begin: Aside header-->
						<a href="#" class="flex-column-auto mt-5 pb-lg-0 pb-10">
							<img src="https://res.cloudinary.com/mallinamala/image/upload/v1617777694/logo_dxdulq.png" class="max-h-70px" alt="" />
						</a>
						<!--end: Aside header-->
						<!--begin: Aside content-->
						<div class="flex-column-fluid d-flex flex-column justify-content-center">
							<h3 class="font-size-h1 mb-5 text-white">Welcome to Olakite!</h3>
							<!--<p class="font-weight-lighter text-white opacity-80">The ultimate Bootstrap, Angular 8, React &amp; VueJS admin theme framework for next generation web apps.</p>-->
						</div>
						<!--end: Aside content-->
						<!--begin: Aside footer for desktop-->
						<div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
							<div class="opacity-70 font-weight-bold text-white">© 2021 Olakite</div>
							<!--<div class="d-flex">-->
							<!--	<a href="#" class="text-white">Privacy</a>-->
							<!--	<a href="#" class="text-white ml-10">Legal</a>-->
							<!--	<a href="#" class="text-white ml-10">Contact</a>-->
							<!--</div>-->
						</div>
						<!--end: Aside footer for desktop-->
					</div>
					<!--end: Aside Container-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="d-flex flex-column flex-row-fluid position-relative p-7 overflow-hidden">
					<!--begin::Content header-->
					<!--<div class="position-absolute top-0 right-0 text-right mt-5 mb-15 mb-lg-0 flex-column-auto justify-content-center py-5 px-10">-->
					<!--	<span class="font-weight-bold text-dark-50">Dont have an account yet?</span>-->
					<!--	<a href="javascript:;" class="font-weight-bold ml-2" id="kt_login_signup">Sign Up!</a>-->
					<!--</div>-->
					<!--end::Content header-->
					<!--begin::Content body-->
					<div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
						<!--begin::Signin-->
						<div class="login-form login-signin">
							<div class="text-center mb-10 mb-lg-20">
								<h3 class="font-size-h1">Log In</h3>
								<!--<p class="text-muted font-weight-bold">Enter your username and password</p>-->
								<p style="text-align: center; color: white;"><?php if(isset($data))
        {
            echo $data;
        }
        ?>
        </p>
							</div>
							<!--begin::Form-->
							<form class="form" action="<?php echo base_url(); ?>index.php/login_user/login" method="post">
								<div class="form-group">
									<input class="form-control form-control-solid h-auto py-5 px-6" type="email" placeholder="Enter email address" name="email" value="<?php if($this->input->cookie('email')) { echo $this->input->cookie('email',true); } ?>" required autocomplete="off"/>
								</div>
								<div class="form-group">
									<input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Password" name="password" value="<?php if($this->input->cookie('password')) { echo $this->input->cookie('password',true); } ?>" required />
								</div>
								<!--begin::Action-->
								
								<div class="form-group d-flex flex-wrap justify-content-between align-items-center">
									<a href="#" class="text-dark-50 text-hover-primary my-3 mr-2" data-toggle="modal" data-target="#exampleModalCenter">Forgot Password ?</a>
									<button class="btn btn-pill btn-primary opacity-90 px-15 py-3">Login</button>
								</div>
								<!--end::Action-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Signin-->
				
						<!--begin::Forgot-->
						<div class="login-form login-forgot">
							<div class="text-center mb-10 mb-lg-20">
								<h3 class="font-size-h1">Forgot your Password ?</h3>
								<p class="text-muted font-weight-bold">Enter your email to Get your password</p>
							</div>
							<!--begin::Form-->
							<form class="form" novalidate="novalidate" id="kt_login_forgot_form" action="<?php echo base_url(); ?>index.php/login_user/forgetPassword" method="POST">
								<div class="form-group">
									<input class="form-control form-control-solid h-auto py-5 px-6" type="email" placeholder="Email" name="email" required autocomplete="off" />
								</div>
								<div class="form-group d-flex flex-wrap flex-center">
									<button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Send Password</button>
									<button type="submit" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Cancel</button>
								</div>
							</form>
							<!--end::Form-->
						</div>
						<!--end::Forgot-->
					</div>
					<!--end::Content body-->
					<!--begin::Content footer for mobile-->
					<div class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
						<div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2021 Olakite</div>
						<!--<div class="d-flex order-1 order-sm-2 my-2">-->
						<!--	<a href="#" class="text-dark-75 text-hover-primary">Privacy</a>-->
						<!--	<a href="#" class="text-dark-75 text-hover-primary ml-4">Legal</a>-->
						<!--	<a href="#" class="text-dark-75 text-hover-primary ml-4">Contact</a>-->
						<!--</div>-->
					</div>
					<!--end::Content footer for mobile-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">-->
<!--  Launch demo modal-->
<!--</button>-->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Forgot your Password ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form" novalidate="novalidate" id="kt_login_forgot_form" action="<?php echo base_url(); ?>index.php/login_user/forgetPassword" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" id="email" placeholder="Enter email">
   
  </div>
 
 
  <button type="submit" class="btn btn-primary">Send Password</button>
</form>
      </div>
     
    </div>
  </div>
</div>
	
	
	
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?php echo base_url(); ?>assets/admin2/assets/plugins/global/plugins.bundle.js?v=7.2.5"></script>
		<script src="<?php echo base_url(); ?>assets/admin2/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.2.5"></script>
		<script src="<?php echo base_url(); ?>assets/admin2/assets/js/scripts.bundle.js?v=7.2.5"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="<?php echo base_url(); ?>assets/admin2/assets/js/pages/custom/login/login-general.js?v=7.2.5"></script>
		<script>
		    "use strict";
var KTLogin = function() {
    var t, i = function(i) {
        var o = "login-" + i + "-on";
        i = "kt_login_" + i + "_form";
        t.removeClass("login-forgot-on"),
        t.removeClass("login-signin-on"),
        t.removeClass("login-signup-on"),
        t.addClass(o),
        KTUtil.animateClass(KTUtil.getById(i), "animate__animated animate__backInUp")
    };
    return {
        init: function() {
            var o;
            t = $("#kt_login"),
            o = FormValidation.formValidation(KTUtil.getById("kt_login_signin_form"), {
                fields: {
                    username: {
                        validators: {
                            notEmpty: {
                                message: "Username is required"
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "Password is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    submitButton: new FormValidation.plugins.SubmitButton,
                    bootstrap: new FormValidation.plugins.Bootstrap
                }
            }),
            $("#kt_login_signin_submit").on("click", (function(t) {
                t.preventDefault(),
                o.validate().then((function(t) {
                    "Valid" == t ? swal.fire({
                        text: "All is cool! Now you submit this form",
                        icon: "success",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }
                    )) : swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }
                    ))
                }
                ))
            }
            )),
            $("#kt_login_forgot").on("click", (function(t) {
                t.preventDefault(),
                i("forgot")
            }
            )),
            $("#kt_login_signup").on("click", (function(t) {
                t.preventDefault(),
                i("signup")
            }
            )),
            function(t) {
                var o, n = KTUtil.getById("kt_login_signup_form");
                o = FormValidation.formValidation(n, {
                    fields: {
                        fullname: {
                            validators: {
                                notEmpty: {
                                    message: "Username is required"
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: "Email address is required"
                                },
                                emailAddress: {
                                    message: "The value is not a valid email address"
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: "The password is required"
                                }
                            }
                        },
                        cpassword: {
                            validators: {
                                notEmpty: {
                                    message: "The password confirmation is required"
                                },
                                identical: {
                                    compare: function() {
                                        return n.querySelector('[name="password"]').value
                                    },
                                    message: "The password and its confirm are not the same"
                                }
                            }
                        },
                        agree: {
                            validators: {
                                notEmpty: {
                                    message: "You must accept the terms and conditions"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap
                    }
                }),
                $("#kt_login_signup_submit").on("click", (function(t) {
                    t.preventDefault(),
                    o.validate().then((function(t) {
                        "Valid" == t ? swal.fire({
                            text: "All is cool! Now you submit this form",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        }).then((function() {
                            KTUtil.scrollTop()
                        }
                        )) : swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        }).then((function() {
                            KTUtil.scrollTop()
                        }
                        ))
                    }
                    ))
                }
                )),
                $("#kt_login_signup_cancel").on("click", (function(t) {
                    t.preventDefault(),
                    i("signin")
                }
                ))
            }(),
            function(t) {
                var o;
                o = FormValidation.formValidation(KTUtil.getById("kt_login_forgot_form"), {
                    fields: {
                        email: {
                            validators: {
                                notEmpty: {
                                    message: "Email address is required"
                                },
                                emailAddress: {
                                    message: "The value is not a valid email address"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap
                    }
                }),
                $("#kt_login_forgot_submit").on("click", (function(t) {
                    t.preventDefault(),
                    o.validate().then((function(t) {
                        "Valid" == t ? KTUtil.scrollTop() : swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        }).then((function() {
                            KTUtil.scrollTop()
                        }
                        ))
                    }
                    ))
                }
                )),
                $("#kt_login_forgot_cancel").on("click", (function(t) {
                    t.preventDefault(),
                    i("signin")
                }
                ))
            }()
        }
    }
}();
jQuery(document).ready((function() {
    KTLogin.init()
}
));

		</script>
		<!--end::Page Scripts-->
	
	</body>
	<!--end::Body-->
</html>