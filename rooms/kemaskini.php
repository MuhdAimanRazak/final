<?php
require 'conn.php';
$room_id = $_POST['room_id'];
$room_category = $_POST['room_category'];
$capacity = $_POST['capacity'];
$price = $_POST['price'];
$availability = $_POST['availability'];
$sql = "UPDATE room
 SET room_category = '$room_category', capacity = '$capacity', price = '$price', availability = '$availability' WHERE room_id = $room_id";
$conn->query($sql);
header('location: index.php');