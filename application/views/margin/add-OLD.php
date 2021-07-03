  

<div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Payment Margin</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Payment Margin Management</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add</li>
                            </ol>
                        </div>
                    </div>

  <div class="modal-body">
        <form action="<?php echo base_url(); ?>index.php/margin/add" method="POST" enctype="multipart/form-data" >
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Name</label>
                <select type="text" class = "mdl-textfield__input" id="exampleInputEmail1"  name="name" required>
                <?php foreach($hotels as $hotel)
                {
                  ?>
                  <option value="<?php echo $hotel['id']; ?>" ><?php echo $hotel['hotel_name']; ?> </option>
                  <?php
                }
                ?>
                </select>
              </div>
               <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Percentage</label>
                <input type="number" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Percentage" name="percentage" required>
              </div>

            
              <div align='center'>
              <button type="submit" class="btn btn-success">Submit</button>
			  </div>
            </form>
      </div>
     
    </div>

  </div>