<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    .btn.btn-default {
    
    margin-top: 20px;
}
.wizard.wizard-1 .wizard-nav .wizard-steps{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;text-align:center}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step .wizard-label{margin-left:3.5rem;margin-right:3.5rem}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step .wizard-label .wizard-icon{color:#b5b5c3;font-size:3.75rem}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step .wizard-label .wizard-icon svg g [fill]{-webkit-transition:fill .3s ease;transition:fill .3s ease;fill:#b5b5c3}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step .wizard-label .wizard-icon svg:hover g [fill]{-webkit-transition:fill .3s ease;transition:fill .3s ease}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step .wizard-label .wizard-title{color:#7e8299;font-size:1.1rem;font-weight:500;margin-top:.75rem}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step .wizard-arrow{color:#7e8299;font-size:1.25rem}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step .wizard-arrow.last{display:none}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=current] .wizard-label .wizard-icon,.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=done] .wizard-label .wizard-icon{color:#3699ff}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=current] .wizard-label .wizard-icon svg g [fill],.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=done] .wizard-label .wizard-icon svg g [fill]{-webkit-transition:fill .3s ease;transition:fill .3s ease;fill:#3699ff}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=current] .wizard-label .wizard-icon svg:hover g [fill],.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=done] .wizard-label .wizard-icon svg:hover g [fill]{-webkit-transition:fill .3s ease;transition:fill .3s ease}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=current] .wizard-label .wizard-title,.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=done] .wizard-label .wizard-title{color:#3699ff}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=current] .wizard-arrow,.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=done] .wizard-arrow{color:#3699ff}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=current] .wizard-arrow svg g [fill],.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=done] .wizard-arrow svg g [fill]{-webkit-transition:fill .3s ease;transition:fill .3s ease;fill:#3699ff}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=current] .wizard-arrow svg:hover g [fill],.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=done] .wizard-arrow svg:hover g [fill]{-webkit-transition:fill .3s ease;transition:fill .3s ease}@media (min-width:768px) and (max-width:1199.98px){.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step .wizard-label{margin-left:1.5rem;margin-right:1.5rem}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step .wizard-label .wizard-icon{font-size:3.75rem}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step .wizard-label .wizard-title{margin-top:.75rem}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step .wizard-arrow{font-size:1.1rem}}@media (max-width:767.98px){.wizard.wizard-1 .wizard-nav .wizard-steps{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step{width:100%;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;margin-bottom:.5rem;margin-top:.5rem}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step .wizard-label{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-left:0;margin-right:0}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step .wizard-label .wizard-icon{font-size:1.5rem;margin-right:1.25rem}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step .wizard-arrow{font-size:1rem}.wizard.wizard-1 .wizard-nav .wizard-steps .wizard-step .wizard-arrow.last{display:block}}
</style>
<style type="text/css">
  #geomap {
    width: 100%;
    height: 300px;
  }

  ul#geoData {
    text-align: left;
    font-weight: bold;
    margin-top: 10px;
  }

  ul#geoData span {
    font-weight: normal;
  }
  
  
 
