<div class="row">
                        <div class="col-md-12">
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
                                            <th>date</th>
                                           <?php foreach($categories as $cat){ ?>
                                                <th><?php echo $cat['category_name'] ?></th>
                                           <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                               <?php foreach($inventory as $index=>$rev){ ?>
                                                <tr>

                                                     <td><?php echo $index ?></td>
                                                       <?php foreach($rev as $r=>$value){ ?>
                                                       
                                                        <td><a href="" onclick="showDetails(this)" data-id="<?php echo $value['id'];?>" data-toggle="modal" data-target="#myModal"><?php echo $value['availability'] ?></a></td>
                                                       
                                                       <?php } ?>
                                                       </tr>
                                              <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">update Availability</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
       <form action="" id="edit">
           <input type="text" placeholder="date" id="date" readonly>
           <input type="number" placeholder=""
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
function showDetails(id) {
    var id = id.getAttribute("data-id");
    
    action="<?php echo base_url() ?>index.php/inventory/updaterow/"+id;
    $('#edit').attr('action', action);
    
    
   

}


</script>