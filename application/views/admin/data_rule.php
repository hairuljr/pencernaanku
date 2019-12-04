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
                  <a href="" class="btn btn-round btn-primary mb-3" data-toggle="modal" data-target="#newRuleModal">Tambah Rule</a>
                  <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Penyakit</th>
                          <th>Gejala</th>
                          <th>Probabilitas</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($rule as $r) : ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $r['nama_penyakit']; ?></td>
                            <td><?= $r['gejala']; ?></td>
                            <td><?= $r['probabilitas']; ?></td>
                            <td>
                              <a href="" class="badge btn-round btn-success" data-toggle="modal" data-target="#editRuleModal<?= $r['id']; ?>">edit</a>
                              <a href="<?= base_url('rule/hapusRule/') . $r['id']; ?>" class="tombol-hapus badge btn-round btn-danger">delete</a>
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