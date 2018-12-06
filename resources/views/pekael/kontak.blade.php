@extends('layouts.app')
@section('title', 'Kontak')

@section('content')
<!-- Content start -->
<div class="container">
    <div class="wrapper">
    <!-- Section kontak -->
        <div class="box6">
            <section id="kontak">
                <h1>Kontak Kami</h1>
                <form action="" method="POST">
                    <input type="text" placeholder="Nama Anda">
                    <input type="email" placeholder="Alamat Surel Anda">
                    <textarea name="pesan" id="" cols="30" rows="3" placeholder="Pesan Anda"></textarea>
                    <input type="submit" value="Kirimkan Pesan" class="btn btn-primary">
                </form>
            </section>
        </div>
        <div class="box6">
            <section id="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.119696233555!2d110.36517081432629!3d-7.777130979311855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58373fffffff%3A0xa4ec1ca156555926!2sSMK+Negeri+2+Yogyakarta!5e0!3m2!1sid!2sid!4v1543999432612" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>
        </div>
    </div>
</div>
@endsection

<!-- Content stop -->