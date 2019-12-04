        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?= $subMenu['judul']; ?></h3>
              </div>
              <a href="" class="btn btn-round btn-primary mb-3 pull-right" data-toggle="modal" data-target="#newRuleModal">Tambah Rule</a>
              <div class="title_right">
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Rule Diare</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                  </div>
                  <!-- <a href="" class="btn btn-round btn-primary mb-3" data-toggle="modal" data-target="#newRuleModal">Tambah Rule</a> -->
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
                        <?php foreach ($diare as $d) : ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $d['nama_penyakit']; ?></td>
                            <td><?= $d['gejala']; ?></td>
                            <td><?= $d['probabilitas']; ?></td>
                            <td>
                              <a href="" class="badge btn-round btn-success" data-toggle="modal" data-target="#editRuleModal<?= $d['id']; ?>">edit</a>
                              <a href="<?= base_url('rule/hapusRule/') . $d['id']; ?>" class="tombol-hapus badge btn-round btn-danger">delete</a>
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
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Rule Disentri</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                  </div>
                  <!-- <a href="" class="btn btn-round btn-primary mb-3" data-toggle="modal" data-target="#newRuleModal">Tambah Rule</a> -->
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
                        <?php foreach ($disentri as $ds) : ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $ds['nama_penyakit']; ?></td>
                            <td><?= $ds['gejala']; ?></td>
                            <td><?= $ds['probabilitas']; ?></td>
                            <td>
                              <a href="" class="badge btn-round btn-success" data-toggle="modal" data-target="#editRuleModal<?= $ds['id']; ?>">edit</a>
                              <a href="<?= base_url('rule/hapusRule/') . $ds['id']; ?>" class="tombol-hapus badge btn-round btn-danger">delete</a>
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
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Rule Apendictis (Usus Buntu)</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                  </div>
                  <!-- <a href="" class="btn btn-round btn-primary mb-3" data-toggle="modal" data-target="#newRuleModal">Tambah Rule</a> -->
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
                        <?php foreach ($apendictis as $ap) : ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $ap['nama_penyakit']; ?></td>
                            <td><?= $ap['gejala']; ?></td>
                            <td><?= $ap['probabilitas']; ?></td>
                            <td>
                              <a href="" class="badge btn-round btn-success" data-toggle="modal" data-target="#editRuleModal<?= $ap['id']; ?>">edit</a>
                              <a href="<?= base_url('rule/hapusRule/') . $ap['id']; ?>" class="tombol-hapus badge btn-round btn-danger">delete</a>
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
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Rule Maag</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                  </div>
                  <!-- <a href="" class="btn btn-round btn-primary mb-3" data-toggle="modal" data-target="#newRuleModal">Tambah Rule</a> -->
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
                        <?php foreach ($maag as $m) : ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $m['nama_penyakit']; ?></td>
                            <td><?= $m['gejala']; ?></td>
                            <td><?= $m['probabilitas']; ?></td>
                            <td>
                              <a href="" class="badge btn-round btn-success" data-toggle="modal" data-target="#editRuleModal<?= $m['id']; ?>">edit</a>
                              <a href="<?= base_url('rule/hapusRule/') . $m['id']; ?>" class="tombol-hapus badge btn-round btn-danger">delete</a>
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
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Rule Keracunan Makanan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                  </div>
                  <!-- <a href="" class="btn btn-round btn-primary mb-3" data-toggle="modal" data-target="#newRuleModal">Tambah Rule</a> -->
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
                        <?php foreach ($keracunan as $k) : ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $k['nama_penyakit']; ?></td>
                            <td><?= $k['gejala']; ?></td>
                            <td><?= $k['probabilitas']; ?></td>
                            <td>
                              <a href="" class="badge btn-round btn-success" data-toggle="modal" data-target="#editRuleModal<?= $k['id']; ?>">edit</a>
                              <a href="<?= base_url('rule/hapusRule/') . $k['id']; ?>" class="tombol-hapus badge btn-round btn-danger">delete</a>
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