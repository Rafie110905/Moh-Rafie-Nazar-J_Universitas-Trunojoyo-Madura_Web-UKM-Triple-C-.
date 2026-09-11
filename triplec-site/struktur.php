<?php
$page_title = 'Struktur Organisasi';
$active = 'struktur';
include __DIR__ . '/includes/header.php';
?>

<section class="bg-purple scanline-bg page-hero">
  <div class="container">
    <p class="pixel-heading"><span class="chrome">STRUKTUR</span> <span class="glow">ORGANISASI</span></p>
    <p class="breadcrumb"><a href="index.php">Home</a> » Struktur Organisasi</p>
  </div>
</section>

<section class="bg-black section">
  <div class="container">
    <div class="exe-card" style="max-width: 1000px; margin: 0 auto;">
      <div class="exe-titlebar c-purple">
        <span>STRUKTUR_ORG.EXE</span>
        <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
      </div>
      <div class="exe-body">
        <div class="org-image-wrap" style="text-align: center; padding: 10px;">
          <img src="<?php echo str_replace(' ', '%20', 'assets/img/galeri/Struktur Kepengurusan.jpg'); ?>" alt="Struktur Kepengurusan" style="width: 100%; height: auto; max-width: 100%; display: block; border: 1px solid #444;" />
        </div>
      </div>
    </div>

    <!-- Kartu divisi dibuat bergerak seperti marquee di index.php -->
    <div class="marquee-wrap mt-lg">
      <div class="marquee-track">
        <?php
        $divisi = [
          ['#cfe9ff', 'assets/img/galeri/POSDM.png', 'POSDM', 'Pengembangan Organisasi & Sumber Daya Manusia — kaderisasi dan upgrading anggota.'],
          ['#ffd7ec', 'assets/img/galeri/HUMAS-INFOKOM.png', 'HUMAS & INFOKOM', 'Publikasi lembaga dan pengelolaan sosial media Triple-C.'],
          ['#d8ffd0', 'assets/img/galeri/EDUKASI.png', 'EDUKASI', 'Kurikulum pelatihan dan kegiatan akademis anggota.'],
          ['#fff3c4', 'assets/img/galeri/TEKNOLOGI-INFORMASI.png', 'TEKNOLOGI INFORMASI', 'Sistem, database anggota, dan infrastruktur IT Triple-C.'],
          ['#e4d6ff', 'assets/img/galeri/INVENSU.png', 'INVENTARIS & USAHA', 'Dokumentasi aset dan pengembangan unit usaha organisasi.'],
        ];

        // Render dua kali agar marquee dapat bergerak seamless seperti index.php.
        for ($rep = 0; $rep < 2; $rep++):
          foreach ($divisi as $d): ?>
            <div class="profile-card marquee-card" <?php echo $rep === 1 ? 'aria-hidden="true"' : ''; ?>>
              <div class="profile-blob" style="background:<?php echo $d[0]; ?>;"></div>
              <div class="profile-avatar">
                <img src="<?php echo htmlspecialchars($d[1]); ?>" alt="Logo <?php echo htmlspecialchars($d[2]); ?>" class="exe-logo">
              </div>
              <h4><?php echo $d[2]; ?></h4>
              <p><?php echo $d[3]; ?></p>
            </div>
          <?php endforeach;
        endfor; ?>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>