<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">


    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />

<style>
	.wizard,
.tabcontrol {
	display: block;
	width: 100%;
	overflow: hidden;
}

.wizard a,
.tabcontrol a {
	outline: 0;
}

.wizard ul,
.tabcontrol ul {
	list-style: none !important;
	padding: 0;
	margin: 0;
}

.wizard ul > li, .tabcontrol ul > li {
	display: block;
	padding: 0;
}

/* Accessibility */
.wizard > .steps .current-info,
.tabcontrol > .steps .current-info,
.wizard > .content > .title,
.tabcontrol > .content > .title {
	position: absolute;
	left: -999em;
}

.wizard > .steps {
	position: relative;
	display: block;
	width: 100%;
}

.wizard.vertical > .steps {
	float: left;
	width: 30%;
}

.wizard.vertical > .steps > ul > li {
	float: none;
	width: 100%;
}

.wizard.vertical > .content {
	float: left;
	margin: 0 0 0.5em 0;
	width: 70%;
}

.wizard.vertical > .actions {
	float: right;
	width: 100%;
}

.wizard.vertical > .actions > ul > li {
	margin: 0 0 0 1em;
}

.wizard > .steps .number {
	font-size: 1.429em;
}

.wizard > .steps > ul > li {
	width: 25%;
	float: left;
}

.wizard > .actions > ul > li {
	float: left;
}

.wizard > .steps a {
	display: block;
	width: auto;
	margin: 0 0.5em 0.5em;
	padding: 1em 1em;
	text-decoration: none;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}

.wizard > .steps a:hover, .wizard > .steps a:active {
	display: block;
	width: auto;
	margin: 0 0.5em 0.5em;
	padding: 1em 1em;
	text-decoration: none;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}

.wizard > .steps .disabled a {
	background: #eee;
	color: #aaa;
	cursor: default;
}

.wizard > .steps .disabled a:hover, .wizard > .steps .disabled a:active {
	background: #eee;
	color: #aaa;
	cursor: default;
}

.wizard > .steps .current a {
	background: #2184be;
	color: #fff;
	cursor: default;
}

.wizard > .steps .current a:hover, .wizard > .steps .current a:active {
	background: #2184be;
	color: #fff;
	cursor: default;
}

.wizard > .steps .done a {
	background: #9dc8e2;
	color: #fff;
}

.wizard > .steps .done a:hover, .wizard > .steps .done a:active {
	background: #9dc8e2;
	color: #fff;
}

.wizard > .steps .error a {
	background: #ff3111;
	color: #fff;
}

.wizard > .steps .error a:hover, .wizard > .steps .error a:active {
	background: #ff3111;
	color: #fff;
}

.wizard > .content {
	border: 1px solid #ddd;
	display: block;
	margin: 0.5em;
	min-height: 35em;
	overflow: hidden;
	position: relative;
	width: auto;
}

.wizard > .actions {
	position: relative;
	display: block;
	text-align: right;
	width: 100%;
}

.wizard > .actions > ul {
	display: inline-block;
	text-align: right;
}

.wizard > .actions > ul > li {
	margin: 0 0.5em;
}

.wizard > .actions a {
	background: #009688;
	color: #fff;
	display: block;
	padding: 0.5em 1em;
	text-decoration: none;
}

.wizard > .actions a:hover, .wizard > .actions a:active {
	background: #009688;
	color: #fff;
	display: block;
	padding: 0.5em 1em;
	text-decoration: none;
}

.wizard > .actions .disabled a {
	background: #eee;
	color: #aaa;
}

.wizard > .actions .disabled a:hover, .wizard > .actions .disabled a:active {
	background: #eee;
	color: #aaa;
}

.tabcontrol > .steps {
	position: relative;
	display: block;
	width: 100%;
}

.tabcontrol > .steps > ul {
	position: relative;
	margin: 6px 0 0 0;
	top: 1px;
	z-index: 1;
}

