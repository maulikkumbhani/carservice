<?php
session_start();
include('../conn.inc');
?>

<!DOCTYPE html>
<html lang="en">


<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>User | SignIn</title>


<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<link rel="stylesheet" href="user_login/fonts/material-icon/css/material-design-iconic-font.min.css">
<script src="../../assets/js/jquery.validate.min.js" id="script-resource-8"></script>

<link rel="stylesheet" href="user_login/css/style.css">
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
         	              $sql = mysql_query("SELECT email FROM user_info WHERE email = '$email_get'");     
                        $user_email = mysql_num_rows($sql);

                            if($user_email > 0)
		                         {
		       	                 $email = "";
		      	                 $sql1 = mysql_query("SELECT email, password,user_code FROM user_info WHERE email = '$email_get' and password = '$password_get'");

       
                             $user_password = mysql_fetch_assoc($sql1);
		                         $user_code = $user_password['user_code'];
		                         $rows_of_select1 = mysql_num_rows($sql1);

	 	                             if($rows_of_select1 > 0)
		                               {
		                               $password = "";
	                                     
                                        $sql_check = mysql_query("SELECT email, password,user_code FROM user_info WHERE email = '$email_get' and password = '$password_get' AND status='Enable'");
                                                   $rows = mysql_num_rows($sql_check);
                                                  if($rows > 0)
                                                    {
                                                                   
                  		                               $_SESSION['user_code']=$user_code;		                       
                  		                                echo "<script> location.href='U_home.php'; </script>";
                                                    }
                                                    else
                                                    {
                                                      $email="Your account has been disabled";
                                                    }
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
          <figure><img src="loginimage.jpg"   alt="LogIn image"></figure>
          <a href="U_signup.php" class="signup-image-link">Create an account</a>
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
          <div class="form-group">
           <label for="remember-me" class="label-agree-term">
            <span><span></span></span><a href="u_forget.php">Forget Password?</a></label>
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

<script src="user_login/vendor/jquery/jquery.min.js"></script>
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


