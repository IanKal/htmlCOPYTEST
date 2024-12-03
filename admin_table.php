<?php
session_start();
include('db_connect.php');

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin.html');
    exit();
}

// Fetch all users and their data
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <h1>Attendance Records</h1>
        <table border="1" cellpadding="10">
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Task</th>
                <th>Clock In Time</th>
                <th>Clock Out Time</th>
                <th>Date</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['task']; ?></td>
                    <td><?php echo $row['clockin_time']; ?></td>
                    <td><?php echo $row['clockout_time']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <a href="start.html">
            <button>Logout</button>
        </a>
    </div>
</body>
</html>
