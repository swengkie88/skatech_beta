 <!-- Navigation bar start -->
 <nav>
    <div class="nav-wrapper">    
        <div class="navbar-brand">
        @if(!Session::get('username'))
            <a href="/" title="Kembali ke halaman utama?">PEKAEL</a>
        @else
            <a href="/beranda" title="Kembali ke halaman utama?">PEKAEL</a>
        @endif
        </div>
        {{-- Menu pas nggak login --}}
        @if(!Session::get('username'))
            <ul class="navbar left-nav">
                <li><a href="/" title="Beranda">Beranda</a></li>
                <li><a href="/kontak" title="Kontak">Kontak</a></li>
                <li><a href="/tentang_kami" title="Tentang Kami">Tentang Kami</a></li>
            </ul>
        {{-- Menu pas login --}}
        @else
            <ul class="navbar left-nav">
                <li><a href="/beranda" title="Dasbor Siswa">Dasbor Siswa</a></li>
                <li><a href="/daftar_dudi" title="Daftar DU/DI">Daftar DU/DI</a></li>
                <li><a href="/profil/{{Session::get('id')}}" title="Profil">Profil</a></li>
            </ul>
        @endif
        @if(!Session::get('username'))
        <ul class="navbar right-nav">
            <li id="menu-register"><a href="/daftar" title="">Daftar</a></li>
            <li id="menu-divider"><a>atau</a></li>
            <li id="menu-login"><a href="/masuk" title="" class="btn btn-primary">Masuk</a></li>
        </ul>
        @else
        <ul class="navbar right-nav">
            <li id="menu-divider"><a>Hai, {{Session::get('username')}}</a></li>
            <li id="menu-login">
                <a href="/logout" title="" class="btn btn-danger">Logout</a>
            </li>
           
        </ul>
        @endif
        
        <a id="btn-toggle-wrapper">
            <div id="btn-toggle" class="btn-toggle" onclick="openMenu()">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </a>
        <div id="menu-toggle">
            <a id="btn-toggle2-wrapper">  
            <!-- href="#close" -->
                <div id="btn-toggle2" onclick="closeMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
            <ul class="navbar nav-mobile">
                <li class="active"><a href="" title="Beranda">Beranda</a></li>
                <li><a href="" title="Kontak">Kontak</a></li>
                <li><a href="" title="Tentang Kami">Tentang Kami</a></li>
                <li>
                    <a class="btn btn-primary" onclick="">Masuk</a>
                    <a class="btn btn-primary" onclick="">Daftar</a>
                </li>
            </ul>
        </div>
        <div id="overlayMobile"></div>
    </div>
</nav>
<div class="paddingNav"></div>
<!-- Navigation bar stop -->