</style>

	<div class="d-flex flex-column-fluid">
	    <!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-body p-0">
										<div class="wizard wizard-1" id="kt_projects_add" data-wizard-state="step-first" data-wizard-clickable="true">
											<!--begin::Wizard Nav-->
											<div class="wizard-nav border-bottom">
												<div class="wizard-steps p-8 p-lg-10">
													<div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
														<div class="wizard-label">
															<span class="svg-icon svg-icon-4x wizard-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/Communication/Chat-check.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<h3 class="wizard-title">Hotel Details</h3>
														</div>
														<span class="svg-icon svg-icon-xl wizard-arrow">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																	<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</div>
													<div class="wizard-step" data-wizard-type="step">
														<div class="wizard-label">
															<span class="svg-icon svg-icon-4x wizard-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/Devices/Display1.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
																		<path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<h3 class="wizard-title">Account Details</h3>
														</div>
														<span class="svg-icon svg-icon-xl wizard-arrow">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																	<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</div>
													<div class="wizard-step" data-wizard-type="step">
														<div class="wizard-label">
															<span class="svg-icon svg-icon-4x wizard-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/Home/Globe.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
																		<circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<h3 class="wizard-title">Policy Details</h3>
														</div>
														<span class="svg-icon svg-icon-xl wizard-arrow">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																	<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</div>
													<div class="wizard-step" data-wizard-type="step">
														<div class="wizard-label">
															<span class="svg-icon svg-icon-4x wizard-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/General/Notification2.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
																		<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<h3 class="wizard-title">Pay at Hotel Settings</h3>
														</div>
														<span class="svg-icon svg-icon-xl wizard-arrow last">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																	<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</div>
												</div>
											</div>
											<!--end::Wizard Nav-->
											<!--begin::Wizard Body-->
											<div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
												<div class="col-xl-12 col-xxl-7">
													<!--begin::Form Wizard-->
													<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
															
														<form class="form" id="kt_projects_add_form"  action="<?php echo base_url();?>index.php/hotel/add" method="POST" enctype="multipart/form-data" name="myform">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Hotel Name</label>
   <input type="text" name="hotel_name" required class="form-control" placeholder="Enter Hotel Name"/>
   
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Hotel Image</label>
   <input type="file" class="form-control" name="hotel_pic" required/>
   
  </div> 
                    </div>
                </div>
  <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Hotel Grade</label>
    <select class = "form-control" name="hotel_grade" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Total Rooms</label>
   <input type="text" class="form-control" placeholder="Enter Total rooms" name="total_rooms" required/>
   
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Top Hotel</label><br>
    Yes  <input type="radio" name="top_hotel" value = "yes" style="margin-right:20px;" />  
                  No   <input type="radio" name="top_hotel" value="no" style="margin-right:20px;"  />
  </div> 
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
   <label>City</label>
   <input type="text" name="location" required class="form-control" placeholder="Enter City"/>
   
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Hotel Area</label>
   <input type="text" class="form-control" placeholder="Enter Area" name="area" required/>
   
  </div> 
                    </div>
                </div>
<div class="form-group">

                <input type="hidden" class="form-control" id="latitude" name="hotel_latitude" required>
              </div>
              <div class="form-group">

                <input type="hidden" class="form-control" id="longitude" name="hotel_longitude" required>
                 <input type="hidden" class="form-control" id="address" name="hotel_address" required>
              </div>
  <div class="separator separator-dashed my-5"></div>
<div class="row">
    <div class="col-md-8">
       <div class="form-group">
   <label>Search Location</label>
   <input type="text" class="form-control"  id="search_location" placeholder="Search location" name="searchlocation" required/>
   
  </div> 
    </div>
    <div class="col-md-4">
        <div class="form-group">
         <button id="aaaa" class="btn btn-default get_map" type="button">
                            Locate
                          </button>
                          </div>
    </div>
