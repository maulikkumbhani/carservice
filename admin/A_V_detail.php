
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
   
     <title>Garage | Detail</title> <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
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
<div class="col-md-6 col-sm-4 clearfix hidden-xs" style="float: left; display:inline;">
			<h2>Garage Approval Data</h2></div>
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
          <a href="A_home.php">
            <i class="fa-home"></i> Home
          </a> 
        </li> 
        <li>
          <a href="A_home.php">Garage Detail</a> 
        </li> 
        <li>
          <a href="A_pending.php">pending List</a> 
        </li>
        <li>
          <a href="A_V_detail.php">Approval Detail</a> 
        </li>
        </ol><br />
            	<div>

         
<?php


     $g_code = $_REQUEST['g_code'];
	 $sql = mysql_query("SELECT * from v_garage WHERE g_code='$g_code'");
	$data = mysql_fetch_assoc($sql);

	$sql1 = mysql_query("SELECT * FROM vender_info where v_code= (SELECT v_code from v_garage where g_code='$g_code');"); 
	$data1 = mysql_fetch_assoc($sql1);
	
?>

<div style="margin-left:7%;margin-right:7%;margin-top: 30px;margin-bottom: 10px;">

	<div class="col-xs-5" style="float: right;   "> 
		                <a href="#"> 
		             <img src="<?php  if($data1['v_image'] == NULL) { echo "../uploads/v_profile/user.png"; }else{ echo $data1['v_image'];} ?>" style='height:150px; border-radius: 5px 5px 5px 5px;  width:150px; class='img-responsive img-rounded full-width/>
			            </a> 
			         </div>



	<form method="POST"> 
		<table>
		 <tr>
	                           <td style="padding-right: 20px;"><h4 ><b>Garage Name</b></h4><td><h4 style="padding-right: 5px;">:</h4></td></td> <td><h4><?php echo $data['g_name']; ?></h4></td>
                            </tr>
                            <tr>
                            	<td style="padding-right: 20px;"><h4 ><b>Email</b></h4><td><h4 style="padding-right: 5px;">:</h4></td></td> <td><h4><?php echo $data['g_email']; ?></h4></td>
	                           
                            </tr>
                            <tr>
                            	<td style="padding-right: 20px;"><h4 ><b>Contact No</b></h4><td><h4 style="padding-right: 5px;">:</h4></td></td> <td><h4><?php echo $data['contact_no']; ?></h4></td>

                            </tr>
                            <tr>
                            	<td style="padding-right: 20px;"><h4 ><b>Address</b></h4><td><h4 style="padding-right: 5px;">:</h4></td></td> <td><h4><?php echo $data['g_address']; ?></h4></td>

                            </tr>
                           
                             <tr>
                            	<td style="padding-right: 20px;"><h4 ><b>open time</b></h4><td><h4 style="padding-right: 5px;">:</h4></td></td> <td><h4><?php echo $data['g_opentime']; ?></h4></td>

                            </tr>
                             <tr>
                            	<td style="padding-right: 20px;"><h4 ><b>close time</b></h4><td><h4 style="padding-right: 5px;">:</h4></td></td> <td><h4><?php echo $data['g_closetime']; ?></h4></td>

                            </tr>




    
          
       </table>
 <div class="row" style="margin-top: 20px;"> 
 	
 	       <style>  
                      #map {height: 240px; 
                            width: 100%;
                            margin:30px; 
                            }
          </style>
                   <!-- garage location -->
                  <div>

                       <div id="map" ></div>

                       <script>
              
                           function initMap()
                            {
                           var uluru = {lat: <?php echo $data['location_lat']; ?>, lng: <?php echo $data['location_lng']; ?>};
                           var map = new google.maps.Map(document.getElementById('map'), {zoom: 4, center: uluru});
                           var marker = new google.maps.Marker({position: uluru, map: map});
                             }
                      </script>
  
                      <script async defer
                         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8XP7nsLF1PCUXk0z29okBjpYb4gUa6Js&callback=initMap">
                      </script>
                </div>
 </div>		

 <div class="row" style="margin-top: 20px;"> 
 	
 	   <div class="col-xs-3"> 
          <a href="#">
        <img src="<?php  if($data['g_imageurl1'] == NULL) { echo "../uploads/v_garage/no-image.png"; }else{ echo $data['g_imageurl1'];} ?>" style='height:150px; border: 1px solid #BFBFC0; border-radius: 5px 5px 5px 5px;  width:150px; class='img-responsive img-rounded full-width /> 
      </a>
    </div>
    <div class="col-xs-3"> 
          <a href="#">
       <img src="<?php  if($data['g_imageurl2'] == NULL) { echo "../uploads/v_garage/no-image.png"; }else{ echo $data['g_imageurl2'];} ?>" style='height:150px; border: 1px solid #BFBFC0; border-radius: 5px 5px 5px 5px;  width:150px; class='img-responsive img-rounded full-width /> 
      </a>
    </div>
    <div class="col-xs-3"> 
          <a data-rel="prettyPhoto" href="<?php echo $data['g_imageurl3']; ?>">
        <img src="<?php  if($data['g_imageurl3'] == NULL) { echo "../uploads/v_gargae/no-image.png"; }else{ echo $data['g_imageurl3'];} ?>" style='height:150px; border: 1px solid #BFBFC0; border-radius: 5px 5px 5px 5px;  width:150px; class='img-responsive img-rounded full-width /> 
      </a>
    </div>
 </div>		
 <div style="margin-top:20px;">
                	<p class="bs-example bs-baseline-top"> 
                            			<a href="A_V_detail.php?g_code=<?php echo $data['g_code'];?>"> 
                            				<button style="width: 150px;" name="Accept" type="submit" class="btn btn-default btn-lg">
			                                Accept</button> 
			                            </a>    
			                        
	
                
                            			<a href="A_V_detail.php?g_code=<?php echo $data['g_code'];?>"> 
                            				<button style="width: 150px;" name="Reject" type="submit" class="btn btn-default btn-lg">
			                                Reject</button> 
			                            </a>    
			                        </p>
	</div>
