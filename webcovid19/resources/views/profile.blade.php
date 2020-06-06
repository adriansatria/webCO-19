<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile akun --CO19</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
          <li class="nav-item ml-4">
            <a class="nav-link" href="{{ url('/dashboard2') }}">
            <img src="{{ asset('/img/icons8_home_64px.png') }}" height="25px">
            </a>
          </li>
        </ul>
            <!-- <form class="form-inline" action="{{ url('/dashboard2/cari') }}" method="get">
              <input class="form-control mr-sm-2 ml-5" type="search" name="cari" placeholder="Search" value="{{ old('cari') }}" aria-label="Search">
              <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"> <img src="{{ asset('/img/icons8_search_64px.png') }}" height="20"> Search</button>
            </form> -->
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
<div class="p-4" style="margin-top : 1cm;">
  <div class="card card-user shadow-lg">
    <div class="card-header bg-dark">
      <h5 class="card-title text-light">Profile Anggota</h5>
    </div>
    <div class="card-body" style=" background: white;">
      <form>
        <div class="row">
          <div class="col-md-3 pr-1">
            <div class="form-group">
              <label>NIP</label>
              <input type="text" class="form-control" value="{{ Auth::user()->nip }}" disabled>
            </div>
          </div>
          <div class="col-md-9 pl-1">
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}" disabled>
        </div>
        <div class="row">
          <div class="col-md-10 pr-1">
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" value="{{ Auth::user()->alamat }}" disabled>
            </div>
          </div>
          <div class="col-md-2 pl-1">
            <div class="form-group">
              <label>Kode pos</label>
              <input type="text" name="pos" class="form-control" value="{{ Auth::user()->kodepos }}" disabled>
            </div>
          </div>
        </div>
        @endsection
  </body>
</html>
