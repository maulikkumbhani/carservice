 <?php
include('../conn.inc');

        $t_code = $_REQUEST['t_code'];
        $w= $_REQUEST['w'];

            $sql=mysql_query("SELECT * FROM `t_vender` WHERE `t_code`='$t_code'");
            $data=mysql_fetch_assoc($sql);
            $t_email=$data['t_email'];


            $sql1=mysql_query("SELECT * FROM `t_appointments` WHERE `t_a_code`='$w'");
            $data1=mysql_fetch_assoc($sql1);
            $c_number=$data1['c_number'];

 
                             $premsg="You get request to pick up of ";
                             $postmsg=",Please Check more detail from your account.";
                             
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
                             $mail ->Subject = "Towing booking";
                             $mail ->Body = $statusmsg;
                             $mail ->AddAddress($t_email);
                             

                             if(!$mail->Send())
                             {
                                 echo "<script>alert('Network Connection ERROR !');</script>";
                             }
                             else
                             {
                               echo "<script> location.href='V_Tow_A_detail.php?t_a_code=$w'; </script>"; 
                             }
                               
    ?>