<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // update: perbaikan validasi login
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    $data = mysqli_fetch_assoc($result);

    if ($data && password_verify($password, $data['password'])) {
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Login gagal');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Fixed</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Login</h2>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Masuk</button>
    </form>
    <div class="link">
        <a href="register.php">Belum punya akun? Daftar di sini</a>
    </div>
</div>

</body>
</html>