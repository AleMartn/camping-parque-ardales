@extends('layouts.app', [
    'bodyClass' => 'subpage',
    'active' => 'contacto',
])

@section('title', 'Contacto · Camping Parque Ardales')
@section('meta_description', 'Contacto Camping Parque Ardales. Email, ubicación, cómo llegar y preguntas frecuentes. Ardales, Málaga · Embalse Conde de Guadalhorce.')

@push('head')
<style>
    :root { --page-hero-bg: url('/images/Recepcion 1.webp'); }
  </style>
@endpush

@section('content')
<!-- ─────────────────────────── NAV ─────────────────────────── -->
<!-- Mobile menu -->
<!-- ─────────────────────────── PAGE HERO ─────────────────────────── -->
<section class="page-hero">
  <p class="ph-sup"><span class="es">Ponte en contacto</span><span class="en">Get in touch</span></p>
  <h1>
    <span class="es">Hablemos de tu <em>estancia</em></span>
    <span class="en">Let's plan your <em>stay</em></span>
  </h1>
  <p class="ph-lead">
    <span class="es">Resolvemos dudas sobre disponibilidad, entradas al Caminito del Rey, grupos o la cabaña de eventos. Escríbenos o visítanos en Ardales.</span>
    <span class="en">We answer questions on availability, Caminito del Rey tickets, groups or the event cabin. Write to us or visit in Ardales.</span>
  </p>
</section>

<!-- ─────────────────────────── CONTACT CARDS ─────────────────────────── -->
<section class="section" style="padding-top: 4rem;">
  <div class="container">
    <p class="section-sup reveal"><span class="es">Tres formas de contacto</span><span class="en">Three ways to reach us</span></p>
    <h2 class="section-h reveal"><span class="es">Escríbenos o <em>visítanos</em></span><span class="en">Write to us or <em>visit us</em></span></h2>

    <div class="contact-cards reveal">
      <div class="contact-card">
        <div class="cc-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 6l-10 7L2 6"/></svg>
        </div>
        <h3>Email</h3>
        <p>
          <span class="es">La forma más directa de contactarnos. Respondemos en el mismo día laborable.</span>
          <span class="en">The most direct way to reach us. We reply the same working day.</span>
        </p>
        <a href="mailto:info@parqueardales.com" class="cc-link">info@parqueardales.com</a>
      </div>

      <div class="contact-card">
        <div class="cc-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
        </div>
        <h3><span class="es">Teléfono</span><span class="en">Phone</span></h3>
        <p>
          <span class="es">Llámanos para consultas directas, disponibilidad o reservas. Horario de atención 09:00–22:00.</span>
          <span class="en">Call us for direct queries, availability or bookings. Open 09:00–22:00.</span>
        </p>
        <a href="tel:+34951264924" class="cc-link">951 264 924</a>
      </div>

      <div class="contact-card">
        <div class="cc-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
        </div>
        <h3><span class="es">Ubicación</span><span class="en">Location</span></h3>
        <p>
          <span class="es">Ardales, Málaga · Embalse Conde de Guadalhorce. A 1,5 km del acceso peatonal del Caminito del Rey.</span>
          <span class="en">Ardales, Málaga · Conde de Guadalhorce Reservoir. 1.5 km from the Caminito del Rey pedestrian access.</span>
        </p>
        <a href="https://www.google.com/maps/search/?api=1&query=36.919909701148974,-4.804192046065863" target="_blank" rel="noopener" class="cc-link">
          <span class="es">Abrir en Google Maps</span><span class="en">Open in Google Maps</span>
        </a>
      </div>
    </div>

    <!-- Location + map -->
    <div class="location-block reveal" id="ubicacion">
      <div class="location-info">
        <p class="db-sup"><span class="es">Cómo llegar</span><span class="en">How to get here</span></p>
        <h3>
          <span class="es">Ardales, <em>Málaga</em></span>
          <span class="en">Ardales, <em>Málaga</em></span>
        </h3>
        <p>
          <span class="es">Nos encuentras a orillas del Embalse Conde de Guadalhorce, en el corazón del Parque Natural. A pocos minutos en coche del Caminito del Rey, la Cueva de Ardales y los cañones de El Chorro.</span>
          <span class="en">You'll find us on the shores of the Conde de Guadalhorce Reservoir, in the heart of the natural park. Minutes by car from Caminito del Rey, Ardales Cave and the El Chorro canyons.</span>
        </p>
        <div class="loc-row">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <div>
            <strong><span class="es">Dirección</span><span class="en">Address</span></strong>
            Ardales, 29550 · Málaga · España
          </div>
        </div>
        <div class="loc-row">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <div>
            <strong><span class="es">Coordenadas</span><span class="en">Coordinates</span></strong>
            36.9199° N · 4.8042° W
          </div>
        </div>
        <div class="loc-row">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M5 17l4-4 4 4 6-6"/><polyline points="14 7 20 7 20 13"/></svg>
          <div>
            <strong><span class="es">Distancias</span><span class="en">Distances</span></strong>
            <span class="es">Caminito del Rey: 1,5 km · Málaga: 60 km · Ronda: 45 km · Antequera: 40 km</span>
            <span class="en">Caminito del Rey: 1.5 km · Málaga: 60 km · Ronda: 45 km · Antequera: 40 km</span>
          </div>
        </div>
        <div class="detail-cta-row" style="margin-top: 1.5rem;">
          <a href="https://www.google.com/maps/search/?api=1&query=36.919909701148974,-4.804192046065863" target="_blank" rel="noopener" class="detail-cta">
            <span class="es">Abrir en Google Maps</span><span class="en">Open in Google Maps</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
          </a>
        </div>
      </div>
      <div class="location-map">
        <iframe
          src="https://www.google.com/maps?q=36.919909701148974,-4.804192046065863&z=15&hl=es&output=embed"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          allowfullscreen
          title="Mapa de ubicación"></iframe>
      </div>
    </div>
  </div>
