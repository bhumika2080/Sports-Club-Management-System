<?php
include "adminhome.php";
// session_start();
require_once "auth.php";
require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
    background-color: pink;
}
</style>
<body>
    <center>
<div class="grid_10">
    <div class="box round first">
        <h2>
            Add Product
        </h2><br><br>
        <div class="block">
       <form action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Product Name:</td>
                <td>
                    <input type="text" name="pnm">
                </td>
            </tr>
            <tr>
                <td>Product Price:</td>
                <td>
                    <input type="text" name="pprice">
                </td>
            </tr>
            <tr>
                <td>Product Quantity:</td>
                <td>
                    <input type="text" name="pquantity">
                </td>
            </tr>
            <tr>
                <td>Product Image:</td>
                <td>
                    <input type="file" name="pimage">
                </td>
            </tr>
            <!-- <tr>
                <td>Product Name</td>
                <td>
                    <input type="text" name="pnm">
                </td>
            </tr> -->
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="upload"></td>
            </tr>
            
        </table>
       </form>
<?php

// if(isset($_POST["submit"])){
//     $v1=rand(1111,9999);
//     $v2=rand(1111,9999);
//     $v3=$v1.$v2;
//     $v3=md5($v3);
//     $fnm=$_FILES["pimage"]["name"];
//     $dst="./upload/".$v3.$fnm;
//     $dst1="/upload/".$v3.$fnm;
//     move_upload_file($_FILES["pimage"]["tmp_name"],$dst);

//     mysqli_query($link,"insert into product values('','$_POST[pnm]',$_POST[pprice],$_POST[pquantity],'$dst1')");

// }
                if(isset($_POST['submit'])){
                    $name  = $_POST['pnm'];
                    $price = $_POST['pprice'];
                    $quantity = $_POST['pquantity'];
                    $image = $_FILES['pimage'];
                    $img=$image['name'];
                    // echo $img;

                    $tmpname= $image['tmp_name'];
                    // echo $tmpname;
                    $location = 'upload/'.$img;
                    move_uploaded_file($tmpname, $location);
                    $insert= "INSERT INTO `product1`(`product_name`, `product_price`, `product_quantity`, `product_image`) VALUES ('$name','$price','$quantity','$location')";
                    
                    $query = mysqli_query($conn, $insert);
                        if(!$query){
                            die("error occur in inserting...");
                        }
                }

?>
       
        </div>

    </div>

</div>

</center>
</body>
</html>