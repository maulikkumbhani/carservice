
<?php
session_start();
include('../conn.inc');


$a_code = $_REQUEST['a_code'];

$sql_get = mysql_query("SELECT * FROM appointments WHERE  a_code='$a_code'");
while ($data=mysql_fetch_assoc($sql_get)) 

$c_name = $data['c_name'];
$c_model = $data['c_model'];
$c_number = $data['c_number'];
$info = $c_name." " .$c_model. " ".$c_number;

$sql_get1=mysql_query("SELECT * FROM user_info WHERE user_code=(SELECT u_code FROM appointments WHERE a_code='$a_code')");
$data1 = mysql_fetch_assoc($sql_get1);
$uemail = $data1['email'];

$row = mysql_num_rows($sql_get);
if($row > 0)
	{		
			$status="Cancelled";
			 $sql = mysql_query("UPDATE `appointments` SET status='$status' WHERE a_code='$a_code'");

			 if($sql)
					{		
							$premsg="Your Appointment of ";
                            $postmsg="has been cancelled successfully.";
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
					  		header("location:U_appointment_list.php");
					}
					else
					{
						echo "<script>alert('Somethimg went wrong !');</script>";
						header("location:U_appointment_list.php");
				    
					}
	}

?>