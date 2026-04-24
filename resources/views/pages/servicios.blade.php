@extends('layouts.app', [
    'bodyClass' => 'subpage',
    'active' => 'servicios',
])

@section('title', 'Servicios · Camping Parque Ardales')
@section('meta_description', 'Servicios del Camping Parque Ardales: piscina, supermercado, baños, cabaña de eventos, gestión de entradas del Caminito del Rey, grupos y pet friendly.')

@push('head')
<style>
    :root { --page-hero-bg: url('/images/Entorno 20.webp'); }
  </style>
@endpush

@section('content')
<!-- ─────────────────────────── NAV ─────────────────────────── -->
<!-- Mobile menu -->
<!-- ─────────────────────────── PAGE HERO ─────────────────────────── -->
<section class="page-hero">
  <p class="ph-sup"><span class="es">Lo que ofrecemos</span><span class="en">What we offer</span></p>
  <h1>
    <span class="es">Servicios e <em>información</em></span>
    <span class="en">Services &amp; <em>information</em></span>
  </h1>
  <p class="ph-lead">
    <span class="es">Todo lo que necesitas para una estancia perfecta: piscina infinita, supermercado, baños con duchas calientes, gestión de entradas del Caminito y más.</span>
    <span class="en">Everything you need for a perfect stay: infinity pool, supermarket, hot-shower bathrooms, Caminito ticket management and more.</span>
  </p>
</section>

<!-- ─────────────────────────── CAMINITO FEATURED ─────────────────────────── -->
<section class="section" style="padding-top: 4rem; padding-bottom: 0;">
  <div class="container">
    <div class="caminito-featured reveal">
      <div>
        <div class="cf-star"><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg> <span class="es">Servicio destacado</span><span class="en">Featured service</span></div>
        <h3><span class="es"><em>Caminito del Rey</em> — Gestión de entradas</span><span class="en"><em>Caminito del Rey</em> — Ticket management</span></h3>
        <p>
          <span class="es">Si realizas una reserva de camping o apartamento con un mínimo de <strong style="color:var(--gold-light)">3 días de antelación</strong>, nos encargamos de gestionar tus entradas. No te preocupes por quedarte sin plaza — nosotros lo gestionamos por ti.</span>
          <span class="en">If you book a camping pitch or apartment at least <strong style="color:var(--gold-light)">3 days in advance</strong>, we'll manage your tickets. No need to worry about missing out — we handle it for you.</span>
        </p>
      </div>
      <div class="cf-badge">
        <div class="cf-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9a1 1 0 011-1h18a1 1 0 011 1v2a2 2 0 100 4v2a1 1 0 01-1 1H3a1 1 0 01-1-1v-2a2 2 0 100-4V9z"/><line x1="9" y1="8" x2="9" y2="18"/></svg></div>
        <div class="cf-title"><span class="es">Entradas gestionadas</span><span class="en">Managed tickets</span></div>
        <div class="cf-note"><span class="es">Con reserva · Mín. 3 días de antelación</span><span class="en">With booking · Min. 3 days in advance</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ─────────────────────────── ON-SITE SERVICES GRID ─────────────────────────── -->
