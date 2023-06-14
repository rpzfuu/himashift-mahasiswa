<nav class="navbar navbar-expand-lg navbar-light warna-primary">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{ url('/dashboard') }}">
        <img src="{{ asset('images/beranda/logo.png') }}" alt="Logo" width="50" height="50" class="rounded-circle crop-gambar">
        HIMASHIFT
      </a>
      {{-- TOMBOL --}}
      <ul class="navbar-nav">
        <!-- Tambahkan item menu di sini -->
        <li class="nav-item">
          <a class="navbar-brand text-white" href="{{ url('/dashboard/profil') }}">
              <img src="{{ asset('images/profil/reni.jpg') }}" alt="Logo" width="50" height="50" class="rounded-circle crop-gambar">
            @yield('nama')
          </a>
          <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-lg btn-bg-putih">Keluar</button>
          </form>
        </li>
      </ul>
    </div>
  </nav>