</div>
  
 <div id="geomap"></div>
  <div class="separator separator-dashed my-5"></div>

   <h6>Location Details</h6>


                    <ul id="geoData">
                      <li>Full Address:
                        <span id="search_addr" class="adr"></span>
                      </li>
                      <li>Latitude:
                        <span id="search_latitude" class="lat"></span>
                      </li>
                      <li>Longitude:
                        <span id="search_longitude" class="long"></span>
                      </li>
                    </ul>
                     <script>
                      // $( document ).ready(function() {


                      $('#aaaa').click(function (e) {

                        setTimeout(function () {

                          var adr1 = $("#search_addr").text();
                          var lat1 = $("#search_latitude").text();
                          var long1 = $("#search_longitude").text();

                          //alert(lat1);

                          $('#latitude').val(lat1);
                          $('#longitude').val(long1);
                          $('#address').val(adr1);
                        }, 5000);

                        // var lat1 = $("#search_latitude").text();
                        //       alert("Value is "+lat1);
                        //   $('#latitude').val(lat1);
                      });
                  // });

                    </script>


 
 <!--<div class="card-footer">-->
 <!-- <button type="reset" class="btn btn-primary mr-2">Submit</button>-->
 <!-- <button type="reset" class="btn btn-secondary">Cancel</button>-->
 <!--</div>-->
 <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Phone No</label>
   <input type="text" class="form-control" placeholder="Enter Phone Number" name="hotel_phone_no" required/>
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Email</label>
   <input type="text" class="form-control" placeholder="Enter EmailId" name="hotel_email" required/>
   
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Hotel Vendor</label>
   <select name="vendor_name" required class="form-control">
       <!--<option></option>-->
        <?php
                    foreach ($vendors as $row) {
                      ?>
                    <option value="<?php echo $row['login_id']; ?>">
                      <?php echo $row['name']; ?>
                    </option>
                    <?php
                    }
                    ?>
   </select>
  </div> 
                    </div>
                    
                     <div class="col-md-4">
                       <div class="form-group">
   <label>Amenities</label>
    <select class = "form-control" name="amenities[]" id="amenities1" multiple required>


                    <?php
            foreach ($amenities as $row) {
              ?>
                    <option value="<?php echo $row['id']; ?>" >
                      <?php echo $row['name']; ?></option>
                    
                    <?php
            }
            ?>
                  </select>
  </div> 
                    </div>
                </div>
 </div>
 </div>

														<!--end::Step 1-->
														<!--begin::Step 2-->
														<div class="pb-5" data-wizard-type="step-content">
														  <div class="row">
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Account No</label>
   <input type="text" name="hotel_acc_no" required class="form-control" placeholder="Enter Account No"/>
   
  </div> 
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
   <label>IFSC</label>
   <input type="text" class="form-control" placeholder="Enter IFSC" name="hotel_ifsc_code" required/>
   
  </div> 
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Full Name</label>
   <input type="text" class="form-control" placeholder="Enter Full Name" name="fullname" required/>
   
  </div> 
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
   <label>Branch</label>
   <input type="text" class="form-control" placeholder="Enter Bank Branch" name="acc_branch" required/>
   
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>GSTIN</label>
   <input type="text" class="form-control" placeholder="Enter GSTIN" name="gst_no" required/>
   
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>PAN</label>
   <input type="text" class="form-control" placeholder="Enter PAN No" name="pan_no" required/>
   
  </div> 
                    </div>
                </div>
														</div>
														<!--end::Step 2-->
														<!--begin::Step 3-->
														<div class="pb-5" data-wizard-type="step-content">
														
														    <div class="form-group">
    <label>Hotel Policy</label>
    <div class="col-md-12">
     <textarea name="hotel_policy" class="form-control" data-provide="markdown" required rows="10"></textarea>
    </div>
   </div>
   
   <div class="form-group">
    <label>Cancellation Policy</label>
    <div class="col-md-12">
     <textarea name="hotel_cancel_policy" class="form-control" data-provide="markdown" required rows="10"></textarea>
    </div>
   </div>
   <div class="form-group">
    <label>About Hotel</label>
    <div class="col-md-12">
     <textarea name="hotel_about" class="form-control" data-provide="markdown" required rows="10"></textarea>
    </div>
   </div>
 	
														</div>
														<!--end::Step 3-->
														<!--begin::Step 4-->
														<div class="pb-5" data-wizard-type="step-content">
													<div class="form-group row align-items-center">
																		<label class="col-xl-3 col-lg-3 col-form-label">Pay at Hotel Settings</label>
																		<div class="col-lg-9 col-xl-6">
																			<div class="checkbox-inline">
																				<label class="checkbox">
																				<input name="pay_at_hotel" value="on" type="radio" />
																				<span></span>On</label>
																				<label class="checkbox">
																				<input name="pay_at_hotel" value="off" type="radio" />
																				<span></span>Off</label>
																			
																			</div>
																		</div>

																	</div></n>
																	<div class="form-group row align-items-center">
																		<label class="col-xl-3 col-lg-3 col-form-label">Free Cancellation Available</label>
																		<div class="col-lg-9 col-xl-6">
																			<div class="checkbox-inline">
																				<label class="checkbox">
																				<input name="free_cancelation" value="on" type="radio" />
																				<span></span>On</label>
																				<label class="checkbox">
																				<input name="free_cancelation" value="off" type="radio" />
																				<span></span>Off</label>
																			
																			</div>
																		</div>
																		
																	</div></n>
																	<div class="form-group row align-items-center">
																		<label class="col-xl-3 col-lg-3 col-form-label">Couple Friendly </label>
																		<div class="col-lg-9 col-xl-6">
																			<div class="checkbox-inline">
																				<label class="checkbox">
																				<input name="couple_friendly" value="on" type="radio" />
																				<span></span>On</label>
																				<label class="checkbox">
																				<input name="couple_friendly" value="off" type="radio" />
																				<span></span>Off</label>
																			
																			</div>
																		</div>
																		
																	</div>
																	<div class="form-group">
																	    <label>Hotel Gallery</label>
																	    <input class="form-control" type="file" name="hotel_gallery[]" id="hotel_gallery" multiple required>
																	</div>
																	 <button type="submit" class="btn btn-primary pull-right" onclick=" return validation()">Submit</button>
														</div>
														<!--end::Step 4-->
														<!--begin::Actions-->
														<div class="d-flex justify-content-between border-top mt-5 pt-10">
															<div class="mr-2">
																<button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
															</div>
															<div>
															
																<button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next Step</button>
															</div>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form Wizard-->
												</div>
											</div>
											<!--end::Wizard Body-->
										</div>
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
						</div>
						
					
