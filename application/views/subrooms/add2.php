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
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Subroom Type</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Sub Room</li>
                            </ol>
                        </div>
                    </div>

  <div class="card-box col-md-12 modal-body">
    <div class='card-head'>
		<h2 align='center'>Add Sub-room Categories</h2>
	</div>
	 <div class='card-body'>
        <form action="<?php echo base_url(); ?>index.php/room_category/addsub" method="POST" enctype="multipart/form-data" >
         <div>   
				<div class='col-md-6'>
                          <div class="mdl-textfield mdl-js-textfield">

                <label class = "mdl-textfield__label" for="title">Select Hotel Name</label>

                <select name="hotel_id" class = "mdl-textfield__input">

                    <option value="">Select Hotel Name</option>

                    <?php

                        foreach ($hotels as $row) {

                            echo "<option value='".$row['id']."'>".$row['hotel_name']."</option>";

                        }

                    ?>

                </select>

            </div>
			</div>
                 <div class='col-md-6'>       
            <div class="mdl-textfield mdl-js-textfield">

                <label class = "mdl-textfield__label" for="title">Select Category:</label>

                <select name="category_id" class = "mdl-textfield__input" >

                </select>

            </div>
          </div>
        </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('select[name="hotel_id"]').on('change', function() {

                        var id = $(this).val();
                       
                        if(id) {
                            $.ajax({
                                url: '<?php echo base_url();?>index.php/room_category/myformAjax/' + id,
                                type: "GET",
                                dataType: "json",
                               
                                success:function(data) {
                                  
                                    $('select[name="category_id"]').empty();
                                    $.each(data, function(key, value) {
                                        $('select[name="category_id"]').append('<option value="'+ value.id +'">'+ value.category_name +'</option>');
                                    });
                                }
                            });
                        }
                        else{
                            $('select[name="category_id"]').empty();
                        }
                    });
                });
            </script>



			        
        <div>
			<div class='col-md-6'>
               <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Sub Category Name</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1"  name="sub_name" placeholder="Enter Room Category" >
				</div>
			</div>
			<div class='col-md-6'>	
                 <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">No Of Rooms </label>
                <input type="number" class = "mdl-textfield__input" id="exampleInputEmail1"  name="no_of_rooms" placeholder="Enter No Of Rooms " >
           
              </div>
			</div>
		</div>	
		<div>
			<div class='col-md-6'>	
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Capacity </label>
                <input type="number" class = "mdl-textfield__input" id="exampleInputEmail1"  name="capacity" placeholder="Enter Capacity " >

              </div>
            </div>
			<div class='col-md-6'>
                <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1"> Base Price</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter actual Price" name="base_price" pattern = "-?[0-9]*(\.[0-9]+)?">
				   <span class = "mdl-textfield__error">Number required!</span>
              </div>
			</div> 
		</div>
		<div>
			<div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Price</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter  Price" name="price" pattern = "-?[0-9]*(\.[0-9]+)?">
				   <span class = "mdl-textfield__error">Number required!</span>
              </div>
            </div>
			<div class='col-md-6'>	
               <div  class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1"> Amenities</label>
                <select class = "mdl-textfield__input" name="amenities[]" multiple>
                
         
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
		</div>	
		
			<!-- <div class='col-md-12'> -->
				<!-- <div class="mdl-textfield mdl-js-textfield"> -->
                <!-- <label class = "mdl-textfield__label" for="exampleInputEmail1">Description</label> -->
                <!-- <textarea class = "mdl-textfield__input" id="exampleInputEmail1"  name="description" ></textarea> -->
              <!-- </div> -->
            <!-- </div>  -->
            
              <div align='center'>
              <button type="submit" class="btn btn-success">Submit</button>
			  </div>
            </form>
			</div>
      </div>
     
  </div>