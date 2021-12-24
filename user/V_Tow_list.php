<?php
session_start();
include('../conn.inc');
?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>


<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="RepairShop | Car Repair & Car Wash HTML Template" />
<meta name="keywords" content="car,auto,moto,repair,wash,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />


<title> Towing </title>


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
  
       <?php include("header_t.php"); ?>

 
  <div class="main-content">
    
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-90 pb-50">
    
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Your Nearest Towing Service</h2>
            </div>
          </div>
        </div>
      </div>      
    </section>
<?php

	 $sql = mysql_query("SELECT * from t_vender WHERE approval='granted' and status='idle'");
   if (mysql_num_rows($sql) == 0) {
            ?>
          <div align="center" style="margin-bottom: 20%;">
            <p style="margin-top: 100px;">You Have No Any Towing vendor To Near</p>
            <img align="center" style="margin-top: 35px;" src="../uploads/v_profile/empty.png">
          </div> 
        <?php
      }
      else
      {

	while($data = mysql_fetch_assoc($sql))
	{
?>
    <section>
          <div class="container">
        <div class="row">
        	
          <div style="width: 100%; margin-bottom: 50px;" class="col-md-6">
         
            <ul>

              <table>
                <tr> 
                  <td>
                 <li>
                  <h5>Name :</h5>
                  <p><?php echo $data['t_name'];?></p>
                 </li>
                </td>
             <td  >
                 <li style="margin-left: 100px;">
                  <h5>Email :</h5>
                  <p><?php echo $data['t_email'];?></p>
                 </li>
                </td>
                <div  class="col-md-4" >
                      <img src="<?php echo $data['t_profile'];?>" style="width:200px;height: 200px;">
                    
                   </div>
                
              </tr>
              <tr>
                 <td>
                <h5>Address:</h5>
                 <p><?php echo $data['t_address'];?></p> 
                 <!-- from vendor database -->
                </td>
              </tr>
               
              <tr>
              <li>
                <td>
                <h5>Contact no :</h5>
                 <p><?php echo $data['t_contact'];?></p> 
                 <!-- from vendor database -->
                </td>
                <td><li style="margin-left: 200px; margin-top: 10px;" >
                <a href="V_Tow_booking.php?t_code=<?php echo $data['t_code'];?>" class="btn btn-dark btn-xl">Book Appointment</a></br>
                 </li>  </td>
              </li>
              </tr>
               
               </table>

              
            </ul>

          </div>
                 
                  <div style="color: #616C6F" class="separator" ></div>
         
        </div>
       
      
      </div>
    </section>
    <?php 
 }
}
  ?>
  </div>

  
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