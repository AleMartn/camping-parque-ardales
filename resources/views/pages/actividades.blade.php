@extends('layouts.app', [
    'bodyClass' => 'subpage',
    'active' => 'actividades',
])

@section('title', 'Actividades · Camping Parque Ardales')
@section('meta_description', 'Actividades y experiencias en Camping Parque Ardales: Caminito del Rey, Cueva de Ardales, kayak, senderismo, escalada, Ronda y El Torcal.')

@push('head')
<style>
    :root { --page-hero-bg: url('/images/caminito.webp'); }
  </style>
@endpush

@section('content')
<section class="page-hero">
  <p class="ph-sup"><span class="es">Aventura y descubrimiento</span><span class="en">Adventure &amp; discovery</span></p>
  <h1>
    <span class="es">Actividades y <em>experiencias</em></span>
    <span class="en">Activities &amp; <em>experiences</em></span>
  </h1>
  <p class="ph-lead">
    <span class="es">Caminito del Rey, cuevas prehistóricas, kayak en el embalse, escalada de referencia mundial y escapadas a Ronda o El Torcal — todo a pocos minutos del camping.</span>
    <span class="en">Caminito del Rey, prehistoric caves, reservoir kayaking, world-class climbing and day trips to Ronda or El Torcal — all minutes from camp.</span>
  </p>
</section>

<section class="section" style="padding-top: 3.5rem;">
  <div class="container">
    <div class="acts-grid reveal" id="actsGrid">

      <!-- 0 · Caminito del Rey (featured) -->
      <div class="act-tile featured" data-act="0">
        <img src="/images/caminito.webp" alt="Caminito del Rey" loading="lazy">
        <div class="at-arrow">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </div>
        <div class="at-ov">
          <span class="at-tag"><span class="es">Destacado · 1,5 km</span><span class="en">Featured · 1.5 km</span></span>
          <h3>Caminito del Rey</h3>
          <p class="at-sub"><span class="es">Pasarelas sobre el desfiladero de los Gaitanes</span><span class="en">Walkways over the Gaitanes gorge</span></p>
        </div>
      </div>

      <!-- 1 · Cueva de Ardales -->
      <div class="act-tile" data-act="1">
        <img src="/images/cueva-ardales.jpg" alt="Cueva de Ardales" loading="lazy">
        <div class="at-arrow">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </div>
        <div class="at-ov">
          <span class="at-tag"><span class="es">Visita guiada</span><span class="en">Guided tour</span></span>
          <h3><span class="es">Cueva de Ardales</span><span class="en">Ardales Cave</span></h3>
        </div>
      </div>

      <!-- 2 · Náuticas -->
      <div class="act-tile" data-act="2">
        <img src="/images/KAYAKs.webp" alt="Actividades náuticas" loading="lazy">
        <div class="at-arrow">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </div>
        <div class="at-ov">
          <span class="at-tag"><span class="es">En el embalse</span><span class="en">On the reservoir</span></span>
          <h3><span class="es">Náuticas</span><span class="en">Water sports</span></h3>
        </div>
      </div>

      <!-- 3 · Escalada (wide · abre modal dedicado) -->
      <div class="act-tile wide" data-act="escalada">
        <img src="/images/escalada1.webp" alt="Escalada" loading="lazy">
        <div class="at-arrow">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </div>
        <div class="at-ov">
          <span class="at-tag"><span class="es">Referente europeo · El Chorro</span><span class="en">European reference · El Chorro</span></span>
          <h3><span class="es">Escalada &amp; vía ferrata</span><span class="en">Climbing &amp; via ferrata</span></h3>
          <p class="at-sub"><span class="es">4 zonas principales + rocódromo en el camping</span><span class="en">4 main areas + on-site climbing wall</span></p>
        </div>
      </div>

      <!-- 4 · Senderismo -->
      <div class="act-tile" data-act="3">
        <img src="/images/Entorno 17.webp" alt="Senderismo" loading="lazy">
        <div class="at-arrow">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </div>
        <div class="at-ov">
          <span class="at-tag"><span class="es">Todos los niveles</span><span class="en">All levels</span></span>
          <h3><span class="es">Senderismo</span><span class="en">Hiking</span></h3>
        </div>
      </div>

      <!-- 5 · Ronda -->
      <div class="act-tile" data-act="4">
        <img src="/images/Entorno 18.webp" alt="Tajo de Ronda" loading="lazy">
        <div class="at-arrow">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </div>
        <div class="at-ov">
          <span class="at-tag"><span class="es">~45 min · coche</span><span class="en">~45 min · car</span></span>
          <h3>Tajo de Ronda</h3>
        </div>
      </div>

      <!-- 6 · Torcal -->
      <div class="act-tile wide" data-act="5">
        <img src="/images/Entorno 22.webp" alt="El Torcal de Antequera" loading="lazy">
        <div class="at-arrow">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </div>
        <div class="at-ov">
          <span class="at-tag"><span class="es">~1 h · Patrimonio UNESCO</span><span class="en">~1 h · UNESCO</span></span>
          <h3><span class="es">El Torcal de Antequera</span><span class="en">El Torcal de Antequera</span></h3>
          <p class="at-sub"><span class="es">Formaciones kársticas únicas en Europa</span><span class="en">Karst formations unique in Europe</span></p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ─── RICH ACTIVITY MODAL ─── -->
