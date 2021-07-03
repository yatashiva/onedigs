	<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							    <div class="row">
							        
							        <div class="col-xl-12">
										<!--begin::Advance Table Widget 1-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 py-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Earnings</span>
												
												</h3>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-0">
												<!--begin::Table-->
												<div class="table-responsive">
													<table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
														<thead>
															<tr class="text-left">
															      <!--<th>S.No. </th> -->
                                              <th>TOtal No Bookings</th>
                                                <th>Amount Gained</th>
															
															</tr>
														</thead>
													   <tbody>
                                        <?php foreach($amount_gained as $rev){ 
											   
											   ?>
											   
                                                     <td><?php echo $rev['count(*)'] ?></td>
                                                    <td><?php echo ($rev['count(*)']*50) ?></td>
                                                    
                                              <?php } ?>
														</tbody>
													</table>
													<p style="color:red" class="pull right"> * Per booking you will earn 50 rupees</p>
												</div>
												<!--end::Table-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 1-->
									</div>
								</div>
								<!--end::Row-->
							
							    
							    
							    </div>
							    </div>