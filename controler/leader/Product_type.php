<?php include_once ".././../controler/csdl.php";?>
<?php
session_start();
$AdminLogin =(isset($_SESSION["Admin"]) && !empty($_SESSION["Admin"]))?$_SESSION["Admin"]:'';
if(!$AdminLogin){
    header("location:../login.php");
}
//Lấy tất cả từ bảng thể loại
$sql = "SELECT product_type.id,product_type.type_name,products.image_product from products RIGHT JOIN product_type ON product_type.id=products.product_type_id GROUP by product_type.type_name;";
//thực hiện truy vấn
$stmt                 = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$product_types   = $stmt->fetchAll();
// echo "<pre>";
// print_r($product_types);
// echo "</pre>";
// die();

?>
<?php include_once "./view/headeer.php";?>  
<?php include_once "./view/body_product_type.php";?>  
<?php include_once "./view/foooter.php";?>  