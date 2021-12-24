  
<?php
session_start();
include('../conn.inc');

$sample_rate = 1;

    $query = mysql_query(" UPDATE page_views SET views = views + {$sample_rate} WHERE id = '1' ");
   

?>
  <!DOCTYPE html>
<html dir="ltr" lang="en">

<head>


<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="CarFixing | Car Repair & Car Wash HTML Template" />
<meta name="keywords" content="car,auto,moto,repair,wash,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />

<title>Car Care</title>

<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">


<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>

<link href="js/fullpage-slider/jquery.fullpage.css" rel="stylesheet"/>

<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>

<link href="css/style-main.css" rel="stylesheet" type="text/css">

<link href="css/preloader.css" rel="stylesheet" type="text/css">

<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">

<link href="css/responsive.css" rel="stylesheet" type="text/css">

<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">


<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery-plugin-collection.js"></script>

</head>
<body class="">
<div id="wrapper" class="clearfix">

  <div id="preloader">
    <div id="spinner">
      <img alt="" src="images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
    

  <div class="main-content">
    <div id="fullpage-container">

      <div class="section bg-img-cover layer-overlay overlay-dark-4" id="home" data-bg-img="images/bg/bg4.jpg">
        <div class="display-table">
          <div class="display-table-cell text-center">
            <div class="container pt-0 pb-0">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="text-white text-uppercase font-titillium font-64 font-weight-600">Hi, I am <span class="text-theme-color-2">Car care</span></h1>
                  <h4 class="text-white">Select Your Profession.</h4>
                  <a href="U_login.php" class="btn btn-default mt-20">I'm User !</a>
                   <a href="../vendor/V_login.php" class="btn btn-default mt-20">I'm Vendor !</a>
                   <a href="V_Tow_list.php" class="btn btn-default mt-20">Tow Your Car</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="section bg-img-cover layer-overlay overlay-dark-6" id="services" data-bg-img="images/bg/bg6.jpg">
        <div class="display-table">
          <div class="display-table-cell">
            <div class="container pt-0 pb-0">
              <div class="section-title text-center">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-uppercase title text-white">Special <span class="text-theme-color-2 font-weight-300"> Services</span></h2>
                    <p class="text-uppercase letter-space-4 text-gray">Best car Services  workshop & Tow services.</p>
                  </div>
                </div>
              </div>
              <div class="section-content">
                <div class="row mtli-row-clearfix">
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="icon-box iconbox-theme-colored p-15 mb-30">
                      <a class="icon icon-dark border-left-theme-color-2-3px pull-left flip mb-0 mr-0 mt-5" >
                        <i class="flaticon-carfixing-car-washing-machine"></i>
                      </a>
                      <div class="icon-box-details">                      
                        <p  style="margin-top: 30px;" class="text-gray font-13 mb-0">  <h4 class="icon-box-title text-white font-16 font-weight-600 m-0 mb-5">Car Wash and Glassing</h4> </p>
                      </div>
                    </div>    
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="icon-box iconbox-theme-colored p-15 mb-30">
                      <a class="icon icon-dark border-left-theme-color-2-3px pull-left flip mb-0 mr-0 mt-5" href="#">
                        <i class="flaticon-carfixing-pistons-cross"></i>
                      </a>
                      <div class="icon-box-details">
                        
                       <p  style="margin-top: 30px;" class="text-gray font-13 mb-0">  <h4 class="icon-box-title text-white font-16 font-weight-600 m-0 mb-5">Engine Diognostic</h4> </p>
                      </div>
                    </div>    
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="icon-box iconbox-theme-colored p-15 mb-30">
                      <a class="icon icon-dark border-left-theme-color-2-3px pull-left flip mb-0 mr-0 mt-5" href="#">
                        <i class="flaticon-carfixing-tool-4"></i>
                      </a>
                      <div class="icon-box-details">
             
                          <p  style="margin-top: 30px;" class="text-gray font-13 mb-0">  <h4 class="icon-box-title text-white font-16 font-weight-600 m-0 mb-5">Wheel & Tire Repairing</h4> </p>
                      </div>
                    </div>    
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="icon-box iconbox-theme-colored p-15 mb-30">
                      <a class="icon icon-dark border-left-theme-color-2-3px pull-left flip mb-0 mr-0 mt-5" href="#">
                        <i class="flaticon-carfixing-tool-7"></i>
                      </a>
                      <div class="icon-box-details">
                      \
                          <p  style="margin-top: 30px;" class="text-gray font-13 mb-0">  <h4 class="icon-box-title text-white font-16 font-weight-600 m-0 mb-5">Car Body Repairing</h4> </p>
                      </div>
                    </div>    
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="icon-box iconbox-theme-colored p-15 mb-30">
                      <a class="icon icon-dark border-left-theme-color-2-3px pull-left flip mb-0 mr-0 mt-5" href="#">
                        <i class="flaticon-carfixing-transport-6"></i>
                      </a>
                      <div class="icon-box-details">
                     
                         <p  style="margin-top: 30px;" class="text-gray font-13 mb-0">  <h4 class="icon-box-title text-white font-16 font-weight-600 m-0 mb-5">Complete Analysis</h4> </p>
                      </div>
                    </div>    
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="icon-box iconbox-theme-colored p-15 mb-30">
                      <a class="icon icon-dark border-left-theme-color-2-3px pull-left flip mb-0 mr-0 mt-5" href="#">
                        <i class="flaticon-carfixing-transport-7"></i>
                      </a>
                      <div class="icon-box-details">
                      
                         <p  style="margin-top: 30px;" class="text-gray font-13 mb-0">  <h4 class="icon-box-title text-white font-16 font-weight-600 m-0 mb-5">24/7 Serivces</h4> </p>
                      </div>
                    </div>    
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="section bg-img-cover layer-overlay overlay-dark-6" id="support" data-bg-img="images/bg/bg11.jpg">
        <div class="display-table">
          <div class="display-table-cell">
            <div class="container pt-0 pb-0">
              <div class="section-title text-center mb-60">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-uppercase title text-white">CAR <span class="text-theme-color-2 font-weight-300">Gallery</span></h2>
                    <p class="text-uppercase letter-space-4 text-gray">Best car repair & car services workshop.</p>
                  </div>
                </div>
              </div>
              <div style="text-align: right;margin-bottom: 10px;"><a href="v_C_B_list.php" class="btn btn-default mt-20">More...</a></div>
              <div class="section-content">
                <div class="row">
                  <!-- Gallery Grid -->
                  <div class="owl-carousel-4col" data-nav="true">

                   <?php 

                      $sql=mysql_query("SELECT * from c_brandname where id <= '8'");
                      while ($data = mysql_fetch_assoc($sql)) {
                     
                                                   
                   ?>

                    <div class="item">
                      <div class="work-gallery">
                        <div class="gallery-thumb">
                          <img class="img-fullwidth" style="width: 100px; height: 220px;" alt="" src="<?php echo $data['image_url']; ?>">
                          <div class="gallery-overlay"></div>                  
                          <div class="gallery-contect">
                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                              <li><a href="V_C_M_list.php?b_code=<?php echo $data['b_code']; ?>"><i class="fa fa-link"></i></a></li>
                              <li><a data-rel="prettyPhoto" href="<?php echo $data['image_url']; ?>">
             	             <i class="fa fa-arrows"></i></a></li>
                            </ul>
                          </div> 
                        </div>
                        <div class="gallery-bottom-part text-center">
                          <h4 class="title text-uppercase font-raleway font-weight-600 m-0"><?php echo $data['b_name']; ?></h4>
                          
                        </div>
                      </div>
                    </div>
                    <?php 
                  }
                    ?>
                   
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section bg-img-cover layer-overlay overlay-dark-4" id="contact" data-bg-img="images/bg/bg5.jpg">
        <div class="display-table">
          <div class="display-table-cell">
            <div class="container pt-0 pb-0">
              <div class="row">
                <div class="col-md-12">
                  <a href="tel:8000208960">
                  <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center bg-theme-colored-transparent border-1px pt-30 pb-30 ">
                      <i class="fa fa-phone font-36 mb-10 text-white"></i>
                      <h4 class="text-white">Call Us</h4>
                      <h5 class="text-white">Phone: 80002 08960</h5>
                    </div>
                  </div>
                </a>
                  <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center bg-theme-colored-transparent border-1px pt-30 pb-30 ">
                      <i class="fa fa-map-marker font-36 mb-10 text-white"></i>
                      <h4 class="text-white">Address</h4>
                      <h5 class="text-white">Kumbhani Bussiness Hub,Surat.</h5>
                    </div>
                  </div>
                  <a href="mailto:carservice@gmail.com">
                  <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center bg-theme-colored-transparent border-1px pt-30 pb-30 ">
                      <i class="fa fa-envelope font-36 mb-10 text-white"></i>
                      <h4 class="text-white">Email</h4>
                      <h5 class="text-white">carservice@gmail.com</h5> 
                    </div>
                  </div>
                </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>  
  </div>

</div>

<script src="js/calendar-events-data.js"></script>

<script src="js/fullpage-slider/jquery.fullpage.min.js"></script> 
<script type="text/javascript">
 $(document).ready(function() {
  $('#fullpage-container').fullpage({
      navigation: true,
      navigationPosition: 'right',
      verticalCentered: false
    });
  });
</script>
<script src="js/custom.js"></script>

</body>
</html>