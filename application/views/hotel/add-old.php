<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<style type="text/css">
  <style>.with-nav-tabs.panel-default .nav-tabs>li>a,
  .with-nav-tabs.panel-default .nav-tabs>li>a:hover,
  .with-nav-tabs.panel-default .nav-tabs>li>a:focus {
    color: #fff;
    font-size: 15px;
  }

  .with-nav-tabs.panel-default .nav-tabs>.open>a,
  .with-nav-tabs.panel-default .nav-tabs>.open>a:hover,
  .with-nav-tabs.panel-default .nav-tabs>.open>a:focus,
  .with-nav-tabs.panel-default .nav-tabs>li>a:hover,
  .with-nav-tabs.panel-default .nav-tabs>li>a:focus {
    color: #fff;
    background-color: #ddd;
    font-size: 15px;

  }

  .with-nav-tabs.panel-default .nav-tabs>li.active>a,
  .with-nav-tabs.panel-default .nav-tabs>li.active>a:hover,
  .with-nav-tabs.panel-default .nav-tabs>li.active>a:focus {
    color: #fff;
    background-color: #8dc53f;

    font-size: 15px;
  }

  .with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu {
    background-color: #f5f5f5;

  }

  .with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>li>a {
    color: #777;
  }

  .with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>li>a:hover,
  .with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>li>a:focus {
    background-color: #ddd;
  }

  .with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>.active>a,
  .with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>.active>a:hover,
  .with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>.active>a:focus {
    color: #fff;
    background-color: #555;
  }

  html,
  body {
    padding-top: 20px;
  }

  [data-role="dynamic-fields"]>.form-inline+.form-inline {
    margin-top: 0.5em;
  }

  [data-role="dynamic-fields"]>.form-inline [data-role="add"] {
    display: none;
  }

  [data-role="dynamic-fields"]>.form-inline:last-child [data-role="add"] {
    display: inline-block;
  }

  [data-role="dynamic-fields"]>.form-inline:last-child [data-role="remove"] {
    display: none;
  }

  .panel-heading {
    background-color: #8dc53f !important;


  }

  .nav-tabs>li.active>a {
    font-size: 22px !important;
    border: 0px !important;
  }

  .nav-tabs>li>a:hover {
    background-color: #8dc53f !important;
    border: 0px !important;
    color: #fff;
    font-size: 18px !important;

  }

  .nav-tabs>li>a {
    color: #fff;
    font-size: 16px;
  }
</style>
<style type="text/css">
  #geomap {
    width: 100%;
    height: 300px;
  }

  ul#geoData {
    text-align: left;
    font-weight: bold;
    margin-top: 10px;
  }

  ul#geoData span {
    font-weight: normal;
  }
  
  
 
</style>
<div class="page-bar">
  <div class="page-title-breadcrumb">

    <ol class="breadcrumb page-breadcrumb pull-left">
      <li>
        <i class="fa fa-home"></i>&nbsp;
        <a class="parent-item" href="index.html">Hotel Management</a>&nbsp;
        <i class="fa fa-angle-right"></i>
      </li>
      <li class="active">Add Hotel</li>
    </ol>
  </div>
</div>