.tabcontrol > .steps > ul > li {
	float: left;
	margin: 5px 2px 0 0;
	padding: 1px;
	-webkit-border-top-left-radius: 5px;
	-webkit-border-top-right-radius: 5px;
	-moz-border-radius-topleft: 5px;
	-moz-border-radius-topright: 5px;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
}

.tabcontrol > .steps > ul > li:hover {
	background: #edecec;
	border: 1px solid #bbb;
	padding: 0;
}

.tabcontrol > .steps > ul > li.current {
	background: #fff;
	border: 1px solid #bbb;
	border-bottom: 0 none;
	padding: 0 0 1px 0;
	margin-top: 0;
}

.tabcontrol > .steps > ul > li.current > a {
	padding: 15px 30px 10px 30px;
}

.tabcontrol > .steps > ul > li > a {
	color: #5f5f5f;
	display: inline-block;
	border: 0 none;
	margin: 0;
	padding: 10px 30px;
	text-decoration: none;
}

.tabcontrol > .steps > ul > li > a:hover {
	text-decoration: none;
}

.tabcontrol > .content {
	position: relative;
	display: inline-block;
	width: 100%;
	height: 35em;
	overflow: hidden;
	border-top: 1px solid #bbb;
	padding-top: 20px;
}

.tabcontrol > .content > .body {
	float: left;
	position: absolute;
	width: 95%;
	height: 95%;
	padding: 2.5%;
}

.tabcontrol > .content > .body ul {
	list-style: disc !important;
}

.tabcontrol > .content > .body ul > li {
	display: list-item;
}

.wizard .content {
	min-height: 245px;
	overflow-y: auto;
}

.wizard .content .body {
	padding: 15px;
}

.wizard .steps .done a {
	background-color: rgba(0, 150, 136, 0.6);
}

.wizard .steps .done a:hover, .wizard .steps .done a:active, .wizard .steps .done a:focus {
	background-color: rgba(0, 150, 136, 0.5);
}

.wizard .steps .error a {
	background-color: #F44336 !important;
}

.wizard .steps .current a {
	background-color: #009688;
}

.wizard .steps .current a:active, .wizard .steps .current a:focus, .wizard .steps .current a:hover {
	background-color: #009688;
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
                    	<div class="col-sm-12">
                             <div class="card-box">
                                 <div class="card-head">
                                     <header>Basic Wizard</header>
                                 </div>
                                 <div class="card-body ">
                                 	<div id="wizard" role="application" class="wizard clearfix"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="wizard-t-0" href="#wizard-h-0" aria-controls="wizard-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> First Step</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="wizard-t-1" href="#wizard-h-1" aria-controls="wizard-p-1"><span class="number">2.</span> Second Step</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="wizard-t-2" href="#wizard-h-2" aria-controls="wizard-p-2"><span class="number">3.</span> HTML code</a></li></ul></div><div class="content clearfix">
									    <h1 id="wizard-h-0" tabindex="-1" class="title current">First Step</h1>
									    <div id="wizard-p-0" role="tabpanel" aria-labelledby="wizard-h-0" class="body current" aria-hidden="false">First Content</div>
									    <h1 id="wizard-h-1" tabindex="-1" class="title">Second Step</h1>
									    <div id="wizard-p-1" role="tabpanel" aria-labelledby="wizard-h-1" class="body" aria-hidden="true" style="display: none;">Second Content</div><h1 id="wizard-h-2" tabindex="-1" class="title">HTML code</h1><div id="wizard-p-2" role="tabpanel" aria-labelledby="wizard-h-2" class="body" aria-hidden="true" style="display: none;"><strong>HTML code</strong></div>
									</div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></div>
                                 </div>
                             </div>
                         </div>
                    </div>			

 




 <!-- steps -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/steps/jquery.steps.js" ></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/steps/steps-data.js" ></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/steps/steps-data.js" ></script>




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

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAG_XxJt7OYEkXFTo9MmxC-ec73At7pwhs"></script>
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