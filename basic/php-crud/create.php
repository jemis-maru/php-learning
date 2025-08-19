<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get raw input
  $name = $_POST["name"];
  $email = $_POST["email"];

  // Prepare the SQL statement with placeholders
  $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");

  if ($stmt) {
    // Bind parameters: "ss" means two strings
    $stmt->bind_param("ss", $name, $email);

    // Execute the statement
    if ($stmt->execute()) {
      header("Location: index.php");
      exit;
    } else {
      echo "Error executing query: " . $stmt->error;
    }

    $stmt->close(); // Close the prepared statement
  } else {
    echo "Error preparing statement: " . $conn->error;
  }

  $conn->close(); // Close DB connection
}
?>

<h2>Add New User</h2>
<form method="post">
  Name: <input type="text" name="name" required><br><br>
  Email: <input type="email" name="email" required><br><br>
  <input type="submit" value="Create">
</form>
<a href="index.php">Back</a>
