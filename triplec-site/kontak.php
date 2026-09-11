<?php
require __DIR__ . '/includes/pesan-store.php';

$page_title = 'Hubungi Kami';
$active = 'kontak';
include __DIR__ . '/includes/header.php';

$sent = false;
$gagal = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama  = trim($_POST['nama'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $pesan = trim($_POST['pesan'] ?? '');

  if ($nama !== '' && $email !== '' && $pesan !== '') {
    $sent = simpan_pesan($nama, $email, $pesan);
    $gagal = !$sent;
  } else {
    $gagal = true;
  }
}
?>

<section class="bg-purple scanline-bg page-hero">
  <div class="container">
    <p class="pixel-heading"><span class="chrome">HUBUNGI</span> <span class="glow">KAMI</span></p>
    <p class="breadcrumb"><a href="index.php">Home</a> » Hubungi Kami</p>
  </div>
</section>

<section class="bg-black section">
  <div class="container two-col">

    <div class="terminal-block">
      <div><span class="prompt">$</span> whoami</div>
      <div>Unit Kegiatan Mahasiswa Creative Computer Club</div>
      <div>Universitas Trunojoyo Madura</div>
      <br>
      <div><span class="prompt">&gt;</span> address --lokasi</div>
      <div>Jl. Raya Telang, Kec. Kamal,<br>Bangkalan, Madura 69162, Indonesia</div>
      <br>
      <div><span class="prompt">&gt;</span> contact --telepon <span style="color:#fff;">+62 857-0817-8332</span></div>
      <div><span class="prompt">&gt;</span> contact --email <span style="color:#fff;">halo@triplec.or.id</span></div>

      <div class="social-row">
        <a href="https://twitter.com/ukmtriplec1" target="_blank" rel="noopener" aria-label="Twitter">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
        </a>
        <a href="https://www.facebook.com/CreativeComputerClub" target="_blank" rel="noopener" aria-label="Facebook">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="18" height="18"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
        </a>
        <a href="https://www.instagram.com/ukmtriplec/" target="_blank" rel="noopener" aria-label="Instagram">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="18" height="18"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
        </a>
        <a href="https://www.youtube.com/@ukmtriple-c5592" target="_blank" rel="noopener" aria-label="Youtube">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="18" height="18"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.56 49.56 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><polygon points="10 15 15 12 10 9 10 15"/></svg>
        </a>
        <a href="https://www.tiktok.com/@ukm.triplec_official" target="_blank" rel="noopener" aria-label="Tiktok">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 1 1-5.2-1.74 2.89 2.89 0 0 1 2.31-1.28 2.8 2.8 0 0 1 .53.05V9.21a6.34 6.34 0 0 0-.58-.03 6.34 6.34 0 1 0 6.34 6.34V9.2a8.16 8.16 0 0 0 4.82 1.56V7.32a4.85 4.85 0 0 1-1.00-.63z"/></svg>
        </a>
        <a href="http://wa.me/+6285708178332" target="_blank" rel="noopener" aria-label="WhatsApp">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.46 1.32 4.96L2.05 22l5.25-1.38a9.87 9.87 0 0 0 4.74 1.21h.01c5.46 0 9.9-4.45 9.9-9.91C21.96 6.45 17.5 2 12.04 2zm5.79 14.14c-.24.68-1.4 1.3-1.93 1.38-.49.08-1.11.11-1.79-.11-.41-.13-.94-.3-1.62-.6-2.86-1.24-4.72-4.12-4.86-4.31-.14-.19-1.16-1.55-1.16-2.96s.73-2.09 1-2.38c.26-.28.57-.35.76-.35.19 0 .38 0 .54.01.17.01.41-.06.64.49.24.57.81 1.99.88 2.13.07.14.11.31.02.5-.09.19-.14.31-.28.48-.14.17-.29.37-.42.5-.14.14-.28.29-.12.57.16.28.71 1.17 1.53 1.9 1.05.94 1.94 1.23 2.22 1.37.28.14.44.12.61-.07.17-.19.71-.83.9-1.11.19-.28.38-.23.63-.14.26.09 1.65.78 1.93.92.28.14.47.21.54.33.07.12.07.68-.17 1.36z"/></svg>
        </a>
      </div>
    </div>

    <div class="exe-card">
      <div class="exe-titlebar c-cyan">
        <span>CONTACT_FORM.EXE</span>
        <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
      </div>
      <div class="exe-body">
        <?php if ($sent): ?>
          <p style="color: #1a7d1a; font-weight: 700;">&gt; PESAN TERKIRIM. Terima kasih, kami akan segera membalas.</p>
        <?php elseif ($gagal): ?>
          <p style="color: #c0392b; font-weight: 700;">&gt; Gagal mengirim. Pastikan semua kolom terisi, lalu coba lagi.</p>
        <?php endif; ?>
        <form method="POST" action="kontak.php">
          <div style="margin-bottom: 16px;">
            <label style="font-size:0.8rem; font-weight:600; display:block; margin-bottom:6px;">Nama</label>
            <input type="text" name="nama" required value="<?php echo $gagal ? htmlspecialchars($_POST['nama'] ?? '') : ''; ?>" style="width:100%; padding:12px; border:2px solid #0A0A0A; font-family: inherit;">
          </div>
          <div style="margin-bottom: 16px;">
            <label style="font-size:0.8rem; font-weight:600; display:block; margin-bottom:6px;">Email</label>
            <input type="email" name="email" required value="<?php echo $gagal ? htmlspecialchars($_POST['email'] ?? '') : ''; ?>" style="width:100%; padding:12px; border:2px solid #0A0A0A; font-family: inherit;">
          </div>
          <div style="margin-bottom: 20px;">
            <label style="font-size:0.8rem; font-weight:600; display:block; margin-bottom:6px;">Pesan</label>
            <textarea name="pesan" rows="5" required style="width:100%; padding:12px; border:2px solid #0A0A0A; font-family: inherit;"><?php echo $gagal ? htmlspecialchars($_POST['pesan'] ?? '') : ''; ?></textarea>
          </div>
          <button type="submit" class="btn btn-solid" style="border:2px solid #0A0A0A;">KIRIM PESAN</button>
        </form>
      </div>
    </div>

  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>