<section class="section" id="instalaciones">
  <div class="container">
    <p class="section-sup reveal"><span class="es">En el recinto</span><span class="en">On-site</span></p>
    <h2 class="section-h reveal"><span class="es">Instalaciones del <em>camping</em></span><span class="en">Campsite <em>facilities</em></span></h2>

    <div class="svc-grid">
      <!-- Pool -->
      <div class="svc-card c-water reveal" id="piscina">
        <div class="svc-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M2 16c1.5 0 2.5 1 4 1s2.5-1 4-1 2.5 1 4 1 2.5-1 4-1 2.5 1 4 1"/><path d="M2 20c1.5 0 2.5 1 4 1s2.5-1 4-1 2.5 1 4 1 2.5-1 4-1 2.5 1 4 1"/><path d="M12 4a2 2 0 012 2v6"/><path d="M8 12h8"/></svg></div>
        <h3><span class="es">Piscina infinita</span><span class="en">Infinity pool</span></h3>
        <p><span class="es">Refréscate en nuestra piscina infinita rodeada de naturaleza. El lugar perfecto para que toda la familia disfrute durante los meses de verano.</span><span class="en">Cool off in our infinity pool surrounded by nature. The perfect place for the whole family to enjoy during summer.</span></p>
        <div class="svc-info">
          <strong><span class="es">Temporada:</span><span class="en">Season:</span></strong> <span class="es">Junio – Septiembre</span><span class="en">June – September</span>
        </div>
        <div class="svc-info">
          <strong><span class="es">Horario:</span><span class="en">Hours:</span></strong> 11:00 – 20:00
        </div>
      </div>

      <!-- Supermarket -->
      <div class="svc-card c-gold reveal reveal-d1" id="supermercado">
        <div class="svc-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></div>
        <h3><span class="es">Supermercado</span><span class="en">Supermarket</span></h3>
        <p><span class="es">Supermercado en las instalaciones con productos frescos, bebidas, conservas y artículos de camping para que no te falte nada.</span><span class="en">On-site supermarket with fresh produce, drinks, tinned goods and camping supplies so you have everything you need.</span></p>
        <div class="svc-info">
          <strong><span class="es">Apertura:</span><span class="en">Open:</span></strong> <span class="es">Semana Santa hasta el 15 de octubre</span><span class="en">Easter Week until 15th October</span>
        </div>
      </div>

      <!-- Bathrooms -->
      <div class="svc-card c-green reveal reveal-d2" id="banos">
        <div class="svc-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><path d="M12 12v10"/><path d="M6 12h12"/><path d="M9 12a3 3 0 016 0"/></svg></div>
        <h3><span class="es">Baños y duchas</span><span class="en">Bathrooms &amp; showers</span></h3>
        <p><span class="es">Bloques sanitarios renovados, con duchas de agua caliente disponibles 24h y zonas diferenciadas para mayor comodidad.</span><span class="en">Renovated sanitary blocks with 24h hot-water showers and separate zones for added comfort.</span></p>
        <div class="svc-info">
          <strong><span class="es">Disponibilidad:</span><span class="en">Availability:</span></strong> 24/7
        </div>
        <div class="svc-info">
          <strong><span class="es">Agua caliente:</span><span class="en">Hot water:</span></strong> <span class="es">Incluida</span><span class="en">Included</span>
        </div>
      </div>

      <!-- Reception -->
      <div class="svc-card c-terra reveal" id="recepcion">
        <div class="svc-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h18"/><path d="M5 12v6a2 2 0 002 2h10a2 2 0 002-2v-6"/><path d="M3 12V8a2 2 0 012-2h14a2 2 0 012 2v4"/><line x1="9" y1="16" x2="9" y2="20"/><line x1="15" y1="16" x2="15" y2="20"/></svg></div>
        <h3><span class="es">Recepción</span><span class="en">Reception</span></h3>
        <p><span class="es">Nuestro equipo te recibe y te ayuda con cualquier consulta: rutas, entradas, reservas de actividades o recomendaciones locales.</span><span class="en">Our team welcomes you and helps with any question: hikes, tickets, activity bookings or local tips.</span></p>
        <div class="svc-info">
          <strong><span class="es">Horario:</span><span class="en">Hours:</span></strong> 09:00 – 22:00
        </div>
        <div class="svc-info">
          <strong>Email:</strong> info@parqueardales.com
        </div>
      </div>

      <!-- Dog Friendly -->
      <div class="svc-card c-terra reveal reveal-d1" id="petfriendly">
        <div class="svc-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 10c-1.5 2-4 3.5-4 6a4 4 0 008 0c0-2.5-2.5-4-4-6z"/><circle cx="7.5" cy="6" r="1.8"/><circle cx="16.5" cy="6" r="1.8"/><circle cx="12" cy="3.5" r="1.8"/><circle cx="4.5" cy="10" r="1.8"/><circle cx="19.5" cy="10" r="1.8"/></svg></div>
        <h3><span class="es">Zona pet friendly</span><span class="en">Pet friendly zone</span></h3>
        <p><span class="es">Somos un camping Dog Friendly. Tu perro u otras mascotas son bienvenidos con zona habilitada para paseos y esparcimiento.</span><span class="en">We are a Dog Friendly campsite. Your dog or other pets are welcome with a dedicated walking and play zone.</span></p>
        <div class="svc-info">
          <strong><span class="es">Tarifa:</span><span class="en">Rate:</span></strong> 2€ / <span class="es">animal / día</span><span class="en">animal / day</span>
        </div>
      </div>

      <!-- WiFi -->
      <div class="svc-card c-gold reveal reveal-d2" id="wifi">
        <div class="svc-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.55a11 11 0 0114 0"/><path d="M1.42 9a16 16 0 0121.16 0"/><path d="M8.53 16.11a6 6 0 016.95 0"/><line x1="12" y1="20" x2="12.01" y2="20"/></svg></div>
        <h3>WiFi</h3>
        <p><span class="es">Conexión WiFi gratuita en apartamentos, zona de recepción y áreas comunes del camping.</span><span class="en">Free WiFi in apartments, reception and common areas.</span></p>
        <div class="svc-info">
          <strong><span class="es">Cobertura:</span><span class="en">Coverage:</span></strong> <span class="es">Apartamentos y zona común</span><span class="en">Apartments and common area</span></span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─────────────────────────── SPECIAL SERVICES ─────────────────────────── -->
