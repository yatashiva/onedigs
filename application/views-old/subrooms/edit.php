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
                                <li class="active">Edit Sub Room</li>
                            </ol>
                        </div>
                    </div>

  <div class="card-box col-md-12 modal-body">
	 <div class='card-head'>
		<h2 align='center'>Edit Sub-room Categories</h2>
	</div>
	 <div class='card-body'>
        <form action="<?php echo base_url(); ?>index.php/room_category/subedit/<?php echo $sub_category['id'] ?>" method="POST" enctype="multipart/form-data" style='width:100%'>
            
			<div>
					<div class='col-md-6'>
                          <div class="mdl-textfield mdl-js-textfield">

                <label class = "mdl-textfield__label" for="title">Select Hotel Name</label>

                <select name="hotel_id" class="mdl-textfield__input" style='z-index:9999' required>

                    <option value="">Select Hotel Name</option>

                    <?php

                        foreach ($hotels as $row) { ?>

              <option value="<?php echo $row['id']; ?>" <?php if($sub_category['hotel_id']==$row['id']){echo 'selected';} ?>><?php echo $row['hotel_name']; ?></option>
                            

                   <?php     }

                    ?>

                </select>

            </div>
            </div> 
				<div class='col-md-6'>
            <div class="mdl-textfield mdl-js-textfield">

                <label class = "mdl-textfield__label" for="title">Select Category:</label>

                <select name="category_id" class="mdl-textfield__input" style='z-index:9999' required>

                </select>

            </div>
           </div>
           </div>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    var hotel_id = <?php echo $sub_category['hotel_id']; ?>;
                    var category_id = <?php echo $sub_category['category_id']; ?>;
                    if(hotel_id!=null){
                      $.ajax({
                                url: '<?php echo base_url();?>index.php/room_category/myformAjax/' + hotel_id,
                                type: "GET",
                                dataType: "json",
                               
                                success:function(data) {
                                  
                                    $('select[name="category_id"]').empty();
                                    $.each(data, function(key, value) {
                                      if(value.id==category_id){
                                        $('select[name="category_id"]').append('<option value="'+ value.id +'" selected >'+ value.category_name +'</option>');
                                      }else{
                                        $('select[name="category_id"]').append('<option value="'+ value.id +'" >'+ value.category_name +'</option>');
                                      }
                                    });
                                }
                            });
                    }
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
                <input type="text" class="mdl-textfield__input" id="exampleInputEmail1"  value="<?php echo $sub_category['sub_name']?>" name="sub_name" placeholder="Enter Room Category" style='z-index:9999' required>
				</div>
				</div>
				<div class='col-md-6'>
                 <div class="mdl-textfield mdl-js-textfield">
                <label for="exampleInputEmail1">No Of Rooms </label>
                <input type="number" class="mdl-textfield__input" id="exampleInputEmail1"  value="<?php echo $sub_category['num_of_rooms']?>" name="no_of_rooms" placeholder="Enter No Of Rooms " style='z-index:9999' required>
           
           
              </div>
			  </div>
			</div>
			<div>
      <div class="col-md-6">

               <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Room Pics</label>
                <input type="file" class="mdl-textfield__input" id="r"  name="hotel_gallery[]" multiple style='z-index:9999' required>
                <!-- onchange="if(parseInt($(this).get(0).files.length)>8) alert('You can only upload a maximum of 8 files .Please Select Again');else alert('Upload Successfully' );"> -->
                <?php if($image!=''){
                // echo $image['hotel_id'];
                // die();
                //    foreach ($image as $gal){
                //     print_r($gal);
                //     echo $gal['hotel_id'];
                //     die();
                   ?>
                <img src="<?php echo base_url(); ?>gallery/<?php echo $image['hotel_id']; ?>/subroompics/<?php echo $image['sub_category_id']; ?>/<?php echo $image['gallery']?>" height= '150px' width='200px'>
               <?php } ?>
              </div>
      </div>
              <div class="col-md-6">
				  <div class="mdl-textfield mdl-js-textfield">
					<label class = "mdl-textfield__label" for="exampleInputEmail1">Capacity </label>
					<input type="number" class="mdl-textfield__input" id="exampleInputEmail1" value="<?php echo $sub_category['capacity']?>"  name="capacity" placeholder="Enter Capacity " style='z-index:9999' required>
			   
			   
				  </div>
               </div>
			</div> 
			<div>	
			   <div class='col-md-6'>
                <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1"> Base Price</label>
                <input type="text" class="mdl-textfield__input" id="exampleInputEmail1" value="<?php echo $sub_category['base_price']?>" placeholder="Enter actual Price" name="base_price" style='z-index:9999' required>
              </div>
              </div>
			

			
              <div class="col-md-6">
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Price</label>
                <input type="text" class="mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Price" value="<?php echo $sub_category['price']?>" name="price" style='z-index:9999' required>
              </div>
              </div>

                <div class="col-md-6">
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Double Price</label>
                <input type="text" class="mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Price" value="<?php echo $sub_category['double_price']?>" name="doubleprice" style='z-index:9999' required>
              </div>
              </div>

                <div class="col-md-6">
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Extra Bed Price</label>
                <input type="text" class="mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Price" value="<?php echo $sub_category['extra_bed_price']?>" name="bedprice" style='z-index:9999' required>
              </div>
              </div>


            </div> 
               <div  class="col-md-12">
               <div  class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1"> Amenities</label>
                <select class="mdl-textfield__input" name="amenities[]" multiple style='z-index:9999' required>
                
         
            <?php
            $list = explode(',',$sub_category['amenities']);
            foreach ($amenities as $row) {
              ?>
              <option  value="<?php echo $row['id']; ?>" <?php if(in_array($row['id'],$list)){echo 'selected';} ?>> <?php echo $row['name']; ?></option>
              <?php
            }
            ?>
                </select>
              </div>
              </div>
           
				<!-- <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" id="exampleInputEmail1"  value=<?php echo $sub_category['price']?> name="description" required></textarea>
              </div> -->
               <div class='col-md-12'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Description</label>
                <textarea class = "mdl-textfield__input" id="exampleInputEmail1"  name="cancellation_policy" required><?php echo $sub_category['cancellation_policy']; ?></textarea>
              </div>
              </div>
             
            
             <div align='center'> 
              <button type="submit" class="btn btn-success">Submit</button>
			 </div> 
            </form>
		</div>	
      </div>
     
  </div>