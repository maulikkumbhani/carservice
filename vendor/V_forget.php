<?php
session_start();
include('../conn.inc');
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Vendor| SignIn</title>

<link rel="stylesheet" href="vendor_login/fonts/material-icon/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="vendor_login/css/style.css">
</head>


<?php
function createotp()
{
$pass=rand(000000,999999);
return $pass;
}
$email="";
$sentotp="";


 if(isset($_POST['getotp']))
      {
        if(empty($_POST["email"]))
        {
          $email = "Email Required";
        }
          else
          {

             if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
               {
                    $email = "Email Is Not Valid";
              }
            else
                  {
                    $service = $_POST['service'];
                    if($service != "garage")
                    {
                        $check_email=$_POST["email"];
                        $sql=mysql_query("SELECT * FROM t_vender WHERE email='$check_email'");
                          $data= mysql_fetch_assoc($sql);     
                          $rows_of_select = mysql_num_rows($sql);
                          if($rows_of_select == 0)
                          {
                            $email="Email is not Registered";
                          }
                            else
                            {
                                $code = createotp();
                                echo $vcode=$code;
                             $codemsg="Your OTP is : ".$code;  
                                  ob_start();
                                    $vemail = $_POST['email'];
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
                             $mail ->Subject = "Forget Password";
                             $mail ->Body = $codemsg;
                             $mail ->AddAddress($vemail);
                             

                             if(!$mail->Send())
                             {
                                 $sentotp = "Something went wrong, Please try again.";
                             }
                             else
                             {
                                $sentotp = "Otp sent successfully";  
                             }
                          }
                    }
                    else
                    {
                        $check_email=$_POST["email"];
                        $sql=mysql_query("SELECT * FROM vender_info WHERE email='$check_email'");
                          $data= mysql_fetch_assoc($sql);     
                          $rows_of_select = mysql_num_rows($sql);
                          if($rows_of_select == 0)
                          {
                            $email="Email is not Registered";
                          }
                            else
                            {
                                $code = createotp();
                                echo $vcode=$code;
                             $codemsg="Your OTP is : ".$code;  
                                  ob_start();
                                    $vemail = $_POST['email'];
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
                             $mail ->Subject = "Forget Password";
                             $mail ->Body = $codemsg;
                             $mail ->AddAddress($vemail);
                             

                             if(!$mail->Send())
                             {
                                 $sentotp = "Something went wrong, Please try again.";
                             }
                             else
                             {
                                $sentotp = "Otp sent successfully";  
                             }
                          }
                    }
                }
          
          }

  
  
  }

?>




<?php


$otp = "";
$password = "";
$re_password = "";


if (isset($_POST['save'])) 
  {
    $vcode = $_POST['vcode'];
    $vemail=$_POST['email'];

            if(empty($_POST['otp']))
            {
                $otp = "Please Enter Otp";
            }
            else
            {
              $votp=$_POST['otp'];
            // $ucode = $_POST['ucode'];
              if($vcode != $votp)
              {
                $otp = "Otp is mitmatch";
              }
              else
              {
                if(empty($_POST['password']))
                {
                  $password = "Please enter Password";
                }
                else
                {
                  $vpassword = $_POST['password'];
                   if(empty($_POST['re_password']))
                    {
                        $re_password = "Please enter Confirm Password";
                    }
                    else
                    {
                        $vre_password = $_POST['re_password'];
                        if($vpassword != $vre_password)
                        {
                          $re_password = "Both password must be same";
                        }
                        else
                        {
                          $vsql=mysql_query("UPDATE `vender_info` SET `password`='$vpassword' WHERE email='$vemail'");
                          if($vsql)
                          {
                            echo "<script>alert('Password updated successfully.'); location.href='V_login.php';</script>";
                          }
                          else
                          {
                            echo "<script>alert('Something went Wrong,Please try again.');</script>";
                          }
                        }
              }
          }
        }
      }
  }
?>


<style type="text/css">
  #divmain {
        background-image: url("bgimage.jpg");
        ba
        }
</style>
<body>
 <div class="main" id="divmain">
<section class="sign-in">
<div class="container">
<div class="signin-content">
<div class="signin-image">
<figure><img src="loginimage.jpg" alt="LogIn image"></figure>
<a href="V_signup.php" class="signup-image-link">Create an account</a>
</div>
<div class="signin-form">
<h2 class="form-title">Reset Password </h2>
<form method="POST" class="register-form" id="login-form">

<div  class="form-group">
           <p style="margin-left: 10px;">Select your service</p>
       <table>
        <tr>
         <td>
           <input style="margin-left: 10px; margin-right: 20px; width: 15px;height: 15px;"  type="radio" checked="check" value="garage" name="service" <?php echo (isset($_POST['service']) && $_POST['service'] == 'garage') ?  'checked':'';      ?>/>
         </td>
         <td>
           Garage
         </td>
         <td>
           <input style="margin-left: 10px; margin-right: 20px; width: 15px;height: 15px;"  type="radio" value="towing" name="service" <?php echo (isset($_POST['service']) && $_POST['service'] == 'towing') ?  'checked':'';      ?>/>
         </td>
         <td>
           Towing
         </td>
         </tr> 
       </table>

</div>


  <span class="error"><?php echo $email;?></span>  
<div class="form-group">
<label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
<input type="text" name="email" id="your_Email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>" placeholder="Your Email" />
</div>
<span class="error"><?php echo $otp;?></span>
<div class="form-group">
<label for="your_name"></label>
<input type="text" name="otp" id="your_Email"  value="<?php if(isset($_POST['otp'])){ echo $_POST['otp'];} ?>" placeholder="OTP Enter here" />
</div>
<span class="error"><?php echo $password;?></span>
<div class="form-group">
<label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
<input type="password" name="password" id="your_pass"  placeholder="Password" />
</div>
<span class="error"><?php echo $re_password;?></span>
<div class="form-group">
<label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
<input type="password" name="re_password" id="your_pass"  placeholder="Confirm Password" />
</div>
<div class="form-group">
<label for="remember-me" class="label-agree-term"><span><span></span></span></label>
</div>
<input type="hidden" name="ucode" value="<?php echo $ucode ?>">
<span class="error"><?php echo $sentotp;?></span>
<div class="form-group form-button">
<input type="submit" name="getotp" id="signin" class="form-submit" value="Get OTP" />
<input type="submit" name="save" id="signin" class="form-submit" value="Save" />

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


