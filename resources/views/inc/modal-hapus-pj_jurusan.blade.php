<?php if(isset($_GET['hapus-pj_jurusan'])){
    $id_pjJurusan = $_GET['hapus-pj_jurusan'];
 ?>
    <div id="modal-add">
        <div class="modal-container">       
            <div class="section-body">
                <p>
                    Apakah anda yakin ingin menghapus data ini?
                </p>
                <br>
                <form action="/daftarPjJurusan/{{$id_pjJurusan}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" title="Hapus PjJurusan ini?" class="btn btn-danger">Hapus</button>
                    <a href="/daftarPjJurusan" class="btn btn-primary">Tidak</a>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>