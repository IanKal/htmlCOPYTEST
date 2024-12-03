<?php
include('db_connect.php');

$data = json_decode(file_get_contents('php://input'), true);
$time = $data['time'];
$qrCode = $data['qrCode'];

$user_id = $_SESSION['user_id']; // Assuming the user is logged in
$query = "UPDATE users SET clockout_time = '$time' WHERE id = $user_id";
mysqli_query($conn, $query);
?>
