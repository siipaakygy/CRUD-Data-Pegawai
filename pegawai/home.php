<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Menggunakan FontAwesome untuk ikon -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(135deg, #5f72bd 0%, #9b23ea 100%);
            color: #333;
            text-align: center;
            overflow-x: hidden;
        }
        h2 {
            margin-top: 80px;
            font-size: 3em;
            font-weight: 700;
            color: #fff;
            transition: color 0.4s ease;
            position: relative;
            z-index: 2;
        }
        h2:hover {
            color: #ffeb3b;
            text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.7);
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            background: rgba(0, 0, 0, 0.7); /* Latar belakang semi-transparan */
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-in-out;
        }
        .container p {
            color: #ddd;
            font-size: 1.2em;
        }
        .explore-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #ff5722;
            color: #fff;
            border-radius: 25px;
            font-weight: 500;
            text-transform: uppercase;
            transition: all 0.3s ease;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
        }
        .explore-btn:hover {
            background-color: #ff784e;
            transform: translateY(-5px);
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.4);
        }
        footer {
            margin-top: 50px;
            font-size: 0.9em;
            color: #ddd;
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
        }
        a {
            text-decoration: none;
            color: #a2c2e0;
            font-weight: 500;
        }
        a:hover {
            color: #fff;
            transition: color 0.3s ease;
        }
        /* Animasi Fade In */
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
    </style>
</head>
<body>
    <?php 
        include "header.php";
    ?>

    <div class="container">
        <h2>Selamat datang <?=$_SESSION['Nama']?>.</h2>
        <p>Terima kasih telah bergabung! Jelajahi situs kami lebih lanjut <a href="#explore">di sini</a>.</p>
        <a href="#explore" class="explore-btn">Explore <i class="fas fa-arrow-right"></i></a> <!-- Ikon panah dari FontAwesome -->
    </div>

    <?php
        include "footer.php";
    ?>
</body>
</html>
