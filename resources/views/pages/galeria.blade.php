@extends('layouts.app', [
    'bodyClass' => 'subpage has-submenu',
    'active' => 'galeria',
])

@section('title', 'Galería · Camping Parque Ardales')
@section('meta_description', 'Galería de fotos del Camping Parque Ardales: alojamientos, instalaciones, entorno natural y actividades.')

@push('head')
<style>
    :root { --page-hero-bg: url('/images/Entorno 19.webp'); }
  </style>
@endpush

@section('content')
<!-- ─────────────────────────── NAV ─────────────────────────── -->
<!-- Mobile menu -->
<!-- ─────────────────────────── PAGE HERO ─────────────────────────── -->
<section class="page-hero">
  <p class="ph-sup"><span class="es">Imágenes del recinto</span><span class="en">Campsite imagery</span></p>
  <h1>
    <span class="es">Galería de <em>fotos</em></span>
    <span class="en">Photo <em>gallery</em></span>
  </h1>
  <p class="ph-lead">
    <span class="es">Explora alojamientos, instalaciones, entorno natural y actividades a través de nuestras imágenes. Haz clic en cualquier foto para verla a pantalla completa.</span>
    <span class="en">Explore accommodation, facilities, surroundings and activities through our images. Click any photo to view full-screen.</span>
  </p>
</section>

<!-- ─── SUBMENÚ FILTRO STICKY ─── -->
<nav class="page-submenu" aria-label="Filtro de galería">
  <div class="psm-inner" id="psmInner">
    <button type="button" class="psm-link active" data-filter="all"><span class="es">Todas</span><span class="en">All</span></button>
    <button type="button" class="psm-link" data-filter="alojamiento"><span class="es">Alojamientos</span><span class="en">Accommodation</span></button>
    <button type="button" class="psm-link" data-filter="instalaciones"><span class="es">Instalaciones</span><span class="en">Facilities</span></button>
    <button type="button" class="psm-link" data-filter="entorno"><span class="es">Entorno</span><span class="en">Surroundings</span></button>
    <button type="button" class="psm-link" data-filter="actividades"><span class="es">Actividades</span><span class="en">Activities</span></button>
  </div>
</nav>

