@extends('layouts.portfolio')

@section('title', 'Portofolio')
@section('description', 'Proyek yang pernah dikerjakan Ngakan Made Kutha Rama Deniswara selama kuliah.')

@section('content')
<section class="page-head">
  <div class="container">
    <h1>Portofolio</h1>
    <p>Tiga proyek yang pernah saya kerjakan selama masa perkuliahan.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row g-4">

      <div class="col-md-6 col-lg-4">
        <article class="card project h-100">
          <div class="card-body d-flex flex-column">
            <span class="num">01</span>
            <h3>Kospol</h3>
            <p class="kind">Perancangan aplikasi &middot; Tugas Design Thinking</p>
            <p>
              Aplikasi untuk menyewa dan membeli barang antar anak kos. Dirancang untuk memenuhi tugas
              mata kuliah Design Thinking dengan berangkat dari kebutuhan nyata penghuni kos.
            </p>
            <ul class="tags">
              <li>Design Thinking</li>
              <li>UI/UX</li>
              <li>Perancangan Aplikasi</li>
            </ul>
          </div>
        </article>
      </div>

      <div class="col-md-6 col-lg-4">
        <article class="card project h-100">
          <div class="card-body d-flex flex-column">
            <span class="num">02</span>
            <h3>Sistem Pemesanan Kantin Kampus Digital</h3>
            <p class="kind">Program console &middot; Java</p>
            <p>
              Program berbasis console untuk mensimulasikan pemesanan makanan di kantin kampus secara digital,
              dibuat menggunakan bahasa Java.
            </p>
            <ul class="tags">
              <li>Java</li>
              <li>Console App</li>
            </ul>
          </div>
        </article>
      </div>

      <div class="col-md-12 col-lg-4">
        <article class="card project h-100">
          <div class="card-body d-flex flex-column">
            <span class="num">03</span>
            <h3>Website Pelaporan &middot; Lomba Web Dev MIA</h3>
            <p class="kind">Kompetisi &middot; Multimedia In Action (MIA)</p>
            <p>
              Mengikuti lomba web development yang diselenggarakan oleh Multimedia In Action (MIA)
              di luar kampus dengan membangun website pelaporan.
            </p>
            <ul class="tags">
              <li>React JS</li>
              <li>Tailwind CSS</li>
              <li>Express JS</li>
              <li>Node JS</li>
              <li>Supabase</li>
            </ul>
          </div>
        </article>
      </div>

    </div>
  </div>
</section>

<section class="section alt">
  <div class="container">
    <h2 class="section-title">Tech stack lomba MIA</h2>
    <p class="section-sub">Susunan teknologi yang saya gunakan pada website pelaporan.</p>
    <div class="row g-4">
      <div class="col-md-4">
        <article class="card h-100">
          <div class="card-body">
            <div class="icon-badge">FE</div>
            <h3>Frontend</h3>
            <p>React JS &amp; Tailwind CSS</p>
          </div>
        </article>
      </div>
      <div class="col-md-4">
        <article class="card h-100">
          <div class="card-body">
            <div class="icon-badge">BE</div>
            <h3>Backend</h3>
            <p>Express JS &amp; Node JS</p>
          </div>
        </article>
      </div>
      <div class="col-md-4">
        <article class="card h-100">
          <div class="card-body">
            <div class="icon-badge">DB</div>
            <h3>Database</h3>
            <p>Supabase</p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
@endsection
