<div class="page-bar">
                        <div class="page-title-breadcrumb">
                            
                            <ol class="breadcrumb page-breadcrumb pull-left">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Extras</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">View Payment Margins</li>
                            </ol>
                        </div>
                    </div>
 <div id="page-wrapper">
                <div class="row">
                    <div class="col-md-12">
                    <div class="col-md-6">
                        <h1 class="page-header">Payment Margin Management</h1>
                        </div>
                        <div class="col-md-6">
                       <button type="button" class="btn btn-info pull-right" style="margin-top:25px;" ><a href="<?php echo base_url(); ?>index.php/margin/add">Add MArgin</a></button>
                       </div>
                       
                      
                    </div>
                    </div>
                    
             <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box card-topline-aqua">
                                <div class="card-head">
                                    <header>Payment Margins</header>
                                     <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"> Refresh</a>
	                                    
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="table-scrollable">
                                    <table id="example1" class="table table-striped display text-center" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>S.No. </th> 
                                                <th> Hotel  Name </th>
                                                <th>Percenatge</th>
                                              <?php
                      if($this->session->userdata('user_type')==1)
                      {
                        ?>
                                                <th>Actions</th>
                                                <?php
                                            }
                                            ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i=1;
                                        foreach ($margins as $row) {
                                          
                                        ?>
                                        <tr>
                                        <td><?php echo $i; ?></td>
                                          <td><?php echo $row['hotel_name']; ?></td>
                                          <td><?php echo $row['percentage']; ?></td>
                                       
                                          <?php
                      if($this->session->userdata('user_type')==1)
                      {
                        ?>
                                                <td>
                                                    <a title="edit" href="<?php echo base_url(); ?>index.php/margin/edit/<?php echo $row['id']; ?>"><span class="fa fa-pencil-square-o"></span></a> 
                                                    <a title="delete" href="<?php echo base_url(); ?>index.php/margin/remove/<?php echo $row['id']; ?>"><span class="fa fa-trash"></span></a> </td>
                                                <?php
                                            }
                                            ?>
                                                  
                                                    </tr>

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