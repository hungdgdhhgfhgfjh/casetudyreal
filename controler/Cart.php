<?php
session_start();
include_once "csdl.php";
$cart   = ( isset($_SESSION["cart"]) ) ? $_SESSION["cart"] : [];
$cart_ids   = implode(",",$cart);
if(!$cart_ids){
    header("location:homeuser.php");
}
$sql = "SELECT * FROM `products` WHERE id IN (".$cart_ids.")";
//thực hiện truy vấn
$query  = $connect->query($sql);
//tùy chọn kiểu trả về
$query->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$products   = $query->fetchAll();
// echo "<pre>";
// print_r($product);
// echo "</pre>";
$sum = "SELECT sum(price) as totalPrice
FROM `products`
WHERE id IN (".$cart_ids.");";
$query  = $connect->query($sum);
//tùy chọn kiểu trả về
$query->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$totalPrices   = $query->fetch();
// echo $totalPrice->totalPrice; 
// date_default_timezone_set('Asia/Ho_Chi_Minh');
// echo date('Y/m/d');
$erroorDer_date      = "";
$erroorRequired_date = "";
$erroaddress         = '';
$userLogin = (isset($_SESSION["user"]) && !empty($_SESSION["user"])) ?$_SESSION["user"]:"";
if(!$userLogin){
    header("location: login.php");
}
// echo "<pre>";
// print_r($userLogin);
// echo "</pre>";
// echo "<pre>";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // echo "<pre>";
    // print_r($products);
    // echo "</pre>";
    // die();
//     Array
// (
//     [order_date] => 2021-11-11
//     [required_date] => 2021-11-17
//     [address] => 25 chu manh trinh
// )
        $order_date     = $_REQUEST["order_date"];
        $required_date  = $_REQUEST["required_date"];
        $address        = $_REQUEST["address"];
        $customers_id   = $userLogin->id;
        $totalPrice     = $totalPrices->totalPrice;
        $flag           = 0;
        if($order_date == "" || $required_date == "" || $address == "")
        {
            $erroorDer_date      = "Please enter your order Date";
            $erroorRequired_date = "Please enter your order Date";
            $erroaddress         = "Please enter your address";
        }
        else
        {
            $flag = 1;
            //Insert vao bang don hang
            //$sql="INSERT INTO `orders` (`id`, `order_date`, `required_date`, `status`, `customers_id`, `address`, `product_id`, `price`) VALUES (NULL, '".$order_date."', '".$required_date."', '', '".$customers_id."', '".$address."', '".$product_id."',".$price.")";
            $sql = "INSERT INTO `orders` 
            (`order_date`, `required_date`, `status`, `customers_id`, `address`, `totalPrice`) 
            VALUES 
            ('".$order_date."', '".$required_date."', 'peding', '".$customers_id."', '".$address."', $totalPrice)";
            $query  = $connect->query($sql);

            //lay id vua insert vao
            $order_id = $connect->lastInsertId();

            //insert vao bang order detail
            foreach( $products as $key => $product ){
                $sql = "INSERT INTO `order_details` 
                (`products_id`, `price_each`, `orders_id`) 
                VALUES 
                ($product->id, '$product->price',$order_id)";
                //echo  $sql; 
                $query  = $connect->query($sql);
            }
            unset($_SESSION["cart"]);
            header("location:checkout.php?id=".$id."");
            
        }
        if($flag == 0)
        {
            $erroorDer_date      = "Please enter your order Date";
            $erroorRequired_date = "Please enter your order Date";
            $erroaddress         = "Please enter your address";
        }
        
}
?>
<?php include_once "../view/headerCart.php";?>
<?php include_once "../view/bodyCart.php";?> 
<?php include_once "../view/foooter.php"; ?>