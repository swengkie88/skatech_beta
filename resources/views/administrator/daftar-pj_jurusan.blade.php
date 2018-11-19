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
    @include('inc.modal-tambah-pj_jurusan')
    @include('inc.modal-hapus-pj_jurusan')
<!-- Content stop -->
@endsection
