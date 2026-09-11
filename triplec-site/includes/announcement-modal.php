<?php
$announce = include __DIR__ . '/../announcement-config.php';
?>
<?php if (!empty($announce['enabled'])): ?>
<!-- ============ ANNOUNCEMENT / BROADCAST POPUP ============ -->
<div id="announce-overlay" data-announce-id="<?php echo htmlspecialchars($announce['id']); ?>">
  <div class="exe-card announce-window">
    <div class="exe-titlebar <?php echo htmlspecialchars($announce['color']); ?>">
      <span><?php echo htmlspecialchars($announce['title']); ?></span>
      <button type="button" class="announce-close" aria-label="Tutup pengumuman">
        <span class="exe-controls"><span>×</span></span>
      </button>
    </div>
    <div class="exe-body announce-body">
      <?php foreach ($announce['paragraphs'] as $p): ?>
        <p><?php echo htmlspecialchars($p); ?></p>
      <?php endforeach; ?>
      <a href="<?php echo htmlspecialchars($announce['button_link']); ?>" class="announce-btn">
        <?php echo htmlspecialchars($announce['button_text']); ?>
      </a>
    </div>
  </div>
</div>
<?php endif; ?>
