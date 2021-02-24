<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }
  $var2=$_SESSION['username'];
  $sql="SELECT email FROM users WHERE username  = '$var2' ";

  $result = $conn->query($sql);

  while($row1=mysqli_fetch_assoc($result)){
      $var1=$row1['email'];
  }

  echo $var1

  ?>