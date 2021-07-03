

  <style>
	.modal-body{
		border:1px solid transparent;
		border-top: 3px solid #8dc53f;
		-moz-box-shadow: 1px 1px 5px #757075;
		-webkit-box-shadow: 1px 1px 5px #757075;
		box-shadow: 1px 1px 5px #757075;
		margin-left: 15%;
		padding:20px;
	}
	
	
	
	html, body {
  width: 100%;
  height: 100%;
  position: relative;
  box-sizing: border-box;
  background-color: #FFF;
}
html *, html *:before, html *:after, body *, body *:before, body *:after {
  box-sizing: inherit;
}

.select-menu {
  width: 600px;
  max-width: 98%;
  margin: 40px auto;
}
.select-menu .menu-state, .select-menu .menu {
  display: none;
}
.select-menu .select-label {
  width: 100%;
  height: 40px;
  position: relative;
  display: block;
  border: 1px solid #999;
  cursor: pointer;
}
.select-menu .select-label:before {
  content: attr(data-label);
  width: 100%;
  padding: 0 40px 0 16px;
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  margin-top: -1px;
  font-size: 18px;
  line-height: 20px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.select-menu .arrow {
  width: 32px;
  height: 100%;
  position: relative;
  float: right;
  background-color: #E5E5E5;
}
.select-menu .arrow:before, .select-menu .arrow:after {
  content: "";
  position: absolute;
  width: 16px;
  height: 3px;
  background-color: #4AA0D0;
  top: 53%;
  left: 50%;
}
.select-menu .arrow:before {
  margin-left: -5px;
  transform: translate(-50%, -50%) rotateZ(45deg);
}
.select-menu .arrow:after {
  margin-left: 5px;
  transform: translate(-50%, -50%) rotateZ(-45deg);
}
.select-menu .menu {
  width: 100%;
  border-width: 0 1px 1px;
  border-style: solid;
  border-color: #999;
}
.select-menu .menu-item {
  width: 100%;
  min-height: 36px;
  padding: 8px 8px 8px 36px;
  display: block;
  position: relative;
  cursor: pointer;
  border-bottom: 1px solid #999;
}
.select-menu .menu-item .choice-input {
  position: absolute;
  left: 8px;
  top: 50%;
  transform: translateY(-50%);
}
.select-menu .menu-item span {
  vertical-align: middle;
}
.select-menu .check-all {
  padding-left: 8px;
}
.select-menu li:last-child .menu-item {
  border: none;
}
.select-menu .filter {
  padding: 0;
}
.select-menu .filter input {
  width: 100%;
  height: 36px;
  display: block;
  padding: 0 8px;
  font-size: 14px;
  line-height: 16px;
  border: none;
  outline: none;
}
.select-menu .menu-state:checked + label .arrow:before, .select-menu .menu-state:checked + label .arrow:after {
  width: 24px;
  top: 50%;
  margin-left: 0;
}
.select-menu .menu-state:checked ~ .menu {
  display: block;
}

.checkbox, .radio {
  display: none;
}
.checkbox + .choice-input, .radio + .choice-input {
  width: 20px;
  height: 20px;
  display: inline-block;
  border: 1px solid #999;
  outline: none;
  background: #FFF;
  cursor: pointer;
}
.checkbox:checked + .choice-input, .radio:checked + .choice-input {
  border: 1px solid #4AA0D0;
  background-color: #4AA0D0;
  box-shadow: inset 0 0 0 2px #FFF;
}

.radio + .choice-input {
  border-radius: 100%;
}

.toggle-container .toggle {
  display: none;
}
.toggle-container .toggle + label {
  transition: .2s ease;
  display: inline-block;
  height: 24px;
  width: 44px;
  position: relative;
  border-radius: 60px;
  background: #E5E5E5;
  box-shadow: inset 0 0 0 2px #E5E5E5;
  cursor: pointer;
  white-space: nowrap;
  /* White toggle */
}
.toggle-container .toggle + label:before {
  content: "";
  position: absolute;
  display: block;
  height: 24px;
  width: 24px;
  top: 0;
  left: 0;
  border-radius: 12px;
  background: #E5E5E5;
  transition: .4s ease;
}
.toggle-container .toggle + label:after {
  content: "";
  position: absolute;
  display: block;
  height: 22px;
  width: 22px;
  top: 50%;
  margin-top: -11px;
  left: 1px;
  border-radius: 60px;
  background: #FFF;
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1), 0 4px 0 0 rgba(0, 0, 0, 0.04), 0 4px 9px rgba(0, 0, 0, 0.15), 0 3px 3px rgba(0, 0, 0, 0.1);
  transition: .35s ease;
}
.toggle-container .toggle + label span {
  height: 24px;
  line-height: 24px;
  margin-left: 44px;
  padding-left: 16px;
}
.toggle-container .toggle:checked + label:before {
  width: 44px;
  background: #4AA0D0;
  transition: width .4s ease !important;
}
.toggle-container .toggle:checked + label:after {
  left: 21px;
}
.toggle-container .toggle:checked + label {
  box-shadow: inset 0 0 0 25px #E5E5E5;
  transition: box-shadow 2.5s ease;
}



	
	
  </style>

<div class="page-bar">
                        <div class="page-title-breadcrumb">
                            
                            <ol class="breadcrumb page-breadcrumb pull-left">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Edit Profile</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <!-- <li class="active">Add</li> -->
                            </ol>
                        </div>
                    </div>

  <div class="card-box col-md-8  modal-body">
    <div class='card-head'>
		<h2 align='center'>Change Password</h2>
	</div>
	 <div class='card-body'>
        <form action="<?php echo base_url(); ?>index.php/admin/changepassword" method="POST" enctype="multipart/form-data" style='width:100%'>
       



          
            <div class='col-md-6'> 
                    <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                        <label class = "mdl-textfield__label" for="name">Old Password</label>
                        <input type="password" class = "mdl-textfield__input" id="old" name="old" placeholder="password">
                        
                        
                    </div>
           </div>
            
             <div class='col-md-6'> 
                      <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                          <label class = "mdl-textfield__label" for="name">Password</label>
                          <input type="password" class = "mdl-textfield__input" id="password" name="password" placeholder="password">
                      </div>
             </div>
             <div class='col-md-6'> 
                      <div class="mdl-textfield mdl-js-textfield" style='z-index:99999'>
                          <label class = "mdl-textfield__label" for="simpleFormEmail">Re-Enter Password</label>
                          <input  class = "mdl-textfield__input" type="password" name="confirm_password" id="confirm_password"  placeholder="re-enter password">
                          <span id='message'></span>
                      </div>
             </div>
           
           
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

		</div>	

		<div>	


		</div>	 
			
            
        <div align='center'> 
              <button type="submit" class="btn btn-success">Submit</button>
			  </div>
            </form>
			</div>
      </div>
     
 

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
