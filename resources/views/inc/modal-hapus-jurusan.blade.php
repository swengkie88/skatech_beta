<?php if(isset($_GET['hapus-jurusan'])){
    $id_jurusan = $_GET['hapus-jurusan'];
 ?>
    <div id="modal-add">
        <div class="modal-container">       
            <div class="section-body">
                <p>
                    Apakah anda yakin ingin menghapus data ini?
                </p>
                <br>
                <form action="/daftarJurusan/{{$id_jurusan}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" title="Hapus post ini?" class="btn btn-danger">Hapus</button>
                    <a href="/daftarJurusan" class="btn btn-primary">Tidak</a>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>