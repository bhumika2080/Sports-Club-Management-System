<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $email_search = "select * from registration where email='$email'";
    $query = mysqli_query($conn, $email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];
        $password_decode = $password_verify($password, $db_pass);

        if($password_decode){
            echo "login successful";
        }
        else {
        echo "password incorrect";}
    }

    else{
        echo "invalid email";
    }
}
?>