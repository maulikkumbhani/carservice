
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
    	
     	<title>Admin | Feedback</title> <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
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
       
   <?PHP include("sidemenu.php"); ?>     	


<div class="main-content"> 
	<div class="row"> 
        <div class="col-md-6 col-sm-4 clearfix hidden-xs" style="float: left; display:inline;">
        	<h2> Feedback </h2>
        </div>
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
 
  

				<div class="panel-body"> 
					<div class="tab-content"> 
						<div class="tab-pane" id="area-chart"> 
							<div id="area-chart-demo" class="morrischart" style="height: 300px"></div> 
						</div> 
						<div class="tab-pane active" id="line-chart"> 
							<div id="line-chart-demo" class="morrischart" style="height: 300px">
								  <div class="col-md-12">
								  	<h3>Feedback of vendor & Customer</h3>
                <div class="horizontal-tab product-tab">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab"> Garage Vendor</a></li>
                    <li><a href="#tab2" data-toggle="tab">Towing Vendor</a></li>
                    <li><a href="#tab3" data-toggle="tab">Garage Customer</a></li>
                    <li><a href="#tab4" data-toggle="tab">Towing Customer</a></li>
                  </ul>
                  <div class="tab-content">

                    <div class="tab-pane fade in active" id="tab1">
                      <table class="table table-striped">
                      <tbody>
                        	<?php
		                    	$sq1 = mysql_query("SELECT * FROM feedback WHERE fid='GV'");
		                    	if (mysql_num_rows($sq1) == 0) {
		                    		echo "NO Feedback From Garage Vender";
		                    	}
		                    	else
		                    	{
		                    	while ($dt1=mysql_fetch_assoc($sq1))
		                    	 {
                    		?>
                          <tr>
                            <th><?php echo $dt1['femail']; ?></th>
                            <td><?php echo $dt1['fmessage']; ?></td>
                          </tr>
		                   <?php
		                    	}
		                    }
		                   ?>

                        </tbody>
                      </table>
                    </div>

                    <div class="tab-pane fade" id="tab2">
                      <table class="table table-striped">
                        <tbody>
                        	<?php
		                    	$sq2 = mysql_query("SELECT * FROM feedback WHERE fid='TV'");
		                    	if (mysql_num_rows($sq2) == 0) {
		                    		echo "NO Feedback From Towing Vender";
		                    	}
		                    	else
		                    	{
		                    	while ($dt2=mysql_fetch_assoc($sq2))
		                    	 {
                    		?>
                          <tr>
                            <th><?php echo $dt2['femail']; ?></th>
                            <td><?php echo $dt2['fmessage']; ?></td>
                          </tr>
		                   <?php
		                    	}
		                    }
		                   ?>
                        </tbody>
                      </table>
                    </div>

                      <div class="tab-pane fade" id="tab3">
                      <table class="table table-striped">
                        <tbody>
                        	<?php
		                    	$sq3 = mysql_query("SELECT * FROM feedback WHERE fid='GC'");
		                    	if (mysql_num_rows($sq3) == 0) {
		                    		echo "NO Feedback From Garage Customer";
		                    	}
		                    	else
		                    	{
		                    	while ($dt3=mysql_fetch_assoc($sq3))
		                    	 {
                    		?>
                          <tr>
                            <th><?php echo $dt3['femail']; ?></th>
                            <td><?php echo $dt3['fmessage']; ?></td>
                          </tr>
		                   <?php
		                    	}
		                    }
		                   ?>
                        </tbody>
                      </table>
                    </div>

                      <div class="tab-pane fade" id="tab4">
                      <table class="table table-striped">
                        <tbody>
                        	<?php
		                    	$sq4 = mysql_query("SELECT * FROM feedback WHERE fid='TC'");
		                    	if (mysql_num_rows($sq4) == 0) {
		                    		echo "NO Feedback From Towing Customer";
		                    	}
		                    	else
		                    	{
		                    	while ($dt4=mysql_fetch_assoc($sq4))
		                    	 {
                    		?>
                          <tr>
                            <th><?php echo $dt4['femail']; ?></th>
                            <td><?php echo $dt4['fmessage']; ?></td>
                          </tr>
		                   <?php
		                    	}
		                    }
		                   ?>
                        </tbody>
                      </table>
                    </div>
                   
                  </div>
                </div>
              </div>
							</div> 
						</div> 
						<div class="tab-pane" id="pie-chart"> 
							<div id="donut-chart-demo" class="morrischart" style="height: 300px;">
								
							</div> 
						</div> 
					</div> 
				</div>  

				<div class="panel-body no-padding"> 
					<div id="rickshaw-chart-demo"> 

						<div id="rickshaw-legend"></div> 
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
	</body> 

</html> 