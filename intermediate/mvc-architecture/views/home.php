<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
</head>

<body>
  <h1>User List</h1>
  <ul>
    <?php foreach ($users as $user): ?>
      <li><?= htmlspecialchars($user['name']) ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>
