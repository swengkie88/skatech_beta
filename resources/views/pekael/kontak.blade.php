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
                <div class="map"></div>
            </section>
        </div>
    </div>
</div>
@endsection

<!-- Content stop -->