<?php
include("header.php");
?>

<style>

 /* CLIENT-SPECIFIC STYLES */
 #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
    .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing */
    body, table, td, a{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
    table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
    img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

    /* RESET STYLES */
    body{margin:0; padding:0;}
    img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
    table{border-collapse:collapse !important;}
    body{height:100% !important; margin:0; padding:0; width:100% !important;}

    /* iOS BLUE LINKS */
    .appleBody a {color:#999999; text-decoration: none;}
    .appleFooter a {color:#999999; text-decoration: none;}

    /* MOBILE STYLES */
    @media screen { 
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600);
        }

    @media screen and (max-width: 525px) {

        /* ALLOWS FOR FLUID TABLES */
        table[class="wrapper"]{
          width:100% !important;
        }

        /* ADJUSTS LAYOUT OF LOGO IMAGE */
        td[class="logo"]{
          text-align: left;
          padding: 20px 0 0 0 !important;
        }

        td[class="logo"] img{
          margin:0 auto!important;
        }

        /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */
        td[class="mobile-hide"]{
          display:none;}

        img[class="mobile-hide"]{
          display: none !important;
        }

        img[class="img-max"]{
          max-width: 100% !important;
          height:auto !important;
        }

        /* FULL-WIDTH TABLES */
        table[class="responsive-table"]{
          width:100%!important;
        }

        /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */
        td[class="padding"]{
          padding: 10px 5% 15px 5% !important;
        }

        td[class="padding-copy"]{
          padding: 10px 5% 10px 5% !important;
          text-align: center;
        }

        td[class="padding-meta"]{
          padding: 30px 5% 0px 5% !important;
          text-align: center;
        }

        td[class="no-pad"]{
          padding: 0 0 20px 0 !important;
        }

        td[class="no-padding"]{
          padding: 0 !important;
        }

        td[class="section-padding"]{
          padding: 50px 15px 50px 15px !important;
        }

        td[class="section-padding-bottom-image"]{
          padding: 50px 15px 0 15px !important;
        }

        /* ADJUST BUTTONS ON MOBILE */
        td[class="mobile-wrapper"]{
            padding: 10px 5% 15px 5% !important;
        }

        table[class="mobile-button-container"]{
            margin:0 auto;
            width:100% !important;
        }

        a[class="mobile-button"]{
            width:80% !important;
            padding: 15px !important;
            border: 0 !important;
            font-size: 16px !important;
        }

        /* CUSTOM MQs */
        td[class="pad-header"]{
            padding: 25px 0 25px 0 !important;
        }

        td[class="pad-header-copy"]{
            padding: 0px 5% 0px 5% !important;
            text-align: center;
        }

        td[class="flex-p"]{
            font-size: 14px !important; 
            line-height: 24px !important;
            font-weight: 300 !important;
        }

        td[class="flex-p-bold"]{
            font-size: 14px !important; 
            line-height: 24px !important;
        }

        td[class="flex-room-charge"]{
            font-size: 14px !important; 
            line-height: 24px !important;
            font-weight: 600 !important;
        }

        td[class="flex-p-desc_charges"]{
            font-size: 14px !important; 
            line-height: 24px !important;
            font-weight: 300 !important;
        }

        td[class="flex-p-promotax"]{
            text-align: left !important;
            font-size: 14px !important;
            padding: 0 0 5px 0 !important;
            line-height: 18px !important;
        }

        td[class="flex-p-charges"]{
            text-align: left !important;
            font-size: 14px !important;
            padding: 0 0 5px 10px !important;
            line-height: 18px !important;
        }

        td[class="align-total-charge"]{
            text-align: left !important;
        }

    }


@media print
{
.noprnt {
    display:none;
}
.prnt {
    display:block;
}
}

@media screen
{

}

h5 {
    font-size: 20px;
    color: #131e2a;
}
	</style>



    </head>
    <body  style=" font-family: 'Nunito', sans-serif; color: #404040; -webkit-font-smoothing: auto;">
        
   <!-- start header -->
 
            <!-- end header -->


        <!-- start payment -->  
        <!-- start container -->  

        <div class="container-fluid" style="
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;">

                <div class="row" >
                    

                    <!-- HEADER -->
                    <?php
       
        // foreach ($details as $details)

        // {

            // var_dump($details);
            ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    
        <tr>
            <td bgcolor="#EBEBEB">
                <div align="center" style="padding: 0px 15px 0px 15px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="580" class="responsive-table">
                        <!-- LOGO/PREHEADER TEXT -->
                        <tr>

                        </tr>
                        <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <!-- TOP TICKER -->
                                    <tr>
                                        <td style="padding: 20px 0 0 0;" align="center">
                                            <img src="https://gallery.mailchimp.com/c6b1236c909d2d0e1b52e9f8f/images/a150d768-f865-4778-9d16-10ce88d1ee4c.png" width="580" height="6" border="0" alt="EDIT" class="img-max" style="display: block; padding: 0; font-family: Helvetica, Arial, sans-serif; color: #666666; width: 580px; height: 6px;">
                                        </td>
                                    </tr>
                                    <!-- CONFIRMATION COPY -->
                                    <tr>
                                        <td bgcolor="#43515E" style="padding: 50px 0 50px 0;" class="pad-header">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td align="center" style="font-size: 20px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #EBEBEB; font-weight: 300;" class="pad-header-copy">
                                                        Your Booking Reservation is confirmed for
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center" style="font-size: 42px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #EBEBEB; font-weight: 300;" class="pad-header-copy">
                                                        <?php echo $no_of_days; ?> Nights
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <?php
        
        // }
            ?>
    <!-- RESERVATION DETAILS -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td bgcolor="#EBEBEB" align="center" style="padding: 0 15px 0 15px;">
                <table border="0" cellpadding="0" cellspacing="0" width="580" class="responsive-table">
                    <tr>
                        <td bgcolor="#ffffff">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <!-- RESERVATION DEETS -->
                                <tr>
                                    <td style="padding: 30px 30px 0 30px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="left" style="padding: 0 0 15px 0; font-size: 20px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #43515E; font-weight: 300;">
                                                    Reservation Details
                                                </td>
                                            </tr>
                                            <!-- CHECK-IN -->
                                            <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tr>
                                                            <td valign="top" style="padding: 0 0 5px 0;">
                                                                <!-- LEFT COLUMN -->
                                                                <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                            Check-in:
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- RIGHT COLUMN -->
                                                                <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #00b1b1; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                            <?php echo date('d-m-Y',strtotime($reservationdetails['check_in'])); ?>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <!-- CHECK-OUT -->
                                            <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tr>
                                                            <td valign="top" style="padding: 0 0 5px 0;">
                                                                <!-- LEFT COLUMN -->
                                                                <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                            Check-out:
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- RIGHT COLUMN -->
                                                                <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #00b1b1; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                            <?php echo date('d-m-Y',strtotime($reservationdetails['check_out'])); ?>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <!-- # OF NIGHTS -->
                                            <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tr>
                                                            <td valign="top" style="padding: 0 0 5px 0;">
                                                                <!-- LEFT COLUMN -->
                                                                <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                            Number of Nights:
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- RIGHT COLUMN -->
                                                                <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                            <?php echo $no_of_days; ?> Night(s)
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <!-- NUMBER OF ROOMS -->
                                            <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tr>
                                                            <td valign="top" style="padding: 0 0 5px 0;">
                                                                <!-- LEFT COLUMN -->
                                                                <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                            Number of Rooms:
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- RIGHT COLUMN -->
                                                                <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                            <?php echo $reservationdetails['no_of_rooms']; ?> Room(s)
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <!-- ROOM TYPE -->
                                            <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tr>
                                                            <td valign="top" style="padding: 0 0 0 0;">
                                                                <!-- LEFT COLUMN -->
                                                                <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                            Room Type:
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- RIGHT COLUMN -->
                                                                <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                        <?php
                                                                        if(empty($sub))
                                                                        {

                                                                            echo $roomdetails['category_name']; 
                                                                        }
                                                                        else
                                                                        {
                                                                        echo $sub['name']; 
                                                                        }
                                                                        ?>
                                                                        Room
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <!-- DASHED LINE -->
                                <tr>
                                    <td style="padding: 10px 30px 30px 30px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="padding: 15px 0 0 0; font-size: 16px; line-height: 1px; font-family: Helvetica, Arial, sans-serif; color: #999999; border-bottom: 1px dashed #999999;" class="padding-copy">
                                                    &nbsp;
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <!-- ROOM 1 INFORMATION -->
                                <tr>
                                    <td style="padding: 0 30px 8px 30px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="left" style="padding: 0 0 15px 0; font-size: 20px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #43515E; font-weight: 300; line-height: 22px; text-align: left;">
                                                    Room Details
                                                </td>
                                            </tr>
                                            <!-- CHECK-IN -->
                                            <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tr>
                                                            <td valign="top" style="padding: 0 0 0px 0;">
                                                                <!-- LEFT COLUMN -->
                                                                <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                            Guest(s):
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- RIGHT COLUMN -->
                                                                <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 5px 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                            <?php echo $reservationdetails['guest_name']; ?>(<?php echo $reservationdetails['guest_numbers']; ?>)
                                                                            <br />
                                                                            <?php echo $reservationdetails['no_of_persons']; ?> Adults
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <!-- PREFERENCES -->
                                            <!-- <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%"> -->
                                                        <!-- <tr>
                                                            <td valign="top" style="padding: 0 0 5px 0;"> -->
                                                                <!-- LEFT COLUMN -->
                                                                <!-- <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                            Preferences*:
                                                                        </td>
                                                                    </tr>
                                                                </table> -->
                                                                <!-- RIGHT COLUMN -->
                                                                <!-- <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                            Non-Smoking , 2 Queen Beds
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr> -->
                                                    <!-- </table>
                                                </td>
                                            </tr> -->
                                            <!-- ROOM DETAILS -->
                                            <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tr>
                                                            <td valign="top" style="padding: 5px 0 0 0;">
                                                                <!-- LEFT COLUMN -->
                                                                <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                            Room Details:
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- RIGHT COLUMN -->
                                                                <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                           <!--  Two queen beds. Dining area with table and chairs. Walk-in closet. Wireless Internet access (surcharge). Satellite TV. Phone with voice mail. Kitchenette with refrigerator, two-burner stove, tableware, and cooking utensils. Private bathroom with hair dryer and shower/tub combination. Iron/ironing board available at the front desk. Air conditioning. Nonsmoking. -->
                                                                            <?php echo $roomdetails['description']; ?>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <!-- ROOM 2 INFORMATION -->
                                
                                <!-- DASHED LINE -->
                                <tr>
                                    <td style="padding: 10px 30px 30px 30px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="padding: 15px 0 0 0; font-size: 16px; line-height: 1px; font-family: Helvetica, Arial, sans-serif; color: #999999; border-bottom: 1px dashed #999999;" class="padding-copy">
                                                    &nbsp;
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                
                                <!-- ROOM CHARGES -->
                                <tr>
                                    <td style="padding: 0 30px 0 30px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="left" style="padding: 0 0 15px 0; font-size: 20px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #43515E; font-weight: 300; line-height: 22px; text-align: left;">
                                                    Room Charges
                                                </td>
                                            </tr>
                                            <!-- ROOM 1 -->
                                            <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tr>
                                                            <td valign="top" style="padding: 0 0 0 0;">
                                                                <!-- LEFT COLUMN -->
                                                                <?php
                                                                $i=1;
                                                                $no= $reservationdetails['no_of_rooms'];
                                                                for($i=1;$i<= $no;$i++)
                                                                {
                                                                    ?>
                                                                <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-room-charge">
                                                                            Room <?php echo $i; ?>:
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- RIGHT COLUMN -->
                                                                <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-room-charge">
                                                                            <?php
                                                                        if(empty($sub))
                                                                        {

                                                                            echo $roomdetails['category_name']; 
                                                                        }
                                                                        else
                                                                        {
                                                                        echo $sub['name']; 
                                                                        }
                                                                        ?>
                                                                        Room
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <!-- ROOM CHARGES -->
                                                        <tr>
                                                            <td>
                                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                    <!-- NIGHTLY CHARGES -->
                                                                    <tr>
                                                                        <td valign="top" style="padding: 0 0 0 0;">
                                                                            <!-- LEFT COLUMN -->
                                                                            <table cellpadding="0" cellspacing="0" border="0" width="47%" align="left" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0 10px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-room-charge">
                                                                                        Nightly Charges
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- RIGHT COLUMN -->
                                                                            <table cellpadding="0" cellspacing="0" border="0" width="47%" align="right" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0 10px; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                                        
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- CHARGE 1 -->
                                                                    <tr>
                                                                        <td valign="top" style="padding: 0 0 0 0;">
                                                                            <!-- LEFT COLUMN -->
                                                                            <?php
                                                                            $begin = new DateTime($reservationdetails['check_in']);
$end = new DateTime($reservationdetails['check_out']);

$interval = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($begin, $interval, $end);

foreach ($period as $dt) {
    
?>
                                                                            <table cellpadding="0" cellspacing="0" border="0" width="67%" align="left" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0 10px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-desc_charges">
                                                                                      <?php  echo $dt->format("l Y-m-d \n");
?>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- RIGHT COLUMN -->
                                                                            <table cellpadding="0" cellspacing="0" border="0" width="30%" align="right" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: right;" bgcolor="#ffffff" class="flex-p-charges">
                                                                                        ₹ <?php
                                                                        if(empty($sub))
                                                                        {

                                                                            echo $roomdetails['price']; 
                                                                        }
                                                                        else
                                                                        {
                                                                        echo $sub['price']; 
                                                                        }
                                                                        ?>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <?php
                                                                            }
?>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- CHARGE 2 -->
                                                                    <!-- <tr>
                                                                        <td valign="top" style="padding: 0 0 5px 0;">
                                                                            <!-- LEFT COLUMN -->
                                                               <!--              <table cellpadding="0" cellspacing="0" border="0" width="67%" align="left" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0 10px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-desc_charges">
                                                                                        Friday, December 2, 2018
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- RIGHT COLUMN -->
                                                                          <!--   <table cellpadding="0" cellspacing="0" border="0" width="30%" align="right" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: right;" bgcolor="#ffffff" class="flex-p-charges">
                                                                                        ₹181.14
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td> -->
                                                      <!--   </tr> -->  
                                                    </table>
                                               
                                          
                                            <?php
                                        }
                                        ?>
                                         </td>
                                          </tr>
                                            <!-- ROOM 2 -->
                                           <!--  <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tr>
                                                            <td valign="top" style="padding: 0 0 0 0;">
                                                                <!-- LEFT COLUMN -->
                                                               <!--  <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-room-charge">
                                                                            Room 2:
                                                                        </td>
                                                                    </tr>
                                                                </table> -->
                                                                <!-- RIGHT COLUMN -->
                                                <!--                 <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-room-charge">
                                                                            Deluxe Room - Kitchenette
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td> -->
                                                       <!--  </tr> -->
                                                        <!-- ROOM CHARGES -->
                                                        <!-- <tr>
                                                            <td>
                                                                <table cellspacing="0" cellpadding="0" border="0" width="100%"> -->
                                                                    <!-- NIGHTLY CHARGES -->
                                                                 <!--    <tr>
                                                                        <td valign="top" style="padding: 0 0 0 0;"> -->
                                                                            <!-- LEFT COLUMN -->
                                                                          <!--   <table cellpadding="0" cellspacing="0" border="0" width="47%" align="left" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0px 10px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-room-charge">
                                                                                        Nightly Charges
                                                                                    </td>
                                                                                </tr>
                                                                            </table> -->
                                                                            <!-- RIGHT COLUMN -->
                                          <!--                                   <table cellpadding="0" cellspacing="0" border="0" width="47%" align="right" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0 10px; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                                        
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr> -->
                                                                    <!-- CHARGE 1 -->
                                                                   <!--  <tr>
                                                                        <td valign="top" style="padding: 0 0 0 0;"> -->
                                                                            <!-- LEFT COLUMN -->
                                                                          <!--   <table cellpadding="0" cellspacing="0" border="0" width="67%" align="left" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0 10px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-desc_charges">
                                                                                        Thursday, December 1, 2018
                                                                                    </td>
                                                                                </tr>
                                                                            </table> -->
                                                                            <!-- RIGHT COLUMN -->
                                                                          <!--   <table cellpadding="0" cellspacing="0" border="0" width="30%" align="right" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: right;" bgcolor="#ffffff" class="flex-p-charges">
                                                                                        ₹129.14
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr> -->
                                                                    <!-- CHARGE 2 -->
                                                                    <!-- <tr>
                                                                        <td valign="top" style="padding: 0 0 5px 0;"> -->
                                                                            <!-- LEFT COLUMN -->
                                                                           <!--  <table cellpadding="0" cellspacing="0" border="0" width="67%" align="left" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0 10px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-desc_charges">
                                                                                        Friday, December 2, 2018
                                                                                    </td>
                                                                                </tr>
                                                                            </table> -->
                                                                            <!-- RIGHT COLUMN -->
                                                                      <!--       <table cellpadding="0" cellspacing="0" border="0" width="30%" align="right" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: right;" bgcolor="#ffffff" class="flex-p-charges">
                                                                                        ₹181.14
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr> -->
                                                                    <!-- CREDITS -->
                                                                   <!--  <tr>
                                                                        <td valign="top" style="padding: 0px 0 5px 0;"> -->
                                                                            <!-- LEFT COLUMN -->
                                                                         <!--    <table cellpadding="0" cellspacing="0" border="0" width="67%" align="left" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-desc_charges">
                                                                                        Promo Code "[PROMO]"
                                                                                    </td>
                                                                                </tr>
                                                                            </table> -->
                                                                            <!-- RIGHT COLUMN -->
                                                                        <!--     <table cellpadding="0" cellspacing="0" border="0" width="30%" align="right" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: right;" bgcolor="#ffffff" class="flex-p-promotax">
                                                                                        -₹31.03
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr> -->
                                                                    <!-- TAXES -->
                                                                 <!--    <tr>
                                                                        <td valign="top" style="padding: 0 0 15px 0;"> -->
                                                                            <!-- LEFT COLUMN -->
                                                                      <!--       <table cellpadding="0" cellspacing="0" border="0" width="67%" align="left" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-desc_charges">
                                                                                        Tax recovery, charges and service fees 
                                                                                    </td>
                                                                                </tr>
                                                                            </table> -->
                                                                            <!-- RIGHT COLUMN -->
                                                                   <!--          <table cellpadding="0" cellspacing="0" border="0" width="30%" align="right" class="responsive-table">
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: right;" bgcolor="#ffffff" class="flex-p-promotax">
                                                                                        ₹37.24
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>  -->
                                            <!-- TOTAL -->
                                            <tr>
                                                <td align="right" style="padding: 0 0 0 0; font-size: 36px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #00b1b1; font-weight: 100;" class="align-total-charge">
                                                        ₹<?php echo $reservationdetails['total_price']; ?>

                                                </td>
                                            </tr>
                                            <!-- TOTAL TITLE -->
                                            <tr>
                                                <td align="right" style="font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px;" class="align-total-charge">
                                                    Total (including tax recovery charges and service fees)
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <!-- DASHED LINE -->
                                <tr>
                                    <td style="padding: 10px 30px 30px 30px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="padding: 15px 0 0 0; font-size: 16px; line-height: 1px; font-family: Helvetica, Arial, sans-serif; color: #999999; border-bottom: 1px dashed #999999;" class="padding-copy">
                                                    &nbsp;
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <!-- PAYMENT INFORMATION -->
                                <!-- <tr>
                                    <td style="padding: 0 30px 0 30px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="left" style="padding: 0 0 15px 0; font-size: 20px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #43515E; font-weight: 300;">
                                                    Payment Information
                                                </td>
                                            </tr> -->
                                            <!-- BILLING NAME -->
                                        <!--     <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tr>
                                                            <td valign="top" style="padding: 0 0 5px 0;"> -->
                                                                <!-- LEFT COLUMN -->
                                                              <!--   <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                            Billing Name:
                                                                        </td>
                                                                    </tr>
                                                                </table> -->
                                                                <!-- RIGHT COLUMN -->
                                               <!--                  <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                            [FIRSTNAME] [LASTNAME]
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr> -->
                                            <!-- CARD TYPE -->
                                         <!--    <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tr>
                                                            <td valign="top" style="padding: 0 0 5px 0;"> -->
                                                                <!-- LEFT COLUMN -->
                                                            <!--     <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                            Card Type:
                                                                        </td>
                                                                    </tr>
                                                                </table> -->
                                                                <!-- RIGHT COLUMN -->
                                               <!--                  <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                            Visa
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr> -->
                                            <!-- CARD NUMBER -->
                                          <!--   <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tr>
                                                            <td valign="top" style="padding: 0 0 5px 0;"> -->
                                                                <!-- LEFT COLUMN -->
                                                       <!--          <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                            Card Number:
                                                                        </td>
                                                                    </tr>
                                                                </table> -->
                                                                <!-- RIGHT COLUMN -->
                                                <!--                 <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                            xxxx xxxx xxxx 0000
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr> -->
                                            <!-- BILLING ADDRESS -->
                                           <!--  <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tr>
                                                            <td valign="top" style="padding: 0 0 10px 0;">
                                                                <!-- LEFT COLUMN -->
                                                              <!--   <table cellpadding="0" cellspacing="0" border="0" width="26%" align="left" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px; text-align: left;" bgcolor="#ffffff" class="flex-p-bold">
                                                                            Billing Address:
                                                                        </td>
                                                                    </tr>
                                                                </table>  -->
                                                                <!-- RIGHT COLUMN -->
                                               <!--                  <table cellpadding="0" cellspacing="0" border="0" width="70%" align="right" class="responsive-table">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 0 0 0; font-family: Arial, sans-serif; color: #333333; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400; font-size: 12px; text-align: left;" bgcolor="#ffffff" class="flex-p">
                                                                            <span class="appleBody" style="color:#999999;">
                                                                            [FIRSTNAME] [LASTNAME] <br />
                                                                            12345 Main Street <br />
                                                                            City <br />
                                                                            State <br />
                                                                            Zip <br />
                                                                            Country </br />
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr> -->
                                            <!-- CHARGE NOTICE -->
                                          <!--   <tr>
                                                <td align="left" style="padding: 15px 0 0 0; font-size: 12px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400;" >
                                                    [HOTEL NAME] has charged your card for the full payment of this reservation.
                                                </td>
                                            </tr> -->
                                            <!-- CHARGES DISCLAIMER -->
                                 <!--            <tr>
                                                <td align="left" style="padding: 5px 0 30px 0; font-size: 12px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400;">
                                                    <i>Any additional charges and fees incurred during your stay, will be charged in your hotel's local currency and may be subject to a foreign exchange fee.</i>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr> -->
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
	</td>
	</tr>
	</table>
    
    <!-- ADDITIONAL INFORMATION -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td bgcolor="#EBEBEB" align="center" style="padding: 0 15px 0 15px;">
                <table border="0" cellpadding="0" cellspacing="0" width="580" class="responsive-table">
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 0 0 30px 0; border-top: 4px solid #ebebeb;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td style="padding: 30px 30px 0 30px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <!-- EXTRA HOTEL INFO -->
                                            <tr>
                                                <td align="left" style="padding: 0 0 15px 0; font-size: 20px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #43515E; font-weight: 300; line-height: 22px; text-align: left;">
                                                    Additional Hotel Information
                                                </td>
                                            </tr>
                                            <!-- CHECK IN -->
                                            <tr>
                                                <td align="left" style="font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px;" >
                                                    Checking In:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding: 0 0 3px 0; font-size: 11px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400;" >
                                                    Extra-person charges may apply and vary depending on hotel policy.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding: 0 0 3px 0; font-size: 11px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400;" >
                                                    Guests must show current government-issued proof of identity at the time of check-in.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding: 0 0 3px 0; font-size: 11px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400;" >
                                                    Photo identification and credit card or cash deposit are required at check-in for incidental charges.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding: 0 0 3px 0; font-size: 11px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400;" >
                                                    Special requests are subject to availability upon check-in and may incur additional charges. Special requests cannot be guaranteed.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding: 0 0 3px 0; font-size: 11px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400;" >
                                                    Guest parking is available on a first come, first serve basis for US₹20 per day and US₹40 per day for holidays and special events.
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td align="left" style="padding: 0 0 3px 0; font-size: 11px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400;" >
                                                    Pets not allowed
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding: 0 0 0 0; font-size: 11px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400;" >
                                                    Check-in time starts at 3 PM Check-out time is 11 AM.
                                                </td>
                                            </tr>
                                            <!-- CANCELLATION POLICY -->
                                            <tr>
                                                <td align="left" style="padding: 15px 0 0 0; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 600; font-size: 12px; line-height: 22px;" >
                                                    Cancellation Policy:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding: 0 0 3px 0; font-size: 11px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400;" >
                                                <!--     We understand that sometimes plans fall through. We do not charge a change or cancel fee. However, this property (Haddon Hall Hotel) imposes the following penalty to its customers that we are required to pass on: Cancellations or changes made after 11:59 PM ((GMT-05:00) Eastern Time (US & Canada)) on Nov 28, 2011 are subject to a 1 Night Room & Tax penalty. The property makes no refunds for no shows or early checkouts. -->
                                                <?php echo $cancellation['cancellation_policy']; ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- BOTTOM TICKER -->
                    <tr>
                        <td style="padding: 0 0 0 0;" align="center">
                            <img src="https://gallery.mailchimp.com/c6b1236c909d2d0e1b52e9f8f/images/b1dca63c-f6a5-454a-a733-bfb5a95f7f1f.png" width="580" height="6" border="0" alt="EDIT" class="img-max" style="display: block; padding: 0; font-family: Helvetica, Arial, sans-serif; color: #666666; width: 580px; height: 6px;">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    
    <!-- FOOTER -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td bgcolor="#EBEBEB" align="center">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                        <td style="padding: 20px 0px 20px 0px;">
                            <!-- UNSUBSCRIBE COPY -->
                            <table width="580" border="0" cellspacing="0" cellpadding="0" align="center" class="responsive-table">
                                <tr>
                                    <td align="center" valign="middle" style="font-size: 12px; line-height: 18px; font-family: 'Open Sans', Helvetica, Arial, sans-serif; color: #999999; font-weight: 400;">
                                        <span class="appleFooter noprnt " style="color:#999999;">
                                            <button onclick="myFunction()">Print this page</button></span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>




                  

                       
                   
                </div>

              


                </div>  <!-- End container -->                         

 <!-- start footer -->
 <script>
function myFunction() {
    window.print();
}
</script>
<?php
include("footer.php");
?>