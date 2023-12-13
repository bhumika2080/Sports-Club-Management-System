<?php
require_once "connection.php";

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $tname= $_POST['tname'];
    $description= $_POST['description'];
    $reason= $_POST['reason'];
}

$sql = "INSERT INTO `newmemform`(`name`,`tname`,`description`,`reason`)
 values('$name','$tname','$description','$reason')";


$result= mysqli_query($conn, $sql);

 if($result==true){
     header("location: newmember.php");
 }

 mysqli_close($conn);

?>