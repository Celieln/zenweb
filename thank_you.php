<?php require __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="container header-inner">
            <a href="index.php" class="brand">
                <div class="brand-badge">Z</div>
                <span class="brand-name"><?php echo SITE_NAME; ?></span>
            </a>
            <nav class="nav-desktop" id="navDesktop">
                <ul>
                    <li><a href="index.php#beranda">Beranda</a></li>
                    <li><a href="index.php#layanan">Layanan</a></li>
                    <li><a href="index.php#harga">Paket Harga</a></li>
                    <li><a href="order.php">Hubungi</a></li>
                </ul>
            </nav>
            <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">&#9776;</button>
        </div>
    </header>

    <div class="thankyou-page">
        <div class="thankyou-box">
            <div class="thankyou-icon">&#10003;</div>
            <h1>Pesanan Berhasil!</h1>
            <p>Pesanan Anda berhasil dikirim! Kami akan menghubungi Anda segera.</p>
            <?php if (isset($_GET['id'])): ?>
            <div class="thankyou-order-id">ID Pesanan: <?php echo htmlspecialchars($_GET['id']); ?></div>
            <?php endif; ?>
            <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-bottom">
                <span>&copy; 2026 <?php echo SITE_NAME; ?>. All rights reserved.</span>
                <span>Made with &#10084; in Indonesia</span>
            </div>
        </div>
    </footer>

    <script>
    document.getElementById('navToggle').addEventListener('click', function() {
        document.getElementById('navDesktop').classList.toggle('active');
    });
    </script>
</body>
</html>
