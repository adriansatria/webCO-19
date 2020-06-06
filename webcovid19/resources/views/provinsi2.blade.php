<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>--Info provinsi -CO19</title>

    <!-- Bootstrap CSS JS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/bootstrap.min.js') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/Chart.js') }}"></script>
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
            <form class="form-inline" action="{{ url('/provinsi2/cari') }}" method="get">
              <input class="form-control mr-sm-2 ml-5" type="search" name="cari" placeholder="Search" value="{{ old('cari') }}" aria-label="Search">
              <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"> <img src="{{ asset('/img/icons8_search_64px.png') }}" height="20"> Search</button>
            </form>
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
      @if(session('success'))
      <div class="alert alert-success" style="margin-top: 1cm;">
        {{ session('success') }}
      </div>
      @endif

      @if(session('error'))
      <div class="alert alert-error" style="margin-top: 1cm;">
        {{ session('error') }}
      </div>
      @endif

      <div class="content">
        <div class="row">
          <div class="p-4 rounded-lg shadow-lg col-md-6 ml-3 mr-2" style="background: white;">
            @foreach($infocovid as $row)
            <canvas id="myChart" width="470" height="300"></canvas>
            @endforeach

            <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'line',
              data: {
                labels: ["Positif", "Sembuh", "Meninggal"],
                datasets: [{
                  label: 'STATISTIK PENYEBARAN VIRUS COVID-19 PROV. JABAR',
                  data: [{{ $row->Pasien_positif }}, {{ $row->Pasien_sembuh }} , {{ $row->Pasien_meninggal }}],
                  backgroundColor: [
                  'rgba(25, 15, 112, 0.7)'
                  ],
                  borderColor: [
                  'rgba(255, 0, 139, 1)'
                  ],
                  borderWidth: 2
                }]
              },
              options: {
                scales: {
                  yAxes: [{
                    ticks: {
                      beginAtZero:true
                    }
                  }]
                }
              }
            });
          </script>

          </div>
          <div class="p-4 rounded-lg shadow-lg ml-2" style="background: white; width: 490px;">
            @foreach($infocovid as $rowinfo)
            <div class="form-group">
              <h3 class="text-center">{{ $rowinfo->Provinsi }}</h3>
              <div class="p-4 rounded-lg shadow-sm" style="background: white;">
                <div class="row">
                  <div class="col-md-5">
                    <p>Terkonfirmasi</p>
                  </div>
                  <div class="col-md-4">
                    <h3 style="color: Gold;">{{ $rowinfo->Pasien_positif }}</h3>
                  </div>
                </div>
              </div>
              <div class="p-4 mt-3 rounded-lg shadow-sm" style="background:white;">
                <div class="row">
                  <div class="col-md-5">
                    <p>Sembuh</p>
                  </div>
                  <div class="col-md-4">
                    <h3 class="text-success">{{ $rowinfo->Pasien_sembuh }}</h3>
                  </div>
                </div>
              </div>
              <div class="p-4 mt-3 rounded-lg shadow-sm" style="background: white;">
                <div class="row">
                  <div class="col-md-5">
                    <p>Meninggal</p>
                  </div>
                  <div class="col-md-4">
                    <h3 class="text-danger">{{ $rowinfo->Pasien_meninggal }}</h3>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    <div class="p-3 rounded-lg shadow-lg mt-4" style="background: white;">
      <table>
        <tr>
          <td rowspan="8">
            <img src="{{ asset('/img/infostatistik.jpg')}}" height="400" width="370">
          </td>
        </tr>
        <tr>
          <td><h5 class="ml-2"> Pasti kalian belum tahu ya, Provinsi yang kalian tinggali saat ini memiliki jumlah ODP / PDP berapa?</h5></td>
        </tr>
        <tr>
          <td><p class="ml-2">Masih ingatkan cara mencegah Covid-19? Untuk kalian yang terpaksa keluar rumah, diharapkan memenuhi protokol kesehatan yang telah dianjurkan pemerintah. Lindungi keluarga dan orang yang kita sayangi dengan menjaga jarak atau membersihkan bagian tubuh yang telah bersentuhan dengan benda luar(umum).</p> </td>
        </tr>
        <tr>
          <td><p class="ml-2">Semoga dengan kita bersama menjaga kesehatan, tetap dirumah dan menghindari kontak langsung dengan orang lain pandemi ini segera usai dan kondisi kembali normal.</p> </td>
        </tr>
        <tr>
          <td> <p class="ml-2">Pantau terus perkembangan Pasien terjangkit, PDP / ODP</p>
            <div class="p-2 rounded-lg shadow-sm bg-light mb-3" style="margin-left : 10px; width: 365px; height: 160px;">
              <p style="font-weight: bold;" class="ml-2">CALL CENTER RUMAH SAKIT DARURAT</p>
              <div class="p-1 rounded-lg bg-primary">
              <img src="{{ asset('/img/icons8_phone_64px.png') }}" class="ml-3 mt-2" height="29px"> <b style="color: White; font-size: 22px;">119</b>
            </div>
            <div class="rounded bg-success mt-3">
              <p class="text-center"><a href="{{ url('/kontakv2') }}" class="btn btn-success btn-block"><b>LIHAT KONTAK</b></a></p>
            </div>
            </div>
           </td>
        </tr>
      </table>
    </div>
    <br>
<div class="p-3 rounded-lg shadow-lg" style="background: white;">
  <h4 style="text-align: center; margin-top: 5px;">STATISTIK PASIEN PENGAWASAN / PEMANTAUAN</h4>

<div class="p-2 rounded-md mt-5">
  <form action="{{ url('/provinsi2') }}">
    <br><a class="btn btn-primary" href="{{ url('/provinsi2/statistikv2') }}"> <img src="{{ asset('/img/icons8_add_property_64px.png') }}" height ="25px"> Tambah data </a>
    <button type="submit" class="btn btn-secondary"> <img src="{{ asset('/img/icons8_sync_64px.png') }}" height="25"> </button>
  </form>
  @foreach($infostatistik as $rowstatik)
  <table class="table table-striped">
    <thead>
      <div class="bg-dark mt-3">
      <h5 class="ml-2" style="color : white;">{{ $rowstatik->Provinsi }}</h5>
    </div>
      <tr>
        <th>Total ODP</th>
        <th>Total PDP</th>
        <th>Proses ODP</th>
        <th>Selesai ODP</th>
        <th>Proses PDP</th>
        <th>Selesai PDP</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $rowstatik->Odp }}</td>
        <td>{{ $rowstatik->Pdp }}</td>
        <td>{{ $rowstatik->ProsesOdp }}</td>
        <td>{{ $rowstatik->SelesaiOdp }}</td>
        <td>{{ $rowstatik->ProsesPdp }}</td>
        <td>{{ $rowstatik->SelesaiPdp }}</td>
        <td> <a href="{{ url('/provinsi2/' . $rowstatik->id . '/editpage') }}"> <button type="button" name="button" class="btn btn-warning"><img src="{{ asset('/img/icons8_edit_64px.png') }}" height = "25px"> </button> </a> </td>
      </tr>
    </tbody>
  </table>
  @endforeach
</div>
</div>
<br><br>
<p style="text-align: right;  ">© <script>
  document.write(new Date().getFullYear())
</script>, made with by Students SMKN 4 BANDUNG</p>
  </div>
  @endsection
  </body>
</html>
