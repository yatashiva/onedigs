<!DOCTYPE html>
<html lang="en">

<head>
	<title>OlaKite</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
	<!-- FONTAWESOME ICONS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend2/css/font-awesome.min.css">
	<!-- ALL CSS FILES -->
	<link href="<?php echo base_url(); ?>assets/frontend2/css/materialize.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/frontend2/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/frontend2/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
	<link href="<?php echo base_url(); ?>assets/frontend2/css/responsive.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		.book-form {
     margin-top: 55px !important; 
}
.book-form form {
    
    border-bottom: 4px solid #3883c4;
}
.input-field {
    /*position: relative;*/
    margin-top: 2rem;
}
.hom-body-section:before {
   
    background: #fff;
    }
   

.menu-section {
    padding: 10px 0px;
    background: #ffffff;
    box-shadow: 0px 1px 20px rgb(255 255 255);
    position: fixed;
    width: 100%;
    z-index: 999;
    top: 0px;
}
.menu-bar ul li a {
    color: #3883c4;
  }

  @media only screen and (max-width: 600px){
    #mhide {
    display:none;
}
.hom-body-section {
    padding-top: 80px !important;
    }
}

	</style>
</head>

<body data-ng-app="" style="background-color: #fff">
	<!--MOBILE MENU-->
	<section>
		<div class="mm" style="background-color: transparent;">
			<div class="mm-inn">
				<div class="mm-logo">
					<a href="#"><img src="images/logo.png" width="80px" alt="">
					</a>
				</div>
				
				
			</div>
		</div>
	</section>
	<!--HEADER SECTION-->
	<section class="main">
		<!--TOP SECTION-->
		<div class="menu-section">
			<div class="container">
				<!-- <div class="row">
					<div class="top-bar">
						<ul>
							
							<li><a href="#">Toll Free No: 1800 102 7275</a>
							</li>
						</ul>
					</div>
				
				</div> -->
				<div class="row">
					<div class="logo">
						<a href="#"><img src="<?php echo base_url(); ?>assets/frontend2/images/logo.png" width="70px" alt="" />
						</a>
					</div>
					<div class="menu-bar">
						<ul>
						
						
							<li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a>
							</li>
							<li><a style="background: #3883c4;
    padding: 7px 15px;
    color: #fff;border-radius: 2px;" class="waves-effect waves-light" href="#">Sign Up</a>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--TOP SECTION-->