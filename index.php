<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: #ffe6ef;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px 50px;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
            text-align: center;
            width: 350px;
        }

        h2 {
            color: #ff5c8a;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            margin: 12px 0;
            border: none;
            border-radius: 10px;
            background: #ff8db3;
            color: white;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
        }

        .btn:hover {
            background: #ff5c8a;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Sistem Input Data</h2>

    <a href="index.php" class="btn">Lihat Data</a>
    <a href="Tambah.php" class="btn">Tambah Data</a>
    <a href="Koneksi.php" class="btn">Cek Koneksi Database</a>
</div>

</body>
</html>
