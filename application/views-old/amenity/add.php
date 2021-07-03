  

<div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Amenity</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Amenity Management</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add</li>
                            </ol>
                        </div>
                    </div>

  <div class="modal-body">
        <form action="<?php echo base_url(); ?>index.php/amenity/add" method="POST" enctype="multipart/form-data" >
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Name</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Name" name="name" required>
                <br>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Icon Code" name="aIcon" required>
              </div>
                           
              <div align='center'>
              <button type="submit" class="btn btn-success">Submit</button>
			  </div>
            </form>
      </div>
     
    </div>

  </div>