<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }

$admin="admin";
 
$pass="123456789!A";
$email="fotob@pathfinder.gr";
$fname="geo";
$lname="dim";
$username="admin";

  $sql='INSERT INTO users ( password,email,username,type,firstname, lastname) VALUES (?, ?, ?, ?, ?, ?)';
  $stmt = $conn->prepare($sql);
  $pass=password_hash($pass,PASSWORD_DEFAULT);
  $stmt->bind_param('ssssss',  $pass,$email,$username,$admin,$fname, $lname );
  $stmt->execute();
      $stmt->close();
     
    
      echo json_encode("ok"); 
  
 
  
			




?>