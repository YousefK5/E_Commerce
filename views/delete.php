<?php
require_once 'connection.php';
$cart_id = $_GET['del'];

$query = $connect->prepare("DELETE  FROM `cart` Where cart_id=? ");
$query->execute([$cart_id]);
echo "<script>window.location.href='cart.php'</script>";
