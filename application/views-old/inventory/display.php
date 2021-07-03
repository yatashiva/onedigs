<div>
    <div class="col-md-12 col-sm-12">
        <div class="card-box">
            <div class="card-head">
                <header>Inventory Management - <?= $hotel_name ?>  (<?= $start_date ?> To <?= $end_date ?>)</header>
            </div>

            <div class="card-body ">
                <div class="panel-body">
					 <div class="row">
						<div class="alert alert-danger col-sm-4">
							<p class="text-left"><i class="fa fa-info-circle"></i> Numbers in each date indicate available rooms for that category </p>
						</div>
					
						<div class="alert alert-warning col-sm-4">
							<p class="text-center"><i class="fa fa-info-circle "></i> Click on Room Types to update inventory for all the displayed dates </p>
						</div>
						<div class="alert alert-danger col-sm-4">
							<p class="text-left"><i class="fa fa-info-circle"></i> Click on number in each date to update inventory for that date </p>
						</div>
					</div><hr>
					 <div class="row">
						<div class="col-sm-2"> Available : <a class="btn btn-success"  href="#"></a></div>
						<div class="col-sm-2"> Blocked : <a class="btn btn-info"  href="#"></a></div>
						<div class="col-sm-2"> Sold Out : <a class="btn btn-danger"  href="#"></a></div>
					</div><hr>

                   <table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th class = "bg-info"><h3>Room Types</h3></th>
									<?php foreach($form_data as $key => $data){ ?>
										<th class="bg-info">
											<?= date('d M',strtotime($key)) ?><br>
											<h3><?= date('D',strtotime($key)) ?></h3>
										</th>
									<?php } ?> 
								</tr>
							</thead>
							<tbody>
								<?php foreach($subcategories as $sub) {  ?>
										<?php 
											$bulkurl = base_url() . 'index.php/inventory/updateinventory/' . $hotel_id . 
																'?range=1&category=' . $sub['id'] .'&start_date=' . $start_date; 
											
											if ($sub['category_name'] == $sub['sub_name'] ) {
												$cat_name = $sub['sub_name'];
											} else {
												$cat_name = $sub['category_name'] . ' / ' . $sub['sub_name'];
											}
										?>
										<tr><td><a class="showModalButton btn btn-lg btn-warning"  href="#" title = "Update Inventory (<?= $start_date ?> - <?= $end_date ?>)"
												value= "<?= $bulkurl?>"><?= $cat_name ?> </a></td>
										<?php foreach ($form_data as $i => $room) { ?>
										<td><?php 
											$available =  $room[$sub['id']]['total_available'] - $room[$sub['id']]['booked'];
											$url = base_url() . 'index.php/inventory/updateinventory/' . $hotel_id . '?range=0&category=' . $sub['id'] .'&start_date=' . $i;
											if ($room[$sub['id']]['blocked']) : ?>
												<a class="showModalButton btn btn-info"  href="#" title = "Update Inventory (<?= $i ?>)" value="<?= $url ?>">B</a>
											<?php elseif ($available) : ?>
												<a class="showModalButton btn btn-success"  href="#" title = "Update Inventory (<?= $i ?>)" value="<?= $url ?>"><?= $available ?> </a>
											<?php else : ?>
												<a href="#" class="showModalButton btn btn-danger" title = "Update Inventory (<?= $i ?>)" value="<?= $url ?>"><?= $available ?> </a>
											<?php endif; ?>
										</td>
								<?php }
 										echo "</tr>";
								} ?> 
							</tbody>
                        </table>
					<div class="row justify-content-between">
						<a href = "<?= base_url(). 'index.php/inventory/inventorydisplay/' . $hotel_id . '?start_date=' . $previous ?>" >
							<i class="fa fa-backward"></i> Previous 
						</a>
						<a class="float-right" href= "<?= base_url(). 'index.php/inventory/inventorydisplay/' . $hotel_id . '?start_date=' . $next ?>" >
							<i class="fa fa-forward"></i> Next
						</a>
					</div>
                </div>
            </div>
        </div>
    </div>

</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
			<div class="modal-header bg-info justify-content-between">
				<span id="modalHeaderTitle"></span>
				<button type="button" class="btn btn-danger btn-sm pull-right" data-dismiss="modal" aria-hidden="true">X</button>
			</div>
            <div class="modal-body" id = "modalContent">
            </div>
            <div class="modal-footer">
            </div>
        </div>

    </div>
</div>
