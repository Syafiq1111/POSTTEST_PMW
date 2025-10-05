<?php
session_start();

// Cek jika pengguna belum login, arahkan ke halaman login
if (!isset($_SESSION['username'])) {
    header('Location: ../login/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Website SPP</title>
    <link rel="stylesheet" href="dashboard.css"> 
</head>
<body class="body">

<header class="header">
    <div class="logo-title">
        <h1 class="site-title">Website Pembayaran SPP</h1>
    </div>
    <nav>
        <ul class="nav-list">
            <li><a href="../logout.php" class="nav-link btn btn-primary">Logout</a></li>
        </ul>
    </nav>
</header>

<main class="main">
    <div class="dashboard-container">
        <section class="dashboard-welcome">
            <h2 class="section-title">Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
            <p>Silakan pilih menu di bawah ini untuk mengelola pembayaran SPP Anda.</p>
        </section>

        <section class="dashboard-menu">
            <div class="grid">
                
                <a href="#" class="card-link">
                    <div class="card">
                        <h3 class="card-title">Bayar SPP</h3>
                        <p class="card-text">Lakukan pembayaran tagihan SPP untuk periode saat ini.</p>
                    </div>
                </a>
                
                <a href="#" class="card-link">
                    <div class="card">
                        <h3 class="card-title">Riwayat Transaksi</h3>
                        <p class="card-text">Lihat semua catatan pembayaran yang telah Anda lakukan.</p>
                    </div>
                </a>

                <a href="#" class="card-link">
                    <div class="card">
                        <h3 class="card-title">Cek Tagihan</h3>
                        <p class="card-text">Periksa status dan rincian tagihan SPP Anda yang belum dibayar.</p>
                    </div>
                </a>

                <a href="#" class="card-link">
                    <div class="card">
                        <h3 class="card-title">Profil Saya</h3>
                        <p class="card-text">Kelola informasi pribadi dan pengaturan akun Anda.</p>
                    </div>
                </a>

            </div>
        </section>
    </div>
</main>

<footer class="footer">
    <p>&copy; 2025 Website Pembayaran SPP</p>
</footer>

</body>
</html>