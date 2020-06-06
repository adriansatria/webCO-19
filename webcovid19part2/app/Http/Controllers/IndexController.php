<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
  // PAGE KE HOME PUBLIC
  public function index(){
    $data['infocovid'] = \App\infocovid::orderBy('Tanggal')->get();
    $data2['infostatistik'] = \App\infostatistik::where('Provinsi', 'LIKE', '%Jawa barat%')->get();
    return view('pages.index', $data, $data2);
  }


  public function cari(Request $request){
  // menangkap data pencarian
  $cari = $request->cari;

  // mengambil data dari table sesuai pencarian data
  $infocovid = \App\infocovid::where('Provinsi','like',"%".$cari."%")->orWhere('Zona_daerah','like',"%".$cari."%")
  ->paginate();

  $data2['infostatistik'] = \App\infostatistik::where('Provinsi', 'LIKE', '%Jawa barat%')->get();

      // mengirim data ke view index
  return view('pages.index',['infocovid' => $infocovid], $data2);
  }

  public function profile(){
    $data['users'] = \DB::table('users')->get();
    return view('profile', $data);
  }

}
