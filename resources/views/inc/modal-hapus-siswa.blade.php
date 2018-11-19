<?php if(isset($_GET['hapus-siswa'])){
    $id_siswa = $_GET['hapus-siswa'];
 ?>
    <div id="modal-add">
        <div class="modal-container">       
            <div class="section-body">
                <p>
                    Apakah anda yakin ingin menghapus data ini?
                </p>
                <br>
                <form action="/daftarSiswa/{{$id_siswa}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" title="Hapus siswa ini?" class="btn btn-danger">Hapus</button>
                    <a href="/daftarSiswa" class="btn btn-primary">Tidak</a>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>