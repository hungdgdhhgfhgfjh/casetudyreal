<?php
session_start();
include_once "csdl.php";
$findIpad  = "SELECT * FROM `products` WHERE product_type_id =2 limit 5";
//thực hiện truy vấn
$Ipad      = $connect->query( $findIpad );
//tùy chọn kiểu trả về
$Ipad->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$Ipads   = $Ipad->fetchAll();
?>
<?php include_once "../view/headerUser.php";?>
<h1 style="margin-top: 114px;color: aqua;" >IPad</h1>
<div style="margin-top: 108px;">
    <div style="display:flex;margin-top: -97px">
            <?php foreach ( $Ipads as $number => $product): ?>
                <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $product->image_product; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->product; ?></p>
                    <p style="margin-top: 6px;margin-left: 53px;"><?php echo number_format($product->price)." VND"; ?></p>
                    <a href="productUser.php?id=<?php echo $product->id; ?>" class="mua" >Buy</a>
    
              </div>
            <?php endforeach; ?>
        </div>
    </div>
    <h1 style="margin-top: 114px;color: aqua;">Upadeting</h1>
<?php include_once "../view/foooter.php";?>