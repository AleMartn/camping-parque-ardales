<footer id="contacto">
  <div class="contact-grid">
    <div class="ct-brand">
      <div class="ct-sub"><span class="es">Camping familiar · Embalse Conde de Guadalhorce</span><span class="en">Family camping · Conde de Guadalhorce Reservoir</span></div>
      <img src="{{ asset('logo-negativo.svg') }}" alt="Camping Parque Ardales" style="height:70px;width:auto;margin-bottom:0.6rem;">
      <p>
        <span class="es">Un rincón único en la naturaleza malagueña, a orillas del embalse y a las puertas del Caminito del Rey y la Cueva de Ardales.</span>
        <span class="en">A unique corner of Málaga's natural landscape, on the shores of the reservoir and at the gateway to the Caminito del Rey and Ardales Cave.</span>
      </p>
      <a href="mailto:info@parqueardales.com" class="ct-email">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 6l-10 7L2 6"/></svg> info@parqueardales.com
      </a>
      <a href="tel:+34951264924" class="ct-phone"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg> 951 264 924</a>
      <div class="ct-social">
        <a href="https://www.instagram.com/campingparqueardales20" target="_blank" rel="noopener" aria-label="Instagram">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
          <span>@campingparqueardales20</span>
        </a>
      </div>
    </div>

    <div class="ct-col">
      <h4><span class="es">Estancia</span><span class="en">Stay</span></h4>
      <ul>
        <li><a href="{{ route('apartamentos') }}"><span class="es">Apartamentos</span><span class="en">Apartments</span></a></li>
        <li><a href="{{ route('camping') }}#tiendas"><span class="es">Parcelas tiendas</span><span class="en">Tent pitches</span></a></li>
        <li><a href="{{ route('camping') }}#caravanas"><span class="es">Parcelas caravanas</span><span class="en">Caravan pitches</span></a></li>
        <li><a href="{{ route('servicios') }}#cabana"><span class="es">Cabaña Salón-Cocina</span><span class="en">Salon-Kitchen Cabin</span></a></li>
      </ul>
    </div>

    <div class="ct-col">
      <h4><span class="es">Actividades</span><span class="en">Activities</span></h4>
      <ul>
        <li><a href="{{ route('actividades') }}#act-0">Caminito del Rey</a></li>
        <li><a href="{{ route('actividades') }}#act-1"><span class="es">Cueva de Ardales</span><span class="en">Ardales Cave</span></a></li>
        <li><a href="{{ route('actividades') }}#act-escalada"><span class="es">Escalada</span><span class="en">Climbing</span></a></li>
        <li><a href="{{ route('actividades') }}#act-3"><span class="es">Senderismo</span><span class="en">Hiking</span></a></li>
        <li><a href="{{ route('actividades') }}#act-2"><span class="es">Actividades náuticas</span><span class="en">Water activities</span></a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© {{ date('Y') }} Camping Parque Ardales · Ardales, Málaga</p>
    <p style="color:rgba(255,255,255,0.3);font-size:0.75rem;">
      <a href="#" style="color:rgba(255,255,255,0.35);text-decoration:none;">
        <span class="es">Política de privacidad</span><span class="en">Privacy policy</span>
      </a>
      &nbsp;·&nbsp;
      <a href="#" style="color:rgba(255,255,255,0.35);text-decoration:none;">
        <span class="es">Aviso legal</span><span class="en">Legal notice</span>
      </a>
    </p>
  </div>
</footer>
