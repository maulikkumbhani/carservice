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
  <?php include("header.php"); ?>
  
  <!-- Start main-content -->
  <div class="main-content" style="margin-bottom: 100px;">

      
      <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-90 pb-50">
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Profile Detail</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

     <?php
   $sql_select= mysql_query ("SELECT * from vender_info where v_code='$v_code'");
   $check = mysql_fetch_assoc($sql_select)
     
      ?>

    <section class="divider" style="padding-top: 30px;">
      <div class="container pt-0">
         <form    method="POST" enctype="multipart/form-data">
        <div class="row pt-10">
          <div class="col-md-5" >
          <div class="uploader" onclick="$('#filePhoto').click()">
             <img src="<?php if($check['v_image']==NULL){echo "../uploads/v_profile/user.png";}else{echo $check['v_image'];} ?>"><?php $imageurl = $check['v_image'];  ?>
             <input type="file" name="userImage"  id="filePhoto" />
              <!-- <span class="error"><?php echo $image1_error;?></span> -->
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

          <div class="col-md-7">
           
           

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input name="v_name" class="form-control required"  required data-errormessage-value-missing="Please Enter User Name" type="text" value="<?php  echo $check['v_name']; ?>" >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small></small></label>
                    <input name="email" class="form-control required email" type="email" value="<?php echo $check['email']; ?>" disabled>
                  </div>
                </div>
              </div>                
              <div class="row">
                
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Phone<small>*</small></label>
                    <input name="v_contact_no" pattern="[6789][0-9]{9}" required data-errormessage-value-missing="Please Enter Contact Number" data-errormessage-pattern-mismatch="Please Enter Valid Contact Number" class="form-control required" type="text" placeholder="<?php if($check['contact_no']==0){ echo "Enter Contact Number";}?>" value="<?php echo $check['contact_no'];  ?>">
                  </div>
                </div>
              </div>

             
              <div class="form-group">
               
                <button type="submit" name="update"  class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" >Update Profile</button>
                <a href="V_garage_list.php?v_code=<?php echo $v_code;?> ">
                <button type="button" name="garage"  class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" >Garage Info   ></button></a>
               
              </div>
            

           
          </div>
        </div>
        </form>
      </div>
    </section>
 


  </div>
   
<!-- detail of vender -->

<?php
  

  if(isset($_POST['update']))
  {
    
     
        $v_name = $_POST['v_name'];  
        $contact_no = $_POST['v_contact_no'];
        
     
        
    if (empty($_FILES['userImage']['name']))
    {
      $url = $imageurl;
    }
    else
    {
      $type = explode('.', $_FILES['userImage']['name']);
      $type = $type[count($type) - 1];
      $url = '../uploads/v_profile/' . uniqid(rand()) . '.' . $type;

        if (in_array($type, array('gif', 'jpg', 'jpeg', 'png'))) 
         {
            if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
             
             if (move_uploaded_file($_FILES['userImage']['tmp_name'],$url)) 
             {
               
             }
             else
             {
            echo  $image1_error = "File is Not uploads , Try Again"; 
             } 

            }
            else
            {
             echo  $image1_error = "File is Not uploads , Try Again"; 
            }
         }
         else
         {
          echo $image1_error = "File Extensions Must Be jpg,jpeg,png,gif"; 
         }
    }

                // insert into database
                $sql = mysql_query ("UPDATE `vender_info` SET `v_name`='$v_name',`contact_no`='$contact_no',`v_image`='$url'  WHERE v_code='$v_code'");
     

                if($sql) {
                
                     echo "<script type='text/javascript'>
                
                     location.href='V_detail.php';
                     </script>";
                } 
                else {
                      echo "<script type='text/javascript'>alert('your detail not updated');</script>";               }

       }

?>

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