  

<div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Trending Destinations</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Trending Destinations Management</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add</li>
                            </ol>
                        </div>
                    </div>

  <div class="modal-body">
        <form action="<?php echo base_url(); ?>index.php/trending_destinations/add" method="POST" enctype="multipart/form-data" >
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Locations Name</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Name" name="locations" required>
                <br>
                  <label class = "mdl-textfield__label" for="exampleInputEmail1">Location pic</label>
                  <input type="file" class = "mdl-textfield__input" id="exampleInputEmail1" name="location_pic" required>
                  <br>
                  <label class = "mdl-textfield__label" for="exampleInputEmail1">Make as a Trending Destinations?</label>
                  Yes  <input type="radio" name="trending_destinations" value = "yes" style="margin-right:20px;" />  
                  No   <input type="radio" name="trending_destinations" value="no" style="margin-right:20px;"  />
              </div>
                           
              <div align='center'>
              <button type="submit" class="btn btn-success">Submit</button>
			  </div>
            </form>
      </div>
     
    </div>

  </div>