</section>

<!-- ─────────────────────────── FAQ ─────────────────────────── -->
<section class="section" id="faq" style="padding-top: 2rem;">
  <div class="container">
    <p class="section-sup reveal"><span class="es">Preguntas frecuentes</span><span class="en">Frequently asked</span></p>
    <h2 class="section-h reveal"><span class="es"><em>Todo</em> lo que necesitas saber</span><span class="en"><em>Everything</em> you need to know</span></h2>
    <p class="section-desc reveal">
      <span class="es">¿Tienes dudas? Aquí resolvemos las preguntas más habituales. Si no encuentras la tuya, escríbenos.</span>
      <span class="en">Got questions? Here we answer the most common ones. If yours isn't here, drop us an email.</span>
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
          <span class="es">Todas las parcelas incluyen punto de agua y acceso a baños y duchas con agua caliente. Las parcelas para caravanas y autocaravanas cuentan con toma eléctrica de 15 amperios y conexión de desagüe. Las parcelas de acampada con luz disponen de 10 amperios (unos 4.700 W). La potencia puede variar en algunas parcelas. El WiFi está disponible únicamente en la zona de recepción.</span>
          <span class="en">All pitches include a water point and access to bathrooms and hot showers. Caravan and motorhome pitches have a 15-amp power supply and drainage connection. Tent pitches with electricity have 10 amps (around 4,700 W). Power may vary on some pitches. WiFi is available only in the reception area.</span>
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
          <span class="es">Puedes comprar las entradas directamente en <a href="https://www.giglon.com/todos?idEvent=visitas-guiadas-a-la-cueva-de-ardales-malaga" target="_blank" rel="noopener">Giglon</a> o en taquilla.</span>
          <span class="en">You can buy tickets directly on <a href="https://www.giglon.com/todos?idEvent=visitas-guiadas-a-la-cueva-de-ardales-malaga" target="_blank" rel="noopener">Giglon</a> or at the ticket office.</span>
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
          <span class="es">Estamos a tan solo 1,5 km del acceso peatonal del Caminito del Rey, desde donde sale un sendero de otros 1,5 km a pie hasta la taquilla de entrada. También puedes llegar en coche o bicicleta. Recuerda que las entradas deben comprarse con antelación — nosotros te las gestionamos si reservas con nosotros.</span>
          <span class="en">We are just 1.5 km from the pedestrian access to the Caminito del Rey, from where a 1.5 km footpath leads to the ticket office. You can also get there by car or bike. Remember that tickets must be bought in advance — we handle them for you if you book with us.</span>
        </div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">
          <h4><span class="es">¿Cómo puedo hacer una reserva de grupo?</span><span class="en">How can I make a group booking?</span></h4>
          <div class="faq-chevron">+</div>
        </div>
        <div class="faq-a"><div class="faq-a-inner">
          <span class="es">Debes hacer una reserva por parcela. Para grupos de scouts, colegios y similares, <a href="{{ route('contacto') }}">contacta con el camping</a> y te ayudamos a organizarlo.</span>
          <span class="en">You need to make a separate booking for each pitch. For scout groups, school groups and similar, <a href="{{ route('contacto') }}">contact the campsite</a> and we'll help you organise it.</span>
        </div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">
          <h4><span class="es">¿Hay WiFi en el camping?</span><span class="en">Is there WiFi at the campsite?</span></h4>
          <div class="faq-chevron">+</div>
        </div>
        <div class="faq-a"><div class="faq-a-inner">
          <span class="es">Sí, ofrecemos WiFi gratuito únicamente en la zona de recepción. La cobertura no llega a las parcelas ni a los apartamentos.</span>
          <span class="en">Yes, we offer free WiFi only in the reception area. Coverage does not reach the pitches or apartments.</span>
        </div></div>
      </div>

    </div>
  </div>
</section>

<!-- ─────────────────────────── CROSS CTA ─────────────────────────── -->
<div class="cross-cta">
  <p class="eyebrow"><span class="es">Cuando tengas claras las fechas</span><span class="en">When you're ready</span></p>
  <h3>
    <span class="es">Reserva tu <em>refugio</em> en la naturaleza</span>
    <span class="en">Book your <em>retreat</em> in nature</span>
  </h3>
  <div class="cta-pair">
    <a href="{{ route('home') }}#booking" class="cc-btn">
      <span class="es">Ver disponibilidad</span><span class="en">Check availability</span>
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
    <a href="mailto:info@parqueardales.com" class="cc-btn ghost">
      <span class="es">Escribir un email</span><span class="en">Send an email</span>
    </a>
  </div>
</div>

<!-- ─────────────────────────── FOOTER ─────────────────────────── -->
<!-- ── Custom cursor + scroll progress ── -->
<!-- ─────────────────────────── JAVASCRIPT ─────────────────────────── -->
@endsection
