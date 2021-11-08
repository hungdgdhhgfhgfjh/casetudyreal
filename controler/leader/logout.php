<?php
session_start();
unset($_SESSION['Admin']);
header("location:.././../controler/home.php");
?>