@extends('layouts.app', [
    'bodyClass' => 'subpage has-submenu',
    'active' => 'camping',
])

@section('title', 'Camping · Camping Parque Ardales')
@section('meta_description', 'Parcelas de camping en Ardales: tiendas con y sin electricidad, caravanas, autocaravanas y campers pequeñas. A orillas del Embalse Conde de Guadalhorce.')

@push('head')
<style>
    :root { --page-hero-bg: url('/images/TIENDAS 2.webp'); }
  </style>
@endpush

@section('content')
<section class="page-hero">
  <p class="ph-sup"><span class="es">Acampada en la naturaleza</span><span class="en">Camping in nature</span></p>
  <h1>
    <span class="es">Tiendas, caravanas y <em>campers</em></span>
    <span class="en">Tents, caravans &amp; <em>campers</em></span>
  </h1>
  <p class="ph-lead">
    <span class="es">Parcelas delimitadas con sombra natural a orillas del embalse. Con o sin electricidad, para tiendas, autocaravanas o campers. Acceso a todos los servicios del camping.</span>
    <span class="en">Marked-out pitches with natural shade on the reservoir shore. With or without power, for tents, motorhomes or campers. Full access to all campsite services.</span>
  </p>
</section>

<!-- ─── SUBMENÚ STICKY ─── -->
<nav class="page-submenu" aria-label="Secciones de camping">
  <div class="psm-inner" id="psmInner">
    <a href="#tiendas" class="psm-link" data-psm="tiendas"><span class="es">Tiendas</span><span class="en">Tents</span></a>
    <a href="#caravanas" class="psm-link" data-psm="caravanas"><span class="es">Caravanas</span><span class="en">Caravans</span></a>
    <a href="#campers" class="psm-link" data-psm="campers">Campers</a>
    <a href="#tarifas" class="psm-link" data-psm="tarifas"><span class="es">Tarifas</span><span class="en">Rates</span></a>
    <a href="#fotos" class="psm-link" data-psm="fotos"><span class="es">Fotos</span><span class="en">Photos</span></a>
  </div>
</nav>

<!-- ─── TIENDAS ─── -->
<section class="section" id="tiendas">
  <div class="container">
    <div class="detail-block reveal">
      <div class="detail-media">
        <img src="/images/TIENDAS 2.webp" alt="Parcelas para tiendas" loading="lazy">
        <div class="dm-badge">01 · <span class="es">Tiendas</span><span class="en">Tents</span></div>
      </div>
      <div class="detail-body">
        <p class="db-sup"><span class="es">Acampada clásica</span><span class="en">Classic camping</span></p>
        <h2>
          <span class="es">Parcelas para <em>tiendas</em></span>
          <span class="en">Pitches for <em>tents</em></span>
        </h2>
        <p class="lead">
          <span class="es">Parcelas con sombra natural de pinos y vegetación autóctona. Disponibles con o sin electricidad, delimitadas y con acceso directo a baños, duchas calientes 24 h y supermercado.</span>
          <span class="en">Pitches with natural shade from pine trees and native vegetation. Available with or without electricity, marked out and with direct access to bathrooms, 24 h hot showers and the supermarket.</span>
        </p>
        <ul class="feature-list">
          <li><span class="es">Con y sin electricidad</span><span class="en">With or without power</span></li>
          <li><span class="es">Agua corriente cercana</span><span class="en">Nearby running water</span></li>
          <li><span class="es">Sombra natural de pinos</span><span class="en">Natural pine shade</span></li>
          <li><span class="es">Parcelas delimitadas</span><span class="en">Marked-out pitches</span></li>
          <li><span class="es">Baños y duchas 24 h</span><span class="en">24 h bathrooms &amp; showers</span></li>
          <li><span class="es">Pet friendly</span><span class="en">Pet friendly</span></li>
        </ul>
        <div class="detail-cta-row">
          <a href="{{ route('home') }}#booking" class="detail-cta">
            <span class="es">Reservar parcela</span><span class="en">Book pitch</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
          <a href="#tarifas" class="detail-cta-ghost">
            <span class="es">Ver tarifas</span><span class="en">See rates</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── CARAVANAS ─── -->
