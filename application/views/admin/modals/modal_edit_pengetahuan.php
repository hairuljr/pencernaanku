<!-- Modal Edit -->
<?php foreach ($pengetahuan as $p) : ?>
  <div class="modal fade" id="editPengetahuanModal<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Edit Pengetahuan</h5>
        </div>
        <form action="<?= base_url('pengetahuan/editPengetahuan'); ?>" method="post">
          <input type="hidden" name="id" value="<?= $p['id']; ?>">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit" value="<?= $p['nama_penyakit']; ?>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="nama_gejala" name="nama_gejala" value="<?= $p['nama_gejala']; ?>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="param1" name="param1" value="<?= $p['param1']; ?>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="param2" name="param2" value="<?= $p['param2']; ?>">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-round btn-primary">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>