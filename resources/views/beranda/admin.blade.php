@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
      <div class="col-md-6">
        <div class="card mt-5 warna-primary p-5 rounded" style="border-radius: 14px !important;">
          <div class="card-body">
            <h2 class="text-center text-white">Login Admin</h2>
          </div>
          <hr class="border-3 text-white">
          <div class="card-body">
            <form action="{{ url('../dashboard') }}">
              <div class="form-group text-white">
                <label for="username"><h2>Username</h2></label>
                <input type="text" class="form-control form-control-lg mb-3" id="username" placeholder="Masukkan username">
              </div>
              <div class="form-group text-white">
                <label for="password"><h2>Password</h2></label>
                <input type="password" class="form-control form-control-lg mb-3" id="password" placeholder="Masukkan password">
              </div>
              <br>
              <br>
              <br>
              <br>
              <div class="text-center">
                <button type="submit" class="btn btn-bg-putih btn-block btn-lg">Masuk</button> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop