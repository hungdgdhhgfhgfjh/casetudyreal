<?php
include_once "csdl.php";

//Lấy tất cả từ bảng thể loại
$findsmartphone  = "SELECT * FROM `products` WHERE product_type_id =5 limit 5";
//thực hiện truy vấn
$smartPhone  = $connect->query( $findsmartphone );
//tùy chọn kiểu trả về
$smartPhone->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$smartPhones   = $smartPhone->fetchAll();
$findlaptop    = "SELECT * FROM `products` WHERE product_type_id =4 limit 5";
//thực hiện truy vấn
$laptop        = $connect->query( $findlaptop );
//tùy chọn kiểu trả về
$laptop->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$laptops        = $laptop->fetchAll();
$findAccessory  = "SELECT * FROM `products` WHERE product_type_id =3 limit 5";
//thực hiện truy vấn
$accessory      = $connect->query( $findAccessory );
//tùy chọn kiểu trả về
$accessory->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$accessorys   = $accessory->fetchAll();
$findPC       = "SELECT * FROM `products` WHERE product_type_id =1 limit 5";
//thực hiện truy vấn
$PC           = $connect->query( $findPC );
//tùy chọn kiểu trả về
$PC->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$PCs       = $PC->fetchAll();
$findIpad  = "SELECT * FROM `products` WHERE product_type_id =2 limit 5";
//thực hiện truy vấn
$Ipad      = $connect->query( $findIpad );
//tùy chọn kiểu trả về
$Ipad->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$Ipads   = $Ipad->fetchAll();
?>
<?php include_once "../view/headeer.php";?>
<?php include_once "../view/bodyhome.php"; ?>
<?php include_once "../view/foooter.php";?>