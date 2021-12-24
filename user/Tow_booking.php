<?php

session_start();
include('../conn.inc');


if($_SESSION['user_code'] == NULL)
{
  header('location:U_login.php');

}
else
{
  if($_REQUEST['t_code'] == NULL)
  {
    header('location:Tow_list.php');
  }
  
}
$tow_code = $_REQUEST['t_code'];
$usercode = $_SESSION['user_code'];
$user  = mysql_query("SELECT * from user_info WHERE user_code='$usercode'");
$userinfo = mysql_fetch_assoc($user);




?>




<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>


<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="RepairShop | Car Repair & Car Wash HTML Template" />
<meta name="keywords" content="car,auto,moto,repair,wash,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />


<title>User | Appointment</title>


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
              <h3 class="title text-white">Towing Appointment Booking Form</h3>
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
            
            <form  name="reservation_form"  method="post">
              <div class="row">
                <div class="reservation-first-step">
                  <h3 class="text-theme-colored line-bottom ml-15 mb-30 mr-15">User <span class="text-theme-color-2">Information</span></h3>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <label>User Name</label>
                       <input placeholder="Type Your Name Here" type="text" id="car_model" name="name" class="form-control" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}else{echo $userinfo['username']; }?>" required data-errormessage-value-missing="Please Enter User Name" style="margin-bottom: 70px;">
                      </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group mb-30" >
                      <label>Email</label>
                      <input placeholder="Type Email Here" type="Email" id="car_model" name="email" class="form-control" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}else{echo $userinfo['email']; }?>" required data-errormessage-value-missing="Please Enter  Email " style="margin-bottom: 70px;">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
            
                      <label for="amount">Contact Number</label>
                   <input placeholder="Type Car Number Here" type="text" id="car_model" name="contact" class="form-control" pattern="[6789][0-9]{9}" value="<?php if(isset($_POST['contact'])){echo $_POST['contact'];}else{echo $userinfo['contact_no']; }?>"  required data-errormessage-pattern-mismatch="Please Enter Valid Contact Number"  data-errormessage-value-missing="Please Enter Contact Number"  style="margin-bottom: 70px;">
                      <div id="slider-range-max"></div>
                    </div>
                  </div>
                 
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <label>Type Of Service</label>
                      <div class="styled-select">
                        <select id="car_service_select" name="service" class="form-control" required data-errormessage-value-missing="Please Select Service">
                          <option value="">- Select Your Service Type -</option>
                          <option value="Breakdown Towing">Breakdown Towing</option>
                          <option value="Accident Towing">Accident Towing</option>                         
                        </select>
                      </div>
                    </div>
                  </div>
               
                  <div class="clearfix"></div>                  
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <label>Car Number</label>
                      <input  class="form-control required " type="text" placeholder="Type car number" name="c_number" style="text-transform: uppercase;" value="<?php if(isset($_POST['c_number'])){echo $_POST['c_number'];}?>" required pattern="(([A-Za-z]){2,3}(|-)(?:[0-9]){1,2}(|-)(?:[A-Za-z]){2}(|-)([0-9]){1,4})|(([A-Za-z]){2,3}(|-)([0-9]){1,4})"  data-errormessage-pattern-mismatch="Please Enter Valid Car Number, Formate: GJ05MK0007" data-errormessage-value-missing="Please Enter Car Number"  style="margin-bottom: 110px;">
                    </div>
                  </div>
                   <div class="col-sm-6">
                     <div class="form-group mb-30" >
                      <label>Address</label>
                      <input placeholder="Type Address Here" style="padding: 20px;" id="car_model" name="address" value="<?php if(isset($_POST['address'])){echo $_POST['address'];}?>" required data-errormessage-value-missing="Please Enter Your Address" class="form-control" ></textarea>
                    </div>
                  </div>
                   
                     <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
       width: 100%;
       height: 270px;
      }
      #maplocation {
       width: 70%;
       height: 270px;
       position: absolute;
      }
    
      /* Optional: Makes the sample page fill the window. */
      
    </style>  
     <script >
      

      
var map; 
var marker = false; ////Has the user plotted their location marker? 
        