<div class="ax-modal-overlay" id="axOverlay" role="dialog" aria-modal="true">
  {{-- Botón fuera de .ax-modal: posicionado relativo al overlay (fixed) para
       que se quede visible aunque .ax-modal scrollee internamente. --}}
  <button class="ax-modal-close" id="axClose" aria-label="Close">✕</button>
  <div class="ax-modal" data-lenis-prevent>
    <div class="ax-modal-img">
      <img id="axImg" src="" alt="">
      <div class="am-tag" id="axTag"></div>
    </div>
    <div class="ax-modal-body">
      <p class="am-sup" id="axSup"></p>
      <h3 id="axTitle"></h3>
      <p id="axDesc"></p>
      <div class="am-facts" id="axFacts"></div>
      <ul class="am-list" id="axList"></ul>
      <div class="am-ctas" id="axCtas"></div>
    </div>
  </div>
</div>

<!-- ─── CLIMB MODAL ─── -->
<div class="climb-modal-overlay" id="climbOverlay" role="dialog" aria-modal="true">
  <div class="climb-modal">
    <button class="climb-modal-close" id="climbClose" aria-label="Close">✕</button>
    <div class="climb-modal-body" data-lenis-prevent>
      <header class="cm-head">
        <p class="cm-sup"><span class="es">Referente europeo · El Chorro</span><span class="en">European reference · El Chorro</span></p>
        <h2>
          <span class="es"><em>Escalada</em> y vía ferrata</span>
          <span class="en"><em>Climbing</em> &amp; via ferrata</span>
        </h2>
        <p>
          <span class="es">Estás en el corazón de uno de los destinos de escalada más reconocidos de Europa. El Chorro, Desplomilandia, Teba y Ardales ofrecen cientos de vías equipadas para todos los niveles, con clima óptimo en invierno y verano según la zona.</span>
          <span class="en">You're at the heart of one of Europe's most renowned climbing destinations. El Chorro, Desplomilandia, Teba and Ardales offer hundreds of bolted routes for all levels, with optimal climate in winter and summer depending on the area.</span>
        </p>
        <p>
          <span class="es">Desde el camping, la aproximación a cualquier sector es de entre 5 y 30 minutos en coche. En recepción te orientamos con mapas, guías y recomendaciones según tu nivel y la época del año.</span>
          <span class="en">From the campsite, any sector is 5 to 30 minutes away by car. At reception we advise on maps, guidebooks and picks based on your level and the season.</span>
        </p>
      </header>

      <!-- Rocódromo: tarjeta con imagen -->
      <div class="cm-rocodromo">
        <div class="cm-rocodromo-img">
          <img src="/images/escalada2.webp" alt="Rocódromo en el camping" loading="lazy">
        </div>
        <div class="cm-rocodromo-body">
          <p class="cr-sup"><span class="es">En el recinto</span><span class="en">On site</span></p>
          <h3>
            <span class="es">Rocódromo en el <em>camping</em></span>
            <span class="en">Climbing wall at the <em>campsite</em></span>
          </h3>
          <p>
            <span class="es">Disponemos de rocódromo en el propio camping, gestionado a través de Indian Sport. Perfecto para calentar, entrenar días de lluvia o iniciarse antes de salir a las zonas exteriores.</span>
            <span class="en">We have an on-site climbing wall operated by Indian Sport. Ideal for warming up, training on rainy days, or getting started before heading out to the crags.</span>
          </p>
          <div class="cr-partner">
            <strong><span class="es">Operado por:</span><span class="en">Operated by:</span></strong> Indian Sport · <span style="color:var(--ink-light)"><span class="es">horarios y tarifas en recepción</span><span class="en">hours and rates at reception</span></span>
          </div>
        </div>
      </div>

      <div class="cm-zones-head">
        <h3><span class="es">Zonas <em>exteriores</em></span><span class="en"><em>Outdoor</em> areas</span></h3>
        <span class="cm-zones-count"><span class="es">4 zonas principales</span><span class="en">4 main areas</span></span>
      </div>

      <div class="cm-zones">
        <!-- El Chorro -->
        <article class="climb-zone">
          <div class="cz-media">
            <span class="cz-season cold"><span class="es">Invierno</span><span class="en">Winter</span></span>
            <img src="/images/colgante1.webp" alt="El Chorro" loading="lazy">
          </div>
          <div class="cz-body">
            <p class="cz-type"><span class="es">Deportiva · Multilargos · Vía ferrata K3</span><span class="en">Sport · Multi-pitch · K3 via ferrata</span></p>
            <h3><em>El Chorro</em></h3>
            <dl>
              <dt><span class="es">Zonas</span><span class="en">Sectors</span></dt>
              <dd>Frontales, Encantadas, Escalera Árabe, Cañón</dd>
              <dt><span class="es">Nivel</span><span class="en">Level</span></dt>
              <dd><span class="es">Todos los niveles. Desde 4º (Serena, Rocabella) hasta Makinódromo.</span><span class="en">All levels. From grade 4 (Serena, Rocabella) to Makinódromo.</span></dd>
            </dl>
            <p class="cz-parking-label" style="margin-bottom:0.4rem;"><span class="es">Aproximaciones</span><span class="en">Approach times</span></p>
            <div class="cz-approach">
              <span class="cz-appr-pill"><strong>10 min</strong>Frontales · ferrata</span>
              <span class="cz-appr-pill"><strong>3 min</strong>Encantadas</span>
              <span class="cz-appr-pill"><strong>15 min</strong>Escalera Árabe</span>
              <span class="cz-appr-pill"><strong>30 min</strong>Cañón</span>
            </div>
            <div class="cz-parking">
              <p class="cz-parking-label"><span class="es">Parkings</span><span class="en">Parkings</span></p>
              <a href="https://maps.app.goo.gl/NovAxs8tsiMK2Rs18" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Frontales y Cañón</a>
              <a href="https://maps.app.goo.gl/4WAsJEM591Ch1oLh6" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Zonas de la Encantada</a>
              <a href="https://maps.app.goo.gl/24arVToc7kTbqpHB6" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Escalera Árabe</a>
            </div>
          </div>
        </article>

        <!-- Desplomilandia -->
        <article class="climb-zone">
          <div class="cz-media">
            <span class="cz-season warm"><span class="es">Verano</span><span class="en">Summer</span></span>
            <img src="/images/escalada2.webp" alt="Desplomilandia" loading="lazy">
          </div>
          <div class="cz-body">
            <p class="cz-type"><span class="es">Deportiva</span><span class="en">Sport climbing</span></p>
            <h3><em>Desplomilandia</em></h3>
            <dl>
              <dt><span class="es">Sectores</span><span class="en">Sectors</span></dt>
              <dd>La Boda, Buena Sombra, Tajo Acebuche, Next Level, Como la Vida Misma, El Cable, Poza de la Mona</dd>
              <dt><span class="es">Nivel</span><span class="en">Level</span></dt>
              <dd><span class="es">5º grado (Como la Vida Misma) hasta 8b+ (Buena Sombra).</span><span class="en">Grade 5 (Como la Vida Misma) to 8b+ (Buena Sombra).</span></dd>
            </dl>
            <p class="cz-parking-label" style="margin-bottom:0.4rem;"><span class="es">Aproximación</span><span class="en">Approach</span></p>
            <div class="cz-approach">
              <span class="cz-appr-pill"><strong>~10 min</strong><span class="es">Media</span><span class="en">Average</span></span>
            </div>
            <div class="cz-parking">
              <p class="cz-parking-label"><span class="es">Parkings</span><span class="en">Parkings</span></p>
              <a href="https://maps.app.goo.gl/i18Ncs7A1Uq7Jgj37" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Desplomilandia</a>
              <a href="https://maps.app.goo.gl/Egw7EdEj72TjhPEw5" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Poza de la Mona</a>
            </div>
          </div>
        </article>

        <!-- Teba -->
        <article class="climb-zone">
          <div class="cz-media">
            <span class="cz-season cold"><span class="es">Invierno</span><span class="en">Winter</span></span>
            <img src="/images/escalada3.webp" alt="Zonas de Teba" loading="lazy">
          </div>
          <div class="cz-body">
            <p class="cz-type"><span class="es">Deportiva</span><span class="en">Sport climbing</span></p>
            <h3><span class="es">Zonas de <em>Teba</em></span><span class="en"><em>Teba</em> areas</span></h3>
            <dl>
              <dt><span class="es">Sectores</span><span class="en">Sectors</span></dt>
              <dd>Tajo de los Rojos, Tajo del Molino, Tajo de la Lentejuela, Bufones, Castillo de Teba</dd>
              <dt><span class="es">Nivel</span><span class="en">Level</span></dt>
              <dd><span class="es">De 5º grado hasta 8b en el Tajo de los Rojos.</span><span class="en">From grade 5 to 8b at Tajo de los Rojos.</span></dd>
            </dl>
            <p class="cz-parking-label" style="margin-bottom:0.4rem;"><span class="es">Aproximación</span><span class="en">Approach</span></p>
            <div class="cz-approach">
              <span class="cz-appr-pill"><strong>~10 min</strong><span class="es">Media</span><span class="en">Average</span></span>
            </div>
            <div class="cz-warning">
              <strong><span class="es">Restricciones:</span><span class="en">Restrictions:</span></strong>
              <span class="es"> Tajo de la Lentejuela y Tajo del Molino solo abiertos de septiembre a diciembre por anidación de aves.</span>
              <span class="en"> Tajo de la Lentejuela and Tajo del Molino only open September to December due to bird nesting.</span>
            </div>
            <div class="cz-parking">
              <p class="cz-parking-label"><span class="es">Parkings</span><span class="en">Parkings</span></p>
              <a href="https://maps.app.goo.gl/GSWih9XurKBCWQxv8" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Tajo de los Rojos</a>
              <a href="https://maps.app.goo.gl/1wozTqLTh3QCKVhh9" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Tajo del Molino</a>
              <a href="https://maps.app.goo.gl/rzxjamvqAN2pZkys5" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Tajo de la Lentejuela</a>
              <a href="https://maps.app.goo.gl/HC8kXHm2XcuKX1vXA" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Bufones</a>
              <a href="https://maps.app.goo.gl/xvqouvA6bRF1zZLG9" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Castillo de Teba</a>
            </div>
          </div>
        </article>

        <!-- Ardales -->
        <article class="climb-zone">
          <div class="cz-media">
            <span class="cz-season all"><span class="es">Invierno y verano</span><span class="en">Winter &amp; summer</span></span>
            <img src="/images/Entorno 13.webp" alt="Zonas de Ardales" loading="lazy">
          </div>
          <div class="cz-body">
            <p class="cz-type"><span class="es">Deportiva</span><span class="en">Sport climbing</span></p>
            <h3><span class="es">Zonas de <em>Ardales</em></span><span class="en"><em>Ardales</em> areas</span></h3>
            <dl>
              <dt><span class="es">Sectores</span><span class="en">Sectors</span></dt>
              <dd>Tajo de la Laja, Turón</dd>
              <dt><span class="es">Nivel</span><span class="en">Level</span></dt>
              <dd><span class="es">De 5º hasta 8c con predominio del 7º grado.</span><span class="en">From grade 5 to 8c, mostly 7th grade.</span></dd>
            </dl>
            <p class="cz-parking-label" style="margin-bottom:0.4rem;"><span class="es">Aproximación</span><span class="en">Approach</span></p>
            <div class="cz-approach">
              <span class="cz-appr-pill"><strong>~10 min</strong><span class="es">Media</span><span class="en">Average</span></span>
            </div>
            <div class="cz-parking">
              <p class="cz-parking-label"><span class="es">Parkings</span><span class="en">Parkings</span></p>
              <a href="https://maps.app.goo.gl/8xrKvSadppFG1ndG9" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Turón</a>
              <a href="https://maps.app.goo.gl/QQfDNYDGZePkR3B66" target="_blank" rel="noopener"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Tajo de la Laja</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>

