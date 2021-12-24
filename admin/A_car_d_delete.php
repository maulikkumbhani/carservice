<?php
 $m_code = $_REQUEST['m_code'];
 echo $m_code;
 $sql = mysql_query ("DELETE FROM `car_detail` WHERE m_code='$m_code'");
 if($sql)
		{
		  	header('location:A_car_brand.php');
		}
		else
		{
	    	mysql_error();
		}
?>