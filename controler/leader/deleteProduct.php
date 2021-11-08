<?php
session_start();
include_once "../../controler/csdl.php";
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
$id = (isset($_REQUEST["id"])  && !empty($_REQUEST["id"])) ?$_REQUEST["id"]:"";
 if(!$id)
 {
  header("location: maneger_product.php");
 }
     try {
        $sql = "DELETE FROM `products` WHERE `products`.`id` = ".$id;
    //thực hiện truy vấn
       $stmt = $connect->query( $sql );
    //tùy chọn kiểu trả về
       $stmt->setFetchMode(PDO::FETCH_OBJ);
    //lấy tất cả kết quả
       $Product   = $stmt->fetch();
       $news   = "";
       throw new Exception();
        if ($Product )
             {
                throw new Exception();
                $delete = "DELETE FROM `products` WHERE `products`.`id` = ".$id;
                $stmt   = $connect->query($delete);
                $_SESSION['success'] = 'Delete success';
             }
    } 
    catch (Exception $e)
     {
        $sql = "DELETE FROM `products` WHERE `products`.`id` = ".$id;
        $_SESSION['error'] = 'Delete foregin key!';
        header("location: maneger_product.php");
      }

?>