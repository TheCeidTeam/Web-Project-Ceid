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


$array1=($_POST['pinakas']);

$arrayLength = count($array1);
echo ($arrayLength);
echo("\n\n\n");







$i = 1;
        while ($i < $arrayLength)
        {   
		    echo ($i);
			echo("\n");
            $email=$array1[$i]['email'];
            $startedDateTime=  $array1[$i]['startedDateTime'];
            $wait=$array1[$i]['wait'];
            $IpAddress= $array1[$i]['IpAddress'];
            $Status= $array1[$i]['Status'];
            $StatusText = $array1[$i]['StatusText'];
            $geo_loc= $array1[$i]['geo_loc'];
            $method=  $array1[$i]['method'];
            $url=$array1[$i]['url'];
            $cacheControl=$array1[$i]['cacheControl'];
            $ContentType= $array1[$i]['ContentType'];
            $pragma= $array1[$i]['pragma'];
            $expires= $array1[$i]['expires'];
            $lastmod=$array1[$i]['lastmod'];
            $host= $array1[$i]['host'];
            $age=  $array1[$i]['age'];
            $city=  $array1[$i]['city'];
            $paroxos= $array1[$i]['paroxos'];
			echo ($startedDateTime);
			echo("\n");
            $i++;
	
		$sql='INSERT INTO data(useremail,startedDateTime,wait,serverIPAddress,method,domainname,status,statusText,contenttype,cachecontrol,pragma,expires,age,lastmodified,host,paroxos,city,geoloc) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $conn->prepare($sql);
  


  $stmt->bind_param('ssssssssssssssssss',$email,$startedDateTime,$wait,$serverIPAddress,$method,$url,$Status,$StatusText,$ContentType,$cacheControl,$pragma,$expires,$age,$lastmod,$host, $paroxos, $city, $geo_loc);
  $stmt->execute();
  $stmt->close();




  }




   
  



 