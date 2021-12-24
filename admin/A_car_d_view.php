
<?php
session_start();
include('../conn.inc');



if($_SESSION['admin_code'] == NULL)
    {
        header('location:A_login.php');

    }
    else
    {
       if($_REQUEST['m_code'] == NULL)
        {
         header('location:A_car_m.php');

     }
     else{

     }    
    }
            $admin_code = $_SESSION['admin_code'];
            $sql2 = mysql_query("SELECT * from admin_info WHERE a_code='$admin_code'");
            $admin_info = mysql_fetch_assoc($sql2);
        
        $m_code = $_REQUEST['m_code'];


?>
<!DOCTYPE html> <html lang="en"> 

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
 <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Neon Admin Panel" />
   <meta name="author" content="Laborator.co" /> 
  
     <title>Car | Detail</title> <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
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
           <div class="col-md-6 col-sm-4 clearfix hidden-xs" style="float: left; display:inline;"><h2>Car Details</h2></div>
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
   				<a href="A_home.php">Car Detail</a> 
   			</li> 
   			<li>
   				<a href="A_car_brand.php">Car Brand</a> 
   			</li>
   			 <li>
   				<a href="A_car_model.php">Car Model</a> 
   			</li>
   			 <li>
   				<a href="A_car_d_view.php">Car Details</a> 
   			</li>
   		</ol><br />
                <div>

               

                <div style="border: solid 2px black;" class="carinsert">



