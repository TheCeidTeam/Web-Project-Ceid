<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   die('Could not connect: ' . mysql_error());
  }

  
$pass= $_POST['password'] ;
$username= $_POST['username'] ;
$oldusername=$_SESSION['username'];
$hashpass= password_hash($pass,PASSWORD_DEFAULT);


$sql="SELECT username FROM users WHERE username  = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param('s', $username);
$stmt->execute();
$stmt->store_result();

if (!($stmt->num_rows > 0) || $oldusername == $username){
  $stmt->close();
  $sql="UPDATE users SET password = '$hashpass', username='$username' WHERE username= '$oldusername'";
  if ($conn->query($sql) === TRUE) {
    unset($_SESSION['username']);
    $_SESSION['username']=$username;
    unset($_SESSION['password']);
    $_SESSION['password']=$pass;
    //echo "Record updated successfully";
    $conn->close();
    header("Content-type: application/json");
    echo json_encode("ok");
   } else {
    header("Content-type: application/json");
    echo "Error updating record: " . $conn->error;
  } 

}
else{
  header("Content-type: application/json");
 die("incorrect");
  
}

?>