<?php
require 'conn.php';
$cust_id = $_GET['cust_id'];
$sql = "DELETE FROM customer WHERE cust_id = $cust_id";
$conn->query($sql);
header('location: index.php'); 