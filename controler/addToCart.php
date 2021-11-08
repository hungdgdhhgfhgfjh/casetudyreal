<?php
session_start();
$cart = ( isset($_SESSION["cart"]) ) ? $_SESSION["cart"] : [];
$cart[$_REQUEST["id"]] = $_REQUEST["id"];
$_SESSION["cart"] = $cart;
header("location:Cart.php");
die();
$id =(isset($_REQUEST["id"])  && !empty($_REQUEST["id"]) ) ?$_REQUEST["id"]:"";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
go to cart page<a href="Cart.php?id=<?php echo $id; ?>">here</a>
</body>
</html>
