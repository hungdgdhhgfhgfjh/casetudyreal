<?php
session_start();
include_once "csdl.php";
$id =(isset($_REQUEST["id"])  && !empty($_REQUEST["id"]))?$_REQUEST["id"]:"";
$sql = "SELECT * FROM `description_products` WHERE products_id =".$id;
//thực hiện truy vấn
$query  = $connect->query($sql);
//tùy chọn kiểu trả về
$query->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$product_description   = $query->fetch();

$sql = "SELECT * FROM `products` WHERE id =".$id;
//thực hiện truy vấn
$query  = $connect->query($sql);
//tùy chọn kiểu trả về
$query->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$product   = $query->fetch();
$userLogin       = (isset($_SESSION["user"]) && !empty($_SESSION["user"])) ? $_SESSION["user"] : "";
if($userLogin == ""){
  header("location:login.php");
}

date_default_timezone_set('Asia/Ho_Chi_Minh');
 

// echo "<pre>";
// print_r($product);
// echo "</pre>";


//Lấy tất cả từ bảng thể loại
$sql  = "SELECT * FROM `products` WHERE product_type_id =".$product->product_type_id." limit 5";
//thực hiện truy vấn
$query  = $connect->query( $sql );
//tùy chọn kiểu trả về
$query->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$products   = $query->fetchAll();
?>
<?php include_once "../view/headderProductUser.php";?>
<div class="div3">
    <div class="div4">
        <h3 class="h3love"><?php echo $product->product;  ?></h3>
        <hr>
        <img width="463px" height="347px" src="<?php echo $product->image_product;  ?>" alt="">
    </div>
    <div style="margin-left: 53px;">
        <h3 class="h3love1"><?php echo number_format($product->price)."VNĐ";  ?></h3>
        <table class="table table-striped">
            <h3><?php echo $product_description->configuration_species;  ?></h3>
            <thead>
                <tr>
                    <th>Screen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $product_description->Screen;  ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>RAM</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php echo $product_description->RAM;  ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Memory In</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $product_description->Memory_in;  ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Chip</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $product_description->Chip;  ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Battery</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $product_description->battery;  ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Operating system</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td><?php echo $product_description->operating_system;  ?></td>
                </tr>
            </tbody>
        </table>
        <form action="" method="post">
        <a href="addToCart.php?id=<?php echo $product->id; ?>" type="submit"  class="muangay">Buy <i class="fas fa-shopping-cart"></i></a>
        </form>
    </div>
</div>
<div style="margin-top: 108px;">
    <h3 class="sanpham">Similar Product</h3>
    <div style="display:flex;">
        <?php foreach ( $products as $number => $product): ?>
        <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $product->image_product; ?>" alt="">
            <br>
            <br>
            <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->product; ?></p>
            <p style="margin-top: -14px;margin-left: 53px;"><?php echo number_format($product->price)." VND"; ?></p>
            <a href="productUser.php?id=<?php echo $product->id; ?>" class="mua">Buy</a>

        </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
<?php include_once "../view/foooter.php";?>