</form>


<?php 
$g_code =$data['g_code'];
$granted = "granted";
 ?>

	
	</form>
</table>

<div name="description"  
	<?php 
	if (isset($_POST['Reject'])) 
	{ ?> style="display: ;"<?php }
elseif(isset($_POST['cancal']))
	{ ?>
		style="display:none;" 
		<?php 
	}else
	{ ?> 
		style="display:none;"
		<?php
		 } 
		?> >


	<form method="POST"> 
<H4>Enter reason for rejection</H4>
<textarea style="width: 80%;height: 70px;" name="description">   </textarea><br><br>
<table>
<tr>
	<td> 
		<p class="bs-example bs-baseline-top">
		     <button style="width: 150px;"  name="ok" type="submit"  class="btn btn-default btn-lg">Ok</button>	  
		</p>
	</td>
    <td>
        <p class="bs-example bs-baseline-top"> 
             <button style="width: 150px;" name="cancel" type="submit" class="btn btn-default btn-lg">Cancel</button> 
        </p>
    </td>
  </tr>
</table>
</form>
</div>
</div>


<?php
if (isset($_POST['ok'])) 
{
 $description = $_POST['description'];
    $q1= mysql_query ("UPDATE `v_garage` SET  description ='$description',approval='rejected' WHERE g_code = '$g_code'") or die(mysql_error());
 	
	
     if($q1)
      {
      	ob_start();
           $garage_email = $data['g_email'];
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
             $mail ->Subject = "Rejection";
             $mail ->Body = $discription;
             $mail ->AddAddress($garage_email);
             

             if(!$mail->Send())
             {
                 echo "Mail Not Sent";
             }
             else
             {
                 echo "Mail Sent";
             }
          	  echo "<script> location.href='A_pending.php'; </script>";
            	ob_end_flush();
          	  

	  }
	  else
	  {
	  echo "not inserted";
	   echo  mysql_error();
	  }     
  	
  }
?>
 <?php 
 if (isset($_POST['Accept']))
  { 
       $q2 = mysql_query ("UPDATE `v_garage` SET  approval ='$granted' WHERE g_code = '$g_code'");
     if($q2)
      {
        $garage_email = $data['g_email'];
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
   $mail ->Subject = "Accepted your garage verification";
   $mail ->Body = $discription;
   $mail ->AddAddress($garage_email);
   

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }
      	echo "<script> location.href='A_pending.php'; </script>";
          

	   }
	   else
	   {

	   }

    }
  ?>
 
                  </div>               
                </div>
            </div>
         </div>   
         <style>

#submit,#signup
{
width:100px; 
height:40px;
  border:2px solid #666666;
}

</style>
				<div class="panel-body"> 
					<div class="tab-content"> 
						<div class="tab-pane" id="area-chart"> 
							<div id="area-chart-demo" class="morrischart" style="height: 300px"></div> 
						</div> 
						<div class="tab-pane active" id="line-chart"> 
							<div id="line-chart-demo" class="morrischart" style="height: 300px">
								
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
			<br /> <script type="text/javascript">

jQuery(document).ready(function($)
{
var $todo_tasks = $("#todo_tasks");
$todo_tasks.find('input[type="text"]').on('keydown', function(ev)
{
if(ev.keyCode == 13)
{
ev.preventDefault();
if($.trim($(this).val()).length)
{
var $todo_entry = $('<li><div class="checkbox checkbox-replace color-white"><input type="checkbox" /><label>'+$(this).val()+'</label></div></li>');
$(this).val('');
$todo_entry.appendTo($todo_tasks.find('.todo-list'));
$todo_entry.hide().slideDown('fast');
replaceCheckboxes();
}
}
});
});
</script> 
<script type="text/javascript">
jQuery(document).ready(function($)
{
var map = $("#map-2");
map.vectorMap({
map: 'europe_merc_en',
zoomMin: '3',
backgroundColor: '#383f47',
focusOn: { x: 0.5, y: 0.8, scale: 3 }
});
});
</script> 

