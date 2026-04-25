<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#F4EFE6">
  <meta name="description" content="@yield('meta_description', __('Camping Parque Ardales - Alojamiento familiar en plena naturaleza a orillas del Embalse Conde de Guadalhorce, Málaga.'))">
  <title>@yield('title', 'Camping Parque Ardales · Embalse Conde de Guadalhorce · Málaga')</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;0,9..144,900;1,9..144,300;1,9..144,400;1,9..144,700;1,9..144,900&family=Bricolage+Grotesque:opsz,wght@12..96,200;12..96,300;12..96,400;12..96,500;12..96,600;12..96,700;12..96,800&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @stack('head')
</head>
<body class="{{ trim(($bodyClass ?? '').' lang-'.app()->getLocale()) }}">

  {{-- Bloque crema en flujo normal al inicio del body. iOS Safari samplea
       el primer contenido del flujo del documento (no los position: fixed)
       para el blur translúcido de su URL bar. Sin esto, samplea .page-hero
       (oscuro) y la status bar sale tintada oscura sobre fondo crema → parece
       "transparente". El margin-bottom negativo lo neutraliza visualmente. --}}
  <div class="ios-chrome-spacer" aria-hidden="true"></div>

  <x-nav :active="$active ?? null" />

  @yield('content')

  <x-site-footer />

  <div class="scroll-progress" id="scrollProgress"></div>

  @stack('modals')

  <script src="https://unpkg.com/lenis@1/dist/lenis.min.js"></script>
  @stack('scripts')
</body>
</html>
