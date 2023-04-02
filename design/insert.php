<?php
require 'conn.php';

$room_category = $_POST['room_category'];
$room_number = $_POST['room_number'];
$cust_name = $_POST['cust_name'];
$cust_ic = $_POST['cust_ic'];
$cust_gender = $_POST['cust_gender'];
$phone_num = $_POST['phone_num'];
$check_in_date = $_POST['check_in_date'];
$check_out_date = $_POST['check_out_date'];
$job = $_POST['job'];

$sql = "INSERT INTO reservation (room_category, room_number, cust_name, cust_ic, cust_gender, phone_num, check_in_date, check_out_date, job, status)
VALUES ('$room_category', '$room_number', '$cust_name', '$cust_ic', '$cust_gender', '$phone_num', '$check_in_date', '$check_out_date', '$job', 'Pending')";
$conn->query($sql);
header('location: index.php');

?>