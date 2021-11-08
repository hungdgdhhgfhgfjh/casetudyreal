<?php
session_start();
 include_once ".././../controler/csdl.php";
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";
$id = (isset($_REQUEST['id']) && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";
$sql = "SELECT * FROM `order_details` WHERE `id` = ".$id;
$stmt                 = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$order_detail       = $stmt->fetch();
$erroProducts_id    =  "";
$erroPrice_each     =   "";
if($_SERVER["REQUEST_METHOD"]  == "POST"){
    // Array
    // (
    //     [id] => 23
    //     [products_id] => 3
    //     [price_each] => 14000000
    // )
            $price_each     = $_REQUEST["price_each"];
            if( $price_each  == "" ){
                $erroProducts_id = "Please enter your products_id ";
                $erroPrice_each  = "Please enter your price_each";
            }
            else
            {
                $sql    =  "UPDATE `order_details` SET `price_each` = $price_each WHERE `order_details`.`id` = ".$id;
                $stmt   = $connect->query( $sql );
                $_SESSION['success'] = 'Update Success !';
                        //tùy chọn kiểu trả về
                $stmt->setFetchMode(PDO::FETCH_OBJ);
                header("location:order_details.php");
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
        <strong style=" font-weight: bolder;font-size: 46px;color: springgreen;">Update</strong>
    </div>
    <div
        style="height: 162px;background: white;width: 385px;margin-left: 494px;border-radius:10px ;margin-top: 45px;border: 10px black;">
        <div class="container">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="pwd">Price Each</label>
                    <input type="text" class="form-control" placeholder="Enter password" name="price_each"
                        value="<?=$order_detail->price_each;?>">
                        <strong class="alert-strong" style="color:red" ><?= $erroPrice_each;?></strong>
                </div>
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>