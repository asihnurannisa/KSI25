<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Mahasiswa</title>

<style>
body{
    font-family: 'Segoe UI', sans-serif;
    background: #ffe6ee;
    margin:0; padding:0;
}
.container{
    width: 800px;
    background:white;
    margin:40px auto;
    padding:25px;
    border-radius:15px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
h2{
    color:#ff4089;
    text-align:center;
}
a.btn{
    display:inline-block;
    padding:10px 14px;
    background:#ff4d88;
    color:white;
    border-radius:8px;
    text-decoration:none;
    margin-bottom:15px;
    transition:.3s;
}
a.btn:hover{
    background:#e63971;
}
table{
    width:100%;
    border-collapse:collapse;
    margin-top:10px;
}
th, td{
    padding:12px;
    border:1px solid #ffc7da;
    text-align:center;
}
th{
    background:#ffbad2;
}
td{
    background:#fff4f7;
}
</style>

</head>
<body>

<div class="container">
<h2>📚 DATA MAHASISWA</h2>

<a href="tambah.php" class="btn">+ Tambah Data</a>

<table>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Prodi</th>
</tr>

<?php
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id DESC");
while($d = mysqli_fetch_array($data)){
    echo "<tr>
            <td>$no</td>
            <td>".$d['nama']."</td>
            <td>".$d['nim']."</td>
            <td>".$d['prodi']."</td>
        </tr>";
    $no++;
}
?>
</table>

</div>

</body>
</html>
