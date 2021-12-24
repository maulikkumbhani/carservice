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
    $t_info = mysql_fetch_assoc($sql2); 
   
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
<title>Vendor | Profile</title>

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
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-90 pb-50">
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Profile </h3>
            </div>
          </div>
        </div>
      </div>
    </section>

     <?php 

                 $t_name_error= "";
                  $t_email_error= "";
                  $t_contact_error = "";
                  $t_address_error = "";
                  $dl_number_error = "";
                  $location_error = "";
             

    ?>


    <section>
     <div class="container pt-50 pb-50">
        <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" >
             
                 <?php

                 
                   $sql1 = mysql_query("SELECT * from t_vender  WHERE t_code='$t_code'");
                   $data = mysql_fetch_assoc($sql1)
               ?>
              <!-- Garage info -->
               <div class="row">
                <div class="reservation-second-step">
                  <h3 class="text-theme-colored line-bottom mt-0 mr-15 mb-30 ml-15"> Towing  <span class="text-theme-color-2">Information</span></h3>
                  <div class="col-sm-6">
                    <div class="form-group mb-30"> 
                      <label for="amount">Company Name</label>
                    <input value="<?php echo $data['t_name']; ?>" type="text" id="reservation_email" name="t_name" class="form-control" required data-errormessage-value-missing="Please Enter Company Name" >
                      <span style="margin-bottom: 30px;" class="error"><?php echo $t_name_error;?></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                       <label for="amount">Email</label>
                      <input value="<?php echo $data['t_email']; ?>" type="text" id="reservation_email" name="t_email" class="form-control" required data-errormessage-value-missing="Please Enter Email Name" >
                        <span class="error"><?php echo $t_email_error;?></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                       <label for="amount">Contact Number</label>
                      <input value="<?php echo $data['t_contact']; ?>" type="text" id="reservation_phone" name="t_contact" class="form-control" pattern="[6789][0-9]{9}" data-errormessage-pattern-mismatch="Please Enter Valid Contact Number"required data-errormessage-value-missing="Please Enter Contact Number">
                        <span class="error"><?php echo $t_contact_error;?></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                       <label for="amount">Address</label>
                      <input value="<?php echo $data['t_address']; ?>" type="text" id="reservation_address" name="t_address" class="form-control" required data-errormessage-value-missing="Please Enter Address Name" >
                        <span class="error"><?php echo $t_address_error;?></span>
                    </div>
                  </div>
                   <div class="col-sm-6">
                    <div class="form-group mb-30">
                       <label for="amount">Driveing Linces Number</label>
                      <input value="<?php echo $data['dl_number']; ?>" type="text" id="reservation_address" name="dl_number" class="form-control" pattern=".{15}" required data-errormessage-value-missing="Please Enter valid Driving License Number" >
                        <span class="error"><?php echo $dl_number_error;?></span>
                    </div>
                  </div>
                   
                   <style>                 
                       #map {
                            height: 300px; 
                            width: 100%;
                            margin-bottom: 20px; 
                            }
                   </style>
                   <!-- garage location -->
                     <div class="col-sm-12">
                        <div>
                       <div id="map"></div>
                         <span class="error"><?php echo $location_error;?></span>
                     </div>

     <script>

                                var map; 
                  var marker = false; 

                 
                  function initMap() {



                                         var centerOfMap = new google.maps.LatLng(<?php echo $data['location_lat']; ?>,<?php echo $data['location_lng']; ?>);

                       
                        var options = {
                          center: centerOfMap, 
                          zoom: 7 
                        };

                        
                        map = new google.maps.Map(document.getElementById('map'), options);

                           var uluru = {lat: <?php echo $data['location_lat']; ?>, lng:<?php echo $data['location_lng']; ?>};
                            var marker = new google.maps.Marker({  position: uluru,  map: map,draggable: true});
                            google.maps.event.addListener(marker, 'dragend', function (event) {
                                    document.getElementById("lat").value = this.getPosition().lat();
                                    document.getElementById("lng").value = this.getPosition().lng();
                                });
                              google.maps.event.addListener(map, 'click', function(event) {         
                                  var clickedLocation = event.latLng;
                                  if(marker === false){
                                      marker = google.maps.Marker({
                                          position: clickedLocation,
                                          map: map,
                                          draggable: true 
                                      });
                                     
                                  } else{
                                      marker.setPosition(clickedLocation);
                                       document.getElementById('lat').value = marker.getPosition().lat();
                                       document.getElementById('lng').value = marker.getPosition().lng(); 
                                  }
                              });


                    }
                  
                    

                    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                      infoWindow.setPosition(pos);


                      infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
                      infoWindow.open(map);
                    }                    

                   </script>
                      <script async defer
                         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8XP7nsLF1PCUXk0z29okBjpYb4gUa6Js&callback=initMap">
                      </script>
                       <input type="text" id="lat" readonly="yes" hidden="yes" name="lat" value="<?php echo $data['location_lat'];?>" ><br>
                       <input type="text" id="lng" readonly="yes" hidden="yes" name="lng" value="<?php echo $data['location_lng'];?>">
                       <span style="margin-bottom: 20px;" class="error">
                        <?php  echo $location_error; ?>
                </div>

                  
                </div>
              </div>               



          <!--     Personal -->
              <div class="row">
                <div class="reservation-second-step">
                  <h3 class="text-theme-colored line-bottom mt-0 mr-15 mb-30 ml-15">Personal <span class="text-theme-color-2">Information</span></h3>

                  <div class="col-sm-6">
                
                    <div class="form-group mb-30">
                       <label for="amount">Name</label>
                      <input  value="<?php echo $data['name']; ?>"  type="text" id="reservation_name" name="name" class="form-control required" required data-errormessage-value-missing="Please Enter Your Name">
                    </div>
                    <div class="form-group mb-30">
                       <label for="amount">Email</label>
                      <input value="<?php echo $data['email']; ?>" type="text" id="reservation_email" name="email" class="form-control " disabled>
                    </div>
                     <div class="form-group mb-30">
                       <label for="amount">Contact Number</label>
                      <input value="<?php echo $data['contact_no']; ?>" type="text" id="reservation_phone" name="c_number" class="form-control "  pattern="[6789][0-9]{9}" data-errormessage-pattern-mismatch="Please Enter Valid Contact Number" required data-errormessage-value-missing="Please Enter Contact Number">
                    </div>
                  </div>
                 
                 
          <div class="col-md-5" >
          <div class="uploader" onclick="$('#filePhoto').click()">
          <img src="<?php if($data['t_profile'] == NULL){echo "../uploads/v_profile/user.png";} else{echo $data['t_profile'];} ?>"><?php $imageurl = $data['t_profile']; ?>
          <input type="file" name="userImage"  id="filePhoto" />
          </div>
          </div>

          <script type="text/javascript">
            var imageLoader = document.getElementById('filePhoto');
            imageLoader.addEventListener('change', handleImage, false);

           function handleImage(e) {
            var reader = new FileReader();
              reader.onload = function (event) {
        
               $('.uploader img').attr('src',event.target.result);
                 }
                    reader.readAsDataURL(e.target.files[0]);
           }

          </script>

          <style type="text/css">
            
            .uploader {position:relative; overflow:hidden; width:200px; height:200px; background:#f3f3f3; border:2px dashed #e8e8e8;}

#filePhoto{
    position:absolute;
    width:200px;
    height:200px;
    top:-50px;
    left:0;
    z-index:2;
    opacity:0;
    cursor:pointer;
}

