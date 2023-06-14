@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 text-white">
        <!-- Konten bagian kiri -->
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <h2>HIMASHIFT</h2>
        <br>
        <h3>HIMASHIFT adalah layanan online untuk Himpunan Mahasiswa Sistem Informasi, memfasilitasi pengecekan jadwal, absensi, dan pelacakan pencapaian kepengurusan.</h3>
      </div>
      <div class="col-md-5 flex-column align-items-center justify-content-center text-white">
        <!-- Konten bagian kanan -->
        <div class="login-form">
          <br><br><br><br><br><br>
          <h2 class="text-center">LOGIN USER</h2>
          <hr class="border-3">
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="nim"><h2>NIM:</h2></label>
              <input type="text" class="form-control form-control-lg mb-3 @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim') }}" placeholder="F1E121099" required autocomplete="nim" autofocus>
              @error('nim')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <br>
            <div class="form-group">
              <label for="password"><h3>Password:</h3></label>
              <input type="password" class="form-control form-control-lg mb-3 @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required autocomplete="current-password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
                </label>
              </div>
            </div>
            <div class="text-end">
              <br>
              <button type="submit" class="btn btn-lg bg-white">Masuk</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection