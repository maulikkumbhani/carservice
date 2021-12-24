
<?php
session_start();
include('../conn.inc');


$t_a_code = $_REQUEST['t_a_code'];

$sql_get = mysql_query("SELECT * FROM t_appointments WHERE  t_a_code='$t_a_code'");
$data=mysql_fetch_assoc($sql_get);

$c_number = $data['c_number'];
$t_code = $data['t_code'];


$sql_get1=mysql_query("SELECT * FROM user_info WHERE email=(SELECT email FROM t_appointments WHERE t_a_code='$t_a_code')");
$data1 = mysql_fetch_assoc($sql_get1);
$uemail = $data1['email'];

$row = mysql_num_rows($sql_get);
if($row > 0)
	{		
			$status="Cancelled";
            $status1="idle";
			 $sql = mysql_query("UPDATE `t_appointments` SET status='$status' WHERE t_a_code='$t_a_code'");
               $sql1 =mysql_query("UPDATE `t_vender` SET `status`='$status1' WHERE t_code='$t_code'");

			 if($sql)
					{		
							$premsg="Your Towing Appointment of ";
                            $postmsg="has been cancelled successfully.";
                             $statusmsg=$premsg.$c_number.$postmsg;
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