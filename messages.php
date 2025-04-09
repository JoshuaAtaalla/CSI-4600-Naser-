<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Message Board</title>
</head>
<body>
  <h2>Leave a Message</h2>
  <form method="POST" action="store_message.php">
    <input type="text" name="message" placeholder="Type your message..." style="width:300px;">
    <button type="submit">Submit</button>
</form>

  <h2>Messages</h2>
  <div>
    <?php
      if (file_exists("messages.txt")) {
          $lines = file("messages.txt", FILE_IGNORE_NEW_LINES);
          foreach ($lines as $line) {
              echo "<p>$line</p>"; //XSS vulnerability
          }
      }
    ?>
  </div>
</body>
</html>
