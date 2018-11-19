@extends('layouts.app')
@section('title', 'Edit Profil')

@section('content')
<!-- Content start -->
    <div class="container">
        <div class="mini-wrapper">
        <!-- Section tentang -->
            
            <section id="section-1" class="shadow">
                <div class="section-content">
                    <h3>Sunting Profil Anda</h3>
                    <br>
                    <form method="POST" action="/suntingSiswa/{{$detailSiswa->id}}" method="POST">
                        {{ csrf_field() }}
                        <div>
                            <input type="hidden" name="_method" value="PUT">
                            <label for="">Nama Pengguna</label>
                            <input type="text" name="username" value="{{$detailSiswa->username}}" placeholder="Nama Pengguna">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama" value="{{$detailSiswa->nama}}" placeholder="Nama Lengkap">
                            <label for="">Jurusan</label>
                            <select name="id_jurusan" id="">
                                <option value="1">Konstruksi Gedung, Sanitasi dan Perawatan</option>
                                <option value="2">Desain Permodelan dan Informasi Bangunan</option>
                                <option value="3">Teknik Instalasi Tenaga Listrik</option>
                                <option value="4">Teknik Permesinan</option>
                                <option value="5">Teknik Kendaraan Ringan Otomotif</option>
                                <option value="6">Teknik Geomatika</option>
                                <option value="7">Teknik Audio Video</option>
                                <option value="8">Teknik Komputer dan Jaringan</option>
                                <option value="9">Multimedia</option>
                            </select>
                            <label for="">Kelas</label>
                            <select name="kelas" id="">
                                <option value="XI KGSP">XI KGSP</option>
                                <option value="XI DPIB 1">XI DPIB 1</option>
                                <option value="XI DPIB 2">XI DPIB 2</option>
                                <option value="XI DPIB 3">XI DPIB 3</option>
                                <option value="XI TITL 1">XI TITL 1</option>
                                <option value="XI TITL 2">XI TITL 2</option>
                                <option value="XI TITL 3">XI TITL 3</option>
                                <option value="XI TITL 4">XI TITL 4</option>
                                <option value="XI TP 1">XI TP 1</option>
                                <option value="XI TP 2">XI TP 2</option>
                                <option value="XI TP 3">XI TP 3</option>
                                <option value="XI TP 4">XI TP 4</option>
                                <option value="XI TKRO 1">XI TKRO 1</option>
                                <option value="XI TKRO 2">XI TKRO 2</option>
                                <option value="XI TKRO 3">XI TKRO 3</option>
                                <option value="XI TKRO 4">XI TKRO 4</option>
                                <option value="XI GEOMATIKA">XI GEOMATIKA</option>
                                <option value="XI TAV 1">XI TAV 1</option>
                                <option value="XI TAV 2">XI TAV 2</option>
                                <option value="XI TKJ 1">XI TKJ 1</option>
                                <option value="XI TKJ 2">XI TKJ 2</option>
                                <option value="XI MM 1">XI MM 1</option>
                                <option value="XI MM 2">XI MM 2</option>
                            </select>
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="" cols="80" rows="2"placeholder="Alamat">{{$detailSiswa->alamat}}</textarea>
                            <label for="">No. Handphone</label>
                            <input type="number" name="phone" id="" value="{{ $detailSiswa->phone }}">

                            <br>
                            <button class="btn btn-block btn-success" type="submit">perbarui data</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

<!-- Content stop -->
@endsection
