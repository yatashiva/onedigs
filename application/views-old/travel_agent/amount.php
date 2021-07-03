<div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-aqua">
                                <div class="card-head">
                                    <header>Amount Gained</header>
                                    <!-- <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div> -->
                                </div>
                                <div class="card-body ">
                                  <div class="table-scrollable">
                                    <table id="example1" class="display" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>TOtal No Bookings</th>
                                                <th>Amount Gained</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
											
                                               <?php foreach($amount_gained as $rev){ 
											   
											   ?>
											   
                                                     <td><?php echo $rev['count(*)'] ?></td>
                                                    <td><?php echo ($rev['count(*)']*50) ?></td>
                                                    
                                              <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
						<p class="pull right"> * per booking u will earn 50 rupees</p>
                    </div>