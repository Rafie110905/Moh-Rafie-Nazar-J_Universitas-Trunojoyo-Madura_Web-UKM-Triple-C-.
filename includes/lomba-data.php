<?php
/**
 * ============================================================
 * DATA LOMBA — TRUNOJOYO CREATIVE COMPETITION (TCC)
 * ============================================================
 * File ini adalah "sumber data" untuk halaman detail tiap lomba
 * (lomba-detail.php). Cukup ubah nilai di array bawah ini kalau
 * ada perubahan info (biaya, gelombang, hadiah, timeline, dsb) —
 * TIDAK perlu sentuh file lomba-detail.php.
 *
 * PENTING:
 * - Untuk Esai & Poster, nominal "Biaya Registrasi" di bawah masih
 *   PLACEHOLDER (contoh). Ganti sesuai info resmi panitia sebelum
 *   publish.
 * - status gelombang SEKARANG DIHITUNG OTOMATIS dari tanggal
 *   ('sampai') dibanding tanggal hari ini di server, pakai fungsi
 *   tcc_status_gelombang() di bawah. Tidak perlu lagi ubah
 *   'open'/'closed' secara manual — cukup isi/ubah tanggal 'sampai'
 *   tiap gelombang kalau jadwal berubah. Gelombang otomatis
 *   berstatus 'closed' begitu tanggal 'sampai' terlewati (dihitung
 *   sampai jam 23:59:59 di hari itu).
 * - Timeline & Hadiah dipakai bersama (shared) untuk 3 lomba karena
 *   satu rangkaian acara TCC. Kalau salah satu lomba punya jadwal
 *   beda, cukup override di array lomba masing-masing (lihat
 *   contoh key 'timeline' / 'hadiah' custom, boleh dihapus kalau
 *   ingin pakai default).
 * ============================================================
 */

// ------------------------------------------------------------
// STATUS GELOMBANG OTOMATIS BERDASARKAN TANGGAL
// ------------------------------------------------------------
// Dipakai di tiap gelombang di bawah: 'status' => tcc_status_gelombang('YYYY-MM-DD')
// $sampai = tanggal terakhir gelombang itu masih dibuka (format 'YYYY-MM-DD').
// Dianggap tutup begitu lewat jam 23:59:59 di tanggal tsb (WIB, sesuai timezone server).
function tcc_status_gelombang($sampai) {
  $deadline = strtotime($sampai . ' 23:59:59');
  return time() <= $deadline ? 'open' : 'closed';
}

// ------------------------------------------------------------
// TIMELINE & HADIAH DEFAULT (dipakai bersama oleh semua lomba)
// ------------------------------------------------------------
$tcc_timeline_default = [
  ['mode' => 'ONLINE',  'date' => '31 Juli — 09 Agustus 2026',    'title' => 'Pendaftaran Gelombang 1'],
  ['mode' => 'ONLINE',  'date' => '10 Agustus — 24 Agustus 2026', 'title' => 'Pendaftaran Gelombang 2'],
  ['mode' => 'ONLINE',  'date' => '25 Agustus — 20 September 2026','title' => 'Pendaftaran Gelombang 3'],
  ['mode' => 'ONLINE',  'date' => '21 — 22 September 2026',       'title' => 'Penjurian Finalis'],
  ['mode' => 'ONLINE',  'date' => '23 September 2026',            'title' => 'Pengumuman Finalis'],
  ['mode' => 'ONLINE',  'date' => '25 September 2026',            'title' => 'Technical Meeting Finalis'],
  ['mode' => 'ONLINE',  'date' => '26 September — 27 Oktober 2026','title' => 'Registrasi Ulang Finalis'],
  ['mode' => 'OFFLINE', 'date' => '31 Oktober 2026',              'title' => 'Presentasi, Seminar & Awarding'],
];

$tcc_hadiah_default = [
  ['rank' => 1, 'label' => 'JUARA 1', 'items' => ['Uang Pembinaan', 'Piala', 'Piagam', 'Medali', 'Merchandise', 'E-Sertifikat']],
  ['rank' => 2, 'label' => 'JUARA 2', 'items' => ['Uang Pembinaan', 'Piala', 'Piagam', 'Medali', 'Merchandise', 'E-Sertifikat']],
  ['rank' => 3, 'label' => 'JUARA 3', 'items' => ['Uang Pembinaan', 'Piala', 'Piagam', 'Medali', 'Merchandise', 'E-Sertifikat']],
];

