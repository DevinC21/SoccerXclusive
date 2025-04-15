<?php
$host = 'localhost';
$db = 'soccerxclusive';
$user = 'devin';
$pass = 'devin123'; // Add your MariaDB password here if you set one

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
