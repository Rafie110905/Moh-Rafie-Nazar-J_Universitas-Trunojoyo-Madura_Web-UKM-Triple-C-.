<?php
// ============================================================
// KONFIGURASI PENGUMUMAN / BROADCAST — HALAMAN TCC
// ============================================================
// Cara pakai:
// 1. Ganti isi array di bawah untuk update pengumuman.
// 2. WAJIB ganti nilai 'id' setiap kali bikin pengumuman BARU
//    (misal 'tcc-2026-01' -> 'tcc-2026-02'). Kalau id-nya sama
//    kayak sebelumnya, pengunjung yang sudah pernah nutup
//    pengumuman lama TIDAK akan lihat pengumuman baru ini.
// 3. Set 'enabled' => false untuk mematikan pengumuman sama sekali.
// 4. 'color' pilihannya: c-yellow, c-purple, c-olive, c-cyan, c-pink
//    (warna titlebar jendela, sama kayak yang dipakai di Proker).
// ============================================================

return [
  'enabled'     => true,
  'id'          => 'tcc-2026-01',
  'color'       => 'c-pink',
  'title'       => "THAT'S A WRAP!",

  // Tiap baris di array ini akan jadi 1 paragraf terpisah.
  'paragraphs'  => [
    'Setelah melalui rangkaian acara, persiapan, tantangan, dan momen seru bersama, akhirnya seluruh rangkaian Trunojoyo Creative Competition 2026 resmi berakhir!',
    'Terima kasih kepada seluruh peserta, panitia, dewan juri, narasumber, partner, dan semua pihak yang telah menjadi bagian dari perjalanan ini.',
  ],

  'button_text' => 'CEK PEMENANG',
  'button_link' => '#', // ganti ke link/halaman pengumuman pemenang
];
