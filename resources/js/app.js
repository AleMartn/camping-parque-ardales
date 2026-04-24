  const lenis = new Lenis({ duration: 1.4, easing: t => Math.min(1, 1.001 - Math.pow(2, -10 * t)), smoothWheel: true });
  function raf(time) { lenis.raf(time); requestAnimationFrame(raf); }
  requestAnimationFrame(raf);

  /* ── Language dropdown (only handles open/close; options are real <a> links) ── */
  const langDropdown = document.getElementById('langDropdown');
  const langBtn = document.getElementById('langBtn');

  if (langBtn && langDropdown) {
    langBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      langDropdown.classList.toggle('open');
    });
    document.addEventListener('click', () => langDropdown.classList.remove('open'));
  }

  /* Translate <option data-es=".." data-en=".."> text for current locale. */
  (function syncOptionLabels(){
    const isEn = document.body.classList.contains('lang-en');
    document.querySelectorAll('option[data-es]').forEach(o => {
      const txt = (isEn && o.dataset.en) ? o.dataset.en : o.dataset.es;
      if (txt) o.textContent = txt;
    });
  })();

  /* ── Navbar scroll + height sync para submenu ── */
  const nav = document.getElementById('nav');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 8);
  });
  function syncNavHeight() {
    document.documentElement.style.setProperty('--nav-height', nav.offsetHeight + 'px');
  }
  if (window.ResizeObserver) {
    new ResizeObserver(syncNavHeight).observe(nav);
  }
  window.addEventListener('scroll', syncNavHeight, { passive: true });
  window.addEventListener('resize', syncNavHeight);
  syncNavHeight();

  /* ── Hamburger mobile menu ── */
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobileMenu');
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('open');
    mobileMenu.classList.toggle('open');
  });
  mobileMenu.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      hamburger.classList.remove('open');
      mobileMenu.classList.remove('open');
    });
  });

  /* ── En móvil: mover el selector de idioma al panel del menú ── */
  (function(){
    const navRight = document.querySelector('.nav-right');
    if (!navRight || !langDropdown || !mobileMenu) return;
    const MQ = window.matchMedia('(max-width: 768px)');
    function update() {
      if (MQ.matches) {
        if (!mobileMenu.contains(langDropdown)) mobileMenu.appendChild(langDropdown);
      } else {
        if (!navRight.contains(langDropdown)) navRight.appendChild(langDropdown);
      }
    }
    update();
    if (MQ.addEventListener) MQ.addEventListener('change', update);
    else if (MQ.addListener) MQ.addListener(update);
  })();

  /* ── Booking card: inject in every page ── */
  const BOOKING_CARD_HTML = `
<div class="booking-card" id="booking">
  <button class="booking-close" id="bookingClose" aria-label="Close">✕</button>
  <p class="booking-eyebrow"><span class="es">Reserva tu estancia</span><span class="en">Book your stay</span></p>
  <h3 class="booking-headline"><span class="es">Tu refugio en la <em>naturaleza</em></span><span class="en">Your retreat in <em>nature</em></span></h3>
  <div class="booking-row">
    <div class="bf bf-type">
      <label><span class="es">Alojamiento</span><span class="en">Lodging</span></label>
      <div class="type-chips" id="lodgingType" role="tablist">
        <button type="button" class="tc active" data-value="todo" role="tab" aria-selected="true"><span class="es">Todo</span><span class="en">All</span></button>
        <button type="button" class="tc" data-value="apartamentos" role="tab" aria-selected="false"><span class="es">Apartamentos</span><span class="en">Apartments</span></button>
        <button type="button" class="tc" data-value="camping" role="tab" aria-selected="false">Camping</button>
      </div>
    </div>
    <div class="bf bf-dates">
      <label><span class="es">Fechas</span><span class="en">Dates</span></label>
      <button type="button" class="rp-trigger" id="rpTrigger">
        <span class="rp-display"><span class="es">Selecciona fechas</span><span class="en">Select dates</span></span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
      </button>
    </div>
    <div class="bf">
      <label><span class="es">Adultos</span><span class="en">Adults</span></label>
      <select id="adults">
        <option>1</option><option selected>2</option><option>3</option>
        <option>4</option><option>5</option><option>6</option>
        <option>7</option><option>8</option>
      </select>
    </div>
    <div class="bf">
      <label><span class="es">Niños</span><span class="en">Children</span></label>
      <select id="children">
        <option value="0">0</option><option value="1">1</option>
        <option value="2">2</option><option value="3">3</option>
        <option value="4">4</option><option value="5">5</option>
        <option value="6">6</option>
      </select>
    </div>
    <button type="button" class="book-btn" id="bookBtn"><span class="es">Buscar</span><span class="en">Search</span></button>
  </div>
  <div class="children-ages-row" id="childAgesRow">
    <p class="age-heading"><span class="es">Edad de los niños</span><span class="en">Children's ages</span></p>
    <div id="ageSelects" class="age-selects"></div>
  </div>
</div>`;

  if (!document.getElementById('booking')) {
    const tmp = document.createElement('div');
    tmp.innerHTML = BOOKING_CARD_HTML.trim();
    document.body.appendChild(tmp.firstElementChild);
  }

  /* ── Children ages ── */
  function updateChildAges() {
    const childrenSel = document.getElementById('children');
    if (!childrenSel) return;
    const n = parseInt(childrenSel.value);
    const row = document.getElementById('childAgesRow');
    const container = document.getElementById('ageSelects');
    container.innerHTML = '';
    if (n === 0) { row.classList.remove('visible'); return; }
    row.classList.add('visible');
    const isEn = document.body.classList.contains('lang-en');
    for (let i = 1; i <= n; i++) {
      const pill = document.createElement('div');
      pill.className = 'age-pill';
      const lbl = document.createElement('span');
      lbl.className = 'age-pill-label';
      lbl.textContent = (isEn ? 'Child ' : 'Niño ') + i;
      const sel = document.createElement('select');
      sel.className = 'age-select';
      for (let age = 0; age <= 17; age++) {
        const opt = document.createElement('option');
        opt.value = age;
        opt.textContent = age === 0 ? (isEn ? '<1 yr' : '<1 año') : age;
        sel.appendChild(opt);
      }
      pill.appendChild(lbl);
      pill.appendChild(sel);
      container.appendChild(pill);
    }
  }
  const _childrenSel = document.getElementById('children');
  if (_childrenSel) _childrenSel.addEventListener('change', updateChildAges);

  /* ── Date range picker ── */
  let bookingStart = null, bookingEnd = null;
  (function setupRangePicker(){
    const trigger = document.getElementById('rpTrigger');
    if (!trigger) return;
    const display = trigger.querySelector('.rp-display');
    const today = new Date(); today.setHours(0,0,0,0);
    let viewYear = today.getFullYear();
    let viewMonth = today.getMonth();
    let hoverDate = null;
    let dayCells = []; // [{btn, dt}]

    const pop = document.createElement('div');
    pop.className = 'rp-popover';
    pop.hidden = true;
    pop.innerHTML = `
      <div class="rp-backdrop"></div>
      <div class="rp-panel" data-lenis-prevent>
        <div class="rp-head">
          <button class="rp-nav rp-prev" type="button" aria-label="Previous">‹</button>
          <span class="rp-month-label"></span>
          <button class="rp-nav rp-next" type="button" aria-label="Next">›</button>
        </div>
        <div class="rp-weekdays"><span>L</span><span>M</span><span>X</span><span>J</span><span>V</span><span>S</span><span>D</span></div>
        <div class="rp-days"></div>
        <div class="rp-foot">
          <span class="rp-info"></span>
        </div>
      </div>`;
    document.body.appendChild(pop);

    const monthLabel = pop.querySelector('.rp-month-label');
    const daysEl = pop.querySelector('.rp-days');
    const infoEl = pop.querySelector('.rp-info');

    const MONTHS_ES = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
    const MONTHS_EN = ['January','February','March','April','May','June','July','August','September','October','November','December'];
    const SHORT_ES  = ['ene','feb','mar','abr','may','jun','jul','ago','sep','oct','nov','dic'];
    const SHORT_EN  = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    const isEn = () => document.body.classList.contains('lang-en');
    const sameDay = (a, b) => a && b && a.toDateString() === b.toDateString();
    const fmtShort = d => d.getDate() + ' ' + (isEn() ? SHORT_EN : SHORT_ES)[d.getMonth()];

    function inRange(d) {
      if (!bookingStart) return false;
      const to = bookingEnd || hoverDate;
      if (!to || sameDay(d, bookingStart)) return false;
      return d > bookingStart && d <= to;
    }

    // Rebuild grid (only when month changes)
    function renderMonth() {
      const months = isEn() ? MONTHS_EN : MONTHS_ES;
      monthLabel.textContent = months[viewMonth] + ' ' + viewYear;
      daysEl.innerHTML = '';
      dayCells = [];
      const first = new Date(viewYear, viewMonth, 1);
      const offset = (first.getDay() + 6) % 7;
      for (let i = 0; i < offset; i++) {
        const s = document.createElement('span');
        s.className = 'rp-day outside';
        daysEl.appendChild(s);
      }
      const lastDay = new Date(viewYear, viewMonth + 1, 0).getDate();
      for (let d = 1; d <= lastDay; d++) {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'rp-day';
        const dt = new Date(viewYear, viewMonth, d);
        btn.textContent = d;
        if (sameDay(dt, today)) btn.classList.add('today');
        if (dt < today) btn.classList.add('disabled');
        btn.addEventListener('click', () => handleDayClick(dt));
        btn.addEventListener('mouseenter', () => {
          if (bookingStart && !bookingEnd && dt >= bookingStart) {
            hoverDate = dt;
            updateStates();
          }
        });
        daysEl.appendChild(btn);
        dayCells.push({ btn, dt });
      }
      updateStates();
    }

    // Toggle classes on existing buttons (no DOM rebuild)
    function updateStates() {
      dayCells.forEach(({ btn, dt }) => {
        btn.classList.toggle('start', sameDay(dt, bookingStart));
        btn.classList.toggle('end', sameDay(dt, bookingEnd));
        btn.classList.toggle('in-range', inRange(dt));
      });
      updateInfo();
    }

    function updateInfo() {
      if (bookingStart && bookingEnd) {
        const nights = Math.round((bookingEnd - bookingStart) / 86400000);
        infoEl.textContent = (isEn() ? 'Nights: ' : 'Noches: ') + nights;
      } else if (bookingStart) {
        infoEl.textContent = isEn() ? 'Select departure' : 'Selecciona salida';
      } else {
        infoEl.textContent = isEn() ? 'Select arrival' : 'Selecciona llegada';
      }
    }

    function handleDayClick(dt) {
      if (dt < today) return;
      if (!bookingStart || (bookingStart && bookingEnd)) {
        // Nueva selección
        bookingStart = dt; bookingEnd = null; hoverDate = null;
        updateStates();
        updateDisplay();
      } else {
        // Segundo click → fija el end (o swap si va hacia atrás)
        if (dt < bookingStart) {
          bookingEnd = bookingStart; bookingStart = dt;
        } else if (!sameDay(dt, bookingStart)) {
          bookingEnd = dt;
        } else {
          return; // mismo día que start → no hace nada
        }
        updateStates();
        updateDisplay();
        // Auto-aplica y cierra con pequeño delay para que se vea la selección
        setTimeout(close, 220);
      }
    }

    function updateDisplay() {
      if (bookingStart && bookingEnd) {
        const n = Math.round((bookingEnd - bookingStart) / 86400000);
        display.textContent = fmtShort(bookingStart) + ' — ' + fmtShort(bookingEnd) + ' · ' + n + (isEn() ? ' nights' : ' noches');
        trigger.dataset.active = '1';
      } else if (bookingStart) {
        display.textContent = fmtShort(bookingStart) + ' — ?';
        trigger.dataset.active = '1';
      } else {
        display.innerHTML = '<span class="es">Selecciona fechas</span><span class="en">Select dates</span>';
        delete trigger.dataset.active;
      }
    }

    function position() {
      if (window.innerWidth <= 640) { pop.classList.add('rp-sheet'); pop.style.top = ''; pop.style.left = ''; return; }
      pop.classList.remove('rp-sheet');
      const r = trigger.getBoundingClientRect();
      const POP_H = 400;
      const above = (window.innerHeight - r.bottom) < POP_H + 16 && r.top > POP_H;
      pop.style.top = (above ? r.top - POP_H - 8 : r.bottom + 8) + 'px';
      pop.style.left = Math.max(8, Math.min(r.left, window.innerWidth - 360 - 8)) + 'px';
    }
    function open() { position(); pop.hidden = false; renderMonth(); document.body.classList.add('rp-open'); }
    function close() { pop.hidden = true; document.body.classList.remove('rp-open'); }

    trigger.addEventListener('click', e => { e.stopPropagation(); if (pop.hidden) open(); else close(); });
    pop.querySelector('.rp-panel').addEventListener('click', e => e.stopPropagation());
    pop.querySelector('.rp-backdrop').addEventListener('click', close);
    document.addEventListener('click', e => {
      if (!pop.hidden && !pop.contains(e.target) && e.target !== trigger) close();
    });
    pop.querySelector('.rp-prev').addEventListener('click', () => {
      viewMonth--; if (viewMonth < 0) { viewMonth = 11; viewYear--; } renderMonth();
    });
    pop.querySelector('.rp-next').addEventListener('click', () => {
      viewMonth++; if (viewMonth > 11) { viewMonth = 0; viewYear++; } renderMonth();
    });
    window.addEventListener('resize', () => { if (!pop.hidden) position(); });
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape' && !pop.hidden) { close(); e.stopImmediatePropagation(); }
    }, true);

    // Defaults: mañana → 2 noches
    const tmr = new Date(today); tmr.setDate(today.getDate() + 1);
    const wk  = new Date(today); wk.setDate(today.getDate() + 3);
    bookingStart = tmr; bookingEnd = wk;
    viewMonth = tmr.getMonth(); viewYear = tmr.getFullYear();
    updateDisplay();

    if (typeof langMenu !== 'undefined' && langMenu) {
      langMenu.addEventListener('click', () => setTimeout(() => { updateDisplay(); if (!pop.hidden) updateInfo(); }, 20));
    }
  })();

  /* ── Booking search (handler del botón Buscar) ── */
  // TODO: ajustar los categoryIds reales del motor de reservas cuando se tengan
  const CATEGORY_IDS = {
    todo:          '2,13,14,4,6,7,3,12,8,9,10,11',
    apartamentos:  '2,3,4',
    camping:       '13,14,6,7,12,8,9,10,11'
  };
  function doSearch() {
    const adults = parseInt(document.getElementById('adults').value, 10) || 0;
    const ages = Array.from(document.querySelectorAll('#ageSelects .age-select')).map(s => s.value);
    // guestAges: 18 por cada adulto + la edad de cada niño
    const guestAges = [];
    for (let i = 0; i < adults; i++) guestAges.push(18);
    ages.forEach(a => guestAges.push(a));

    const fmtISO = d => d ? d.toISOString().slice(0,10) : '';
    const checkin  = fmtISO(bookingStart);
    const checkout = fmtISO(bookingEnd);

    const activeChip = document.querySelector('#lodgingType .tc.active');
    const type = activeChip ? activeChip.dataset.value : 'todo';
    const categoryIds = CATEGORY_IDS[type] || CATEGORY_IDS.todo;

    const lang = document.body.classList.contains('lang-en') ? 'en' : 'es';

    const url = 'https://booking.parqueardales.com/search'
      + '?checkin='      + checkin
      + '&checkout='     + checkout
      + '&guestAges='    + guestAges.join(',')
      + '&categoryIds='  + categoryIds
      + '&lang='         + lang;
    window.open(url, '_blank', 'noopener');
  }
  const _bookBtn = document.getElementById('bookBtn');
  if (_bookBtn) _bookBtn.addEventListener('click', doSearch);

  // Chips del tipo de alojamiento
  document.querySelectorAll('#lodgingType .tc').forEach(chip => {
    chip.addEventListener('click', () => {
      document.querySelectorAll('#lodgingType .tc').forEach(c => {
        c.classList.remove('active');
        c.setAttribute('aria-selected', 'false');
      });
      chip.classList.add('active');
      chip.setAttribute('aria-selected', 'true');
    });
  });

  /* ── Activity modal ── */
  const actData = [
    { title: 'Caminito del Rey', titleEn: 'Caminito del Rey',
      img: 'images/caminito.webp',
      desc: 'Una de las rutas más espectaculares de España. Pasarelas sobre cortados verticales con vistas únicas a los embalses del Chorro. Gestionamos tus entradas si reservas con nosotros con al menos 3 días de antelación.',
      descEn: 'One of the most spectacular routes in Spain. Walkways over vertical cliffs with unique views of the El Chorro reservoirs. We manage your tickets if you book with us at least 3 days in advance.',
      tags: ['7,7 km', '3–4 horas', 'Dificultad media', 'Entradas gestionadas'],
      tagsEn: ['7.7 km', '3–4 hours', 'Moderate difficulty', 'Managed tickets'],
      link: 'https://www.caminitodelrey.info' },
    { title: 'Cueva de Ardales', titleEn: 'Ardales Cave',
      img: 'images/cueva-ardales.jpg',
      desc: 'Pinturas rupestres del Paleolítico declaradas Patrimonio de la Humanidad. Visitas guiadas 12:00–19:30 · 2€/persona.',
      descEn: 'Palaeolithic cave paintings declared UNESCO World Heritage. Guided visits 12:00–19:30 · 2€/person.',
      tags: ['Patrimonio UNESCO', 'Visita guiada'], tagsEn: ['UNESCO Heritage', 'Guided tour'], link: '' },
    { title: 'Actividades Náuticas', titleEn: 'Water Activities',
      img: 'images/KAYAKs.webp',
      desc: 'Kayak, paddle surf y natación en las aguas cristalinas del embalse. El entorno perfecto para deportes acuáticos.',
      descEn: 'Kayaking, paddle boarding and swimming in the crystal-clear reservoir waters. The perfect setting for water sports.',
      tags: ['Kayak', 'Paddle Surf', 'Natación'], tagsEn: ['Kayak', 'Paddle Surf', 'Swimming'], link: '' },
    { title: 'Senderismo', titleEn: 'Hiking',
      img: 'images/Entorno 17.webp',
      desc: 'Rutas señalizadas de todos los niveles en el entorno del embalse y la Sierra de Ardales. Descarga los tracks en Wikiloc.',
      descEn: 'Waymarked routes for all levels around the reservoir and Sierra de Ardales. Download tracks on Wikiloc.',
      tags: ['Todos los niveles', 'GPS tracks'], tagsEn: ['All levels', 'GPS tracks'],
      link: 'https://www.wikiloc.com/trails/hiking/spain/andalucia/malaga/ardales' },
    { title: 'Escalada', titleEn: 'Rock Climbing',
      img: 'images/escalada1.webp',
      desc: 'El Chorro es uno de los destinos de escalada más reconocidos de Europa. Más de 800 vías de todos los niveles en las paredes del desfiladero.',
      descEn: 'El Chorro is one of Europe\'s most renowned climbing destinations. Over 800 routes for all levels on the gorge walls.',
      tags: ['800+ vías', 'Todos los niveles'], tagsEn: ['800+ routes', 'All levels'], link: '' }
  ];
  const overlay = document.getElementById('actModalOverlay');
  if (overlay) {
    const modalImg = document.getElementById('actModalImg');
    const modalTitle = document.getElementById('actModalTitle');
    const modalDesc = document.getElementById('actModalDesc');
    const modalTags = document.getElementById('actModalTags');
    const modalLink = document.getElementById('actModalLink');

    document.querySelectorAll('[data-act]').forEach(card => {
      card.addEventListener('click', () => {
        const d = actData[card.dataset.act];
        const en = currentLang === 'en';
        modalImg.src = d.img;
        modalImg.alt = en ? d.titleEn : d.title;
        modalTitle.textContent = en ? d.titleEn : d.title;
        modalDesc.textContent = en ? d.descEn : d.desc;
        modalTags.innerHTML = (en ? d.tagsEn : d.tags).map(t => '<span class="act-tag">' + t + '</span>').join('');
        if (d.link) { modalLink.href = d.link; modalLink.style.display = ''; }
        else { modalLink.style.display = 'none'; }
        overlay.classList.add('open');
        document.body.style.overflow = 'hidden';
      });
    });
    function closeActModal() {
      overlay.classList.remove('open');
      document.body.style.overflow = '';
    }
    document.getElementById('actModalClose').addEventListener('click', closeActModal);
    overlay.addEventListener('click', e => { if (e.target === overlay) closeActModal(); });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeActModal(); });
  }

  /* ── FAQ accordion ── */
  document.querySelectorAll('.faq-q').forEach(q => {
    q.addEventListener('click', () => {
      const item = q.closest('.faq-item');
      const isOpen = item.classList.contains('open');
      // Close all
      document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
      // Open clicked (unless it was already open)
      if (!isOpen) item.classList.add('open');
    });
  });

  /* ── Scroll reveal ── */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  /* ── Split words for section headers ── */
  document.querySelectorAll('.section-h').forEach(h => {
    h.querySelectorAll('span.es, span.en').forEach(langSpan => {
      const html = langSpan.innerHTML;
      // tokenize words while preserving <em> tags
      const wrapped = html.replace(/(<em>[\s\S]*?<\/em>|[^\s<]+)/g, m => `<span class="split-word"><span>${m}</span></span>`);
      langSpan.innerHTML = wrapped + ' ';
    });
  });

  /* ── Custom cursor ── */
  (function(){
    if (window.matchMedia('(max-width: 900px)').matches) return;
    const dot  = document.getElementById('cursorDot');
    const ring = document.getElementById('cursorRing');
    let mx=0,my=0,rx=0,ry=0;
    window.addEventListener('mousemove', e => { mx=e.clientX; my=e.clientY; dot.style.transform = `translate(${mx}px,${my}px) translate(-50%,-50%)`; });
    function loop(){ rx += (mx-rx)*0.18; ry += (my-ry)*0.18; ring.style.transform = `translate(${rx}px,${ry}px) translate(-50%,-50%)`; requestAnimationFrame(loop); }
    loop();
    document.querySelectorAll('a, button, .faq-q, .acc-card, .act-card, .gi, .svc-card').forEach(el => {
      el.addEventListener('mouseenter', ()=>document.body.classList.add('cursor-hover'));
      el.addEventListener('mouseleave', ()=>document.body.classList.remove('cursor-hover'));
    });
    // dark sections — invert cursor
    const dark = ['#hero','#actividades','#contacto','.marquee','.caminito-featured'];
    const darkObserver = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting && e.intersectionRatio > 0.4) document.body.classList.add('dark-cursor');
        else if (!e.isIntersecting) {
          // check if any other dark is visible
          if (![...document.querySelectorAll(dark.join(','))].some(el => {
            const r = el.getBoundingClientRect();
            return r.top < window.innerHeight/2 && r.bottom > window.innerHeight/2;
          })) document.body.classList.remove('dark-cursor');
        }
      });
    }, { threshold: [0, 0.4, 1] });
    document.querySelectorAll(dark.join(',')).forEach(el => darkObserver.observe(el));
  })();

  /* ── Scroll progress ── */
  const progress = document.getElementById('scrollProgress');
  if (progress) {
    window.addEventListener('scroll', () => {
      const h = document.documentElement;
      const pct = (h.scrollTop) / (h.scrollHeight - h.clientHeight) * 100;
      progress.style.width = pct + '%';
    }, { passive: true });
  }

  /* ── Hero parallax ── */
  const heroPhoto = document.querySelector('.hero-photo img');
  const heroHead  = document.querySelector('.hero-headline');
  const _parallaxQuery = window.matchMedia('(max-width: 768px)');
  window.addEventListener('scroll', () => {
    const y = window.scrollY;
    if (y < window.innerHeight) {
      if (heroPhoto) heroPhoto.style.transform = `scale(${1.08 + y*0.0004}) translateY(${y*0.18}px)`;
      // En móvil el título no se desplaza independientemente; va como un bloque con el párrafo.
      if (heroHead && !_parallaxQuery.matches) heroHead.style.transform = `translateY(${y*-0.25}px)`;
      else if (heroHead) heroHead.style.transform = '';
    }
  }, { passive: true });

  /* ── Floating reserve button + booking popup ──
     Botón FAB en todas las páginas. En index abre el popup local;
     en subpáginas navega a index.html#booking (que auto-abre al cargar). */
  (function(){
    // Crear el botón flotante siempre
    const fab = document.createElement('button');
    fab.className = 'floating-reserve';
    fab.id = 'floatingReserve';
    fab.innerHTML = `
      <span class="fr-dot">
        <svg class="fr-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        <svg class="fr-x" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="6" y1="6" x2="18" y2="18"/><line x1="18" y1="6" x2="6" y2="18"/></svg>
      </span>
      <span class="fr-label">
        <span class="fr-long"><span class="es">Reservar estancia</span><span class="en">Book your stay</span></span>
        <span class="fr-short"><span class="es">Reservar</span><span class="en">Book</span></span>
      </span>
    `;
    document.body.appendChild(fab);

    const card = document.getElementById('booking');
    if (!card) return; // defensive — la tarjeta se inyecta siempre más arriba

    const overlay = document.createElement('div');
    overlay.className = 'booking-overlay';
    overlay.id = 'bookingOverlay';
    document.body.appendChild(overlay);
    overlay.appendChild(card);

    function positionFab(){
      if (document.body.classList.contains('booking-open')) {
        const h = card.offsetHeight;
        fab.style.bottom = (h + 18) + 'px';
      } else {
        fab.style.bottom = '';
      }
    }
    function open(){
      overlay.classList.add('open');
      document.body.classList.add('booking-open');
      document.body.style.overflow = 'hidden';
      requestAnimationFrame(positionFab);
    }
    function close(){
      overlay.classList.remove('open');
      document.body.classList.remove('booking-open');
      document.body.style.overflow = '';
      positionFab();
    }
    window.addEventListener('resize', positionFab);

    fab.addEventListener('click', () => {
      if (document.body.classList.contains('booking-open')) close(); else open();
    });
    document.getElementById('bookingClose').addEventListener('click', close);
    overlay.addEventListener('click', e => { if (e.target === overlay) close(); });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') close(); });

    // Also let any [href="#booking"] open the popup instead of scrolling
    document.querySelectorAll('a[href="#booking"]').forEach(a => {
      a.addEventListener('click', e => { e.preventDefault(); e.stopPropagation(); open(); }, true);
    });

    // Auto-open when the page loads with #booking hash (cross-page links)
    if (window.location.hash === '#booking') {
      requestAnimationFrame(open);
    }
  })();

  /* ── Magnetic CTA ── */
  document.querySelectorAll('.book-btn, .acc-link, .section-more').forEach(el => {
    el.classList.add('magnetic');
    el.addEventListener('mousemove', e => {
      const r = el.getBoundingClientRect();
      const x = e.clientX - r.left - r.width/2;
      const y = e.clientY - r.top - r.height/2;
      el.style.transform = `translate(${x*0.25}px, ${y*0.35}px)`;
    });
    el.addEventListener('mouseleave', () => { el.style.transform = ''; });
  });

  /* ── Smooth scroll for nav links ── */
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const href = link.getAttribute('href');
      if (href === '#' || href.length < 2) return;
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        const navH = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-height')) || 100;
        const offset = document.body.classList.contains('has-submenu') ? (navH + 55) : 80;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

  /* ── Detect when page-submenu is stuck (to solidify + shrink nav on subpages) ── */
  (function(){
    const submenu = document.querySelector('.page-submenu');
    if (!submenu) return;
    const body = document.body;
    let submenuTop = 0;
    function thresholdForWidth() {
      const w = window.innerWidth;
      if (w <= 480) return 64;
      if (w <= 768) return 72;
      if (w <= 1024) return 84;
      return 98;
    }
    function recalc() { submenuTop = submenu.offsetTop; }
    function check() {
      const stuck = window.scrollY + thresholdForWidth() >= submenuTop;
      body.classList.toggle('submenu-stuck', stuck);
    }
    window.addEventListener('scroll', check, { passive: true });
    window.addEventListener('resize', () => { recalc(); check(); }, { passive: true });
    window.addEventListener('load', () => { recalc(); check(); });
    recalc(); check();
  })();
