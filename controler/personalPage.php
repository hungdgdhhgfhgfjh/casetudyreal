<?php
session_start();
include_once "csdl.php";
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";
$id = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";
$userLogin = (isset($_SESSION["user"])  && !empty($_SESSION["user"]) ) ? $_SESSION["user"] : "";
// echo "<pre>";
// print_r($userLogin);
// echo "</pre>";
// var_dump($userLogin);
$sql  = "SELECT * FROM `customers` WHERE id =$userLogin->id";
// echo $sql;
// die();
//thực hiện truy vấn
$stmt      = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$user   = $stmt->fetch();
?>
<?php include_once "../view/headeruser.php";?>
<?php include_once "../view/body_personal_page.php";?>
<?php include_once "../view/foooter.php";?>