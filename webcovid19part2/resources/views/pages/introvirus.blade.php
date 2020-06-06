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
    <ul class="navbar-nav">
      <li class="nav-item ml-5">
        <a class="nav-link" href="{{ url('/kontak') }}">
        <img src="{{ asset('/img/icons8_telephone_64px_1.png') }}" height="25px">
        </a>
      </li>
    </ul>
  </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}"><h5>Login</h5></a>
            </li>
        </ul>
      </nav>

      <div class="p-4 ml-2 mr-2">
      <div class="p-4 rounded-lg shadow-lg" style="background: white;">
        <div class="form-group">
          <label>Perlu kamu tahu? Pada beberapa tahun silam, dunia pernah menghadapi berbagai macam pandemi virus. Jadi, untuk kalian yang belum mengetahui mohon dibaca dengan teliti. </label>
          <label>Jadi, bukan virus COVID-19 saja yang pernah melanda dunia, ada lebih dari 12 jenis virus mematikan yang menjadi musuh manusia dikarenakan angka kematian yang disebabkannya tidaklah sedikit. Virus - virus tersebut diantaranya adalah :</label>
        </div>
      </div>
      <div class="p-2 content">
        <div class="row">
          <div class="p-4 rounded-lg shadow-lg col-md-9 mt-4 ml-2" style="background: white;">
            <h5>1. Influenza</h5>
            <small>WHO mengkalkulasi ada sekiar 500 ribu orang meninggal akibat Influenza. Kadang saat strain baru muncul, pandemi terjadi dengan penyebaran penyakit yang lebih cepat dan seringkali tingkat kematian lebih tinggi.</small>
            <small>Bicara Influenza, CDC menyebut flu spanyol adalah pandemi flu paling mematikan dalam sejarah umat manusia. Virus merebak di Tahun 1917-1918 dan membunuh sekitar 50 juta orang atau sepertiga populasi manusia saat itu.</small>
          </div>
          <div class="p-4 rounded-lg shadow-lg mt-4 ml-3" style="background: white; width: 230px;">
            <div class="p-5 rounded-lg" style="background: pink; border: 1px solid maroon;">
              <h6>Korban jiwa</h6>
              <h5>500 <small>ribu jiwa</small> </h5>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="p-4 rounded-lg shadow-lg col-md-9 mt-4 ml-2" style="background: white;">
              <h5>2. HIV</h5>
              <small>Human Immunodeficiency Virus (HIV) layak masuk daftar. HIV tak kalah mematikan dari Influenza. Pandemi HIV terjadi sejak awal 1980-an. Mulai dari situ, WHO melaporkan ada sebanyak 75 juta orang positif HIV dan menelan korban jiwa akibat penyakit Acquired Immunodeficiency Syndrome (AIDS).</small>
              <small>Kini kehadiran  obat antiviral (ARV) memungkinkan ODHA bisa bertahan hidup. Namun, virus ini tetap dihadapi mereka yang hidup di negara miskin dimana muncul 95% kasus baru. Sebagai contoh di wilayah Afrika, hampir 1 / 25 orang dewasa divonis positif HIV.</small>
            </div>
            <div class="p-4 rounded-lg shadow-lg mt-4 ml-3" style="background: white; width: 230px;">
              <div class="p-5 rounded-lg" style="background: pink; border: 1px solid maroon;">
                <h6>Korban jiwa</h6>
                <h5>32 <small>juta jiwa</small> </h5>
              </div>
          </div>
      </div>
      <div class="row">
        <div class="p-4 rounded-lg shadow-lg col-md-9 mt-4 ml-2" style="background: white;">
          <h5>3. Ebola</h5>
          <small>Outbreak ebola pertama kali terjadi di Sudan dan Republik demokratik Kongo pada tahun 1976. WHO mencatat antara tahun 1976 - 2013 ada sebanyak 24 outbreak meliputi lebih dari 2 ribu kasus dan lebih dari separuhnya meninggal. Outbreak terbesar terjadi Afrika barat pada desember 2013 - Januari 2016 dengan lebih dari 28 ribu kasus dan sekitar 11 ribu kematian.</small>
          <small>Menurut Muhlberg, strain virus ditemukan bervariasi pada korban meninggal. Satu strain, Ebola Reston, tidak membuat seseorang sakit. Namun strain Bundibugyo tingkat kefatalannya mencapai 50%, kemudian strain Sudan mencapai 71%.</small>
        </div>
        <div class="p-4 rounded-lg shadow-lg mt-4 ml-3" style="background: white; width: 230px;">
          <div class="p-5 rounded-lg" style="background: pink; border: 1px solid maroon;">
            <h6>Korban jiwa</h6>
            <h5>11 <small>ribu jiwa</small> </h5>
          </div>
      </div>
  </div>
  <div class="row">
    <div class="p-4 rounded-lg shadow-lg col-md-9 mt-4 ml-2" style="background: white;">
      <h5>4. Variola</h5>
      <small>Selama ratusan tahun, manusia melawan cacar. Penyakit ini disebabkan oleh dua jenis virus yaitu variola mayor dan variola minor. Cacar mampu membunuh 1 dari 3 orang yang terinfeksi. Mereka yang mampu bertahan akan hidup dengan bekas luka permanen bahkan kebutaan.</small>
      <small>Tingkat mortalitas jauh lebih tinggi pada orang yang tinggal di luar Eropa. Sejarawan mencatat sekitar 90% penduduk asli Amerika meninggal karena cacar yang dibawa oleh penjelajah Eropa. Pada abad ke-20, cacar membunuh sekitar 300 juta orang.</small>
    </div>
    <div class="p-4 rounded-lg shadow-lg mt-4 ml-3" style="background: white; width: 230px;">
      <div class="p-5 rounded-lg" style="background: pink; border: 1px solid maroon;">
        <h6>Korban jiwa</h6>
        <h5>300 <small>juta jiwa</small> </h5>
      </div>
  </div>
