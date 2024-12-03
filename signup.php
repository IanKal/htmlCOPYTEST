<?php
include('db_connect.php'); // Assuming you have a database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password
    $email = $_POST['email'];

    // Insert user into the database
    $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    if (mysqli_query($conn, $query)) {
        // Redirect to input page after successful signup
        header('Location: input.html');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
