<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: ../dashboard/dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin111') {
        $_SESSION['username'] = $username;
        header('Location: ../dashboard/dashboard.php');
        exit;
    } else {
        $error = 'Username atau password kamu salah!';
    }
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Website Pembayaran SPP</title>
    <link rel="stylesheet" href="login.css">
</head>
<body class="body">

<header class="header">
    <h1 class="site-title">Login Website Pembayaran SPP</h1>
    <nav class="nav">
        <ul class="nav-list">
            <li><a href="../index.php" class="nav-link">Beranda</a></li>
            <li><a href="../about/about.php" class="nav-link">Tentang</a></li>
        </ul>
    </nav>
</header>

<main class="main">
    <section class="login-section">
        <h2 class="section-title">Form Login</h2>
        <?php
            if (!empty($error)) {
                echo '<p style="color: red; text-align: center;">' . $error . '</p>';
            }

            if (isset($_GET['status']) && $_GET['status'] == 'logout_success') {
                echo '<p style="color: green; text-align: center;">Anda berhasil logout!</p>';
            }
        ?>
        <form class="login-form" action="" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-input">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-input">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </section>
</main>

<footer class="footer">
    <p>2025 Website Pembayaran SPP</p>
</footer>

</body>
</html>
