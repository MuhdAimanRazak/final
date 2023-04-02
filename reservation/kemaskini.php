<?php
require 'conn.php';
$reservation_id = $_POST['reservation_id'];
$room_category = $_POST['room_category'];
$room_number = $_POST['room_number'];
$cust_name = $_POST['cust_name'];
$cust_ic = $_POST['cust_ic'];
$cust_gender = $_POST['cust_gender'];
$phone_num = $_POST['phone_num'];
$check_in_date = $_POST['check_in_date'];
$check_out_date = $_POST['check_out_date'];
$job = $_POST['job'];
$status = $_POST['status'];

$sql = "UPDATE reservation SET reservation_id = $reservation_id , room_category = '$room_category', room_number = '$room_number', cust_name = '$cust_name', cust_ic = '$cust_ic', cust_gender = '$cust_gender', phone_num ='$phone_num', check_in_date = '$check_in_date', check_out_date = '$check_out_date', job = '$job', status = '$status' WHERE reservation_id = $reservation_id";
$conn->query($sql);
header('location: index.php');

?>