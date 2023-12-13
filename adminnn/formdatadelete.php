<?php
include "adminhome.php";
require "connection.php";
// require_once "auth.php";

$sql = "select * from `newmemform`";
$res = mysqli_query($conn, $sql);
// $num = mysqli_num_rows($res);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-data</title>
    <link rel="stylesheet" href="userdatadelete.css" class="href">
</head>
<body>
    <!-- <center> -->
  <!-- <center><h1>PEOPLE WHO WANT NEW MEMBERS IN A TEAM</h1></center> -->
<br>

    <table>
    <tr>
        <th colspan=10><center><h1>PEOPLE WHO WANT NEW MEMBERS IN A TEAM</h1></center></th>
</tr>
        <tr>
            <th>S.No</th>
            <!-- <th>E-mail</th> -->
            <th>Name</th>
            <th>Team Name</th>
            <th>Recommended Person</th>
            <th style= "width: 600px;">Reason</th>
            <th>Operation</th>
        </tr>
        <?php
        $i =1;
while($row = mysqli_fetch_assoc($res)){
    ?>
    <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['name']; ?></td>
            <!-- <td><?php echo $row['email']; ?></td> -->
            <td><?php echo $row['tname']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['reason']; ?></td>
            <!-- <td><?php echo $row['role']; ?></td>
            <td><?php echo $row['code']; ?></td>
            <td><?php echo $row['date']; ?></td> -->
            <td><a href="delete.php?mail=<?php echo $row['email'];?>">Delete</a></td>

            </tr>
<?php
$i++;
}
            ?>
    </table>
<br><br>
<!--  -->

<!-- <center> <h1>PEOPLE WHO WANT TO JOIN NEW TEAM</h1></center> -->
<section>
<?php

    $sql = "select * from `newteamform`";
$res = mysqli_query($conn, $sql);
?>
<!-- <center><h1>PEOPLE WHO WANT NEW MEMBERS IN A TEAM</h1></center> -->
    <table>
    <tr>
        <th colspan=10><center><h1>PEOPLE WHO WANT TO JOIN NEW TEAM</h1></center></th>
</tr>
        <tr>
            <th>S.No</th>
            <!-- <th>E-mail</th> -->
            <th>Name</th>
            <th>Current Team Name</th>
            <th>New Team Name</th>
            <th style= "width: 600px;">Reason</th>
            <th>Operation</th>
        </tr>
        <?php
        $i =1;
while($row = mysqli_fetch_assoc($res)){
    ?>
    <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['name']; ?></td>
            <!-- <td><?php echo $row['email']; ?></td> -->
            <td><?php echo $row['ctname']; ?></td>
            <td><?php echo $row['ntname']; ?></td>
            <td><?php echo $row['reason']; ?></td>
            <!-- <td><?php echo $row['role']; ?></td>
            <td><?php echo $row['code']; ?></td>
            <td><?php echo $row['date']; ?></td> -->
            <td><a href="delete.php?mail=<?php echo $row['email'];?>">Delete</a></td>

            </tr>
<?php
$i++;
}
            ?>

    </table>
<!-- </center> -->
</section>

</body>
</html>