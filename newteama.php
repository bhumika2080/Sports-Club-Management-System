<?php
require_once "connection.php";

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $ctname= $_POST['ctname'];
    $ntname= $_POST['ntname'];
    $reason= $_POST['reason'];
}

$sql = "INSERT INTO `newteamform`(`name`,`ctname`,`ntname`,`reason`)
 values('$name','$ctname','$ntname','$reason')";


$result= mysqli_query($conn, $sql);

 if($result==true){
     header("location: newteam.php");
 }

 mysqli_close($conn);

?>