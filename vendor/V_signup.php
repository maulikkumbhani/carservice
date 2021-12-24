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
<title>Vendor | SignUp</title>

<link rel="stylesheet" href="vendor_login/fonts/material-icon/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="vendor_login/css/style.css">
</head>

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


$name = "";
$email = "";
$password = "";
$re_password = "";


if (isset($_POST['signup'])) 
  { 
  	$vendorname_get = $_POST['name'];
  	$email_get = $_POST['email'];
    $password_get = $_POST['password'];
    $re_password_get = $_POST['re_password'];


       

   	   if (empty($_POST["email"]) && empty($_POST["password"]) &&   empty($_POST["name"]) &&  empty($_POST["re_password"]) )
   	      {
   	      	$name = "Name is Required";
  	     	$email = "Email Required";
  		    $password = "Password Required";
  		    $re_password = "Repeat Password Required";
          }
       else
          {
          	if(!empty($_POST["name"]))
          	{
          		$name = "";
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
         	                  if (!empty($_POST["re_password"])) 
                               {
                               	     $re_password = "";
                                    if ($_POST["re_password"] == $_POST["password"]  ) 
                                      {
                                      	if(strlen($_POST["password"]) >= 6 && strlen($_POST["password"]) <= 15 )
                                      	{	

                                          if ($_POST["service"] == "garage") 
                                          {
                                                 $password = "";
                                                  $v_code = createRandomPassword();

                                                  $check = mysql_query("SELECT v_code FROM vender_info WHERE v_code = '$v_code'");
                                                   $check_ucode =mysql_num_rows($check);
          
                                            if($check_ucode <= 0)
                                               {   
                                                 $sql = mysql_query("SELECT email FROM vender_info WHERE email = '$email_get'");          
                                                 $user_email = mysql_num_rows($sql);
    

                                                if($user_email <= 0)
                                                    {
                                                  $email = "";
                                                  $sql = "INSERT INTO vender_info(v_name,email,v_code,password) VALUES('$vendorname_get','$email_get','$v_code','$password_get')";
             
                                                if(mysql_query($sql))
                                                   {
                                                   $_SESSION['v_code']=$v_code;                            
                                               echo "<script> location.href='V_home.php'; </script>";
                                                   }
                                                   else
                                                   {
                                                   echo "Account Not create";
                                                   echo   mysql_error();
                                                   }
                                             
                                                   }
                                                   else
                                                   {
                                                  $email = "Email Is Registered With Other Account";
                                                  }
                                               }
                                               else
                                               {  
                                                   $v_code = createRandomPassword();
                                                   $sql = mysql_query("SELECT email FROM vender_info WHERE email = '$email_get'");          
                                                 $user_email = mysql_num_rows($sql);
    

                                                if($user_email <= 0)
                                                    {
                                                  $email = "";
                                                  $sql = "INSERT INTO vender_info(v_name,email,v_code,password) VALUES('$vendorname_get','$email_get','$v_code','$password_get')";
             
                                                if(mysql_query($sql))
                                                   {
                                                   $_SESSION['v_code']=$v_code;                            
                                               echo "<script> location.href='V_home.php'; </script>";
                                                   }
                                                   else
                                                   {
                                                   echo "Account Not create";
                                                   echo   mysql_error();
                                                   }
                                             
                                                   }
                                                   else
                                                   {
                                                  $email = "Email Is Registered With Other Account";
                                                    }
                                              } 
		                                      }
                                         else
                                          {
                                                 $password = "";
                                                  $t_code = createRandomPassword();

                                                  $check = mysql_query("SELECT t_code FROM t_vender WHERE t_code = '$t_code'");
                                                   $check_tcode =mysql_num_rows($check);
          
                                            if($check_tcode <= 0)
                                               {   
                                                 $sql = mysql_query("SELECT email FROM t_vender WHERE email = '$email_get'");          
                                                 $t_email = mysql_num_rows($sql);
    

                                                if($t_email <= 0)
                                                    {
                                                  $email = "";
                                                  $approval = "no";
                                                  $sql = "INSERT INTO t_vender(name,email,t_code,password,approval) VALUES('$vendorname_get','$email_get','$t_code','$password_get','$approval')";
             
                                                if(mysql_query($sql))
                                                   {
                                                   $_SESSION['t_code']=$t_code;                            
                                               echo "<script> location.href='T_home.php'; </script>";
                                                   }
                                                   else
                                                   {
                                                   echo "Account Not create";
                                                   echo   mysql_error();
                                                   }
                                             
                                                   }
                                                   else
                                                   {
                                                  $email = "Email Is Registered With Other Account";
                                                  }
                                             }
                                            else
                                             {  
                                                   $t_code = createRandomPassword();
                                                   $sql = mysql_query("SELECT email FROM t_vender WHERE email = '$email_get'");          
                                                   $user_email = mysql_num_rows($sql);
    

                                                if($user_email <= 0)
                                                    {
                                                  $email = "";
                                                  $approval = "no";
                                                  $sql = "INSERT INTO t_vender(name,email,t_code,password,approval) VALUES('$vendorname_get','$email_get','$t_code','$password_get','$approval')";
             
                                                if(mysql_query($sql))
                                                   {
                                                   $_SESSION['t_code']=$t_code;                            
                                               echo "<script> location.href='T_home.php'; </script>";
                                                   }
                                                   else
                                                   {
                                                   echo "Account Not create";
                                                   echo   mysql_error();
                                                   }
                                             
                                                   }
                                                   else
                                                   {
                                                  $email = "Email Is Registered With Other Account";
                                                    }
                                              }
                                           }    
		                                    } 
		                                    else
		                                     {
		                                	    $password = "Minmum 6 Characters Required";
		                                     } 	
		                                  }
		                             else
		                               {
		                                $password = "re_Passwords Is Not Machting";
		                                }   
		                                     
		                        }
		                        else
		                         {
  	     	                         $re_password = "re_Password Required";
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
    	    else
    	    {
    	    	$name = "Name is Required";
    	    }	
          } 
      
   }

?>

<style type="text/css">
  #divmain {
        background-image: url("bgimage.jpg");
        }
</style>
<body>
<div class="main" id=divmain>


<section class="signup">
<div class="container">
<div class="signup-content">

<div class="signup-form">
<h2 class="form-title">Sign up</h2>
<form method="POST" class="register-form" id="register-form">
	<span class="error"><?php echo $name;?></span>
<div class="form-group">
<label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
<input type="text" name="name" id="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name'];} ?>" placeholder="Your Name" />
</div>
   <span class="error"><?php echo $email;?></span>
<div class="form-group">
<label for="email"><i class="zmdi zmdi-email"></i></label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>" id="email" placeholder="Your Email" />
</div>
    <span class="error"><?php echo $password;?></span>
<div class="form-group">
<label for="pass"><i class="zmdi zmdi-lock"></i></label>
<input type="password" name="password" value="<?php if(isset($_POST['password'])){ echo $_POST['password'];} ?>" id="pass" placeholder="Password" />
</div>
  <span class="error"><?php echo $re_password;?></span>
<div class="form-group">
<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
<input type="password" name="re_password" value="<?php if(isset($_POST['re_password'])){ echo $_POST['re_password'];} ?>" id="re_pass" placeholder="Repeat your password" />
</div>
 <div  class="form-group">
           <p style="margin-left: 10px;">select your service</p>
       <table>
        <tr>
         <td>
           <input style="margin-left: 10px; margin-right: 20px; width: 15px;height: 15px;"  type="radio" checked="check" value="garage" name="service" <?php echo (isset($_POST['service']) && $_POST['service'] == 'garage') ?  'checked':'';      ?> />
         </td>
         <td>
           Garage
         </td>
         <td>
           <input style="margin-left: 10px; margin-right: 20px; width: 15px;height: 15px;"  type="radio" value="towing" name="service" <?php echo (isset($_POST['service']) && $_POST['service'] == 'towing') ?  'checked':'';      ?>" />
         </td>
         <td>
           Towing
         </td>
         </tr> 
       </table>

</div>




<div class="form-group">
<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
</div>
<div class="form-group form-button">
<input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
</div>
</form>
</div>
<div class="signup-image">
<figure><img src="signupimage.jpg" alt="singup image"></figure>
<a href="V_login.php" class="signup-image-link">I have already account</a>
</div>
</div>
</div>
</section>

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