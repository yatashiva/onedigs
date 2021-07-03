<div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Taxes</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Taxes Management</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">edit</li>
                            </ol>
                        </div>
                    </div>

  <div class="modal-body">
        <form action="<?php echo base_url(); ?>index.php/taxes/edit/<?php echo $taxes['id']; ?>" method="POST" enctype="multipart/form-data" >
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Minimum</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Minimum" name="min" value="<?php echo $taxes['min']; ?>" required>
              </div>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Maximum</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Maximum" name="max" value="<?php echo $taxes['max']; ?>" required>
              </div>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Tax(in percentage)</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Tax" name="tax" value="<?php echo $taxes['tax']; ?>" required>
              </div>
               

            
              
			<div align='center'>		
			 <button type="submit" class="btn btn-success">Submit</button>
			 </div>
            </form>
      </div>
     
    </div>

  </div>