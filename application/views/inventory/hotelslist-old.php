<?php //var_dump($reservations);die; ?>
                <div class="row">
                        <div class="col-md-12">
                        <!-- <div class="box-tools">
                             <a href="<?php echo site_url('user_detail/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                         </div> -->
                            <div class="card card-topline-aqua">
                                <div class="card-head">
                                    <header>Bookings</header>
                                    <!-- <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div> -->
                                </div>
                                <div class="card-body ">
                                  <div class="table-scrollable">
                                    <table id="example1" class="display" style="width:100%;">
                                        <thead>
                                            <tr>
                                                
                                                <th>HotelName</th>
                                                <th>Total Rooms</th>
                                                <th>actions</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                               <?php foreach($hotels as $rev){ ?>
                                                <tr> 
                                                    <td><?php echo $rev['hotel_name'] ?></td>
                                                    <td><?php echo $rev['total_rooms'] ?></td>
                                                    <td><a href="<?php echo base_url() ?>index.php/inventory/inventorydisplay/<?php echo $rev['id'] ?>" ><i class='fa fa-eye' title='view inventory'></i></a></td>
                                                    </tr>
                                              <?php } ?>
                                            
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