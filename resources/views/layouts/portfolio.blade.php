<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') | Ngakan Made Kutha Rama Deniswara</title>
  <meta name="description" content="@yield('description')">
  @vite('resources/sass/app.scss')
</head>
<body class="portfolio-site">

  @php
    $menu = [
      'portofolio.beranda'    => 'Beranda',
      'portofolio.tentang'    => 'Tentang',
      'portofolio.proyek'     => 'Portofolio',
      'portofolio.kontak'     => 'Kontak',
    ];
  @endphp

  <header class="site-header sticky-top">
    <nav class="navbar navbar-expand-md">
      <div class="container">
        <a class="navbar-brand" href="{{ route('portofolio.beranda') }}">&lt;rama<span>/</span>&gt;</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-links" aria-controls="nav-links" aria-expanded="false" aria-label="Buka menu navigasi">Menu</button>
        <div class="collapse navbar-collapse" id="nav-links">
          <ul class="navbar-nav ms-auto">
            @foreach ($menu as $namaRoute => $label)
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs($namaRoute) ? 'active' : '' }}"
                   @if (request()->routeIs($namaRoute)) aria-current="page" @endif
                   href="{{ route($namaRoute) }}">{{ $label }}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>

  <footer class="site-footer">
    <div class="container d-flex flex-wrap justify-content-between gap-2">
      <span><strong>NGAKAN MADE KUTHA RAMA DENISWARA_108052500016</strong></span>
      <span>Dibuat dengan Laravel 13 &amp; Bootstrap 5</span>
    </div>
  </footer>

  @vite('resources/js/app.js')
</body>
</html>
