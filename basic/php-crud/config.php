<?php
$host = "localhost";
$username = "root";
$password = "admin";
$database = "php_crud_demo";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
