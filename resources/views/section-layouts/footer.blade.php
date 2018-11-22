<!-- Footer start -->
<footer>
    <div class="top">
        <div class="wrapper">
            <div class="box3">
                <h3>PEKAEL</h3>
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

var i = 1;
$('.progress .circle').removeClass().addClass('circle');
$('.progress .bar').removeClass().addClass('bar');
setInterval(function() {
  $('.progress .circle:nth-of-type(' + i + ')').addClass('active');
  
  $('.progress .circle:nth-of-type(' + (i-1) + ')').removeClass('active').addClass('done');
  
  $('.progress .circle:nth-of-type(' + (i-1) + ') .label').html('&#10003;');
  
  $('.progress .bar:nth-of-type(' + (i-1) + ')').addClass('active');
  
  $('.progress .bar:nth-of-type(' + (i-2) + ')').removeClass('active').addClass('done');
  
  i++;
  
  if (i==0) {
    $('.progress .bar').removeClass().addClass('bar');
    $('.progress div.circle').removeClass().addClass('circle');
    i = 1;
  }
}, 1000);

</script>
<!-- Javascript stop -->