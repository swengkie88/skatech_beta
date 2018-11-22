 <!-- Navigation bar start -->
 <nav class="navbar-admin">
        <div class="nav-wrapper-admin">    
            <div class="navbar-brand admin">
            @if(!Session::get('username'))
                <a href="/" title="Kembali ke halaman utama?">PEKAEL</a>
            @else
                <a href="/beranda" title="Kembali ke halaman utama?">PEKAEL</a>
            @endif
            </div>
                <ul class="navbar">
                    <li><i class="fa fa-tachometer"></i><a href="/dashboard" title="Dashboard">Dashboard</a></li>
                    <li><i class="fa fa-user"></i><a href="/daftarSiswa" title="Daftar Siswa">Daftar Siswa</a></li>
                    <li><i class="fa fa-group"></i><a href="/daftarKelompok" title="Daftar Kelompok">Daftar Kelompok</a></li>
                    <li><i class="fa fa-wrench"></i><a href="/daftarJurusan" title="Daftar Jurusan">Daftar Jurusan</a></li>
                    <li><i class="fa fa-user"></i><a href="/daftarPjJurusan" title="Daftar Pj Jurusan">Daftar Pj Jurusan</a></li>
                    <li><i class="fa fa-building"></i><a href="/daftarDuDi" title="Daftar DU/DI">Daftar DU/DI</a></li>
                </ul>

        </div>
    </nav>
    
    <!-- Navigation bar stop -->