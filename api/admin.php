<?php
session_start();
require __DIR__ . '/includes/admin-config.php';
require __DIR__ . '/includes/pesan-store.php';

$error = '';

// ---------- LOGOUT ----------
if (isset($_GET['logout'])) {
  unset($_SESSION['admin_logged_in']);
  header('Location: admin.php');
  exit;
}

// ---------- LOGIN ----------
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password']) && !isset($_POST['aksi'])) {
  if (password_verify($_POST['password'], ADMIN_PASSWORD_HASH)) {
    $_SESSION['admin_logged_in'] = true;
  } else {
    $error = 'Password salah.';
  }
}

$is_logged_in = !empty($_SESSION['admin_logged_in']);

// ---------- AKSI (tandai dibaca / hapus) — hanya kalau sudah login ----------
if ($is_logged_in && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['aksi']) && isset($_POST['id'])) {
  if ($_POST['aksi'] === 'dibaca') {
    tandai_dibaca($_POST['id']);
  } elseif ($_POST['aksi'] === 'hapus') {
    hapus_pesan($_POST['id']);
  }
  header('Location: admin.php');
  exit;
}

$page_title = 'Admin — Pesan Masuk';
$active = '';
include __DIR__ . '/includes/header.php';
?>

<section class="bg-purple scanline-bg page-hero">
  <div class="container">
    <p class="pixel-heading"><span class="chrome">ADMIN</span> <span class="glow">PANEL</span></p>
    <p class="breadcrumb"><a href="index.php">Home</a> » Admin</p>
  </div>
</section>

<section class="bg-black section">
  <div class="container">

    <?php if (!$is_logged_in): ?>

      <!-- ===================== FORM LOGIN ===================== -->
      <div class="exe-card" style="max-width: 420px; margin: 0 auto;">
        <div class="exe-titlebar c-purple">
          <span>ADMIN_LOGIN.EXE</span>
          <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
        </div>
        <div class="exe-body">
          <?php if ($error): ?>
            <p style="color:#c0392b; font-weight:700; margin-bottom:14px;">&gt; <?php echo htmlspecialchars($error); ?></p>
          <?php endif; ?>
          <form method="POST" action="admin.php">
            <div style="margin-bottom: 18px;">
              <label style="font-size:0.8rem; font-weight:600; display:block; margin-bottom:6px;">Password Admin</label>
              <input type="password" name="password" required autofocus
                     style="width:100%; padding:12px; border:2px solid #0A0A0A; font-family: inherit;">
            </div>
            <button type="submit" class="btn btn-solid" style="border:2px solid #0A0A0A; width:100%;">MASUK</button>
          </form>
        </div>
      </div>

    <?php else: ?>

      <!-- ===================== DAFTAR PESAN ===================== -->
      <?php
        $daftar_pesan = ambil_semua_pesan();
        $belum_dibaca = hitung_pesan_belum_dibaca();
      ?>
      <div style="text-align:center; margin-bottom: 30px;">
        <p class="pixel-heading" style="margin:0;">
          <span class="chrome">PESAN</span> <span class="glow">MASUK</span>
          <?php if ($belum_dibaca > 0): ?>
            <span style="font-family: var(--font-body); font-size:0.9rem; background:#c0392b; color:#fff; padding:4px 10px; border-radius:20px; vertical-align:middle;"><?php echo $belum_dibaca; ?> baru</span>
          <?php endif; ?>
        </p>
      </div>

      <?php if (empty($daftar_pesan)): ?>

        <div class="exe-card" style="max-width:600px; margin:0 auto;">
          <div class="exe-titlebar c-cyan">
            <span>INBOX.LOG</span>
            <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
          </div>
          <div class="exe-body" style="text-align:center;">
            <p>Belum ada pesan masuk.</p>
          </div>
        </div>

        <div class="center-block mt-lg">
          <a href="admin.php?logout=1" class="btn btn-outline">LOGOUT</a>
        </div>

      <?php else: ?>

        <div style="display:flex; flex-direction:column; gap:22px; max-width: 820px; margin: 0 auto;">
          <?php foreach ($daftar_pesan as $p): ?>
            <div class="exe-card">
              <div class="exe-titlebar <?php echo empty($p['dibaca']) ? 'c-pink' : 'c-olive'; ?>">
                <span><?php echo empty($p['dibaca']) ? 'PESAN_BARU.MSG' : 'PESAN_DIBACA.MSG'; ?></span>
                <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
              </div>
              <div class="exe-body">
                <p style="margin:0 0 6px;"><strong><?php echo htmlspecialchars($p['nama']); ?></strong> — <a href="mailto:<?php echo htmlspecialchars($p['email']); ?>"><?php echo htmlspecialchars($p['email']); ?></a></p>
                <p style="font-family:'Courier New',monospace; font-size:0.8rem; color:#666; margin:0 0 16px;"><?php echo htmlspecialchars($p['waktu']); ?></p>
                <p style="white-space:pre-wrap; border-left: 3px solid var(--green); padding-left:14px; margin:0 0 20px;"><?php echo htmlspecialchars($p['pesan']); ?></p>

                <div style="display:flex; gap:10px; flex-wrap:wrap;">
                  <?php if (empty($p['dibaca'])): ?>
                    <form method="POST" action="admin.php" style="margin:0;">
                      <input type="hidden" name="aksi" value="dibaca">
                      <input type="hidden" name="id" value="<?php echo htmlspecialchars($p['id']); ?>">
                      <button type="submit" class="btn btn-outline" style="font-size:0.65rem; padding:10px 16px;">TANDAI DIBACA</button>
                    </form>
                  <?php endif; ?>
                  <form method="POST" action="admin.php" style="margin:0;" onsubmit="return confirm('Hapus pesan ini?');">
                    <input type="hidden" name="aksi" value="hapus">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($p['id']); ?>">
                    <button type="submit" class="btn btn-outline" style="font-size:0.65rem; padding:10px 16px; border-color:#c0392b; color:#c0392b;">HAPUS</button>
                  </form>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="center-block mt-lg">
          <a href="admin.php?logout=1" class="btn btn-outline">LOGOUT</a>
        </div>

      <?php endif; ?>

    <?php endif; ?>

  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>