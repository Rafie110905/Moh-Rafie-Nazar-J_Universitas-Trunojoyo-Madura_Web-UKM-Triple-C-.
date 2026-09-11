<?php
/**
 * ============================================================
 * LOGO ANIMASI PER LOMBA — TCC
 * ============================================================
 * Berisi fungsi tcc_lomba_logo($slug) yang mengembalikan markup
 * SVG animasi (CSS-based) untuk tiap lomba. Dipakai di
 * lomba-detail.php sebagai pengganti foto statis.
 *
 * Kalau mau ganti warna lingkaran badge, cukup ubah nilai fill
 * di tag <circle> masing-masing (sudah disamakan dengan warna
 * titlebar exe-card: c-yellow / c-purple / c-pink).
 * ============================================================
 */

function tcc_lomba_logo($slug) {

  if ($slug === 'esai') {
    return <<<SVG
<div class="lomba-logo-wrap logo-esai">
  <svg viewBox="0 0 140 140" xmlns="http://www.w3.org/2000/svg">
    <circle cx="70" cy="70" r="66" fill="#EBB840" stroke="#0A0A0A" stroke-width="4"/>
    <!-- kertas -->
    <path d="M40 30 H90 L100 40 V110 H40 Z" fill="#FFFFFF" stroke="#0A0A0A" stroke-width="3" stroke-linejoin="round"/>
    <path d="M90 30 L90 40 L100 40 Z" fill="#D9D9D9" stroke="#0A0A0A" stroke-width="2" stroke-linejoin="round"/>
    <!-- garis tulisan -->
    <rect class="esai-line esai-line1" x="50" y="55" width="38" height="6" rx="2" fill="#0A0A0A"/>
    <rect class="esai-line esai-line2" x="50" y="71" width="38" height="6" rx="2" fill="#0A0A0A"/>
    <rect class="esai-line esai-line3" x="50" y="87" width="30" height="6" rx="2" fill="#0A0A0A"/>
    <!-- pensil -->
    <g class="esai-pencil">
      <rect x="42" y="47" width="34" height="9" rx="2" fill="#FF3B6B" stroke="#0A0A0A" stroke-width="2"/>
      <polygon points="42,47 42,56 32,51.5" fill="#0A0A0A"/>
      <rect x="70" y="46" width="8" height="11" fill="#39FF14" stroke="#0A0A0A" stroke-width="2"/>
    </g>
  </svg>
</div>
SVG;
  }

  if ($slug === 'vibe-code') {
    return <<<SVG
<div class="lomba-logo-wrap logo-vibe">
  <svg viewBox="0 0 140 140" xmlns="http://www.w3.org/2000/svg">
    <circle cx="70" cy="70" r="66" fill="#4B2E9E" stroke="#0A0A0A" stroke-width="4"/>
    <!-- bracket -->
    <polyline class="vibe-bracket vibe-bracket-l" points="52,45 34,70 52,95" fill="none" stroke="#FFFFFF" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
    <polyline class="vibe-bracket vibe-bracket-r" points="88,45 106,70 88,95" fill="none" stroke="#FFFFFF" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
    <!-- cursor berkedip -->
    <rect class="vibe-cursor" x="66" y="58" width="8" height="24" fill="#39FF14"/>
    <!-- equalizer / vibe bars -->
    <rect class="vibe-bar vibe-b1" x="46" y="102" width="6" height="16" rx="1" fill="#39FF14"/>
    <rect class="vibe-bar vibe-b2" x="58" y="98" width="6" height="20" rx="1" fill="#39FF14"/>
    <rect class="vibe-bar vibe-b3" x="76" y="98" width="6" height="20" rx="1" fill="#39FF14"/>
    <rect class="vibe-bar vibe-b4" x="88" y="102" width="6" height="16" rx="1" fill="#39FF14"/>
  </svg>
</div>
SVG;
  }

  if ($slug === 'poster') {
    return <<<SVG
<div class="lomba-logo-wrap logo-poster">
  <svg viewBox="0 0 140 140" xmlns="http://www.w3.org/2000/svg">
    <circle cx="70" cy="70" r="66" fill="#FF3B6B" stroke="#0A0A0A" stroke-width="4"/>
    <!-- bingkai poster -->
    <defs>
      <clipPath id="posterClip">
        <rect x="38" y="34" width="64" height="72" rx="3"/>
      </clipPath>
    </defs>
    <rect x="38" y="34" width="64" height="72" rx="3" fill="#FFFFFF" stroke="#0A0A0A" stroke-width="3"/>
    <g clip-path="url(#posterClip)">
      <circle class="poster-sun" cx="82" cy="52" r="9" fill="#EBB840" stroke="#0A0A0A" stroke-width="2"/>
      <polyline points="34,100 58,72 74,88 90,66 106,100" fill="#A8C93A" stroke="#0A0A0A" stroke-width="3" stroke-linejoin="round"/>
      <!-- sapuan kuas warna -->
      <rect class="poster-swipe" x="30" y="34" width="22" height="72" fill="#2FD5C8" opacity="0.85"/>
    </g>
    <!-- kuas -->
    <g class="poster-brush">
      <g transform="rotate(-28 60 100)">
        <rect x="48" y="96" width="26" height="8" rx="2" fill="#0A0A0A"/>
        <rect x="40" y="96" width="10" height="8" rx="2" fill="#39FF14" stroke="#0A0A0A" stroke-width="2"/>
      </g>
    </g>
  </svg>
</div>
SVG;
  }

  return '';
}
