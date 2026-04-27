@extends('layouts.app', [
    'bodyClass' => '',
    'active' => 'home',
])

@section('title', 'Camping Parque Ardales · Embalse Conde de Guadalhorce · Málaga')
@section('meta_description', 'Camping Parque Ardales - Alojamiento familiar en plena naturaleza a orillas del Embalse Conde de Guadalhorce, Málaga. Gestión de entradas para el Caminito del Rey.')

@section('content')
<!-- ─────────────────────────── NAV ─────────────────────────── -->
<!-- Mobile menu -->
<!-- ─────────────────────────── HERO ─────────────────────────── -->
<section id="hero">
  <div class="hero-photo">
    <video src="/hero.webm" autoplay muted loop playsinline preload="auto" aria-hidden="true"></video>
  </div>
  <div class="hero-overlay"></div>

  <div class="hero-meta"><span class="es">36.9199° N · 4.8042° W — Embalse Conde de Guadalhorce</span><span class="en">36.9199° N · 4.8042° W — Conde de Guadalhorce Reservoir</span></div>
  <div class="hero-coords">Est. · Ardales, Málaga · Andalucía</div>

  <div class="hero-headline">
    <span class="line l1">
      <span class="es"><span class="word"><span>Vive <span class="hl-italic">la experiencia</span></span></span></span>
      <span class="en"><span class="word"><span>Live <span class="hl-italic">the experience</span></span></span></span>
    </span>
    <span class="line l2">
      <span class="es"><span class="word"><span>de lo <span class="hl-italic">auténtico.</span></span></span></span>
      <span class="en"><span class="word"><span>of the <span class="hl-italic">authentic</span></span></span></span>
    </span>
  </div>

  <div class="hero-bottom">
    <p class="lead">
      <span class="es">Un campamento familiar en Ardales, a orillas del embalse. Tiendas, caravanas, apartamentos, actividades... Desconexión en naturaleza.</span>
      <span class="en">A family campsite on the reservoir's edge. Tents, caravans, apartments, activities... Disconnect in nature.</span>
    </p>
    <div class="center-mark">
      <strong>Est. Ardales</strong>
      <span class="es">Refugio en la naturaleza</span><span class="en">Refuge in nature</span>
    </div>
    <div class="scroll-cue">
      <span class="es">Desliza para descubrir</span><span class="en">Scroll to discover</span><br>
      <span class="bar"></span>
    </div>
  </div>

  <div class="hero-content">
    <div class="hero-badge">
      <span class="es">Ardales · Málaga · Embalse Conde de Guadalhorce</span>
      <span class="en">Ardales · Málaga · Conde de Guadalhorce Reservoir</span>
    </div>
    <h1 class="hero-title">
      <span class="es">Descanso en<br><em>la Naturaleza</em></span>
      <span class="en">Rest in the<br><em>Heart of Nature</em></span>
    </h1>
    <p class="hero-sub">
      <span class="es">Camping familiar a orillas del Embalse Conde de Guadalhorce. Apartamentos, parcelas, actividades y naturaleza pura en el corazón de Málaga.</span>
      <span class="en">Family campsite on the shores of the Conde de Guadalhorce Reservoir. Apartments, pitches, activities and pristine nature in the heart of Málaga.</span>
    </p>

    <!-- Booking card injected by scripts.js -->
  </div>

  <div class="scroll-hint">
    <span class="es">Descubrir</span><span class="en">Discover</span>
    <div class="scroll-arrow"></div>
  </div>
</section>

<!-- ─────────────────────────── MARQUEE ─────────────────────────── -->
<div class="marquee" aria-hidden="true">
  <div class="marquee-track">
    <span>Caminito del Rey</span><span class="dot">✦</span>
    <span>Embalse Conde de Guadalhorce</span><span class="dot">✦</span>
    <span>Senderismo</span><span class="dot">✦</span>
    <span>Kayak</span><span class="dot">✦</span>
    <span>Escalada</span><span class="dot">✦</span>
    <span>Acampada</span><span class="dot">✦</span>
    <span>Estrellas</span><span class="dot">✦</span>
    <span>Pinares</span><span class="dot">✦</span>
    <span>Piscina Infinita</span><span class="dot">✦</span>
    <span>Cueva de Ardales</span><span class="dot">✦</span>
    <span>Caminito del Rey</span><span class="dot">✦</span>
    <span>Embalse Conde de Guadalhorce</span><span class="dot">✦</span>
    <span>Senderismo</span><span class="dot">✦</span>
    <span>Kayak</span><span class="dot">✦</span>
    <span>Escalada</span><span class="dot">✦</span>
    <span>Acampada</span><span class="dot">✦</span>
    <span>Estrellas</span><span class="dot">✦</span>
    <span>Pinares</span><span class="dot">✦</span>
    <span>Piscina Infinita</span><span class="dot">✦</span>
    <span>Cueva de Ardales</span><span class="dot">✦</span>
    <span>Caminito del Rey</span><span class="dot">✦</span>
    <span>Embalse Conde de Guadalhorce</span><span class="dot">✦</span>
    <span>Senderismo</span><span class="dot">✦</span>
    <span>Kayak</span><span class="dot">✦</span>
    <span>Escalada</span><span class="dot">✦</span>
    <span>Acampada</span><span class="dot">✦</span>
    <span>Estrellas</span><span class="dot">✦</span>
    <span>Pinares</span><span class="dot">✦</span>
    <span>Piscina Infinita</span><span class="dot">✦</span>
    <span>Cueva de Ardales</span><span class="dot">✦</span>
  </div>
