<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'prueba';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8mb4
$conn->set_charset("utf8mb4"); 