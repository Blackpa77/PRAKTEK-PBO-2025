&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;id&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;Home - Website Paundra&lt;/title&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.googleapis.com&quot;&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.gstatic.com&quot; crossorigin&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;style&gt;
        :root {
            --dark-bg: #1a1a2e;
            --light-dark-bg: #2c2c54;
            --text-primary: #e0e0e0;
            --text-secondary: #a7a7ff;
            --accent-blue: #0abfbc;
            --border-color: #4a4a7a;
        }
        body {
            font-family: &#39;Poppins&#39;, sans-serif;
            background-color: var(--dark-bg);
            color: var(--text-primary);
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
        }
        .container {
            max-width: 600px;
            text-align: center;
        }
        .box {
            background: var(--light-dark-bg);
            padding: 40px;
            border-radius: 12px;
            border: 1px solid var(--border-color);
        }
        .box h2 {
            color: #ffffff;
            margin-top: 0;
            font-weight: 600;
        }
        .box p {
            color: var(--text-secondary);
            line-height: 1.6;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            background-color: var(--accent-blue);
            color: var(--dark-bg);
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.2s ease, transform 0.2s ease;
        }
        .back-link:hover {
            background-color: #0ddfdb;
            transform: translateY(-2px);
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;box&quot;&gt;
            &lt;h2&gt;Selamat Datang di Halaman Home&lt;/h2&gt;
            &lt;p&gt;Ini adalah halaman utama dari website latihan PBO. Silakan kembali ke halaman index untuk melihat daftar semua latihan.&lt;/p&gt;
            &lt;a href=&quot;index.php&quot; class=&quot;back-link&quot;&gt;Kembali ke Index&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;