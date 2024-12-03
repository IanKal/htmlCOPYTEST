<?php
session_start();
$admin_password = "admin123"; // Set admin password here

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['admin_password'] === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin_table.php');
    } else {
        echo "Incorrect password!";
    }
}
?>
