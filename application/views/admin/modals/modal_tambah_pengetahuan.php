<!-- Modal Tambah -->
<div class="modal fade" id="newPengetahuanModal" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="apasih">Tambah Pengetahuan</h5>
      </div>
      <form action="<?= base_url('Pengetahuan/tambahPengetahuan'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit" placeholder="Nama Penyakit">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="nama_gejala" name="nama_gejala" placeholder="Nama Gejala">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="param1" name="param1" placeholder="Nilai Parameter 1">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="param2" name="param2" placeholder="Nilai Parameter 2">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-round btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>