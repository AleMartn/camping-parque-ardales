@extends('layouts.app', [
    'bodyClass' => 'subpage has-submenu',
    'active' => 'apartamentos',
])

@section('title', 'Apartamentos · Camping Parque Ardales')
@section('meta_description', 'Apartamentos del Camping Parque Ardales: 2, 3 y 4 plazas totalmente equipados, con vistas al Embalse Conde de Guadalhorce. Tarifas 2026.')

@push('head')
<style>
    :root { --page-hero-bg: url('/images/Bung-exterior3.webp'); }
  </style>
@endpush

@section('content')
<section class="page-hero">
  <p class="ph-sup"><span class="es">Máxima comodidad</span><span class="en">Maximum comfort</span></p>
  <h1>
    <span class="es">Apartamentos con <em>vistas al embalse</em></span>
    <span class="en">Apartments with <em>reservoir views</em></span>
  </h1>
  <p class="ph-lead">
    <span class="es">Apartamentos de 2, 3 y 4 plazas totalmente equipados. Cocina propia, baño privado, aire acondicionado y terraza con vistas al Embalse Conde de Guadalhorce.</span>
    <span class="en">Fully equipped apartments for 2, 3 and 4 guests. Own kitchen, private bathroom, air conditioning and terrace overlooking the Conde de Guadalhorce Reservoir.</span>
  </p>
</section>

<!-- ─── SUBMENÚ STICKY ─── -->
<nav class="page-submenu" aria-label="Secciones de apartamentos">
  <div class="psm-inner" id="psmInner">
    <a href="#detalles" class="psm-link" data-psm="detalles"><span class="es">Apartamento</span><span class="en">Apartment</span></a>
    <a href="#tarifas" class="psm-link" data-psm="tarifas"><span class="es">Tarifas</span><span class="en">Rates &amp; seasons</span></a>
    <a href="#fotos" class="psm-link" data-psm="fotos"><span class="es">Fotos</span><span class="en">Photos</span></a>
  </div>
</nav>

<!-- ─── DETAIL BLOCK ─── -->
<section class="section" id="detalles">
  <div class="container">
    <div class="detail-block reveal">
      <div class="detail-media">
        <img src="/images/Bung-salon1.webp" alt="Salón del apartamento" loading="lazy">
        <div class="dm-badge"><span class="es">Totalmente equipados</span><span class="en">Fully equipped</span></div>
      </div>
      <div class="detail-body">
        <p class="db-sup"><span class="es">Tu hogar en la naturaleza</span><span class="en">Your home in nature</span></p>
        <h2>
          <span class="es">Cocina, baño y <em>terraza</em></span>
          <span class="en">Kitchen, bathroom &amp; <em>terrace</em></span>
        </h2>
        <p class="lead">
          <span class="es">Cada apartamento está pensado para familias y grupos que buscan comodidad sin renunciar al entorno natural. Listos para entrar: ropa de cama, menaje y electrodomésticos incluidos.</span>
          <span class="en">Every apartment is designed for families and groups who want comfort without giving up the natural setting. Move-in ready: bed linen, kitchenware and appliances included.</span>
        </p>
        <ul class="feature-list">
          <li><span class="es">Cocina equipada</span><span class="en">Equipped kitchen</span></li>
          <li><span class="es">Aire acondicionado</span><span class="en">Air conditioning</span></li>
          <li><span class="es">Baño privado</span><span class="en">Private bathroom</span></li>
          <li><span class="es">WiFi gratuito</span><span class="en">Free WiFi</span></li>
          <li><span class="es">Terraza con vistas</span><span class="en">Terrace with views</span></li>
          <li><span class="es">Ropa de cama y toallas</span><span class="en">Bed linen &amp; towels</span></li>
        </ul>
        <div class="fact-strip">
          <div class="fact"><span class="fact-num">2–4</span><span class="fact-label"><span class="es">Plazas</span><span class="en">Guests</span></span></div>
          <div class="fact"><span class="fact-num">40m²</span><span class="fact-label"><span class="es">Superficie</span><span class="en">Size</span></span></div>
          <div class="fact"><span class="fact-num">14:00</span><span class="fact-label"><span class="es">Check-in</span><span class="en">Check-in</span></span></div>
          <div class="fact"><span class="fact-num">12:00</span><span class="fact-label"><span class="es">Check-out</span><span class="en">Check-out</span></span></div>
        </div>
        <div class="detail-cta-row">
          <a href="{{ route('home') }}#booking" class="detail-cta">
            <span class="es">Ver disponibilidad</span><span class="en">Check availability</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
          <a href="{{ route('galeria') }}" class="detail-cta-ghost">
            <span class="es">Ver todas las fotos</span><span class="en">See all photos</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── TARIFARIO ─── -->
