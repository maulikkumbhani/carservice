<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php
session_start();
include('../conn.inc');


if($_SESSION['v_code'] == NULL)
{
  header('location:V_login.php');

}
else
{

}
$v_code = $_SESSION['v_code'];    
$sql2 = mysql_query("SELECT * from vender_info WHERE v_code='$v_code'");
$vender_info = mysql_fetch_assoc($sql2);


?>


<head>

  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="description" content="RepairShop | Car Repair & Car Wash HTML Template" />
  <meta name="keywords" content="car,auto,moto,repair,wash,cleaning,transport,workshop" />
  <meta name="author" content="ThemeMascot" />

  <!-- Page Title -->
  <title>Vendor | Garage </title>

  <link href="images/favicon.png" rel="shortcut icon" type="image/png">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
  <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
  <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link href="css/css-plugin-collections.css" rel="stylesheet"/>
  <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
  <link href="css/style-main.css" rel="stylesheet" type="text/css">
  <link href="css/preloader.css" rel="stylesheet" type="text/css">
  <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
  <link href="css/responsive.css" rel="stylesheet" type="text/css">
  <link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
  <link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
  <link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
  <link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">
  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-plugin-collection.js"></script>
  <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
  <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

</head>
<body class="">
  <div id="wrapper" class="clearfix">
    <div id="preloader">
      <div id="spinner">
        <img alt="" src="images/preloaders/5.gif">
      </div>
      <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- Header -->
   <?php include("header.php"); ?>
      <!-- Start main-content -->
      <div class="main-content" style="margin-bottom: 100px;">
      <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
          <div class="container pt-90 pb-50">
            <div class="section-content pt-100">
              <div class="row"> 
                <div class="col-md-12">
                  <h3 class="title text-white">Gagare Detail</h3>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php

        $garage_number= mysql_query ("SELECT * from v_garage where v_code='$v_code'");
        $number = mysql_fetch_assoc($garage_number);
        ?>

        <div name = "garage_number" 
        <?php 
        if ($number <= 0)
          { ?> 
            style="display: ;" 
            <?php 
          }  
          else 
            { ?> 
              style="display: none;" 
              <?php 
            }
            ?>>
            <section class="divider" style="padding-top: 30px;">
              <div class="container pt-0">
               <div class="row pt-10">  
                <div class="col-md-7" style="text-align: center; border: 1px dashed black;border-radius: 10px 10px 10px 10px; width: 100%;height: 500px;  ">

                 <H2>CREATE A NEW GARAGE</H2>
               </br></br>
               <h4>Provide a information about your Gagage info </h4>
               <div class="form-group">               

                <a href="V_garage_insert.php?v_code=<?php echo $v_code;?> ">
                  <button type="button" name="garage"  class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" >Create New Garage</button></a>

                </div>        
              </div>
            </div>
          </div>
        </section>              

      </div>

      <?php

      $garage_number= mysql_query ("SELECT * from v_garage where v_code='$v_code'");
      $number = mysql_fetch_assoc($garage_number);
      ?>

      <div name = "garage_list" 
      <?php 
      if ($number >= 0)
        { ?> 
          style="display: ;" 
          <?php 
        }  
        else 
          { ?> 
            style="display: none;" 
            <?php 
          }
          ?>>


          <section class="divider" style=" padding-top: 30px;">
            <div class="container pt-0">


              <?php

              $sql_select = mysql_query ( "SELECT * FROM v_garage WHERE v_code='$v_code'");
                 while ($check= mysql_fetch_assoc($sql_select)) {
  
              ?>
              <div class="row pt-10" style="margin: 50px;">

                <div class="col-md-5">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="thumb">


                       <style>   
                       #map {
                         width: 100%;
                         height: 340px;
                       }
                     </style>

                     <div class="col-sm-12">
                       <div class="form-group mb-30">

                      
                         <div id="map"></div>
                                    <script>
                                function initMap() {
                                  var uluru = {lat:  <?php echo $check['location_lat'];  ?>, lng:  <?php echo $check['location_lng']; ?> };
                                  var map = new google.maps.Map(
                                      document.getElementById('map'), {zoom: 15, center: uluru});
                                  var marker = new google.maps.Marker({position: uluru, map: map});
                                }
                                    </script>
                                    <script async defer
                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8XP7nsLF1PCUXk0z29okBjpYb4gUa6Js&callback=initMap">
                                    </script>
                         

                      </div>                     
                     </div>
                    </div>
                  </div>
                  </div>
               </div>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="form_name">Garage Name <small>*</small></label>
                              <input type="text" name="garagename" class="form-control" value="<?php echo $check['g_name']; ?>" disabled>

                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="form_name">Email <small>*</small></label>
                              <input type="email" name="email" class="form-control required email" value="<?php echo $check['g_email']; ?>" disabled />

                            </div>
                          </div>
                        </div>          
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="form_name">Address <small>*</small></label>

                              <input type="text" name="address" value="<?php echo $check['g_address']; ?>" class="form-control required" disabled> 

                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="form_name">Contact No <small>*</small></label>
                              <input type="text" class="form-control required" name="c_number" value="<?php echo $check['contact_no']; ?>"  disabled>

                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="form_name">Opening Time <small>*</small></label>
                              <div class='input-group date'  id='datetimepicker4'>
                                <input type='text' class="form-control" disabled name="opentime" placeholder="Type Closing Time Here" value="<?php echo $check['g_opentime']; ?>" />
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-time"></span>
                                </span>


                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="form_name">Closing Time <small>*</small></label>
                              <div class='input-group date'  id='datetimepicker4'>
                                <input type='text' class="form-control" disabled name="closetime" placeholder="Type Closing Time Here" value="<?php echo $check['g_closetime']; ?>" />
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-time"></span>
                                </span>


                              </div>
                            </div>
                            <a style="margin-left: 20px" href="V_garage_update.php?g_code=<?php  echo $check['g_code']; ?>"   class="btn btn-dark btn-xl">Update Garage Detail</a>

                          </div>
                        </div>
                     </div> 



             </div>
             <?php 
             
             }

             ?>
           </div>
          </section>              

       </div>

        
      </div>



<!-- end main-content -->

<!-- Footer -->
<?php include("Footer.php");  ?>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  <script src="js/calendar-events-data.js"></script> 
  <script src="js/custom.js"></script>

      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
    </body>

    </html>



