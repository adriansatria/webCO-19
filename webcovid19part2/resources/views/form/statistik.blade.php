<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>-- Manage Data -CO19</title>
    <!-- Bootstrap CSS JS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/bootstrap.min.js') }}" rel="stylesheet">
</head>
<body class="bg-light">
  @extends('layouts.app')
  @section('content')
  <nav class="navbar navbar-expand-lg navbar-light shadow-lg fixed-top" style="background-color: #ffffff">
      <img src="{{ asset('/img/logocovid.png')}}" height="60" width="60">
      <h5>&nbsp; Website Informasi Covid-19<br>
        <small>&nbsp; <b><i>Jawa barat</i></b></small></h5>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ml-5">
          <a class="nav-link" href="{{ url('/provinsi2') }}">
          <img src="{{ asset('/img/icons8_about_50px.png') }}" height="25px">
          </a>
        </li>
        <li class="nav-item ml-4">
          <a class="nav-link" href="#">
          <img src="{{ asset('img/icons8_user_settings_32px.png') }}" height="25px">
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
  </nav>

<div class="p-4">
  @if(session('error'))
  <div class="alert alert-error" style="margin-top: 1cm;">
    {{ session('error') }}
  </div>
  @endif

  @if(count($errors) > 0 )
  <div class="alert alert-danger" style="margin-top: 1cm;">
    <strong>Perhatian</strong>
    <br/>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <!--Form-->
<div class="p-3 rounded-lg shadow-lg form-group" style="background: white;">
  <form action="{{ url('dashboard2', @$infocovid->id) }}" method="post">
    @csrf

    @if(!empty($infocovid))
        @method('PATCH')
    @endif

<h3>DATA STATISTIK</h3>
<small>Data - data pasien Terkonfirmasi, sembuh, dan meninggal pada setiap provinsi.</small>
  <div class="content mt-4">
    <div>
      <small>Tanggal</small>
      <input type="date" name="Tanggal" class="form-control" value="{{ old('Tanggal', @$infocovid->Tanggal) }}">
    </div>
    <div class="row">
      <div class="col-sm-4">
      <small>Terkonfirmasi</small>
      <input type="text" name="Pasien_positif" class="form-control text-primary" value="{{ old('Pasien_positif', @$infocovid->Pasien_positif) }}">
    </div>
    <div class="col-sm-4">
    <small>Sembuh</small>
    <input type="text" name="Pasien_sembuh" class="form-control text-success" value="{{ old('Pasien_sembuh', @$infocovid->Pasien_sembuh) }}">
  </div>
  <div class="col-sm-4">
  <small>Meninggal</small>
  <input type="text" name="Pasien_meninggal" class="form-control text-danger" value="{{ old('Pasien_meninggal', @$infocovid->Pasien_meninggal) }}">
</div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <small>Provinsi</small>
        <input type="text" name="Provinsi" class="form-control" value="{{ old('Provinsi', @$infocovid->Provinsi) }}">
      </div>
      <div class="col-sm-6">
        <small>Zona Provinsi</small>
        <select class="form-control" name="Zona_daerah">
          <option value="" {{ old('Zona_daerah',  @$infocovid->Zona_daerah) == '' ? 'selected' : '' }}>[ P I L I H - Z O N A ]</option>
          <option value="Hitam" {{ old('Zona_daerah',  @$infocovid->Zona_daerah) == 'Hitam' ? 'selected' : '' }}>HITAM</option>
          <option value="Merah" {{ old('Zona_daerah',  @$infocovid->Zona_daerah) == 'Merah' ? 'selected' : '' }}>MERAH</option>
          <option value="Biru" {{ old('Zona_daerah',  @$infocovid->Zona_daerah) == 'Biru' ? 'selected' : '' }}>BIRU</option>
          <option value="Kuning" {{ old('Zona_daerah',  @$infocovid->Zona_daerah) == 'Kuning' ? 'selected' : '' }}>KUNING</option>
          <option value="Hijau" {{ old('Zona_daerah',  @$infocovid->Zona_daerah) == 'Hijau' ? 'selected' : '' }}>HIJAU</option>
        </select>
      </div>
    </div>
    <div>
      <a href="{{ url('/dashboard2') }}" class="btn btn-outline-danger mt-3" style="margin-left: 20cm;"><img src="{{ asset('/img/icons8_back_to_64px_1.png') }}" height="25px"> Kembali</a>
    <button type="submit" class="btn btn-outline-primary mt-3 ml-5"><img src="{{ asset('/img/icons8_save_close_64px.png') }}" height="25px"> Save</button>
    </div>
  </div>
  </form>
</div>
@endsection
</body>
</html>
