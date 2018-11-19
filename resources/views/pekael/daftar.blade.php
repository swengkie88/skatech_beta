@extends('layouts.app')
@section('title', 'Daftar')

@section('content')
<!-- Content start -->
<div class="container">
    <div class="wrapper">
    <!-- Section register -->
        <div class="box12">
            <section id="register">
                <h1>Formulir Pendaftaran</h1>
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{url('registerPost')}}" method="POST">
                    {{ csrf_field() }}
                    <input type="text" name="username" placeholder="Nama Pengguna">
                    <input type="password" name="password" placeholder="Kata Sandi">
                    <input type="password" name="confirmation" placeholder="Ulangi Kata Sandi">
                    <label for="">Daftar Sebagai</label>
                    <select name="akses" id="">
                        <option value="siswa">Siswa</option>
                        <option value="pj_jurusan">PJ Jurusan</option>
                        <option value="dudi">DU/DI</option>
                    </select>
                    <input type="submit" name="submit-daftar" value="Daftar Sekarang" class="btn btn-primary">
                </form>
                <div class="other-login text-center">
                    <p>Masuk dengan</p>
                    <br>
                    <a href="" class="btn btn-account btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                    <a href="" class="btn btn-account btn-gplus"><i class="fa fa-google-plus"></i> Google Plus</a>
                    <br>
                    <br>
                    <p><a href="/masuk">Sudah Punya Akun?</a></p>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- Content stop -->
@endsection