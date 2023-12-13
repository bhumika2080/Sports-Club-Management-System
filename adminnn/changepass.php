<?php
include "adminhome.php";
// session_start();
require "connection.php";
require_once "auth.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        body{
            background-color:pink;
        }
        form{
            display: flex;
            flex-direction: column;
            width: 50%;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <br><br>
    <center><h1>ADMIN(CHANGE PASSWORD)</h1>
    <div class="container">
        <form action="" method="post">
            <br><br>
            <span>Username</span>
            <input type="text" name="uname" id="" required>
            <span>Old Password</span>
            <input type="password" name="pass" id="" required>
            <span>New Password</span>
            <input type="password" name="npass" id="">
            <span>Confirm password</span>
            <input type="password" name="cpass" id=""> <br>
            <input type="submit" name="sub" id="">
        </form>
        <div class="error">
            <?php
if(isset($_POST['sub'])){
    $name = $_POST['uname'];
    $pass = $_POST['pass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];

    if($npass != $cpass){
        echo " New password and confirm password is not matching";

    }
    else{
        $sql = "select * from `user` where `username` = '$name' and `password` = '$pass'";
    $res = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($res);
    if($num != 1){
        echo "Invalid username or password";
    }
    else{
        while($row = mysqli_fetch_assoc($res)){
            
            $sqll = "update `user` set `password` = '$npass'";
            $ress = mysqli_query($conn, $sqll);
            if($ress){
                $row['password'] = $npass;
                // header("location: logout.php");

                echo "success";
    }


        }
    }
    }
    

}
?>
        </div>
    </div>
    </center>
</body>
</html>