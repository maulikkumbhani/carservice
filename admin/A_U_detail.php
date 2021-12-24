
<?php
session_start();
include('../conn.inc');



if($_SESSION['admin_code'] == NULL)
	{
		header('location:A_login.php');

	}
	else
	{
		
	}
			$admin_code = $_SESSION['admin_code'];
			$sql2 = mysql_query("SELECT * from admin_info WHERE a_code='$admin_code'");
	        $admin_info = mysql_fetch_assoc($sql2);
	  	


?>
<!DOCTYPE html> <html lang="en"> 

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
 <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Neon Admin Panel" />
   <meta name="author" content="Laborator.co" /> 
   
     <title>Admin | User details</title> <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
      <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2">
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3">
      <link rel="stylesheet" href="assets/css/bootstrap.css" id="style-resource-4">
      <link rel="stylesheet" href="assets/css/neon-core.css" id="style-resource-5">
      <link rel="stylesheet" href="assets/css/neon-theme.css" id="style-resource-6">
      <link rel="stylesheet" href="assets/css/neon-forms.css" id="style-resource-7">
      <link rel="stylesheet" href="assets/css/custom.css" id="style-resource-8">
      <link rel="stylesheet" href="assets/css/skins/black.css" id="style-resource-9">
      <script src="assets/js/jquery-1.11.3.min.js"></script>
              
</head>
<body class="page-body skin-black" data-url="https://demo.neontheme.com">
 
 
    
    <?php include("sidemenu.php"); ?>


<div class="main-content"> 
	<div class="row"> 
        <div class="col-md-6 col-sm-4 clearfix hidden-xs" style="float: left; display:inline;"><h2> User List</h2></div>
	   	   <div class="col-md-6 col-sm-4 clearfix hidden-xs" style="float: right;"> 
	   	   	<ul class="list-inline links-list pull-right"> 
	   	   	 
			
			<li class="sep"></li> 
			<li> 
				<a href="A_logout.php">
				Log Out 
				<i class="entypo-logout right"></i> 
				</a> 
			</li> 
		</ul> 
	</div> 
</div> <hr />
 


<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce" style="padding: 20px;">
   		<ol class="breadcrumb bc-3" > 	
   			<li> 
   				<a href="../../dashboard/main/index.html">
   					<i class="fa-home"></i> Home
   				</a> 
   			</li> 
   			<li>
   				<a href="../main/index.html">User Details</a> 
   			</li> 
   		</ol><br />  
 
<table method="POST" class="table table-bordered table-striped datatable" id="table-2">
	<thead> 
		<tr> 
		
			<th>User Name</th> 
			<th>Email</th> 
			<th>Actions</th> 
		</tr> 
	</thead> 
	<tbody> 
				 <?php
    $sql = mysql_query("SELECT * from user_info WHERE status='Enable'");
	while ($data = mysql_fetch_assoc($sql))
	{
?>
		<tr> 
			
			<td><?php echo $data['username']; ?></td> 
			<td><?php echo $data['email']; ?></td> 
			<td> 
				<a href="A_U_status.php?u_code=<?php echo $data['user_code']; ?>" class="btn btn-danger btn-sm btn-icon icon-left"> 
					<i class="entypo-cancel"></i> Disable
				</a> 
				
			</td> 
		</tr> 
			<?php
	}
?>


			 <?php
    $sql = mysql_query("SELECT * from user_info WHERE status='Disable'");
	while ($data = mysql_fetch_assoc($sql))
	{
?>
		<tr> 
			
			<td><?php echo $data['username']; ?></td> 
			<td><?php echo $data['email']; ?></td> 
			<td> 
				
				<a href="A_U_status.php?u_code=<?php echo $data['user_code']; ?>" class="btn btn-info btn-sm btn-icon icon-left"> 
					<i class="entypo-info"></i> Enable
				</a> 
			</td> 
		</tr> 
			<?php
	}
?>



	</tbody> 

</table> 

</div>
</div>

	<link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css" id="style-resource-1"> 
	<link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css" id="style-resource-2"> 
	<script src="assets/js/gsap/TweenMax.min.js" id="script-resource-1"></script> 
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script> 
	<script src="assets/js/bootstrap.js" id="script-resource-3"></script> 
	<script src="assets/js/joinable.js" id="script-resource-4"></script> 
	<script src="assets/js/resizeable.js" id="script-resource-5"></script> 
	<script src="assets/js/neon-api.js" id="script-resource-6"></script> 
	<script src="assets/js/cookies.min.js" id="script-resource-7"></script> 
	<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js" id="script-resource-8"></script> 
	<script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js" id="script-resource-9"></script> 
	<script src="assets/js/jquery.sparkline.min.js" id="script-resource-10"></script> 
	<script src="assets/js/rickshaw/vendor/d3.v3.js" id="script-resource-11"></script> 
	<script src="assets/js/rickshaw/rickshaw.min.js" id="script-resource-12"></script> 
	<script src="assets/js/raphael-min.js" id="script-resource-13"></script> 
	<script src="assets/js/morris.min.js" id="script-resource-14"></script> 
	<script src="assets/js/toastr.js" id="script-resource-15"></script> 
	<script src="assets/js/neon-chat.js" id="script-resource-16"></script>
	<script src="assets/js/neon-custom.js" id="script-resource-17"></script> 
	<script src="assets/js/neon-demo.js" id="script-resource-18"></script> 
	<script src="assets/js/neon-skins.js" id="script-resource-19"></script> 
	<script type="text/javascript">
 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-28991003-7']);
 _gaq.push(['_setDomainName', 'demo.neontheme.com']);
 _gaq.push(['_trackPageview']);
 (function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();
</script> </body> 

</html> 