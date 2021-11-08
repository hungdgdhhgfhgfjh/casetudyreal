<?php
include_once "../../controler/csdl.php";
session_start();
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
$id = (isset($_REQUEST["id"])  && !empty($_REQUEST["id"])) ?$_REQUEST["id"]:"";
try {
    $sql   = "DELETE FROM `product_type` WHERE `product_type`.`product_type_id` = ".$id;
    //thực hiện truy vấn
    $stmt = $connect->query( $sql );
    //tùy chọn kiểu trả về
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //lấy tất cả kết quả
    $product_type   = $stmt->fetch();
    $news   = "";
    $_SESSION['success'] = "Delete success ";
throw new Exception();
    if ($product_type)
        {
            throw new Exception();
            $sql   = "DELETE FROM `product_type` WHERE `product_type`.`product_type_id` = ".$id;
            $_SESSION['error'] = "don't delete  product_type ! ";
            $stmt   = $connect->query( $sql);
            
        }
    } 
catch (Exception $e)
{
    header("location: Product_type.php");
}

?>
