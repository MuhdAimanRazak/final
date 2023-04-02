<?php
require 'conn.php';
$payment_id = $_POST['payment_id'];
$cust_ic = $_POST['cust_ic'];
$amount = $_POST['amount'];
$payment_date = $_POST['payment_date'];
$sql = "INSERT INTO payment VALUES(null,'$cust_ic', '$amount', '$payment_date')";
$conn->query($sql);
header('location: index.php');