</div> 
<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25"> 
	<div class="chat-inner"> <h2 class="chat-header"> <a href="#" class="chat-close"><i class="entypo-cancel"></i></a> 
		<i class="entypo-users"></i>
Chat
<span class="badge badge-success is-hidden">0</span> 
</h2> 
<div class="chat-group" id="group-1"> 
	<strong>Favorites</strong> 
	<a href="#" id="sample-user-123" data-conversation-history="#sample_history">
		<span class="user-status is-online"></span> 
		<em>Catherine J. Watkins</em>
	</a> 
	<a href="#">
		<span class="user-status is-online"></span> 
		<em>Nicholas R. Walker</em>
	</a> 
	<a href="#">
		<span class="user-status is-busy"></span> 
		<em>Susan J. Best</em>
	</a> 
	<a href="#">
		<span class="user-status is-offline"></span> 
		<em>Brandon S. Young</em>
	</a> 
	<a href="#">
		<span class="user-status is-idle"></span> 
		<em>Fernando G. Olson</em>
	</a> 
</div> 
<div class="chat-group" id="group-2"> <strong>Work</strong> 
	<a href="#"><span class="user-status is-offline"></span> 
		<em>Robert J. Garcia</em>
	</a> 
	<a href="#" data-conversation-history="#sample_history_2">
		<span class="user-status is-offline"></span> 
		<em>Daniel A. Pena</em>
	</a> 
	<a href="#"><span class="user-status is-busy"></span> 
		<em>Rodrigo E. Lozano</em>
	</a> 
</div> 
<div class="chat-group" id="group-3"> <strong>Social</strong> 
	<a href="#"><span class="user-status is-busy"></span> 
		<em>Velma G. Pearson</em>
	</a> <a href="#"><span class="user-status is-offline"></span> 
		<em>Margaret R. Dedmon</em>
	</a> 
	<a href="#"><span class="user-status is-online"></span> 
		<em>Kathleen M. Canales</em></a> 
		<a href="#"><span class="user-status is-offline"></span> 
			<em>Tracy J. Rodriguez</em>
		</a> 
	</div> 
</div> <!-- conversation template --> 
<div class="chat-conversation"> 
	<div class="conversation-header"> 
		<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a> 
		<span class="user-status"></span> 
		<span class="display-name"></span> 
		<small></small> 
	</div> 
	<ul class="conversation-body"> </ul> 
	<div class="chat-textarea"> 
		<textarea class="form-control autogrow" placeholder="Type your message"></textarea> 
	</div> 
</div> 
</div> <!-- Chat Histories --> 
<ul class="chat-history" id="sample_history"> 
	<li> 
		<span class="user">Art Ramadani</span> 
		<p>Are you here?</p> 
		<span class="time">09:00</span> 
	</li> 
	<li class="opponent"> 
		<span class="user">Catherine J. Watkins</span> 
		<p>This message is pre-queued.</p> 
		<span class="time">09:25</span> 
	</li> 
	<li class="opponent"> 
		<span class="user">Catherine J. Watkins</span> 
		<p>Whohoo!</p> <span class="time">09:26</span> 
	</li> 
	<li class="opponent unread"> 
		<span class="user">Catherine J. Watkins</span> 
		<p>Do you like it?</p> 
		<span class="time">09:27</span> 
	</li> 
</ul> <!-- Chat Histories --> 
<ul class="chat-history" id="sample_history_2"> 
	<li class="opponent unread"> 
		<span class="user">Daniel A. Pena</span>
		 <p>I am going out.</p> 
		 <span class="time">08:21</span> 
		</li> <li class="opponent unread"> 
			<span class="user">Daniel A. Pena</span> 
			<p>Call me when you see this message.</p> 
			<span class="time">08:27</span> 
		</li> 
	</ul> 
</div> <!-- TS15516076899705: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates --> <!-- Sample Modal (Default skin) --> 
<div class="modal fade" id="sample-modal-dialog-1"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
				</button> 
				<h4 class="modal-title">Widget Options - Default Modal</h4> 
			</div> 
			<div class="modal-body"> 
				<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p> 
			</div> 
			<div class="modal-footer"> 
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
				<button type="button" class="btn btn-primary">Save changes</button> 
			</div> 
		</div> 
	</div> 
</div> <!-- Sample Modal (Skin inverted) --> 
<div class="modal invert fade" id="sample-modal-dialog-2"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
				</button> 
				<h4 class="modal-title">Widget Options - Inverted Skin Modal</h4> </div> 
				<div class="modal-body"> 
					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p> 
				</div> 
				<div class="modal-footer"> 
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Save changes</button> 
				</div> 
			</div> 
		</div> 
	</div> <!-- Sample Modal (Skin gray) --> 
	<div class="modal gray fade" id="sample-modal-dialog-3"> 
		<div class="modal-dialog"> 
			<div class="modal-content"> 
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
					<h4 class="modal-title">Widget Options - Gray Skin Modal</h4> 
				</div> 
				<div class="modal-body"> 
					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p> 
				</div> 
				<div class="modal-footer"> 
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Save changes</button> 
				</div> 
			</div>
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