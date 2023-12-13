<?php

session_start();
require_once "auth.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="adminhome.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>

<body>
    <header class="header" id="navbar">
       <a href="adminwelcome.php">Admin Dashboard</a>
       <div class="logout">
        <a href="logout.php"class="btn btn-primary">Logout</a>
       </div>
    </header>

    <aside>
        <ul>
            <h3><?php echo $_SESSION['name']; ?></h3>
            <li><br><br>
                <a href="Admin-Profile.php">Admin Profile</a>
            </li>

            <li>
                <a href="userdatadelete.php">Users' Record</a>
            </li>

            <!-- <li>
                <a href="add_product.php">Add product</a>
            </li> -->

            <li>
                <a href="formdatadelete.php">User Forms</a>
            </li>

            <li>
                <a href="changepass.php">Change Password</a>
            </li>
        </ul>
    </aside>
    <aside>
      <div class="class1">
      <center> 
       <!-- <br> <h1>WELCOME TO SCMS DASHBOARD </h1> -->
    </center>
    </div>
        </aside>
</body>
</html>