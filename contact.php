<?php include("navbar.php"); ?>

<?php
/*for db*/ require_once "connection.php";

if (isset($_POST['send_mail'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];   
    
    if (!empty($name)||!empty($email)||!empty($message)) {
        $to="projectxavier101@gmail.com";
        $subject="Mail from SCMS website";
      
        if (mail($to,$subject,$message,$email)) {
         
            echo "<div id='msg'> The mail has been sent sucessfully</div>";
        }
    }
//database start
    $sql = "INSERT INTO `contact_us`(`name`,`email`,`message`)
    values('$name','$email','$message')";


    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
//database end
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesomecss/css/all.css">
    <link rel="stylesheet" href="contact.css">
    <title>Contact us</title>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
</head>

<body>
   <header>
    <div class="head">
        <h2>Contact us</h2>
        <p>If you have any queries or requests, please feel free to contact us.
            <br> We would also love to hear your feedback!
        </p>
    </div>
    <div class="main">
        <div class="left">
            <div class="a">
                <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="con">
                    <p>Address</p>
                    <span>Tusal, Kathmandu</span>
                </div>
            </div>
            <div class="a">
                <div class="icon"><i class="fa-solid fa-phone"></i></div>
                <div class="con">
                    <p>Phone</p>
                    <span>9876543210</span>
                </div>
            </div>
            <div class="a">
                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                <div class="con">
                    <p>E-mail</p>
                    <span>bhumika0380@xavier.edu.np / rani9225@gmail.com</span>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="frm">
                <form action="contact.php" method="post">
                    <p>Send message</p>
                    <input type="text" name="name" id="" placeholder="Full Name">
                    <input type="email" name="email" id="" placeholder="Email">
                    <textarea name="message" id="" cols="50" rows="3" placeholder="Write your message here......"></textarea>
                    <button type="submit" name="send_mail" id="sub">Submit</button>
                </form> 
            </div>
        </div>
    </div>
   </header>
</body> 
</html>