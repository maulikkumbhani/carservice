

<?php
session_start();
include('../conn.inc');

  
        if($_REQUEST['m_code'] == NULL)
    {
        header('location:com_message_pump()_list.php');

    }

    
 
            $m_code = $_REQUEST['m_code'];


?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>


<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="RepairShop | Car Repair & Car Wash HTML Template" />
<meta name="keywords" content="car,auto,moto,repair,wash,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />

<title>Car | Detail</title>

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

  <?php include("header_c.php"); ?>
  

<div class="main-content">


    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-90 pb-50">

        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Car Details</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
 
   <?php
 
   $sql=mysql_query("SELECT * FROM car_detail where m_code='$m_code'");
   $data = mysql_fetch_assoc($sql);

   ?>

    <section>
      <div class="container">
        <div class="section-content">
           <section >
      <div class="container pt-0">
        <div class="row">
          <div class="col-md-12" >
           
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img style="height: 600px;" src="<?php echo $data['c_image1']; ?>" alt="...">
                 
                </div>
                <div class="item">
                  <img style="height: 600px;" src="<?php echo $data['c_image2']; ?>" alt="...">
                 
                </div>
                 <div class="item">
                  <img style="height: 600px;" src="<?php echo $data['c_image3']; ?>" alt="...">
                 
                </div>
              </div>
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
          <div class="row">

            <div class="product">
            
              <div class="col-md-7">
                <div class="product-summary">
                  <h2 class="product-title"><?php echo $data['m_name']; ?></h2>
                  <div class="product_review">
                    <ul class="review_text list-inline">
                      <li>
                        <div title="Rated 4.50 out of 5" class="star-rating"><span data-width="90%"><?php echo $data['rating']; ?></span></div>
                      </li>
                      <li><a href="#"><span>2</span> Reviews</a></li>
                      <li><a href="#">Add reviews</a></li>
                    </ul>
                  </div>
                  <div class="price"><ins><span class="amount">₹ <?php echo $data['price']; ?></span></ins> </div>
                 
                </div>
              </div>
              <div class="col-md-12"><h3>Specifications</h3>
                <div class="horizontal-tab product-tab">
                  <ul class="nav nav-tabs">
                  	<li class="active"><a href="#tab1" data-toggle="tab">OVERVIEW</a></li>
                    <li><a href="#tab2" data-toggle="tab">DIMENSIONS</a></li>
                    <li><a href="#tab3" data-toggle="tab">WHEELS & TYRES</a></li>
                    <li><a href="#tab4" data-toggle="tab">BRAKING SYSTEM</a></li>
                    <li><a href="#tab5" data-toggle="tab">SUSPENSION</a></li>
                    <li><a href="#tab6" data-toggle="tab">STEERING</a></li>
                  </ul>
                  <div class="tab-content">
                  	 <div class="tab-pane fade in active" id="tab1">
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>Displacement</th>
                            <td><p><?PHP echo $data['displacement']; ?> cc</p></td>
                          </tr>
                          <tr>
                            <th>Power</th>
                            <td><p><?PHP echo $data['power']; ?> bhp</p></td>
                          </tr>
                          <tr>
                            <th>Torque</th>
                            <td><p><?PHP echo $data['torque']; ?> Nm</p></td>
                          </tr>
                          <tr>
                            <th>Mileage</th>
                            <td><p><?PHP echo $data['mileage']; ?> kmpl</p></td>
                          </tr>
                          <tr>
                            <th>Transmission</th>
                            <td><?PHP echo $data['transmission']; ?></td>
                          </tr>
                           <tr>
                            <th>Drive Train</th>
                            <td><p><?PHP echo $data['drivetrain']; ?> mm</p></td>
                          </tr>
                           <tr>
                            <th>Number of Gears</th>
                            <td><?PHP echo $data['gear']; ?></td>
                          </tr>
                           <tr>
                            <th>Number of Cylinders</th>
                            <td><?PHP echo $data['cylinder']; ?></td>
                          </tr>
                          <tr>
                            <th>Fuel Tank Capacity</th>
                            <td><p><?PHP echo $data['fueltankcapacity']; ?> liter</p></td>
                          </tr>
                          <tr>
                            <th>Wheel Type</th>
                            <td><?PHP echo $data['wheeltype']; ?></td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="tab2">
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>Length</th>
                            <td><p><?PHP echo $data['length']; ?> mm</p></td>
                          </tr>
                          <tr>
                            <th>Width</th>
                            <td><p><?PHP echo $data['width']; ?> mm</p></td>
                          </tr>
                          <tr>
                            <th>Height</th>
                            <td><p><?PHP echo $data['height']; ?> mm</p></td>
                          </tr>
                          <tr>
                            <th>Wheelbase</th>
                            <td><?PHP echo $data['wheelbase']; ?> mm</td>
                          </tr>
                          <tr>
                            <th>Ground Clearance</th>
                            <td><?PHP echo $data['groundclearance']; ?> mm</td>
                          </tr>
                           <tr>
                            <th>Kerb Weight</th>
                            <td><?PHP echo $data['kerbweight']; ?> kg</td>
                          </tr>
                           <tr>
                            <th>Minimum Turing Radius</th>
                            <td><?PHP echo $data['minimumturningradius']; ?> m</td>
                          </tr>
                           <tr>
                            <th>No. Of Doors</th>
                            <td><?PHP echo $data['noofdoors']; ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="tab3">
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>Wheel Type</th>
                            <td><p><?PHP echo $data['wheeltype']; ?></p></td>
                          </tr>
                          <tr>
                            <th>Tyre Type</th>
                            <td><p><?PHP echo $data['tyretype']; ?></p></td>
                          </tr>
                          <tr>
                            <th>Front Tyre Size</th>
                            <td><p><?PHP echo $data['fronttyresize']; ?></p></td>
                          </tr>
                          <tr>
                            <th>Rear Tyre Size</th>
                            <td><?PHP echo $data['reartyresize']; ?></td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="tab4">
                       <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>Front Brake Type</th>
                            <td><p><?PHP echo $data['frontbraketype']; ?></p></td>
                          </tr>
                          <tr>
                            <th>Rear Brake Type</th>
                            <td><p><?PHP echo $data['rearbraketype']; ?></p></td>
                          </tr>                       
                        </tbody>
                      </table>
                    </div>
                  
                  <div class="tab-pane fade" id="tab5">
                       <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>Front Suspension</th>
                            <td><p><?PHP echo $data['frontsuspension']; ?></p></td>
                          </tr>
                          <tr>
                            <th>Rear Suspension</th>
                            <td><p><?PHP echo $data['rearsuspension']; ?></p></td>
                          </tr>                       
                        </tbody>
                      </table>
                    </div>
                
                  <div class="tab-pane fade" id="tab6">
                       <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>Power Steering</th>
                            <td><p><?PHP echo $data['power_steering']; ?></p></td>
                          </tr>
                          <tr>
                            <th>Adjustable Power Steering</th>
                            <td><p><?PHP echo $data['apowersteering']; ?></p></td>
                          </tr>     
                           <tr>
                            <th>Steering Type</th>
                            <td><p><?PHP echo $data['steeringType']; ?></p></td>
                          </tr>                       
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
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