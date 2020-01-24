
<?php
$server = "localhost";
$user = "cafe9899";
$password = "8@zuT*wVXtyz17,";
$nameDB = "cafe9899_UVmeter";

$conn=mysqli_connect($server,$user,$password,$nameDB);
if($conn==1){
  echo("connect Ok");
}else{
  echo("connect not ok");
}

$drop=$conn->query("DROP TABLE LUKA3");
if($drop==true){
  echo("delete OK");
}else{
  echo("delete not ok");
}
$conn->close();
?>
