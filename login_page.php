<?php include("navbar.php"); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formstyle.css">
</head>
<body>
    <div class="main">
        <div class="box">

        <form action="login.php" method="post">
            Email:<input type="email" placeholder="example123@email.com" name="email"><br>
            Password:<input type="password" name="password"><br>
            
            <button type="submit" name="submit">LOGIN</button><BR>
            Don't have an account yet? <a href="registeraccount.htm">Register</a> 
        </form>
        </div>
        </div>
</body>
</html>

