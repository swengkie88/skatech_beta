@extends('layouts.app')
@section('title', 'Masuk')

@section('content')
<!-- Content start -->
<div class="container">
    <div class="wrapper">
    <!-- Section login -->
        <div class="box12">
            <section id="register">
                <h1>Masuk ke akun Anda</h1>
                <form action="{{url('loginPost')}}" method="POST">
                    {{ csrf_field() }}
                    <label for="">Akses sebagai</label>
                    <select name="akses" id="">
                        <option value="">---</option>
                        <option value="siswa">Siswa</option>
                        <option value="pj_jurusan">PJ Jurusan</option>
                        <option value="dudi">DU/DI</option>
                    </select>
                    <input type="text" name="username" value="{{Session::get('username')}}" placeholder="Nama Pengguna">
                    <input type="password" name="password" placeholder="Kata Sandi">
                    <input type="submit" name="submit-masuk" value="Masuk" class="btn btn-primary">
                    <p class="right"><a href="">Lupa Kata Sandi Anda?</a></p>
                    <div class="clear"></div>
                </form>
                <div class="text-center">
                    <p>atau masuk menggunakan</p>
                    <br>
                    <a href="" class="btn btn-account btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                    <a href="" class="btn btn-account btn-gplus"><i class="fa fa-google-plus"></i> Google Plus</a>
                    <br>
                    <br>
                    <p><a href="{{url('daftar')}}">Buat akun baru?</a></p>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- Content stop -->
@endsection