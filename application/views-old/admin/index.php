<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.in/templates/admin/smile/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Mar 2018 04:38:11 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <!-- <title>Smile Admin | Bootstrap Responsive Admin Template</title> -->
    <title>NOHO Rooms | Admin</title>
    <!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/admin/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/admin/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/material_style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/material/formlayout.css">
	<!-- animation -->
	<link href="<?php echo base_url(); ?>assets/admin/css/pages/animate_page.css" rel="stylesheet">
	<!-- inbox style -->
    <link href="<?php echo base_url(); ?>assets/admin/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
    
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/css/theme-color.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/admin/css/formlayout.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/img/favi.jpg" /> 
    <!-- data tables -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
<!-- full calendar -->
<link href="<?php echo base_url(); ?>assets/admin/plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />

<style>
    
html{
    zoom: 90%;
}
</style>
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
        <?php include("header.php"); ?>
        <!-- end header -->
    
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
             <?php 
             if($this->session->userdata('is_logged_in')&&$this->session->userdata('user_type')==1) {
                include("sidebar.php");
             }  else if($this->session->userdata('is_logged_in')&&$this->session->userdata('user_type')==2){
                include("vendor_sidebar.php");    
             } 
				else if($this->session->userdata('is_logged_in')&&$this->session->userdata('user_type')==4){
                include("agent_sidebar.php");    
             }			 
              ?>
            <!-- end sidebar menu --> 
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <!-- <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div> -->

						<?php
								if(isset($_view) && $_view)
								$this->load->view($_view);
							?> 
                    
                </div>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <?php include("footer.php"); ?>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery/jquery.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/popper/popper.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-ui/jquery-ui.min.js" ></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/sparkline/jquery.sparkline.min.js" ></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/pages/sparkline/sparkline-data.js" ></script>
	

    <!-- Common js-->
	<script src="<?php echo base_url(); ?>assets/admin/js/app.js" ></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/layout.js" ></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/theme-color.js" ></script>
    <!-- material -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/material/material.min.js"></script>
    <!-- animation -->
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/ui/animations.js" ></script>
    <!-- chart js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/chart-js/Chart.bundle.js" ></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/chart-js/utils.js" ></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/chart/chartjs/home-data.js" ></script>
    <!-- summernote -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/summernote/summernote.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/summernote/summernote-data.js" ></script>
    <!-- end js include path -->
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/dataTables/datatables.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
 	<script src="<?php echo base_url(); ?>assets/admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/table/table_data.js" ></script>
    <!--calender>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/moment/moment.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/fullcalendar/fullcalendar.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/calendar/calendar.min.js" ></script-->

     <!--script>
    $('#calendar1').fullCalendar({
        header: {
        left: 'prev,next',
        center: 'title',
        right: '',
         },
         editable: true,
         events:<?php echo $inventory; ?>,
        dayClick: function(date, jsEvent, view) {
                var hotel_id = "<?php echo $hotel_id; ?>";
                var data = {
                        "hotel_id": hotel_id,
                        "date" : date.format()
                        };
                
                $.ajax({
                    url: '<?php echo base_url()."index.php/inventory/getinventorydetailsbydate"?>',
                    type: "POST",
                    data: data,
                    success: function(data) {
                        var result = JSON.parse(data);
                        var details= result['details'];
                        $('#example1').dataTable().fnClearTable();
                        for(var i=0; i<details.length; i++ ){
                           
                            if(details[i]['custom_availability'] != null ){
                                var availability = details[i]['custom_availability'];
                            }else{
                                 var availability = details[i]['availability'];
                            }

                            if(details[i]['blocked']== '0'){
                                var block = 'block';
                            }else{
                                var block = 'unblock';
                                var availability = 0;
                            }
                            if(details[i]['sub_name']!= undefined){
                                    var name=details[i]['category_name']+"-"+details[i]['sub_name'];
                                  }else{
                                    var name=details[i]['category_name'];
                                  }

                                  if(details[i]['blocked']== '0'){
                            var myData2 = [
                              {
                                  
                                0: name,
                                  1:"<input style='width:50px' type='text' value= '"+availability+"' data-id= '"+details[i]['id']+"' class='edit'>",
                                  2: "<input type='button'data-id = '"+details[i]['id']+"' class='block' value='"+ block +"' data-block='"+ details[i]['blocked']+"'>"
                              }
                            ];
                                  }else{
                                    var myData2 = [
                              {
                                  
                                0: name,
                                  1:"<input style='width:50px' type='text' value= '"+availability+"' data-id= '"+details[i]['id']+"' class='edit' readonly>",
                                  2: "<input type='button'data-id = '"+details[i]['id']+"' class='block' value='"+ block +"' data-block='"+ details[i]['blocked']+"'>"
                              }
                            ];

                                  }
                           $('#example1').dataTable().fnAddData(myData2); 
                        }
                        
                        
                    }
                });
             // alert('Clicked on: ' + date.format());
              $('#myModal').modal('show');

        }
        
        });

    $(document).on('blur','.edit',function(){
       var id= $(this).data("id");
       var custom_availability= $(this).val();
       var data = {
                        "id": id,
                        "custom_availability" : custom_availability
                        };

       $.ajax({
                    url: '<?php echo base_url()."index.php/inventory/updatecustominventory"?>',
                    type: "POST",
                    data: data,
                    success: function(data) {
                        if(data == 1){
                            alert('updated');
                        }
                    }

        });
    });

    $(document).on('click','.block',function(){
       var id= $(this).data("id");      
       var data = {
                        "id": id,
                        };

       $.ajax({
                    url: '<?php echo base_url()."index.php/inventory/block"?>',
                    type: "POST",
                    data: data,
                    success: function(data) {
                        if(data == 'blocked'){
                            alert('updated');
                            // $(this).val('unblock');
                        }else if(data == 'unblocked'){
                            alert('updated');
                            // $(this).val('block');
                        }
                    }

        });
    });
    </script-->
    <script>
    
		$(document).ready(function(){
			$(document).on('click', '.showModalButton', function () {    
				$('#myModal').modal('show')
							.find('#modalContent')
							.load($(this).attr('value'));
					//dynamiclly set the header for the modal
					document.getElementById('modalHeaderTitle').innerHTML = '<h3>' + $(this).attr('title') + '</h3>';
				//}
			});
		});

    </script>
    
    
  </body>

</html>
