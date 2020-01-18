<?php
$host="http://cafesland.com:2082";
$user="cafe9899";
$pass="8@zuT*wVXtyz17,";
$con=mysql_connect($host,$user,$pass);
if($con==1){
  echo "login ok";
}else{
  echo "login not ok";
}
 ?>
