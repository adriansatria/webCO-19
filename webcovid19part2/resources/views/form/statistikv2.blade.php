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
      <small>&nbsp; <b><i>Jawa barat</i></b></small></h5>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ml-4">
        <a class="nav-link" href="{{ url('/dashboard2') }}">
        <img src="{{ asset('/img/icons8_home_64px.png') }}" height="25px">
        </a>
      </li>
      <li class="nav-item ml-4">
        <a class="nav-link" href="{{ url('/profile') }}">
        <img src="{{ asset('img/icons8_user_settings_32px.png') }}" height="25px">
        </a>
      </li>
    </ul>
    <!-- Right Side Of Navbar -->
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
<!-- NOTIFICATION -->
  @if(session('error'))
  <div class="alert alert-error" style="margin-top: 1cm;">
    {{ session('error') }}
  </div>
  @endif

  @if(count($errors) > 0 )
  <div class="alert alert-danger"  style="margin-top: 1cm;">
    <strong>Perhatian</strong>
    <br/>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

    <!-- FORM -->
    <div class="p-3 rounded-lg shadow-lg form-group" style="background: white;">

    <form action="{{ url('provinsi2', @$infostatistik->id) }}" method="post">
      @csrf

      @if(!empty($infostatistik))
      @method('PATCH')
      @endif

      <h4>DATA PROVINSI</h4>
      <small>Berikut ini adalah form untuk data pasien berstatus ODP/PDP. Isi data dengan benar dan real.</small>
      <div class="content mt-2">
        <div>
          <small>Provinsi</small>
          <input type="text" name="Provinsi" class="form-control" value="{{ old('Provinsi', @$infostatistik->Provinsi) }}">
        </div>
        <div>
          <small>Total ODP</small>
          <input type="text" name="Odp" class="form-control" value="{{ old('Odp', @$infostatistik->Odp) }}">
          <div>
            <small>Total PDP</small>
            <input type="text" name="Pdp" class="form-control" value="{{ old('Pdp', @$infostatistik->Pdp) }}">
          </div>
          <div class="row">
            <div class="col-sm-6">
              <small>Proses ODP</small>
              <input type="text" class="form-control" name="ProsesOdp" value="{{ old('ProsesOdp', @$infostatistik->ProsesOdp) }}">
            </div>
            <div class="col-sm-6">
              <small>Selesai ODP</small>
              <input type="text" class="form-control" name="SelesaiOdp" value="{{ old('SelesaiOdp', @$infostatistik->SelesaiOdp) }}">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <small>Proses PDP</small>
              <input type="text" class="form-control" name="ProsesPdp" value="{{ old('ProsesPdp', @$infostatistik->ProsesPdp) }}">
            </div>
            <div class="col-sm-6">
              <small>Selesai PDP</small>
              <input type="text" class="form-control" name="SelesaiPdp" value="{{ old('SelesaiPdp', @$infostatistik->SelesaiPdp) }}">
            </div>
          </div>
          <div>
            <a href="{{ url('/provinsi2') }}" class="btn btn-outline-danger mt-3" style="margin-left: 20cm;"><img src="{{ asset('/img/icons8_back_to_64px_1.png') }}" height="25px"> Kembali</a>
            <!-- <input type="submit" class="btn btn-outline-primary mt-3 ml-5" value="Save"> -->
            <button type="submit" class="btn btn-outline-primary mt-3 ml-5"><img src="{{ asset('/img/icons8_save_close_64px.png') }}" height="25px"> Save</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
</body>
</html>
