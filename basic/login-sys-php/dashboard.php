<?php
session_start();

// Check if logged in
if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit;
}

// Read cookie preference if set
$theme = $_COOKIE['theme'] ?? 'light';

?>

<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
</head>

<body style="background-color: <?= $theme === 'dark' ? '#333' : '#fff' ?>;
             color: <?= $theme === 'dark' ? '#eee' : '#000' ?>;">
  <h2>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
  <p>Your preferred theme is: <strong><?= htmlspecialchars($theme) ?></strong></p>

  <a href="logout.php">Logout</a>
</body>

</html>
