<?php
require 'conn.php';
$staff_id = $_POST['staff_id'];
$staff_name = $_POST['staff_name'];
$staff_ic = $_POST['staff_ic'];
$phone_num = $_POST['phone_num'];
$emel = $_POST['emel'];
$pass = $_POST['pass'];
$sql = "UPDATE staff
 SET staff_name = '$staff_name', staff_ic = '$staff_ic',phone_num = '$phone_num'  , emel = '$emel', pass = '$pass' WHERE staff_id = $staff_id";
$conn->query($sql);
header('location: index.php');