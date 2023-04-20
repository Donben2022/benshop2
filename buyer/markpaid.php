<?php
include 'buyer.php';
session_start();
if (!isset($_SESSION['buyer'])) {
    header('Location: ../login.php');
} else {
    include '../db-connection.php';

    $checkcustomer = "UPDATE `orders` SET `status` = 'paid' WHERE `order_buyer_user_id` = '$globalbuyerid' AND `order_ref` = '6'";
    $querycustomer = mysqli_query($conn, $checkcustomer);

    echo "<script>window.location.replace('dashboard.php');</script>";
}