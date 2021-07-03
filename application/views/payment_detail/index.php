<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">-->

<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							   
							    <div class="row" >
							        
							        <div class="col-xl-12">
										<!--begin::Advance Table Widget 1-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header">
										<div class="card-title">
											<span class="card-icon">
												<i class="flaticon2-list-3 text-primary"></i>
											</span>
											<h3 class="card-label">Payments</h3>
										</div>
										
									</div>
											<!--end::Header-->
											
											<!--begin::Body-->
											<div class="card-body py-0" style="margin-top:10px">
											    <!--begin: Search Form-->
										<!--<form class="mb-15">-->
											
										<!--	<div class="row mb-8">-->
										<!--		<div class="col-lg-3 mb-lg-0 mb-6">-->
										<!--			<label>From Date:</label>-->
										<!--			<div class="input-daterange input-group" id="kt_datepicker">-->
										<!--				<input type="text" class="form-control datatable-input" name="start" placeholder="From" data-col-index="5" />-->
										<!--				<div class="input-group-append">-->
										<!--					<span class="input-group-text">-->
										<!--						<i class="la la-ellipsis-h"></i>-->
										<!--					</span>-->
										<!--				</div>-->
										<!--				<input type="text" class="form-control datatable-input" name="end" placeholder="To" data-col-index="5" />-->
										<!--			</div>-->
										<!--		</div>-->
											
										<!--	</div>-->
										<!--	<div class="row mt-8">-->
										<!--		<div class="col-lg-12">-->
										<!--		<button class="btn btn-primary btn-primary--icon" id="kt_search">-->
										<!--			<span>-->
										<!--				<i class="la la-search"></i>-->
										<!--				<span>Search</span>-->
										<!--			</span>-->
										<!--		</button>&#160;&#160; -->
										<!--		<button class="btn btn-secondary btn-secondary--icon" id="kt_reset">-->
										<!--			<span>-->
										<!--				<i class="la la-close"></i>-->
										<!--				<span>Reset</span>-->
										<!--			</span>-->
										<!--		</button></div>-->
										<!--	</div>-->
										<!--</form>-->
												<!--begin::Table-->
												<div class="table-responsive">
													<table class="table table-bordered table-hover" id="booking_table">
														<thead>
															<tr>
											<th>Booking Id</th>
                                                <th>Payment Id</th>
                                                <th>Payment Type</th>
                                                <th>Amount paid</th>
                                                <th>Payment Date</th>
															</tr>
														</thead>
													   <tbody>
                                             <?php foreach($payment_details as $rev){ ?>
                                              <tr>
                                              
                                                     <td><?php echo $rev['reservation_id'] ?></td>
                                                    <td><?php echo $rev['reference_id'] ?></td>
                                                    <td>Online</td>
                                                    <td><?php echo $rev['amount_paid'] ?></td>
                                                    <td><?php echo $rev['paid_date'] ?></td>
                                                   <!--  <td><a href="" ><i class='fa fa-eye' title='view'></i></a></td> -->
                                            
                                            </tr>
                                              <?php } ?>
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
                                    $('#booking_table').DataTable();
                                } );
							    </script>
							    