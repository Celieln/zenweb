<?php
require __DIR__ . '/config.php';
$paket = loadData('paket.json');
$selected = isset($_GET['paket']) ? $_GET['paket'] : '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Sekarang - <?php echo SITE_NAME; ?></title>
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
                    <li><a href="index.php#proses">Proses Kerja</a></li>
                    <li><a href="order.php">Hubungi</a></li>
                </ul>
            </nav>
            <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">&#9776;</button>
        </div>
    </header>

    <div class="order-header">
        <div class="container">
            <h1>Pesan <span class="txt-glow">Sekarang</span></h1>
            <p>Isi form di bawah ini untuk memulai proyek Anda.</p>
        </div>
    </div>

    <div class="container">
        <form class="order-form" method="POST" action="order_process.php">
            <div class="form-row">
                <div class="form-group">
                    <label for="nama">Nama Lengkap *</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" placeholder="email@domain.com" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="whatsapp">No WhatsApp *</label>
                    <input type="text" id="whatsapp" name="whatsapp" placeholder="08xxxxxxxxxx" required>
                </div>
                <div class="form-group">
                    <label for="paket">Jenis Paket *</label>
                    <select id="paket" name="paket" required>
                        <option value="">-- Pilih Paket --</option>
                        <?php foreach ($paket as $item): ?>
                        <option value="<?php echo $item['id']; ?>"<?php echo $selected === $item['id'] ? ' selected' : ''; ?>><?php echo $item['name']; ?> - <?php echo $item['price']; ?></option>
                        <?php endforeach; ?>
                        <option value="custom">Custom</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="judul">Judul Website *</label>
                <input type="text" id="judul" name="judul" placeholder="Nama atau judul website Anda" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Kebutuhan *</label>
                <textarea id="deskripsi" name="deskripsi" placeholder="Jelaskan kebutuhan website Anda secara detail..." required></textarea>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="budget">Budget Range</label>
                    <select id="budget" name="budget">
                        <option value="">-- Pilih Budget --</option>
                        <option value="< 1jt">&lt; Rp 1.000.000</option>
                        <option value="1-3jt">Rp 1.000.000 - 3.000.000</option>
                        <option value="3-5jt">Rp 3.000.000 - 5.000.000</option>
                        <option value="5-10jt">Rp 5.000.000 - 10.000.000</option>
                        <option value="> 10jt">&gt; Rp 10.000.000</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="deadline">Deadline yang Diinginkan</label>
                    <input type="date" id="deadline" name="deadline">
                </div>
            </div>
            <div class="form-group">
                <label for="referensi">Referensi / Inspirasi</label>
                <textarea id="referensi" name="referensi" placeholder="Link website atau deskripsi referensi desain yang Anda inginkan..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">Kirim Pesanan &rarr;</button>
        </form>
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