<script>

  $("#add_row").on("click", function () {
    // Dynamic Rows Code

    // Get max row id and set new id
    var newid = 0;
    $.each($("#tab_logic tr"), function () {
      if (parseInt($(this).data("id")) > newid) {
        newid = parseInt($(this).data("id"));
      }
    });
    newid++;
    document.getElementById("tid").value = newid;
    var tr = $("<tr></tr>", {
      id: "addr" + newid,
      "data-id": newid
    });

    // loop through each td and create new elements with name of newid
    $.each($("#tab_logic tbody tr:nth(0) td"), function () {
      var cur_td = $(this);

      var children = cur_td.children();

      // add new td and element if it has a nane
      if ($(this).data("name") != undefined) {
        var td = $("<td></td>", {
          "data-name": $(cur_td).data("name")
        });

        var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
        c.attr("name", $(cur_td).data("name") + newid);
        c.appendTo($(td));
        td.appendTo($(tr));
      } else {
        var td = $("<td></td>", {
          'text': $('#tab_logic tr').length
        }).appendTo($(tr));
      }
    });

    // add delete button and td
    /*
    $("<td></td>").append(
        $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
            .click(function() {
                $(this).closest("tr").remove();
            })
    ).appendTo($(tr));
    */

    // add the new row
    $(tr).appendTo($('#tab_logic'));

    $(tr).find("td button.row-remove").on("click", function () {
      $(this).closest("tr").remove();
      var count = document.getElementById("tid").value = newid;
      count--;
      var count = document.getElementById("tid").value = count;
      console.log(count);

    });
  });





