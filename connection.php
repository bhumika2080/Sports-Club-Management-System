<?php
$server="localhost";
$username= "root";
$password="";
$db="scms";

$conn= mysqli_connect($server, $username, $password, $db);

if(!$conn){
    die("connection failed");
}
else{
    // echo "connection success";
}

?>