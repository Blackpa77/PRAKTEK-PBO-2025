<?php
// index.php
$nama = " Developer @Paundra90";
$waktu = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website Paundra</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .container { max-width: 600px; margin: 0 auto; }
        .box { background: #f0f8ff; padding: 20px; border-radius: 10px; margin-top: 20px; }
        
        /* Gaya untuk sub-judul Pertemuan */
        .box h3 {
            text-align: left;
            padding-left: 10px;
            margin-top: 20px;
            margin-bottom: 10px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }

        ul { list-style-type: none; padding: 0; }
        li { margin: 10px 0; }
        a { background: #007bff; color: white; padding: 10px 15px; border-radius: 5px; text-decoration: none; display: inline-block; width: 150px; }
        a:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <h1>WEBSITE PBO PAUNDRA 2025</h1>
        <p>Website ini dibuat untuk menyimpan semua latihan dan hal yang berhubungan dengan mata kuliah Praktikum Pemograman Berbasis Objek (PBO). <strong><?= htmlspecialchars($nama) ?></strong></p>
        
        <div class="box">
            <h2>🔗 Navigasi Halaman</h2>
            
            <ul>
                <li><a href="home.php">Home</a></li>
            </ul>

            <ul>
            <h3>Pertemuan 3 (PPBO) </h3>
                <li><a href="/Pertemuan 3/Latihan1.php">Latihan 1</a></li>
                <li><a href="/Pertemuan 3/Latihan2.php">Latihan 2</a></li>
                <li><a href="/Pertemuan 3/Latihan3.php">Latihan 3</a></li>
                <li><a href="/Pertemuan 3/Latihan4.php">Latihan 4</a></li>
            </ul>

            
            <ul>
            <h3>Pertemuan 4 (PBO) </h3>
                <li><a href="/Pertemuan 4/class_segitiga.php">Class Segitiga</a></li>
                <li><a href="/Pertemuan 4/objeksegitiga.php">Objek Segitiga</a></li>
            </ul>

            <ul>
                <h3>Pertemuan 5 (PPBO)</h3>
                <li><a href="/Pertemuan 5/Latihan_objek.php">Latihan 1</a></li>
                <li><a href="/Pertemuan 5/buat_objek.php">Memanggil objek</a></li>
            </ul>
            

            </div>
        
        <div class="box">
            <p>Waktu server sekarang : <code><?= $waktu ?></code></p>
        </div>
</div>
</body>
</html>
