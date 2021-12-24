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
              <h3 class="title text-white">Your Nearest Garage</h2>
            </div>
          </div>
        </div>
      </div>      
    </section>
<?php

	 $sql = mysql_query("SELECT * FROM v_garage v1,vender_info v2 WHERE v1.v_code=v2.v_code ");

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
                        <h5>Garage Name :</h5>
                        <p><?php echo $data['g_name']; ?></p>
                     </li>   
                  </td>
                  <td >
                     <li style="margin-left: 200px;">
                        <h5>Open & Close Time :</h5>
                        <p><?php echo $data['g_opentime'];?> to <?php echo $data['g_closetime'];?></p>
                     </li>   
                  </td>
                   <div  class="col-md-4" >
                      <img src="<?php if($data['v_image'] == NULL){ echo "../uploads/v_profile/user.png"; }else{echo $data['v_image']; }?>" style="width:200px;height: 200px;">
                    
                   </div>
             
              </tr>
              <tr>
                <td>
                 <li>
                  <h5>Address :</h5>
                  <p><?php echo $data['g_address'];?></p>
                 </li>
                </td>
                <td >
                <li style="margin-left: 200px; margin-top: 10px;" >
                <a href="U_garage_detail.php?g_code=<?php echo $data['g_code']; ?>" class="btn btn-dark btn-xl">More Detail</a></br>
                 </li>                
              </td>  
             </tr>
               
              <tr>
              <li>
                <td>
                <h5>Contact no :</h5>
                 <p><?php echo $data['contact_no'];?></p> 
                 <!-- from vendor database -->
                </td>
                <td><li style="margin-left: 200px; margin-top: 10px;" >
                <a href="U_A_booking.php?g_code=<?php echo $data['g_code'];?>" class="btn btn-dark btn-xl">Book Appointment</a></br>
                 </li>  </td>
              </li>
              </tr>
               
               </table>

              
            </ul>

          </div>

      </div>
    </section>
    <?php 
 }
  ?>
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