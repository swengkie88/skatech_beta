<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\DuDi;
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
        
        
        $dudiSesuai =  DB::select('select * from pkl_dudi where id_jurusan='.$idJurusan.'' );


        $dudi = DuDi::all();
        return view('pekael.daftar_dudi', ['dudiSesuai' => $dudiSesuai]);
    }
   
    public function profil($id){
        $siswa = Siswa::find($id);
        return view('pekael.profil')->with('siswa', $siswa);
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
