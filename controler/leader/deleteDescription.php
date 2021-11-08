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
        $sql = "DELETE FROM `description_products` WHERE description_products`.`id` = ".$id;
    //thực hiện truy vấn
       $stmt = $connect->query( $sql );
    //tùy chọn kiểu trả về
       $stmt->setFetchMode(PDO::FETCH_OBJ);
    //lấy tất cả kết quả
       $description   = $stmt->fetch();
       $news   = "";
       throw new Exception();
        if ($description)
             {
                throw new Exception();
                $delete = "DELETE FROM `description_products` WHERE `description_products`.`id` = ".$id;
                $stmt   = $connect->query($delete);
                $_SESSION['success'] = 'Đã xóa thành công !';
             }
    } 
    catch (Exception $e)
     {
        $sql = "DELETE FROM `description_products` WHERE `description_products`.`id` = ".$id;
        $error = "Don't Delete Erro Foreign Key ";
        $_SESSION['error'] = $error;
        header("location: DescriptionProduct.php");
      }

?>