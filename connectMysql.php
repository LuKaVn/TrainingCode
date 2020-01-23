
<?php/*
$servername = "localhost";
$username = "cafe9899";
$password = "8@zuT*wVXtyz17,";
$dbname = "cafe9899_UVmeter";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
  echo "login ok";
  //CREATE DATABASE lukadatabse;
}else{
  echo "login not 3.1 ok";
}

if ($conn->query('CREATE TABLE data(
ID int(6), name VARCHAR(30)
)') == TRUE) {
      echo "tao bang OK";
      //echo "Thêm dữ liệu thành công <br>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
*/
$server = 'localhost';
$user="cafe9899";
$password="8@zuT*wVXtyz17";
$nameDB="cafe9899_UVmeter";
$conn=mysqli_connect($server,$user,$password,$nameDB);
if(conn==1){
  echo("login OK");
}else{
  echo("login not ok");
}
?>
