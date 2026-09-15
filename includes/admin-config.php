<?php
/**
 * ============================================================
 * KONFIGURASI LOGIN ADMIN
 * ============================================================
 * Password default: triplec2026
 * ⚠️ WAJIB DIGANTI sebelum situs live ke publik!
 *
 * Cara ganti password:
 * 1. Buka terminal / SSH hosting, jalankan:
 *      php -r "echo password_hash('PASSWORD_BARU_ANDA', PASSWORD_DEFAULT);"
 * 2. Copy hasilnya (diawali $2y$...), tempel ke ADMIN_PASSWORD_HASH di bawah.
 * 3. Jangan pernah taruh password asli (bukan hash) di sini.
 * ============================================================
 */

define('ADMIN_PASSWORD_HASH', '$2y$10$XKtmr3IoyUM.Upa/vH5O/upztoMYGy/Dzr2vN7zOtr6FjmW3OIAJK');
