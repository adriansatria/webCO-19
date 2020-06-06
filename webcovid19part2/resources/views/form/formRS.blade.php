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
        <a class="nav-link" href="{{ url('/provinsi2') }}">
        <img src="{{ asset('/img/icons8_about_50px.png') }}" height="25px">
        </a>
      </li>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ml-5">
          <a class="nav-link" href="{{ url('/dashboard2') }}">
          <img src="{{ asset('/img/icons8_home_64px.png') }}" height="25px">
          </a>
        </li>
      </ul>
      <li class="nav-item ml-5">
        <a class="nav-link" href="{{ url('/profile') }}">
        <img src="{{ asset('img/icons8_user_settings_32px.png') }}" height="25px">
        </a>
      </li>
    </ul>
        <form class="form-inline" action="{{ url('/kontakv2/cari') }}" method="get">
          <input class="form-control mr-sm-2 ml-5" type="search" name="cari" placeholder="Search" value="{{ old('cari') }}" aria-label="Search">
          <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"> <img src="{{ asset('/img/icons8_search_64px.png') }}" height="20"> Search</button>
        </form>
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
<div style="margin-top: 1cm;">
      <!-- NOTIFICATION -->
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

      <div class="p-5 rounded-lg ml-5 mr-5" style="margin-top: 1cm; border:1px solid whitesmoke; background: white;">
        <form action="{{ url('kontakv2', @$rumahsakit->id) }}" method="post">
          @csrf

          @if(!empty($rumahsakit))
          @method('PATCH')
          @endif

        <h5>Manage data rumah sakit rujukan</h5>
        <div class="content">
          <div>
            <small>Nama Rumah Sakit</small>
            <input type="text" name="nama_rs" class="form-control" value="{{ old('nama_rs', @$rumahsakit->nama_rs) }}">
          </div>
          <div>
            <small>Alamat</small>
            <input type="text" name="alamat" class="form-control" value="{{ old('alamat', @$rumahsakit->alamat) }}">
          </div>
          <div class="row">
            <div class="col-md-4">
              <small>HOT LINE - 1</small>
              <input type="text" name="call_center" class="form-control" value="{{ old('call_center', @$rumahsakit->call_center) }}">
            </div>
            <div class="col-md-4">
              <small>HOT LINE - 2</small>
              <input type="text" name="call_center2" class="form-control" value="{{ old('call_center2', @$rumahsakit->call_center2) }}">
            </div>
            <div class="col-md-4">
              <small>HOT LINE - 3</small>
              <input type="text" name="call_center3" class="form-control" value="{{ old('call_center3', @$rumahsakit->call_center3) }}">
            </div>
          </div>
          <div>
            <small>Website URL</small>
            <input type="text" name="website" class="form-control text-primary" value="{{ old('website', @$rumahsakit->website) }}">
          </div>
          <div>
            <a href="{{ url('/kontakv2') }}" class="btn btn-outline-danger mt-3" style="margin-left: 18cm;"><img src="{{ asset('/img/icons8_back_to_64px_1.png') }}" height="25px"> Kembali</a>
            <button type="submit" class="btn btn-outline-primary mt-3"><img src="{{ asset('/img/icons8_save_close_64px.png') }}" height="25px"> Save</button>
          </div>
        </div>
      </form>
      </div>
    </div>
    @endsection
  <body>
<html>
