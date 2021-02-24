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

    
    $i=0;
    $valuesArr = array();

    foreach($array1 as $row)
{
		if ( is_array($row)){

			$file = $row['file'].'.txt';
			$email=$row['email'];
			
			$startedDateTime=  $row['startedDateTime'];
		
			$serverIPAddress=$row['IpAddress'];
		
			$wait=$row['wait'];
			
			$Status=$row['Status'];

            $StatusText = $row['StatusText'];
            
			$geo_loc=  $row['geo_loc'];
            
			$method=   $row['method'];
            
			$url= $row['url'];
            
			$cacheControl= $row['cacheControl'];
            
			$ContentType=  $row['ContentType'];
            
			$pragma=  $row['pragma'];
            
			$expires=  $row['expires'];
            
			$lastmod= $row['lastmod'];
            
			$host= $row['host'];
            
			$age=  $row['age'];
            
			$city=   $row['city'];
            
			$paroxos=  $row['paroxos'];
			
			$dataid=  $row['dataid'];
			
			$datadate=  $row['datadate'];
		
			$uploaddate= $row['uploaddate'];

			$server_loc=$row['server_loc'];
				
           
				
		$valuesArr[$i] = "('$email','$startedDateTime','$wait','$serverIPAddress','$method','$url','$Status','$StatusText','$ContentType','$cacheControl','$pragma','$expires','$age','$lastmod','$host', '$paroxos', '$city', '$geo_loc','$dataid','$datadate','$uploaddate','$server_loc') \n";
        file_put_contents($file, $valuesArr[$i], FILE_APPEND | LOCK_EX);

		$i=$i+1;
	}
	}

	
	
	echo(" ");
}
