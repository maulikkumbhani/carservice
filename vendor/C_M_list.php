

<?php
session_start();
include('../conn.inc');

if($_SESSION['v_code'] == NULL)
  {
    header('location:V_login.php');

  }
  else
  {  
        if($_REQUEST['b_code'] == NULL)
    {
        header('location:C_B_list.php');

    }

    
  }
      $v_code = $_SESSION['v_code'];
      $sql2 = mysql_query("SELECT * from admin_info WHERE a_code='$v_code'");
          $vendor_info = mysql_fetch_assoc($sql2);
            $b_code = $_REQUEST['b_code'];

?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="RepairShop | Car Repair & Car Wash HTML Template" />
<meta name="keywords" content="car,auto,moto,repair,wash,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Car | Model</title>

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
  <div class="main-content">

    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-90 pb-50">
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Car Model</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Gallery -->
    <section id="gallery">
     <div class="container pt-50 pb-30">
        <div class="section-content">
        <div class="row">
          <div class="col-md-12">

           
            
           
           <div id="grid" class="gallery-isotope grid-4 gutter clearfix">
            <?php

               $car_brand = mysql_query("SELECT * FROM car_detail WHERE b_code = '$b_code' ;");
                while ($data = mysql_fetch_assoc($car_brand))
                {

             ?>
              <!-- Portfolio Gallery Grid -->
           
              <!-- Portfolio Item Start -->
              <div class="gallery-item wheel">
                <a href="C_M_detail.php?m_code=<?php echo $data['m_code']; ?>" ></i>
                <div class="work-gallery">
                  <div class="gallery-thumb">
                    <img style="height: 200px;" class="img-fullwidth"  src="<?php echo $data['c_image1']; ?>?">
                    <div class="gallery-overlay"></div>                  
                    <div class="gallery-contect">
                      <ul class="styled-icons icon-bordered icon-circled icon-sm">
                        <li></li>
                        
                      </ul>
                    </div> 
                  </div>
                  <div class="gallery-bottom-part text-center">
                    <h4 class="title text-uppercase font-raleway font-weight-500 m-0"><?php echo $data['m_name']; ?></h4>
                  
                  </div>
                </div>
                </a>
              </div>
             
              <!-- Portfolio Item End -->
              <?php
               }
               ?>
               </div>            
            <!-- End Portfolio Gallery Grid -->
          </div>
        </div>
        </div>
      </div >
    </section>

  </div>
  <!-- end main-content -->
  
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