<section class="section" style="padding-top: 2rem;">
  <div class="container">
    <p class="section-sup reveal"><span class="es">Servicios especiales</span><span class="en">Special services</span></p>
    <h2 class="section-h reveal"><span class="es">Para celebraciones y <em>grupos</em></span><span class="en">For events and <em>groups</em></span></h2>

    <!-- Cabaña -->
    <div class="detail-block reveal" id="cabana">
      <div class="detail-media">
        <img src="/images/Cabaña1.webp" alt="Cabaña salón-cocina" loading="lazy">
        <div class="dm-badge"><span class="es">Alquiler por días</span><span class="en">Day rental</span></div>
      </div>
      <div class="detail-body">
        <p class="db-sup"><span class="es">Espacio único</span><span class="en">Unique space</span></p>
        <h2>
          <span class="es">Cabaña <em>salón-cocina</em></span>
          <span class="en"><em>Salon-kitchen</em> cabin</span>
        </h2>
        <p class="lead">
          <span class="es">Una cabaña con salón y cocina completa, disponible para alquiler por días. Ideal para celebraciones familiares, reuniones, cumpleaños o eventos en plena naturaleza con capacidad para grupos.</span>
          <span class="en">A cabin with lounge and full kitchen, available for day rental. Ideal for family celebrations, gatherings, birthdays or events in the heart of nature, with capacity for groups.</span>
        </p>
        <ul class="feature-list">
          <li><span class="es">Cocina completa</span><span class="en">Full kitchen</span></li>
          <li><span class="es">Zona de salón</span><span class="en">Lounge area</span></li>
          <li><span class="es">Mesas y sillas</span><span class="en">Tables &amp; chairs</span></li>
          <li><span class="es">Baño privado</span><span class="en">Private bathroom</span></li>
          <li><span class="es">Terraza exterior</span><span class="en">Outdoor terrace</span></li>
          <li><span class="es">Electrodomésticos</span><span class="en">Appliances</span></li>
        </ul>
        <div class="detail-cta-row">
          <a href="mailto:info@parqueardales.com?subject=Consulta%20Caba%C3%B1a" class="detail-cta">
            <span class="es">Solicitar información</span><span class="en">Request information</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
          <a href="{{ route('contacto') }}" class="detail-cta-ghost">
            <span class="es">Otras formas de contacto</span><span class="en">Other contact options</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Grupos -->
    <div class="detail-block reverse reveal" id="grupos">
      <div class="detail-media">
        <img src="/images/Entorno 4.webp" alt="Grupos y eventos" loading="lazy">
        <div class="dm-badge"><span class="es">Presupuesto personalizado</span><span class="en">Custom quote</span></div>
      </div>
      <div class="detail-body">
        <p class="db-sup"><span class="es">Estancias a medida</span><span class="en">Tailored stays</span></p>
        <h2>
          <span class="es">Grupos y <em>eventos</em></span>
          <span class="en">Groups &amp; <em>events</em></span>
        </h2>
        <p class="lead">
          <span class="es">Organizamos estancias para grupos escolares, empresas, familias extensas y celebraciones especiales. Contacta con nosotros para un presupuesto personalizado según fechas, nº de personas y servicios.</span>
          <span class="en">We organise stays for school groups, companies, large families and special occasions. Get in touch for a tailored quote based on dates, guests and services.</span>
        </p>
        <ul class="feature-list">
          <li><span class="es">Grupos escolares</span><span class="en">School groups</span></li>
          <li><span class="es">Empresas</span><span class="en">Companies</span></li>
          <li><span class="es">Celebraciones</span><span class="en">Celebrations</span></li>
          <li><span class="es">Retiros</span><span class="en">Retreats</span></li>
          <li><span class="es">Actividades guiadas</span><span class="en">Guided activities</span></li>
          <li><span class="es">Catering bajo consulta</span><span class="en">Catering on request</span></li>
        </ul>
        <div class="detail-cta-row">
          <a href="mailto:info@parqueardales.com?subject=Consulta%20Grupos" class="detail-cta">
            <span class="es">Pedir presupuesto</span><span class="en">Request a quote</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─────────────────────────── CROSS CTA ─────────────────────────── -->
<div class="cross-cta">
  <p class="eyebrow"><span class="es">Reserva tu estancia</span><span class="en">Book your stay</span></p>
  <h3>
    <span class="es">Todo listo para <em>disfrutar</em> del entorno</span>
    <span class="en">Everything set to <em>enjoy</em> the setting</span>
  </h3>
  <div class="cta-pair">
    <a href="{{ route('home') }}#booking" class="cc-btn">
      <span class="es">Ver disponibilidad</span><span class="en">Check availability</span>
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
    <a href="{{ route('camping') }}" class="cc-btn ghost">
      <span class="es">Ver alojamientos</span><span class="en">See accommodation</span>
    </a>
  </div>
</div>

<!-- ─────────────────────────── FOOTER ─────────────────────────── -->
<!-- ── Custom cursor + scroll progress ── -->
<!-- ─────────────────────────── JAVASCRIPT ─────────────────────────── -->
@endsection
