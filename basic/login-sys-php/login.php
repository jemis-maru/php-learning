<?php
session_start();

$message = '';

// Simple user for demo
$valid_user = 'admin';
$valid_pass = 'password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  if ($username === $valid_user && $password === $valid_pass) {
    // Login successful
    $_SESSION['username'] = $username;

    // Set a cookie for user preference - example: theme
    if (!empty($_POST['theme'])) {
      setcookie('theme', $_POST['theme'], time() + 3600 * 24 * 30); // expires in 30 days
    }

    header('Location: dashboard.php');
    exit;
  } else {
    $message = "Invalid username or password!";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
</head>

<body>
  <h2>Login</h2>
  <form method="POST" action="login.php">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    Theme preference:
    <select name="theme">
      <option value="light">Light</option>
      <option value="dark">Dark</option>
    </select><br><br>
    <button type="submit">Login</button>
  </form>
  <p style="color:red;"><?= htmlspecialchars($message) ?></p>
</body>

</html>
