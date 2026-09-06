<?php require __DIR__ . '/config.php';
$paket = loadJSON('paket.json');
$layanan = loadJSON('layanan.json');
$settings = require __DIR__ . '/data/settings.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($settings['site_name']) ?> — Jasa Pembuatan Website Profesional</title>
<meta name="description" content="<?= e($settings['desc']) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="site-header" id="siteHeader">
  <div class="container header-inner">
    <a href="index.php" class="brand">
      <div class="brand-badge">Z</div>
      <span class="brand-name"><?= e($settings['site_name']) ?></span>
    </a>
    <nav class="nav-desktop" id="navDesktop">
      <ul>
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#tentang-web">Tentang Web</a></li>
        <li><a href="#layanan">Layanan</a></li>
        <li><a href="#harga">Harga</a></li>
        <li><a href="#proses">Proses</a></li>
        <li><a href="order.php" class="btn btn-primary btn-sm">Pesan Sekarang</a></li>
      </ul>
    </nav>
    <button class="nav-toggle" id="navToggle" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<section class="hero" id="beranda">
  <div class="container hero-content">
    <div class="hero-badge">&gt; Web Development Studio</div>
    <h1 class="hero-title">Bangun Website<br><span class="txt-glow">Profesional</span></h1>
    <p class="hero-desc">Kami membantu bisnis, UMKM, pelajar, dan perusahaan hadir secara online dengan website modern, cepat, dan berkinerja tinggi.</p>
    <div class="hero-actions">
      <a href="#harga" class="btn btn-primary">Lihat Paket Harga &rarr;</a>
      <a href="order.php" class="btn btn-ghost">Konsultasi Gratis</a>
    </div>
    <div class="hero-stats">
      <div class="stat"><strong>50+</strong><span>Proyek Selesai</span></div>
      <div class="stat"><strong>99%</strong><span>Klien Puas</span></div>
      <div class="stat"><strong>3+</strong><span>Tahun Pengalaman</span></div>
    </div>
  </div>
</section>

