	<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							    <div class="row">
							          <div class="col-xl-12">
							        <div class="card card-custom card-stretch gutter-b">
											<div class="card-header">
												<h3 class="card-title">Change Password
</h3>
												
											</div>
							        
							        <form action="<?php echo base_url(); ?>index.php/admin/changepassword" method="POST" enctype="multipart/form-data">
							            <!--<input type="hidden" name="user_type" value="2"/>-->
							            
            <div class="card-body">
               
                 <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Ola Password</label>
   <input type="password" class="form-control" id="old" name="old"  placeholder="Old Password"  required/>
   
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>New Password</label>
   <input  type="email" class="form-control" id="password" name="password" placeholder="New Password" required/>
   
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Confirm Password</label>
   <input  type="password" class="form-control" name="confirm_password" id="confirm_password"  placeholder="Confirm Password" required/>
   
  </div> 
                    <span id='message'></span>
                    </div>
                 
                </div>
              
                
               



   
 

 
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
							        
 
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
$(".js-select-menu").on("click", function() {
  var $menu = $(this);
  var $menuState = $menu.find(".js-menu-state");
  if($menuState.is(":checked")) {
    $(document).one("mouseup", function(e) {
      if (!$menu.is(e.target)
        && $menu.has(e.target).length === 0) {
          $menuState.prop("checked", "");
        }
    });
  }
});

$(".js-option").on("change", function() {
  var $optionMenu = $(this).closest(".js-select-options");
  var $checkedList = $optionMenu.find(".js-option:checked ~ span");
  var $label =  $optionMenu.prev(".js-select-label");
  
  if(!$(".js-check-all").is(":checked") &&
     $checkedList.length === $(".js-option").length) {
    $(".js-check-all").prop("checked", true);  
  }
  
  if($(".js-check-all").is(":checked") &&
     $checkedList.length !== $(".js-option").length) {
    $(".js-check-all").prop("checked", false);  
  }
  
  if(!$checkedList.length) {
    $label.attr("data-label", $label.data("defaultLabel"))
    return;
  }
  
  var text = "";
  $checkedList.each(function(index) {
    text += $(this).text();
    if(index + 1 !== $checkedList.length) {
      text += ", "
    }
  });

  $label.attr("data-label", text)
});

$(".js-check-all").on("change", function() {
  var $toggle = $(this);
  var checked = $toggle.is(":checked") ? true : false;

  $toggle.closest(".js-select-options").find(".js-option").each(function() {
    $(this).prop("checked", checked).change();
  });
});

$.fn.selectMenuValue = function() {
  var $checked = this.find('.js-select-options .js-option:checked');
  if($checked.length) {
    return [];
  }
  
  var valueArray = []; 
  $checked.each(function() {
    valueArray.push($(this).val());
  });

  return valueArray;
}


// filter js
$(".js-filter-input").on("keyup", function() {
  var userSuppliedCriteria = $.trim($(this).val()).toLowerCase().split(" ");
  $(".js-filterable").each(function () {
    var $filterableElement = $(this);
    if ($filterableElement.shouldBeExcluded(userSuppliedCriteria)) {
      $filterableElement.hide();
    } else {
      $filterableElement.show();
    }
  });
});

$.fn.shouldBeExcluded = function (userSuppliedCriteria) {
  var elementCriteria = this.data("filterCriteria").toLowerCase();
  return userSuppliedCriteria.some(function (word) {
    return elementCriteria.indexOf(word) === -1;
  });
};
</script>
<script>

$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matched').css('color', 'green');
  } else 
    $('#message').html('Password Not Matched').css('color', 'red');
});
  </script>


                    
