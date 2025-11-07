<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Form Tambah Data</h1>

    <form action="" method="POST">
        <label>Nama :</label>
        <input type="text" name="nama"><br><br>
        <label>NIM :</label>
        <input type="text" name="nim"><br><br>
        <input type="submit" name="submit" value="Simpan">
    </form>

<?php
if (isset($_POST['submit'])) {
    include "koneksi.php";

    $nama = $_POST['nama'];
    $nim  = $_POST['nim'];

    $query = "INSERT INTO mahasiswa VALUES ('','$nama','$nim')";
    mysqli_query($conn, $query);

    echo "<br>✅ Data Berhasil Ditambahkan!";
}
?>
</body>
</html>
