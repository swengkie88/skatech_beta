@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')
  <!-- Content start -->
  <div class="container">
        <div class="wrapper tentang-wrapper">
        <!-- Section tentang -->
            <div class="box6">
                <section id="tentang">
                    <h1>Tentang Kami</h1>
                    <p>
                        Platform berbasis web dan android
                        yang mengelola pengajuan Praktik
                        Industri Siswa SMK. Bersama kami Praktik Industri
                        dapat dilaksanakan dengan mudah dan praktis, dan 
                        sesuai tren zaman sekarang yang mengutamakan prinsip
                        <i>paperless.</i>
                    </p>
                </section>
            </div>
            <div class="box6">
                <section id="tentang-wrapper">
                    <img src="{{asset('assets/img/sample_img.png')}}" alt="gambar_contoh">
                </section>
            </div>
        </div>
    </div>
    <!-- Content stop -->
@endsection