<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login_fix.php");
    exit;
}

$email = htmlspecialchars($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
        }
        .navbar {
            background: #007bff;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
        }
        .container {
            padding: 20px;
        }
        .card-container {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        .card {
            flex: 1;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
        }
        a {
            text-decoration: none;
            color: white;
            background: red;
            padding: 8px 12px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div>Dashboard</div>
    <div>
        <?php echo $email; ?> | 
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="container">
    <h2>Selamat Datang 👋</h2>
    <p>Anda berhasil login ke sistem.</p>

    <div class="card-container">
        <div class="card">
            <h3>Data User</h3>
            <p>Kelola user</p>
        </div>

        <div class="card">
            <h3>Data Produk</h3>
            <p>Kelola produk</p>
        </div>

        <div class="card">
            <h3>Laporan</h3>
            <p>Lihat laporan</p>
        </div>
    </div>
</div>

</body>
</html>