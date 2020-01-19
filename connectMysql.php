<?php
$host='112.78.2.253';
$user='cafe9899';
$pass='8@zuT*wVXtyz17,';
$servername = "localhost";
$username = "cafe9899";
$password = "8@zuT*wVXtyz17,";
$dbname = "cafe9899_UVmeter";
$con=mysqli_connect($servername,$username,$password,$dbname);
if($con){
  echo "login ok";
}else{
  echo "login not 3.1 ok";
}
?>
