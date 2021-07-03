<style>
    .wrapper {
        position: relative;
        margin: 0 auto;
        overflow: hidden;
        padding: 5px;
        height: 50px;
    }

    .list {
        position: absolute;
        left: 0px;
        top: 0px;
        min-width: 3000px;
        margin-left: 12px;
        margin-top: 0px;
    }

    .list li {

        position: relative;
        text-align: center;
        cursor: grab;
        cursor: -webkit-grab;
        color: #efefef;
        vertical-align: middle;
    }

    .scroller {
        text-align: center;
        cursor: pointer;

        padding: 7px;
        padding-top: 11px;
        white-space: no-wrap;
        vertical-align: middle;
        background-color: #fff;
    }

    .scroller-left {
        display: inline;
        float: left;
        color: #79e6ff;
    }

    .scroller-right {
        float: right;
        color: #79e6ff;
    }
</style>


<?php include("header.php"); ?>
  

<div class="container">
    <?php
        
        foreach ($hotels as $hotels)

        {
            ?>
    <div class="row" style="padding-top: 2%;padding-bottom: 2%;">
        <div class="col-md-6">
            <span style="font-size: 20px !important;font-weight: 400">
                <?php  echo $hotels['hotel_name']; ?>
            </span>
            <span style="color:#f5a623;">
                <?php
                        for($i=1; $i<=$hotels['hotel_grade']; $i++)
                            {
                                ?>
                <i class="fa fa-star"></i>
                <?php
                            }
                                ?> </span> &nbsp;&nbsp;&nbsp;
            <br>
            <span style="font-size: 14px;color:grey;">
                <?php echo $hotels['hotel_address']; ?>
            </span>
        </div>

        <div class="col-md-1">

        </div>
        <div class="col-md-5 float-right" style="padding-top: 2%;">

            <div class="col-md-6 " style="border-right:1px solid lightgray;">
                <span style="font-size: 14px;margin-top: 20px;">
                    <?php echo $daterange; ?> </span>
                <span style="font-size: 12px;"></span>
            </div>
            <div class="col-md-6 ">

                <span style="font-size: 14px;margin-top: 20px;">
                    <?php echo $rooms; ?> Rooms - <?php echo $adults; ?> Adults- <?php echo $children; ?> Children
                </span>
            </div>
        </div>


    </div>
    <div class="row" style="padding-top: 2%;">
        <div class="col-md-6">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php 
                      $i= 0;
                      foreach ($gal as $key){ ?>
                    <li data-target="#myCarousel" data-slide-to=< ?php echo $i ?>></li>
                    <?php
                        $i++;
                    } ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <?php 
                            $j=0;
                            foreach ($gal as $gal ){ 
                                if($j==0){
                                ?>

                    <div class="item active">
                        <?php }else{?>
                        <div class="item">

                            <?php  } ?>
                            <img src="<?php echo base_url(); ?>gallery/<?php echo $gal['hotel_id'].'/commonfiles'.'/'.$gal['gallery']?>" style="width:555px; height:319px;"
                                alt="Los Angeles">
                        </div>
                        <?php  $j++; } ?>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>

            </div>
 <?php
                        if(!empty($categories))
                        {
                            ?>
            <div class="col-md-6">

                <div class="row" style="padding-top:3%">
                    <div class="col-md-12">

                        <div>
                            <div>
                                <div class="scroller scroller-left">
                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                </div>
                                <div class="scroller scroller-right">
                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                </div>


                                <!-- <svg style="position: absolute;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> -->
                                <!-- <defs> -->
                                <!-- <symbol id="icon-point-left" viewBox="0 0 1792 1792"> -->
                                <!-- <title>point-left</title> -->
                                <!-- <path style='font-size:2px;width:2px' d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z"></path> -->
                                <!-- </symbol> -->
                                <!-- <symbol  id="icon-point-right" viewBox="0 0 1792 1792"> -->
                                <!-- <title>point-right</title> -->

                                <!-- <path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z"></path> -->
                                <!-- </symbol> -->
                                <!-- </defs> -->
                                <!-- </svg> -->

                                <!-- Nav tabs -->
                             
                          <div class='wrapper'>
                       

                                    <ul class="nav nav-tabs list" id="myTab" role="tablist" style='border-bottom: 0px !important;'>
                                        <?php
                                         
$x=1;
foreach ($categories as $category=> $value)
{
    if($x==1)
    {
    ?>


                                        <li role="presentation" class="active">
                                            <a href="#tab1" role="tab" data-toggle="tab" style='height: 40px;padding-top: 5px;'>
                                                <h5 class="text-center" style='font-size:15px;'>
                                                    <?php echo $category; ?>
                                                </h5>

                                            </a>
                                        </li>
                                        <?php
                                                }
                                                else
                                                {
                                                ?>
                                        <li role="presentation">
                                            <a href="#tab<?php echo $x; ?>" role="tab" data-toggle="tab" style='height: 40px;padding-top: 5px;'>
                                                <h5 class="text-center" style='font-size:15px;'>
                                                    <?php echo $category; ?>
                                                </h5>

                                            </a>
                                        </li>
                                        <!-- <li role="presentation">
                                                <a href="#tab<?php echo $x; ?>" role="tab" data-toggle="tab" style='height: 40px;padding-top: 5px;'>
                                                        <h5 class="text-center" style='font-size:15px;'><?php echo $category; ?></h5>
                                                       
                                                </a>
                                                  </li>
												  <li role="presentation">
                                                <a href="#tab<?php echo $x; ?>" role="tab" data-toggle="tab" style='height: 40px;padding-top: 5px;'>
                                                        <h5 class="text-center" style='font-size:15px;'><?php echo $category; ?></h5>
                                                       
                                                </a>
                                                  </li> -->
                                        <?php
                                                  }
                                                  $x++;
                                                  }
                                                  ?>



                                    </ul>
                                </div>
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <?php
                        
$x=1;
foreach ($categories as $category)
{
 
        if($x==1) { 
            
            ?>
                                <div role="tabpanel" class="tab-pane active" id="tab1">
                                <?php foreach($category as $cat ){ ?>
                                    <div class="row" style="padding-top:3%">
                                        <div class="col-md-8">

                                            <?php if(array_key_exists("sub_category_id",$cat)) { ?>
                                            <input type="radio" name="room" data-href="<?php echo base_url(); ?>index.php/reservation/add/<?php echo $hotels['id']; ?>/<?php echo $cat['category_id']; ?>/<?php echo $daterange; ?>/<?php echo $rooms; ?>/<?php echo $adults; ?>/<?php echo $children; ?>/<?php echo $cat['sub_category_id']; ?>">
                                            <span style="font-size: 18px !important;">
                                                <?php echo $cat['category_name'].'-'.$cat['sub_name']; ?> Room</span>
                                            <br>
                                            <?php }else{ ?>
                                            <input type="radio" name="room" data-href="<?php echo base_url(); ?>index.php/reservation/add/<?php echo $hotels['id']; ?>/<?php echo $cat['category_id']; ?>/<?php echo $daterange; ?>/<?php echo $rooms; ?>/<?php echo $adults; ?>/<?php echo $children; ?>">
                                            <span style="font-size: 18px !important;">
                                                <?php echo $cat['category_name']; ?> Room</span>
                                            <br>
                                            <?php  } ?>
                                            <span style="font-size: 14px;color:grey;">
                                                <?php
                                        $category1=explode(',',$cat['amenities']);
                                     
                                       foreach($amenities as $amenity)
                                        {

                                       for($i=0; $i< count($category1); $i++)
                                       {
                                    
                                            if($amenity['id']== str_replace(' ', '',$category1[$i]))
                                            {
                                               
                                                echo $amenity['name'].',';
                                        }
                                       }
                                   }
                                   ?>
                                                <a style="color:#0073cf" href="#">More</a>
                                            </span>
                                        </div>
                                        <div class="col-md-4 " style="margin-top: 2%;">
                                            <span style="font-size: 18px !important;"> From &#8377;
                                                <?php echo number_format($cat['price'],2); ?>
                                            </span> &nbsp;&nbsp;&nbsp;
                                        </div>
                                    </div>
                                    <div class="row" style="padding: 20px 0px;">

                                        <div class="col-md-3 ">
                                            <strike>
                                                <span style="font-size: 16px;color: grey;">₹
                                                    <?php echo number_format($cat['base_price'],2); ?> </span>
                                            </strike>
                                            <br>
                                            <span style="font-size: 12px;">Per Room/Night</span>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>



                                <?php
                        }
                            else
                            {
                                

    ?>
                                <div role="tabpanel" class="tab-pane" id="tab<?php echo $x; ?>">
                                <?php foreach($category as $cat ){ ?>
                                    <div class="row" style="padding-top:3%;">
                                        <div class="col-md-8">
                                            <?php if(array_key_exists("sub_category_id",$cat)) { ?>
                                            <input type="radio" name="room" data-href="<?php echo base_url(); ?>index.php/reservation/add/<?php echo $hotels['id']; ?>/<?php echo $cat['category_id']; ?>/<?php echo $daterange; ?>/<?php echo $rooms; ?>/<?php echo $adults; ?>/<?php echo $children; ?>/<?php echo $cat['sub_category_id']; ?>">
                                            <span style="font-size: 18px !important;">
                                                <?php echo $cat['category_name'].''.$cat['sub_name']; ?> Room</span>
                                            <br>
                                            <?php }else{ ?>
                                            <input type="radio" name="room" data-href="<?php echo base_url(); ?>index.php/reservation/add/<?php echo $hotels['id']; ?>/<?php echo $cat['category_id']; ?>/<?php echo $daterange; ?>/<?php echo $rooms; ?>/<?php echo $adults; ?>/<?php echo $children; ?>">
                                            <span style="font-size: 18px !important;">
                                                <?php echo $cat['category_name']; ?> Room</span>
                                            <br>
                                            <?php  } ?>
                                            <span style="font-size: 14px;color:grey;">
                                                <?php
                                        $category1=explode(',',$cat['amenities']);
                                     
                                       foreach($amenities as $amenity)
                                        {

                                       for($i=0; $i< count($category1); $i++)
                                       {
                                    
                                            if($amenity['id']== str_replace(' ', '',$category1[$i]))
                                            {
                                               
                                                echo $amenity['name'];
                                        }
                                       }
                                   }
                                   ?>
                                                <a style="color:#0073cf" href="#">More</a>
                                            </span>
                                        </div>
                                        <div class="col-md-4" style="margin-top: 2%;">
                                            <span style="font-size: 18px !important;"> From &#8377;
                                                <?php echo number_format($cat['price'],2); ?>
                                            </span> &nbsp;&nbsp;&nbsp;
                                        </div>
                                    </div>
                                    <div class="row" style="padding: 20px 0px;">

                                        <div class="col-md-3 ">
                                            <strike>
                                                <span style="font-size: 16px;color: grey;">₹
                                                    <?php echo number_format($cat['base_price'],2); ?> </span>
                                            </strike>
                                            <br>
                                            <span style="font-size: 12px;">Per Room/Night</span>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                        
                                    </div>
                                    <?php } ?>
                                </div>
                                <?php
                        } 
                            $x++;
                            }
                            ?>
                            <div class="col-md-3  float-right">

                                    <button  class="Continue" style="padding: 10px 20px;background-color:#8dc53f;color: white;border: 1px solid #8dc53f;border-radius: 5px;" >Continue</button>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
       
    </div>

    <hr>
    <div class='container'>
        <div class="row" style='margin-bottom:5px'>

            <div class="col-md-6" style="border-right: 1px solid lightgray;">

                <h5> Ratings </h5>
                <br>

                <div class="row">
                    <div class="col-md-2">
                        <p style="font-size:14px;"> Poor</p>

                    </div>
                    <div class="col-md-5">
                        <div class="progress" style="height:10px !important;background-color: transparent;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p>3</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <p style="font-size:14px;"> Excellent</p>

                    </div>
                    <div class="col-md-5">
                        <div class="progress" style="height:10px !important;background-color: transparent;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p>3</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <p style="font-size:14px;"> Poor</p>

                    </div>
                    <div class="col-md-5">
                        <div class="progress" style="height:10px !important;background-color: transparent;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p>3</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <p style="font-size:14px;"> Excellent</p>

                    </div>
                    <div class="col-md-5">
                        <div class="progress" style="height:10px !important;background-color: transparent;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p>3</p>
                    </div>
                </div>
                <?php
                        if(empty($reviews))
                        {
                            echo "No Reviews Found";
                        }
                        else
                        {
                            foreach($reviews as $review)
                            {
                            ?>

                <!--   <div class="row">
                      
                            <div class="col-md-2">
                                <P style="font-size:14px;"> <?php echo $review['review']; ?></P>
                            
                            </div>
                            <div class="col-md-5">
                                <div class="progress" style="height:10px !important;background-color: transparent;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $review['ratings']*100/5; ?>" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <p><?php echo $review['ratings']; ?></p>
                            </div>
							
                         </div> -->





                <?php
}
}
?>
                <br/>

                <div class="btn6" style='margin-bottom:10px;padding-top:10px'>
                    <span style="  font-size: 12px;  padding: 4px  7px !important;border: 1px solid #ebebeb !important;border-radius: 5px;">Couples</span>
                    <span style="  font-size: 12px;  padding: 4px  7px !important;border: 1px solid #ebebeb !important;border-radius: 5px;">Solo Travel</span>
                    <span style="  font-size: 12px;  padding: 4px  7px !important;border: 1px solid #ebebeb !important;border-radius: 5px;">Family</span>
                </div>
                <?php
                             foreach($cord as $cord)
                             {
                              ?>
                <iframe src="http://maps.google.com/?q=<?php echo $cord['latitude']; ?>,<?php echo $cord['longitude']; ?>&output=embed" id="someFrame"
                    scrolling="yes" frameborder="0" width="500" height="100"></iframe>
                <?php
                            }
                            ?>
                <?php
                            $address=explode(',', $hotels['hotel_address']);
                            $address=implode('+',$address);
                            ?>
                <div class='col-md-8 col-md-offset-1' align='center'>
                    <button type='submit' class='btn btn-success' style='border-radius:10px;margin:10px'>
                        <a itemProp='URL' class='direction-link' target='_blank' href='http://maps.google.com/maps?saddr=Current+Location&daddr=<?php echo $address; ?>'
                            style='text-decoration:none;color:white;'>Directions</a>
                    </button>
                </div>
            </div>

            <div class="col-md-6">
                <h5> Hotel Amenities </h5>
                <br>
                <div class="col-md-12">


                    <!-- <div class="col-md-4" style="padding: 10px 20px;" > -->
                    <?php
                                       $hotel=explode(',',$hotels['amenities']);
                                     
                                       foreach($amenities as $amenity)
                                        {

                                       for($i=0; $i< count($hotel); $i++)
                                       {
                                    
                                            if($amenity['id']== str_replace(' ', '',$hotel[$i]))
                                            {
                                               
                                     ?>
                    <div class="col-md-4" style="margin:1% 0px;">
                        <i class="<?php echo $amenity['icon']; ?>"></i>
                        <span style="font-size: 14px;padding-left:5px;">
                            <?php  echo $amenity['name']; ?>
                        </span>
                    </div>
                    <?php
                                      }
                                       }
                                   }
                                   ?>

                    <!-- </div> -->
                </div>

                <div class="col-md-12">
                    <p>Booking Policy</p>
                    <p style="font-size:12px;">Check-in Time is 12:00 pm,
                        <br>Check-out Time is 11:00 am.</p>
                    <p style="font-size:12px;"> Your booking might be declined basis 'not having valid proof of marriage for couple stay' or 'having
                        same city ID proof' as per hotels guidelines</p>

                </div>




            </div>

        </div>

    </div>


    <?php
}


}


?>
<?php
if(empty($categories))
{
    echo "<h2 class='text-center'>No rooms Available</h2>";

}
?>
</div>



<?php 
include("footer.php"); 


?>
<!-- wow Animation -->
<script src="<?php echo base_url(); ?>assets/frontend/js/wow.min.js"></script>
<!--Activating WOW Animation only for modern browser-->
<!--[if !IE]><!-->
<script type="text/javascript">new WOW().init();</script>
<!--<![endif]-->


<!-- my js -->
<script src="<?php echo base_url(); ?>assets/frontend/js/main.js"></script>

<script src="<?php echo base_url(); ?>assets/frontend/jquery.scrolling-tabs.js"></script>

<script src="<?php echo base_url(); ?>assets/frontend/st-demo.js"></script>

<script>
    $('.continue').click(function(){
        var radioValue = $("input[name='room']:checked").attr("data-href");
        $(location).attr('href', radioValue);
        // window.location.href(radioValue);
    }); 
    var latitude = <?php echo $cord['latitude']; ?>;
    var longitude = <?php echo $cord['longitude']; ?>

    var myLatlng = new google.maps.LatLng(latitude,longitude);

    function initialize() {

        var mapProp = {
            center: myLatlng,
            zoom: 12,
            mapTypeId: google.maps.mapTypeId.ROADMAP
        };
        var maker = new goole.maps.Maker({
            position: myLatlng
        })
        var map = new google.maps.Map(document.getElementById('map'),
        maker
		);

        maker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);



</script>




<script>
    var hidWidth;
    var scrollBarWidths = 40;

    var widthOfList = function () {
        var itemsWidth = 0;
        $('.list li').each(function () {
            var itemWidth = $(this).outerWidth();
            itemsWidth += itemWidth;
        });
        return itemsWidth;
    };

    var widthOfHidden = function () {
        return (($('.wrapper').outerWidth()) - widthOfList() - getLeftPosi()) - scrollBarWidths;
    };

    var getLeftPosi = function () {
        return $('.list').position().left;
    };

    var reAdjust = function () {
        if (($('.wrapper').outerWidth()) < widthOfList()) {
            $('.scroller-right').show();
            $('.scroller-left').show();
        }
        else {
            $('.scroller-left').show();
            $('.scroller-right').show();
        }

        if (getLeftPosi() < 0) {
            $('.scroller-left').show();
            $('.scroller-right').show();
        }
        else {
            $('.item').animate({ left: "-=" + getLeftPosi() + "px" }, 'slower');
            $('.scroller-left').show();
            $('.scroller-right').show();
        }
    }

    reAdjust();

    $(window).on('resize', function (e) {
        reAdjust();
    });

    $('.scroller-right').click(function () {

        $('.scroller-left').fadeIn('slower');
        $('.scroller-right').fadeOut('slower');

        $('.list').animate({ left: "+=" + widthOfHidden() + "px" }, 'slower', function () {

        });
    });

    $('.scroller-left').click(function () {

        $('.scroller-right').fadeIn('slower');
        $('.scroller-left').fadeOut('slower');

        $('.list').animate({ left: "-=" + getLeftPosi() + "px" }, 'slower', function () {

        });
    });   

    
</script>

</body>

</html>