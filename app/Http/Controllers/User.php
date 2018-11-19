<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Siswa;
use App\PjJurusan;
use App\DuDi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class User extends Controller
{
    public function loginPost(Request $request){
        $username = $request->username;
        $password = $request->password;
        $akses = $request->akses;

        if($akses == "siswa"){
            $data = Siswa::where('username', $username)->first()->toArray();
        }
        elseif ($akses == "pj_jurusan") {
            $data = PjJurusan::where('username', $username)->first()->toArray();
        }
        else if($akses == "dudi"){
            $data = DuDi::where('username', $username)->first()->toArray();
        }
        else{
            $data = Admin::where('username', $username)->first()->toArray();
        }

        if(count($data) > 0){
            if(Hash::check($password,$data['password'])){
                Session::put('username',$data['username']);                 
                Session::put('akses',$data['akses']);                 
                Session::put('id',$data['id']);
                Session::put('login',TRUE);                 
                if(Session::get('akses')=="admin"){
                    return redirect('dashboard');
                }
                else{
                    return redirect('beranda');
                    
                }
            }
            else{
                return redirect('masuk')->with('alert', 'Password kamu salah!');
            }
        }else{
            return redirect('masuk')->width('alert', 'Username kamu salah!');
        }

    
        
    }
    public function logout(){
        Session::flush();
        return redirect('masuk')->with('alert', 'Kamu sudah logout');
    }
    public function registerPost(Request  $request){
        $this->validate($request, [
            'username' => 'required|min:4',
            'password' => 'required',
            'akses' => 'required',
            'confirmation' => 'required|same:password',
        ]);
        if($_POST['submit-daftar']){
            $akses = $request->akses;
            Session::put('akses', $request->akses);
            //$akses_array = explode(" ", $akses);
        //    /dd($akses_array);
            if($akses == "siswa"){
                $data = new Siswa();
            }
            elseif ($akses == "pj_jurusan") {
                $data = new PjJurusan();
            }
            else if($akses == "dudi"){
                $data = new DuDi();
            }
         
            $data->username = $request->username;
            $data->password = bcrypt($request->password);
            $data->akses = $request->akses;
            
            Session::put('username', $data->username);  
            
            $data->save();
            return redirect('masuk')->with('alert-success', 'Kamu berhail register');
        }
    }
}