<!-- ─────────────────────────── GALLERY ─────────────────────────── -->
<section class="section" style="padding-top: 4rem;">
  <div class="container">

    <!-- Grid -->
    <div class="gallery-grid" id="galleryGrid">
      <!-- Alojamiento -->
      <div class="gi t2" data-cat="alojamiento" data-label-es="Apartamento · exterior" data-label-en="Apartment · exterior">
        <div class="gi-bg"><img src="/images/Bung-exterior1.webp" alt="Apartamento" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Apartamento · exterior</span><span class="en">Apartment · exterior</span></span></div>
      </div>
      <div class="gi" data-cat="alojamiento" data-label-es="Apartamento · salón" data-label-en="Apartment · living room">
        <div class="gi-bg"><img src="/images/Bung-salon1.webp" alt="Salón apartamento" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Apartamento · salón</span><span class="en">Apartment · living room</span></span></div>
      </div>
      <div class="gi" data-cat="alojamiento" data-label-es="Apartamento · habitación" data-label-en="Apartment · bedroom">
        <div class="gi-bg"><img src="/images/Bung-habitacion1.webp" alt="Habitación apartamento" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Apartamento · habitación</span><span class="en">Apartment · bedroom</span></span></div>
      </div>
      <div class="gi" data-cat="alojamiento" data-label-es="Apartamento · terraza" data-label-en="Apartment · terrace">
        <div class="gi-bg"><img src="/images/Bung-terraza1.webp" alt="Terraza apartamento" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Apartamento · terraza</span><span class="en">Apartment · terrace</span></span></div>
      </div>
      <div class="gi w2" data-cat="alojamiento" data-label-es="Zona de tiendas" data-label-en="Tent area">
        <div class="gi-bg"><img src="/images/TIENDAS 2.webp" alt="Zona de tiendas" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Zona de tiendas</span><span class="en">Tent area</span></span></div>
      </div>
      <div class="gi" data-cat="alojamiento" data-label-es="Parcela caravana" data-label-en="Caravan pitch">
        <div class="gi-bg"><img src="/images/Caravanas 1.webp" alt="Parcela caravana" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Parcela caravana</span><span class="en">Caravan pitch</span></span></div>
      </div>
      <div class="gi" data-cat="alojamiento" data-label-es="Parcela caravana" data-label-en="Caravan pitch">
        <div class="gi-bg"><img src="/images/Caravanas 2.webp" alt="Parcela caravana" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Parcela caravana</span><span class="en">Caravan pitch</span></span></div>
      </div>
      <div class="gi" data-cat="alojamiento" data-label-es="Cabaña salón-cocina" data-label-en="Salon-kitchen cabin">
        <div class="gi-bg"><img src="/images/Cabaña1.webp" alt="Cabaña" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Cabaña</span><span class="en">Cabin</span></span></div>
      </div>
      <div class="gi" data-cat="alojamiento" data-label-es="Apartamento · baño" data-label-en="Apartment · bathroom">
        <div class="gi-bg"><img src="/images/Bung-baño1.webp" alt="Baño apartamento" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Apartamento · baño</span><span class="en">Apartment · bathroom</span></span></div>
      </div>
      <div class="gi" data-cat="alojamiento" data-label-es="Apartamento · salón" data-label-en="Apartment · living room">
        <div class="gi-bg"><img src="/images/Bung-salon3.webp" alt="Salón apartamento" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Apartamento · salón</span><span class="en">Apartment · living room</span></span></div>
      </div>

      <!-- Instalaciones -->
      <div class="gi t2" data-cat="instalaciones" data-label-es="Piscina infinita" data-label-en="Infinity pool">
        <div class="gi-bg"><img src="/images/PISCINA.png" alt="Piscina infinita" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Piscina infinita</span><span class="en">Infinity pool</span></span></div>
      </div>
      <div class="gi" data-cat="instalaciones" data-label-es="Piscina · vistas" data-label-en="Pool · views">
        <div class="gi-bg"><img src="/images/PISCINA 2.png" alt="Piscina con vistas" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Piscina · vistas</span><span class="en">Pool · views</span></span></div>
      </div>
      <div class="gi" data-cat="instalaciones" data-label-es="Piscina · zona de baño" data-label-en="Pool · swim zone">
        <div class="gi-bg"><img src="/images/PISCINA 3.png" alt="Piscina zona de baño" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Piscina · zona de baño</span><span class="en">Pool · swim zone</span></span></div>
      </div>
      <div class="gi" data-cat="instalaciones" data-label-es="Piscina · solárium" data-label-en="Pool · sun deck">
        <div class="gi-bg"><img src="/images/PISCINA 4.png" alt="Piscina solárium" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Piscina · solárium</span><span class="en">Pool · sun deck</span></span></div>
      </div>
      <div class="gi" data-cat="instalaciones" data-label-es="Piscina al atardecer" data-label-en="Pool at sunset">
        <div class="gi-bg"><img src="/images/PISCINA 5.png" alt="Piscina al atardecer" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Piscina al atardecer</span><span class="en">Pool at sunset</span></span></div>
      </div>
      <div class="gi" data-cat="instalaciones" data-label-es="Supermercado" data-label-en="Supermarket">
        <div class="gi-bg"><img src="/images/Supermercado 1.webp" alt="Supermercado" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Supermercado</span><span class="en">Supermarket</span></span></div>
      </div>
      <div class="gi" data-cat="instalaciones" data-label-es="Supermercado" data-label-en="Supermarket">
        <div class="gi-bg"><img src="/images/Supermercado 3.webp" alt="Supermercado" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Supermercado</span><span class="en">Supermarket</span></span></div>
      </div>
      <div class="gi" data-cat="instalaciones" data-label-es="Recepción" data-label-en="Reception">
        <div class="gi-bg"><img src="/images/Recepcion 1.webp" alt="Recepción" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Recepción</span><span class="en">Reception</span></span></div>
      </div>
      <div class="gi" data-cat="instalaciones" data-label-es="Recepción" data-label-en="Reception">
        <div class="gi-bg"><img src="/images/Recepcion 2.webp" alt="Recepción" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Recepción</span><span class="en">Reception</span></span></div>
      </div>
      <div class="gi" data-cat="instalaciones" data-label-es="Baños" data-label-en="Bathrooms">
        <div class="gi-bg"><img src="/images/baños1.webp" alt="Baños" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Baños</span><span class="en">Bathrooms</span></span></div>
      </div>
      <div class="gi" data-cat="instalaciones" data-label-es="Baños" data-label-en="Bathrooms">
        <div class="gi-bg"><img src="/images/baños3.webp" alt="Baños" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Baños</span><span class="en">Bathrooms</span></span></div>
      </div>

      <!-- Entorno -->
      <div class="gi w2" data-cat="entorno" data-label-es="Embalse Conde de Guadalhorce" data-label-en="Conde de Guadalhorce Reservoir">
        <div class="gi-bg"><img src="/images/Entorno 1.webp" alt="Embalse" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Embalse Conde de Guadalhorce</span><span class="en">Conde de Guadalhorce Reservoir</span></span></div>
      </div>
      <div class="gi" data-cat="entorno" data-label-es="Naturaleza" data-label-en="Nature">
        <div class="gi-bg"><img src="/images/Entorno 5.webp" alt="Naturaleza" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Naturaleza</span><span class="en">Nature</span></span></div>
      </div>
      <div class="gi" data-cat="entorno" data-label-es="Entorno natural" data-label-en="Natural setting">
        <div class="gi-bg"><img src="/images/Entorno 9.webp" alt="Entorno" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Entorno</span><span class="en">Setting</span></span></div>
      </div>
      <div class="gi" data-cat="entorno" data-label-es="Vistas al embalse" data-label-en="Reservoir views">
        <div class="gi-bg"><img src="/images/Entorno 11.webp" alt="Vistas" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Vistas al embalse</span><span class="en">Reservoir views</span></span></div>
      </div>
      <div class="gi t2" data-cat="entorno" data-label-es="Paraje natural" data-label-en="Natural landscape">
        <div class="gi-bg"><img src="/images/Entorno 13.webp" alt="Paraje" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Paraje natural</span><span class="en">Natural landscape</span></span></div>
      </div>
      <div class="gi" data-cat="entorno" data-label-es="Vegetación mediterránea" data-label-en="Mediterranean vegetation">
        <div class="gi-bg"><img src="/images/Entorno 6.webp" alt="Vegetación" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Vegetación</span><span class="en">Vegetation</span></span></div>
      </div>
      <div class="gi" data-cat="entorno" data-label-es="Pinares" data-label-en="Pine forest">
        <div class="gi-bg"><img src="/images/Entorno 15.webp" alt="Pinares" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Pinares</span><span class="en">Pine forest</span></span></div>
      </div>
      <div class="gi" data-cat="entorno" data-label-es="Vistas panorámicas" data-label-en="Panoramic views">
        <div class="gi-bg"><img src="/images/Entorno 22.webp" alt="Panorámica" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Vistas panorámicas</span><span class="en">Panoramic views</span></span></div>
      </div>
      <div class="gi" data-cat="entorno" data-label-es="Sierra de Ardales" data-label-en="Sierra de Ardales">
        <div class="gi-bg"><img src="/images/Entorno 24.webp" alt="Sierra" loading="lazy"></div>
        <div class="gi-ov"><span>Sierra de Ardales</span></div>
      </div>
      <div class="gi w2" data-cat="entorno" data-label-es="Atardecer en el embalse" data-label-en="Sunset on the reservoir">
        <div class="gi-bg"><img src="/images/Entorno 19.webp" alt="Atardecer" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Atardecer en el embalse</span><span class="en">Sunset on the reservoir</span></span></div>
      </div>

      <!-- Actividades -->
      <div class="gi t2" data-cat="actividades" data-label-es="Caminito del Rey" data-label-en="Caminito del Rey">
        <div class="gi-bg"><img src="/images/caminito.webp" alt="Caminito del Rey" loading="lazy"></div>
        <div class="gi-ov"><span>Caminito del Rey</span></div>
      </div>
      <div class="gi" data-cat="actividades" data-label-es="Puente colgante" data-label-en="Suspension bridge">
        <div class="gi-bg"><img src="/images/colgante1.webp" alt="Puente colgante" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Puente colgante</span><span class="en">Suspension bridge</span></span></div>
      </div>
      <div class="gi" data-cat="actividades" data-label-es="Cueva de Ardales" data-label-en="Ardales Cave">
        <div class="gi-bg"><img src="/images/cueva-ardales.jpg" alt="Cueva de Ardales" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Cueva de Ardales</span><span class="en">Ardales Cave</span></span></div>
      </div>
      <div class="gi" data-cat="actividades" data-label-es="Kayak en el embalse" data-label-en="Kayaking on the reservoir">
        <div class="gi-bg"><img src="/images/KAYAKs.webp" alt="Kayak" loading="lazy"></div>
        <div class="gi-ov"><span>Kayak</span></div>
      </div>
      <div class="gi" data-cat="actividades" data-label-es="Paddle surf" data-label-en="Paddle boarding">
        <div class="gi-bg"><img src="/images/KAYAKs 2.webp" alt="Paddle surf" loading="lazy"></div>
        <div class="gi-ov"><span>Paddle Surf</span></div>
      </div>
      <div class="gi" data-cat="actividades" data-label-es="Escalada en El Chorro" data-label-en="Climbing at El Chorro">
        <div class="gi-bg"><img src="/images/escalada1.webp" alt="Escalada" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Escalada</span><span class="en">Climbing</span></span></div>
      </div>
      <div class="gi" data-cat="actividades" data-label-es="Escalada en El Chorro" data-label-en="Climbing at El Chorro">
        <div class="gi-bg"><img src="/images/escalada3.webp" alt="Escalada" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Escalada</span><span class="en">Climbing</span></span></div>
      </div>
      <div class="gi" data-cat="actividades" data-label-es="Senderismo" data-label-en="Hiking">
        <div class="gi-bg"><img src="/images/Entorno 17.webp" alt="Senderismo" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Senderismo</span><span class="en">Hiking</span></span></div>
      </div>
    </div>

    <div class="gallery-count" id="galleryCount">
      <span class="es">Mostrando <span id="gcNum">39</span> fotos</span>
      <span class="en">Showing <span id="gcNumEn">39</span> photos</span>
    </div>
  </div>
