<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
    
    echo "Received message: " . htmlspecialchars($message) . "<br>";

    $result = file_put_contents("messages.txt", $message . "\n", FILE_APPEND);

    if ($result === false) {
        echo "Failed to write to file.";
    } else {
        echo "Message saved.";
    }
} else {
    echo "No POST request detected.";
}
?>
