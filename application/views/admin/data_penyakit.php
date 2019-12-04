        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?= $subMenu['judul']; ?></h3>
              </div>

              <div class="title_right">
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
                  <a href="" class="btn btn-round btn-primary mb-3" data-toggle="modal" data-target="#newPenyakitModal">Tambah Penyakit</a>
                  <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode</th>
                          <th>Nama Penyakit</th>
                          <th>Informasi</th>
                          <th>Saran</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($penyakit as $p) : ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $p['kode']; ?></td>
                            <td><?= $p['nama_penyakit']; ?></td>
                            <td><?= $p['informasi']; ?></td>
                            <td><?= $p['saran']; ?></td>
                            <td>
                              <a href="" class="badge btn-round btn-success" data-toggle="modal" data-target="#editPenyakitModal<?= $p['id_penyakit']; ?>">edit</a>
                              <a href="<?= base_url('penyakit/hapusPenyakit/') . $p['id_penyakit']; ?>" class="tombol-hapus badge btn-round btn-danger">delete</a>
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