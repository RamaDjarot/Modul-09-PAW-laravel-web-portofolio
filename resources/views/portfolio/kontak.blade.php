@extends('layouts.portfolio')

@section('title', 'Kontak')
@section('description', 'Kontak Ngakan Made Kutha Rama Deniswara: email kampus dan GitHub.')

@section('content')
<section class="page-head">
  <div class="container">
    <h1>Kontak</h1>
    <p>Terbuka untuk diskusi, kolaborasi, dan kesempatan belajar di bidang teknologi.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <ul class="contact-list">
      <li>
        <div class="icon-badge">@</div>
        <div>
          <span class="label">Email kampus</span>
          <a href="mailto:ngakanmaded@student.telkomuniversity.ac.id">ngakanmaded@student.telkomuniversity.ac.id</a>
        </div>
      </li>
      <li>
        <div class="icon-badge">GH</div>
        <div>
          <span class="label">GitHub</span>
          <a href="https://github.com/RamaDjarot" target="_blank" rel="noopener">github.com/RamaDjarot</a>
        </div>
      </li>
      <li>
        <div class="icon-badge">ID</div>
        <div>
          <span class="label">NIM</span>
          <span class="value">108052500016</span>
        </div>
      </li>
    </ul>
  </div>
</section>
@endsection
