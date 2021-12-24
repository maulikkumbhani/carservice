
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
    	
     	<title>Admin | Home</title> <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
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
	<body class="page-body skin-black" >
       
   <?PHP include("sidemenu.php"); ?>     	


<div class="main-content"> 
	<div class="row"> 
        <div class="col-md-6 col-sm-4 clearfix hidden-xs" style="float: left; display:inline;"><h2> </h2></div>
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


    <script type="text/javascript">
jQuery(document).ready(function($)
{

setTimeout(function()
{
var opts = {
"closeButton": true,
"debug": false,
"positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
"toastClass": "black",
"onclick": null,
"showDuration": "300",
"hideDuration": "1000",
"timeOut": "5000",
"extendedTimeOut": "1000",
"showEasing": "swing",
"hideEasing": "linear",
"showMethod": "fadeIn",
"hideMethod": "fadeOut"
};
toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
}, 3000);

// Sparkline Charts
$('.inlinebar').sparkline('html', {type: 'bar', barColor: '#ff6264'} );
$('.inlinebar-2').sparkline('html', {type: 'bar', barColor: '#445982'} );
$('.inlinebar-3').sparkline('html', {type: 'bar', barColor: '#00b19d'} );
$('.bar').sparkline([ [1,4], [2, 3], [3, 2], [4, 1] ], { type: 'bar' });
$('.pie').sparkline('html', {type: 'pie',borderWidth: 0, sliceColors: ['#3d4554', '#ee4749','#00b19d']});
$('.linechart').sparkline();
$('.pageviews').sparkline('html', {type: 'bar', height: '30px', barColor: '#ff6264'} );
$('.uniquevisitors').sparkline('html', {type: 'bar', height: '30px', barColor: '#00b19d'} );

$(".monthly-sales").sparkline([1,2,3,5,6,7,2,3,3,4,3,5,7,2,4,3,5,4,5,6,3,2], {
type: 'bar',
barColor: '#485671',
height: '80px',
barWidth: 10,
barSpacing: 2
});

// JVector Maps
var map = $("#map");
map.vectorMap({
map: 'europe_merc_en',
zoomMin: '3',
backgroundColor: '#383f47',
focusOn: { x: 0.5, y: 0.8, scale: 3 }
});

// Line Charts
var line_chart_demo = $("#line-chart-demo");
var line_chart = Morris.Line({
element: 'line-chart-demo',
data: [
{ y: '2006', a: 100, b: 90 },
{ y: '2007', a: 75, b: 65 },
{ y: '2008', a: 50, b: 40 },
{ y: '2009', a: 75, b: 65 },
{ y: '2010', a: 50, b: 40 },
{ y: '2011', a: 75, b: 65 },
{ y: '2012', a: 100, b: 90 }
],
xkey: 'y',
ykeys: ['a', 'b'],
labels: ['October 2013', 'November 2013'],
redraw: true
});
line_chart_demo.parent().attr('style', '');

// Donut Chart
var donut_chart_demo = $("#donut-chart-demo");
donut_chart_demo.parent().show();
var donut_chart = Morris.Donut({
element: 'donut-chart-demo',
data: [
{label: "Download Sales", value: getRandomInt(10,50)},
{label: "In-Store Sales", value: getRandomInt(10,50)},
{label: "Mail-Order Sales", value: getRandomInt(10,50)}
],
colors: ['#707f9b', '#455064', '#242d3c']
});
donut_chart_demo.parent().attr('style', '');

// Area Chart
var area_chart_demo = $("#area-chart-demo");
area_chart_demo.parent().show();
var area_chart = Morris.Area({
element: 'area-chart-demo',
data: [
{ y: '2006', a: 100, b: 90 },
{ y: '2007', a: 75, b: 65 },
{ y: '2008', a: 50, b: 40 },
{ y: '2009', a: 75, b: 65 },
{ y: '2010', a: 50, b: 40 },
{ y: '2011', a: 75, b: 65 },
{ y: '2012', a: 100, b: 90 }
],
xkey: 'y',
ykeys: ['a', 'b'],
labels: ['Series A', 'Series B'],
lineColors: ['#303641', '#576277']
});
area_chart_demo.parent().attr('style', '');


// Rickshaw
var seriesData = [ [], [] ];
var random = new Rickshaw.Fixtures.RandomData(50);
for (var i = 0; i < 50; i++)
{
random.addData(seriesData);
}
var graph = new Rickshaw.Graph( {
element: document.getElementById("rickshaw-chart-demo"),
height: 193,
renderer: 'area',
stroke: false,
preserve: true,
series: [{
color: '#73c8ff',
data: seriesData[0],
name: 'Upload'
}, {
color: '#e0f2ff',
data: seriesData[1],
name: 'Download'
}
]
} );
graph.render();
var hoverDetail = new Rickshaw.Graph.HoverDetail( {
graph: graph,
xFormatter: function(x) {
return new Date(x * 1000).toString();
}
} );
var legend = new Rickshaw.Graph.Legend( {
graph: graph,
element: document.getElementById('rickshaw-legend')
} );
var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight( {
graph: graph,
legend: legend
} );
setInterval( function() {
random.removeData(seriesData);
random.addData(seriesData);
graph.update();
}, 500 );
});

