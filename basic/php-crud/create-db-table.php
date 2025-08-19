<?php
$host = "localhost";
$username = "root";
$password = "admin"; // your DB password

$conn = new mysqli($host, $username, $password);

// Create DB
$db = "php_crud_demo";
$conn->query("CREATE DATABASE IF NOT EXISTS $db") or die($conn->error);
$conn->select_db($db);

// Create table
$conn->query("CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)") or die($conn->error);

echo "Database and table created successfully!";
$conn->close();
