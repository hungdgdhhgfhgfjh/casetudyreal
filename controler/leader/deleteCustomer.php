<?php
include_once "../../controler/csdl.php";
session_start();
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
$id = (isset($_REQUEST["id"])  && !empty($_REQUEST["id"])) ?$_REQUEST["id"]:"";
try {
    $sql   = "DELETE FROM `customers` WHERE `customers`.`id` = ".$id;
    //thực hiện truy vấn
    $stmt = $connect->query( $sql );
    //tùy chọn kiểu trả về
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //lấy tất cả kết quả
    $Description   = $stmt->fetch();
    $news   = "";
    $_SESSION['success'] = "Delete success ";
throw new Exception();
    if ($Description)
        {
            throw new Exception();
            $sql   = "DELETE FROM `customers` WHERE `customers`.`id` = ".$id;
            $_SESSION['error'] = "don't delete customer ! ";
            $stmt   = $connect->query( $sql);
            
        }
    } 
catch (Exception $e)
{
    
    header("location: maneger_customer.php");
}
