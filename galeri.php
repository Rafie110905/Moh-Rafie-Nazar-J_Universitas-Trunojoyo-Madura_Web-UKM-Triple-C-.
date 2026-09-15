<?php
$page_title = 'Galeri';
$active = 'galeri';
include __DIR__ . '/includes/header.php';
?>

<section class="bg-purple scanline-bg page-hero">
  <div class="container">
    <p class="pixel-heading"><span class="chrome">GALERI</span> <span class="glow">KEGIATAN</span></p>
    <p class="breadcrumb"><a href="index.php">Home</a> » Galeri</p>
  </div>
</section>

<section class="bg-black section">
  <div class="container">
    <p class="center-block" style="color: var(--gray-text); max-width: 600px; margin: 0 auto 10px;">
      Dokumentasi momen belajar, berkumpul, dan berorganisasi bersama keluarga Triple-C.
    </p>

    <div class="gallery-grid">
      <?php
      $items = [
        ['assets/img/galeri/belajar.jpg', 'c-olive', 'Belajar Bersama'],
        ['assets/img/galeri/berkumpul.jpg', 'c-cyan', 'Berkumpul Keluarga Triple-C'],
        ['assets/img/galeri/organisasi.jpg', 'c-purple', 'Berorganisasi'],
        ['assets/img/galeri/CBT.jpg', 'c-pink', 'Struktur Kepengurusan'],
        ['assets/img/galeri/CBT2.jpg', 'c-yellow', 'TCC — Cabang Esai'],
        ['assets/img/galeri/CT one.jpg', 'c-olive', 'TCC — Cabang Vibe Code'],
        ['assets/img/galeri/kumpul.jpg', 'c-cyan', 'TCC — Cabang Poster'],
        ['assets/img/galeri/TVRI.jpg', 'c-purple', 'TCC 2025 — Grand Opening'],
      ];
      foreach ($items as $it): ?>
      <div class="gallery-item">
        <div class="gallery-bar <?php echo $it[1]; ?>">
          <span><?php echo htmlspecialchars($it[2]); ?></span>
          <span>[_][□][×]</span>
        </div>
        <div class="gallery-photo">
          <img src="<?php echo htmlspecialchars($it[0]); ?>" alt="<?php echo htmlspecialchars($it[2]); ?>" loading="lazy">
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>