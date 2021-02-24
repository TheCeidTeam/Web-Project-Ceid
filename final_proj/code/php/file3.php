<?php

session_start();

require_once 'db_connect.php';


$conn = dbConnect();

if (!$conn) {
   
    die('Could not connect: ' . mysqli_error());
  }
  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$array1=$_POST['pinakas'];
$arrayLength = count($array1);



   if(is_array($array1)){

    $sql = "INSERT INTO data (useremail,startedDateTime,wait,serverIPAddress,method,domainname,status,statusText,contenttype,cachecontrol,pragma,expires,age,lastmodified,host,paroxos,city,geoloc,dataid,datadate,uploaddate,server_loc) VALUES ";
    $i=0;
    $valuesArr = array();
    foreach($array1 as $row)
{
		if ( is_array($row)){

			
			$email=mysqli_real_escape_string($conn,$row['email']);
			
			$startedDateTime=  mysqli_real_escape_string($conn,$row['startedDateTime']);
		
			$serverIPAddress=mysqli_real_escape_string($conn,$row['IpAddress']);
		
			$wait=mysqli_real_escape_string($conn,$row['wait']);
			
			$Status=mysqli_real_escape_string($conn,$row['Status']);

            $StatusText = mysqli_real_escape_string($conn, $row['StatusText']);
            
			$geo_loc= mysqli_real_escape_string($conn, $row['geo_loc']);
            
			$method=  mysqli_real_escape_string($conn, $row['method']);
            
			$url=mysqli_real_escape_string($conn, $row['url']);
            
			$cacheControl=mysqli_real_escape_string($conn, $row['cacheControl']);
            
			$ContentType= mysqli_real_escape_string($conn, $row['ContentType']);
            
			$pragma= mysqli_real_escape_string($conn, $row['pragma']);
            
			$expires= mysqli_real_escape_string($conn, $row['expires']);
            
			$lastmod=mysqli_real_escape_string($conn, $row['lastmod']);
            
			$host= mysqli_real_escape_string($conn, $row['host']);
            
			$age=  mysqli_real_escape_string($conn, $row['age']);
            
			$city=  mysqli_real_escape_string($conn, $row['city']);
            
			$paroxos= mysqli_real_escape_string($conn, $row['paroxos']);
			
			$dataid= mysqli_real_escape_string($conn, $row['dataid']);
			
			$datadate= mysqli_real_escape_string($conn, $row['datadate']);
		
			$uploaddate= mysqli_real_escape_string($conn, $row['uploaddate']);

			$server_loc=mysqli_real_escape_string($conn, $row['server_loc']);
				
				
		$valuesArr[$i] = "('$email','$startedDateTime','$wait','$serverIPAddress','$method','$url','$Status','$StatusText','$ContentType','$cacheControl','$pragma','$expires','$age','$lastmod','$host', '$paroxos', '$city', '$geo_loc','$dataid','$datadate','$uploaddate','$server_loc')";

		$i=$i+1;
	}
	}

	
	$sql .= implode(',', $valuesArr);
    echo("\n\n");
	echo("query sent");
    mysqli_query($conn,$sql) or exit(mysqli_error($conn)); 
}
