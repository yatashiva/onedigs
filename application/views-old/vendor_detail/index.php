
<div class="page-bar">
  <div class="page-title-breadcrumb">

    <ol class="breadcrumb page-breadcrumb pull-left">
      <li>
        <i class="fa fa-home"></i>&nbsp;
        <a class="parent-item" href="index.html">Hotel Vendor </a>&nbsp;
        <i class="fa fa-angle-right"></i>
      </li>
      <li class="active">View Vendor List</li>
    </ol>
  </div>
</div>
 <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box card-topline-aqua">
                                <div class="card-head">
                                    <header>Vendors list</header>
                                      <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"> Refresh</a>
	                                    
                                    </div> 
                                </div>
                                <div class="card-body ">
                                  <div class="table-scrollable">
                                    <table id="example1" class="table table-striped display text-center" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone no</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <!-- <th>Address</th>                                                 -->
                                                <th>actions</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          
                                            <tr>
                                               <?php foreach($vendor_details as $rev){ ?>
                                                     <td><?php echo $rev['name'] ?></td>
                                                    <td><?php echo $rev['phone_no'] ?></td>
                                                    <td><?php echo $rev['email'] ?></td>
                                                    <td><?php echo $rev['address'] ?></td>
                                                    <!-- <td><?php echo $rev['address'] ?></td>      -->
                                                    <td><a href="<?php echo base_url(); ?>index.php/vendor_detail/edit/<?php echo $rev['id']; ?>" ><i class='fa fa-eye' title='view'></i></a></td></tr>
                                              <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					
					  
					
					