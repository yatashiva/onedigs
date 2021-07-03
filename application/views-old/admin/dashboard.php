 <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
  </script>
<div class="state-overview" style='font-family: Poppins,sans-serif;font-size: 15px;'>

							<div class="row">
							<?php
						         if ($this->session->userdata('is_logged_in')) {
						         	if($this->session->userdata('user_type')==1 || $this->session->userdata('user_type')==2)
						         	{
						         		?>
						        <div class="col-xl-3 col-md-6 col-12">
						          <div class="info-box bg-b-orange">
						            <a href="<?php echo base_url();?>index.php/hotel/" class="info-box-icon push-bottom"><i class="material-icons">shopping_cart</i></a>
						            <div class="info-box-content">
						              <span  class="info-box-text">Total Hotels</span>
						              <?php foreach($num as $n){ ?>
						              <span class="info-box-number"><?php echo $n; ?></span>
						              <?php } ?>
						              <div class="progress">
						                <div class="progress-bar" style="width: 25%"></div>
						              </div>
						             <!--  <span class="progress-description">
						                    45% Increase in 28 Days
						                  </span> -->
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <?php
						    }
						}
						    ?>
						        <!-- /.col -->
						        <div class="col-xl-3 col-md-6 col-12">
						          <div class="info-box bg-b-purple">
						          <?php
						         if ($this->session->userdata('is_logged_in')) {
						         	if($this->session->userdata('user_type')==1 || $this->session->userdata('user_type')==2)
						         	{
						         		?>
						            <a href="<?php echo base_url();?>index.php/reservation/" class="info-box-icon push-bottom"><i class="material-icons">redeem</i></a>
						            <?php
						        }
						        else
						        {
						        	?>
						        	<a href="<?php echo base_url();?>index.php/reservation/reservations_by_agent" class="info-box-icon push-bottom"><i class="material-icons">redeem</i></a>
						        	<?php
						        }
						    }

						        ?>
						            <div class="info-box-content">
						              <span class="info-box-text">Bookings</span>
						              <?php 
						              // print_r($reservations);
						              foreach($reservations as $n){ ?>
						              <span class="info-box-number"><?php echo $n; ?></span>
						              <?php } ?>
						              <div class="progress">
						                <div class="progress-bar" style="width: 30%"></div>
						              </div>
						              <!-- <span class="progress-description">
						                    40% Increase in 28 Days
						                  </span> -->
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						       <?php
						         if ($this->session->userdata('is_logged_in')) {
						         	if($this->session->userdata('user_type')==1 )
						         	{
						         		?>
						        <div class="col-xl-3 col-md-6 col-12">
						          <div class="info-box bg-b-cyan">
						        <a href="<?php echo base_url();?>index.php/user_detail/" class="info-box-icon push-bottom"><i class="material-icons">group</i></a>
						            <div class="info-box-content">
						              <span class="info-box-text"> Users</span>
						              <?php foreach($users as $n){ ?>
						              <span class="info-box-number"><?php echo $n; ?></span>
						              <?php } ?>
						              <div class="progress">
						                <div class="progress-bar" style="width: 25%"></div>
						              </div>
						              <!-- <span class="progress-description">
						                    85% Increase in 28 Days
						                  </span> -->
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <?php
						    }
						}
						    
						       
						         if ($this->session->userdata('is_logged_in')) {
						         	if($this->session->userdata('user_type')==1)
						         	{
						         		?>
						        <div class="col-xl-3 col-md-6 col-12">
						          <div class="info-box bg-b-black">
						             <a href="<?php echo base_url();?>index.php/travel_agent/" class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></a>
						            <div class="info-box-content">
						              <span class="info-box-text">Travel Agents</span>
						              <?php foreach($agents as $n){ ?>
						              <span class="info-box-number"><?php echo $n; ?></span>
						              <?php } ?>
						              <div class="progress">
						                <div class="progress-bar" style="width: 20%"></div>
						              </div>
						              <!-- <span class="progress-description">
						                    50% Increase in 28 Days
						                  </span> -->
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <?php
						    }
						}
						   if ($this->session->userdata('is_logged_in')) {
						         	if($this->session->userdata('user_type')==4)
						         	{
						         		?>
						        <div class="col-xl-3 col-md-6 col-12">
						          <div class="info-box bg-b-black">
						             <a href="<?php echo base_url();?>index.php/travel_agent/amount_gained" class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></a>
						            <div class="info-box-content">
						              <span class="info-box-text">Amount Gained</span>
						           <?php
						           foreach($amount_gained as $rev)
						           {
						           	?>
						              <span class="info-box-number"><?php echo $rev['count(*)']*50; ?></span>
						           <?php
						       }
						       ?>
						              <div class="progress">
						                <div class="progress-bar" style="width: 20%"></div>
						              </div>
						              <!-- <span class="progress-description">
						                    50% Increase in 28 Days
						                  </span> -->
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <?php
						    }
						}
						    ?>
						    
						        <!-- /.col -->
						      </div>
			<!-- chart start -->
                    <div class="row">
                    <div class="col-sm-8" id="myChart" >
                       <!-- <div class="card card-box">
                              <div class="card-head">
                                  <header>Chart Survey</header>
                                  <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
									<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
									<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                 </div>
                              </div>
                              <div class="card-body no-padding height-9">
								<div class="row">
								    <canvas id="canvas1"></canvas>
								</div>
							</div>
                         </div> -->
                     </div>
                        <div class="col-sm-4">
                       <div class="card card-box">
                              <div class="card-head">
                                  <header>Chart Survey</header>
                                  <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
									<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
									<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                 </div>
                              </div>
                              <!-- <div class="card-body no-padding height-9"> -->
								<div class="card-body">
								   <!--  <canvas id="chartjs_pie"></canvas> -->
								   <div id="piechart"></div>
								<!-- </div> -->
								</div>
                          </div>
                        </div>
                    </div>
                     <!-- Chart end -->
