<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebCOVID-19</title>

    <!-- Bootstrap CSS JS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/bootstrap.min.js') }}" rel="stylesheet">
</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light shadow-lg fixed-top" style="background-color: #f2f2f2">
    <img src="{{ asset('/img/logocovid.png')}}" height="60" width="60">
    <h5>&nbsp; Website Informasi Covid-19</h5>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}"><h5>Login</h5></a>
        </li>
    </ul>
</nav>

<!--Konten-->
<div class="jumbotron bg-light">
<!--Statistik-->
<br><br>
<div class="p-3 rounded-lg shadow-lg">
<h1><center>Statistik</center></h1>
<br>
<table class="table table-striped">
<tr>
    <th>Terkonfirmasi</th>
    <th>Sembuh</th>
    <th>Meninggal</th>
    <th>Provinsi</th>
    <th>Zona Provinsi</th>
</tr>
<tr>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>Jawa Barat</td>
    <td>Merah</td>
</tr>
</table><br>
<center><h3>Jawa Barat</h3></center><br>
<table class="table table-striped">
<tr>
    <th>Status</th>
    <th>Proses</th>
    <th>Selesai</th>
</tr>
<tr>
    <td><h6>ODP (Orang Dalam Pemantauan)</h6></td>
    <td>Data Proses Disini</td>
    <td>Data Selesai Disini</td>
</tr>
<tr>
    <td><h6>PDP (Pasien Dalam Pengawasan)</h6></td>
    <td>Data Proses Disini</td>
    <td>Data Selesai Disini</td>
</tr>
</table>
</div>
<br><br>

<!--1. Info Covid-->
<div class="p-3 rounded-lg shadow-lg"><table>
    <tr><td rowspan="8"><img src="{{ asset('/img/virus.png')}}" height="400" width="370" class="p-3"></td></tr>
    <tr><td><h4>Apa Itu COVID-19?</h4></td></tr>
    <tr><td><p>COVID-19 adalah penyakit yang disebabkan oleh Novel Coronavirus (2019-nCoV), jenis baru coronavirus yang pada manusia menyebabkan penyakit mulai flu biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan Sindrom Pernapasan Akut Berat/ Severe Acute Respiratory Syndrome (SARS).</p></td></tr>
    <tr><td><p>Pada 11 Februari 2020, World Health Organization (WHO) mengumumkan nama penyakit yang disebabkan 2019-nCov, yaitu Coronavirus Disease (COVID-19).</td></tr></p>
    <tr><td><h4>Gejala</h4></td></tr>
    <tr><td><p>Gejala umum berupa demam ≥38°C, batuk kering, dan sesak napas. Jika ada orang yang dalam 14 hari sebelum muncul gejala tersebut pernah melakukan perjalanan ke negara terjangkit, atau pernah merawat/kontak erat dengan penderita COVID-19, maka terhadap orang tersebut akan dilakukan pemeriksaan laboratorium lebih lanjut untuk memastikan diagnosisnya.</td></tr></p>
    <tr><td><h4>Penularan</h4></td></tr>
    <tr><td><p>Seseorang dapat terinfeksi dari penderita COVID-19. Penyakit ini dapat menyebar melalui tetesan kecil (droplet) dari hidung atau mulut pada saat batuk atau bersin. Droplet tersebut kemudian jatuh pada benda di sekitarnya. Kemudian jika ada orang lain menyentuh benda yang sudah terkontaminasi dengan droplet tersebut, lalu orang itu menyentuh mata, hidung atau mulut (segitiga wajah), maka orang itu dapat terinfeksi COVID-19. Seseorang juga bisa terinfeksi COVID-19 ketika tanpa sengaja menghirup droplet dari penderita. Inilah sebabnya mengapa kita penting untuk menjaga jarak hingga kurang lebih satu meter dari orang yang sakit.</td></tr></p>
    </table></div><br><br>

<!--2. Pencegahan-->
<div class="p-3 rounded-lg shadow-lg">
<table>
    <tr><td rowspan="8"><img src="{{ asset('/img/lindungi-diri.png')}}" height="400" width="370"></td></tr>
    <tr><td><h4>Melindungi diri dari COVID-19</h4></tr></td>
    <tr><td><p>Sampai saat ini COVID-19 belum memiliki vaksin, sehingga cara terbaik untuk tidak terinfeksi adalah dengan menghindari terekspos virus.</p></tr></td>
    <tr><td><h5>COVID-19 dapat menyebar dari orang ke orang melalui tetesan kecil (droplet) saat batuk atau bersin. Maka yang bisa Anda lakukan adalah:</h5></tr></td>
    <tr><td><ul>
        <li>Sering cuci tangan dengan sabun atau hand-sanitizer</li>
        <li>Hindari menyentuh wajah, terutama hidung, mulut, dan mata</li>
        <li>Bersihkan permukaan benda yang disentuh banyak orang</li>
        <li>Social Distancing! Minimalisir kontak fisik dengan sesama</li>
        <li>Jaga jarak 1-3 meter dengan orang yang sakit</li>
        <li>Jika sakit, maka tinggal dirumah dan gunakan masker</li>
    </ul></td></tr>
</table>
</div>
<br><br>
<div class="p-3 rounded-lg shadow-lg">
    <center>
    <br><h4>Berikut ini adalah video cara mencegah penyebaran COVID-19</h4><br>
        <video width="720" height="410" controls>  
            <source src="{{URL::asset('/video/info.mp4')}}" type="video/mp4">  
            Your browser does not support the video tag.
        </video>
    </center>
</div>
<br><br>

<!--Footer-->
<div class="p-3 rounded-lg shadow-lg">
    <center>
    <br><h4>Website ini dibuat oleh</h4><br>
    <table class="table p-5">
    <tr>
        <td><h5>Adrian Maulana Firdaus &nbsp;</h5></td>
        <td><a href="{{URL::to('https://instagram.com/adrianmlnf/')}}"><img src={{asset('img/ig.png')}} alt="Logo" height="50" width="50"></a></td>
        <td><a href="{{URL::to('https://instagram.com/adrianmlnf/')}}"><img src={{asset('img/fb.png')}} alt="Logo" height="50" width="50"></a></td>
    </tr>
    <tr>
        <td><h5>Adrian Satria Putra &nbsp;</h5></td>
        <td><a href="{{URL::to('https://www.instagram.com/driaansatria/')}}"><img src={{asset('img/ig.png')}} alt="Logo" height="50" width="50"></a></td>
        <td><a href="{{URL::to('https://www.facebook.com/AdrianSaputra.Mph')}}"><img src={{asset('img/fb.png')}} alt="Logo" height="50" width="50"></a></td>
    </tr>
    <tr>
        <td><h5>Gilang Muhamad Arsy &nbsp;</h5></td>
        <td><a href="{{URL::to('https://instagram.com/gilangm.arsy/')}}"><img src={{asset('img/ig.png')}} alt="Logo" height="50" width="50"></a></td>
        <td><a href="{{URL::to('https://www.facebook.com/gilangm.arsy/')}}"><img src={{asset('img/fb.png')}} alt="Logo" height="50" width="50"></a></td>
    </tr>
    </table>
    </center>
</div>
<br><br>
</div>
</body>
</html>

