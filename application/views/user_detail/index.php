
<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">-->

<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>


<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							    <div class="row">
							        
							        <div class="col-xl-12">
										<!--begin::Advance Table Widget 1-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header">
										<div class="card-title">
											<span class="card-icon">
												<i class="flaticon2-analytics-1 text-primary"></i>
											</span>
											<h3 class="card-label">Users</h3>
										</div>
										
									</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-0" style="margin-top:10px">
												<!--begin::Table-->
												<div class="table-responsive">
													<table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
														<thead>
															<tr class="text-left">
															    <th>S.No</th>
                                                <th>Name</th>
                                                <th>Phone no</th>
                                                <th>Email</th>
															</tr>
														</thead>
													  <tbody>
                                            <tr>
                                               <?php 
                                               $i=1;
                                               foreach($user_details as $rev){ ?>
                                               <td><?php echo $i; ?></td>
                                                     <td><?php echo $rev['name'] ?></td>
                                                    <td><?php echo $rev['phone_no'] ?></td>
                                                    <td><?php echo $rev['email'] ?></td>
                                                  
                                                </tr>
                                              <?php 
                                              $i++;
                                              } ?>
                                            
                                        </tbody>
													</table>
												
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
							    <script>
							     $(document).ready(function() {
                                    $('#kt_advance_table_widget_1').DataTable();
                                } );
							    </script>