</div>

<!-- ─────────────────────────── HIGHLIGHTS ─────────────────────────── -->
<div id="highlights">
  <div class="highlights-inner">
    <div class="hl-item reveal">
      <div class="hl-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9a1 1 0 011-1h18a1 1 0 011 1v2a2 2 0 100 4v2a1 1 0 01-1 1H3a1 1 0 01-1-1v-2a2 2 0 100-4V9z"/><line x1="9" y1="8" x2="9" y2="18"/></svg></div>
      <div class="hl-text">
        <h4><span class="es">Entradas Caminito del Rey</span><span class="en">Caminito del Rey Tickets</span></h4>
        <p><span class="es">Gestionamos tus entradas con reserva previa</span><span class="en">We manage your tickets with prior booking</span></p>
      </div>
    </div>
    <div class="hl-item reveal reveal-d1">
      <div class="hl-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M8 21l4-10 4 10"/><path d="M2 21l6-14 4 7"/><path d="M14 14l4-7 4 14"/><line x1="2" y1="21" x2="22" y2="21"/></svg></div>
      <div class="hl-text">
        <h4><span class="es">Naturaleza Virgen</span><span class="en">Pristine Nature</span></h4>
        <p><span class="es">A orillas del Embalse Conde de Guadalhorce</span><span class="en">On the shores of Conde de Guadalhorce Reservoir</span></p>
      </div>
    </div>
    <div class="hl-item reveal reveal-d2">
      <div class="hl-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="7" r="2.5"/><path d="M3 21v-2a4 4 0 014-4h4a4 4 0 014 4v2"/><circle cx="17.5" cy="9.5" r="2"/><path d="M17.5 13.5c2.5 0 3.5 1.5 3.5 3v1"/></svg></div>
      <div class="hl-text">
        <h4><span class="es">Ambiente Familiar</span><span class="en">Family Atmosphere</span></h4>
        <p><span class="es">El entorno perfecto para disfrutar en familia</span><span class="en">The perfect setting for family enjoyment</span></p>
      </div>
    </div>
  </div>
</div>

<!-- Dog Friendly Banner -->
<div class="dog-banner">
  <div class="dog-inner">
    <div class="dog-badge-pill">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 10c-1.5 2-4 3.5-4 6a4 4 0 008 0c0-2.5-2.5-4-4-6z"/><circle cx="7.5" cy="6" r="1.8"/><circle cx="16.5" cy="6" r="1.8"/><circle cx="12" cy="3.5" r="1.8"/></svg>
      DOG FRIENDLY
    </div>
    <p class="dog-text">
      <span class="es">Tu mejor amigo es bienvenido en el recinto. Zona habilitada para mascotas.</span>
      <span class="en">Your best friend is welcome on the grounds. Dedicated pet area available.</span>
    </p>
  </div>
</div>

