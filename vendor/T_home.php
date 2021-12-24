<?php
session_start();
include('../conn.inc');


if($_SESSION['t_code'] == NULL)
{
  header('location:V_login.php');

}
else
{

}
$t_code = $_SESSION['t_code'];    
$sql2 = mysql_query("SELECT * from t_vender WHERE t_code='$t_code'");
$vender_info = mysql_fetch_assoc($sql2);


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
<title>Vendor | Home</title>

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
  <?php include("t_header.php"); ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <section id="home">
        
      <div class="rev_slider_wrapper">
        <div class="rev_slider" data-version="5.0">
          <ul>

            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg3.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
        
              <img src="images/bg/bg3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
         
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                id="rs-1-layer-1"

                data-x="['left']"
                data-hoffset="['30']"
                data-y="['middle']"
                data-voffset="['-110']" 
                data-fontsize="['100']"
                data-lineheight="['110']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:700;">CarRepair
              </div>

              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                id="rs-1-layer-2"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['-25']" 
                data-fontsize="['35']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">The Best CarRepair Services 
              </div>
              <div class="tp-caption tp-resizeme text-white" 
                id="rs-1-layer-3"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['35']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
              </div>

              <div class="tp-caption tp-resizeme" 
                id="rs-1-layer-4"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['100']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
              </div>
            </li>

            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg7.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
          
              <img src="images/bg/bg7.jpg"  alt=""  data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
             
              <div class="tp-caption tp-resizeme text-uppercase  bg-theme-colored-transparent text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                id="rs-2-layer-1"
              
                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['-90']" 
                data-fontsize="['28']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">We always provide you 
              </div>
              <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                id="rs-2-layer-2"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['-20']"
                data-fontsize="['48']"
                data-lineheight="['70']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">Best car repair services 
              </div>

              <div class="tp-caption tp-resizeme text-white text-center" 
                id="rs-2-layer-3"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['50']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
              </div>

              <div class="tp-caption tp-resizeme" 
                id="rs-2-layer-4"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['115']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
              </div>
            </li>

            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg4.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
            
              <img src="images/bg/bg4.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
           
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                id="rs-3-layer-1"

                data-x="['right']"
                data-hoffset="['30']"
                data-y="['middle']"
                data-voffset="['-90']" 
                data-fontsize="['64']"
                data-lineheight="['72']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">Make Your Car
              </div>

              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                id="rs-3-layer-2"

                data-x="['right']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['-25']" 
                data-fontsize="['32']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">Last longer & attractive 
              </div>

              <div class="tp-caption tp-resizeme text-white text-right" 
                id="rs-3-layer-3"

                data-x="['right']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['30']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
              </div>

              <div class="tp-caption tp-resizeme" 
                id="rs-3-layer-4"

                data-x="['right']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['95']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
              </div>
            </li>

          </ul>
        </div>
      </div>
      <script>
        $(document).ready(function(e) {
          $(".rev_slider").revolution({
            sliderType:"standard",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 5000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
              arrows: {
                style:"zeus",
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                left: {
                  h_align:"left",
                  v_align:"center",
                  h_offset:30,
                  v_offset:0
                },
                right: {
                  h_align:"right",
                  v_align:"center",
                  h_offset:30,
                  v_offset:0
                }
              },
              bullets: {
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                style:"metis",
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                direction:"horizontal",
                h_align:"center",
                v_align:"bottom",
                h_offset:0,
                v_offset:30,
                space:5,
                tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
              }
            },
            responsiveLevels: [1240, 1024, 778],
            visibilityLevels: [1240, 1024, 778],
            gridwidth: [1170, 1024, 778, 480],
            gridheight: [650, 768, 960, 720],
            lazyType: "none",
            parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "0",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
          });
        });
      </script>

    </section>


     <section id="about" style="margin-top: 50px;">
      <div class="container mt-0 pt-0">
        <div class="section-content">
          <div class="row mt-10">
            <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <h3 class="text-uppercase mt-0 ">Welcome To <span class="text-theme-color-2"> Car Care </span></h3>
              <p class="lead"> </p>
              <div class="row">
                <div class="col-sm-4 col-md-4">
                  <img class="img-fullwidth mb-sm-30" src="images/about/as1.jpg" alt="">
                </div>
                 <div class="col-sm-4 col-md-4">
                  <img class="img-fullwidth mb-sm-30" src="images/about/as2.jpg" alt="">
                </div>
                 <div class="col-sm-4 col-md-4">
                  <img class="img-fullwidth mb-sm-30" src="images/about/as4.jpg" alt="">
                </div>
                 <div class="col-sm-4 col-md-4" style="margin-top: 20px;">
                  <img class="img-fullwidth mb-sm-30" src="images/about/3.jpg" alt="">
                </div>
                 <div class="col-sm-4 col-md-4" style="margin-top: 20px;">
                  <img class="img-fullwidth mb-sm-30" src="images/about/as5.jpg" alt="">
                </div>
                 <div class="col-sm-4 col-md-4" style="margin-top: 20px;">
                  <img class="img-fullwidth mb-sm-30" src="images/about/as6.jpg" alt="">
                </div>
              </div> 
          
            </div>
            <div class="col-sm-12 col-md-6 mt-10 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="owl-carousel-2col">
                <div class="item">
                  <div class="box-hover-effect  mb-sm-30">
                    <div class="thumb"> <img class="img-fullwidth mb-20" src="images/services/bg-6.jpg" alt="..."> </div>
                    <div class="caption">
                      <h4 class="text-uppercase letter-space-1 mt-0 ">Best Garages<span class="text-theme-color-2"> Services</span></h4>
                       <p>We Provide Bast Garages In Your Nearest Area That Will Be Help To Find And Book Your Car Service Appointment.</p> 
                   
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box-hover-effect effect1 mb-sm-30">
                    <div class="thumb"><img class="img-fullwidth mb-20" src="images/services/bg-5.jpg" alt="..."> </div>
                    <div class="caption">
                      <h4 class="text-uppercase letter-space-1 mt-0 ">Best Tow <span class="text-theme-color-2"> Services</span></h4>
                       <p>Towing car is Solved a Your Problem on Road Accident and Other Sichuation.</p>
                    
                    </div>
                  </div>
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row equal-height">
          <div class="col-sm-6 col-md-6 p-0 bg-img-cover wow fadeInRight hidden-xs hidden-sm" data-bg-img="images/bg/bg9.jpg"  data-wow-duration="1s" data-wow-delay="0.5s">
          </div>
          <div class="col-sm-12 col-md-6 bg-lighter wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="pt-80 pb-90 pl-80 pr-100 p-md-30">
              <h2 class="mb-30 mt-0 line-height-1 mb-xs-0 mb-sm-30 text-center">Why <span class="text-theme-color-2"> Choose Us?</span></h2>
              <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box border-1px p-15 mb-30">
                      <a class="icon pull-left sm-pull-none flip" href="#">
                        <i class="pe-7s-monitor text-theme-colored"></i>
                      </a>
                      <div class="ml-70 ml-sm-0">
                        <h4 class="icon-box-title mt-15 mb-5 text-uppercase ">Best Services</h4>
                        <p>We Provide Best Garages For Your Car Services.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box border-1px p-15 mb-30">
                      <a class="icon pull-left sm-pull-none flip" href="#">
                        <i class="flaticon-carfixing-tool-6 text-theme-colored"></i>
                      </a>
                      <div class="ml-70 ml-sm-0">
                        <h4 class="icon-box-title mt-15 mb-5 text-uppercase ">Appointment Booking</h4>
                        <p>Fastest Appointment Booking with Your Nearest Garages.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box border-1px p-15 mb-0 pb-0">
                      <a class="icon pull-left sm-pull-none flip" href="#">
                        <i class="flaticon-carfixing-web text-theme-colored"></i>
                      </a>
                      <div class="ml-70 ml-sm-0">
                        <h4 class="icon-box-title mt-15 mb-5 text-uppercase ">Tow Services</h4>
                        <p>Arranging A Tow van In Your Short Distance.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box border-1px p-15 mb-0 pb-0">
                      <a class="icon pull-left sm-pull-none flip" href="#">
                        <i class="pe-7s-cash text-theme-colored"></i>
                      </a>
                      <div class="ml-70 ml-sm-0">
                        <h4 class="icon-box-title mt-15 mb-5 text-uppercase ">Car Detail</h4>
                        <p>All Car Detail With Category.</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 



    <?php
   
 $user_registered = mysql_query("SELECT id From user_info ");
   $users_number = mysql_num_rows($user_registered);

     $vendor_registered = mysql_query("SELECT id From vender_info ");
   $vendor_number = mysql_num_rows($vendor_registered);

   $vendor_t_registered = mysql_query("SELECT id From t_vender ");
   $vendor_t_number = mysql_num_rows($vendor_t_registered);

   $Vendor_total = $vendor_t_number + $vendor_number;

    $Feedback = mysql_query("SELECT id From Feedback ");
   $Feedback_number = mysql_num_rows($Feedback);

      $Workdone="Work Done";
     $appointment = mysql_query("SELECT id From appointments WHERE status = '$Workdone'");
     $appointment_number = mysql_num_rows($appointment);

   $views = mysql_query("SELECT * From page_views WHERE id ='1'"); 
   $views1 =   mysql_fetch_assoc($views); 
   $views_number = $views1['views'];



    
 ?>
    


    <section class="divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg14.jpg" data-stellar-background-ratio="0.5" style="margin-top: 50px; ">
      <div class="container-fluid pt-0 pb-0">
        <div class="row equal-height">
        
          <div class="col-md-12  wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="p-70">
              <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 mb-md-50 text-white mb-70">
                  <div class="funfact text-center">
                    <div class="funfact-content">
                      <div class="funfact-icon">
                        <i class="pe-7s-car mt-5"></i>
                      </div>
                      <h2 data-animation-duration="2000" data-value="<?php echo $appointment_number; ?>" class="animate-number text-theme-color-2 mt-10">0</h2>
                      <h4 class="text-uppercase text-white">Car Serviced</h4>
                      
                    </div>
                  </div>
                </div>
               <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 mb-md-50 text-white mb-70">
                  <div class="funfact text-center">
                    <div class="funfact-content">
                      <div class="funfact-icon">
                        <i class="pe-7s-users mt-5"></i>
                      </div>
                      <h2 data-animation-duration="2000" data-value="<?php echo $vendor_number; ?>" class="animate-number text-theme-color-2 font-30 mt-10">0</h2>
                      <h4 class="text-uppercase text-white">Garages Ragisterd</h4>
                     
                    </div>
                  </div>
                </div>
                 <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 mb-md-50 text-white mb-70">
                  <div class="funfact text-center">
                    <div class="funfact-content">
                      <div class="funfact-icon">
                        <i class="pe-7s-users mt-5"></i>
                      </div>
                      <h2 data-animation-duration="2000" data-value="<?php echo $vendor_t_number; ?>" class="animate-number text-theme-color-2 font-30 mt-10">0</h2>
                      <h4 class="text-uppercase text-white">Tow van Ragisterd</h4>
                     
                    </div>
                  </div>
                </div>
             <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 mb-md-50 text-white mb-70">
                  <div class="funfact text-center">
                    <div class="funfact-content">
                      <div class="funfact-icon">
                        <i class="pe-7s-like2 mt-5"></i>
                      </div>
                      <h2 data-animation-duration="2000" data-value="<?php echo $views_number; ?>" class="animate-number text-theme-color-2 font-30 mt-10">0</h2>
                      <h4 class="text-uppercase text-white">Viewers</h4>
                    
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
  <!-- end main-content -->
  
  <!-- Footer -->
  <?php include("T_footer.php");  ?>
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