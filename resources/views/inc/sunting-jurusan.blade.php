@extends('layouts.app')
@section('title', 'Sunting Data Jurusan')

@section('content')
<!-- Content start -->
    <div class="container">
        <div class="fluid-wrapper">
        <!-- Section Data Siswa -->
            <section class="dashboard-section">
                <div class="header-section">
                    <h1>Sunting Jurusan</h1>
                </div>
                <div class="content-section">
                    <form method="POST" action="/suntingJurusan/{{$detailJurusan->id}}" method="POST">
                        {{ csrf_field() }}
                        <div>
                            <input type="hidden" name="_method" value="PUT">
                            <input type="text" name="jurusan" value="{{$detailJurusan->jurusan}}" placeholder="Nama Jurusan"><br>
                            <textarea name="deskripsi_jurusan" id="" cols="80" rows="2" placeholder="Deskripsi Jurusan">{{$detailJurusan->deskripsi}}</textarea>
                            <br>
                            <br>
                            <button class="btn btn-block btn-success" type="submit">perbarui data</button>
                        </div>
                    </form>
                </div>
                <h1> </h1>
                    
            </section>
        </div>
    </div>

<!-- Content stop -->
@endsection