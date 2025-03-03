# CSI-4600-Naser-
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
        .login-box { max-width: 300px; margin: auto; padding: 20px; border: 1px solid #ccc; }
        input { width: 100%; padding: 10px; margin: 10px 0; }
        button { padding: 10px 20px; background-color: blue; color: white; border: none; }
    </style>
</head>
<body>
    <h2>Admin Panel</h2>
    <div class="login-box">
        <form id="honeypotForm">
            <input type="text" id="username" placeholder="Username" required>
            <input type="password" id="password" placeholder="Pin" required>
            <button type="submit">Login</button>
        </form>
    </div>
    
    <script>
        document.getElementById("honeypotForm").addEventListener("submit", function(event) {
            event.preventDefault();
            let username = document.getElementById("username").value;
            let password = document.getElementById("password").value;
            
            if (username === "Admin" && password === "007") {
                window.location.href = "dashboard.html";
            } else {
                fetch("log_attempt.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: `username=${username}&password=${password}`
                });
                
                alert("Invalid credentials. Please try again.");
            }
        });
    </script>
</body>
</html>

<!-- dashboard.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
        .menu { max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; }
        ul { list-style-type: none; padding: 0; }
        li { padding: 10px; border: 1px solid #ddd; margin: 5px; background: #f4f4f4; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Admin Dashboard</h2>
    <div class="menu">
        <ul>
            <li>View Users</li>
            <li>System Logs</li>
            <li>Settings</li>
            <li>Logout</li>
        </ul>
    </div>
</body>
</html>
