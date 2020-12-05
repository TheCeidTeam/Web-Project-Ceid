<?php

session_start();

require_once 'db_connect.php';
$conn = dbConnect();


//$name= $_POST['file'] ?? 'default';
// Read as JSON
$data_json = file_get_contents('C__fakepath_facebook.har.txt');
$_POST = json_encode($data_json, true);
//echo $_POST;

$sql = "INSERT INTO data 
(user_email, StartedDateTime, wait, serverIPAdress, method, pragma, expires)
values (?, ?, ?, ?, ?, ?,to_timestamp(?))";

$stmt = $conn->prepare($sql);

//echo $data_json;
if (is_array($_POST) || is_object($_POST)){
foreach($_POST as $key){
foreach($a as $row){

    $stmt-> bind_param('sssssss',$username, $row["Started date Time"], $row["Wait"], 
        $row["Server Ip Adress"], $row["Method"], $row["pragma"],
        $row["expires"]);
        $stmt->execute();
        $stmt->store_result();
        $result =$stmt->fetch();
}
}
}
else{echo 'a';}
$sql2 = "UPDATE data SET last_modified = DATE(now()) WHERE user_email = ?";
$stmt2 = $conn->prepare($sql2);
$stmt2-> bind_param('s',$username);
$stmt2->execute();

echo "Done";

?>