<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $data['infocovid'] = \App\infocovid::orderBy('Tanggal')->get();
      $data2['infostatistik'] = \App\infostatistik::where('Provinsi', 'LIKE', '%Jawa barat%')->get();
        return view('pages.index2', $data, $data2);
    }


      // PAGE UNTUK TAMBAH
      public function tambah(){
          return view('form.statistik');
      }

      // PAGE UNTUK EDIT
      public function edit(Request $request, $id){
        $data['infocovid'] = \DB::table('infocovid')->find($id);
        return view('form.statistik', $data);
      }

      // STORE UNTUK INFO COVID
      public function store(Request $request){
        $message = [
          'required' => 'Form :attribute harus diisi',
          'numeric' => 'Form :attribute hanya boleh diisin dengan Angka',
        ];
        $rule = [
        'Tanggal' => 'required',
        'Pasien_positif' => 'numeric',
        'Pasien_sembuh' => 'numeric',
        'Pasien_meninggal' => 'numeric',
        'Provinsi' => 'required|unique:infocovid',
        'Zona_daerah' => 'required'
        ];
        $this->validate($request, $rule, $message);

        $input = $request->all();

        // $status = \App\infocovid::create($input);
        $infocovid = new \App\infocovid;
        $infocovid->Tanggal = $input['Tanggal'];
        $infocovid->Pasien_positif = $input['Pasien_positif'];
        $infocovid->Pasien_sembuh = $input['Pasien_sembuh'];
        $infocovid->Pasien_meninggal = $input['Pasien_meninggal'];
        $infocovid->Provinsi = $input['Provinsi'];
        $infocovid->Zona_daerah = $input['Zona_daerah'];
        $status = $infocovid->save();

        if($status){
          return redirect('/dashboard2')->with('success', 'Data berhasil di tambah');
        }else{
          return redirect('/dashboard2/statistik')->with('error', 'Data gagal di tambah');
        }
      }

      // UPDATE UNTUK INFO COVID
      public function update(Request $request, $id){
        $message = [
          'required' => 'Form :attribute harus diisi',
          'numeric' => 'Form :attribute hanya boleh diisin dengan Angka'
        ];

        $rule = [
        'Tanggal' => 'required',
        'Pasien_positif' => 'required|numeric',
        'Pasien_sembuh' => 'required|numeric',
        'Pasien_meninggal' => 'required|numeric',
        'Provinsi' => 'required',
        'Zona_daerah' => 'required'
        ];
        $this->validate($request, $rule);

        $input = $request->all();

        $infocovid = \App\infocovid::find($id);
        // $status = \App\infocovid::create($input);
        // $infocovid = new \App\infocovid;
        $infocovid->Tanggal = $input['Tanggal'];
        $infocovid->Pasien_positif = $input['Pasien_positif'];
        $infocovid->Pasien_sembuh = $input['Pasien_sembuh'];
        $infocovid->Pasien_meninggal = $input['Pasien_meninggal'];
        $infocovid->Provinsi = $input['Provinsi'];
        $infocovid->Zona_daerah = $input['Zona_daerah'];
        $status = $infocovid->update();

        if($status){
          return redirect('/dashboard2')->with('success', 'Data berhasil di ubah');
        }else{
          return redirect('/dashboard2/statistik')->with('error', 'Data gagal di ubah');
        }
      }
      // FUNCTION DESTROY INFO COVID
      public function destroy(Request $request, $id){
        $status = \DB::table('infocovid')->where('id', $id)->delete();

        if($status){
          return redirect('/dashboard2')->with('success', 'Data berhasil dihapus');
        }else{
          return redirect('/dashboard2/statistik')->with('error', 'Data gagal dihapus');
        }
      }

      public function cari2(Request $request){
      // menangkap data pencarian
      $cari = $request->cari;

      // mengambil data dari table pegawai sesuai pencarian data
      $infocovid = \App\infocovid::where('Provinsi','like',"%".$cari."%")->orWhere('Zona_daerah','like',"%".$cari."%")
      ->paginate();

      $data2['infostatistik'] = \App\infostatistik::where('Provinsi', 'LIKE', '%Jawa barat%')->get();

          // mengirim data pegawai ke view index
      return view('pages.index2',['infocovid' => $infocovid], $data2);
      }
}