<section class="section" id="tarifas">
  <div class="container">
    <p class="section-sup reveal"><span class="es">Tarifario 2026</span><span class="en">Rates 2026</span></p>
    <h2 class="section-h reveal">
      <span class="es">Precios por <em>día</em></span>
      <span class="en">Rates per <em>day</em></span>
    </h2>
    <p class="section-desc reveal" style="margin-bottom: 0;">
      <span class="es">IVA incluido. El apartamento se entrega limpio y equipado.</span>
      <span class="en">VAT included. The apartment is handed over clean and fully equipped.</span>
    </p>

    <div class="pricing-wrap reveal">
      <!-- Main table -->
      <div class="pricing-card">
        <div class="pricing-head">
          <p class="ph-sup"><span class="es">Precios por día</span><span class="en">Daily rates</span></p>
          <h3>
            <span class="es">Apartamentos y <em>extras</em></span>
            <span class="en">Apartments &amp; <em>extras</em></span>
          </h3>
          <p class="ph-note"><span class="es">IVA incluido · Tarifa válida para la temporada 2026</span><span class="en">VAT included · Valid for the 2026 season</span></p>
        </div>

        <table class="pricing-table">
          <thead>
            <tr>
              <th><span class="es">Concepto</span><span class="en">Concept</span></th>
              <th class="season alta"><span class="es">Alta</span><span class="en">High</span></th>
              <th class="season media"><span class="es">Media</span><span class="en">Mid</span></th>
              <th class="season baja"><span class="es">Baja</span><span class="en">Low</span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="es">Apartamento 2 plazas</span><span class="en">Apartment · 2 guests</span></td>
              <td><span class="price alta">90 €</span></td>
              <td><span class="price media">70 €</span></td>
              <td><span class="price baja">60 €</span></td>
            </tr>
            <tr>
              <td><span class="es">Apartamento 3 plazas</span><span class="en">Apartment · 3 guests</span></td>
              <td><span class="price alta">110 €</span></td>
              <td><span class="price media">90 €</span></td>
              <td><span class="price baja">80 €</span></td>
            </tr>
            <tr>
              <td><span class="es">Apartamento 4 plazas</span><span class="en">Apartment · 4 guests</span></td>
              <td><span class="price alta">120 €</span></td>
              <td><span class="price media">100 €</span></td>
              <td><span class="price baja">90 €</span></td>
            </tr>
            <tr class="group-divider">
              <td><span class="es">Vehículo adicional</span><span class="en">Extra vehicle</span></td>
              <td><span class="price alta">6 €</span></td>
              <td><span class="price media">5 €</span></td>
              <td><span class="price baja">4 €</span></td>
            </tr>
            <tr>
              <td><span class="es">Mascota</span><span class="en">Pet</span> <span style="color:var(--ink-light);font-size:0.8rem">· <span class="es">máx 3</span><span class="en">max 3</span></span></td>
              <td><span class="price">8 €</span></td>
              <td><span class="price">8 €</span></td>
              <td><span class="price">8 €</span></td>
            </tr>
            <tr>
              <td><span class="es">Visita</span><span class="en">Visitor</span> <span style="color:var(--ink-light);font-size:0.8rem">· <span class="es">hasta 4 ocupantes máx.</span><span class="en">up to 4 guests max</span></span></td>
              <td><span class="price">10 €</span></td>
              <td><span class="price">10 €</span></td>
              <td><span class="price">10 €</span></td>
            </tr>
            <tr>
              <td><span class="es">Fianza</span><span class="en">Deposit</span><span class="note-mark">*</span></td>
              <td><span class="price">100 €</span></td>
              <td><span class="price">100 €</span></td>
              <td><span class="price">100 €</span></td>
            </tr>
            <tr>
              <td><span class="es">Suministro de leña</span><span class="en">Firewood</span></td>
              <td><span class="price">5 €</span></td>
              <td><span class="price">5 €</span></td>
              <td><span class="price">5 €</span></td>
            </tr>
          </tbody>
        </table>

        <div class="pricing-foot">
          <p><strong class="mark">*</strong> <span class="es">Se devolverá tras revisar el apartamento si todo está correcto.</span><span class="en">Returned after apartment inspection if everything is in order.</span></p>
          <p><strong class="mark">#</strong> <span class="es">Reserva y solicita con antelación tus entradas al Caminito del Rey.</span><span class="en">Book and request your Caminito del Rey tickets in advance.</span></p>
        </div>
      </div>

      <!-- Side: seasons + discounts -->
      <div class="pricing-side">
        <div class="season-card">
          <h4><span class="es">Temporadas</span><span class="en">Seasons</span></h4>
          <div class="sc-row">
            <span class="sc-tag alta"><span class="es">Alta</span><span class="en">High</span></span>
            <span class="sc-desc"><span class="es">01 enero · 02–05 abril · 01 julio al 06 septiembre · 24–27 y 30–31 diciembre</span><span class="en">Jan 1 · Apr 2–5 · Jul 1 to Sep 6 · Dec 24–27 &amp; 30–31</span></span>
          </div>
          <div class="sc-row">
            <span class="sc-tag media"><span class="es">Media</span><span class="en">Mid</span></span>
            <span class="sc-desc"><span class="es">Fines de semana no incluidos en alta. 2–6 enero · 1 abril · 1–30 junio · 7 septiembre al 12 octubre · 1–13 y 18–20 diciembre</span><span class="en">Weekends outside high season. Jan 2–6 · Apr 1 · Jun 1–30 · Sep 7 to Oct 12 · Dec 1–13 &amp; 18–20</span></span>
          </div>
          <div class="sc-row">
            <span class="sc-tag baja"><span class="es">Baja</span><span class="en">Low</span></span>
            <span class="sc-desc"><span class="es">Los restantes días del año.</span><span class="en">All remaining days of the year.</span></span>
          </div>
        </div>

        <div class="discount-card">
          <h4><span class="es">Largas estancias</span><span class="en">Long stays</span></h4>
          <div class="dc-row">
            <span class="dc-label"><span class="es">Semana</span><span class="en">Week</span></span>
            <span class="dc-value">−20%</span>
          </div>
          <div class="dc-row">
            <span class="dc-label"><span class="es">Mes</span><span class="en">Month</span></span>
            <span class="dc-value">−30%</span>
          </div>
          <div class="dc-row">
            <span class="dc-label"><span class="es">Trimestre</span><span class="en">Quarter</span></span>
            <span class="dc-value">−40%</span>
          </div>
        </div>

        <div class="discount-card">
          <h4><span class="es">Grupos</span><span class="en">Groups</span></h4>
          <div class="dc-row">
            <span class="dc-label">+10 <span class="es">personas</span><span class="en">people</span></span>
            <span class="dc-value">−10%</span>
          </div>
          <div class="dc-row">
            <span class="dc-label">+20 <span class="es">personas</span><span class="en">people</span></span>
            <span class="dc-value">−15%</span>
          </div>
          <div class="dc-row">
            <span class="dc-label">+40 <span class="es">personas</span><span class="en">people</span></span>
            <span class="dc-value">−20%</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── FOTOS ─── -->
