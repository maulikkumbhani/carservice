<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php
session_start();
include('../conn.inc');


if($_SESSION['vender_code'] == NULL)
    {
        header('location:V_login.php');

    }
    else
    {
        
    }
    $vender_code = $_SESSION['vender_code'];    
    $sql2 = mysql_query("SELECT * from vender_info WHERE v_code='$vender_code'");
    $vender_info = mysql_fetch_assoc($sql2);
        

?>


<head>

<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="RepairShop | Car Repair & Car Wash HTML Template" />
<meta name="keywords" content="car,auto,moto,repair,wash,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Vendor | Garage detail</title>

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
              <h3 class="title text-white">Personal Details</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>

<!-- detail of garage -->
<?php
     $sql_select = mysql_query ( "SELECT * FROM v_garage WHERE v_code='$vender_code'");
     while ($check= mysql_fetch_assoc($sql_select)) 
     {
 ?>

        <div class="row pt-10">
          <div class="col-md-5">
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">


              </div>
            </div>
          </div>
          </div>
          <div class="col-md-7">
            <h4 class="mt-0 mb-30 line-bottom">Garage detail</h4>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" method="post">

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Garage Name </label>
                    <small>:-</small>
                    <label class="form-control"><?php echo $check['g_name']; ?></label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email </label>
                    <small>:-</small>
                    <label class="form-control"><?php echo $check['g_email']; ?></label>
                  </div>
                </div>
              </div>                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Address</label>
                    <small>:-</small>
                    <label class="form-control"><?php echo $check['g_address']; ?></label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Contact No</label>
                    <small>:-</small>
                    <label class="form-control"><?php echo $check['contact_no']; ?></label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Opening Time</label>
                    <small>:-</small>
                    <label class="form-control"><?php echo $check['g_opentime']; ?></label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Closing Time <small>*</small></label>
                    <small>:-</small>
                    <label class="form-control"><?php echo $check['g_closetime']; ?></label>
                  </div>
                </div>
              </div>
              <div class="form-group"><!-- 
                <input name="form_botcheck" class="form-control" type="hidden" value="" /> -->
                  <button class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">
                 <a href="V_G_update.php?g_code=<?php echo $check['g_code']; ?>&action=edit">Update</a>
                  </button>
              
              </div>
            </form>

          </div>
        </div>

<?php
        }
?>

    </section>
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