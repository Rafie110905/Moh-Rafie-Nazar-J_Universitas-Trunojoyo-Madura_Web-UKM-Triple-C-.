<?php
$page_title = 'Profil';
$active = 'tentang';
include __DIR__ . '/includes/header.php';
?>

<section class="bg-purple scanline-bg page-hero">
  <div class="container">
    <p class="pixel-heading"><span class="chrome">PROFIL</span> <span class="glow">TRIPLE-C</span></p>
    <p class="breadcrumb"><a href="index.php">Home</a> » Profil</p>
  </div>
</section>

<!-- ============ SEJARAH ============ -->
<section class="bg-black section" id="sejarah">
  <div class="container">
    <div class="exe-card" style="max-width: 900px; margin: 0 auto 60px;">
      <div class="exe-titlebar c-yellow">
        <span>SEJARAH_TRIPLEC.EXE</span>
        <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
      </div>
      <div class="exe-body">
        <h2>Sejarah</h2>
        <p>
          Unit Kegiatan Mahasiswa Creative Computer Club (Triple-C) Keluarga Mahasiswa
          Universitas Trunojoyo Madura didirikan pada tanggal 26 April 1999, saat kampus ini
          masih bernama Universitas Bangkalan.
        </p>
        <p>
          Triple-C berfungsi sebagai wadah gerak mahasiswa Universitas Trunojoyo Madura di
          bidang informasi dan teknologi — khususnya komputer — yang bermanfaat bagi diri
          sendiri, agama, masyarakat, terutama bagi nusa dan bangsa.
        </p>
        <p>
          UKM Triple-C memiliki motto: <em>"Kritis dalam berfikir, loyal dalam berorganisasi,
          kreatif dalam berkarya, dan totalitas dalam bekerja."</em>
        </p>
        <h3 style="margin-top: 30px;">Tujuan</h3>
        <ul style="line-height: 1.9; padding-left: 20px;">
          <li>Menghimpun dan membina anggotanya.</li>
          <li>Mendorong dan memfasilitasi anggota untuk menerapkan dan mengembangkan ilmu di bidang IT.</li>
          <li>Mengkoordinir kegiatan kemahasiswaan yang bergerak di bidang teknologi komputer.</li>
          <li>Menyumbangkan karya dan pikiran dalam hal IT di kehidupan kampus dan masyarakat luas.</li>
        </ul>
      </div>
    </div>

    <!-- ============ VISI MISI ============ -->
    <div class="exe-card" style="max-width: 900px; margin: 0 auto 60px;" id="visi-misi">
      <div class="exe-titlebar c-cyan">
        <span>VISI_MISI.EXE</span>
        <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
      </div>
      <div class="exe-body">
        <h2>Visi</h2>
        <p>
          "Menjadikan UKM Triple-C sebagai wadah pengembangan hard skill dan soft skill di
          bidang teknologi yang progresif, inklusif, serta mampu memberikan dampak positif
          bagi anggota dan masyarakat luas."
        </p>
        <h3 style="margin-top: 30px;">Misi</h3>
        <ol style="line-height: 1.9; padding-left: 20px;">
          <li>Meningkatkan kualitas elemen Triple-C dalam bidang teknologi agar memiliki kompetensi dan daya saing.</li>
          <li>Membangun tata kelola organisasi yang komunikatif, transparan, dan terbuka.</li>
          <li>Mendorong kolaborasi dan kemitraan strategis guna penguatan eksistensi dan keberlanjutan organisasi.</li>
          <li>Berperan aktif dalam pengembangan dan pemanfaatan teknologi di bidang pendidikan, sosial, dan masyarakat.</li>
          <li>Membina dan merawat anggota guna terciptanya generasi penerus yang loyal, kreatif, dan berkarakter.</li>
          <li>Mendorong budaya prestasi melalui kompetisi, inovasi, dan karya.</li>
        </ol>
      </div>
    </div>

    <!-- ============ TUPOKSI (KARTU DIAM, FOTO KIRI + TEKS KANAN) ============ -->
    <div id="tupoksi">
      <p class="pixel-heading"><span class="glow">TUPOKSI</span></p>
      <p class="center-block" style="color: var(--gray-text); margin-top: 10px;">
        Tugas Pokok dan Fungsi pengurus harian & divisi.
      </p>

      <div class="tupoksi-list mt-lg">
        <?php
        $tupoksi = [
          [
            'KETUA_UMUM.EXE', 'c-yellow', 'assets/img/galeri/Harian.jpg', 'Ketua Umum',
            'Bertanggung jawab penuh terhadap aktivitas dan kinerja UKM Triple-C Universitas Trunojoyo Madura selama satu MASA CREATIVE kepengurusan, diantaranya sebagai berikut:',
            [
              'Sebagai koordinator kebijakan UKM Triple-C, baik internal maupun eksternal.',
              'Melakukan Pengawalan Issue/Wacana sosial-politik.',
              'Menjalankan fungsi kepemimpinan lembaga kemahasiswaan di tingkat Universitas.',
              'Memberikan pengarahan dan pendampingan dalam berjalannya roda organisasi.',
              'Membuat kebijakan strategis UKM Triple-C UTM.',
              'Mengawasi dan mengkoordinasikan rencana strategis UKM Triple-C UTM.',
            ],
          ],
          [
            'WAKIL_KETUA.EXE', 'c-olive', 'assets/img/galeri/Harian.jpg', 'Wakil Ketua Umum',
            'Bertanggung jawab penuh membantu Ketua selama satu MASA CREATIVE kepengurusan serta berwenang dalam membantu menjalankan roda organisasi UKM Triple-C UTM, diantaranya sebagai berikut:',
            [
              'Menjalankan roda koordinasi dan komunikasi antar organ/perangkat kelembagaan UKM Triple-C UTM dalam bidang keorganisasian.',
              'Melakukan pemantauan dan pendampingan pelaksanaan kegiatan UKM Triple-C UTM dalam bidang keorganisasian.',
              'Membantu pelaksanaan fungsi dan tugas Ketua apabila berhalangan.',
            ],
          ],
          [
            'SEKRETARIS.EXE', 'c-cyan', 'assets/img/galeri/Harian.jpg', 'Sekretaris Umum',
            'Bertanggung jawab penuh terhadap aspek administrasi kesekretariatan organisasi meliputi berkas surat, peraturan, izin, dan dokumentasi arsip lainnya. Diantaranya sebagai berikut:',
            [
              'Melakukan pendataan surat (dokumen) masuk dan keluar kelembagaan UKM Triple-C UTM.',
              'Membuat dan menyusun surat kelembagaan UKM Triple-C UTM dan penjadwalan kegiatan (Ketua).',
              'Bertanggung jawab penuh terhadap pengelolaan fasilitas dan sarana serta melakukan inventarisasi aset yang dimiliki UKM Triple-C UTM.',
              'Melakukan penyusunan dan penggunaan aset kelembagaan UKM Triple-C UTM.',
              'Melakukan penyusunan jadwal kegiatan kelembagaan UKM Triple-C UTM dalam setiap periodenya.',
              'Bertanggung jawab dan mendampingi pembuatan proposal dan laporan pertanggung jawaban setiap kegiatan.',
            ],
          ],
          [
            'BENDAHARA.EXE', 'c-pink', 'assets/img/galeri/Harian.jpg', 'Bendahara Umum',
            'Bertanggung jawab terhadap alur dan mekanisme administratif keuangan UKM Triple-C UTM, diantaranya sebagai berikut:',
            [
              'Melakukan pengajuan anggaran kemahasiswaan terhadap Birokrat.',
              'Melakukan pengelolaan keuangan (penerimaan dan pemasukan) lembaga UKM Triple-C UTM.',
              'Menyusun rencana anggaran belanja (RAB).',
              'Bertanggung jawab penuh terhadap pengawasan dan pengelolaan keuangan setiap divisi.',
              'Bertanggung jawab dan mendampingi pembuatan laporan keuangan setiap kegiatan.',
              'Menyimpan dan mengeluarkan uang demi kebutuhan organisasi.',
            ],
          ],
          [
            'POSDM.EXE', 'c-purple', 'assets/img/galeri/PO.jpg', 'POSDM (Pengembangan Organisasi dan Sumber Daya Manusia)',
            'Bertanggung jawab penuh terhadap penyelenggaraan kegiatan berbasis pengembangan Sumber Daya Manusia termasuk proses kaderisasi dan upgrading anggota UKM Triple-C UTM. Diantaranya sebagai berikut:',
            [
              'Melakukan kegiatan peningkatan aspek kemampuan berorganisasi, kepemimpinan, dan komunikasi bagi anggota, guna penyiapan kepemimpinan lembaga mendatang.',
              'Melakukan pelaksanaan dan pengawalan proses kaderisasi kelembagaan UKM Triple-C UTM.',
              'Melakukan kegiatan penerimaan anggota baru pada setiap masa creative-nya.',
              'Melakukan diklat lanjutan anggota muda sebagai persiapan kaderisasi pengurus untuk periode mendatang.',
              'Menjadi pelopor solidaritas dan rasa kekeluargaan antar anggota.',
            ],
          ],
          [
            'EDUKASI.EXE', 'c-yellow', 'assets/img/galeri/Edu.jpg', 'Edukasi',
            'Bertanggung jawab penuh terhadap penyelenggaraan kegiatan berbasis pengembangan pengetahuan yang dibutuhkan oleh Sumber Daya Manusia UKM Triple-C untuk selalu mengikuti perkembangan IT di kampus khususnya dan masyarakat pada umumnya. Diantaranya sebagai berikut:',
            [
              'Bersama-sama pengurus harian dan tim creative mengembangkan kurikulum pendidikan yang dibutuhkan oleh SDM UKM Triple-C.',
              'Bersama-sama pengurus harian dan tim creative mencetak prestasi, baik di bidang akademik maupun non akademik.',
              'Melakukan pelatihan rutin sesuai kurikulum yang telah disusun kepada semua anggota Triple-C.',
              'Mencermati, menanggapi, mengkaji, merespon, dan menjawab situasi/kondisi terkait kebutuhan intelegensi anggota Triple-C.',
              'Menjalankan kegiatan yang bergerak di bidang akademis yang berkaitan dengan Teknologi.',
              'Melakukan pelatihan softskill dan hardskill bagi anggota Triple-C atau masyarakat umum khususnya di bidang Teknologi Informasi.',
              'Melanjutkan setiap kegiatan berbasis edukasi sebagai referensi kegiatan edukasi secara berkesinambungan.',
            ],
          ],
          [
            'HUMAS_INFOKOM.EXE', 'c-olive', 'assets/img/galeri/Humas.jpg', 'HI (Humas dan Infokom)',
            'Bertanggung jawab penuh melakukan publikasi (pencitraan) lembaga UKM Triple-C, memiliki akses dalam memberikan suara di depan publik, dan pengelolaan serta perawatan sosial media UKM Triple-C. Diantaranya sebagai berikut:',
            [
              'Melakukan pencitraan dan penyampaian pesan sikap UKM Triple-C terkait kepentingan UKM Triple-C sebagai representasi anggota, mahasiswa, dan masyarakat luas.',
              'Melakukan kerja sama dan membangun jaringan dengan lembaga-lembaga di dalam dan di luar kampus, baik lembaga kemahasiswaan maupun instansi lainnya.',
              'Melakukan kegiatan-kegiatan yang langsung bersentuhan dengan masyarakat secara luas.',
              'Membuat, mengembangkan, dan merawat pembaruan informasi di sosial media yang dimiliki UKM Triple-C.',
            ],
          ],
          [
            'DIVISI_TI.EXE', 'c-cyan', 'assets/img/galeri/TI.jpg', 'TI (Teknologi Informasi)',
            'Bertanggung jawab penuh melakukan pengelolaan dan perawatan segala hal yang berkaitan dengan IT UKM Triple-C. Diantaranya yaitu:',
            [
              'Mengembangkan dan memelihara software Database Semua Anggota Triple-C.',
              'Membuat dan menyediakan kebutuhan (software & hardware) yang dibutuhkan oleh UKM Triple-C.',
              'Menjalankan kegiatan di Bidang Teknologi Informasi.',
              'Mengelola serta merawat komputer dan jaringan yang ada di ruangan kesekretariatan.',
              'Mengembangkan Sistem Informasi Administrasi dan web UKM Triple-C.',
              'Menghasilkan produk dalam bidang IT.',
            ],
          ],
          [
            'INVENSU.EXE', 'c-pink', 'assets/img/galeri/Inven.jpg', 'INVENSU (Inventaris dan Usaha)',
            'Bertanggung jawab melakukan proses dokumentasi terhadap inventaris yang ada sebelum dan sesudah masa jabatannya, serta mengembangkan dunia usaha yang ada di Triple-C. Diantaranya yaitu:',
            [
              'Melakukan kegiatan pendokumentasian atau pencatatan terhadap inventaris yang ada, inventaris yang masuk, serta inventaris yang keluar.',
              'Melakukan penataan dan perawatan semua inventaris yang ada di UKM Triple-C.',
              'Melakukan kegiatan usaha sebagai bentuk kreativitas bersama yang dapat menambah pemasukan bagi kas UKM Triple-C.',
              'Melakukan pengadaan barang atau hardware yang dibutuhkan UKM Triple-C.',
            ],
          ],
        ];
        foreach ($tupoksi as $t): ?>
        <div class="exe-card tupoksi-card">
          <div class="exe-titlebar <?php echo $t[1]; ?>">
            <span><?php echo $t[0]; ?></span>
            <span class="exe-controls"><span>_</span><span>□</span><span>×</span></span>
          </div>
          <div class="exe-body tupoksi-body">
            <div class="tupoksi-photo">
              <img src="<?php echo $t[2]; ?>" alt="<?php echo htmlspecialchars($t[3]); ?>" onerror="this.style.display='none'">
            </div>
            <div class="tupoksi-text">
              <h3><?php echo htmlspecialchars($t[3]); ?></h3>
              <p><?php echo htmlspecialchars($t[4]); ?></p>
              <ul>
                <?php foreach ($t[5] as $poin): ?>
                <li><?php echo htmlspecialchars($poin); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>