<div class="page-bar">
  <div class="page-title-breadcrumb">

    <ol class="breadcrumb page-breadcrumb pull-left">
      <li>
        <i class="fa fa-home"></i>&nbsp;
        <a class="parent-item" href="index.html">Room Types</a>&nbsp;
        <i class="fa fa-angle-right"></i>
      </li>
      <li class="active">View Room Categories</li>
    </ol>
  </div>
</div>
 <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="col-lg-6">
                        <h1 class="page-header">Room Management</h1>
                        </div>
                        <!-- <div class="col-lg-6">
                       <button type="button" class="btn btn-info pull-right" style="margin-bottom:10px;" ><a href="<?php echo base_url(); ?>index.php/room_category/add">Add Room Category</a></button>
                       </div> -->
                       
                      
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box card-topline-aqua">
                                <div class="card-head">
                                    <header>Room Categories</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"> Refresh</a>
	                                 
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="table-scrollable">
                                    <table id="example1" class="table table-striped display text-center" style="width:100%;">
                                        <thead>
                                            <tr>
                                            <!-- <th>S.No. </th>  -->
                                                <th>  Hotel Name </th>
                                                <th>  Room Category  </th>
                                                <th>No of Rooms</th>
                                                <th>Capacity</th>
                                                <th>Price</th>
                                                <th>Amenities</th>
                                                <th>Description </th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i=1;
                                        foreach ($room_categories as $row) {
                                           
                                        ?>
                                        <tr>
                                          <!-- <td><?php echo $i; ?></td> -->
                                           <td>
                                               <?php
                                               foreach($hotels as $hotel)
                                               {
                                                if($hotel['id']==$row['hotel_id'])
                                                {
                                                    
                                                    echo $hotel['hotel_name'];

                                                }
                                               }
                                               ?>
                                           </td>
                                            <td><?php echo $row['category_name']; ?></td>
                                             <td><?php echo $row['no_of_rooms']; ?></td>
                                              <td><?php echo $row['capacity']; ?></td>
                                               <td><?php echo $row['price']; ?></td>
                                                
                                               
                                                <td>

                                                <?php
                                                $arr=array();
                                                $sam=array();
                                                $arr=explode(',',$row['amenities']);

                                                for($j=0;$j<count($arr);$j++)
                                                {
                                                    foreach($amenities as $amenity)
                                                    {

                                                        if($amenity['id']==$arr[$j])
                                                        {
                                                             echo $amenity['name'];
                                                        }
                                                    }
                                                    
                                                }
                                             
                                                ?>
                                                </td>
                                                  <td><?php echo $row['description']; ?></td>
                                                  <!--   <td>
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

                                                    <a title="edit" href="<?php echo base_url(); ?>index.php/room_category/edit/<?php echo $row['id']; ?>"><span class="fa fa-pencil"></span></a> 
                                                    <a title="delete" href="<?php echo base_url(); ?>index.php/room_category/remove/<?php echo $row['id']; ?>"><span class="fa fa-trash"></span></a> </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>