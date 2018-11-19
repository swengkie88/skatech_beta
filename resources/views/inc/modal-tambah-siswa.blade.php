<?php if(isset($_GET['tambah-siswa'])){ ?>
    <div id="modal-add">
        <div class="modal-container">
            <div class="modal-close" onclick="window.location = '/daftarSiswa'">
                <i class="fa fa-close"></i>
            </div>
            <div class="section-head">
                <h2>Tambahkan Siswa</h2>
                <p class="info">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="section-body">
                <form method="POST" action="{{url('tambahSiswa')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-first">
                        <input type="text" name="username" placeholder="Nama Pengguna">
                        <input type="text" name="nama" placeholder="Nama Lengkap">
                        <input type="password" name="password" placeholder="Kata Sandi">
                        <label for="">Jurusan</label>
                        <select name="id_jurusan" id="">
                            <option value="1">Konstruksi Gedung, Sanitasi dan Perawatan</option>
                            <option value="2">Desain Permodelan dan Informasi Bangunan</option>
                            <option value="3">Teknik Instalasi Tenaga Listrik</option>
                            <option value="4">Teknik Permesinan</option>
                            <option value="5">Teknik Kendaraan Ringan Otomotif</option>
                            <option value="6">Teknik Geomatika</option>
                            <option value="7">Teknik Audio Video</option>
                            <option value="8">Teknik Komputer dan Jaringan</option>
                            <option value="9">Multimedia</option>
                        </select>
                        <label for="">Kelas</label>
                        <select name="kelas" id="">
                            <option value="XI KGSP">XI KGSP</option>
                            <option value="XI DPIB 1">XI DPIB 1</option>
                            <option value="XI DPIB 2">XI DPIB 2</option>
                            <option value="XI DPIB 3">XI DPIB 3</option>
                            <option value="XI TITL 1">XI TITL 1</option>
                            <option value="XI TITL 2">XI TITL 2</option>
                            <option value="XI TITL 3">XI TITL 3</option>
                            <option value="XI TITL 4">XI TITL 4</option>
                            <option value="XI TP 1">XI TP 1</option>
                            <option value="XI TP 2">XI TP 2</option>
                            <option value="XI TP 3">XI TP 3</option>
                            <option value="XI TP 4">XI TP 4</option>
                            <option value="XI TKRO 1">XI TKRO 1</option>
                            <option value="XI TKRO 2">XI TKRO 2</option>
                            <option value="XI TKRO 3">XI TKRO 3</option>
                            <option value="XI TKRO 4">XI TKRO 4</option>
                            <option value="XI GEOMATIKA">XI GEOMATIKA</option>
                            <option value="XI TAV 1">XI TAV 1</option>
                            <option value="XI TAV 2">XI TAV 2</option>
                            <option value="XI TKJ 1">XI TKJ 1</option>
                            <option value="XI TKJ 2">XI TKJ 2</option>
                            <option value="XI MM 1">XI MM 1</option>
                            <option value="XI MM 2">XI MM 2</option>
                        </select>
                        <input type="hidden" name="alamat" value="null">
                        <input type="hidden" name="phone" value="123">
                        <input type="hidden" name="akses" value="siswa">
                        <br>
                        <button class="btn btn-block btn-success" type="submit">TAMBAHKAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>