<div class="row">
  <div class="col-md-12">
    <div class="panel with-nav-tabs panel-default">
      <div class="panel-heading">
        <ul class="nav nav-tabs" style='color:white; border-bottom:0px !important'>
          <li class="active show">
            <a href="#tab1default" data-toggle="tab">Basic Info</a>
          </li>
          <li>
            <a href="#tab2default" data-toggle="tab">Account Details</a>
          </li>
          <!-- <li><a href="#tab4default" data-toggle="tab">Map</a></li> -->
          <!-- <li><a href="#tab5default" data-toggle="tab">Photos</a></li> -->
          <li>
            <a href="#tab6default" data-toggle="tab">Policy</a>
          </li>
            <!-- <li>
              <a href="#tab7default" data-toggle="tab">Cancel rules</a>
            </li> -->
          <li>
            <a href="#tab8default" data-toggle="tab">Pay at Hotel setting</a>
          </li>
          <li>
            <a href="#tab9default" data-toggle="tab">Gallery Images</a>
          </li>
          <!-- <li>
            <a href="#tab10default" data-toggle="tab">Taxes</a>
          </li> -->

        </ul>
      </div>
      <form action="<?php echo base_url();?>index.php/hotel/add" method="POST" enctype="multipart/form-data" name="myform">
        <div class="panel-body">
          <div class="tab-content">
            <div class="tab-pane fade in active show" id="tab1default">

              <div>
                <div class="col-md-6 col-sm-12">
				 <div class = "mdl-textfield mdl-js-textfield">
                  <label class = "mdl-textfield__label" for="exampleInputEmail1">Hotel Name</label>
                  <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Name" name="hotel_name" required>
                </div>
                </div>
                <div class="col-md-6 col-sm-12 ">
				<div class = "mdl-textfield mdl-js-textfield">
                  <label class = "mdl-textfield__label" for="exampleInputEmail1">Hotel Image</label>
                  <input type="file" class = "mdl-textfield__input" id="exampleInputEmail1" name="hotel_pic" required>

                </div>
                </div>
              </div>
              <div>
                <div class="col-md-6 col-sm-12 col-xs-12">
				 <div class = "mdl-textfield mdl-js-textfield">
                  <label class = "mdl-textfield__label" for="exampleInputEmail1">Hotel Grade</label>
                  <select class = "mdl-textfield__input" name="hotel_grade" style='height:35px' required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>

                </div>
                </div>

         <div class="col-md-6 col-sm-12 col-xs-12">
				 <div class = "mdl-textfield mdl-js-textfield">
                  <label class = "mdl-textfield__label" for="exampleInputEmail1">Total Rooms</label>
                  <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Total rooms" name="total_rooms" required>
                </div>
                </div>
              </div>
         
              
              <div class='col-md-12 col-xs-12 col-sm-12'>
			          <div class="mdl-textfield mdl-js-textfield" style='padding-right:0px;padding-left:0px;'>
                  <label class = "mdl-textfield__label" for="exampleInputEmail1">Top hotel</label>
                  Yes  <input type="radio" name="top_hotel" value = "yes" style="margin-right:20px;" />  
                  No   <input type="radio" name="top_hotel" value="no" style="margin-right:20px;"  />
                </div>
              </div>

         
              <div class='col-md-12 col-xs-12 col-sm-12'>
			    
                <div class="mdl-textfield mdl-js-textfield" style='padding-right:0px;padding-left:0px;'>
                  <label class = "mdl-textfield__label" for="exampleInputEmail1">City</label>
                  <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Need To place city name" name="location" required>
                </div>
              </div>
               <div class='col-md-12 col-xs-12 col-sm-12'>
          
                <div class="mdl-textfield mdl-js-textfield" style='padding-right:0px;padding-left:0px;'>
                  <label class = "mdl-textfield__label" for="exampleInputEmail1">Area</label>
                  <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Need To place area name" name="area" required>
                </div>
              </div>
              <div class="form-group">

                <input type="hidden" class="form-control" id="latitude" name="hotel_latitude" required>
              </div>
              <div class="form-group">

                <input type="hidden" class="form-control" id="longitude" name="hotel_longitude" required>
                 <input type="hidden" class="form-control" id="address" name="hotel_address" required>
              </div>
			<div class='col-md-12 col-sm-12 col-xs-12'>  
              <div class="mdl-textfield mdl-js-textfield" style='padding-right:0px;padding-left:0px;'>
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Search Location</label>
                <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Location" name="location" required> -->


                <div class="col-md-12" style='padding-right:0px;padding-left:0px;'>
                  <div class="div-center">
                    <!-- <h4>Search Location</h4> -->

                   <!--  <form> -->
                      <div class="form-group input-group">
                        <input type="text" id="search_location" class = "mdl-textfield__input" placeholder="Search location" name="searchlocation" required>
                        <div class="input-group-btn">
                          <button id="aaaa" class="btn btn-default get_map" type="button">
                            Locate
                          </button>
                        </div>
                      </div>
                 <!--    </form> -->

                    <!-- display google map -->
                    <div id="geomap"></div>

                    <!-- display selected location information -->
                    <h4>Location Details</h4>


                    <ul id="geoData">
                      <li>Full Address:
                        <span id="search_addr" class="adr"></span>
                      </li>
                      <li>Latitude:
                        <span id="search_latitude" class="lat"></span>
                      </li>
                      <li>Longitude:
                        <span id="search_longitude" class="long"></span>
                      </li>
                    </ul>


                    <script>
                      // $( document ).ready(function() {


                      $('#aaaa').click(function (e) {

                        setTimeout(function () {

                          var adr1 = $("#search_addr").text();
                          var lat1 = $("#search_latitude").text();
                          var long1 = $("#search_longitude").text();

                          //alert(lat1);

                          $('#latitude').val(lat1);
                          $('#longitude').val(long1);
                          $('#address').val(adr1);
                        }, 5000);

                        // var lat1 = $("#search_latitude").text();
                        //       alert("Value is "+lat1);
                        //   $('#latitude').val(lat1);
                      });
                  // });

                    </script>
                    <!--   <script type="text/javascript">
                  $(document).ready(function(){
                  document.getElementById('#loc_sub').click = function () {
                      document.getElementById('#latitude').value = document.getElementById('#search_latitude').innerHTML;
                  }
                  });
                  </script> -->

                  </div>
                </div>




              </div>
			</div>
              <!-- <div class="form-group">
                <label for="exampleInputEmail1">City</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter City" name="city" required>
              </div>
               <div class="form-group">
                <label for="exampleInputEmail1">State</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter State" name="state" required>
              </div> -->

              <div>
                <div class="col-md-6 col-sm-12">
				<div class="mdl-textfield mdl-js-textfield">
                  <label class = "mdl-textfield__label" for="exampleInputEmail1">Phone Number</label>
                  <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Phone Number" name="hotel_phone_no" required>
                </div>
                </div>
                <div class="col-md-6 col-sm-12 ">
				<div class="mdl-textfield mdl-js-textfield">
                  <label class = "mdl-textfield__label" for="exampleInputEmail1"> Email</label>
                  <input type="email" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter EmailId" name="hotel_email" required>
                </div>
                </div>
              </div>

              <div>
                <div class="col-md-6 col-sm-12">
				<div class="mdl-textfield mdl-js-textfield">
                  <label class = "mdl-textfield__label" for="exampleInputEmail1" >Hotel Vendor Name</label>
                  <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Vendor Name" name="vendor_name" required> -->
                  <select class = "mdl-textfield__input" name="vendor_name" style='height:40px' required>
                    <?php
                    foreach ($vendors as $row) {
                      ?>
                    <option value="<?php echo $row['login_id']; ?>">
                      <?php echo $row['name']; ?>
                    </option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                </div>
                <div class="col-md-6 col-sm-12">
				<div class="mdl-textfield mdl-js-textfield">
                  <label class = "mdl-textfield__label" for="exampleInputEmail1"> Amenities</label>
                  <select class = "mdl-textfield__input" name="amenities[]" id="amenities1" multiple required>


                    <?php
            foreach ($amenities as $row) {
              ?>
                    <option value="<?php echo $row['id']; ?>" >
                      <?php echo $row['name']; ?></option>
                    
                    <?php
            }
            ?>
                  </select>
                </div>
                </div>
              </div>
              <div align='right'>
                <!-- <button type='submit' name='' onClick="nextButton()" class='btn btn-success'>Next</button> -->
              </div>

              <!-- <button  id="tab2default" class="btn btn-default pull-right">Next</button> -->
            </div>
            <div class="tab-pane fade" id="tab2default">
			<div>	
				<div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Account Number</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Account Number" name="hotel_acc_no"  required>
              </div>
              </div>
			  
			  <!-- <div class="form-group">
                                            <label for="simpleFormEmail">Email address</label>
                                            <input type="email" class="form-control" id="simpleFormEmail" placeholder="Enter email address" required>
                                        </div>
              </div> -->
			  <div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">IFSC code</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter IFSC code" name="hotel_ifsc_code" required>
              </div>
              </div>
			</div> 
			<div>
				<div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Full Name</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Full Name" name="fullname"  required>
              </div>
              </div>
			  <div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Branch</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="Enter Branch" name="acc_branch" required>
              </div>
              </div>

              <div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">GST Number</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="GST Number" name="gst_no"  required>
              </div>
              </div>

              <div class='col-md-6'>
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Pan Number</label>
                <input type="text" class = "mdl-textfield__input" id="exampleInputEmail1" placeholder="PAN Number" name="pan_no"  required>
              </div>
              </div>

			</div>
            </div>
            <!--   <div class="tab-pane fade" id="tab4default">
                            <div class="form-group">
                <label for="exampleInputEmail1">Latitude</label>
                <input type="text" class="form-control" id="latitude" placeholder="Enter Latitude" name="hotel_latitude" required>
              </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Longitude</label>
                <input type="text" class="form-control" id="longitude" placeholder="Enter Longitude" name="hotel_longitude" required>
              </div>
            <iframe id="someFrame" scrolling="yes" frameborder="0"></iframe>
              <div id="map_canvas"></div> 
                        </div> -->
            <!-- <div class="tab-pane fade" id="tab5default"> -->
            <!-- <div class="form-group"> -->
            <!-- <label for="exampleInputEmail1">Gallery</label> -->
            <!-- <input type="file" class="form-control" id="exampleInputEmail1"  name="hotel_gallery[]" required multiple> -->
            <!-- </div> -->
            <!-- </div> -->
            <div class="tab-pane fade" id="tab6default">
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Hotel Policy</label>
                <textarea type="text" class = "mdl-textfield__input" id="exampleInputEmail1" name="hotel_policy" required></textarea>
              </div>
            </div>
            <div class="tab-pane fade" id="tab7default">
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Cancellation Policy</label>
                <textarea type="text" class = "mdl-textfield__input" id="exampleInputEmail1" name="hotel_cancel_policy" >This input is removed.</textarea>
              </div>
            </div>

            <div class="tab-pane fade" id="tab8default">
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Pay at hotel setting </label>
                <br/> On
                <input type="radio" name="pay_at_hotel" value="on" /> Off
                <input type="radio" name="pay_at_hotel" value="off" style="margin-left:20px;"  />

              </div>

            </div>
            <div class="tab-pane fade" id="tab9default">
              <div class="mdl-textfield mdl-js-textfield">
               <input type="file" name="hotel_gallery[]" id="hotel_gallery" multiple required>
               <button type="submit" class="btn btn-default pull-right" onclick=" return validation()">Submit</button>
              </div>

            </div>
            <!-- <div class="tab-pane fade" id="tab10default">
              <div class="mdl-textfield mdl-js-textfield">
                <label class = "mdl-textfield__label" for="exampleInputEmail1">Taxes</label>
                <table class="table-sort" id="tab_logic">
                  <thead>
                    <tr>
                      <th class="text-center">
                        Tax Name
                      </th>
                      <th class="text-center">
                        How Much
                      </th>
                      <th class="text-center">
                        Tax Type
                      </th>

                      <th class="text-center">
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr id='addr0' data-id="0">
                      <td data-name="min">
                        <input type="text" name="min0" class = "mdl-textfield__input" placeholder="Enter Tax Name" style="width:200px;border-radius:5px;margin:5px;">

                      </td>

                      <td data-name="max">
                        <input type="text" name='max0' placeholder='Enter How much it is' class = "mdl-textfield__input" style="width:200px;border-radius:5px;margin:5px;"
                        />
                      </td>
                      <td data-name="tax">
                        <select name='tax0' class = "mdl-textfield__input" style="width:200px;border-radius:5px;margin:5px;">
                          <option value="Percentage">Percentage</option>
                          <option value="Rupees">Rupees</option>

                        </select>
                      </td>
                      <td data-name="del">
                        <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <input type="hidden" id="tid" name="tid" />
              <br/>
              <a id="add_row" class="btn btn-default pull-left">Add Row</a> -->





              <!-- <button type="submit" class="btn btn-default pull-right" onclick=" return validation()">Submit</button> -->
      </form>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>







<script>

  $("#add_row").on("click", function () {
    // Dynamic Rows Code

    // Get max row id and set new id
    var newid = 0;
    $.each($("#tab_logic tr"), function () {
      if (parseInt($(this).data("id")) > newid) {
        newid = parseInt($(this).data("id"));
      }
    });
    newid++;
    document.getElementById("tid").value = newid;
    var tr = $("<tr></tr>", {
      id: "addr" + newid,
      "data-id": newid
    });

    // loop through each td and create new elements with name of newid
    $.each($("#tab_logic tbody tr:nth(0) td"), function () {
      var cur_td = $(this);

      var children = cur_td.children();

      // add new td and element if it has a nane
      if ($(this).data("name") != undefined) {
        var td = $("<td></td>", {
          "data-name": $(cur_td).data("name")
        });

        var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
        c.attr("name", $(cur_td).data("name") + newid);
        c.appendTo($(td));
        td.appendTo($(tr));
      } else {
        var td = $("<td></td>", {
          'text': $('#tab_logic tr').length
        }).appendTo($(tr));
      }
    });

    // add delete button and td
    /*
    $("<td></td>").append(
        $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
            .click(function() {
                $(this).closest("tr").remove();
            })
    ).appendTo($(tr));
    */

    // add the new row
    $(tr).appendTo($('#tab_logic'));

    $(tr).find("td button.row-remove").on("click", function () {
      $(this).closest("tr").remove();
      var count = document.getElementById("tid").value = newid;
      count--;
      var count = document.getElementById("tid").value = count;
      console.log(count);

    });
  });





</script>
<!-- <script>
    function initialize() {
      var myLatlng = new google.maps.LatLng(-34.397, 150.644);
      var myOptions = {
        zoom: 8,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    }

    function loadScript() {
      var script = document.createElement("script");
      script.type = "text/javascript";
      script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize";
      document.body.appendChild(script);
    }

    window.onload = loadScript;


</script> -->



<!-- <script type="text/javascript" language="JavaScript"> -->
<!-- function nextButton() -->
<!-- { -->

<!-- window.location = '#tab2default' -->

<!-- } -->
<!-- </script> -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmYnKoybO6vKWaZPjC1lbNVH41TgBARLc&callback=initMap" ></script> -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHo6MdRtrfCpemqwhisVn_iRE3CEKOiOQ&callback=initMap" ></script>

<script type="text/javascript">
  var geocoder;
  var map;
  var marker;

  /*
   * Google Map with marker
   */
  function initialize() {
    var initialLat = $('#search_latitude').text();
    var initialLong = $('#search_longitude').text();
    initialLat = initialLat ? initialLat : 36.169648;
    initialLong = initialLong ? initialLong : -115.141000;

    var latlng = new google.maps.LatLng(initialLat, initialLong);
    var options = {
      zoom: 16,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("geomap"), options);

    geocoder = new google.maps.Geocoder();

    marker = new google.maps.Marker({
      map: map,
      draggable: true,
      position: latlng
    });

    google.maps.event.addListener(marker, "dragend", function () {
      var point = marker.getPosition();
      map.panTo(point);
      geocoder.geocode({ 'latLng': marker.getPosition() }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          map.setCenter(results[0].geometry.location);
          marker.setPosition(results[0].geometry.location);
          $('#search_addr').text(results[0].formatted_address);
          $('#search_latitude').text(marker.getPosition().lat());
          $('#search_longitude').text(marker.getPosition().lng());

        }
      });
    });

  }

  //google.maps.event.addDomListener(window, 'load', initialize);

  $(document).ready(function () {
    //load google map
    initialize();

    /*
     * autocomplete location search
     */
    var PostCodeid = '#search_location';
    $(function () {
      $(PostCodeid).autocomplete({
        source: function (request, response) {
          geocoder.geocode({
            'address': request.term,
            /*componentRestrictions: {country: "us"}*/
          }, function (results, status) {
            response($.map(results, function (item) {
              return {
                label: item.formatted_address,
                value: item.formatted_address,
                lat: item.geometry.location.lat(),
                lon: item.geometry.location.lng()
              };
            }));
          });
        },
        select: function (event, ui) {
          $('#search_addr').text(ui.item.value);
          $('#search_latitude').text(ui.item.lat);
          $('#search_longitude').text(ui.item.lon);


          var latlng = new google.maps.LatLng(ui.item.lat, ui.item.lon);
          marker.setPosition(latlng);
          initialize();
        }
      });
    });

    /*
     * Point location on google map
     */
    $('.get_map').click(function (e) {
      var address = $(PostCodeid).val(); 
      geocoder.geocode({ 'address': address }, function (results, status) {
      	console.log(status);
        if (status == google.maps.GeocoderStatus.OK) {
          map.setCenter(results[0].geometry.location);
          marker.setPosition(results[0].geometry.location);
          $('#search_addr').text(results[0].formatted_address);
          $('#search_latitude').text(marker.getPosition().lat());
          $('#search_longitude').text(marker.getPosition().lng());
        } else {
          alert("Geocode was not successful for the following reason: " + status);
        }
      });
      e.preventDefault();
    });

    //Add listener to marker for reverse geocoding
    google.maps.event.addListener(marker, 'drag', function () {
      geocoder.geocode({ 'latLng': marker.getPosition() }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[0]) {
            $('#search_addr').text(results[0].formatted_address);
            $('#search_latitude').text(marker.getPosition().lat());
            $('#search_longitude').text(marker.getPosition().lng());
          }
        }
      });
    });
  });

