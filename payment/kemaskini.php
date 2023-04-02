<?php
require 'conn.php';
$payment_id = $_POST['payment_id'];
$cust_ic = $_POST['cust_ic'];
$amount = $_POST['amount'];
$payment_date = $_POST['payment_date'];
$sql = "UPDATE payment
 SET cust_ic = '$cust_ic', amount = '$amount', payment_date = '$payment_date' WHERE payment_id = $payment_id";
$conn->query($sql);
header('location: index.php');