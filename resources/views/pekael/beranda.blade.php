@extends('layouts.app')
@section('title', 'Dasbor Siswa')

@section('content')
<!-- Content start -->
    <div class="container">
        <div class="wrapper">
        <!-- Section tentang -->
            
            <br>
            <h1>Dasbor Siswa</h1>
            <section class="shadow">
                <div class="section-content">
                    <h3>Pemberitahuan</h3>
                    <br>
                    @if($statusData == "")
                    <a href="/profil/{{Session::get('id')}}/edit">
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