</div>
<div class="row">
  <div class="p-4 rounded-lg shadow-lg col-md-9 mt-4 ml-2" style="background: white;">
    <h5>5. SARS-CoV</h5>
    <small>Penyebab virus Severe Acute Respiratory Syndrome (SARS) pertama kali muncul pada 2002 di Guangdong, China selatan. Virus kemungkinan dibawa kelelawar kemudian hinggap pada mamalia nokturnal yang disebut musang, lalu menginfeksi manusia. Setelah memicu outbreak di China, SARS menyebar ke 26 negara di dunia dan menginfeksi sekitar 8 ribu orang dan membunuh lebih dari 770 orang dalam 2 tahun.</small>
    <small>Virus mengakibatkan demam, rasa sakit pada tubuh dan kadang mengarah ke pneumonia. SARS tercatat memiliki tingkat mortalitas sebesar 9,6%.</small>
  </div>
  <div class="p-4 rounded-lg shadow-lg mt-4 ml-3" style="background: white; width: 230px;">
    <div class="p-5 rounded-lg" style="background: pink; border: 1px solid maroon;">
      <h6>Korban jiwa</h6>
      <h5>>770 <small>ribu jiwa</small> </h5>
    </div>
</div>
</div>
<div class="row">
  <div class="p-4 rounded-lg shadow-lg col-md-9 mt-4 ml-2" style="background: white;">
    <h5>6. Wabah Justinian, Timur Tengah</h5>
    <small>Wabah Justinian bermula pada tahun 541. Wabah ini diperkirakan menewaskan 50 juta orang di Timur Tengah, Asia, dan lembah Mediterania. Lantas apa yang menyebabkan penyakit mematikan ini?</small>
    <small>Ternyata Justinian disebabkan oleh bakteri yang disebabkan oleh tikus yang digigit oleh kutu yang terinfeksi.</small>
  </div>
  <div class="p-4 rounded-lg shadow-lg mt-4 ml-3" style="background: white; width: 230px;">
    <div class="p-5 rounded-lg" style="background: pink; border: 1px solid maroon;">
      <h6>Korban jiwa</h6>
      <h5>50 <small>juta jiwa</small> </h5>
    </div>
