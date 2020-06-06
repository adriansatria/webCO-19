<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistikController extends Controller
{
    // PAGE
    public function  indexstatik(){
      $data['infostatistik'] = \App\infostatistik::orderBy('Provinsi')->get();
      $data2['infocovid'] = \App\infocovid::where('Provinsi', 'LIKE', '%Jawa barat%')->get();
      return view('provinsi', $data, $data2);
    }

    // PAGE
    public function  indexstatik2(){
      $data['infostatistik'] = \App\infostatistik::orderBy('Provinsi')->get();
      $data2['infocovid'] = \App\infocovid::where('Provinsi', 'LIKE', '%Jawa barat%')->get();
      return view('provinsi2', $data, $data2);
    }

    // PAGE UNTUK KE TAMBAH
    public function tambahdata(){
        return view('form.statistikv2');
    }

    // INSERT DATA FUNCTION
    public function storedata(Request $request){
      $message = [
        'required' => 'Form :attribute harus diisi',
        'numeric' => 'Form :attribute hanya boleh diisin dengan Angka',
      ];

      $rule = [
        'Provinsi' => 'required|unique:infostatistik',
        'Odp' => 'required|numeric',
        'Pdp' => 'required|numeric',
        'ProsesOdp' => 'required|numeric',
        'SelesaiOdp' => 'required|numeric',
        'ProsesPdp' => 'required|numeric',
        'SelesaiPdp' => 'required|numeric'
      ];
      $this->validate($request, $rule, $message);

      $input = $request->all();

      $infostatistik = new \App\infostatistik;
      $infostatistik->Provinsi = $input['Provinsi'];
      $infostatistik->Odp = $input['Odp'];
      $infostatistik->Pdp = $input['Pdp'];
      $infostatistik->ProsesOdp = $input['ProsesOdp'];
      $infostatistik->SelesaiOdp = $input['SelesaiOdp'];
      $infostatistik->ProsesPdp = $input['ProsesPdp'];
      $infostatistik->SelesaiPdp = $input['SelesaiPdp'];
      $status = $infostatistik->save();

      if($status){
        return redirect('/provinsi2')->with('success', 'Data berhasil di tambah');
      }else{
        return redirect('/provinsi2/statistikv2')->with('error', 'Data gagal di tambah');
      }
    }

    // PROVINSI2
    public function Searchdata(Request $request){
    // menangkap data pencarian
    $cari = $request->cari;

    // mengambil data dari table pegawai sesuai pencarian data
    $infostatistik = \App\infostatistik::where('Provinsi','like',"%".$cari."%")
    ->paginate();
    $data2['infocovid'] = \App\infocovid::where('Provinsi', 'LIKE', '%Jawa barat%')->get();

        // mengirim data pegawai ke view index
    return view('provinsi2',['infostatistik' => $infostatistik], $data2);
    }

    // PROVINSI
    public function Searchdata2(Request $request){
    // menangkap data pencarian
    $cari = $request->cari;

    // mengambil data dari table pegawai sesuai pencarian data
    $infostatistik = \App\infostatistik::where('Provinsi','like',"%".$cari."%")
    ->paginate();
    $data2['infocovid'] = \App\infocovid::where('Provinsi', 'LIKE', '%Jawa barat%')->get();

        // mengirim data pegawai ke view index
    return view('provinsi',['infostatistik' => $infostatistik], $data2);
    }

    // PAGE KE EDIT
    public function editpage(Request $request, $id){
      $data['infostatistik'] = \DB::table('infostatistik')->find($id);
      return view('form.statistikv2', $data);
    }

    // UPDATE STATISTIK PROVINSI
    public function updatestatistik(Request $request, $id){
      $message = [
        'required' => 'Form :attribute harus diisi',
        'numeric' => 'Form :attribute hanya boleh diisin dengan Angka'
      ];

      $rule = [
        'Provinsi' => 'required',
        'Odp' => 'required|numeric',
        'Pdp' => 'required|numeric',
        'ProsesOdp' => 'required|numeric',
        'SelesaiOdp' => 'required|numeric',
        'ProsesPdp' => 'required|numeric',
        'SelesaiPdp' => 'required|numeric'
      ];
      $this->validate($request, $rule, $message);

      $input = $request->all();

      $infostatistik = \App\infostatistik::find($id);
      $infostatistik->Provinsi = $input['Provinsi'];
      $infostatistik->Odp = $input['Odp'];
      $infostatistik->Pdp = $input['Pdp'];
      $infostatistik->ProsesOdp = $input['ProsesOdp'];
      $infostatistik->SelesaiOdp = $input['SelesaiOdp'];
      $infostatistik->ProsesPdp = $input['ProsesPdp'];
      $infostatistik->SelesaiPdp = $input['SelesaiPdp'];
      $status = $infostatistik->update();

      if($status){
        return redirect('/provinsi2')->with('success', 'Data berhasil di ubah');
      }else{
        return redirect('/provinsi2/statistikv2')->with('error', 'Data gagal di ubah');
      }
    }
}
