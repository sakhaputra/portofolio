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
    <title>Dashboard - Sakha Putra Pratama</title>
    <link rel="stylesheet" href="gaya.css">
    <style>
        .dashboard-content {
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .dashboard-item {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
        .dashboard-item h2 {
            margin-top: 0;
        }
        .social-media a {
            display: inline-block;
            margin: 5px;
            color: #333;
            text-decoration: none;
        }
        .social-media a:hover {
            color: rgb(255, 174, 0);
        }
    </style>
</head>
<body>
    <nav class="nav">
        <div class="navatas">
            <h1>SAKHA</h1>
            <button onclick="window.location.href='home.php'">Kembali ke Profil</button>
            <button onclick="window.location.href='logout.php'">Logout</button>
        </div>
    </nav>

    <div class="dashboard-content">
        <h1>Selamat datang di Dashboard, <?php echo htmlspecialchars($_SESSION['nama_tamu']); ?>!</h1>
        
        <div class="dashboard-grid">
            <div class="dashboard-item">
                <h2>Informasi Akademik</h2>
                <p>Semester: 2</p>
                <p>Program Studi: Teknik Informatika</p>
                <p>Universitas: Ahmad Dahlan Yogyakarta</p>
            </div>
            
            <div class="dashboard-item">
                <h2>Aktivitas Terkini</h2>
                <p>Proyek Web: Pembuatan Profil Personal</p>
                <p>Tugas Pemrograman: 2 selesai, 1 dalam proses</p>
            </div>
            
            <div class="dashboard-item">
                <h2>Info Sosial Media</h2>
                <div class="social-media">
                    <a href="https://www.instagram.com/sakhapputra" target="_blank">Instagram: @sakhapputra</a><br>
                    <a href="https://linkedin.com/in/sakhaputrapratama" target="_blank">LinkedIn: Sakha Putra Pratama</a><br>
                    <a href="https://github.com/sakhaputra" target="_blank">GitHub: sakhaputra</a>
                </div>
            </div>
        </div>

        <?php
        $current_time = date("Y-m-d H:i:s");
        echo "<p>Waktu saat ini: " . $current_time . "</p>";
        ?>
    </div>

    <footer class="ftr">
        <div class="isiftr">
            <p>&copy; 2024 Sakha. All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>