</section>

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

<!-- ─────────────────────────── FOOTER ─────────────────────────── -->
<!-- ── Custom cursor + scroll progress ── -->
<!-- ─────────────────────────── JAVASCRIPT ─────────────────────────── -->
@endsection

@push('scripts')
<script>
  /* Gallery filter + lightbox (page-specific) */
  (function(){
    const grid = document.getElementById('galleryGrid');
    if (!grid) return;
    const items = Array.from(grid.querySelectorAll('.gi'));
    const filters = document.querySelectorAll('.psm-link[data-filter]');
    const countEs = document.getElementById('gcNum');
    const countEn = document.getElementById('gcNumEn');
    let current = 'all';

    function applyFilter(cat) {
      current = cat;
      items.forEach(it => { if (!it.classList.contains('hidden')) it.classList.add('is-fading'); });
      setTimeout(() => {
        let n = 0;
        items.forEach(it => {
          const match = cat === 'all' || it.dataset.cat === cat;
          it.classList.toggle('hidden', !match);
          it.classList.remove('is-fading');
          if (match) { it.classList.add('is-entering'); n++; }
        });
        if (countEs) countEs.textContent = n;
        if (countEn) countEn.textContent = n;
        requestAnimationFrame(() => {
          const visible = items.filter(it => !it.classList.contains('hidden'));
          visible.forEach((it, i) => setTimeout(() => it.classList.remove('is-entering'), i * 22));
        });
      }, 340);
    }

    filters.forEach(btn => {
      btn.addEventListener('click', () => {
        filters.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        applyFilter(btn.dataset.filter);
      });
    });

    /* Lightbox */
    const overlay = document.getElementById('lightboxOverlay');
    const lbImg = document.getElementById('lightboxImg');
    const lbCap = document.getElementById('lightboxCaption');
    const lbClose = document.getElementById('lightboxClose');
    const lbPrev = document.getElementById('lightboxPrev');
    const lbNext = document.getElementById('lightboxNext');
    let idx = 0;

    function visibleItems() {
      return items.filter(it => !it.classList.contains('hidden'));
    }
    function render() {
      const vis = visibleItems();
      if (!vis.length) return;
      idx = ((idx % vis.length) + vis.length) % vis.length;
      const it = vis[idx];
      const img = it.querySelector('img');
      lbImg.src = img.src;
      lbImg.alt = img.alt;
      const en = document.body.classList.contains('lang-en');
      lbCap.textContent = en ? (it.dataset.labelEn || '') : (it.dataset.labelEs || '');
    }
    function open(i) {
      idx = i;
      render();
      overlay.classList.add('open');
      window.lockBodyScroll();
    }
    function close() {
      overlay.classList.remove('open');
      window.unlockBodyScroll();
    }

    items.forEach((it, i) => {
      it.addEventListener('click', () => {
        const vis = visibleItems();
        const localIdx = vis.indexOf(it);
        if (localIdx >= 0) open(localIdx);
      });
    });
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
