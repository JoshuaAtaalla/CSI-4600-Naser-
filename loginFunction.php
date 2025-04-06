<?php
require_once __DIR__ . '/vendor/autoload.php';
use MongoDB\Driver\ServerApi;

session_start();

$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

if (!$username || !$password) {
    die("Username or password is missing.");
}

// Hardcoded login check
if ($username === 'admin' && $password === '007') {
    $_SESSION['user_id'] = 0;
    $_SESSION['username'] = 'admin';

    header("Location: Dashboard.php");
    exit;
}

// MongoDB login check
$uri = 'mongodb+srv://shakourimario1:mariooo@main.rglb911.mongodb.net/?retryWrites=true&w=majority&appName=main';
$apiVersion = new ServerApi(ServerApi::V1);
$client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);
$collection = $client->honeyP->users;

$user = $collection->findOne(['username' => $username, 'pin' => intval($password)]);

if ($user) {
    $_SESSION['user_id'] = $user['id'] ?? (string)$user['_id'];
    $_SESSION['username'] = $user['username'];

    header("Location: Dashboard.php");
    exit;
} else {
    echo "Invalid username or password.";
}