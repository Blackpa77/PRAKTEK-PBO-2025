<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Website Paundra</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            max-width: 600px;
            text-align: center;
        }
        .box {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .box h2 {
            color: #2c3e50;
            margin-top: 0;
        }
        .box p {
            color: #555;
            line-height: 1.6;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            background-color: #3498db;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.2s ease;
        }
        .back-link:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h2>Selamat Datang di Halaman Home</h2>
            <p>Ini adalah halaman utama dari website latihan PBO. Silakan kembali ke halaman index untuk melihat daftar semua latihan.</p>
            <a href="index.php" class="back-link">Kembali ke Index</a>
        </div>
    </div>
</body>
</html>