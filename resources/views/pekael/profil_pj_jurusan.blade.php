@extends('layouts.app')
@section('title', 'Profil PJ Jurusan')

@section('content')
<!-- Content start -->
    <div class="container">
        <div class="wrapper">
        <!-- Section tentang -->
            
            <section id="profileUser" class="shadow">
                <div class="profile-banner">
                    @if(Session::get('username') == $pjJurusan->username)
                    <a href="/profil/{{$pjJurusan->id}}/edit" class="btn btn-white btn-edit">
                        <i class="fa fa-edit"></i>
                    </a>
                    @else
                    <div></div>
                    @endif
                    <div class="avatar-profile text-center">
                        @if(!$pjJurusan->images == "")
                            <img src="/storage/avatar_user/{{$pjJurusan->image}}" alt="foto_profil_anda">
                        @else
                            @if($pjJurusan->nama == "")
                                <h2><i class="fa fa-user"></i></h2>
                            @else
                                <h2><?php echo substr($pjJurusan->nama, 0, 1) ?></h2>
                            @endif
                        @endif
                    </div>
                            <h1>
                        @if($pjJurusan->nama == "")
                                Nama Lengkap
                        @else
                                {{$pjJurusan->nama}}
                        @endif
                            </h1>
                </div>
                <div class="section-content">
                    <h3>Biodata Diri Anda</h3>
                    <br>
                   <table>
                       <tr>
                           <td>Nama Pengguna</td>
                           <td>:</td>
                           <td>{{$pjJurusan->username}}</td>
                       </tr>
                       <tr>
                           <td>Jurusan Terkait</td>
                           <td>:</td>
                           <td>{{$namaJurusan}}</td>
                       </tr>
                       <tr>
                           <td>Alamat</td>
                           <td>:</td>
                           <td>{{$pjJurusan->alamat}}</td>
                       </tr>
                       <tr>
                           <td>No. Handphone</td>
                           <td>:</td>
                           <td>{{$pjJurusan->phone}}</td>
                       </tr>
                   </table>
                </div>
                @if(Session::get('akses')=="siswa")
                <div class="section-footer">
                    <form action="pilihDuDi/" method="POST">
                        @csrf
                        <input type="hidden" name="id_dudi" value="{{$pjJurusan->id}}">
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
