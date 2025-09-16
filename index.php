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
        :root {
            --accent-blue: #0abfbc;
            --text-primary: #e0e0e0;
            --text-secondary: #c0c0e0;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1a1a2e, #2c1a4d);
            color: var(--text-primary);
            margin: 0;
            padding: 40px 20px;
            min-height: 100vh;
            box-sizing: border-box;
        }

        .container {
            max-width: 850px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            animation: fadeInUp 0.8s ease-out;
        }

        .header h1 {
            font-size: 2.5em;
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .header p {
            color: var(--text-secondary);
            font-size: 1.1em;
        }

        .glass-box {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 30px;
            border-radius: 16px;
            margin-bottom: 20px;
            animation: fadeInUp 0.8s ease-out 0.2s; /* Muncul sedikit setelah header */
            animation-fill-mode: both;
        }

        .nav-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
        }

        .nav-category h3 {
            font-size: 1.2em;
            color: var(--accent-blue);
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 10px;
            margin-top: 0;
            font-weight: 600;
        }

        .nav-category ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .nav-category li a {
            display: block;
            color: var(--text-secondary);
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 8px;
            transition: background-color 0.2s ease, color 0.2s ease;
            font-weight: 500;
        }

        .nav-category li a:hover {
            background-color: rgba(10, 191, 188, 0.1);
            color: var(--accent-blue);
        }

        .footer {
            text-align: center;
            font-size: 0.9em;
            color: #888;
            margin-top: 40px;
            animation: fadeInUp 0.8s ease-out 0.4s;
            animation-fill-mode: both;
        }
        
        .footer code {
            background: rgba(0,0,0,0.2);
            padding: 3px 6px;
            border-radius: 4px;
            color: var(--text-secondary);
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

        <div class="glass-box">
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