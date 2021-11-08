<?php
session_start();
 include_once "../../controler/csdl.php";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $id               = $_REQUEST["id"];
  $name             = $_REQUEST['name'];
  $price            = $_REQUEST['price'];
  $image_product    = $_REQUEST['image_product'];
  $product_type     = $_REQUEST['product_type'];
  if($name == "" || $price == "" || $image_product == ""  || $product_type == "" || $id == "")
  {
    $erro = "bạn chưa thêm đủ thông tin";
  }
  else
  {
      $sql   = "INSERT INTO `products` (`id`, `product`, `price`, `product_type_id`, `image_product`) VALUES (".$id.", '".$name."', ".$price.", '".$product_type."', '".$image_product."');";
      $stmt  = $connect->query( $sql );
      //tùy chọn kiểu trả về
      $stmt->setFetchMode(PDO::FETCH_OBJ);
      //lấy tất cả kết quả
      $_SESSION['success'] = "ADD success";
      header("location: maneger_product.php");
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
                <strong class="strong1" >ADD</strong>
    <div class="container">
      <h2 class="h2">Product</h2>            
      <table class="table table-striped">
        <thead>
          <tr>
              <th>id</th>
            <th>product</th>
            <th>price</th>
            <th>image</th>
            <th>product Type</th>
            <th>ADD PRODUCT</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <form action="" method="post">
                  <td><input type="text" name="id" id=""></td>
            <td><input type="text" name="name"  ></td>
            <td><input type="text" name="price" ></td>
               <td>
            <input type="text" name="image_product" id="">      
              </td>
            <td><select name="product_type" id="">
                    <option value="5">5-smartPhone</option>
                    <option value="4">4-laptop</option>
                    <option value="3">3-accessory</option>
                    <option value="2">2- i pad</option>
                    <option value="1">1- pc</option>
            </select></td>
            <td><button type="submit" class="btn btn-primary" >ADD</button></td>
          </tr>
          </form>
        </tbody>
      </table>
    </div>
    <div>