<?php require('dbConnector.php');
session_start()
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
        .login-box { max-width: 300px; margin: auto; padding: 20px; border: 1px solid #ccc; }
        input { width: 90%; padding: 10px; margin: 10px 0; }
        button { padding: 10px 20px; background-color: blue; color: white; border: none; }
    </style>
    
</head>
<body>
    <h2>Admin Panel</h2>
    <div class="login-box">
        <form id="honeypotForm" action="loginFunction.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Pin" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

