<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?= $subMenu['judul']; ?></h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Tabel <?= $subMenu['judul']; ?></h2>
            <div class="clearfix"></div>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
          </div>
          <a href="<?= base_url('artikel/tambah/'); ?>" class="btn btn-round btn-primary mb-3">Tambah Artikel</a>
          <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Gambar</th>
                  <th>Tanggal</th>
                  <th>Kategori</th>
                  <th>Isi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($artikel as $a) : ?>
                  <?php
                    if ($a['kategori'] == 1) {
                      $a['kategori'] = $kat1['nama_kategori'];
                    } else {
                      $a['kategori'] = $kat2['nama_kategori'];
                    }
                    ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $a['judul']; ?></td>
                    <td><img style="width: 150px;" src="<?= base_url('assets/images/artikel/') . $a['image']; ?>"></td>
                    <td><?= (new DateTime($a['tanggal']))->format('d F Y'); ?></td>
                    <td><?= $a['kategori']; ?></td>
                    <td><?= $a['isi']; ?></td>
                    <td>
                      <a href="" class="badge btn-round btn-success" data-toggle="modal" data-target="#editArtikelModal<?= $a['id']; ?>">edit</a>
                      <a href="<?= base_url('artikel/hapusArtikel/') . $a['id']; ?>" class="tombol-hapus badge btn-round btn-danger">delete</a>
                    </td>
                  </tr>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->