</div>
</div>
<div class="row">
  <div class="p-4 rounded-lg shadow-lg col-md-9 mt-4 ml-2" style="background: white;">
    <h5>7. Great Plague of London</h5>
    <small>Great Plague of London atau wabah besar London bermula dari negara Tiongkok pada 1334. Kemudian, wabah ini menyebar di sepanjang rute perdagangan. Dalam waktu 18 bulan, wabah ini kira - kira membunuh 100 ribu nyawa di kota London.</small>
    <small>Selain itu Florence, kehilangan sepertiga dari 90 ribu penduduknya dalam enam bulan pertama. Secara keseluruhan, Great Plague of London menewaskan 25 juta penduduk Eropa.</small>
  </div>
  <div class="p-4 rounded-lg shadow-lg mt-4 ml-3" style="background: white; width: 230px;">
    <div class="p-5 rounded-lg" style="background: pink; border: 1px solid maroon;">
      <h6>Korban jiwa</h6>
      <h5>25 <small>juta jiwa</small> </h5>
    </div>
</div>
</div>
<div class="row">
  <div class="p-4 rounded-lg shadow-lg col-md-9 mt-4 ml-2" style="background: white;">
    <h5>8. The Modern Plague</h5>
    <small>The Modern Plague atau wabah modern dimulai pada tahun 1860-an. Wabah ini menelan korban lebih dari 12 juta orang di Tiongkok, India, dan Hongkong.</small>
    <small>Sekitar tahun 1890-an, ilmu pengetahun menemukan bagaimana infeksi bakteri menular dan vaksin diciptakan.</small>
  </div>
  <div class="p-4 rounded-lg shadow-lg mt-4 ml-3" style="background: white; width: 230px;">
    <div class="p-5 rounded-lg" style="background: pink; border: 1px solid maroon;">
      <h6>Korban jiwa</h6>
      <h5>>12 <small>juta jiwa</small> </h5>
    </div>
</div>
</div>
<div class="row">
  <div class="p-4 rounded-lg shadow-lg col-md-9 mt-4 ml-2" style="background: white;">
    <h5>9. Polio, Kelumpuhan Permanen</h5>
    <small>Polio pernah menjadi salah satu penyakit yang paling ditakuti di AS. Pada awal tahun 1950-an, sebelum vaksin polio tersedia, wabah polio menyebabkan lebih dari 15 ribu kasus kelumpuhan setiap tahun. Puncak kasus polio hampir menginfeksi 60 ribu orang dan lebih dari 3 ribu orang tewas. Akan tetapi setelah vaksin ditemukan, kasus polio pun dapat ditekan dengan drastis.</small>
    <small>Mau tahu berapa jumlah korbannya? Jangan kaget, menurut jurnal di <i>US National Library of Medicine National Institutes of Health</i>, pandemi flu ini diperkirakan menewaskan50 juta orang di seluruh dunia. Kira - kira 5 kali jumlah penduduk kota Jakarta. Sangat banyak bukan?</small>
  </div>
  <div class="p-4 rounded-lg shadow-lg mt-4 ml-3" style="background: white; width: 230px;">
    <div class="p-5 rounded-lg" style="background: pink; border: 1px solid maroon;">
      <h6>Korban jiwa</h6>
      <h5>50 <small>juta jiwa</small> </h5>
    </div>
