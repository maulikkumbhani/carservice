<?php

$con=mysql_connect('localhost','root','');


if($con)
{

$db=mysql_select_db('carservice');


if ($db)
{

}
else
{
  echo mysql_error;
 

}
}
else
{
    echo mysql_error;
}

?>