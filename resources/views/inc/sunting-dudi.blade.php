@extends('layouts.app')
@section('title', 'Sunting Data Siswa')

@section('content')
<!-- Content start -->
    <div class="container">
        <div class="fluid-wrapper">
        <!-- Section Data Siswa -->
            <section class="dashboard-section">
                <div class="header-section">
                    <h1>Sunting Siswa</h1>
                </div>
                <div class="content-section">
                    <form method="POST" action="/suntingDuDi/{{$detailDuDi->id}}" method="POST">
                        {{ csrf_field() }}
                        <div>
                            <input type="hidden" name="_method" value="PUT">
                            <label for="">Nama Pengguna</label>
                            <input type="text" name="username" value="{{$detailDuDi->username}}" placeholder="Nama Pengguna"><br>
                            <label for="">Nama Perusahaan</label>
                            <input type="text" name="nama_perusahaan" value="{{$detailDuDi->nama_perusahaan}}" placeholder="Nama Perusahaan">
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
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="" cols="80" rows="2"placeholder="Alamat">{{$detailDuDi->alamat}}</textarea>
                            <label for="">No. Handphone</label>
                            <input type="number" name="phone" id="" value="{{ $detailDuDi->phone }}">

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