<section class="section" id="fotos">
  <div class="container">
    <p class="section-sup reveal"><span class="es">Cómo es por dentro</span><span class="en">What it looks like</span></p>
    <h2 class="section-h reveal">
      <span class="es"><em>Fotos</em> del apartamento</span>
      <span class="en">Apartment <em>photos</em></span>
    </h2>

    <div class="gallery-grid reveal" id="fotosGrid" style="margin-top: 2rem;">
      <div class="gi t2" data-label-es="Exterior del apartamento" data-label-en="Apartment exterior">
        <div class="gi-bg"><img src="/images/Bung-exterior1.webp" alt="Exterior apartamento" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Exterior</span><span class="en">Exterior</span></span></div>
      </div>
      <div class="gi" data-label-es="Salón con cocina" data-label-en="Living room with kitchen">
        <div class="gi-bg"><img src="/images/Bung-salon1.webp" alt="Salón apartamento" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Salón</span><span class="en">Living room</span></span></div>
      </div>
      <div class="gi" data-label-es="Cocina equipada" data-label-en="Equipped kitchen">
        <div class="gi-bg"><img src="/images/Bung-salon3.webp" alt="Cocina apartamento" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Cocina</span><span class="en">Kitchen</span></span></div>
      </div>
      <div class="gi" data-label-es="Habitación con vistas" data-label-en="Bedroom with views">
        <div class="gi-bg"><img src="/images/Bung-habitacion1.webp" alt="Habitación apartamento" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Habitación</span><span class="en">Bedroom</span></span></div>
      </div>
      <div class="gi" data-label-es="Habitación doble" data-label-en="Double bedroom">
        <div class="gi-bg"><img src="/images/Bung-habitacion2.webp" alt="Habitación doble" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Habitación doble</span><span class="en">Double bedroom</span></span></div>
      </div>
      <div class="gi w2" data-label-es="Terraza con vistas al embalse" data-label-en="Terrace with reservoir views">
        <div class="gi-bg"><img src="/images/Bung-terraza1.webp" alt="Terraza apartamento" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Terraza</span><span class="en">Terrace</span></span></div>
      </div>
      <div class="gi" data-label-es="Baño privado" data-label-en="Private bathroom">
        <div class="gi-bg"><img src="/images/Bung-baño1.webp" alt="Baño apartamento" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Baño</span><span class="en">Bathroom</span></span></div>
      </div>
      <div class="gi" data-label-es="Apartamento exterior" data-label-en="Apartment exterior">
        <div class="gi-bg"><img src="/images/Bung-exterior4.webp" alt="Exterior apartamento" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Exterior</span><span class="en">Exterior</span></span></div>
      </div>
    </div>

    <div style="text-align:center; margin-top: 2rem;">
      <a href="{{ route('galeria') }}" class="detail-cta-ghost">
        <span class="es">Ver galería completa</span><span class="en">See full gallery</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- Cross CTA -->
