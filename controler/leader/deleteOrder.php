<?php
include_once ".././../controler/csdl.php";
 $id =(isset($_REQUEST["id"])  && !empty($_REQUEST["id"])) ? $_REQUEST["id"] :"";
//lấy tất cả kết quả
try {
    $sql = "DELETE FROM `orders` WHERE `orders`.`id` = ".$id;
//thực hiện truy vấn
   $stmt = $connect->query( $sql );
//tùy chọn kiểu trả về
   $stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
   $Order   = $stmt->fetch();
   $news   = "";
   throw new Exception();
    if ($Order)
         {
            throw new Exception();
            $delete = "DELETE FROM `orders` WHERE `orders`.`id` = ".$id;
            $stmt   = $connect->query($delete);
            $_SESSION['success'] = 'Delete success !';
         }
} 
catch (Exception $e)
 {
    $sql = "DELETE FROM `orders` WHERE `orders`.`id` = ".$id;
    $error = "You have to in Order_detal ";
    $_SESSION['error'] = $error;
    header("location: orders.php");
  }
  header("location: orders.php");