@extends('layouts.portfolio')

@section('title', 'Tentang')
@section('description', 'Pendidikan, keahlian, dan minat Ngakan Made Kutha Rama Deniswara.')

@section('content')
<section class="page-head">
  <div class="container">
    <h1>Tentang Saya</h1>
    <p>Latar belakang pendidikan, keahlian, dan bidang yang paling menarik bagi saya.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title">Pendidikan</h2>
    <p class="section-sub">Riwayat pendidikan dari yang terbaru hingga yang terdahulu.</p>
    <div class="timeline">

      <div class="timeline-item">
        <div class="card">
          <div class="card-body">
            <span class="jenjang">S1</span>
            <h3>S1 Sistem Informasi</h3>
            <p class="meta">Telkom University Surabaya</p>
            <p>Mempelajari perancangan sistem informasi, pemrograman, dan pengembangan aplikasi yang menjawab kebutuhan pengguna.</p>
          </div>
        </div>
      </div>

      <div class="timeline-item">
        <div class="card">
          <div class="card-body">
            <span class="jenjang">SMA</span>
            <h3>Sekolah Menengah Atas</h3>
            <p class="meta">SMA Negeri 7 Denpasar</p>
            <p>Menempuh pendidikan menengah atas di Denpasar, Bali.</p>
          </div>
        </div>
      </div>

      <div class="timeline-item">
        <div class="card">
          <div class="card-body">
            <span class="jenjang">SMP</span>
            <h3>Sekolah Menengah Pertama</h3>
            <p class="meta">SMP Negeri 9 Denpasar</p>
            <p>Menempuh pendidikan menengah pertama di Denpasar, Bali.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="section alt">
  <div class="container">
    <h2 class="section-title">Keahlian</h2>
    <p class="section-sub">Perpaduan kemampuan teknis dan kerja sama tim.</p>
    <div class="row g-4">
      <div class="col-md-6">
        <article class="card h-100">
          <div class="card-body">
            <div class="icon-badge">01</div>
            <h3>Kerja sama tim</h3>
            <p>Dapat bekerja sama dengan baik karena pernah mengikuti beberapa organisasi di kampus.</p>
          </div>
        </article>
      </div>
      <div class="col-md-6">
        <article class="card h-100">
          <div class="card-body">
            <div class="icon-badge">02</div>
            <h3>Bahasa pemrograman</h3>
            <p>Menguasai beberapa bahasa pemrograman, di antaranya:</p>
            <ul class="tags">
              @foreach (['Python', 'C#', 'PHP', 'HTML', 'CSS', 'JavaScript', 'dan lainnya'] as $bahasa)
                <li>{{ $bahasa }}</li>
              @endforeach
            </ul>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title">Minat</h2>
    <div class="card">
      <div class="card-body">
        <h3>Teknologi, khususnya coding</h3>
        <p>Saya tertarik pada dunia teknologi, terutama pengembangan perangkat lunak. Hobi saya adalah ngoding dan riding.</p>
      </div>
    </div>
  </div>
</section>
@endsection
