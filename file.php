<?php


$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "hardb"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$request = 2;
if(isset($_GET['request'])){
   $request = $_GET['request'];
}
   $data = json_decode(file_get_contents("php://input"));

   $age = $data->age;
   $geo_loc = $data->geo_loc;
   $city= $data->city;
   
   echo $city;
    //Insert record
   $sql = "insert into data(age,geo_loc,city) values('".$age."','".$geo_loc."','".$city."')";
  if(mysqli_query($con,$sql)){
      echo 1; 
   }else{
      echo 0;
	  echo 
  }
