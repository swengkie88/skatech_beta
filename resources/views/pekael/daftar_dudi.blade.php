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
                    @foreach($dudiSesuai as $dudi)
                    <div class="box4">
                        <div class="card-dudi">
                            <div class="card-image">

                            </div>
                            <div class="card-content">
                                <h3>{{$dudi->nama_perusahaan}}</h3>
                                <p class="info">Internet Service Provider</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </section>
        </div>
    </div>

<!-- Content stop -->
@endsection
