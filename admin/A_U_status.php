
<?php
session_start();
include('../conn.inc');


$u_code = $_REQUEST['u_code'];

$sql_get = mysql_query("SELECT * FROM user_info WHERE  user_code='$u_code'");
$data = mysql_fetch_assoc($sql_get);
$uemail = $data['email'];


$status = "Disable";
$sql_check = mysql_query("SELECT * FROM user_info WHERE status='$status' AND user_code='$u_code'");

$row = mysql_num_rows($sql_check);
if($row > 0)
	{		
			$status = "Enable";
			 $sql = mysql_query("UPDATE `user_info` SET status='$status' WHERE user_code='$u_code'");

			 if($sql)
					{		
							$statusmsg = "Your account has been Enable by admin. Now you can access your account";
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
					  		header("location:A_U_detail.php");
					}
					else
					{
						echo "<script>alert('Somethimg went wrong !');</script>";
						header("location:A_U_detail.php");
				    
					}
	}
else
	{
			$status = "Disable";
			 $sql = mysql_query("UPDATE `user_info` SET status='$status' WHERE user_code='$u_code'");

			 if($sql)
					{
						$statusmsg = "Your account has been Disable by admin.Please contact us";
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
					  header("location:A_U_detail.php");
					}
					else
					{
						echo "<script>alert('Somethimg went wrong !');</script>";
						header("location:A_U_detail.php");
				    	
					}
	}

?>