<!-- ─────────────────────────── ACCOMMODATIONS ─────────────────────────── -->
<section id="alojamientos" class="section">
  <div class="container">
    <p class="section-sup reveal"><span class="es">Dónde dormir</span><span class="en">Where to sleep</span></p>
    <h2 class="section-h reveal"><span class="es">Tu hogar en la <em>naturaleza</em></span><span class="en">Your home in <em>nature</em></span></h2>
    <p class="section-desc reveal">
      <span class="es">Desde acogedores apartamentos con vistas al embalse hasta parcelas con sombra para tu tienda o caravana — elige la experiencia que más se adapte a ti.</span>
      <span class="en">From cosy apartments overlooking the reservoir to shaded pitches for your tent or caravan — choose the experience that suits you best.</span>
    </p>

    <div class="acc-grid">
      <!-- Apartments -->
      <div class="acc-card reveal">
        <div class="acc-img">
          <img src="/images/Bung-exterior1.webp" alt="Apartamentos" loading="lazy">
        </div>
        <div class="acc-body">
          <h3><span class="es">Apartamentos</span><span class="en">Apartments</span></h3>
          <p><span class="es">Apartamentos completamente equipados con vistas al embalse. Ideales para familias que buscan comodidad sin renunciar al entorno natural.</span><span class="en">Fully equipped apartments with views over the reservoir. Ideal for families seeking comfort without sacrificing the natural setting.</span></p>
          <div class="acc-tags">
            <span class="tag">WiFi</span>
            <span class="tag"><span class="es">Cocina equipada</span><span class="en">Equipped kitchen</span></span>
            <span class="tag"><span class="es">Vistas al embalse</span><span class="en">Reservoir views</span></span>
            <span class="tag">A/C</span>
          </div>
          <a href="{{ route('apartamentos') }}" class="acc-link"><span class="es">Ver detalles y tarifas</span><span class="en">Details &amp; rates</span> <span class="arrow">→</span></a>
        </div>
      </div>

      <!-- Tent pitches -->
      <div class="acc-card reveal reveal-d1">
        <div class="acc-img">
          <img src="/images/TIENDAS 2.webp" alt="Parcelas para tiendas" loading="lazy">
        </div>
        <div class="acc-body">
          <h3><span class="es">Parcelas para tiendas</span><span class="en">Tent Pitches</span></h3>
          <p><span class="es">Parcelas con sombra natural rodeadas de vegetación. Delimitadas y con acceso a todos los servicios del camping.</span><span class="en">Naturally shaded pitches surrounded by vegetation. Marked out with access to all campsite services.</span></p>
          <div class="acc-tags">
            <span class="tag"><span class="es">Electricidad</span><span class="en">Electricity</span></span>
            <span class="tag"><span class="es">Agua corriente</span><span class="en">Running water</span></span>
            <span class="tag"><span class="es">Zona sombreada</span><span class="en">Shaded area</span></span>
          </div>
          <a href="{{ route('camping') }}#tiendas" class="acc-link"><span class="es">Ver detalles y tarifas</span><span class="en">Details &amp; rates</span> <span class="arrow">→</span></a>
        </div>
      </div>

      <!-- Caravan pitches -->
      <div class="acc-card reveal">
        <div class="acc-img">
          <img src="/images/Caravanas 1.webp" alt="Parcelas para caravanas" loading="lazy">
        </div>
        <div class="acc-body">
          <h3><span class="es">Parcelas para caravanas</span><span class="en">Caravan Pitches</span></h3>
          <p><span class="es">Parcelas amplias con toma de agua, electricidad y desagüe. Acceso fácil para autocaravanas y caravanas de todos los tamaños.</span><span class="en">Spacious pitches with water, electricity and drainage. Easy access for motorhomes and caravans of all sizes.</span></p>
          <div class="acc-tags">
            <span class="tag">15A</span>
            <span class="tag"><span class="es">Agua y desagüe</span><span class="en">Water & drainage</span></span>
            <span class="tag">WiFi</span>
            <span class="tag"><span class="es">Acceso autocaravana</span><span class="en">Motorhome access</span></span>
          </div>
          <a href="{{ route('camping') }}#caravanas" class="acc-link"><span class="es">Ver detalles y tarifas</span><span class="en">Details &amp; rates</span> <span class="arrow">→</span></a>
        </div>
      </div>

      <!-- Actividades -->
      <div class="acc-card reveal reveal-d1">
        <div class="acc-img">
          <img src="/images/KAYAKs 2.webp" alt="Actividades" loading="lazy">
        </div>
        <div class="acc-body">
          <h3><span class="es">Actividades</span><span class="en">Activities</span></h3>
          <p><span class="es">Senderismo, kayak, escalada, Caminito del Rey y mucho más. Un paraíso de experiencias al aire libre a tu alcance.</span><span class="en">Hiking, kayaking, climbing, Caminito del Rey and much more. A paradise of outdoor experiences at your fingertips.</span></p>
          <a href="{{ route('actividades') }}" class="acc-link">
            <span class="es">Ver actividades</span><span class="en">See activities</span> <span class="arrow">→</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─────────────────────────── SERVICES ─────────────────────────── -->
