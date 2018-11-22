@extends('layouts.app')
@section('title', 'Profil DU/DI')

@section('content')
<!-- Content start -->
    <div class="container">
        <div class="wrapper">
        <!-- Section tentang -->
            
            <section id="profileUser" class="shadow">
                <div class="profile-banner">
                    @if(Session::get('username') == $dudi->username)
                    <a href="/profil/{{$dudi->id}}/edit" class="btn btn-white btn-edit">
                        <i class="fa fa-edit"></i>
                    </a>
                    @else
                    <div></div>
                    @endif
                    <div class="avatar-profile">
                        <img src="/storage/avatar_user/{{$dudi->image}}" alt="foto_profil_anda">
                    </div>
                    @if(Session::get('akses')=="dudi")
                    <h1>Nama Instansi</h1>
                    @else
                        @if($dudi->nama_perusahaan == "")
                            <h1>Nama Lengkap</h1>
                        @else
                            <h1>{{$dudi->nama_perusahaan}}</h1>
                        @endif
                    @endif
                </div>
                <div class="section-content">
                    <h3>Profil Dunia Usaha/Industri</h3>
                    <br>
                   <table>
                       <tr>
                           <td>Nama Pengguna</td>
                           <td>:</td>
                           <td>{{$dudi->username}}</td>
                       </tr>
                       <tr>
                           <td>Jurusan</td>
                           <td>:</td>
                           <td>{{$dudi->id_jurusan}}</td>
                       </tr>
                       <tr>
                           <td>Alamat</td>
                           <td>:</td>
                           <td>{{$dudi->alamat}}</td>
                       </tr>
                       <tr>
                           <td>No. Handphone</td>
                           <td>:</td>
                           <td>{{$dudi->phone}}</td>
                       </tr>
                   </table>
                </div>
                @if(Session::get('akses')=="siswa")
                <div class="section-footer">
                    <form action="pilihDuDi/" method="POST">
                        @csrf
                        <input type="hidden" name="id_dudi" value="{{$dudi->id}}">
                        <button class="btn btn-success" type="submit">Pilih DU/DI</button>
                    </form>
                </div>
                @else
                <div></div>
                @endif
            </section>
        </div>
    </div>

<!-- Content stop -->
@endsection