<?php
                     foreach($monday as $monday)
                     {
                     	$monday=$monday;
                     }
                     foreach($tuesday as $tuesday)
                     {
                     	$tuesday=$tuesday;
                     }
                     foreach($wednesday as $wednesday)
                     {
                     	$wednesday=$wednesday;
                     }
                     foreach($thursday as $thursday)
                     {
                     	$thursday=$thursday;
                     }
                     foreach($friday as $friday)
                     {
                     	$friday=$friday;
                     }
                     foreach($saturday as $saturday)
                     {
                     	$saturday=$saturday;
                     }
                     foreach($sunday as $sunday)
                     {
                     	$sunday=$sunday;
                     }
                     ?>
 
  <script>
     
	
	var myData = [<?php echo $monday; ?>, <?php echo $tuesday; ?>, <?php echo $wednesday; ?>, <?php echo $thursday; ?>, <?php echo $friday; ?>, <?php echo $saturday; ?>, <?php echo $sunday; ?>];
    var myConfig = {
      "graphset": [{
        "type": "bar",
        "title": {
          "text": "Present Week Bookings"
        },
        "scale-x": {
          "labels": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
        },
        "series": [{
          "values": myData
        }]
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: "100%",
      width: "100%"
    });
 </script>    
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      
            ['Monday',<?php echo $monday; ?>],
            ['Tuesday',<?php echo $tuesday; ?>],
            ['Wednesday',<?php echo $wednesday; ?>],
            ['Thurday',<?php echo $thursday; ?>],
            ['Friday',<?php echo $friday; ?>],
            ['Saturday',<?php echo $saturday; ?>],
            ['Sunday',<?php echo $sunday; ?>]
         
      
      
    ]);
    
    var options = {
        title: 'This Week Bookings',
        width: 350,
		
        height: 400,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>         
</div>

