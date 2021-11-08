<?php
include_once ".././../controler/csdl.php";
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";
$id = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"]))?$_REQUEST["id"]:'';
$sql                  = "SELECT * FROM `product_type` Where id = $id";
//thực hiện truy vấn
$stmt                 = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$product_type   = $stmt->fetch();
// echo "<pre>";
// print_r($product_type );
// echo "</pre>";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
//   echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";  
        $type_name  = $_REQUEST["type_name"];
        if($type_name == ""){
            $errotype_name = "Please enter your type name";
        }
        else{
            $sql    = "UPDATE `product_type` SET `type_name` = '".$type_name."' WHERE `product_type`.`id` = $id";
            $stmt   = $connect->query( $sql );
            //tùy chọn kiểu trả về
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            header("location:Product_type.php");
        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
.body {
    background-image: url("https://lh3.googleusercontent.com/iEgYEImW_pDNT13ar8YJzj6lLYjSkCbM0ROyv7elI1cXRM2tdGogs-ctW8tlYRE1r3zB8bDlMW4osxMJ86sMPUiOdlLZ156oBmXz-H_hhk5RCg5k6Z6U6TqVueCZmG2Bx56tkUAqGQ=w1314-h891-no");
    width: 100%;
}
</style>

<body class="body">
    <div class="text-center">
    <strong  style=" font-weight: bolder;font-size: 46px;color: springgreen;" >Update</strong>
    </div>
    <div style="height: 150px;background: white;width: 385px;margin-left: 494px;border-radius:10px ;margin-top: 45px;border: 10px black;">
        <div class="container">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">Type Name</label>
                    <input type="text" value="<?= $product_type->type_name;?>" class="form-control" placeholder="Enter email" name="type_name">
                </div>
                    <button type="submit" style="width: 100%;background: #9c88ff;"
                        class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>