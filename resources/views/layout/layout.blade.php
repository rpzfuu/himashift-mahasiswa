<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
    <link rel="icon" href="{{ asset('images/beranda/logo.png') }}" type="image/png">
    <title>HIMASHIFT</title>
</head>
<body>
    {{-- Script JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
    <div class="bg-gambar">
        @include('layout.navbar')
        <div class="row">
            @yield('content')
        </div>        
    </div>
    
    {{-- Script JS --}}
</body>
</html>
