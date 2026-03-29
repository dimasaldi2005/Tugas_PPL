<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login_fix.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Dashboard</h2>
    <p>Selamat datang, <?php echo $_SESSION['email']; ?></p>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>