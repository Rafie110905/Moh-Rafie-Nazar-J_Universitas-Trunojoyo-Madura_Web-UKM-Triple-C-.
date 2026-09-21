<?php
require __DIR__ . '/includes/pemenang-data.php';

$page_title = 'Pemenang TCC 2026';
$active = 'tcc';
include __DIR__ . '/includes/header.php';

// Cek apakah SEMUA lomba masih kosong (belum ada pemenang sama sekali)
$semua_kosong = true;
foreach ($tcc_pemenang as $lomba) {
  if (!empty($lomba['juara'][1]['nama'])) {
    $semua_kosong = false;
    break;
  }
}
?>

<section class="bg-purple scanline-bg page-hero">
  <div class="container">
    <p class="pixel-heading"><span class="chrome">PEMENANG</span> <span class="glow">TCC 2026</span></p>
    <p class="breadcrumb"><a href="index.php">Home</a> » <a href="tcc.php">TCC</a> » Pemenang</p>
  </div>
</section>

<section class="bg-black section">
  <div class="container">

    <?php if ($semua_kosong): ?>

      <!-- ===================== COMING SOON ===================== -->
      <div class="exe-card" style="max-width: 640px; margin: 0 auto;">
        <div class="exe-titlebar c-pink">
          <span>PEMENANG.EXE</span>
          <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
        </div>
        <div class="exe-body" style="text-align:center;">
          <h3 style="margin-bottom:10px;">Coming Soon</h3>
          <p style="margin-bottom:0;">
            Pengumuman pemenang TCC 2026 masih dalam proses penjurian.
            Pantau terus halaman ini &amp; media sosial kami — hasilnya akan segera diumumkan!
          </p>
        </div>
      </div>

      <div class="center-block mt-lg">
        <a href="tcc.php" class="btn btn-outline">« KEMBALI KE TCC</a>
      </div>

    <?php else: ?>

      <!-- ===================== PODIUM PEMENANG ===================== -->
      <?php foreach ($tcc_pemenang as $slug => $lomba): ?>
        <?php if (empty($lomba['juara'][1]['nama'])) continue; ?>

        <p class="pixel-heading detail-section-title">
          <span class="chrome"><?php echo strtoupper(explode(' ', $lomba['title'])[0]); ?></span>
          <span class="glow"><?php echo strtoupper(implode(' ', array_slice(explode(' ', $lomba['title']), 1))); ?></span>
        </p>

        <div class="prize-grid">
          <?php foreach ([1, 2, 3] as $rank):
            $j = $lomba['juara'][$rank];
            if (empty($j['nama'])) continue;
          ?>
            <div class="exe-card prize-card">
              <div class="exe-titlebar <?php echo $lomba['color']; ?>">
                <span>JUARA_<?php echo $rank; ?>.LOG</span>
                <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
              </div>
              <div class="exe-body">
                <div class="prize-rank r<?php echo $rank; ?>">#<?php echo $rank; ?></div>
                <h3><?php echo htmlspecialchars($j['nama']); ?></h3>
                <?php if (!empty($j['instansi'])): ?>
                  <p style="font-size:0.8rem; color:#666; margin-bottom:10px;"><?php echo htmlspecialchars($j['instansi']); ?></p>
                <?php endif; ?>
                <?php if (!empty($j['karya'])): ?>
                  <p style="font-size:0.85rem; font-style:italic; margin:0;">"<?php echo htmlspecialchars($j['karya']); ?>"</p>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>

      <div class="center-block mt-lg">
        <a href="tcc.php" class="btn btn-outline">« KEMBALI KE TCC</a>
      </div>

    <?php endif; ?>

  </div>
</section>

<?php include __DIR__ . '/includes/tcc-chat-widget.php'; ?>
<?php include __DIR__ . '/includes/footer.php'; ?>
