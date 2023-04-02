<?php
require 'conn.php';
$room_id = $_POST['room_id'];
$room_category = $_POST['room_category'];
$capasity = $_POST['capasity'];
$price = $_POST['price'];
$availability = $_POST['availability'];
$sql = "INSERT INTO room VALUES(null, '$room_category', '$capasity', '$price','$availability')";
$conn->query($sql);
header('location: index.php');
