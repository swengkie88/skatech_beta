@extends('layouts.app')
@section('title', 'Buat Kelompok')

@section('content')
<!-- Content start -->
    <div class="container">
        <div class="wrapper">
        <!-- Section tentang -->
            
            <section id="buatKelompok" class="shadow">
                <div class="section-content">
                    <h3>Buat Kelompok</h3>
                    <form action="{{url('/buatKelompok_post')}}" method="POST">
                        <input type="hidden" name="id_jurusan" value="">
                        <input type="hidden" name="id_dudi" value="{{$bawaIdDuDi}}">
                        <input type="text" name="tahun" placeholder="Tahun Ajaran">
                        <input type="text" name="period" placeholder="Periode"> 
                        <input type="hidden" name="verify_by_pj" value="0">
                        <button type="submit">Tambahkan Kelompok</button>
                    </form>
                    <br>
                </div>
            </section>
        </div>
    </div>

<!-- Content stop -->
@endsection
