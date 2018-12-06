@extends('layouts.app')
@section('title', 'PEKAEL')

@section('content')
<!-- Content start -->
    <!-- Banner -->
    <div class="jumbotron">
        <div class="filter-overlay"></div>
        <div class="text-center">
            <h1>Internship Made Simple</h1>
            <i>
                Use tech to solve your internship problem with your own partner company.
            </i>
            <br>
            <br>
            <a href="" title="" class="btn btn-outline">Pelajari Sekarang</a>
        </div>
    </div>
    <div class="container">
        <div class="wrapper">
        <!-- Section tentang -->
            <section id="section-1" class="text-center">
                <h1>Tentang Kami</h1>
                <p>
                    Platform berbasis web dan android
                    yang mengelola pengajuan Praktik
                    Industri Siswa SMK
                </p>
            </section>
        </div>
        <!-- Section Layanan -->
        <section id="section-2" class="text-center">
            <div class="wrapper">
                <h1>Layanan</h1>
                <div class="box3">
                    <i class="fa fa-link"></i>
                    <h2>Pengajuan PI</h2>
                    <br>
                    <p>
                        Kini mengajukan Praktik Industri lebih mudah dan efisien, anda bisa melakukannya melalui gawai android anda.
                    </p>
                </div>
                <div class="box3">
                    <i class="fa fa-link"></i>
                    <h2>Mencari DU/DI</h2>
                    <br>
                    <p>
                        Anda tak perlu bingung lagi mencari Dunia Usaha/Industri yang sesuai jurusan.
                    </p>
                </div>
                <div class="box3">
                    <i class="fa fa-link"></i> 
                    <h2>Interaktif</h2>
                    <br> 
                    <p>
                        Dapatkan Pemberitahuan mengenai status pengajuan anda yang interaktif dan mudah dipahami,
                    </p>
                </div>
            </div>
        </section>
        <!-- Section Layanan -->
        <section id="section-3" class="text-center">
                <div class="wrapper">
                    <h1>Testimoni Pengguna</h1>
                    <div class="box3-wrap">
                        <div class="box3">
                            <i class="fa fa-user"></i>
                            <div class="id-testi text-center">
                                <h2>Ben Tea</h2>
                                <p class="info">Citranet</p>
                            </div>
                            <br>
                            <p>Dengan adanya mySIPI dari skatech, membuat perusahaan kami lebih dikenal oleh siswa SMK yang suatu waktu dapat menjadi pegawai kami</p>  
                        </div>
                    </div>
                </div>
            </section>
    </div>

<!-- Content stop -->
@endsection
