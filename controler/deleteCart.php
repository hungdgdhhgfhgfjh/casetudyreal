<?php
session_start();
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
$id = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"]) ) ? $_REQUEST["id"] :"";
if(!$id)
{
 header("location:Cart.php");
}
$cart   = ( isset($_SESSION["cart"]  ) ) ? $_SESSION["cart"] : [];
unset($_SESSION["cart"][$id]);
echo "<pre>";
print_r($cart);
echo "</pre>";
header("location:Cart.php");