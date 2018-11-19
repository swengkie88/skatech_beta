<?php if(isset($_GET['tambah-jurusan'])){ ?>
    <div id="modal-add">
        <div class="modal-container">
            <div class="modal-close" onclick="window.location = '/daftarJurusan'">
                <i class="fa fa-close"></i>
            </div>
            <div class="section-head">
                <h2>Tambahkan Jurusan</h2>
                <p class="info">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="section-body">
                <form method="POST" action="{{url('tambahJurusan')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-first">
                        <input type="text" name="jurusan" placeholder="Nama Jurusan">
                        <textarea name="deskripsi_jurusan" id="" cols="80" rows="2" placeholder="Deskripsi Jurusan"></textarea>
                        <br>
                        <br>
                        <button class="btn btn-block btn-success" type="submit">TAMBAHKAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>