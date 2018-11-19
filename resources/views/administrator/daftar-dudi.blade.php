@extends('layouts.app')
@section('title', 'Daftar DU/DI')

@section('content')
<!-- Content start -->
    <div class="container">
        <div class="fluid-wrapper">
        <!-- Section Data Siswa -->
            <section class="dashboard-section">
                <div class="header-section">
                    <div class="left">
                        <h1>Daftar DU/DI</h1>
                    </div>
                    <div class="right">
                        <form action="" class="form-search">
                            <input type="search" name="search" id="" placeholder="Cari nama perusahaan...">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </form>
                        <button href="javascript:void(0)" onclick="window.location = '?tambah-dudi=1' " class="btn btn-success">Tambah</button>
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
                                <th>Nama Perusahaan</th>
                                <th>Alamat Kantor</th>
                                <th style="width: 140px;">No. Telepon</th>
                                <th colspan="2" class="text-center" style="width: 50px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($dudidudi as $dudi)
                            
                                <tr>
                                <td style="text-align: center;">
                                    <?php
                                        
                                        if($no < 10){
                                            echo "0".$no.".";
                                        }
                                        else{
                                            echo $no. ".";
                                        }
                                    
                                    ?>
                                </td>
                                <td><a href="" class="btn-link">{{$dudi->username}}</a></td>
                                <td>{{$dudi->nama_perusahaan}}</td>
                                <td>{{$dudi->alamat}}</td>
                                <td>{{$dudi->phone}}</td>
                                <td class="text-center"><a href="/suntingDuDi/{{$dudi->id}}/edit" class="btn btn-success">Edit</a></td>
                                <td class="text-center"><button onclick="window.location = '?hapus-dudi={{$dudi->id}}' " class="btn btn-danger">Hapus</button></td>
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
    @include('inc.modal-tambah-dudi')
    @include('inc.modal-hapus-dudi')
<!-- Content stop -->
@endsection
