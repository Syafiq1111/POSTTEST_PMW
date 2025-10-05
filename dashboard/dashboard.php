<?php
session_start();

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
    <title>Dashboard</title>
    <link rel="stylesheet" href="../login/login.css"> 
</head>
<body class="body">

<header class="header">
    <h1 class="site-title">Dashboard Pembayaran SPP</h1>
    <nav>
        <ul class="nav-list">
            <li><a href="../logout.php" class="nav-link">Logout</a></li>
        </ul>
    </nav>
</header>

<main class="main">
    <section class="login-section">
        <h2 class="section-title">Selamat Datang!</h2>
        <p style="text-align: center; font-size: 18px;">
            Anda login sebagai: <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>
        </p>
        <p style="text-align: center; margin-top: 20px;">
            Ini adalah halaman dashboard Anda. Fitur pembayaran dan riwayat akan tersedia di sini.
        </p>
    </section>
</main>

<footer class="footer">
    <p>&copy; 2025 Website Pembayaran SPP</p>
</footer>

</body>
</html>