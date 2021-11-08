<?php
session_start();
include_once ".././../controler/csdl.php";
$id = ( isset($_REQUEST['id']) && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";
try {
    $sql = "DELETE FROM `order_details` WHERE `order_details`.`id` = ".$id;
//thực hiện truy vấn
   $stmt = $connect->query( $sql );
//tùy chọn kiểu trả về
   $stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
   $Order_detail   = $stmt->fetch();
   $news   = "";
   throw new Exception();
    if ($Order_detail)
         {
            throw new Exception();
            $delete = "DELETE FROM `order_details` WHERE `order_details`.`id` = ".$id;
            $stmt   = $connect->query($delete);
            $newSuccess = "Delete Success ";
         }
} 
catch (Exception $e)
 {
    $sql = "DELETE FROM `order_details` WHERE `order_details`.`id` = ".$id;
    $_SESSION['success'] = 'Delete lost foreign key !';
    header("location: order_details.php");
  }