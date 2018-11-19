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
    @include('inc.modal-tambah-jurusan')
    @include('inc.modal-hapus-jurusan')
<!-- Content stop -->
@endsection
