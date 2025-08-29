<?php
// index.php
$nama = " Atmin Mie ayam";
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
        ul { list-style-type: none; padding: 0; }
        li { margin: 10px 0; }
        a { background: #007bff; color: white; padding: 10px 15px; border-radius: 5px; text-decoration: none; display: inline-block; width: 150px; }
        a:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <h1>WELCOME WEBSITE PAUNDRA</h1>
        <p>Semoga dengan adanya wesbite ini para mie ayam diseluruh dunia kesejahteraannya meningkat dan menjadi lebih baiik, SEMOGA APA YANG DISMEOGAKAN TERCAPAI <strong><?= htmlspecialchars($nama) ?></strong></p>
        
        <div class="box">
            <h2>🔗 Navigasi Halaman</h2>
            <ul>
                <li><a href="home.php">Buka Halaman Home</a></li>
                <li><a href="Latihan1.php">Buka Latihan 1</a></li>
                <li><a href="Latihan2.php">Buka Latihan 2</a></li>
                <li><a href="Latihan3.php">Buka Latihan 3</a></li>
                <li><a href="Latihan4.php">Buka Latihan 4</a></li>
            </ul>
        </div>
        
        <div class="box">
            <p>Waktu server: <code><?= $waktu ?></code></p>
        </div>
 </div>
</body>
</html>