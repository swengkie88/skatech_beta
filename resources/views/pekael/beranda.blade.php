@extends('layouts.app')

@if(Session::get('akses')=="dudi")
    @section('title', 'Dasbor DU/DI')
@elseif(Session::get('akses')=="pj_jurusan")
    @section('title', 'Dasbor PJ Jurusan')
@else
    @section('title', 'Dasbor Siswa')
@endif

@section('content')
<!-- Content start -->
    <div class="container">
        <div class="wrapper">
        <!-- Section tentang -->
            
            <br>
            @if(Session::get('akses')=="dudi")
                <h1>Dasbor DU/DI</h1>
            @elseif(Session::get('akses')=="pj_jurusan")
                <h1>Dasbor PJ Jurusan</h1>
            @else
                <h1>Dasbor Siswa</h1>
            @endif
                
            <section class="shadow">
                <div class="section-content">
                    <h3>Pemberitahuan</h3>
                    <br>
                    <p>{{Session::get('id_jurusan')}}</p>
                    @if($statusData == "")
                        @if(Session::get('akses')=="dudi")
                            <a href="/profil_dudi/{{Session::get('id')}}/edit">
                        @elseif(Session::get('akses')=="pj_jurusan")
                            <a href="/profil_pj_jurusan/{{Session::get('id')}}/edit">
                        @else
                            <a href="/profil/{{Session::get('id')}}/edit"> 
                        @endif
                                <p class="info notif-alert-danger"><i class="fa fa-exclamation-circle"></i> Lengkapi dulu data anda!</p>
                            </a>
                    @else
                        <p class="info">Tidak ada pemberitahuan terbaru...</p>
                    @endif
                </div>
            </section>
            <section id="dasbor-siswa" class="shadow">
                <div class="section-content">
                    
                    
                    <h3>Tahapan Pengajuan</h3>
                    <br>
                    <div class="box4">
                        <div class="card-dashboard siswa">
                            <div class="card-dash-text">
                                <p>1.</p>
                                <div class="clear"></div>
                                <span>
                                    Memilih DU/DI
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="box4">
                        <div class="card-dashboard kelompok">
                            <div class="card-dash-text">
                                <p>2.</p>
                                <div class="clear"></div>
                                <span>
                                    Membuat Kelompok
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="box4">
                        <div class="card-dashboard jurusan">
                            <div class="card-dash-text">
                                <p>3.</p>
                                <div class="clear"></div>
                                <span>
                                    Keputusan PJ Jurusan
                                </span>
                            </div>
                        </div>
                        </div>
                    <div class="box4">
                        <div class="card-dashboard pj-jurusan">
                            <div class="card-dash-text">
                                <p>4.</p>
                                <div class="clear"></div>
                                <span>
                                    Keputusan DU/DI
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

<!-- Content stop -->
@endsection
