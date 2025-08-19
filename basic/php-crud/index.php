<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <title>User List</title>
</head>

<body>
  <h2>User List</h2>
  <a href="create.php">Add New User</a>
  <table border="1" cellpadding="10">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Created At</th>
      <th>Actions</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM users");
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($rows as $row):
    ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= $row['created_at'] ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
          <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this user?')">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>
