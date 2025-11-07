<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "kampus";

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn) {
    echo "✅ Koneksi Berhasil";
} else {
    echo "❌ Koneksi Gagal: " . mysqli_connect_error();
}
?>
