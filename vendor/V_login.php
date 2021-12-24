<?php
session_start();
include('../conn.inc');
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Vendor | SignIn</title>



<link rel="stylesheet" href="vendor_login/fonts/material-icon/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="vendor_login/css/style.css">
</head>

<?php

$email = "";
$password = "";

if (isset($_POST['signin'])) 
  {


    $email_get = $_POST["email"];
    $password_get = $_POST["password"];
    

       if (empty($_POST["email"]) && empty($_POST["password"]) )
          {
          $email = "Email Required";
          $password = "Password Required";
          }
       else
          { 
            if (!empty($_POST["email"])) 
             {
              $email = "";  
                  if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
                    {
                    $email = "Email Is Not Valid";
                    }
                  else
                    {
                       if (!empty($_POST["password"])) 
                          {
                            $password = "";

                             if ($_POST["service"] == "garage") 
                                 {
                                    
                               $sql = mysql_query("SELECT email FROM vender_info WHERE email = '$email_get'");     
                       
                      
                               $user_email = mysql_num_rows($sql);
    

                                               if($user_email > 0)
                                             {
                                             $email = "";
                                             $sql1 = mysql_query("SELECT email, password,v_code FROM vender_info WHERE email = '$email_get' and password = '$password_get'");

                       
                                                 $vender_password = mysql_fetch_assoc($sql1);
                                                 $v_code = $vender_password['v_code'];
                     
                                                 $rows_of_select1 = mysql_num_rows($sql1);
                    

                                                   if($rows_of_select1 > 0)
                                                   {
                                                   $password = "";
                  
                                                   $_SESSION['v_code']=$v_code;                            
                                                    echo "<script> location.href='V_home.php'; </script>";
                                                   }
                                               else
                                                   {
                                                   $password = "Password Is Not Valid";
                                                    }
                    
                                            }
                                            else
                                            {
                                            $email = "Email Is Not Registered";
                                            } 
       

                           }
                               else
                                 {
                                    
                                    $sql = mysql_query("SELECT email FROM t_vender WHERE email = '$email_get'");     
                       
                      
                                      $user_email = mysql_num_rows($sql);
    

                                               if($user_email > 0)
                                             {
                                             $email = "";
                                                 $sql1 = mysql_query("SELECT email, password,t_code FROM t_vender WHERE email = '$email_get' and password = '$password_get'");

                       
                                                 $vender_password = mysql_fetch_assoc($sql1);
                                                 $t_code = $vender_password['t_code'];
                     
                                                 $rows_of_select1 = mysql_num_rows($sql1);
                    

                                                   if($rows_of_select1 > 0)
                                                   {
                                                   $password = "";
                  
                                                    $_SESSION['t_code'] = $t_code;                                                                     
                                                    echo "<script> location.href='T_home.php'; </script>";
                                                   }
                                               else
                                                   {
                                                   $password = "Password Is Not Valid";
                                                    }
                    
                                            }
                                            else
                                            {
                                            $email = "Email Is Not Registered";
                                            } 
       


                                }  
                                
    
                           } 
                           else
                           {
                         $password = "Password Required";
                           }  
                    }         
        
                }
                else
                {
              $email = "Email Required";
                }
      
           }
      
   }

?>
<style type="text/css">
  #divmain {
        background-image: url("bgimage.jpg");
        
        }
</style>




<body style="margin: 0px;height: 0px;">
 <div class="main" id="divmain">
<section class="sign-in">
<div class="container">
<div class="signin-content">
<div class="signin-image">
<figure><img src="loginimage.jpg" alt="LogIn image"></figure>
<a href="V_signup.php" class="signup-image-link">Create an account</a>
</div>
<div class="signin-form">
<h2 class="form-title">SIGN IN </h2>
<form method="POST" class="register-form" id="login-form">
  <span class="error"><?php echo $email;?></span>
<div class="form-group">
<label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
<input type="text" name="email" id="your_Email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>" placeholder="Your Email" />
</div>
<span class="error"><?php echo $password;?></span>
<div class="form-group">
<label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
<input type="password" name="password" id="your_pass"  placeholder="Password" />

</div>
<div  class="form-group">
           <p style="margin-left: 10px;">Select your service</p>
       <table>
        <tr>
         <td>
           <input style="margin-left: 10px; margin-right: 20px; width: 15px;height: 15px;"  type="radio" checked="check" value="garage" name="service" <?php echo (isset($_POST['service']) && $_POST['service'] == 'garage') ?  'checked':'';      ?> />
         </td>
         <td>
           Garage
         </td>
         <td>
           <input style="margin-left: 10px; margin-right: 20px; width: 15px;height: 15px;"  type="radio" value="towing" name="service" <?php echo (isset($_POST['service']) && $_POST['service'] == 'towing') ?  'checked':'';      ?> />
         </td>
         <td>
           Towing
         </td>
         </tr> 
       </table>

</div>
<div class="form-group">
<input type="checkbox" name="remember-me" id="remember-me"  class="agree-term" />
<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
</div>
<div class="form-group">
 <label for="remember-me" class="label-agree-term">
  <span><span></span></span><a href="V_forget.php">Forget Password?</a></label>
</div>
<div class="form-group form-button">
<input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
</div>
</form>

</div>
</div>
</div>
</section>
</div>
<script src="vendor_login/vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>



</body>

</html>


