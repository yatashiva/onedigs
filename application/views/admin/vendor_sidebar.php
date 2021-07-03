<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">
						<!--begin::Logo-->
						<a href="/" class="brand-logo">
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
								<li class="menu-item" aria-haspopup="true">
									<a href="<?php echo base_url();?>index.php/hotel/" class="menu-link">
										<i class="menu-icon flaticon2-box"></i>
										<span class="menu-text">Hotels List</span>
									</a>
								</li>
								
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-menu"></i>
										<span class="menu-text">Room Types</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Room Types</span>
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
							
								
							
							
								<li class="menu-item" aria-haspopup="true">
									<a href="<?php echo base_url();?>index.php/reservation" class="menu-link">
										<i class="menu-icon flaticon2-poll-symbol"></i>
										<span class="menu-text">Bookings</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="<?php echo base_url();?>index.php/payment_detail/" class="menu-link">
										<i class="menu-icon flaticon2-chart2"></i>
										<span class="menu-text">Payments</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="<?php echo base_url();?>index.php/inventory/gethotels" class="menu-link">
										<i class="menu-icon flaticon2-sheet"></i>
										<span class="menu-text">Inventory</span>
									</a>
								</li>
								
							
								<li class="menu-item" aria-haspopup="true">
									<a href="<?php echo base_url();?>index.php/amenity/hotelindex" class="menu-link">
										<i class="menu-icon flaticon2-percentage"></i>
										<span class="menu-text">Amenities</span>
									</a>
								</li>
							</ul>
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->