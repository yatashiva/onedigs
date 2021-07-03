<style>
    .btn.btn-default {
    
    margin-top: 20px;
}
</style>

	<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
							    <div class="row">
							          <div class="col-xl-12">
							        <div class="card card-custom card-stretch gutter-b">
											<div class="card-header">
												<h3 class="card-title">Add Hotel</h3>
												
											</div>
							        
							        <form class="form" action="<?php echo base_url();?>index.php/hotel/add" method="POST" enctype="multipart/form-data" name="myform">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Hotel Name</label>
   <input type="text" name="hotel_name" required class="form-control" placeholder="Enter Hotel Name"/>
   
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Hotel Image</label>
   <input type="file" class="form-control" name="hotel_pic" required/>
   
  </div> 
                    </div>
                </div>
  <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Hotel Grade</label>
    <select class = "form-control" name="hotel_grade" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Total Rooms</label>
   <input type="text" class="form-control" placeholder="Enter Total rooms" name="total_rooms" required/>
   
  </div> 
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
   <label>Top Hotel</label><br>
    Yes  <input type="radio" name="top_hotel" value = "yes" style="margin-right:20px;" />  
                  No   <input type="radio" name="top_hotel" value="no" style="margin-right:20px;"  />
  </div> 
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
   <label>City</label>
   <input type="text" name="location" required class="form-control" placeholder="Enter City"/>
   
  </div> 
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
   <label>Hotel Area</label>
   <input type="text" class="form-control" placeholder="Enter Area" name="area" required/>
   
  </div> 
                    </div>
                </div>
<div class="form-group">

                <input type="hidden" class="form-control" id="latitude" name="hotel_latitude" required>
              </div>
              <div class="form-group">

                <input type="hidden" class="form-control" id="longitude" name="hotel_longitude" required>
                 <input type="hidden" class="form-control" id="address" name="hotel_address" required>
              </div>
  <div class="separator separator-dashed my-5"></div>
<div class="row">
    <div class="col-md-8">
       <div class="form-group">
   <label>Search Location</label>
   <input type="text" class="form-control"  id="search_location" placeholder="Search location" name="searchlocation" required/>
   
  </div> 
    </div>
    <div class="col-md-4">
        <div class="form-group">
         <button id="aaaa" class="btn btn-default get_map" type="button">
                            Locate
                          </button>
                          </div>
    </div>
</div>
  
 <div id="geomap"></div>
  <div class="separator separator-dashed my-5"></div>

   <h6>Location Details</h6>


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


 
 <div class="card-footer">
  <button type="reset" class="btn btn-primary mr-2">Submit</button>
  <button type="reset" class="btn btn-secondary">Cancel</button>
 </div>
 </div>
</form>
							        </div>
							        </div>
							        </div>
							        </div>
							        </div>
							        
							        
							        
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
							        