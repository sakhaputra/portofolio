<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    
    // Validasi input
    if (empty($nama) || empty($email)) {
        $error = "Nama dan email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Format email tidak valid.";
    } else {
        // Simpan data ke file txt
        $data = date("Y-m-d H:i:s") . " | Nama: " . $nama . " | Email: " . $email . "\n";
        $file = fopen("data_tamu.txt", "a");
        fwrite($file, $data);
        fclose($file);

        // Set session
        $_SESSION['nama_tamu'] = $nama;
        $_SESSION['email_tamu'] = $email;

        // Redirect ke home.php
        header("Location: home.php");
        exit();
    }
}

// Jika tidak ada POST request, tampilkan halaman HTML
include 'tamu.html';
?>