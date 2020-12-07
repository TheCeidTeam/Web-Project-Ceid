<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysql_error());
  }
  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

   $age=$_POST['age'] ?? 'default';
   $geo_loc=$_POST['geo_loc'] ?? 'default';
   $city=$_POST['city'] ?? 'default';
   $email="geodimyolo@gmail.com";
   $startedDateTime  =$_POST['startedDateTime'];
   $wait=$_POST['wait'];
   $serverIPAddress=$_POST['IpAddress'];
   $Status=$_POST['Status'];
   $StatusText=$_POST['StatusText'];
   $method=$_POST['method'];
   $url=$_POST['url'];
   $cacheControl=$_POST['cacheControl'];
   $pragma=$_POST['pragma'];
   $expires=$_POST['expires'];
   $lastmod=$_POST['lastmod'];
   $host=$_POST['host'];
   $expires=$_POST['expires'];
   $ContentType=$_POST['ContentType'];
   $paroxos=$_POST['paroxos'];




   
   $sql='INSERT INTO data( useremail,startedDateTime,wait,serverIPAddress,method,domainname,status,statusText,contenttype,cachecontrol,pragma,expires,age,lastmodified,host,paroxos,city,geoloc) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
  $stmt = $conn->prepare($sql);
  


  $stmt->bind_param('ssssssssssssssssss',$email,$startedDateTime,$wait,$serverIPAddress,$method,$url,$Status,$StatusText,$ContentType,$cacheControl,$pragma,$expires,$age,$lastmod,$host, $paroxos, $city, $geo_loc);
  $stmt->execute();
      $stmt->close();



      echo $city;
       
 