<section id="servicios" class="section">
  <div class="container">
    <p class="section-sup reveal"><span class="es">Lo que ofrecemos</span><span class="en">What we offer</span></p>
    <h2 class="section-h reveal"><span class="es">Servicios e <em>información</em></span><span class="en">Services &amp; <em>information</em></span></h2>
    <p class="section-desc reveal">
      <span class="es">Todo lo que necesitas para una estancia perfecta, con información actualizada sobre horarios, precios y servicios del recinto y su entorno.</span>
      <span class="en">Everything you need for a perfect stay, with up-to-date information on timetables, prices and services on-site and nearby.</span>
    </p>

    <!-- Caminito Featured -->
    <div class="caminito-featured reveal">
      <div>
        <div class="cf-star"><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg> <span class="es">Servicio destacado</span><span class="en">Featured service</span></div>
        <h3><span class="es"><em>Caminito del Rey</em> — Gestión de entradas</span><span class="en"><em>Caminito del Rey</em> — Ticket management</span></h3>
        <p>
          <span class="es">¿Quieres hacer el Caminito del Rey? Si realizas una reserva de camping o apartamento con un mínimo de <strong style="color:var(--gold-light)">3 días de antelación</strong>, nos encargamos de gestionar tus entradas. No te preocupes por quedarte sin plaza — nosotros lo gestionamos por ti.</span>
          <span class="en">Want to walk the Caminito del Rey? If you book a camping pitch or apartment at least <strong style="color:var(--gold-light)">3 days in advance</strong>, we'll manage your tickets. No need to worry about missing out — we handle it for you.</span>
        </p>
      </div>
      <div class="cf-badge">
        <div class="cf-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9a1 1 0 011-1h18a1 1 0 011 1v2a2 2 0 100 4v2a1 1 0 01-1 1H3a1 1 0 01-1-1v-2a2 2 0 100-4V9z"/><line x1="9" y1="8" x2="9" y2="18"/></svg></div>
        <div class="cf-title"><span class="es">Entradas gestionadas</span><span class="en">Managed tickets</span></div>
        <div class="cf-note"><span class="es">Con reserva de camping o apartamento · Mín. 3 días de antelación</span><span class="en">With camping or apartment booking · Min. 3 days in advance</span></div>
      </div>
    </div>

    <!-- Services grid -->
    <div class="svc-grid">
      <!-- Supermarket -->
      <div class="svc-card c-gold reveal">
        <div class="svc-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></div>
        <h3><span class="es">Supermercado</span><span class="en">Supermarket</span></h3>
        <p><span class="es">Disponemos de supermercado en las instalaciones para que no te falte nada durante tu estancia.</span><span class="en">We have an on-site supermarket so you have everything you need during your stay.</span></p>
        <div class="svc-info">
          <strong><span class="es">Apertura:</span><span class="en">Open:</span></strong> <span class="es">Semana Santa hasta el 15 de octubre</span><span class="en">Easter Week until 15th October</span>
        </div>
        <div class="svc-info">
          <span class="es">Productos frescos, bebidas, conservas y artículos de camping.</span>
          <span class="en">Fresh produce, drinks, tinned goods and camping supplies.</span>
        </div>
      </div>

      <!-- Dog Friendly Service info -->
      <div class="svc-card c-terra reveal reveal-d1">
        <div class="svc-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 10c-1.5 2-4 3.5-4 6a4 4 0 008 0c0-2.5-2.5-4-4-6z"/><circle cx="7.5" cy="6" r="1.8"/><circle cx="16.5" cy="6" r="1.8"/><circle cx="12" cy="3.5" r="1.8"/><circle cx="4.5" cy="10" r="1.8"/><circle cx="19.5" cy="10" r="1.8"/></svg></div>
        <h3><span class="es">Zona Pet Friendly</span><span class="en">Pet Friendly Zone</span></h3>
        <p><span class="es">Somos un camping Dog Friendly. Tu perro u otras mascotas son bienvenidos en nuestras instalaciones con zona habilitada.</span><span class="en">We are a Dog Friendly campsite. Your dog or other pets are welcome at our facilities with a dedicated area.</span></p>
        <div class="svc-info">
          <span class="es">Zona de paseo y área de esparcimiento para mascotas.</span>
          <span class="en">Walking area and play zone for pets.</span>
        </div>
      </div>

      <!-- Pool -->
      <div class="svc-card c-water reveal reveal-d2">
        <div class="svc-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M2 16c1.5 0 2.5 1 4 1s2.5-1 4-1 2.5 1 4 1 2.5-1 4-1 2.5 1 4 1"/><path d="M2 20c1.5 0 2.5 1 4 1s2.5-1 4-1 2.5 1 4 1 2.5-1 4-1 2.5 1 4 1"/><path d="M12 4a2 2 0 012 2v6"/><path d="M8 12h8"/></svg></div>
        <h3><span class="es">Piscina Infinita</span><span class="en">Infinity Pool</span></h3>
        <p><span class="es">Refréscate en nuestra piscina infinita rodeada de naturaleza. El lugar perfecto para que los niños disfruten durante los meses de verano.</span><span class="en">Cool off in our infinity pool surrounded by nature. The perfect place for children to enjoy during the summer months.</span></p>
        <div class="svc-info">
          <strong><span class="es">Temporada:</span><span class="en">Season:</span></strong> <span class="es">Verano · Junio – Septiembre</span><span class="en">Summer · June – September</span>
        </div>
      </div>

      <!-- Cabin info -->
      <div class="svc-card c-gold reveal">
        <div class="svc-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <h3><span class="es">Cabaña Salón-Cocina</span><span class="en">Salon-Kitchen Cabin</span></h3>
        <p><span class="es">Espacio único disponible para alquiler por días. Ideal para celebraciones, reuniones familiares o eventos en plena naturaleza.</span><span class="en">Unique space available to rent by the day. Ideal for celebrations, family gatherings or events in the heart of nature.</span></p>
        <div class="svc-info">
          <strong>Email:</strong> info@parqueardales.com
        </div>
        <a href="mailto:info@parqueardales.com" class="svc-link">
          <span class="es">Solicitar información</span><span class="en">Request information</span> →
        </a>
      </div>

      <!-- Grupos -->
      <div class="svc-card c-gold reveal reveal-d1">
        <div class="svc-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="7" r="2.5"/><path d="M3 21v-2a4 4 0 014-4h4a4 4 0 014 4v2"/><circle cx="17.5" cy="9.5" r="2"/><path d="M17.5 13.5c2.5 0 3.5 1.5 3.5 3v1"/></svg></div>
        <h3><span class="es">Grupos</span><span class="en">Groups</span></h3>
        <p><span class="es">Organizamos estancias para grupos, celebraciones y eventos en plena naturaleza. Contacta para un presupuesto personalizado.</span><span class="en">We organise stays for groups, celebrations and events in the heart of nature. Get in touch for a tailored quote.</span></p>
        <div class="svc-info">
          <strong>Email:</strong> info@parqueardales.com
        </div>
        <a href="mailto:info@parqueardales.com" class="svc-link">
          <span class="es">Solicitar información</span><span class="en">Request information</span> →
        </a>
      </div>

      <!-- Cueva de Ardales -->
      <div class="svc-card c-green reveal reveal-d2">
        <div class="svc-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 17c0-6 4-12 9-12s9 6 9 12"/><path d="M9 17v-3a3 3 0 016 0v3"/></svg></div>
        <h3><span class="es">Cueva de Ardales</span><span class="en">Ardales Cave</span></h3>
        <p><span class="es">Una de las cuevas prehistóricas más importantes de Andalucía, con pinturas rupestres declaradas Patrimonio de la Humanidad.</span><span class="en">One of Andalusia's most important prehistoric caves, with rock paintings declared UNESCO World Heritage.</span></p>
        <div class="svc-info">
          <strong><span class="es">Horario:</span><span class="en">Opening times:</span></strong> 12:00 – 19:30
        </div>
        <a href="https://www.giglon.com/todos?idEvent=visitas-guiadas-a-la-cueva-de-ardales-malaga" target="_blank" rel="noopener" class="svc-link"><span class="es">Comprar entradas</span><span class="en">Buy tickets</span> →</a>
      </div>
    </div>
  </div>
