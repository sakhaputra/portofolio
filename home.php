<?php
session_start();
if (!isset($_SESSION['nama_tamu']) || !isset($_SESSION['email_tamu'])) {
    header("Location: tamu.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sakha Putra Pratama</title>
    <link rel="stylesheet" href="gaya.css">
</head>
<body>
    <nav class="nav">
        <div class="navatas">
            <h1>SAKHA</h1>
            <button id="dashboardBtn">Dasbor</button>
        </div>
    </nav>

    <main>
        <div class="container">
            <img src="foto2.jpg" alt="Sakha Putra Pratama" class="profile-image">
            <h1>Sakha Putra Pratama</h1>
            <h3>Yogyakarta</h3>
        </div>

        <div class="art">
            <h1>PROFIL</h1>
            <div id="profile-content"></div>
            <button id="readMoreBtn">Baca Selengkapnya</button>
        </div>
    </main>

    <footer class="ftr">
        <div class="isiftr">
            <p>&copy; 2024 Sakha. All Rights Reserved</p>
        </div>
    </footer>

    <script src="skrip.js"></script>
</body>
</html>