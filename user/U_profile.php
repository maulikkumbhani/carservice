<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php

session_start();
include('../conn.inc');


if($_SESSION['user_code'] == NULL)
  {
    header('location:U_login.php');

  }
  else
  {
    
  }
      $user_code = $_SESSION['user_code'];
      $sql2 = mysql_query("SELECT * from user_info WHERE user_code='$user_code'");
          $user_info = mysql_fetch_assoc($sql2);
?>


<head>

<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="RepairShop | Car Repair & Car Wash HTML Template" />
<meta name="keywords" content="car,auto,moto,repair,wash,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />

<title>User | Profile</title>

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
   $sql_select= mysql_query ("SELECT * from user_info where user_code='$user_code'");
   $check = mysql_fetch_assoc($sql_select)
     
      ?>

    <section class="divider" style="padding-top: 30px;">
      <div class="container pt-0">
         <form id="contact_form" name="contact_form"   method="POST" enctype="multipart/form-data">
        <div class="row pt-10">
          <div class="col-md-5" >
          <div class="uploader" onclick="$('#filePhoto').click()">
          <img src="<?php if($check['u_profile']==NULL){echo "../uploads/v_profile/user.png";}else{echo $check['u_profile']; }?>"><?php $imageurl = $check['u_profile']; ?>
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

          <div class="col-md-7">
           
           

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input name="u_name" class="form-control" type="text" value="<?php if(!$check['username'] == 0){ echo $check['username']; } ?>" required data-errormessage-value-missing="Please Enter Your User Name">
                  </div>
                </div>
               <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small></small></label>
                    <input name="email" class="form-control required email" type="email" value="<?php  echo $check['email']; ?>" disabled>
                  </div>
                </div>
              </div>                
              <div class="row">
                
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input name="contact_no" class="form-control" type="text" value="<?php if($check['contact_no'] == 0){ echo "Enter Your Contact Number";}else{ echo $check['contact_no']; }?>" pattern="[6789][0-9]{9}" data-errormessage-pattern-mismatch="Please Enter Valid Contact Number" required data-errormessage-value-missing="Please Enter Contact Number">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Address</label>
                    <input name="address" class="form-control" type="text" value="<?php if($check['contact_no']==0){ echo "Enter Your Address";}else{   echo $check['address']; } ?>" required data-errormessage-value-missing="Please Enter Your Address">
                  </div>
                </div>
              </div>

             
              <div class="form-group">
               
                <button type="submit" name="update"  class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" >Update Profile</button>
                
               
              </div>
            
           
          </div>
        </div>
        </form>
      </div>
    </section>
 


  </div>


      

<?php

  if(isset($_POST['update']))
  {
    $u_name = $_POST['u_name'];  
    $contact_no = $_POST['contact_no'];
    $address = $_POST['address'];
 


      


        if (empty($_FILES['userImage']['name']))
    {
      $url = $imageurl;
    }
    else
    {
        
        $type = explode('.', $_FILES['userImage']['name']);
        $type = $type[count($type) - 1];
        $url = '../uploads/U_profile/' . uniqid(rand()) . '.' . $type;

        if (in_array($type, array('gif', 'jpg', 'jpeg', 'png'))) 
         {
            if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
             
             if (move_uploaded_file($_FILES['userImage']['tmp_name'],$url)) 
             {
               
             }
             else
             {
             // $image1_error = "File is Not uploads , Try Again"; 
             } 

            }
            else
            {
              // $image1_error = "File is Not uploads , Try Again"; 
            }
         }
         else
         {
            // $image1_error = "File Extensions Must Be jpg,jpeg,png,gif"; 
         }
    }

        
     
        
      

                // insert into database
                $sql = mysql_query ("UPDATE `user_info` SET username='$u_name',contact_no='$contact_no',address = '$address',u_profile='$url' WHERE user_code='$user_code'");
     

                if($sql) {
                
                     echo "<script type='text/javascript'>
                
                     location.href='U_profile.php';
                     </script>";
                } 
                else {
                       mysql_error();
                      echo "<script type='text/javascript'>alert('your detail not updated');</script>";             
                        }

                
         
       }

    
        
  
        
?>

<?php include("footer.php") ?>

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