</section>

<!-- ─────────────────────────── ACTIVITIES ─────────────────────────── -->
<section id="actividades" class="section">
  <div class="container">
    <p class="section-sup reveal"><span class="es">Aventura y descubrimiento</span><span class="en">Adventure & discovery</span></p>
    <h2 class="section-h reveal"><span class="es">Actividades y <em>experiencias</em></span><span class="en">Activities &amp; <em>experiences</em></span></h2>
    <p class="section-desc reveal">
      <span class="es">La comarca de Ardales es un paraíso de experiencias al aire libre. Desde rutas de senderismo hasta actividades náuticas, escalada y visitas culturales imprescindibles.</span>
      <span class="en">The Ardales area is a paradise for outdoor experiences. From hiking routes to water activities, climbing and unmissable cultural visits.</span>
    </p>

    <div class="act-grid">
      <!-- Caminito del Rey - FEATURED -->
      <a class="act-card span2 reveal" href="{{ route('actividades') }}#act-0">
        <div class="act-img">
          <img src="/images/caminito.webp" alt="Caminito del Rey" loading="lazy">
          <div class="act-featured-pill">CAMINITO DEL REY</div>
          <div class="act-dist"><span class="es">~1,5 km del camping</span><span class="en">~1.5 km from campsite</span></div>
        </div>
        <div class="act-body">
          <h3>Caminito del Rey</h3>
          <div class="act-tags">
            <span class="act-tag"><span class="es">7,7 km</span><span class="en">7.7 km</span></span>
            <span class="act-tag"><span class="es">3–4 horas</span><span class="en">3–4 hours</span></span>
            <span class="act-tag"><span class="es">Entradas gestionadas</span><span class="en">Managed tickets</span></span>
          </div>
        </div>
      </a>

      <!-- Cueva de Ardales -->
      <a class="act-card reveal reveal-d1" href="{{ route('actividades') }}#act-1">
        <div class="act-img">
          <img src="/images/cueva-ardales.jpg" alt="Cueva de Ardales" loading="lazy">
          <div class="act-dist"><span class="es">Ardales pueblo</span><span class="en">Ardales village</span></div>
        </div>
        <div class="act-body">
          <h3><span class="es">Cueva de Ardales</span><span class="en">Ardales Cave</span></h3>
          <div class="act-tags">
            <span class="act-tag"><span class="es">Patrimonio UNESCO</span><span class="en">UNESCO Heritage</span></span>
            <span class="act-tag"><span class="es">Visita guiada</span><span class="en">Guided tour</span></span>
          </div>
        </div>
      </a>

      <!-- Actividades náuticas -->
      <a class="act-card reveal" href="{{ route('actividades') }}#act-2">
        <div class="act-img">
          <img src="/images/KAYAKs.webp" alt="Actividades Náuticas" loading="lazy">
          <div class="act-dist"><span class="es">En el embalse</span><span class="en">On the reservoir</span></div>
        </div>
        <div class="act-body">
          <h3><span class="es">Actividades Náuticas</span><span class="en">Water Activities</span></h3>
          <div class="act-tags">
            <span class="act-tag">Kayak</span>
            <span class="act-tag">Paddle Surf</span>
          </div>
        </div>
      </a>

      <!-- Senderismo -->
      <a class="act-card reveal reveal-d1" href="{{ route('actividades') }}#act-3">
        <div class="act-img">
          <img src="/images/Entorno 17.webp" alt="Senderismo" loading="lazy">
        </div>
        <div class="act-body">
          <h3><span class="es">Senderismo</span><span class="en">Hiking</span></h3>
          <div class="act-tags">
            <span class="act-tag"><span class="es">Todos los niveles</span><span class="en">All levels</span></span>
            <span class="act-tag">GPS tracks</span>
          </div>
        </div>
      </a>

      <!-- Escalada -->
      <a class="act-card reveal" href="{{ route('actividades') }}#act-escalada">
        <div class="act-img">
          <img src="/images/escalada1.webp" alt="Escalada" loading="lazy">
          <div class="act-dist">El Chorro</div>
        </div>
        <div class="act-body">
          <h3><span class="es">Escalada</span><span class="en">Rock Climbing</span></h3>
          <div class="act-tags">
            <span class="act-tag">800+ <span class="es">vías</span><span class="en">routes</span></span>
          </div>
        </div>
      </a>
    </div>

    <div style="text-align:center">
      <a href="{{ route('actividades') }}" class="section-more section-more-light reveal">
        <span class="es">Ver todas las actividades</span><span class="en">View all activities</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ─────────────────────────── GALLERY ─────────────────────────── -->
