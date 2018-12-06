@extends('layouts.app')
@section('title', 'Profil')

@section('content')
<!-- Content start -->
    <div class="container">
        <div class="wrapper">
        <!-- Section tentang -->
            
            <section id="profileUser" class="shadow">
                <div class="profile-banner">
                    <a href="/profil/{{$siswa->id}}/edit" class="btn btn-white btn-edit">
                        <i class="fa fa-edit"></i>
                    </a>
                    <div class="avatar-profile text-center">
                        @if($siswa->images !== "")
                            <img src="/storage/avatar_user/{{$siswa->image}}" alt="foto_profil_anda">
                        @else
                            <h2><i class="fa fa-user"></i></h2>
                        @endif
                    </div>
                    @if(Session::get('akses')=="dudi")
                    <h1>Nama Instansi</h1>
                    @else
                        @if($siswa->nama == "")
                            <h1>Nama Lengkap</h1>
                        @else
                            <h1>{{$siswa->nama}}</h1>
                        @endif
                    @endif
                </div>
                <div class="section-content">
                    <h3>Biodata diri anda</h3>
                    <br>
                   <table>
                       <tr>
                           <td>Nama Pengguna</td>
                           <td>:</td>
                           <td>{{$siswa->username}}</td>
                       </tr>
                       <tr>
                           <td>Jurusan</td>
                           <td>:</td>
                           <td>{{$namaJurusan}}</td>
                       </tr>
                       <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td>{{$siswa->kelas}}</td>
                       </tr>
                       <tr>
                           <td>Alamat</td>
                           <td>:</td>
                           <td>{{$siswa->alamat}}</td>
                       </tr>
                       <tr>
                           <td>No. Handphone</td>
                           <td>:</td>
                           <td>{{$siswa->phone}}</td>
                       </tr>
                   </table>
                </div>
            </section>
        </div>
    </div>

<!-- Content stop -->
@endsection
