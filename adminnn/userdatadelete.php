<?php
include "adminhome.php";
// session_start();

require "connection.php";
require_once "auth.php";


$sql = "select * from `usertable`";
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
  <!-- <center><h1>Users' Record</h1></center> -->
<br>

    <table>
        <tr>
        <th colspan=10><center><h1>Users' Record</h1></center></th>
</tr>
<tr>
            <th>S.No</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Sports</th>
            <th>Role</th>
            <th>Code</th>
            <th>Date of birth</th>
            <th>Operation</th>
        </tr>
        <?php
        $i =1;
while($row = mysqli_fetch_assoc($res)){
    ?>
    <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['sport']; ?></td>
            <td><?php echo $row['role']; ?></td>
            <td><?php echo $row['code']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><a href="delete.php?mail=<?php echo $row['email'];?>">Delete</a></td>

            </tr>
<?php
$i++;
}
            ?>

    </table>
   
</body>
</html>