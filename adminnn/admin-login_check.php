<?php

error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="";
$db="scms";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['username'];
    $password = $_POST['password'];

    $sql="select * from user where username='$name'AND password='$password'";
    // echo $sql;

    $result=mysqli_query($data,$sql);
    $num = mysqli_num_rows($result);
    // echo $num;
    if($num == 1){
        while($row = mysqli_fetch_assoc($result)){
            $_SESSION['LOGIN'] = session_id();
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['password'] = $row['password'];

            // echo $_SESSION['name'];
            // echo $_SESSION['email'];
            header("location: adminwelcome.php");

        }
    }
}


?>