.uploader img{
    position:absolute;
    width:200px;
    height:200px;
    top:-1px;
    left:-1px;
    z-index:1;
    border:none;
}

          </style>
                  <div >
                  <div >
                  
                   </div>
                </div>

              </div>
              </div>
              <input type="submit" align="center" name="update" value="UPDATE" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">
            </form>
           
                  
          </div>
        </div>
        </div>
      </div >
    </section>

  </div>

<?php

  if(isset($_POST["update"]))

{

   
     $name = $_POST['name'];     
     $c_number = $_POST['c_number'];
     $t_name = $_POST['t_name'];
     $t_contact = $_POST['t_contact'];
     $t_address = $_POST['t_address'];
     $location_lat = $_POST['lat'];
     $location_lng = $_POST['lng'];
     $t_email = $_POST['t_email'];
     $dl_number = $_POST['dl_number'];



        if (empty($_FILES['userImage']['name']))
    {
      $url1 = $imageurl;
    }
    else
    {
        $type1 = explode('.', $_FILES['userImage']['name']);
        $type1 = $type1[count($type1) - 1];
        $url1 = '../uploads/v_t_profile/' . uniqid(rand()) . '.' . $type1;

        if (in_array($type1, array('gif', 'jpg', 'jpeg', 'png'))) 
         {
            if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
             
             if (move_uploaded_file($_FILES['userImage']['tmp_name'],$url1)) 
             {
               
             }
             else
             {
              $image1_error = "File is Not uploads , Try Again"; 
             } 

            }
            else
            {
               $image1_error = "File is Not uploads , Try Again"; 
            }
         }
         else
         {
             $image1_error = "File Extensions Must Be jpg,jpeg,png,gif"; 
         }
    }

   





