<?php
require 'conn.php';
$cust_id = $_POST['cust_id'];
$cust_name = $_POST['cust_name'];
$cust_ic = $_POST['cust_ic'];
$phone_num = $_POST['phone_num'];
$cust_gender = $_POST['cust_gender'];
$job = $_POST['job'];
$sql = "INSERT INTO customer VALUES(null, '$cust_name', '$cust_ic', '$phone_num', '$cust_gender','$job')";
$conn->query($sql);
header('location: index.php');
