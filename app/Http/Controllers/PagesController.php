<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\DuDi;
use App\Kelompok;
use App\DetailKelompok;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        if(Session::get('akses')=="admin"){
            return redirect('dashboard');
        }
        else{
            return view('pekael.index');
        }
    }
    public function beranda(){
        $username = Session::get('username');
        
        $query = DB::select('select nama AS nama from `pkl_siswa` where username="'.$username.' " ' );
        $statusData = data_get($query, '0.nama');

        return view('pekael.beranda', ['statusData' => $statusData]);
    }

    public function daftar_dudi(){
        $user_id = Session::get('id');
        $query = DB::select('select id_jurusan AS idJurusan from `pkl_siswa` where id='.$user_id.'');
        $idJurusan = data_get($query, '0.idJurusan');
        
        
        $cekIdJurusan = DB::select('select id_jurusan as cekIdJurusan from `pkl_siswa` where id='.$user_id.'');
        $cekIdJurusan = data_get($cekIdJurusan, '0.cekIdJurusan');

        if($cekIdJurusan == ""){
            $dudiSesuai =  "Tidak ditemukan DU/DI yang sesuai...";
        }else{
            $dudiSesuai =  DB::select('select * from pkl_dudi where id_jurusan='.$idJurusan.'' );
        }

        $dudi = DuDi::all();
        return view('pekael.daftar_dudi', ['cekIdJurusan' => $cekIdJurusan ,'dudiSesuai' => $dudiSesuai]);
    }

    public function detailDuDi($id){
        $dudi = DuDi::find($id);
        return view('pekael.profil_dudi')->with('dudi', $dudi);
    }
   
    public function pilihDuDi(Request $request){
        $bawaIdDuDi = $request->id_dudi;
        dd($bawaIdDuDi);
        return redirect('/buatKelompok')->with('bawaIdDuDi', $bawaIdDuDi);
    }

    public function buatKelompokStore(){
        $id_siswa = Session::get('id');
        $ambilIdJurusan = DB::select('SELECT id_jurusan FROM pkl_siswa WHERE id="'.$id_siswa.'"');
        dd($ambilIdJurusan);

        $data = new Kelompok();
        $data->id_jurusan = $request->id_jurusan;
        $data->id_dudi = $request->id_dudi;
        $data->tahun = $request->tahun;
        $data->period = $request->period;
        $data->verify_by_pj = $request->verify_by_pj;
        $data->save(); 
        $data2 = new DetailKelompok();
        $data2->id_kelompok = $data->id; 

        return redirect('/pilihAnggota');

    }

    public function pilihAnggotaStore(){
        $dataKelompok = Kelompok;
        $data2 = new DetailKelompok();
        $data2->id_kelompok = $dataKelompok->id;
        $data2->id_siswa = $request->id_siswa;
        $data2->acc = $request->acc;
        $data->save();
      
        return redirect('/beranda');
    }

    // public function buatKelompok(Request $request, $id){
    //     $dataKelompok = Kelompok::find($id);

    //     $data2 = new DetailKelompok();
    //     $data2->id_kelompok = $data->id;
    //     $data2->id_siswa = $request->id_siswa;
    //     $data2->acc = $request->acc;
    //     $data2->save();
    //     return redirect('/beranda');

    //     return view('pekael.buat_kelompok');
    // }

    public function profil($id){
        $siswa = Siswa::find($id);
        $idJurusan = $siswa->id_jurusan;

        $query = DB::select('SELECT jurusan AS namaJurusan FROM pkl_jurusan WHERE id='.$idJurusan.'');
        $namaJurusan = data_get($query, '0.namaJurusan');
  

        return view('pekael.profil')->with('siswa', $siswa)->with('namaJurusan', $namaJurusan);
    }
    
    public function editProfil($id){
        $detailSiswa = Siswa::find($id);
        return view('pekael.edit_profil_siswa')->with('detailSiswa', $detailSiswa);
    }

    public function kontak(){
        return view('pekael.kontak');
    }
    public function tentang(){
        return view('pekael.tentang');
    }
    public function daftar(){
        return view('pekael.daftar');
    }
    public function masuk(){
        return view('pekael.masuk');
    }
}