<section class="section" id="caravanas">
  <div class="container">
    <div class="detail-block reverse reveal">
      <div class="detail-media">
        <img src="/images/Caravanas 1.webp" alt="Parcelas para caravanas y autocaravanas" loading="lazy">
        <div class="dm-badge">02 · <span class="es">Caravanas</span><span class="en">Caravans</span></div>
      </div>
      <div class="detail-body">
        <p class="db-sup"><span class="es">Libertad total</span><span class="en">Total freedom</span></p>
        <h2>
          <span class="es">Caravanas y <em>autocaravanas</em></span>
          <span class="en">Caravans &amp; <em>motorhomes</em></span>
        </h2>
        <p class="lead">
          <span class="es">Parcelas amplias con fácil acceso para caravanas, autocaravanas y campers. Toma eléctrica de 16A, agua potable y conexión de desagüe en cada plaza. Zona habilitada para vaciado químico.</span>
          <span class="en">Spacious pitches with easy access for caravans, motorhomes and campers. 16A power, drinking water and drainage on every plot. Chemical disposal area available.</span>
        </p>
        <ul class="feature-list">
          <li><span class="es">Toma eléctrica 16A</span><span class="en">16A power supply</span></li>
          <li><span class="es">Agua potable</span><span class="en">Drinking water</span></li>
          <li><span class="es">Desagüe aguas grises</span><span class="en">Greywater drainage</span></li>
          <li><span class="es">Vaciado químico</span><span class="en">Chemical disposal</span></li>
          <li><span class="es">Parcelas 90m²+</span><span class="en">Pitches 90m²+</span></li>
          <li><span class="es">WiFi en zona común</span><span class="en">WiFi in common area</span></li>
        </ul>
        <div class="detail-cta-row">
          <a href="{{ route('home') }}#booking" class="detail-cta">
            <span class="es">Reservar plaza</span><span class="en">Book plot</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
          <a href="mailto:info@parqueardales.com" class="detail-cta-ghost">
            <span class="es">Consultar grupos</span><span class="en">Ask about groups</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── CAMPERS ─── -->
