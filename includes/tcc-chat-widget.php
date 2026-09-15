<!-- ============ TCC AI ASSISTANT WIDGET ============ -->
<div id="tcc-chat-widget">
  <button type="button" id="tcc-chat-toggle" aria-label="Buka TCC Assistant">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="26" height="26"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
  </button>

  <div id="tcc-chat-window" class="exe-card" aria-hidden="true">
    <div class="exe-titlebar c-cyan">
      <span>TCC_ASSISTANT.EXE</span>
      <span class="exe-controls">
        <button type="button" id="tcc-chat-close" aria-label="Tutup chat">×</button>
      </span>
    </div>
    <div class="exe-body tcc-chat-body">
      <div id="tcc-chat-messages">
        <div class="tcc-msg tcc-msg-bot">
          Halo! 👋 Aku <b>TCC Assistant</b>. Tanya-tanya soal biaya registrasi, timeline, syarat,
          atau hadiah lomba TCC 2026 di sini ya!
        </div>
      </div>
      <form id="tcc-chat-form">
        <input type="text" id="tcc-chat-input" placeholder="Tulis pertanyaan..." autocomplete="off" maxlength="1000">
        <button type="submit" id="tcc-chat-send" aria-label="Kirim">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="18" height="18"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
        </button>
      </form>
    </div>
  </div>
</div>
