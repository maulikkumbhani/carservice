
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
         header('location:A_car_d_view.php');
     }
     
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
   
     <title>Car | Update</title> <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
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
           <div class="col-md-6 col-sm-4 clearfix hidden-xs" style="float: left; display:inline;"><h2>Car Detail Update</h2></div>
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
   			<li>
   				<a href="A_car_d_update.php">Car Details Update</a> 
   			</li>
   		</ol><br />
         <div>

                <H3 style="text-align: center;">Car Detail Update</H3>

                <div style="border: solid 2px black;" class="carinsert">



<?php
  // $m_code = $_SESSION['m_code'];
$m_code =$_REQUEST['m_code'];
  $sql_select = mysql_query ( "SELECT * FROM car_detail WHERE m_code='$m_code'");
     while ($check= mysql_fetch_assoc($sql_select)) 
       {
      ?>
    
    <form class="form" method="POST" enctype="multipart/form-data">
        
        <table>
           <tr >
            <td>
                <table>
                  <?php 
                  $b_code = $check['b_code'];
                   $sql_select1 = mysql_query ( "SELECT * FROM c_brandname WHERE b_code='$b_code'");
                 $check1= mysql_fetch_assoc($sql_select1) 
                    ?>
              <tr><td><label for="Brandname">Brand Name</label></td></tr>
               <tr><td><input type="text" name="Brandname" required="required" title="Car model name" id="modelname"  value="<?php echo $check1['b_name'];  ?>" disabled /></td><br></tr>
              
         
              </table>
            </td> 
            
            <td style="padding-left: 100px;" >
                <table>
              <tr><td><label  for="modelname">Model Name</label></td></tr>
              <tr><td><input type="text" name="Modelname" required data-errormessage-value-missing="Enter Model Name" title="Car model name" id="modelname"  value="<?php echo $check['m_name']; ?>" disabled /></td><br></tr>
              </table>
            </td> 

           </tr>  

           <tr >
            <td>
                <table>
              <tr><td><label for="rating">Rating</label></td></tr>
              <tr><td><input type="text" name="Rating"  pattern="^[0-5]{1}$"  id="rating" required data-errormessage-value-missing="Enter Car Rating" data-errormessage-pattern-mismatch="Enter Rating Between 0 to 5" id="rating"  value="<?php echo $check['rating']; ?>" /></td><br></tr>
              </table>
            </td>
           </tr>  
           <tr >
            <td>
                <table>
              <tr><td><label for="price">Price</label></td></tr>
              <tr><td><input type="text" name="Price" id="price" pattern="[0-9]{0,20}" required data-errormessage-value-missing="Enter Car Price" data-errormessage-pattern-mismatch="Enter Car Price In Rs." value="<?php echo $check['price']; ?>" /> RS.</td><br></tr>
              </table>
            </td>
           </tr>  
           <tr>    
                <td >
                <table>
                  <tr><td><H3 style="margin-top: 50px;">SPECIFICATION</H3></td></tr>
                   <tr>
                     <td >
                     <table >
                       <tr><td><h5>DIMENSIONS</h5></td><br></tr>                   
                       <table>  
                        <br>
                               <tr>
                                 <td>
                                   <table>
                                      <tr><td><label for="Length">Length</label></td></tr>
                                      <tr><td><input type="text" name="Length" pattern="^[0-9]{1,20}$" required data-errormessage-value-missing="Enter Car Length" id="Length" value="<?php echo $check['length']; ?>"  /></td><td>mm</td></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 100px;" >
                                    <table>
                                      <tr><td><label  for="width">Width</label></td></tr>
                                      <tr><td><input type="text" name="Width" pattern="^[0-9]{1,20}$" required data-errormessage-value-missing="Enter Car Width"  id="Width" value="<?php echo $check['width']; ?>"  /></td><td>mm</td></tr>
                                   </table>
                                  </td> 

                               </tr>                              
                         
                      </table>
                      <br>
                       <table>  
                               <tr >
                                 <td>
                                   <table>
                                      <tr><td><label for="height">Height</label></td></tr>
                                      <tr><td><input type="text" name="Height" pattern="^[0-9]{1,20}$" required data-errormessage-value-missing="Enter Car Height" id="height" value="<?php echo $check['height']; ?>"  /></td><td>mm</td></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 100px;" >
                                    <table>
                                      <tr><td><label  for="Wheelbase">Wheelbase</label></td></tr>
                                      <tr><td><input type="text" name="Wheelbase" pattern="^[0-9]{1,20}$" data-errormessage-value-missing="Enter Car Wheelbase" id="Wheelbase" value="<?php echo $check['wheelbase']; ?>"  /></td><td>mm</td></tr>
                                   </table>
                                  </td> 

                               </tr>                              
                         
                      </table>
                      <br>
                       <table>  
                               <tr >
                                 <td>
                                   <table>
                                      <tr><td><label for="Ground Clearance">Ground Clearance</label></td></tr>
                                      <tr><td><input type="text" name="GroundClearance" pattern="^[0-9]{1,20}$" data-errormessage-value-missing="Enter Ground Clearance "  id="GroundClearance"  value="<?php echo $check['groundclearance']; ?>" /></td><td>mm</td></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 100px;" >
                                    <table>
                                      <tr><td><label  for="Kerb Weight">Kerb Weight</label></td></tr>
                                      <tr><td><input type="text" name="KerbWeight" pattern="^[0-9]{1,20}$" required data-errormessage-value-missing="Enter Kerb Weight" id="KerbWeight" value="<?php echo $check['kerbweight']; ?>"  /></td><td>kg</td></tr>
                                   </table>
                                  </td> 

                               </tr>                              
                         
                      </table>
                      <br>
                      <table>  
                               <tr >
                                 <td>
                                   <table>
                                      <tr><td><label for="Minimum Turning Radius">Minimum Turning Radius</label></td></tr>
                                      <tr><td><input type="text" name="MinimumTurningRadius" pattern="^[0-9]{1,2}$" required data-errormessage-value-missing="Minimum Turning Radius" id="MinimumTurningRadius" value="<?php echo $check['minimumturningradius']; ?>" /></td><td>feet</td></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 100px;" >
                                    <table>
                                      <tr><td><label  for="No. Of Doors">No. Of Doors</label></td></tr>
                                      <tr><td><input type="text" name="NoOfDoors" pattern="^[0-9]{1,2}$" required data-errormessage-value-missing="No. Of Doors" id="NoOfDoors" value="<?php echo $check['noofdoors']; ?>" /></td><br></tr>
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
                       <tr><td><h5>OTHER SPECIFICATION</h5></td><br></tr>                   
                       <table>  
                        <br>
                               <tr>
                                 <td>
                                   <table>
                                      <tr><td><label for="Displacement">Displacement</label></td></tr>
                                      <tr><td><input type="text" name="Displacement" pattern="^[a-zA-Z0-9]{1,20}$" required data-errormessage-value-missing="Enter Displacement"  id="Displacement" value="<?php echo $check['displacement']; ?>"  /></td><td>CC</td></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 100px;" >
                                    <table>
                                      <tr><td><label  for="Power">Power</label></td></tr>
                                      <tr><td><input type="text" name="Power" pattern="^[0-9]{1,20}$" required data-errormessage-value-missing="Enter Power"  id="Power" value="<?php echo $check['power']; ?>"  /></td><td>bhp</td></tr>
                                   </table>
                                  </td> 

                               </tr>                              
                         
                      </table>
                      <br>
                       <table>  
                               <tr >
                                 <td>
                                   <table>
                                      <tr><td><label for="Torque">Torque</label></td></tr>
                                      <tr><td><input type="text" name="Torque" pattern="^[a-zA-Z0-9]{1,20}$" required data-errormessage-value-missing="Enter Torque" id="Torque" value="<?php echo $check['torque']; ?>"  /></td><td>Nm</td></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 100px;" >
                                    <table>
                                      <tr><td><label  for="Mileage">Mileage</label></td></tr>
                                      <tr><td><input type="text" name="Mileage" pattern="^[0-9]{1,20}$" required data-errormessage-value-missing="Enter Mileage" id="Mileage" value="<?php echo $check['mileage']; ?>"  /></td><td>kmp</td></tr>
                                   </table>
                                  </td> 

                               </tr>                              
                         
                      </table>
                      <br>
                       <table>  
                               <tr >
                                 <td>
                                   <table>
                                      <tr><td><label  for="DriveTrain">Drive Train</label></td></tr>
                                      <tr><td><input type="text" name="DriveTrain" pattern="^[0-9]{1,20}$" required data-errormessage-value-missing="Enter Drive Train" id="Drive Train" value="<?php echo $check['drivetrain']; ?>" /></td><td>mm</td></tr>
                                   </table>
                                </td>
                                <td style="padding-left: 100px;">
                                   <table>
                                      <tr><td ><label for="FuelTankCapacity">Fuel Tank Capacity</label></td></tr>
                                      <tr><td><input type="text" name="FuelTankCapacity" pattern="^[0-9]{1,2}$" required data-errormessage-value-missing="Enter Fuel Tank Capacity" id="FuelTankCapacity" value="<?php echo $check['fueltankcapacity']; ?>" /></td><td>liter</td></tr>
                                   </table>
                                 </td>
                                

                               </tr>                              
                         
                      </table>
                      <br>
                      <table>  
                               <tr >
                                 <td>
                                   <table>
                                      <tr><td><label for="NumberofGears">Number of Gears</label></td></tr>
                                      <tr><td><input type="text" name="NumberofGears" pattern="^[0-9]{1,2}$" required data-errormessage-value-missing="Enter Number of Gears" id="NumberofGears" value="<?php echo $check['gear']; ?>" /></td><td>NO</td></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 100px;" >
                                    <table>
                                      <tr><td><label  for="NumberofCylinders">Number of Cylinders</label></td></tr>
                                      <tr><td><input type="text" name="NumberofCylinders" pattern="^[0-9]{1,2}$" required data-errormessage-value-missing="Enter Number of Cylinders" id="NumberofCylinders"value="<?php echo $check['cylinder']; ?>" /></td><td>NO</td></tr>
                                   </table>
                                  </td> 

                               </tr>                              
                         
                       </table>
                       <br>
                       <table>  
                               <tr >
                                 <td>
                                   <table>
                                      <tr><td><label for="Transmission">Transmission</label></td></tr>
                                      <tr><td><input type="text" name="Transmission" pattern="^[a-zA-Z0-9]{1,20}$" required data-errormessage-value-missing="Enter Transmission" id="Transmission" value="<?php echo $check['transmission']; ?>" /></td><td>A/M</td></tr>
                                   </table>
                                 </td> 
            
                               
                               </tr>                              
                         
                       </table>
                       
                      </td>                 
                    </tr>  
                   <tr>
                     <td >
                       <table >
                       <tr><td><h5>WHEELS & TYRES</h5></td><br></tr>
                       <table>  
                        <br>
                               <tr>
                                 <td>
                                   <table>
                                      <tr><td><label for="Wheel Type">Wheel Type</label></td></tr>
                                      <tr><td><input type="text" name="WheelType" required data-errormessage-value-missing="Enter Wheel Type" id="WheelType"  value="<?php echo $check['wheeltype']; ?>" /></td><td>A/S</td></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 100px;" >
                                    <table>
                                      <tr><td><label  for="Tyre Type">Tyre Type</label></td></tr>
                                      <tr><td><input type="text" name="TyreType" required data-errormessage-value-missing="Enter Tyre Type" id="TyreType" value="<?php echo $check['tyretype']; ?>"  /></td><td>T/TL</td></tr>
                                   </table>
                                  </td> 

                               </tr>                              
                         
                       </table>
                       <br>
                       <table>  
                               <tr >
                                 <td>
                                   <table>
                                      <tr><td><label for="Front Tyre Size">Front Tyre Size</label></td></tr>
                                      <tr><td><input type="text" name="FrontTyreSize" required data-errormessage-value-missing="Enter Front Tyre Size" id="FrontTyreSize" value="<?php echo $check['fronttyresize']; ?>"  /></td><td>W/R</td></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 100px;" >
                                    <table>
                                      <tr><td><label  for="Rear Tyre Size">Rear Tyre Size</label></td></tr>
                                      <tr><td><input type="text" name="RearTyreSize" required data-errormessage-value-missing="Enter Rear Tyre Size" id="RearTyreSize" value="<?php echo $check['reartyresize']; ?>" /></td><td>W/R</td></tr>
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
                       <tr><td><h5>BRAKING SYSTEM</h5></td><br></tr>      
                         <table>  
                          <br>
                               <tr>
                                 <td>
                                   <table>
                                      <tr><td><label for="Front Brake Type">Front Brake Type</label></td></tr>
                                      <tr><td>
                                        <select name="frontbraketype" required="required"> 
                                         <option>Select</option>     
                                         <option>Disc</option>
                                         <option>Drum</option>
                                         <option>Anti-Lock</option>
                                        </select>
                                       </td><td>D/A</td>
                                      </tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 100px;" >
                                    <table>
                                      <tr><td><label  for="Rear Brake Type">Rear Brake Type</label></td></tr>
                                      <tr><td> <select name="rearbraketype" required="required"> 
                                         <option>Select</option>     
                                         <option>Disc</option>
                                         <option>Drum</option>
                                         <option>Anti-Lock</option>
                                        </select>
                                        </td><td>D/A</td>
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
                       <tr><td><h5>SUSPENSION</h5></td><br></tr>       <table>  
                        <br>
                               <tr>
                                 <td>
                                   <table>
                                      <tr><td><label for="Front Suspension">Front Suspension</label></td></tr>
                                      <tr><td><input type="text" name="FrontSuspension" required data-errormessage-value-missing="Enter Front Suspension" id="FrontSuspension"  value="<?php echo $check['frontsuspension']; ?>" /></td><td>Y/N</td></tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 100px;" >
                                    <table>
                                      <tr><td><label  for="Rear Suspension">Rear Suspension</label></td></tr>
                                      <tr><td><input type="text" name="RearSuspension" required data-errormessage-value-missing="Enter Rear Suspension" id="RearSuspension" value="<?php echo $check['rearsuspension']; ?>" /></td><td>Y/N</td></tr>
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
                       <tr><td><h5>STEERING</h5></td><br></tr>       <table>  
                        <br>
                               <tr>
                                 <td>
                                   <table>
                                      <tr><td><label for="Power Steering">Power Steering</label></td></tr>
                                      <tr><td>
                                         <select  required="required" name="PowerSteering"> 
                                         <option>Yes</option>     
                                         <option>No</option>
                                         </select>
                                    </td><td>Y/N</td>
                                     </tr>
                                   </table>
                                 </td> 
            
                                 <td style="padding-left: 100px;" >
                                    <table>
                                      <tr><td><label  for="Steering Type">Steering Type</label></td></tr>
                                      <tr><td><input type="text" name="SteeringType" required data-errormessage-value-missing="Enter Steering Type" id="SteeringType" value="<?php echo $check['m_name']; ?>"  /></td><br></tr>
                                   </table>
                                  </td> 

                               </tr>    
                               <tr>
                                 <td>
                                   <table>
                                    <br>
                                      <tr><td><label for="Adjustable Power Steering">Adjustable Power Steering</label></td></tr>
                                      <tr><td> <select required="required" name="AdjustablePowerSteering"> 
                                         <option>Yes</option>     
                                         <option>No</option>
                                         </select></td><td>Y/N</td></tr>
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
                       <tr><td><h5>Drage and Drop Car Images</h5></td><br></tr>                   
                       <table>  
                               <tr>
                                <td >
                                <td>
                                    
                                    <div class="form-group"> 
	                                  
	                                    <div class="col-sm-5">
	                                     <div class="fileinput fileinput-new" data-provides="fileinput"> 
	                                     	<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput"> 
	 		                                  <img src="<?php if($check['c_image1'] == NULL) { echo "DragandDrop.png"; } else { echo $check['c_image1']; } ?>" alt="..."  > 
	 	                                    </div> 
	 	                                 <div class="fileinput-preview fileinput-exists thumbnail" style="width: 200px;height: 150px;">
	 	                                 </div> 
	 	                                 <div> 
	 	                                 <span class="btn btn-white btn-file"> 
                                        <span class="fileinput-new">Select image</span> 
                                        <span class="fileinput-exists">Change</span> 
                                        <input type="file" name="c_image1" accept="image/*"> 
                                      </span>  
	 		                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> 
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
	 		                                  <img src="<?php if($check['c_image2'] == NULL) { echo "DragandDrop.png"; } else { echo $check['c_image2']; } ?>" alt="..."  > 
	 	                                    </div> 
	 	                                 <div class="fileinput-preview fileinput-exists thumbnail" style="width: 200px;height: 150px;">
	 	                                 </div> 
	 	                                 <div> 
	 	                                 <span class="btn btn-white btn-file"> 
                                        <span class="fileinput-new">Select image</span> 
                                        <span class="fileinput-exists">Change</span> 
                                        <input type="file" name="c_image2" accept="image/*"> 
                                      </span>  
	 		                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> 
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
	 		                                  <img src="<?php if($check['c_image3'] == NULL) { echo "DragandDrop.png"; } else { echo $check['c_image3']; } ?>" alt="..."  > 
	 	                                    </div> 
	 	                                 <div class="fileinput-preview fileinput-exists thumbnail" style="width: 200px;height: 150px;">
	 	                                 </div> 
	 	                                 <div> 
	 	                                 <span class="btn btn-white btn-file"> 
                                        <span class="fileinput-new">Select image</span> 
                                        <span class="fileinput-exists">Change</span> 
                                        <input type="file" name="c_image3" accept="image/*"> 
                                      </span>  
	 		                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> 
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
           <tr><td ><p style="margin-top: 50px;" class="submit">
               <input type="submit" name="savecardetail" value="save" />
          </p></td></tr>       
        </table>
   
 
   
<?php 


$image1 =  $check['c_image1'];
$image2 =  $check['c_image2'];
$image3 =  $check['c_image3']; 

}
?>
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


     if(isset($_POST['savecardetail']))
 
 {
    
 



   
   
    $Rating = $_POST['Rating'];
    $Price = $_POST['Price'];
    $Length = $_POST['Length'];
    $Width = $_POST['Width'];
    $Height = $_POST['Height'];
    $Wheelbase = $_POST['Wheelbase'];
    $GroundClearance = $_POST['GroundClearance'];
    $KerbWeight = $_POST['KerbWeight'];
    $MinimumTurningRadius = $_POST['MinimumTurningRadius'];
    $NoOfDoors = $_POST['NoOfDoors'];    
    $TyreType = $_POST['TyreType'];
    $FrontTyreSize = $_POST['FrontTyreSize'];
    $RearTyreSize = $_POST['RearTyreSize'];
    $FrontSuspension = $_POST['FrontSuspension'];
    $RearSuspension = $_POST['RearSuspension'];
    $Frontbraketype = $_POST['frontbraketype'];
    $Rearbraketype = $_POST['rearbraketype'];
    $PowerSteering = $_POST['PowerSteering'];
    $SteeringType = $_POST['SteeringType'];
    $AdjustablePowerSteering = $_POST['AdjustablePowerSteering'];
    $Displacement = $_POST['Displacement'];
    $Power = $_POST['Power'];
    $Torque = $_POST['Torque'];
    $Mileage = $_POST['Mileage'];   
    $DriveTrain = $_POST['DriveTrain'];
    $NumberofGears = $_POST['NumberofGears'];
    $NumberofCylinders = $_POST['NumberofCylinders'];
    $FuelTankCapacity = $_POST['FuelTankCapacity'];
    $Transmission  = $_POST['Transmission'];
    $Wheeltype = $_POST['WheelType'];




     if (empty($_FILES['c_image1']['name']))
    {
      $url1 =  $image1;
    }
    else
    {
        $type1 = explode('.', $_FILES['c_image1']['name']);
        $type1 = $type1[count($type1) - 1];
        $url1 = '../uploads/c_image/' . uniqid(rand()) . '.' . $type1;

        if (in_array($type1, array('gif', 'jpg', 'jpeg', 'png'))) 
         {
            if (is_uploaded_file($_FILES['c_image1']['tmp_name'])) {
             
             if (move_uploaded_file($_FILES['c_image1']['tmp_name'],$url1)) 
             {
               
             }
             else
             {
              $image1_error = "File is Not uploads , Try Again"; 
             } 

            }
            else
            {
               $image1_error = "File is Not uploads , Try Again"; 
            }
         }
         else
         {
             $image1_error = "File Extensions Must Be jpg,jpeg,png,gif"; 
         }
    }
        
    if (empty($_FILES['c_image2']['name']))
    {
      $url2 =  $image2;
    }
    else
    {
        $type2 = explode('.', $_FILES['c_image2']['name']);
        $type2 = $type2[count($type2) - 1];
        $url2 = '../uploads/c_image/' . uniqid(rand()) . '.' . $type2;

        if (in_array($type2, array('gif', 'jpg', 'jpeg', 'png'))) 
         {
            if (is_uploaded_file($_FILES['c_image2']['tmp_name'])) {
             
             if (move_uploaded_file($_FILES['c_image2']['tmp_name'],$url2)) 
             {
               
             }
             else
             {
              $image1_error = "File is Not uploads , Try Again"; 
             } 

            }
            else
            {
               $image1_error = "File is Not uploads , Try Again"; 
            }
         }
         else
         {
             $image1_error = "File Extensions Must Be jpg,jpeg,png,gif"; 
         }
    }

     if (empty($_FILES['c_image3']['name']))
    {
      $url3 =  $image3;
    }
    else
    {
        $type3 = explode('.', $_FILES['c_image3']['name']);
        $type3 = $type3[count($type3) - 1];
        $url3 = '../uploads/c_image/' . uniqid(rand()) . '.' . $type3;

        if (in_array($type3, array('gif', 'jpg', 'jpeg', 'png'))) 
         {
            if (is_uploaded_file($_FILES['c_image3']['tmp_name'])) {
             
             if (move_uploaded_file($_FILES['c_image3']['tmp_name'],$url3)) 
             {
               
             }
             else
             {
              $image1_error = "File is Not uploads , Try Again"; 
             } 

            }
            else
            {
               $image1_error = "File is Not uploads , Try Again"; 
            }
         }
         else
         {
             $image1_error = "File Extensions Must Be jpg,jpeg,png,gif"; 
         }
    }



      

               
         
               $sql = "UPDATE `car_detail` SET `price`='$Price',`rating`='$Rating',`displacement`='$Displacement',`power`='$Power',`torque`='$Torque',`mileage`='$Mileage',`transmission`='$Transmission',`gear`='$NumberofGears',`cylinder`='$NumberofCylinders',`power_steering`='$PowerSteering',`length`='$Length',`width`='$Width',`wheelbase`='$Wheelbase',`groundclearance`='$GroundClearance',`kerbweight`='$KerbWeight',`minimumturningradius`='$MinimumTurningRadius',`noofdoors`='$NoOfDoors',`tyretype`='$TyreType',`fronttyresize`='$FrontTyreSize',`reartyresize`='$RearTyreSize',`frontsuspension`='$FrontSuspension',`rearsuspension`='$RearSuspension',`apowersteering`='$AdjustablePowerSteering',`height`='$Height',`drivetrain`='$DriveTrain',`wheeltype`='$Wheelbase',`fueltankcapacity`='$FuelTankCapacity',`frontbraketype`='$Frontbraketype',`rearbraketype`='$Rearbraketype',`steeringType`='$SteeringType',`c_image1`='$url1',`c_image2`='$url2',`c_image3`='$url3' WHERE m_code='$m_code'";
             
                if(mysql_query($sql))
                {
                
                
                 echo "<script> location.href='A_car_d_view.php?m_code=$m_code'; </script>"; 
                
                	


                }
                else
                {

                 
                 echo "<script type='text/javascript'>alert(<?php  echo mysql_error(); ?>);</script>";
            
                }
            
       
           
      
    
}



  
       

     ?>
 </form>                              
                </div>
                </div>
            </div>
    
        </div>

    </div>
    

 
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>

  
 <link rel="stylesheet" href=" assets/js/dropzone/dropzone.css" id="style-resource-1"> 
 <script src=" assets/js/gsap/TweenMax.min.js" id="script-resource-1"></script> 
 <script src=" assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script> 
 <script src=" assets/js/bootstrap.js" id="script-resource-3"></script> 
 <script src=" assets/js/joinable.js" id="script-resource-4"></script>
  <script src=" assets/js/resizeable.js" id="script-resource-5"></script> 
  <script src=" assets/js/neon-api.js" id="script-resource-6"></script>
   <script src=" assets/js/cookies.min.js" id="script-resource-7"></script>
    <script src=" assets/js/fileinput.js" id="script-resource-8"></script> 

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

.carinsert .submit input {
    width: 100px; 
    height: 40px;
    background-color: #474E69; 
    color: #FFF;
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
		
 </div>  


    <script src="civem.js"></script>
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