if (empty($_POST["t_name"]) && empty($_POST["t_email"]) && empty($_POST["t_contact"]) && empty($_POST["t_address"]) && empty($_POST["lat"]) && empty($_POST["lng"]) && empty($_POST["dl_number"]))
        {
                  
                  $t_name_error= "Required";
                  $t_email_error= "Required";
                  $t_contact_error = "Required";
                  $t_address_error = "Required";
                  $dl_number_error = "Required";
                  $location_error = "Required";
         
          }
       else
          { 

            if (!empty($_POST["t_name"])) 
             {

               $t_name_error= "";
               if (!empty($_POST["t_email"])) 
                {
                $t_email_error= "";
                  if(!filter_var($_POST['t_email'],FILTER_VALIDATE_EMAIL))
                    {
                   $t_email_error= "Email is Not Valid";
                    }
                  else
                    {
                    if (!empty($_POST["t_address"])) 
                      { 
                         $t_address_error = "";

                         if (!empty($_POST["t_contact"])) 

                          {
                           $c_number_error = "";                      
                      
                             if (preg_match('/^[0-9]{10}+$/', $_POST['t_contact'])) 
                          {
                           $c_number_error = "";
                              if(isset($_POST['lat']) && isset($_POST['lng']))
                              {
                              
                                
                                if($_POST['lat']!=0 || $_POST['lng']!=0)
                                { 

                                     
                                     if (strlen($_POST['dl_number']) == 15 ) 
                                        {
                                                     
                                                                   
                                                    
                                 
                                      
                                                   
                                                     $check2 = mysql_query("SELECT g_email  FROM t_vender WHERE t_email='$t_email' ");
                                                     $check_acc2 =mysql_num_rows($check2);     
                                                     if($check_acc2 <= 0)
                                                        {
                                                           $approval = "pending";

                                                         $sql4 =  mysql_query("UPDATE `t_vender` SET `name`='$name',`contact_no`='$c_number',`t_name`='$t_name',`t_email`='$t_email',`t_address`='$t_address',`t_contact`='$t_contact',`location_lat`='$location_lat',`location_lng`='$location_lng',`dl_number`='$dl_number',`t_profile`='$url1',`approval`='$approval' WHERE  t_code='$t_code' ");
                                                     
                                                          if($sql4)
                                                              {                                                                                                     
                                                              echo "<script type='text/javascript'>location.href='T_home.php';</script>";
                                                              }
                                                          else
                                                              {
                                                             
                                                               echo "<script type='text/javascript'>alert('Try Again');</script>";
                                                               }
                                                        }
                                                        else
                                                        {
                                                        $t_email_error = "Your Email is already registered With Other Account.";
                                                        }                                                                    
                                          }
                                          else
                                          {
                                              
                                          }              
                                 }                                                                                  
                                else
                                {
                                   $location_error = "Please select your location";  
                                }


                              }                                                                       
    
                            } 
                            else
                             {
                            
                             }  
                          } 
                         else
                          {
                        
                          }   
                      }
                      else
                      {
            
                      }   
                   }       
        
                }
                else
                {
                
                }
              }
              else
              {   
              
              }

          }  
}

?>
  <!-- end main-content -->
  
  <!-- Footer -->
 <?php include("T_footer.php");  ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div> 
<script src="js/calendar-events-data.js"></script> 
<script src="js/custom.js"></script>
<script src="civem.js"></script>

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