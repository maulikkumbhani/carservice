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

<title>User | Garage</title>

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
              <h3 class="title text-white">Garage Detail</h2>
            </div>
          </div>
        </div>
      </div>      
    </section>
<?php
$g_code=$_REQUEST['g_code'];

$sql=mysql_query("SELECT * FROM v_garage WHERE g_code='$g_code'");
$data=mysql_fetch_assoc($sql);

$sql1=mysql_query("SELECT * FROM vender_info WHERE v_code=(SELECT v_code FROM v_garage WHERE g_code='$g_code')");
$data1=mysql_fetch_assoc($sql1);

?>


    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul>
              <li>
                <h5>Client Name:</h5>
                <p><?php echo $data1['v_name']; ?></p>
              </li>
              <li>
                <h5>Garage Name:</h5>
                <p><?php echo $data['g_name']; ?></p>
              </li>
              <li>
                <h5>Address:</h5>
                <p><?php echo $data['g_address']; ?></p>
              </li>
                <li>
                <h5>Contact No:</h5>
                <p><?php echo $data['contact_no']; ?></p>
              </li>
               <li>
                <h5>Email:</h5>
                <p><?php echo $data['g_email']; ?> </p>
              </li>
              <li>
                <h5>Time:</h5>
                <p><?php echo $data['g_opentime']; ?> to <?php echo $data['g_closetime']; ?></p>
              </li>
             
             
            </ul>
          </div>
          <div class="col-md-8">
           <style>
      #map {
        height: 400px; 
        width: 100%;  
       }
    </style>
  </head>
  <body>
    <h3>Location :</h3>
 
    <div id="map"></div>
    <script>

function initMap() {

  var uluru = {lat:  <?php echo $data['location_lat']; ?>, lng:  <?php echo $data['location_lng']; ?>};

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
      
        <div class="row mt-30">
          <div class="col-md-12">
            <h4 class="mb-20">Garage Images :</h4>
            <div class="owl-carousel-3col">
            

              <div class="item" id="image1"><img style="width: 280px;height: 250px;" src="<?php if($data['g_imageurl1']==NULL){echo "../uploads/v_garage/no-image.png";}else{ echo $data['g_imageurl1']; } ?>" alt="Garage Image 1"></div>
              <div class="item" id="image2"><img style="width: 280px;height: 250px;" src="<?php if($data['g_imageurl2']==NULL){echo "../uploads/v_garage/no-image.png";}else{ echo $data['g_imageurl2']; } ?>" alt="Garage Image 2"></div>
              <div class="item" id="image3"><img style="width: 280px;height: 250px;" src="<?php if($data['g_imageurl3']==NULL){echo "../uploads/v_garage/no-image.png";}else{ echo $data['g_imageurl3']; } ?>" alt="Garage Image 3"></div>
            </div>
          </div>
        </div>


          <a style="margin-top: 20px;" href="U_A_booking.php?g_code=<?php echo $data['g_code'];?>" class="btn btn-dark btn-xl">Book Appointment</a></br>
      </div>
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