</div>
</div>
<div class="row">
  <div class="p-4 rounded-lg shadow-lg col-md-9 mt-4 ml-2" style="background: white;">
    <h5>10. Flu H1N1</h5>
    <small>Pandemik flu H1N1 ini terjadi pada tahun 2009. Flu ini juga dikenal sebagai flu babi atau swine flu.</small>
    <small>Menurut CDC, sekitar 151.700 - 575.400 orang di seluruh dunia meninggal akibat infeksi virus ini, selama tahun pertama virus tersebut beredar.</small>
  </div>
  <div class="p-4 rounded-lg shadow-lg mt-4 ml-3" style="background: white; width: 230px;">
    <div class="p-5 rounded-lg" style="background: pink; border: 1px solid maroon;">
      <h6>Korban jiwa</h6>
      <h5>>575 <small>ribu jiwa</small> </h5>
    </div>
</div>
</div>
<div class="row">
  <div class="p-4 rounded-lg shadow-lg col-md-9 mt-4 ml-2" style="background: white;">
    <h5>11. Kolera di Halti</h5>
    <small>Epidemi kolera menewaskan sedikitnya 10 ribu orang di Halti pada tahun 2010. Epidemi ini terjadi setelah gempa bumi yang melumpuhkan negara tersebut.</small>
  </div>
  <div class="p-4 rounded-lg shadow-lg mt-4 ml-3" style="background: white; width: 230px;">
    <div class="p-5 rounded-lg" style="background: pink; border: 1px solid maroon;">
      <h6>Korban jiwa</h6>
      <h5>10 <small>ribu jiwa</small> </h5>
    </div>
</div>
</div>
<div class="row">
  <div class="p-4 rounded-lg shadow-lg col-md-9 mt-4 ml-2" style="background: white;">
    <h5>12. Virus Zika</h5>
    <small>WHO menetapkan Zika sebagai Global Health Emergency pada tahun 2016. Virus ini diperkirakan bisa menginfeksi 3 sampai 4 juta orang dalam waktu 1 tahun. Zika merupakan penyakit yang ditularkan dari nyamuk yang bisa menyebabkan cacat lahir seperti mikrosefali. Hingga saat ini, sekitar 86 negara telah melaporkan bukti infeksi virus Zika yang ditularkan oleh nyamuk. </small>
    <small>Sekitar tahun 1890-an, ilmu pengetahun menemukan bagaimana infeksi bakteri menular dan vaksin diciptakan.</small>
  </div>
  <div class="p-4 rounded-lg shadow-lg mt-4 ml-3" style="background: white; width: 230px;">
    <div class="p-5 rounded-lg" style="background: pink; border: 1px solid maroon;">
      <h6>Korban jiwa</h6>
      <h5>(?) </h5>
    </div>
</div>
</div>
<div class="row">
  <div class="p-4 rounded-lg shadow-lg col-md-9 mt-4 ml-2" style="background: white;">
    <h5>13. Dengue</h5>
    <small>Selain virus corona, Indonesia juga menghadapi penyakit DBD. DBD disebabkan oleh virus dengue yang dibawa oleh nyamuk aedes aegypti dan Aedes albopictus.</small>
    <small>Virus dengue pertama kali muncul pada tahun 1950-an di Filipina dan Thailand kemudian menyebar pada wilayah tropis dan subtropis di seluruh dunia. Sebanyak 40% populasi di dunia tinggal dimana DBD adalah endemik.</small>
    <small>Tiap tahun, dengue menginfeksi 50 - 100 juta orang. Tingkat kematiannya terhitung jauh lebih rendah daripada virus - virus lain yakni 2,5%. Namun jika penanganannya tidak tepat, tingkat kematian bisa mencapai 20%.</small>
  </div>
  <div class="p-4 rounded-lg shadow-lg mt-4 ml-3" style="background: white; width: 230px;">
    <div class="p-5 rounded-lg" style="background: pink; border: 1px solid maroon;">
      <h6>Korban jiwa</h6>
      <h5>(?) </h5>
    </div>
</div>
</div>
    </div>
    <p style="text-align: right;" class="mt-3">© <script>
      document.write(new Date().getFullYear())
    </script>, made with by Students SMKN 4 BANDUNG</p>
    @endsection
    </body>
</html>
