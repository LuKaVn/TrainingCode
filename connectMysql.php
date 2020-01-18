<?php
$host='https://s2d253.cloudnetwork.vn:2083';
$user='cafe9899';
$pass='8@zuT*wVXtyz17,';
$con=mysqli_connect($host,$user,$pass);
if($con){
  echo "login ok";
}else{
  echo "login not 2 ok";
}
?>
