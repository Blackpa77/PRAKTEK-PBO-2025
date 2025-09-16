<?php
// index.php
$nama = " Developer @Paundra90";
$waktu = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website PBO Paundra</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 40px 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            margin-bottom: 40px;
        }
        .header h1 {
            font-size: 2.5em;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        .header p {
            color: #555;
            font-size: 1.1em;
        }
        .main-box {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-bottom: 20px;
        }
        .nav-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
        }
        .nav-category h3 {
            font-size: 1.2em;
            color: #34495e;
            border-bottom: 2px solid #ecf0f1;
            padding-bottom: 10px;
            margin-top: 0;
        }
        .nav-category ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .nav-category li a {
            display: block;
            color: #3498db;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 8px;
            transition: background-color 0.2s ease, color 0.2s ease;
            font-weight: 500;
        }
        .nav-category li a:hover {
            background-color: #ecf0f1;
            color: #2980b9;
        }
        .footer {
            text-align: center;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>WEBSITE PBO PAUNDRA</h1>
            <p>Kumpulan latihan mata kuliah Praktikum Pemrograman Berbasis Objek.
                <br><strong><?= htmlspecialchars($nama) ?></strong>
            </p>
        </div>

        <div class="main-box">
            <div class="nav-grid">
                <div class="nav-category">
                    <h3>Umum</h3>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                    </ul>
                </div>
                <div class="nav-category">
                    <h3>Pertemuan 3</h3>
                    <ul>
                        <li><a href="/Pertemuan_tiga/Latihan1.php">Latihan 1</a></li>
                        <li><a href="/Pertemuan_tiga/Latihan2.php">Latihan 2</a></li>
                        <li><a href="/Pertemuan_tiga/Latihan3.php">Latihan 3</a></li>
                        <li><a href="/Pertemuan_tiga/Latihan4.php">Latihan 4</a></li>
                    </ul>
                </div>

                <div class="nav-category">
                    <h3>Pertemuan 4</h3>
                    <ul>
                        <li><a href="/Pertemuan_empat/class_segitiga.php">Class Segitiga</a></li>
                        <li><a href="/Pertemuan_empat/objeksegitiga.php">Objek Segitiga</a></li>
                    </ul>
                </div>

                <div class="nav-category">
                    <h3>Pertemuan 5</h3>
                    <ul>
                        <li><a href="/Pertemuan_lima/Latihan_objek.php">Latihan 1</a></li>
                        <li><a href="/Pertemuan_lima/buat_objek.php">Memanggil Objek</a></li>
                        <li><a href="/Pertemuan_lima/Public.php">Public</a></li>
                        <li><a href="/Pertemuan_lima/Protected_benar.php">Protected Benar</a></li>
                        <li><a href="/Pertemuan_lima/turunan_protected_public.php">Turunan</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>Waktu server: <code><?= $waktu ?></code></p>
        </div>
    </div>
</body>
</html>