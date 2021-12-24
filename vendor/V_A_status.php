
<?php
session_start();
include('../conn.inc');


$a_code = $_REQUEST['a_code'];
$w = $_REQUEST['w'];

$sql_get = mysql_query("SELECT * FROM appointments WHERE  a_code='$a_code'");
$data = mysql_fetch_assoc($sql_get);

$c_name = $data['c_name'];
$c_model = $data['c_model'];
$c_number = $data['c_number'];
$info = $c_name." " .$c_model. " ".$c_number;

$sql_get1=mysql_query("SELECT * FROM user_info WHERE user_code=(SELECT u_code FROM appointments WHERE a_code='$a_code')");
$data1 = mysql_fetch_assoc($sql_get1);
$uemail = $data1['email'];


$status = "Pending";
$sql_check = mysql_query("SELECT * FROM appointments WHERE status='$status' AND a_code='$a_code'");

$row = mysql_num_rows($sql_check);
if($row > 0 && $w == 1)
	{		
			$status = "Work done";
			 $sql = mysql_query("UPDATE `appointments` SET status='$status' WHERE a_code='$a_code'");

			 if($sql)
					{		$premsg="Your Garage service is complete of ";
                            $postmsg=" Please pick your car from garage";
							 $statusmsg=$premsg.$info.$postmsg;
						 	 ob_start();
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
                             $mail ->Subject = "Account Status";
                             $mail ->Body = $statusmsg;
                             $mail ->AddAddress($uemail);
                             

                             if(!$mail->Send())
                             {
                                 echo "<script>alert('Network Connection ERROR !');</script>";
                             }
                             else
                             {
                                $msg = "";  
                             }
					  		header("location:V_A_list.php");
					}
					else
					{
						echo "<script>alert('Somethimg went wrong !');</script>";
						header("location:A_U_detail.php");
				    
					}
	}
else
	{
			$status = "Cancelled";
             $sql = mysql_query("UPDATE `appointments` SET status='$status' WHERE a_code='$a_code'");

             if($sql)
                    {       
                            $premsg="Your Garage service Appointment of ";
                            $postmsg=" has been Cancelled  by garage.";
                             $statusmsg=$premsg.$info.$postmsg;
                             ob_start();
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
                             $mail ->Subject = "Account Status";
                             $mail ->Body = $statusmsg;
                             $mail ->AddAddress($uemail);
                             

                             if(!$mail->Send())
                             {
                                 echo "<script>alert('Network Connection ERROR !');</script>";
                             }
                             else
                             {
                                $msg = "";  
                             }
                            header("location:V_A_list.php");
                    }
                    else
                    {
                        echo "<script>alert('Somethimg went wrong !');</script>";
                        header("location:A_U_detail.php");
                    
                    }
	}

?>