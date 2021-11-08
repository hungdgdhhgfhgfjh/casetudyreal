<?php
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";
 include_once ".././../controler/csdl.php";
 $id =(isset($_REQUEST["id"])  && !empty($_REQUEST["id"])) ? $_REQUEST["id"] :"";
 $sql = "SELECT * FROM `orders` WHERE id =".$id;
//thực hiện truy vấn
$query  = $connect->query($sql);
//tùy chọn kiểu trả về
$query->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$order   = $query->fetch();
// echo "<pre>";
// print_r($order);
// echo "</pre>";
$errorStatus        = "";
$errorAddress       = "";
$errorOrder_date    = "";
$errorRequired_date = "";
$errorTotalPrice    = "";
if($_SERVER["REQUEST_METHOD"]  == "POST")
{
//     echo "<pre>";
//     print_r($_REQUEST);
//     echo "</pre>";
//     Array
// (
//     [id] => 15
//     [status] => peding
//     [address] => 25 chu manh trinh
//     [order_date] => 2021-11-02
//     [required_date] => 2021-11-03
//     [totalPrice] => 0
// )
//     die();
            $status         = $_REQUEST["status"];
            $address        = $_REQUEST["address"];
            $order_date     = $_REQUEST["order_date"];
            $required_date  = $_REQUEST["required_date"];
            $totalPrice     = $_REQUEST["totalPrice"];
            if($status == "" || $address == "" ||  $order_date == ""  || $required_date == "" ||  $totalPrice == "" )
            {
                $errorStatus            = "Please enter your status";
                $errorAddress           = "Please enter your address";
                $errorOrder_date        = "Please enter your Order date";
                $errorRequired_date     = "Please enter your Required Date";
                $errorTotalPrice        = "Please enter your TotalPrice";
            }
            else
            {
                $sql    = "UPDATE `orders` SET `order_date` = '".$order_date."', `required_date` = '".$required_date."', `status` = '".$status."', `address` = '".$address."', `totalPrice` = '".$totalPrice."' WHERE `orders`.`id` = ".$id;
                //thực hiện truy vấn
                $query  = $connect->query($sql);
                //tùy chọn kiểu trả về
                $query->setFetchMode(PDO::FETCH_OBJ);
                //lấy tất cả kết quả
                $_SESSION['success'] = 'Edit Success !';
                header("location:orders.php");
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
    .strong1{
        font-weight: bolder;
    font-size: 46px;
    color: springgreen;
    margin-left: 112px;
    }
    body{background-image: url("https://lh3.googleusercontent.com/iEgYEImW_pDNT13ar8YJzj6lLYjSkCbM0ROyv7elI1cXRM2tdGogs-ctW8tlYRE1r3zB8bDlMW4osxMJ86sMPUiOdlLZ156oBmXz-H_hhk5RCg5k6Z6U6TqVueCZmG2Bx56tkUAqGQ=w1314-h891-no");
    width: 100%;}
      .div1{
    height: 575px;
    background: white;
    width: 385px;
    margin-left: 494px;
    border-radius: 10px;
    margin-top: 45px;
    border: 10px black;
    }
</style>
<body>
 
                <strong class="strong1" >Update</strong>
                <div class="div1">
                <div class="container">
            <form action=""  method="POST">
            <?php
if (isset($_SESSION['error'])) : ?>
    <div class="alert alert-danger" >
        <?= $_SESSION['error'];
        unset($_SESSION['error']); ?>
    </div>
<?php endif; ?>
<?php if (isset($_SESSION['success'])) : ?>
    <div class="alert alert-success" >
        <?= $_SESSION['success'];
        unset($_SESSION['success']); ?>
    </div>
<?php endif; ?>
                <div class="form-group">
                  <label for="email">Status</label>
                  <input type="text" class="form-control" placeholder="Enter email" name="status" value="<?php echo $order->status; ?>">
                  <strong class="alert-danger"><?=$errorStatus;?></strong>
                </div>
                <div class="form-group">
                  <label for="pwd">Address</label>
                  <input type="text" class="form-control" placeholder="Enter password" name="address" value="<?php echo $order->address; ?>">
                  <strong class="alert-danger"><?=$errorAddress;?></strong>
                <div class="form-group">
                  <label for="pwd">Order Date</label>
                  <input type="date" class="form-control" placeholder="Enter numberPhone" id="pwd" name="order_date" value="<?php echo $order->order_date; ?>" >
                  <strong class="alert-danger"><?=$errorOrder_date;?></strong>
                </div>
                <div class="form-group">
                    <label for="pwd">Required date</label>
                    <input type="date" class="form-control" placeholder="Enter password" id="pwd" name="required_date"  value="<?php echo $order->required_date; ?>">
                    <strong class="alert-danger"><?=$errorRequired_date;?></strong>
                  </div>
                  <div class="form-group">
                    <label for="pwd">totalPrice</label>
                    <input type="text" class="form-control" placeholder="Enter password" id="pwd" name="totalPrice"  value="<?php echo $order->totalPrice; ?>">
                    <strong class="alert-danger"><?=$errorTotalPrice;?></strong>
                  </div>
               
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
              </form>
              </div>
              </div>
      <h1 style="margin-left: 624px;margin-top: -312px;color: yellowgreen;">WELL COME TO SHOP</h1>
      <h1 style="margin-left: 691px;margin-top: 21px;color: darkorange;">Hưng Randy</h1>