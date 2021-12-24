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
        

?>


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
  <?php include("header.php"); ?>
  
  <!-- Start main-content -->
  <div class="main-content" style="margin-bottom: 100px;">

      
      <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-90 pb-50">
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Create New Garage</h3>
            </div>
          </div>
        </div>
      </div>
    </section>


       <section>
     <div class="container pt-50 pb-50">
        <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            <form  method="post" enctype="multipart/form-data" >
              <div class="row">
                <div class="reservation-first-step">
                
                   <div class="alert alert-danger alert-dismissible" role="alert" id="tryagin"  style="display:none;">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    Something went Wrong, Try Again.
                  </div>
                  <div class="alert alert-danger alert-dismissible" role="alert" id="email"  style="display:none;">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     Your Email is already registered With Other Garage.
                  </div>
               
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <label>Garage Name</label>
                      <input placeholder="Type Name Here" name="garagename" value="<?php if(isset($_POST['garagename'])){echo $_POST['garagename'];} ?>" type="text" id="car_model"  class="form-control" required data-errormessage-value-missing="Please Enter Garage Name">
                    </div>                    
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <label>Email</label>
                      <input placeholder="Type Email Here"  name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" type="email" id="car_model" class="form-control" required data-errormessage-value-missing="Please Enter Garage Name">
                    </div>                    
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <label>Contact number</label>
                      <input placeholder="Type Contact Number Here" value="<?php if(isset($_POST['c_number'])){echo $_POST['c_number'];} ?>" type="text" id="car_model" name="c_number" class="form-control" pattern="[6789][0-9]{9}" data-errormessage-pattern-mismatch="Please Enter Valid Contact Number" required data-errormessage-value-missing="Please Enter Contact Number">
                    </div>                    
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <label>Address</label>
                      <input placeholder="Type Address Here" value="<?php if(isset($_POST['address'])){echo $_POST['address'];} ?>" type="text" id="car_model" name="address" class="form-control" required data-errormessage-value-missing="Please Enter Garage Address" >
                    </div> 

                  </div>
                  <div class='col-sm-6'>
                   <div class="form-group">
                     <label>Opening Time</label>
                    <div class='input-group date' id='datetimepicker3'>
                    <input type='text' class="form-control" name="opentime" value="<?php if(isset($_POST['opentime'])){echo $_POST['opentime'];} ?>" placeholder="Type Opening Time Here"  />

                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                  </div>
                  </div>
                  </div>
                   

                  <script type="text/javascript">
                 $(function () {
                 $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                  });
                  });
                 </script>  

                  <div class='col-sm-6'>
                   <div class="form-group">
                       <label>Closing Time</label>
                    <div class='input-group date'  id='datetimepicker4'>
                    <input type='text' class="form-control" name="closetime" placeholder="Type Closing Time Here" value="<?php if(isset($_POST['closetime'])){echo $_POST['closetime'];} ?>" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                  </div>
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
                  <script type="text/javascript">
                 $(function () {
                 $('#datetimepicker4').datetimepicker({
                    format: 'LT'
                  });
                  });
                 </script>      
                 
                 <style>
      #map {
       width: 100%;
       height: 270px;
      }
      <
    </style>             
                  <div class="col-sm-12">
                    <div class="form-group mb-30">
                      <label>Select Location Of Your Garage</label>
                       <div id="map"></div>
    <script >
    

      
var map; 
var marker = false;
function initMap() {

    var centerOfMap = new google.maps.LatLng(20.5937, 78.9629);

   
    var options = {
      center: centerOfMap, 
      zoom: 7 
    };

    map = new google.maps.Map(document.getElementById('map'), options);

    google.maps.event.addListener(map, 'click', function(event) {                
      
        var clickedLocation = event.latLng;
  
        if(marker === false){
            marker = new google.maps.Marker({
                position: clickedLocation,
                map: map,
                draggable: true 
            });
            google.maps.event.addListener(marker, 'dragend', function(event){
                markerLocation();
            });
        } else{
            marker.setPosition(clickedLocation);
        }
        markerLocation();
    });
}
  

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);


        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }


     
      function markerLocation(){
    var currentLocation = marker.getPosition();
     document.getElementById('lat').value = currentLocation.lat(); 
     document.getElementById('lng').value = currentLocation.lng(); 
                             }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8XP7nsLF1PCUXk0z29okBjpYb4gUa6Js&callback=initMap">
    </script>
           
                    </div>                    
                  </div>
                   </div>
              </div>
                   <div class="alert alert-danger alert-dismissible" role="alert" id="location"  style="display:none;">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Please Select Your Garage Location.
                  </div>     
          

                   <input type="text" id="lat" readonly="yes" hidden="yes" name="lat"><br>
                   <input type="text" id="lng" readonly="yes" hidden="yes" name="lng">              
                        
               
              <div class="col-sm-12">
                    <div class="form-group mb-30">
                      <label>Upload Garage Photos :</label>
                      <table>
                        <tr>
                          <td>
                       <div class="uploader" onclick="$('#filePhoto').click()">
                           <img src="../uploads/v_garage/v_garage.png">
                           <input type="file" name="userImage1"  id="filePhoto" accept="image/*" required data-errormessage-value-missing="Please Enter Garage Image " />
                       </div>
                      </td>
                      <td>
                      <div class="uploader1" onclick="$('#filePhoto1').click()">
                               <img src="../uploads/v_garage/v_garage.png">
                               <input type="file" name="userImage2"  id="filePhoto1" accept="image/*" required data-errormessage-value-missing="Please Enter Garage Image " />
                      </div>
                      </td>
                      <td>
                      <div class="uploader2" onclick="$('#filePhoto2').click()">
                               <img src="../uploads/v_garage/v_garage.png">
                               <input type="file" name="userImage3"  id="filePhoto2" accept="image/*" required data-errormessage-value-missing="Please Enter Garage Image " />
                      </div>
                       </td>
                      </tr>
                      </table>
                             
                    
                    </div> 

                  <div class="alert alert-danger alert-dismissible" role="alert" id="images"  style="display:none;">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Please Upload Garage Images.
                  </div>
                   <div class="alert alert-danger alert-dismissible" role="alert" id="uploadimage"  style="display:none;">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Please Try Again,File Is Not Uploaded
                  </div>
                   <div class="alert alert-danger alert-dismissible" role="alert" id="filetype"  style="display:none;">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Please Select Only gif,jpg,jpeg,png Files.
                  </div>
                 
                     <div class="col-sm-12" style="text-align: center;">
                    <div class="form-group mb-30">
                   
                      <input type="submit" name="submit" value="Save" style="text-align: center;"  class="btn btn-dark btn-xl">
                    </div>                    
                  </div>

                  </div>



              
            </form>

          </div>

        </div>
        </div>
      </div >
    </section>

      
            
      
    </div>    

  </div>

   <?php

