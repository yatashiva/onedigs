<?php //var_dump($reservations);die; ?>
                <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box card-topline-aqua">
                                <div class="card-head">
                                    <header>Payment Details</header>
                                     <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="table-scrollable">
                                    <table id="example1" class="table table-striped display" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Booking Id</th>
                                                <th>Payment Id</th>
                                                <th>Payment Type</th>
                                                <th>Amount paid</th>
                                                <th>Payment Date</th>
                                               <!--  <th>actions</td> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <?php foreach($payment_details as $rev){ ?>
                                                     <td><?php echo $rev['reservation_id'] ?></td>
                                                    <td><?php echo $rev['reference_id'] ?></td>
                                                    <td>Online</td>
                                                    <td><?php echo $rev['amount_paid'] ?></td>
                                                    <td><?php echo $rev['paid_date'] ?></td>
                                                   <!--  <td><a href="" ><i class='fa fa-eye' title='view'></i></a></td> -->
                                              <?php } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

