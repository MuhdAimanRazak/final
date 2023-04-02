<?php
require 'conn.php';
$cust_id = $_POST['cust_id'];
$cust_name = $_POST['cust_name'];
$cust_ic = $_POST['cust_ic'];
$phone_num = $_POST['phone_num'];
$cust_gender = $_POST['cust_gender'];
$job = $_POST['job'];
$sql = "UPDATE booking
 SET cust_name = '$cust_name', cust_ic = '$cust_ic',phone_num = '$phone_num'  , cust_gender = '$cust_gender', job = '$job' WHERE cust_id = $cust_id";
$conn->query($sql);
header('location: index.php');