// ============ BOOT SEQUENCE (runs once per session) ============
document.addEventListener('DOMContentLoaded', function () {
  var overlay = document.getElementById('boot-overlay');
  if (overlay) {
    var already = sessionStorage.getItem('triplec_booted');
    if (already) {
      overlay.remove();
    } else {
      var lines = overlay.querySelectorAll('.boot-log li');
      var fill = overlay.querySelector('.boot-progress-fill');
      var pct = overlay.querySelector('.boot-progress-pct');
      var progress = 0;
      var lineIndex = 0;

      lines.forEach(function (li, i) {
        li.classList.remove('done', 'active');
        if (i > 0) li.style.opacity = 0.25;
      });
      if (lines[0]) { lines[0].classList.add('active'); lines[0].style.opacity = 1; }

      var interval = setInterval(function () {
        progress += Math.floor(Math.random() * 9) + 4;
        if (progress > 100) progress = 100;
        if (fill) fill.style.width = progress + '%';
        if (pct) pct.textContent = progress + '%';

        var targetLine = Math.min(lines.length - 1, Math.floor((progress / 100) * lines.length));
        if (targetLine > lineIndex) {
          if (lines[lineIndex]) { lines[lineIndex].classList.remove('active'); lines[lineIndex].classList.add('done'); lines[lineIndex].style.opacity = 1; }
          lineIndex = targetLine;
          if (lines[lineIndex]) { lines[lineIndex].classList.add('active'); lines[lineIndex].style.opacity = 1; }
        }

        if (progress >= 100) {
          clearInterval(interval);
          lines.forEach(function (li) { li.classList.remove('active'); li.classList.add('done'); li.style.opacity = 1; });
          setTimeout(function () {
            overlay.classList.add('hidden');
            sessionStorage.setItem('triplec_booted', '1');
            setTimeout(function () { overlay.remove(); }, 550);
          }, 300);
        }
      }, 140);
    }
  }

  // ============ MOBILE NAV TOGGLE ============
  var toggle = document.querySelector('.navbar-toggle');
  var menu = document.querySelector('.navbar-menu');
  if (toggle && menu) {
    toggle.addEventListener('click', function () {
      menu.classList.toggle('open');
    });
  }
  
    // ============ NAVBAR SCROLL STATE (flat di atas -> pill saat discroll) ============
  var navbarWrap = document.querySelector('.navbar-wrap');
  var sentinel = document.getElementById('scroll-sentinel');
  if (navbarWrap && sentinel && 'IntersectionObserver' in window) {
    var navObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          navbarWrap.classList.remove('scrolled');
        } else {
          navbarWrap.classList.add('scrolled');
        }
      });
    }, { threshold: 0 });
    navObserver.observe(sentinel);
  } else if (navbarWrap) {
    // fallback browser lama
    var toggleNavbarScrolled = function () {
      if (window.scrollY > 40) {
        navbarWrap.classList.add('scrolled');
      } else {
        navbarWrap.classList.remove('scrolled');
      }
    };
    toggleNavbarScrolled();
    window.addEventListener('scroll', toggleNavbarScrolled);
  }

  // ============ SCROLL REVEAL (fade-in saat elemen masuk layar) ============
  var revealSelectors = [
    '.exe-card:not(.marquee-card)',
    '.gallery-item',
    '.profile-card',
    '.tupoksi-card',
    '.pixel-heading',
    '.hero-title-floating'
  ];
  var revealEls = Array.prototype.slice.call(
    document.querySelectorAll(revealSelectors.join(','))
  );

  revealEls.forEach(function (el) {
    el.classList.add('reveal');
    // stagger halus berdasar urutan antar saudara sekandung (card sebelah-sebelahan)
    var siblings = Array.prototype.filter.call(el.parentElement.children, function (c) {
      return revealEls.indexOf(c) !== -1;
    });
    var idx = siblings.indexOf(el);
    if (idx > -1) {
      el.style.transitionDelay = Math.min(idx * 0.12, 0.6) + 's';
    }
  });

  if ('IntersectionObserver' in window) {
    var revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          revealObserver.unobserve(entry.target); // animasi cukup sekali
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });

    revealEls.forEach(function (el) { revealObserver.observe(el); });
  } else {
    // fallback browser lama: langsung tampil semua
    revealEls.forEach(function (el) { el.classList.add('is-visible'); });
  }

  // ============ ANNOUNCEMENT / BROADCAST POPUP (halaman TCC) ============
  // Sengaja TIDAK disimpan ke localStorage — popup ini akan selalu
  // muncul lagi tiap kali halaman di-refresh atau dibuka ulang,
  // selama 'enabled' => true di announcement-config.php.
  var announceOverlay = document.getElementById('announce-overlay');
  if (announceOverlay) {
    // kasih jeda dikit biar nggak muncul kaget pas halaman baru kebuka
    setTimeout(function () {
      announceOverlay.classList.add('visible');
    }, 400);

    var closeAnnounce = function () {
      announceOverlay.classList.remove('visible');
    };

    var announceCloseBtn = announceOverlay.querySelector('.announce-close');
    if (announceCloseBtn) {
      announceCloseBtn.addEventListener('click', closeAnnounce);
    }
    announceOverlay.addEventListener('click', function (e) {
      if (e.target === announceOverlay) closeAnnounce();
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') closeAnnounce();
    });
  }

  // ============ FAB SHOW/HIDE + SCROLL TOP ============
  var fab = document.getElementById('fab-top');
  if (fab) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 400) {
        fab.classList.add('visible');
      } else {
        fab.classList.remove('visible');
      }
    });
    fab.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // ============ TWIBBON GENERATOR ============
  var twibbonCanvas = document.getElementById('twibbon-canvas');
  if (twibbonCanvas) {
    var tCtx = twibbonCanvas.getContext('2d');
    var tSize = twibbonCanvas.width; // 1080
    var tUpload = document.getElementById('twibbon-upload');
    var tZoom = document.getElementById('twibbon-zoom');
    var tRotate = document.getElementById('twibbon-rotate');
    var tZoomValue = document.getElementById('twibbon-zoom-value');
    var tRotateValue = document.getElementById('twibbon-rotate-value');
    var tChangePhoto = document.getElementById('twibbon-change-photo');
    var tDownload = document.getElementById('twibbon-download');
    var tEmptyHint = document.getElementById('twibbon-empty-hint');
    var tWrap = document.querySelector('.twibbon-canvas-wrap');

    var frameImg = new Image();
    var userImg = null;
    var baseScale = 1;
    var offsetX = 0, offsetY = 0;
    var dragging = false;
    var lastX = 0, lastY = 0;
    var frameReady = false;

    // Posisi & diameter lingkaran transparan di dalam frame (hasil ukur manual
    // dari assets/img/twibbon-frame.png, skala 1080x1080). Ganti angka ini kalau
    // frame twibbon-nya diganti dengan desain baru yang beda ukuran/posisi.
    var CIRCLE_CX = 532;
    var CIRCLE_CY = 557;
    var CIRCLE_D = 478;

    frameImg.onload = function () {
      frameReady = true;
      drawTwibbon();
    };
    frameImg.src = 'assets/img/twibbon-frame.png';

    function drawTwibbon() {
      tCtx.clearRect(0, 0, tSize, tSize);
      if (userImg) {
        var sliderScale = (parseInt(tZoom.value, 10) || 100) / 100;
        var totalScale = baseScale * sliderScale;
        var drawW = userImg.width * totalScale;
        var drawH = userImg.height * totalScale;
        var cx = CIRCLE_CX + offsetX;
        var cy = CIRCLE_CY + offsetY;
        var rotateDeg = parseInt(tRotate.value, 10) || 0;

        tCtx.save();
        tCtx.translate(cx, cy);
        tCtx.rotate(rotateDeg * Math.PI / 180);
        tCtx.drawImage(userImg, -drawW / 2, -drawH / 2, drawW, drawH);
        tCtx.restore();
      }
      if (frameReady) {
        tCtx.drawImage(frameImg, 0, 0, tSize, tSize);
      }
    }

    function loadPhotoFile(file) {
      if (!file) return;
      var reader = new FileReader();
      reader.onload = function (ev) {
        var img = new Image();
        img.onload = function () {
          userImg = img;
          baseScale = Math.max(CIRCLE_D / img.width, CIRCLE_D / img.height);
          offsetX = 0;
          offsetY = 0;
          tZoom.value = 100;
          tRotate.value = 0;
          tZoomValue.textContent = '1.0x';
          tRotateValue.textContent = '0°';
          tZoom.disabled = false;
          tRotate.disabled = false;
          tChangePhoto.disabled = false;
          tDownload.disabled = false;
          if (tEmptyHint) tEmptyHint.style.display = 'none';
          twibbonCanvas.classList.remove('is-empty');
          drawTwibbon();
        };
        img.src = ev.target.result;
      };
      reader.readAsDataURL(file);
    }

    tUpload.addEventListener('change', function (e) {
      var file = e.target.files && e.target.files[0];
      loadPhotoFile(file);
    });

    tChangePhoto.addEventListener('click', function () {
      tUpload.click();
    });

    tZoom.addEventListener('input', function () {
      tZoomValue.textContent = (parseInt(tZoom.value, 10) / 100).toFixed(1) + 'x';
      drawTwibbon();
    });

    tRotate.addEventListener('input', function () {
      tRotateValue.textContent = tRotate.value + '°';
      drawTwibbon();
    });

    // drag to reposition (mouse + touch via pointer events)
    var scaleFactor = function () { return tSize / tWrap.clientWidth; };

    tWrap.addEventListener('pointerdown', function (e) {
      if (!userImg) return;
      dragging = true;
      lastX = e.clientX;
      lastY = e.clientY;
      tWrap.setPointerCapture(e.pointerId);
    });
    tWrap.addEventListener('pointermove', function (e) {
      if (!dragging || !userImg) return;
      var sf = scaleFactor();
      offsetX += (e.clientX - lastX) * sf;
      offsetY += (e.clientY - lastY) * sf;
      lastX = e.clientX;
      lastY = e.clientY;
      drawTwibbon();
    });
    var stopDrag = function () { dragging = false; };
    tWrap.addEventListener('pointerup', stopDrag);
    tWrap.addEventListener('pointercancel', stopDrag);
    tWrap.addEventListener('pointerleave', stopDrag);

    tDownload.addEventListener('click', function () {
      if (!userImg) return;
      var link = document.createElement('a');
      link.download = 'twibbon-tcc-2026.png';
      link.href = twibbonCanvas.toDataURL('image/png');
      link.click();
    });

    // ---- Copy caption ----
    var copyBtn = document.getElementById('twibbon-copy-caption');
    var captionBox = document.getElementById('twibbon-caption');
    var copyFeedback = document.getElementById('twibbon-copy-feedback');
    if (copyBtn && captionBox) {
      copyBtn.addEventListener('click', function () {
        var text = captionBox.value;
        var showFeedback = function (msg) {
          copyFeedback.textContent = msg;
          copyFeedback.classList.add('show');
          setTimeout(function () { copyFeedback.classList.remove('show'); }, 2000);
        };
        if (navigator.clipboard && navigator.clipboard.writeText) {
          navigator.clipboard.writeText(text)
            .then(function () { showFeedback('✓ Tersalin!'); })
            .catch(function () {
              captionBox.select();
              document.execCommand('copy');
              showFeedback('✓ Tersalin!');
            });
        } else {
          captionBox.select();
          document.execCommand('copy');
          showFeedback('✓ Tersalin!');
        }
      });
    }
  }

  // ============ TCC AI ASSISTANT (CHAT WIDGET) ============
  var chatToggle = document.getElementById('tcc-chat-toggle');
  var chatWindow = document.getElementById('tcc-chat-window');
  var chatClose = document.getElementById('tcc-chat-close');
  var chatForm = document.getElementById('tcc-chat-form');
  var chatInput = document.getElementById('tcc-chat-input');
  var chatSend = document.getElementById('tcc-chat-send');
  var chatMessages = document.getElementById('tcc-chat-messages');

  if (chatToggle && chatWindow && chatForm) {
    var chatHistory = [];
    var chatOpened = false;

    var scrollChatToBottom = function () {
      chatMessages.scrollTop = chatMessages.scrollHeight;
    };

    var addMessage = function (text, role) {
      var div = document.createElement('div');
      div.className = 'tcc-msg tcc-msg-' + role;
      div.textContent = text;
      chatMessages.appendChild(div);
      scrollChatToBottom();
      return div;
    };

    var showTyping = function () {
      var div = document.createElement('div');
      div.className = 'tcc-msg-typing';
      div.id = 'tcc-typing-indicator';
      div.innerHTML = '<span></span><span></span><span></span>';
      chatMessages.appendChild(div);
      scrollChatToBottom();
    };

    var hideTyping = function () {
      var el = document.getElementById('tcc-typing-indicator');
      if (el) el.remove();
    };

    var toggleChat = function () {
      chatOpened = !chatOpened;
      chatWindow.classList.toggle('open', chatOpened);
      chatWindow.setAttribute('aria-hidden', String(!chatOpened));
      if (chatOpened) chatInput.focus();
    };

    chatToggle.addEventListener('click', toggleChat);
    if (chatClose) chatClose.addEventListener('click', toggleChat);

    chatForm.addEventListener('submit', function (e) {
      e.preventDefault();
      var msg = chatInput.value.trim();
      if (!msg) return;

      addMessage(msg, 'user');
      chatHistory.push({ role: 'user', content: msg });
      chatInput.value = '';
      chatInput.disabled = true;
      chatSend.disabled = true;
      showTyping();

      fetch('api/tcc-chat.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ message: msg, history: chatHistory }),
      })
        .then(function (res) { return res.json().then(function (data) { return { ok: res.ok, data: data }; }); })
        .then(function (result) {
          hideTyping();
          if (result.ok && result.data.reply) {
            addMessage(result.data.reply, 'bot');
            chatHistory.push({ role: 'assistant', content: result.data.reply });
          } else {
            addMessage(result.data.error || 'Terjadi kesalahan. Coba lagi ya.', 'error');
          }
        })
        .catch(function () {
          hideTyping();
          addMessage('Gagal terhubung ke server. Cek koneksi internet kamu.', 'error');
        })
        .finally(function () {
          chatInput.disabled = false;
          chatSend.disabled = false;
          chatInput.focus();
        });
    });
  }
});
