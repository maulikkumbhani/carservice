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
              <h3 class="title text-white">Appointment Detail</h2>
            </div>
          </div>
        </div>
      </div>      
    </section>


<?php
$a_code=$_REQUEST['a_code'];

$sql=mysql_query("SELECT * FROM appointments WHERE a_code='$a_code'");
$data=mysql_fetch_assoc($sql);

$sql1=mysql_query("SELECT * FROM v_garage WHERE g_code=(SELECT g_code FROM appointments WHERE a_code='$a_code')");
$data1=mysql_fetch_assoc($sql1);

$sql3=mysql_query("SELECT * FROM user_info WHERE user_code=(SELECT u_code FROM appointments WHERE a_code='$a_code')");
$data3=mysql_fetch_assoc($sql3);

?>



    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul>
              <li style="margin-top:20px;">
                <h5>Garage Name:</h5>
                <p><?php echo $data1['g_name']; ?></p>
              </li>
              <li style="margin-top:20px;">
                <h5>Address:</h5>
                <p><?php echo $data1['g_address']?></p>
              </li>
              <li style="margin-top:20px;">
                <h5>Car Owner Name:</h5>
                <p><?php echo $data3['username']?></p>
              </li>
              <li style="margin-top:20px;">
                <h5>Appointment Date:</h5>
                <p><?php echo $data['a_date']?></p>
              </li>
              <li style="margin-top:20px;">
                <h5>Booking Date:</h5>
                <p><?php echo $data['t_date']?></p>
              </li>
              <li style="margin-top:20px;">
                <h5>Car Detail:</h5>
                <p><?php echo $data['c_name']?>  <?php echo $data['c_model']?>  <?php echo $data['c_number']?></p>
              </li>
              <li style="margin-top:20px;">
                <h5>Service:</h5>
                <p><?php echo $data['c_service']?></p>
              </li>
              <li style="margin-top:20px;">
                <h5>Extra Services:</h5>
                <p><?php echo $data['c_eservice']?></p>
              </li>
               <li style="margin-top:20px;">
                <form method="post">
                 <button type="submit" name="cappointment" class="btn btn-colored btn-theme-colored btn-lg btn-flat border-left-theme-col or-2-4px" >Cancel Appointment</button>
               </form>
              </li>             
            </ul>
          </div>
          <div class="col-md-8">
            <style>                 
                       #map {
                            height: 500px; 
                            width: 100%;
                          
                            }
                   </style>
                  <div>
                       <div id="map" ></div>
                       <script>
              
                           function initMap()
                            {
                             var uluru = {lat: <?php echo $data1['location_lat']; ?>, lng:  <?php echo $data1['location_lng']; ?>};
                           var map = new google.maps.Map(document.getElementById('map'), {zoom: 4, center: uluru});
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
    </section>
  </div>


<?php
if(isset($_POST["cappointment"]))
{
  $sql=mysql_query("UPDATE `appointments` SET `status`='Cancelled' WHERE a_code='$a_code'");
  if($sql)
  {
    
   echo "<script>alert('Your Appointment has been Cancelled.');location.href='U_home.php';</script>";
  }
  else
  {
    echo "<script>alert('Please try Again.')</script>";
  }
}


?>

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