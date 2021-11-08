<?php
session_start();
include_once "csdl.php";
$userLogin = (isset($_SESSION["user"]) && !empty($_SESSION["user"])) ?$_SESSION["user"]:"";
$sql ="SELECT products.product,products.image_product,price_each FROM order_details JOIN orders on order_details.orders_id=orders.id join products on products.id = order_details.products_id where customers_id=".$userLogin->id;
$query  = $connect->query($sql);
//tùy chọn kiểu trả về
$query->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$order_details   = $query->fetchAll();
// echo "<pre>";
// print_r($order_details);
// echo "</pre>";
?>
<?php include_once "../view/headerCart.php";?>
<?php include_once "../view/body_oderDetail.php";?>
<?php include_once "../view/foooter.php"; ?>