</script>
<script>
function validation()
{
  
 if(document.myform.hotel_name.value == ""){   //checking if the form is empty
       alert("Please fill hotel name");
       return false;
    }
    if(document.myform.hotel_pic.value == ""){   //checking if the form is empty
       alert("Please fill hotel image");
       return false;
    }
    if(document.myform.hotel_grade.value == ""){   //checking if the form is empty
       alert("Please fill hotel grade");
       return false;
    }
    if(document.myform.total_rooms.value == ""){   //checking if the form is empty
       alert("Please fill total rooms");
       return false;
    }
    if(document.myform.location.value == ""){   //checking if the form is empty
       alert("Please fill hotel location");
       return false;
    }
     if(document.myform.area.value == ""){   //checking if the form is empty
       alert("Please fill hotel area");
       return false;
    }
     if(document.myform.searchlocation.value == ""){   //checking if the form is empty
       alert("Please mark hotel address in map");
       return false;
    }
    if(document.myform.hotel_phone_no.value == ""){   //checking if the form is empty
       alert("Please fill hotel phone number");
       return false;
    }
    if(document.myform.hotel_email.value == ""){   //checking if the form is empty
       alert("Please fill hotel email");
       return false;
    }
    if(document.myform.vendor_name.value == ""){   //checking if the form is empty
       alert("Please fill vendor name");
       return false;
    }
    if(document.getElementById('amenities1').value == ""){   //checking if the form is empty
       alert("Please select amenities");
       return false;
    }
    
    if(document.myform.hotel_acc_no.value == ""){   //checking if the form is empty
       alert("Please fill account number");
       return false;
    }
    if(document.myform.hotel_ifsc_code.value == ""){   //checking if the form is empty
       alert("Please fill ifsc code");
       return false;
    }
    if(document.myform.fullname.value == ""){   //checking if the form is empty
       alert("Please fill fullname");
       return false;
    }
    if(document.myform.acc_branch.value == ""){   //checking if the form is empty
       alert("Please fill branch");
       return false;
    }
    if(document.myform.hotel_policy.value == ""){   //checking if the form is empty
       alert("Please fill hotel policy");
       return false;
    }
    if(document.myform.hotel_cancel_policy.value == ""){   //checking if the form is empty
       alert("Please fill hotel cancellation policy");
       return false;
    }
    if(document.myform.pay_at_hotel.value == ""){   //checking if the form is empty
       alert("Please fill pay at hotel option");
       return false;
    }
      if(document.getElementById('hotel_gallery').value == ""){   //checking if the form is empty
       alert("Please select hotel galley");
       return false;
    }
}
</script>