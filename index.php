<?php
$page_title = 'Beranda';
$active = 'beranda';
include __DIR__ . '/includes/header.php';
?>

<!-- ============ HERO ============ -->
<section class="bg-hero scanline-bg" style="padding: 70px 20px 110px;">
  <div class="container center-block">
    <span class="eyebrow-pill">UNIVERSITAS TRUNOJOYO MADURA // EST. 1999</span>
    <h1 class="hero-title-floating">UKM TRIPLE-C</h1>
    <p style="font-size: 1.15rem; color: #dfffe0; max-width: 620px; margin: 14px auto 0;">
      Creative Computer Club — UKM IT &amp; kreatif digital.
    </p>
    <p class="pixel-heading" style="margin-top: 30px;">
      <span class="glow">BELAJAR. BERKUMPUL. BERORGANISASI.</span>
    </p>
    <p style="max-width: 640px; margin: 20px auto 0; color: #cfeccf; line-height: 1.8;">
      Lebih dari dua dekade berinovasi, berkarya, dan berkembang bersama di bidang teknologi serta kreatif digital. 
      Tidak diperlukan keahlian khusus untuk bergabung cukup komitmen untuk belajar dan tumbuh bersama kami.
    </p>
    <div class="btn-row">
      <a href="tentang.php" class="btn btn-outline">TENTANG KAMI</a>
      <a href="https://jack.triplec.or.id/" target="_blank" rel="noopener" class="btn btn-solid">GABUNG SEKARANG</a>
    </div>
  </div>
</section>

<!-- ============ VIDEO PROFIL UKM ============ -->
<section class="bg-black section" style="padding-bottom: 0;">
  <div class="container">
    <div class="exe-card" style="max-width: 900px; margin: 0 auto;">
      <div class="exe-titlebar c-pink">
        <span>PROFIL_TRIPLEC.MP4</span>
        <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
      </div>
      <div class="exe-body" style="padding: 0;">
        <video
          class="video-profil"
          autoplay
          muted
          loop
          playsinline
          preload="auto"
        >
          <source src="video/profil-triplec.mp4" type="video/mp4">
          Browser kamu tidak mendukung pemutaran video HTML5.
        </video>
      </div>
    </div>
  </div>
</section>

<!-- ============ TENTANG (ringkas) ============ -->
<section class="bg-black section">
  <div class="container">
    <div class="exe-card" style="max-width: 900px; margin: 0 auto;">
      <div class="exe-titlebar c-yellow">
        <span>TENTANG_TRIPLEC.EXE</span>
        <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
      </div>
      <div class="exe-body">
        <div class="tentang-flex">
          <div class="tentang-text">
            <h2>Apa itu UKM Triple-C?</h2>
            <p>
              UKM Creative Computer Club (Triple-C) merupakan Unit Kegiatan bagi Mahasiswa
              Universitas Trunojoyo Madura yang ingin belajar, berkarya, dan berkembang di dunia
              teknologi &amp; kreatif digital. Berdiri sejak 1999, Triple-C telah menjadi tempat
              ratusan mahasiswa mengasah kemampuan sekaligus menemukan keluarga baru selama masa kuliah.
            </p>
            <p>
              Di Triple-C, kamu bisa belajar dan praktik langsung di berbagai bidang seperti
              Desain Grafis, Fotografi, Videografi, Website Development, UI/UX Design, hingga
              Writing Skill — dibimbing oleh para senior dan pengurus yang siap berbagi ilmu
              tanpa membedakan latar belakang atau kemampuan awal.
            </p>
            <p>
              Bergabung dengan Triple-C berarti kamu tidak hanya belajar ilmu IT dan kreatif,
              tapi juga menjadi bagian dari keluarga besar yang selalu bertumbuh dan memiliki
              keinginan tinggi dalam belajar, berkumpul, dan berorganisasi.
            </p>
          </div>
          <div class="tentang-mascot">
            <div class="img-slot-mascot">
              <img src="assets/img/galeri/jack.png" alt="Maskot Triple-C">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ AKTIVITAS ============ -->
