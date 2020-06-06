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

    <script src="{{ asset('js/Chart.js') }}"></script>
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
    </ul>
        <form class="form-inline" action="{{ url('/dashboard/cari') }}" method="get">
          <input class="form-control mr-sm-2 ml-5" type="search" name="cari" placeholder="Search" value="{{ old('cari') }}" aria-label="Search">
          <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"> <img src="{{ asset('/img/icons8_search_64px.png') }}" height="20"> Search</button>
        </form>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}"><h5>Login</h5></a>
        </li>
    </ul>
</nav>


<!--Konten-->
<div class="p-4">
  <div class="row">
    <div class="p-4 rounded-lg shadow-lg ml-3" style="background: white;">

      @foreach($infostatistik as $rowgrafik)
      <canvas id="myChart" width="470" height="300"></canvas>
      @endforeach

      <script>
  		var ctx = document.getElementById("myChart").getContext('2d');
  		var myChart = new Chart(ctx, {
  			type: 'doughnut',
  			data: {
  				labels: ["Proses ODP", "Selesai ODP", "Proses PDP", "Selesai PDP"],
  				datasets: [{
  					label: 'STATISTIK PASIEN STATUS ODP / PDP',
  					data: [{{ $rowgrafik->ProsesOdp }}, {{ $rowgrafik->SelesaiOdp }}, {{ $rowgrafik->ProsesPdp }}, {{ $rowgrafik->SelesaiPdp }}],
  					backgroundColor: [
  					'rgba(255, 99, 132, 0.4)',
  					'rgba(54, 162, 235, 0.4)',
  					'rgba(25, 15, 112, 0.4)',
            'rgba(255, 206, 86, 0.4)'
  					],
  					borderColor: [
  					'rgba(255,99,132,1)',
  					'rgba(54, 162, 235, 1)',
  					'rgba(0, 0, 139, 1)',
            'rgba(255, 206, 86, 1)'
  					],
  					borderWidth: 1
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
<div class="p-4 rounded-lg shadow-lg ml-3" style="width:503px; background: white;">
  @foreach($infostatistik as $rowtotal)
  <div class="content">
    <div class="form-group bg-dark">
      <h4 class="text-center text-light">{{ $rowtotal->Provinsi }}</h4>
    </div>
    <div class="row">
      <div class="col-md-5 ml-3 mr-2 bg-dark rounded-lg shadow-sm" style="color: white;">
        <label>TOTAL ODP</label>
        <h4>{{ $rowtotal->Odp }}</h4>
      </div>
      <div class="col-md-5 ml-5 rounded-lg bg-dark shadow-sm" style="color: white;">
        <label>TOTAL PDP</label>
        <h4>{{ $rowtotal->Pdp }}</h4>
      </div>
    </div>
    <div class="form-group mt-3">
      <h6>Catatan :</h6>
      <small> <b> Proses odp</b> adalah seseorang yang berstatus ODP (Orang Dalam Pemantauan) yang sedang menjalani proses pemantauan.</small><br>
      <small> <b> Selesai odp</b> adalah seseorang yang berstatus ODP (Orang Dalam Pemantauan) yang sudah terbebas dari proses pemantauan dan dinyatakan normal / negatif.</small><br>
      <small> <b> Proses pdp</b> adalah seseorang yang berstatus PDP (Pasien Dalam Pengawasan) yang sedang menjalani proses pengawasan karantina.</small><br>
      <small> <b> Selesai odp</b> adalah seseorang yang berstatus PDP (Pasien Dalam Pengawasan) yang sudah menjalani proses karantina dan dinyatakan sehat.</small>
    </div>
  </div>
  @endforeach
</div>
  </div>


<!--Statistik-->
<div class="p-3 rounded-lg shadow-lg mt-4" style="background: white;">
  <div class="bg-dark">
<h1 style="color : white;"><center>STATISTIK</center></h1>
</div>
<form action="{{ url('/dashboard') }}">
  <br>
  <button type="submit" class="btn btn-secondary"> <img src="{{ asset('/img/icons8_sync_64px.png') }}" height="25"> </button>
</form>
<br>
<table class="table table-striped">
<tr>
    <th>No.</th>
    <th>Tanggal</th>
    <th>Terkonfirmasi</th>
    <th>Sembuh</th>
    <th>Meninggal</th>
    <th>Provinsi</th>
    <th>Zona Provinsi</th>
</tr>
@foreach ($infocovid as $row)
<tr>
  <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
  <td>{{ $row->Tanggal }}</td>
  <td style="color : orange; font-weight: bold;">{{ $row->Pasien_positif }}</td>
  <td style="color : green; font-weight: bold;">{{ $row->Pasien_sembuh }}</td>
  <td style="color : maroon; font-weight: bold;">{{ $row->Pasien_meninggal }}</td>
  <td>{{ $row->Provinsi }}</td>
  <td>{{ $row->Zona_daerah }}</td>
</tr>
@endforeach
</table><br>
@foreach($infostatistik as $row2)
<div class="bg-dark">
<center><h3 style="color: white; padding-top: 5px;">{{ $row2->Provinsi }}</h3></center><br>
</div>
<table class="table table-striped">
<tr>
    <th>Status</th>
    <th>Proses</th>
    <th>Selesai</th>
</tr>
<tr>
  <td><h6>ODP (Orang Dalam Pemantauan)</h6></td>
  <td style=" font-weight: bold;">
    <div class="p-1 bg-warning rounded-lg text-center text-light" style="border: 1px solid goldenrod;">
    {{ $row2->ProsesOdp }}
  </div>
</td>
  <td style="font-weight: bold;">
    <div class="p-1 bg-secondary rounded-lg text-center text-light" style="border: 1px solid lightslategray;">
    {{ $row2->SelesaiOdp }}
  </div>
  </td>
</td>
</tr>
<tr>
  <td><h6>PDP (Pasien Dalam Pengawasan)</h6></td>
  <td style="color : deepskyblue; font-weight: bold;">
    <div class="p-1 bg-warning rounded-lg text-center text-light" style="border: 1px solid goldenrod;">
      {{ $row2->ProsesPdp }}
    </div>
  </td>
  <td style="color : dodgerblue; font-weight: bold;">
    <div class="p-1 bg-secondary rounded-lg text-center text-light" style="border: 1px solid lightslategray;">
    {{ $row2->SelesaiPdp }}
  </div>
  </td>
  </td>
</tr>
@endforeach
</table>
</div>
<br><br>

<!--1. Info Covid-->
<div class="p-3 rounded-lg shadow-lg" style="background: white;"><table>
    <tr><td rowspan="8"><img src="{{ asset('/img/virus.png')}}" height="400" width="370" class="p-3"></td></tr>
    <tr><td><h4 style="font-weight: bold;">Apa Itu COVID-19?</h4></td></tr>
    <tr><td><p>COVID-19 adalah penyakit yang disebabkan oleh Novel Coronavirus (2019-nCoV), jenis baru coronavirus yang pada manusia menyebabkan penyakit mulai flu biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan Sindrom Pernapasan Akut Berat/ Severe Acute Respiratory Syndrome (SARS).</p></td></tr>
    <tr><td><p>Pada 11 Februari 2020, World Health Organization (WHO) mengumumkan nama penyakit yang disebabkan 2019-nCov, yaitu Coronavirus Disease (COVID-19).</td></tr></p>
    <tr><td><h4 style="font-weight: bold;">Gejala</h4></td></tr>
    <tr><td><p>Gejala umum berupa demam ≥38°C, batuk kering, dan sesak napas. Jika ada orang yang dalam 14 hari sebelum muncul gejala tersebut pernah melakukan perjalanan ke negara terjangkit, atau pernah merawat/kontak erat dengan penderita COVID-19, maka terhadap orang tersebut akan dilakukan pemeriksaan laboratorium lebih lanjut untuk memastikan diagnosisnya.</td></tr></p>
    <tr><td><h4 style="font-weight: bold;">Penularan</h4></td></tr>
    <tr><td><p>Seseorang dapat terinfeksi dari penderita COVID-19. Penyakit ini dapat menyebar melalui tetesan kecil (droplet) dari hidung atau mulut pada saat batuk atau bersin. Droplet tersebut kemudian jatuh pada benda di sekitarnya. Kemudian jika ada orang lain menyentuh benda yang sudah terkontaminasi dengan droplet tersebut, lalu orang itu menyentuh mata, hidung atau mulut (segitiga wajah), maka orang itu dapat terinfeksi COVID-19. Seseorang juga bisa terinfeksi COVID-19 ketika tanpa sengaja menghirup droplet dari penderita. Inilah sebabnya mengapa kita penting untuk menjaga jarak hingga kurang lebih satu meter dari orang yang sakit.</td></tr></p>
    </table></div><br><br>

<!--2. Pencegahan-->
<div class="p-3 rounded-lg shadow-lg" style="background: white;">
<table>
    <tr><td rowspan="8"><img src="{{ asset('/img/lindungi-diri.png')}}" height="400" width="370"></td></tr>
    <tr><td><h4 style="font-weight: bold;">Melindungi diri dari COVID-19</h4></tr></td>
    <tr><td><p>Sampai saat ini COVID-19 belum memiliki vaksin, sehingga cara terbaik untuk tidak terinfeksi adalah dengan menghindari terekspos virus.</p></tr></td>
    <tr><td><h5 style="font-weight: bold;">COVID-19 dapat menyebar dari orang ke orang melalui tetesan kecil (droplet) saat batuk atau bersin. Maka yang bisa Anda lakukan adalah:</h5></tr></td>
    <tr><td>
      <div class="form-group ml-5">
        <img src="{{ asset('img/icons8_antivirus_40px.png') }}" height="20"> <label>Sering cuci tangan dengan sabun atau hand-sanitizer</label><br>
          <img src="{{ asset('img/icons8_antivirus_40px.png') }}" height="20"> <label>Hindari menyentuh wajah, terutama hidung, mulut, dan mata</label><br>
            <img src="{{ asset('img/icons8_antivirus_40px.png') }}" height="20"> <label>Bersihkan permukaan benda yang disentuh banyak orang</label><br>
              <img src="{{ asset('img/icons8_antivirus_40px.png') }}" height="20"> <label>Social Distancing! Minimalisir kontak fisik dengan sesama</label><br>
                <img src="{{ asset('img/icons8_antivirus_40px.png') }}" height="20"> <label>Jaga jarak 1-3 meter dengan orang yang sakit</label><br>
                <img src="{{ asset('img/icons8_antivirus_40px.png') }}" height="20"> <label>Jika sakit, maka tinggal dirumah dan gunakan masker</label>
      </div>
  </td></tr>
</table>
</div>
<br><br>
<div class="p-3 rounded-lg shadow-lg" style="background: white;">
    <center>
    <br><h4>Berikut ini adalah video cara mencegah penyebaran COVID-19</h4><br>
        <video width="720" height="410" controls>
            <source src="{{URL::asset('/video/info.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p>Ikuti anjuran pemerintah dan cara - cara pencegahan pada video berikut. <b><i>Karena mencegah lebih baik daripada mengobati.</i></b></p>
    </center>
</div>
<br><br>

<!--Footer-->
<div class="p-3 rounded-lg shadow-lg" style="background: white;">
    <center>
    <br><h4>Website ini dibuat oleh</h4><br>
    <table class="table p-5">
    <tr>
        <td><h5>Adrian Maulana Firdaus &nbsp;</h5></td>
        <td><a href="{{URL::to('https://instagram.com/adrianmlnf/')}}"><img src={{asset('img/ig.png')}} alt="Logo" height="50" width="50"></a>  @adrianmlnf</td>
        <td><a href="{{URL::to('https://instagram.com/adrianmlnf/')}}"><img src={{asset('img/fb.png')}} alt="Logo" height="50" width="50"></a>  Adrian Maulana</td>
    </tr>
    <tr>
        <td><h5>Adrian Satria Putra &nbsp;</h5></td>
        <td><a href="{{URL::to('https://www.instagram.com/driaansatria/')}}"><img src={{asset('img/ig.png')}} alt="Logo" height="50" width="50"></a>  @driaansatria</td>
        <td><a href="{{URL::to('https://www.facebook.com/AdrianSaputra.Mph')}}"><img src={{asset('img/fb.png')}} alt="Logo" height="50" width="50"></a>  Adrian Satria Putra</td>
    </tr>
    <tr>
        <td><h5>Gilang Muhamad Arsy &nbsp;</h5></td>
        <td><a href="{{URL::to('https://instagram.com/gilangm.arsy/')}}"><img src={{asset('img/ig.png')}} alt="Logo" height="50" width="50"></a>  @gilangm.arsy</td>
        <td><a href="{{URL::to('https://www.facebook.com/gilangm.arsy/')}}"><img src={{asset('img/fb.png')}} alt="Logo" height="50" width="50"></a>  Gilang M. Arsy</td>
    </tr>
    </table>
    </center>
</div>
<br><br>
<p style="text-align: right;  ">© <script>
  document.write(new Date().getFullYear())
</script>, made with by Students SMKN 4 BANDUNG</p>
</div>
@endsection
</body>
</html>
