@props(['active' => null])

@php
    $locale = app()->getLocale();
    $altLocale = $locale === 'es' ? 'en' : 'es';
    $currentPath = request()->path();
    $pathWithoutLocale = preg_replace('#^'.preg_quote($locale, '#').'/?#', '', $currentPath);
    $altUrl = url('/'.$altLocale.($pathWithoutLocale !== '' ? '/'.$pathWithoutLocale : ''));
@endphp

<nav id="nav">
  <a href="{{ route('home') }}" class="nav-logo">
    <img src="{{ asset('logo.svg') }}" alt="Camping Parque Ardales">
  </a>
  <ul class="nav-links">
    <li><a href="{{ route('camping') }}" class="{{ $active === 'camping' ? 'active' : '' }}">Camping</a></li>
    <li><a href="{{ route('apartamentos') }}" class="{{ $active === 'apartamentos' ? 'active' : '' }}"><span class="es">Apartamentos</span><span class="en">Apartments</span></a></li>
    <li><a href="{{ route('servicios') }}" class="{{ $active === 'servicios' ? 'active' : '' }}"><span class="es">Servicios</span><span class="en">Services</span></a></li>
    <li><a href="{{ route('actividades') }}" class="{{ $active === 'actividades' ? 'active' : '' }}"><span class="es">Actividades</span><span class="en">Activities</span></a></li>
    <li><a href="{{ route('galeria') }}" class="{{ $active === 'galeria' ? 'active' : '' }}"><span class="es">Galería</span><span class="en">Gallery</span></a></li>
    <li><a href="{{ route('contacto') }}" class="{{ $active === 'contacto' ? 'active' : '' }}"><span class="es">Contacto</span><span class="en">Contact</span></a></li>
  </ul>
  <div class="nav-right">
    <div class="lang-dropdown" id="langDropdown">
      <button class="lang-btn" id="langBtn" type="button">{{ strtoupper($locale) }} <svg width="10" height="6" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><path d="M1 1l4 4 4-4"/></svg></button>
      <div class="lang-menu" id="langMenu">
        <a class="lang-option {{ $locale === 'es' ? 'active' : '' }}" href="{{ $locale === 'es' ? '#' : url(preg_replace('#^/'.$locale.'#', '/es', '/'.$currentPath)) }}">Español</a>
        <a class="lang-option {{ $locale === 'en' ? 'active' : '' }}" href="{{ $locale === 'en' ? '#' : url(preg_replace('#^/'.$locale.'#', '/en', '/'.$currentPath)) }}">English</a>
      </div>
    </div>
  </div>
  <button class="hamburger" id="hamburger" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<div class="mobile-menu" id="mobileMenu">
  <a href="{{ route('camping') }}" class="mob-link">Camping</a>
  <a href="{{ route('apartamentos') }}" class="mob-link"><span class="es">Apartamentos</span><span class="en">Apartments</span></a>
  <a href="{{ route('servicios') }}" class="mob-link"><span class="es">Servicios</span><span class="en">Services</span></a>
  <a href="{{ route('actividades') }}" class="mob-link"><span class="es">Actividades</span><span class="en">Activities</span></a>
  <a href="{{ route('galeria') }}" class="mob-link"><span class="es">Galería</span><span class="en">Gallery</span></a>
  <a href="{{ route('contacto') }}" class="mob-link"><span class="es">Contacto</span><span class="en">Contact</span></a>
</div>
