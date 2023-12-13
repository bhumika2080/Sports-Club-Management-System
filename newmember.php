<?php include("navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Member</title>
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
            <form action="newmem.php" method="post">
                Name:<input type="textbox" name="name" class="login__input" required><br>
                Current team name:<input type="textbox" name="tname" class="login__input" required><br>
                Do you have someone in mind to join your team?
                If so name them:<textarea name="description" class="login__input" ></textarea><br>
                Your reason for requesting a new member:<textarea name="reason" class="login__input"  required></textarea><br>
                <button type="submit" name="submit" class="button login__submit">Submit</button><br>
                Want to join a new team? <a href="newteam.htm"> Click here</a><br>
                Not signed in?<a href="login_page.htm">Sign In</a>
            </form>
        </div>
    </div> -->


    <form class="form" action="newmem.php" method="post">
        <h2>ADD SOMEONE NEW IN YOUR TEAM</h2>
        <p type="Full Name:"><input type="textbox" placeholder="Write your name here.." name="name" required></input></p>
        <p type="Email:"><input type="email" placeholder="Let us know how to contact you.." name="email" required></input></p>
        <p type="Name of your current team:"><input placeholder="" name="tname"></input></p>
        <p type="Recommended person:"><input placeholder="Who do you recommend join this team? (if any)" 
        name="description"></input></p>
        <p type="What is your reason for requesting a new member?:">
            <input placeholder="Your reason for requesting a new member in your team.." name="reason" required></input><br><br>
            <div class="btn">
        <button type="submit" name="submit">Submit Form</button>
            </div>
        Want to join a new team? <a href="newteam.php" style="color:blue;"> Click here</a><br></p>
        <!-- Not signed in?<a href="login_page.htm">Sign In</a> -->
    </form>
</body>

</html>