<!-- Modal Tambah -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="apasih">Tambah Artikel</h5>
      </div>
      <?= form_open_multipart('artikel/tambahArtikel'); ?>
      <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Artikel">
        </div>
        <div class="input-group">
          <input type="file" class="form-control" id="image" name="image">
          <span class="input-group-btn">
            <p class="btn btn-info">Foto Artikel</p>
          </span>
        </div>
        <div class="form-group">
          <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>
        <div class="form-group">
          <select class="form-control" name="kategori">
            <option>~ Pilih Kategori ~</option>
            <?php foreach ($artikel_kat as $kat) : ?>
              <option value="<?= $kat['id']; ?>"><?= $kat['nama_kategori']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <textarea name="isi" id="isi" class="resizable_textarea form-control" placeholder="Isi Artikel"></textarea>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-round btn-primary">Tambah</button>
        </div>
        </form>
      </div>
    </div>
  </div>