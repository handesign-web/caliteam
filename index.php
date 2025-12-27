<?php
$host = '192.168.1.27'; // IP Ubuntu Server Anda
$db   = 'db_tes';
$user = 'app_user';
$pass = 'kumisan5'; // Samakan dengan Langkah 2
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "<h1>🎉 KONEKSI SUKSES!!! 🎉</h1>";
    echo "<p>PHP di dalam Kubernetes berhasil bicara dengan MySQL di Ubuntu Server.</p>";
    echo "<p>Host MySQL: $host</p>";
} catch (\PDOException $e) {
    echo "<h1>❌ KONEKSI GAGAL</h1>";
    echo "Pesan Error: " . $e->getMessage();
}
?>