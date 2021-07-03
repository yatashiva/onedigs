	<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							    <div class="row">
							          <div class="col-xl-12">
							        <div class="card card-custom card-stretch gutter-b">
											<div class="card-header">
												<h3 class="card-title">Add Amenity
</h3>
												
											</div>
							        
							        <form class="form" action="<?php echo base_url(); ?>index.php/amenity/add" method="POST" enctype="multipart/form-data">
							            
            <div class="card-body">
               
                 <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Name</label>
   <input type="text" class="form-control" placeholder="Enter Name" name="name" required/>
   
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Icon</label>
   <input type="text" class="form-control" placeholder="Enter Icon Code" name="aIcon" required/>
   
  </div> 
                    </div>

                 
                </div>
                
               



    <a type="button" class="padding-top:20px" data-toggle="modal" data-target="#exampleModalLong">Click Here to View the Icon codes</a>
 


 <!-- Button trigger modal-->


 <div class="card-footer">
  <button type="submit" class="btn btn-primary mr-2">Submit</button>

 </div>
 </div>
</form>
							        </div>
							        </div>
							        </div>
							        </div>
							        </div>
							        
							        

                    

<!-- Modal-->
<div class="modal fade" id="exampleModalLong" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Icons</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
           
        </div>
    </div>
</div>
