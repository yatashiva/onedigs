
<div class="page-bar">
                        <div class="page-title-breadcrumb">
                            
                            <ol class="breadcrumb page-breadcrumb pull-left">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Travel Agent Management</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">View Travel Agent list</li>
                            </ol>
							
                        </div>
                    </div>

<div class="row">
                        <div class="col-md-12">
                            <div class="card card-box card-topline-aqua">
                                <div class="card-head">
                                    <header>Travel Agent list</header>
                                      <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"> Refresh</a>
	                                   
                                    </div> 
                                </div>
                                <div class="card-body ">
                                  <div class="table-scrollable">
                                    <table id="example1" class="table table-striped display text-center" style="width:100%;">
                                        <thead>
                                            <tr>
                                            <th>S.No</th>
                                                <th>Name</th>
                                                <th>Phone no</th>
                                                <th>Email</th>
                                                <th>Address</th>                               
                                                <th>actions</td>
                                            </tr>
                                        </thead>
                                        <tbody align="center">
                                            <tr>
                                             <?php
											$i=1;
                                           
                                               foreach($travel_agent as $rev){ 
											   
											   ?>
											   <td><?php echo $i; ?></td>
                                                     <td><?php echo $rev['name'] ?></td>
                                                    <td><?php echo $rev['phone_no'] ?></td>
                                                    <td><?php echo $rev['email'] ?></td>
                                                    <td><?php echo $rev['address'] ?></td>
                                                    
                                                    <td><a href="<?php echo base_url(); ?>index.php/travel_agent/edit/<?php echo $rev['id']; ?>" ><i class='fa fa-eye' title='view'></i></a></td></tr>
                                              <?php 
                                              $i++;
                                              } 
                                              ?>
                                            
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					
					  