</script>
<!-- <script>
    function initialize() {
      var myLatlng = new google.maps.LatLng(-34.397, 150.644);
      var myOptions = {
        zoom: 8,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    }

    function loadScript() {
      var script = document.createElement("script");
      script.type = "text/javascript";
      script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize";
      document.body.appendChild(script);
    }

    window.onload = loadScript;


</script> -->



<!-- <script type="text/javascript" language="JavaScript"> -->
<!-- function nextButton() -->
<!-- { -->

<!-- window.location = '#tab2default' -->

<!-- } -->
<!-- </script> -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmYnKoybO6vKWaZPjC1lbNVH41TgBARLc&callback=initMap" ></script> -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAScIOzzgjWSSmaFPm0iCk7PtHgeBHRBFc&callback=initMap" ></script>

<script type="text/javascript">
  var geocoder;
  var map;
  var marker;

  /*
   * Google Map with marker
   */
  function initialize() {
    var initialLat = $('#search_latitude').text();
    var initialLong = $('#search_longitude').text();
    initialLat = initialLat ? initialLat : 36.169648;
    initialLong = initialLong ? initialLong : -115.141000;

    var latlng = new google.maps.LatLng(initialLat, initialLong);
    var options = {
      zoom: 16,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("geomap"), options);

    geocoder = new google.maps.Geocoder();

    marker = new google.maps.Marker({
      map: map,
      draggable: true,
      position: latlng
    });

    google.maps.event.addListener(marker, "dragend", function () {
      var point = marker.getPosition();
      map.panTo(point);
      geocoder.geocode({ 'latLng': marker.getPosition() }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          map.setCenter(results[0].geometry.location);
          marker.setPosition(results[0].geometry.location);
          $('#search_addr').text(results[0].formatted_address);
          $('#search_latitude').text(marker.getPosition().lat());
          $('#search_longitude').text(marker.getPosition().lng());

        }
      });
    });

  }

  //google.maps.event.addDomListener(window, 'load', initialize);

  $(document).ready(function () {
    //load google map
    initialize();

    /*
     * autocomplete location search
     */
    var PostCodeid = '#search_location';
    $(function () {
      $(PostCodeid).autocomplete({
        source: function (request, response) {
          geocoder.geocode({
            'address': request.term,
            /*componentRestrictions: {country: "us"}*/
          }, function (results, status) {
            response($.map(results, function (item) {
              return {
                label: item.formatted_address,
                value: item.formatted_address,
                lat: item.geometry.location.lat(),
                lon: item.geometry.location.lng()
              };
            }));
          });
        },
        select: function (event, ui) {
          $('#search_addr').text(ui.item.value);
          $('#search_latitude').text(ui.item.lat);
          $('#search_longitude').text(ui.item.lon);


          var latlng = new google.maps.LatLng(ui.item.lat, ui.item.lon);
          marker.setPosition(latlng);
          initialize();
        }
      });
    });

    /*
     * Point location on google map
     */
    $('.get_map').click(function (e) {
      var address = $(PostCodeid).val(); 
      geocoder.geocode({ 'address': address }, function (results, status) {
      	console.log(status);
        if (status == google.maps.GeocoderStatus.OK) {
          map.setCenter(results[0].geometry.location);
          marker.setPosition(results[0].geometry.location);
          $('#search_addr').text(results[0].formatted_address);
          $('#search_latitude').text(marker.getPosition().lat());
          $('#search_longitude').text(marker.getPosition().lng());
        } else {
          alert("Geocode was not successful for the following reason: " + status);
        }
      });
      e.preventDefault();
    });

    //Add listener to marker for reverse geocoding
    google.maps.event.addListener(marker, 'drag', function () {
      geocoder.geocode({ 'latLng': marker.getPosition() }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[0]) {
            $('#search_addr').text(results[0].formatted_address);
            $('#search_latitude').text(marker.getPosition().lat());
            $('#search_longitude').text(marker.getPosition().lng());
          }
        }
      });
    });
  });

</script>
<script>
function validation()
{
  
 if(document.myform.hotel_name.value == ""){   //checking if the form is empty
       alert("Please fill hotel name");
       return false;
    }
    if(document.myform.hotel_pic.value == ""){   //checking if the form is empty
       alert("Please fill hotel image");
       return false;
    }
    if(document.myform.hotel_grade.value == ""){   //checking if the form is empty
       alert("Please fill hotel grade");
       return false;
    }
    if(document.myform.total_rooms.value == ""){   //checking if the form is empty
       alert("Please fill total rooms");
       return false;
    }
    if(document.myform.location.value == ""){   //checking if the form is empty
       alert("Please fill hotel location");
       return false;
    }
     if(document.myform.area.value == ""){   //checking if the form is empty
       alert("Please fill hotel area");
       return false;
    }
     if(document.myform.searchlocation.value == ""){   //checking if the form is empty
       alert("Please mark hotel address in map");
       return false;
    }
    if(document.myform.hotel_phone_no.value == ""){   //checking if the form is empty
       alert("Please fill hotel phone number");
       return false;
    }
    if(document.myform.hotel_email.value == ""){   //checking if the form is empty
       alert("Please fill hotel email");
       return false;
    }
    if(document.myform.vendor_name.value == ""){   //checking if the form is empty
       alert("Please fill vendor name");
       return false;
    }
    if(document.getElementById('amenities1').value == ""){   //checking if the form is empty
       alert("Please select amenities");
       return false;
    }
    
    if(document.myform.hotel_acc_no.value == ""){   //checking if the form is empty
       alert("Please fill account number");
       return false;
    }
    if(document.myform.hotel_ifsc_code.value == ""){   //checking if the form is empty
       alert("Please fill ifsc code");
       return false;
    }
    if(document.myform.fullname.value == ""){   //checking if the form is empty
       alert("Please fill fullname");
       return false;
    }
    if(document.myform.acc_branch.value == ""){   //checking if the form is empty
       alert("Please fill branch");
       return false;
    }
    if(document.myform.hotel_policy.value == ""){   //checking if the form is empty
       alert("Please fill hotel policy");
       return false;
    }
    if(document.myform.hotel_cancel_policy.value == ""){   //checking if the form is empty
       alert("Please fill hotel cancellation policy");
       return false;
    }
    if(document.myform.pay_at_hotel.value == ""){   //checking if the form is empty
       alert("Please fill pay at hotel option");
       return false;
    }
      if(document.getElementById('hotel_gallery').value == ""){   //checking if the form is empty
       alert("Please select hotel galley");
       return false;
    }
}
</script>
<script>
    "use strict";
