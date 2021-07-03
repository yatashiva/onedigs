<div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Trending Destinations</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Trending Destinations Management</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit</li>
                            </ol>
                        </div>
                    </div>

  <div class="modal-body">
        <form action="<?php echo base_url(); ?>index.php/trending_destinations/edit/<?php echo $trending_destinations['id']; ?>" method="POST" enctype="multipart/form-data" >
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Trending Destinations</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Name" name="locations" value="<?php echo $trending_destinations['locations']; ?>" required>
                <br>
               
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Location Image</label>
                  <input type="file" class = "mdl-textfield__input" id="exampleInputEmail1" name="location_pic" >
				  <?php if($trending_destinations['location_pic']!=null){ ?>
                    <img src="<?php echo base_url(); ?>uploads/trending_destinations/<?php echo $trending_destinations['location_pic']?>" height= '50px' width='100px'>
                  <?php } ?>

                <label class = "mdl-textfield__label" for="exampleInputEmail1" >Trending Destination</label>
				        </br>
                <input type="radio" name="trending_destinations" value="yes" <?php echo ($trending_destinations['state']=='yes')?'checked':'' ?> /> On
                <input type="radio" name="trending_destinations" value="no" <?php echo ($trending_destinations['state']=='no')?'checked':'' ?> style="margin-left:20px;"/> Off
                </div>
              </div>
               

            
              
			<div align='center'>		
			 <button type="submit" class="btn btn-success">Submit</button>
			 </div>
            </form>
      </div>
     
    </div>

  </div>