<?php
  // $m_code = $_SESSION['m_code'];

  $sql_select = mysql_query ( "SELECT * FROM car_detail WHERE m_code='$m_code'");
     while ($check= mysql_fetch_assoc($sql_select)) 
       {
      ?>
    
    
       
<table>
<H1 style="text-align: center;font-size: 30px;">Car Detail </H1></br>
    <table><tr>
        <td>
            <table>
                <tr>
                    <td><label for="Brandname">Brand Name</label></td>
                </tr>
                <tr>
                    <td>
                        <?php 
                        $b_code = $check['b_code'];
                        $brandname = mysql_query("SELECT b_name FROM c_brandname where b_code='$b_code'");
                        $brandname1 = mysql_fetch_assoc($brandname);
                        echo $brandname1['b_name'];
                        ?>
                    </td>
                </tr>
            </table>
        </td> 
        <td style="padding-left: 200px;">
            <table>
                <tr>
                    <td><label  for="modelname">Model Name</label></td>
                </tr>
                <tr>
                    <td><?php echo $check['m_name']; ?></td>
                </tr>
            </table>
        </td> 
    </tr>  </table>
    <tr>
        <td>
            <table>
                <tr>
                    <td><label for="rating">Rating</label></td></br>
                </tr>
                <tr>
                    <td><?php echo $check['rating']; ?></td>
                </tr>
            </table>
        </td>
    </tr>  
    <tr>
        <td>
            <table>
                <tr>
                    <td><label for="price">Price</label></td></br>
                </tr>
                <tr>
                    <td><?php echo $check['price']; ?> RS.</td>
                </tr>
            </table>
        </td>
    </tr>  
    <tr>    
        <td >
            <table>
                <tr>
                    <td><H3 style="margin-top: 50px;">SPECIFICATION</H3></td>
                </tr>
                <tr>
                    <td >
                        <table>
                        <tr>
                            <td><h5><u>DIMENSIONS</u></h5></td><br>
                        </tr>                   
                            <table>  
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td><label for="Length">Length</label></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $check['length']; ?> mm</td><br>
                                            </tr>
                                        </table>
                                    </td> 
                                    <td style="padding-left: 240px;">
                                        <table>
                                            <tr>
                                                <td><label  for="width">Width</label></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $check['width']; ?> mm</td><br>
                                            </tr>
                                        </table>
                                    </td> 
                                </tr>                              
                            </table>
                            <table>  
                                <tr>
                                    <td>
                                        <table>
                                            <tr>    
                                                <td><label for="height">Height</label></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $check['height']; ?> mm</td><br>
                                            </tr>
                                        </table>
                                    </td> 
                                    <td style="padding-left: 240px;">
                                        <table>
                                            <tr>
                                                <td><label  for="Wheelbase">Wheelbase</label></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $check['wheelbase']; ?> mm</td><br> 
                                            </tr>
                                        </table>
                                    </td> 
                                </tr>                              
                            </table>
                            <table>  
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td><label for="Ground Clearance">Ground Clearance</label></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $check['groundclearance']; ?> mm</td><br>   
                                            </tr>
                                        </table>
                                    </td> 
                                    <td style="padding-left: 160px;">
                                        <table>
                                            <tr>
                                                <td><label  for="Kerb Weight">Kerb Weight</label></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $check['kerbweight']; ?> kg</td><br>
                                            </tr>
                                        </table>
                                    </td> 
                                </tr>                              
                            </table>
                            <table>  
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td><label for="Minimum Turning Radius">Minimum Turning Radius</label></td>
                                            </tr>
                                            <tr>    
                                                <td><?php echo $check['minimumturningradius']; ?> feet</td><br>
                                            </tr>
                                        </table>
                                    </td> 
                                    <td style="padding-left: 120px;">
                                        <table>
                                            <tr>
                                                <td><label  for="No. Of Doors">No. Of Doors</label></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $check['noofdoors']; ?></td><br>
                                            </tr>
                                        </table>
                                    </td> 
                                </tr>                              
                            </table>
                        </table> 
                    </td>                 
                </tr>  
                <tr>
                    <td >
                        <table >
                            <tr>
                                <td><h5><u>OTHER SPECIFICATION</u></h5></td><br>
                            </tr>                   
                            <table>  
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td><label for="Displacement">Displacement</label></td>
                                            </tr>
                                      <tr><td><?php echo $check['displacement']; ?> cc</td><br></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 200px;">
                                    <table>
                                      <tr><td><label  for="Power">Power</label></td></tr>
                                      <tr><td><?php echo $check['power']; ?> bhp</td><br></tr>
                                   </table>
                                  </td> 

                               </tr>                              
                         
                      </table>
                       <table>  
                               <tr >
                                 <td>
                                   <table>
                                      <tr><td><label for="Torque">Torque</label></td></tr>
                                      <tr><td><?php echo $check['torque']; ?> Nm</td><br></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 245px;" >
                                    <table>
                                      <tr><td><label  for="Mileage">Mileage</label></td></tr>
                                      <tr><td><?php echo $check['mileage']; ?> kmpl</td><br></tr>
                                   </table>
                                  </td> 

                               </tr>                              
                         
                      </table>
                       <table>  
                               <tr >
                                 <td>
                                   <table>
                                      <tr><td><label  for="DriveTrain">Drive Train</label></td></tr>
                                      <tr><td><?php echo $check['drivetrain']; ?> mm</td><br></tr>
                                   </table>
                                </td>
                                <td style="padding-left: 215px;">
                                   <table>
                                      <tr><td ><label for="FuelTankCapacity">Fuel Tank Capacity</label></td></tr>
                                      <tr><td><?php echo $check['fueltankcapacity']; ?> liter</td><br></tr>
                                   </table>
                                 </td>
                                

                               </tr>                              
                         
                      </table>
                      <table>  
                               <tr >
                                 <td>
                                   <table>
                                      <tr><td><label for="NumberofGears">Number of Gears</label></td></tr>
                                      <tr><td><?php echo $check['gear']; ?></td><br></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 170px;" >
                                    <table>
                                      <tr><td><label  for="NumberofCylinders">Number of Cylinders</label></td></tr>
                                      <tr><td><?php echo $check['cylinder']; ?></td><br></tr>
                                   </table>
                                  </td> 

                               </tr>                              
                         
                       </table>
                       <table>  
                               <tr >
                                 <td>
                                   <table>
                                      <tr><td><label for="Transmission">Transmission</label></td></tr>
                                      <tr><td><?php echo $check['transmission']; ?></td><br></tr>
                                   </table>
                                 </td> 
            
                               
                               </tr>                              
                         
                       </table>
                       
                      </td>                 
                    </tr>  
                   <tr>
                     <td >
                       <table >
                       <tr><td><h5><u>WHEELS & TYRES</u></h5></td><br></tr>
                       <table>  
                               <tr>
                                 <td>
                                   <table>
                                      <tr><td><label for="Wheel Type">Wheel Type</label></td></tr>
                                      <tr><td><?php echo $check['wheeltype']; ?></td><br></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 207px;" >
                                    <table>
                                      <tr><td><label  for="Tyre Type">Tyre Type</label></td></tr>
                                      <tr><td><?php echo $check['tyretype']; ?></td><br></tr>
                                   </table>
                                  </td> 

                               </tr>                              
                         
                       </table>
                       <table>  
                               <tr >
                                 <td>
                                   <table>
                                      <tr><td><label for="Front Tyre Size">Front Tyre Size</label></td></tr>
                                      <tr><td><?php echo $check['fronttyresize']; ?></td><br></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 188px;" >
                                    <table>
                                      <tr><td><label  for="Rear Tyre Size">Rear Tyre Size</label></td></tr>
                                      <tr><td><?php echo $check['reartyresize']; ?></td><br></tr>
                                   </table>
                                 </td> 
                               </tr>                        
                       </table>
                      
                      
                    
                      </table> 
                      </td>                 
                    </tr>
                   <tr>
                     <td>
                       <table >
                       <tr><td><h5><u>BRAKING SYSTEM</u></h5></td><br></tr>       <table>  
                               <tr>
                                 <td>
                                   <table>
                                      <tr><td><label for="Front Brake Type">Front Brake Type</label></td></tr>
                                      <tr><td><?php echo $check['frontbraketype'];?>
                                       </td><br>
                                      </tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 175px;" >
                                    <table>
                                      <tr><td><label  for="Rear Brake Type">Rear Brake Type</label></td></tr>
                                      <tr><td><?php  echo $check['rearbraketype']; ?>
                                        </td><br>
                                    </tr>
                                   </table>
                                  </td> 

                               </tr>                              
                         
                      </table>
                      
                      
                      
                    
                      </table> 
                      </td>                 
                    </tr>   
                   <tr>
                     <td>
                       <table >
                       <tr><td><h5><u>SUSPENSION</u></h5></td><br></tr>       <table>  
                               <tr>
                                 <td>
                                   <table>
                                      <tr><td><label for="Front Suspension">Front Suspension</label></td></tr>
                                      <tr><td><?php echo $check['frontsuspension']; ?></td><br></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 175px;" >
                                    <table>
                                      <tr><td><label  for="Rear Suspension">Rear Suspension</label></td></tr>
                                      <tr><td><?php echo $check['rearsuspension']; ?></td><br></tr>
                                   </table>
                                  </td> 

                               </tr>                              
                         
                      </table>
                      
                      
                      
                    
                      </table> 
                      </td>                 
                    </tr>  
                    <tr>
                     <td>
                       <table >
                       <tr><td><h5><u>STEERING</u></h5></td><br></tr>       <table>  
                               <tr>
                                 <td>
                                   <table>
                                      <tr><td><label for="Power Steering">Power Steering</label></td></tr>
                                      <tr><td><?php echo $check['power_steering']; ?>
                                    </td><br>
                                     </tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 115px;" >
                                    <table>
                                      <tr><td><label  for="Steering Type">Steering Type</label></td></tr>
                                      <tr><td><?php echo $check['steeringType']; ?></td><br></tr>
                                   </table>
                                  </td> 

                               </tr>    
                               <tr>
                                 <td>
                                   <table>
                                      <tr><td><label for="Adjustable Power Steering">Adjustable Power Steering</label></td></tr>
                                      <tr><td> <?php echo $check['apowersteering']; ?></td><br></tr>
                                   </table>
                                 </td> 
            
                                 

                               </tr>                               
                         
                      </table>
                      
                      
                      
                    
                      </table> 
                      </td>                 
                    </tr>    
                </table>
                </td>
           </tr>


           <tr>    
                <td >
                <table>
                  <tr><td ><H3 style="margin-top: 50px;">Photos</H3></td></tr>
                   <tr>
                     <td >
                     <table >
                               
                       <table>  
                               <tr>
                                <td >
                                <td>
                                    
                                    <div class="form-group"> 
                                    
                                      <div class="col-sm-5">
                                       <div class="fileinput fileinput-new" data-provides="fileinput"> 
                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput"> 
                                        <img src="<?php echo  $check['c_image1']; ?>" alt="..."  > 
                                        </div> 
                                    
                                    
                                       </div> 
                                      </div>
                                  </div>
                                  
                                </td>
                                </td>
                                <td>
                                <td>
                                    
                                    <div class="form-group"> 
                                    
                                      <div class="col-sm-5">
                                       <div class="fileinput fileinput-new" data-provides="fileinput"> 
                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput"> 
                                        <img src="<?php echo  $check['c_image2']; ?>" alt="..."  > 
                                        </div> 
                                      
                                       </div> 
                                      </div>
                                  </div>
                                  
                                </td>
                                </td>
                                <td>
                                    
                                    <div class="form-group"> 
                                    
                                      <div class="col-sm-5">
                                       <div class="fileinput fileinput-new" data-provides="fileinput"> 
                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput"> 
                                        <img src="<?php echo  $check['c_image3']; ?>" alt="..."  > 
                                        </div> 
                                    
                                       </div> 
                                      </div>
                                  </div>
                                  
                                </td>
                              
                               </tr>                             
                      </table>                     
                      </td>                 
                    </tr>                  
                </table>
                </td>
           </tr>  
          <!--   <tr>
                    <td><button class="button"><a href="A_car_d_update.php?m_code=<?php echo $check['m_code']; ?>">Update Detail</a></button></td>
                </tr> -->
             <tr>
            <td><a href="A_car_d_update.php?m_code=<?php echo $m_code; ?>"><button class="submit">Update Car Detail</button></a></td> 
             <td> <form method="POST"> <input type="submit" name="delete" class="submit"  value="Delete"/></form>    </td>
            </tr>
          <!--  <tr><td ><p style="margin-top: 50px;" class="submit">
               <input type="submit" name="update" value="UPDATE CAR DETAIL" />                
          </p></td></tr>        -->
</table>
        <?php
     
     if (isset($_POST['delete'])) {

          
          $sql1 = mysql_query ("DELETE FROM car_detail WHERE m_code='$m_code'");
        if($sql1)
        {  
        
           echo "<script> location.href='A_car_b.php'; </script>";
        }
        else
        {
            mysql_error();
        }
     }

    ?>
        
   
<?php 
}
?>


       </div>
                </div>
            </div>
    
        </div>


    </div>
    
<style>

#submit,#signup
{
width:300px; 
height:40px;
  border:2px solid #666666;
}


.carinsert {
    padding: 50px 100px;
    font-size: 13px;
    font-style: Verdana, Tahoma, sans-serif;
}



/* ===========================
   ====== Contact Form ======= 
   =========================== */

.carinsert input,.carinsert textarea,.carinsert select {
    padding: 10px;
    border: 1px solid #E5E5E5;
    width: 200px;
    color: #999999;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
    -moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
    -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;     
}
.carinsert textarea {
    width: 400px;
    height: 150px;
    max-width: 400px;
    line-height: 18px;
}

.carinsert input:hover,.carinsert textarea:hover,.carinsert select:hover
.carinsert input:focus,.carinsert textarea:focus,.carinsert select:focus {
    border-color: 1px solid #C9C9C9;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;
    -moz-box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;
    -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px; 
}




/* ===========================
   ====== Submit Button ====== 
   =========================== */

.carinsert button, input {
    width: 200px; 
    height: 40px;
    background-color: #474E69; 
    color: #FFFFFF;
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;     
}

.form label {
    margin-left: 10px;
    color: #999999;
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