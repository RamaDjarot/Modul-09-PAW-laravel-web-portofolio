@extends('layouts.portfolio')

@section('title', 'Beranda')
@section('description', 'Portofolio Ngakan Made Kutha Rama Deniswara, mahasiswa S1 Sistem Informasi Telkom University Surabaya.')

@section('content')
<section class="hero">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7 order-2 order-lg-1">
        <span class="eyebrow">Halo, saya</span>
        <h1>Ngakan Made Kutha Rama Deniswara</h1>
        <p class="nim">NIM 108052500016</p>
        <p class="lead">
          Mahasiswa S1 Sistem Informasi di Telkom University Surabaya yang gemar mengubah ide
          menjadi aplikasi lewat kode. Di luar layar, saya menyalurkan energi lewat
          riding, karena perjalanan panjang dan debugging punya kesamaan:
          sama-sama butuh fokus, sabar, dan kemauan mencoba rute lain.
        </p>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a class="btn btn-accent" href="{{ route('portofolio.proyek') }}">Lihat Portofolio</a>
          <a class="btn btn-outline-deep" href="{{ route('portofolio.kontak') }}">Hubungi Saya</a>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 d-flex justify-content-center">
        <div class="avatar-wrap">
          <img src="{{ Vite::asset('resources/images/avatar.jpg') }}" alt="Foto Ngakan Made Kutha Rama Deniswara" width="400" height="400">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section alt">
  <div class="container">
    <h2 class="section-title">Sekilas tentang saya</h2>
    <p class="section-sub">Tiga hal yang paling mewakili keseharian saya.</p>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <article class="card h-100">
          <div class="card-body">
            <div class="icon-badge">&lt;/&gt;</div>
            <h3>Ngoding</h3>
            <p>Menikmati proses merancang logika, membangun fitur, dan melihat sebuah aplikasi berjalan dari nol.</p>
          </div>
        </article>
      </div>
      <div class="col-md-6 col-lg-4">
        <article class="card h-100">
          <div class="card-body">
            <div class="icon-badge">&gt;&gt;</div>
            <h3>Riding</h3>
            <p>Berkendara jadi cara saya melepas penat dan mencari ide baru di luar meja kerja.</p>
          </div>
        </article>
      </div>
      <div class="col-md-12 col-lg-4">
        <article class="card h-100">
          <div class="card-body">
            <div class="icon-badge">+</div>
            <h3>Kolaborasi</h3>
            <p>Terbiasa bekerja dalam tim lewat pengalaman berorganisasi di kampus.</p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
@endsection
