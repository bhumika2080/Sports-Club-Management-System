<?php include("navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join New Team</title>
    <link rel="stylesheet" href="form.css">

    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>

</head>
<body>
    
    <!-- <div class="main">
        <div class="box">
            <form action="newteama.php" method="post">
    Name:<input type="textbox" name="name"><br>
    Current team name:<input type="textbox" name="ctname"><br>
    Which team would you like to join?:<textarea name="ntname"></textarea><br>
    Your reason for wanting to join this team:<textarea name="reason"></textarea><br>
    <button type="submit" name="submit">Submit</button><br>
    Want a new player on your team? <a href=""> Click here</a><br>
    Not signed in?<a href="login_page.htm">Sign In</a>
            </form>
        </div>
    </div> -->

    <form class="form" action="newteama.php" method="post">
        <h2>JOIN A NEW TEAM</h2>
        <p type="Full Name:"><input type="textbox" placeholder="Write your name here.." name="name" required></input></p>
        <p type="Email:"><input type="email" placeholder="Let us know how to contact you.." name="email" required></input></p>
        <p type="Name of your current team:"><input placeholder="" name="ctname" required></input></p>
        <p type="Name of team you want to join:"><input placeholder="" name="ntname" required></input></p>
        <p type="What is your reason for joining this team?:"></p>
        <input placeholder="Write your reason here.." name="reason" required></input><br><br>
        <div class="btn">
        <button type="submit" name="submit">Submit Form</button>
        </div>
        
    Want a new player on your team? <a href="newmember.php" style="color:blue;"> Click here</a></p>
    <!-- Not signed in?<a href="login_page.htm">Sign In</a> -->
    </form>
</body>
</html>