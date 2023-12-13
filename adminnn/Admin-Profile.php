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
  <title>Document</title>
  <link rel="stylesheet" href="adminprofile.css" class="href">
</head>

<body>
  <center>
  <div class="container">
 <div class="main">
  <div class="profile">
    <div class="image">
    <img src="b.png" alt="">
    </div>
    <H1>ADMIN PROFILE</H1>
   <br>
    <table class="id">
      <tr>
        <th>ID</th>
        <td><?php echo $_SESSION['id']; ?></td>
      </tr>
      <tr>
        <th>Username</th>
        <td><?php echo $_SESSION['name']; ?></td>
      </tr>
      <tr>
        <th>E-mail</th>
        <td><?php echo $_SESSION['email']; ?></td>
      </tr>
      <tr>
        <th>Phone</th>
        <td><?php echo $_SESSION['phone']; ?></td>
      </tr>
    </table>
    <!-- <button>Edit</button> -->
  </div>
  </div>
 </div>
 </center>
</body>
</html>