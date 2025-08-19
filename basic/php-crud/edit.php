<?php
include 'config.php';

$id = $_GET['id'] ?? null;

// 1. Fetch existing user data securely
if ($id) {
  $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();
  $stmt->close();
}

// 2. Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];

  $stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
  if ($stmt) {
    $stmt->bind_param("ssi", $name, $email, $id);

    if ($stmt->execute()) {
      header("Location: index.php");
      exit;
    } else {
      echo "Error executing update: " . $stmt->error;
    }

    $stmt->close();
  } else {
    echo "Error preparing update: " . $conn->error;
  }

  $conn->close();
}
?>

<h2>Edit User</h2>
<form method="post">
  Name: <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required><br><br>
  Email: <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required><br><br>
  <input type="submit" value="Update">
</form>
<a href="index.php">Back</a>
