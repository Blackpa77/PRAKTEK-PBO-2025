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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  
  <style>
    /* ------------------- */
    /* 1. Global & Variables */
    /* ------------------- */
    :root {
      --primary-color: #0abfbc; /* Aksen Biru */
      --secondary-color: #2c2c54; /* Latar Belakang Konten */
      --background-color: #1a1a2e; /* Latar Belakang Utama */
      --text-color: #e0e0e0; /* Teks Utama */
      --light-text-color: #ffffff; /* Teks Paling Terang */
      --border-color: #4a4a7a;
      --border-radius: 8px;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, var(--background-color), #2c1a4d);
      color: var(--text-color);
      line-height: 1.6;
    }

    .container {
      max-width: 1100px;
      margin: auto;
      padding: 0 20px;
    }

    section {
      padding: 80px 0;
    }
    
    .section-title {
        text-align: center;
        margin-bottom: 40px;
        font-size: 2.5em;
        color: var(--light-text-color);
    }

    /* ------------------- */
    /* 2. Navbar */
    /* ------------------- */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: transparent;
      padding: 15px 20px;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
      transition: background 0.3s, padding 0.3s, box-shadow 0.3s;
    }

    .navbar.scrolled {
      background: rgba(44, 44, 84, 0.85);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      padding: 10px 20px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }
    
    .logo {
      font-size: 1.8em;
      font-weight: 700;
      color: var(--primary-color);
    }

    .nav-links {
      list-style: none;
      display: flex;
    }

    .nav-links li {
      margin: 0 15px;
    }

    .nav-links a {
      text-decoration: none;
      color: var(--light-text-color);
      font-weight: 600;
      position: relative;
      transition: color 0.3s;
    }
    
    .nav-links a::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -5px;
        left: 0;
        background-color: var(--primary-color);
        transition: width 0.3s;
    }

    .nav-links a:hover, .nav-links a.active {
      color: var(--primary-color);
    }
    
    .nav-links a:hover::after, .nav-links a.active::after {
        width: 100%;
    }

    .menu-toggle {
      display: none;
      font-size: 24px;
      cursor: pointer;
    }
    
    /* ------------------- */
    /* 3. Hero Section */
    /* ------------------- */
    #hero {
        background: linear-gradient(rgba(26, 26, 46, 0.7), rgba(26, 26, 46, 0.7)), url('https://source.unsplash.com/random/1600x900/?programming,abstract') no-repeat center center/cover;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: var(--light-text-color);
        padding-top: 60px; /* Offset for navbar */
    }

    .hero-content {
        max-width: 800px;
    }

    .hero-content h1 {
        font-size: 3.5em;
        margin-bottom: 20px;
    }

    .hero-content p {
        font-size: 1.2em;
        margin-bottom: 30px;
        color: #c0c0e0;
    }

    .btn {
        display: inline-block;
        background: var(--primary-color);
        color: var(--background-color);
        padding: 12px 25px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: transform 0.3s, background 0.3s;
    }

    .btn:hover {
        background: #0ddfdb;
        transform: translateY(-3px);
    }

    /* ------------------- */
    /* 4. Latihan Section */
    /* ------------------- */
    #latihan {
        background: var(--background-color);
    }

    .nav-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
    }

    .nav-category {
        background: var(--secondary-color);
        padding: 25px;
        border-radius: var(--border-radius);
        border: 1px solid var(--border-color);
        transition: transform 0.3s, border-color 0.3s;
    }
    .nav-category:hover {
        transform: translateY(-5px);
        border-color: var(--primary-color);
    }

    .nav-category h3 {
        font-size: 1.4em;
        color: var(--primary-color);
        border-bottom: 2px solid var(--border-color);
        padding-bottom: 10px;
        margin-top: 0;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .nav-category ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .nav-category li a {
        display: block;
        color: #c0c0e0;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 8px;
        transition: background-color 0.2s ease, color 0.2s ease;
        font-weight: 500;
        margin-left: -15px; /* Offset padding for better alignment */
    }

    .nav-category li a:hover {
        background-color: rgba(10, 191, 188, 0.1);
        color: var(--primary-color);
    }
    
    /* ------------------- */
    /* 5. Footer */
    /* ------------------- */
    footer {
        background: var(--secondary-color);
        color: var(--text-color);
        text-align: center;
        padding: 30px 20px;
        border-top: 1px solid var(--border-color);
    }
    
    footer p code {
        background: rgba(0,0,0,0.2);
        padding: 3px 6px;
        border-radius: 4px;
        color: #c0c0e0;
    }

    /* ------------------- */
    /* 6. Animations & Responsiveness */
    /* ------------------- */
    
    .reveal {
        position: relative;
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.6s, transform 0.6s;
    }
    
    .reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }

    @media (max-width: 768px) {
      .nav-links {
        display: none;
        flex-direction: column;
        width: 100%;
        background: var(--secondary-color);
        position: absolute;
        top: 60px; /* Adjust based on scrolled navbar padding */
        left: 0;
        padding: 10px 0;
      }

      .nav-links.active {
        display: flex;
      }

      .nav-links li {
        margin: 10px 0;
        text-align: center;
      }

      .menu-toggle {
        display: block;
      }
      
      #hero h1 {
          font-size: 2.5em;
      }
    }
  </style>
