<?php
include_once ".././../controler/csdl.php";
$errotype_name = "";
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
            $sql    = "INSERT INTO `product_type` (`id`, `type_name`) VALUES (NULL, '".$type_name."');";
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
    <strong  style=" font-weight: bolder;font-size: 46px;color: springgreen;" >Add</strong>
    </div>
    <div style="height: 150px;background: white;width: 385px;margin-left: 494px;border-radius:10px ;margin-top: 45px;border: 10px black;">
        <div class="container">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">Type Name</label>
                    <input type="text"  class="form-control" placeholder="Type Name" name="type_name">
                    <strong><?php echo $errotype_name; ?></strong>
                </div>
                    <button type="submit" style="width: 100%;background: #9c88ff;"
                        class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>