<section id="galeria" class="section">
  <div class="container">
    <p class="section-sup reveal"><span class="es">Imágenes del recinto</span><span class="en">Campsite images</span></p>
    <h2 class="section-h reveal"><span class="es">Galería de <em>fotos</em></span><span class="en">Photo <em>gallery</em></span></h2>
    <p class="section-desc reveal">
      <span class="es">Explora nuestras instalaciones a través de las imágenes. Filtra por categoría para ver lo que más te interesa.</span>
      <span class="en">Explore our facilities through images. Filter by category to see what interests you most.</span>
    </p>

    <div class="gallery-grid reveal" style="grid-template-columns: repeat(3, 1fr); grid-template-rows: 200px 200px;">
      <div class="gi t2">
        <div class="gi-bg"><img src="/images/Bung-salon1.webp" alt="Apartamento" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Apartamento con vistas</span><span class="en">Apartment with views</span></span></div>
      </div>
      <div class="gi">
        <div class="gi-bg"><img src="/images/Entorno 5.webp" alt="Zona de tiendas" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Zona de tiendas</span><span class="en">Tent area</span></span></div>
      </div>
      <div class="gi">
        <div class="gi-bg"><img src="/images/caminitodelrey2.jpg" alt="Caminito del Rey" loading="lazy"></div>
        <div class="gi-ov"><span>Caminito del Rey</span></div>
      </div>
      <div class="gi">
        <div class="gi-bg"><img src="/images/Entorno 20.webp" alt="Piscina" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Piscina</span><span class="en">Pool</span></span></div>
      </div>
      <div class="gi">
        <div class="gi-bg"><img src="/images/Cabaña1.webp" alt="Cabaña" loading="lazy"></div>
        <div class="gi-ov"><span><span class="es">Cabaña salón-cocina</span><span class="en">Salon-kitchen cabin</span></span></div>
      </div>
    </div>

    <div style="text-align:center">
      <a href="{{ route('galeria') }}" class="section-more section-more-dark reveal">
        <span class="es">Ver galería completa</span><span class="en">View full gallery</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ─────────────────────────── FAQ ─────────────────────────── -->
