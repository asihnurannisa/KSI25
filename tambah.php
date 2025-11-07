<?php
include "koneksi.php";
mysqli_query($conn, "INSERT INTO siswa (nama,kelas) VALUES ('Ani','XII RPL')");
echo "Data berhasil ditambahkan";
?>
