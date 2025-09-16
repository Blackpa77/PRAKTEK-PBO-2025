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
        :root {
            --accent-blue: #0abfbc;
            --accent-hover: #0ddfdb;
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
            color: #e0e0e0;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
            overflow: hidden; /* Mencegah scrollbar dari elemen animasi */
        }

        .container {
            max-width: 600px;
            text-align: center;
        }

        .glass-box {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px); /* Untuk Safari */
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 40px;
            border-radius: 16px;
            animation: fadeInUp 0.8s ease-out;
        }

        .glass-box h2 {
            color: #ffffff;
            margin-top: 0;
            font-weight: 700;
            font-size: 2em;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        .glass-box p {
            color: #c0c0e0;
            line-height: 1.7;
            font-size: 1.1em;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 25px;
            background: var(--accent-blue);
            color: #1a1a2e;
            padding: 14px 28px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .cta-button:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(10, 191, 188, 0.3);
        }

        .cta-button svg {
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="glass-box">
            <h2>Selamat Datang</h2>
            <p>Ini adalah halaman utama dari website latihan PBO. Silakan kembali ke halaman index untuk melihat daftar semua latihan.</p>
            <a href="index.php" class="cta-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                </svg>
                <span>Kembali ke Index</span>
            </a>
        </div>
    </div>
</body>
</html>