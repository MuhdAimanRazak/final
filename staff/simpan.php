<?php
require 'conn.php';
$staff_id = $_POST['staff_id'];
$staff_name = $_POST['staff_name'];
$staff_ic = $_POST['staff_ic'];
$phone_num = $_POST['phone_num'];
$emel = $_POST['emel'];
$pass = $_POST['pass'];
$sql = "INSERT INTO staff VALUES(null, '$staff_name', '$staff_ic', '$phone_num', '$emel','$pass')";
$conn->query($sql);
header('location: index.php');
