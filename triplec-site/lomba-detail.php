<?php
require __DIR__ . '/includes/lomba-data.php';
require __DIR__ . '/includes/lomba-logos.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
if (!isset($tcc_lomba[$slug])) {
  header('Location: tcc.php');
  exit;
}

$lomba    = $tcc_lomba[$slug];
$timeline = isset($lomba['timeline']) ? $lomba['timeline'] : $tcc_timeline_default;
$hadiah   = isset($lomba['hadiah']) ? $lomba['hadiah'] : $tcc_hadiah_default;

$page_title = $lomba['title'];
$active = 'tcc';
include __DIR__ . '/includes/header.php';
?>

<section class="bg-purple scanline-bg page-hero">
  <div class="container">
    <p class="pixel-heading"><span class="chrome"><?php echo strtoupper(explode(' ', $lomba['title'])[0]); ?></span> <span class="glow"><?php echo strtoupper(implode(' ', array_slice(explode(' ', $lomba['title']), 1))); ?></span></p>
    <p class="breadcrumb"><a href="index.php">Home</a> » <a href="tcc.php">TCC</a> » <?php echo htmlspecialchars($lomba['title']); ?></p>
  </div>
</section>

<section class="bg-black section">
  <div class="container">

    <!-- ===================== ABOUT / OVERVIEW ===================== -->
    <div class="exe-card" style="max-width: 900px; margin: 0 auto;">
      <div class="exe-titlebar <?php echo $lomba['color']; ?>">
        <span><?php echo $lomba['code']; ?></span>
        <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
      </div>
      <div class="exe-body" style="text-align:center;">
        <?php echo tcc_lomba_logo($slug); ?>
        <h2 style="margin-bottom:6px;"><?php echo htmlspecialchars($lomba['title']); ?></h2>
        <p class="eyebrow-pill" style="color:#000; border-color:rgba(0,0,0,0.2);">Format: <?php echo htmlspecialchars($lomba['format']); ?></p>
        <p style="max-width:60ch; margin:14px auto;"><?php echo htmlspecialchars($lomba['description']); ?></p>

        <?php if (!empty($lomba['subtema'])): ?>
        <p style="font-weight:800; margin-bottom:8px;">Subtema:</p>
        <ul class="log-list" style="text-align:left; max-width:420px; margin:0 auto 10px;">
          <?php foreach ($lomba['subtema'] as $s): ?>
            <li><?php echo htmlspecialchars($s); ?></li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        <div class="btn-row" style="margin-top:26px;">
          <a href="<?php echo htmlspecialchars($lomba['link_daftar']); ?>" target="_blank" rel="noopener" class="btn btn-solid">DAFTAR</a>
          <a href="<?php echo htmlspecialchars($lomba['link_guidebook']); ?>" target="_blank" rel="noopener" class="btn btn-outline">GUIDEBOOK</a>
        </div>
      </div>
    </div>

    <!-- ===================== BIAYA REGISTRASI ===================== -->
    <p class="pixel-heading detail-section-title"><span class="chrome">BIAYA</span> <span class="glow">REGISTRASI</span></p>
    <div class="wave-grid">
      <?php foreach ($lomba['gelombang'] as $i => $g):
        $bar = ['c-yellow', 'c-cyan', 'c-olive'][$i % 3];
        $isOpen = $g['status'] === 'open';
      ?>
      <div class="exe-card wave-card">
        <div class="exe-titlebar <?php echo $bar; ?>">
          <span><?php echo strtoupper(str_replace(' ', '_', $g['nama'])); ?></span>
          <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
        </div>
        <div class="exe-body">
          <span class="wave-status <?php echo $isOpen ? 'is-open' : 'is-closed'; ?>">
            <?php echo $isOpen ? 'OPEN' : 'CLOSED'; ?>
          </span>
          <p class="wave-price"><?php echo htmlspecialchars($g['harga']); ?><span>/ <?php echo htmlspecialchars($lomba['format']); ?></span></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- ===================== HADIAH ===================== -->
    <p class="pixel-heading detail-section-title"><span class="chrome">HADIAH</span> <span class="glow">&amp; APRESIASI</span></p>
    <div class="prize-grid">
      <?php foreach ($hadiah as $h): ?>
      <div class="exe-card prize-card">
        <div class="exe-titlebar c-yellow">
          <span><?php echo $h['label']; ?>.LOG</span>
          <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
        </div>
        <div class="exe-body">
          <div class="prize-rank r<?php echo $h['rank']; ?>">#<?php echo $h['rank']; ?></div>
          <h3><?php echo $h['label']; ?></h3>
          <ul class="prize-list">
            <?php foreach ($h['items'] as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- ===================== TIMELINE ===================== -->
    <p class="pixel-heading detail-section-title"><span class="chrome">TIME</span><span class="glow">LINE</span></p>
    <div class="exe-card" style="max-width: 780px; margin: 36px auto 0;">
      <div class="exe-titlebar c-cyan">
        <span>JADWAL_TCC.LOG</span>
        <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
      </div>
      <div class="exe-body">
        <div class="timeline-list">
          <?php foreach ($timeline as $t): ?>
          <div class="timeline-item">
            <span class="timeline-dot"></span>
            <span class="timeline-mode"><?php echo htmlspecialchars($t['mode']); ?></span>
            <p class="timeline-date"><?php echo htmlspecialchars($t['date']); ?></p>
            <p class="timeline-title"><?php echo htmlspecialchars($t['title']); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- ===================== CTA BAWAH ===================== -->
    <div class="center-block mt-lg">
      <div class="btn-row">
        <a href="<?php echo htmlspecialchars($lomba['link_daftar']); ?>" target="_blank" rel="noopener" class="btn btn-solid">DAFTAR SEKARANG</a>
        <a href="tcc.php" class="btn btn-outline">« KEMBALI KE TCC</a>
      </div>
    </div>

  </div>
</section>

<?php include __DIR__ . '/includes/tcc-chat-widget.php'; ?>
<?php include __DIR__ . '/includes/footer.php'; ?>