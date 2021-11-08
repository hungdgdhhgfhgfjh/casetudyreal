<?php include_once ".././../controler/csdl.php";
session_start();
$sql  = "SELECT orders.id,customers.fullName,address,totalPrice,orders.status,order_date,required_date from customers JOIN orders on customers.id=orders.customers_id;";
//thực hiện truy vấn
$stmt                 = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$orders   = $stmt->fetchAll();
// echo "<pre>";
// print_r($orders);
// echo "</pre>";
// die();

?>
<?php include_once "./view/headeer.php";?>  
<?php include_once "./view/body_Order.php";?>  
<?php include_once "./view/foooter.php";?>