function createRandomPassword() { 

    $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= 7) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 

    return $pass; 

} 



      

  if(isset($_POST['submit']))

  {


    $garagename = $_POST['garagename'];
    $email = $_POST['email'];
    $address = $_POST['address'];
      $location  ="mfgh"; 
      $contactno = $_POST['c_number'];
      $opentime = $_POST['opentime'];
      $closetime= $_POST['closetime'];
      $location_lat = $_POST['lat'];
      $location_lng = $_POST['lng'];



      

      if (empty($_FILES['userImage1']['name']))
      {
          $url1 = "";
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
           echo "<script>  document.getElementById('uploadimage').style.display = '';</script>";
          } 

        }
        else
        {
        echo "<script>  document.getElementById('uploadimage').style.display = '';</script>";
       }
     }
     else
     {
     echo "<script>  document.getElementById('filetype').style.display = '';</script>";
     }
   }

   if (empty($_FILES['userImage2']['name']))
   {
       $url2 = "";
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
           echo "<script>  document.getElementById('uploadimage').style.display = '';</script>";
          } 

        }
        else
        {
        echo "<script>  document.getElementById('uploadimage').style.display = '';</script>";
       }
     }
     else
     {
     echo "<script>  document.getElementById('filetype').style.display = '';</script>";
     }
   }

  if (empty($_FILES['userImage3']['name'])) 
  {
       $url3 = "";
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
           echo "<script>  document.getElementById('uploadimage').style.display = '';</script>";
          } 

        }
        else
        {
        echo "<script>  document.getElementById('uploadimage').style.display = '';</script>";
       }
     }
     else
     {
     echo "<script>  document.getElementById('filetype').style.display = '';</script>";
     }
   }




  if (empty($_POST["opentime"]) && empty($_POST["closetime"]) && empty($_POST["lat"]) && empty($_POST["lng"]) )
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
                    


         $garage_code = createRandomPassword();   
         $approval = "pending";



         $check1 = mysql_query("SELECT g_code FROM v_garage WHERE g_code = '$garage_code'");
         $check_gcode1 =mysql_num_rows($check1);
         if($check_gcode1 > 0)
         {
           $garage_code = createRandomPassword();            
           $check2 = mysql_query("SELECT g_email  FROM v_garage WHERE g_email='$email' ");
           $check_acc2 =mysql_num_rows($check2);     
           if($check_acc2 <= 0)
           {
             $sql4 =  mysql_query("INSERT INTO v_garage(v_code,g_name,g_email,g_address,location_lat,location_lng,contact_no,g_opentime,g_closetime,g_imageurl1,g_imageurl2,g_imageurl3,g_code,approval) VALUES('$v_code','$garagename','$email','$address','$location_lat','$location_lng','$contactno','$opentime','$closetime','$url1','$url2','$url3','$garage_code','$approval')");

             if($sql4)
             {


              echo "<script type='text/javascript'>location.href='v_garage_list.php';</script>";
            }
            else
            {
                   mysql_error();
             echo "<script>  document.getElementById('tryagin').style.display = '';</script>"; 
           }
         }
         else
         {
         echo "<script>  document.getElementById('email').style.display = '';</script>"; 
        }                                                                    
      }
      else
      {
       $check = mysql_query("SELECT g_email  FROM v_garage WHERE g_email='$email'");
       $check_acc =mysql_num_rows($check);    
       if($check_acc <= 0)
       { 
         $sql5 =  mysql_query("INSERT INTO v_garage(v_code,g_name,g_email,g_address,location_lat,location_lng,contact_no,g_opentime,g_closetime,g_imageurl1,g_imageurl2,g_imageurl3,g_code,approval) VALUES('$v_code','$garagename','$email','$address','$location_lat','$location_lng','$contactno','$opentime','$closetime','$url1','$url2','$url3','$garage_code','$approval')");

         if($sql5)
         {

          echo "<script type='text/javascript'>location.href='v_garage_list.php';</script>";
        }
        else
        {


        echo "<script>  document.getElementById('tryagin').style.display = '';</script>"; 
       }
     }
     else
     {
      echo "<script>  document.getElementById('email').style.display = '';</script>";        
    }
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


<!-- detail of vender -->
  <!-- end main-content -->
  
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



 