<?php
require 'conn.php';
$staff_id = $_GET['staff_id'];
$sql = "DELETE FROM staff WHERE staff_id = $staff_id";
$conn->query($sql);
header('location: index.php'); 