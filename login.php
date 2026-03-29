<?php
include 'koneksi.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // ❌ SALAH: tidak cocok dengan password hash
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "Login berhasil";
    } else {
        echo "Login gagal";
    }
}
?>

<h2>Login</h2>
<form method="POST">
    Email: <input type="email" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit" name="login">Masuk</button>
</form>