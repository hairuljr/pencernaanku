<!-- Modal Tambah -->
<div class="modal fade" id="newRuleModal" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="apasih">Tambah Rule</h5>
      </div>
      <form action="<?= base_url('rule/tambahRule'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="nama_penyakit">
              <option>-- Nama Penyakit --</option>
              <?php foreach ($penyakit as $p) : ?>
                <option value="<?= $p['id_penyakit']; ?>"><?= $p['nama_penyakit']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="nama_gejala">
              <option>-- Gejala --</option>
              <?php foreach ($gejala as $g) : ?>
                <option value="<?= $g['id_gejala']; ?>"><?= $g['gejala']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="prob" name="prob" placeholder="Nilai Probabilitas">
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