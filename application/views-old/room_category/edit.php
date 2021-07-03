  <style>
	.modal-body{
		border:1px solid transparent;
		border-top: 3px solid #8dc53f;
		-moz-box-shadow: 1px 1px 5px #757075;
		-webkit-box-shadow: 1px 1px 5px #757075;
		box-shadow: 1px 1px 5px #757075;
		
		padding:20px;
	}
  </style>

<div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Room Category</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Room Management</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit</li>
                            </ol>
                        </div>
                    </div>

  <div class="card-box col-md-12 modal-body">
   <div class='card-head'>
		<h2 align='center'>Edit Room Categories</h2>
	</div>
	 <div class='card-body'>
        <form action="<?php echo base_url(); ?>index.php/room_category/edit/<?php echo $room_category['id']; ?>" method="POST" enctype="multipart/form-data" >
       
	 
	   <div>
			<div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1"> Hotel Name</label>
                <select class="mdl-textfield__input" name="hotel_id" id="hotel" required>
                
         
            <?php
            foreach ($hotels as $row) {
              ?>
              <option value="<?php echo $row['id']; ?>" <?php if($room_category['hotel_id']==$row['id']){echo 'selected';} ?>><?php echo $row['hotel_name']; ?></option>
              <?php
            }
            ?>
                </select>
              </div>   
              </div>   
                <div class='col-md-6'>	
                <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Category Name</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1"  name="category_name" placeholder="Enter Room Category" value="<?php echo $room_category['category_name']; ?>" required>
				</div>
				</div>
			</div>
			<div>
			 <div class='col-md-6'>		
				<div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">No Of Rooms </label>
                <input type="number" class = "mdl-textfield__input" id="exampleInputEmail1"  name="no_of_rooms" placeholder="Enter No Of Rooms " value="<?php echo $room_category['no_of_rooms']; ?>" required>
           
           
              </div>
              </div>
				<div class='col-md-6'>	
			        <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Room Pics</label>
                <input type="file" class = "mdl-textfield__input" id="r"  name="hotel_gallery[]" multiple required>
                <!-- onchange="if(parseInt($(this).get(0).files.length)>8) alert('You can only upload a maximum of 8 files .Please Select Again');else alert('Upload Successfully' );"> -->
                <?php if($room_images!=''){
                   foreach ($room_images as $gal){
                   ?>
                <img src="<?php echo base_url(); ?>gallery/<?php echo $gal['hotel_id'].'/roompics'.'/'.$room_category['id'].'/'.$gal['gallery']?>" height= '150px' width='200px'>
               <?php }} ?>
              </div>
              </div>
			 </div>  
			
              <div>
			 <div class='col-md-6'>		
				<div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Capacity </label>
                <input type="number" class = "mdl-textfield__input" id="exampleInputEmail1"  name="capacity" placeholder="Enter Capacity " value="<?php echo $room_category['capacity']; ?>" required>
           
           
              </div>
              </div>
               <div class='col-md-6'>		
				<div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1"> Base Price</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter actual Price" name="baseprice" value="<?php echo $room_category['baseprice']; ?>" required>
              </div>
              </div>
              </div>
              <div>
              <div class='col-md-6'>		
				<div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Price</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Final  Price" name="price" value="<?php echo $room_category['price']; ?>" required>
              </div>
              </div>

        <div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Double  Price</label>
                <input type="text" class="mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter  Double Price" name="doubleprice" value="<?php echo $room_category['double_price']; ?>" required>
              </div>
              </div>
        
        <div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Extra Bed Price</label>
                <input type="text" class="mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Extra Bed Price" name="bedprice" value="<?php echo $room_category['extra_bed_price']; ?>" required>
              </div>
              </div>

              <div class='col-md-6'>		
				<div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1"> Amenities</label>
                <select class = "mdl-textfield__input" name="amenities[]" id="amenity" multiple required>
                <?php
            $list = explode(',',$room_category['amenities']);
            
            foreach ($amenities as $row) {
              ?>
              <option value="<?php echo $row['id']; ?>" <?php if(in_array($row['id'],$list)){echo 'selected';} ?>><?php echo $row['name']; ?></option>
              <?php
            }
            ?>
         
            <!-- <?php
            foreach ($amenities as $row) {
              ?>
              <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
              <?php
            }
            ?> -->
                </select>
              </div>
              </div>
              </div>
			  <div class='col-md-12'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Description</label>
                <textarea class = "mdl-textfield__input" id="exampleInputEmail1"  name="description" required>"<?php echo $room_category['description']; ?>"</textarea>
              </div>
              </div>
              <div class='col-md-12'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Description</label>
                <textarea class = "mdl-textfield__input" id="exampleInputEmail1"  name="cancellation_policy" required>"<?php echo $room_category['cancellation_policy']; ?>"</textarea>
              </div>
              </div>
            
              <div  align='center'>
              <button type="submit" class="btn btn-success">Submit</button></div>
            </form>
      </div>
      </div>
     
  </div>
  <!-- <script>
 $("select#hotel option")
   .each(function() { this.selected = (this.text == <?php echo $room_category['hotel_id']; ?>); 
 });
</script> -->




<!-- <script>
 $("select#amenity option")
   .each(function() { 
   <?php

    foreach ($amenities as $row1) 
    {
      
      ?>
      this.selected = (this.text=="<?php echo $row1['name']; ?>");
     

    
    <?php
  }
  ?>
 });
</script> -->