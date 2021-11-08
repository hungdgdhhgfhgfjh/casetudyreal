<?php
 include_once ".././../controler/csdl.php";
session_start();
$sql ="SELECT order_details.id,products.product,products.image_product,price_each,customers_id,orders.address FROM order_details JOIN orders on order_details.orders_id=orders.id join products on products.id = order_details.products_id";
//thực hiện truy vấn
$stmt                 = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$order_details   = $stmt->fetchAll();
// echo "<pre>";
// print_r($order_details);
// echo "</pre>";
?>
<?php include_once "./view/headeer.php";?>  
<?php include_once "./view/body_order_details.php";?>  
<?php include_once "./view/foooter.php";?>