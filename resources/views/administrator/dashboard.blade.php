@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<!-- Content start -->
    <div class="container">
        <div class="fluid-wrapper">
        <!-- Section tentang -->
            <section class="dashboard-section">
                <div class="content-section">
                    <h1>Dashboard</h1>
                    <div class="box5">
                        <div class="card-dashboard siswa">
                            <i class="fa fa-user"></i>
                            <div class="card-dash-text">
                                <script>

                                </script>
                                <p>{{ $jmlSiswa }}</p>
                                <div class="clear"></div>
                                <span>
                                    Daftar Siswa
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="box5">
                        <div class="card-dashboard kelompok">
                            <i class="fa fa-group"></i>
                            <div class="card-dash-text">
                                <p>0</p>
                                <div class="clear"></div>
                                <span>
                                    Daftar Kelompok
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="box5">
                        <div class="card-dashboard jurusan">
                            <i class="fa fa-wrench"></i>
                            <div class="card-dash-text">
                                <p>{{$jmlJurusan}}</p>
                                <div class="clear"></div>
                                <span>
                                    Daftar Jurusan
                                </span>
                            </div>
                        </div>
                        </div>
                    <div class="box5">
                        <div class="card-dashboard pj-jurusan">
                            <i class="fa fa-user"></i>
                            <div class="card-dash-text">
                                <p>{{$jmlPj}}</p>
                                <div class="clear"></div>
                                <span>
                                    Daftar PJ  Jurusan
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="box5">
                        <div class="card-dashboard dudi">
                            <i class="fa fa-building"></i>
                            <div class="card-dash-text">
                                <p>{{$jmlDuDi}}</p>
                                <div class="clear"></div>
                                <span>
                                    Daftar DU/DI
                                </span>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
        </div>
    </div>

<!-- Content stop -->

@endsection
