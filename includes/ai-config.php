<?php
/**
 * ============================================================
 * KONFIGURASI AI ASSISTANT — TCC CHATBOT (Google Gemini, GRATIS)
 * ============================================================
 * Chatbot ini menjawab pertanyaan calon peserta TCC (biaya,
 * timeline, syarat, dsb) memakai Google Gemini API — GRATIS,
 * tanpa perlu kartu kredit.
 *
 * CARA AKTIVASI:
 * 1. Buka https://aistudio.google.com/apikey
 * 2. Login pakai akun Google (Gmail) biasa.
 * 3. Klik "Create API key" -> pilih/buat project baru -> copy key-nya
 *    (diawali "AIza...").
 * 4. Tempel ke GEMINI_API_KEY di bawah.
 * 5. Selesai — chatbot otomatis aktif, GRATIS (dengan batas wajar
 *    per menit/hari, lebih dari cukup untuk chatbot FAQ situs UKM).
 *
 * ⚠️ JANGAN commit/upload API key ini ke repository publik (GitHub).
 * Kalau situs pakai Git, tambahkan file ini ke .gitignore.
 * ============================================================
 */

define('GEMINI_API_KEY', 'https://tcc-chatbot-api.onrender.com'); // <-- tempel API key di sini (contoh: "AIza...")


define('GEMINI_MODEL', 'gemini-3.6-flash');
