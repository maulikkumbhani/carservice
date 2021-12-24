<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php
session_start();
include('../conn.inc');


if($_SESSION['v_code'] == NULL)
    {
        header('location:V_login.php');

    }
    else
    {
         
    }
    $v_code = $_SESSION['v_code'];    
    $sql2 = mysql_query("SELECT * from vender_info WHERE v_code='$v_code'");
    $vender_info = mysql_fetch_assoc($sql2); 
    $g_code = $_REQUEST['g_code'];
          
        

?>


<head>

<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="RepairShop | Car Repair & Car Wash HTML Template" />
<meta name="keywords" content="car,auto,moto,repair,wash,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Vendor | Garage update</title>

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


<?php


$garagename_error = "";
   $email_error = "";
   $address_error = "";
   $c_number_error = "";
   $opentime_error = "";
   $closetime_error = "";  
   $image1_error = "";
   $image2_error = "";
   $image3_error = "";
   $location_error ="";

 ?>

 

  
  <!-- Start main-content -->
  <div class="main-content">
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-90 pb-50">
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Garage Details</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section  >

<?php
      
      $sql_select = mysql_query ( "SELECT * FROM v_garage WHERE g_code='$g_code'");
      $check= mysql_fetch_assoc($sql_select)
   
      ?>


        <div class="row pt-10 " style="margin: 50px;padding: 10%; " >
          <form method="post" enctype="multipart/form-data">

          <div class="col-md">
            
            <!-- Contact Form -->
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Garage Name <small>*</small></label>
                    <input type="text" name="garagename" class="form-control" value="<?php echo $check['g_name']; ?>" required data-errormessage-value-missing="Please Enter Garage Name" >
                  </div>
                </div>
                 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Email <small>*</small></label>
                    <input type="email" name="email" class="form-control required email" value="<?php echo $check['g_email']; ?>" disabled />
                  </div>
                </div>
                

              </div>          
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Address <small>*</small></label>

                    <input type="text" name="address" value="<?php echo $check['g_address']; ?>" class="form-control " required data-errormessage-value-missing="Please Enter Address Name"> 
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Contact No <small>*</small></label>
                    <input type="text" class="form-control required" name="c_number" value="<?php echo $check['contact_no']; ?>" pattern="[6789][0-9]{9}" data-errormessage-pattern-mismatch="Please Enter Valid Contact Number" required data-errormessage-value-missing="Please Enter Contact Number" >
                  </div>
                </div>
              </div>
               <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Opening Time <small>*</small></label>
                    <div class='input-group date'  id='datetimepicker3'>
                    <input type='text' class="form-control" name="opentime" placeholder="Type Closing Time Here" value="<?php echo $check['g_opentime']; ?>" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                     <script type="text/javascript">
                        $(function () {
                        $('#datetimepicker3').datetimepicker({
                         format: 'LT'
                         });
                          });
                       </script> 
                  </div>
                  </div>

                </div>
                
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Closing Time <small>*</small></label>
                    <div class='input-group date'  id='datetimepicker4'>
                    <input type='text' class="form-control" name="closetime" placeholder="Type Closing Time Here" value="<?php echo $check['g_closetime']; ?>"  />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                       <script type="text/javascript">
                        $(function () {
                        $('#datetimepicker4').datetimepicker({
                         format: 'LT'
                         });
                          });
                       </script> 
                  </div>
                  </div>
                </div>
                
                    
              </div>
               <div class="alert alert-danger alert-dismissible" role="alert" id="opentime&closetime"  style="display:none;">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Please Select Your Opening And Closing Time.
                    </div> 
               <div class="alert alert-danger alert-dismissible" role="alert" id="opentime"  style="display:none;">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Please Select Your Opening Time.
                    </div>  
                    <div class="alert alert-danger alert-dismissible" role="alert" id="closetime"  style="display:none;">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Please Select Your Closing Time.
                    </div> 

                 <div class="col-md">
          <div class="row">
            <div class="col-md-12">
              <div class="thumb">                                
                <style>   
                                  #map {
                                   width: 100%;
                                   height: 300px;
                                 }
                               </style>
                               <script>

                                var map; 
                  var marker = false;  

                 
                  function initMap() {



                                         var centerOfMap = new google.maps.LatLng(<?php echo $check['location_lat']; ?>,<?php echo $check['location_lng']; ?>);

                        var options = {
                          center: centerOfMap, 
                          zoom: 7 
                        };
                        map = new google.maps.Map(document.getElementById('map'), options);

                           var uluru = {lat: <?php echo $check['location_lat']; ?>, lng:<?php echo $check['location_lng']; ?>};
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
                  <input type="text" id="lat" readonly="yes" hidden="yes"  name="lat" value="<?php echo $check['location_lat'];?>" ><br>
                   <input type="text" id="lng" readonly="yes" hidden="yes"  name="lng" value="<?php echo $check['location_lng'];?>">
                  

    <div class="col-md">
     <div class="form-group ">
        <label>Garage Location</label>

       <div id="map"></div> 


     </div>  
     <div class="alert alert-danger alert-dismissible" role="alert" id="location"  style="display:none;">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       Please Select Your Garage Location.
     </div>                  
   </div>
 </div>
</div>
</div>
</div> 
 <div class="col-sm-12">
              <div class="form-group mb-30">
                      <label>Garage Images</label>
                      <table>
                        <tr>
                          <td>
                       <div class="uploader" onclick="$('#filePhoto').click()">
                           <img src="<?php if($check['g_imageurl1']==NULL){echo "../uploads/v_garage/no-image.png";}else{echo $check['g_imageurl1'];} ?>"><?php $imageurl1 = $check['g_imageurl1'];  ?>
                           <input type="file" name="userImage1"  id="filePhoto" />
                            <span class="error"><?php echo $image1_error;?></span>
                       </div>
                      </td>
                      <td>
                      <div class="uploader1" onclick="$('#filePhoto1').click()">
                               <img src="<?php if($check['g_imageurl2']==NULL){echo "../uploads/v_garage/no-image.png";}else{echo $check['g_imageurl2'];} ?>"><?php $imageurl2 = $check['g_imageurl2']; ?>
                               <input type="file" name="userImage2"   id="filePhoto1" />
                                <span class="error"><?php echo $image2_error;?></span>
                      </div>
                      </td>
                      <td>
                      <div class="uploader2" onclick="$('#filePhoto2').click()">
                               <img src="<?php if($check['g_imageurl3']==NULL){echo "../uploads/v_garage/no-image.png";}else{echo $check['g_imageurl3'];} ?>"><?php $imageurl3 = $check['g_imageurl3']; ?>
                               <input type="file" name="userImage3"  id="filePhoto2" />
                                <span class="error"><?php echo $image3_error;?></span>
                      </div>
                       </td>
                      </tr>
                      </table>

                             
                    
                    </div> 
                 </div>  
             
              <div class="form-group">
                 <input type="submit" name="update" value="UPDATE" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">
              </div>
            </form>
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

        <script type="text/javascript">
            var imageLoader1 = document.getElementById('filePhoto1');
            imageLoader1.addEventListener('change', handleImage1, false);

           function handleImage1(e) {
            var reader1 = new FileReader();
              reader1.onload = function (event) {
        
               $('.uploader1 img').attr('src',event.target.result);
                 }
                    reader1.readAsDataURL(e.target.files[0]);
           }

          </script>
          <script type="text/javascript">
            var imageLoader2 = document.getElementById('filePhoto2');
            imageLoader2.addEventListener('change', handleImage2, false);

           function handleImage2(e) {
            var reader2 = new FileReader();
              reader2.onload = function (event) {
        
               $('.uploader2 img').attr('src',event.target.result);
                 }
                    reader2.readAsDataURL(e.target.files[0]);
           }

          </script>

   <style type="text/css">
            
            .uploader,.uploader1,.uploader2{
              position:relative;
               overflow:hidden;
               margin-right: 50px;
                width:200px;
                 height:200px;
                  background:#f3f3f3;
                   border:2px dashed #e8e8e8;}
                   

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
#filePhoto1{
    
    position:absolute;
    width:200px;
    height:200px;
    top:-50px;
    left:0;
    z-index:2;
    opacity:0;
    cursor:pointer;
}

#filePhoto2{
    
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
.uploader1 img{
    position:absolute;
    width:200px;
    height:200px;
    top:-1px;
    left:-1px;
    z-index:1;
    border:none;
}
.uploader2 img{
    position:absolute;
    width:200px;
    height:200px;
    top:-1px;
    left:-1px;
    z-index:1;
    border:none;
}


          </style>

    </section>
  </div>
  <!-- end main-content -->

<?php  

  if(isset($_POST['update']))
  {
    $g_name = $_POST['garagename'];
    $g_address = $_POST['address'];
    
    $contact_no = $_POST['c_number'];
    $g_opentime = $_POST['opentime'];
    $g_closetime = $_POST['closetime'];
    $location_lat = $_POST['lat'];
    $location_lng = $_POST['lng'];




  
    if (empty($_FILES['userImage1']['name']))
    {
      $url1 = $imageurl1;
    }
    else
    {
        $type1 = explode('.', $_FILES['userImage1']['name']);
        $type1 = $type1[count($type1) - 1];
        $url1 = '../uploads/v_garage/' . uniqid(rand()) . '.' . $type1;

        if (in_array($type1, array('gif', 'jpg', 'jpeg', 'png'))) 
         {
            if (is_uploaded_file($_FILES['userImage1']['tmp_name'])) {
             
             if (move_uploaded_file($_FILES['userImage1']['tmp_name'],$url1)) 
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

    if (empty($_FILES['userImage2']['name']))
     {
     $url2 = $imageurl2;
    }
    else
    {

        $type2 = explode('.', $_FILES['userImage2']['name']);
        $type2 = $type2[count($type2) - 1];
        $url2 = '../uploads/v_garage/' . uniqid(rand()) . '.' . $type2;

         if (in_array($type2, array('gif', 'jpg', 'jpeg', 'png'))) 
         {
            if (is_uploaded_file($_FILES['userImage2']['tmp_name'])) {
             
             if (move_uploaded_file($_FILES['userImage2']['tmp_name'],$url2)) 
             {
               
             }
             else
             {
              $image2_error = "File is Not uploads , Try Again"; 
             } 

            }
            else
            {
               $image2_error = "File is Not uploads , Try Again"; 
            }
         }
         else
         {
             $image2_error = "File Extensions Must Be jpg,jpeg,png,gif"; 
         }


    }

    if (empty($_FILES['userImage3']['name'])) 
    {
     $url3 = $imageurl3;
    }
    else
    {
        $type3 = explode('.', $_FILES['userImage3']['name']);
        $type3 = $type3[count($type3) - 1];
        $url3 = '../uploads/v_garage/' . uniqid(rand()) . '.' . $type3;

        if (in_array($type3, array('gif', 'jpg', 'jpeg', 'png'))) 
         {
            if (is_uploaded_file($_FILES['userImage3']['tmp_name'])) {
             
             if (move_uploaded_file($_FILES['userImage3']['tmp_name'],$url3)) 
             {
               
             }
             else
             {
              $image3_error = "File is Not uploads , Try Again"; 
             } 

            }
            else
            {
               $image3_error = "File is Not uploads , Try Again"; 
            }
         }
         else
         {
             $image3_error = "File Extensions Must Be jpg,jpeg,png,gif"; 
         }
 
    }


       if (empty($_POST["opentime"]) && empty($_POST["closetime"]) && empty($_POST["lat"]) && empty($_POST["lng"]))
           {
                 echo "<script>  document.getElementById('opentime&closetime').style.display = '';</script>";
                 echo "<script>  document.getElementById('location').style.display = '';</script>";
                
          }
       else
          { 
            if (!empty($_POST["opentime"])) 
             {
              echo "<script>  document.getElementById('opentime').style.display = 'none';</script>";
               
                 
              if (!empty($_POST["closetime"])) 
              {
                echo "<script>  document.getElementById('closetime').style.display = 'none';</script>";
                if (!empty($_POST["lat"])) 

                {
                 echo "<script>  document.getElementById('location').style.display = 'none';</script>";                      


                 $c_number_error = ""; 
                 $sql = mysql_query ("UPDATE `v_garage` SET g_name='$g_name',g_address='$g_address',location_lat='$location_lat',location_lng='$location_lng',contact_no='$contact_no',g_opentime='$g_opentime',g_closetime='$g_closetime',g_imageurl1='$url1',g_imageurl2='$url2',g_imageurl3='$url3' WHERE v_code='$v_code'");
                 if($sql)
                 {

                  echo "<script type='text/javascript'>location.href='v_garage_list.php';</script>";

                }
                else
                {
                 $message = "Your record is not updated";
                 echo "<script type='text/javascript'>alert('$message');</script>";
               }

             }
             else
             {

               echo "<script>  document.getElementById('location').style.display = '';</script>";                      

             }      


           } 
           else
           {
             echo "<script>  document.getElementById('closetime').style.display = '';</script>";
           }  
         } 
         else
         {
           echo "<script>  document.getElementById('opentime').style.display = '';</script>";
         }   
                   
             
        }     
       
  }
    
?>


  <!-- Footer -->
  <?php include("Footer.php");  ?>
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