// ------------------------------------------------------------
// DATA PER LOMBA
// ------------------------------------------------------------
$tcc_lomba = [

  'esai' => [
    'code'        => 'ESAI.EXE',
    'color'       => 'c-yellow',
    'title'       => 'Lomba Esai',
    'format'      => 'Individu',
    'logo'        => 'assets/img/galeri/PENGURUS-HARIAN.png', // TODO: ganti dengan logo lomba Esai
    'description' => 'Peserta membuat esai bertema inovasi digital dan kecerdasan buatan (AI) demi membentuk masa depan komunitas yang berkelanjutan.',
    'subtema'     => ['Pendidikan', 'Teknologi', 'Ekonomi', 'Pariwisata', 'Kesehatan'],
    'link_daftar'      => 'https://forms.gle/rfciMZsC8yHQU9XX6',
    'link_guidebook'   => 'assets/docs/guidebook-esai.pdf',
    'link_pengumpulan' => '#',
    // PLACEHOLDER — ganti sesuai info resmi panitia
    'gelombang' => [
      ['nama' => 'Gelombang 1', 'sampai' => '2026-08-09', 'status' => tcc_status_gelombang('2026-08-09'), 'harga' => 'Rp 25.000'],
      ['nama' => 'Gelombang 2', 'sampai' => '2026-08-24', 'status' => tcc_status_gelombang('2026-08-24'), 'harga' => 'Rp 30.000'],
      ['nama' => 'Gelombang 3', 'sampai' => '2026-09-20', 'status' => tcc_status_gelombang('2026-09-20'), 'harga' => 'Rp 35.000'],
    ],
  ],

  'vibe-code' => [
    'code'        => 'VIBE_CODE.EXE',
    'color'       => 'c-purple',
    'title'       => 'Lomba Vibe Code',
    'format'      => 'Tim',
    'logo'        => 'assets/img/galeri/TEKNOLOGI-INFORMASI.png', // TODO: ganti dengan logo lomba Vibe Code
    'description' => 'Peserta membuat website inovatif berbasis Artificial Intelligence untuk menciptakan solusi digital yang berkelanjutan demi menjawab tantangan masa depan.',
    'subtema'     => ['Pendidikan', 'Teknologi', 'Ekonomi', 'Pariwisata', 'Kesehatan'],
    'link_daftar'      => 'https://forms.gle/EpU3gEviLokfgszh9',
    'link_guidebook'   => 'assets/docs/guidebook-vibe-code.pdf',
    'link_pengumpulan' => '#',
    'gelombang' => [
      ['nama' => 'Gelombang 1', 'sampai' => '2026-08-09', 'status' => tcc_status_gelombang('2026-08-09'), 'harga' => 'Rp 35.000'],
      ['nama' => 'Gelombang 2', 'sampai' => '2026-08-24', 'status' => tcc_status_gelombang('2026-08-24'), 'harga' => 'Rp 45.000'],
      ['nama' => 'Gelombang 3', 'sampai' => '2026-09-20', 'status' => tcc_status_gelombang('2026-09-20'), 'harga' => 'Rp 50.000'],
    ],
  ],

  'poster' => [
    'code'        => 'POSTER.EXE',
    'color'       => 'c-pink',
    'title'       => 'Lomba Poster',
    'format'      => 'Individu',
    'logo'        => 'assets/img/galeri/EDUKASI.png', // TODO: ganti dengan logo lomba Poster
    'description' => 'Peserta membuat desain poster digital yang berfokus pada teknologi, budaya, dan lingkungan sebagai wadah berpikir visual generasi muda.',
    'subtema'     => ['Pendidikan', 'Teknologi', 'Ekonomi', 'Pariwisata', 'Kesehatan'],
    'link_daftar'      => 'https://forms.gle/CdQyurumV8MknAgbA',
    'link_guidebook'   => 'assets/docs/guidebook-poster.pdf',
    'link_pengumpulan' => '#',
    // PLACEHOLDER — ganti sesuai info resmi panitia
    'gelombang' => [
      ['nama' => 'Gelombang 1', 'sampai' => '2026-08-09', 'status' => tcc_status_gelombang('2026-08-09'), 'harga' => 'Rp 20.000'],
      ['nama' => 'Gelombang 2', 'sampai' => '2026-08-24', 'status' => tcc_status_gelombang('2026-08-24'), 'harga' => 'Rp 25.000'],
      ['nama' => 'Gelombang 3', 'sampai' => '2026-09-20', 'status' => tcc_status_gelombang('2026-09-20'), 'harga' => 'Rp 30.000'],
    ],
  ],

];
