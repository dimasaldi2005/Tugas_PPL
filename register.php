<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    mysqli_query($conn, $query);

    echo "<script>alert('Register berhasil');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Register</h2>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="register">Daftar</button>
    </form>

    <div class="link">
        <a href="login.php">Sudah punya akun?</a>
    </div>
</div>

</body>
</html>