<div class="cross-cta">
  <p class="eyebrow"><span class="es">¿Vienes con tienda o caravana?</span><span class="en">Coming with a tent or caravan?</span></p>
  <h3>
    <span class="es">Tenemos también <em>parcelas de camping</em></span>
    <span class="en">We also offer <em>camping pitches</em></span>
  </h3>
  <div class="cta-pair">
    <a href="{{ route('camping') }}" class="cc-btn">
      <span class="es">Ver camping</span><span class="en">See camping</span>
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
    <a href="{{ route('home') }}#booking" class="cc-btn ghost">
      <span class="es">Reservar estancia</span><span class="en">Book your stay</span>
    </a>
  </div>
</div>

<!-- Lightbox -->
<div class="lightbox-overlay" id="lightboxOverlay">
  <button class="lightbox-close" id="lightboxClose" aria-label="Close">&times;</button>
  <button class="lightbox-nav lightbox-prev" id="lightboxPrev" aria-label="Previous">&#8249;</button>
  <button class="lightbox-nav lightbox-next" id="lightboxNext" aria-label="Next">&#8250;</button>
  <div class="lightbox-content">
    <img id="lightboxImg" src="" alt="">
  </div>
  <div class="lightbox-caption" id="lightboxCaption"></div>
</div>
@endsection

