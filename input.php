<?php
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = $_POST['task'];
    $user_id = $_SESSION['user_id']; // Assuming session management is set

    // Save the task to the database
    $query = "UPDATE users SET task = '$task' WHERE id = $user_id";
    if (mysqli_query($conn, $query)) {
        header('Location: clockin.html'); // Redirect to clock-in page
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