</head>
<body>
  
  <nav class="navbar" id="navbar">
    <div class="logo">BLackpa Website</div>
    <ul class="nav-links" id="menu">
      <li><a href="#hero" class="active">Beranda</a></li>
      <li><a href="#latihan">Daftar Latihan</a></li>
      <li><a href="home.php">Home Page</a></li>
    </ul>
    <div class="menu-toggle" id="toggleBtn">&#9776;</div>
  </nav>

  <main>
    <section id="hero">
        <div class="hero-content reveal">
            <h1>WEBSITE PBO PAUNDRA</h1>
            <p>Kumpulan latihan mata kuliah Praktikum Pemrograman Berbasis Objek.
                <br><strong><?= htmlspecialchars($nama) ?></strong>
            </p>
            <a href="#latihan" class="btn">Lihat Latihan</a>
        </div>
    </section>

    <section id="latihan">
        <div class="container">
            <h2 class="section-title reveal">Daftar Latihan</h2>
            <div class="nav-grid">
                <div class="nav-category reveal">
                    <h3>Pertemuan 3</h3>
                    <ul>
                        <li><a href="/Pertemuan_tiga/Latihan1.php" target="_blank">Latihan 1</a></li>
                        <li><a href="/Pertemuan_tiga/Latihan2.php" target="_blank">Latihan 2</a></li>
                        <li><a href="/Pertemuan_tiga/Latihan3.php" target="_blank">Latihan 3</a></li>
                        <li><a href="/Pertemuan_tiga/Latihan4.php" target="_blank">Latihan 4</a></li>
                    </ul>
                </div>

                <div class="nav-category reveal">
                    <h3>Pertemuan 4</h3>
                    <ul>
                        <li><a href="/Pertemuan_empat/class_segitiga.php" target="_blank">Class Segitiga</a></li>
                        <li><a href="/Pertemuan_empat/objeksegitiga.php" target="_blank">Objek Segitiga</a></li>
                    </ul>
                </div>

                <div class="nav-category reveal">
                    <h3>Pertemuan 5</h3>
                    <ul>
                        <li><a href="/Pertemuan_lima/Latihan_objek.php" target="_blank">Latihan Objek</a></li>
                        <li><a href="/Pertemuan_lima/buat_objek.php" target="_blank">Memanggil Objek</a></li>
                        <li><a href="/Pertemuan_lima/Public.php" target="_blank">Public</a></li>
                        <li><a href="/Pertemuan_lima/Protected_benar.php" target="_blank">Protected Benar</a></li>
                        <li><a href="/Pertemuan_lima/turunan_protected_public.php" target="_blank">Turunan</a></li>
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
