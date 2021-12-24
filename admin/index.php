<?php
session_start();
include"../conn.inc";
?>


<!DOCTYPE html> <html lang="en"> 

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1" /> <meta name="description" content="Neon Admin Panel" /> 
	<meta name="author" content="Laborator.co" /> 
	<title>Admin | Login</title>
	 <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1"> 
	 <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2"> 
	 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3">
	  <link rel="stylesheet" href="assets/css/bootstrap.css" id="style-resource-4"> 
	  <link rel="stylesheet" href="assets/css/neon-core.css" id="style-resource-5"> 
	  <link rel="stylesheet" href="assets/css/neon-theme.css" id="style-resource-6"> 
	  <link rel="stylesheet" href="assets/css/neon-forms.css" id="style-resource-7"> 
	  <link rel="stylesheet" href="assets/css/custom.css" id="style-resource-8"> 
	  <script src="assets/js/jquery-1.11.3.min.js"></script> 
	
	</head> 
	<body class="page-body login-page login-form-fall"> 
	
		
 <div class="login-container"> 
 	<div class="login-header login-caret"> 
 		<div class="login-content"> 
 			
 				<img src="assets/images/logo.png" width="120" alt="" /> 
 				<p class="description">Dear admin, log in to access the admin area!</p> 
 				
 		</div> 
 	</div> 
 					<div class="login-form"> 
					<div class="login-content"> 
						<div class="form-login-error">
						 <h3>Invalid login</h3>
						  <p>Enter	<strong>demo</strong>/<strong>demo</strong> as login and password.</p> 
						  </div> 
						  <form method="post" role="form" > 
						  	<div class="form-group">
						  	 <div class="input-group">
						   <div class="input-group-addon"> 
						   	<i class="entypo-user"></i> 
						   </div> 
						   <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" />
						    </div> 
						</div>
						 <div class="form-group"> 
						 	<div class="input-group"> 
						 		<div class="input-group-addon">
						 		 <i class="entypo-key"></i> 
						 		</div> 
						 		<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" /> 
						 	</div> 
						 </div> 
						 <div class="form-group"> 
						 	<button type="submit" class="btn btn-primary btn-block btn-login" name="login"> 
						 		<i class="entypo-login"></i>
									Login In
							</button>
 							</div> 
 						 </form> 
 					</div>
 				 </div>
 			</div> 

 <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script> 
 <script src="assets/js/bootstrap.js" id="script-resource-3"></script> 
 <script src="assets/js/joinable.js" id="script-resource-4"></script>
 <script src="assets/js/resizeable.js" id="script-resource-5"></script>
 <script src="assets/js/neon-api.js" id="script-resource-6"></script>
 <script src="assets/js/cookies.min.js" id="script-resource-7"></script>
 <script src="assets/js/jquery.validate.min.js" id="script-resource-8"></script>
 <script src="assets/js/neon-login.js" id="script-resource-9"></script> 
 
 <script src="assets/js/neon-custom.js" id="script-resource-10"></script> 
 
 <script src="assets/js/neon-demo.js" id="script-resource-11"></script> 
 <script src="assets/js/neon-skins.js" id="script-resource-12"></script>
  </body> 

</html>

<?php
 

 if(isset($_POST['login']))
 
 {

    $email = $_POST['email'];
	$password = $_POST['password'];
	
	 
 $sql = mysql_query("SELECT email, password,a_code FROM admin_info WHERE email = '$email'");

         $admininfo = mysql_fetch_assoc($sql);
         $admincode = $admininfo['a_code'];
		 $rows_of_select = mysql_num_rows($sql);

         if($rows_of_select > 0)
		 {

 		$sql1 = mysql_query("SELECT email, password,a_code FROM admin_info WHERE email = '$email' and password = '$password'");
 		   $admininfo1 = mysql_fetch_assoc($sql1);
         $admincode1 = $admininfo1['a_code'];
		 $rows_of_select1 = mysql_num_rows($sql1);

         if($rows_of_select1 > 0)
		 {
		  // $_SESSION['Email']=$Email;
		    $_SESSION['admin_code']=$admincode;
		 	
		 	
		  echo "<script> location.href='A_home.php'; </script>";	
		   
		   }
		   else
		   {
		   	$message = "Your Password is incorrect";
				echo "<script type='text/javascript'>alert('$message');</script>";
		
		   }
		 }
		 else
		 {
		 	$message = "Your Email is not valid";
				echo "<script type='text/javascript'>alert('$message');</script>";
		
		
		 }

}



?>