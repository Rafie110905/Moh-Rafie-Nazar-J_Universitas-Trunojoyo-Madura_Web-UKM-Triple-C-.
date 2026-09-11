<?php
if (!isset($page_title)) { $page_title = 'UKM Triple-C'; }
if (!isset($active)) { $active = ''; }
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title); ?> | UKM Triple-C</title>
<meta name="description" content="Creative Computer Club (Triple-C) adalah UKM Universitas Trunojoyo Madura yang bergerak di bidang teknologi informasi dan kreatif digital.">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- ============ BOOT SEQUENCE OVERLAY ============ -->
<div id="boot-overlay">
  <div class="boot-window">
    <div class="boot-titlebar">
      <span>SYSTEM_BOOT.EXE — TRIPLE-C</span>
      <span class="boot-controls"><span>_</span><span>□</span><span>×</span></span>
    </div>
    <div class="boot-body">
      <ul class="boot-log" style="list-style:none; padding:0; margin:0;">
        <li>&gt; INITIALIZING TRIPLE-C...</li>
        <li>&gt; LOADING DIVISI...</li>
        <li>&gt; MOUNTING MEMBERS: OK</li>
      </ul>
      <div class="boot-progress-row">
        <span>PROGRESS</span>
        <span class="boot-progress-pct">0%</span>
      </div>
      <div class="boot-progress-track">
        <div class="boot-progress-fill"></div>
      </div>
    </div>
  </div>
</div>

<!-- ============ NAVBAR ============ -->
<div id="scroll-sentinel"></div>
<div class="navbar-wrap">
  <nav class="navbar">
    <a href="index.php" class="navbar-logo">
      <img src="assets/img/logo-navbar.webp" alt="Triple-C Creative Computer Club" class="navbar-logo-img">
    </a>
    <ul class="navbar-menu">
      <li><a href="index.php" class="<?php echo $active === 'beranda' ? 'active' : ''; ?>">Beranda</a></li>
      <li><a href="tcc.php" class="<?php echo $active === 'tcc' ? 'active' : ''; ?>">TCC</a></li>
      <li><a href="tentang.php" class="<?php echo $active === 'tentang' ? 'active' : ''; ?>">Profil</a></li>
      <li><a href="struktur.php" class="<?php echo $active === 'struktur' ? 'active' : ''; ?>">Struktur Organisasi</a></li>
      <li><a href="proker.php" class="<?php echo $active === 'proker' ? 'active' : ''; ?>">Proker</a></li>
      <li><a href="galeri.php" class="<?php echo $active === 'galeri' ? 'active' : ''; ?>">Galeri</a></li>
      <li><a href="kontak.php" class="<?php echo $active === 'kontak' ? 'active' : ''; ?>">Hubungi Kami</a></li>
    </ul>
    <button class="navbar-toggle" aria-label="Menu">☰</button>
  </nav>
</div>