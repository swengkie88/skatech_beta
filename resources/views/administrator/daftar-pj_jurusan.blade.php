@extends('layouts.app')
@section('title', 'Daftar PJ Jurusan')

@section('content')
<!-- Content start -->
    <div class="container">
        <div class="fluid-wrapper">
        <!-- Section Data Siswa -->
            <section class="dashboard-section">
                <div class="header-section">
                    <div class="left">
                        <h1>Daftar PJ Jurusan</h1>
                    </div>
                    <div class="right">
                        <form action="" class="form-search">
                            <input type="search" name="search" id="" placeholder="Cari nama penanggung jawab...">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </form>
                        <button onclick="window.location = '?tambah-pjJurusan=1' " class="btn btn-success">Tambah</button>
                    </div>
                </div>
                <div class="content-section">
                    <p class="info">NB: Klik nama pengguna untuk melihat data selengkapnya.</p>
                    <br>
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 30px; text-align: center;">No.</th>
                                <th style="width: 200px;">Nama Pengguna</th>
                                <th style="width: 140px;">No. Telepon</th>
                                <th colspan="2" class="text-center" style="width: 50px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pjpj as $pj)
                            <tr>
                                <td style="text-align: center;">
                                    <?php
                                        if($no < 10){
                                            echo "0".$no.".";
                                        }
                                        else{
                                            echo $no.".";
                                        }
                                    ?>
                                </td>
                                <td><a href="" class="btn-link">{{$pj->username}}</a></td>
                                <td>{{$pj->phone}}</td>
                                <td class="text-center"><a href="/suntingPjJurusan/{{$pj->id}}/edit" class="btn btn-success">Edit</a></td>
                                <td class="text-center"><button onclick="window.location = '?hapus-pj_jurusan={{$pj->id}}' " class="btn btn-danger">Hapus</button></td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <h1> </h1>
            </section>
        </div>
    </div>
    {{-- Modal Start --}}

    {{-- Modal tambah pj jurusan --}}
    <?php if(isset($_GET['tambah-pjJurusan'])){ ?>
    <div id="modal-add">
        <div class="modal-container">
            <div class="modal-close" onclick="window.location = '/daftarPjJurusan'">
                <i class="fa fa-close"></i>
            </div>
            <div class="section-head">
                <h2>Tambahkan PJ Jurusan</h2>
                <p class="info">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="section-body">
                <form method="POST" action="{{url('tambahPjJurusan')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-first">
                        <input type="text" name="username" placeholder="Nama Pengguna">
                        <input type="text" name="nama" placeholder="Nama Lengkap">
                        <input type="password" name="password" placeholder="Kata Sandi">
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
                        <input type="hidden" name="akses" value="pj_jurusan">
                        <br>
                        <button class="btn btn-block btn-success" type="submit">TAMBAHKAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
    {{-- Modal konfirmasi hapus --}}
    <?php if(isset($_GET['hapus-pj_jurusan'])){
        $id_pjJurusan = $_GET['hapus-pj_jurusan'];
     ?>
    <div id="modal-add">
        <div class="modal-container">       
            <div class="section-body">
                <p>
                    Apakah anda yakin ingin menghapus data ini?
                </p>
                <br>
                <form action="/daftarPjJurusan/{{$id_pjJurusan}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <div class="text-center">
                        <button type="submit" title="Hapus PjJurusan ini?" class="btn btn-danger">Hapus</button>
                        <a href="/daftarPjJurusan" class="btn btn-primary">Tidak</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
    {{-- Modal Stop --}}
<!-- Content stop -->
@endsection
