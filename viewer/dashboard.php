<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html"); // Redirect back if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
  <p>This is your dashboard.</p>
</body>
</html>