var KTProjectsAdd = function() {
    var t, e, o, i = [];
    return {
        init: function() {
            t = KTUtil.getById("kt_projects_add"),
            e = KTUtil.getById("kt_projects_add_form"),
            (o = new KTWizard(t,{
                startStep: 1,
                clickableSteps: !1
            })).on("change", (function(t) {
                if (!(t.getStep() > t.getNewStep())) {
                    var e = i[t.getStep() - 1];
                    return e && e.validate().then((function(e) {
                        "Valid" == e ? (t.goTo(t.getNewStep()),
                        KTUtil.scrollTop()) : Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light"
                            }
                        }).then((function() {
                            KTUtil.scrollTop()
                        }
                        ))
                    }
                    )),
                    !1
                }
            }
            )),
            o.on("changed", (function(t) {
                KTUtil.scrollTop()
            }
            )),
            o.on("submit", (function(t) {
                Swal.fire({
                    text: "All is good! Please confirm the form submission.",
                    icon: "success",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Yes, submit!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-primary",
                        cancelButton: "btn font-weight-bold btn-default"
                    }
                }).then((function(t) {
                    t.value ? e.submit() : "cancel" === t.dismiss && Swal.fire({
                        text: "Your form has not been submitted!.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-primary"
                        }
                    })
                }
                ))
            }
            )),
            i.push(FormValidation.formValidation(e, {
                fields: {
                    projectname: {
                        validators: {
                            notEmpty: {
                                message: "Project name is required"
                            }
                        }
                    },
                    projectowner: {
                        validators: {
                            notEmpty: {
                                message: "Project owner is required"
                            }
                        }
                    },
                    customername: {
                        validators: {
                            notEmpty: {
                                message: "Customer name is required"
                            }
                        }
                    },
                    phone: {
                        validators: {
                            notEmpty: {
                                message: "Phone is required"
                            },
                            phone: {
                                country: "US",
                                message: "The value is not a valid US phone number. (e.g 5554443333)"
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: "Email is required"
                            },
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    },
                    companywebsite: {
                        validators: {
                            notEmpty: {
                                message: "Website URL is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        eleValidClass: ""
                    })
                }
            })),
            i.push(FormValidation.formValidation(e, {
                fields: {
                    communication: {
                        validators: {
                            choice: {
                                min: 1,
                                message: "Please select at least 1 option"
                            }
                        }
                    },
                    language: {
                        validators: {
                            notEmpty: {
                                message: "Please select a language"
                            }
                        }
                    },
                    timezone: {
                        validators: {
                            notEmpty: {
                                message: "Please select a timezone"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        eleValidClass: ""
                    })
                }
            })),
            i.push(FormValidation.formValidation(e, {
                fields: {
                    address1: {
                        validators: {
                            notEmpty: {
                                message: "Address is required"
                            }
                        }
                    },
                    postcode: {
                        validators: {
                            notEmpty: {
                                message: "Postcode is required"
                            }
                        }
                    },
                    city: {
                        validators: {
                            notEmpty: {
                                message: "City is required"
                            }
                        }
                    },
                    state: {
                        validators: {
                            notEmpty: {
                                message: "state is required"
                            }
                        }
                    },
                    country: {
                        validators: {
                            notEmpty: {
                                message: "Country is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        eleValidClass: ""
                    })
                }
            }))
        }
    }
}();
jQuery(document).ready((function() {
    KTProjectsAdd.init()
}
));

</script>
							        