<?php
/**
 * ============================================================
 * PENYIMPANAN PESAN — FORM KONTAK
 * ============================================================
 * Pesan dari kontak.php disimpan sebagai JSON file di
 * /data/pesan-masuk.json (bukan email, bukan database).
 * Admin bisa lihat & kelola via admin.php.
 *
 * Kalau nanti mau upgrade ke email/DB, cukup ubah isi fungsi
 * simpan_pesan() di bawah — bagian lain situs tidak perlu diubah.
 * ============================================================
 */

define('PESAN_FILE', __DIR__ . '/../data/pesan-masuk.json');

/**
 * Pastikan folder & file data ada. Dipanggil otomatis oleh
 * fungsi lain di file ini.
 */
function pesan_pastikan_file() {
  $dir = dirname(PESAN_FILE);
  if (!is_dir($dir)) {
    @mkdir($dir, 0755, true);
  }
  if (!file_exists(PESAN_FILE)) {
    @file_put_contents(PESAN_FILE, json_encode([]));
  }
}

/**
 * Simpan satu pesan baru. Return true kalau berhasil.
 */
function simpan_pesan($nama, $email, $pesan) {
  pesan_pastikan_file();

  $semua = ambil_semua_pesan();

  $baru = [
    'id'     => uniqid('msg_', true),
    'nama'   => $nama,
    'email'  => $email,
    'pesan'  => $pesan,
    'waktu'  => date('Y-m-d H:i:s'),
    'dibaca' => false,
  ];

  // Pesan terbaru ditaruh di paling atas
  array_unshift($semua, $baru);

  return file_put_contents(PESAN_FILE, json_encode($semua, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) !== false;
}

/**
 * Ambil semua pesan (array, terbaru duluan).
 */
function ambil_semua_pesan() {
  pesan_pastikan_file();
  $isi = @file_get_contents(PESAN_FILE);
  $data = json_decode($isi, true);
  return is_array($data) ? $data : [];
}

/**
 * Tandai satu pesan sebagai sudah dibaca berdasarkan id.
 */
function tandai_dibaca($id) {
  $semua = ambil_semua_pesan();
  foreach ($semua as &$p) {
    if ($p['id'] === $id) { $p['dibaca'] = true; }
  }
  unset($p);
  return file_put_contents(PESAN_FILE, json_encode($semua, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) !== false;
}

/**
 * Hapus satu pesan berdasarkan id.
 */
function hapus_pesan($id) {
  $semua = ambil_semua_pesan();
  $semua = array_values(array_filter($semua, function ($p) use ($id) {
    return $p['id'] !== $id;
  }));
  return file_put_contents(PESAN_FILE, json_encode($semua, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) !== false;
}

/**
 * Hitung berapa pesan yang belum dibaca (untuk badge notifikasi).
 */
function hitung_pesan_belum_dibaca() {
  $semua = ambil_semua_pesan();
  return count(array_filter($semua, function ($p) { return empty($p['dibaca']); }));
}
