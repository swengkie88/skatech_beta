@extends('layouts.app')
@section('title', 'Profil')

@section('content')
<!-- Content start -->
    <div class="container">
        <div class="wrapper">
        <!-- Section tentang -->
            
            <section id="section-1" class="shadow">
                <div class="profile-banner">
                    <a href="/profil/{{$siswa->id}}/edit" class="btn btn-white btn-edit">
                        <i class="fa fa-edit"></i>
                    </a>
                    <div class="avatar-profile"></div>
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
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit iusto, fugit eius at possimus ea soluta esse blanditiis dolorem magni atque corporis voluptatibus illo asperiores eos temporibus rem repudiandae sed.
                </div>
            </section>
        </div>
    </div>

<!-- Content stop -->
@endsection
