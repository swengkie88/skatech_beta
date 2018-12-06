<!-- Footer start -->
<footer>
    <div class="top">
        <div class="wrapper">
            <div class="box3 text-center" style="
                    padding: 22px 0px 0px 0px;
                ">
                <img style="width: 70px;" src="{{asset('assets/icons/icon_apps.png')}}" alt="icon_mysipi">
                <h3 style="
                        font-size: 13pt;
                        font-weight: normal;
                ">Sistem Informasi<br> 
                    Praktik Industri</h3>
            </div>
            <div class="box3">
                <h3>Alamat</h3>
                <p>
                    Jl. AM. Sangaji No.47, Cokrodiningratan, Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55233
                </p>
            </div>
            <div class="box3">
                <h3>Kontak</h3>
                <ul>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Instagram</a></li>
                    <li><a href="">(+62) 838-6784-3497</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy">
        <div class="wrapper">
            <p> &copy; Hak Cipta <a href="" class="btn-link">Skatech.id</a> | Produksi 2018</p>
        </div>
    </div>
</footer>
<!-- Footer stop -->

<!-- Javascript start -->
<script>
function openMenu() {
    let mobileMenu = document.getElementById('menu-toggle');
    let overlayMenu = document.getElementById('overlayMobile');
     mobileMenu.style.top = '0%';
     mobileMenu.style.opacity = '1';
     overlayMenu.style.display = 'block';
}

function closeMenu(){
    let mobileMenu = document.getElementById('menu-toggle');
    let overlayMenu = document.getElementById('overlayMobile');
     mobileMenu.style.top = '-100%';
     mobileMenu.style.opacity = '0';
     overlayMenu.style.display = 'none';
}

</script>
<!-- Javascript stop -->