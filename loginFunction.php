<?php
require 'dbConnector.php';

session_start();
global $conn;

$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

if (!$username || !$password) {
    die("Username or password is missing.");
}

$query = "SELECT * FROM users WHERE username = '$username' AND pin = '$password'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}


if ($row = mysqli_fetch_assoc($result)) {
    echo "Login successful! Redirecting...";

    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];

    header("Location: Dashboard.php");
    exit;
} else {
    echo "Invalid username or password.";
}

?>


