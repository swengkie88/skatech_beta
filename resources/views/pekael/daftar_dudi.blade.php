@extends('layouts.app')
@section('title', 'Daftar DU/DI')

@section('content')
<!-- Content start -->
    <div class="container">
        <div class="wrapper">
        <!-- Section tentang -->
            
            <section id="section-1" class="shadow">
                <div class="section-content">
                    <h1>Daftar DU/DI</h1>
                    <p class="info">Berikut kami sajikan Daftar Dunia Usaha/Industri yang sesuai dengan jurusan anda.</p>
                    <br>
                    @if($cekIdJurusan == "")
                        <a href="/profil/{{Session::get('id')}}/edit">
                            <p class="info notif-alert-danger"><i class="fa fa-exclamation-circle"></i> Lengkapi dulu data anda!</p>
                        </a>
                        <br>
                        {{$dudiSesuai}}
                    @else
                        @foreach($dudiSesuai as $dudi)
                        <div class="box4">
                            <div class="card-dudi">
                                <div class="card-image">

                                </div>
                                <a href="/profil_dudi/{{$dudi->id}}">
                                    <div class="card-content">
                                        <h3>{{$dudi->nama_perusahaan}}</h3>
                                        <p class="info">Internet Service Provider</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    @endif

                    
                   
                </div>
            </section>
        </div>
    </div>

<!-- Content stop -->
@endsection
