<?php
session_start();
include_once "csdl.php";
$userLogin = (isset($_SESSION["user"]) && !empty($_SESSION["user"])) ?$_SESSION["user"]:"";
$order = "SELECT * FROM `orders` WHERE customers_id = $userLogin->id";
//thực hiện truy vấn
$query  = $connect->query($order);
//tùy chọn kiểu trả về
$query->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$orders   = $query->fetchAll();
// echo "<pre>";
// print_r($orders);
// echo "</pre>";
// $sum = "SELECT sum(totalPrice) as totalPrice
// FROM `orders`
// WHERE id = $userLogin->id  ";
$sum ="SELECT sum(totalPrice) as totalPrice FROM `orders` WHERE customers_id =  $userLogin->id";
$query  = $connect->query($sum);
//tùy chọn kiểu trả về
$query->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$totalPrice   = $query->fetch();
if(!$userLogin){
    header("location: login.php");
}
// echo "<pre>";
// print_r($userLogin);
// echo "</pre>";
// echo "<pre>";
?>
<?php include_once "../view/headerCart.php";?>
<?php include_once "../view/bodyCheckOut.php";?>
<?php include_once "../view/foooter.php"; ?>