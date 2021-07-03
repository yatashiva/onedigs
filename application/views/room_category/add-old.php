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
                            
                            <ol class="breadcrumb page-breadcrumb pull-left">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Room Types</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Room</li>
                            </ol>
                        </div>
                    </div>
		
  <div class="card-box col-md-12 modal-body">
	 <div class='card-head'>
		<h2 align='center'>Add Room Categories</h2>
	</div>
	  <div class='card-body'>
        <form action="<?php echo base_url(); ?>index.php/room_category/add" method="POST" enctype="multipart/form-data" >
		
		
				<div class='col-md-6'>
               <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1"> Hotel Name</label>
                <select class="mdl-textfield__input" name="hotel_id" style='z-index:999999' required>
                
         
            <?php
            foreach ($hotels as $row) {
              ?>
              <option value="<?php echo $row['id']; ?>"><?php echo $row['hotel_name']; ?></option>
              <?php
            }
            ?>
                </select>
              </div>
              </div>
			  <div class='col-md-6'>
               <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Category Name</label>
                <input type="text" class="mdl-textfield__input" id="exampleInputEmail1"  name="category_name" placeholder="Enter Room Category" style='z-index:999999' required>
				</div>
				</div>
		
		<div>
				<div class='col-md-6'>
                <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Room Pics</label>
                <input type="file" class="mdl-textfield__input" id="r"  name="hotel_gallery[]"   onchange="if(parseInt($(this).get(0).files.length)>8) alert('You can only upload a maximum of 8 files .Please Select Again');else alert('Upload Successfully' );" style='z-index:999999' required>
        
              </div>
              </div>
			  <div class='col-md-6'>
                 <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">No Of Rooms </label>
                <input type="number" class="mdl-textfield__input" id="exampleInputEmail1"  name="no_of_rooms" placeholder="Enter No Of Rooms " style='z-index:999999' required>
           
			  </div>	
              </div>
		</div>
			
			<div class='col-md-12'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Capacity </label>
                <input type="number" class="mdl-textfield__input" id="exampleInputEmail1"  name="capacity" placeholder="Enter Capacity " required>
           
           
              </div>
              </div>
			  <div>
               <div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Base Price</label>
                <input type="text" class="mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter  Price" name="baseprice" style='z-index:999999' required>
              </div>
              </div>
            
			
				<div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Price</label>
                <input type="text" class="mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter  Price" name="price" style='z-index:999999' required>
              </div>
              </div>
			</div>  
        <div>
               <div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Double  Price</label>
                <input type="text" class="mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter  Double Price" name="doubleprice" style='z-index:999999' required>
              </div>
              </div>
            
      
        <div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Extra Bed Price</label>
                <input type="text" class="mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Extra Bed Price" name="bedprice" style='z-index:999999' required>
              </div>
              </div>
      </div>  
				<div class='col-md-12'>
                  <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1"> Amenities</label>
                <select class="mdl-textfield__input" name="amenities[]" multiple  required >
                
         
            <?php
            foreach ($amenities as $row) {
              ?>
              <option  value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
              <?php
            }
            ?>
                </select>
              </div>
              </div>
            <div class='col-md-12'>
 <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Description</label>
                <textarea class="mdl-textfield__input" id="exampleInputEmail1"  name="description"  required></textarea>
              </div>
              </div>
                <div class='col-md-12'>
 <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Cancellation Policy</label>
                <textarea class="mdl-textfield__input" id="exampleInputEmail1"  name="cancellation_policy"  required></textarea>
              </div>
              </div>
             <div align='center'>
              <button type="submit" class="btn btn-success">Submit</button>
			 </div> 
            </form>
      </div>
      </div>
     
  </div>