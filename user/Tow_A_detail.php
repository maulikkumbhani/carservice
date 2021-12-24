<?php

session_start();
include('../conn.inc');


if($_REQUEST['t_a_code'] == NULL)
  {
    header('location:Tow_booking.php');

  }
  else
  {
    
  }
      $tow_a_code = $_REQUEST['t_a_code'];

?>



<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>


<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="RepairShop | Car Repair & Car Wash HTML Template" />
<meta name="keywords" content="car,auto,moto,repair,wash,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />


<title>Tow | Detail</title>


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
$t_a_code=$_REQUEST['t_a_code'];

$sql=mysql_query("SELECT * FROM t_appointments WHERE t_a_code='$t_a_code'");
$data=mysql_fetch_assoc($sql);

$sql1=mysql_query("SELECT * FROM t_vender WHERE t_code=(SELECT t_code FROM t_appointments WHERE t_a_code='$t_a_code')");
$data1=mysql_fetch_assoc($sql1);


?>


    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul>
              <li style="margin-top:20px;">
                <h5>Tow Company Name:</h5>
                <p><?php echo $data1['t_name']; ?></p>
              </li>
              <li style="margin-top:20px;">
                <h5>Address:</h5>
                <p><?php echo $data1['t_address'];?></p>
              </li>
              <li style="margin-top:20px;">
                <h5>Car Owner Name:</h5>
                <p><?php echo $data['name'];?></p>
              </li>
              <li style="margin-top:20px;">
                <h5>Car Detail:</h5>
                <p> <?php echo $data['c_number'];?></p>
              </li>
              <li style="margin-top:20px;">
                <h5>Service:</h5>
                <p><?php echo $data['service'];?></p>
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
                   <!-- garage location -->
                  <div>
                       <div id="map" ></div>
                       <script>
              
                           function initMap()
                            {
                           var uluru = {lat:<?php echo $data['location_lat']; ?>, lng: <?php echo $data['location_lng']; ?> };
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
         <div class="alert alert-danger alert-dismissible" role="alert" id="alert"  style="display:none; ;margin-top: 20px;">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Please try Again.,Your Appointment Is Not Cancelled.
                    </div>
                     <div class="alert alert-danger alert-dismissible" role="alert" id="alert1"  style="display:none; ;margin-top: 20px;">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Please try Again.,Network Problem.
                    </div>
       
      
      </div>
    </section>
  </div>


<?php
if(isset($_POST["cappointment"]))
{
  $status="idle";
  $t_code=$data['t_code'];
  $sql=mysql_query("UPDATE `t_appointments` SET `status`='Cancelled' WHERE t_a_code='$t_a_code'");
  $sql1 =mysql_query("UPDATE `t_vender` SET `status`='$status' WHERE t_code='$t_code'");
  if($sql && $sql1)
  {

 $t_email=$data1['t_email'];

    $c_number=$data['c_number'];
                            $premsg="Your Towing pick up of ";
                             $postmsg=" has been cancelled by your Customer. ";
                             
                             $statusmsg=$premsg.$c_number.$postmsg;
               ob_start();
                             require 'PHPMailer-master/PHPMailerAutoload.php';
                             $mail = new PHPMailer();
                             $mail ->IsSmtp();
                             $mail ->SMTPDebug =0;
                             $mail ->SMTPAuth = true;
                             $mail ->SMTPSecure = 'ssl';
                             $mail ->Host = "smtp.gmail.com";
                             $mail ->Port = 465; // or 587
                            
                             $mail ->Username = "carcareservice16122@gmail.com";
                             $mail ->Password = "carcare16122@";
                             $mail ->SetFrom("carcareservice16122@gmail.com");
                             $mail ->Subject = "Towing Cancelled";
                             $mail ->Body = $statusmsg;
                             $mail ->AddAddress($t_email);
                             

                             if(!$mail->Send())
                             {
                                 echo "<script><script>  document.getElementById('alert1').style.display = '';</script></script>";
                             }
                             else
                             {
                              
                             }

   echo "<script>location.href='U_appointment_list.php';</script>";
  }
  else
  {
    echo "<script><script>  document.getElementById('alert').style.display = '';</script></script>";
  }
}


?>

<?php include("Tow_footer.php") ?>

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