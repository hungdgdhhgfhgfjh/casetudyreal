<?php include_once ".././../controler/csdl.php";?>
<?php
session_start();
$AdminLogin =(isset($_SESSION["Admin"]) && !empty($_SESSION["Admin"]))?$_SESSION["Admin"]:'';
if(!$AdminLogin){
    header("location:../login.php");
}
//Lấy tất cả từ bảng thể loại
$sql                  = "SELECT * FROM customers";
//thực hiện truy vấn
$stmt                 = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$users   = $stmt->fetchAll();
?>
 <?php include_once "./view/headeer.php";?>  
 <?php include_once "./view/body_customer.php";?>  
 <?php include_once "./view/foooter.php";?>  