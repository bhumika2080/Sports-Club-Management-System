<?php
require_once "connection.php";

if(isset($_POST['submit'])){
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $date= $_POST['date'];
    $gender= $_POST['gender'];
    $role= $_POST['role'];
    $sport= $_POST['sport'];
    $address= $_POST['address'];
}

$sql = "INSERT INTO `registration`(`fname`,`lname`,`email`,`password`,`date`,`gender`,`role`,`sport`,`address`)
 values('$fname','$lname','$email','$password','$date','$gender', '$role', '$sport', '$address')";

// $password= password_hash($password, PASSWORD_BCRYPT)

// $emailquery="select* from registration where email='$email' ";
// $query= mysqli_query($conn, $emailquery);
// $emailcount=mysqli_num_rows($query);
// if($emailcount>0){
//     "<script>"
//     echo"Email is already used by another user";
//     "</script>"
// }
// else{
//     $sql = "INSERT INTO `registration`(`fname`,`lname`,`email`,`password`,`date`,`gender`,`role`,`sport`,`address`)
//  values('$fname','$lname','$email','$password','$date','$gender', '$role', '$sport', '$address')";

// }

$result= mysqli_query($conn, $sql);

 if($result==true){
     header("location: loginafter.php");
 }

 mysqli_close($conn);

?>