function getRandomInt(min, max)
{
return Math.floor(Math.random() * (max - min + 1)) + min;
}
</script> 


<?php
 $user_registered = mysql_query("SELECT id From user_info ");
   $users_number = mysql_num_rows($user_registered);

     $vendor_registered = mysql_query("SELECT id From vender_info ");
   $vendor_number = mysql_num_rows($vendor_registered);

   $vendor_t_registered = mysql_query("SELECT id From t_vender ");
   $vendor_t_number = mysql_num_rows($vendor_t_registered);

   $Vendor_total = $vendor_t_number + $vendor_number;

    $Feedback = mysql_query("SELECT id From Feedback ");
   $Feedback_number = mysql_num_rows($Feedback);

   $views = mysql_query("SELECT * From page_views WHERE id ='1'"); $views1 =
   mysql_fetch_assoc($views); $views_number = $views1['views'];



    
 ?>

    <div class="row"> 
	<div class="col-sm-3 col-xs-6">
	 <div class="tile-stats tile-red"> 
	 	<div class="icon">
	 		<i class="entypo-users"></i>
	 	</div>
	 	 <div class="num" data-start="0" data-end="<?php echo $users_number; ?>" data-postfix="" data-duration="1500" data-delay="0">0</div> 
	 	 <h3>Registered users</h3> <p>so far in our blog, and our website.</p> 
	 </div> 
	 </div> 
	 <div class="col-sm-3 col-xs-6"> 
	 	<div class="tile-stats tile-green">
		 <div class="icon">
		 	<i class="entypo-chart-bar"></i>
		 </div> 
	 	 <div class="num" data-start="0" data-end="<?php echo $Vendor_total; ?>" data-postfix="" data-duration="1500" data-delay="600">0</div> 
	 	 <h3>Registered Vendor</h3> 
	 	 <p>this is the average value.</p>
	 	  </div> 
	 	</div> 
	 	<div class="clear visible-xs"></div>
	 	  <div class="col-sm-3 col-xs-6"> <div class="tile-stats tile-aqua"> <div class="icon"><i class="entypo-mail"></i></div>
	 	   <div class="num" data-start="0" data-end="<?php echo $views_number; ?>" data-postfix="" data-duration="1500" data-delay="1200">0</div>
	 	    <h3>Visitor</h3> <p>visited user.</p>
	 	     </div>
	 	      </div>
	 	       <div class="col-sm-3 col-xs-6">
	 	        <div class="tile-stats tile-blue"> 
	 	        	<div class="icon"><i class="entypo-rss"></i>
	 	        	</div>
	 	        	 <div class="num" data-start="0" data-end="<?php echo $Feedback_number; ?>" data-postfix="" data-duration="1500" data-delay="1800">0</div> 
	 	        	 <h3>Feedback</h3> <p>on our site right now.</p> </div> 
	 	        	</div>
	 	        	 </div> 
	 	        	 <br /> 
	 	        	 <div class="row">
	 	        	  <div class="col-sm-8">
	 	        	   <div class="panel panel-primary" id="charts_env">
	 	        	    <div class="panel-heading">
	 	        	     <div class="panel-title">Site Stats</div> 
	 	        	     <div class="panel-options"> 
	 	        	     	<ul class="nav nav-tabs"> 
	 	        	     		<li class=""><a href="#area-chart" data-toggle="tab">Area Chart</a></li>
	 	        	     		 <li class="active"><a href="#line-chart" data-toggle="tab">Line Charts</a></li> 
	 	        	     		 <li class=""><a href="#pie-chart" data-toggle="tab">Pie Chart</a></li>
	 	        	     	</ul>
	 	        	     	 </div>
	 	        	     	  </div> 
	 	        	     	  <div class="panel-body">
	 	        	     	   <div class="tab-content"> 
	 	        	     	   	<div class="tab-pane" id="area-chart"> 
	 	        	     	   		<div id="area-chart-demo" class="morrischart" style="height: 300px"></div> 
	 	        	     	   	</div> <div class="tab-pane active" id="line-chart"> <div id="line-chart-demo" class="morrischart" style="height: 300px"></div>
	 	        	     	   	 </div> <div class="tab-pane" id="pie-chart"> <div id="donut-chart-demo" class="morrischart" style="height: 300px;"></div>
	 	        	     	   	</div> </div> </div> <table class="table table-bordered table-responsive"> <thead> <tr> <th width="50%" class="col-padding-1"> 
	 	        	     	   		<div class="pull-left"> <div class="h4 no-margin">Pageviews</div> 
	 	        	     	   		<small>54,127</small>
	 	        	     	   		 </div> <span class="pull-right pageviews">4,3,5,4,5,6,5</span> </th> <th width="50%" class="col-padding-1"> <div class="pull-left"> <div class="h4 no-margin">Unique Visitors</div> 
	 	        	     	   			<small>25,127</small>
	 	        	     	   			 </div>
	 	        	     	   			  <span class="pull-right uniquevisitors">2,3,5,4,3,4,5</span>
	 	        	     	   			   </th> 
	 	        	     	   			</tr> 
	 	        	     	   		</thead> 
	 	        	     	   	</table> </div> 
	 	        	     	   </div> 
	 	        	     	   <div class="col-sm-4"> 
	 	        	     	   	<div class="panel panel-primary"> 
	 	        	     	   		<div class="panel-heading"> 
	 	        	     	   			<div class="panel-title"> 
	 	        	     	   				<h4>Real Time Stats<br /> 
	 	        	     	   					<small>current server uptime</small> 
	 	        	     	   				</h4> 
		 	        	     	   			</div> 
		 	        	     	   			<div class="panel-options"> 
		 	        	     	   				<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg">
		 	        	     	   					<i class="entypo-cog"></i></a> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i>
		 	        	     	   					</a> 
		 	        	     	   					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> 
		 	        	     	   					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a> 
		 	        	     	   				</div> 
		 	        	     	   			</div> 
		 	        	     	   			<div class="panel-body no-padding"> 
		 	        	     	   				<div id="rickshaw-chart-demo">
		 	        	     	   				 <div id="rickshaw-legend">
		 	        	     	   				 	
		 	        	     	   				 </div> 
		 	        	     	   				</div> 
		 	        	     	   			</div> 
		 	        	     	   		</div> 
		 	        	     	   	</div> 

		 	        	     	   </div> 
		 	        	     	   <br /> 
		 	        	     	   <div class="row"> 
		 	        	     	   	<div class="col-sm-4"> 
		 	        	     	   		<div class="panel panel-primary"> 
		 	        	     	   			<table class="table table-bordered table-responsive"> 
		 	        	     	   				<thead> 
		 	        	     	   					<tr> 
		 	        	     	   						<th class="padding-bottom-none text-center"> <br /> <br /> 
		 	        	     	   							<span class="monthly-sales"></span> 
		 	        	     	   						</th> 
		 	        	     	   					</tr> 
		 	        	     	   				</thead> 
		 	        	     	   				<tbody> 
		 	        	     	   					<tr> 
		 	        	     	   						<td class="panel-heading"> 
		 	        	     	   							<h4>Monthly Sales</h4> 
		 	        	     	   						</td> </tr> 
		 	        	     	   					</tbody> 
		 	        	     	   				</table> 
		 	        	     	   			</div> 
		 	        	     	   		</div> 
		 	        	     	   		<div class="col-sm-8"> 
		 	        	     	   			<div class="panel panel-primary"> 
		 	        	     	   				<div class="panel-heading"> 
		 	        	     	   					<div class="panel-title">Latest Updated Profiles</div> 
		 	        	     	   					<div class="panel-options"> 
		 	        	     	   						<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg">
		 	        	     	   							<i class="entypo-cog"></i>
		 	        	     	   						</a> 
		 	        	     	   						<a href="#" data-rel="collapse">
		 	        	     	   							<i class="entypo-down-open"></i>
		 	        	     	   						</a> 
		 	        	     	   						<a href="#" data-rel="reload">
		 	        	     	   							<i class="entypo-arrows-ccw"></i>
		 	        	     	   						</a> 
		 	        	     	   						<a href="#" data-rel="close">
		 	        	     	   							<i class="entypo-cancel"></i></a> 
		 	        	     	   						</div> 
		 	        	     	   					</div> 
		 	        	     	   					<table class="table table-bordered table-responsive"> 
		 	        	     	   						<thead> <tr> <th>#</th> 
		 	        	     	   							    <th>Name</th> 
		 	        	     	   							    <th>Position</th> 
		 	        	     	   							    <th>Activity</th> 
		 	        	     	   							</tr> 
		 	        	     	   						</thead> 
		 	        	     	   						<tbody> 
		 	        	     	   							<tr> <td>1</td> 
		 	        	     	   								<td>Art Ramadani</td> 
		 	        	     	   								<td>CEO</td> 
		 	        	     	   								<td class="text-center"><span class="inlinebar">4,3,5,4,5,6</span></td> 
		 	        	     	   							</tr> 
		 	        	     	   							<tr> <td>2</td> 
		 	        	     	   								<td>Ylli Pylla</td> 
		 	        	     	   								<td>Font-end Developer</td> 
		 	        	     	   								<td class="text-center"><span class="inlinebar-2">1,3,4,5,3,5</span></td> 
		 	        	     	   							</tr> 
		 	        	     	   								<tr> 
		 	        	     	   									<td>3</td> 
		 	        	     	   									<td>Arlind Nushi</td> 
		 	        	     	   									<td>Co-founder</td> 
		 	        	     	   									<td class="text-center"><span class="inlinebar-3">5,3,2,5,4,5</span>
		 	        	     	   									</td> 
		 	        	     	   								</tr> 
		 	        	     	   							</tbody> 
		 	        	     	   						</table> 
		 	        	     	   					</div> 
		 	        	     	   				</div> 
		 	        	     	   			</div> 
		 	        	     	   			<br />
				</div>

 <footer class="main"> 
	
&copy; 2019 
<strong>Car Care</strong> Admin Theme by 
<a href="https://laborator.co/" target="_blank">Student</a> 
</footer><link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css" id="style-resource-1"> 
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