<?php
session_start();
 include_once "../../controler/csdl.php";
//  echo "<pre>";
//  print_r($_REQUEST);
//  echo "</pre>";
 $id = (isset($_REQUEST["id"])  && !empty($_REQUEST["id"])) ?$_REQUEST["id"]:"";
 $sql                  = "SELECT * FROM products WHERE id=".$id;
//thực hiện truy vấn
$stmt                 = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$product   = $stmt->fetch();
// echo "<pre>";
// print_r($product);
// echo "</pre>";
$erroemail           = '';
$erropassword        = '';
$erronumberPhone     = '';
$erroname            = '';
$news                = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
//   echo "<pre>";
//   print_r($_REQUEST);
//   echo "<pre>";
  $name             = $_REQUEST['name'];
  $price            = $_REQUEST['price'];
  $image_product    = $_REQUEST['image_product'];
  $product_type     = $_REQUEST["product_type"];
  if($name == "" || $price == "" || $image_product == "" || $product_type == '')
  {
    $error = "mời bạn nhập đủ thông tin để sữa đổi";
  }
  else
  {
      $sql   = "UPDATE `products` SET `product` = '".$name."', `price` = '.$price.', `image_product` = '".$image_product."',`product_type_id` = '".$product_type."' WHERE `products`.`id` = ".$id;
      $stmt  = $connect->query( $sql );
      //tùy chọn kiểu trả về
      $stmt->setFetchMode(PDO::FETCH_OBJ);
      //lấy tất cả kết quả
      $product   = $stmt->fetch();
      $_SESSION['success']  = "Edit success";
      header("location:maneger_product.php");
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
</style>
<body style="background-color: white;">
 <div class="container">
        <div class="row" >
            <div class="col-sm-4">
                <strong class="strong1" >Update</strong>
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
    <div class="container">
      <h2 class="h2">Product</h2>            
      <table class="table table-striped">
        <thead>
          <tr>
            
            <th>product</th>
            <th>price</th>
            <th>image</th>
            <th>product_type</th>
            <th>update</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <form action="" method="post">
            <td><input type="text" name="name" value="<?= $product->product; ?>" ></td>
            <td><input type="number" name="price" value="<?= $product->price; ?>"></td>
            <td><img width="100px" src="<?= $product->image_product; ?>" alt="">
            <br>
            <br>
            <input type="text" name="image_product" id="" value="<?= $product->image_product; ?>">
            <td><select name="product_type" id="">
                    <option value="5">5-smartPhone</option>
                    <option value="4">4-laptop</option>
                    <option value="3">3-accessory</option>
                    <option value="2">2- i pad</option>
                    <option value="1">1- pc</option>
            </select></td>
        </td>
            <td><button class="btn btn-primary" >Update</button></td>
           
          </tr>
          </form>
        </tbody>
      </table>
    </div>
    <div>