<section class="bg-purple scanline-bg section">
  <div class="container">
    <p class="pixel-heading"><span class="chrome">AKTIVITAS</span> <span class="glow">KAMI</span></p>
    <p class="center-block" style="color: var(--gray-text); margin-top: 10px;">
      Tiga pilar yang membentuk keseharian anggota Triple-C.
    </p>

    <div class="exe-grid">
      <div class="exe-card">
        <div class="exe-titlebar c-olive">
          <span>BELAJAR.EXE</span>
          <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
        </div>
        <div class="exe-body">
          <div class="img-slot img-slot-activity">
            <span class="img-slot-label">assets/img/belajar.jpg</span>
            <img src="assets/img/galeri/belajar.jpg" alt="Belajar" onerror="this.style.display='none'">
          </div>
          <h3>Belajar</h3>
          <p>Berbagi ilmu dengan seluruh keluarga UKM Triple-C — belajar hal baru bersama anggota lain, tanpa canggung.</p>
        </div>
      </div>

      <div class="exe-card">
        <div class="exe-titlebar c-cyan">
          <span>BERKUMPUL.EXE</span>
          <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
        </div>
        <div class="exe-body">
          <div class="img-slot img-slot-activity">
            <span class="img-slot-label">assets/img/aktivitas/berkumpul.jpg</span>
            <img src="assets/img/galeri/berkumpul.jpg" alt="Berkumpul" onerror="this.style.display='none'">
          </div>
          <h3>Berkumpul</h3>
          <p>Berkumpul bersama-sama tanpa membedakan status, saling bersenda gurau ataupun sharing tentang kegiatan.</p>
        </div>
      </div>

      <div class="exe-card">
        <div class="exe-titlebar c-purple">
          <span>BERORGANISASI.EXE</span>
          <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
        </div>
        <div class="exe-body">
          <div class="img-slot img-slot-activity">
            <span class="img-slot-label">assets/img/aktivitas/berorganisasi.jpg</span>
            <img src="assets/img/galeri/organisasi.jpg" alt="Berorganisasi" onerror="this.style.display='none'">
          </div>
          <h3>Berorganisasi</h3>
          <p>Tempat berkumpul individu maupun sekelompok orang dengan tujuan yang sama: memajukan UKM.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ BIDANG YANG DIPELAJARI ============ -->
<section class="bg-black section">
  <div class="container">
    <p class="pixel-heading"><span class="glow">BIDANG</span> <span class="chrome">YANG DIPELAJARI</span></p>

    <div class="marquee-wrap mt-lg">
      <div class="marquee-track">
        <?php
        $bidang = [
          [
            'DESAIN_GRAFIS.EXE', 
            'c-yellow', 
            'Desain Grafis', 
            'Poster, branding, dan visual promosi dengan tools seperti Affinity Designer.',
            '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="13.5" cy="6.5" r=".5" fill="#000"/><circle cx="17.5" cy="10.5" r=".5" fill="#000"/><circle cx="8.5" cy="7.5" r=".5" fill="#000"/><circle cx="6.5" cy="12.5" r=".5" fill="#000"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.92 0 1.7-.72 1.7-1.65 0-.42-.16-.82-.44-1.12-.27-.29-.44-.69-.44-1.12 0-.92.73-1.65 1.65-1.65H16c3.31 0 6-2.69 6-6 0-4.96-4.49-9-10-9z"/></svg>'
          ],
          [
            'FOTOGRAFI.EXE', 
            'c-olive', 
            'Fotografi', 
            'Teknik pengambilan gambar untuk dokumentasi maupun karya kreatif.',
            '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>'
          ],
          [
            'VIDEOGRAFI.EXE', 
            'c-cyan', 
            'Videografi', 
            'Produksi dan editing video untuk konten maupun dokumentasi acara.',
            '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 8-6 4 6 4V8Z"/><rect width="14" height="12" x="2" y="6" rx="2" ry="2"/></svg>'
          ],
          [
            'WEB_DEV.EXE', 
            'c-purple', 
            'Website Development', 
            'Membangun dan mengembangkan situs web dari front-end hingga back-end.',
            '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>'
          ],
          [
            'UIUX.EXE', 
            'c-pink', 
            'UI/UX Design', 
            'Merancang tampilan dan pengalaman pengguna yang ramah dan fungsional.',
            '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><line x1="3" x2="21" y1="9" y2="9"/><line x1="9" x2="9" y1="21" y2="9"/></svg>'
          ],
          [
            'WRITING.EXE', 
            'c-yellow', 
            'Writing Skill', 
            'Menulis konten, artikel, dan naskah kreatif lainnya.',
            '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>'
          ],
        ];

        // Loop 4x agar animasi terhubung dengan sempurna tanpa sisa ruang kosong
        for ($rep = 0; $rep < 4; $rep++):
          foreach ($bidang as $b): ?>
            <div class="exe-card marquee-card" style="width: 300px; flex: 0 0 300px; margin-bottom: 0;" <?php echo $rep > 0 ? 'aria-hidden="true"' : ''; ?>>
              <div class="exe-titlebar <?php echo $b[1]; ?>">
                <span><?php echo $b[0]; ?></span>
                <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
              </div>
              <div class="exe-body" style="padding: 24px 20px; text-align: left;">
                <div style="margin-bottom: 14px;">
                  <?php echo $b[4]; ?>
                </div>
                <h3 style="font-size: 1.05rem; margin-bottom: 10px; font-weight: 700; color: #000;"><?php echo $b[2]; ?></h3>
                <p style="font-size: 0.85rem; color: #333; line-height: 1.6; margin: 0;"><?php echo $b[3]; ?></p>
              </div>
            </div>
          <?php endforeach;
        endfor; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============ CTA JOIN ============ -->
<section class="bg-hero scanline-bg section center-block">
  <div class="container">
    <p class="pixel-heading"><span class="glow">SEKARANG GILIRAN KAMU</span></p>
    <p class="pixel-heading" style="margin-top: 6px;"><span class="chrome">UNTUK BERGABUNG!</span></p>
    <div class="btn-row">
      <a href="https://jack.triplec.or.id/" target="_blank" rel="noopener" class="btn btn-solid">JOIN TRIPLE-C</a>
      <a href="kontak.php" class="btn btn-outline">HUBUNGI KAMI</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>