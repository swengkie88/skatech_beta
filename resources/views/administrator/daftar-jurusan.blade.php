@extends('layouts.app')
@section('title', 'Daftar Jurusan')

@section('content')
<!-- Content start -->
    <div class="container">
        <div class="fluid-wrapper">
        <!-- Section Data Siswa -->
            <section class="dashboard-section">
                <div class="header-section">
                    <div class="left">
                        <h1>Daftar Jurusan</h1>
                    </div>
                    <div class="right">
                        <form action="" class="form-search">
                            <input type="search" name="search" id="" placeholder="Cari nama jurusan...">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </form>
                        <button class="btn btn-success" onclick="window.location = '?tambah-jurusan=1' ">Tambah</button>
                    </div>
                </div>
                <div class="content-section">
                    <p class="info">NB: Klik nama pengguna untuk melihat data selengkapnya.</p>
                    <br>
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 30px; text-align: center;">No.</th>
                                <th style="width: 300px;">Nama Jurusan</th>
                                <th style="width: 300px;">Deskripsi</th>
                                <th colspan="2" class="text-center" style="width: 50px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($jurusans as $jurusan)
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
                                <td><a href="" class="btn-link">{{$jurusan->jurusan}}</a></td>
                                <td>{{$jurusan->deskripsi}}</td>
                                <td class="text-center"><a href="/suntingJurusan/{{$jurusan->id}}/edit"  class="btn btn-success">Edit</a></td>
                                <td class="text-center"><button onclick="window.location = '?hapus-jurusan={{$jurusan->id}}' " class="btn btn-danger">Hapus</a></td>
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

    {{-- Modal tambah jurusan --}}
    <?php if(isset($_GET['tambah-jurusan'])){ ?>
        <div id="modal-add">
            <div class="modal-container">
                <div class="modal-close" onclick="window.location = '/daftarJurusan'">
                    <i class="fa fa-close"></i>
                </div>
                <div class="section-head">
                    <h2>Tambahkan Jurusan</h2>
                    <p class="info">Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="section-body">
                    <form method="POST" action="{{url('tambahJurusan')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-first">
                            <input type="text" name="jurusan" placeholder="Nama Jurusan">
                            <textarea name="deskripsi_jurusan" id="" cols="80" rows="2" placeholder="Deskripsi Jurusan"></textarea>
                            <br>
                            <br>
                            <button class="btn btn-block btn-success" type="submit">TAMBAHKAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>
        {{-- Modal Konfirmasi Hapus --}}
        <?php if(isset($_GET['hapus-jurusan'])){
            $id_jurusan = $_GET['hapus-jurusan'];
         ?>
            <div id="modal-add">
                <div class="modal-container">       
                    <div class="section-body">
                        <p>
                            Apakah anda yakin ingin menghapus data ini?
                        </p>
                        <br>
                        <form action="/daftarJurusan/{{$id_jurusan}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <div class="text-center">
                                <button type="submit" title="Hapus post ini?" class="btn btn-danger">Hapus</button>
                                <a href="/daftarJurusan" class="btn btn-primary">Tidak</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        {{-- Modal Stop --}}

<!-- Content stop -->
@endsection
