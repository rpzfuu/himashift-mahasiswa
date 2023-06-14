<nav class="navbar navbar-expand-lg navbar-light warna-primary">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{ url('../') }}">
        <img src="{{ asset('images/beranda/logo.png') }}" alt="Logo" width="50" height="50" class="rounded-circle crop-gambar">
        HIMASHIFT
      </a>
      {{-- TOMBOL --}}
      <ul class="navbar-nav">
        <!-- Tambahkan item menu di sini -->
        <li class="nav-item">
          <a class="btn btn-lg text-white" href="{{ url('../') }}">Beranda</a>
          <a class="btn btn-lg text-white" href="{{ url('/anggota') }}">Anggota</a>
          <a class="btn btn-lg btn-bg-putih" href="{{ url('/admin') }}">Admin</a>
        </li>
      </ul>
    </div>
  </nav>