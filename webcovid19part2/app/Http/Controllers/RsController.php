<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RsController extends Controller
{
    // PAGE RUMAH SAKIT PUBLIC
    public function indexrs(){
      $data['rumahsakit'] = \App\rumahsakit::orderBy('nama_rs')->get();
      return view('kontak', $data);
    }

    public function virus(){

      return view('pages.introvirus');
    }

    public function virusv2(){

      return view('pages.introvirusv2');
    }

    // PAGE RUMAH SAKIT LOGIN
    public function indexrsv2(){
      $data['rumahsakit'] = \App\rumahsakit::orderBy('nama_rs')->get();
      return view('kontakv2', $data);
    }

    // SEARCH RUMAH SAKIT PUBLIC
    public function carirs(Request $request){
      // menangkap data pencarian
      $cari = $request->cari;

      // mengambil data dari table sesuai pencarian data
      $rumahsakit = \App\rumahsakit::where('nama_rs','like',"%".$cari."%")
      ->paginate();

          // mengirim data ke view index
      return view('kontak',['rumahsakit' => $rumahsakit]);
    }

    // SEARCH RUMAH SAKIT LOGIN
    public function carirs2(Request $request){
      // menangkap data pencarian
      $cari = $request->cari;

      // mengambil data dari table sesuai pencarian data
      $rumahsakit = \App\rumahsakit::where('nama_rs','like',"%".$cari."%")
      ->paginate();

          // mengirim data ke view index
      return view('kontakv2',['rumahsakit' => $rumahsakit]);
    }

    // PAGE UNTUK TAMBAH
    public function pagetambah(){
      return view('form.formRS');
    }

    // PAGE UNTUK EDIT
    public function editrs(Request $request, $id){
      $data['rumahsakit'] = \DB::table('rumahsakit')->find($id);
      return view('form.formRS', $data);
    }

    // FUNCTION TAMBAH DATA
    public function storers(Request $request){
      $message = [
        'required' => 'Form :attribute harus diisi, bila tidak ada cukup isi dengan "-"',
      ];

      $rule = [
        'nama_rs' => 'required|unique:rumahsakit',
        'alamat' => 'required',
        'call_center' => 'required',
        'call_center2' => 'required',
        'call_center3' => 'required',
        'website' => 'required',
      ];
      $this->validate($request, $rule, $message);

      $input = $request->all();

      $rumahsakit = new \App\rumahsakit;
      $rumahsakit->nama_rs = $input['nama_rs'];
      $rumahsakit->alamat = $input['alamat'];
      $rumahsakit->call_center = $input['call_center'];
      $rumahsakit->call_center2 = $input['call_center2'];
      $rumahsakit->call_center3 = $input['call_center3'];
      $rumahsakit->website = $input['website'];
      $status = $rumahsakit->save();

      if($status){
        return redirect('/kontakv2')->with('success', 'Data berhasil di tambah');
      }else{
        return redirect('/kontakv2/formRS')->with('error', 'Data gagal di tambah');
      }
    }

    // FUNCTION EDIT DATA
    public function updaters(Request $request, $id){
      $message = [
        'required' => 'Form :attribute harus diisi, bila tidak ada cukup isi dengan "-"'
      ];

      $rule = [
        'nama_rs' => 'required',
        'alamat' => 'required',
        'call_center' => 'required',
        'call_center2' => 'required',
        'call_center3' => 'required',
        'website' => 'required',
      ];
      $this->validate($request, $rule, $message);

      $input = $request->all();

      $rumahsakit = \App\rumahsakit::find($id);
      $rumahsakit->nama_rs = $input['nama_rs'];
      $rumahsakit->alamat = $input['alamat'];
      $rumahsakit->call_center = $input['call_center'];
      $rumahsakit->call_center2 = $input['call_center2'];
      $rumahsakit->call_center3 = $input['call_center3'];
      $rumahsakit->website = $input['website'];
      $status = $rumahsakit->update();

      if($status){
        return redirect('/kontakv2')->with('success', 'Data berhasil di ubah');
      }else{
        return redirect('/kontakv2/formRS')->with('error', 'Data gagal di ubah');
      }
    }
}