<section id="faq" class="section">
  <div class="container">
    <p class="section-sup reveal"><span class="es">Preguntas frecuentes</span><span class="en">Frequently asked questions</span></p>
    <h2 class="section-h reveal"><span class="es"><em>Todo</em> lo que necesitas saber</span><span class="en"><em>Everything</em> you need to know</span></h2>
    <p class="section-desc reveal">
      <span class="es">¿Tienes dudas? Aquí resolvemos las preguntas más habituales.</span>
      <span class="en">Got questions? Here we answer the most common ones.</span>
    </p>

    <div class="faq-grid reveal">

      <div class="faq-item">
        <div class="faq-q">
          <h4><span class="es">¿Cuándo está abierto el camping?</span><span class="en">When is the campsite open?</span></h4>
          <div class="faq-chevron">+</div>
        </div>
        <div class="faq-a"><div class="faq-a-inner">
          <span class="es">El camping está abierto durante todo el año, aunque algunos servicios como el supermercado o la piscina tienen temporada específica. Te recomendamos contactar para confirmar disponibilidad en fechas concretas.</span>
          <span class="en">The campsite is open year-round, although some services like the supermarket or pool have specific seasons. We recommend contacting us to confirm availability on specific dates.</span>
        </div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">
          <h4><span class="es">¿Admitís mascotas?</span><span class="en">Do you accept pets?</span></h4>
          <div class="faq-chevron">+</div>
        </div>
        <div class="faq-a"><div class="faq-a-inner">
          <span class="es">¡Sí! Somos un camping Dog Friendly. Las mascotas son bienvenidas en nuestras instalaciones y disponemos de zona habilitada para ellas.</span>
          <span class="en">Yes! We are a Dog Friendly campsite. Pets are welcome at our facilities and we have a dedicated pet area on site.</span>
        </div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">
          <h4><span class="es">¿Cómo gestiono las entradas del Caminito del Rey?</span><span class="en">How do I get Caminito del Rey tickets?</span></h4>
          <div class="faq-chevron">+</div>
        </div>
        <div class="faq-a"><div class="faq-a-inner">
          <span class="es">Si realizas una reserva de camping o apartamento con al menos 3 días de antelación, nosotros gestionamos las entradas por ti. Solo tienes que indicarlo al hacer tu reserva o contactarnos por email a <a href="mailto:info@parqueardales.com">info@parqueardales.com</a>.</span>
          <span class="en">If you book a camping pitch or apartment at least 3 days in advance, we handle the tickets for you. Just let us know when you make your booking or contact us by email at <a href="mailto:info@parqueardales.com">info@parqueardales.com</a>.</span>
        </div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">
          <h4><span class="es">¿Qué servicios incluye la parcela?</span><span class="en">What is included in the pitch?</span></h4>
          <div class="faq-chevron">+</div>
        </div>
        <div class="faq-a"><div class="faq-a-inner">
          <span class="es">Todas las parcelas incluyen punto de agua, acceso a baños y duchas con agua caliente, y WiFi en la zona del recinto. Las parcelas para caravanas y autocaravanas cuentan con toma eléctrica de 15 amperios y conexión de desagüe. Las parcelas de acampada con luz disponen de 10 amperios (unos 4.700 W). La potencia puede variar en algunas parcelas.</span>
          <span class="en">All pitches include a water point, access to bathrooms and hot showers, and WiFi in the campsite area. Caravan and motorhome pitches have a 15-amp power supply and drainage connection. Tent pitches with electricity have 10 amps (around 4,700 W). Power may vary on some pitches.</span>
        </div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">
          <h4><span class="es">¿Cuándo está abierta la piscina?</span><span class="en">When is the pool open?</span></h4>
          <div class="faq-chevron">+</div>
        </div>
        <div class="faq-a"><div class="faq-a-inner">
          <span class="es">La piscina está disponible durante la temporada de verano, generalmente de junio a septiembre, dependiendo de las condiciones climáticas. Se puede acceder tanto desde las parcelas como desde los apartamentos.</span>
          <span class="en">The pool is available during the summer season, generally from June to September, depending on weather conditions. It can be accessed from both pitches and apartments.</span>
        </div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">
          <h4><span class="es">¿Dónde compro las entradas a la Cueva de Ardales?</span><span class="en">Where can I buy tickets for Ardales Cave?</span></h4>
          <div class="faq-chevron">+</div>
        </div>
        <div class="faq-a"><div class="faq-a-inner">
          <span class="es">El horario de visita es de 12:00 a 19:30. Puedes comprar las entradas directamente en <a href="https://www.giglon.com/todos?idEvent=visitas-guiadas-a-la-cueva-de-ardales-malaga" target="_blank" rel="noopener">Giglon</a> o en taquilla.</span>
          <span class="en">Opening hours are 12:00 to 19:30. You can buy tickets directly on <a href="https://www.giglon.com/todos?idEvent=visitas-guiadas-a-la-cueva-de-ardales-malaga" target="_blank" rel="noopener">Giglon</a> or at the ticket office.</span>
        </div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">
          <h4><span class="es">¿Cuándo está abierto el supermercado?</span><span class="en">When is the supermarket open?</span></h4>
          <div class="faq-chevron">+</div>
        </div>
        <div class="faq-a"><div class="faq-a-inner">
          <span class="es">El supermercado está abierto desde Semana Santa hasta el 15 de octubre. Encontrarás productos frescos, bebidas, conservas, artículos de camping y otros básicos para tu estancia.</span>
          <span class="en">The supermarket is open from Easter Week until 15th October. You'll find fresh produce, drinks, tinned goods, camping supplies and other essentials for your stay.</span>
        </div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">
          <h4><span class="es">¿Cómo reservar la cabaña salón-cocina?</span><span class="en">How do I book the salon-kitchen cabin?</span></h4>
          <div class="faq-chevron">+</div>
        </div>
        <div class="faq-a"><div class="faq-a-inner">
          <span class="es">La cabaña salón-cocina se alquila por días y requiere reserva previa. Para consultar disponibilidad y precios, envíanos un email a <a href="mailto:info@parqueardales.com">info@parqueardales.com</a> con las fechas que te interesan.</span>
          <span class="en">The salon-kitchen cabin is rented by the day and requires prior booking. To check availability and pricing, send us an email at <a href="mailto:info@parqueardales.com">info@parqueardales.com</a> with your desired dates.</span>
        </div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">
          <h4><span class="es">¿Se puede ir al Caminito desde el camping?</span><span class="en">Can you walk to Caminito del Rey from the campsite?</span></h4>
          <div class="faq-chevron">+</div>
        </div>
        <div class="faq-a"><div class="faq-a-inner">
          <span class="es">Sí. Estamos a tan solo 1,5 km del acceso peatonal del Caminito del Rey, desde donde sale un sendero de otros 1,5 km a pie hasta la taquilla de entrada. También puedes llegar en coche o bicicleta. Recuerda que las entradas deben comprarse con antelación — nosotros te las gestionamos si reservas con nosotros.</span>
          <span class="en">Yes. We are just 1.5 km from the pedestrian access to the Caminito del Rey, from where a 1.5 km footpath leads to the ticket office. You can also get there by car or bike. Remember that tickets must be bought in advance — we handle them for you if you book with us.</span>
        </div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">
          <h4><span class="es">¿Hay WiFi en el camping?</span><span class="en">Is there WiFi at the campsite?</span></h4>
          <div class="faq-chevron">+</div>
        </div>
        <div class="faq-a"><div class="faq-a-inner">
          <span class="es">Sí, disponemos de WiFi en las instalaciones. La cobertura es buena en las zonas comunes y apartamentos. En algunas parcelas más alejadas la señal puede variar.</span>
          <span class="en">Yes, we have WiFi throughout the facilities. Coverage is good in common areas and apartments. In some more distant pitches the signal may vary.</span>
        </div></div>
      </div>

    </div>
  </div>
</section>

<!-- ─────────────────────────── CONTACT / FOOTER ─────────────────────────── -->
<!-- ── Custom cursor + scroll progress ── -->
<!-- ─────────────────────────── JAVASCRIPT ─────────────────────────── -->
@endsection
