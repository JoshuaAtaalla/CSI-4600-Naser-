<?php
require_once __DIR__ . '/vendor/autoload.php';
use MongoDB\Driver\ServerApi;

$uri = 'mongodb+srv://shakourimario1:mariooo@main.rglb911.mongodb.net/?retryWrites=true&w=majority&appName=main';
$apiVersion = new ServerApi(ServerApi::V1);
$client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);

try {
    // Choose your database and collection
    $collection = $client->honeyP->users; // database: honeyP, collection: users

    // Insert user data
    $insertResult = $collection->insertMany([
            ['id' => 1, 'username' => 'Spongebob', 'pin' => 205],
            ['id' => 2, 'username' => 'Patrick', 'pin' => 307],
            ['id' => 3, 'username' => 'Squidward', 'pin' => 245],
            ['id' => 4, 'username' => 'Sandy', 'pin' => 317]
        ]);

    echo "Inserted user with ID: " . $insertResult->getInsertedId();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}