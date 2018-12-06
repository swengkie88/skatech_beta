<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\DuDi;
use App\PjJurusan;
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
        if(Session::get('akses')=="dudi"){
            $query = DB::select('select nama_perusahaan AS nama from `pkl_dudi` where username="'.$username.' " ' );
        }
        else if(Session::get('akses')=="pj_jurusan"){
            $query = DB::select('select nama AS nama from `pkl_pj_jurusan` where username="'.$username.' " ' );
        }
        else{
            $query = DB::select('select nama AS nama from `pkl_siswa` where username="'.$username.' " ' );
        }
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
   
    public function pilihDuDi(Request $request){
        
        $data = new Kelompok();
        $data->id_jurusan = $request->id_jurusan;
        $data->id_dudi = $request->id_dudi;
        $data->tahun = "2018/2019";
        $data->period = "1";
        $data->verify_by_pj = 0;
        $data->save(); 

        return redirect('/buatKelompok');
    
    
    }

    public function buatKelompokStore(){
        $id_siswa = Session::get('id');
        $ambilIdJurusan = DB::select('SELECT id_jurusan FROM pkl_siswa WHERE id="'.$id_siswa.'"');
        dd($ambilIdJurusan);

        
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

    public function profil($id){
        $siswa = Siswa::find($id);
        $idJurusan = $siswa->id_jurusan;
        if($idJurusan == ""){
            $namaJurusan = "Data masih kosong";
        }
        else{    
            $query = DB::select('SELECT jurusan AS namaJurusan FROM pkl_jurusan WHERE id='.$idJurusan.'');
            $namaJurusan = data_get($query, '0.namaJurusan');
        }
  

        return view('pekael.profil')->with('siswa', $siswa)->with('namaJurusan', $namaJurusan);
    }

    public function detailDuDi($id){
        $dudi = DuDi::find($id);
        $idJurusan = $dudi->id_jurusan;

        if($idJurusan == ""){
            $namaJurusan = "Data masih kosong";
        }
        else{    
            $query = DB::select('SELECT jurusan AS namaJurusan FROM pkl_jurusan WHERE id='.$idJurusan.'');
            $namaJurusan = data_get($query, '0.namaJurusan');
        }

        return view('pekael.profil_dudi')->with('dudi', $dudi)->with('namaJurusan', $namaJurusan);
    }

    public function profil_pj($id){
        $pjJurusan = PjJurusan::find($id);
        $idJurusan = $pjJurusan->id_jurusan;

        $query = DB::select('SELECT jurusan AS namaJurusan FROM pkl_jurusan WHERE id='.$idJurusan.'');
        $namaJurusan = data_get($query, '0.namaJurusan');

        return view('pekael.profil_pj_jurusan')->with('pjJurusan', $pjJurusan)->with('namaJurusan', $namaJurusan);
    }
    
    public function editProfil($id){
        if(Session::get('akses')=="dudi"){
            $detailUser = DuDi::find($id);
        }   
        else if(Session::get('akses')=="pj_jurusan"){
            $detailUser = PjJurusan::find($id);
        }
        else{
            $detailUser = Siswa::find($id);
        }

        return view('pekael.edit_profil')->with('detailUser', $detailUser);
    }

    public function perbaruiProfil(Request $request, $id){
        $this->validate($request,[
            'username' => 'required',
            'nama' => 'required',
            'avatar_user' => 'image|nullable|max:1999',
            'id_jurusan' => 'required',
        ]); 

        // Handle file upload

        if($request->hasFile('avatar_user')){
            //Ambil nama plus ekstensi
            $filenameext = $request->file('avatar_user')->getClientOriginalName();
            //Ambil nama path
            $filename = pathinfo($filenameext, PATHINFO_FILENAME);
            //Ambil extensi aja
            $extension = $request->file('avatar_user')->getClientOriginalExtension();
            // format nama barune
            $filenamebaru = $filename.'_'.time().'.'.$extension;
            // upload file 
            $path = $request->file('avatar_user')->storeAs('public/avatar_user', $filenamebaru);
        }

        if(Session::get('akses')=="dudi"){
            $data = DuDi::find($id);
        }
        elseif(Session::get('akses')=="pj_jurusan"){
            $data = PjJurusan::find($id);
        }
        else{
            $data = Siswa::find($id);
        }

        $data->username = $request->username;
        
        if(Session::get('akses')=="siswa" OR Session::get('akses')=="pj_jurusan"){
            $data->nama = $request->nama;
        }
        else{
            $data->nama_perusahaan = $request->nama;
        }
        
        if($request->hasFile('avatar_user')){
            $data->image = $filenamebaru;
        }
        $data->id_jurusan = $request->id_jurusan;
        
        if(Session::get('akses')=="siswa"){
            $data->kelas = $request->kelas;
        }
        
        $data->id_jurusan = $request->id_jurusan;

        Session::put('id_jurusan',$data->id_jurusan);   

        $data->alamat = $request->alamat;
        $data->phone = $request->phone;

        $data->save();

        if(Session::get('akses')=="dudi"){
            return redirect('profil_dudi/'.Session::get('id').'');
        }
        elseif(Session::get('akses')=="pj_jurusan"){
            return redirect('profil_pj_jurusan/'.Session::get('id').'');
        }
        else{
            return redirect('profil/'.Session::get('id').'');
        }
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
