<!-- Modal Edit -->
<?php foreach ($artikel as $a) : ?>
  <div class="modal fade" id="editArtikelModal<?= $a['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Edit Gejala</h5>
          <?= form_open_multipart('artikel/editArtikel'); ?>
        </div>
        <input type="hidden" name="id" value="<?= $a['id']; ?>">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="judul" name="judul" value="<?= $a['judul']; ?>">
          </div>
          <div class="col-sm-3">
            <img style="width: 150px; margin-bottom: 10px;" src="<?= base_url('assets/images/artikel/') . $a['image']; ?>" class="img-thumbnail">
          </div>
          <div class="input-group">
            <input type="file" class="form-control" id="image" name="image"><?= $a['image']; ?>
            <span class="input-group-btn">
              <p class="btn btn-info">Foto Artikel</p>
            </span>
          </div>
          <div class="form-group">
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= (new DateTime($a['tanggal']))->format('Y-m-d'); ?>">
          </div>
          <div class="form-group">
            <select class="form-control" name="kategori">
              <?php foreach ($artikel_kat as $kat) : ?>
                <option value="<?= $kat['id']; ?>">Kategori Sekarang = <?= $kat['nama_kategori']; ?></option>
                <option value="<?= $kat['id']; ?>"><?= $kat['nama_kategori']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <textarea name="isi" id="isi" class="resizable_textarea form-control" placeholder="Isi Artikel"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-round btn-primary">Edit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>