//Function called to initialize / create the map.
//This is called when the page has loaded.
function initMap() {

    //The center location of our map.
    var centerOfMap = new google.maps.LatLng(20.5937, 78.9629);

    //Map options.
    var options = {
      center: centerOfMap, //Set center.
      zoom: 4 //The zoom value.
    };

    //Create the map object.
    map = new google.maps.Map(document.getElementById('map'), options);

    //Listen for any clicks on the map.
    google.maps.event.addListener(map, 'click', function(event) {                
        //Get the location that the user clicked.
        var clickedLocation = event.latLng;
        //If the marker hasn't been added.
        if(marker === false){
            //Create the marker.
            marker = new google.maps.Marker({
                position: clickedLocation,
                map: map,
                draggable: true //make it draggable
            });
            //Listen for drag events!
            google.maps.event.addListener(marker, 'dragend', function(event){
                markerLocation();
            });
        } else{
            //Marker has already been added, so just change its location.
            marker.setPosition(clickedLocation);
        }
        //Get the marker's location.
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
    //Get location.
    var currentLocation = marker.getPosition();
    //Add lat and lng values to a field that we can save.
     document.getElementById('lat').value = currentLocation.lat(); //latitude
     document.getElementById('lng').value = currentLocation.lng(); //longitude
                             }
    </script>


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8XP7nsLF1PCUXk0z29okBjpYb4gUa6Js&callback=initMap">
    </script>       
    
                  <div class="col-sm-12">
                    <div class="form-group mb-30">
                      <label>Select Pick-up Location</label>

                      <div  id="maplocation" >
                       <input type="text" id="lat" class="form-control"  name="lat" ><br>
                        <input  type="text" id="lng" class="form-control"  name="lng"  > 
                        </div>

                       <div id="map">
                        
                       </div>
                    
                     </div>
                    <div class="alert alert-danger alert-dismissible" role="alert" id="alert"  style="display: none;">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Please Select Your Pick-up Location.
                    </div>
                   </div>     
                </div>
              </div >
                


<?php
    $t_code=$_REQUEST['t_code'];
    $sql = mysql_query("SELECT * from t_vender WHERE t_code='$t_code'");
    $data = mysql_fetch_assoc($sql);
?>
             
               <div class="row">
                <div class="reservation-second-step">
                  <h3 class="text-theme-colored line-bottom mt-0 mr-15 mb-30 ml-15"> Towing <span class="text-theme-color-2">Information</span></h3>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                    <input placeholder="<?php if($data['t_name']==NULL){ echo "Name Is Not Available";}else{ echo $data['t_name']; } ?>" type="text" id="reservation_email" name="reservation_email" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input placeholder="<?php if($data['t_email']==NULL){ echo "Email Is Not Available";}else{  echo $data['t_email']; } ?>" type="text" id="reservation_email" name="reservation_email" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input placeholder="<?php if($data['t_contact']==NULL){ echo "Contact Is Not Available";}else{  echo $data['t_contact']; } ?>" type="text" id="reservation_phone" name="reservation_phone" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <input placeholder="<?php if($data['t_address']==NULL){ echo "Address Is Not Available";}else{  echo $data['t_address']; } ?>" type="text" id="reservation_address" name="reservation_address" class="form-control" disabled>
                    </div>
                  </div>
                  

                  
                </div>
              </div>
              <div class="col-sm-12" style="text-align: center;">
                    <div class="form-group mb-30">
                   
                      <input type="submit" name="submit" id="submit" value="Book Appointment" style="text-align: center;"  class="btn btn-dark btn-xl" >
                    </div>                    
                  </div>


            </form>
          </div>
        </div>
        </div>
      </div >
    </section>

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


if(isset($_POST["submit"]))
{
$t_a_code = createRandomPassword();
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$c_number=$_POST['c_number'];
$location_lat=$_POST['lat'];
$location_lng=$_POST['lng'];
$service=$_POST['service'];
$status = "Pending";
$t_code = $_REQUEST['t_code'];
$vender_status = "busy";
$t_email = $data['t_email'];



  if (empty($_POST['lat'])) {

   echo "<script>  document.getElementById('alert').style.display = '';</script>";
  }
else
{
$sqlins1=mysql_query("INSERT INTO `t_appointments`( `name`, `email`, `address`, `contact_no`, `location_lat`, `location_lng`, `c_number`, `service`, `t_code`, `t_a_code`,`status`) VALUES ('$name','$email','$address','$contact','$location_lat','$location_lng','$c_number','$service','$t_code','$t_a_code','$status')");
$info = $c_number;
  $sql2=mysql_query("UPDATE t_vender SET status='$vender_status' WHERE t_code='$t_code'");
if($sqlins1 && $sql2)
  {
  							             $premsg="Your towing for ";
                             $postmsg=" has been successfully booked. check your detail from link : ";
                             $link="http://localhost/carservice/user/Tow_A_detail.php?t_a_code=$t_a_code";
                             $statusmsg=$premsg.$c_number.$postmsg.$link;
						 	 ob_start();
                             require 'PHPMailer-master/PHPMailerAutoload.php';
                             $mail = new PHPMailer();
                             $mail ->IsSmtp();
                             $mail ->SMTPDebug =0;
                             $mail ->SMTPAuth = true;
                             $mail ->SMTPSecure = 'ssl';
                             $mail ->Host = "smtp.gmail.com";
                             $mail ->Port = 465; // or 587
                            
                             $mail ->Username = "carcareservice16122@gmail.com";
                             $mail ->Password = "carcare16122@";
                             $mail ->SetFrom("carcareservice16122@gmail.com");
                             $mail ->Subject = "Towing booking";
                             $mail ->Body = $statusmsg;
                             $mail ->AddAddress($email);
                             

                             if(!$mail->Send())
                             {
                                 echo "<script>alert('Network Connection ERROR !');</script>";
                             }
                             else
                             {
                                $msg = "";  
                             }

echo "<script> location.href='Tow_vendor_mail.php?t_code=$t_code&w=$t_a_code'; </script>"; 

 
  }  
else
  {
    mysql_error();
  }

   
}
}
?>
 

<?php include("Tow_footer.php") ?>

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