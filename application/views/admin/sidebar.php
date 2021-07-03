<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">
						<!--begin::Logo-->
						<a href="<?php echo base_url(); ?>index.php/admin/dashboard" class="brand-logo">
							<img alt="Logo" class="w-65px" src="https://res.cloudinary.com/mallinamala/image/upload/v1617777694/logo_dxdulq.png" />
						</a>
						<!--end::Logo-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
							<!--begin::Menu Nav-->
							<ul class="menu-nav">
								<li class="menu-item menu-item-active" aria-haspopup="true">
									<a href="<?php echo base_url(); ?>index.php/admin/dashboard" class="menu-link">
										<i class="menu-icon flaticon2-architecture-and-city"></i>
										<span class="menu-text">Dashboard</span>
									</a>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-box"></i>
										<span class="menu-text">Hotels</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Hotels</span>
												</span>
											</li>
											
											<li class="menu-item" aria-haspopup="true">
												<a href="<?php echo base_url();?>index.php/hotel/" class="menu-link">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">View</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="<?php echo base_url();?>index.php/hotel/add" class="menu-link">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">Add</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-menu"></i>
										<span class="menu-text">Rooms</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Rooms</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="<?php echo base_url();?>index.php/room_category/" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">View</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="<?php echo base_url();?>index.php/room_category/add" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Add</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="<?php echo base_url();?>index.php/room_category/viewsub" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">View SubRoom</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="<?php echo base_url();?>index.php/room_category/addsub" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Add SubRoom</span>
												</a>
											</li>
											
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-user"></i>
										<span class="menu-text">Hotel Vendor</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Hotel Vendor</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="<?php echo base_url();?>index.php/vendor_detail/" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">View</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="<?php echo base_url();?>index.php/vendor_detail/add" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Add</span>
												</a>
											</li>
											
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-plus-1"></i>
										<span class="menu-text">Taxes</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Taxes</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="<?php echo base_url();?>index.php/taxes/add" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Add</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="<?php echo base_url();?>index.php/taxes/" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">View</span>
												</a>
											</li>
											
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-user-1"></i>
										<span class="menu-text">Travel Agent</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Travel Agent</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="<?php echo base_url();?>index.php/travel_agent/" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">View</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="<?php echo base_url();?>index.php/travel_agent/add" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Add</span>
												</a>
											</li>
											
										</ul>
									</div>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="<?php echo base_url();?>index.php/user_detail/" class="menu-link">
										<i class="menu-icon flaticon2-avatar"></i>
										<span class="menu-text">Users</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="<?php echo base_url();?>index.php/reservation" class="menu-link">
										<i class="menu-icon flaticon2-poll-symbol"></i>
										<span class="menu-text">Booking</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="<?php echo base_url();?>index.php/inventory/gethotels" class="menu-link">
										<i class="menu-icon flaticon2-sheet"></i>
										<span class="menu-text">Inventory</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="<?php echo base_url();?>index.php/margin/" class="menu-link">
										<i class="menu-icon flaticon2-chart2"></i>
										<span class="menu-text">Payment Margins</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="<?php echo base_url();?>index.php/amenity/" class="menu-link">
										<i class="menu-icon flaticon2-list-1"></i>
										<span class="menu-text">Amenities</span>
									</a>
								</li>
								
								<li class="menu-item" aria-haspopup="true">
									<a href="<?php echo base_url();?>index.php/hotel/promotions" class="menu-link">
										<i class="menu-icon flaticon2-graph-1"></i>
										<span class="menu-text">Promotions</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="<?php echo base_url();?>index.php/hotel/offers" class="menu-link">
										<i class="menu-icon flaticon2-percentage"></i>
										<span class="menu-text">Offers</span>
									</a>
								</li>
							</ul>
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->