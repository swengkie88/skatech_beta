<?php if(isset($_GET['tambah-dudi'])){ ?>
    <div id="modal-add">
        <div class="modal-container">
            <div class="modal-close" onclick="window.location = '/daftarDuDi' ; return false;">
                <i class="fa fa-close"></i>
            </div>
            <div class="section-head">
                <h2>Tambahkan DU/DI</h2>
                <p class="info">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="section-body">
                <form method="POST" action="{{url('tambahDuDi')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-first">
                        <input type="text" name="username" placeholder="Nama Pengguna">
                        <input type="text" name="nama_perusahaan" placeholder="Nama Perusahaan">
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
                        <input type="hidden" name="alamat" value="null">
                        <input type="hidden" name="phone" value="123">
                        <input type="hidden" name="akses" value="dudi">
                        <br>
                        <button class="btn btn-block btn-success" type="submit">TAMBAHKAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>