@push('scripts')
<script>
  /* Submenu active state */
  (function(){
    const links = document.querySelectorAll('.psm-link');
    const inner = document.getElementById('psmInner');
    if (!links.length) return;
    const sections = Array.from(links).map(l => document.querySelector(l.getAttribute('href'))).filter(Boolean);

    function setActive(id) {
      links.forEach(l => {
        const match = l.getAttribute('href') === '#' + id;
        l.classList.toggle('active', match);
        if (match && inner) {
          const lRect = l.getBoundingClientRect();
          const iRect = inner.getBoundingClientRect();
          if (lRect.right > iRect.right - 10 || lRect.left < iRect.left + 10) {
            inner.scrollTo({ left: l.offsetLeft - 20, behavior: 'smooth' });
          }
        }
      });
    }

    // Scrollspy secuencial: última sección cuyo top cruzó la línea de activación
    let lastId = null;
    function updateActive() {
      const navH = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-height')) || 100;
      const activationY = navH + 60;
      let currentId = null;
      for (const s of sections) {
        if (s.getBoundingClientRect().top <= activationY) currentId = s.id;
        else break;
      }
      if (currentId !== lastId) {
        lastId = currentId;
        if (currentId) setActive(currentId);
        else links.forEach(l => l.classList.remove('active'));
      }
    }
    window.addEventListener('scroll', updateActive, { passive: true });
    window.addEventListener('resize', updateActive);
    updateActive();
  })();

  /* Lightbox para .gi dentro de #fotosGrid */
  (function(){
    const grid = document.getElementById('fotosGrid');
    if (!grid) return;
    const items = Array.from(grid.querySelectorAll('.gi'));
    const overlay = document.getElementById('lightboxOverlay');
    const lbImg = document.getElementById('lightboxImg');
    const lbCap = document.getElementById('lightboxCaption');
    const lbClose = document.getElementById('lightboxClose');
    const lbPrev = document.getElementById('lightboxPrev');
    const lbNext = document.getElementById('lightboxNext');
    let idx = 0;
    function render() {
      if (!items.length) return;
      idx = ((idx % items.length) + items.length) % items.length;
      const it = items[idx];
      const img = it.querySelector('img');
      lbImg.src = img.src; lbImg.alt = img.alt;
      const en = document.body.classList.contains('lang-en');
      lbCap.textContent = en ? (it.dataset.labelEn || '') : (it.dataset.labelEs || '');
    }
    function open(i) { idx = i; render(); overlay.classList.add('open'); window.lockBodyScroll(); }
    function close() { overlay.classList.remove('open'); window.unlockBodyScroll(); }
    items.forEach((it, i) => it.addEventListener('click', () => open(i)));
    lbClose.addEventListener('click', close);
    lbPrev.addEventListener('click', () => { idx--; render(); });
    lbNext.addEventListener('click', () => { idx++; render(); });
    overlay.addEventListener('click', e => { if (e.target === overlay) close(); });
    document.addEventListener('keydown', e => {
      if (!overlay.classList.contains('open')) return;
      if (e.key === 'Escape') close();
      if (e.key === 'ArrowLeft') { idx--; render(); }
      if (e.key === 'ArrowRight') { idx++; render(); }
    });
  })();
</script>
@endpush
