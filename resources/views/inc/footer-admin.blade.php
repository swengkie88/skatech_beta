<!-- Footer start -->
<footer>
        <div class="copy">
            <div class="fluid-wrapper">
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