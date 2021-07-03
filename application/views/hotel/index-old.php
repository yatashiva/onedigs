<div class="page-bar">
  <div class="page-title-breadcrumb">

    <ol class="breadcrumb page-breadcrumb pull-left">
      <li>
        <i class="fa fa-home"></i>&nbsp;
        <a class="parent-item" href="index.html">Hotel Management</a>&nbsp;
        <i class="fa fa-angle-right"></i>
      </li>
      <li class="active">View Hotel List</li>
    </ol>
  </div>
</div>
  <div id="page-wrapper">
                 <div class="row">
                     <div class="col-md-12">
                     <div class="col-md-6">
                         <h1 class="page-header">Hotel Management</h1>
                         </div>
                         <!-- <div class="col-md-6">
                        <button type="button" class="btn btn-info pull-right" style="margin-bottom:10px;" ><a href="http://localhost/hotels/index.php/hotel/add">Add Hotel</a></button>
                        </div>   -->
                     </div>
                     </div>
    
                <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box card-topline-aqua">
                                <div class="card-head">
                                    <header>Hotels List</header>
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
                                                <th>  Name </th>
                                                 <!-- <th>Image </th> -->
                                                 <th>Hotel Grade</th>
                                                 <th>Location</th>
                                                 <!-- <th>City</th> -->
                                                 <!-- <th>State</th> -->
                                                 <th>Phone Number </th>
                                                <!--   <th>Amentities   </th>
                                                 <!-- <th>Vendor Name</th> -->
                                                 <!-- <th>Status</th> -->
                                                 <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         $i=1;
                                         foreach ($hotels as $row) {
                                           
                                         ?>
                                            <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row['hotel_name']; ?></td>
                                             <!-- <td>1</td> -->
                                              <td><?php echo $row['hotel_grade']; ?></td>
                                               <td><?php echo $row['location']; ?></td>
                                                <!-- <td><?php echo $row['city']; ?></td> -->
                                                 <!-- <td><?php echo $row['state']; ?></td> -->
                                                  <td><?php echo $row['hotel_phone_no']; ?></td>
                                             <!--    <td style="overflow:hidden;text-overflow: ellipsis;">

                                                  <?php
                                                $arr=explode(',',$row['amenities']);
                                                for($j=0;$j<count($arr);$j++)
                                                {
                                                    
                                                    foreach($amenities as $amenity)
                                                    {
                                                       
                                                        if($amenity['id']==$arr[$j])
                                                        {
                                                             $sam[$j]=$amenity['name'];
                                                         }
                                                     }
                                                    
                                                 }
                                                 $str=implode(",",$sam);
                                                 echo($str);
                                                 ?>
                                                 </td> -->
                                                    <!-- <td><?php echo $row['username']; ?></td>
                                                     <!-- <td>
                                                     <?php
                                                         if($row['status']==1)
                                                         {
                                                             ?>
                                                            

                                                        <button class='btn btn-primary' ><a href='<?php echo base_url(); ?>index.php/hotel/status/<?php echo $row["id"]; ?>' >Deactivate</a></button>
                                                        <?php
                                                         }
                                                         else
                                                         {
                                                             ?>
                                                             <button class='btn btn-primary' ><a href='<?php echo base_url(); ?>index.php/hotel/status/<?php echo $row["id"]; ?>' >Activate</a></button>
                                                             <?php
                                                         }
                                                         ?>

                                                     </td> -->
                                                     <td> 
                                                     
                                                     <!-- <a title="edit" href="<?php echo base_url(); ?>index.php/admin/hotelview/<?php echo $row['id']; ?>"><span class="fa fa-eye"></span></a> -->

                                                     <a title="edit" href="<?php echo base_url(); ?>index.php/hotel/edit/<?php echo $row['id']; ?>"><span class="fa fa-pencil"></span></a> 
                                                     <!-- <a title="delete" href="http://localhost/hotels/index.php/hotel/remove/<?php echo $row['id']; ?>"><span class="fa fa-trash"></span></a>  -->
                                                     </td>
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

<!-- <script>
  $(document).ready(function () {
    $("#example").dataTable();
  })
</script> -->