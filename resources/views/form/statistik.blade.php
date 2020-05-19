<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
    <!-- Bootstrap CSS JS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/bootstrap.min.js') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-lg fixed-top" style="background-color: #f2f2f2">
    <img src="{{ asset('/img/logocovid.png')}}" height="60" width="60">
    <h5>&nbsp; Website Informasi Covid-19</h5>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/logout') }}"><h5>Logout</h5></a>
        </li>
    </ul>
</nav>

<div class="jumbotron bg-light"><br><br>
<!--Form-->
<center>
<div class="p-3 rounded-lg shadow-lg form-group">
<h3>Data Statistik</h3>
    <table>
        <tr>
            <td>Terkonfirmasi &nbsp;</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Sembuh &nbsp;</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Meninggal &nbsp;</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Provinsi &nbsp;</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Zona Provinsi &nbsp;</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" class="btn btn-success"></td>
        </tr>
    </table>
</div>
</center>
</body>
</html>