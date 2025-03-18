<?php
global $conn;

$servername = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'honeyP_users';
$port = 3307;

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

?>