<!-- Cross CTA -->
<div class="cross-cta">
  <p class="eyebrow"><span class="es">Una base única</span><span class="en">A unique base</span></p>
  <h3>
    <span class="es">Todas estas experiencias, <em>a pocos minutos</em> del camping</span>
    <span class="en">All these experiences, <em>minutes away</em> from camp</span>
  </h3>
  <div class="cta-pair">
    <a href="{{ route('home') }}#booking" class="cc-btn">
      <span class="es">Reservar estancia</span><span class="en">Book your stay</span>
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
    <a href="{{ route('camping') }}" class="cc-btn ghost">
      <span class="es">Ver alojamientos</span><span class="en">See accommodation</span>
    </a>
  </div>
</div>
@endsection

@push('scripts')
<script>
  /* Page-specific rich activity modal */
  (function(){
    const data = [
      {
        tag: { es: 'Destacado · 1,5 km del camping', en: 'Featured · 1.5 km from camp' },
        sup: { es: 'El hito imprescindible', en: 'The must-see' },
        title: { es: 'Caminito <em>del Rey</em>', en: 'Caminito <em>del Rey</em>' },
        img: '/images/caminito.webp',
        desc: {
          es: 'Una de las rutas más espectaculares de España. Pasarelas sobre cortados verticales con vistas únicas al desfiladero de los Gaitanes y los embalses del Chorro. Si reservas con nosotros con al menos 3 días de antelación, gestionamos tus entradas.',
          en: 'One of the most spectacular routes in Spain. Walkways over vertical cliffs with unique views of the Gaitanes gorge and El Chorro reservoirs. Book with us at least 3 days in advance and we handle your tickets.'
        },
        facts: [
          { num: '7,7 km', label: { es:'Recorrido', en:'Distance' } },
          { num: '3–4 h',  label: { es:'Duración', en:'Duration' } },
          { num: 'Media',  label: { es:'Dificultad', en:'Difficulty' } }
        ],
        list: {
          es: ['Pasarelas colgantes sobre el desfiladero', 'Puente colgante final', 'Acceso peatonal a 1,5 km del camping (más 1,5 km de sendero hasta la taquilla)', 'Las entradas deben comprarse con antelación'],
          en: ['Hanging walkways over the gorge', 'Final suspension bridge', 'Pedestrian access 1.5 km from the campsite (plus 1.5 km footpath to the ticket office)', 'Tickets must be purchased in advance']
        },
        ctas: [
          { label: { es:'Web oficial', en:'Official site' }, href: 'https://www.caminitodelrey.info', external: true },
          { label: { es:'Reservar con entradas', en:'Book stay with tickets' }, href: '#booking', ghost: true }
        ]
      },
      {
        tag: { es: 'Visita guiada · ~8 km', en: 'Guided tour · ~8 km' },
        sup: { es: 'Prehistoria viva', en: 'Living prehistory' },
        title: { es: 'Cueva de <em>Ardales</em>', en: 'Ardales <em>Cave</em>' },
        img: '/images/cueva-ardales.jpg',
        desc: {
          es: 'Una de las cuevas prehistóricas más importantes de Andalucía, con pinturas rupestres del Paleolítico. Visitas guiadas disponibles con reserva previa.',
          en: 'One of the most important prehistoric caves in Andalusia, with Palaeolithic rock paintings. Guided visits available with prior booking.'
        },
        facts: [],
        list: {
          es: ['Pinturas rupestres del Paleolítico', 'Visitas guiadas en español', 'Reserva previa recomendada', 'Formaciones kársticas únicas'],
          en: ['Palaeolithic rock paintings', 'Guided tours in Spanish', 'Advance booking recommended', 'Unique karst formations']
        },
        ctas: [
          { label: { es:'Comprar entradas', en:'Buy tickets' }, href: 'https://www.giglon.com/todos?idEvent=visitas-guiadas-a-la-cueva-de-ardales-malaga', external: true }
        ]
      },
      {
        tag: { es: 'En el embalse', en: 'On the reservoir' },
        sup: { es: 'Aguas cristalinas', en: 'Crystal-clear waters' },
        title: { es: 'Actividades <em>náuticas</em>', en: 'Water <em>activities</em>' },
        img: '/images/KAYAKs.webp',
        desc: {
          es: 'Kayak, paddle surf y natación en las aguas del Embalse Conde de Guadalhorce. Un escenario espectacular rodeado de pinares y paredes rocosas que se reflejan en el agua.',
          en: 'Kayaking, paddle boarding and swimming in the Conde de Guadalhorce Reservoir. A spectacular setting surrounded by pine forest and rocky walls mirrored in the water.'
        },
        facts: [
          { num: '✓', label: { es:'Kayak', en:'Kayak' } },
          { num: '✓', label: { es:'Paddle surf', en:'Paddle surf' } },
          { num: '✓', label: { es:'Baño', en:'Swimming' } }
        ],
        list: {
          es: ['Alquiler de equipo en proveedores locales', 'Aguas tranquilas aptas para iniciación', 'Embarcadero cercano al camping'],
          en: ['Gear rental from local providers', 'Calm waters suitable for beginners', 'Pier close to the campsite']
        },
        ctas: [
          { label: { es:'Consultar proveedores', en:'Ask about providers' }, href: '{{ route('contacto') }}' }
        ]
      },
      {
        tag: { es: 'Todos los niveles', en: 'All levels' },
        sup: { es: 'Sierra de Ardales', en: 'Sierra de Ardales' },
        title: { es: '<em>Senderismo</em> y rutas', en: '<em>Hiking</em> &amp; trails' },
        img: '/images/Entorno 17.webp',
        desc: {
          es: 'Rutas señalizadas por el embalse, la Sierra de Ardales y el desfiladero. Desde paseos familiares hasta travesías exigentes. Descarga los tracks en Wikiloc y explora la naturaleza malagueña en su máxima expresión.',
          en: 'Waymarked routes around the reservoir, Sierra de Ardales and the gorge. From family strolls to demanding traverses. Download tracks on Wikiloc and explore Málaga\'s nature at its finest.'
        },
        facts: [
          { num: '✓', label: { es:'Rutas familiares', en:'Family routes' } },
          { num: '✓', label: { es:'Tracks GPS', en:'GPS tracks' } },
          { num: '✓', label: { es:'Señalizadas', en:'Waymarked' } }
        ],
        list: {
          es: ['Rutas de 2–15 km en torno al embalse', 'Acceso directo a la Sierra de Ardales', 'Tracks descargables en Wikiloc', 'Mapas e indicaciones en recepción'],
          en: ['2–15 km routes around the reservoir', 'Direct access to Sierra de Ardales', 'Downloadable tracks on Wikiloc', 'Maps and tips at reception']
        },
        ctas: [
          { label: { es:'Ver rutas en Wikiloc', en:'Routes on Wikiloc' }, href: 'https://www.wikiloc.com/trails/hiking/spain/andalucia/malaga/ardales', external: true }
        ]
      },
      {
        tag: { es: 'Escapada cultural · ~45 min', en: 'Day trip · ~45 min' },
        sup: { es: 'Ciudad emblemática', en: 'Iconic city' },
        title: { es: 'Tajo de <em>Ronda</em>', en: 'Tajo de <em>Ronda</em>' },
        img: '/images/Entorno 18.webp',
        desc: {
          es: 'Visita la emblemática ciudad de Ronda con su espectacular Puente Nuevo sobre el Tajo. Pasea por el casco antiguo, descubre la plaza de toros más antigua de España y disfruta de la gastronomía local.',
          en: 'Visit the iconic city of Ronda with its spectacular Puente Nuevo over the gorge. Stroll through the old town, discover Spain\'s oldest bullring and enjoy the local cuisine.'
        },
        facts: [
          { num: '45 min', label: { es:'En coche', en:'By car' } },
          { num: '120 m',  label: { es:'Puente Nuevo', en:'Puente Nuevo' } },
          { num: '1785',   label: { es:'Plaza de toros', en:'Bullring' } }
        ],
        list: {
          es: ['Puente Nuevo sobre el Tajo', 'Casco antiguo medieval', 'Plaza de toros histórica', 'Bodegas y gastronomía serrana'],
          en: ['Puente Nuevo over the gorge', 'Medieval old town', 'Historic bullring', 'Wineries and mountain cuisine']
        },
        ctas: []
      },
      {
        tag: { es: 'Patrimonio UNESCO · ~1 h', en: 'UNESCO · ~1 h' },
        sup: { es: 'Geología única', en: 'Unique geology' },
        title: { es: 'El Torcal de <em>Antequera</em>', en: 'El Torcal de <em>Antequera</em>' },
        img: '/images/Entorno 22.webp',
        desc: {
          es: 'Paraje natural con formaciones kársticas únicas en Europa. Rutas circulares señalizadas entre esculturas de piedra esculpidas por la erosión durante millones de años. Declarado Patrimonio de la Humanidad.',
          en: 'A natural park with karst formations unique in Europe. Waymarked circular routes through stone sculptures carved by erosion over millions of years. Declared UNESCO World Heritage.'
        },
        facts: [
          { num: '~1 h',  label: { es:'En coche', en:'By car' } },
          { num: '3 km',  label: { es:'Ruta verde', en:'Green route' } },
          { num: '4,5 km',label: { es:'Ruta amarilla', en:'Yellow route' } }
        ],
        list: {
          es: ['Formaciones rocosas únicas', 'Rutas circulares señalizadas', 'Centro de visitantes en el aparcamiento alto', 'Mirador de Las Ventanillas'],
          en: ['Unique rock formations', 'Waymarked circular routes', 'Visitor centre at the upper car park', 'Las Ventanillas viewpoint']
        },
        ctas: []
      }
    ];

    const tiles = document.querySelectorAll('.act-tile');
    const overlay = document.getElementById('axOverlay');
    const img = document.getElementById('axImg');
    const tag = document.getElementById('axTag');
    const sup = document.getElementById('axSup');
    const title = document.getElementById('axTitle');
    const desc = document.getElementById('axDesc');
    const facts = document.getElementById('axFacts');
    const list = document.getElementById('axList');
    const ctas = document.getElementById('axCtas');
    const close = document.getElementById('axClose');

    function isEn() { return document.body.classList.contains('lang-en'); }
    function L(obj) { return isEn() ? obj.en : obj.es; }

    function open(idx) {
      const d = data[idx];
      if (!d) return;
      img.src = d.img; img.alt = L(d.title).replace(/<[^>]+>/g,'');
      tag.textContent = L(d.tag);
      sup.textContent = L(d.sup);
      title.innerHTML = L(d.title);
      desc.textContent = L(d.desc);
      if (d.facts && d.facts.length) {
        facts.style.display = '';
        facts.innerHTML = d.facts.map(f =>
          `<div class="am-fact"><span class="am-fact-num">${f.num}</span><span class="am-fact-label">${L(f.label)}</span></div>`
        ).join('');
      } else {
        facts.style.display = 'none';
        facts.innerHTML = '';
      }
      list.innerHTML = L(d.list).map(x => `<li>${x}</li>`).join('');
      ctas.innerHTML = d.ctas.map(c =>
        `<a class="am-cta ${c.ghost?'ghost':''}" href="${c.href}" ${c.external?'target="_blank" rel="noopener"':''}>${L(c.label)} ${c.external
          ? '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>'
          : '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>'
        }</a>`
      ).join('');
      overlay.classList.add('open');
      window.lockBodyScroll();
    }

    function closeModal() {
      overlay.classList.remove('open');
      window.unlockBodyScroll();
    }

    tiles.forEach(tile => {
      tile.addEventListener('click', () => {
        const ref = tile.dataset.act;
        if (ref === 'escalada') {
          openClimb();
          return;
        }
        const idx = parseInt(ref, 10);
        if (!isNaN(idx)) open(idx);
      });
    });
    close.addEventListener('click', closeModal);
    overlay.addEventListener('click', e => { if (e.target === overlay) closeModal(); });

    /* Click en CTA "Reservar con entradas": cerrar este modal y abrir el
       popup de reserva global (FAB) en la misma página, sin navegar. */
    ctas.addEventListener('click', e => {
      const a = e.target.closest('a[href="#booking"]');
      if (!a) return;
      e.preventDefault();
      closeModal();
      const fab = document.getElementById('floatingReserve');
      if (fab && !document.body.classList.contains('booking-open')) {
        fab.click();
      }
    });

    /* Climb modal */
    const climbOverlay = document.getElementById('climbOverlay');
    const climbClose = document.getElementById('climbClose');
    function openClimb() {
      climbOverlay.classList.add('open');
      window.lockBodyScroll();
    }
    function closeClimb() {
      climbOverlay.classList.remove('open');
      window.unlockBodyScroll();
    }
    climbClose.addEventListener('click', closeClimb);
    climbOverlay.addEventListener('click', e => { if (e.target === climbOverlay) closeClimb(); });

    document.addEventListener('keydown', e => {
      if (e.key !== 'Escape') return;
      if (overlay.classList.contains('open')) closeModal();
      else if (climbOverlay.classList.contains('open')) closeClimb();
    });

    /* Deeplink: si la URL trae #act-N o #act-escalada, abre el modal correspondiente. */
    function openFromHash() {
      const h = window.location.hash;
      if (!h.startsWith('#act-')) return;
      const ref = h.substring(5);
      if (ref === 'escalada') {
        openClimb();
      } else {
        const idx = parseInt(ref, 10);
        if (!isNaN(idx) && data[idx]) open(idx);
      }
    }
    openFromHash();
    window.addEventListener('hashchange', openFromHash);
  })();
</script>
@endpush
