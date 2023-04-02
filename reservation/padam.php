<?php
require 'conn.php';
$reservation_id = $_POST['reservation_id'];
$sql = "DELETE FROM reservation WHERE reservation_id = $reservation_id";
$conn->query($sql);
header('location: index.php'); 