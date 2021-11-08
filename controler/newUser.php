<?php
session_start();
include_once "csdl.php";
//Lấy tất cả từ bảng thể loại
$findsmartphone  = "SELECT * FROM `products` WHERE product_type_id =5 limit 5";
//thực hiện truy vấn
$smartPhone  = $connect->query( $findsmartphone );
//tùy chọn kiểu trả về
$smartPhone->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$smartPhones   = $smartPhone->fetchAll();
$findlaptop           = "SELECT * FROM `products` WHERE product_type_id =4 limit 5";
//thực hiện truy vấn
$laptop               = $connect->query( $findlaptop );
//tùy chọn kiểu trả về
$laptop->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$laptops   = $laptop->fetchAll();
$sql        = "SELECT * FROM `products`WHERE id > 34 limit 5";
$newProduct = $connect->query( $sql );
$newProduct->setFetchMode(PDO::FETCH_OBJ);
$newProducts = $newProduct->fetchAll();

?>
<?php include_once "../view/headerUser.php";?>
<?php include_once "../view/bodyUsernews.php"; ?>
<?php include_once "../view/foooter.php";?>