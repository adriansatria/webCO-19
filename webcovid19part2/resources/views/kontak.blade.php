<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COVID --CO19</title>

    <!-- Bootstrap CSS JS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/bootstrap.min.js') }}" rel="stylesheet">
</head>
<body class="bg-light">
@extends('layouts.app')
@section('content')
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light shadow-lg fixed-top" style="background-color: #ffffff">
    <img src="{{ asset('/img/logocovid.png')}}" height="60" width="60">
    <h5>&nbsp; Website Informasi Covid-19<br>
      <small>&nbsp; <b><i>Jawa barat</i></b></small>
    </h5>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ml-5">
        <a class="nav-link" href="{{ url('/provinsi') }}">
        <img src="{{ asset('/img/icons8_about_50px.png') }}" height="25px">
        </a>
      </li>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ml-5">
          <a class="nav-link" href="{{ url('/dashboard') }}">
          <img src="{{ asset('/img/icons8_home_64px.png') }}" height="25px">
          </a>
        </li>
      </ul>
    </ul>
        <form class="form-inline" action="{{ url('/kontak/cari') }}" method="get">
          <input class="form-control mr-sm-2 ml-5" type="search" name="cari" placeholder="Search" value="{{ old('cari') }}" aria-label="Search">
          <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"> <img src="{{ asset('/img/icons8_search_64px.png') }}" height="20"> Search</button>
        </form>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}"><h5>Login</h5></a>
            </li>
        </ul>
      </nav>

      <div class="p-4 rounded-lg shadow-sm bg-primary ml-5 mr-5" style="margin-top: 1cm; border: 1px solid Royalblue;">
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label style="font-weight: bold; font-size: 20px; color: white;">Perlu kamu ketahui?</label>
              <p style="color: white;">Ada berbagai macam virus mematikan selain Virus COVID-19 ini. Dan juga pernah menjadi pandemi di seluruh dunia seperti saat ini, Apa saja itu?</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <a href="{{ url('/kontak/introvirus') }}" class="btn btn-outline-warning btn-block mt-4 ml-4" style="font-weight: bold;">Lihat</a>
            </div>
          </div>
        </div>
      </div>

      <div class="p-5 rounded-lg ml-5 mr-5" style="margin-top: 1cm; border:1px solid whitesmoke; background: white;">
        <form action="{{ url('/kontak') }}">
          <button type="submit" class="btn btn-outline-primary mb-3"> <img src="{{ asset('/img/icons8_sync_64px.png') }}" height="25"> Refresh</button>
        </form>
        <h5>DAFTAR RUMAH SAKIT RUJUKAN PROV. JAWA BARAT</h5>
        <small>Berikut ini adalah rumah sakit yang menjadi rujukan untuk pasien dengan status Pasien dalam Pengawasan. Anda harus mengunjungi fasilitas kesehatan terdekat
        terlebih dahulu seperti klinik / rumah sakit umum sebelum akhirnya dapat dirujuk ke rumah sakit yang berada di bawah ini :</small>
        @foreach($rumahsakit as $rowsakit)
        <div class="content">
          <div class="row">
            <div class="col-md-5 shadow-sm mr-5 ml-5 mt-4" style="background: white; border-left: 4px solid Royalblue; border-radius : 5px;">
              <h5>{{ $rowsakit->nama_rs }}</h5>
              <small>{{ $rowsakit->alamat }}</small>
              <div class="row">
                  <div class="bg-light rounded-lg p-2 mb-2 ml-3 mt-2"><small>{{ $rowsakit->call_center }}</small></div>
                  <div class="bg-light rounded-lg p-2 mb-2 ml-3 mt-2"><small>{{ $rowsakit->call_center2 }}</small></div>
                  <div class="bg-light rounded-lg p-2 mb-2 ml-3 mt-2"><small>{{ $rowsakit->call_center3 }}</small></div>
              </div>
            </div>
            <div class="col-md-5 shadow-sm ml-5 mt-4" style="background: white; border-left: 4px solid Royalblue; border-radius : 5px;">
              <div class="bg-light rounded-lg p-2 mb-2 mt-2"><small>{{ $rowsakit->website }}</small></div>
                <a href="{{ $rowsakit->website }}" class="btn btn-outline-primary btn-block">Kunjungi</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <p style="text-align: right;" class="mr-5 mt-3">© <script>
        document.write(new Date().getFullYear())
      </script>, made with by Students SMKN 4 BANDUNG</p>
      @endsection
</body>
</html>
