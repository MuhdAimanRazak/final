<?php
require 'conn.php';
$payment_id = $_GET['payment_id'];
$sql = "DELETE FROM payment WHERE payment_id = $payment_id";
$conn->query($sql);
header('location: index.php'); 