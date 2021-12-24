
<?php
session_start();
include('../conn.inc');


$t_a_code = $_REQUEST['t_a_code'];
$w = $_REQUEST['w'];

$sql_get = mysql_query("SELECT * FROM t_appointments WHERE  t_a_code='$t_a_code'");
$data = mysql_fetch_assoc($sql_get);

$c_number = $data['c_number'];
$info = $c_number;




$status = "Pending";
$sql_check = mysql_query("SELECT * FROM t_appointments WHERE status='$status' AND t_a_code='$t_a_code'");

$row = mysql_num_rows($sql_check);
if($row > 0 && $w == 1)
	{		
			$status = "Work done";
            $status1 = "idle";
			 $sql = mysql_query("UPDATE `t_appointments` SET status='$status' WHERE t_a_code='$t_a_code'");
             mysql_query("UPDATE `t_vender` SET status='$status1' WHERE t_code=(SELECT t_code FROM t_appointments WHERE  t_a_code='$t_a_code')");
			 if($sql)
					{		$premsg="Your pick up of ";
                            $postmsg=" is complete.";
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
                             $mail ->AddAddress($c_email);
                             

                             if(!$mail->Send())
                             {
                                 echo "<script>alert('Network Connection ERROR !');</script>";
                             }
                             else
                             {
                                $msg = "";  
                             }
					  		header("location:T_A_list.php");
					}
					else
					{
						echo "<script>alert('Somethimg went wrong !');</script>";
						
				    
					}
	}
else
	{
			$status = "Cancelled";
             $status1 = "idle";
             $sql = mysql_query("UPDATE `t_appointments` SET status='$status' WHERE t_a_code='$t_a_code'");
              mysql_query("UPDATE `t_vender` SET status='$status1' WHERE t_code=(SELECT t_code FROM t_appointments WHERE  t_a_code='$t_a_code')");

             if($sql)
                    {       
                            $premsg="Your towing pick up of ";
                            $postmsg=" has been Cancelled  by Vendor.";
                             $statusmsg=$premsg.$info.$postmsg;
                             ob_start();
                             require 'PHPMailer-master/PHPMailerAutoload.php';
                             $mail = new PHPMailer();
                             $mail ->IsSmtp();
                             $mail ->SMTPDebug =0;
                             $mail ->SMTPAuth = true;
                             $mail ->SMTPSecure = 'ssl';
                             $mail ->Host = "smtp.gmail.com";
                             $mail ->Port = 465; 
                            
                             $mail ->Username = "carcareservice16122@gmail.com";
                             $mail ->Password = "carcare16122@";
                             $mail ->SetFrom("carcareservice16122@gmail.com");  
                             $mail ->Subject = "Account Status";
                             $mail ->Body = $statusmsg;
                             $mail ->AddAddress($c_email);
                             

                             if(!$mail->Send())
                             {
                                 echo "<script>alert('Network Connection ERROR !');</script>";
                             }
                             else
                             {
                                $msg = "";  
                             }
                            header("location:T_A_list.php");
                    }
                    else
                    {
                        echo "<script>alert('Somethimg went wrong !');</script>";
                    
                    
                    }
	}

?>