<section class="section" id="campers">
  <div class="container">
    <div class="detail-block reveal">
      <div class="detail-media">
        <img src="/images/Caravanas 2.webp" alt="Parcelas para campers pequeñas" loading="lazy">
        <div class="dm-badge">03 · <span class="es">Campers</span><span class="en">Campers</span></div>
      </div>
      <div class="detail-body">
        <p class="db-sup"><span class="es">Vanlife</span><span class="en">Vanlife</span></p>
        <h2>
          <span class="es">Campers <em>pequeñas</em></span>
          <span class="en"><em>Small</em> campers</span>
        </h2>
        <p class="lead">
          <span class="es">Zona específica para furgonetas camperizadas y vehículos compactos. Parcelas más contenidas, con servicios del camping al alcance. Ideal para viajes rápidos o escapadas en van.</span>
          <span class="en">Dedicated area for camperised vans and compact vehicles. Smaller pitches with full camp services nearby. Ideal for quick trips or van escapades.</span>
        </p>
        <ul class="feature-list">
          <li><span class="es">Acceso fácil</span><span class="en">Easy access</span></li>
          <li><span class="es">Zona diferenciada</span><span class="en">Dedicated zone</span></li>
          <li><span class="es">Punto de agua cercano</span><span class="en">Nearby water point</span></li>
          <li><span class="es">Vaciado químico</span><span class="en">Chemical disposal</span></li>
        </ul>
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
      <span class="es">IVA incluido. Precios orientativos — consulta tarifa actualizada en recepción o por email.</span>
      <span class="en">VAT included. Indicative prices — check updated rates at reception or by email.</span>
    </p>

    <div class="pricing-wrap reveal">
      <!-- Main table -->
      <div class="pricing-card">
        <div class="pricing-head">
          <p class="ph-sup"><span class="es">Precios por día</span><span class="en">Daily rates</span></p>
          <h3>
            <span class="es">Parcelas y <em>extras</em></span>
            <span class="en">Pitches &amp; <em>extras</em></span>
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
              <td><span class="es">Parcela caravana</span><span class="en">Caravan pitch</span><span class="note-mark">*</span> <span style="color:var(--ink-light);font-size:0.8rem">· 2 <span class="es">personas</span><span class="en">people</span></span></td>
              <td><span class="price alta">26,50 €</span></td>
              <td><span class="price media">23,50 €</span></td>
              <td><span class="price baja">20,00 €</span></td>
            </tr>
            <tr>
              <td><span class="es">Parcela autocaravana</span><span class="en">Motorhome pitch</span><span class="note-mark">*</span> <span style="color:var(--ink-light);font-size:0.8rem">· 2 <span class="es">pers.</span><span class="en">people</span></span></td>
              <td><span class="price alta">22,00 €</span></td>
              <td><span class="price media">19,50 €</span></td>
              <td><span class="price baja">16,50 €</span></td>
            </tr>
            <tr>
              <td><span class="es">Parcela tienda · eléctrica</span><span class="en">Tent pitch · with power</span><span class="note-mark">*</span> <span style="color:var(--ink-light);font-size:0.8rem">· 2 <span class="es">pers.</span><span class="en">people</span></span></td>
              <td><span class="price alta">25,00 €</span></td>
              <td><span class="price media">22,00 €</span></td>
              <td><span class="price baja">19,00 €</span></td>
            </tr>
            <tr>
              <td><span class="es">Parcela tienda · sin electricidad</span><span class="en">Tent pitch · no power</span> <span style="color:var(--ink-light);font-size:0.8rem">· 2 <span class="es">pers.</span><span class="en">people</span></span></td>
              <td><span class="price alta">22,00 €</span></td>
              <td><span class="price media">19,00 €</span></td>
              <td><span class="price baja">16,00 €</span></td>
            </tr>
            <tr class="group-divider">
              <td><span class="es">Adulto adicional</span><span class="en">Extra adult</span> <span style="color:var(--ink-light);font-size:0.8rem">· <span class="es">mayor de 12 años</span><span class="en">12 yrs+</span></span></td>
              <td><span class="price alta">6,00 €</span></td>
              <td><span class="price media">5,00 €</span></td>
              <td><span class="price baja">4,00 €</span></td>
            </tr>
            <tr>
              <td><span class="es">Niño/a</span><span class="en">Child</span> <span style="color:var(--ink-light);font-size:0.8rem">· 2–12 <span class="es">años</span><span class="en">yrs</span></span></td>
              <td><span class="price alta">4,00 €</span></td>
              <td><span class="price media">3,50 €</span></td>
              <td><span class="price baja">3,00 €</span></td>
            </tr>
            <tr class="group-divider">
              <td><span class="es">Mascota</span><span class="en">Pet</span></td>
              <td><span class="price alta">2,50 €</span></td>
              <td><span class="price media">2,00 €</span></td>
              <td><span class="price baja">1,50 €</span></td>
            </tr>
            <tr>
              <td><span class="es">Visita a alojados</span><span class="en">Visit to guests</span> <span style="color:var(--ink-light);font-size:0.8rem">· 12:00–20:00</span></td>
              <td><span class="price alta">3,00 €</span></td>
              <td><span class="price media">2,50 €</span></td>
              <td><span class="price baja">2,00 €</span></td>
            </tr>
            <tr>
              <td><span class="es">Coche o turismo adicional</span><span class="en">Extra car</span></td>
              <td><span class="price alta">5,00 €</span></td>
              <td><span class="price media">4,50 €</span></td>
              <td><span class="price baja">4,00 €</span></td>
            </tr>
            <tr>
              <td><span class="es">Moto o remolque</span><span class="en">Motorbike or trailer</span></td>
              <td><span class="price alta">4,00 €</span></td>
              <td><span class="price media">3,60 €</span></td>
              <td><span class="price baja">3,00 €</span></td>
            </tr>
            <tr class="group-divider flat-row">
              <td><span class="es">Lavadora · Secadora</span><span class="en">Washer · Dryer</span> <span style="color:var(--ink-light);font-size:0.8rem">· 9 kg</span></td>
              <td colspan="3" class="price-flat">4,50 € <span style="color:var(--ink-light);margin:0 0.35rem">/</span> 3,00 €</td>
            </tr>
            <tr>
              <td><span class="es">Fianza grupos</span><span class="en">Group deposit</span> <span style="color:var(--ink-light);font-size:0.8rem">· 2 <span class="es">parcelas</span><span class="en">pitches</span> <span class="es">o</span><span class="en">or</span> 6 <span class="es">pers.</span><span class="en">pax</span></span></td>
              <td colspan="3" class="price-flat">50,00 €</td>
            </tr>
          </tbody>
        </table>

        <div class="pricing-foot">
          <p><strong class="mark">*</strong> <span class="es">Incluye electricidad con Caravana / Remolque-Tienda / Autocaravana, o Vehículo + Tienda.</span><span class="en">Includes electricity for Caravan / Trailer-Tent / Motorhome, or Vehicle + Tent.</span></p>
        </div>
      </div>

      <!-- Side -->
      <div class="pricing-side">
        <div class="season-card">
          <h4><span class="es">Temporadas</span><span class="en">Seasons</span></h4>
          <div class="sc-row">
            <span class="sc-tag alta"><span class="es">Alta</span><span class="en">High</span></span>
            <span class="sc-desc"><span class="es">29 junio al 6 septiembre</span><span class="en">Jun 29 to Sep 6</span></span>
          </div>
          <div class="sc-row">
            <span class="sc-tag media"><span class="es">Media</span><span class="en">Mid</span></span>
            <span class="sc-desc"><span class="es">1–6 enero · 9–11 enero · 16 enero al 28 junio · 7 septiembre al 31 diciembre</span><span class="en">Jan 1–6 · Jan 9–11 · Jan 16 to Jun 28 · Sep 7 to Dec 31</span></span>
          </div>
          <div class="sc-row">
            <span class="sc-tag baja"><span class="es">Baja</span><span class="en">Low</span></span>
            <span class="sc-desc"><span class="es">7–8 enero · 12–15 enero</span><span class="en">Jan 7–8 · Jan 12–15</span></span>
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
    <p class="section-sup reveal"><span class="es">El recinto en imágenes</span><span class="en">The grounds in photos</span></p>
    <h2 class="section-h reveal">
      <span class="es"><em>Fotos</em> del camping</span>
      <span class="en">Campsite <em>photos</em></span>
    </h2>

    <div class="gallery-grid reveal" id="fotosGrid" style="margin-top: 2rem;">
      <div class="gi w2" data-label-es="Zona de tiendas" data-label-en="Tent area">
        <div class="gi-bg"><img src="/images/TIENDAS 2.webp" alt="Zona de tiendas" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Zona de tiendas</span><span class="en">Tent area</span></span></div>
      </div>
      <div class="gi" data-label-es="Tiendas entre pinos" data-label-en="Tents among pines">
        <div class="gi-bg"><img src="/images/TIENDAS.webp" alt="Tiendas" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Sombra natural</span><span class="en">Natural shade</span></span></div>
      </div>
      <div class="gi" data-label-es="Tiendas · vegetación" data-label-en="Tents · vegetation">
        <div class="gi-bg"><img src="/images/TIENDAS 3.webp" alt="Tiendas" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Vegetación</span><span class="en">Vegetation</span></span></div>
      </div>
      <div class="gi" data-label-es="Parcela caravana" data-label-en="Caravan pitch">
        <div class="gi-bg"><img src="/images/Caravanas 1.webp" alt="Parcela caravana" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Caravana</span><span class="en">Caravan</span></span></div>
      </div>
      <div class="gi" data-label-es="Parcela autocaravana" data-label-en="Motorhome pitch">
        <div class="gi-bg"><img src="/images/Caravanas 2.webp" alt="Autocaravana" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Autocaravana</span><span class="en">Motorhome</span></span></div>
      </div>
      <div class="gi t2" data-label-es="Piscina infinita" data-label-en="Infinity pool">
        <div class="gi-bg"><img src="/images/Entorno 20.webp" alt="Piscina" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Piscina</span><span class="en">Pool</span></span></div>
      </div>
      <div class="gi" data-label-es="Entorno natural" data-label-en="Natural setting">
        <div class="gi-bg"><img src="/images/Entorno 5.webp" alt="Entorno" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Entorno</span><span class="en">Setting</span></span></div>
      </div>
      <div class="gi" data-label-es="Vistas al embalse" data-label-en="Reservoir views">
        <div class="gi-bg"><img src="/images/Entorno 11.webp" alt="Embalse" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Embalse</span><span class="en">Reservoir</span></span></div>
      </div>
      <div class="gi" data-label-es="Pinares y sombra" data-label-en="Pine forest">
        <div class="gi-bg"><img src="/images/Entorno 9.webp" alt="Pinares" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Pinares</span><span class="en">Pine forest</span></span></div>
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
  <p class="eyebrow"><span class="es">¿Buscas más comodidad?</span><span class="en">Prefer more comfort?</span></p>
  <h3>
    <span class="es">Tenemos también <em>apartamentos</em></span>
    <span class="en">We also offer <em>apartments</em></span>
  </h3>
  <div class="cta-pair">
    <a href="{{ route('apartamentos') }}" class="cc-btn">
      <span class="es">Ver apartamentos</span><span class="en">See apartments</span>
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
    function open(i) { idx = i; render(); overlay.classList.add('open'); document.body.style.overflow = 'hidden'; }
    function close() { overlay.classList.remove('open'); document.body.style.overflow = ''; }
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