<section class="section-pad" id="tentang-web">
  <div class="container">
    <div class="section-head">
      <span class="section-tag">// PENJELASAN</span>
      <h2>Apa Itu <span class="txt-glow">Website</span>?</h2>
      <p>Pahami apa itu website sebelum Anda memesan.</p>
    </div>
    <div class="info-grid">
      <div class="info-card reveal" data-delay="0">
        <div class="info-icon">&#128187;</div>
        <h3>Definisi Website</h3>
        <p>Website adalah kumpulan halaman digital yang dapat diakses melalui internet. Setiap halaman berisi teks, gambar, video, atau elemen interaktif yang saling terhubung melalui hyperlink. Website diakses menggunakan browser seperti Chrome, Firefox, atau Safari.</p>
      </div>
      <div class="info-card reveal" data-delay="100">
        <div class="info-icon">&#128640;</div>
        <h3>Kegunaan Website</h3>
        <p>Website digunakan untuk: memperkenalkan bisnis (company profile), menjual produk online (e-commerce), menulis artikel (blog), menyediakan informasi publik (portal), menerima pendaftaran/booking online, membangun personal branding, dan sebagai portofolio karya.</p>
      </div>
      <div class="info-card reveal" data-delay="200">
        <div class="info-icon">&#128295;</div>
        <h3>Tingkat Kesulitan</h3>
        <p>Landing page sederhana bisa selesai dalam 1-3 hari. Website multi-halaman dengan CMS membutuhkan 7-14 hari. Website e-commerce atau web application membutuhkan 14-30 hari tergantung kompleksitas fitur yang dibutuhkan.</p>
      </div>
    </div>

    <div class="detail-section reveal">
      <h3 class="detail-title">Mengapa Website Penting untuk Bisnis?</h3>
      <div class="detail-grid">
        <div class="detail-item">
          <span class="detail-num">01</span>
          <h4>Kredibilitas</h4>
          <p>Website profesional meningkatkan kepercayaan pelanggan. 75% konsumen menilai kredibilitas bisnis dari tampilan website mereka.</p>
        </div>
        <div class="detail-item">
          <span class="detail-num">02</span>
          <h4>Jangkauan Luas</h4>
          <p>Website aktif 24 jam, 7 hari seminggu. Pelanggan bisa menemukan produk Anda kapan saja, dari mana saja.</p>
        </div>
        <div class="detail-item">
          <span class="detail-num">03</span>
          <h4>Murah & Efisien</h4>
          <p>Biaya website jauh lebih murah dibanding menyewa toko fisik. ROI website bisa mencapai 5-10x lipat dalam setahun.</p>
        </div>
        <div class="detail-item">
          <span class="detail-num">04</span>
          <h4>SEO & Visibilitas</h4>
          <p>Website yang teroptimasi SEO muncul di halaman pertama Google, sehingga pelanggan baru menemukan bisnis Anda secara organik.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-pad section-alt" id="jenis-web">
  <div class="container">
    <div class="section-head">
      <span class="section-tag">// JENIS WEBSITE</span>
      <h2>Contoh Website yang <span class="txt-glow">Kami Buat</span></h2>
      <p>Kenali berbagai jenis website dan temukan yang cocok untuk kebutuhan Anda.</p>
    </div>
    <div class="grid-3">
      <div class="webtype-card reveal" data-delay="0">
        <div class="webtype-preview">
          <img src="https://images.pexels.com/photos/3584973/pexels-photo-3584973.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Landing Page" loading="lazy">
        </div>
        <h3>Landing Page</h3>
        <p>Halaman tunggal yang fokus pada satu tujuan: menjual produk, mengumpulkan leads, atau promosi campaign. Cocok untuk UMKM, freelancer, dan iklan digital.</p>
        <div class="webtype-specs">
          <span>Harga mulai Rp 150.000</span>
          <span>Pengerjaan 1-3 hari</span>
        </div>
      </div>
      <div class="webtype-card reveal" data-delay="100">
        <div class="webtype-preview">
          <img src="https://images.pexels.com/photos/3931641/pexels-photo-3931641.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Company Profile" loading="lazy">
        </div>
        <h3>Company Profile</h3>
        <p>Website multi-halaman yang menampilkan profil perusahaan, layanan, tim, dan portofolio. Meningkatkan kepercayaan dan profesionalisme di mata klien.</p>
        <div class="webtype-specs">
          <span>Harga mulai Rp 1.200.000</span>
          <span>Pengerjaan 3-7 hari</span>
        </div>
      </div>
      <div class="webtype-card reveal" data-delay="200">
        <div class="webtype-preview">
          <img src="https://images.pexels.com/photos/6956800/pexels-photo-6956800.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Toko Online" loading="lazy">
        </div>
        <h3>Toko Online</h3>
        <p>E-commerce lengkap dengan katalog produk, keranjang belanja, sistem pembayaran online, dan manajemen pesanan. Cocok untuk jualan online.</p>
        <div class="webtype-specs">
          <span>Harga mulai Rp 2.800.000</span>
          <span>Pengerjaan 7-14 hari</span>
        </div>
      </div>
      <div class="webtype-card reveal" data-delay="300">
        <div class="webtype-preview">
          <img src="https://images.pexels.com/photos/7055139/pexels-photo-7055139.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Blog / Portal" loading="lazy">
        </div>
        <h3>Blog / Portal</h3>
        <p>Platform untuk menulis artikel, berita, atau tutorial. Dilengkapi CMS agar Anda bisa mengelola konten sendiri tanpa perlu coding.</p>
        <div class="webtype-specs">
          <span>Harga mulai Rp 1.200.000</span>
          <span>Pengerjaan 5-10 hari</span>
        </div>
      </div>
      <div class="webtype-card reveal" data-delay="400">
        <div class="webtype-preview">
          <img src="https://images.pexels.com/photos/7820326/pexels-photo-7820326.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Booking & Reservasi" loading="lazy">
        </div>
        <h3>Booking & Reservasi</h3>
        <p>Sistem pemesanan online untuk hotel, restoran, klinik, atau layanan. Fitur kalender, konfirmasi otomatis, dan pembayaran.</p>
        <div class="webtype-specs">
          <span>Harga mulai Rp 2.800.000</span>
          <span>Pengerjaan 10-20 hari</span>
        </div>
      </div>
      <div class="webtype-card reveal" data-delay="500">
        <div class="webtype-preview">
          <img src="https://images.pexels.com/photos/106344/pexels-photo-106344.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Web Application" loading="lazy">
        </div>
        <h3>Web Application</h3>
        <p>Aplikasi web custom: ERP, CRM, dashboard, SPOS, atau sistem internal perusahaan. Dibangun sesuai kebutuhan spesifik bisnis Anda.</p>
        <div class="webtype-specs">
          <span>Harga mulai Rp 5.500.000</span>
          <span>Pengerjaan 14-30 hari</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-pad section-alt" id="layanan">
  <div class="container">
    <div class="section-head">
      <span class="section-tag">// LAYANAN KAMI</span>
      <h2>Solusi Digital <span class="txt-glow">Lengkap</span></h2>
      <p>Dari desain hingga deployment, kami handle semuanya.</p>
    </div>
    <div class="grid-3">
      <?php
      $icons = ['rocket'=>'🚀','building'=>'🏢','cart'=>'🛒','pen'=>'✍️','code'=>'💻','search'=>'🔍'];
      foreach ($layanan as $i => $l): ?>
      <div class="service-card reveal" data-delay="<?= ($i % 3) * 100 ?>">
        <div class="service-icon"><?= $icons[$l['icon']] ?? '🚀' ?></div>
        <h3><?= e($l['name']) ?></h3>
        <p><?= e($l['desc']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section-pad" id="harga">
  <div class="container">
    <div class="section-head">
      <span class="section-tag">// PAKET HARGA</span>
      <h2>Pilih Paket <span class="txt-glow">Terbaik</span></h2>
      <p>Harga transparan, tanpa biaya tersembunyi. Mulai dari Rp 150rb untuk pelajar hingga paket enterprise.</p>
    </div>
    <div class="pricing-grid">
      <?php foreach ($paket as $i => $pk): ?>
      <div class="pricing-card<?= $pk['popular'] ? ' popular' : '' ?> reveal" data-delay="<?= ($i % 3) * 80 ?>">
        <?php if ($pk['popular']): ?>
        <span class="popular-badge">Populer</span>
        <?php endif; ?>
        <div class="pricing-color-bar" style="background:<?= $pk['color'] ?>"></div>
        <div class="pricing-head">
          <div class="pricing-name"><?= e($pk['name']) ?></div>
          <div class="pricing-subtitle"><?= e($pk['subtitle']) ?></div>
          <div class="pricing-price" style="color:<?= $pk['color'] ?>"><?= e($pk['price']) ?></div>
          <div class="pricing-period"><?= e($pk['period']) ?></div>
        </div>
        <p class="pricing-desc"><?= e($pk['desc']) ?></p>
        <ul class="pricing-features">
          <?php foreach ($pk['features'] as $f): ?>
          <li><?= e($f) ?></li>
          <?php endforeach; ?>
        </ul>
        <table class="specs-table">
          <tr><td>Jumlah Halaman</td><td><?= e($pk['specs']['halaman']) ?></td></tr>
          <tr><td>Cocok Untuk</td><td><?= e($pk['specs']['rekomen']) ?></td></tr>
          <tr><td>Waktu Pengerjaan</td><td><?= e($pk['specs']['waktu']) ?></td></tr>
          <tr><td>Revisi</td><td><?= e($pk['specs']['revision']) ?></td></tr>
          <tr><td>Source Code</td><td><?= $pk['specs']['source_code'] ? 'Ya' : 'Tidak' ?></td></tr>
        </table>
        <div class="pricing-cta">
          <a href="order.php?paket=<?= $pk['id'] ?>" class="btn <?= $pk['popular'] ? 'btn-primary' : 'btn-ghost' ?>">Pesan Sekarang</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section-pad section-alt" id="proses">
  <div class="container">
    <div class="section-head">
      <span class="section-tag">// PROSES KERJA</span>
      <h2>Langkah <span class="txt-glow">Mudah</span></h2>
      <p>Proses pengerjaan transparan dari awal hingga website online.</p>
    </div>
    <div class="process-grid">
      <div class="process-step reveal" data-delay="0">
        <div class="step-num">01</div>
        <h4>Konsultasi</h4>
        <p>Ceritakan kebutuhan Anda. Kami bantu tentukan paket, fitur, dan desain yang tepat. Gratis tanpa komitmen.</p>
      </div>
      <div class="process-arrow">&rarr;</div>
      <div class="process-step reveal" data-delay="100">
        <div class="step-num">02</div>
        <h4>Desain</h4>
        <p>Kami buatkan mockup desain sesuai brand Anda. Anda bisa revisi hingga desain benar-benar sesuai keinginan.</p>
      </div>
      <div class="process-arrow">&rarr;</div>
      <div class="process-step reveal" data-delay="200">
        <div class="step-num">03</div>
        <h4>Development</h4>
        <p>Tim kami coding website Anda dengan teknologi terbaru. Proses ini bisa dipantau statusnya melalui admin panel.</p>
      </div>
      <div class="process-arrow">&rarr;</div>
      <div class="process-step reveal" data-delay="300">
        <div class="step-num">04</div>
        <h4>Launch</h4>
        <p>Website online dan siap digunakan. Kami bantu setup domain, hosting, SSL, dan optimasi kecepatan.</p>
      </div>
    </div>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="cta-section reveal">
      <h2>Siap Memulai <span class="txt-glow">Proyek</span>?</h2>
      <p>Konsultasi gratis! Ceritakan kebutuhan Anda dan kami akan berikan solusi terbaik.</p>
      <div class="hero-actions">
        <a href="order.php" class="btn btn-primary">Pesan Sekarang &rarr;</a>
        <a href="https://wa.me/<?= e($settings['whatsapp']) ?>" class="btn btn-ghost" target="_blank">Chat WhatsApp</a>
      </div>
    </div>
  </div>
</section>

<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a href="index.php" class="brand"><div class="brand-badge">Z</div><span class="brand-name"><?= e($settings['site_name']) ?></span></a>
      <p style="color:var(--txt-3);margin-top:12px;font-size:.88rem"><?= e($settings['desc']) ?></p>
    </div>
    <div class="footer-col">
      <h4>Navigasi</h4>
      <ul>
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#tentang-web">Tentang Web</a></li>
        <li><a href="#harga">Paket Harga</a></li>
        <li><a href="order.php">Pesan Sekarang</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Kontak</h4>
      <ul>
        <li><a href="mailto:<?= e($settings['email']) ?>"><?= e($settings['email']) ?></a></li>
        <li><a href="https://wa.me/<?= e($settings['whatsapp']) ?>" target="_blank">WhatsApp</a></li>
        <li style="color:var(--txt-3)">Indonesia</li>
      </ul>
    </div>
  </div>
  <div class="container footer-bottom">
    <span>&copy; <?= date('Y') ?> <?= e($settings['site_name']) ?>. All rights reserved.</span>
    <span style="color:var(--txt-3)">Made with &#10084; in Indonesia</span>
  </div>
</footer>

<script>
document.getElementById('navToggle')?.addEventListener('click', function() {
  document.getElementById('navDesktop').classList.toggle('active');
  this.classList.toggle('open');
});
const revealEls = document.querySelectorAll('.reveal');
if ('IntersectionObserver' in window) {
  const io = new IntersectionObserver((entries) => {
    entries.forEach(en => {
      if (en.isIntersecting) {
        const d = parseInt(en.target.dataset.delay || '0', 10);
        en.target.style.transitionDelay = d + 'ms';
        en.target.classList.add('visible');
        io.unobserve(en.target);
      }
    });
  }, { threshold: 0.05 });
  revealEls.forEach(el => io.observe(el));
  setTimeout(() => {
    document.querySelectorAll('.reveal:not(.visible)').forEach(el => {
      el.style.transitionDelay = (parseInt(el.dataset.delay || '0', 10)) + 'ms';
      el.classList.add('visible');
    });
  }, 2000);
} else {
  revealEls.forEach(el => el.classList.add('visible'));
}
window.addEventListener('scroll', () => {
  document.getElementById('siteHeader').classList.toggle('scrolled', window.scrollY > 30);
});
</script>
</body>
</html>
