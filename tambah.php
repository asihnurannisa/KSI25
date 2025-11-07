<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Data Mahasiswa</title>

<style>
body{
    font-family: 'Segoe UI', sans-serif;
    background: #ffe6ee;
    margin:0; padding:0;
}
.container{
    width: 420px;
    background:white;
    margin:50px auto;
    padding:25px;
    border-radius:15px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    text-align:center;
}
h2{
    color:#ff4d88;
    margin-bottom:20px;
}
input{
    width:100%;
    padding:10px;
    margin:8px 0;
    border-radius:8px;
    border:1px solid #ffb8cf;
}
button{
    width:100%;
    padding:10px;
    background:#ff4d88;
    border:none;
    border-radius:8px;
    color:white;
    cursor:pointer;
    margin-top:15px;
    transition:.3s;
}
button:hover{
    background:#e63971;
}
a{
    display:block;
    margin-top:15px;
    color:#333;
    text-decoration:none;
}
</style>

</head>
<body>

<div class="container">
    <h2>Tambah Data Mahasiswa</h2>

    <form action="" method="POST">
        <input type="text" name="nama" placeholder="Nama Mahasiswa" required>
        <input type="text" name="nim" placeholder="NIM" required>
        <input type="text" name="prodi" placeholder="Program Studi" required>
        <button type="submit" name="submit">Simpan</button>
    </form>

    <a href="index.php">← Kembali</a>
</div>

</body>
</html>

<?php
if(isset($_POST['submit'])){
    $nama  = $_POST['nama'];
    $nim   = $_POST['nim'];
    $prodi = $_POST['prodi'];

    $query = mysqli_query($koneksi, "INSERT INTO mahasiswa(nama, nim, prodi) VALUES ('$nama','$nim','$prodi')");

    if($query){
        echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal Menambahkan Data!');</script>";
    }
}
?>
