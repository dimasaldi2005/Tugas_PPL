<?php
$conn = mysqli_connect("localhost", "root", "", "tugas_ppl");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>