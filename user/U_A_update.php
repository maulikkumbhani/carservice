<?php

session_start();
include('../conn.inc');


if($_SESSION['user_code'] == NULL)
  {
    header('location:U_login.php');

  }
  else
  {
    
  }
      $admin_code = $_SESSION['user_code'];
      $sql2 = mysql_query("SELECT * from admin_info WHERE a_code='$admin_code'");
          $user_info = mysql_fetch_assoc($sql2);

      


?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>


<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="RepairShop | Car Repair & Car Wash HTML Template" />
<meta name="keywords" content="car,auto,moto,repair,wash,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />


<title>User | Appointment</title>


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
  

  <?php include("header.php"); ?>

      
        <div class="main-content">

    
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-90 pb-50">
    
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Appointment Booking Form</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section>
     <div class="container pt-50 pb-50">
        <div class="section-content">
        <div class="row">
          <div class="col-md-12">
          
            <form id="reservation_form" name="reservation_form" class="reservation-form" method="post" action="http://thememascot.net/demo/personal/m/repairshop/v3.1/demo/includes/booking-form-large.php">
              <div class="row">
                <div class="reservation-first-step">
                  <h3 class="text-theme-colored line-bottom ml-15 mb-30 mr-15">Vehicle <span class="text-theme-color-2">Information</span></h3>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <label>Car Name</label>
                      <div class="styled-select">
                        <select id="car_name_select" name="car_name_select" class="form-control ddslick" required="">
                          <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="images/car-logos/1.png" value="Audi">Audi</option>
                          <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="images/car-logos/2.png" value="Citroen">Citroen</option>
                          <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="images/car-logos/3.png" value="Volkswagen">Volkswagen</option>
                          <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="images/car-logos/4.png" value="Mazda">Mazda</option>
                          <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="images/car-logos/5.png" value="BMW">BMW</option>
                          <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="images/car-logos/6.png" value="Lamborghini">Lamborghini</option>
                          <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="images/car-logos/7.png" value="Mercedes Benz">Mercedes Benz</option>
                          <option data-description="Lorem ipsum dolor sit amet consectetur adipisicing elit.." data-imagesrc="images/car-logos/8.png" value="Nissan">Nissan</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group mb-30" >
                      <label>Car Model</label>
                      <input placeholder="Type Model Here" type="text" id="car_model" name="car_model" class="form-control" required="" style="margin-bottom: 70px;">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <!-- Ui-Slider-Handle Markup -->
                      <label for="amount">Car Year:</label>
                      <input type="text" id="amount" data-target="slider-range-max" class="no-border slider-range" name="car_year_select" required="">
                      <div id="slider-range-max"></div>
                    </div>
                  </div>
                 
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <label>Type Of Service</label>
                      <div class="styled-select">
                        <select id="car_service_select" name="car_service_select" class="form-control" required="">
                          <option value="">- Select Your Service Type -</option>
                          <option value="Engine Diagnostics">Engine Diagnostics</option>
                          <option value="Air Conditioning">Air Conditioning</option>
                          <option value="Wheel Alignment">Wheel Alignment</option>
                          <option value="Transmission Repair">Transmission Repair</option>
                          <option value="Brakes Repair">Brakes Repair</option>
                          <option value="Oil, Lube & Filters">Oil, Lube & Filters</option>
                          <option value="Engine Steam Clean">Engine Steam Clean</option>
                          <option value="Paint Protection">Paint Protection</option>
                          <option value="Dashboard Clean">Dashboard Clean</option>
                          <option value="Triple Coat Hand Wax">Triple Coat Hand Wax</option>
                          <option value="Trunk Vacuum">Trunk Vacuum</option>
                          <option value="Door Shuts & Plastics">Door Shuts & Plastics</option>
                          <option value="Triple Coat Hand Wax">Triple Coat Hand Wax</option>
                          <option value="More Than One">More Than One</option>
                        </select>
                      </div>
                    </div>
                  </div>
               
                  <div class="clearfix"></div>
                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <label>Extra Services</label><br>                      
                      <label class="control control--checkbox">Air Freshener
                        <input value="Air Freshener" type="checkbox" checked="checked" name="extra_services[]"/>
                        <div class="control__indicator"></div>
                      </label>
                      <label class="control control--checkbox">Exterior Vinyl Protectant
                        <input value="Exterior Vinyl Protectant" type="checkbox" checked="checked" name="extra_services[]"/>
                        <div class="control__indicator"></div>
                      </label>
                      <label class="control control--checkbox">Dashboard Clean
                        <input value="Dashboard Clean" type="checkbox" name="extra_services[]"/>
                        <div class="control__indicator"></div>
                      </label>
                      <label class="control control--checkbox">Triple Coat Hand Wax
                        <input value="Triple Coat Hand Wax" type="checkbox" checked="checked" name="extra_services[]"/>
                        <div class="control__indicator"></div>
                      </label>
                      <label class="control control--checkbox">Transmission Repair
                        <input value="Transmission Repair" type="checkbox" name="extra_services[]"/>
                        <div class="control__indicator"></div>
                      </label>
                      <label class="control control--checkbox">Steering & Suspension
                        <input value="Steering & Suspension" type="checkbox" name="extra_services[]"/>
                        <div class="control__indicator"></div>
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <label>Preffered Date & Time Of Booking</label>
                      <input name="reservation_date" class="form-control required datetime-picker" type="text" placeholder="Type Reservation Date" aria-required="true" style="margin-bottom: 110px;">
                    </div>
                  </div>
                   <div class="col-sm-6">
                     <div class="form-group mb-30" >
                      <label>Description</label>
                      <textarea placeholder="Type Description Here" style="padding: 20px;" id="car_model" name="car_model" class="form-control" required="" ></textarea>
                    </div>
                  </div>
                </div>
              
              </div >
              <!-- Garage info -->
               <div class="row">
                <div class="reservation-second-step">
                  <h3 class="text-theme-colored line-bottom mt-0 mr-15 mb-30 ml-15"> Gagare <span class="text-theme-color-2">Information</span></h3>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input placeholder="Email" type="text" id="reservation_email" name="reservation_email" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input placeholder="Your Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input placeholder="Your Address" type="text" id="reservation_address" name="reservation_address" class="form-control" required="">
                    </div>
                  </div>
                   <style>                 
                       #map {
                            height: 300px; 
                            width: 100%;
                            margin-bottom: 20px; 
                            }
                   </style>
                   <!-- garage location -->
                  <div>
                       <div id="map"></div>
                       <script>
              
                           function initMap()
                            {
                           var uluru = {lat: -25.344, lng: 131.036};
                           var map = new google.maps.Map(document.getElementById('map'), {zoom: 4, center: uluru});
                           var marker = new google.maps.Marker({position: uluru, map: map});
                             }
                      </script>
  
                      <script async defer
                         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGHLu35oFkl62KI3YXMIxzr4KHyMASZu8&callback=initMap">
                      </script>
                </div>

                  
                </div>
              </div>

          <!--     Personal -->
              <div class="row">
                <div class="reservation-second-step">
                  <h3 class="text-theme-colored line-bottom mt-0 mr-15 mb-30 ml-15">Personal <span class="text-theme-color-2">Information</span></h3>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input placeholder="Email" type="text" id="reservation_email" name="reservation_email" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input placeholder="Your Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input placeholder="Your Address" type="text" id="reservation_address" name="reservation_address" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <textarea placeholder="Enter Message" rows="5" class="form-control required" name="form_message" aria-required="true"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group text-center mb-0 mt-20">
                      <input name="form_botcheck" class="form-control" type="hidden" value="">
                      <button type="submit" class="btn btn-colored btn-theme-colored btn-lg btn-flat border-left-theme-color-2-4px" data-loading-text="Please wait...">Book Appointment</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          
            <script type="text/javascript">
              $("#reservation_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
            
          </div>
        </div>
        </div>
      </div >
    </section>

  </div>

  <?php include("footer.php") ?>
  
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