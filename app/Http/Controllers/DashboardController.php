<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Jurusan;
use App\PjJurusan;
use App\DuDi;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Admin layout start
    public function dashboard(){

        $jmlSiswa = DB::select('select count(username) AS jmlSiswa from pkl_siswa');
        $jmlSiswa = data_get($jmlSiswa, '0.jmlSiswa');

        $jmlJurusan = DB::select('select count(jurusan) AS jmlJurusan from pkl_jurusan');
        $jmlJurusan = data_get($jmlJurusan, '0.jmlJurusan');


        $jmlPj = DB::select('select count(username) AS jmlPj from pkl_pj_jurusan');
        $jmlPj = data_get($jmlPj, '0.jmlPj');

        $jmlDuDi = DB::select('select count(username) AS jmlDuDi from pkl_dudi');
        $jmlDuDi = data_get($jmlDuDi, '0.jmlDuDi');

       

        return view('administrator.dashboard', ['jmlSiswa' => $jmlSiswa, 'jmlJurusan' => $jmlJurusan,'jmlPj' => $jmlPj, 'jmlDuDi' => $jmlDuDi]);
    }
    
    // Siswa CRUD Start
    public function daftarSiswa(){
        $siswasiswa = Siswa::all(); 
        return view('administrator.daftar-siswa')->with('siswasiswa', $siswasiswa);
    }
    public function tambahSiswa(Request $request){
        $this->validate($request,[
            'username' => 'required|min:4',
            'nama' => 'required',
            'password' => 'required',
            'id_jurusan' => 'required',
            'kelas' => 'required',
            'akses' => 'required',
        ]); 

        $data = new Siswa();
        $data->username = $request->username;
        $data->nama = $request->nama;
        $data->password = bcrypt($request->password);
        $data->id_jurusan = $request->id_jurusan;
        $data->kelas = $request->kelas;
        $data->akses = $request->akses;
        $data->save();
        return redirect('daftarSiswa');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function editSiswa($id){
        $detailSiswa = Siswa::find($id);
        return view('inc.sunting-siswa')->with('detailSiswa', $detailSiswa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perbaruiSiswa(Request $request, $id){
        $this->validate($request,[
            'username' => 'required',
            'nama' => 'required',
            'avatar_user' => 'image|nullable|max:1999',
            'id_jurusan' => 'required',
            'kelas' => 'required',
            'alamat' => 'required|min:5',
            'phone' => 'required|max:13'
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

        $data = Siswa::find($id);

        $data->username = $request->username;
        $data->nama = $request->nama;
        if($request->hasFile('avatar_user')){
            $data->image = $filenamebaru;
        }
        $data->id_jurusan = $request->id_jurusan;
        $data->kelas = $request->kelas;
        $data->id_jurusan = $request->id_jurusan;
        $data->alamat = $request->alamat;
        $data->phone = $request->phone;

        $data->save();
        if(Session::get('akses')=="admin"){
            return redirect('daftarSiswa');
        }
        else{
            return redirect('profil/'.Session::get('id').'');
        }
    }

    public function hapusSiswa($id){
        $detailSiswa = Siswa::find($id);
        $detailSiswa->delete();
        return redirect('/daftarSiswa');
    }
    // Siswa CRUD Stop

    // PJ Jurusan CRUD Start
    public function daftarPjJurusan(){
        $pjpj = PjJurusan::all();
        return view('administrator.daftar-pj_jurusan')->with('pjpj', $pjpj);
    }

    public function tambahPjJurusan(Request $request){
        $this->validate($request,[
            'username' => 'required|min:4',
            'nama' => 'required',
            'password' => 'required',
            'id_jurusan' => 'required',
            'akses' => 'required',
        ]); 

        $data = new PjJurusan();
        $data->username = $request->username;
        $data->nama = $request->nama;
        $data->password = bcrypt($request->password);
        $data->id_jurusan = $request->id_jurusan;
        $data->akses = $request->akses;
        $data->save();
        return redirect('daftarPjJurusan');

    }

    public function editPjJurusan($id){
        $detailPjJurusan = PjJurusan::find($id);
        return view('inc.sunting-pj_jurusan')->with('detailPjJurusan', $detailPjJurusan);
    }
    
    public function perbaruiPjJurusan(Request $request, $id){
        $this->validate($request,[
            'username' => 'required',
            'nama' => 'required',
            'id_jurusan' => 'required',
            'phone' => 'required|max:13'
        ]); 

        $data = PjJurusan::find($id);

        $data->username = $request->username;
        $data->nama = $request->nama;
        $data->id_jurusan = $request->id_jurusan;
        $data->phone = $request->phone;

        $data->save();
        return redirect('daftarPjJurusan');
    }

    public function hapusPjJurusan($id){
        $detailPjJurusan = PjJurusan::find($id);
        $detailPjJurusan->delete();
        return redirect('/daftarPjJurusan');
    }
    // PJ Jurusan CRUD Stop
    
    public function daftarKelompok(){
        return view('administrator.daftar-kelompok');
    }

    // Jurusan CRUD Start
    public function daftarJurusan(){
        $jurusans = Jurusan::all();
 
        return view('administrator.daftar-jurusan')->with('jurusans', $jurusans);
    }

    public function tambahJurusan(Request $request){
        $this->validate($request,[
            'jurusan' => 'required',
            'deskripsi_jurusan' => 'required',
        ]); 

        $data = new Jurusan();
        $data->jurusan = $request->jurusan;
        $data->deskripsi = $request->deskripsi_jurusan;
        $data->save();
        return redirect('daftarJurusan');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function editJurusan($id){
        $detailJurusan = Jurusan::find($id);
        return view('inc.sunting-jurusan')->with('detailJurusan', $detailJurusan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function suntingJurusan(Request $request, $id){
        $this->validate($request,[
            'jurusan' => 'required',
            'deskripsi_jurusan' => 'required',
        ]); 

        $data = Jurusan::find($id);

        $data->jurusan = $request->jurusan;
        $data->deskripsi = $request->deskripsi_jurusan;
        $data->save();
        return redirect('daftarJurusan');
    }

    public function hapusJurusan($id){
        $detailJurusan = Jurusan::find($id);
        $detailJurusan->delete();
        return redirect('/daftarJurusan');
    }
    // Jurusan CRUD Stop


    // DuDi CRUD Start
    public function daftarDuDi(){
        $dudidudi = DuDi::all();
        return view('administrator.daftar-dudi')->with('dudidudi', $dudidudi);
    }

    public function tambahDuDi(Request $request){
        $this->validate($request,[
            'username' => 'required|min:4',
            'nama_perusahaan' => 'required',
            'password' => 'required',
            'id_jurusan' => 'required',
            'akses' => 'required',
        ]); 

        $data = new DuDi();
        $data->username = $request->username;
        $data->nama_perusahaan = $request->nama_perusahaan;
        $data->password = bcrypt($request->password);
        $data->id_jurusan = $request->id_jurusan;
        $data->akses = $request->akses;
        $data->save();
        return redirect('daftarDuDi');

    }

    public function editDuDi($id){
        $detailDuDi = DuDi::find($id);
        return view('inc.sunting-dudi')->with('detailDuDi', $detailDuDi);
    }
    public function perbaruiDuDi(Request $request, $id){
        $this->validate($request,[
            'username' => 'required',
            'nama_perusahaan' => 'required',
            'id_jurusan' => 'required',
            'alamat' => 'required|min:5',
            'phone' => 'required|max:13'
        ]); 

        $data = DuDi::find($id);

        $data->username = $request->username;
        $data->nama_perusahaan = $request->nama_perusahaan;
        $data->id_jurusan = $request->id_jurusan;
        $data->alamat = $request->alamat;
        $data->phone = $request->phone;

        $data->save();
        return redirect('daftarDuDi');
    }
    public function hapusDuDi($id){
        $detailDuDi = DuDi::find($id);
        $detailDuDi->delete();
        return redirect('/daftarDuDi');
    }
    // DuDi CRUD Stop

    // Admin layout stop
}
